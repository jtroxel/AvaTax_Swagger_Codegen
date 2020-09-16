# PreferredProgramModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number representing this preferred program. | [optional] 
**code** | **string** | A code that identifies this preferred program.  To select this program, specify this code  value in the &#x60;AvaTax.LC.PreferredProgram&#x60; parameter. | [optional] 
**origin_country** | **string** | The ISO 3166 country code for the origin permitted by this program | [optional] 
**destination_country** | **string** | The ISO 3166 country code for the destination permitted by this program | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The earliest date for which this preferred program can be used in AvaTax.  If &#x60;null&#x60;, this preferred program  is valid for all dates earlier than &#x60;endDate&#x60;. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The latest date for which this preferred program can be used in AvaTax.  If &#x60;null&#x60;, this preferred program  is valid for all dates later than &#x60;effectiveDate&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


