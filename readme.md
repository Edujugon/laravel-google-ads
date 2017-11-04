# Google Adwords API for Laravel

Simple and easy to use API for your Google Adwords.

##  Installation

##### Type in console:

```
composer require edujugon/laravel-google-ads
```

##### Laravel 5.5 or higher?

Then you don't have to either register or add the alias, this package uses Package Auto-Discovery's feature, and should be available as soon as you install it via Composer.

##### (Only for Laravel 5.4 or minor) Register the GoogleAds service by adding it to the providers array.

```
'providers' => array(
        ...
        Edujugon\GoogleAds\Providers\GoogleAdsServiceProvider::class
    )
```

##### (Only for Laravel 5.4 or minor) Let's add the Alias facade, add it to the aliases array.

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

### Google Services

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

or Any google ads services available under `Google\AdsApi\AdWords\v201710\cm` folder.

Also you can use the global helper in order the get an instance of Service.

```
$service = google_service(CampaignService::class)
```

To retrieve a list of campaigns, do like follows:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->get();
```

> Notice the method `select` is required and you have to use it in order to set the fields you wanna get from the campaign.

If need to add a condition to your search you can use the `where` method like follows:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->where('Id IN [752331963,795625088]')
    ->get();
or

$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->where('Id = 752331963')
    ->get();
```
> Notice! You may also set more than one condition. Do so calling `where` method as many times as you need.

Available Operators: 

```
= | != | > | >= | < | <= | IN | NOT_IN | STARTS_WITH | STARTS_WITH_IGNORE_CASE |
CONTAINS | CONTAINS_IGNORE_CASE | DOES_NOT_CONTAIN | DOES_NOT_CONTAIN_IGNORE_CASE |
CONTAINS_ANY | CONTAINS_NONE | CONTAINS_ALL
```

If need to limit your search you may use `limit` method:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->limit(5)
    ->get();
    
```

Also you can order by a field:

```
$ads->service(CampaignService::class)
    ->select(['Id', 'Name', 'Status', 'ServingStatus', 'StartDate', 'EndDate'])
    ->orderBy('Name')
    ->limit(5)
    ->get();

```

Notice that the `get` method returns an instance of ServiceCollection. 
That custom collection has its own methods.

Once you have the collection, you can again filter with the where method

```
$campaignService = $ads->service(CampaignService::class);

$results = $campaignService->select('CampaignId','CampaignName')->get();

//You can also add any where condition on the list.
$campaign = $results->where('id',1341312);

```

Also you can call the `set` method to change any value

```
$campaign = $results->where('id',$this->testedCampaignId)->set('name','hello !!');

```

Finally you can persist those changes with the `save` method:

```
$campaign = $campaign->save();
```

Save method returns an array of updated elements or false if nothing updated.

> Important!! notice that it will persist all elements that are in the collection.

You can get the list as illuminate collection simply calling `items` method.

### Google Reports

To start with google reporting just call `report` method from the main wrapper:

```
$report = $ads->report();
```

or use the global helper like follows:

```
$report = google_report();
```

It will return an instance of `Edujugon\GoogleAds\Reports\Report`

Now, you have a set of method to prepare the google ads report:

```
$obj = $ads->report()
            ->from('CRITERIA_PERFORMANCE_REPORT')
            ->during('20170101','20170210')
            ->where('CampaignId = 752331963')
            ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
            ->getAsObj();
```

In the above methods, the mandatory ones are `from` and `select`

>   Notice that in `during` method you have to pass the dates as a string like YearMonthDay

You may also want to set more than one condition. Use Where clause as many times as you need like follows:

```
$obj = $ads->report()
            ->from('CRITERIA_PERFORMANCE_REPORT')
            ->where('Clicks > 10')
            ->where('Cost > 10')
            ->where('Impressions > 1')
            ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
            ->getAsObj();
```
Available Operators: 

```
= | != | > | >= | < | <= | IN | NOT_IN | STARTS_WITH | STARTS_WITH_IGNORE_CASE |
CONTAINS | CONTAINS_IGNORE_CASE | DOES_NOT_CONTAIN | DOES_NOT_CONTAIN_IGNORE_CASE |
CONTAINS_ANY | CONTAINS_NONE | CONTAINS_ALL
```

Want to exclude any field? Just do it like follows:

```
$obj = $ads->report()
           ->from('SHOPPING_PERFORMANCE_REPORT')
           ->select(\Edujugon\GoogleAds\Facades\GoogleAds::fields()->of('SHOPPING_PERFORMANCE_REPORT')->asList())
           ->except('SearchImpressionShare','ExternalConversionSource','Ctr','Cost','Date','Week','Year','AverageCpc','Clicks','ClickType','ConversionCategoryName','ConversionTrackerId','ConversionTypeName')
            ->getAsObj();
```


If want to see the retrieve items, just get so by `result` property of the object returned:

```
$items = $obj->result;
```

> Notice that it is a Collection. So you have all collection methods available.
 
If need the report in another format, just call `format` method before getting the report:

```
$string = $ads->report()
            ->format('CSVFOREXCEL')
            ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
            ->from('CRITERIA_PERFORMANCE_REPORT')
            ->getAsString();
```

To see the available report formats:

```
$ads->report()->getFormats()
```

To see what fields are available for a specific report type you can do like follows:

```
$fields = $ads->report()->from('CRITERIA_PERFORMANCE_REPORT')->getFields();
```


If want to know what report types are available, just do like follow:

```
$ads->report()->getTypes();
```

There are 3 output formats for the report. It can be as object, as stream, as string.

```
getAsString();
getStream();
getAsObj();
```

Also you can save the report in a file:

```
$saved = $ads->report()
             ->select('CampaignId','AdGroupId','AdGroupName','Id', 'Criteria', 'CriteriaType','Impressions', 'Clicks', 'Cost', 'UrlCustomParameters')
             ->from('CRITERIA_PERFORMANCE_REPORT')
             ->saveToFile($filePath)
```

> The above code will create a file in the passed path returning true if everything was fine. 

##  API Documentation

[Full API List](https://edujugon.github.io/laravel-google-ads/build/master/Edujugon/GoogleAds/GoogleAds.html)
