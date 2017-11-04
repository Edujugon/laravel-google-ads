<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/2/17
 * Time: 9:25
 */

namespace Edujugon\GoogleAds\Reports;

use Google\AdsApi\AdWords\v201710\cm\ReportDefinitionReportType;
use Edujugon\GoogleAds\Exceptions\ReportTypes as ReportException;
use ReflectionClass;

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
    public static function asObj()
    {
        return static::loadConstants();
    }

    /**
     * Get the list of the report types.
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
     * @throws ReportException
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

        return in_array($value,$list);
    }

    /**
     * @throws ReportException
     */
    public static function invalidType()
    {
        throw new ReportException("Invalid report type. Available types: " . implode(', ',static::loadConstants()));
    }

}