```json
{
    "id": "c59e5222-f0b8-4169-a7a2-0cb6bfed8d33",
    "realm": "ocis",
    "notBefore": 0,
    "defaultSignatureAlgorithm": "RS256",
    "revokeRefreshToken": false,
    "refreshTokenMaxReuse": 0,
    "accessTokenLifespan": 300,
    "accessTokenLifespanForImplicitFlow": 900,
    "ssoSessionIdleTimeout": 1800,
    "ssoSessionMaxLifespan": 36000,
    "ssoSessionIdleTimeoutRememberMe": 0,
    "ssoSessionMaxLifespanRememberMe": 0,
    "offlineSessionIdleTimeout": 2592000,
    "offlineSessionMaxLifespanEnabled": false,
    "offlineSessionMaxLifespan": 5184000,
    "clientSessionIdleTimeout": 0,
    "clientSessionMaxLifespan": 0,
    "clientOfflineSessionIdleTimeout": 0,
    "clientOfflineSessionMaxLifespan": 0,
    "accessCodeLifespan": 60,
    "accessCodeLifespanUserAction": 300,
    "accessCodeLifespanLogin": 1800,
    "actionTokenGeneratedByAdminLifespan": 43200,
    "actionTokenGeneratedByUserLifespan": 300,
    "oauth2DeviceCodeLifespan": 600,
    "oauth2DevicePollingInterval": 5,
    "enabled": true,
    "sslRequired": "external",
    "registrationAllowed": false,
    "registrationEmailAsUsername": false,
    "rememberMe": false,
    "verifyEmail": false,
    "loginWithEmailAllowed": true,
    "duplicateEmailsAllowed": false,
    "resetPasswordAllowed": false,
    "editUsernameAllowed": false,
    "bruteForceProtected": false,
    "permanentLockout": false,
    "maxFailureWaitSeconds": 900,
    "minimumQuickLoginWaitSeconds": 60,
    "waitIncrementSeconds": 60,
    "quickLoginCheckMilliSeconds": 1000,
    "maxDeltaTimeSeconds": 43200,
    "failureFactor": 30,
    "defaultRole": {
        "id": "66d42d82-e003-4dca-931d-ac25fe27fcdc",
        "name": "default-roles-ocis",
        "description": "${role_default-roles}",
        "composite": true,
        "clientRole": false,
        "containerId": "c59e5222-f0b8-4169-a7a2-0cb6bfed8d33"
    },
    "requiredCredentials": [
        "password"
    ],
    "otpPolicyType": "totp",
    "otpPolicyAlgorithm": "HmacSHA1",
    "otpPolicyInitialCounter": 0,
    "otpPolicyDigits": 6,
    "otpPolicyLookAheadWindow": 1,
    "otpPolicyPeriod": 30,
    "otpPolicyCodeReusable": false,
    "otpSupportedApplications": [
        "totpAppMicrosoftAuthenticatorName",
        "totpAppFreeOTPName",
        "totpAppGoogleName"
    ],
    "webAuthnPolicyRpEntityName": "keycloak",
    "webAuthnPolicySignatureAlgorithms": [
        "ES256"
    ],
    "webAuthnPolicyRpId": "",
    "webAuthnPolicyAttestationConveyancePreference": "not specified",
    "webAuthnPolicyAuthenticatorAttachment": "not specified",
    "webAuthnPolicyRequireResidentKey": "not specified",
    "webAuthnPolicyUserVerificationRequirement": "not specified",
    "webAuthnPolicyCreateTimeout": 0,
    "webAuthnPolicyAvoidSameAuthenticatorRegister": false,
    "webAuthnPolicyAcceptableAaguids": [],
    "webAuthnPolicyPasswordlessRpEntityName": "keycloak",
    "webAuthnPolicyPasswordlessSignatureAlgorithms": [
        "ES256"
    ],
    "webAuthnPolicyPasswordlessRpId": "",
    "webAuthnPolicyPasswordlessAttestationConveyancePreference": "not specified",
    "webAuthnPolicyPasswordlessAuthenticatorAttachment": "not specified",
    "webAuthnPolicyPasswordlessRequireResidentKey": "not specified",
    "webAuthnPolicyPasswordlessUserVerificationRequirement": "not specified",
    "webAuthnPolicyPasswordlessCreateTimeout": 0,
    "webAuthnPolicyPasswordlessAvoidSameAuthenticatorRegister": false,
    "webAuthnPolicyPasswordlessAcceptableAaguids": [],
    "users": [
        {
            "id": "e0870932-8c08-4df8-9c99-55e6f9eb27f0",
            "createdTimestamp": 1678881089841,
            "username": "service-account-invitations",
            "enabled": true,
            "totp": false,
            "emailVerified": false,
            "serviceAccountClientId": "invitations",
            "disableableCredentialTypes": [],
            "requiredActions": [],
            "notBefore": 0
        }
    ],
    "scopeMappings": [
        {
            "clientScope": "offline_access",
            "roles": [
                "offline_access"
            ]
        }
    ],
    "clientScopeMappings": {
        "account": [
            {
                "client": "account-console",
                "roles": [
                    "manage-account",
                    "view-groups"
                ]
            }
        ]
    },
    "clients": [
        {
            "id": "c4447d13-f42d-4858-811f-023280f2f2b5",
            "clientId": "account",
            "name": "${client_account}",
            "rootUrl": "${authBaseUrl}",
            "baseUrl": "/realms/ocis/account/",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [
                "/realms/ocis/account/*"
            ],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": false,
            "publicClient": true,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "9827c771-69e3-4e4e-ac32-2d16ee6fafc5",
            "clientId": "account-console",
            "name": "${client_account-console}",
            "rootUrl": "${authBaseUrl}",
            "baseUrl": "/realms/ocis/account/",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [
                "/realms/ocis/account/*"
            ],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": false,
            "publicClient": true,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+",
                "pkce.code.challenge.method": "S256"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "protocolMappers": [
                {
                    "id": "b13437ed-51b0-4d24-9777-6845471596a1",
                    "name": "audience resolve",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-audience-resolve-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "9714e24e-528e-4f4e-b862-7944a8507957",
            "clientId": "admin-cli",
            "name": "${client_admin-cli}",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": false,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": true,
            "serviceAccountsEnabled": false,
            "publicClient": true,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "4e9b7008-c7dc-4ea4-afbe-888838ca45d2",
            "clientId": "invitations",
            "name": "Invitations service user",
            "description": "This client adds guest users and invites them.",
            "rootUrl": "http://localhost:12345",
            "adminUrl": "http://localhost:12345",
            "baseUrl": "http://localhost:12345",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "secret": "**********",
            "redirectUris": [
                "http://localhost:6666"
            ],
            "webOrigins": [
                "+"
            ],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": false,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": true,
            "authorizationServicesEnabled": true,
            "publicClient": false,
            "frontchannelLogout": true,
            "protocol": "openid-connect",
            "attributes": {
                "oidc.ciba.grant.enabled": "false",
                "client.secret.creation.time": "1678873450",
                "backchannel.logout.session.required": "true",
                "post.logout.redirect.uris": "http://localhost:12345",
                "oauth2.device.authorization.grant.enabled": "false",
                "display.on.consent.screen": "false",
                "backchannel.logout.revoke.offline.tokens": "false"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": true,
            "nodeReRegistrationTimeout": -1,
            "protocolMappers": [
                {
                    "id": "c496a0cf-b74a-47e0-836b-1075e23eba5b",
                    "name": "Client Host",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usersessionmodel-note-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.session.note": "clientHost",
                        "userinfo.token.claim": "true",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "clientHost",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "b7a89ea7-ff7e-429d-997e-c10d007d363d",
                    "name": "Client ID",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usersessionmodel-note-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.session.note": "clientId",
                        "userinfo.token.claim": "true",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "clientId",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "c6ebe69a-35ba-4612-b593-ada6969ff202",
                    "name": "Client IP Address",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usersessionmodel-note-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.session.note": "clientAddress",
                        "userinfo.token.claim": "true",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "clientAddress",
                        "jsonType.label": "String"
                    }
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "owncloud",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ],
            "authorizationSettings": {
                "allowRemoteResourceManagement": true,
                "policyEnforcementMode": "ENFORCING",
                "resources": [
                    {
                        "name": "Default Resource",
                        "type": "urn:invitations:resources:default",
                        "ownerManagedAccess": false,
                        "attributes": {},
                        "_id": "e5f99f4e-2bcc-4487-bbff-2b8e158de28c",
                        "uris": [
                            "/*"
                        ]
                    }
                ],
                "policies": [
                    {
                        "id": "5a3fbf5f-ec99-4d03-8665-029c593ccc34",
                        "name": "Default Policy",
                        "description": "A policy that grants access only for users within this realm",
                        "type": "js",
                        "logic": "POSITIVE",
                        "decisionStrategy": "AFFIRMATIVE",
                        "config": {
                            "code": "// by default, grants any permission associated with this policy\n$evaluation.grant();\n"
                        }
                    },
                    {
                        "id": "b15e781c-6967-4577-9c75-4a68659d1d12",
                        "name": "Default Permission",
                        "description": "A permission that applies to the default resource type",
                        "type": "resource",
                        "logic": "POSITIVE",
                        "decisionStrategy": "UNANIMOUS",
                        "config": {
                            "defaultResourceType": "urn:invitations:resources:default",
                            "applyPolicies": "[\"Default Policy\"]"
                        }
                    }
                ],
                "scopes": [],
                "decisionStrategy": "UNANIMOUS"
            }
        },
        {
            "id": "d7791f84-00f0-4d38-bf94-85c8cc5919bb",
            "clientId": "broker",
            "name": "${client_broker}",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": true,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": false,
            "publicClient": false,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "c3adac0c-94b5-46ee-a851-5274be719ab6",
            "clientId": "e4rAsNUSIUs0lF4nbv9FmCeUkTlV9GdgTLDH1b5uie7syb90SzEVrbN7HIpmWJeD",
            "name": "ownCloud Android app",
            "description": "",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "secret": "**********",
            "redirectUris": [
                "oc://android.owncloud.com"
            ],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": true,
            "serviceAccountsEnabled": false,
            "publicClient": false,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "access.token.lifespan": "172800",
                "saml.force.post.binding": "false",
                "saml.multivalued.roles": "false",
                "post.logout.redirect.uris": "+",
                "oauth2.device.authorization.grant.enabled": "false",
                "backchannel.logout.revoke.offline.tokens": "false",
                "saml.server.signature.keyinfo.ext": "false",
                "use.refresh.tokens": "true",
                "oidc.ciba.grant.enabled": "false",
                "backchannel.logout.session.required": "true",
                "client_credentials.use_refresh_token": "false",
                "saml.client.signature": "false",
                "require.pushed.authorization.requests": "false",
                "saml.assertion.signature": "false",
                "id.token.as.detached.signature": "false",
                "saml.encrypt": "false",
                "saml.server.signature": "false",
                "exclude.session.state.from.auth.response": "false",
                "saml.artifact.binding": "false",
                "saml_force_name_id_format": "false",
                "tls.client.certificate.bound.access.tokens": "false",
                "acr.loa.map": "{}",
                "saml.authnstatement": "false",
                "display.on.consent.screen": "false",
                "token.response.type.bearer.lower-case": "false",
                "saml.onetimeuse.condition": "false"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": true,
            "nodeReRegistrationTimeout": -1,
            "protocolMappers": [
                {
                    "id": "8805778f-4a76-4cd3-bc27-2478a242bb32",
                    "name": "docker-v2-allow-all-mapper",
                    "protocol": "docker-v2",
                    "protocolMapper": "docker-v2-allow-all-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "profile",
                "roles",
                "owncloud",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "72b2cef0-6c24-424e-9204-03aef6e6f520",
            "clientId": "mxd5OQDk6es5LzOzRvidJNfXLUZS2oN3oUFeXPP8LpPrhx3UroJFduGEYIBOxkY1",
            "name": "ownCloud iOS app",
            "description": "",
            "rootUrl": "",
            "adminUrl": "",
            "baseUrl": "",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "secret": "**********",
            "redirectUris": [
                "oc://ios.owncloud.com",
                "oc.ios://ios.owncloud.com"
            ],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": true,
            "serviceAccountsEnabled": false,
            "publicClient": false,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "access.token.lifespan": "172800",
                "saml.force.post.binding": "false",
                "saml.multivalued.roles": "false",
                "post.logout.redirect.uris": "+",
                "oauth2.device.authorization.grant.enabled": "false",
                "backchannel.logout.revoke.offline.tokens": "false",
                "saml.server.signature.keyinfo.ext": "false",
                "use.refresh.tokens": "true",
                "oidc.ciba.grant.enabled": "false",
                "backchannel.logout.session.required": "true",
                "client_credentials.use_refresh_token": "false",
                "require.pushed.authorization.requests": "false",
                "saml.client.signature": "false",
                "id.token.as.detached.signature": "false",
                "saml.assertion.signature": "false",
                "saml.encrypt": "false",
                "saml.server.signature": "false",
                "exclude.session.state.from.auth.response": "false",
                "saml.artifact.binding": "false",
                "saml_force_name_id_format": "false",
                "acr.loa.map": "{}",
                "tls.client.certificate.bound.access.tokens": "false",
                "saml.authnstatement": "false",
                "display.on.consent.screen": "false",
                "token.response.type.bearer.lower-case": "false",
                "saml.onetimeuse.condition": "false"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": true,
            "nodeReRegistrationTimeout": -1,
            "protocolMappers": [
                {
                    "id": "ff685ede-9233-43c1-b483-c2073c007e10",
                    "name": "docker-v2-allow-all-mapper",
                    "protocol": "docker-v2",
                    "protocolMapper": "docker-v2-allow-all-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "profile",
                "roles",
                "owncloud",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "3e69e24d-35bf-43f6-adb7-0ac9b07a1137",
            "clientId": "realm-management",
            "name": "${client_realm-management}",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": true,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": false,
            "publicClient": false,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "27ef9ce4-2cd8-470c-99c4-907a3ffea580",
            "clientId": "security-admin-console",
            "name": "${client_security-admin-console}",
            "rootUrl": "${authAdminUrl}",
            "baseUrl": "/admin/ocis/console/",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [
                "/admin/ocis/console/*"
            ],
            "webOrigins": [
                "+"
            ],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": false,
            "serviceAccountsEnabled": false,
            "publicClient": true,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "post.logout.redirect.uris": "+",
                "pkce.code.challenge.method": "S256"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": false,
            "nodeReRegistrationTimeout": 0,
            "protocolMappers": [
                {
                    "id": "b1570757-70b6-4dba-93ba-2b85c4cddd50",
                    "name": "locale",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "locale",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "locale",
                        "jsonType.label": "String"
                    }
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "06dc1405-3631-4714-b4b1-19580e7c0465",
            "clientId": "web",
            "name": "ownCloud Web",
            "description": "",
            "rootUrl": "https://ocis.schule.owncloud.works",
            "adminUrl": "https://ocis.schule.owncloud.works",
            "baseUrl": "https://ocis.schule.owncloud.works",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "redirectUris": [
                "https://ocis.schule.owncloud.works/*"
            ],
            "webOrigins": [
                "+"
            ],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": true,
            "serviceAccountsEnabled": false,
            "publicClient": true,
            "frontchannelLogout": true,
            "protocol": "openid-connect",
            "attributes": {
                "oidc.ciba.grant.enabled": "false",
                "post.logout.redirect.uris": "https://ocis.schule.owncloud.works/*",
                "oauth2.device.authorization.grant.enabled": "false",
                "backchannel.logout.session.required": "true",
                "backchannel.logout.revoke.offline.tokens": "false"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": true,
            "nodeReRegistrationTimeout": -1,
            "defaultClientScopes": [
                "web-origins",
                "acr",
                "profile",
                "roles",
                "owncloud",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        },
        {
            "id": "dba27084-63ad-4718-8195-a2abd9cebe2e",
            "clientId": "xdXOt13JKxym1B1QcEncf2XDkLAexMBFwiT9j6EfhhHFJhs2KM9jbjTmf8JBXE69",
            "name": "ownCloud desktop client",
            "description": "",
            "rootUrl": "",
            "adminUrl": "",
            "baseUrl": "",
            "surrogateAuthRequired": false,
            "enabled": true,
            "alwaysDisplayInConsole": false,
            "clientAuthenticatorType": "client-secret",
            "secret": "**********",
            "redirectUris": [
                "http://127.0.0.1:*",
                "http://localhost:*"
            ],
            "webOrigins": [],
            "notBefore": 0,
            "bearerOnly": false,
            "consentRequired": false,
            "standardFlowEnabled": true,
            "implicitFlowEnabled": false,
            "directAccessGrantsEnabled": true,
            "serviceAccountsEnabled": false,
            "publicClient": false,
            "frontchannelLogout": false,
            "protocol": "openid-connect",
            "attributes": {
                "access.token.lifespan": "172800",
                "saml.force.post.binding": "false",
                "saml.multivalued.roles": "false",
                "post.logout.redirect.uris": "+",
                "oauth2.device.authorization.grant.enabled": "false",
                "backchannel.logout.revoke.offline.tokens": "false",
                "saml.server.signature.keyinfo.ext": "false",
                "use.refresh.tokens": "true",
                "oidc.ciba.grant.enabled": "false",
                "backchannel.logout.session.required": "true",
                "client_credentials.use_refresh_token": "false",
                "require.pushed.authorization.requests": "false",
                "saml.client.signature": "false",
                "saml.assertion.signature": "false",
                "id.token.as.detached.signature": "false",
                "saml.encrypt": "false",
                "saml.server.signature": "false",
                "exclude.session.state.from.auth.response": "false",
                "saml.artifact.binding": "false",
                "saml_force_name_id_format": "false",
                "acr.loa.map": "{}",
                "tls.client.certificate.bound.access.tokens": "false",
                "saml.authnstatement": "false",
                "display.on.consent.screen": "false",
                "token.response.type.bearer.lower-case": "false",
                "saml.onetimeuse.condition": "false"
            },
            "authenticationFlowBindingOverrides": {},
            "fullScopeAllowed": true,
            "nodeReRegistrationTimeout": -1,
            "protocolMappers": [
                {
                    "id": "f8d79122-582e-440b-bed9-82ff102848e1",
                    "name": "docker-v2-allow-all-mapper",
                    "protocol": "docker-v2",
                    "protocolMapper": "docker-v2-allow-all-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ],
            "defaultClientScopes": [
                "web-origins",
                "profile",
                "roles",
                "owncloud",
                "email"
            ],
            "optionalClientScopes": [
                "address",
                "phone",
                "offline_access",
                "microprofile-jwt"
            ]
        }
    ],
    "clientScopes": [
        {
            "id": "b71c1814-9e82-4215-8a96-88c4a11033c7",
            "name": "role_list",
            "description": "SAML role list",
            "protocol": "saml",
            "attributes": {
                "consent.screen.text": "${samlRoleListScopeConsentText}",
                "display.on.consent.screen": "true"
            },
            "protocolMappers": [
                {
                    "id": "d6641c52-2be8-46bc-9da0-81b78083527f",
                    "name": "role list",
                    "protocol": "saml",
                    "protocolMapper": "saml-role-list-mapper",
                    "consentRequired": false,
                    "config": {
                        "single": "false",
                        "attribute.nameformat": "Basic",
                        "attribute.name": "Role"
                    }
                }
            ]
        },
        {
            "id": "d7810400-9ce6-474b-bbd5-f35962a0a4e4",
            "name": "phone",
            "description": "OpenID Connect built-in scope: phone",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "true",
                "consent.screen.text": "${phoneScopeConsentText}"
            },
            "protocolMappers": [
                {
                    "id": "1c0f1144-8f1e-4cf3-be76-4996ce481a3d",
                    "name": "phone number",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "phoneNumber",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "phone_number",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "7f81fd1f-9eee-4327-869e-4a2a2a4d0568",
                    "name": "phone number verified",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "phoneNumberVerified",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "phone_number_verified",
                        "jsonType.label": "boolean"
                    }
                }
            ]
        },
        {
            "id": "c2db58e8-ea51-4151-83dd-c862c6d28ee3",
            "name": "owncloud",
            "description": "ownCloud UUID",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "true",
                "gui.order": "",
                "consent.screen.text": ""
            },
            "protocolMappers": [
                {
                    "id": "596f067b-ae2f-4771-96c5-d0c3942b04da",
                    "name": "owncloud-uuid",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "aggregate.attrs": "false",
                        "userinfo.token.claim": "true",
                        "multivalued": "false",
                        "user.attribute": "LDAP_ID",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "ocis\\.user\\.uuid"
                    }
                }
            ]
        },
        {
            "id": "8fa166b9-603d-411a-b155-3cda24c6f396",
            "name": "address",
            "description": "OpenID Connect built-in scope: address",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "true",
                "consent.screen.text": "${addressScopeConsentText}"
            },
            "protocolMappers": [
                {
                    "id": "1c1e8f31-37f5-4b96-a0b7-b07560d1f0a9",
                    "name": "address",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-address-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.attribute.formatted": "formatted",
                        "user.attribute.country": "country",
                        "user.attribute.postal_code": "postal_code",
                        "userinfo.token.claim": "true",
                        "user.attribute.street": "street",
                        "id.token.claim": "true",
                        "user.attribute.region": "region",
                        "access.token.claim": "true",
                        "user.attribute.locality": "locality"
                    }
                }
            ]
        },
        {
            "id": "f8d124d9-4010-45a2-b67d-74a865f480d9",
            "name": "offline_access",
            "description": "OpenID Connect built-in scope: offline_access",
            "protocol": "openid-connect",
            "attributes": {
                "consent.screen.text": "${offlineAccessScopeConsentText}",
                "display.on.consent.screen": "true"
            }
        },
        {
            "id": "cc363cd2-bb6c-4105-8aac-541d8ac15926",
            "name": "profile",
            "description": "OpenID Connect built-in scope: profile",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "true",
                "consent.screen.text": "${profileScopeConsentText}"
            },
            "protocolMappers": [
                {
                    "id": "f3a9d29c-e5fd-4537-8906-8171916505f4",
                    "name": "given name",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "firstName",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "given_name",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "64d16d3d-677d-49fb-872d-f49d6f28b6e4",
                    "name": "family name",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "lastName",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "family_name",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "66195cb5-bc65-48b4-ac5d-eb4b4209bdb9",
                    "name": "full name",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-full-name-mapper",
                    "consentRequired": false,
                    "config": {
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "userinfo.token.claim": "true"
                    }
                },
                {
                    "id": "ae7cd032-d504-49e9-a867-52e21c3b2cad",
                    "name": "birthdate",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "birthdate",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "birthdate",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "46fba090-aea6-4344-a7b9-46f76249ee91",
                    "name": "website",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "website",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "website",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "388d796d-561b-4d10-980f-4e399d70fe78",
                    "name": "middle name",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "middleName",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "middle_name",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "f5915427-0dfe-4cdf-a512-152ddd05dab7",
                    "name": "picture",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "picture",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "picture",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "e994430d-21c3-4e3e-a0fe-05f145f715aa",
                    "name": "nickname",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "nickname",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "nickname",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "ee0a8b23-6a51-4282-bde1-688cd6d116a2",
                    "name": "zoneinfo",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "zoneinfo",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "zoneinfo",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "41cc1a53-78ed-449a-91d1-118b9d9664ce",
                    "name": "locale",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "locale",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "locale",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "4e1c44b7-bd47-41f7-bb8d-a7582423769f",
                    "name": "gender",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "gender",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "gender",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "07d500dd-70f0-4263-ba50-f0905b5a30b7",
                    "name": "updated at",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "updatedAt",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "updated_at",
                        "jsonType.label": "long"
                    }
                },
                {
                    "id": "e2dcc6a1-67da-4c0c-b81a-42f20bccf794",
                    "name": "profile",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-attribute-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "profile",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "profile",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "06c70343-97f2-4f4a-aa08-cb878352497e",
                    "name": "username",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "username",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "preferred_username",
                        "jsonType.label": "String"
                    }
                }
            ]
        },
        {
            "id": "19962d19-ef8e-469f-b29f-3b763a0d8472",
            "name": "web-origins",
            "description": "OpenID Connect scope for add allowed web origins to the access token",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "false",
                "display.on.consent.screen": "false",
                "consent.screen.text": ""
            },
            "protocolMappers": [
                {
                    "id": "d76ef135-22ab-4f0f-a715-b6e34ef3827e",
                    "name": "allowed web origins",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-allowed-origins-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ]
        },
        {
            "id": "baa59fd4-4fde-4e1b-8cac-4f301cfa96fa",
            "name": "email",
            "description": "OpenID Connect built-in scope: email",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "true",
                "consent.screen.text": "${emailScopeConsentText}"
            },
            "protocolMappers": [
                {
                    "id": "0a5b39c4-dfa1-41a9-8d55-1e402a724413",
                    "name": "email",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "email",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "email",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "fe7cf4ae-a7ab-43df-a285-667f166bac09",
                    "name": "email verified",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "emailVerified",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "email_verified",
                        "jsonType.label": "boolean"
                    }
                }
            ]
        },
        {
            "id": "49d8613c-dd45-4f42-891a-1374b0ccd4de",
            "name": "acr",
            "description": "OpenID Connect scope for add acr (authentication context class reference) to the token",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "false",
                "display.on.consent.screen": "false"
            },
            "protocolMappers": [
                {
                    "id": "5ae9aaed-d4b3-464c-a8a9-cf7811a5e534",
                    "name": "acr loa level",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-acr-mapper",
                    "consentRequired": false,
                    "config": {
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "userinfo.token.claim": "true"
                    }
                }
            ]
        },
        {
            "id": "53540158-1ee6-4253-9b8e-1a9e22b9f6ec",
            "name": "roles",
            "description": "OpenID Connect scope for add user roles to the access token",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "false",
                "display.on.consent.screen": "true",
                "consent.screen.text": "${rolesScopeConsentText}"
            },
            "protocolMappers": [
                {
                    "id": "7499c013-d7ea-4fc6-b1f6-355f43040f50",
                    "name": "realm roles",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-realm-role-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.attribute": "foo",
                        "access.token.claim": "true",
                        "claim.name": "realm_access.roles",
                        "jsonType.label": "String",
                        "multivalued": "true"
                    }
                },
                {
                    "id": "de302946-a6b2-4b48-86b0-25969a7b972d",
                    "name": "client roles",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-client-role-mapper",
                    "consentRequired": false,
                    "config": {
                        "user.attribute": "foo",
                        "access.token.claim": "true",
                        "claim.name": "resource_access.${client_id}.roles",
                        "jsonType.label": "String",
                        "multivalued": "true"
                    }
                },
                {
                    "id": "839d7496-847e-4d52-b507-0bb337e2954c",
                    "name": "audience resolve",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-audience-resolve-mapper",
                    "consentRequired": false,
                    "config": {}
                }
            ]
        },
        {
            "id": "62503c5d-cf50-45e4-850e-2a8072db885a",
            "name": "microprofile-jwt",
            "description": "Microprofile - JWT built-in scope",
            "protocol": "openid-connect",
            "attributes": {
                "include.in.token.scope": "true",
                "display.on.consent.screen": "false"
            },
            "protocolMappers": [
                {
                    "id": "2eb2f33f-7006-4b19-b965-65e0c4c84536",
                    "name": "upn",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-property-mapper",
                    "consentRequired": false,
                    "config": {
                        "userinfo.token.claim": "true",
                        "user.attribute": "username",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "upn",
                        "jsonType.label": "String"
                    }
                },
                {
                    "id": "6925bca0-0904-4638-b399-7f4da9e27707",
                    "name": "groups",
                    "protocol": "openid-connect",
                    "protocolMapper": "oidc-usermodel-realm-role-mapper",
                    "consentRequired": false,
                    "config": {
                        "multivalued": "true",
                        "userinfo.token.claim": "true",
                        "user.attribute": "foo",
                        "id.token.claim": "true",
                        "access.token.claim": "true",
                        "claim.name": "groups",
                        "jsonType.label": "String"
                    }
                }
            ]
        }
    ],
    "defaultDefaultClientScopes": [
        "role_list",
        "profile",
        "email",
        "roles",
        "web-origins",
        "acr",
        "owncloud"
    ],
    "defaultOptionalClientScopes": [
        "offline_access",
        "address",
        "phone",
        "microprofile-jwt"
    ],
    "browserSecurityHeaders": {
        "contentSecurityPolicyReportOnly": "",
        "xContentTypeOptions": "nosniff",
        "xRobotsTag": "none",
        "xFrameOptions": "SAMEORIGIN",
        "contentSecurityPolicy": "frame-src 'self'; frame-ancestors 'self'; object-src 'none';",
        "xXSSProtection": "1; mode=block",
        "strictTransportSecurity": "max-age=31536000; includeSubDomains"
    },
    "smtpServer": {
        "replyToDisplayName": "",
        "starttls": "false",
        "auth": "",
        "port": "2500",
        "host": "inbucket",
        "replyTo": "",
        "from": "admin@owncloud.test",
        "fromDisplayName": "AdminTest",
        "envelopeFrom": "",
        "ssl": "false"
    },
    "eventsEnabled": true,
    "eventsExpiration": 86400,
    "eventsListeners": [
        "jboss-logging",
        "email"
    ],
    "enabledEventTypes": [
        "UPDATE_CONSENT_ERROR",
        "SEND_RESET_PASSWORD",
        "GRANT_CONSENT",
        "VERIFY_PROFILE_ERROR",
        "UPDATE_TOTP",
        "REMOVE_TOTP",
        "REVOKE_GRANT",
        "LOGIN_ERROR",
        "CLIENT_LOGIN",
        "RESET_PASSWORD_ERROR",
        "IMPERSONATE_ERROR",
        "CODE_TO_TOKEN_ERROR",
        "CUSTOM_REQUIRED_ACTION",
        "OAUTH2_DEVICE_CODE_TO_TOKEN_ERROR",
        "RESTART_AUTHENTICATION",
        "UPDATE_PROFILE_ERROR",
        "IMPERSONATE",
        "LOGIN",
        "UPDATE_PASSWORD_ERROR",
        "OAUTH2_DEVICE_VERIFY_USER_CODE",
        "CLIENT_INITIATED_ACCOUNT_LINKING",
        "TOKEN_EXCHANGE",
        "REGISTER",
        "LOGOUT",
        "AUTHREQID_TO_TOKEN",
        "DELETE_ACCOUNT_ERROR",
        "CLIENT_REGISTER",
        "IDENTITY_PROVIDER_LINK_ACCOUNT",
        "UPDATE_PASSWORD",
        "DELETE_ACCOUNT",
        "FEDERATED_IDENTITY_LINK_ERROR",
        "CLIENT_DELETE",
        "IDENTITY_PROVIDER_FIRST_LOGIN",
        "VERIFY_EMAIL",
        "CLIENT_DELETE_ERROR",
        "CLIENT_LOGIN_ERROR",
        "RESTART_AUTHENTICATION_ERROR",
        "REMOVE_FEDERATED_IDENTITY_ERROR",
        "EXECUTE_ACTIONS",
        "TOKEN_EXCHANGE_ERROR",
        "PERMISSION_TOKEN",
        "SEND_IDENTITY_PROVIDER_LINK_ERROR",
        "EXECUTE_ACTION_TOKEN_ERROR",
        "SEND_VERIFY_EMAIL",
        "OAUTH2_DEVICE_AUTH",
        "EXECUTE_ACTIONS_ERROR",
        "REMOVE_FEDERATED_IDENTITY",
        "OAUTH2_DEVICE_CODE_TO_TOKEN",
        "IDENTITY_PROVIDER_POST_LOGIN",
        "IDENTITY_PROVIDER_LINK_ACCOUNT_ERROR",
        "UPDATE_EMAIL",
        "OAUTH2_DEVICE_VERIFY_USER_CODE_ERROR",
        "REGISTER_ERROR",
        "REVOKE_GRANT_ERROR",
        "LOGOUT_ERROR",
        "UPDATE_EMAIL_ERROR",
        "EXECUTE_ACTION_TOKEN",
        "CLIENT_UPDATE_ERROR",
        "UPDATE_PROFILE",
        "AUTHREQID_TO_TOKEN_ERROR",
        "FEDERATED_IDENTITY_LINK",
        "CLIENT_REGISTER_ERROR",
        "SEND_VERIFY_EMAIL_ERROR",
        "SEND_IDENTITY_PROVIDER_LINK",
        "RESET_PASSWORD",
        "CLIENT_INITIATED_ACCOUNT_LINKING_ERROR",
        "OAUTH2_DEVICE_AUTH_ERROR",
        "UPDATE_CONSENT",
        "REMOVE_TOTP_ERROR",
        "VERIFY_EMAIL_ERROR",
        "SEND_RESET_PASSWORD_ERROR",
        "CLIENT_UPDATE",
        "IDENTITY_PROVIDER_POST_LOGIN_ERROR",
        "CUSTOM_REQUIRED_ACTION_ERROR",
        "UPDATE_TOTP_ERROR",
        "CODE_TO_TOKEN",
        "VERIFY_PROFILE",
        "GRANT_CONSENT_ERROR",
        "IDENTITY_PROVIDER_FIRST_LOGIN_ERROR"
    ],
    "adminEventsEnabled": false,
    "adminEventsDetailsEnabled": false,
    "identityProviders": [],
    "identityProviderMappers": [],
    "components": {
        "org.keycloak.services.clientregistration.policy.ClientRegistrationPolicy": [
            {
                "id": "4e28d881-799d-4c4d-9d4e-9b2cb6fd66c3",
                "name": "Consent Required",
                "providerId": "consent-required",
                "subType": "anonymous",
                "subComponents": {},
                "config": {}
            },
            {
                "id": "305d2098-6fac-4fcb-bb93-428bc8b4bded",
                "name": "Allowed Protocol Mapper Types",
                "providerId": "allowed-protocol-mappers",
                "subType": "authenticated",
                "subComponents": {},
                "config": {
                    "allowed-protocol-mapper-types": [
                        "saml-user-attribute-mapper",
                        "oidc-usermodel-property-mapper",
                        "oidc-usermodel-attribute-mapper",
                        "oidc-address-mapper",
                        "oidc-full-name-mapper",
                        "oidc-sha256-pairwise-sub-mapper",
                        "saml-role-list-mapper",
                        "saml-user-property-mapper"
                    ]
                }
            },
            {
                "id": "de61b4ce-127e-42fc-8b32-5f804785f77a",
                "name": "Allowed Protocol Mapper Types",
                "providerId": "allowed-protocol-mappers",
                "subType": "anonymous",
                "subComponents": {},
                "config": {
                    "allowed-protocol-mapper-types": [
                        "saml-user-attribute-mapper",
                        "oidc-full-name-mapper",
                        "oidc-sha256-pairwise-sub-mapper",
                        "saml-user-property-mapper",
                        "oidc-usermodel-property-mapper",
                        "oidc-usermodel-attribute-mapper",
                        "saml-role-list-mapper",
                        "oidc-address-mapper"
                    ]
                }
            },
            {
                "id": "261b9353-255e-4708-a710-7ac06174ee13",
                "name": "Trusted Hosts",
                "providerId": "trusted-hosts",
                "subType": "anonymous",
                "subComponents": {},
                "config": {
                    "host-sending-registration-request-must-match": [
                        "true"
                    ],
                    "client-uris-must-match": [
                        "true"
                    ]
                }
            },
            {
                "id": "5079bbb9-9fbc-466e-a2be-e14dd0080818",
                "name": "Max Clients Limit",
                "providerId": "max-clients",
                "subType": "anonymous",
                "subComponents": {},
                "config": {
                    "max-clients": [
                        "200"
                    ]
                }
            },
            {
                "id": "d9569a44-dd7f-447d-a612-e6f79fd0c476",
                "name": "Allowed Client Scopes",
                "providerId": "allowed-client-templates",
                "subType": "authenticated",
                "subComponents": {},
                "config": {
                    "allow-default-scopes": [
                        "true"
                    ]
                }
            },
            {
                "id": "bb45c678-88e1-483c-9ff2-68b659406def",
                "name": "Allowed Client Scopes",
                "providerId": "allowed-client-templates",
                "subType": "anonymous",
                "subComponents": {},
                "config": {
                    "allow-default-scopes": [
                        "true"
                    ]
                }
            },
            {
                "id": "117139a1-7b3f-4db7-b936-63924ae82380",
                "name": "Full Scope Disabled",
                "providerId": "scope",
                "subType": "anonymous",
                "subComponents": {},
                "config": {}
            }
        ],
        "org.keycloak.storage.UserStorageProvider": [
            {
                "id": "ce640a7b-bc13-4402-9ea8-c302ecc0b5b1",
                "name": "ldap",
                "providerId": "ldap",
                "subComponents": {
                    "org.keycloak.storage.ldap.mappers.LDAPStorageMapper": [
                        {
                            "id": "50a9d36b-749c-48ee-9e56-c28c0151441a",
                            "name": "email",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "mail"
                                ],
                                "is.mandatory.in.ldap": [
                                    "false"
                                ],
                                "always.read.value.from.ldap": [
                                    "false"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "user.model.attribute": [
                                    "email"
                                ]
                            }
                        },
                        {
                            "id": "38168e81-ca4e-4b3e-a275-7966318ec8d3",
                            "name": "creation date",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "createTimestamp"
                                ],
                                "is.mandatory.in.ldap": [
                                    "false"
                                ],
                                "read.only": [
                                    "true"
                                ],
                                "always.read.value.from.ldap": [
                                    "true"
                                ],
                                "user.model.attribute": [
                                    "createTimestamp"
                                ]
                            }
                        },
                        {
                            "id": "d0fdb9b5-3a27-472c-8995-d3923d902920",
                            "name": "group",
                            "providerId": "group-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "membership.attribute.type": [
                                    "DN"
                                ],
                                "group.name.ldap.attribute": [
                                    "cn"
                                ],
                                "preserve.group.inheritance": [
                                    "false"
                                ],
                                "membership.user.ldap.attribute": [
                                    "uid"
                                ],
                                "groups.dn": [
                                    "ou=groups,dc=owncloud,dc=com"
                                ],
                                "mode": [
                                    "LDAP_ONLY"
                                ],
                                "user.roles.retrieve.strategy": [
                                    "LOAD_GROUPS_BY_MEMBER_ATTRIBUTE"
                                ],
                                "membership.ldap.attribute": [
                                    "member"
                                ],
                                "ignore.missing.groups": [
                                    "false"
                                ],
                                "group.object.classes": [
                                    "groupOfNames"
                                ],
                                "memberof.ldap.attribute": [
                                    "memberOf"
                                ],
                                "groups.path": [
                                    "/"
                                ],
                                "drop.non.existing.groups.during.sync": [
                                    "false"
                                ]
                            }
                        },
                        {
                            "id": "6edf33e7-d221-442d-bb79-6f762f97abaf",
                            "name": "username",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "uid"
                                ],
                                "is.mandatory.in.ldap": [
                                    "true"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "always.read.value.from.ldap": [
                                    "false"
                                ],
                                "user.model.attribute": [
                                    "username"
                                ]
                            }
                        },
                        {
                            "id": "69c45098-3c32-4a2e-b920-bf6d20a8cc6a",
                            "name": "modify date",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "modifyTimestamp"
                                ],
                                "is.mandatory.in.ldap": [
                                    "false"
                                ],
                                "read.only": [
                                    "true"
                                ],
                                "always.read.value.from.ldap": [
                                    "true"
                                ],
                                "user.model.attribute": [
                                    "modifyTimestamp"
                                ]
                            }
                        },
                        {
                            "id": "d16fe00a-c6df-402d-8ad9-91870a0f7e69",
                            "name": "first name",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "cn"
                                ],
                                "is.mandatory.in.ldap": [
                                    "true"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "always.read.value.from.ldap": [
                                    "true"
                                ],
                                "user.model.attribute": [
                                    "firstName"
                                ]
                            }
                        },
                        {
                            "id": "cc3c26b8-9668-427a-a42f-a12e9bba03cb",
                            "name": "last name",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "sn"
                                ],
                                "is.mandatory.in.ldap": [
                                    "true"
                                ],
                                "always.read.value.from.ldap": [
                                    "true"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "user.model.attribute": [
                                    "lastName"
                                ]
                            }
                        },
                        {
                            "id": "92aa0407-daed-4780-89b5-72b23f4ddbca",
                            "name": "owncloud-uuid",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "ownCloudUUID"
                                ],
                                "is.mandatory.in.ldap": [
                                    "true"
                                ],
                                "attribute.force.default": [
                                    "false"
                                ],
                                "is.binary.attribute": [
                                    "false"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "always.read.value.from.ldap": [
                                    "false"
                                ],
                                "user.model.attribute": [
                                    "OWNCLOUD_ID"
                                ]
                            }
                        },
                        {
                            "id": "b5d0c6e6-2b2c-4403-ba2f-7e7ea711cbdc",
                            "name": "owncloud-usertype",
                            "providerId": "user-attribute-ldap-mapper",
                            "subComponents": {},
                            "config": {
                                "ldap.attribute": [
                                    "ownCloudUserType"
                                ],
                                "attribute.default.value": [
                                    "Guest"
                                ],
                                "attribute.force.default": [
                                    "false"
                                ],
                                "is.mandatory.in.ldap": [
                                    "true"
                                ],
                                "is.binary.attribute": [
                                    "false"
                                ],
                                "read.only": [
                                    "false"
                                ],
                                "always.read.value.from.ldap": [
                                    "true"
                                ],
                                "user.model.attribute": [
                                    "OWNCLOUD_USER_TYPE"
                                ]
                            }
                        }
                    ]
                },
                "config": {
                    "fullSyncPeriod": [
                        "299"
                    ],
                    "pagination": [
                        "false"
                    ],
                    "startTls": [
                        "false"
                    ],
                    "connectionPooling": [
                        "false"
                    ],
                    "usersDn": [
                        "ou=users,dc=owncloud,dc=com"
                    ],
                    "cachePolicy": [
                        "EVICT_DAILY"
                    ],
                    "useKerberosForPasswordAuthentication": [
                        "false"
                    ],
                    "evictionHour": [
                        "0"
                    ],
                    "importEnabled": [
                        "true"
                    ],
                    "enabled": [
                        "true"
                    ],
                    "usernameLDAPAttribute": [
                        "uid"
                    ],
                    "bindCredential": [
                        "**********"
                    ],
                    "changedSyncPeriod": [
                        "-1"
                    ],
                    "bindDn": [
                        "cn=admin,dc=owncloud,dc=com"
                    ],
                    "lastSync": [
                        "1679575179"
                    ],
                    "vendor": [
                        "other"
                    ],
                    "uuidLDAPAttribute": [
                        "ownCloudUUID"
                    ],
                    "connectionUrl": [
                        "ldap://ldap-server:1389"
                    ],
                    "allowKerberosAuthentication": [
                        "false"
                    ],
                    "syncRegistrations": [
                        "true"
                    ],
                    "authType": [
                        "simple"
                    ],
                    "useTruststoreSpi": [
                        "ldapsOnly"
                    ],
                    "usePasswordModifyExtendedOp": [
                        "false"
                    ],
                    "trustEmail": [
                        "true"
                    ],
                    "userObjectClasses": [
                        "inetOrgPerson, organizationalPerson, ownCloudUser"
                    ],
                    "evictionMinute": [
                        "0"
                    ],
                    "rdnLDAPAttribute": [
                        "uid"
                    ],
                    "editMode": [
                        "WRITABLE"
                    ],
                    "validatePasswordPolicy": [
                        "false"
                    ]
                }
            }
        ],
        "org.keycloak.userprofile.UserProfileProvider": [
            {
                "id": "6aed477f-9b85-4d27-a2b4-f49bf21f18b6",
                "providerId": "declarative-user-profile",
                "subComponents": {},
                "config": {}
            }
        ],
        "org.keycloak.keys.KeyProvider": [
            {
                "id": "3106c6e5-f728-4e7b-b540-487d5cd66c12",
                "name": "rsa-enc-generated",
                "providerId": "rsa-enc-generated",
                "subComponents": {},
                "config": {
                    "priority": [
                        "100"
                    ],
                    "algorithm": [
                        "RSA-OAEP"
                    ]
                }
            },
            {
                "id": "a6c893a0-84b5-4e5b-9355-0178bfd7f9fb",
                "name": "hmac-generated",
                "providerId": "hmac-generated",
                "subComponents": {},
                "config": {
                    "priority": [
                        "100"
                    ],
                    "algorithm": [
                        "HS256"
                    ]
                }
            },
            {
                "id": "972d216e-3f61-4151-8911-51ae3f7d524d",
                "name": "rsa-generated",
                "providerId": "rsa-generated",
                "subComponents": {},
                "config": {
                    "priority": [
                        "100"
                    ]
                }
            },
            {
                "id": "4264eb78-cf16-4738-afd3-34aaaf2b7e76",
                "name": "aes-generated",
                "providerId": "aes-generated",
                "subComponents": {},
                "config": {
                    "priority": [
                        "100"
                    ]
                }
            }
        ]
    },
    "internationalizationEnabled": false,
    "supportedLocales": [],
    "authenticationFlows": [
        {
            "id": "6e36392d-ddcf-42d5-8183-310243b1994e",
            "alias": "Account verification options",
            "description": "Method with which to verity the existing account",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "idp-email-verification",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "ALTERNATIVE",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "Verify Existing Account by Re-authentication",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "7505d539-69d1-4762-b2ac-27de8c3e64a9",
            "alias": "Authentication Options",
            "description": "Authentication options.",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "basic-auth",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "basic-auth-otp",
                    "authenticatorFlow": false,
                    "requirement": "DISABLED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "auth-spnego",
                    "authenticatorFlow": false,
                    "requirement": "DISABLED",
                    "priority": 30,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "deead59c-27c4-4ae5-8e01-aa0175df0619",
            "alias": "Browser - Conditional OTP",
            "description": "Flow to determine if the OTP is required for the authentication",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "conditional-user-configured",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "auth-otp-form",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "54aa5ef0-e37b-42b3-93f7-2a6276987c6b",
            "alias": "Direct Grant - Conditional OTP",
            "description": "Flow to determine if the OTP is required for the authentication",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "conditional-user-configured",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "direct-grant-validate-otp",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "5200fc9b-920d-4ed9-8429-1aa644b6152e",
            "alias": "First broker login - Conditional OTP",
            "description": "Flow to determine if the OTP is required for the authentication",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "conditional-user-configured",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "auth-otp-form",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "d180884d-0a6b-4038-87c1-683aa13cff6c",
            "alias": "Handle Existing Account",
            "description": "Handle what to do if there is existing account with same email/username like authenticated identity provider",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "idp-confirm-link",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "Account verification options",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "d54acab5-5f27-40ac-a0b4-eb6de5cc1e64",
            "alias": "Reset - Conditional OTP",
            "description": "Flow to determine if the OTP should be reset or not. Set to REQUIRED to force.",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "conditional-user-configured",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "reset-otp",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "89404735-62ec-4b97-b9f5-d75762b68b27",
            "alias": "User creation or linking",
            "description": "Flow for the existing/non-existing user alternatives",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticatorConfig": "create unique user config",
                    "authenticator": "idp-create-user-if-unique",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "ALTERNATIVE",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "Handle Existing Account",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "25294975-4589-4050-8043-20303083324f",
            "alias": "Verify Existing Account by Re-authentication",
            "description": "Reauthentication of existing account",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "idp-username-password-form",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "CONDITIONAL",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "First broker login - Conditional OTP",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "7dec3bf2-b612-4884-8e2f-30b50370b054",
            "alias": "browser",
            "description": "browser based authentication",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "auth-cookie",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "auth-spnego",
                    "authenticatorFlow": false,
                    "requirement": "DISABLED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "identity-provider-redirector",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 25,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "ALTERNATIVE",
                    "priority": 30,
                    "autheticatorFlow": true,
                    "flowAlias": "forms",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "30d11795-c96d-42f2-85d4-f0e41bd5057e",
            "alias": "clients",
            "description": "Base authentication for clients",
            "providerId": "client-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "client-secret",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "client-jwt",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "client-secret-jwt",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 30,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "client-x509",
                    "authenticatorFlow": false,
                    "requirement": "ALTERNATIVE",
                    "priority": 40,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "d9d1c2f6-187a-4aaf-9c63-ab5a3b963697",
            "alias": "direct grant",
            "description": "OpenID Connect Resource Owner Grant",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "direct-grant-validate-username",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "direct-grant-validate-password",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "CONDITIONAL",
                    "priority": 30,
                    "autheticatorFlow": true,
                    "flowAlias": "Direct Grant - Conditional OTP",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "5e19fbd7-5093-4365-b723-fa5a75bf83eb",
            "alias": "docker auth",
            "description": "Used by Docker clients to authenticate against the IDP",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "docker-http-basic-authenticator",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "b0a95069-80e5-486f-b26f-8ba60a76aeaa",
            "alias": "first broker login",
            "description": "Actions taken after first broker login with identity provider account, which is not yet linked to any Keycloak account",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticatorConfig": "review profile config",
                    "authenticator": "idp-review-profile",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "User creation or linking",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "ac7eca63-0480-44b8-899b-af867c67b4d5",
            "alias": "forms",
            "description": "Username, password, otp and other auth forms.",
            "providerId": "basic-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "auth-username-password-form",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "CONDITIONAL",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "Browser - Conditional OTP",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "0b7aa670-7d0b-4c1d-9d88-41b55b4ceb00",
            "alias": "http challenge",
            "description": "An authentication flow based on challenge-response HTTP Authentication Schemes",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "no-cookie-redirect",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": true,
                    "flowAlias": "Authentication Options",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "cf15555f-155e-4726-bc6d-9f52d3d64169",
            "alias": "registration",
            "description": "registration flow",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "registration-page-form",
                    "authenticatorFlow": true,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": true,
                    "flowAlias": "registration form",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "d081627a-3f7f-4ff6-9f0c-97859440b428",
            "alias": "registration form",
            "description": "registration form",
            "providerId": "form-flow",
            "topLevel": false,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "registration-user-creation",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "registration-profile-action",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 40,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "registration-password-action",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 50,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "registration-recaptcha-action",
                    "authenticatorFlow": false,
                    "requirement": "DISABLED",
                    "priority": 60,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "ab76bffe-7905-4226-9457-4accda1129db",
            "alias": "reset credentials",
            "description": "Reset credentials for a user if they forgot their password or something",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "reset-credentials-choose-user",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "reset-credential-email",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 20,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticator": "reset-password",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 30,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                },
                {
                    "authenticatorFlow": true,
                    "requirement": "CONDITIONAL",
                    "priority": 40,
                    "autheticatorFlow": true,
                    "flowAlias": "Reset - Conditional OTP",
                    "userSetupAllowed": false
                }
            ]
        },
        {
            "id": "2c2cca07-5a59-4819-8bee-b2f6bcbac6fd",
            "alias": "saml ecp",
            "description": "SAML ECP Profile Authentication Flow",
            "providerId": "basic-flow",
            "topLevel": true,
            "builtIn": true,
            "authenticationExecutions": [
                {
                    "authenticator": "http-basic-authenticator",
                    "authenticatorFlow": false,
                    "requirement": "REQUIRED",
                    "priority": 10,
                    "autheticatorFlow": false,
                    "userSetupAllowed": false
                }
            ]
        }
    ],
    "authenticatorConfig": [
        {
            "id": "e6549e4f-8850-436a-9993-7cab80db47d7",
            "alias": "create unique user config",
            "config": {
                "require.password.update.after.registration": "false"
            }
        },
        {
            "id": "bcfdb689-0a13-4d3d-920f-83185ebf2d49",
            "alias": "review profile config",
            "config": {
                "update.profile.on.first.login": "missing"
            }
        }
    ],
    "requiredActions": [
        {
            "alias": "CONFIGURE_TOTP",
            "name": "Configure OTP",
            "providerId": "CONFIGURE_TOTP",
            "enabled": true,
            "defaultAction": false,
            "priority": 10,
            "config": {}
        },
        {
            "alias": "TERMS_AND_CONDITIONS",
            "name": "Terms and Conditions",
            "providerId": "TERMS_AND_CONDITIONS",
            "enabled": false,
            "defaultAction": false,
            "priority": 20,
            "config": {}
        },
        {
            "alias": "UPDATE_PASSWORD",
            "name": "Update Password",
            "providerId": "UPDATE_PASSWORD",
            "enabled": true,
            "defaultAction": false,
            "priority": 30,
            "config": {}
        },
        {
            "alias": "UPDATE_PROFILE",
            "name": "Update Profile",
            "providerId": "UPDATE_PROFILE",
            "enabled": true,
            "defaultAction": false,
            "priority": 40,
            "config": {}
        },
        {
            "alias": "VERIFY_EMAIL",
            "name": "Verify Email",
            "providerId": "VERIFY_EMAIL",
            "enabled": true,
            "defaultAction": false,
            "priority": 50,
            "config": {}
        },
        {
            "alias": "delete_account",
            "name": "Delete Account",
            "providerId": "delete_account",
            "enabled": false,
            "defaultAction": false,
            "priority": 60,
            "config": {}
        },
        {
            "alias": "webauthn-register",
            "name": "Webauthn Register",
            "providerId": "webauthn-register",
            "enabled": true,
            "defaultAction": false,
            "priority": 70,
            "config": {}
        },
        {
            "alias": "webauthn-register-passwordless",
            "name": "Webauthn Register Passwordless",
            "providerId": "webauthn-register-passwordless",
            "enabled": true,
            "defaultAction": false,
            "priority": 80,
            "config": {}
        },
        {
            "alias": "update_user_locale",
            "name": "Update User Locale",
            "providerId": "update_user_locale",
            "enabled": true,
            "defaultAction": false,
            "priority": 1000,
            "config": {}
        }
    ],
    "browserFlow": "browser",
    "registrationFlow": "registration",
    "directGrantFlow": "direct grant",
    "resetCredentialsFlow": "reset credentials",
    "clientAuthenticationFlow": "clients",
    "dockerAuthenticationFlow": "docker auth",
    "attributes": {
        "cibaBackchannelTokenDeliveryMode": "poll",
        "cibaAuthRequestedUserHint": "login_hint",
        "oauth2DevicePollingInterval": "5",
        "clientOfflineSessionMaxLifespan": "0",
        "clientSessionIdleTimeout": "0",
        "clientOfflineSessionIdleTimeout": "0",
        "cibaInterval": "5",
        "realmReusableOtpCode": "false",
        "cibaExpiresIn": "120",
        "oauth2DeviceCodeLifespan": "600",
        "parRequestUriLifespan": "60",
        "clientSessionMaxLifespan": "0",
        "adminEventsExpiration": ""
    },
    "keycloakVersion": "21.0.1",
    "userManagedAccessAllowed": false,
    "clientProfiles": {
        "profiles": []
    },
    "clientPolicies": {
        "policies": []
    }
}
```