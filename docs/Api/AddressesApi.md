# Swagger\Client\AddressesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resolveAddress**](AddressesApi.md#resolveAddress) | **GET** /api/v2/addresses/resolve | Retrieve geolocation information for a specified address
[**resolveAddressPost**](AddressesApi.md#resolveAddressPost) | **POST** /api/v2/addresses/resolve | Retrieve geolocation information for a specified address


# **resolveAddress**
> \Swagger\Client\Model\AddressResolutionModel resolveAddress($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client)

Retrieve geolocation information for a specified address

Resolve an address against Avalara's address-validation system.  If the address can be resolved, this API  provides the latitude and longitude of the resolved location.  The value 'resolutionQuality' can be used  to identify how closely this address can be located.  If the address cannot be clearly located, use the  'messages' structure to learn more about problems with this address.  This is the same API as the POST /api/v2/addresses/resolve endpoint.  Both verbs are supported to provide for flexible implementation.                Inorder to get any evaluation for an address please provide atleast one of the following fields/pairs:  1. postal code  2. line1 + city + region  3. line1 + postal code  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AutoAddress.

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


$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line1 = "line1_example"; // string | Line 1
$line2 = "line2_example"; // string | Line 2
$line3 = "line3_example"; // string | Line 3
$city = "city_example"; // string | City
$region = "region_example"; // string | State / Province / Region
$postal_code = "postal_code_example"; // string | Postal Code / Zip Code
$country = "country_example"; // string | Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list)
$text_case = "text_case_example"; // string | selectable text case for address validation
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->resolveAddress($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->resolveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line1** | **string**| Line 1 | [optional]
 **line2** | **string**| Line 2 | [optional]
 **line3** | **string**| Line 3 | [optional]
 **city** | **string**| City | [optional]
 **region** | **string**| State / Province / Region | [optional]
 **postal_code** | **string**| Postal Code / Zip Code | [optional]
 **country** | **string**| Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) | [optional]
 **text_case** | **string**| selectable text case for address validation | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\AddressResolutionModel**](../Model/AddressResolutionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolveAddressPost**
> \Swagger\Client\Model\AddressResolutionModel resolveAddressPost($x_avalara_client, $body)

Retrieve geolocation information for a specified address

Resolve an address against Avalara's address-validation system.  If the address can be resolved, this API  provides the latitude and longitude of the resolved location.  The value 'resolutionQuality' can be used  to identify how closely this address can be located.  If the address cannot be clearly located, use the  'messages' structure to learn more about problems with this address.  This is the same API as the GET /api/v2/addresses/resolve endpoint.  Both verbs are supported to provide for flexible implementation.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AutoAddress.

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


$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\AddressValidationInfo(); // \Swagger\Client\Model\AddressValidationInfo | The address to resolve

try {
    $result = $apiInstance->resolveAddressPost($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->resolveAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\AddressValidationInfo**](../Model/AddressValidationInfo.md)| The address to resolve | [optional]

### Return type

[**\Swagger\Client\Model\AddressResolutionModel**](../Model/AddressResolutionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

