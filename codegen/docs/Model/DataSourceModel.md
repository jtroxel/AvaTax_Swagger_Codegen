# DataSourceModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the datasource. | [optional] 
**company_id** | **int** | The id of the company to which the datasource belongs to. | 
**source** | **string** | The extractor/connector id. | 
**instance** | **string** | The unique ID number of this connection. | [optional] 
**is_enabled** | **bool** | The connection using the connection_id is enabled. The customer is responsible to enable or disable. | [optional] 
**is_synced** | **bool** | If all the information has been transferred from the extractor to the database. | [optional] 
**is_authorized** | **bool** | True if this data source is authorized. | [optional] 
**last_synced_date** | [**\DateTime**](\DateTime.md) | The date when the information was last synched. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**deleted_date** | [**\DateTime**](\DateTime.md) | The date when this record was deleted. | [optional] 
**recalculate** | **bool** | Specifies whether transactions created by this data source needs to re-calculate tax or not | [optional] 
**name** | **string** | Specifies the name of the extractor | [optional] 
**external_state** | **string** | Specifies any implementation-specific information along with the DataSource.This field has no internal meaning in AvaTax and is purely for the convenience of the DataSource API user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


