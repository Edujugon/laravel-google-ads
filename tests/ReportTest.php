<?php

class ReportTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function report_fields()
    {
        $list = (new \Edujugon\GoogleAds\Reports\Fields())->of('CRITERIA_PERFORMANCE_REPORT')->except(['Parameter','AccountCurrencyCode'])->asList();

        $this->assertInternalType('array',$list);
        $this->assertInternalType('array',(new \Edujugon\GoogleAds\Reports\Fields())->reportTypes());
        $this->assertInstanceOf('stdClass',(new \Edujugon\GoogleAds\Reports\Fields())->of('CRITERIA_PERFORMANCE_REPORT')->asObj());
        $this->assertArrayNotHasKey('Parameter',$list);
    }

    /** @test */
    public function report_download()
    {
        $reportQuery = 'SELECT CampaignId, AdGroupId, Id, Criteria, CriteriaType, '
            . 'Impressions, Clicks, Cost, UrlCustomParameters FROM CRITERIA_PERFORMANCE_REPORT '
            . 'DURING LAST_7_DAYS';

        $reportDownloader = new ReportDownloader((new Edujugon\GoogleAds\Session\AdwordsSession())->oAuth()->build());
        $reportDownloadResult = $reportDownloader->downloadReportWithAwql(
            $reportQuery, DownloadFormat::CSV);

        dd($reportDownloadResult->getAsString());
    }
}