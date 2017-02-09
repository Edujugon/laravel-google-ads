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
    protected $config;

    /**
     * AdwordsSession constructor.
     * @param $oAuth2Credential
     * @param null $env
     */
    function __construct($oAuth2Credential = null, $env = null)
    {
        if($oAuth2Credential)
            $this->oAuth2Credential = $oAuth2Credential;

        $this->config = eConfigGoogleAds($env);
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
        $this->oAuth2Credential = (new OAuth2($env))->build($data);

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
        $adwordsSession = new AdWordsSessionBuilder();

        if(!$this->validateData($data))
            $adwordsSession->withDeveloperToken($this->config['developerToken'])
                ->withClientCustomerId($this->config['clientCustomerId'])
                ->withOAuth2Credential($this->oAuth2Credential);
        else
            $adwordsSession->withDeveloperToken($data['developerToken'])
                ->withClientCustomerId($data['clientCustomerId'])
                ->withOAuth2Credential($this->oAuth2Credential);


        return $adwordsSession->build();
    }

    /**
     * Check the data is as expected.
     *
     * @param $data
     * @return bool
     */
    private function validateData($data)
    {
        if(array_key_exists('developerToken',$data) &&
            array_key_exists('clientCustomerId',$data))
            return true;

        return false;
    }
}