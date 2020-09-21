# NoticeCommentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this notice. | [optional] 
**notice_id** | **int** | The ID of the notice this comment is attached too | 
**date** | [**\DateTime**](\DateTime.md) | The date this comment was entered | [optional] 
**comment** | **string** | TaxNoticeComment | [optional] 
**comment_user_id** | **int** | TaxNoticeCommentUserId | [optional] 
**comment_user_name** | **string** | TaxNoticeCommentUserName | [optional] 
**comment_type_id** | **int** | taxNoticeCommentTypeId | [optional] 
**comment_type** | **string** | taxNoticeCommentType | 
**comment_link** | **string** | TaxNoticeCommentLink | [optional] 
**tax_notice_file_name** | **string** | TaxNoticeFileName | [optional] 
**resource_file_id** | **int** | resourceFileId | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**attachment_upload_request** | [**\Together\Taxes\Model\ResourceFileUploadRequestModel**](ResourceFileUploadRequestModel.md) | An attachment to the detail | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


