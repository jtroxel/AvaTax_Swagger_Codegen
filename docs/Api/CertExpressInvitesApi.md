# Together\Taxes\CertExpressInvitesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCertExpressInvitation**](CertExpressInvitesApi.md#createCertExpressInvitation) | **POST** /api/v2/companies/{companyId}/customers/{customerCode}/certexpressinvites | Create a CertExpress invitation
[**getCertExpressInvitation**](CertExpressInvitesApi.md#getCertExpressInvitation) | **GET** /api/v2/companies/{companyId}/customers/{customerCode}/certexpressinvites/{id} | Retrieve a single CertExpress invitation
[**listCertExpressInvitations**](CertExpressInvitesApi.md#listCertExpressInvitations) | **GET** /api/v2/companies/{companyId}/certexpressinvites | List CertExpress invitations


# **createCertExpressInvitation**
> \Together\Taxes\Model\CertExpressInvitationStatusModel[] createCertExpressInvitation($company_id, $customer_code, $x_avalara_client, $body)

Create a CertExpress invitation

Creates an invitation for a customer to self-report certificates using the CertExpress website.                This invitation is delivered by your choice of method, or you can present a hyperlink to the user  directly in your connector.  Your customer will be redirected to https://app.certexpress.com/ where  they can follow a step-by-step guide to enter information about their exemption certificates.  The  certificates entered will be recorded and automatically linked to their customer record.                The [CertExpress website](https://app.certexpress.com/home) is available for customers to use at any time.  Using CertExpress with this API will ensure that your certificates are automatically linked correctly into  your company so that they can be used for tax exemptions.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CertExpressInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that will record certificates
$customer_code = "customer_code_example"; // string | The number of the customer where the request is sent to
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = array(new \Together\Taxes\Model\CreateCertExpressInvitationModel()); // \Together\Taxes\Model\CreateCertExpressInvitationModel[] | the requests to send out to customers

try {
    $result = $apiInstance->createCertExpressInvitation($company_id, $customer_code, $x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertExpressInvitesApi->createCertExpressInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that will record certificates |
 **customer_code** | **string**| The number of the customer where the request is sent to |
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\CreateCertExpressInvitationModel[]**](../Model/CreateCertExpressInvitationModel.md)| the requests to send out to customers | [optional]

### Return type

[**\Together\Taxes\Model\CertExpressInvitationStatusModel[]**](../Model/CertExpressInvitationStatusModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCertExpressInvitation**
> \Together\Taxes\Model\CertExpressInvitationModel getCertExpressInvitation($company_id, $customer_code, $id, $include, $x_avalara_client)

Retrieve a single CertExpress invitation

Retrieve an existing CertExpress invitation sent to a customer.                A CertExpression invitation allows a customer to follow a helpful step-by-step guide to provide information  about their certificates.  This step by step guide allows the customer to complete and upload the full  certificate in a convenient, friendly web browser experience.  When the customer completes their certificates,  they will automatically be recorded to your company and linked to the customer record.                The [CertExpress website](https://app.certexpress.com/home) is available for customers to use at any time.  Using CertExpress with this API will ensure that your certificates are automatically linked correctly into  your company so that they can be used for tax exemptions.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CertExpressInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that issued this invitation
$customer_code = "customer_code_example"; // string | The number of the customer where the request is sent to
$id = 56; // int | The unique ID number of this CertExpress invitation
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.  No options are defined at this time.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->getCertExpressInvitation($company_id, $customer_code, $id, $include, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertExpressInvitesApi->getCertExpressInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that issued this invitation |
 **customer_code** | **string**| The number of the customer where the request is sent to |
 **id** | **int**| The unique ID number of this CertExpress invitation |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.  No options are defined at this time. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\CertExpressInvitationModel**](../Model/CertExpressInvitationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCertExpressInvitations**
> \Together\Taxes\Model\FetchResultCertExpressInvitationModel listCertExpressInvitations($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client)

List CertExpress invitations

Retrieve CertExpress invitations sent by this company.                A CertExpression invitation allows a customer to follow a helpful step-by-step guide to provide information  about their certificates.  This step by step guide allows the customer to complete and upload the full  certificate in a convenient, friendly web browser experience.  When the customer completes their certificates,  they will automatically be recorded to your company and linked to the customer record.                The [CertExpress website](https://app.certexpress.com/home) is available for customers to use at any time.  Using CertExpress with this API will ensure that your certificates are automatically linked correctly into  your company so that they can be used for tax exemptions.                Using exemption certificates endpoints requires setup of an auditable document storage for each company that will use certificates.  Companies that do not have this storage system set up will receive the error `CertCaptureNotConfiguredError` when they call exemption  certificate related APIs.  To check if this company is set up, call `GetCertificateSetup`.  To request setup of the auditable document  storage for this company, call `RequestCertificateSetup`.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, CSPTester, SSTAdmin, TechnicalSupportAdmin, TechnicalSupportUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\CertExpressInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The unique ID number of the company that issued this invitation
$include = "include_example"; // string | OPTIONAL: A comma separated list of special fetch options.                             No options are defined at this time.
$filter = "filter_example"; // string | A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).<br />*Not filterable:* companyId, customer, coverLetter, exposureZones, exemptReasons, requestLink
$top = 56; // int | If nonzero, return no more than this number of results.  Used with `$skip` to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records.
$skip = 56; // int | If nonzero, skip this number of results before returning data.  Used with `$top` to provide pagination for large datasets.
$order_by = "order_by_example"; // string | A comma separated list of sort statements in the format `(fieldname) [ASC|DESC]`, for example `id ASC`.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->listCertExpressInvitations($company_id, $include, $filter, $top, $skip, $order_by, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertExpressInvitesApi->listCertExpressInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The unique ID number of the company that issued this invitation |
 **include** | **string**| OPTIONAL: A comma separated list of special fetch options.                             No options are defined at this time. | [optional]
 **filter** | **string**| A filter statement to identify specific records to retrieve.  For more information on filtering, see [Filtering in REST](http://developer.avalara.com/avatax/filtering-in-rest/).&lt;br /&gt;*Not filterable:* companyId, customer, coverLetter, exposureZones, exemptReasons, requestLink | [optional]
 **top** | **int**| If nonzero, return no more than this number of results.  Used with &#x60;$skip&#x60; to provide pagination for large datasets.  Unless otherwise specified, the maximum number of records that can be returned from an API call is 1,000 records. | [optional]
 **skip** | **int**| If nonzero, skip this number of results before returning data.  Used with &#x60;$top&#x60; to provide pagination for large datasets. | [optional]
 **order_by** | **string**| A comma separated list of sort statements in the format &#x60;(fieldname) [ASC|DESC]&#x60;, for example &#x60;id ASC&#x60;. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\Together\Taxes\Model\FetchResultCertExpressInvitationModel**](../Model/FetchResultCertExpressInvitationModel.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

