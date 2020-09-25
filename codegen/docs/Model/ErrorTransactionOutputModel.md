# ErrorTransactionOutputModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | **string** | Error code of the error result from transaction creation | [optional] 
**error_message** | **string** | Error message of the error result from transaction creation | [optional] 
**avatax_error_json** | **string** | The full JSON of the error result from transaction creation | [optional] 
**avatax_create_transaction_json** | **string** | The full JSON of the transaction creation request | [optional] 
**datasource** | **string** | The datasource instance that made the transaction creation call | [optional] 
**document_date** | [**\DateTime**](\DateTime.md) | The date of the document | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The date that this ErrorTransaction will be automatically purged from the detabase. | [optional] 
**amount** | **double** | The amount of the transaction. | [optional] 
**datasource_source** | **string** | The Datasource source of the transaction creation call. | [optional] 
**ship_to_country** | **string** | The country of the ship to address for the transaction creation call. | [optional] 
**ship_to_region** | **string** | The region of the ship to address for the transaction creation call. | [optional] 
**document_type** | **string** | Type of transaction of the error transaction | 
**document_code** | **string** | The internal reference code (used by the client application) of the error transaction | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


