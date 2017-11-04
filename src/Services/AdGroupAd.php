<?php
/**
 * Project: google-ads.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 9/2/17
 * Time: 17:29
 */

namespace Edujugon\GoogleAds\Services;


use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201710\cm\AdGroupAdService;

class AdGroupAd extends Service
{

    function __construct(AdWordsSession $session = null)
    {
        parent::__construct(AdGroupAdService::class,$session);

        $this->fields = ['Id','Url'];
    }
}