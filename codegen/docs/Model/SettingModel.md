# SettingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this setting. | 
**company_id** | **int** | The unique ID number of the company this setting refers to. | [optional] 
**set** | **string** | A user-defined \&quot;set\&quot; containing this setting.                Avalara defines some sets that cannot be changed.  To create your own set, choose a set  name that begins with &#x60;X-&#x60; to indicate that this is an extension value.                We recommend that you choose a set name that clearly identifies your application, and then  store data within name/value pairs within that set.  For example, if you were creating an  application called MyApp, you might choose to create a set named &#x60;X-MyCompany-MyApp&#x60;. | 
**name** | **string** | A user-defined \&quot;name\&quot; for this name-value pair. | 
**value** | **string** | The value of this name-value pair. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


