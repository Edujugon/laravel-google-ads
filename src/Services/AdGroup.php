<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:07
 */

namespace Edujugon\GoogleAds\Services;


use Google\AdsApi\AdWords\v201609\cm\AdGroupService;

class AdGroup extends Service
{

    protected $adGroupService;

    protected $fields = ['Id', 'CampaignId', 'CampaignName', 'Name','Status', 'Settings','Labels'];

    function __construct()
    {
        parent::__construct();

        $this->adGroupService = $this->adWordsServices->get($this->session, AdGroupService::class);
    }

    public function all($fields = [])
    {
        $fields = empty($fields) ? $this->fields : $fields;

        // Create AWQL query.
        $query = 'SELECT '. implode(',',$fields) . $this->postQuery;

        return $this->adGroupService->query($query);
    }
}