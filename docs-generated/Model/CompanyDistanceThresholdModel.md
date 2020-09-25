# CompanyDistanceThresholdModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | A unique ID number representing this distance threshold object. | [optional] 
**company_id** | **int** | The ID number of the company that defined this distance threshold. | [optional] 
**origin_country** | **string** | The origin country for this threshold.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**destination_country** | **string** | The destination country for this threshold.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**eff_date** | [**\DateTime**](\DateTime.md) | For distance threshold values that change over time, this is the earliest date for which this distance  threshold is valid.  If null, this distance threshold is valid for all dates earlier than the &#x60;endDate&#x60; field. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | For distance threshold values that change over time, this is the latest date for which this distance  threshold is valid.  If null, this distance threshold is valid for all dates later than the &#x60;effDate&#x60; field. | [optional] 
**threshold_exceeded** | **bool** | True if your tax professional has determined that the value-added tax distance threshold is exceeded for this pair of countries.                If you set this value to &#x60;false&#x60;, your value added taxes will be calculated using the origin country.  Otherwise, value  added taxes will be calculated on the destination country. | [optional] 
**type** | **string** | Indicates the distance threshold type.                This value can be either &#x60;Sale&#x60; or &#x60;Purchase&#x60;. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


