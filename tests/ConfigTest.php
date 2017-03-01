<?php



class ConfigTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function load_config_file(){
        $this->assertInternalType('array',e_ads_config());
    }

    /** @test */
    public function load_ads_config_by_env()
    {
        $this->assertArrayNotHasKey('production',e_ads_config_google_ads('test'));
    }

    /** @test */
    public function pass_wrong_env()
    {
        $this->expectException(Edujugon\GoogleAds\Exceptions\Config::class);
        $this->expectExceptionMessage('Please provide a correct environment. Available options: production/test');

        e_ads_config_google_ads('nothing');

    }
}