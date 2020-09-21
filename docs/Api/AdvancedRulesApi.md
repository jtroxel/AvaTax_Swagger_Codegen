# Together\Taxes\AdvancedRulesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompanyLookupFile**](AdvancedRulesApi.md#createCompanyLookupFile) | **POST** /api/v2/advancedrules/accounts/{accountId}/companies/{companyId}/lookupFiles | Create a lookup file for a company
[**deleteLookupFile**](AdvancedRulesApi.md#deleteLookupFile) | **DELETE** /api/v2/advancedrules/accounts/{accountId}/lookupFiles/{id} | Delete a lookup file
[**getAuditRecords**](AdvancedRulesApi.md#getAuditRecords) | **GET** /api/v2/advancedrules/audits/accounts/{accountId}/from/{fromDate}/to/{toDate} | Get audit records by account id and date range.
[**getCompanyLookupFiles**](AdvancedRulesApi.md#getCompanyLookupFiles) | **GET** /api/v2/advancedrules/accounts/{accountId}/companies/{companyId}/lookupFiles | Get the lookup files for a company
[**getLookupFile**](AdvancedRulesApi.md#getLookupFile) | **GET** /api/v2/advancedrules/accounts/{accountId}/lookupFiles/{id} | Get a lookup file for an accountId and companyLookupFileId
[**updateLookupFile**](AdvancedRulesApi.md#updateLookupFile) | **PUT** /api/v2/advancedrules/accounts/{accountId}/lookupFiles/{id} | Update a lookup file


# **createCompanyLookupFile**
> \Together\Taxes\Model\AdvancedRuleLookupFileModel createCompanyLookupFile($account_id, $company_id, $x_avalara_client, $body)

Create a lookup file for a company

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account for the company
$company_id = 56; // int | The ID of the company for which the lookup file is to be created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\AdvancedRuleLookupFileModel(); // \Together\Taxes\Model\AdvancedRuleLookupFileModel | The lookup file you wish to create

try {
    $result = $apiInstance->createCompanyLookupFile($account_id, $company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->createCompanyLookupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account for the company |
 **company_id** | **int**| The ID of the company for which the lookup file is to be created |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)| The lookup file you wish to create | [optional]

### Return type

[**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLookupFile**
> \Together\Taxes\Model\ErrorDetail[] deleteLookupFile($account_id, $id, $x_avalara_client)

Delete a lookup file

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account for the company the lookup file is for
$id = "id_example"; // string | The unique ID/GUID for the company lookup file to be deleted
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteLookupFile($account_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->deleteLookupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account for the company the lookup file is for |
 **id** | **string**| The unique ID/GUID for the company lookup file to be deleted |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditRecords**
> \Together\Taxes\Model\AdvancedRuleLookupFileModel getAuditRecords($account_id, $from_date, $to_date, $x_avalara_client)

Get audit records by account id and date range.

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account
$from_date = "from_date_example"; // string | Date
$to_date = "to_date_example"; // string | Date
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getAuditRecords($account_id, $from_date, $to_date, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->getAuditRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account |
 **from_date** | **string**| Date |
 **to_date** | **string**| Date |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyLookupFiles**
> \Together\Taxes\Model\FetchResultAdvancedRuleLookupFileModel getCompanyLookupFiles($account_id, $company_id, $x_avalara_client)

Get the lookup files for a company

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The account ID for the company
$company_id = 56; // int | The ID of the company for which to retrieve lookup files
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCompanyLookupFiles($account_id, $company_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->getCompanyLookupFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The account ID for the company |
 **company_id** | **int**| The ID of the company for which to retrieve lookup files |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultAdvancedRuleLookupFileModel**](../Model/FetchResultAdvancedRuleLookupFileModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLookupFile**
> \Together\Taxes\Model\AdvancedRuleLookupFileModel getLookupFile($account_id, $id, $x_avalara_client)

Get a lookup file for an accountId and companyLookupFileId

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account for the lookup file
$id = "id_example"; // string | The unique ID/GUID of the company lookup file to return
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getLookupFile($account_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->getLookupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account for the lookup file |
 **id** | **string**| The unique ID/GUID of the company lookup file to return |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLookupFile**
> \Together\Taxes\Model\AdvancedRuleLookupFileModel updateLookupFile($account_id, $id, $x_avalara_client, $body)

Update a lookup file

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


$apiInstance = new Together\Taxes\Api\AdvancedRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account for the company the lookup file is for
$id = "id_example"; // string | The unique ID/GUID of the company lookup file to be updated
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\AdvancedRuleLookupFileModel(); // \Together\Taxes\Model\AdvancedRuleLookupFileModel | The new values to update the lookup file

try {
    $result = $apiInstance->updateLookupFile($account_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvancedRulesApi->updateLookupFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account for the company the lookup file is for |
 **id** | **string**| The unique ID/GUID of the company lookup file to be updated |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)| The new values to update the lookup file | [optional]

### Return type

[**\Together\Taxes\Model\AdvancedRuleLookupFileModel**](../Model/AdvancedRuleLookupFileModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

