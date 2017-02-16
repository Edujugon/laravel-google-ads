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
     *
     * @var Full xml obj as stdClass
     */
    protected $my_std_class;

    /**
     * Report Name
     * @var
     */
    protected $name;

    /**
     * List of fields / columns requested
     * @var \Illuminate\Support\Collection
     */
    protected $fields;

    /**
     * List of items
     * @var \Illuminate\Support\Collection
     */
    protected $result;

    /**
     * MyReport constructor.
     * @param SimpleXMLElement $xml
     */
    function __construct(SimpleXMLElement $xml)
    {

        $this->my_std_class = json_decode(json_encode($xml));

        $this->fields = new Collection();
        $this->result = new Collection();

        $this->loadName();
        $this->loadFields();
        $this->loadResults();

    }

    /**
     * Load the report name.
     */
    private function loadName()
    {
        if(property_exists($this->my_std_class,'report-name'))
        {
            $this->name = $this->my_std_class->{'report-name'}->{'@attributes'}->name;

        }

    }

    /**
     * Load the report columns
     */
    private function loadFields()
    {
        if(property_exists($this->my_std_class->table,'columns'))
        {
            foreach ($this->my_std_class->table->columns->column as $column)
            {
                $this->fields->push($this->convertToArray($column));
            }
        }

    }

    /**
     * Load the report rows
     */
    private function loadResults()
    {
        if(property_exists($this->my_std_class->table,'row'))
        {
            foreach ($this->my_std_class->table->row as $row)
            {
                $this->result->push($this->convertToArray($row));
            }
        }

    }

    /**
     * Remove the @attributes property Cleaning the stdClass.
     * @param $stdClass
     * @return mixed
     */
    private function convertToArray($stdClass)
    {
        return get_object_vars($stdClass->{'@attributes'});
    }

    /**
     * Get the report result
     * @return Collection
     */
    public function result()
    {
        return $this->result;
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