# Together\Taxes\NexusApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNexus**](NexusApi.md#createNexus) | **POST** /api/v2/companies/{companyId}/nexus | Create a new nexus
[**createNexusParameters**](NexusApi.md#createNexusParameters) | **POST** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters | Add parameters to a nexus.
[**declareNexusByAddress**](NexusApi.md#declareNexusByAddress) | **POST** /api/v2/companies/{companyId}/nexus/byaddress | Creates nexus for a list of addresses.
[**deleteNexus**](NexusApi.md#deleteNexus) | **DELETE** /api/v2/companies/{companyId}/nexus/{id} | Delete a single nexus
[**deleteNexusParameter**](NexusApi.md#deleteNexusParameter) | **DELETE** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters/{id} | Delete a single nexus parameter
[**deleteNexusParameters**](NexusApi.md#deleteNexusParameters) | **DELETE** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters | Delete all parameters for an nexus
[**getNexus**](NexusApi.md#getNexus) | **GET** /api/v2/companies/{companyId}/nexus/{id} | Retrieve a single nexus
[**getNexusByFormCode**](NexusApi.md#getNexusByFormCode) | **GET** /api/v2/companies/{companyId}/nexus/byform/{formCode} | List company nexus related to a tax form
[**getNexusParameter**](NexusApi.md#getNexusParameter) | **GET** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters/{id} | Retrieve a single nexus parameter
[**listNexusByCompany**](NexusApi.md#listNexusByCompany) | **GET** /api/v2/companies/{companyId}/nexus | Retrieve nexus for this company
[**listNexusParameters**](NexusApi.md#listNexusParameters) | **GET** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters | Retrieve parameters for a nexus
[**queryNexus**](NexusApi.md#queryNexus) | **GET** /api/v2/nexus | Retrieve all nexus
[**updateNexus**](NexusApi.md#updateNexus) | **PUT** /api/v2/companies/{companyId}/nexus/{id} | Update a single nexus
[**updateNexusParameter**](NexusApi.md#updateNexusParameter) | **PUT** /api/v2/companies/{companyId}/nexus/{nexusId}/parameters/{id} | Update an nexus parameter


# **createNexus**
> \Together\Taxes\Model\NexusModel[] createNexus($company_id, $x_avalara_client, $body)

Create a new nexus

Creates one or more new nexus declarations attached to this company.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                To create a nexus declaration for your company, you must first call the Definitions API `ListNexus` to obtain a  list of Avalara-defined nexus.  Once you have determined which nexus you wish to declare, you should customize  only the user-selectable fields in this object.                The user selectable fields for the nexus object are `companyId`, `effectiveDate`, `endDate`, `localNexusTypeId`,  `taxId`, `nexusTypeId`, `hasPermanentEstablishment`, and `isSellerImporterOfRecord`.                When calling `CreateNexus` or `UpdateNexus`, all values in your nexus object except for the user-selectable fields  must match an Avalara-defined system nexus object.  You can retrieve a list of Avalara-defined system nexus objects  by calling `ListNexus`.  If any data does not match, AvaTax may not recognize your nexus declaration.                Please note that nexus changes may not take effect immediately and you should plan to update your nexus settings in advance  of calculating tax for a location.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\NexusModel()); // \Together\Taxes\Model\NexusModel[] | The nexus you wish to create.

try {
    $result = $apiInstance->createNexus($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->createNexus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\NexusModel[]**](../Model/NexusModel.md)| The nexus you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\NexusModel[]**](../Model/NexusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createNexusParameters**
> \Together\Taxes\Model\NexusParameterDetailModel[] createNexusParameters($company_id, $nexus_id, $x_avalara_client, $body)

Add parameters to a nexus.

Add parameters to the nexus.  Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an nexus will be used by default in tax calculation but will not show on the transaction line referencing the nexus.                A parameter specified on a transaction line will override an nexus parameter if they share the same parameter name.                To see available parameters for this item, call `/api/v2/definitions/parameters?$filter=attributeType eq Nexus`                Some parameters are only available for use if you have subscribed to specific AvaTax services. To see which parameters you are able to use, add the query parameter \"$showSubscribed=true\" to the parameter definition call above.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus parameter.
$nexus_id = 56; // int | The nexus id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\NexusParameterDetailModel()); // \Together\Taxes\Model\NexusParameterDetailModel[] | The nexus parameters you wish to create.

try {
    $result = $apiInstance->createNexusParameters($company_id, $nexus_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->createNexusParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus parameter. |
 **nexus_id** | **int**| The nexus id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\NexusParameterDetailModel[]**](../Model/NexusParameterDetailModel.md)| The nexus parameters you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\NexusParameterDetailModel[]**](../Model/NexusParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **declareNexusByAddress**
> \Together\Taxes\Model\NexusByAddressModel[] declareNexusByAddress($company_id, $x_avalara_client, $body)

Creates nexus for a list of addresses.

This call is intended to simplify adding all applicable nexus to a company, for an address or addresses. Calling this  API declares nexus for this company, for the list of addresses provided,  for the date range provided. You may also use this API to extend effective date on an already-declared nexus.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                Note that not all fields within a nexus can be updated; Avalara publishes a list of all defined nexus at the  '/api/v2/definitions/nexus' endpoint.                You may only define nexus matching the official list of declared nexus.                Please note that nexus changes may not take effect immediately and you should plan to update your nexus settings in advance  of calculating tax for a location.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that will own this nexus.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\DeclareNexusByAddressModel()); // \Together\Taxes\Model\DeclareNexusByAddressModel[] | The nexus you wish to create.

try {
    $result = $apiInstance->declareNexusByAddress($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->declareNexusByAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that will own this nexus. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\DeclareNexusByAddressModel[]**](../Model/DeclareNexusByAddressModel.md)| The nexus you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\NexusByAddressModel[]**](../Model/NexusByAddressModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteNexus**
> \Together\Taxes\Model\ErrorDetail[] deleteNexus($company_id, $id, $cascade_delete, $x_avalara_client)

Delete a single nexus

Marks the existing nexus object at this URL as deleted.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                Please note that nexus changes may not take effect immediately and you should plan to update your nexus settings in advance  of calculating tax for a location.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus.
$id = 56; // int | The ID of the nexus you wish to delete.
$cascade_delete = true; // bool | If true, deletes all the child nexus if they exist along with parent nexus
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteNexus($company_id, $id, $cascade_delete, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->deleteNexus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus. |
 **id** | **int**| The ID of the nexus you wish to delete. |
 **cascade_delete** | **bool**| If true, deletes all the child nexus if they exist along with parent nexus | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteNexusParameter**
> \Together\Taxes\Model\ErrorDetail[] deleteNexusParameter($company_id, $nexus_id, $id, $x_avalara_client)

Delete a single nexus parameter

Delete a single nexus parameter.  Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an nexus will be used by default in tax calculation but will not show on the transaction line referencing the nexus.                A parameter specified on a transaction line will override an nexus parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$nexus_id = 56; // int | The nexus id
$id = 789; // int | The parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteNexusParameter($company_id, $nexus_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->deleteNexusParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **nexus_id** | **int**| The nexus id |
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

# **deleteNexusParameters**
> \Together\Taxes\Model\ErrorDetail[] deleteNexusParameters($company_id, $nexus_id, $x_avalara_client)

Delete all parameters for an nexus

Delete all the parameters for a given nexus.  Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an nexus will be used by default in tax calculation but will not show on the transaction line referencing the nexus.                A parameter specified on a transaction line will override an nexus parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus.
$nexus_id = 56; // int | The ID of the nexus you wish to delete the parameters.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteNexusParameters($company_id, $nexus_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->deleteNexusParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus. |
 **nexus_id** | **int**| The ID of the nexus you wish to delete the parameters. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getNexus**
> \Together\Taxes\Model\NexusModel getNexus($company_id, $id, $include, $x_avalara_client)

Retrieve a single nexus

Get the nexus object identified by this URL.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.  You may specify one or more of the following values in the '$include' parameter to fetch additional nested data, using commas to separate multiple values:                 * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus object
$id = 56; // int | The primary key of this nexus
$include = "include_example"; // string | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getNexus($company_id, $id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->getNexus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus object |
 **id** | **int**| The primary key of this nexus |
 **include** | **string**|  | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\NexusModel**](../Model/NexusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getNexusByFormCode**
> \Together\Taxes\Model\NexusByTaxFormModel getNexusByFormCode($company_id, $form_code, $include, $x_avalara_client)

List company nexus related to a tax form

Retrieves a list of nexus related to a tax form.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                This API is intended to provide useful information when examining a tax form.  If you are about to begin filing  a tax form, you may want to know whether you have declared nexus in all the jurisdictions related to that tax  form in order to better understand how the form will be filled out.  You may specify one or more of the following values in the '$include' parameter to fetch additional nested data, using commas to separate multiple values:                 * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this nexus object
$form_code = "form_code_example"; // string | The form code that we are looking up the nexus for
$include = "include_example"; // string | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getNexusByFormCode($company_id, $form_code, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->getNexusByFormCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this nexus object |
 **form_code** | **string**| The form code that we are looking up the nexus for |
 **include** | **string**|  | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\NexusByTaxFormModel**](../Model/NexusByTaxFormModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getNexusParameter**
> \Together\Taxes\Model\NexusParameterDetailModel getNexusParameter($company_id, $nexus_id, $id, $x_avalara_client)

Retrieve a single nexus parameter

Retrieve a single nexus parameter.  Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller.In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an nexus will be used by default in tax calculation but will not show on the transaction line referencing the nexus.                A parameter specified on a transaction line will override an nexus parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$nexus_id = 56; // int | The nexus id
$id = 789; // int | The parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getNexusParameter($company_id, $nexus_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->getNexusParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **nexus_id** | **int**| The nexus id |
 **id** | **int**| The parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\NexusParameterDetailModel**](../Model/NexusParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listNexusByCompany**
> \Together\Taxes\Model\FetchResultNexusModel listNexusByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve nexus for this company

List all nexus objects defined for this company.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  You may specify one or more of the following values in the '$include' parameter to fetch additional nested data, using commas to separate multiple values:                 * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns these nexus objects
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* streamlinedSalesTax, isSSTActive, taxAuthorityId, taxName, parameters
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listNexusByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->listNexusByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns these nexus objects |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* streamlinedSalesTax, isSSTActive, taxAuthorityId, taxName, parameters | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultNexusModel**](../Model/FetchResultNexusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listNexusParameters**
> \Together\Taxes\Model\FetchResultNexusParameterDetailModel listNexusParameters($company_id, $nexus_id, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve parameters for a nexus

List parameters for a nexus.  Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an nexus will be used by default in tax calculation but will not show on the transaction line referencing the nexus.                A parameter specified on a transaction line will override an nexus parameter if they share the same parameter name.                 Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$nexus_id = 56; // int | The nexus id
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* name, unit
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listNexusParameters($company_id, $nexus_id, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->listNexusParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **nexus_id** | **int**| The nexus id |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* name, unit | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultNexusParameterDetailModel**](../Model/FetchResultNexusParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **queryNexus**
> \Together\Taxes\Model\FetchResultNexusModel queryNexus($filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all nexus

Get multiple nexus objects across all companies.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  You may specify one or more of the following values in the '$include' parameter to fetch additional nested data, using commas to separate multiple values:                 * Parameters  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* streamlinedSalesTax, isSSTActive, taxAuthorityId, taxName, parameters
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryNexus($filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->queryNexus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* streamlinedSalesTax, isSSTActive, taxAuthorityId, taxName, parameters | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultNexusModel**](../Model/FetchResultNexusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateNexus**
> \Together\Taxes\Model\NexusModel updateNexus($company_id, $id, $x_avalara_client, $body)

Update a single nexus

Replace the existing nexus declaration object at this URL with an updated object.                The concept of Nexus indicates a place where your company is legally obligated to collect and remit transactional  taxes.  The legal requirements for nexus may vary per country and per jurisdiction; please seek advice from your  accountant or lawyer prior to declaring nexus.                To create a nexus declaration for your company, you must first call the Definitions API `ListNexus` to obtain a  list of Avalara-defined nexus.  Once you have determined which nexus you wish to declare, you should customize  only the user-selectable fields in this object.                The user selectable fields for the nexus object are `companyId`, `effectiveDate`, `endDate`, `localNexusTypeId`,  `taxId`, `nexusTypeId`, `hasPermanentEstablishment`, and `isSellerImporterOfRecord`.                When calling `CreateNexus` or `UpdateNexus`, all values in your nexus object except for the user-selectable fields  must match an Avalara-defined system nexus object.  You can retrieve a list of Avalara-defined system nexus objects  by calling `ListNexus`.  If any data does not match, AvaTax may not recognize your nexus declaration.                Please note that nexus changes may not take effect immediately and you should plan to update your nexus settings in advance  of calculating tax for a location.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that this nexus belongs to.
$id = 56; // int | The ID of the nexus you wish to update
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\NexusModel(); // \Together\Taxes\Model\NexusModel | The nexus object you wish to update.

try {
    $result = $apiInstance->updateNexus($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->updateNexus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that this nexus belongs to. |
 **id** | **int**| The ID of the nexus you wish to update |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\NexusModel**](../Model/NexusModel.md)| The nexus object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\NexusModel**](../Model/NexusModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateNexusParameter**
> \Together\Taxes\Model\NexusParameterDetailModel updateNexusParameter($company_id, $nexus_id, $id, $x_avalara_client, $body)

Update an nexus parameter

Update an nexus parameter.                Some tax calculation and reporting are different depending on the properties of the nexus, such as isRemoteSeller. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to a nexus will be used in tax calculation based on the locationcode and parameter value the transaction state line might have lines added.                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.????? I dont know about this?  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\NexusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$nexus_id = 56; // int | The nexus id
$id = 789; // int | The nexus parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\NexusParameterDetailModel(); // \Together\Taxes\Model\NexusParameterDetailModel | The nexus object you wish to update.

try {
    $result = $apiInstance->updateNexusParameter($company_id, $nexus_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NexusApi->updateNexusParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **nexus_id** | **int**| The nexus id |
 **id** | **int**| The nexus parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\NexusParameterDetailModel**](../Model/NexusParameterDetailModel.md)| The nexus object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\NexusParameterDetailModel**](../Model/NexusParameterDetailModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

