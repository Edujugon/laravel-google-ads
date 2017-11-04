<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 15:59
 */

namespace Edujugon\GoogleAds\Services;

use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201710\cm\CampaignService;

class Campaign extends Service
{

    function __construct(AdWordsSession $session = null)
    {
        parent::__construct(CampaignService::class,$session);

        $this->fields = ['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'];
    }


}