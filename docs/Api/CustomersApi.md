# Together\Taxes\CustomersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomers**](CustomersApi.md#createCustomers) | **POST** /api/v2/companies/{companyId}/customers | Create customers for this company
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /api/v2/companies/{companyId}/customers/{customerCode} | Delete a customer record
[**getCustomer**](CustomersApi.md#getCustomer) | **GET** /api/v2/companies/{companyId}/customers/{customerCode} | Retrieve a single customer
[**linkAttributesToCustomer**](CustomersApi.md#linkAttributesToCustomer) | **PUT** /api/v2/companies/{companyId}/customers/{customerCode}/attributes/link | Link attributes to a customer
[**linkCertificatesToCustomer**](CustomersApi.md#linkCertificatesToCustomer) | **POST** /api/v2/companies/{companyId}/customers/{customerCode}/certificates/link | Link certificates to a customer
[**linkShipToCustomersToBillCustomer**](CustomersApi.md#linkShipToCustomersToBillCustomer) | **POST** /api/v2/companies/{companyId}/customers/billto/{code}/shipto/link | Link two customer records together
[**listAttributesForCustomer**](CustomersApi.md#listAttributesForCustomer) | **GET** /api/v2/companies/{companyId}/customers/{customerCode}/attributes | Retrieve a customer&#39;s attributes
[**listCertificatesForCustomer**](CustomersApi.md#listCertificatesForCustomer) | **GET** /api/v2/companies/{companyId}/customers/{customerCode}/certificates | List certificates linked to a customer
[**listValidCertificatesForCustomer**](CustomersApi.md#listValidCertificatesForCustomer) | **GET** /api/v2/companies/{companyId}/customers/{customerCode}/certificates/{country}/{region} | List valid certificates for a location
[**queryCustomers**](CustomersApi.md#queryCustomers) | **GET** /api/v2/companies/{companyId}/customers | List all customers for this company
[**unlinkAttributesFromCustomer**](CustomersApi.md#unlinkAttributesFromCustomer) | **PUT** /api/v2/companies/{companyId}/customers/{customerCode}/attributes/unlink | Unlink attributes from a customer
[**unlinkCertificatesFromCustomer**](CustomersApi.md#unlinkCertificatesFromCustomer) | **POST** /api/v2/companies/{companyId}/customers/{customerCode}/certificates/unlink | Unlink certificates from a customer
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PUT** /api/v2/companies/{companyId}/customers/{customerCode} | Update a single customer


# **createCustomers**
> \Together\Taxes\Model\CustomerModel[] createCustomers($company_id, $x_avalara_client, $body)

Create customers for this company

Create one or more customers for this company.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                A nested object such as CustomFields could be specified and created along with the customer object. To fetch the  nested object, please call 'GetCustomer' API with appropriate $include parameters.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CustomerModel()); // \Together\Taxes\Model\CustomerModel[] | The list of customer objects to be created

try {
    $result = $apiInstance->createCustomers($company_id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CustomerModel[]**](../Model/CustomerModel.md)| The list of customer objects to be created | [optional]

### Return type

[**\Together\Taxes\Model\CustomerModel[]**](../Model/CustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> \Together\Taxes\Model\CustomerModel deleteCustomer($company_id, $customer_code, $x_avalara_client)

Delete a customer record

Deletes the customer object referenced by this URL.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteCustomer($company_id, $customer_code, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CustomerModel**](../Model/CustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Together\Taxes\Model\CustomerModel getCustomer($company_id, $customer_code, $include, $x_avalara_client)

Retrieve a single customer

Retrieve the customer identified by this URL.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this customer object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                You can use the `$include` parameter to fetch the following additional objects for expansion:                * Certificates - Fetch a list of certificates linked to this customer.  * CustomFields - Fetch a list of custom fields associated to this customer.  * attributes - Retrieves all attributes applied to the customer.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$include = "include_example"; // string | Specify optional additional objects to include in this fetch request
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCustomer($company_id, $customer_code, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **include** | **string**| Specify optional additional objects to include in this fetch request | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CustomerModel**](../Model/CustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkAttributesToCustomer**
> \Together\Taxes\Model\FetchResultCustomerAttributeModel linkAttributesToCustomer($company_id, $customer_code, $x_avalara_client, $body)

Link attributes to a customer

Link one or many attributes to a customer.                A customer may have multiple attributes that control its behavior.  You may link or unlink attributes to a  customer at any time.  The full list of defined attributes may be found using `QueryCompanyCustomerAttributes` API.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this customer object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded the provided customer
$customer_code = "customer_code_example"; // string | The unique code representing the current customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CustomerAttributeModel()); // \Together\Taxes\Model\CustomerAttributeModel[] | The list of attributes to link to the customer.

try {
    $result = $apiInstance->linkAttributesToCustomer($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->linkAttributesToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded the provided customer |
 **customer_code** | **string**| The unique code representing the current customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CustomerAttributeModel[]**](../Model/CustomerAttributeModel.md)| The list of attributes to link to the customer. | [optional]

### Return type

[**\Together\Taxes\Model\FetchResultCustomerAttributeModel**](../Model/FetchResultCustomerAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCertificatesToCustomer**
> \Together\Taxes\Model\FetchResultCertificateModel linkCertificatesToCustomer($company_id, $customer_code, $x_avalara_client, $body)

Link certificates to a customer

Link one or more certificates to a customer.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\LinkCertificatesModel(); // \Together\Taxes\Model\LinkCertificatesModel | The list of certificates to link to this customer

try {
    $result = $apiInstance->linkCertificatesToCustomer($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->linkCertificatesToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\LinkCertificatesModel**](../Model/LinkCertificatesModel.md)| The list of certificates to link to this customer | [optional]

### Return type

[**\Together\Taxes\Model\FetchResultCertificateModel**](../Model/FetchResultCertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkShipToCustomersToBillCustomer**
> \Together\Taxes\Model\CustomerModel linkShipToCustomersToBillCustomer($company_id, $code, $x_avalara_client, $body)

Link two customer records together

Links a Ship-To customer record with a Bill-To customer record.                Customer records represent businesses or individuals who can provide exemption certificates.  Some customers  may have certificates that are linked to their shipping address or their billing address.  To group these  customer records together, you may link multiple bill-to and ship-to addresses together to represent a single  entity that has multiple different addresses of different kinds.                In general, a customer will have only one primary billing address and multiple ship-to addresses, representing  all of the different locations where they receive goods.  To facilitate this type of customer, you can send in  one bill-to customer code and multiple ship-to customer codes in a single API call.                Note that you can only link a ship-to customer record to a bill-to customer record.  You may not link two customers  of the same kind together.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company defining customers.
$code = "code_example"; // string | The code of the bill-to customer to link.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\LinkCustomersModel(); // \Together\Taxes\Model\LinkCustomersModel | A list of information about ship-to customers to link to this bill-to customer.

try {
    $result = $apiInstance->linkShipToCustomersToBillCustomer($company_id, $code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->linkShipToCustomersToBillCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company defining customers. |
 **code** | **string**| The code of the bill-to customer to link. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\LinkCustomersModel**](../Model/LinkCustomersModel.md)| A list of information about ship-to customers to link to this bill-to customer. | [optional]

### Return type

[**\Together\Taxes\Model\CustomerModel**](../Model/CustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAttributesForCustomer**
> \Together\Taxes\Model\FetchResultCustomerAttributeModel listAttributesForCustomer($company_id, $customer_code, $x_avalara_client)

Retrieve a customer's attributes

Retrieve the attributes linked to the customer identified by this URL.                A customer may have multiple attributes that control its behavior.  You may link or unlink attributes to a  customer at any time.  The full list of defined attributes may be found using `QueryCompanyCustomerAttributes` API.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this customer object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded the provided customer
$customer_code = "customer_code_example"; // string | The unique code representing the current customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listAttributesForCustomer($company_id, $customer_code, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listAttributesForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded the provided customer |
 **customer_code** | **string**| The unique code representing the current customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCustomerAttributeModel**](../Model/FetchResultCustomerAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCertificatesForCustomer**
> \Together\Taxes\Model\FetchResultCertificateModel listCertificatesForCustomer($company_id, $customer_code, $include, $filter, $top, $skip, $order_by, $x_avalara_client)

List certificates linked to a customer

List all certificates linked to a customer.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* exemptionNumber, status, ecmsId, ecmsStatus, pdf, pages
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listCertificatesForCustomer($company_id, $customer_code, $include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCertificatesForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* exemptionNumber, status, ecmsId, ecmsStatus, pdf, pages | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCertificateModel**](../Model/FetchResultCertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listValidCertificatesForCustomer**
> \Together\Taxes\Model\ExemptionStatusModel listValidCertificatesForCustomer($company_id, $customer_code, $country, $region, $x_avalara_client)

List valid certificates for a location

List valid certificates linked to a customer in a particular country and region.                This API is intended to help identify whether a customer has already provided a certificate that  applies to a particular country and region.  This API is intended to help you remind a customer  when they have or have not provided copies of their exemption certificates to you during the sales  order process.                If a customer does not have a certificate on file and they wish to provide one, you should send the customer  a CertExpress invitation link so that the customer can upload proof of their exemption certificate.  Please  see the `CreateCertExpressInvitation` API to create an invitation link for this customer.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$country = "country_example"; // string | Search for certificates matching this country.  Uses the ISO 3166 two character country code.
$region = "region_example"; // string | Search for certificates matching this region.  Uses the ISO 3166 two or three character state, region, or province code.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listValidCertificatesForCustomer($company_id, $customer_code, $country, $region, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listValidCertificatesForCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **country** | **string**| Search for certificates matching this country.  Uses the ISO 3166 two character country code. |
 **region** | **string**| Search for certificates matching this region.  Uses the ISO 3166 two or three character state, region, or province code. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\ExemptionStatusModel**](../Model/ExemptionStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryCustomers**
> \Together\Taxes\Model\FetchResultCustomerModel queryCustomers($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client)

List all customers for this company

List all customers recorded by this company matching the specified criteria.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                You can use the `$include` parameter to fetch the following additional objects for expansion:                * Certificates - Fetch a list of certificates linked to this customer.  * attributes - Retrieves all attributes applied to the customer.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$include = "include_example"; // string | OPTIONAL - You can specify the value `certificates` to fetch information about certificates linked to the customer.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* shipTos
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryCustomers($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->queryCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **include** | **string**| OPTIONAL - You can specify the value &#x60;certificates&#x60; to fetch information about certificates linked to the customer. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* shipTos | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCustomerModel**](../Model/FetchResultCustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlinkAttributesFromCustomer**
> \Together\Taxes\Model\FetchResultCustomerAttributeModel unlinkAttributesFromCustomer($company_id, $customer_code, $x_avalara_client, $body)

Unlink attributes from a customer

Unlink one or many attributes from a customer.                A customer may have multiple attributes that control its behavior.  You may link or unlink attributes to a  customer at any time.  The full list of defined attributes may be found using `QueryCompanyCustomerAttributes` API.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this customer object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded the customer
$customer_code = "customer_code_example"; // string | The unique code representing the current customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CustomerAttributeModel()); // \Together\Taxes\Model\CustomerAttributeModel[] | The list of attributes to unlink from the customer.

try {
    $result = $apiInstance->unlinkAttributesFromCustomer($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->unlinkAttributesFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded the customer |
 **customer_code** | **string**| The unique code representing the current customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CustomerAttributeModel[]**](../Model/CustomerAttributeModel.md)| The list of attributes to unlink from the customer. | [optional]

### Return type

[**\Together\Taxes\Model\FetchResultCustomerAttributeModel**](../Model/FetchResultCustomerAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlinkCertificatesFromCustomer**
> \Together\Taxes\Model\FetchResultCertificateModel unlinkCertificatesFromCustomer($company_id, $customer_code, $x_avalara_client, $body)

Unlink certificates from a customer

Remove one or more certificates to a customer.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\LinkCertificatesModel(); // \Together\Taxes\Model\LinkCertificatesModel | The list of certificates to link to this customer

try {
    $result = $apiInstance->unlinkCertificatesFromCustomer($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->unlinkCertificatesFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\LinkCertificatesModel**](../Model/LinkCertificatesModel.md)| The list of certificates to link to this customer | [optional]

### Return type

[**\Together\Taxes\Model\FetchResultCertificateModel**](../Model/FetchResultCertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \Together\Taxes\Model\CustomerModel updateCustomer($company_id, $customer_code, $x_avalara_client, $body)

Update a single customer

Replace the customer object at this URL with a new record.                A customer object defines information about a person or business that purchases products from your  company.  When you create a tax transaction in AvaTax, you can use the `customerCode` from this  record in your `CreateTransaction` API call.  AvaTax will search for this `customerCode` value and  identify any certificates linked to this `customer` object.  If any certificate applies to the transaction,  AvaTax will record the appropriate elements of the transaction as exempt and link it to the `certificate`.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this customer
$customer_code = "customer_code_example"; // string | The unique code representing this customer
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\CustomerModel(); // \Together\Taxes\Model\CustomerModel | The new customer model that will replace the existing record at this URL

try {
    $result = $apiInstance->updateCustomer($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this customer |
 **customer_code** | **string**| The unique code representing this customer |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CustomerModel**](../Model/CustomerModel.md)| The new customer model that will replace the existing record at this URL | [optional]

### Return type

[**\Together\Taxes\Model\CustomerModel**](../Model/CustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

