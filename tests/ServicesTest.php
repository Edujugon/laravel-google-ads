<?php


use Google\AdsApi\AdWords\v201609\cm\CampaignService;

class ServicesTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function add_service()
    {
        $service = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));
        $this->assertInstanceOf(\Google\AdsApi\AdWords\v201609\cm\CampaignService::class,$service->getService());
    }


    /** @test */
    public function campaing_all(){
        $campaign = new \Edujugon\GoogleAds\Services\Campaign();
        $this->assertInternalType('integer',$campaign->get(['Id'])[0]->getId());
        $this->assertInternalType('string',$campaign->limit(2)->get()[0]->getName());
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
        $this->assertInternalType('integer',$ads->limit(1)->get(['Id'])[0]->getAd()->getId());
        //dd($ads->limit(1)->all()->getEntries());

    }
}