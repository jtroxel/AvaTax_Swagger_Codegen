# Swagger\Client\FilingCalendarsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCompanyReturnSettings**](FilingCalendarsApi.md#deleteCompanyReturnSettings) | **DELETE** /api/v2/companies/{companyId}/filingcalendars/{filingCalendarId}/setting/{companyReturnSettingId} | Delete a company return setting


# **deleteCompanyReturnSettings**
> \Swagger\Client\Model\CompanyReturnSettingModel[] deleteCompanyReturnSettings($company_id, $filing_calendar_id, $company_return_setting_id, $x_avalara_client)

Delete a company return setting

This API is available by invitation only and only available for users with Compliance access  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPTester, FirmAdmin, FirmUser, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Swagger\Client\Api\FilingCalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID of the company
$filing_calendar_id = 56; // int | The unique ID of the filing calendar that will remove setting
$company_return_setting_id = 789; // int | The unique ID of the company return setting that will be deleted from the filing calendar
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteCompanyReturnSettings($company_id, $filing_calendar_id, $company_return_setting_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilingCalendarsApi->deleteCompanyReturnSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID of the company |
 **filing_calendar_id** | **int**| The unique ID of the filing calendar that will remove setting |
 **company_return_setting_id** | **int**| The unique ID of the company return setting that will be deleted from the filing calendar |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\CompanyReturnSettingModel[]**](../Model/CompanyReturnSettingModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

