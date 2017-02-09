<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:29
 */

namespace Edujugon\GoogleAds\Services;


use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;

class AdGroupAd extends Service
{
    protected $adGroupAdService;

    protected $fields = ['Id','Url'];

    function __construct()
    {
        parent::__construct();

        $this->adGroupAdService = $this->adWordsServices->get($this->session, AdGroupAdService::class);
    }

    public function all($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;


        $query = 'SELECT '. implode(',',$fields) . $this->postQuery;

        return $this->adGroupAdService->query($query);
    }
}