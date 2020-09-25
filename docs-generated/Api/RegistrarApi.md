# Together\Taxes\Provider\AvaTax\Swagger\RegistrarApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](RegistrarApi.md#createAccount) | **POST** /api/v2/accounts | Create a new account
[**createNotifications**](RegistrarApi.md#createNotifications) | **POST** /api/v2/notifications | Create new notifications.
[**createSubscriptions**](RegistrarApi.md#createSubscriptions) | **POST** /api/v2/accounts/{accountId}/subscriptions | Create a new subscription
[**deleteAccount**](RegistrarApi.md#deleteAccount) | **DELETE** /api/v2/accounts/{id} | Delete a single account
[**deleteNotification**](RegistrarApi.md#deleteNotification) | **DELETE** /api/v2/notifications/{id} | Delete a single notification.
[**deleteSubscription**](RegistrarApi.md#deleteSubscription) | **DELETE** /api/v2/accounts/{accountId}/subscriptions/{id} | Delete a single subscription
[**resetPassword**](RegistrarApi.md#resetPassword) | **POST** /api/v2/passwords/{userId}/reset | Reset a user&#39;s password programmatically
[**updateAccount**](RegistrarApi.md#updateAccount) | **PUT** /api/v2/accounts/{id} | Update a single account
[**updateNotification**](RegistrarApi.md#updateNotification) | **PUT** /api/v2/notifications/{id} | Update a single notification.
[**updateSubscription**](RegistrarApi.md#updateSubscription) | **PUT** /api/v2/accounts/{accountId}/subscriptions/{id} | Update a single subscription


# **createAccount**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel[] createAccount($x_avalara_client, $body)

Create a new account

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Create a single new account object.  When creating an account object you may attach subscriptions and users as part of the 'Create' call.  ### Security Policies  * This API requires one of the following user roles: FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel | The account you wish to create.

try {
    $result = $apiInstance->createAccount($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel**](../Model/AccountModel.md)| The account you wish to create. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel[]**](../Model/AccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNotifications**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel[] createNotifications($x_avalara_client, $body)

Create new notifications.

This API is available by invitation only.                Create a single notification.                A notification is a message from Avalara that may have relevance to your business.  You may want  to regularly review notifications and then dismiss them when you are certain that you have addressed  any relevant concerns raised by this notification.                A Global notification is a message which is directed to all the accounts and is set to expire within  a certain time and cannot be dismissed by the user. Make accountId and companyId null to create a global notification.                An example of a notification would be a message about new software, or a change to AvaTax that may  affect you, or a potential issue with your company's tax profile.  ### Security Policies  * This API requires one of the following user roles: FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API is available by invitation only.  To request access to this feature, please speak to a business development manager and request access to [NotificationsAPI:Create].

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel()); // \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel[] | The notifications you wish to create.

try {
    $result = $apiInstance->createNotifications($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->createNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel[]**](../Model/NotificationModel.md)| The notifications you wish to create. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel[]**](../Model/NotificationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscriptions**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel[] createSubscriptions($account_id, $x_avalara_client, $body)

Create a new subscription

This API is for use by Avalara Registrar administrative users only.                Create one or more new subscription objects attached to this account.  A 'subscription' indicates a licensed subscription to a named Avalara service.  To request or remove subscriptions, please contact Avalara sales or your customer account manager.  ### Security Policies  * This API requires one of the following user roles: Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account that owns this subscription.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel()); // \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel[] | The subscription you wish to create.

try {
    $result = $apiInstance->createSubscriptions($account_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->createSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account that owns this subscription. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel[]**](../Model/SubscriptionModel.md)| The subscription you wish to create. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel[]**](../Model/SubscriptionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccount**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[] deleteAccount($id, $x_avalara_client)

Delete a single account

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Delete an account.  Deleting an account will delete all companies, all account level users and license keys attached to this account.  ### Security Policies  * This API requires the user role SystemAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteAccount($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNotification**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[] deleteNotification($id, $x_avalara_client)

Delete a single notification.

This API is available by invitation only.                Delete the existing notification identified by this URL.                A notification is a message from Avalara that may have relevance to your business.  You may want  to regularly review notifications and then dismiss them when you are certain that you have addressed  any relevant concerns raised by this notification.                An example of a notification would be a message about new software, or a change to AvaTax that may  affect you, or a potential issue with your company's tax profile.  ### Security Policies  * This API requires one of the following user roles: FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API is available by invitation only.  To request access to this feature, please speak to a business development manager and request access to [NotificationsAPI:Create].

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The id of the notification you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteNotification($id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->deleteNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the notification you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[] deleteSubscription($account_id, $id, $x_avalara_client)

Delete a single subscription

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Mark the existing account identified by this URL as deleted.  ### Security Policies  * This API requires one of the following user roles: Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account that owns this subscription.
$id = 56; // int | The ID of the subscription you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteSubscription($account_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account that owns this subscription. |
 **id** | **int**| The ID of the subscription you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> string resetPassword($user_id, $unmigrate_from_ai, $x_avalara_client, $body)

Reset a user's password programmatically

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Allows a system admin to reset the password for a specific user via the API.  This API is only available for Avalara Registrar Admins, and can be used to reset the password of any  user based on internal Avalara business processes.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPTester, FirmAdmin, FirmUser, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API is available to Avalara system-level (registrar-level) users only.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The unique ID of the user whose password will be changed
$unmigrate_from_ai = false; // bool | If user's password was migrated to AI, undo this.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\SetPasswordModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\SetPasswordModel | The new password for this user

try {
    $result = $apiInstance->resetPassword($user_id, $unmigrate_from_ai, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The unique ID of the user whose password will be changed |
 **unmigrate_from_ai** | **bool**| If user&#39;s password was migrated to AI, undo this. | [optional] [default to false]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\SetPasswordModel**](../Model/SetPasswordModel.md)| The new password for this user | [optional]

### Return type

**string**

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel updateAccount($id, $x_avalara_client, $body)

Update a single account

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Replace an existing account object with an updated account object.  ### Security Policies  * This API requires one of the following user roles: FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the account you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel | The account object you wish to update.

try {
    $result = $apiInstance->updateAccount($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the account you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel**](../Model/AccountModel.md)| The account object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\AccountModel**](../Model/AccountModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotification**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel updateNotification($id, $x_avalara_client, $body)

Update a single notification.

This API is available by invitation only.                Replaces the notification identified by this URL with a new notification.                A notification is a message from Avalara that may have relevance to your business.  You may want  to regularly review notifications and then dismiss them when you are certain that you have addressed  any relevant concerns raised by this notification.                An example of a notification would be a message about new software, or a change to AvaTax that may  affect you, or a potential issue with your company's tax profile.  ### Security Policies  * This API requires one of the following user roles: FirmAdmin, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API is available by invitation only.  To request access to this feature, please speak to a business development manager and request access to [NotificationsAPI:Create].

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The id of the notification you wish to update.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel | The notification object you wish to update.

try {
    $result = $apiInstance->updateNotification($id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the notification you wish to update. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel**](../Model/NotificationModel.md)| The notification object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\NotificationModel**](../Model/NotificationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscription**
> \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel updateSubscription($account_id, $id, $x_avalara_client, $body)

Update a single subscription

# For Registrar Use Only  This API is for use by Avalara Registrar administrative users only.                Replace the existing subscription object at this URL with an updated object.  A 'subscription' indicates a licensed subscription to a named Avalara service.  To request or remove subscriptions, please contact Avalara sales or your customer account manager.  All data from the existing object will be replaced with data in the object you PUT.  To set a field's value to null, you may either set its value to null or omit that field from the object you post.  ### Security Policies  * This API requires one of the following user roles: Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Provider\AvaTax\Swagger\Api\RegistrarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | The ID of the account that this subscription belongs to.
$id = 56; // int | The ID of the subscription you wish to update
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel(); // \Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel | The subscription you wish to update.

try {
    $result = $apiInstance->updateSubscription($account_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrarApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| The ID of the account that this subscription belongs to. |
 **id** | **int**| The ID of the subscription you wish to update |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel**](../Model/SubscriptionModel.md)| The subscription you wish to update. | [optional]

### Return type

[**\Together\Taxes\Provider\AvaTax\Swagger\Model\SubscriptionModel**](../Model/SubscriptionModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

