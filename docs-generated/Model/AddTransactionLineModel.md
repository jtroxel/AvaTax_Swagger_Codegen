# AddTransactionLineModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_code** | **string** | company code | 
**transaction_code** | **string** | document code for the transaction to add lines | 
**document_type** | **string** | document type | [optional] 
**lines** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\LineItemModel[]**](LineItemModel.md) | List of lines to be added | 
**renumber** | **bool** | Option to renumber lines after add. After renumber, the line number becomes: \&quot;1\&quot;, \&quot;2\&quot;, \&quot;3\&quot;, ... | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


