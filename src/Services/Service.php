<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:07
 */

namespace Edujugon\GoogleAds\Services;


use Edujugon\GoogleAds\Session\AdwordsSession;
use Google\AdsApi\AdWords\AdWordsServices;

class Service
{

    /**
     * @var string
     */
    protected $postQuery = '';

    /**
     * @var mixed
     */
    protected $session;

    /**
     * @var AdWordsServices
     */
    protected $adWordsServices;

    /**
     * @var
     */
    protected $service;

    /**
     * @var
     */
    protected $fields;

    /**
     * Service constructor.
     */
    function __construct()
    {
        $this->adWordsServices = new AdWordsServices();

        $this->session = (new AdwordsSession())->oAuth()->build();
    }

    /**
     * @param $field
     * @return $this
     */
    public function orderBy($field)
    {
        $this->postQuery .= " ORDER BY $field";

        return $this;
    }

    /**
     * @param $number
     * @param int $offset
     * @return $this
     */
    public function limit($number, $offset = 0)
    {
        $this->postQuery .= " LIMIT $offset,$number";

        return $this;
    }

    /**
     * Set the service
     *
     * @param $service
     * @return $this
     */
    public function service($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Set the fields to retrieve
     *
     * @param $fields
     * @return $this
     */
    public function select($fields)
    {
        $this->fields = is_array($fields) ? $fields : func_get_args();

        return $this;
    }


    /**
     * Get all items.
     *
     * @param array $fields
     * @return mixed
     */
    public function all($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;


        $query = 'SELECT '. implode(',',$fields) . $this->postQuery;

        return $this->service->query($query);
    }



}