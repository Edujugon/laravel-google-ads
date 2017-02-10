<?php

use Edujugon\GoogleAds\Reports\Report;
use Google\AdsApi\AdWords\Reporting\v201609\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201609\ReportDownloader;

class ReportTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function report_fields()
    {
        $list = (new \Edujugon\GoogleAds\Reports\Fields())->of('CRITERIA_PERFORMANCE_REPORT')->except(['Parameters','AccountCurrencyCode'])->asList();

        $this->assertInternalType('array',$list);
        $this->assertInternalType('array',(new \Edujugon\GoogleAds\Reports\Fields())->reportTypes());
        $this->assertInstanceOf('stdClass',(new \Edujugon\GoogleAds\Reports\Fields())->of('CRITERIA_PERFORMANCE_REPORT')->asObj());
        $this->assertArrayNotHasKey('Parameter',$list);
    }

    /** @test */
    public function format()
    {
        $this->assertInternalType('array',\Edujugon\GoogleAds\Reports\Format::list());
        $this->assertEquals('CSV',\Edujugon\GoogleAds\Reports\Format::get('csv'));
    }

    /** @test */
    public function wrong_format()
    {
        $this->expectException(\Edujugon\GoogleAds\Exceptions\ReportFormat::class);
        $this->assertEquals('CSV',\Edujugon\GoogleAds\Reports\Format::get('asdf'));
    }

    /** @test */
    public function report_set_during_clause()
    {
        $report = (new Report())->during('20150101','20150202');
    }
    /** @test */
    public function report_set_select_fields()
    {
        $report = (new Report())->select('a','b','c');

        $this->assertEquals(['a','b','c'],$report->fields);

    }

    /** @test */
    public function get_report()
    {
        $report = new Report();
        $report->select('CampaignId','AdGroupId')
            ->from('CRITERIA_PERFORMANCE_REPORT')
            ->during('20170101','20170210')
            ->run()
            ->saveToFile(__DIR__.'/marketing');
    }

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