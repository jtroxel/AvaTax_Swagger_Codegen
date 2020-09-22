# ComplianceJurisdictionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_region_id** | **int** | The id of the tax region. | [optional] 
**state_assigned_code** | **string** | The state assigned code for the jurisdiction. | [optional] 
**jurisdiction_type_id** | **string** | The type of the jurisdiction, indicating whether it is a country, state/region, city, for example. | [optional] 
**name** | **string** | The name of the jurisdiction. | [optional] 
**county** | **string** | The name of the county. | [optional] 
**city** | **string** | The name of the city. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country of this jurisdiction.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**tax_region_name** | **string** | The name of the tax region. | [optional] 
**tax_authority_id** | **int** | The id of the tax authority. | [optional] 
**rates** | [**\Together\Taxes\Model\ComplianceAggregatedTaxRateModel[]**](ComplianceAggregatedTaxRateModel.md) | Optional: A list of rates for this jurisdiction. To fetch this list, add the query string &#x60;?$include&#x3D;TaxRates&#x60; to your URL. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


