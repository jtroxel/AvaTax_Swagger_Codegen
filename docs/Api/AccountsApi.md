# Together\Taxes\AccountsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountResetLicenseKey**](AccountsApi.md#accountResetLicenseKey) | **POST** /api/v2/accounts/{id}/resetlicensekey | Reset this account&#39;s license key
[**activateAccount**](AccountsApi.md#activateAccount) | **POST** /api/v2/accounts/{id}/activate | Activate an account by accepting terms and conditions
[**auditAccount**](AccountsApi.md#auditAccount) | **GET** /api/v2/accounts/{id}/audit | Retrieve audit history for an account.
[**createLicenseKey**](AccountsApi.md#createLicenseKey) | **POST** /api/v2/accounts/{id}/licensekey | Create license key for this account
[**deleteLicenseKey**](AccountsApi.md#deleteLicenseKey) | **DELETE** /api/v2/accounts/{id}/licensekey/{licensekeyname} | Delete license key for this account by license key name
[**getAccount**](AccountsApi.md#getAccount) | **GET** /api/v2/accounts/{id} | Retrieve a single account
[**getAccountConfiguration**](AccountsApi.md#getAccountConfiguration) | **GET** /api/v2/accounts/{id}/configuration | Get configuration settings for this account
[**getLicenseKey**](AccountsApi.md#getLicenseKey) | **GET** /api/v2/accounts/{id}/licensekey/{licensekeyname} | Retrieve license key by license key name
[**getLicenseKeys**](AccountsApi.md#getLicenseKeys) | **GET** /api/v2/accounts/{id}/licensekeys | Retrieve all license keys for this account
[**queryAccounts**](AccountsApi.md#queryAccounts) | **GET** /api/v2/accounts | Retrieve all accounts
[**setAccountConfiguration**](AccountsApi.md#setAccountConfiguration) | **POST** /api/v2/accounts/{id}/configuration | Change configuration settings for this account


# **accountResetLicenseKey**
> \Together\Taxes\Model\LicenseKeyModel accountResetLicenseKey($id, $x_avalara_client, $body)

Reset this account's license key

Resets the existing license key for this account to a new key.                To reset your account, you must specify the ID of the account you wish to reset and confirm the action.                This API is only available to account administrators for the account in question, and may only be called after  an account has been activated by reading and accepting Avalara's terms and conditions.  To activate your account  please log onto the AvaTax website or call the `ActivateAccount` API.                You can only reset license with 'Default' license key name.   Resetting a license key cannot be undone.  Any previous license keys will immediately cease to work when a new key is created.                When you call this API, all account administrators for this account will receive an email with the newly updated license key.  The email will specify which user reset the license key and it will contain the new key to use to update your connectors.  Note: The reset license key functionality will only be available for existing active license key i.e. when you reset license key for the account, the Default license key will be reset.The reset license key functionality is not available for newly created license keys i.e. license keys other than Default  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ResetLicenseKeyModel(); // \Together\Taxes\Model\ResetLicenseKeyModel | A request confirming that you wish to reset the license key of this account.

try {
    $result = $apiInstance->accountResetLicenseKey($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountResetLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ResetLicenseKeyModel**](../Model/ResetLicenseKeyModel.md)| A request confirming that you wish to reset the license key of this account. | [optional]

### Return type

[**\Together\Taxes\Model\LicenseKeyModel**](../Model/LicenseKeyModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **activateAccount**
> \Together\Taxes\Model\AccountModel activateAccount($id, $x_avalara_client, $body)

Activate an account by accepting terms and conditions

Activate the account specified by the unique accountId number.                This activation request can only be called by account administrators.  You must indicate  that you have read and accepted Avalara's terms and conditions to call this API.                Once you have activated your account, use the `AccountResetLicenseKey` API to generate  a license key for your account.                If you have not read or accepted the terms and conditions, this API call will return the  unchanged account model.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account to activate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ActivateAccountModel(); // \Together\Taxes\Model\ActivateAccountModel | The activation request

try {
    $result = $apiInstance->activateAccount($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->activateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account to activate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ActivateAccountModel**](../Model/ActivateAccountModel.md)| The activation request | [optional]

### Return type

[**\Together\Taxes\Model\AccountModel**](../Model/AccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditAccount**
> \Together\Taxes\Model\FetchResultAuditModel auditAccount($id, $start, $end, $top, $skip, $x_avalara_client)

Retrieve audit history for an account.

Retrieve audit trace history for an account.                Your audit trace history contains a record of all API calls made against the AvaTax REST API that returned an error.   You can use this API to investigate  problems and see exactly what information was sent back and forth between your code and AvaTax.                When specifying a start and end datetime, please include a valid timezone indicator, such as the \"Z\" present in the examples for the start and end query parameters.  You can learn more about valid time zone designators at https://en.wikipedia.org/wiki/ISO_8601#Time_zone_designators.                This API enforces limits to the amount of data retrieved. These limits are subject to change.                * You may request data from a maximum of a one-hour time period.  * The amount of data and number of API calls returned by this API are limited and may be adjusted at any time.  * Old records may be migrated out of immediately available storage.  To request older data, please contact your account manager.  * New records must migrate to available storage before they can be retrieved.  You may need to wait a period of time before newly created records can be fetched.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to audit.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start datetime of audit history you with to retrieve, e.g. \"2018-06-08T17:00:00Z\". Defaults to the past 15 minutes.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end datetime of audit history you with to retrieve, e.g. \"2018-06-08T17:15:00Z. Defaults to the current time. Maximum of an hour after the start time.
$top = 10; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 0; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->auditAccount($id, $start, $end, $top, $skip, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->auditAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to audit. |
 **start** | **\DateTime**| The start datetime of audit history you with to retrieve, e.g. \&quot;2018-06-08T17:00:00Z\&quot;. Defaults to the past 15 minutes. | [optional]
 **end** | **\DateTime**| The end datetime of audit history you with to retrieve, e.g. \&quot;2018-06-08T17:15:00Z. Defaults to the current time. Maximum of an hour after the start time. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional] [default to 10]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional] [default to 0]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultAuditModel**](../Model/FetchResultAuditModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLicenseKey**
> \Together\Taxes\Model\LicenseKeyModel createLicenseKey($id, $x_avalara_client, $body)

Create license key for this account

Creates a new license key for this account.                To create a license key for your account, you must specify the ID of the account and license key name.                This API is only available to account administrators for the account in question, and may only be called after  an account has been activated by reading and accepting Avalara's terms and conditions.  To activate your account  please log onto the AvaTax website or call the `ActivateAccount` API.                You will reference this key using license key name. The existing license key will be using 'Default' as license key name.  Hence make sure that the license key name is unique per account considering the existing license key name 'Default'  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\AccountLicenseKeyModel(); // \Together\Taxes\Model\AccountLicenseKeyModel | 

try {
    $result = $apiInstance->createLicenseKey($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AccountLicenseKeyModel**](../Model/AccountLicenseKeyModel.md)|  | [optional]

### Return type

[**\Together\Taxes\Model\LicenseKeyModel**](../Model/LicenseKeyModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLicenseKey**
> \Together\Taxes\Model\ErrorDetail[] deleteLicenseKey($id, $licensekeyname, $x_avalara_client)

Delete license key for this account by license key name

Deletes the license key for this account using license key name.                To delete a license key for your account, you must specify the accountID of the account and license key name.                This API is only available to account administrators for the account in question.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to update.
$licensekeyname = "licensekeyname_example"; // string | The license key name you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteLicenseKey($id, $licensekeyname, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to update. |
 **licensekeyname** | **string**| The license key name you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Together\Taxes\Model\AccountModel getAccount($id, $include, $x_avalara_client)

Retrieve a single account

Get the account object identified by this URL.  You may use the '$include' parameter to fetch additional nested data:                * Subscriptions  * Users  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account to retrieve
$include = "include_example"; // string | A comma separated list of special fetch options
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getAccount($id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account to retrieve |
 **include** | **string**| A comma separated list of special fetch options | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AccountModel**](../Model/AccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountConfiguration**
> \Together\Taxes\Model\AccountConfigurationModel[] getAccountConfiguration($id, $x_avalara_client)

Get configuration settings for this account

Retrieve a list of all configuration settings tied to this account.                Configuration settings provide you with the ability to control features of your account and of your  tax software.  The category names `TaxServiceConfig` and `AddressServiceConfig` are reserved for  Avalara internal software configuration values; to store your own account-level settings, please  create a new category name that begins with `X-`, for example, `X-MyCustomCategory`.                Account settings are permanent settings that cannot be deleted.  You can set the value of an  account setting to null if desired.                Avalara-based account settings for `TaxServiceConfig` and `AddressServiceConfig` affect your account's  tax calculation and address resolution, and should only be changed with care.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getAccountConfiguration($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AccountConfigurationModel[]**](../Model/AccountConfigurationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKey**
> \Together\Taxes\Model\AccountLicenseKeyModel getLicenseKey($id, $licensekeyname, $x_avalara_client)

Retrieve license key by license key name

### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account to retrieve
$licensekeyname = "licensekeyname_example"; // string | The ID of the account to retrieve
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getLicenseKey($id, $licensekeyname, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account to retrieve |
 **licensekeyname** | **string**| The ID of the account to retrieve |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AccountLicenseKeyModel**](../Model/AccountLicenseKeyModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKeys**
> \Together\Taxes\Model\AccountLicenseKeyModel[] getLicenseKeys($id, $x_avalara_client)

Retrieve all license keys for this account

Gets list of all the license keys used by the account.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account to retrieve
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getLicenseKeys($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getLicenseKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account to retrieve |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\AccountLicenseKeyModel[]**](../Model/AccountLicenseKeyModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryAccounts**
> \Together\Taxes\Model\FetchResultAccountModel queryAccounts($include, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve all accounts

List all account objects that can be seen by the current user.                This API lists all accounts you are allowed to see.  In general, most users will only be able to see their own account.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Subscriptions  * Users                For more information about filtering in REST, please see the documentation at http://developer.avalara.com/avatax/filtering-in-rest/ .  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = "include_example"; // string | A comma separated list of objects to fetch underneath this account.  Any object with a URL path underneath this account can be fetched by specifying its name.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* subscriptions, users
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryAccounts($include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->queryAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | **string**| A comma separated list of objects to fetch underneath this account.  Any object with a URL path underneath this account can be fetched by specifying its name. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* subscriptions, users | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultAccountModel**](../Model/FetchResultAccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAccountConfiguration**
> \Together\Taxes\Model\AccountConfigurationModel[] setAccountConfiguration($id, $x_avalara_client, $body)

Change configuration settings for this account

Update configuration settings tied to this account.                Configuration settings provide you with the ability to control features of your account and of your  tax software.  The category names `TaxServiceConfig` and `AddressServiceConfig` are reserved for  Avalara internal software configuration values; to store your own account-level settings, please  create a new category name that begins with `X-`, for example, `X-MyCustomCategory`.                Account settings are permanent settings that cannot be deleted.  You can set the value of an  account setting to null if desired.                Avalara-based account settings for `TaxServiceConfig` and `AddressServiceConfig` affect your account's  tax calculation and address resolution, and should only be changed with care.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\AccountConfigurationModel()); // \Together\Taxes\Model\AccountConfigurationModel[] | 

try {
    $result = $apiInstance->setAccountConfiguration($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->setAccountConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\AccountConfigurationModel[]**](../Model/AccountConfigurationModel.md)|  | [optional]

### Return type

[**\Together\Taxes\Model\AccountConfigurationModel[]**](../Model/AccountConfigurationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

