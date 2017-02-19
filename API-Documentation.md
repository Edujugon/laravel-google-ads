#   API Documentation

Laravel Google Ads API Documentation

## API List

### Environment

- [env](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#env)
- [getEnv](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#getenv)

### Authorization and Session

- [oAuth](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#oauth)
- [getUserCredentials](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#getusercredentials)
- [session](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#session)
- [getSession](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#getsession)

### Services

- [service](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#service)
    - [select](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#serviceselect)
    - [limit](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#servicelimit)
    - [orderBy](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#serviceorderby)
    - [get](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#serviceget)
    - [getService](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#servicegetservice)
    
### Reports

- [report](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#report)
    - [select](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportselect)
    - [from](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportfrom)
    - [during](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportduring)
    - [where](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportwhere)
    - [getAsSimpleXMLObj](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetassimplexmlobj)
    - [getAsObj](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetasobj)
    - [getAsString](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetasstring)
    - [getStream](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetstream)
    - [saveToFile](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportsavetofile)
    - [getFormats](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetformats)
    - [getFields](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgetfields)
    - [getTypes](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportgettypes)
    - [format](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#reportformat)
    
- [showReportTypes](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#showreporttypes)

### Fields

- [fields](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#fields)
    - [of](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#fieldsof)
    - [asObj](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#fieldsasobj)
    - [asList](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#fieldsaslist)
    - [asQuerySelector](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#fieldsasqueryselector)
    
### Format

- [showReportFormats](https://github.com/edujugon/laravel-google-ads/blob/master/api-documentation.md#showreportformats)
  

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
