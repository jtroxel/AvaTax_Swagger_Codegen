# CustomerModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID number of this customer. | [optional] 
**company_id** | **int** | The unique ID number of the AvaTax company that recorded this customer. | 
**customer_code** | **string** | The unique code identifying this customer.  Must be unique within your company.                This code should be used in the &#x60;customerCode&#x60; field of any call that creates or adjusts a transaction  in order to ensure that all exemptions that apply to this customer are correctly considered.                Note: This field is case sensitive. | 
**alternate_id** | **string** | A customer-configurable alternate ID number for this customer.  You may set this value to match any  other system that would like to reference this customer record. | [optional] 
**name** | **string** | A friendly name identifying this customer. | 
**attn_name** | **string** | Indicates the \&quot;Attn:\&quot; component of the address for this customer, if this customer requires mailings to be shipped  to the attention of a specific person or department name. | [optional] 
**line1** | **string** | First line of the street address of this customer. | 
**line2** | **string** | Second line of the street address of this customer. | [optional] 
**city** | **string** | City component of the street address of this customer. | 
**postal_code** | **string** | Postal Code / Zip Code component of the address of this customer. | 
**phone_number** | **string** | The main phone number for this customer. | [optional] 
**fax_number** | **string** | The fax phone number for this customer, if any. | [optional] 
**email_address** | **string** | The main email address for this customer. | [optional] 
**contact_name** | **string** | The name of the main contact person for this customer. | [optional] 
**last_transaction** | [**\DateTime**](\DateTime.md) | Date when this customer last executed a transaction. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**country** | **string** | Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | 
**region** | **string** | ISO 3166 code identifying the region within the country.  Two and three character ISO 3166 region codes.                For a full list of all supported codes, please see the Definitions API &#x60;ListRegions&#x60;. | 
**is_bill** | **bool** | True if this customer record is specifically used for bill-to purposes. | [optional] 
**is_ship** | **bool** | True if this customer record is specifically used for ship-to purposes. | [optional] 
**taxpayer_id_number** | **string** | For customers in the United States, this field is the federal taxpayer ID number.  For businesses, this is  a Federal Employer Identification Number.  For individuals, this will be a Social Security Number. | [optional] 
**certificates** | [**\Together\Taxes\Model\CertificateModel[]**](CertificateModel.md) | A list of exemption certficates that apply to this customer.  You can fetch this data by specifying  &#x60;$include&#x3D;certificates&#x60; when calling a customer fetch API. | [optional] 
**custom_fields** | [**\Together\Taxes\Model\CustomFieldModel[]**](CustomFieldModel.md) | A list of custom fields defined on this customer.                For more information about custom fields, see the [Avalara Help Center article about custom fields](https://help.avalara.com/0021_Avalara_CertCapture/All_About_CertCapture/Edit_or_Remove_Details_about_Customers). | [optional] 
**exposure_zones** | [**\Together\Taxes\Model\ExposureZoneModel[]**](ExposureZoneModel.md) | A list of exposure zones where you do business with this customer.                To keep track of certificates that are needed for each customer, set this value to a list of all exposure zones where you  sell products to this customer.  You can find a list of exposure zones by calling &#x60;ListExposureZones&#x60;.                This field is often called \&quot;Ship-To States\&quot; or \&quot;Ship-To Zones\&quot;, since it generally refers to locations where you ship products  when this customer makes a purchase.                This field is useful for audit purposes since it helps you ensure you have the necessary certificates for each customer. | [optional] 
**ship_tos** | [**\Together\Taxes\Model\CustomerModel[]**](CustomerModel.md) | A list of ship-to customer records that are connected to this bill-to customer.                Customer records represent businesses or individuals who can provide exemption certificates.  Some customers  may have certificates that are linked to their shipping address or their billing address.  To group these  customer records together, you may link multiple bill-to and ship-to addresses together to represent a single  entity that has multiple different addresses of different kinds. | [optional] 
**attributes** | [**\Together\Taxes\Model\CustomerAttributeModel[]**](CustomerAttributeModel.md) | A list of attributes that apply to this customer.                You can fetch this data by specifying &#x60;$include&#x3D;attributes&#x60; when calling a customer fetch API. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


