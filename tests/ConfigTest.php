<?php



class ConfigTest extends PHPUnit_Framework_TestCase {

    /** @test */
    public function load_config_file(){
        $this->assertInternalType('array',eConfig());
    }

    /** @test */
    public function load_ads_config_by_env()
    {
        $this->assertArrayNotHasKey('production',eConfigGoogleAds('test'));
    }

    /** @test */
    public function pass_wrong_env()
    {
        $this->expectException(Edujugon\GoogleAds\Exceptions\Config::class);
        $this->expectExceptionMessage('Please provide a correct environment. Available options: production/test');

        eConfigGoogleAds('nothing');

    }
}