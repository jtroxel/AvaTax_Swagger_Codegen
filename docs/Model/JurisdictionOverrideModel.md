# JurisdictionOverrideModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this override. | [optional] 
**account_id** | **int** | The unique ID number assigned to this account. | [optional] 
**description** | **string** | A description of why this jurisdiction override was created. | 
**line1** | **string** | The street address of the physical location affected by this override. | [optional] 
**city** | **string** | The city address of the physical location affected by this override. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country to be affected by this override.                Note that only United States addresses are affected by the jurisdiction override system.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | 
**country** | **string** | The two character ISO-3166 country code of the country affected by this override.                Note that only United States addresses are affected by the jurisdiction override system. | [optional] 
**postal_code** | **string** | The postal code of the physical location affected by this override. | 
**effective_date** | [**\DateTime**](\DateTime.md) | The date when this override first takes effect.  Set this value to null to affect all dates up to the end date. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date when this override will cease to take effect.  Set this value to null to never expire. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**jurisdictions** | [**\Together\Taxes\Model\JurisdictionModel[]**](JurisdictionModel.md) | A list of the tax jurisdictions that will be assigned to this overridden address. | 
**tax_region_id** | **int** | The TaxRegionId of the new location affected by this jurisdiction override. | 
**boundary_level** | **string** | The boundary level of this override | [optional] 
**is_default** | **bool** | True if this is a default boundary | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


