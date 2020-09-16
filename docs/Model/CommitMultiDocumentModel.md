# CommitMultiDocumentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Represents the unique code of this MultiDocument transaction.                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;.        /// | 
**type** | **string** | Represents the document type of this MultiDocument transaction.  For more information about  document types, see [DocumentType](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentType/).                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;. | [optional] 
**commit** | **bool** | Set this value to be &#x60;true&#x60; to commit this transaction.                Committing a transaction allows it to be reported on a tax filing.  Uncommitted transactions will not be reported. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


