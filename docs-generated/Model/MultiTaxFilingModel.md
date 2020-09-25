# MultiTaxFilingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this filing. | [optional] 
**company_id** | **int** | The unique ID number of the company for this filing. | [optional] 
**month** | **int** | The month of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**year** | **int** | The year of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**type** | **string** | Indicates whether this is an original or an amended filing. | [optional] 
**tax_summary** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxSummaryModel**](FilingsTaxSummaryModel.md) | A summary of all taxes combined for this period | [optional] 
**tax_details** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxDetailsModel[]**](FilingsTaxDetailsModel.md) | A detailed breakdown of the taxes in this filing | [optional] 
**filing_regions** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiTaxFilingRegionModel[]**](MultiTaxFilingRegionModel.md) | A listing of regional tax filings within this time period. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


