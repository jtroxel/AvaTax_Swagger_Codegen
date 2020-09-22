# NoticeFinanceModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The Unique Id of the Finance Model | [optional] 
**notice_id** | **int** | The unique ID of the the tax notice associated with the the finance detail | [optional] 
**notice_date** | [**\DateTime**](\DateTime.md) | The date of the notice | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | The due date of the notice | [optional] 
**notice_number** | **string** | The sequential number of the notice | [optional] 
**tax_due** | **double** | The amount of tax due on the notice | [optional] 
**penalty** | **double** | The amound of penalty listed on the notice | [optional] 
**interest** | **double** | The amount of interest listed on the notice | [optional] 
**credits** | **double** | The amount of credits listed on the notice | [optional] 
**tax_abated** | **double** | The amount of tax abated on the notice | [optional] 
**customer_penalty** | **double** | The amount of customer penalty on the notice | [optional] 
**customer_interest** | **double** | The amount of customer interest on the notice | [optional] 
**csp_fee_refund** | **double** | The amount of CSP Fee Refund on the notice | [optional] 
**file_name** | **string** | The name of the file attached to the finance detail | [optional] 
**resource_file_id** | **int** | The ResourceFileId of the finance detail attachment | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**attachment_upload_request** | [**\Together\Taxes\Model\ResourceFileUploadRequestModel**](ResourceFileUploadRequestModel.md) | An attachment to the finance detail | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


