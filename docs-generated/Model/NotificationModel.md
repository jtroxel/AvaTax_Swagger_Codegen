# NotificationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique id of the notification. | [optional] 
**account_id** | **int** | The unique ID number of the account that received this notification. | [optional] 
**company_id** | **int** | If this notification was tied to a specific company, this will be the  unique ID number of the company that received the notification.  Notifications that  are tied to accounts will have a &#x60;NULL&#x60; value for &#x60;companyId&#x60;. | [optional] 
**reference_object** | **string** | The type name of object referred to by this notification, if any.                Some notifications may include information about a related data object.                For example, if this notification was related to a nexus declaration, the &#x60;referenceObject&#x60; field would  be  &#x60;Nexus&#x60; and the &#x60;referenceId&#x60; field would be the unique ID number of that nexus. | [optional] 
**reference_id** | **int** | The unique reference Id number of the object referred to by this notification, if any.                Some notifications may include information about a related data object.                For example, if this notification was related to a nexus declaration, the &#x60;referenceObject&#x60; field would  be  &#x60;Nexus&#x60; and the &#x60;referenceId&#x60; field would be the unique ID number of that nexus. | [optional] 
**severity_level_id** | **string** | The severity level of the notification. | 
**category** | **string** | The category of this notification.                Notification categories are a useful way to group related notifications together. Category names may change  over time.                For Example: \&quot;Backdated Transactions\&quot; or \&quot;Nexus Jurisdiction Alerts\&quot;, or \&quot;Certificate Expiration\&quot;. | [optional] 
**topic** | **string** | The topic of this notification.                Notification topics contain information about the notification.  They are a summary of the issue and can  help you decide what type of action to take.                For Example: \&quot;Backdated Transactions\&quot; or \&quot;Nexus Jurisdiction Alerts\&quot;, or \&quot;Certificate Expiration\&quot;. | [optional] 
**message** | **string** | The message for this notification.  This is a friendly description of the notification and any relevant  information that can help you decide what kind of action, if any, to take in response. | 
**needs_action** | **bool** | If this notification object requires user action to resolve, this value will be set to true. | [optional] 
**action_name** | **string** | If there is a specific action suggested by this notification, this is the name of the action.                An action is a suggested next step such as \&quot;Review Your Tax Profile.\&quot;  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by &#x60;actionLink&#x60; and give the  hyperlink the name &#x60;actionName&#x60;. | [optional] 
**action_link** | **string** | If there is a specific action suggested by this notification, this is the URL of the action.                An action is a suggested next step such as \&quot;Review Your Tax Profile.\&quot;  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by &#x60;actionLink&#x60; and give the  hyperlink the name &#x60;actionName&#x60;. | [optional] 
**action_due_date** | [**\DateTime**](\DateTime.md) | If there is a specific action suggested by this notification, and if this action is requested  by a specific due date, this value will be the due date for the action.                An action is a suggested next step such as \&quot;Review Your Tax Profile.\&quot;  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by &#x60;actionLink&#x60; and give the  hyperlink the name &#x60;actionName&#x60;.                For actions that have deadlines, such as \&quot;Confirm your tax registration before filing\&quot;, this value  will be set to the deadline date for the action.  Otherwise, this value will be null. | [optional] 
**dismissed** | **bool** | When a user has finished reviewing a notification, they may opt to dismiss it by calling the  &#x60;DismissNotification&#x60; API.  This API marks the notification as dismissed, and dismissed notifications  will generally not appear in most user interfaces. | [optional] 
**dismissed_by_user_id** | **int** | If this notification has been dismissed, this indicates the unique ID number of the user that  dismissed the notification. | [optional] 
**dismissed_date** | [**\DateTime**](\DateTime.md) | If this notification has been dismissed, this indicates the timestamp (in UTC time) when the user  dismissed the notification. | [optional] 
**expire_date** | [**\DateTime**](\DateTime.md) | If this notification is time sensitive, this is the latest date when the notification should be  displayed to the user. | 
**created_user_id** | **int** | The unique ID number of the user who created the notification. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The UTC timestamp of the time when this notification was created. | [optional] 
**modified_user_id** | **int** | The unique ID number of the user who most recently modified this notification. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The UTC timestamp of the time when this notification was last modified. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


