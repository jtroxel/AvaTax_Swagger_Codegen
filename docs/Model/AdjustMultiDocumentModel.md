# AdjustMultiDocumentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_reason** | **string** | A reason code indicating why this adjustment was made | 
**adjust_description** | **string** | If the AdjustmentReason is \&quot;Other\&quot;, specify the reason here.                This is required when the AdjustmentReason is 8 (Other). | [optional] 
**new_transaction** | [**\Together\Taxes\Model\CreateMultiDocumentModel**](CreateMultiDocumentModel.md) | Replace the current MultiDocument transaction with tax data calculated for this new MultiDocument transaction | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


