# Swagger\Client\ProvisioningApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestNewAccount**](ProvisioningApi.md#requestNewAccount) | **POST** /api/v2/accounts/request | Request a new Avalara account
[**requestNewEntitlement**](ProvisioningApi.md#requestNewEntitlement) | **POST** /api/v2/accounts/{id}/entitlements/{offer} | Request a new entitilement to an existing customer


# **requestNewAccount**
> \Swagger\Client\Model\NewAccountModel requestNewAccount($x_avalara_client, $body)

Request a new Avalara account

This API is for use by partner provisioning services customers only.                Avalara invites select partners to refer new customers to the AvaTax service using the onboarding features  of AvaTax.  These partners can create accounts for new customers using this API.                Calling this API creates an account with the specified product subscriptions, but does not configure billing.  The customer will receive information from Avalara about how to configure billing for their account.  You should call this API when a customer has requested to begin using Avalara services.                If the newly created account owner wishes, they can confirm that they have read and agree to the Avalara  terms and conditions.  If they do so, they can receive a license key as part of this API and their  API will be created in `Active` status.  If the customer has not yet read and accepted these terms and  conditions, the account will be created in `New` status and they can receive a license key by logging  onto the AvaTax website and reviewing terms and conditions online.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API is available by invitation only. * This API is available by invitation only.  To request access to this feature, please speak to a business development manager and request access to [Provisioning:RequestNewAccount].

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


$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\NewAccountRequestModel(); // \Swagger\Client\Model\NewAccountRequestModel | Information about the account you wish to create and the selected product offerings.

try {
    $result = $apiInstance->requestNewAccount($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->requestNewAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\NewAccountRequestModel**](../Model/NewAccountRequestModel.md)| Information about the account you wish to create and the selected product offerings. | [optional]

### Return type

[**\Swagger\Client\Model\NewAccountModel**](../Model/NewAccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestNewEntitlement**
> \Swagger\Client\Model\OfferModel requestNewEntitlement($id, $offer, $x_avalara_client)

Request a new entitilement to an existing customer

This API is for use by partner provisioning services customers only. This will allow the partners to allow  the add new entitlement to an existing customer  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API is available by invitation only. * This API is available by invitation only.  To request access to this feature, please speak to a business development manager and request access to [Provisioning:RequestNewAccount].

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


$apiInstance = new Swagger\Client\Api\ProvisioningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The avatax account id of the customer
$offer = "offer_example"; // string | The offer to be added to an already existing customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->requestNewEntitlement($id, $offer, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningApi->requestNewEntitlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The avatax account id of the customer |
 **offer** | **string**| The offer to be added to an already existing customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\OfferModel**](../Model/OfferModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

