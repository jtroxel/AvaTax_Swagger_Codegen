# TransactionSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | Two character ISO-3166 country code. | [optional] 
**region** | **string** | Two or three character ISO region, state or province code, if applicable. | [optional] 
**juris_type** | **string** | The type of jurisdiction that collects this tax. | [optional] 
**juris_code** | **string** | Jurisdiction Code for the taxing jurisdiction | [optional] 
**juris_name** | **string** | The name of the jurisdiction that collects this tax. | [optional] 
**tax_authority_type** | **int** | The unique ID of the Tax Authority Type that collects this tax. | [optional] 
**state_assigned_no** | **string** | The state assigned number of the jurisdiction that collects this tax. | [optional] 
**tax_type** | **string** | The tax type of this tax. | [optional] 
**tax_sub_type** | **string** | The tax subtype of this tax. | [optional] 
**tax_name** | **string** | The name of the tax. | [optional] 
**tax_group** | **string** | Group code when special grouping is enabled. | [optional] 
**rate_type** | **string** | DEPRECATED - Date: 3/1/2018, Version: 18.3, Message: Please use rateTypeCode instead.  Indicates the tax rate type. | [optional] 
**rate_type_code** | **string** | Indicates the code of the rate type.  Use [ListRateTypesByCountry](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Definitions/ListRateTypesByCountry/) API for a full list of rate type codes. | [optional] 
**taxable** | **double** | Tax Base - The adjusted taxable amount. | [optional] 
**rate** | **double** | Tax Rate - The rate of taxation, as a fraction of the amount. | [optional] 
**tax** | **double** | Tax amount - The calculated tax (Base * Rate). | [optional] 
**tax_calculated** | **double** | The amount of tax that AvaTax calculated for the transaction.                If you used a &#x60;taxOverride&#x60; of type &#x60;taxAmount&#x60;, there may be a difference between  the &#x60;tax&#x60; field which applies your override, and the &#x60;TaxCalculated&#x60; field which  represents the amount of tax that AvaTax calculated for this transaction without override.                You can use this for comparison. | [optional] 
**non_taxable** | **double** | The amount of the transaction that was non-taxable. | [optional] 
**exemption** | **double** | The amount of the transaction that was exempt. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


