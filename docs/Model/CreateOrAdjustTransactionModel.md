# CreateOrAdjustTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_reason** | **string** | A reason code indicating why this adjustment was made | [optional] 
**adjustment_description** | **string** | If the AdjustmentReason is \&quot;Other\&quot;, specify the reason here.                This is required when the AdjustmentReason is 8 (Other). | [optional] 
**create_transaction_model** | [**\Swagger\Client\Model\CreateTransactionModel**](CreateTransactionModel.md) | The create transaction model to be created or updated.                If the transaction does not exist, create transaction.  If the transaction exists, adjust the existing transaction. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


