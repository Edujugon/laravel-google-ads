<?php
namespace Edujugon\GoogleAds\Reports;

use Google\AdsApi\AdWords\v201609\cm\ReportDefinitionReportType;
use ReflectionClass;

/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/2/17
 * Time: 9:25
 */
abstract class ReportTypes
{

    /**
     * Load all constants from ReportDefinitionReportType
     * @return array
     */
    private static function loadConstants()
    {
        return (new ReflectionClass(ReportDefinitionReportType::class))->getConstants();
    }

    /**
     * Get the list of the report types.
     *
     * @return array
     */
    public static function list()
    {
        return static::loadConstants();
    }

    /**
     * Get the constant value from a passed report type.
     *
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        return static::loadConstants()[$key];
    }

}