<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:07
 */

namespace Edujugon\GoogleAds\Services;


use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201710\cm\AdGroupService;

class AdGroup extends Service
{

    /**
     * AdGroup constructor.
     * @param AdWordsSession|null $session
     */
    function __construct(AdWordsSession $session = null)
    {
        parent::__construct(AdGroupService::class,$session);

        $this->fields = ['Id', 'CampaignId', 'CampaignName', 'Name','Status', 'Settings','Labels'];
    }
}