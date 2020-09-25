# BatchModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of this batch. | 
**batch_agent** | **string** | The agent used to create this batch | [optional] 
**options** | **string** | Any optional flags provided for this batch | [optional] 
**id** | **int** | The unique ID number of this batch. | [optional] 
**name** | **string** | The user-friendly readable name for this batch. | 
**account_id** | **int** | The Account ID number of the account that owns this batch. | [optional] 
**company_id** | **int** | The Company ID number of the company that owns this batch. | [optional] 
**status** | **string** | This batch&#39;s current processing status | [optional] 
**started_date** | [**\DateTime**](\DateTime.md) | The date/time when this batch started processing | [optional] 
**record_count** | **int** | The number of records in this batch; determined by the server | [optional] 
**current_record** | **int** | The current record being processed | [optional] 
**completed_date** | [**\DateTime**](\DateTime.md) | The date/time when this batch was completely processed | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**files** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\BatchFileModel[]**](BatchFileModel.md) | The list of files contained in this batch. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


