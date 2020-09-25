# PointOfSaleDataRequestModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_code** | **string** | A unique code that references a company within your account. | 
**document_date** | [**\DateTime**](\DateTime.md) | The date associated with the response content. Default is current date. This field can be used to backdate or postdate the response content. | [optional] 
**response_type** | **string** | The format of your response. Formats include JSON, CSV, and XML. | [optional] 
**tax_codes** | **string[]** | A list of tax codes to include in this point-of-sale file. If no tax codes are specified, response will include all distinct tax codes associated with the Items within your company. | [optional] 
**item_codes** | **string[]** | A list of item codes to include in this point-of-sale file. If no item codes are specified, responese will include all distinct item codes associated with the Items within your company. | [optional] 
**location_codes** | **string[]** | A list of location codes to include in this point-of-sale file. If no location codes are specified, response will include all locations within your company. | [optional] 
**include_juris_codes** | **bool** | Set this value to true to include Juris Code in the response. | [optional] 
**partner_id** | **string** | A unique code assoicated with the Partner you may be working with. If you are not working with a Partner or your Partner has not provided you an ID, leave null. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


