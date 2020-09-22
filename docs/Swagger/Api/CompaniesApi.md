# Together\Taxes\CompaniesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**certifyIntegration**](CompaniesApi.md#certifyIntegration) | **GET** /api/v2/companies/{id}/certify | Checks whether the integration being used to set up this company and run transactions onto this company is compliant to all requirements.
[**changeFilingStatus**](CompaniesApi.md#changeFilingStatus) | **POST** /api/v2/companies/{id}/filingstatus | Change the filing status of this company
[**companyInitialize**](CompaniesApi.md#companyInitialize) | **POST** /api/v2/companies/initialize | Quick setup for a company with a single physical address
[**createCompanies**](CompaniesApi.md#createCompanies) | **POST** /api/v2/companies | Create new companies
[**createCompanyParameters**](CompaniesApi.md#createCompanyParameters) | **POST** /api/v2/companies/{companyId}/parameters | Add parameters to a company.
[**createFundingRequest**](CompaniesApi.md#createFundingRequest) | **POST** /api/v2/companies/{id}/funding/setup | Request managed returns funding setup for a company
[**deleteCompany**](CompaniesApi.md#deleteCompany) | **DELETE** /api/v2/companies/{id} | Delete a single company
[**deleteCompanyParameter**](CompaniesApi.md#deleteCompanyParameter) | **DELETE** /api/v2/companies/{companyId}/parameters/{id} | Delete a single company parameter
[**fundingConfigurationByCompany**](CompaniesApi.md#fundingConfigurationByCompany) | **GET** /api/v2/companies/{companyId}/funding/configuration | Check the funding configuration of a company
[**fundingConfigurationsByCompanyAndCurrency**](CompaniesApi.md#fundingConfigurationsByCompanyAndCurrency) | **GET** /api/v2/companies/{companyId}/funding/configurations | Check the funding configuration of a company
[**getCompany**](CompaniesApi.md#getCompany) | **GET** /api/v2/companies/{id} | Retrieve a single company
[**getCompanyConfiguration**](CompaniesApi.md#getCompanyConfiguration) | **GET** /api/v2/companies/{id}/configuration | Get configuration settings for this company
[**getCompanyParameterDetail**](CompaniesApi.md#getCompanyParameterDetail) | **GET** /api/v2/companies/{companyId}/parameters/{id} | Retrieve a single company parameter
[**getFilingStatus**](CompaniesApi.md#getFilingStatus) | **GET** /api/v2/companies/{id}/filingstatus | Get this company&#39;s filing status
[**listCompanyParameterDetails**](CompaniesApi.md#listCompanyParameterDetails) | **GET** /api/v2/companies/{companyId}/parameters | Retrieve parameters for a company
[**listFundingRequestsByCompany**](CompaniesApi.md#listFundingRequestsByCompany) | **GET** /api/v2/companies/{id}/funding | Check managed returns funding status for a company
[**listMrsCompanies**](CompaniesApi.md#listMrsCompanies) | **GET** /api/v2/companies/mrs | Retrieve a list of MRS Companies with account
[**queryCompanies**](CompaniesApi.md#queryCompanies) | **GET** /api/v2/companies | Retrieve all companies
[**setCompanyConfiguration**](CompaniesApi.md#setCompanyConfiguration) | **POST** /api/v2/companies/{id}/configuration | Change configuration settings for this company
[**updateCompany**](CompaniesApi.md#updateCompany) | **PUT** /api/v2/companies/{id} | Update a single company
[**updateCompanyParameterDetail**](CompaniesApi.md#updateCompanyParameterDetail) | **PUT** /api/v2/companies/{companyId}/parameters/{id} | Update a company parameter


# **certifyIntegration**
> string certifyIntegration($id, $x_avalara_client)

Checks whether the integration being used to set up this company and run transactions onto this company is compliant to all requirements.

Examines the most recent 100 transactions or data from the last month when verifying transaction-related integrations.  For partners who write integrations against AvaTax for many clients, this API is a way to do a quick self testing to verify whether the  written integrations for a company are sufficient enough to be delivered to the respective customers to start using it.                This API provides messages specific enough (through predefined checks) to guide the partner on what integrations are still missing from the company to get fully certified.  The API makes the following checks to conclude if the company is NOT fully certified:  1. Any past month items contains generic tax code of P0000000.  2. All the companies on the requesting account are test companies.  3. No Voided/Cancelled documents in the past 30 days.  4. There are less than 2 committed documents.  5. Any documentCode is a generic GUID string.  6. Any customerCode on document is a generic GUID string.  7. No document has more than 1 documentLine.  8. All of the documents have missing exemptionNo, customerUsageType, taxDateOverride or negative amount.  9. Any document quantity is a negative number.  10. Any document have repeated lines.  11. No document has shipping charge.  12. All documents have same ItemCodes, descriptions and taxCodes.  13. Less than 2 addresses used across all documents.  14. Whether locationCode was used in documents.  15. Account with AvaGlobal subscription and no documents have VATBuyerId.  16. Any document has currencyCode not being USD for accounts with AvaGlobal subscription.  17. All documents have countryCode used for accounts with AvaGlobal subscription.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the company to check if its integration is certified.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->certifyIntegration($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->certifyIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the company to check if its integration is certified. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

**string**

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **changeFilingStatus**
> string changeFilingStatus($id, $x_avalara_client, $body)

Change the filing status of this company

Changes the current filing status of this company.                For customers using Avalara's Managed Returns Service, each company within their account can request  for Avalara to file tax returns on their behalf.  Avalara compliance team members will review all  requested filing calendars prior to beginning filing tax returns on behalf of this company.                The following changes may be requested through this API:                * If a company is in `NotYetFiling` status, the customer may request this be changed to `FilingRequested`.  * Avalara compliance team members may change a company from `FilingRequested` to `FirstFiling`.  * Avalara compliance team members may change a company from `FirstFiling` to `Active`.                All other status changes must be requested through the Avalara customer support team.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\FilingStatusChangeModel(); // \Together\Taxes\Model\FilingStatusChangeModel | 

try {
    $result = $apiInstance->changeFilingStatus($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->changeFilingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\FilingStatusChangeModel**](../Model/FilingStatusChangeModel.md)|  | [optional]

### Return type

**string**

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **companyInitialize**
> \Together\Taxes\Model\CompanyModel companyInitialize($x_avalara_client, $body)

Quick setup for a company with a single physical address

Shortcut to quickly setup a single-physical-location company with critical information and activate it.  This API provides quick and simple company setup functionality and does the following things:                * Create a company object with its own tax profile  * Add a key contact person for the company  * Set up one physical location for the main office  * Declare nexus in all taxing jurisdictions for that main office address  * Activate the company                This API only provides a limited subset of functionality compared to the 'Create Company' API call.  If you need additional features or options not present in this 'Quick Setup' API call, please use the full 'Create Company' call instead.  Please allow 1 minute before making transactions using the company.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\CompanyInitializationModel(); // \Together\Taxes\Model\CompanyInitializationModel | Information about the company you wish to create.

try {
    $result = $apiInstance->companyInitialize($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companyInitialize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyInitializationModel**](../Model/CompanyInitializationModel.md)| Information about the company you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createCompanies**
> \Together\Taxes\Model\CompanyModel[] createCompanies($x_avalara_client, $body)

Create new companies

Create one or more new company objects.  A 'company' represents a single corporation or individual that is registered to handle transactional taxes.  You may attach nested data objects such as contacts, locations, and nexus with this CREATE call, and those objects will be created with the company.                NOTE: Please do not use these blacklisted characters in company name and code: ';', '\\', '|'.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CompanyModel()); // \Together\Taxes\Model\CompanyModel[] | Either a single company object or an array of companies to create

try {
    $result = $apiInstance->createCompanies($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->createCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyModel[]**](../Model/CompanyModel.md)| Either a single company object or an array of companies to create | [optional]

### Return type

[**\Together\Taxes\Model\CompanyModel[]**](../Model/CompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createCompanyParameters**
> \Together\Taxes\Model\CompanyParameterDetailModel[] createCompanyParameters($company_id, $x_avalara_client, $body)

Add parameters to a company.

Add parameters to a company.                Some companies can be taxed and reported differently depending on the properties of the company, such as IsPrimaryAddress. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a company will be used by default in tax calculation but will not show on the transaction line referencing the company.                A company location parameter specified on a transaction line will override a company parameter if they share the same parameter name.                To see available parameters for this company, call `/api/v2/definitions/parameters?$filter=attributeType eq Company`                Some parameters are only available for use if you have subscribed to specific AvaTax services. To see which parameters you are able to use, add the query parameter \"$showSubscribed=true\" to the parameter definition call above.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this company parameter.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CompanyParameterDetailModel()); // \Together\Taxes\Model\CompanyParameterDetailModel[] | The company parameters you wish to create.

try {
    $result = $apiInstance->createCompanyParameters($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->createCompanyParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this company parameter. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyParameterDetailModel[]**](../Model/CompanyParameterDetailModel.md)| The company parameters you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\CompanyParameterDetailModel[]**](../Model/CompanyParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createFundingRequest**
> \Together\Taxes\Model\FundingStatusModel createFundingRequest($id, $x_avalara_client, $body)

Request managed returns funding setup for a company

This API is available by invitation only.  Companies that use the Avalara Managed Returns or the SST Certified Service Provider services are  required to setup their funding configuration before Avalara can begin filing tax returns on their  behalf.  Funding configuration for each company is set up by submitting a funding setup request, which can  be sent either via email or via an embedded HTML widget.  When the funding configuration is submitted to Avalara, it will be reviewed by treasury team members  before approval.  This API records that an ambedded HTML funding setup widget was activated.  This API requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  ### Security Policies  * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp. * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The unique identifier of the company
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\FundingInitiateModel(); // \Together\Taxes\Model\FundingInitiateModel | The funding initialization request

try {
    $result = $apiInstance->createFundingRequest($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->createFundingRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique identifier of the company |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\FundingInitiateModel**](../Model/FundingInitiateModel.md)| The funding initialization request | [optional]

### Return type

[**\Together\Taxes\Model\FundingStatusModel**](../Model/FundingStatusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteCompany**
> \Together\Taxes\Model\ErrorDetail[] deleteCompany($id, $x_avalara_client)

Delete a single company

Deleting a company will delete all child companies, and all users attached to this company.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the company you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteCompany($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->deleteCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the company you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteCompanyParameter**
> \Together\Taxes\Model\ErrorDetail[] deleteCompanyParameter($company_id, $id, $x_avalara_client)

Delete a single company parameter

Delete a parameter of a company.  Some companies can be taxed and reported differently depending on the properties of the company, such as IsPrimaryAddress. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a company will be used by default in tax calculation but will not show on the transaction line referencing the company.                A company location parameter specified on a transaction line will override a company parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$id = 789; // int | The parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteCompanyParameter($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->deleteCompanyParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **id** | **int**| The parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **fundingConfigurationByCompany**
> \Together\Taxes\Model\FundingConfigurationModel fundingConfigurationByCompany($company_id, $x_avalara_client)

Check the funding configuration of a company

This API is available by invitation only.  Requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  Returns the funding configuration of the requested company.  .  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique identifier of the company
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->fundingConfigurationByCompany($company_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->fundingConfigurationByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique identifier of the company |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FundingConfigurationModel**](../Model/FundingConfigurationModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **fundingConfigurationsByCompanyAndCurrency**
> \Together\Taxes\Model\FundingConfigurationModel[] fundingConfigurationsByCompanyAndCurrency($company_id, $currency, $x_avalara_client)

Check the funding configuration of a company

This API is available by invitation only.  Requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  Returns the funding configuration of the requested company.  .  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique identifier of the company
$currency = "currency_example"; // string | The currency of the funding.  USD and CAD are the only valid currencies
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->fundingConfigurationsByCompanyAndCurrency($company_id, $currency, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->fundingConfigurationsByCompanyAndCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique identifier of the company |
 **currency** | **string**| The currency of the funding.  USD and CAD are the only valid currencies | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FundingConfigurationModel[]**](../Model/FundingConfigurationModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getCompany**
> \Together\Taxes\Model\CompanyModel getCompany($id, $include, $x_avalara_client)

Retrieve a single company

Get the company object identified by this URL.  A 'company' represents a single corporation or individual that is registered to handle transactional taxes.  You may specify one or more of the following values in the '$include' parameter to fetch additional nested data, using commas to separate multiple values:                 * Contacts   * Items   * Locations   * Nexus   * Settings   * TaxCodes   * TaxRules   * UPC   * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the company to retrieve.
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.                              * Child objects - Specify one or more of the following to retrieve objects related to each company: \"Contacts\", \"FilingCalendars\", \"Items\", \"Locations\", \"Nexus\", \"TaxCodes\", \"NonReportingChildren\" or \"TaxRules\".                * Deleted objects - Specify \"FetchDeleted\" to retrieve information about previously deleted objects.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCompany($id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the company to retrieve. |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.                              * Child objects - Specify one or more of the following to retrieve objects related to each company: \&quot;Contacts\&quot;, \&quot;FilingCalendars\&quot;, \&quot;Items\&quot;, \&quot;Locations\&quot;, \&quot;Nexus\&quot;, \&quot;TaxCodes\&quot;, \&quot;NonReportingChildren\&quot; or \&quot;TaxRules\&quot;.                * Deleted objects - Specify \&quot;FetchDeleted\&quot; to retrieve information about previously deleted objects. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getCompanyConfiguration**
> \Together\Taxes\Model\CompanyConfigurationModel[] getCompanyConfiguration($id, $x_avalara_client)

Get configuration settings for this company

Retrieve a list of all configuration settings tied to this company.                Configuration settings provide you with the ability to control features of your account and of your  tax software.  The category name `AvaCertServiceConfig` is reserved for  Avalara internal software configuration values; to store your own company-level settings, please  create a new category name that begins with `X-`, for example, `X-MyCustomCategory`.                Company settings are permanent settings that cannot be deleted.  You can set the value of a  company setting to null if desired and if the particular setting supports it.                Avalara-based company settings for `AvaCertServiceConfig` affect your company's exemption certificate  processing, and should be changed with care.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCompanyConfiguration($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CompanyConfigurationModel[]**](../Model/CompanyConfigurationModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getCompanyParameterDetail**
> \Together\Taxes\Model\CompanyParameterDetailModel getCompanyParameterDetail($company_id, $id, $x_avalara_client)

Retrieve a single company parameter

Retrieves a single parameter of a company.                Some companies can be taxed and reported differently depending on the properties of the company, such as IsPrimaryAddress. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a company will be used by default in tax calculation but will not show on the transaction line referencing the company.                A company location parameter specified on a transaction line will override a company parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCompanyParameterDetail($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyParameterDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CompanyParameterDetailModel**](../Model/CompanyParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getFilingStatus**
> string getFilingStatus($id, $x_avalara_client)

Get this company's filing status

Retrieve the current filing status of this company.                For customers using Avalara's Managed Returns Service, each company within their account can request  for Avalara to file tax returns on their behalf.  Avalara compliance team members will review all  requested filing calendars prior to beginning filing tax returns on behalf of this company.                A company's filing status can be one of the following values:                * `NoReporting` - This company is not configured to report tax returns; instead, it reports through a parent company.  * `NotYetFiling` - This company has not yet begun filing tax returns through Avalara's Managed Returns Service.  * `FilingRequested` - The company has requested to begin filing tax returns, but Avalara's compliance team has not yet begun filing.  * `FirstFiling` - The company has recently filing tax returns and is in a new status.  * `Active` - The company is currently active and is filing tax returns via Avalara Managed Returns.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getFilingStatus($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getFilingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

**string**

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listCompanyParameterDetails**
> \Together\Taxes\Model\FetchResultCompanyParameterDetailModel listCompanyParameterDetails($company_id, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve parameters for a company

Retrieve all parameters of a company.                Some companies can be taxed and reported differently depending on the properties of the company, such as IsPrimaryAddress. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a company will be used by default in tax calculation but will not show on the transaction line referencing the company.                A company location parameter specified on a transaction line will override a company parameter if they share the same parameter name.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* name, unit
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listCompanyParameterDetails($company_id, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->listCompanyParameterDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* name, unit | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCompanyParameterDetailModel**](../Model/FetchResultCompanyParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listFundingRequestsByCompany**
> \Together\Taxes\Model\FundingStatusModel[] listFundingRequestsByCompany($id, $x_avalara_client)

Check managed returns funding status for a company

This API is available by invitation only.  Requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  Returns a list of funding setup requests and their current status.  Each object in the result is a request that was made to setup or adjust funding status for this company.  ### Security Policies  * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp. * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The unique identifier of the company
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listFundingRequestsByCompany($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->listFundingRequestsByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique identifier of the company |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FundingStatusModel[]**](../Model/FundingStatusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listMrsCompanies**
> \Together\Taxes\Model\FetchResultMrsCompanyModel listMrsCompanies($x_avalara_client)

Retrieve a list of MRS Companies with account

This API is available by invitation only.                Get a list of companies with an active MRS service.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listMrsCompanies($x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->listMrsCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultMrsCompanyModel**](../Model/FetchResultMrsCompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **queryCompanies**
> \Together\Taxes\Model\FetchResultCompanyModel queryCompanies($include, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve all companies

Get multiple company objects.                A `company` represents a single corporation or individual that is registered to handle transactional taxes.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Contacts  * Items  * Locations  * Nexus  * Settings  * TaxCodes  * TaxRules  * UPC  * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | A comma separated list of objects to fetch underneath this company.  Any object with a URL path underneath this company can be fetched by specifying its name.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* IsFein, contacts, items, locations, nexus, settings, taxCodes, taxRules, upcs, nonReportingChildCompanies, exemptCerts, parameters
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryCompanies($include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->queryCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| A comma separated list of objects to fetch underneath this company.  Any object with a URL path underneath this company can be fetched by specifying its name. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* IsFein, contacts, items, locations, nexus, settings, taxCodes, taxRules, upcs, nonReportingChildCompanies, exemptCerts, parameters | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCompanyModel**](../Model/FetchResultCompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **setCompanyConfiguration**
> \Together\Taxes\Model\CompanyConfigurationModel[] setCompanyConfiguration($id, $x_avalara_client, $body)

Change configuration settings for this company

Update configuration settings tied to this company.                Configuration settings provide you with the ability to control features of your account and of your  tax software.  The category names `AvaCertServiceConfig` is reserved for  Avalara internal software configuration values; to store your own company-level settings, please  create a new category name that begins with `X-`, for example, `X-MyCustomCategory`.                Company settings are permanent settings that cannot be deleted.  You can set the value of a  company setting to null if desired and if the particular setting supports it.                Avalara-based company settings for `AvaCertServiceConfig` affect your company's exemption certificate  processing, and should be changed with care.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CompanyConfigurationModel()); // \Together\Taxes\Model\CompanyConfigurationModel[] | 

try {
    $result = $apiInstance->setCompanyConfiguration($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->setCompanyConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyConfigurationModel[]**](../Model/CompanyConfigurationModel.md)|  | [optional]

### Return type

[**\Together\Taxes\Model\CompanyConfigurationModel[]**](../Model/CompanyConfigurationModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateCompany**
> \Together\Taxes\Model\CompanyModel updateCompany($id, $x_avalara_client, $body)

Update a single company

Replace the existing company object at this URL with an updated object.                A `CompanyModel` represents a single corporation or individual that is registered to handle transactional taxes.  All data from the existing object will be replaced with data in the object you PUT.                When calling `UpdateCompany`, you are permitted to update the company itself.  Updates to the nested objects  such as contacts, locations, or settings are not permitted.  To update the nested objects                To set a field's value to `null`, you may either set its value to `null` or omit that field from the object you PUT.                NOTE: Please do not use these blacklisted characters in company name and code: ';', '\\', '|'.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the company you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\CompanyModel(); // \Together\Taxes\Model\CompanyModel | The company object you wish to update.

try {
    $result = $apiInstance->updateCompany($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the company you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyModel**](../Model/CompanyModel.md)| The company object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\CompanyModel**](../Model/CompanyModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateCompanyParameterDetail**
> \Together\Taxes\Model\CompanyParameterDetailModel updateCompanyParameterDetail($company_id, $id, $x_avalara_client, $body)

Update a company parameter

Update a parameter of a company.                Some companies can be taxed and reported differently depending on the properties of the company, such as IsPrimaryAddress. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a company will be used by default in tax calculation but will not show on the transaction line referencing the company.                A company location parameter specified on a transaction line will override a company parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$id = 789; // int | The company parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\CompanyParameterDetailModel(); // \Together\Taxes\Model\CompanyParameterDetailModel | The company parameter object you wish to update.

try {
    $result = $apiInstance->updateCompanyParameterDetail($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->updateCompanyParameterDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **id** | **int**| The company parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CompanyParameterDetailModel**](../Model/CompanyParameterDetailModel.md)| The company parameter object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\CompanyParameterDetailModel**](../Model/CompanyParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

