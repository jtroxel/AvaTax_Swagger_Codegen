# Together\Taxes\FundingRequestsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateFundingRequest**](FundingRequestsApi.md#activateFundingRequest) | **GET** /api/v2/fundingrequests/{id}/widget | Request the javascript for a funding setup widget
[**fundingRequestStatus**](FundingRequestsApi.md#fundingRequestStatus) | **GET** /api/v2/fundingrequests/{id} | Retrieve status about a funding setup request


# **activateFundingRequest**
> \Together\Taxes\Model\FundingStatusModel activateFundingRequest($id, $x_avalara_client)

Request the javascript for a funding setup widget

This API is available by invitation only.  Companies that use the Avalara Managed Returns or the SST Certified Service Provider services are  required to setup their funding configuration before Avalara can begin filing tax returns on their  behalf.  Funding configuration for each company is set up by submitting a funding setup request, which can  be sent either via email or via an embedded HTML widget.  When the funding configuration is submitted to Avalara, it will be reviewed by treasury team members  before approval.  This API returns back the actual javascript code to insert into your application to render the  JavaScript funding setup widget inline.  Use the 'methodReturn.javaScript' return value to insert this widget into your HTML page.  This API requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

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


$apiInstance = new Together\Taxes\Api\FundingRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The unique ID number of this funding request
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->activateFundingRequest($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingRequestsApi->activateFundingRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of this funding request |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FundingStatusModel**](../Model/FundingStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fundingRequestStatus**
> \Together\Taxes\Model\FundingStatusModel fundingRequestStatus($id, $x_avalara_client)

Retrieve status about a funding setup request

This API is available by invitation only.  Companies that use the Avalara Managed Returns or the SST Certified Service Provider services are  required to setup their funding configuration before Avalara can begin filing tax returns on their  behalf.  Funding configuration for each company is set up by submitting a funding setup request, which can  be sent either via email or via an embedded HTML widget.  When the funding configuration is submitted to Avalara, it will be reviewed by treasury team members  before approval.  This API checks the status on an existing funding request.  This API requires a subscription to Avalara Managed Returns or SST Certified Service Provider.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Returns* (at least one of):  Mrs, MRSComplianceManager, AvaTaxCsp.<br />*Firm Managed* (for accounts managed by a firm):  ARA, ARAManaged.

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


$apiInstance = new Together\Taxes\Api\FundingRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The unique ID number of this funding request
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->fundingRequestStatus($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingRequestsApi->fundingRequestStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique ID number of this funding request |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FundingStatusModel**](../Model/FundingStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

