# FilingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this filing. | [optional] 
**company_id** | **int** | The unique ID number of the company for this filing. | [optional] 
**month** | **int** | The month of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**year** | **int** | The year of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**type** | **string** | Indicates whether this is an original or an amended filing. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**filing_regions** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingRegionModel[]**](FilingRegionModel.md) | A listing of regional tax filings within this time period. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


