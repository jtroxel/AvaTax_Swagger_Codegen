# CompanyInitializationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company Name | 
**company_code** | **string** | Company Code - used to distinguish between companies within your accounting system | [optional] 
**vat_registration_id** | **string** | Vat Registration Id - leave blank if not known. | [optional] 
**taxpayer_id_number** | **string** | United States Taxpayer ID number, usually your Employer Identification Number if you are a business or your  Social Security Number if you are an individual.  This value is required if the address provided is inside the US and if you subscribed to the Avalara Managed Returns or SST Certified Service Provider service. Otherwise it is optional. | [optional] 
**is_fein** | **bool** | Set this field to true if the taxPayerIdNumber is a FEIN. | [optional] 
**line1** | **string** | Address Line1 | 
**line2** | **string** | Line2 | [optional] 
**line3** | **string** | Line3 | [optional] 
**city** | **string** | City | 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | 
**postal_code** | **string** | Postal Code | 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**first_name** | **string** | First Name | 
**last_name** | **string** | Last Name | 
**title** | **string** | Title | [optional] 
**email** | **string** | Email | 
**phone_number** | **string** | Phone Number | 
**mobile_number** | **string** | Mobile Number | [optional] 
**fax_number** | **string** | Fax Number | [optional] 
**parent_company_id** | **int** | Parent Company ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


