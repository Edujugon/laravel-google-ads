<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/2/17
 * Time: 9:07
 */

namespace Edujugon\GoogleAds\Reports;

use Edujugon\GoogleAds\Session\AdwordsSession;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\v201710\cm\ReportDefinitionService;

class Fields
{
    /**
     * Adwords Session
     *
     * @var mixed|null
     */
    protected $session;

    /**
     * @var AdWordsServices
     */
    protected $adWordsServices;

    /**
     * @var \Google\AdsApi\Common\AdsSoapClient|\Google\AdsApi\Common\SoapClient
     */
    protected $reportDefinitionService;
    /**
     * @var
     */
    protected $reportDefinitionFields;

    /**
     * Fields with type and accepted values.
     *
     * @var \stdClass
     */
    protected $obj;

    /**
     * Fields constructor.
     * @param null $session
     */
    function __construct($session = null)
    {
        $this->adWordsServices = new AdWordsServices();

        $this->session = $session ?: (new AdwordsSession())->oAuth()->build();

        $this->reportDefinitionService = $this->adWordsServices->get($this->session, ReportDefinitionService::class);

        $this->obj = new \stdClass();
    }

    /**
     * Load the fields of the passed reportType
     *
     * @param $reportType
     * @return $this
     */
    public function of($reportType)
    {
        $this->validateReportType($reportType);

        $this->reportDefinitionFields = $this->reportDefinitionService->getReportFields($reportType);

        $this->obj = $this->createObj($this->reportDefinitionFields);

        return $this;
    }

    /**
     * Get fields as object
     *
     * The properties will be the fields name.
     * Each property is an array with type and accepted values.
     *
     * @return \stdClass
     */
    public function asObj()
    {
        return $this->obj;
    }

    /**
     * Get array of fields names.
     *
     * @return array
     */
    public function asList()
    {
        return array_keys(get_object_vars($this->obj));
    }

    /**
     * Get a query selector of all filters.
     * E.g. Id,Name,Description...
     *
     * @return string
     */
    public function asQuerySelector(){
       return implode(',',$this->asList());
    }

    /**
     * Get all report types
     *
     * @return array
     */
    public function reportTypes()
    {
        return ReportTypes::getList();
    }

    /**
     * Pull fields from the list.
     *
     * @param array $list
     * @return $this
     */
    public function except(array $list)
    {
        foreach ($list as $field)
        {
            if(property_exists($this->obj,$field))
                unset($this->obj->$field);
        }

        return $this;
    }

    /**
     * Create a stdClass object with filter data.
     *
     * @param $reportDefinitionFields
     * @return \stdClass
     */
    private function createObj($reportDefinitionFields)
    {
        $obj = new \stdClass();

        foreach ($reportDefinitionFields as $reportDefinitionField) {
            $name = $reportDefinitionField->getFieldName();
            $obj->$name = [
                'type' => $reportDefinitionField->getFieldType(),
                'values' => ($reportDefinitionField->getEnumValues() !== null) ? $reportDefinitionField->getEnumValues() : null,
            ];

        }

        return $obj;
    }

    /**
     * @param $type
     */
    private function validateReportType($type)
    {
        if(!ReportTypes::exist($type))
            ReportTypes::invalidType();
    }
}