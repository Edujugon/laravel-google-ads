<?php

namespace Edujugon\GoogleAds\Auth;


use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;

/**
 * Command line example that prompts you for the required OAuth2 credentials
 * to generate an offline refresh token for installed application flows.
 *
 * <p>You can then use this refresh token to generate access tokens to
 * authenticate against the ads API(s) you're using.
 */
class RefreshToken {

    /**
     * @var string the OAuth2 scope for the AdWords API
     * @see https://developers.google.com/adwords/api/docs/guides/authentication#scope
     */
    protected $adwods_api_scope = 'https://www.googleapis.com/auth/adwords';

    /**
     * @var string the Google OAuth2 authorization URI for OAuth2 requests
     * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
     */
    protected $authorization_uri= 'https://accounts.google.com/o/oauth2/v2/auth';

    /**
     * @var string the redirect URI for OAuth2 installed application flows
     * @see https://developers.google.com/identity/protocols/OAuth2InstalledApp#formingtheurl
     */
    protected $redirect_uri= 'urn:ietf:wg:oauth:2.0:oob';

    protected $scope = 'https://www.googleapis.com/auth/adwords';

    public static function byConsole()
    {
        $self = new static();

        $stdin = fopen('php://stdin', 'r');

        print 'Enter your OAuth2 client ID here: ';
        $clientId = trim(fgets($stdin));

        print 'Enter your OAuth2 client secret here: ';

        $clientSecret = trim(fgets($stdin));

        $oauth2 = new OAuth2([
            'authorizationUri' => $self->authorization_uri,
            'redirectUri' => $self->redirect_uri,
            'tokenCredentialUri' => CredentialsLoader::TOKEN_CREDENTIAL_URI,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'scope' => $self->scope
        ]);

        printf(
            "Log into the Google account you use for %s and visit the following "
            . "URL:\n%s\n\n",
            'AdWords',
            $oauth2->buildFullAuthorizationUri()
        );
        print
            'After approving the application, enter the authorization code here: ';
        $code = trim(fgets($stdin));
        fclose($stdin);
        print "\n";

        $oauth2->setCode($code);
        $authToken = $oauth2->fetchAuthToken();

        printf("Your refresh token is: %s\n\n", $authToken['refresh_token']);
        printf(
            "Copy the following lines to your 'adsapi_php.ini' file:\n"
            . "clientId = \"%s\"\n"
            . "clientSecret = \"%s\"\n"
            . "refreshToken = \"%s\"\n",
            $clientId,
            $clientSecret,
            $authToken['refresh_token']
        );

    }

}