# ItemModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this item. | 
**company_id** | **int** | The unique ID number of the company that owns this item. | [optional] 
**item_code** | **string** | A unique code representing this item. | 
**tax_code_id** | **int** | DEPRECATED - Date: 11/13/2018, Version: 18.12, Message: For identifying an &#x60;Item&#x60; with &#x60;Avalara TaxCode&#x60;, please call the [CreateItemClassification API] with your ItemCode and the Avalara TaxCode.  The unique ID number of the tax code that is applied when selling this item.  When creating or updating an item, you can either specify the Tax Code ID number or the Tax Code string; you do not need to specify both values. | [optional] 
**tax_code** | **string** | DEPRECATED - Date: 11/13/2018, Version: 18.12, Message: For identifying an &#x60;Item&#x60; with &#x60;Avalara TaxCode&#x60;, please call the [CreateItemClassification API] with your ItemCode and the Avalara TaxCode.  The unique code string of the Tax Code that is applied when selling this item.  When creating or updating an item, you can either specify the Tax Code ID number or the Tax Code string; you do not need to specify both values. | [optional] 
**description** | **string** | A friendly description of this item in your product catalog. | 
**item_group** | **string** | A way to group similar items. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 
**classifications** | [**\Together\Taxes\Model\ClassificationModel[]**](ClassificationModel.md) | List of classifications that belong to this item.  A single classification consits of a productCode and a systemCode for a particular item. | [optional] 
**parameters** | [**\Together\Taxes\Model\ItemParameterModel[]**](ItemParameterModel.md) | List of item parameters. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


