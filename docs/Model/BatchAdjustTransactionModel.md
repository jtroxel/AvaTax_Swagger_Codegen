# BatchAdjustTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_code** | **string** | Specifies the code of the company for this transaction. | 
**transaction_code** | **string** | Please specify the transaction code of the transacion to void. | 
**document_type** | **string** | Specifies the type of document to void. | [optional] 
**adjustment_reason** | **string** | A reason code indicating why this adjustment was made | 
**adjustment_description** | **string** | If the AdjustmentReason is \&quot;Other\&quot;, specify the reason here.                This is required when the AdjustmentReason is 8 (Other). | [optional] 
**new_transaction** | [**\Together\Taxes\Model\CreateTransactionModel**](CreateTransactionModel.md) | Replace the current transaction with tax data calculated for this new transaction | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


