# Together\Taxes\Provider\AvaTax\Swagger\BatchesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelBatch**](BatchesApi.md#cancelBatch) | **POST** /api/v2/companies/{companyId}/batches/{id}/cancel | Cancel an in progress batch
[**createBatches**](BatchesApi.md#createBatches) | **POST** /api/v2/companies/{companyId}/batches | Create a new batch
[**createTransactionBatch**](BatchesApi.md#createTransactionBatch) | **POST** /api/v2/companies/{companyId}/batches/transactions | Create a new transaction batch
[**deleteBatch**](BatchesApi.md#deleteBatch) | **DELETE** /api/v2/companies/{companyId}/batches/{id} | Delete a single batch
[**downloadBatch**](BatchesApi.md#downloadBatch) | **GET** /api/v2/companies/{companyId}/batches/{batchId}/files/{id}/attachment | Download a single batch file
[**getBatch**](BatchesApi.md#getBatch) | **GET** /api/v2/companies/{companyId}/batches/{id} | Retrieve a single batch
[**listBatchesByCompany**](BatchesApi.md#listBatchesByCompany) | **GET** /api/v2/companies/{companyId}/batches | Retrieve all batches for this company
[**queryBatches**](BatchesApi.md#queryBatches) | **GET** /api/v2/batches | Retrieve all batches


# **cancelBatch**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel cancelBatch($company_id, $id, $x_avalara_client)

Cancel an in progress batch

Marks the in progress batch identified by this URL as cancelled.                Only JSON batches can be cancelled. If you attempt to cancel a file batch, you will receive an error message.                Only in progress batches can be cancelled.  If you attempt to cancel a batch that its status is not Waiting or Processing, you will receive an error message.  Cancelling an in progress batch does not delete any transactions that were created before the cancellation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch.
$id = 56; // int | The ID of the batch to cancel.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->cancelBatch($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->cancelBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch. |
 **id** | **int**| The ID of the batch to cancel. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel**](../Model/BatchModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBatches**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel[] createBatches($company_id, $x_avalara_client, $body)

Create a new batch

Create one or more new batch objects attached to this company.                Each batch object may have one or more file objects (currently only one file is supported).                When a batch is created, it is added to the AvaTax Batch Queue and will be  processed as quickly as possible in the order it was received. To check the  status of a batch, fetch the batch and retrieve the results of the batch  operation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).                The maximum content length of the request body is limited to 28.6 MB. If this limit  is exceeded, a 404 Not Found status will be returned (possibly with a CORS error if  the API is called from a browser). In this situation, please split the request into  smaller batches.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel()); // \Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel[] | The batch you wish to create.

try {
    $result = $apiInstance->createBatches($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->createBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel[]**](../Model/BatchModel.md)| The batch you wish to create. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel[]**](../Model/BatchModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransactionBatch**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionBatchResponseModel createTransactionBatch($company_id, $x_avalara_client, $body)

Create a new transaction batch

Create a new transaction batch objects attached to this company.                When a transaction batch is created, it is added to the AvaTax Batch v2 Queue and will be  processed as quickly as possible in the order it was received. To check the  status of a batch, fetch the batch and retrieve the results of the batch  operation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).                The maximum content length of the request body is limited to 28.6 MB. If this limit  is exceeded, a 404 Not Found status will be returned (possibly with a CORS error if  the API is called from a browser). In this situation, please split the request into  smaller batches.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionBatchRequestModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionBatchRequestModel | The transaction batch you wish to create.

try {
    $result = $apiInstance->createTransactionBatch($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->createTransactionBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionBatchRequestModel**](../Model/CreateTransactionBatchRequestModel.md)| The transaction batch you wish to create. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionBatchResponseModel**](../Model/CreateTransactionBatchResponseModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBatch**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[] deleteBatch($company_id, $id, $x_avalara_client)

Delete a single batch

Marks the batch identified by this URL as deleted.                If you attempt to delete a batch that is being processed, you will receive an error message.  Deleting a batch does not delete any transactions that were created by importing the batch.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).  ### Security Policies  * This API requires one of the following user roles: CSPAdmin, CSPTester, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch.
$id = 56; // int | The ID of the batch to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteBatch($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->deleteBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch. |
 **id** | **int**| The ID of the batch to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadBatch**
> \SplFileObject downloadBatch($company_id, $batch_id, $id, $x_avalara_client)

Download a single batch file

Download a single batch file identified by this URL.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin, TechnicalSupportUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch
$batch_id = 56; // int | The ID of the batch object
$id = 56; // int | The primary key of this batch file object
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->downloadBatch($company_id, $batch_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->downloadBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch |
 **batch_id** | **int**| The ID of the batch object |
 **id** | **int**| The primary key of this batch file object |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatch**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel getBatch($company_id, $id, $x_avalara_client)

Retrieve a single batch

Get the batch object identified by this URL. A batch object is a large  collection of API calls stored in a compact file.                Use this endpoint to retrieve the results or check the status of a batch.                When a batch is created, it is added to the AvaTax Batch Queue and will be  processed as quickly as possible in the order it was received. To check the  status of a batch, fetch the batch and retrieve the results of the batch  operation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin, TechnicalSupportUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this batch
$id = 56; // int | The primary key of this batch
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getBatch($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->getBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this batch |
 **id** | **int**| The primary key of this batch |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\BatchModel**](../Model/BatchModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBatchesByCompany**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultBatchModel listBatchesByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all batches for this company

List all batch objects attached to the specified company.                A batch object is a large collection of API calls stored in a compact file.                Search for specific objects using the criteria in the `$filter` parameter;  full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate results using the `$top`, `$skip`, and `$orderby` parameters.                Use [GetBatch](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Batches/GetBatch/)  to retrieve the results, or check the status, of an individual batch.                When a batch is created, it is added to the AvaTax Batch Queue and will be  processed as quickly as possible in the order it was received. To check the  status of a batch, fetch the batch and retrieve the results of the batch  operation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin, TechnicalSupportUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns these batches
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* files
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listBatchesByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->listBatchesByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns these batches |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* files | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultBatchModel**](../Model/FetchResultBatchModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryBatches**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultBatchModel queryBatches($filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all batches

Get multiple batch objects across all companies.                A batch object is a large collection of API calls stored in a compact file.                Search for specific objects using the criteria in the `$filter` parameter;  full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate results using the `$top`, `$skip`, and `$orderby` parameters.                When a batch is created, it is added to the AvaTax Batch Queue and will be  processed as quickly as possible in the order it was received. To check the  status of a batch, fetch the batch and retrieve the results of the batch  operation.                Because the batch system processes with a degree of concurrency, and  because of batch sizes in the queue vary, AvaTax API is unable to accurately  predict when a batch will complete. If high performance processing is  required, please use the  [CreateTransaction API](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/).  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, SystemOperator, TechnicalSupportAdmin, TechnicalSupportUser.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Together\Taxes\Provider\AvaTax\Swagger\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* files
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryBatches($filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->queryBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* files | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultBatchModel**](../Model/FetchResultBatchModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

