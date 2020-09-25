# CycleEditOptionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** | Whether or not changes can be made to the filing calendar. | [optional] 
**message** | **string** | The message to present to the user when calendar is successfully or unsuccessfully changed. | [optional] 
**customer_must_approve** | **bool** | Whether or not the user should be warned of a change, because some changes are risky and may be being done not in accordance with jurisdiction rules.  For example, user would be warned if user changes filing frequency to new frequency with a start date during an accrual month of the existing frequency. | [optional] 
**must_clone_filing_calendar** | **bool** | True if the filing calendar must be cloned to allow this change; false if the existing filing calendar can be changed itself. | [optional] 
**cloned_calendar_eff_date** | [**\DateTime**](\DateTime.md) | The effective date of the filing calendar (only applies if cloning). | [optional] 
**expired_calendar_end_date** | [**\DateTime**](\DateTime.md) | The expired end date of the old filing calendar (only applies if cloning). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


