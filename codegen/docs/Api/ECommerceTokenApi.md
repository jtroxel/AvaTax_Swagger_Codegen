# Together\Taxes\Provider\AvaTax\Swagger\ECommerceTokenApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createECommerceToken**](ECommerceTokenApi.md#createECommerceToken) | **POST** /api/v2/companies/{companyId}/ecommercetokens | Create a new eCommerce token.
[**refreshECommerceToken**](ECommerceTokenApi.md#refreshECommerceToken) | **PUT** /api/v2/companies/{companyId}/ecommercetokens | Refresh an eCommerce token.


# **createECommerceToken**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultECommerceTokenOutputModel createECommerceToken($company_id, $x_avalara_client, $body)

Create a new eCommerce token.

Creates a new eCommerce token.                This API is used to create a new eCommerce token. An eCommerce token is required in order to launch the CertCapture eCommerce plugin. Create a token for each of your CertCapture customers.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\ECommerceTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company ID that will be issued this certificate.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateECommerceTokenInputModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateECommerceTokenInputModel | 

try {
    $result = $apiInstance->createECommerceToken($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceTokenApi->createECommerceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company ID that will be issued this certificate. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateECommerceTokenInputModel**](../Model/CreateECommerceTokenInputModel.md)|  | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultECommerceTokenOutputModel**](../Model/FetchResultECommerceTokenOutputModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshECommerceToken**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultECommerceTokenOutputModel refreshECommerceToken($company_id, $x_avalara_client, $body)

Refresh an eCommerce token.

Refresh an eCommerce token.                CertCapture eCommerce tokens expire after one hour. This API is used to refresh an eCommerce token that is about to expire. This API can only be used with active tokens. If your token has expired, you must generate a new one.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\ECommerceTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company ID that the refreshed certificate belongs to.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\RefreshECommerceTokenInputModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\RefreshECommerceTokenInputModel | 

try {
    $result = $apiInstance->refreshECommerceToken($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECommerceTokenApi->refreshECommerceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company ID that the refreshed certificate belongs to. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\RefreshECommerceTokenInputModel**](../Model/RefreshECommerceTokenInputModel.md)|  | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultECommerceTokenOutputModel**](../Model/FetchResultECommerceTokenOutputModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

