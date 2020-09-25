# JurisdictionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The code that is used to identify this jurisdiction | 
**name** | **string** | The name of this jurisdiction | 
**type** | **string** | The type of the jurisdiction, indicating whether it is a country, state/region, city, for example. | 
**rate** | **double** | The base rate of tax specific to this jurisdiction. | [optional] 
**sales_rate** | **double** | The \&quot;Sales\&quot; tax rate specific to this jurisdiction. | [optional] 
**signature_code** | **string** | The Avalara-supplied signature code for this jurisdiction. | 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**use_rate** | **double** | The \&quot;Seller&#39;s Use\&quot; tax rate specific to this jurisdiction. | [optional] 
**city** | **string** | The city name of this jurisdiction | [optional] 
**county** | **string** | The county name of this jurisdiction | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country of this jurisdiction.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**short_name** | **string** | A short name of the jurisidiction | [optional] 
**state_fips** | **string** | State FIPS code | [optional] 
**county_fips** | **string** | County FIPS code | [optional] 
**place_fips** | **string** | City FIPS code | [optional] 
**id** | **int** | Unique AvaTax Id of this Jurisdiction | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date this jurisdiction starts to take effect on tax calculations | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date this jurisdiction stops to take effect on tax calculations | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


