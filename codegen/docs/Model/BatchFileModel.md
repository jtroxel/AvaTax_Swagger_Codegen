# BatchFileModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number assigned to this batch file. | [optional] 
**batch_id** | **int** | The unique ID number of the batch that this file belongs to. | [optional] 
**name** | **string** | Logical Name of file (e.g. \&quot;Input\&quot; or \&quot;Error\&quot;). | [optional] 
**content** | **string** | Content of the batch file. | 
**content_length** | **int** | Size of content, in bytes. | [optional] 
**content_type** | **string** | Content mime type (e.g. text/csv).  This is used for HTTP downloading. | [optional] 
**file_extension** | **string** | File extension (e.g. CSV). | [optional] 
**file_path** | **string** | Path to the file - name/S3 key | [optional] 
**error_count** | **int** | Number of errors that occurred when processing this file. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


