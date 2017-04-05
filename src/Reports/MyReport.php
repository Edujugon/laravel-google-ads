<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 15/2/17
 * Time: 12:25
 */

namespace Edujugon\GoogleAds\Reports;


use Illuminate\Support\Collection;
use SimpleXMLElement;

class MyReport
{
    /**
     * Report Name
     * @var
     */
    protected $name;

    /**
     * Report date range
     * @var
     */
    protected $date;

    /**
     * List of fields / columns requested
     * @var \Illuminate\Support\Collection
     */
    public $fields;

    /**
     * List of items
     * @var \Illuminate\Support\Collection
     */
    public $result;

    /**
     * MyReport constructor.
     * @param SimpleXMLElement $xml
     */
    function __construct(SimpleXMLElement $xml)
    {

        $my_std_class = json_decode(json_encode($xml));

        $this->fields = new Collection();
        $this->result = new Collection();

        $this->name = $this->loadData($my_std_class,'report-name','name');
        $this->date = $this->loadData($my_std_class,'date-range','date');

        $this->loadFields($my_std_class);
        $this->loadResults($my_std_class);

    }

    /**
     * Load the report name.
     * @param $my_std_class
     * @param $property
     * @param $subProperty
     * @return mixed
     */
    private function loadData($my_std_class,$property,$subProperty)
    {
        if(property_exists($my_std_class,$property))
        {
            return $my_std_class->$property->{'@attributes'}->$subProperty;

        }

    }

    /**
     * Load the report columns
     * @param $my_std_class
     */
    private function loadFields($my_std_class)
    {
        if(property_exists($my_std_class->table,'columns'))
        {
            foreach ($my_std_class->table->columns->column as $column)
            {
                $this->fields->push($this->convertToStdClass($column));
            }
        }

    }

    /**
     * Load the report rows
     * @param $my_std_class
     */
    private function loadResults($my_std_class)
    {
        if(property_exists($my_std_class->table,'row'))
        {
            foreach ($my_std_class->table->row as $row)
            {
                $this->result->push($this->convertToStdClass($row));
            }
        }

    }

    /**
     * Remove the @attributes property Cleaning the stdClass.
     * @param $stdClass
     * @return mixed
     */
    private function convertToStdClass($stdClass)
    {
        if(!property_exists($stdClass,'@attributes'))
            return $stdClass;

        return $stdClass->{'@attributes'};
    }

    /**
     * Remove the @attributes property Cleaning the stdClass.
     * @param $stdClass
     * @return mixed
     */
    private function convertToArray($stdClass)
    {
        if(!property_exists($stdClass,'@attributes'))
            return get_object_vars($stdClass);

        return get_object_vars($stdClass->{'@attributes'});
    }

    /**
     * Count result items.
     * @return int
     */
    public function count()
    {
        return $this->result->count();
    }

}