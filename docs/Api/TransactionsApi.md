# Swagger\Client\TransactionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLines**](TransactionsApi.md#addLines) | **POST** /api/v2/companies/transactions/lines/add | Add lines to an existing unlocked transaction
[**adjustTransaction**](TransactionsApi.md#adjustTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/adjust | Correct a previously created transaction
[**auditTransaction**](TransactionsApi.md#auditTransaction) | **GET** /api/v2/companies/{companyCode}/transactions/{transactionCode}/audit | Get audit information about a transaction
[**auditTransactionWithType**](TransactionsApi.md#auditTransactionWithType) | **GET** /api/v2/companies/{companyCode}/transactions/{transactionCode}/types/{documentType}/audit | Get audit information about a transaction
[**bulkLockTransaction**](TransactionsApi.md#bulkLockTransaction) | **POST** /api/v2/transactions/lock | Lock a set of documents
[**changeTransactionCode**](TransactionsApi.md#changeTransactionCode) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/changecode | Change a transaction&#39;s code
[**commitTransaction**](TransactionsApi.md#commitTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/commit | Commit a transaction for reporting
[**createOrAdjustTransaction**](TransactionsApi.md#createOrAdjustTransaction) | **POST** /api/v2/transactions/createoradjust | Create or adjust a transaction
[**createTransaction**](TransactionsApi.md#createTransaction) | **POST** /api/v2/transactions/create | Create a new transaction
[**deleteLines**](TransactionsApi.md#deleteLines) | **POST** /api/v2/companies/transactions/lines/delete | Remove lines from an existing unlocked transaction
[**getTransactionByCode**](TransactionsApi.md#getTransactionByCode) | **GET** /api/v2/companies/{companyCode}/transactions/{transactionCode} | Retrieve a single transaction by code
[**getTransactionByCodeAndType**](TransactionsApi.md#getTransactionByCodeAndType) | **GET** /api/v2/companies/{companyCode}/transactions/{transactionCode}/types/{documentType} | Retrieve a single transaction by code
[**getTransactionById**](TransactionsApi.md#getTransactionById) | **GET** /api/v2/transactions/{id} | Retrieve a single transaction by ID
[**listTransactionsByCompany**](TransactionsApi.md#listTransactionsByCompany) | **GET** /api/v2/companies/{companyCode}/transactions | Retrieve all transactions
[**lockTransaction**](TransactionsApi.md#lockTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/lock | Lock a single transaction
[**refundTransaction**](TransactionsApi.md#refundTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/refund | Create a refund for a transaction
[**settleTransaction**](TransactionsApi.md#settleTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/settle | Perform multiple actions on a transaction
[**uncommitTransaction**](TransactionsApi.md#uncommitTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/uncommit | Uncommit a transaction for reporting
[**unvoidTransaction**](TransactionsApi.md#unvoidTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/unvoid | Unvoids a transaction
[**verifyTransaction**](TransactionsApi.md#verifyTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/verify | Verify a transaction
[**voidTransaction**](TransactionsApi.md#voidTransaction) | **POST** /api/v2/companies/{companyCode}/transactions/{transactionCode}/void | Void a transaction


# **addLines**
> \Swagger\Client\Model\TransactionModel addLines($include, $x_avalara_client, $body)

Add lines to an existing unlocked transaction

Add lines to an existing unlocked transaction.                 The `AddLines` API allows you to add additional transaction lines to existing transaction, so that customer will   be able to append multiple calls together and form an extremely large transaction. If customer does not specify line number   in the lines to be added, a new random Guid string will be generated for line number. If customer are not satisfied with   the line number for the transaction lines, they can turn on the renumber switch to have REST v2 automatically renumber all   transaction lines for them, in this case, the line number becomes: \"1\", \"2\", \"3\", ...                 A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like   sales, purchases, inventory transfer, and returns (also called refunds).   You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                 * Lines   * Details (implies lines)   * Summary (implies details)   * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                 If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\AddTransactionLineModel(); // \Swagger\Client\Model\AddTransactionLineModel | information about the transaction and lines to be added

try {
    $result = $apiInstance->addLines($include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->addLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\AddTransactionLineModel**](../Model/AddTransactionLineModel.md)| information about the transaction and lines to be added | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **adjustTransaction**
> \Swagger\Client\Model\TransactionModel adjustTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Correct a previously created transaction

Replaces the current transaction uniquely identified by this URL with a new transaction.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                When you adjust a committed transaction, the original transaction will be updated with the status code `Adjusted`, and  both revisions will be available for retrieval based on their code and ID numbers.  Only transactions in `Committed` status are reported by Avalara Managed Returns.                Transactions that have been previously reported to a tax authority by Avalara Managed Returns are considered `locked` and are  no longer available for adjustments.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to adjust
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to adjust.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\AdjustTransactionModel(); // \Swagger\Client\Model\AdjustTransactionModel | The adjustment you wish to make

try {
    $result = $apiInstance->adjustTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->adjustTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to adjust |
 **document_type** | **string**| (Optional): The document type of the transaction to adjust. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\AdjustTransactionModel**](../Model/AdjustTransactionModel.md)| The adjustment you wish to make | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditTransaction**
> \Swagger\Client\Model\AuditTransactionModel auditTransaction($company_code, $transaction_code, $x_avalara_client)

Get audit information about a transaction

Retrieve audit information about a transaction stored in AvaTax.                The `AuditTransaction` API retrieves audit information related to a specific transaction.  This audit  information includes the following:                * The `CompanyId` of the company that created the transaction  * The server timestamp representing the exact server time when the transaction was created  * The server duration - how long it took to process this transaction  * Whether exact API call details were logged  * A reconstructed API call showing what the original CreateTransaction call looked like                This API can be used to examine information about a previously created transaction.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The code identifying the company that owns this transaction
$transaction_code = "transaction_code_example"; // string | The code identifying the transaction
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->auditTransaction($company_code, $transaction_code, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->auditTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The code identifying the company that owns this transaction |
 **transaction_code** | **string**| The code identifying the transaction |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\AuditTransactionModel**](../Model/AuditTransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditTransactionWithType**
> \Swagger\Client\Model\AuditTransactionModel auditTransactionWithType($company_code, $transaction_code, $document_type, $x_avalara_client)

Get audit information about a transaction

Retrieve audit information about a transaction stored in AvaTax.                The `AuditTransaction` API retrieves audit information related to a specific transaction.  This audit  information includes the following:                * The `CompanyId` of the company that created the transaction  * The server timestamp representing the exact server time when the transaction was created  * The server duration - how long it took to process this transaction  * Whether exact API call details were logged  * A reconstructed API call showing what the original CreateTransaction call looked like                This API can be used to examine information about a previously created transaction.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The code identifying the company that owns this transaction
$transaction_code = "transaction_code_example"; // string | The code identifying the transaction
$document_type = "document_type_example"; // string | The document type of the original transaction
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->auditTransactionWithType($company_code, $transaction_code, $document_type, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->auditTransactionWithType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The code identifying the company that owns this transaction |
 **transaction_code** | **string**| The code identifying the transaction |
 **document_type** | **string**| The document type of the original transaction |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\AuditTransactionModel**](../Model/AuditTransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkLockTransaction**
> \Swagger\Client\Model\BulkLockTransactionResult bulkLockTransaction($x_avalara_client, $body)

Lock a set of documents

This API is available by invitation only.                Lock a set of transactions uniquely identified by DocumentIds provided. This API allows locking multiple documents at once.  After this API call succeeds, documents will be locked and can't be voided.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).  ### Security Policies  * This API requires the user role Compliance Root User. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\BulkLockTransactionModel(); // \Swagger\Client\Model\BulkLockTransactionModel | bulk lock request

try {
    $result = $apiInstance->bulkLockTransaction($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->bulkLockTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\BulkLockTransactionModel**](../Model/BulkLockTransactionModel.md)| bulk lock request | [optional]

### Return type

[**\Swagger\Client\Model\BulkLockTransactionResult**](../Model/BulkLockTransactionResult.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeTransactionCode**
> \Swagger\Client\Model\TransactionModel changeTransactionCode($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Change a transaction's code

Renames a transaction uniquely identified by this URL by changing its `code` value.                This API is available as long as the transaction is in `saved` or `posted` status.  When a transaction  is `committed`, it can be modified by using the [AdjustTransaction](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/AdjustTransaction/) method.                After this API call succeeds, the transaction will have a new URL matching its new `code`.                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to change
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to change document code. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\ChangeTransactionCodeModel(); // \Swagger\Client\Model\ChangeTransactionCodeModel | The code change request you wish to execute

try {
    $result = $apiInstance->changeTransactionCode($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->changeTransactionCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to change |
 **document_type** | **string**| (Optional): The document type of the transaction to change document code. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\ChangeTransactionCodeModel**](../Model/ChangeTransactionCodeModel.md)| The code change request you wish to execute | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitTransaction**
> \Swagger\Client\Model\TransactionModel commitTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Commit a transaction for reporting

Marks a transaction by changing its status to `Committed`.                Transactions that are committed are available to be reported to a tax authority by Avalara Managed Returns.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                Any changes made to a committed transaction will generate a transaction history.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to commit
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to commit. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\CommitTransactionModel(); // \Swagger\Client\Model\CommitTransactionModel | The commit request you wish to execute

try {
    $result = $apiInstance->commitTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->commitTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to commit |
 **document_type** | **string**| (Optional): The document type of the transaction to commit. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CommitTransactionModel**](../Model/CommitTransactionModel.md)| The commit request you wish to execute | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrAdjustTransaction**
> \Swagger\Client\Model\TransactionModel createOrAdjustTransaction($include, $x_avalara_client, $body)

Create or adjust a transaction

Records a new transaction or adjust an existing transaction in AvaTax.                The `CreateOrAdjustTransaction` endpoint is used to create a new transaction or update an existing one.  This API  can help you create an idempotent service that creates transactions  If there exists a transaction identified by code, the original transaction will be adjusted by using the meta data  in the input transaction.                The `CreateOrAdjustTransaction` API cannot modify any transaction that has been reported to a tax authority using  the Avalara Managed Returns Service or any other tax filing service.  If you call this API to attempt to modify  a transaction that has been reported on a tax filing, you will receive the error `CannotModifyLockedTransaction`.                To generate a refund for a transaction, use the `RefundTransaction` API.                If you don't specify the field `type` in your request, you will get an estimate of type `SalesOrder`, which will not be recorded in the database.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).  You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * ForceTimeout - Simulates a timeout.  This adds a 30 second delay and error to your API call.  This can be used to test your code to ensure it can respond correctly in the case of a dropped connection.                If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.                NOTE: Avoid using the following strings in your transaction codes as they are encoding strings and will be interpreted differently:  * \\_-ava2f-\\_  * \\_-ava2b-\\_  * \\_-ava3f-\\_  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\CreateOrAdjustTransactionModel(); // \Swagger\Client\Model\CreateOrAdjustTransactionModel | The transaction you wish to create or adjust

try {
    $result = $apiInstance->createOrAdjustTransaction($include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createOrAdjustTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CreateOrAdjustTransactionModel**](../Model/CreateOrAdjustTransactionModel.md)| The transaction you wish to create or adjust | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \Swagger\Client\Model\TransactionModel createTransaction($include, $x_avalara_client, $body)

Create a new transaction

Records a new transaction in AvaTax.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                The `CreateTransaction` endpoint uses the tax profile of your company to identify the correct tax rules  and rates to apply to all line items in this transaction.  The end result will be the total tax calculated by AvaTax based on your  company's configuration and the data provided in this API call.                The `CreateTransaction` API will report an error if a committed transaction already exists with the same `code`.  To  avoid this error, use the `CreateOrAdjustTransaction` API - it will create the transaction if it does not exist, or  update it if it does exist.                To generate a refund for a transaction, use the `RefundTransaction` API.                The field `type` identifies the kind of transaction - for example, a sale, purchase, or refund.  If you do not specify  a `type` value, you will receive an estimate of type `SalesOrder`, which will not be recorded.                The origin and destination locations for a transaction must be identified by either address or geocode.  For address-based transactions, please  provide addresses in the fields `line`, `city`, `region`, `country` and `postalCode`.  For geocode-based transactions, please provide the geocode  information in the fields `latitude` and `longitude`.  If either `latitude` or `longitude` or both are null, the transaction will be calculated  using the best available address location information.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * ForceTimeout - Simulates a timeout.  This adds a 30 second delay and error to your API call.  This can be used to test your code to ensure it can respond correctly in the case of a dropped connection.  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.                NOTE: Avoid using the following strings in your transaction codes as they are encoding strings and will be interpreted differently:  * \\_-ava2f-\\_  * \\_-ava2b-\\_  * \\_-ava3f-\\_  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\CreateTransactionModel(); // \Swagger\Client\Model\CreateTransactionModel | The transaction you wish to create

try {
    $result = $apiInstance->createTransaction($include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CreateTransactionModel**](../Model/CreateTransactionModel.md)| The transaction you wish to create | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLines**
> \Swagger\Client\Model\TransactionModel deleteLines($include, $x_avalara_client, $body)

Remove lines from an existing unlocked transaction

Remove lines to an existing unlocked transaction.                 The `DeleteLines` API allows you to remove transaction lines from existing unlocked transaction, so that customer will   be able to delete transaction lines and adjust original transaction the way they like                 A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like   sales, purchases, inventory transfer, and returns (also called refunds).   You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                 * Lines   * Details (implies lines)   * Summary (implies details)   * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                 If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\RemoveTransactionLineModel(); // \Swagger\Client\Model\RemoveTransactionLineModel | information about the transaction and lines to be removed

try {
    $result = $apiInstance->deleteLines($include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->deleteLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\RemoveTransactionLineModel**](../Model/RemoveTransactionLineModel.md)| information about the transaction and lines to be removed | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionByCode**
> \Swagger\Client\Model\TransactionModel getTransactionByCode($company_code, $transaction_code, $document_type, $include, $x_avalara_client)

Retrieve a single transaction by code

Get the current transaction identified by this company code, transaction code, and document type.                A transaction is uniquely identified by `companyCode`, `code` (often called Transaction Code), and `documentType`.                For compatibility purposes, when this API finds multiple transactions with the same transaction code, and if you have not specified  the `type` parameter to this API, it will default to selecting the `SalesInvoices` transaction. To change this behavior, use the  optional `documentType` parameter to specify the specific document type you wish to find.                If this transaction was adjusted, the return value of this API will be the current transaction with this code.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to retrieve
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to retrieve
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getTransactionByCode($company_code, $transaction_code, $document_type, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to retrieve |
 **document_type** | **string**| (Optional): The document type of the transaction to retrieve | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionByCodeAndType**
> \Swagger\Client\Model\TransactionModel getTransactionByCodeAndType($company_code, $transaction_code, $document_type, $include, $x_avalara_client)

Retrieve a single transaction by code

DEPRECATED: Please use the `GetTransactionByCode` API instead.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to retrieve
$document_type = "document_type_example"; // string | The transaction type to retrieve
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getTransactionByCodeAndType($company_code, $transaction_code, $document_type, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionByCodeAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to retrieve |
 **document_type** | **string**| The transaction type to retrieve |
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionById**
> \Swagger\Client\Model\TransactionModel getTransactionById($id, $include, $x_avalara_client)

Retrieve a single transaction by ID

Get the unique transaction identified by this URL.                This endpoint retrieves the exact transaction identified by this ID number even if that transaction was later adjusted  by using the `AdjustTransaction` endpoint.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The unique ID number of the transaction to retrieve
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getTransactionById($id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of the transaction to retrieve |
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransactionsByCompany**
> \Swagger\Client\Model\FetchResultTransactionModel listTransactionsByCompany($company_code, $data_source_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve all transactions

List all transactions attached to this company.                This endpoint is limited to returning 1,000 transactions at a time maximum.                When listing transactions, you must specify a `date` range filter.  If you do not specify a `$filter` that includes a `date` field  criteria, the query will default to looking at only those transactions with `date` in the past 30 days.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$data_source_id = 56; // int | Optionally filter transactions to those from a specific data source.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* totalDiscount, lines, addresses, locationTypes, summary, taxDetailsByTaxType, parameters, messages, invoiceMessages, isFakeTransaction
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listTransactionsByCompany($company_code, $data_source_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactionsByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **data_source_id** | **int**| Optionally filter transactions to those from a specific data source. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* totalDiscount, lines, addresses, locationTypes, summary, taxDetailsByTaxType, parameters, messages, invoiceMessages, isFakeTransaction | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\FetchResultTransactionModel**](../Model/FetchResultTransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lockTransaction**
> \Swagger\Client\Model\TransactionModel lockTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Lock a single transaction

Lock a transaction uniquely identified by this URL.                This API is mainly used for connector developer to simulate what happens when Returns product locks a document.  After this API call succeeds, the document will be locked and can't be voided or adjusted.                This API is only available to customers in Sandbox with AvaTaxPro subscription.  On production servers, this API is available by invitation only.                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to lock
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to lock. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\LockTransactionModel(); // \Swagger\Client\Model\LockTransactionModel | The lock request you wish to execute

try {
    $result = $apiInstance->lockTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->lockTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to lock |
 **document_type** | **string**| (Optional): The document type of the transaction to lock. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\LockTransactionModel**](../Model/LockTransactionModel.md)| The lock request you wish to execute | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundTransaction**
> \Swagger\Client\Model\TransactionModel refundTransaction($company_code, $transaction_code, $include, $document_type, $use_tax_date_override, $x_avalara_client, $body)

Create a refund for a transaction

Create a refund for a transaction.                The `RefundTransaction` API allows you to quickly and easily create a `ReturnInvoice` representing a refund  for a previously created `SalesInvoice` transaction.  You can choose to create a full or partial refund, and  specify individual line items from the original sale for refund.                The `RefundTransaction` API ensures that the tax amount you refund to the customer exactly matches the tax that  was calculated during the original transaction, regardless of any changes to your company's configuration, rules,  nexus, or any other setting.                This API is intended to be a shortcut to allow you to quickly and accurately generate a refund for the following  common refund scenarios:                * A full refund of a previous sale  * Refunding the tax that was charged on a previous sale, when the customer provides an exemption certificate after the purchase  * Refunding one or more items (lines) from a previous sale  * Granting a customer a percentage refund of a previous sale                For more complex scenarios than the ones above, please use `CreateTransaction` with document type `ReturnInvoice` to  create a custom refund transaction.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.  If you omit the `$include` parameter, the API will assume you want `Summary,Addresses`.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The code of the company that made the original sale
$transaction_code = "transaction_code_example"; // string | The transaction code of the original sale
$include = "include_example"; // string | Specifies objects to include in the response after transaction is created
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to refund. If not provided, the default is SalesInvoice.
$use_tax_date_override = false; // bool | (Optional): If set to true, processes refund using taxDateOverride rather than taxAmountOverride (Note: taxAmountOverride is not allowed for SST states).
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\RefundTransactionModel(); // \Swagger\Client\Model\RefundTransactionModel | Information about the refund to create

try {
    $result = $apiInstance->refundTransaction($company_code, $transaction_code, $include, $document_type, $use_tax_date_override, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->refundTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The code of the company that made the original sale |
 **transaction_code** | **string**| The transaction code of the original sale |
 **include** | **string**| Specifies objects to include in the response after transaction is created | [optional]
 **document_type** | **string**| (Optional): The document type of the transaction to refund. If not provided, the default is SalesInvoice. | [optional]
 **use_tax_date_override** | **bool**| (Optional): If set to true, processes refund using taxDateOverride rather than taxAmountOverride (Note: taxAmountOverride is not allowed for SST states). | [optional] [default to false]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\RefundTransactionModel**](../Model/RefundTransactionModel.md)| Information about the refund to create | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settleTransaction**
> \Swagger\Client\Model\TransactionModel settleTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Perform multiple actions on a transaction

Performs one or more actions against the current transaction uniquely identified by this URL.                The `SettleTransaction` API call can perform the work of `ChangeCode`, `VerifyTransaction`, and `CommitTransaction`.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                This API is available for users who want to execute more than one action at a time.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to settle
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to settle. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\SettleTransactionModel(); // \Swagger\Client\Model\SettleTransactionModel | The data from an external system to reconcile against AvaTax

try {
    $result = $apiInstance->settleTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->settleTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to settle |
 **document_type** | **string**| (Optional): The document type of the transaction to settle. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\SettleTransactionModel**](../Model/SettleTransactionModel.md)| The data from an external system to reconcile against AvaTax | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uncommitTransaction**
> \Swagger\Client\Model\TransactionModel uncommitTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client)

Uncommit a transaction for reporting

Adjusts a transaction by changing it to an uncommitted status.                Transactions that have been previously reported to a tax authority by Avalara Managed Returns are considered `locked` and are  no longer available to be uncommitted.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to Uncommit
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to Uncommit. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->uncommitTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->uncommitTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to Uncommit |
 **document_type** | **string**| (Optional): The document type of the transaction to Uncommit. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unvoidTransaction**
> \Swagger\Client\Model\TransactionModel unvoidTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client)

Unvoids a transaction

Unvoids a voided transaction                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to commit
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to commit. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->unvoidTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->unvoidTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to commit |
 **document_type** | **string**| (Optional): The document type of the transaction to commit. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyTransaction**
> \Swagger\Client\Model\TransactionModel verifyTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Verify a transaction

Verifies that the transaction uniquely identified by this URL matches certain expected values.                If the transaction does not match these expected values, this API will return an error code indicating which value did not match.                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to settle
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to verify. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\VerifyTransactionModel(); // \Swagger\Client\Model\VerifyTransactionModel | The data from an external system to reconcile against AvaTax

try {
    $result = $apiInstance->verifyTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->verifyTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to settle |
 **document_type** | **string**| (Optional): The document type of the transaction to verify. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\VerifyTransactionModel**](../Model/VerifyTransactionModel.md)| The data from an external system to reconcile against AvaTax | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTransaction**
> \Swagger\Client\Model\TransactionModel voidTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body)

Void a transaction

Voids the current transaction uniquely identified by this URL.                A transaction represents a unique potentially taxable action that your company has recorded, and transactions include actions like  sales, purchases, inventory transfer, and returns (also called refunds).                When you void a transaction, that transaction's status is recorded as `DocVoided`.                If you have more than one document with the same `code`, specify the `documentType` parameter to choose between them.                Transactions that have been previously reported to a tax authority by Avalara Managed Returns are no longer available to be voided.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Lines  * Details (implies lines)  * Summary (implies details)  * Addresses  * SummaryOnly (omit lines and details - reduces API response size)  * LinesOnly (omit details - reduces API response size)  * TaxDetailsByTaxType - Includes the aggregated tax, exempt tax, taxable and non-taxable for each tax type returned in the transaction summary.                NOTE: If your companyCode or transactionCode contains any of these characters /, +, ? or a space please use the following encoding before making a request:  * Replace '/' with '\\_-ava2f-\\_'  For example: document/Code becomes document_-ava2f-_Code  * Replace '+' with '\\_-ava2b-\\_'  For example: document+Code becomes document_-ava2b-_Code  * Replace '?' with '\\_-ava3f-\\_'  For example: document?Code becomes document_-ava3f-_Code  * Replace '%' with '\\_-ava25-\\_'  For example: document%Code becomes document_-ava25-_Code  * Replace '#' with '\\_-ava23-\\_'  For example: document#Code becomes document_-ava23-_Code  * Replace ' ' with '%20'  For example: document Code becomes document%20Code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, CompanyAdmin, CSPTester, ProStoresOperator, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro, BasicReturns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: UserSecurity
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_code = "company_code_example"; // string | The company code of the company that recorded this transaction
$transaction_code = "transaction_code_example"; // string | The transaction code to void
$document_type = "document_type_example"; // string | (Optional): The document type of the transaction to void. If not provided, the default is SalesInvoice.
$include = "include_example"; // string | Specifies objects to include in this fetch call
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\VoidTransactionModel(); // \Swagger\Client\Model\VoidTransactionModel | The void request you wish to execute. To void a transaction the code must be set to 'DocVoided'

try {
    $result = $apiInstance->voidTransaction($company_code, $transaction_code, $document_type, $include, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_code** | **string**| The company code of the company that recorded this transaction |
 **transaction_code** | **string**| The transaction code to void |
 **document_type** | **string**| (Optional): The document type of the transaction to void. If not provided, the default is SalesInvoice. | [optional]
 **include** | **string**| Specifies objects to include in this fetch call | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\VoidTransactionModel**](../Model/VoidTransactionModel.md)| The void request you wish to execute. To void a transaction the code must be set to &#39;DocVoided&#39; | [optional]

### Return type

[**\Swagger\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

