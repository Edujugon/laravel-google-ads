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

    protected $postQuery = '';

    protected $session;

    protected $adWordsServices;

    function __construct()
    {
        $this->adWordsServices = new AdWordsServices();

        $this->session = (new AdwordsSession())->oAuth()->build();
    }

    public function orderBy($field)
    {
        $this->postQuery = "ORDER BY $field";

        return $this;
    }

    public function limit($number,$offset = 0)
    {
        $this->postQuery .= " LIMIT $offset,$number";

        return $this;
    }

}