<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 15/2/17
 * Time: 12:25
 */

namespace Edujugon\GoogleAds\Reports;


use SimpleXMLElement;

class MyReport
{
    /**
     *
     * @var Full xml obj as stdClass
     */
    protected $my_std_class;

    /**
     * Full xml obj as array
     * @var mixed
     */
    protected $my_assoc_array;

    /**
     * List of items
     * @var array
     */
    protected $items = [];

    /**
     * Count of items.
     * @var int
     */
    protected $count;

    /**
     * MyReport constructor.
     * @param SimpleXMLElement $xml
     */
    function __construct(SimpleXMLElement $xml)
    {

        $this->my_std_class = json_decode(json_encode($xml));
        $this->my_assoc_array = json_decode(json_encode($xml), true);

        $this->loadItems();

    }

    /**
     * Load the report rows in Class Items property
     */
    private function loadItems()
    {
        foreach ($this->my_std_class->table->row as $row)
        {
            $this->items[] = $this->getCleanRowObject($row);
        }
    }

    /**
     * Remove the @attributes property Cleaning the stdClass.
     * @param $stdClass
     * @return mixed
     */
    private function getCleanRowObject($stdClass)
    {
        return $stdClass->{'@attributes'};
    }

   public function items()
   {
       return $this->items;
   }

   public function count()
   {
       return count($this->items);
   }

}