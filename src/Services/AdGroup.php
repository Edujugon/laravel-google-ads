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

    function __construct()
    {
        parent::__construct();

        $this->fields = ['Id', 'CampaignId', 'CampaignName', 'Name','Status', 'Settings','Labels'];
        $this->service = $this->adWordsServices->get($this->session, AdGroupService::class);
    }
}