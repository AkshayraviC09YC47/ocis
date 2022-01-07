package parser

import (
	"errors"
	"strings"

	ociscfg "github.com/owncloud/ocis/ocis-pkg/config"

	"github.com/owncloud/ocis/accounts/pkg/config"
	"github.com/owncloud/ocis/ocis-pkg/config/envdecode"
)

// ParseConfig loads accounts configuration from known paths.
func ParseConfig(cfg *config.Config) error {
	_, err := ociscfg.BindSourcesToStructs(cfg.Service.Name, cfg)
	if err != nil {
		return err
	}

	// provide with defaults for shared logging, since we need a valid destination address for BindEnv.
	if cfg.Log == nil && cfg.Commons != nil && cfg.Commons.Log != nil {
		cfg.Log = &config.Log{
			Level:  cfg.Commons.Log.Level,
			Pretty: cfg.Commons.Log.Pretty,
			Color:  cfg.Commons.Log.Color,
			File:   cfg.Commons.Log.File,
		}
	} else if cfg.Log == nil && cfg.Commons == nil {
		cfg.Log = &config.Log{}
	}

	// load all env variables relevant to the config in the current context.
	if err := envdecode.Decode(cfg); err != nil {
		// no environment variable set for this config is an expected "error"
		if !errors.Is(err, envdecode.ErrNoTargetFieldsAreSet) {
			return err
		}
	}

	// sanitize config
	if cfg.HTTP.Root != "/" {
		cfg.HTTP.Root = strings.TrimSuffix(cfg.HTTP.Root, "/")
	}
	cfg.Repo.Backend = strings.ToLower(cfg.Repo.Backend)

	return nil
}