# FilingReturnModelBasic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | The unique ID number of the company filing return. | [optional] 
**id** | **int** | The unique ID number of this filing return. | [optional] 
**filing_id** | **int** | The filing id that this return belongs too | [optional] 
**resource_file_id** | **int** | The resourceFileId of the return | [optional] 
**filing_region_id** | **int** | The region id that this return belongs too | [optional] 
**filing_calendar_id** | **int** | The unique ID number of the filing calendar associated with this return. | [optional] 
**country** | **string** | The country of the form. | [optional] 
**region** | **string** | The region of the form. | [optional] 
**end_period_month** | **int** | The month of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**end_period_year** | **int** | The year of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015. | [optional] 
**status** | **string** | The current status of the filing return. | [optional] 
**filing_frequency** | **string** | The filing frequency of the return. | [optional] 
**filed_date** | [**\DateTime**](\DateTime.md) | The date the return was filed by Avalara. | [optional] 
**sales_amount** | **double** | The sales amount. | [optional] 
**filing_type** | **string** | The filing type of the return. | [optional] 
**form_name** | **string** | The name of the form. | [optional] 
**remit_amount** | **double** | The remittance amount of the return. | [optional] 
**form_code** | **string** | The unique code of the form. | [optional] 
**description** | **string** | A description for the return. | [optional] 
**taxable_amount** | **double** | The taxable amount. | [optional] 
**tax_amount** | **double** | The tax amount. | [optional] 
**collect_amount** | **double** | The amount collected by avalara for this return | [optional] 
**tax_due_amount** | **double** | The tax due amount. | [optional] 
**non_taxable_amount** | **double** | The non-taxable amount. | [optional] 
**non_taxable_due_amount** | **double** | The non-taxable due amount. | [optional] 
**consumer_use_tax_amount** | **double** | Consumer use tax liability. | [optional] 
**consumer_use_non_taxable_amount** | **double** | Consumer use non-taxable amount. | [optional] 
**consumer_use_taxable_amount** | **double** | Consumer use taxable amount. | [optional] 
**excluded_sales_amount** | **double** | The amount of sales excluded from the liability calculation | [optional] 
**excluded_non_taxable_amount** | **double** | The amount of non-taxable sales excluded from the liability calculation | [optional] 
**excluded_tax_amount** | **double** | The amount of tax excluded from the liability calculation | [optional] 
**accrual_type** | **string** | Accrual type of the return | [optional] 
**attachments** | [**\Swagger\Client\Model\FilingAttachmentModel[]**](FilingAttachmentModel.md) | The attachments for this return. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


