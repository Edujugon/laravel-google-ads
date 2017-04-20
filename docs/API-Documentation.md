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
    - [where](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicewhere)
    - [orderBy](https://edujugon.github.io/laravel-google-ads/API-Documentation#serviceorderby)
    - [limit](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicelimit)
    - [get](https://edujugon.github.io/laravel-google-ads/API-Documentation#serviceget)
    - [getService](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicegetservice)

### ServiceCollection
>   After calling the `get` service method you are getting a serviceCollection

- [where](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicecollectionwhere)
- [set](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicecollectionset)
- [save](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicecollectionsave)
- [items](https://edujugon.github.io/laravel-google-ads/API-Documentation#servicecollectionitems)

### Reports

- [report](https://edujugon.github.io/laravel-google-ads/API-Documentation#report)
    - [select](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportselect)
    - [except](https://edujugon.github.io/laravel-google-ads/API-Documentation#reportexcept)
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

- [fields](https://edujugon.github.io/laravel-google-ads/API-Documentation#field)
    - [of](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsof)
    - [asObj](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsasobj)
    - [asList](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsaslist)
    - [asQuerySelector](https://edujugon.github.io/laravel-google-ads/API-Documentation#fieldsasqueryselector)
    
### Format

- [showReportFormats](https://edujugon.github.io/laravel-google-ads/API-Documentation#showreportformats)
  

### Global Functions

- [google_report](https://edujugon.github.io/laravel-google-ads/API-Documentation#globalfunctionsgoogle_report)
- [google_service](https://edujugon.github.io/laravel-google-ads/API-Documentation#globalfunctionsgoogle_service)

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

##### service/where

`where` method sets where condition. It can be called as many times as you need so all conditions will be set for the query.

>   Available Operators: 

```
= | != | > | >= | < | <= | IN | NOT_IN | STARTS_WITH | STARTS_WITH_IGNORE_CASE |
CONTAINS | CONTAINS_IGNORE_CASE | DOES_NOT_CONTAIN | DOES_NOT_CONTAIN_IGNORE_CASE |
CONTAINS_ANY | CONTAINS_NONE | CONTAINS_ALL
```

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object where($condition)
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

`get` method gets the entries of the query as a ServiceCollection.

Optional:

*   Accepts fields as parameter. In this case you don't need to call select method previously.

**Syntax**

```php
Edujugon\GoogleAds\Services\ServiceCollection object get($fields = [])
```

##### service/getService

`getService` method gets the AdWordsService.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service object getService()
```

### ServiceCollection

#### servicecollection/where

`where` method filters the list matching the field with the passed value.
You can do the opposite matching passing `true` as third parameter.

**Syntax**

```php
Edujugon\GoogleAds\Services\ServiceCollection object where($field, $value,$opposite = false)
```

#### servicecollection/set

`set` method updates all items of the list the passed field with the passed value.

**Syntax**

```php
Edujugon\GoogleAds\Services\ServiceCollection object set($field, $value)
```

#### servicecollection/save

`save` method persists the data of list items in google.

**Syntax**

```php
false | array save()
```

#### servicecollection/items

`items` method gets the items as Illuminate collection.

**Syntax**

```php
Illuminate\Support\Collection object items()
```

### Reports

#### report

`report` method gets an instance of Edujugon\GoogleAds\Reports\Report.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object report()
```

##### report/select

`select` method sets the fields to retrieve.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object select($fields)
```

##### report/except

`except` method pull out any field you pass from the filed list.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object except($excepts)
```

##### report/from

`from` method sets the report type.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object from($reportType)
```

##### report/during

`during` method sets the starting and ending dates.
> dates format 'Ymd' => e.g. 20170112,20171020

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object during($starting,$ending)
```

##### report/where

`where` method sets where condition. It can be called as many times as you need so all conditions will be set for the query.

>   Available Operators: 

```
= | != | > | >= | < | <= | IN | NOT_IN | STARTS_WITH | STARTS_WITH_IGNORE_CASE |
CONTAINS | CONTAINS_IGNORE_CASE | DOES_NOT_CONTAIN | DOES_NOT_CONTAIN_IGNORE_CASE |
CONTAINS_ANY | CONTAINS_NONE | CONTAINS_ALL
```

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report object where($condition)
```

##### report/getAsSimpleXMLObj

`getAsSimpleXMLObj` method gets the report as a SimpleXMLObj.

**Syntax**

```php
\SimpleXMLElement object getAsSimpleXMLObj()
```

##### report/getAsObj

`getAsObj` method gets the report as a object.

**Syntax**

```php
\Edujugon\GoogleAds\Reports\MyReport object getAsObj()
```

##### report/getAsString

`getAsString` method gets the report as a string.

**Syntax**

```php
string getAsString()
```

##### report/getStream

`getStream` method gets the report as a stream.

**Syntax**

```php
Stream getStream()
```

##### report/saveToFile

`saveToFile` method saves the report in a file.

> The second parameter is not required. But you can override it if wanna get it in another format.

**Syntax**

```php
bool saveToFile($filePath,$format = 'csvforexcel')
```

##### report/getFormats

`getFormats` method gets a list of report formats.

**Syntax**

```php
array getFormats()
```

##### report/getFields

`getFields` method gets a list of report type fields.

**Syntax**

```php
array getFields()
```

##### report/getTypes

`getTypes` method gets a list of report types.

**Syntax**

```php
array getTypes()
```

##### report/format

`format` method sets the format for the report.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report format($format)
```

### showReportTypes

`showReportTypes` method gets a list of report types.

**Syntax**

```php
array showReportTypes()
```

### fields

##### field

`fields` method gets an instance of Fields.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Fields fields()
```

##### fields/of

`of` method sets the report type

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report of($reportType)
```

##### fields/asObj

`asObj` method gets fields as object

> The object properties will be the fields names and each property is an array with type and accepted values.

**Syntax**

```php
\stdClass object asObj()
```

##### fields/asList

`asList` method gets array of fields names.

**Syntax**

```php
array asList()
```

##### fields/asQuerySelector

`asQuerySelector` method gets a string of fields separated by commas.

**Syntax**

```php
string asQuerySelector()
```

### showReportFormats

`showReportFormats` method gets a list of report formats.

**Syntax**

```php
array showReportFormats()
```

### Global functions
    
##### globalfunctions/google_report

`google_report` function gets an instance of Report.

**Syntax**

```php
Edujugon\GoogleAds\Reports\Report google_report($session = null)
```

##### globalfunctions/google_service

`google_service` function gets an instance of Service.

**Syntax**

```php
Edujugon\GoogleAds\Services\Service google_service($service,$session = null)
```