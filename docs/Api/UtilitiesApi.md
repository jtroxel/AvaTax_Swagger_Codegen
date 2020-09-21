# Together\Taxes\UtilitiesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMySubscription**](UtilitiesApi.md#getMySubscription) | **GET** /api/v2/utilities/subscriptions/{serviceTypeId} | Checks if the current user is subscribed to a specific service
[**listMySubscriptions**](UtilitiesApi.md#listMySubscriptions) | **GET** /api/v2/utilities/subscriptions | List all services to which the current user is subscribed
[**ping**](UtilitiesApi.md#ping) | **GET** /api/v2/utilities/ping | Tests connectivity and version of the service


# **getMySubscription**
> \Together\Taxes\Model\SubscriptionModel getMySubscription($service_type_id, $x_avalara_client)

Checks if the current user is subscribed to a specific service

Returns a subscription object for the current account, or 404 Not Found if this subscription is not enabled for this account.                This API will return an error if it is called with invalid authentication credentials.                This API is intended to help you determine whether you have the necessary subscription to use certain API calls  within AvaTax.  You can examine the subscriptions returned from this API call to look for a particular product  or subscription to provide useful information to the current user as to whether they are entitled to use  specific features of AvaTax.

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


$apiInstance = new Together\Taxes\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_type_id = "service_type_id_example"; // string | The service to check
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getMySubscription($service_type_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->getMySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_type_id** | **string**| The service to check |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\SubscriptionModel**](../Model/SubscriptionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMySubscriptions**
> \Together\Taxes\Model\FetchResultSubscriptionModel listMySubscriptions($x_avalara_client)

List all services to which the current user is subscribed

Returns the list of all subscriptions enabled for the currently logged in user.                This API will return an error if it is called with invalid authentication credentials.                This API is intended to help you determine whether you have the necessary subscription to use certain API calls  within AvaTax.  You can examine the subscriptions returned from this API call to look for a particular product  or subscription to provide useful information to the current user as to whether they are entitled to use  specific features of AvaTax.

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


$apiInstance = new Together\Taxes\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listMySubscriptions($x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->listMySubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultSubscriptionModel**](../Model/FetchResultSubscriptionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ping**
> \Together\Taxes\Model\PingResultModel ping($x_avalara_client)

Tests connectivity and version of the service

Check connectivity to AvaTax and return information about the AvaTax API server.                This API is intended to help you verify that your connection is working.  This API will always succeed and will  never return a error.  It provides basic information about the server you connect to:                * `version` - The version number of the AvaTax API server that responded to your request.  The AvaTax API version number is updated once per month during Avalara's update process.  * `authenticated` - A boolean flag indicating whether or not you sent valid credentials with your API request.  * `authenticationType` - If you provided valid credentials to the API, this field will tell you whether you used Bearer, Username, or LicenseKey authentication.  * `authenticatedUserName` - If you provided valid credentials to the API, this field will tell you the username of the currently logged in user.  * `authenticatedUserId` - If you provided valid credentials to the API, this field will tell you the user ID of the currently logged in user.  * `authenticatedAccountId` - If you provided valid credentials to the API, this field will contain the account ID of the currently logged in user.                This API helps diagnose connectivity problems between your application and AvaTax; you may call this API even  if you do not have verified connection credentials.  If this API fails, either your computer is not connected to  the internet, or there is a routing problem between your office and Avalara, or the Avalara server is not available.  For more information on the uptime of AvaTax, please see [Avalara's AvaTax Status Page](https://status.avalara.com/).  ### Security Policies  * This API may be called without providing authentication credentials.

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


$apiInstance = new Together\Taxes\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->ping($x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\PingResultModel**](../Model/PingResultModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

