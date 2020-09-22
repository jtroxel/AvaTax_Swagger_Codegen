# ReportModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the report task | [optional] 
**account_id** | **int** | The ID of the account the reported transactions are from | [optional] 
**company_id** | **int** | The ID of the company the reported transactions are from | [optional] 
**report_type** | **string** | The type of the report: ExportDocumentLine, etc. | [optional] 
**parameters** | [**\Together\Taxes\Model\ReportParametersModel**](ReportParametersModel.md) | The parametes used to build the report | [optional] 
**status** | **string** | The current status of the report building task | [optional] 
**size** | **int** | The size of the report file, if available | [optional] 
**format** | **string** | The format of the report file | [optional] 
**file** | **string** | The name of the report file, if available | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The time when the report task was initiated | [optional] 
**created_user_id** | **int** | The Id of the user who initiated this task | [optional] 
**created_user** | **string** | The userName of the user who initiated the report task | [optional] 
**completed_date** | [**\DateTime**](\DateTime.md) | The time when the report was finished building, if completed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


