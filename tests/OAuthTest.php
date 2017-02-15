<?php


use Edujugon\GoogleAds\Auth\OAuth2;

class OAuthTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function new_login(){

        $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',(new OAuth2())->userCredentials());
    }

    /** @test */
    public function login_with_parameters()
    {
        $oAuth = new OAuth2();

        $refreshToken = $oAuth->userCredentials([
            'clientId' => 'test',
            'clientSecret' => 'test',
            'refreshToken' => 'TEST'
        ]);

        $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',$refreshToken);
    }

    /** @test */
    public function build_passing_env()
    {
        $oAuth = new OAuth2('production');
        $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',$oAuth->userCredentials());
    }

    /** @test */
    public function get_full_authorization_uri()
    {
        $oAuth = new OAuth2();
        $this->assertInternalType('string',$oAuth->build()->buildFullAuthorizationUri()->getQuery());
    }
}