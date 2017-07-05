<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 13:38
 */

use Edujugon\GoogleAds\Auth\OAuth2;
use Edujugon\GoogleAds\Session\AdwordsSession;



class SessionTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function create_session()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2())->build();

        $session = (new Edujugon\GoogleAds\Session\AdwordsSession($oAuth2Credential))->build();

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }

    /** @test */
    public function create_session_with_auto_oauth()
    {
        $session = (new AdwordsSession())->oAuth()->build();

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }

    /** @test */
    public function pass_params_to_auto_oauth(){
        $env = 'test';

        $session = (new AdwordsSession(null,$env))->oAuth($env,[
            'clientId' => 'test',
            'clientSecret' => 'test',
            'refreshToken' => 'TEST'
        ])->build();

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }

    /** @test */
    public function build_with_parameters()
    {
        $session = (new AdwordsSession())->oAuth()->build([
            'developerToken' => 'token',
            'clientCustomerId' => 'id'
        ]);

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }

    /** @test */
    public function create_new_session_with_auto_oauth_login()
    {
        $session = new AdwordsSession();
        $session = $session->build();

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }
}