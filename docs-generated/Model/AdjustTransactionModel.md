# AdjustTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_reason** | **string** | A reason code indicating why this adjustment was made | 
**adjustment_description** | **string** | If the AdjustmentReason is \&quot;Other\&quot;, specify the reason here.                This is required when the AdjustmentReason is 8 (Other). | [optional] 
**new_transaction** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionModel**](CreateTransactionModel.md) | Replace the current transaction with tax data calculated for this new transaction | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


