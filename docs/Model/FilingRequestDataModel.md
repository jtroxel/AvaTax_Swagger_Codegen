# FilingRequestDataModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_return_id** | **int** | The company return ID if requesting an update. | [optional] 
**return_name** | **string** | DEPRECATED - Date: 9/13/2018, Version: 18.10, Message: Please use &#x60;taxFormCode&#x60; instead.  The legacy return name of the requested calendar. | [optional] 
**tax_form_code** | **string** | The Avalara standard tax form code of the tax form for this filing calendar.  The first two characters of the tax form code  are the ISO 3166 country code of the country that issued this form. | [optional] 
**filing_frequency_id** | **string** | The filing frequency of the request | 
**registration_id** | **string** | State registration ID of the company requesting the filing calendar. | [optional] 
**months** | **int** | The months of the request | 
**fiscal_year_start_month** | **int** | The start period of a fiscal year for this form/company | [optional] 
**tax_type_id** | **string** | The type of tax to report on this return. | [optional] 
**location_code** | **string** | Location code of the request | [optional] 
**eff_date** | [**\DateTime**](\DateTime.md) | Filing cycle effective date of the request | 
**end_date** | [**\DateTime**](\DateTime.md) | Filing cycle end date of the request | [optional] 
**is_clone** | **bool** | Flag if the request is a clone of a current filing calendar | [optional] 
**country** | **string** | The two character ISO 3166 country code of the country that issued the tax form for this filing calendar. | [optional] 
**region** | **string** | The two or three character ISO 3166 code of the region / state / province that issued the tax form for this filing calendar. | [optional] 
**tax_authority_id** | **int** | The tax authority id of the return | [optional] 
**tax_authority_name** | **string** | The tax authority name on the return | [optional] 
**answers** | [**\Swagger\Client\Model\FilingAnswerModel[]**](FilingAnswerModel.md) | Filing question answers | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


