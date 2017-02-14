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
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201609\cm\AdGroupService;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;

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
     * Service types allowed.
     * @var array
     */
    protected $types = [
      'campaign' => CampaignService::class,
      'adGroup' => AdGroupService::class,
      'adGroupAd' => AdGroupAdService::class
    ];

    /**
     * Service constructor.
     * @param \Google\AdsApi\AdWords\AdWordsSession $session
     */
    function __construct(\Google\AdsApi\AdWords\AdWordsSession $session = null)
    {
        $this->adWordsServices = new AdWordsServices();

        $this->session = $session ? $session : (new AdwordsSession())->build();
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
     * @throws \Edujugon\GoogleAds\Exceptions\Service
     */
    public function service($service)
    {
        if(in_array($service,$this->types))
            $this->service = $this->adWordsServices->get($this->session, $service);
        else
            throw new \Edujugon\GoogleAds\Exceptions\Service("The service '$service' is not available. Available services: " . implode(', ',$this->types));

        return $this;
    }

    /**
     * Set the service by name
     * @param $name
     * @return $this
     * @throws \Edujugon\GoogleAds\Exceptions\Service
     */
    public function serviceByName($name)
    {
        if(in_array($name,array_keys($this->types)))
            $this->service($this->types[$name]);
        else
            throw new \Edujugon\GoogleAds\Exceptions\Service("The name '$name' is not available. Available types: " . implode(', ',array_keys($this->types)));

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
     * @return \Google\AdsApi\AdWords\v201609\cm\CampaignPage | \Google\AdsApi\AdWords\v201609\cm\AdGroupPage | \Google\AdsApi\AdWords\v201609\cm\AdGroupAdPage
     *
     */
    public function all($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;

        $this->haveFields($fields);

        $query = 'SELECT '. implode(',',$fields) . $this->postQuery;

        return $this->service->query($query);
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
     * @throws Session
     */
    private function haveFields($fields)
    {
        if (empty($fields))
            throw new Session('You have to select some fields before "call" all method. Call "select" method before.');
    }

}