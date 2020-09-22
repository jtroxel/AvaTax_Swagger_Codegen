# Together\Taxes\TaxRulesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaxRules**](TaxRulesApi.md#createTaxRules) | **POST** /api/v2/companies/{companyId}/taxrules | Create a new tax rule
[**deleteTaxRule**](TaxRulesApi.md#deleteTaxRule) | **DELETE** /api/v2/companies/{companyId}/taxrules/{id} | Delete a single tax rule
[**getTaxRule**](TaxRulesApi.md#getTaxRule) | **GET** /api/v2/companies/{companyId}/taxrules/{id} | Retrieve a single tax rule
[**listTaxRules**](TaxRulesApi.md#listTaxRules) | **GET** /api/v2/companies/{companyId}/taxrules | Retrieve tax rules for this company
[**queryTaxRules**](TaxRulesApi.md#queryTaxRules) | **GET** /api/v2/taxrules | Retrieve all tax rules
[**updateTaxRule**](TaxRulesApi.md#updateTaxRule) | **PUT** /api/v2/companies/{companyId}/taxrules/{id} | Update a single tax rule


# **createTaxRules**
> \Together\Taxes\Model\TaxRuleModel[] createTaxRules($company_id, $x_avalara_client, $body)

Create a new tax rule

Create one or more custom tax rules attached to this company.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this tax rule.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\TaxRuleModel()); // \Together\Taxes\Model\TaxRuleModel[] | The tax rule you wish to create.

try {
    $result = $apiInstance->createTaxRules($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->createTaxRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this tax rule. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\TaxRuleModel[]**](../Model/TaxRuleModel.md)| The tax rule you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\TaxRuleModel[]**](../Model/TaxRuleModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteTaxRule**
> \Together\Taxes\Model\ErrorDetail[] deleteTaxRule($company_id, $id, $x_avalara_client)

Delete a single tax rule

Mark the custom tax rule identified by this URL as deleted.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this tax rule.
$id = 56; // int | The ID of the tax rule you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteTaxRule($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->deleteTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this tax rule. |
 **id** | **int**| The ID of the tax rule you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getTaxRule**
> \Together\Taxes\Model\TaxRuleModel getTaxRule($company_id, $id, $x_avalara_client)

Retrieve a single tax rule

Get the taxrule object identified by this URL.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this tax rule
$id = 56; // int | The primary key of this tax rule
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getTaxRule($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->getTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this tax rule |
 **id** | **int**| The primary key of this tax rule |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\TaxRuleModel**](../Model/TaxRuleModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listTaxRules**
> \Together\Taxes\Model\FetchResultTaxRuleModel listTaxRules($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve tax rules for this company

List all taxrule objects attached to this company.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns these tax rules
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* taxCode, rateTypeCode, taxTypeGroup, taxSubType
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listTaxRules($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->listTaxRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns these tax rules |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* taxCode, rateTypeCode, taxTypeGroup, taxSubType | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultTaxRuleModel**](../Model/FetchResultTaxRuleModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **queryTaxRules**
> \Together\Taxes\Model\FetchResultTaxRuleModel queryTaxRules($filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all tax rules

Get multiple taxrule objects across all companies.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* taxCode, rateTypeCode, taxTypeGroup, taxSubType
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryTaxRules($filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->queryTaxRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* taxCode, rateTypeCode, taxTypeGroup, taxSubType | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultTaxRuleModel**](../Model/FetchResultTaxRuleModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateTaxRule**
> \Together\Taxes\Model\TaxRuleModel updateTaxRule($company_id, $id, $x_avalara_client, $body)

Update a single tax rule

Replace the existing custom tax rule object at this URL with an updated object.                A tax rule represents a rule that changes the default AvaTax behavior for a product or jurisdiction.  Custom tax rules  can be used to change the taxability of an item, to change the tax base of an item, or to change the tax rate  charged when selling an item.  Tax rules can also change tax behavior depending on the `entityUseCode` value submitted  with the transaction.                You can create custom tax rules to customize the behavior of AvaTax to match specific rules that are custom to your  business.  If you have obtained a ruling from a tax auditor that requires custom tax calculations, you can use  custom tax rules to redefine the behavior for your company or item.                Please use custom tax rules carefully and ensure that these tax rules match the behavior agreed upon with your  auditor, legal representative, and accounting team.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\TaxRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that this tax rule belongs to.
$id = 56; // int | The ID of the tax rule you wish to update
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\TaxRuleModel(); // \Together\Taxes\Model\TaxRuleModel | The tax rule you wish to update.

try {
    $result = $apiInstance->updateTaxRule($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->updateTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that this tax rule belongs to. |
 **id** | **int**| The ID of the tax rule you wish to update |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\TaxRuleModel**](../Model/TaxRuleModel.md)| The tax rule you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\TaxRuleModel**](../Model/TaxRuleModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

