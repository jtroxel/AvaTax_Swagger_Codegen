# FilingRegionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this filing region. | [optional] 
**filing_id** | **int** | The filing id that this region belongs too | [optional] 
**country** | **string** | The two-character ISO-3166 code for the country. | [optional] 
**region** | **string** | The two or three character region code for the region. | [optional] 
**sales_amount** | **double** | The sales amount. | [optional] 
**taxable_amount** | **double** | The taxable amount. | [optional] 
**tax_amount** | **double** | The tax amount. | [optional] 
**tax_due_amount** | **double** | The tax amount due. | [optional] 
**collect_amount** | **double** | The amount collected by Avalara for this region | [optional] 
**total_remittance_amount** | **double** | Total remittance amount of all returns in region | [optional] 
**non_taxable_amount** | **double** | The non-taxable amount. | [optional] 
**consumer_use_tax_amount** | **double** | Consumer use tax liability. | [optional] 
**consumer_use_non_taxable_amount** | **double** | Consumer use non-taxable amount. | [optional] 
**consumer_use_taxable_amount** | **double** | Consumer use taxable amount. | [optional] 
**approve_date** | [**\DateTime**](\DateTime.md) | The date the filing region was approved. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date for the filing cycle. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date for the filing cycle. | [optional] 
**has_nexus** | **bool** | Whether or not you have nexus in this region. | [optional] 
**status** | **string** | The current status of the filing region. | [optional] 
**returns** | [**\Swagger\Client\Model\FilingReturnModel[]**](FilingReturnModel.md) | A list of tax returns in this region. | [optional] 
**suggest_returns** | [**\Swagger\Client\Model\FilingsCheckupSuggestedFormModel[]**](FilingsCheckupSuggestedFormModel.md) | A list of tax returns in this region. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


