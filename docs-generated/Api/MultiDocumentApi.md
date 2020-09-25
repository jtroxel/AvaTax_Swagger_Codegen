# Together\Taxes\Provider\AvaTax\Swagger\MultiDocumentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adjustMultiDocumentTransaction**](MultiDocumentApi.md#adjustMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument/{code}/type/{type}/adjust | Adjust a MultiDocument transaction
[**auditMultiDocumentTransaction**](MultiDocumentApi.md#auditMultiDocumentTransaction) | **GET** /api/v2/transactions/multidocument/{code}/type/{type}/audit | Get audit information about a MultiDocument transaction
[**commitMultiDocumentTransaction**](MultiDocumentApi.md#commitMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument/commit | Commit a MultiDocument transaction
[**createMultiDocumentTransaction**](MultiDocumentApi.md#createMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument | Create a new MultiDocument transaction
[**getMultiDocumentTransactionByCodeAndType**](MultiDocumentApi.md#getMultiDocumentTransactionByCodeAndType) | **GET** /api/v2/transactions/multidocument/{code}/type/{type} | Retrieve a MultiDocument transaction
[**getMultiDocumentTransactionById**](MultiDocumentApi.md#getMultiDocumentTransactionById) | **GET** /api/v2/transactions/multidocument/{id} | Retrieve a MultiDocument transaction by ID
[**listMultiDocumentTransactions**](MultiDocumentApi.md#listMultiDocumentTransactions) | **GET** /api/v2/transactions/multidocument | Retrieve all MultiDocument transactions
[**refundMultiDocumentTransaction**](MultiDocumentApi.md#refundMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument/{code}/type/{type}/refund | Create a refund for a MultiDocument transaction
[**verifyMultiDocumentTransaction**](MultiDocumentApi.md#verifyMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument/verify | Verify a MultiDocument transaction
[**voidMultiDocumentTransaction**](MultiDocumentApi.md#voidMultiDocumentTransaction) | **POST** /api/v2/transactions/multidocument/{code}/type/{type}/void | Void a MultiDocument transaction


# **adjustMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel adjustMultiDocumentTransaction($code, $type, $include, $x_avalara_client, $body)

Adjust a MultiDocument transaction

Adjusts the current MultiDocument transaction uniquely identified by this URL.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                When you adjust a transaction, that transaction's status is recorded as `Adjusted`.                Both the revisions will be available for retrieval based on their code and ID numbers. Only transactions in Committed status can be reported on a tax filing by Avalara's Managed Returns Service.                Transactions that have been previously reported to a tax authority by Avalara Managed Returns are considered locked and are no longer available for adjustments.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The transaction code for this MultiDocument transaction
$type = "type_example"; // string | The transaction type for this MultiDocument transaction
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\AdjustMultiDocumentModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\AdjustMultiDocumentModel | The adjust request you wish to execute

try {
    $result = $apiInstance->adjustMultiDocumentTransaction($code, $type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->adjustMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The transaction code for this MultiDocument transaction |
 **type** | **string**| The transaction type for this MultiDocument transaction |
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AdjustMultiDocumentModel**](../Model/AdjustMultiDocumentModel.md)| The adjust request you wish to execute | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\AuditMultiDocumentModel auditMultiDocumentTransaction($code, $type, $x_avalara_client)

Get audit information about a MultiDocument transaction

Retrieve audit information about a MultiDocument transaction stored in AvaTax.                The audit API retrieves audit information related to a specific MultiDocument transaction.  This audit  information includes the following:                * The `code` of the MultiDocument transaction  * The `type` of the MultiDocument transaction  * The server timestamp representing the exact server time when the transaction was created  * The server duration - how long it took to process this transaction  * Whether exact API call details were logged  * A reconstructed API call showing what the original create call looked like                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The transaction code for this MultiDocument transaction
$type = "type_example"; // string | The transaction type for this MultiDocument transaction
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->auditMultiDocumentTransaction($code, $type, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->auditMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The transaction code for this MultiDocument transaction |
 **type** | **string**| The transaction type for this MultiDocument transaction |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\AuditMultiDocumentModel**](../Model/AuditMultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel commitMultiDocumentTransaction($x_avalara_client, $body)

Commit a MultiDocument transaction

Marks a list of transactions by changing its status to `Committed`.                Transactions that are committed are available to be reported to a tax authority by Avalara Managed Returns.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                Any changes made to a committed transaction will generate a transaction history.    NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\CommitMultiDocumentModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\CommitMultiDocumentModel | The commit request you wish to execute

try {
    $result = $apiInstance->commitMultiDocumentTransaction($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->commitMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CommitMultiDocumentModel**](../Model/CommitMultiDocumentModel.md)| The commit request you wish to execute | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel createMultiDocumentTransaction($include, $x_avalara_client, $body)

Create a new MultiDocument transaction

Records a new MultiDocument transaction in AvaTax.                A traditional transaction requires exactly two parties: a seller and a buyer.  MultiDocument transactions can  involve a marketplace of vendors, each of which contributes some portion of the final transaction.  Within  a MultiDocument transaction, each individual buyer and seller pair are matched up and converted to a separate  document.  This separation of documents allows each seller to file their taxes separately.                This API will report an error if you attempt to create a transaction when one already exists with the specified `code`.  If you would like the API to automatically update the transaction when it already exists, please set the `allowAdjust`  value to `true`.                To generate a refund for a transaction, use the `RefundTransaction` API.                The field `type` identifies the kind of transaction - for example, a sale, purchase, or refund.  If you do not specify  a `type` value, you will receive an estimate of type `SalesOrder`, which will not be recorded.                The origin and destination locations for a transaction must be identified by either address or geocode.  For address-based transactions, please  provide addresses in the fields `line`, `city`, `region`, `country` and `postalCode`.  For geocode-based transactions, please provide the geocode  information in the fields `latitude` and `longitude`.  If either `latitude` or `longitude` or both are null, the transaction will be calculated  using the best available address location information.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * ForceTimeout - Simulates a timeout.  This adds a 30 second delay and error to your API call.  This can be used to test your code to ensure it can respond correctly in the case of a dropped connection.                If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel | the multi document transaction model

try {
    $result = $apiInstance->createMultiDocumentTransaction($include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->createMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel**](../Model/CreateMultiDocumentModel.md)| the multi document transaction model | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultiDocumentTransactionByCodeAndType**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel getMultiDocumentTransactionByCodeAndType($code, $type, $include, $x_avalara_client)

Retrieve a MultiDocument transaction

Get the current MultiDocument transaction identified by this URL.                If this transaction was adjusted, the return value of this API will be the current transaction with this code.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | 
$type = "type_example"; // string | 
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getMultiDocumentTransactionByCodeAndType($code, $type, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->getMultiDocumentTransactionByCodeAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |
 **type** | **string**|  |
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultiDocumentTransactionById**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel getMultiDocumentTransactionById($id, $include, $x_avalara_client)

Retrieve a MultiDocument transaction by ID

Get the unique MultiDocument transaction identified by this URL.                A traditional transaction requires exactly two parties: a seller and a buyer.  MultiDocument transactions can  involve a marketplace of vendors, each of which contributes some portion of the final transaction.  Within  a MultiDocument transaction, each individual buyer and seller pair are matched up and converted to a separate  document.  This separation of documents allows each seller to file their taxes separately.                This endpoint retrieves the exact transaction identified by this ID number even if that transaction was later adjusted  by using the `AdjustTransaction` endpoint.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The unique ID number of the MultiDocument transaction to retrieve
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getMultiDocumentTransactionById($id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->getMultiDocumentTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of the MultiDocument transaction to retrieve |
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMultiDocumentTransactions**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiDocumentModel listMultiDocumentTransactions($filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all MultiDocument transactions

List all MultiDocument transactions within this account.                This endpoint is limited to returning 1,000 MultiDocument transactions at a time.  To retrieve more than 1,000 MultiDocument  transactions, please use the pagination features of the API.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* documents
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listMultiDocumentTransactions($filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->listMultiDocumentTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* documents | [optional]
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiDocumentModel**](../Model/FetchResultMultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel refundMultiDocumentTransaction($code, $type, $include, $x_avalara_client, $body)

Create a refund for a MultiDocument transaction

Create a refund for a MultiDocument transaction.                A traditional transaction requires exactly two parties: a seller and a buyer.  MultiDocument transactions can  involve a marketplace of vendors, each of which contributes some portion of the final transaction.  Within  a MultiDocument transaction, each individual buyer and seller pair are matched up and converted to a separate  document.  This separation of documents allows each seller to file their taxes separately.                The `RefundTransaction` API allows you to quickly and easily create a `ReturnInvoice` representing a refund  for a previously created `SalesInvoice` transaction.  You can choose to create a full or partial refund, and  specify individual line items from the original sale for refund.                The `RefundTransaction` API ensures that the tax amount you refund to the customer exactly matches the tax that  was calculated during the original transaction, regardless of any changes to your company's configuration, rules,  nexus, or any other setting.                This API is intended to be a shortcut to allow you to quickly and accurately generate a refund for the following  common refund scenarios:                * A full refund of a previous sale  * Refunding the tax that was charged on a previous sale, when the customer provides an exemption certificate after the purchase  * Refunding one or more items (lines) from a previous sale  * Granting a customer a percentage refund of a previous sale                For more complex scenarios than the ones above, please use `CreateTransaction` with document type `ReturnInvoice` to  create a custom refund transaction.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.    NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The code of this MultiDocument transaction
$type = "type_example"; // string | The type of this MultiDocument transaction
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\RefundTransactionModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\RefundTransactionModel | Information about the refund to create

try {
    $result = $apiInstance->refundMultiDocumentTransaction($code, $type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->refundMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The code of this MultiDocument transaction |
 **type** | **string**| The type of this MultiDocument transaction |
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\RefundTransactionModel**](../Model/RefundTransactionModel.md)| Information about the refund to create | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel verifyMultiDocumentTransaction($x_avalara_client, $body)

Verify a MultiDocument transaction

Verifies that the MultiDocument transaction uniquely identified by this URL matches certain expected values.                If the transaction does not match these expected values, this API will return an error code indicating which value did not match.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\VerifyMultiDocumentModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\VerifyMultiDocumentModel | Information from your accounting system to verify against this MultiDocument transaction as it is stored in AvaTax

try {
    $result = $apiInstance->verifyMultiDocumentTransaction($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->verifyMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\VerifyMultiDocumentModel**](../Model/VerifyMultiDocumentModel.md)| Information from your accounting system to verify against this MultiDocument transaction as it is stored in AvaTax | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidMultiDocumentTransaction**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel voidMultiDocumentTransaction($code, $type, $x_avalara_client, $body)

Void a MultiDocument transaction

Voids the current transaction uniquely identified by this URL.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                When you void a transaction, that transaction's status is recorded as `DocVoided`.                Transactions that have been previously reported to a tax authority by Avalara Managed Returns Service are considered `locked`,  and they are no longer available to be voided.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\MultiDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | The transaction code for this MultiDocument transaction
$type = "type_example"; // string | The transaction type for this MultiDocument transaction
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\VoidTransactionModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\VoidTransactionModel | The void request you wish to execute

try {
    $result = $apiInstance->voidMultiDocumentTransaction($code, $type, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiDocumentApi->voidMultiDocumentTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The transaction code for this MultiDocument transaction |
 **type** | **string**| The transaction type for this MultiDocument transaction |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\VoidTransactionModel**](../Model/VoidTransactionModel.md)| The void request you wish to execute | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiDocumentModel**](../Model/MultiDocumentModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

