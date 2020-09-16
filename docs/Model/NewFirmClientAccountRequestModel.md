# NewFirmClientAccountRequestModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_name** | **string** | The name of the account to create | 
**first_name** | **string** | First name of the primary contact person for this account | 
**last_name** | **string** | Last name of the primary contact person for this account | 
**title** | **string** | Title of the primary contact person for this account | [optional] 
**phone_number** | **string** | Phone number of the primary contact person for this account | [optional] 
**email** | **string** | Email of the primary contact person for this account | 
**company_code** | **string** | Company code to be assigned to the company created for this account.                If no company code is provided, this will be defaulted to \&quot;DEFAULT\&quot; company code. | [optional] 
**company_address** | [**\Swagger\Client\Model\CompanyAddress**](CompanyAddress.md) | Address information of the account being created. | 
**tax_payer_id_number** | **string** | United States Taxpayer ID number, usually your Employer Identification Number if you are a business or your  Social Security Number if you are an individual.  This value is required if the address provided is inside the US. Otherwise it is optional. | [optional] 
**properties** | **string[]** | Properties of the primary contact person for this account | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


