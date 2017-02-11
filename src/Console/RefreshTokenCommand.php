<?php
namespace Edujugon\GoogleAds\Console;

use Edujugon\GoogleAds\Auth\OAuth2;
use Edujugon\GoogleAds\Session\AdwordsSession;
use Google\AdsApi\AdWords\AdWordsServices;
use Illuminate\Console\Command;

class RefreshTokenCommand extends Command {

    /**
     * Console command signature
     *
     * @var string
     */
    protected $signature = 'googleads:token:generate';

    /**
     * Description
     *
     * @var string
     */
    protected $description = 'Generate a new refresh token for Google Adwords API';

    /**
     * @var AdWordsServices
     */
    protected $adWordsService;

    /**
     * AdWordsSession
     * @var mixed
     */
    protected $session;

    /**
     * RefreshTokenCommand constructor.
     */
    public function __construct()
    {
        $this->adWordsService = new AdWordsServices();
        $this->session = (new AdwordsSession())->oAuth()->build();
    }

    /**
     * Generate refresh token
     *
     */
    public function handle()
    {

        $authorizationUrl = (new OAuth2())->buildFullAuthorizationUri();

        // Show authorization URL
        $this->line(sprintf(
            "Log into the Google account you use for AdWords and visit the following URL:\n%s",
            $authorizationUrl
        ));
        // Retrieve token
        $accessToken = $this->ask('After approving the token enter the authorization code here:');

        try {
            $oAuth2Info = $this->adWordsService->getOAuthCredentials($this->session, $accessToken);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }

        $this->comment('Copy the refresh token in your googleads configuration file (config/google-ads.php)');
        // Print refresh token
        $this->line(sprintf(
            'Refresh token: "%s"',
            $oAuth2Info['refresh_token']
        ));
    }

}