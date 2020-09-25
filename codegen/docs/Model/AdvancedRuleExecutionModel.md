# AdvancedRuleExecutionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_execution_id** | **string** | Rule execution unique identifier | [optional] 
**name** | **string** | Name of rule execution | 
**start_date** | [**\DateTime**](\DateTime.md) | Date rule execution starts | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Date rule execution ends | [optional] 
**enabled** | **bool** | Is rule execution enabled | [optional] 
**continue_on_error** | **bool** | Should we keep running if we hit an exception | [optional] 
**rule_id** | **string** | Unique identifier of rule to execute | 
**rule** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AdvancedRuleModel**](AdvancedRuleModel.md) | Advanced rule to execute | [optional] 
**customer_data** | **string** | Json data used for rule execution | [optional] 
**customer_data_id** | **string** | Unique identifier of customer data used in rule execution | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


