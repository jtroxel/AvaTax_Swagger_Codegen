# Together\Taxes\TaxContentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildTaxContentFile**](TaxContentApi.md#buildTaxContentFile) | **POST** /api/v2/pointofsaledata/build | Build a multi-location tax content file
[**buildTaxContentFileForLocation**](TaxContentApi.md#buildTaxContentFileForLocation) | **GET** /api/v2/companies/{companyId}/locations/{id}/pointofsaledata | Build a tax content file for a single location
[**downloadTaxRatesByZipCode**](TaxContentApi.md#downloadTaxRatesByZipCode) | **GET** /api/v2/taxratesbyzipcode/download/{date} | Download a file listing tax rates by postal code


# **buildTaxContentFile**
> \SplFileObject buildTaxContentFile($x_avalara_client, $body)

Build a multi-location tax content file

Builds a tax content file containing information useful for a retail point-of-sale solution.                Since tax rates may change based on decisions made by a variety of tax authorities, we recommend  that users of this tax content API download new data every day.  Many tax authorities may finalize  decisions on tax changes at unexpected times and may make changes in response to legal issues or  governmental priorities.  Any tax content downloaded for future time periods is subject to change  if tax rates or tax laws change.                A TaxContent file contains a matrix of the taxes that would be charged when you sell any of your  Items at any of your Locations.  To create items, use `CreateItems()`.  To create locations, use  `CreateLocations()`.  The file is built by looking up the tax profile for your location and your  item and calculating taxes for each in turn.  To include a custom `TaxCode` in this tax content  file, first create the custom tax code using `CreateTaxCodes()` to create the custom tax code,  then use `CreateItems()` to create an item that uses the custom tax code.                This data file can be customized for specific partner devices and usage conditions.                The result of this API is the file you requested in the format you requested using the `responseType` field.                This API builds the file on demand, and is limited to files with no more than 7500 scenarios.  To build a tax content  file for a single location at a time, please use `BuildTaxContentFileForLocation`.                NOTE: This API does not work for Tennessee tax holiday scenarios.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\TaxContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .
$body = new \Together\Taxes\Model\PointOfSaleDataRequestModel(); // \Together\Taxes\Model\PointOfSaleDataRequestModel | Parameters about the desired file format and report format, specifying which company, locations and TaxCodes to include.

try {
    $result = $apiInstance->buildTaxContentFile($x_avalara_client, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxContentApi->buildTaxContentFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]
 **body** | [**\Together\Taxes\Model\PointOfSaleDataRequestModel**](../Model/PointOfSaleDataRequestModel.md)| Parameters about the desired file format and report format, specifying which company, locations and TaxCodes to include. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: application/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildTaxContentFileForLocation**
> \SplFileObject buildTaxContentFileForLocation($company_id, $id, $date, $format, $partner_id, $include_juris_codes, $x_avalara_client)

Build a tax content file for a single location

Builds a tax content file containing information useful for a retail point-of-sale solution.                Since tax rates may change based on decisions made by a variety of tax authorities, we recommend  that users of this tax content API download new data every day.  Many tax authorities may finalize  decisions on tax changes at unexpected times and may make changes in response to legal issues or  governmental priorities.  Any tax content downloaded for future time periods is subject to change  if tax rates or tax laws change.                A TaxContent file contains a matrix of the taxes that would be charged when you sell any of your  Items at any of your Locations.  To create items, use `CreateItems()`.  To create locations, use  `CreateLocations()`.  The file is built by looking up the tax profile for your location and your  item and calculating taxes for each in turn.  To include a custom `TaxCode` in this tax content  file, first create the custom tax code using `CreateTaxCodes()` to create the custom tax code,  then use `CreateItems()` to create an item that uses the custom tax code.                This data file can be customized for specific partner devices and usage conditions.                The result of this API is the file you requested in the format you requested using the `responseType` field.                This API builds the file on demand, and is limited to files with no more than 7500 scenarios.  To build a tax content  file for a multiple locations in a single file, please use `BuildTaxContentFile`.                NOTE: This API does not work for Tennessee tax holiday scenarios.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser. * This API depends on the following active services<br />*Required* (all):  AvaTaxPro.

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


$apiInstance = new Together\Taxes\Api\TaxContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | The ID number of the company that owns this location.
$id = 56; // int | The ID number of the location to retrieve point-of-sale data.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for which point-of-sale data would be calculated (today by default)
$format = "format_example"; // string | The format of the file (JSON by default)
$partner_id = "partner_id_example"; // string | If specified, requests a custom partner-formatted version of the file.
$include_juris_codes = true; // bool | When true, the file will include jurisdiction codes in the result.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->buildTaxContentFileForLocation($company_id, $id, $date, $format, $partner_id, $include_juris_codes, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxContentApi->buildTaxContentFileForLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| The ID number of the company that owns this location. |
 **id** | **int**| The ID number of the location to retrieve point-of-sale data. |
 **date** | **\DateTime**| The date for which point-of-sale data would be calculated (today by default) | [optional]
 **format** | **string**| The format of the file (JSON by default) | [optional]
 **partner_id** | **string**| If specified, requests a custom partner-formatted version of the file. | [optional]
 **include_juris_codes** | **bool**| When true, the file will include jurisdiction codes in the result. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadTaxRatesByZipCode**
> \SplFileObject downloadTaxRatesByZipCode($date, $region, $x_avalara_client)

Download a file listing tax rates by postal code

Download a CSV file containing all five digit postal codes in the United States and their sales  and use tax rates for tangible personal property.                Since tax rates may change based on decisions made by a variety of tax authorities, we recommend  that users of this tax content API download new data every day.  Many tax authorities may finalize  decisions on tax changes at unexpected times and may make changes in response to legal issues or  governmental priorities.  Any tax content downloaded for future time periods is subject to change  if tax rates or tax laws change.                This rates file is intended to be used as a default for tax calculation when your software cannot  call the `CreateTransaction` API call.  When using this file, your software will be unable to  handle complex tax rules such as:                * Zip+4 - This tax file contains five digit zip codes only.  * Different product types - This tax file contains tangible personal property tax rates only.  * Mixed sourcing - This tax file cannot be used to resolve origin-based taxes.  * Threshold-based taxes - This tax file does not contain information about thresholds.                If you use this file to provide default tax rates, please ensure that your software calls `CreateTransaction`  to reconcile the actual transaction and determine the difference between the estimated general tax  rate and the final transaction tax.                The file provided by this API is in CSV format with the following columns:                * ZIP_CODE - The five digit zip code for this record.  * STATE_ABBREV - A valid two character US state abbreviation for this record.  Zip codes may span multiple states.  * COUNTY_NAME - A valid county name for this record.  Zip codes may span multiple counties.  * CITY_NAME - A valid city name for this record.  Zip codes may span multiple cities.  * STATE_SALES_TAX - The state component of the sales tax rate.  * STATE_USE_TAX - The state component of the use tax rate.  * COUNTY_SALES_TAX - The county component of the sales tax rate.  * COUNTY_USE_TAX - The county component of the use tax rate.  * CITY_SALES_TAX - The city component of the sales tax rate.  * CITY_USE_TAX - The city component of the use tax rate.  * TOTAL_SALES_TAX - The total tax rate for sales tax for this postal code.  This value may not equal the sum of the state/county/city due to special tax jurisdiction rules.  * TOTAL_USE_TAX - The total tax rate for use tax for this postal code.  This value may not equal the sum of the state/county/city due to special tax jurisdiction rules.  * TAX_SHIPPING_ALONE - This column contains 'Y' if shipping is taxable.  * TAX_SHIPPING_AND_HANDLING_TOGETHER - This column contains 'Y' if shipping and handling are taxable when sent together.                For more detailed tax content, please use the `BuildTaxContentFile` API which allows usage of exact items and exact locations.  ### Security Policies  * This API requires one of the following user roles: AccountAdmin, AccountOperator, AccountUser, CompanyAdmin, CompanyUser, Compliance Root User, ComplianceAdmin, ComplianceUser, CSPAdmin, CSPTester, FirmAdmin, FirmUser, ProStoresOperator, Registrar, SiteAdmin, SSTAdmin, SystemAdmin, TechnicalSupportAdmin, TechnicalSupportUser, TreasuryAdmin, TreasuryUser.

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


$apiInstance = new Together\Taxes\Api\TaxContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date for which point-of-sale data would be calculated (today by default). Example input: 2016-12-31
$region = "region_example"; // string | A two character region code which limits results to a specific region.
$x_avalara_client = "Swagger UI; 20.9.0; Custom; 1.0"; // string | Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) .

try {
    $result = $apiInstance->downloadTaxRatesByZipCode($date, $region, $x_avalara_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxContentApi->downloadTaxRatesByZipCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| The date for which point-of-sale data would be calculated (today by default). Example input: 2016-12-31 |
 **region** | **string**| A two character region code which limits results to a specific region. | [optional]
 **x_avalara_client** | **string**| Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . | [optional] [default to Swagger UI; 20.9.0; Custom; 1.0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OauthSecurity](../../README.md#OauthSecurity), [UserSecurity](../../README.md#UserSecurity)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

