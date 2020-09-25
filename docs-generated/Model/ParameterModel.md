# ParameterModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this property. | [optional] 
**category** | **string** | DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  The category grouping of this parameter.  When your user interface displays a large number of parameters, they should  be grouped by their category value. | [optional] 
**name** | **string** | The name of the property.  To use this property, add a field on the &#x60;parameters&#x60; object of a [CreateTransaction](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/) call. | [optional] 
**data_type** | **string** | The data type of the property. | [optional] 
**help_text** | **string** | Help text to be shown to the user when they are filling out this parameter.  Help text may include HTML links to additional  content with more information about a parameter. | [optional] 
**service_types** | **string[]** | A list of service types to which this parameter applies. | [optional] 
**prompt** | **string** | DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  The prompt you should use when displaying this parameter to a user.  For example, if your user interface displays a  parameter in a text box, this is the label you should use to identify that text box. | [optional] 
**regular_expression** | **string** | DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  If your user interface permits client-side validation of parameters, this string is a regular expression you can use  to validate the user&#39;s data entry prior to submitting a tax request. | [optional] 
**label** | **string** | Label that helps the user to identify a parameter | [optional] 
**help_url** | **string** | A help url that provides more information about the parameter | [optional] 
**attribute_type** | **string** | The type of parameter as determined by its application, e.g. Product, Transaction, Calculated | [optional] 
**values** | **string[]** | If the parameter is of enumeration data type, then this list will be populated with all of the possible enumeration values. | [optional] 
**measurement_type** | **string** | The unit of measurement type of the parameter | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


