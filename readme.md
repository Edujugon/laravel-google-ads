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
        'GoogleAds' => `Edujugon\GoogleAds\Facades\GoogleAds::class,
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


##  Usage

