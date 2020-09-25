# FilingAdjustmentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number for the adjustment. | [optional] 
**filing_id** | **int** | The filing return id that this applies too | [optional] 
**amount** | **double** | The adjustment amount. | 
**period** | **string** | The filing period the adjustment is applied to. | 
**type** | **string** | The type of the adjustment. | 
**is_calculated** | **bool** | Whether or not the adjustment has been calculated. | [optional] 
**account_type** | **string** | The account type of the adjustment. | 
**reason** | **string** | A descriptive reason for creating this adjustment. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


