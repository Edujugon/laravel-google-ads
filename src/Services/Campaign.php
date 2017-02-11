<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 15:59
 */

namespace Edujugon\GoogleAds\Services;

use Google\AdsApi\AdWords\v201609\cm\CampaignService;

class Campaign extends Service
{

    protected $campaignService;

    protected $fields = ['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'];

    function __construct()
    {
        parent::__construct();
        $this->campaignService = $this->adWordsServices->get($this->session, CampaignService::class);
    }

    public function all($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;

        // Create AWQL query.
        $query = 'SELECT '. implode(',',$fields) . $this->postQuery;

        return $this->campaignService->query($query);
    }

}