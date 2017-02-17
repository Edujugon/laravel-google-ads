# Google Adwords Package

> **Note:** This library is under development

Laravel package for Google Adwords. Wrapper of [`googleads/googleads-php-lib`](https://github.com/googleads/googleads-php-lib) for Laravel.

##  Installation

##### Type in console:

```
composer require edujugon/laravel-google-ads
```

##### Register the GoogleAds service by adding it to the providers array.

```
'providers' => array(
        ...
        Edujugon\GoogleAds\Providers\GoogleAdsServiceProvider::class
    )
```

##### Let's add the Alias facade, add it to the aliases array.

```
'aliases' => array(
        ...
        'GoogleAds' => Edujugon\GoogleAds\Facades\GoogleAds::class,
    )
```

##### Publish the package's configuration file to the application's own config directory.

```
php artisan vendor:publish --provider="Edujugon\GoogleAds\Providers\GoogleAdsServiceProvider" --tag="config"
```

The above command will generate a new file under your laravel app config folder called `google-ads.php`

##  Configuration

Update the `google-ads.php` file with your data.

```
'env' => 'test',
'production' => [
    'developerToken' => "YOUR-DEV-TOKEN",
    'clientCustomerId' => "CLIENT-CUSTOMER-ID",
    'userAgent' => "YOUR-NAME",
    'clientId' => "CLIENT-ID",
    'clientSecret' => "CLIENT-SECRET",
    'refreshToken' => "REFRESH-TOKEN"
],
'test' => [
    'developerToken' => "YOUR-DEV-TOKEN",
    'clientCustomerId' => "CLIENT-CUSTOMER-ID",
    'userAgent' => "YOUR-NAME",
    'clientId' => "CLIENT-ID",
    'clientSecret' => "CLIENT-SECRET",
    'refreshToken' => "REFRESH-TOKEN"
],
```
>   'env' key accepts one of the following values: test / production

##  Generate refresh token

>   Notice that it will take the `clientID` and `clientSecret` from `google-ads.php` config file based on the `env` value.

Type in console:

```
php artisan googleads:token:generate
```

*   Visit the URL it shows, grant access to your app and input the access token in console.
*   Then copy the fresh token in `google-ads.php` config file.

>   Remember to copy that token in the correct section (test/production).Depends on your `env` value.


##  Usage

```
$ads = new GoogleAds();
```
>   Do not forget the Class statement:
```
use Edujugon\GoogleAds\GoogleAds;
```

## API List

### Environment

- [env](https://github.com/edujugon/laravel-google-ads#env)
- [getEnv](https://github.com/edujugon/laravel-google-ads#getenv)

### Authorization and Session

- [oAuth](https://github.com/edujugon/laravel-google-ads#oauth)
- [getUserCredentials](https://github.com/edujugon/laravel-google-ads#getusercredentials)
- [session](https://github.com/edujugon/laravel-google-ads#session)
- [getSession](https://github.com/edujugon/laravel-google-ads#getsession)

### Services

- [service](https://github.com/edujugon/laravel-google-ads#service)
- [getService](https://github.com/edujugon/laravel-google-ads#getservice)
- [adGroupService](https://github.com/edujugon/laravel-google-ads#adgroupservice)
- [adGroupAdService](https://github.com/edujugon/laravel-google-ads#adgroupadservice)
- [campaignService](https://github.com/edujugon/laravel-google-ads#campaignservice)
    
    - [select](https://github.com/edujugon/laravel-google-ads#service-select)
    - [limit](https://github.com/edujugon/laravel-google-ads#service-limit)
    - [orderBy](https://github.com/edujugon/laravel-google-ads#service-orderby)
    - [get](https://github.com/edujugon/laravel-google-ads#service-get)
    
    
### Reports

- [report](https://github.com/edujugon/laravel-google-ads#report)

    - [select](https://github.com/edujugon/laravel-google-ads#report-select)
    - [from](https://github.com/edujugon/laravel-google-ads#report-from)
    - [during](https://github.com/edujugon/laravel-google-ads#report-during)
    - [where](https://github.com/edujugon/laravel-google-ads#report-where)
    - [getAsSimpleXMLObj](https://github.com/edujugon/laravel-google-ads#report-getassimplexmlobj)
    - [getAsObj](https://github.com/edujugon/laravel-google-ads#report-getasobj)
    - [getAsString](https://github.com/edujugon/laravel-google-ads#report-getasstring)
    - [getStream](https://github.com/edujugon/laravel-google-ads#report-getstream)
    - [saveToFile](https://github.com/edujugon/laravel-google-ads#report-savetofile)
    - [getFormats](https://github.com/edujugon/laravel-google-ads#report-getformats)
    - [getFields](https://github.com/edujugon/laravel-google-ads#report-getfields)
    - [getTypes](https://github.com/edujugon/laravel-google-ads#report-gettypes)
    - [format](https://github.com/edujugon/laravel-google-ads#report-format)
    
- [showReportTypes](https://github.com/edujugon/laravel-google-ads#showreporttypes)

### Fields

- [fields](https://github.com/edujugon/laravel-google-ads#fields)

    - [of](https://github.com/edujugon/laravel-google-ads#fields-of)
    - [asObj](https://github.com/edujugon/laravel-google-ads#fields-asobj)
    - [asList](https://github.com/edujugon/laravel-google-ads#fields-aslist)
    - [asQuerySelector](https://github.com/edujugon/laravel-google-ads#fields-asqueryselector)
    
### Format

- [showReportFormats](https://github.com/edujugon/laravel-google-ads#showreportformats)