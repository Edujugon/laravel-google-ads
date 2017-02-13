<?php


use Edujugon\GoogleAds\Auth\RefreshToken;
use Edujugon\GoogleAds\GoogleAds;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;
use Google\AdsApi\AdWords\v201609\cm\OrderBy;
use Google\AdsApi\AdWords\v201609\cm\Paging;
use Google\AdsApi\AdWords\v201609\cm\Selector;
use Google\AdsApi\AdWords\v201609\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\Auth\OAuth2;

class GoogleAdsTest extends PHPUnit_Framework_TestCase {


    /** @test */
    public function set_env(){

        $ads = new GoogleAds();

        $ads->env('test');

        $this->assertEquals('test',$ads->getEnv());
    }

    /** @test */
    public function oAuth()
    {
        $ads = new GoogleAds();

        $ads->oAuth();

        $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',$ads->getUserCredentials());
    }

    /** @test */
    public function oAuth_passing_parameters()
    {
        $ads = new GoogleAds();

        $ads->oAuth([
            'clientId' => 'test',
            'clientSecret' => 'test',
            'refreshToken' => 'TEST'

        ]);

        $this->assertInstanceOf('Google\Auth\Credentials\UserRefreshCredentials',$ads->getUserCredentials());
    }

    /** @test */
    public function create_session()
    {
        $ads = new GoogleAds();

        $session = $ads->session()->getSession();

        $this->assertInstanceOf(Google\AdsApi\AdWords\AdWordsSession::class,$session);
    }

    /** @test */
    public function create_instance_of_service()
    {
        $ads = new GoogleAds();

        $service = $ads->service(CampaignService::class);

        $this->assertInstanceOf(CampaignService::class,$service->getService());
    }

    /** @test */
    public function create_instance_of_service_by_name()
    {
        $ads = new GoogleAds();

        $service = $ads->serviceByName('campaign');

        $this->assertInstanceOf(CampaignService::class,$service->getService());
    }

    /** @test */
    public function get_all_items_of_campaign_service()
    {
        $ads = new GoogleAds();

        $campaigns = $ads->service(CampaignService::class)->select(['Id'])->all();

        $this->assertInstanceOf(Google\AdsApi\AdWords\v201609\cm\CampaignPage::class,$campaigns);
    }

    /** @test */
    public function instance_adGroup_service()
    {
        $ads = new GoogleAds();

        $adGroup = $ads->adGroupService();

        $this->assertInstanceOf(Google\AdsApi\AdWords\v201609\cm\AdGroupService::class,$adGroup->getService());
    }

    /** @test */
    public function get_all_items_of_adGroup_service()
    {
        $ads = new GoogleAds();

        $adGroup = $ads->adGroupService()->all();

        $this->assertInstanceOf(Google\AdsApi\AdWords\v201609\cm\AdGroupPage::class,$adGroup);
    }

    /** @test */
    public function get_all_items_of_adGroupAd_service()
    {
        $ads = new GoogleAds();

        $adGroup = $ads->adGroupAdService()->all();

        $this->assertInstanceOf(Google\AdsApi\AdWords\v201609\cm\AdGroupAdPage::class,$adGroup);
    }

    /** @test */
    public function get_all_items_of_campaign_service_by_direct_method()
    {
        $ads = new GoogleAds();

        $adGroup = $ads->campaignService()->all();

        $this->assertInstanceOf(Google\AdsApi\AdWords\v201609\cm\CampaignPage::class,$adGroup);
    }

}