<?php


use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\Reporting\v201609\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201609\ReportDownloader;
use Google\AdsApi\AdWords\v201609\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201609\cm\ReportDefinitionService;
use Google\AdsApi\Dfp\v201611\ReportService;

class ServicesTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function campaing_all(){
        $campaign = new \Edujugon\GoogleAds\Services\Campaign();
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
        //dd($ads->limit(1)->all(['DisplayUrl']));
        //dd($ads->limit(1)->all()->getEntries());

    }
}