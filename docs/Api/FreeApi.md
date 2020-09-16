# Swagger\Client\FreeApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestFreeTrial**](FreeApi.md#requestFreeTrial) | **POST** /api/v2/accounts/freetrials/request | FREE API - Request a free trial of AvaTax
[**taxRatesByAddress**](FreeApi.md#taxRatesByAddress) | **GET** /api/v2/taxrates/byaddress | FREE API - Sales tax rates for a specified address
[**taxRatesByPostalCode**](FreeApi.md#taxRatesByPostalCode) | **GET** /api/v2/taxrates/bypostalcode | FREE API - Sales tax rates for a specified country and postal code. This API is only available for US postal codes.


# **requestFreeTrial**
> \Swagger\Client\Model\NewAccountModel requestFreeTrial($body)

FREE API - Request a free trial of AvaTax

Call this API to obtain a free AvaTax account.                This API is free to use.  No authentication credentials are required to call this API. You must read and  accept [Avalara's terms and conditions](https://www1.avalara.com/us/en/legal/terms.html) for the account to be  created.                If all conditions are met, this API will grant a free trial version of AvaTax.  For a list of functionality  available in the free trial and its limitations, please see the [AvaTax Developer Website Free Trial page](https://developer.avalara.com/avatax/signup/).                After your free trial concludes, you will still be able to use the [Free AvaTax API Suite](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Free/).  ### Security Policies  * This API may be called without providing authentication credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FreeTrialRequestModel(); // \Swagger\Client\Model\FreeTrialRequestModel | Required information to provision a free trial account.

try {
    $result = $apiInstance->requestFreeTrial($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeApi->requestFreeTrial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FreeTrialRequestModel**](../Model/FreeTrialRequestModel.md)| Required information to provision a free trial account. | [optional]

### Return type

[**\Swagger\Client\Model\NewAccountModel**](../Model/NewAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRatesByAddress**
> \Swagger\Client\Model\TaxRateModel taxRatesByAddress($line1, $region, $postal_code, $country, $line2, $line3, $city, $x_avalara_client)

FREE API - Sales tax rates for a specified address

# Free-To-Use                The TaxRates API is a free-to-use, no cost option for estimating sales tax rates.  Any customer can request a free AvaTax account and make use of the TaxRates API.                Usage of this API is subject to rate limits.  Users who exceed the rate limit will receive HTTP  response code 429 - `Too Many Requests`.                This API assumes that you are selling general tangible personal property at a retail point-of-sale  location in the United States only.                For more powerful tax calculation, please consider upgrading to the `CreateTransaction` API,  which supports features including, but not limited to:                * Nexus declarations  * Taxability based on product/service type  * Sourcing rules affecting origin/destination states  * Customers who are exempt from certain taxes  * States that have dollar value thresholds for tax amounts  * Refunds for products purchased on a different date  * Detailed jurisdiction names and state assigned codes  * And more!                Please see [Estimating Tax with REST v2](http://developer.avalara.com/blog/2016/11/04/estimating-tax-with-rest-v2/)  for information on how to upgrade to the full AvaTax CreateTransaction API.

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


$apiInstance = new Swagger\Client\Api\FreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$line1 = "line1_example"; // string | The street address of the location.
$region = "region_example"; // string | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API `ListRegions`.
$postal_code = "postal_code_example"; // string | The postal code of the location.
$country = "country_example"; // string | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API `ListCountries`.
$line2 = "line2_example"; // string | The street address of the location.
$line3 = "line3_example"; // string | The street address of the location.
$city = "city_example"; // string | The city name of the location.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->taxRatesByAddress($line1, $region, $postal_code, $country, $line2, $line3, $city, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeApi->taxRatesByAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **line1** | **string**| The street address of the location. |
 **region** | **string**| Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. |
 **postal_code** | **string**| The postal code of the location. |
 **country** | **string**| Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. |
 **line2** | **string**| The street address of the location. | [optional]
 **line3** | **string**| The street address of the location. | [optional]
 **city** | **string**| The city name of the location. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TaxRateModel**](../Model/TaxRateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRatesByPostalCode**
> \Swagger\Client\Model\TaxRateModel taxRatesByPostalCode($country, $postal_code, $x_avalara_client)

FREE API - Sales tax rates for a specified country and postal code. This API is only available for US postal codes.

# Free-To-Use                This API is only available for a US postal codes.                The TaxRates API is a free-to-use, no cost option for estimating sales tax rates.  Any customer can request a free AvaTax account and make use of the TaxRates API.                Usage of this API is subject to rate limits.  Users who exceed the rate limit will receive HTTP  response code 429 - `Too Many Requests`.                This API assumes that you are selling general tangible personal property at a retail point-of-sale  location in the United States only.                For more powerful tax calculation, please consider upgrading to the `CreateTransaction` API,  which supports features including, but not limited to:                * Nexus declarations  * Taxability based on product/service type  * Sourcing rules affecting origin/destination states  * Customers who are exempt from certain taxes  * States that have dollar value thresholds for tax amounts  * Refunds for products purchased on a different date  * Detailed jurisdiction names and state assigned codes  * And more!                Please see [Estimating Tax with REST v2](http://developer.avalara.com/blog/2016/11/04/estimating-tax-with-rest-v2/)  for information on how to upgrade to the full AvaTax CreateTransaction API.

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


$apiInstance = new Swagger\Client\Api\FreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API `ListCountries`.
$postal_code = "postal_code_example"; // string | The postal code of the location.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->taxRatesByPostalCode($country, $postal_code, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeApi->taxRatesByPostalCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. |
 **postal_code** | **string**| The postal code of the location. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\TaxRateModel**](../Model/TaxRateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

