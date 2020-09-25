# RefundTransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_transaction_code** | **string** | The transaction code for the refund.  This code will be saved to the &#x60;ReturnInvoice&#x60; transaction, and does not need to match the code of the original sale. | [optional] 
**refund_date** | [**\DateTime**](\DateTime.md) | The date of the refund.  For customers using Avalara&#39;s Managed Returns Service, this date controls the month in which the refund  transaction will be reported on a tax filing. | 
**refund_type** | **string** | Type of this refund.                To submit a full refund, specify &#x60;Full&#x60;.                To refund only specific lines from the transaction, specify &#x60;Partial&#x60; and indicate the lines you wish to apply in the &#x60;refundLines&#x60; field.                To refund the tax that was paid in the previous transaction, specify &#x60;TaxOnly&#x60;.                To issue a percentage-based discount, specify &#x60;Percentage&#x60;. | [optional] 
**refund_percentage** | **double** | The percentage for refund.                This value only applies if you choose &#x60;refundType &#x3D; Percentage&#x60; or &#x60;refundType &#x3D; Partial&#x60;. | [optional] 
**refund_lines** | **string[]** | If you chose a refund of type &#x60;Partial&#x60;, this indicates which lines from the original transaction are being refunded. | [optional] 
**reference_code** | **string** | A user-defined reference field containing information about this refund. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


