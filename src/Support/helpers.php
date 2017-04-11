<?php
/**
 *
 * Helper functions to be used anywhere.
 *
 * All function names are prefixed by an "e" to prevent possible conflicts with any framework functions
 *
 */
use Edujugon\GoogleAds\Exceptions\Config;
use Edujugon\GoogleAds\Reports\Fields;
use Edujugon\GoogleAds\Reports\Report;
use Edujugon\GoogleAds\Services\Service;

/**
 * Get an instance of Report
 * @param null $session
 * @return Report
 */
function google_report($session = null)
{
    return new Report($session);
}

/**
 * Get an instance of Service
 * @param Google Service $service
 * @param null $session
 * @return Service
 */
function google_service($service,$session = null)
{
    return new Service($service,$session);
}


/**
 * Get an instance of Fields
 *
 * @param null $session
 * @return Fields
 */
function google_report_fields($session = null)
{
    return new Fields($session);
}

/**
 * Get configuration array data.
 *
 * @return array
 */
function e_ads_config()
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
function e_ads_config_google_ads($env = null)
{
    $config = e_ads_config();


    if($env && !array_key_exists($env,$config))
        throw new Config('Please provide a correct environment. Available options: production/test');

    return $env ? $config[$env] : $config[$config['env']];
}

/**
 * Get the oAuth2 configuration
 * @return mixed
 */
function e_config_oauth()
{
    $config = e_ads_config();

    return $config['oAuth2'];
}