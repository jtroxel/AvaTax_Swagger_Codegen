# LocationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this location. | 
**company_id** | **int** | The unique ID number of the company that operates at this location. | [optional] 
**location_code** | **string** | A code that identifies this location.  Must be unique within your company. | 
**description** | **string** | A friendly name for this location. | [optional] 
**address_type_id** | **string** | Indicates whether this location is a physical place of business or a temporary salesperson location. | 
**address_category_id** | **string** | Indicates the type of place of business represented by this location. | 
**line1** | **string** | The first line of the physical address of this location. | 
**line2** | **string** | The second line of the physical address of this location. | [optional] 
**line3** | **string** | The third line of the physical address of this location. | [optional] 
**city** | **string** | The city of the physical address of this location. | [optional] 
**county** | **string** | The county name of the physical address of this location.  Not required. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country of the physical address of this location.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**postal_code** | **string** | The postal code or zip code of the physical address of this location. | 
**country** | **string** | Name or ISO 3166 code identifying the country of the physical address of this location.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**is_default** | **bool** | Set this flag to true to indicate that this is the default location for this company. | [optional] 
**is_registered** | **bool** | Set this flag to true to indicate that this location has been registered with a tax authority. | [optional] 
**dba_name** | **string** | If this location has a different business name from its legal entity name, specify the \&quot;Doing Business As\&quot; name for this location. | [optional] 
**outlet_name** | **string** | A friendly name for this location. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | The date when this location was opened for business, or null if not known. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | If this place of business has closed, the date when this location closed business. | [optional] 
**last_transaction_date** | [**\DateTime**](\DateTime.md) | The most recent date when a transaction was processed for this location.  Set by AvaTax. | [optional] 
**registered_date** | [**\DateTime**](\DateTime.md) | The date when this location was registered with a tax authority.  Not required. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**settings** | [**\Together\Taxes\Model\LocationSettingModel[]**](LocationSettingModel.md) | Extra information required by certain jurisdictions for filing.  For a list of settings recognized by Avalara, query the endpoint \&quot;/api/v2/definitions/locationquestions\&quot;.  To determine the list of settings required for this location, query the endpoint \&quot;/api/v2/companies/(id)/locations/(id)/validate\&quot;. | [optional] 
**parameters** | [**\Together\Taxes\Model\LocationParameterModel[]**](LocationParameterModel.md) | List of location parameters. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


