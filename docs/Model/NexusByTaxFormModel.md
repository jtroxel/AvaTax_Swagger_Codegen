# NexusByTaxFormModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**form_code** | **string** | The code of the tax form that was requested | [optional] 
**company_id** | **int** | The company ID of the company that was used to load the companyNexus array.  If this value is null, no company data was loaded. | [optional] 
**nexus_definitions** | [**\Swagger\Client\Model\NexusModel[]**](NexusModel.md) | A list of all Avalara-defined nexus that are relevant to this tax form | [optional] 
**company_nexus** | [**\Swagger\Client\Model\NexusModel[]**](NexusModel.md) | A list of all currently-defined company nexus that are related to this tax form | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


