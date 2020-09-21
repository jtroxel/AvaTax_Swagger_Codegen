# MultiTaxFilingRegionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The two-character ISO-3166 code for the country. | [optional] 
**region** | **string** | The two or three character region code for the region. | [optional] 
**has_nexus** | **bool** | Whether or not you have nexus in this region. | [optional] 
**status** | **string** | The current status of the filing region. | [optional] 
**region_tax_summary** | [**\Together\Taxes\Model\FilingsTaxSummaryModel**](FilingsTaxSummaryModel.md) | A summary of all taxes compbined for this period | [optional] 
**region_tax_details** | [**\Together\Taxes\Model\FilingsTaxDetailsModel[]**](FilingsTaxDetailsModel.md) | A detailed breakdown of the taxes in this filing | [optional] 
**suggest_returns** | [**\Together\Taxes\Model\FilingsCheckupSuggestedFormModel[]**](FilingsCheckupSuggestedFormModel.md) | A list of tax returns in this region. | [optional] 
**returns** | [**\Together\Taxes\Model\MultiTaxFilingReturnModel[]**](MultiTaxFilingReturnModel.md) | A list of tax returns in this region. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


