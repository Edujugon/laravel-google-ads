<?php
use Edujugon\GoogleAds\Reports\MyReport;

/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 21/2/17
 * Time: 20:52
 */
class GlobalFunctionWrappers extends PHPUnit_Framework_TestCase {

    /** @test */
    public function get_report_by_global_function_wrapper()
    {
        $obj = report()->from('CRITERIA_PERFORMANCE_REPORT')
            ->during('20170101','20170210')
            ->where('CampaignId = 752331963')
            ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
            ->getAsObj();

        $this->assertInstanceOf(MyReport::class,$obj);
    }

    /** @test */
    public function get_service_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Services\Service::class,service(\Google\AdsApi\AdWords\v201609\cm\CampaignService::class));
    }

    /** @test */
    public function get_report_field_class_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Fields::class,reportFields());
    }

    /** @test */
    public function get_report_format_class_by_global_function_wrapper()
    {

        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Format::class,reportFields());
    }
}