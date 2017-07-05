<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 21/2/17
 * Time: 20:52
 */

use Edujugon\GoogleAds\Reports\MyReport;


class GlobalFunctionWrappers extends PHPUnit_Framework_TestCase {

    /** @test */
    public function get_report_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Report::class,google_report());
    }

    /** @test */
    public function get_service_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Services\Service::class,google_service(\Google\AdsApi\AdWords\v201609\cm\CampaignService::class));
    }

    /** @test */
    public function get_report_field_class_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Fields::class,google_report_fields());
    }

}