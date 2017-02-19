#   API Documentation

Laravel Google Ads Package API Documentation

## API List

### Environment

- [env](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#env)
- [getEnv](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#getenv)

### Authorization and Session

- [oAuth](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#oauth)
- [getUserCredentials](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#getusercredentials)
- [session](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#session)
- [getSession](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#getsession)

### Services

- [service](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#service)
    - [select](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#serviceselect)
    - [limit](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#servicelimit)
    - [orderBy](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#serviceorderby)
    - [get](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#serviceget)
    - [getService](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#servicegetservice)
    
### Reports

- [report](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#report)
    - [select](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportselect)
    - [from](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportfrom)
    - [during](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportduring)
    - [where](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportwhere)
    - [getAsSimpleXMLObj](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetassimplexmlobj)
    - [getAsObj](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetasobj)
    - [getAsString](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetasstring)
    - [getStream](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetstream)
    - [saveToFile](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportsavetofile)
    - [getFormats](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetformats)
    - [getFields](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgetfields)
    - [getTypes](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportgettypes)
    - [format](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#reportformat)
    
- [showReportTypes](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#showreporttypes)

### Fields

- [fields](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#fields)
    - [of](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#fieldsof)
    - [asObj](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#fieldsasobj)
    - [asList](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#fieldsaslist)
    - [asQuerySelector](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#fieldsasqueryselector)
    
### Format

- [showReportFormats](https://github.com/edujugon/laravel-google-ads/blob/master/API-Documentation.md#showreportformats)
  

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
