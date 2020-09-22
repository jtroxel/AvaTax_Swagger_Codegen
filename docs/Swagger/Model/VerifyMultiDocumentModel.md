# VerifyMultiDocumentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Represents the unique code of this MultiDocument transaction.                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;. | 
**type** | **string** | Represents the document type of this MultiDocument transaction.  For more information about  document types, see [DocumentType](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentType/).                A MultiDocument transaction is uniquely identified by its &#x60;accountId&#x60;, &#x60;code&#x60;, and &#x60;type&#x60;. | 
**verify_transaction_date** | [**\DateTime**](\DateTime.md) | Set this value if you wish to verify a match between &#x60;verifyTransactionDate&#x60; and  the &#x60;documentDate&#x60; value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field. | [optional] 
**verify_total_amount** | **double** | Set this value if you wish to verify a match between &#x60;verifyTotalAmount&#x60; and  the &#x60;totalAmount&#x60; value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field. | [optional] 
**verify_total_tax** | **double** | Set this value if you wish to verify a match between &#x60;verifyTotalTax&#x60; and  the &#x60;totalTax&#x60; value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


