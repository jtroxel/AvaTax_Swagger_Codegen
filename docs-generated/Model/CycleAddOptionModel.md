# CycleAddOptionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | True if this form can be added and filed for the current cycle. \&quot;Current cycle\&quot; is considered one month before the month of today&#39;s date. | [optional] 
**transactional_period_start** | [**\DateTime**](\DateTime.md) | The period start date for the customer&#39;s first transaction in the jurisdiction being added | [optional] 
**transactional_period_end** | [**\DateTime**](\DateTime.md) | The period end date for the customer&#39;s last transaction in the jurisdiction being added | [optional] 
**filing_due_date** | [**\DateTime**](\DateTime.md) | The jurisdiction-assigned due date for the form | [optional] 
**cycle_name** | **string** | A descriptive name of the cycle and due date of form. | [optional] 
**frequency_name** | **string** | The filing frequency of the form | [optional] 
**filing_frequency_code** | **string** | A code assigned to the filing frequency | [optional] 
**filing_frequency_id** | **string** | The filing frequency of the request | [optional] 
**cycle_unavailable_reason** | **string** | An explanation for why this form cannot be added for the current cycle | [optional] 
**available_location_codes** | **string[]** | A list of outlet codes that can be assigned to this form for the current cycle | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


