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
    protected $adsConfig;

    protected $oAuthConfig;

    /**
     * OAuth2 constructor.
     * @param null $env
     */
    function __construct($env = null)
    {
        $this->adsConfig = eConfigGoogleAds($env);
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

        $data = $this->mergeData($data);

        $refreshCredentials = new OAuth2TokenBuilder();

        return $refreshCredentials->withClientId($data['clientId'])
            ->withClientSecret($data['clientSecret'])
            ->withRefreshToken($data['refreshToken'])
            ->build();
    }

    public function buildFullAuthorizationUri()
    {
        $arrayClient = [
            'clientId' => $this->adsConfig['clientId'],
            'clientSecret' => $this->adsConfig['clientSecret']

        ];

        $oauth2 = new GoogleOAuth2(array_merge($this->oAuthConfig,$arrayClient));

        return ''.$oauth2->buildFullAuthorizationUri();
    }

    /**
     * Create an array merging the config array with passed data.
     * @param $data
     * @return array
     */
    private function mergeData(array $data)
    {
        return array_merge($this->adsConfig,$data);
    }

}