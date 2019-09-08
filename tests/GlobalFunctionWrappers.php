<?php

use PHPUnit\Framework\TestCase;

class GlobalFunctionWrappers extends TestCase{

    /** @test */
    public function get_report_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Report::class,google_report());
    }

    /** @test */
    public function get_service_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Services\Service::class,google_service(\Google\AdsApi\AdWords\v201809\cm\CampaignService::class));
    }

    /** @test */
    public function get_report_field_class_by_global_function_wrapper()
    {
        $this->assertInstanceOf(\Edujugon\GoogleAds\Reports\Fields::class,google_report_fields());
    }

}