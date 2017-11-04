<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 4/4/17
 * Time: 12:34
 */

namespace Edujugon\GoogleAds\Services;

use Google\AdsApi\AdWords\v201710\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201710\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201710\cm\AdGroupService;
use Google\AdsApi\AdWords\v201710\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201710\cm\CampaignService;
use Illuminate\Support\Collection;

class ServiceCollection
{

    /**
     * Adwords service
     * @var
     */
    protected $adWordsServices;

    /**
     * List of items
     * @var \Illuminate\Support\Collection
     */
    protected $items;

    /**
     * Google pre getter Method label
     * i.e. getId,getName,etc..
     *
     * @var string
     */
    protected $preGetterMethod = 'get';

    /**
     * Google pre setter Method label
     * i.e. setId,setName,etc..
     *
     * @var string
     */
    protected $preSetterMethod = 'set';

    /**
     * ServiceCollection constructor.
     * @param $adWordsServices
     * @param array $items
     */
    public function __construct($adWordsServices,$items = [])
    {
        $this->adWordsServices = $adWordsServices;
        $this->items = collect($items);

    }

    /**
     * search the value in the collection in a specific field.
     *
     * @param $field
     * @param $value
     * @param bool $opposite
     * @return ServiceCollection
     */
    public function where($field, $value,$opposite = false)
    {
        return $this->filter(function ($item) use($field,$value,$opposite){

            $method = $this->concatGet($field);

            $pass = $item->$method() == $value;

            return $opposite ? !$pass : $pass;
        });
    }

    /**
     * Set the value in the specific field.
     * @param $field
     * @param $value
     * @return ServiceCollection
     */
    public function set($field, $value)
    {
        return $this->map(function ($item) use($field,$value) {
            $method = $this->concatSet($field);

            return $item->$method($value);
        });
    }

    /**
     * @param $callback
     * @return static
     */
    public function map($callback)
    {
        return new static($this->adWordsServices,$this->items->map($callback));
    }

    /**
     * @param $callback
     * @return static
     */
    public function filter($callback)
    {
        return new static($this->adWordsServices,$this->items->filter($callback));
    }

    /**
     * Persist values in google.
     * @return false|mixed
     */
    public function save()
    {
        $operations = [];

        $this->items->each(function ($item) use(&$operations) {
          $operation = $this->setOperator();
          $operation->setOperand($item);
          $operation->setOperator('SET');

          $operations[] = $operation;
        });

        if(empty($operations))
            return false;

        return $this->adWordsServices->mutate($operations)->getValue();
    }

    /**
     * Get item list.
     * @return Collection
     */
    public function items()
    {
        return $this->items;
    }

    /**
     * Concate the preGetterMethod
     * @param $field
     * @return string
     */
    private function concatGet($field)
    {
        return $this->preGetterMethod . ucfirst($field);
    }

    /**
     * Concate the preSetterMethod
     * @param $field
     * @return string
     */
    private function concatSet($field)
    {
        return $this->preSetterMethod . ucfirst($field);
    }


    /**
     * If any method call is available in Collection class it will be fired for the items since it's a Collection instance.
     * @param $name
     * @param $arguments
     * @return mixed
     */
    function __call($name, $arguments)
    {
        if(method_exists(Collection::class,$name))
        {
            if(! empty($arguments))
                return $this->items->$name($arguments);

            return $this->items->$name();
        }
    }

    private function setOperator()
    {
        switch (get_class($this->adWordsServices)) {
            default:
            case CampaignService::class     : return new CampaignOperation();
            case AdGroupService::class      : return new AdGroupOperation();
            case AdGroupAdService::class    : return new AdGroupAdOperation();
        }
    }
}