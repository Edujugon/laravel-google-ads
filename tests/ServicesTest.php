<?php



class ServicesTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function add_service()
    {
        $service = (new \Edujugon\GoogleAds\Services\Service())->service('Google\AdsApi\AdWords\v201609\cm\CampaignService');
        $this->assertInstanceOf(\Google\AdsApi\AdWords\v201609\cm\CampaignService::class,$service->getService());
    }

    /** @test */
    public function add_service_by_name()
    {
      $service = (new \Edujugon\GoogleAds\Services\Service())->serviceByName('campaign');
      $this->assertInstanceOf(\Google\AdsApi\AdWords\v201609\cm\CampaignService::class,$service->getService());
    }

    /** @test */
    public function load_oAuth()
    {
        $session = new Edujugon\GoogleAds\Services\Service();
    }

    /** @test */
    public function campaing_all(){
        $campaign = new \Edujugon\GoogleAds\Services\Campaign();
        //dd($campaign->limit(1)->all());
        //dd($campaign->all()->getEntries());

    }

    /** @test */
    public function adsGroup_all(){
        $ads = new \Edujugon\GoogleAds\Services\AdGroup();
        //dd($campaign->limit(1)->all());
        //dd($ads->all());

    }

    /** @test */
    public function ads_all(){
        $ads = new \Edujugon\GoogleAds\Services\AdGroupAd();
        //dd($ads->limit(1)->all(['DisplayUrl']));
        //dd($ads->limit(1)->all()->getEntries());

    }
}