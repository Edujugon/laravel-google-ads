<?php

use Google\AdsApi\AdWords\v201710\cm\CampaignService;

class ServicesTest extends PHPUnit_Framework_TestCase {


    protected $testedCampaignId = 795625088;


    /** @test */
    public function add_service()
    {
        $service = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));
        $this->assertInstanceOf(\Google\AdsApi\AdWords\v201710\cm\CampaignService::class,$service->getService());
    }


    /** @test */
    public function campaing_all(){
        $campaign = new \Edujugon\GoogleAds\Services\Campaign();
        $this->assertInternalType('integer',$campaign->get(['Id'])->first()->getId());
        $this->assertInternalType('string',$campaign->orderBy('Name')->limit(2)->get()->first()->getName());
        //dd($campaign->all()->getEntries());
    }

    /** @test */
    public function adsGroup_all(){
        $ads = new \Edujugon\GoogleAds\Services\AdGroup();
        //dd($campaign->limit(1)->all());
        //dd($ads->all());

    }

    /** @test */
    public function ads_all(){
        $ads = new \Edujugon\GoogleAds\Services\AdGroupAd();
        $this->assertInternalType('integer',$ads->limit(1)->get(['Id'])->first()->getAd()->getId());
        //dd($ads->limit(1)->all()->getEntries());

    }

    /** @test */
    public function get_campaigns_based_id()
    {
        $service = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $campaigns = $service->select('Id')->where('Id IN [752331963,795625088]')->get();

        $this->assertInstanceOf(\Edujugon\GoogleAds\Services\ServiceCollection::class,$campaigns);
    }

    /** @test */
    public function get_service_collection_of_campaigns()
    {
        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $results = $campaignService->select('CampaignId','CampaignName')->get();

        $this->assertInstanceOf(\Edujugon\GoogleAds\Services\ServiceCollection::class,$results);
        //dd($results->where('id',$this->testedCampaignId));
    }

    /** @test */
    public function get_campaign_based_on_id()
    {
        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $results = $campaignService->select('CampaignId','CampaignName')->get();

        $campaign = $results->where('id',$this->testedCampaignId);

        if(! $campaign->isEmpty()) {
            $this->assertInstanceOf(\Edujugon\GoogleAds\Services\ServiceCollection::class, $campaign);
            $this->assertEquals(1, $campaign->count());
        }
    }

    /** @test */
    public function get_campaign_except_a_specific_id()
    {
        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $results = $campaignService->select('CampaignId','CampaignName')->get();

        $campaign = $results->where('id',$this->testedCampaignId,true);

        if(! $campaign->isEmpty()) {
            $this->assertInstanceOf(\Edujugon\GoogleAds\Services\ServiceCollection::class, $campaign);
            $this->assertNotEmpty($campaign->count());
        }
    }

    /** @test */
    public function set_new_name_to_a_campaign()
    {
        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $results = $campaignService->select('CampaignId','CampaignName')->get();

        $campaign = $results->where('id',$this->testedCampaignId)->set('name','hello :)');

        if(! $campaign->isEmpty())
        {
            $this->assertInstanceOf(\Edujugon\GoogleAds\Services\ServiceCollection::class,$campaign);

            $this->assertEquals('hello :)',$campaign->first()->getName());
        }

    }

    /** @test */
    public function update_campaign_name()
    {
        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class));

        $results = $campaignService->select('CampaignId','CampaignName')->get();

        $campaign = $results->where('id',$this->testedCampaignId)->set('name','hello !!');
        if(! $campaign->isEmpty()){

            $changed = $campaign->save();
            if($changed)
            {
                $this->assertInternalType('array',$changed);

                $this->assertEquals('hello !!',$changed[0]->getName());
            }
        }

    }

    /** @test */
    public function create_new_campaign()
    {
//        $campaignService = (new \Edujugon\GoogleAds\Services\Service(CampaignService::class))->getService();
//
//        //Create the campaign
//        $campaign = new \Google\AdsApi\AdWords\v201710\cm\Campaign();
//        $campaign->setName('My first campaign');
//        $campaign->setStatus(\Google\AdsApi\AdWords\v201710\cm\CampaignStatus::PAUSED);
//
//        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
//        $biddingStrategyConfiguration->setBiddingStrategyType(BiddingStrategyType::MANUAL_CPC);
//        $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);
//
//        //Budget
//        $budgetService = (new \Edujugon\GoogleAds\Services\Service(\Google\AdsApi\AdWords\v201710\cm\BudgetService::class))->getService();
//        $sharedBudget = new Budget();
//        $budget = new Budget();
//
//        $budgetAmount = new Money();
//
//        $budgetAmount->setMicroAmount(50000000);
//        $sharedBudget->setAmount($budgetAmount);
//        $sharedBudget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);
//        $sharedBudget->setName("My shared budget3");
//
//        $budgetOperation = new BudgetOperation();
//        $budgetOperation->setOperand($sharedBudget);
//        $budgetOperation->setOperator(Operator::ADD);
//        $budgetId = $budgetService->mutate([$budgetOperation])->getValue()[0]->getBudgetId();
//
//        $budget->setBudgetId($budgetId);
//        $campaign->setBudget($budget);
//
//        $campaign->setAdvertisingChannelType(AdvertisingChannelType::SEARCH);
//
//        $operation = new CampaignOperation();
//        $operation->setOperand($campaign);
//        $operation->setOperator(Operator::ADD);
//
//        $result = $campaignService->mutate([$operation]);

        //dd($result);


    }
}