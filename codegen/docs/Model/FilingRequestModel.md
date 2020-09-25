# FilingRequestModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this filing request. | [optional] 
**company_id** | **int** | The unique ID number of the company to which this filing request belongs. | 
**filing_request_status_id** | **string** | The current status of this request | [optional] 
**data** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingRequestDataModel**](FilingRequestDataModel.md) | The data model object of the request | 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


