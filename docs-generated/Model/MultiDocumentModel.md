# MultiDocumentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this MultiDocument object. | [optional] 
**account_id** | **int** | The unique ID number of the AvaTax customer account that created this MultiDocument object. | [optional] 
**code** | **string** | The transaction code of the MultiDocument transaction.                All individual transactions within this MultiDocument object will have this code as a prefix. | [optional] 
**type** | **string** | Indicates the type of MultiDocument transaction.  Common values are:                * SalesOrder - An estimate that is not permanently recorded  * SalesInvoice - An invoice that can be reported on a tax return                For more information about document types, see [DocumentType](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentType/) | [optional] 
**created_user_id** | **int** | The user ID of the user who created this record. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was created. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**documents** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionModel[]**](TransactionModel.md) | A separate document will exist for each unique combination of buyer and seller in this MultiDocument transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


