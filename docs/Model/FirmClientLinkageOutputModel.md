# FirmClientLinkageOutputModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of firm-client linkage. | [optional] 
**firm_account_id** | **int** | Firm Account to be linked with the firm | [optional] 
**firm_account_name** | **string** | FIrm Account name | [optional] 
**client_account_id** | **int** | Client Account to be linked with the firm | [optional] 
**client_account_name** | **string** | Client Account name | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Created date of the linkage | [optional] 
**created_user_id** | **int** | User who created the linkage | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Modified date of the linkage | [optional] 
**modified_user_id** | **int** | User who modified the linkage | [optional] 
**status** | **string** | The status of the account linkage. The following are the available statuses  * Requested - When a linkage is requested  * Approved - When the linkage is approved  * Rejected - When the linkage is rejected  * Revoked - When the linkage is revoked. | [optional] 
**is_deleted** | **bool** | This is set to 1 if the linkage is deleted. | [optional] 
**firm_contact_name** | **string** | Name of the firm&#39;s point of contact person for the client | [optional] 
**firm_contact_email** | **string** | Email of the firm&#39;s point of contact person for the client | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


