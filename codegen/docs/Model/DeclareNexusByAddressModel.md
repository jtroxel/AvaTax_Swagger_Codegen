# DeclareNexusByAddressModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**effective_date** | [**\DateTime**](\DateTime.md) | The earliest date on which your company does business at this address.  If you omit  a value in this field, nexus will be declared at the earliest possible date for this  jurisdiction. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date on which your company stopped doing business at this address, or empty if  your company has no plans to stop doing business at this address. | [optional] 
**line1** | **string** | First line of the street address | [optional] 
**text_case** | **string** | Specify the text case for the validated address result.  If not specified, will return uppercase. | [optional] 
**line2** | **string** | Second line of the street address | [optional] 
**line3** | **string** | Third line of the street address | [optional] 
**city** | **string** | City component of the address | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**postal_code** | **string** | Postal Code / Zip Code component of the address. | [optional] 
**latitude** | **double** | Geospatial latitude measurement, in Decimal Degrees floating point format. | [optional] 
**longitude** | **double** | Geospatial longitude measurement, in Decimal Degrees floating point format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


