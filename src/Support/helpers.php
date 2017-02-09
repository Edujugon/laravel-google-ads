<?php
/**
 *
 * Helper functions to be used anywhere.
 *
 * All function names are prefixed by an "e" to prevent possible conflicts with any framework functions
 *
 */
use Edujugon\GoogleAds\Exceptions\Config;

/**
 * Get configuration array data.
 *
 * @return array
 */
function eConfig()
{
    if(function_exists('config_path'))
    {
        if(file_exists(config_path('google-ads.php')))
        {
            $configuration = include(config_path('google-ads.php'));

            return $configuration;
        }
    }

    $configuration = include(__DIR__ . '/../Config/config.php');

    return $configuration;
}

/**
 * Get the adwords configuration based on the environment.
 * If env is not passed as parameter it'll take the env value from config file.
 *
 * @param null $env
 * @return mixed
 * @throws Config
 */
function eConfigGoogleAds($env = null)
{
    $config = eConfig();


    if($env && !array_key_exists($env,$config))
        throw new Config('Please provide a correct environment. Available options: production/test');

    return $env ? $config[$env] : $config[$config['env']];
}

/**
 * Get the oAuth2 configuration
 * @return mixed
 */
function eConfigOAuth()
{
    $config = eConfig();

    return $config['oAuth2'];
}