# AuditTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | Unique ID number of the company that created this transaction | [optional] 
**reconstructed** | [**\Together\Taxes\Model\ReconstructedApiRequestResponseModel**](ReconstructedApiRequestResponseModel.md) | Reconstructed API request/response | [optional] 
**server_timestamp** | [**\DateTime**](\DateTime.md) | Server timestamp, in UTC, of the date/time when the original transaction was created | [optional] 
**server_duration** | [**\DateTime**](\DateTime.md) | Length of time the original API call took | [optional] 
**api_call_status** | **string** | api call status | [optional] 
**original** | [**\Together\Taxes\Model\OriginalApiRequestResponseModel**](OriginalApiRequestResponseModel.md) | Original API request/response | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


