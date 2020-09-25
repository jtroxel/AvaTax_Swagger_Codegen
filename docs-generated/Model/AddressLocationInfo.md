# AddressLocationInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_code** | **string** | If you wish to use the address of an existing location for this company, specify the address here.  Otherwise, leave this value empty.                The &#x60;locationCode&#x60; field on this object allows you to quickly use the address of an existing &#x60;locationModel&#x60; object instead  of having to retype the address completely.                This field does not affect the behavior of transactions that must be filed on location-based tax returns.  To specify how a  transaction will be reported on location-based tax returns, please see the &#x60;reportingLocationCode&#x60; field  on the [CreateTransactionModel](https://developer.avalara.com/api-reference/avatax/rest/v2/models/CreateTransactionModel/) element. | [optional] 
**line1** | **string** | First line of the street address | [optional] 
**line2** | **string** | Second line of the street address | [optional] 
**line3** | **string** | Third line of the street address | [optional] 
**city** | **string** | City component of the address | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**postal_code** | **string** | Postal Code / Zip Code component of the address. | [optional] 
**latitude** | **double** | Geospatial latitude measurement, in Decimal Degrees floating point format. | [optional] 
**longitude** | **double** | Geospatial longitude measurement, in Decimal Degrees floating point format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


