# TaxCodeModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this tax code. | [optional] 
**company_id** | **int** | The unique ID number of the company that owns this tax code. | [optional] 
**tax_code** | **string** | A code string that identifies this tax code. | 
**tax_code_type_id** | **string** | The type of this tax code. | 
**description** | **string** | A friendly description of this tax code. | [optional] 
**parent_tax_code** | **string** | If this tax code is a subset of a different tax code, this identifies the parent code. | [optional] 
**is_physical** | **bool** | True if this tax code type refers to a physical object.  Read only field. | [optional] 
**goods_service_code** | **int** | The Avalara Goods and Service Code represented by this tax code. | [optional] 
**entity_use_code** | **string** | The Avalara Entity Use Code represented by this tax code. | [optional] 
**is_active** | **bool** | True if this tax code is active and can be used in transactions. | [optional] 
**is_sst_certified** | **bool** | True if this tax code has been certified by the Streamlined Sales Tax governing board.  By default, you should leave this value empty. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


