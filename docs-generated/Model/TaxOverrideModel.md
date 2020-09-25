# TaxOverrideModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Identifies the type of tax override | [optional] 
**tax_amount** | **double** | Indicates a total override of the calculated tax on the document.  AvaTax will distribute  the override across all the lines.                Tax will be distributed on a best effort basis.  It may not always be possible to override all taxes.  Please consult  your account manager for information about overrides. | [optional] 
**tax_date** | [**\DateTime**](\DateTime.md) | The override tax date to use                This is used when the tax has been previously calculated  as in the case of a layaway, return or other reason indicated by the Reason element.  If the date is not overridden, then it should be set to the same as the DocDate. | [optional] 
**reason** | **string** | This provides the reason for a tax override for audit purposes.  It is required for types 2-4.                Typical reasons include:  \&quot;Return\&quot;  \&quot;Layaway\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


