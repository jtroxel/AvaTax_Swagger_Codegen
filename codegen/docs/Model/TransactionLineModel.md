# TransactionLineModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this transaction line item. | [optional] 
**transaction_id** | **int** | The unique ID number of the transaction to which this line item belongs. | [optional] 
**line_number** | **string** | The line number or code indicating the line on this invoice or receipt or document. | [optional] 
**boundary_override_id** | **int** | The unique ID number of the boundary override applied to this line item. | [optional] 
**customer_usage_type** | **string** | DEPRECATED - Date: 10/16/2017, Version: 17.11, Message: Please use entityUseCode instead.  The customer usage type for this line item.  Usage type often affects taxability rules. | [optional] 
**entity_use_code** | **string** | The entity use code for this line item.  Usage type often affects taxability rules. | [optional] 
**description** | **string** | A description of the item or service represented by this line. | [optional] 
**destination_address_id** | **int** | The unique ID number of the destination address where this line was delivered or sold.  In the case of a point-of-sale transaction, the destination address and origin address will be the same.  In the case of a shipped transaction, they will be different. | [optional] 
**origin_address_id** | **int** | The unique ID number of the origin address where this line was delivered or sold.  In the case of a point-of-sale transaction, the origin address and destination address will be the same.  In the case of a shipped transaction, they will be different. | [optional] 
**discount_amount** | **double** | The amount of discount that was applied to this line item.  This represents the difference between list price and sale price of the item.  In general, a discount represents money that did not change hands; tax is calculated on only the amount of money that changed hands. | [optional] 
**discount_type_id** | **int** | The type of discount, if any, that was applied to this line item. | [optional] 
**exempt_amount** | **double** | The amount of this line item that was exempt. | [optional] 
**exempt_cert_id** | **int** | The unique ID number of the exemption certificate that applied to this line item. It is the calc_id associated with a certificate in CertCapture. | [optional] 
**certificate_id** | **string** | The CertCapture Certificate ID | [optional] 
**exempt_no** | **string** | The customer Tax Id Number (tax_number) associated with a certificate - Sales tax calculation requests first determine if there is an applicable  ECMS entry available, and will utilize it for exemption processing. If no applicable ECMS entry is available, the AvaTax service  will determine if an Exemption Number field is populated or an Entity/Use Code is included in the sales tax calculation request,  and will perform exemption processing using either of those two options. | [optional] 
**is_item_taxable** | **bool** | True if this item is taxable. | [optional] 
**is_sstp** | **bool** | True if this item is a Streamlined Sales Tax line item. | [optional] 
**item_code** | **string** | The code string of the item represented by this line item. | [optional] 
**line_amount** | **double** | The total amount of the transaction, including both taxable and exempt.  This is the total price for all items.  To determine the individual item price, divide this by quantity. | [optional] 
**quantity** | **double** | The quantity of products sold on this line item. | [optional] 
**ref1** | **string** | A user-defined reference identifier for this transaction line item. | [optional] 
**ref2** | **string** | A user-defined reference identifier for this transaction line item. | [optional] 
**reporting_date** | [**\DateTime**](\DateTime.md) | The date when this transaction should be reported.  By default, all transactions are reported on the date when the actual transaction took place.  In some cases, line items may be reported later due to delayed shipments or other business reasons. | [optional] 
**rev_account** | **string** | The revenue account number for this line item. | [optional] 
**sourcing** | **string** | Indicates whether this line item was taxed according to the origin or destination. | [optional] 
**tax** | **double** | The tax for this line in this transaction.                If you used a &#x60;taxOverride&#x60; of type &#x60;taxAmount&#x60; for this line, this value  will represent the amount of your override.  AvaTax will still attempt to calculate the correct tax  for this line and will store that calculated value in the &#x60;taxCalculated&#x60; field.                You can compare the &#x60;tax&#x60; and &#x60;taxCalculated&#x60; fields to check for any discrepancies  between an external tax calculation provider and the calculation performed by AvaTax. | [optional] 
**taxable_amount** | **double** | The taxable amount of this line item. | [optional] 
**tax_calculated** | **double** | The amount of tax that AvaTax calculated for the transaction.                If you used a &#x60;taxOverride&#x60; of type &#x60;taxAmount&#x60;, there may be a difference between  the &#x60;tax&#x60; field which applies your override, and the &#x60;taxCalculated&#x60; field which  represents the amount of tax that AvaTax calculated without the override.                You can compare the &#x60;tax&#x60; and &#x60;taxCalculated&#x60; fields to check for any discrepancies  between an external tax calculation provider and the calculation performed by AvaTax. | [optional] 
**tax_code** | **string** | The code string for the tax code that was used to calculate this line item. | [optional] 
**tax_code_id** | **int** | The unique ID number for the tax code that was used to calculate this line item. | [optional] 
**tax_date** | [**\DateTime**](\DateTime.md) | The date that was used for calculating tax amounts for this line item.  By default, this date should be the same as the document date.  In some cases, for example when a consumer returns a product purchased previously, line items may be calculated using a tax date in the past  so that the consumer can receive a refund for the correct tax amount that was charged when the item was originally purchased. | [optional] 
**tax_engine** | **string** | The tax engine identifier that was used to calculate this line item. | [optional] 
**tax_override_type** | **string** | If a tax override was specified, this indicates the type of tax override. | [optional] 
**business_identification_no** | **string** | VAT business identification number used for this transaction. | [optional] 
**tax_override_amount** | **double** | If a tax override was specified, this indicates the amount of tax that was requested. | [optional] 
**tax_override_reason** | **string** | If a tax override was specified, represents the reason for the tax override. | [optional] 
**tax_included** | **bool** | Indicates whether the &#x60;amount&#x60; for this line already includes tax.                If this value is &#x60;true&#x60;, the final price of this line including tax will equal the value in &#x60;amount&#x60;.                If this value is &#x60;null&#x60; or &#x60;false&#x60;, the final price will equal &#x60;amount&#x60; plus whatever taxes apply to this line. | [optional] 
**details** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineDetailModel[]**](TransactionLineDetailModel.md) | Optional: A list of tax details for this line item.                Tax details represent taxes being charged by various tax authorities. Taxes that appear in the &#x60;details&#x60; collection are intended to be  displayed to the customer and charged as a &#39;tax&#39; on the invoice.                To fetch this list, add the query string &#x60;?$include&#x3D;Details&#x60; to your URL. | [optional] 
**non_passthrough_details** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineDetailModel[]**](TransactionLineDetailModel.md) | Optional: A list of non-passthrough tax details for this line item.                Tax details represent taxes being charged by various tax authorities. Taxes that appear in the &#x60;nonPassthroughDetails&#x60; collection are  taxes that must be paid directly by the company and not shown to the customer. | [optional] 
**line_location_types** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineLocationTypeModel[]**](TransactionLineLocationTypeModel.md) | Optional: A list of location types for this line item.  To fetch this list, add the query string \&quot;?$include&#x3D;LineLocationTypes\&quot; to your URL. | [optional] 
**parameters** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineParameterModel[]**](TransactionLineParameterModel.md) | Contains a list of extra parameters that were set when the transaction was created. | [optional] 
**hs_code** | **string** | The cross-border harmonized system code (HSCode) used to calculate tariffs and duties for this line item.  For a full list of HS codes, see &#x60;ListCrossBorderCodes()&#x60;. | [optional] 
**cost_insurance_freight** | **double** | Indicates the cost of insurance and freight for this line. | [optional] 
**vat_code** | **string** | Indicates the VAT code for this line item. | [optional] 
**vat_number_type_id** | **int** | Indicates the VAT number type for this line item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


