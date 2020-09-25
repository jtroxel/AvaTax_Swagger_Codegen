# IsoRegionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_code** | **string** | The two-character ISO 3166 country code this region belongs to | [optional] 
**code** | **string** | The three character ISO 3166 region code | [optional] 
**name** | **string** | The full name, using localized characters, for this region, in uppercase.                For names in proper or formal case, or for names in other languages, please examine the &#x60;localizedNames&#x60; element for an appropriate name. | [optional] 
**classification** | **string** | The word in the local language that classifies what type of a region this represents | [optional] 
**streamlined_sales_tax** | **bool** | For the United States, this flag indicates whether a U.S. State participates in the Streamlined  Sales Tax program.  For countries other than the US, this flag is null. | [optional] 
**localized_names** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\IsoLocalizedName[]**](IsoLocalizedName.md) | A list of localized names in a variety of languages.                This list is maintained by the International Standards Organization. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


