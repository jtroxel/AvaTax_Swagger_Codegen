# ErrorDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Name of the error or message. | [optional] 
**number** | **int** | Unique ID number referring to this error or message. | [optional] 
**message** | **string** | Concise summary of the message, suitable for display in the caption of an alert box. | [optional] 
**description** | **string** | A more detailed description of the problem referenced by this error message, suitable for display in the contents area of an alert box. | [optional] 
**fault_code** | **string** | Indicates the SOAP Fault code, if this was related to an error that corresponded to AvaTax SOAP v1 behavior. | [optional] 
**fault_sub_code** | **string** | If this is an error from a downstream system (such as Calc) faultSubCode can be used to represent the fault code from that system. | [optional] 
**help_link** | **string** | URL to help for this message | [optional] 
**refers_to** | **string** | Item the message refers to, if applicable.  This is used to indicate a missing or incorrect value. | [optional] 
**severity** | **string** | Severity of the message | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


