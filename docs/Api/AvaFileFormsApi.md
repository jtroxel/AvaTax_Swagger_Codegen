# Together\Taxes\AvaFileFormsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAvaFileForms**](AvaFileFormsApi.md#createAvaFileForms) | **POST** /api/v2/avafileforms | Create a new AvaFileForm
[**deleteAvaFileForm**](AvaFileFormsApi.md#deleteAvaFileForm) | **DELETE** /api/v2/avafileforms/{id} | Delete a single AvaFileForm
[**getAvaFileForm**](AvaFileFormsApi.md#getAvaFileForm) | **GET** /api/v2/avafileforms/{id} | Retrieve a single AvaFileForm
[**queryAvaFileForms**](AvaFileFormsApi.md#queryAvaFileForms) | **GET** /api/v2/avafileforms | Retrieve all AvaFileForms
[**updateAvaFileForm**](AvaFileFormsApi.md#updateAvaFileForm) | **PUT** /api/v2/avafileforms/{id} | Update a AvaFileForm


# **createAvaFileForms**
> \Together\Taxes\Model\AvaFileFormModel[] createAvaFileForms($x_avalara_client, $body)

Create a new AvaFileForm

Create one or more AvaFileForms  A 'AvaFileForm' represents a form supported by our returns team  ### Security Policies  * This API requires the user role Compliance Root User. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Api\AvaFileFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\AvaFileFormModel()); // \Together\Taxes\Model\AvaFileFormModel[] | The AvaFileForm you wish to create.

try {
    $result = $apiInstance->createAvaFileForms($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaFileFormsApi->createAvaFileForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AvaFileFormModel[]**](../Model/AvaFileFormModel.md)| The AvaFileForm you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\AvaFileFormModel[]**](../Model/AvaFileFormModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAvaFileForm**
> \Together\Taxes\Model\ErrorDetail[] deleteAvaFileForm($id, $x_avalara_client)

Delete a single AvaFileForm

Marks the existing AvaFileForm object at this URL as deleted.  ### Security Policies  * This API requires one of the following user roles: Compliance Root User, ComplianceUser, FirmAdmin. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Api\AvaFileFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the AvaFileForm you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteAvaFileForm($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaFileFormsApi->deleteAvaFileForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the AvaFileForm you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvaFileForm**
> \Together\Taxes\Model\AvaFileFormModel getAvaFileForm($id, $x_avalara_client)

Retrieve a single AvaFileForm

Get the AvaFileForm object identified by this URL.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CompanyUser, Compliance Root User, Compliance Temp User, ComplianceAdmin, ComplianceUser, FirmAdmin, FirmUser, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Api\AvaFileFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The primary key of this AvaFileForm
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getAvaFileForm($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaFileFormsApi->getAvaFileForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The primary key of this AvaFileForm |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AvaFileFormModel**](../Model/AvaFileFormModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryAvaFileForms**
> \Together\Taxes\Model\FetchResultAvaFileFormModel queryAvaFileForms($filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve all AvaFileForms

Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CompanyUser, Compliance Root User, Compliance Temp User, ComplianceAdmin, ComplianceUser, FirmAdmin, FirmUser, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Api\AvaFileFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* outletTypeId
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryAvaFileForms($filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaFileFormsApi->queryAvaFileForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* outletTypeId | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultAvaFileFormModel**](../Model/FetchResultAvaFileFormModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAvaFileForm**
> \Together\Taxes\Model\AvaFileFormModel updateAvaFileForm($id, $x_avalara_client, $body)

Update a AvaFileForm

All data from the existing object will be replaced with data in the object you PUT.  To set a field's value to null, you may either set its value to null or omit that field from the object you post.  ### Security Policies  * This API requires the user role Compliance Root User. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Api\AvaFileFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the AvaFileForm you wish to update
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\AvaFileFormModel(); // \Together\Taxes\Model\AvaFileFormModel | The AvaFileForm model you wish to update.

try {
    $result = $apiInstance->updateAvaFileForm($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvaFileFormsApi->updateAvaFileForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the AvaFileForm you wish to update |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AvaFileFormModel**](../Model/AvaFileFormModel.md)| The AvaFileForm model you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\AvaFileFormModel**](../Model/AvaFileFormModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

