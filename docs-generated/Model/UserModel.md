# UserModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this user. | 
**account_id** | **int** | The unique ID number of the account to which this user belongs. | 
**company_id** | **int** | If this user is locked to one company (and its children), this is the unique ID number of the company to which this user belongs. | [optional] 
**user_name** | **string** | The username which is used to log on to the AvaTax website, or to authenticate against API calls. | 
**first_name** | **string** | The first or given name of the user. | 
**last_name** | **string** | The last or family name of the user. | 
**email** | **string** | The email address to be used to contact this user.  If the user has forgotten a password, an email can be sent to this email address with information on how to reset this password. | 
**postal_code** | **string** | The postal code in which this user resides. | [optional] 
**security_role_id** | **string** | The security level for this user. | 
**password_status** | **string** | The status of the user&#39;s password. For a new user created, this is always going to be &#x60;UserMustChange&#x60; | [optional] 
**is_active** | **bool** | True if this user is currently active. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**subject_id** | **string** | Matches the subjectId of corresponding user record in AI. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


