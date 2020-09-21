# AddressesModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**single_location** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | If this transaction occurred at a retail point-of-sale location, provide that single address here and leave  all other address types null. | [optional] 
**ship_from** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The origination address where the products were shipped from, or from where the services originated. | [optional] 
**ship_to** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The destination address where the products were shipped to, or where the services were delivered. | [optional] 
**point_of_order_origin** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The place of business where you receive the customer&#39;s order.  This address type is valid in the United States only  and only applies to tangible personal property. | [optional] 
**point_of_order_acceptance** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The place of business where you accept/approve the customer’s order,  thereby becoming contractually obligated to make the sale.  This address type is valid in the United States only  and only applies to tangible personal property. | [optional] 
**goods_place_or_service_rendered** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The address where the goods are located or where services are rendered.This address type is valid only for VAT transactions. | [optional] 
**import** | [**\Together\Taxes\Model\AddressLocationInfo**](AddressLocationInfo.md) | The address of the buyer importing a good from another country.This address type is valid only for VAT transactions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


