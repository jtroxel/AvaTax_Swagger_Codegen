# ExportDocumentLineModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **string** | The file format. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date filter for report execution. If no date provided, same date of last month will be used as the startDate. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date filter for report execution. If no date provided, today&#39;s date will be used as the endDate. | [optional] 
**country** | **string** | The transactions in the country you wish to run a report:  use \&quot;ALL\&quot; for all countries  use \&quot;ALL Non-US\&quot; for all international countries  or use a single 2-char ISO country code | [optional] 
**state** | **string** | The state associated with the transactions you wish to run a report on: use \&quot;ALL\&quot; for all states. | [optional] 
**date_filter** | **string** | The type of date to filter your transactions | [optional] 
**doc_type** | **string** | The transaction type you want to run a report on | [optional] 
**date_format** | **string** | Format of dates in your rendered report. Example: \&quot;MM/dd/yyyy\&quot; | [optional] 
**culture** | **string** | In which culture your report is produced with. Example: \&quot;en-US\&quot; | [optional] 
**currency_code** | **string** | The currency your report is displayed in. Example: \&quot;USD\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


