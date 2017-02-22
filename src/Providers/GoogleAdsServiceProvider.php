<?php

namespace Edujugon\GoogleAds\Providers;

use Edujugon\GoogleAds\Console\RefreshTokenCommand;
use Edujugon\GoogleAds\GoogleAds;
use Illuminate\Support\ServiceProvider;

class GoogleAdsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = function_exists('config_path') ? config_path('google-ads.php') : 'google-ads.php';

        $this->publishes([
            __DIR__.'/../Config/config.php' => $config_path,
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Console commands
        $this->commands([
            RefreshTokenCommand::class,
        ]);

        $this->app->bind(GoogleAds::class, function ($app) {
            return new GoogleAds();
        });

    }
}
