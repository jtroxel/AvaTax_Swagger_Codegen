# SubscriptionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this subscription. | [optional] 
**account_id** | **int** | The unique ID number of the account this subscription belongs to. | [optional] 
**subscription_type_id** | **int** | The unique ID number of the service that the account is subscribed to. If this is provided, subscription description is ignored. | [optional] 
**subscription_description** | **string** | A friendly description of the service that the account is subscribed to. You can either provide the subscription type Id or this but not both. If  subscription type Id is provided, then this information is ignored and this field will be updated with the information from subscription type id. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date when the subscription began. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | If the subscription has ended or will end, this date indicates when the subscription ends. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


