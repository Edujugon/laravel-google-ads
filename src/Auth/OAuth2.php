<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 11:50
 */

namespace Edujugon\GoogleAds\Auth;


use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\Auth\OAuth2 as GoogleOAuth2;

class OAuth2
{

    /**
     * Adwords config data based on the environment.
     * @var mixed
     */
    protected $config;

    protected $oAuthConfig;
    /**
     * OAuth2 constructor.
     * @param null $env
     */
    function __construct($env = null)
    {
        $this->config = eConfigGoogleAds($env);
        $this->oAuthConfig = eConfigOAuth();
    }

    /**
     * Generate a refreshable OAuth2 credential for authentication.
     *
     * Parameters:
     * $data: [$clientId => '',$clientSecret => '',$refreshToken => '']
     *
     * @param array $data
     * @return \Google\Auth\Credentials\ServiceAccountCredentials|\Google\Auth\Credentials\UserRefreshCredentials|mixed
     */
    public function build(array $data = [])
    {

        $refreshCredentials = new OAuth2TokenBuilder();

        if(!$this->validateData($data))
            $refreshCredentials->withClientId($this->config['clientId'])
                ->withClientSecret($this->config['clientSecret'])
                ->withRefreshToken($this->config['refreshToken']);
        else
            $refreshCredentials->withClientId($data['clientId'])
                ->withClientSecret($data['clientSecret'])
                ->withRefreshToken($data['refreshToken']);

        return $refreshCredentials->build();
    }

    public function buildFullAuthorizationUri()
    {
        $arrayClient = [
            'clientId' => $this->config['clientId'],
            'clientSecret' => $this->config['clientSecret']

        ];

        $oauth2 = new GoogleOAuth2(array_merge($this->oAuthConfig,$arrayClient));

        return ''.$oauth2->buildFullAuthorizationUri();
    }
    /**
     * Check the data is as expected.
     *
     * @param $data
     * @return bool
     */
    private function validateData($data)
    {
        if(array_key_exists('clientId',$data) &&
            array_key_exists('clientSecret',$data) &&
            array_key_exists('refreshToken',$data))
            return true;

        return false;
    }
}