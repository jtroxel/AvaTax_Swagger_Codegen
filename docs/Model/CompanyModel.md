# CompanyModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this company. | 
**account_id** | **int** | The unique ID number of the account this company belongs to. | 
**parent_company_id** | **int** | If this company is fully owned by another company, this is the unique identity of the parent company. | [optional] 
**sst_pid** | **string** | If this company files Streamlined Sales Tax, this is the PID of this company as defined by the Streamlined Sales Tax governing board. | [optional] 
**company_code** | **string** | A unique code that references this company within your account. | [optional] 
**name** | **string** | The name of this company, as shown to customers. | 
**is_default** | **bool** | This flag is true if this company is the default company for this account.  Only one company may be set as the default. | [optional] 
**default_location_id** | **int** | If set, this is the unique ID number of the default location for this company. | [optional] 
**is_active** | **bool** | This flag indicates whether tax activity can occur for this company.  Set this flag to true to permit the company to process transactions. | [optional] 
**taxpayer_id_number** | **string** | For United States companies, this field contains your Taxpayer Identification Number.  This is a nine digit number that is usually called an EIN for an Employer Identification Number if this company is a corporation,  or SSN for a Social Security Number if this company is a person.  This value is required if the address provided is inside the US and if you subscribed to the Avalara Managed Returns or SST Certified Service Provider service. Otherwise it is optional. | [optional] 
**is_fein** | **bool** | Set this field to true if the taxPayerIdNumber is a FEIN. | [optional] 
**has_profile** | **bool** | Set this flag to true to give this company its own unique tax profile.  If this flag is true, this company will have its own Nexus, TaxRule, TaxCode, and Item definitions.  If this flag is false, this company will inherit all profile values from its parent. | [optional] 
**is_reporting_entity** | **bool** | Set this flag to true if this company must file its own tax returns.  For users who have Returns enabled, this flag turns on monthly Worksheet generation for the company. | [optional] 
**sst_effective_date** | [**\DateTime**](\DateTime.md) | If this company participates in Streamlined Sales Tax, this is the date when the company joined the SST program. | [optional] 
**default_country** | **string** | The two character ISO-3166 country code of the default country for this company. | 
**base_currency_code** | **string** | This is the three character ISO-4217 currency code of the default currency used by this company. | [optional] 
**rounding_level_id** | **string** | Indicates whether this company prefers to round amounts at the document level or line level. | [optional] 
**warnings_enabled** | **bool** | Set this value to true to receive warnings in API calls via SOAP. | [optional] 
**is_test** | **bool** | Set this flag to true to indicate that this company is a test company.  If you have Returns enabled, Test companies will not file tax returns and can be used for validation purposes. | [optional] 
**tax_dependency_level_id** | **string** | Used to apply tax detail dependency at a jurisdiction level. | [optional] 
**in_progress** | **bool** | Set this value to true to indicate that you are still working to finish configuring this company.  While this value is true, no tax reporting will occur and the company will not be usable for transactions. | [optional] 
**business_identification_no** | **string** | Business Identification No | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**contacts** | [**\Together\Taxes\Model\ContactModel[]**](ContactModel.md) | Optional: A list of contacts defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;Contacts&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**items** | [**\Together\Taxes\Model\ItemModel[]**](ItemModel.md) | Optional: A list of items defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;Items&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**locations** | [**\Together\Taxes\Model\LocationModel[]**](LocationModel.md) | Optional: A list of locations defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;Locations&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**nexus** | [**\Together\Taxes\Model\NexusModel[]**](NexusModel.md) | Optional: A list of nexus defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;Nexus&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**settings** | [**\Together\Taxes\Model\SettingModel[]**](SettingModel.md) | Optional: A list of settings defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;Settings&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**tax_codes** | [**\Together\Taxes\Model\TaxCodeModel[]**](TaxCodeModel.md) | Optional: A list of tax codes defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;TaxCodes&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**tax_rules** | [**\Together\Taxes\Model\TaxRuleModel[]**](TaxRuleModel.md) | Optional: A list of tax rules defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;TaxRules&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**upcs** | [**\Together\Taxes\Model\UPCModel[]**](UPCModel.md) | Optional: A list of UPCs defined for this company.  To fetch this list, add the query string &#x60;?$include&#x3D;UPCs&#x60; to your URL.                When calling &#x60;CreateCompany&#x60;, you may provide a list of objects in this element and they will be created alongside the company.  The &#x60;UpdateCompany&#x60; API does not permit updating nested objects. | [optional] 
**non_reporting_child_companies** | [**\Together\Taxes\Model\CompanyModel[]**](CompanyModel.md) | Optional: A list of non reporting child companies associated with this company.  To fetch this list, add the query string &#x60;?$include&#x3D;NonReportingChildren&#x60; to your URL. | [optional] 
**exempt_certs** | [**\Together\Taxes\Model\EcmsModel[]**](EcmsModel.md) | DEPRECATED - Date: 9/15/2017, Version: 17.10, Message: Please use the &#x60;ListCertificates&#x60; API. | [optional] 
**moss_id** | **string** | The unique identifier of the mini-one-stop-shop used for Value Added Tax (VAT) processing. | [optional] 
**moss_country** | **string** | The country code of the mini-one-stop-shop used for Value Added Tax (VAT) processing. | [optional] 
**parameters** | [**\Together\Taxes\Model\CompanyParameterDetailModel[]**](CompanyParameterDetailModel.md) | The parameters of a company | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


