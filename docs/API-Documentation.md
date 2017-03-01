#   API Documentation

Laravel Google Ads Package API Documentation

## API List

### Environment

- [env](https://edujugon.github.io/laravel-google-ads/API-Documentation#env)
- [getEnv](https://edujugon.github.io/laravel-google-ads/API-Documentation#getenv)

### Authorization and Session

- [oAuth](https://edujugon.github.io/laravel-google-ads/API-Documentation#oauth)
- [getUserCredentials](https://edujugon.github.io/laravel-google-ads/API-Documentation#getusercredentials)
- [session](https://edujugon.github.io/laravel-google-ads/API-Documentation#session)
- [getSession](https://edujugon.github.io/laravel-google-ads/API-Documentation#getsession)

### Services

- [service](https://edujugon.github.io/laravel-google-ads/API-Documentation#service)
    - [select](https://edujugon.github.io/laravel-google-ads/API-Documentation#serviceselect)
    - [limit](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicelimit)
    - [orderBy](https://edujugon.github.io/laravel-google-ads/API-Documentation#serviceorderby)
    - [get](https://edujugon.github.io/laravel-google-ads/API-Documentation#serviceget)
    - [getService](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicegetservice)
    
### Reports

- [report](https://edujugon.github.io/laravel-google-ads/API-Documentation#report)
    - [select](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportselect)
    - [from](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportfrom)
    - [during](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportduring)
    - [where](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportwhere)
    - [getAsSimpleXMLObj](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetassimplexmlobj)
    - [getAsObj](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetasobj)
    - [getAsString](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetasstring)
    - [getStream](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetstream)
    - [saveToFile](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportsavetofile)
    - [getFormats](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetformats)
    - [getFields](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgetfields)
    - [getTypes](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportgettypes)
    - [format](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportformat)
    
- [showReportTypes](https://edujugon.github.io/laravel-google-ads/API-Documentation#showreporttypes)

### Fields

- [fields](https://edujugon.github.io/laravel-google-ads/API-Documentation#fields)
    - [of](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsof)
    - [asObj](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsasobj)
    - [asList](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsaslist)
    - [asQuerySelector](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsasqueryselector)
    
### Format

- [showReportFormats](https://edujugon.github.io/laravel-google-ads/API-Documentation#showreportformats)
  

### Environment

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
    
#### service

`service` method sets a google service and gets an instance of Edujugon\GoogleAds\Services\Service.

Parameter:

*   \Google\AdsApi\AdWords\v201609\cm\*
>   E.g. CampaignService::class / AdGroupService::class / ...

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object service($service)
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
