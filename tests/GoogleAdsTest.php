<?php


use Edujugon\GoogleAds\Auth\RefreshToken;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\AdWords\v201609\cm\CampaignService;
use Google\AdsApi\AdWords\v201609\cm\OrderBy;
use Google\AdsApi\AdWords\v201609\cm\Paging;
use Google\AdsApi\AdWords\v201609\cm\Selector;
use Google\AdsApi\AdWords\v201609\cm\SortOrder;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\Auth\OAuth2;

class GoogleAdsTest extends PHPUnit_Framework_TestCase {

    protected $page_limit = 500;


    /** @test */
    public function runExample(AdWordsServices $adWordsServices,
                                      AdWordsSession $session) {
        $campaignService = $adWordsServices->get($session, CampaignService::class);

        // Create AWQL query.
        $query = 'SELECT Id, Name, Status ORDER BY Name';

        // Create paging controls.
        $totalNumEntries = 0;
        $offset = 0;
        do {
            $pageQuery = sprintf('%s LIMIT %d,%d', $query, $offset, $this->page_limit);
            // Make the query request.
            $page = $campaignService->query($pageQuery);
            dd($page);
            // Display results from the query.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                foreach ($page->getEntries() as $campaign) {
                    printf(
                        "Campaign with ID %d and name '%s' was found.\n",
                        $campaign->getId(),
                        $campaign->getName()
                    );
                }
            }

            // Advance the paging offset.
            $offset += $this->page_limit;
        } while ($offset < $totalNumEntries);

        printf("Number of results found: %d\n", $totalNumEntries);
    }

    /** @test */
    public function campaign_service()
    {

        $session = (new Edujugon\GoogleAds\Session\AdwordsSession())->oAuth()->build();

        $this->runExample(new AdWordsServices(), $session);
    }

    /** @test */
    public function get_refresh_token(){

        dd((new \Edujugon\GoogleAds\Auth\OAuth2())->buildFullAuthorizationUri());
        $oauth2 = new OAuth2([
            'authorizationUri' => 'https://accounts.google.com/o/oauth2/v2/auth',
            'redirectUri' => 'urn:ietf:wg:oauth:2.0:oob',
            'tokenCredentialUri' => 'https://www.googleapis.com/oauth2/v4/token',
            'clientId' => '542053106652-7lq3slmmhtubv72nc3vhkm67qu27lbc7.apps.googleusercontent.com',
            'clientSecret' => 'WUVAo3UTzg9IHC26Vxq6u5P0',
            'scope' => 'https://www.googleapis.com/auth/adwords'
        ]);
        dd(''.$oauth2->buildFullAuthorizationUri());

    }


}