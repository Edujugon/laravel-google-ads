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

## API List

### Environment

- [env](https://github.com/edujugon/laravel-google-ads#env)
- [getEnv](https://github.com/edujugon/laravel-google-ads#getenv)

#### env

`env` method sets the environment to work with.

Parameters:

*   test
*   production

**Syntax**

```php
object env($env)
```

#### getEnv

`getEnv` method gets the environment.

**Syntax**

```php
string getEnv()
```

### Authorization and Session

- [oAuth](https://github.com/edujugon/laravel-google-ads#oauth)
- [getUserCredentials](https://github.com/edujugon/laravel-google-ads#getusercredentials)
- [session](https://github.com/edujugon/laravel-google-ads#session)
- [getSession](https://github.com/edujugon/laravel-google-ads#getsession)

#### oAuth

`oAuth` method generates User Credentials.

Options:

*   without parameters (It will take the google-ads config file values.)
*   with an array of data like follows:
```
'clientId' => 'CLIENT-ID',
'clientSecret' => 'CLIENT-SECRET',
'refreshToken' => 'REFRESH-TOKEN'
```

**Syntax**

```php
object oAuth(array $data = [])
```

#### getUserCredentials

`getUserCredentials` method gets UserRefreshCredentials.
>   \Google\Auth\Credentials\UserRefreshCredentials

**Syntax**

```php
object getUserCredentials()
```

#### session

`session` method sets the session to work with.

Options:

*   without parameters (It will take the google-ads config file values.)
*   with an array of data like follows:
```
'developerToken' => 'token',
'clientCustomerId' => 'id'
```

**Syntax**

```php
object session(array $data = [])
```

#### getSession

`getSession` method gets the session.
>   \Edujugon\GoogleAds\Session\AdwordsSession

**Syntax**

```php
object getSession()
```

### Services

- [service](https://github.com/edujugon/laravel-google-ads#service)
    - [select](https://github.com/edujugon/laravel-google-ads#serviceselect)
    - [limit](https://github.com/edujugon/laravel-google-ads#servicelimit)
    - [orderBy](https://github.com/edujugon/laravel-google-ads#serviceorderby)
    - [get](https://github.com/edujugon/laravel-google-ads#serviceget)
    - [getService](https://github.com/edujugon/laravel-google-ads#servicegetservice)
    
#### service

`service` method sets and gets the google service.

Parameter:

*   \Google\AdsApi\AdWords\v201609\cm\*
>   E.g. CampaignService::class / AdGroupService::class / ...

**Syntax**

```php
object service($service)
```

##### service/select

`select` method sets the fields to retrieve.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object select($fields)
```

##### service/limit

`limit` method sets the amount of items to retrieve.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object limit($number, $offset = 0)
```

##### service/orderBy

`orderBy` method sets the order by a field.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object orderBy($field)
```

##### service/get

`get` method gets the entries of the query.

Optional:

*   Accepts fields as parameter. In this case you don't need to call select method previously.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object get($fields = [])
```

##### service/getService

`getService` method gets the AdWordsService.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object getService()
```


### Reports

- [report](https://github.com/edujugon/laravel-google-ads#report)
    - [select](https://github.com/edujugon/laravel-google-ads#reportselect)
    - [from](https://github.com/edujugon/laravel-google-ads#reportfrom)
    - [during](https://github.com/edujugon/laravel-google-ads#reportduring)
    - [where](https://github.com/edujugon/laravel-google-ads#reportwhere)
    - [getAsSimpleXMLObj](https://github.com/edujugon/laravel-google-ads#reportgetassimplexmlobj)
    - [getAsObj](https://github.com/edujugon/laravel-google-ads#reportgetasobj)
    - [getAsString](https://github.com/edujugon/laravel-google-ads#reportgetasstring)
    - [getStream](https://github.com/edujugon/laravel-google-ads#reportgetstream)
    - [saveToFile](https://github.com/edujugon/laravel-google-ads#reportsavetofile)
    - [getFormats](https://github.com/edujugon/laravel-google-ads#reportgetformats)
    - [getFields](https://github.com/edujugon/laravel-google-ads#reportgetfields)
    - [getTypes](https://github.com/edujugon/laravel-google-ads#reportgettypes)
    - [format](https://github.com/edujugon/laravel-google-ads#reportformat)
    
- [showReportTypes](https://github.com/edujugon/laravel-google-ads#showreporttypes)

### Fields

- [fields](https://github.com/edujugon/laravel-google-ads#fields)
    - [of](https://github.com/edujugon/laravel-google-ads#fieldsof)
    - [asObj](https://github.com/edujugon/laravel-google-ads#fieldsasobj)
    - [asList](https://github.com/edujugon/laravel-google-ads#fieldsaslist)
    - [asQuerySelector](https://github.com/edujugon/laravel-google-ads#fieldsasqueryselector)
    
### Format

- [showReportFormats](https://github.com/edujugon/laravel-google-ads#showreportformats)


##  Usage samples

```
$ads = new GoogleAds();
```
>   Do not forget to put at the top of the file the use statement:
```
use Edujugon\GoogleAds\GoogleAds;
```