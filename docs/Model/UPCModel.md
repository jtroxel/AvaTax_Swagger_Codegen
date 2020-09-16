# UPCModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number for this UPC. | [optional] 
**company_id** | **int** | The unique ID number of the company to which this UPC belongs. | [optional] 
**upc** | **string** | The 12-14 character Universal Product Code, European Article Number, or Global Trade Identification Number. | 
**legacy_tax_code** | **string** | Legacy Tax Code applied to any product sold with this UPC. | [optional] 
**description** | **string** | Description of the product to which this UPC applies. | 
**effective_date** | [**\DateTime**](\DateTime.md) | If this UPC became effective on a certain date, this contains the first date on which the UPC was effective. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | If this UPC expired or will expire on a certain date, this contains the last date on which the UPC was effective. | [optional] 
**usage** | **int** | A usage identifier for this UPC code. | [optional] 
**is_system** | **int** | A flag indicating whether this UPC code is attached to the AvaTax system or to a company. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


