# AuditMultiDocumentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reconstructed** | [**\Swagger\Client\Model\ReconstructedMultiDocumentModel**](ReconstructedMultiDocumentModel.md) | Reconstructed API request/response pair that can be used to adjust or re-create this MultiDocument transaction. | [optional] 
**code** | **string** | Represents the unique code of this MultiDocument transaction.                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;. | [optional] 
**type** | **string** | Represents the document type of this MultiDocument transaction.  For more information about  document types, see [DocumentType](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentType/).                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;. | [optional] 
**server_timestamp** | [**\DateTime**](\DateTime.md) | Server timestamp, in UTC, of the date/time when the original transaction was created | [optional] 
**server_duration** | [**\DateTime**](\DateTime.md) | Length of time the original API call took | [optional] 
**api_call_status** | **string** | api call status | [optional] 
**original** | [**\Swagger\Client\Model\OriginalApiRequestResponseModel**](OriginalApiRequestResponseModel.md) | Original API request/response | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


