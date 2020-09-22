# EcmsModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exempt_cert_id** | **int** | The calc_id associated with a certificate in CertCapture. | 
**company_id** | **int** | Company ID | 
**customer_code** | **string** | Customer code | 
**customer_name** | **string** | Customer name | [optional] 
**address1** | **string** | Address line 1 | [optional] 
**address2** | **string** | Address line 2 | [optional] 
**address3** | **string** | Address line 3 | [optional] 
**city** | **string** | City | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | 
**postal_code** | **string** | Postal code / zip code | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**exempt_cert_type_id** | **string** | The type of exemption certificate. Permitted values are: Blanket and Single. | 
**document_ref_no** | **string** | Document Reference Number, in the case of single-use exemption certificates, the DocumentCode or PurchaseOrderNo to which the certificate should apply. | [optional] 
**business_type_id** | **int** | Business type the customer belongs to. | 
**business_type_other_description** | **string** | Other description for this business type | [optional] 
**exempt_reason_id** | **string** | Exempt reason associated with the certificate, coded by CustomerUsageType.  Example: A - Federal Government. | [optional] 
**exempt_reason_other_description** | **string** | Other description for exempt reason i.e. Populated on if exemptReasonId is &#39;L&#39; - Other. | [optional] 
**effective_date** | [**\DateTime**](\DateTime.md) | Effective date for this exempt certificate | [optional] 
**regions_applicable** | **string** | A list of applicable regions for this exempt certificate.                To list more than one applicable region, separate the list of region codes with commas. | 
**exempt_cert_status_id** | **string** | Status for this exempt certificate | 
**created_date** | [**\DateTime**](\DateTime.md) | Date when this exempt certificate was created | [optional] 
**last_transaction_date** | [**\DateTime**](\DateTime.md) | Date when last transaction with this exempt certificate happened | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | When this exempt certificate will expire | [optional] 
**created_user_id** | **int** | User that creates the certificate | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | Date when this exempt certificate was modified | [optional] 
**modified_user_id** | **int** | Who modified this exempt certificate | [optional] 
**country_issued** | **string** | Name or ISO 3166 code identifying the country that issued this ECMS certificate.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**ava_cert_id** | **string** | If the certificate record was synced from an AvaTax Certs account(as opposed to being entered in ECMS directly),  the unique AvaTax Certs identifier for the certificate record. Usually same as the Id of a Certificate. | [optional] 
**exempt_cert_review_status_id** | **string** | Review status for this exempt certificate | [optional] 
**details** | [**\Together\Taxes\Model\EcmsDetailModel[]**](EcmsDetailModel.md) | Exempt Cert details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


