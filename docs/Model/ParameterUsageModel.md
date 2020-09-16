# ParameterUsageModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this property. | [optional] 
**parameter_id** | **int** | The id of the parameter. | [optional] 
**product_code** | **string** | Product code for the parameter usage item. | [optional] 
**country** | **string** | The country for the parameter usage item. | [optional] 
**region** | **string** | The state for the parameter usage item. | [optional] 
**system_id** | **int** | System Id for the parameter usage item | [optional] 
**tax_type_id** | **string** | tax type for the parameter usage item. | [optional] 
**attribute_type** | **string** | The type of parameter as determined by its application, e.g. Product, Transaction, Calculated | [optional] 
**name** | **string** | The name of the property.  To use this property, add a field on the &#x60;parameters&#x60; object of a [CreateTransaction](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/) call. | [optional] 
**data_type** | **string** | The data type of the property. | [optional] 
**help_text** | **string** | Help text to be shown to the user when they are filling out this parameter.  Help text may include HTML links to additional  content with more information about a parameter. | [optional] 
**label** | **string** | Label that helps the user to identify a parameter | [optional] 
**help_url** | **string** | A help url that provides more information about the parameter | [optional] 
**values** | **string[]** | If the parameter is of enumeration data type, then this list will be populated with all of the possible enumeration values. | [optional] 
**measurement_type** | **string** | The unit of measurement type of the parameter | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


