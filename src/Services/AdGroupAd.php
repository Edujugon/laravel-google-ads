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
use Google\AdsApi\AdWords\v201609\cm\AdGroupAdService;

class AdGroupAd extends Service
{

    function __construct(AdWordsSession $session = null)
    {
        parent::__construct($session);

        $this->fields = ['Id','Url'];
        $this->service = $this->adWordsServices->get($this->session, AdGroupAdService::class);
    }
}