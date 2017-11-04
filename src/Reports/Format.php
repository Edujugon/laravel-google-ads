<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/2/17
 * Time: 10:45
 */

namespace Edujugon\GoogleAds\Reports;


use Edujugon\GoogleAds\Exceptions\ReportFormat;
use Google\AdsApi\AdWords\Reporting\v201710\DownloadFormat;
use ReflectionClass;

abstract  class Format
{
    /**
     * Load all constants from ReportDefinitionReportType
     * @return array
     */
    private static function loadConstants()
    {
        return (new ReflectionClass(DownloadFormat::class))->getConstants();
    }

    /**
     * Get the list of the report formats.
     *
     * @return array
     */
    public static function asObj()
    {
        return static::loadConstants();
    }

    /**
     * Get a list of the report formats.
     *
     * @return array
     */
    public static function getList()
    {
        return array_values(static::loadConstants());
    }

    /**
     * Get the constant value from a passed report type.
     *
     * @param $key
     * @return mixed
     * @throws ReportFormat
     */
    public static function get($key)
    {
        $key = strtoupper($key);

        $list = static::loadConstants();

        if(array_key_exists($key,$list))
            return static::loadConstants()[$key];

        if(static::exist($key))
            return $key;

        // Throw exception.
        static::invalidType();
    }

    /**
     * Check if a passed value is available as report type.
     *
     * @param $value
     * @return bool
     */
    public static function exist($value)
    {
        $list = static::loadConstants();

        return in_array($value,$list) || in_array(strtoupper($value),$list) ;
    }

    /**
     * @throws ReportFormat
     */
    public static function invalidType()
    {
        throw new ReportFormat("Invalid report format. Available types: " . implode(', ',static::loadConstants()));
    }


}