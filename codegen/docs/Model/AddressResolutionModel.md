# AddressResolutionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressInfo**](AddressInfo.md) | The original address | [optional] 
**validated_addresses** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\ValidatedAddressInfo[]**](ValidatedAddressInfo.md) | The validated address or addresses | [optional] 
**coordinates** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CoordinateInfo**](CoordinateInfo.md) | The geospatial coordinates of this address | [optional] 
**resolution_quality** | **string** | The resolution quality of the geospatial coordinates | [optional] 
**tax_authorities** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\TaxAuthorityInfo[]**](TaxAuthorityInfo.md) | List of informational and warning messages regarding this address | [optional] 
**messages** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AvaTaxMessage[]**](AvaTaxMessage.md) | List of informational and warning messages regarding this address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


