<?php declare(strict_types=1);
/**
 * ownCloud
 *
 * @author Viktor Scharf <vscharf@owncloud.com>
 * @copyright Copyright (c) 2023 Viktor Scharf vscharf@owncloud.com
 */

use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use TestHelpers\OcsApiHelper;
use Behat\Gherkin\Node\PyStringNode;
use Helmich\JsonAssert\JsonAssertions;
use TestHelpers\EmailHelper;
use PHPUnit\Framework\Assert;
use TestHelpers\GraphHelper;

require_once 'bootstrap.php';

/**
 * Defines application features from the specific context.
 */
class NotificationContext implements Context {
	private FeatureContext $featureContext;
	private SpacesContext $spacesContext;
	private SettingsContext $settingsContext;
	private string $notificationEndpointPath = '/apps/notifications/api/v1/notifications?format=json';

	private array $notificationIds;

	/**
	 * @return array[]
	 */
	public function getNotificationIds():array {
		return $this->notificationIds;
	}

	/**
	 * @return array[]
	 */
	public function getLastNotificationId():array {
		return \end($this->notificationIds);
	}

	/**
	 * @var string
	 */
	private string $userRecipient;

	/**
	 * @param string $userRecipient
	 *
	 * @return void
	 */
	public function setUserRecipient(string $userRecipient): void {
		$this->userRecipient = $userRecipient;
	}

	/**
	 * @return string
	 */
	public function getUserRecipient(): string {
		return $this->userRecipient;
	}

	/**
	 * @BeforeScenario
	 *
	 * @param BeforeScenarioScope $scope
	 *
	 * @return void
	 * @throws Exception
	 */
	public function setUpScenario(BeforeScenarioScope $scope):void {
		// Get the environment
		$environment = $scope->getEnvironment();
		// Get all the contexts you need in this context
		$this->featureContext = $environment->getContext('FeatureContext');
		$this->spacesContext = $environment->getContext('SpacesContext');
		$this->settingsContext = $environment->getContext('SettingsContext');
	}

	/**
	 * @Then /^user "([^"]*)" lists all notifications$/
	 *
	 * @param string $user
	 *
	 * @return void
	 */
	public function userListAllNotifications(string $user):void {
		$this->setUserRecipient($user);
		$headers = ["accept-language" => $this->settingsContext->getSettingLanguageValue($user)];
		$response = OcsApiHelper::sendRequest(
			$this->featureContext->getBaseUrl(),
			$this->featureContext->getActualUsername($user),
			$this->featureContext->getPasswordForUser($user),
			'GET',
			$this->notificationEndpointPath,
			$this->featureContext->getStepLineRef(),
			[],
			2,
			$headers
		);
		$this->featureContext->setResponse($response);
	}

	/**
	 * @Then /^the JSON response should contain a notification message with the subject "([^"]*)" and the message-details should match$/
	 *
	 * @param string $subject
	 * @param PyStringNode $schemaString
	 *
	 * @return void
	 * @throws Exception
	 */
	public function theJsonDataFromLastResponseShouldMatch(
		string $subject,
		PyStringNode $schemaString
	): void {
		if (isset($this->featureContext->getJsonDecodedResponseBodyContent()->ocs->data)) {
			$responseBody = $this->featureContext->getJsonDecodedResponseBodyContent()->ocs->data;
			foreach ($responseBody as $value) {
				if (isset($value->subject) && $value->subject === $subject) {
					$responseBody = $value;
					// set notificationId
					$this->notificationIds[] = $value->notification_id;
					break;
				}
			}
		} else {
			$responseBody = $this->featureContext->getJsonDecodedResponseBodyContent();
		}

		// substitute the value here
		$schemaString = $schemaString->getRaw();
		$schemaString = $this->featureContext->substituteInLineCodes(
			$schemaString,
			$this->featureContext->getCurrentUser(),
			[],
			[],
			null,
			$this->getUserRecipient(),
		);
		JsonAssertions::assertJsonDocumentMatchesSchema(
			$responseBody,
			$this->featureContext->getJSONSchema($schemaString)
		);
	}

	/**
	 * @Then user :user should have received the following email from user :sender about the share of project space :spaceName
	 *
	 * @param string $user
	 * @param string $sender
	 * @param string $spaceName
	 * @param PyStringNode $content
	 *
	 * @return void
	 * @throws Exception
	 */
	public function userShouldHaveReceivedTheFollowingEmailFromUserAboutTheShareOfProjectSpace(string $user, string $sender, string $spaceName, PyStringNode $content):void {
		$rawExpectedEmailBodyContent = \str_replace("\r\n", "\n", $content->getRaw());
		$this->featureContext->setResponse(
			GraphHelper::getMySpaces(
				$this->featureContext->getBaseUrl(),
				$user,
				$this->featureContext->getPasswordForUser($user)
			)
		);
		$expectedEmailBodyContent = $this->featureContext->substituteInLineCodes(
			$rawExpectedEmailBodyContent,
			$sender,
			[],
			[
				[
					"code" => "%space_id%",
					"function" =>
						[$this->spacesContext, "getSpaceIdByNameFromResponse"],
					"parameter" => [$spaceName]
				],
			],
			null,
			null
		);
		$this->assertEmailContains($user, $expectedEmailBodyContent);
	}

	/**
	 * @Then user :user should have received the following email from user :sender
	 *
	 * @param string $user
	 * @param string $sender
	 * @param PyStringNode $content
	 *
	 * @return void
	 * @throws Exception
	 */
	public function userShouldHaveReceivedTheFollowingEmailFromUser(string $user, string $sender, PyStringNode $content):void {
		$rawExpectedEmailBodyContent = \str_replace("\r\n", "\n", $content->getRaw());
		$expectedEmailBodyContent = $this->featureContext->substituteInLineCodes(
			$rawExpectedEmailBodyContent,
			$sender
		);
		$this->assertEmailContains($user, $expectedEmailBodyContent);
	}

	/***
	 * @param string $user
	 * @param string $expectedEmailBodyContent
	 *
	 * @return void
	 * @throws GuzzleException
	 */
	public function assertEmailContains(string $user, string $expectedEmailBodyContent):void {
		$address = $this->featureContext->getEmailAddressForUser($user);
		$this->featureContext->pushEmailRecipientAsMailBox($address);
		$actualEmailBodyContent = EmailHelper::getBodyOfLastEmail($address, $this->featureContext->getStepLineRef());
		Assert::assertStringContainsString(
			$expectedEmailBodyContent,
			$actualEmailBodyContent,
			"The email address '$address' should have received an email with the body containing $expectedEmailBodyContent
			but the received email is $actualEmailBodyContent"
		);
	}

	/**
	 * Delete all the inbucket emails
	 *
	 * @AfterScenario @email
	 *
	 * @return void
	 */
	public function clearInbucketMessages():void {
		try {
			if (!empty($this->featureContext->emailRecipients)) {
				foreach ($this->featureContext->emailRecipients as $emailRecipent) {
					EmailHelper::deleteAllEmailsForAMailbox(
						EmailHelper::getLocalEmailUrl(),
						$this->featureContext->getStepLineRef(),
						$emailRecipent
					);
				}
			}
		} catch (Exception $e) {
			echo __METHOD__ .
				" could not delete inbucket messages, is inbucket set up?\n" .
				$e->getMessage();
		}
	}
}
