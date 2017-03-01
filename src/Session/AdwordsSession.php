<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 13:27
 */

namespace Edujugon\GoogleAds\Session;

use Edujugon\GoogleAds\Auth\OAuth2;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;

class AdwordsSession
{

    /**
     * @var
     */
    protected $oAuth2Credential;

    /**
     * Adwords config data based on the environment.
     * @var mixed
     */
    protected $adsConfig;

    /**
     * AdwordsSession constructor.
     * @param $oAuth2Credential
     * @param null $env
     */
    function __construct($oAuth2Credential = null, $env = null)
    {
        if($oAuth2Credential)
            $this->oAuth2Credential = $oAuth2Credential;

        $this->adsConfig = e_ads_config_google_ads($env);
    }

    /**
     * Create OAuth2 credential
     *
     * @param null $env
     * @param array|null $data
     * @return $this
     */
    public function oAuth($env = null, $data = [])
    {
        $this->oAuth2Credential = (new OAuth2($env))->userCredentials($data);

        return $this;

    }

    /**
     * Construct an API session configured from global config data file or passed data
     *
     * @param array $data
     * @return mixed
     */
    public function build(array $data = [])
    {
        if(!$this->oAuth2Credential)
            $this->oAuth();

        $data = $this->mergeData($data);

        $adwordsSession = new AdWordsSessionBuilder();

        return $adwordsSession->withDeveloperToken($data['developerToken'])
                ->withClientCustomerId($data['clientCustomerId'])
                ->withOAuth2Credential($this->oAuth2Credential)
                ->build();
    }

    /**
     * Create an array merging the config array with passed data.
     *
     * @param $data
     * @return array
     */
    private function mergeData(array $data)
    {
        return array_merge($this->adsConfig,$data);
    }
}