# TransactionReferenceFieldModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_id** | **int** | The id of the transaction | 
**reporting_location_code** | **string** | Sets the sale location code (Outlet ID) for reporting this document to the tax authority.                This value is used by Avalara Managed Returns to group documents together by reporting locations  for tax authorities that require location-based reporting. | [optional] 
**line_detail_ser_codes** | [**\Together\Taxes\Model\LineDetailSERCodeModel[]**](LineDetailSERCodeModel.md) | Reference field of the line details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


