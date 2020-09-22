# Together\Taxes\ReportsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadReport**](ReportsApi.md#downloadReport) | **GET** /api/v2/reports/{id}/attachment | Download a report
[**getReport**](ReportsApi.md#getReport) | **GET** /api/v2/reports/{id} | Retrieve a single report
[**initiateExportDocumentLineReport**](ReportsApi.md#initiateExportDocumentLineReport) | **POST** /api/v2/companies/{companyId}/reports/exportdocumentline/initiate | Initiate an ExportDocumentLine report task
[**listReports**](ReportsApi.md#listReports) | **GET** /api/v2/reports | List all report tasks for account


# **downloadReport**
> \SplFileObject downloadReport($id, $x_avalara_client)

Download a report

This API downloads the file associated with a report.                If the report is not yet complete, you will receive a `ReportNotFinished` error.  To check if a report is complete,  use the `GetReport` API.                Reports are run as asynchronous report tasks on the server.  When complete, the report file will be available for download  for up to 30 days after completion.  To run an asynchronous report, you should follow these steps:                * Begin a report by calling the report's Initiate API.  There is a separate initiate API call for each report type.  * In the result of the Initiate API, you receive back a report's `id` value.  * Check the status of a report by calling `GetReport` and passing in the report's `id` value.  * When a report's status is `Completed`, call `DownloadReport` to retrieve the file.                This API works for all report types.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The unique ID number of this report
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->downloadReport($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->downloadReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of this report |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getReport**
> \Together\Taxes\Model\ReportModel getReport($id, $x_avalara_client)

Retrieve a single report

Retrieve a single report by its unique ID number.                Reports are run as asynchronous report tasks on the server.  When complete, the report file will be available for download  for up to 30 days after completion.  To run an asynchronous report, you should follow these steps:                * Begin a report by calling the report's Initiate API.  There is a separate initiate API call for each report type.  * In the result of the Initiate API, you receive back a report's `id` value.  * Check the status of a report by calling `GetReport` and passing in the report's `id` value.  * When a report's status is `Completed`, call `DownloadReport` to retrieve the file.                This API call returns information about any report type.

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


$apiInstance = new Together\Taxes\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The unique ID number of the report to retrieve
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getReport($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of the report to retrieve |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ReportModel**](../Model/ReportModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **initiateExportDocumentLineReport**
> \Together\Taxes\Model\ReportModel[] initiateExportDocumentLineReport($company_id, $x_avalara_client, $body)

Initiate an ExportDocumentLine report task

Begins running an `ExportDocumentLine` report task and returns the identity of the report.                Reports are run as asynchronous report tasks on the server.  When complete, the report file will be available for download  for up to 30 days after completion.  To run an asynchronous report, you should follow these steps:                * Begin a report by calling the report's Initiate API.  There is a separate initiate API call for each report type.  * In the result of the Initiate API, you receive back a report's `id` value.  * Check the status of a report by calling `GetReport` and passing in the report's `id` value.  * When a report's status is `Completed`, call `DownloadReport` to retrieve the file.                The `ExportDocumentLine` report produces information about invoice lines recorded within your account.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company to report on.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ExportDocumentLineModel(); // \Together\Taxes\Model\ExportDocumentLineModel | Options that may be configured to customize the report.

try {
    $result = $apiInstance->initiateExportDocumentLineReport($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->initiateExportDocumentLineReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company to report on. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ExportDocumentLineModel**](../Model/ExportDocumentLineModel.md)| Options that may be configured to customize the report. | [optional]

### Return type

[**\Together\Taxes\Model\ReportModel[]**](../Model/ReportModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listReports**
> \Together\Taxes\Model\FetchResultReportModel listReports($company_id, $page_key, $skip, $top, $x_avalara_client)

List all report tasks for account

List all report tasks for your account.                Reports are run as asynchronous report tasks on the server.  When complete, the report file will be available for download  for up to 30 days after completion.  To run an asynchronous report, you should follow these steps:                * Begin a report by calling the report's Initiate API.  There is a separate initiate API call for each report type.  * In the result of the Initiate API, you receive back a report's `id` value.  * Check the status of a report by calling `GetReport` and passing in the report's `id` value.  * When a report's status is `Completed`, call `DownloadReport` to retrieve the file.                This API call returns information about all report types across your entire account.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, ProStoresOperator, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The id of the company for which to get reports.
$page_key = "page_key_example"; // string | Provide a page key to retrieve the next page of results.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$top = 25; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listReports($company_id, $page_key, $skip, $top, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The id of the company for which to get reports. | [optional]
 **page_key** | **string**| Provide a page key to retrieve the next page of results. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional] [default to 25]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultReportModel**](../Model/FetchResultReportModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

