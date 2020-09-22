# Together\Taxes\ItemsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchDeleteItemClassifications**](ItemsApi.md#batchDeleteItemClassifications) | **DELETE** /api/v2/companies/{companyId}/items/{itemId}/classifications | Delete all classifications for an item
[**batchDeleteItemParameters**](ItemsApi.md#batchDeleteItemParameters) | **DELETE** /api/v2/companies/{companyId}/items/{itemId}/parameters | Delete all parameters for an item
[**createItemClassifications**](ItemsApi.md#createItemClassifications) | **POST** /api/v2/companies/{companyId}/items/{itemId}/classifications | Add classifications to an item.
[**createItemParameters**](ItemsApi.md#createItemParameters) | **POST** /api/v2/companies/{companyId}/items/{itemId}/parameters | Add parameters to an item.
[**createItems**](ItemsApi.md#createItems) | **POST** /api/v2/companies/{companyId}/items | Create a new item
[**deleteItem**](ItemsApi.md#deleteItem) | **DELETE** /api/v2/companies/{companyId}/items/{id} | Delete a single item
[**deleteItemClassification**](ItemsApi.md#deleteItemClassification) | **DELETE** /api/v2/companies/{companyId}/items/{itemId}/classifications/{id} | Delete a single item classification.
[**deleteItemParameter**](ItemsApi.md#deleteItemParameter) | **DELETE** /api/v2/companies/{companyId}/items/{itemId}/parameters/{id} | Delete a single item parameter
[**getItem**](ItemsApi.md#getItem) | **GET** /api/v2/companies/{companyId}/items/{id} | Retrieve a single item
[**getItemClassification**](ItemsApi.md#getItemClassification) | **GET** /api/v2/companies/{companyId}/items/{itemId}/classifications/{id} | Retrieve a single item classification.
[**getItemParameter**](ItemsApi.md#getItemParameter) | **GET** /api/v2/companies/{companyId}/items/{itemId}/parameters/{id} | Retrieve a single item parameter
[**listItemClassifications**](ItemsApi.md#listItemClassifications) | **GET** /api/v2/companies/{companyId}/items/{itemId}/classifications | Retrieve classifications for an item.
[**listItemParameters**](ItemsApi.md#listItemParameters) | **GET** /api/v2/companies/{companyId}/items/{itemId}/parameters | Retrieve parameters for an item
[**listItemsByCompany**](ItemsApi.md#listItemsByCompany) | **GET** /api/v2/companies/{companyId}/items | Retrieve items for this company
[**queryItems**](ItemsApi.md#queryItems) | **GET** /api/v2/items | Retrieve all items
[**syncItems**](ItemsApi.md#syncItems) | **POST** /api/v2/companies/{companyId}/items/sync | Sync items from a product catalog
[**updateItem**](ItemsApi.md#updateItem) | **PUT** /api/v2/companies/{companyId}/items/{id} | Update a single item
[**updateItemClassification**](ItemsApi.md#updateItemClassification) | **PUT** /api/v2/companies/{companyId}/items/{itemId}/classifications/{id} | Update an item classification.
[**updateItemParameter**](ItemsApi.md#updateItemParameter) | **PUT** /api/v2/companies/{companyId}/items/{itemId}/parameters/{id} | Update an item parameter


# **batchDeleteItemClassifications**
> \Together\Taxes\Model\ErrorDetail[] batchDeleteItemClassifications($company_id, $item_id, $x_avalara_client)

Delete all classifications for an item

Delete all the classifications for a given item.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item.
$item_id = 789; // int | The ID of the item you wish to delete the classifications.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->batchDeleteItemClassifications($company_id, $item_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->batchDeleteItemClassifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item. |
 **item_id** | **int**| The ID of the item you wish to delete the classifications. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **batchDeleteItemParameters**
> \Together\Taxes\Model\ErrorDetail[] batchDeleteItemParameters($company_id, $item_id, $x_avalara_client)

Delete all parameters for an item

Delete all the parameters for a given item.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item.
$item_id = 789; // int | The ID of the item you wish to delete the parameters.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->batchDeleteItemParameters($company_id, $item_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->batchDeleteItemParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item. |
 **item_id** | **int**| The ID of the item you wish to delete the parameters. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createItemClassifications**
> \Together\Taxes\Model\ItemClassificationOutputModel[] createItemClassifications($company_id, $item_id, $x_avalara_client, $body)

Add classifications to an item.

Add classifications to an item.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.                An item may only have one classification per tax system.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\ItemClassificationInputModel()); // \Together\Taxes\Model\ItemClassificationInputModel[] | The item classifications you wish to create.

try {
    $result = $apiInstance->createItemClassifications($company_id, $item_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItemClassifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemClassificationInputModel[]**](../Model/ItemClassificationInputModel.md)| The item classifications you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\ItemClassificationOutputModel[]**](../Model/ItemClassificationOutputModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createItemParameters**
> \Together\Taxes\Model\ItemParameterModel[] createItemParameters($company_id, $item_id, $x_avalara_client, $body)

Add parameters to an item.

Add parameters to an item.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.                To see available parameters for this item, call `/api/v2/definitions/parameters?$filter=attributeType eq Product`                Some parameters are only available for use if you have subscribed to specific AvaTax services. To see which parameters you are able to use, add the query parameter \"$showSubscribed=true\" to the parameter definition call above.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item parameter.
$item_id = 789; // int | The item id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\ItemParameterModel()); // \Together\Taxes\Model\ItemParameterModel[] | The item parameters you wish to create.

try {
    $result = $apiInstance->createItemParameters($company_id, $item_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItemParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item parameter. |
 **item_id** | **int**| The item id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemParameterModel[]**](../Model/ItemParameterModel.md)| The item parameters you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\ItemParameterModel[]**](../Model/ItemParameterModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **createItems**
> \Together\Taxes\Model\ItemModel[] createItems($company_id, $x_avalara_client, $body)

Create a new item

Creates one or more new item objects attached to this company.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.                The tax code takes precedence over the tax code id if both are provided.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\ItemModel()); // \Together\Taxes\Model\ItemModel[] | The item you wish to create.

try {
    $result = $apiInstance->createItems($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemModel[]**](../Model/ItemModel.md)| The item you wish to create. | [optional]

### Return type

[**\Together\Taxes\Model\ItemModel[]**](../Model/ItemModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteItem**
> \Together\Taxes\Model\ErrorDetail[] deleteItem($company_id, $id, $x_avalara_client)

Delete a single item

Deletes the item object at this URL.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.                Deleting an item will also delete the parameters and classifications associated with that item.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item.
$id = 789; // int | The ID of the item you wish to delete.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteItem($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item. |
 **id** | **int**| The ID of the item you wish to delete. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteItemClassification**
> \Together\Taxes\Model\ErrorDetail[] deleteItemClassification($company_id, $item_id, $id, $x_avalara_client)

Delete a single item classification.

Delete a single item classification.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id.
$id = 789; // int | The item classification id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteItemClassification($company_id, $item_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItemClassification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id. |
 **id** | **int**| The item classification id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **deleteItemParameter**
> \Together\Taxes\Model\ErrorDetail[] deleteItemParameter($company_id, $item_id, $id, $x_avalara_client)

Delete a single item parameter

Delete a single item parameter.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$item_id = 789; // int | The item id
$id = 789; // int | The parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteItemParameter($company_id, $item_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItemParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **item_id** | **int**| The item id |
 **id** | **int**| The parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getItem**
> \Together\Taxes\Model\ItemModel getItem($company_id, $id, $include, $x_avalara_client)

Retrieve a single item

Get the `Item` object identified by this URL.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item object
$id = 789; // int | The primary key of this item
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getItem($company_id, $id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item object |
 **id** | **int**| The primary key of this item |
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ItemModel**](../Model/ItemModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getItemClassification**
> \Together\Taxes\Model\ItemClassificationOutputModel getItemClassification($company_id, $item_id, $id, $x_avalara_client)

Retrieve a single item classification.

Retrieve a single item classification.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id.
$id = 789; // int | The item classification id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getItemClassification($company_id, $item_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemClassification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id. |
 **id** | **int**| The item classification id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ItemClassificationOutputModel**](../Model/ItemClassificationOutputModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **getItemParameter**
> \Together\Taxes\Model\ItemParameterModel getItemParameter($company_id, $item_id, $id, $x_avalara_client)

Retrieve a single item parameter

Retrieve a single item parameter.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$item_id = 789; // int | The item id
$id = 789; // int | The parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getItemParameter($company_id, $item_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **item_id** | **int**| The item id |
 **id** | **int**| The parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ItemParameterModel**](../Model/ItemParameterModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listItemClassifications**
> \Together\Taxes\Model\FetchResultItemClassificationOutputModel listItemClassifications($company_id, $item_id, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve classifications for an item.

List classifications for an item.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.                Search for specific objects using the criteria in the `$filter` classification; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` classifications.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* productCode, systemCode
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listItemClassifications($company_id, $item_id, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItemClassifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id. |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* productCode, systemCode | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultItemClassificationOutputModel**](../Model/FetchResultItemClassificationOutputModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listItemParameters**
> \Together\Taxes\Model\FetchResultItemParameterModel listItemParameters($company_id, $item_id, $filter, $top, $skip, $order_by, $x_avalara_client)

Retrieve parameters for an item

List parameters for an item.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .  Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id
$item_id = 789; // int | The item id
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* name, unit
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listItemParameters($company_id, $item_id, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItemParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id |
 **item_id** | **int**| The item id |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* name, unit | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultItemParameterModel**](../Model/FetchResultItemParameterModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **listItemsByCompany**
> \Together\Taxes\Model\FetchResultItemModel listItemsByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve items for this company

List all items defined for the current company.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .                Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.                You may specify one or more of the following values in the `$include` parameter to fetch additional nested data, using commas to separate multiple values:                * Parameters  * Classifications  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that defined these items
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* taxCode, classifications, parameters
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listItemsByCompany($company_id, $filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItemsByCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that defined these items |
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* taxCode, classifications, parameters | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultItemModel**](../Model/FetchResultItemModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **queryItems**
> \Together\Taxes\Model\FetchResultItemModel queryItems($filter, $include, $top, $skip, $order_by, $x_avalara_client)

Retrieve all items

Get multiple item objects across all companies.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.                Search for specific objects using the criteria in the `$filter` parameter; full documentation is available on [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/) .                Paginate your results using the `$top`, `$skip`, and `$orderby` parameters.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountUser, CompanyAdmin, CompanyUser, CSPAdmin, CSPTester, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* taxCode, classifications, parameters
$include = "include_example"; // string | A comma separated list of additional data to retrieve.
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryItems($filter, $include, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->queryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* taxCode, classifications, parameters | [optional]
 **include** | **string**| A comma separated list of additional data to retrieve. | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultItemModel**](../Model/FetchResultItemModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **syncItems**
> \Together\Taxes\Model\SyncItemsResponseModel syncItems($company_id, $x_avalara_client, $body)

Sync items from a product catalog

Syncs a list of items with AvaTax without waiting for them to be created. It is ideal for syncing large product catalogs  with AvaTax.                Any invalid or duplicate items will be ignored. To diagnose why an item is not created, use the normal create transaction API to receive validation information.                This API is currently limited to 1000 items per call (the limit is subject to change).                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that owns this item.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\SyncItemsRequestModel(); // \Together\Taxes\Model\SyncItemsRequestModel | The request object.

try {
    $result = $apiInstance->syncItems($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->syncItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that owns this item. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\SyncItemsRequestModel**](../Model/SyncItemsRequestModel.md)| The request object. | [optional]

### Return type

[**\Together\Taxes\Model\SyncItemsResponseModel**](../Model/SyncItemsResponseModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateItem**
> \Together\Taxes\Model\ItemModel updateItem($company_id, $id, $x_avalara_client, $body)

Update a single item

Replace the existing `Item` object at this URL with an updated object.                Items are a way of separating your tax calculation process from your tax configuration details.  If you choose, you  can provide `itemCode` values for each `CreateTransaction()` API call rather than specifying tax codes, parameters, descriptions,  and other data fields.  AvaTax will automatically look up each `itemCode` and apply the correct tax codes and parameters  from the item table instead.  This allows your CreateTransaction call to be as simple as possible, and your tax compliance  team can manage your item catalog and adjust the tax behavior of items without having to modify your software.                All data from the existing object will be replaced with data in the object you PUT.  To set a field's value to null,  you may either set its value to null or omit that field from the object you post.                The tax code takes precedence over the tax code id if both are provided.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID of the company that this item belongs to.
$id = 789; // int | The ID of the item you wish to update
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ItemModel(); // \Together\Taxes\Model\ItemModel | The item object you wish to update.

try {
    $result = $apiInstance->updateItem($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID of the company that this item belongs to. |
 **id** | **int**| The ID of the item you wish to update |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemModel**](../Model/ItemModel.md)| The item object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\ItemModel**](../Model/ItemModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateItemClassification**
> \Together\Taxes\Model\ItemClassificationOutputModel updateItemClassification($company_id, $item_id, $id, $x_avalara_client, $body)

Update an item classification.

Update an item classification.                A classification is the code for a product in a particular tax system. Classifications enable an item to be used in multiple tax systems which may have different tax rates for a product.                When an item is used in a transaction, the applicable classification will be used to determine the appropriate tax rate.                An item may only have one classification per tax system.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id.
$id = 789; // int | The item classification id.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ItemClassificationInputModel(); // \Together\Taxes\Model\ItemClassificationInputModel | The item object you wish to update.

try {
    $result = $apiInstance->updateItemClassification($company_id, $item_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItemClassification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id. |
 **id** | **int**| The item classification id. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemClassificationInputModel**](../Model/ItemClassificationInputModel.md)| The item object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\ItemClassificationOutputModel**](../Model/ItemClassificationOutputModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **updateItemParameter**
> \Together\Taxes\Model\ItemParameterModel updateItemParameter($company_id, $item_id, $id, $x_avalara_client, $body)

Update an item parameter

Update an item parameter.                Some items can be taxed differently depending on the properties of that item, such as the item grade or by a particular measurement of that item. In AvaTax, these tax-affecting properties are called \"parameters\".                A parameter added to an item will be used by default in tax calculation but will not show on the transaction line referencing the item .                A parameter specified on a transaction line will override an item parameter if they share the same parameter name.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, SSTAdmin, TechnicalSupportAdmin.

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


$apiInstance = new Together\Taxes\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company id.
$item_id = 789; // int | The item id
$id = 789; // int | The item parameter id
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\ItemParameterModel(); // \Together\Taxes\Model\ItemParameterModel | The item object you wish to update.

try {
    $result = $apiInstance->updateItemParameter($company_id, $item_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItemParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company id. |
 **item_id** | **int**| The item id |
 **id** | **int**| The item parameter id |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\ItemParameterModel**](../Model/ItemParameterModel.md)| The item object you wish to update. | [optional]

### Return type

[**\Together\Taxes\Model\ItemParameterModel**](../Model/ItemParameterModel.md)

### Authorization

[OauthSecurity](../../../README.md#OauthSecurity), [UserSecurity](../../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

