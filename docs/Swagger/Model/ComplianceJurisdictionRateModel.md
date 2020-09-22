# ComplianceJurisdictionRateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jurisdiction_id** | **int** | The id of the jurisdiction. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country of this jurisdiction.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**name** | **string** | The name of the jurisdiction. | [optional] 
**jurisdiction_type_id** | **string** | The type of the jurisdiction, indicating whether it is a country, state/region, city, for example. | [optional] 
**rate** | **double** | The compontent rate. | [optional] 
**rate_type_id** | **string** | The rate type. | [optional] 
**tax_type_id** | **string** | The tax type. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date this rate is starts to take effect. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date this rate is no longer active. | [optional] 
**state_assigned_code** | **string** | The state assigned code. | [optional] 
**tax_authority_id** | **int** | The id of the tax authority. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


