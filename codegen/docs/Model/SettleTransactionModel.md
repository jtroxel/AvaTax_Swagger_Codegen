# SettleTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**verify** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\VerifyTransactionModel**](VerifyTransactionModel.md) | To verify this transaction, you may provide information in this field.                If you leave this field null, the transaction will not be verified. | [optional] 
**change_code** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\ChangeTransactionCodeModel**](ChangeTransactionCodeModel.md) | To change the code for this transaction, you may provide information in this field.                If you leave this field null, the transaction&#39;s code will not be changed. | [optional] 
**commit** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CommitTransactionModel**](CommitTransactionModel.md) | To commit this transaction so that it can be reported on a tax filing, you may provide information in this field.                If you leave this field null, the transaction&#39;s commit status will not be changed.                If you use Avalara&#39;s Managed Returns Service, committing a transaction will allow that transaction to be filed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


