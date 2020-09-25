# TaxRegionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the tax region. | [optional] 
**code** | **string** | The code of the tax region. | [optional] 
**name** | **string** | The name of the tax region. | [optional] 
**county** | **string** | The name of the county. | [optional] 
**city** | **string** | The name of the city. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country of this jurisdiction.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**ser_code** | **string** | The ser code. | [optional] 
**signature_code** | **string** | The tax region signature code. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date this tax region starts to take effect. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date this tax region stops to take effect. | [optional] 
**is_acm** | **bool** | Is Acm flag. | [optional] 
**is_sst** | **bool** | Is SST flag. | [optional] 
**jurisdictions** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\DenormalizedJurisModel[]**](DenormalizedJurisModel.md) | List of jurisdictions associated with this tax region. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


