# AdvancedRuleFullDetailsModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**script** | **string** | The code script for the rule | 
**customer_data_validator_script** | **string** | Script run for validating customer data | [optional] 
**is_approved** | **bool** | Has the rule been approved | [optional] 
**created_by** | **string** | Creator of the rule | [optional] 
**created_on** | **string** | When the rule was created | [optional] 
**modified_by** | **string** | Last updater of the rule | [optional] 
**modified_on** | **string** | When the rule was last updated | [optional] 
**approved_by** | **string** | Approver of the rule | [optional] 
**is_system_rule** | **bool** | Is this a system rule as opposed to customer-facing | [optional] 
**is_visible_in_cup** | **bool** | Is the rule displayed in the CUP UI | [optional] 
**is_test** | **bool** | Is this a rule created for testing | [optional] 
**customer_data_schema** | **string** | The JSON schema for customer data if it is required for the rule | [optional] 
**version** | **int** | The version of the rule | [optional] 
**accounts_visible_for** | **int[]** | Account Ids the rule is visible for in CUP, when IsVisibleInCUP &#x3D; false | [optional] 
**rule_id** | **string** | Unique identifier for a rule | [optional] 
**name** | **string** | Rule name | 
**description** | **string** | Description of the rule | [optional] 
**ar_entitlement_required** | **bool** | Advance Rules limited availability | [optional] 
**execution_position** | **string** | Execution position. Both, Before or After | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


