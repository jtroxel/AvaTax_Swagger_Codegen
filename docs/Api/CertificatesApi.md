# Swagger\Client\CertificatesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCertificates**](CertificatesApi.md#createCertificates) | **POST** /api/v2/companies/{companyId}/certificates | Create certificates for this company
[**deleteCertificate**](CertificatesApi.md#deleteCertificate) | **DELETE** /api/v2/companies/{companyId}/certificates/{id} | Revoke and delete a certificate
[**downloadCertificateImage**](CertificatesApi.md#downloadCertificateImage) | **GET** /api/v2/companies/{companyId}/certificates/{id}/attachment | Download an image for this certificate
[**getCertificate**](CertificatesApi.md#getCertificate) | **GET** /api/v2/companies/{companyId}/certificates/{id} | Retrieve a single certificate
[**getCertificateSetup**](CertificatesApi.md#getCertificateSetup) | **GET** /api/v2/companies/{companyId}/certificates/setup | Check a company&#39;s exemption certificate status.
[**linkAttributesToCertificate**](CertificatesApi.md#linkAttributesToCertificate) | **POST** /api/v2/companies/{companyId}/certificates/{id}/attributes/link | Link attributes to a certificate
[**linkCustomersToCertificate**](CertificatesApi.md#linkCustomersToCertificate) | **POST** /api/v2/companies/{companyId}/certificates/{id}/customers/link | Link customers to a certificate
[**listAttributesForCertificate**](CertificatesApi.md#listAttributesForCertificate) | **GET** /api/v2/companies/{companyId}/certificates/{id}/attributes | List all attributes applied to this certificate
[**listCustomersForCertificate**](CertificatesApi.md#listCustomersForCertificate) | **GET** /api/v2/companies/{companyId}/certificates/{id}/customers | List customers linked to this certificate
[**queryCertificates**](CertificatesApi.md#queryCertificates) | **GET** /api/v2/companies/{companyId}/certificates | List all certificates for a company
[**requestCertificateSetup**](CertificatesApi.md#requestCertificateSetup) | **POST** /api/v2/companies/{companyId}/certificates/setup | Request setup of exemption certificates for this company.
[**unlinkAttributesFromCertificate**](CertificatesApi.md#unlinkAttributesFromCertificate) | **POST** /api/v2/companies/{companyId}/certificates/{id}/attributes/unlink | Unlink attributes from a certificate
[**unlinkCustomersFromCertificate**](CertificatesApi.md#unlinkCustomersFromCertificate) | **POST** /api/v2/companies/{companyId}/certificates/{id}/customers/unlink | Unlink customers from a certificate
[**updateCertificate**](CertificatesApi.md#updateCertificate) | **PUT** /api/v2/companies/{companyId}/certificates/{id} | Update a single certificate
[**uploadCertificateImage**](CertificatesApi.md#uploadCertificateImage) | **POST** /api/v2/companies/{companyId}/certificates/{id}/attachment | Upload an image or PDF attachment for this certificate


# **createCertificates**
> \Swagger\Client\Model\CertificateModel[] createCertificates($company_id, $pre_validated_exemption_reason, $x_avalara_client, $body)

Create certificates for this company

Record one or more certificates document for this company.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                When you create a certificate, it will be processed by Avalara and will become available for use in  calculating tax exemptions when processing is complete.  For a certificate to be used in calculating exemptions,  it must have the following:                * An exposure zone indicating where the certificate is valid  * A link to the customer that is allowed to use this certificate  * Your tax transaction must contain the correct customer code                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.                If the users specified in the certificates do not exist, the API will create the user and link them to the certificate  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, CompanyAdmin, CSPTester, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID number of the company recording this certificate
$pre_validated_exemption_reason = true; // bool | If set to true, the certificate will bypass the human verification process.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Swagger\Client\Model\CertificateModel()); // \Swagger\Client\Model\CertificateModel[] | Certificates to be created

try {
    $result = $apiInstance->createCertificates($company_id, $pre_validated_exemption_reason, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->createCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID number of the company recording this certificate |
 **pre_validated_exemption_reason** | **bool**| If set to true, the certificate will bypass the human verification process. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CertificateModel[]**](../Model/CertificateModel.md)| Certificates to be created | [optional]

### Return type

[**\Swagger\Client\Model\CertificateModel[]**](../Model/CertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCertificate**
> \Swagger\Client\Model\ErrorDetail[] deleteCertificate($company_id, $id, $x_avalara_client)

Revoke and delete a certificate

Revoke the certificate identified by this URL, then delete it.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Revoked certificates can no longer be used.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->deleteCertificate($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->deleteCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\ErrorDetail[]**](../Model/ErrorDetail.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadCertificateImage**
> \SplFileObject downloadCertificateImage($company_id, $id, $page, $type, $x_avalara_client)

Download an image for this certificate

Download an image or PDF file for this certificate.                This API can be used to download either a single-page preview of the certificate or a full PDF document.  To retrieve a preview image, set the `$type` parameter to `Jpeg` and the `$page` parameter to `1`.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$page = 56; // int | If you choose `$type`=`Jpeg`, you must specify which page number to retrieve.
$type = "Pdf"; // string | The data format in which to retrieve the certificate image
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->downloadCertificateImage($company_id, $id, $page, $type, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->downloadCertificateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **page** | **int**| If you choose &#x60;$type&#x60;&#x3D;&#x60;Jpeg&#x60;, you must specify which page number to retrieve. | [optional]
 **type** | **string**| The data format in which to retrieve the certificate image | [optional] [default to Pdf]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCertificate**
> \Swagger\Client\Model\CertificateModel getCertificate($company_id, $id, $include, $x_avalara_client)

Retrieve a single certificate

Get the current certificate identified by this URL.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                You can use the `$include` parameter to fetch the following additional objects for expansion:                * customers - Retrieves the list of customers linked to the certificate.  * po_numbers - Retrieves all PO numbers tied to the certificate.  * attributes - Retrieves all attributes applied to the certificate.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCertificate($company_id, $id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->getCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\CertificateModel**](../Model/CertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCertificateSetup**
> \Swagger\Client\Model\ProvisionStatusModel getCertificateSetup($company_id, $x_avalara_client)

Check a company's exemption certificate status.

Checks whether this company is configured to use exemption certificates in AvaTax.                Exemption certificates are tracked through a different auditable data store than the one that  holds AvaTax transactions.  To use the AvaTax exemption certificate document store, please call  `GetCertificateSetup` to see if your company is configured to use the exemption certificate  document store.  To request setup, please call `RequestCertificateSetup` and your company will  be configured with data storage in the auditable certificate system.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The company ID to check
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCertificateSetup($company_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->getCertificateSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The company ID to check |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\ProvisionStatusModel**](../Model/ProvisionStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkAttributesToCertificate**
> \Swagger\Client\Model\FetchResultCertificateAttributeModel linkAttributesToCertificate($company_id, $id, $x_avalara_client, $body)

Link attributes to a certificate

Link one or many attributes to a certificate.                A certificate may have multiple attributes that control its behavior.  You may link or unlink attributes to a  certificate at any time.  The full list of defined attributes may be found using `ListCertificateAttributes`.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Swagger\Client\Model\CertificateAttributeModel()); // \Swagger\Client\Model\CertificateAttributeModel[] | The list of attributes to link to this certificate.

try {
    $result = $apiInstance->linkAttributesToCertificate($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->linkAttributesToCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CertificateAttributeModel[]**](../Model/CertificateAttributeModel.md)| The list of attributes to link to this certificate. | [optional]

### Return type

[**\Swagger\Client\Model\FetchResultCertificateAttributeModel**](../Model/FetchResultCertificateAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkCustomersToCertificate**
> \Swagger\Client\Model\FetchResultCustomerModel linkCustomersToCertificate($company_id, $id, $x_avalara_client, $body)

Link customers to a certificate

Link one or more customers to an existing certificate.                Customers and certificates must be linked before a customer can make use of a certificate to obtain  a tax exemption in AvaTax.  Since some certificates may cover more than one business entity, a certificate  can be connected to multiple customer records using the `LinkCustomersToCertificate` API.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\LinkCustomersModel(); // \Swagger\Client\Model\LinkCustomersModel | The list of customers needed be added to the Certificate for exemption

try {
    $result = $apiInstance->linkCustomersToCertificate($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->linkCustomersToCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\LinkCustomersModel**](../Model/LinkCustomersModel.md)| The list of customers needed be added to the Certificate for exemption | [optional]

### Return type

[**\Swagger\Client\Model\FetchResultCustomerModel**](../Model/FetchResultCustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAttributesForCertificate**
> \Swagger\Client\Model\FetchResultCertificateAttributeModel listAttributesForCertificate($company_id, $id, $x_avalara_client)

List all attributes applied to this certificate

Retrieve the list of attributes that are linked to this certificate.                A certificate may have multiple attributes that control its behavior.  You may link or unlink attributes to a  certificate at any time.  The full list of defined attributes may be found using [ListCertificateAttributes](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Definitions/ListCertificateAttributes/) API.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listAttributesForCertificate($company_id, $id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->listAttributesForCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\FetchResultCertificateAttributeModel**](../Model/FetchResultCertificateAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomersForCertificate**
> \Swagger\Client\Model\FetchResultCustomerModel listCustomersForCertificate($company_id, $id, $include, $x_avalara_client)

List customers linked to this certificate

List all customers linked to this certificate.                Customers must be linked to a certificate in order to make use of its tax exemption features.  You  can link or unlink customers to a certificate at any time.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.               No options are currently available when fetching customers.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listCustomersForCertificate($company_id, $id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->listCustomersForCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.               No options are currently available when fetching customers. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\FetchResultCustomerModel**](../Model/FetchResultCustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryCertificates**
> \Swagger\Client\Model\FetchResultCertificateModel queryCertificates($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client)

List all certificates for a company

List all certificates recorded by a company                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                You can use the `$include` parameter to fetch the following additional objects for expansion:                * customers - Retrieves the list of customers linked to the certificate.  * po_numbers - Retrieves all PO numbers tied to the certificate.  * attributes - Retrieves all attributes applied to the certificate.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID number of the company to search
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* exemptionNumber, status, ecmsId, ecmsStatus, pdf, pages
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->queryCertificates($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->queryCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID number of the company to search |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.  You can specify one or more of the following:                             * customers - Retrieves the list of customers linked to the certificate.               * po_numbers - Retrieves all PO numbers tied to the certificate.               * attributes - Retrieves all attributes applied to the certificate. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* exemptionNumber, status, ecmsId, ecmsStatus, pdf, pages | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\FetchResultCertificateModel**](../Model/FetchResultCertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestCertificateSetup**
> \Swagger\Client\Model\ProvisionStatusModel requestCertificateSetup($company_id, $x_avalara_client)

Request setup of exemption certificates for this company.

Requests the setup of exemption certificates for this company.                Exemption certificates are tracked through a different auditable data store than the one that  holds AvaTax transactions.  To use the AvaTax exemption certificate document store, please call  `GetCertificateSetup` to see if your company is configured to use the exemption certificate  document store.  To request setup, please call `RequestCertificateSetup` and your company will  be configured with data storage in the auditable certificate system.                This API will return the current status of exemption certificate setup for this company.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->requestCertificateSetup($company_id, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->requestCertificateSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**|  |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Swagger\Client\Model\ProvisionStatusModel**](../Model/ProvisionStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlinkAttributesFromCertificate**
> \Swagger\Client\Model\FetchResultCertificateAttributeModel unlinkAttributesFromCertificate($company_id, $id, $x_avalara_client, $body)

Unlink attributes from a certificate

Unlink one or many attributes from a certificate.                A certificate may have multiple attributes that control its behavior.  You may link or unlink attributes to a  certificate at any time.  The full list of defined attributes may be found using `ListCertificateAttributes`.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Swagger\Client\Model\CertificateAttributeModel()); // \Swagger\Client\Model\CertificateAttributeModel[] | The list of attributes to unlink from this certificate.

try {
    $result = $apiInstance->unlinkAttributesFromCertificate($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->unlinkAttributesFromCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CertificateAttributeModel[]**](../Model/CertificateAttributeModel.md)| The list of attributes to unlink from this certificate. | [optional]

### Return type

[**\Swagger\Client\Model\FetchResultCertificateAttributeModel**](../Model/FetchResultCertificateAttributeModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlinkCustomersFromCertificate**
> \Swagger\Client\Model\FetchResultCustomerModel unlinkCustomersFromCertificate($company_id, $id, $x_avalara_client, $body)

Unlink customers from a certificate

Unlinks one or more customers from a certificate.                Unlinking a certificate from a customer will prevent the certificate from being used to generate  tax exemptions for the customer in the future.  If any previous transactions for this customer had  used this linked certificate, those transactions will be unchanged and will still have a link to the  exemption certificate in question.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\LinkCustomersModel(); // \Swagger\Client\Model\LinkCustomersModel | The list of customers to unlink from this certificate

try {
    $result = $apiInstance->unlinkCustomersFromCertificate($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->unlinkCustomersFromCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\LinkCustomersModel**](../Model/LinkCustomersModel.md)| The list of customers to unlink from this certificate | [optional]

### Return type

[**\Swagger\Client\Model\FetchResultCustomerModel**](../Model/FetchResultCustomerModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCertificate**
> \Swagger\Client\Model\CertificateModel updateCertificate($company_id, $id, $x_avalara_client, $body)

Update a single certificate

Replace the certificate identified by this URL with a new one.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Swagger\Client\Model\CertificateModel(); // \Swagger\Client\Model\CertificateModel | The new certificate object that will replace the existing one

try {
    $result = $apiInstance->updateCertificate($company_id, $id, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->updateCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Swagger\Client\Model\CertificateModel**](../Model/CertificateModel.md)| The new certificate object that will replace the existing one | [optional]

### Return type

[**\Swagger\Client\Model\CertificateModel**](../Model/CertificateModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCertificateImage**
> string uploadCertificateImage($company_id, $id, $file, $x_avalara_client)

Upload an image or PDF attachment for this certificate

Upload an image or PDF attachment for this certificate.                Image attachments can be of the format `PDF`, `JPEG`, `TIFF`, or `PNG`.  To upload a multi-page image, please  use the `PDF` data type.                A certificate is a document stored in either AvaTax Exemptions or CertCapture.  The certificate document  can contain information about a customer's eligibility for exemption from sales or use taxes based on  criteria you specify when you store the certificate.  To view or manage your certificates directly, please  log onto the administrative website for the product you purchased.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Swagger\Client\Api\CertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that recorded this certificate
$id = 56; // int | The unique ID number of this certificate
$file = "/path/to/file.txt"; // \SplFileObject | The exemption certificate file you wanted to upload. Accepted formats are: PDF, JPEG, TIFF, PNG.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->uploadCertificateImage($company_id, $id, $file, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificatesApi->uploadCertificateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that recorded this certificate |
 **id** | **int**| The unique ID number of this certificate |
 **file** | **\SplFileObject**| The exemption certificate file you wanted to upload. Accepted formats are: PDF, JPEG, TIFF, PNG. |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

**string**

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

