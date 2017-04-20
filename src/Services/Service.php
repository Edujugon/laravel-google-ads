<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:07
 */

namespace Edujugon\GoogleAds\Services;


use Edujugon\GoogleAds\Exceptions\Session;
use Edujugon\GoogleAds\Session\AdwordsSession;
use Google\AdsApi\AdWords\AdWordsServices;

class Service
{

    /**
     * Where Condition
     *
     * @var string
     */
    protected $where = '';

    /**
     * Order By clause
     * @var string
     */
    protected $orderBy = '';

    /**
     * Limit clause
     * @var string
     */
    protected $limit = '';

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
     * @param Google Service $service
     * @param \Google\AdsApi\AdWords\AdWordsSession $session
     */
    function __construct($service, \Google\AdsApi\AdWords\AdWordsSession $session = null)
    {
        $this->adWordsServices = new AdWordsServices();

        $this->session = $session ? $session : (new AdwordsSession())->build();

        $this->setService($service);
    }

    /**
     * @param $field
     * @return $this
     */
    public function orderBy($field)
    {
        $this->orderBy = " ORDER BY $field ";

        return $this;
    }

    /**
     * @param int $number
     * @param int $offset
     * @return $this
     */
    public function limit($number, $offset = 0)
    {
        $this->limit = " LIMIT $offset,$number ";

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
     * Set where condition
     *
     * @param $condition
     * @return $this
     */
    public function where($condition)
    {
        $this->where = ! $this->where ? $condition : $this->where . ' AND ' . $condition;

        return $this;
    }

    /**
     * Get all items.
     *
     * @param array $fields
     * @return ServiceCollection
     * E.g. => Campaign | AdGroup | AdGroupAd | ...
     */
    public function get($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;

        $this->haveFields($fields);

        $query = $this->createQuery($fields);

        return new ServiceCollection($this->getService(), $this->service->query($query)->getEntries());
    }


    /**
     * Get the Google service.
     *
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param $fields
     * @return string
     */
    private function createQuery($fields)
    {
        $query = 'SELECT ' . implode(',', $fields);

        if(!empty($this->where))
            $query .= ' WHERE ' . $this->where;
        if(!empty($this->orderBy))
            $query .= $this->orderBy;
        if(!empty($this->limit))
            $query .= $this->limit;

        return $query;
    }

    /**
     * @param $fields
     * @throws Session
     */
    private function haveFields($fields)
    {
        if (empty($fields))
            throw new Session('You have to select some fields before calling get method. To do so, call select($fields) method before.');
    }

    /**
     * Set the service
     *
     * @param $service
     * @return $this
     * @throws \Edujugon\GoogleAds\Exceptions\Service
     */
    private function setService($service)
    {
        try {
            $this->service = $this->adWordsServices->get($this->session, $service);
        } catch (\Exception $e) {
            throw new \Edujugon\GoogleAds\Exceptions\Service("The service '$service' is not available. Please pass a valid service");
        }

    }

}