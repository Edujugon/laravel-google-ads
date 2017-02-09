<?php
namespace Edujugon\GoogleAds;


class GoogleAds
{

    /**
     * Basic config
     *
     * @var mixed
     */
    protected $config;

    /**
     * GoogleAds constructor.
     */
    public function __construct()
    {
        $this->config = eConfig();

    }

    private function oAuth2(){

        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())
            //->from(new \Google\AdsApi\Common\Configuration($this->config['test']))
            ->withClientId($this->config['clientId'])
            ->withClientSecret($this->config['clientSecret'])
            ->withRefreshToken($this->config['refreshToken'])
            //->fromFile($this->configFile)
            ->build();
    }
}