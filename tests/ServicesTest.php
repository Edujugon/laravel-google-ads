<?php



class CampaignTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function campaing_all(){
        $campaign = new \Edujugon\GoogleAds\Services\Campaing();
        //dd($campaign->limit(1)->all());
        //dd($campaign->all());

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
        //dd($campaign->limit(1)->all());
        dd($ads->all()->getEntries());

    }
}