# UomModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this unit of measurement. | [optional] 
**code** | **string** | The code that refers to this unit of measurement. | [optional] 
**short_desc** | **string** | A short description of this unit of measurement. | [optional] 
**description** | **string** | A longer description of this unit of measurement. | [optional] 
**measurement_type_id** | **int** | The ID number of the measurement type, such as \&quot;Distance\&quot; or \&quot;Mass\&quot;. | [optional] 
**measurement_type_code** | **string** | The code describing the measurement type. | [optional] 
**si_uom** | **string** | For a particular measurement type, this is the ID number of the unit of measurement object corresponding to the  International System of Units (abbreviated SI) unit of measurement standard.  This pointer allows you to select  the SI unit of measurement for a particular measurement type. | [optional] 
**measurement_type_description** | **string** | A description of the measurement type system. | [optional] 
**is_si_uom** | **bool** | True if this measurement is an International System of Units (abbreviated SI) defined standard. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


