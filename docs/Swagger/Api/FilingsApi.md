# Together\Taxes\FilingsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccrualFilings**](FilingsApi.md#getAccrualFilings) | **GET** /api/v2/companies/{companyId}/filings/accrual/{filingReturnId} | Retrieve a filing containing the return and all its accrual returns.
[**getFiledReturns**](FilingsApi.md#getFiledReturns) | **GET** /api/v2/companies/{companyId}/filings/returns/filed | Retrieve a list of filed returns for the specified company in the year and month of a given filing period.


# **getAccrualFilings**
> \Together\Taxes\Model\FetchResultMultiTaxFilingModel getAccrualFilings($company_id, $filing_return_id, $x_avalara_client)

Retrieve a filing containing the return and all its accrual returns.

### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPTester, FirmAdmin, FirmUser, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\FilingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns these returns
$filing_return_id = 789; // int | The ID of the filing return
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getAccrualFilings($company_id, $filing_return_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilingsApi->getAccrualFilings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns these returns |
 **filing_return_id** | **int**| The ID of the filing return |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultMultiTaxFilingModel**](../Model/FetchResultMultiTaxFilingModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getFiledReturns**
> \Together\Taxes\Model\FetchResultFiledReturnModel getFiledReturns($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client)

Retrieve a list of filed returns for the specified company in the year and month of a given filing period.

### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API is available by invitation only.<br />*Exempt security roles*:  ComplianceRootUser, ComplianceAdmin, ComplianceUser, TechnicalSupportAdmin, TechnicalSupportUser, CompanyUser, AccountUser, CompanyAdmin, AccountAdmin. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

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


$apiInstance = new Together\Taxes\Api\FilingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns these batches
$end_period_month = 56; // int | The month of the period you are trying to retrieve
$end_period_year = 56; // int | The year of the period you are trying to retrieve
$frequency = "frequency_example"; // string | The frequency of the return you are trying to retrieve
$status = "status_example"; // string | The status of the return(s) you are trying to retrieve
$country = "country_example"; // string | The country of the return(s) you are trying to retrieve
$region = "region_example"; // string | The region of the return(s) you are trying to retrieve
$filing_calendar_id = 789; // int | The filing calendar id of the return you are trying to retrieve
$taxform_code = "taxform_code_example"; // string | The unique tax form code of the form.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getFiledReturns($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilingsApi->getFiledReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns these batches |
 **end_period_month** | **int**| The month of the period you are trying to retrieve | [optional]
 **end_period_year** | **int**| The year of the period you are trying to retrieve | [optional]
 **frequency** | **string**| The frequency of the return you are trying to retrieve | [optional]
 **status** | **string**| The status of the return(s) you are trying to retrieve | [optional]
 **country** | **string**| The country of the return(s) you are trying to retrieve | [optional]
 **region** | **string**| The region of the return(s) you are trying to retrieve | [optional]
 **filing_calendar_id** | **int**| The filing calendar id of the return you are trying to retrieve | [optional]
 **taxform_code** | **string**| The unique tax form code of the form. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultFiledReturnModel**](../Model/FetchResultFiledReturnModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

