# AccountModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number assigned to this account. | 
**crmid** | **string** | For system registrar use only. | [optional] 
**name** | **string** | The name of this account. | 
**effective_date** | [**\DateTime**](\DateTime.md) | The earliest date on which this account may be used. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | If this account has been closed, this is the last date the account was open. | [optional] 
**account_status_id** | **string** | The current status of this account. | [optional] 
**account_type_id** | **string** | The type of this account. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**subscriptions** | [**\Swagger\Client\Model\SubscriptionModel[]**](SubscriptionModel.md) | Optional: A list of subscriptions granted to this account.  To fetch this list, add the query string \&quot;?$include&#x3D;Subscriptions\&quot; to your URL. | [optional] 
**users** | [**\Swagger\Client\Model\UserModel[]**](UserModel.md) | Optional: A list of all the users belonging to this account.  To fetch this list, add the query string \&quot;?$include&#x3D;Users\&quot; to your URL. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


