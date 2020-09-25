# ContactModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this contact. | [optional] 
**company_id** | **int** | The unique ID number of the company to which this contact belongs. | [optional] 
**contact_code** | **string** | A unique code for this contact. | 
**first_name** | **string** | The first or given name of this contact. | [optional] 
**middle_name** | **string** | The middle name of this contact. | [optional] 
**last_name** | **string** | The last or family name of this contact. | [optional] 
**title** | **string** | Professional title of this contact. | [optional] 
**line1** | **string** | The first line of the postal mailing address of this contact. | [optional] 
**line2** | **string** | The second line of the postal mailing address of this contact. | [optional] 
**line3** | **string** | The third line of the postal mailing address of this contact. | [optional] 
**city** | **string** | The city of the postal mailing address of this contact. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**postal_code** | **string** | The postal code or zip code of the postal mailing address of this contact. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**email** | **string** | The email address of this contact. | [optional] 
**phone** | **string** | The main phone number for this contact. | [optional] 
**mobile** | **string** | The mobile phone number for this contact. | [optional] 
**fax** | **string** | The facsimile phone number for this contact. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


