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

##  API Documentation

[Full API List](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md)

##  Usage samples

Instance the main wrapper class:

```
$ads = new GoogleAds();
```
>   Do not forget to put at the top of the file the use statement:
```
use Edujugon\GoogleAds\GoogleAds;
```

All needed configuration data is took from `google-ads.php` config file. But you always may pass new values on the fly if required.

You may override the default environment value calling the env method:

```
$ads->env('test');
```

Also, you may get the env value by getEnv method:

```
$ads->getEnv();
```

If need to override the oAuth details, just call the oAuth method like so:

```
$ads->oAuth([
            'clientId' => 'test',
            'clientSecret' => 'test',
            'refreshToken' => 'TEST'

        ]);
```

Same with session. If need to override the default values on the fly, just do it by calling session method:

```
$ads->session([
    'developerToken' => 'token',
    'clientCustomerId' => 'id'
]);
```

All the above methods can be chained as follows:

```
$ads->env('test')
    ->oAuth([
        'clientId' => 'test',
        'clientSecret' => 'test',
        'refreshToken' => 'TEST'

    ])
    ->session([
        'developerToken' => 'token',
        'clientCustomerId' => 'id'
    ]);
```

For Google Ads Services you only have to call the service method:

```
$ads->service(CampaignService::class);
```

or

```
$ads->service(AdGroupService::class);
```

or

```
$ads->service(AdGroupAdService::class);
```

or Any google ads services available under `Google\AdsApi\AdWords\v201609\cm` folder.


> Notice that for now this package only retrieves data from those services through the package API. In further releases you'll be able to adds, updates, or removes any of those services through the package API.

If you needed to add, update, or remove items, you can do so with the google service itself. So after calling the above service method, just need to call `getService` which will return the google service instance.

```
$googleService = $ads->getService();

// Here just refere to google ads documentation to add, update, or remove items. 
```

To retrieve a list of campaigns, do like follows:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->get();
```

> Notice the method `select` is required and you have to use it in order to set the fields you wanna get from the campaign.

If need to limit your search you may use the `limit` method:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->limit(5)
    ->get();
    
```

Also you can order by any field:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->orderBy('Name')
    ->limit(5)
    ->get();

```

> Notice that limit method must be called orderBy method.


Let's talk about reporting :)

```
$ads = new GoogleAds();

$obj = $ads->report()->from('CRITERIA_PERFORMANCE_REPORT')
    ->during('20170101','20170210')
    ->where('CampaignId = 752331963')
    ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
    ->getAsObj();
```