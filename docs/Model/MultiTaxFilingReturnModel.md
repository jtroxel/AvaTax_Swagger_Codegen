# MultiTaxFilingReturnModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this filing return. | [optional] 
**filing_calendar_id** | **int** | The unique ID number of the filing calendar associated with this return. | [optional] 
**status** | **string** | The current status of the filing return. | [optional] 
**filing_frequency** | **string** | The filing frequency of the return. | [optional] 
**filing_type** | **string** | The filing type of the return. | [optional] 
**form_name** | **string** | The name of the form. | [optional] 
**form_code** | **string** | The unique code of the form. | [optional] 
**description** | **string** | A description for the return. | [optional] 
**tax_authority_id** | **int** | Tax Authority ID of this return | [optional] 
**filed_date** | [**\DateTime**](\DateTime.md) | The date the return was filed by Avalara. | [optional] 
**accrual_type** | **string** | Accrual type of the return | [optional] 
**start_period** | [**\DateTime**](\DateTime.md) | The start date of this return | [optional] 
**end_period** | [**\DateTime**](\DateTime.md) | The end date of this return | [optional] 
**return_tax_summary** | [**\Together\Taxes\Model\FilingsTaxSummaryModel**](FilingsTaxSummaryModel.md) | A summary of all taxes compbined for this period | [optional] 
**return_tax_details** | [**\Together\Taxes\Model\FilingsTaxDetailsModel[]**](FilingsTaxDetailsModel.md) | A detailed breakdown of the taxes in this filing | [optional] 
**excluded_carry_over_credits** | [**\Together\Taxes\Model\FilingReturnCreditModel**](FilingReturnCreditModel.md) | The excluded carry over credit documents | [optional] 
**applied_carry_over_credits** | [**\Together\Taxes\Model\FilingReturnCreditModel**](FilingReturnCreditModel.md) | The applied carry over credit documents | [optional] 
**total_adjustments** | **double** | Total amount of adjustments on this return | [optional] 
**adjustments** | [**\Together\Taxes\Model\FilingAdjustmentModel[]**](FilingAdjustmentModel.md) | The Adjustments for this return. | [optional] 
**total_augmentations** | **double** | Total amount of augmentations on this return | [optional] 
**augmentations** | [**\Together\Taxes\Model\FilingAugmentationModel[]**](FilingAugmentationModel.md) | The Augmentations for this return. | [optional] 
**total_payments** | **double** | Total amount of payments on this return | [optional] 
**payments** | [**\Together\Taxes\Model\FilingPaymentModel[]**](FilingPaymentModel.md) | The payments for this return. | [optional] 
**attachments** | [**\Together\Taxes\Model\FilingAttachmentModel[]**](FilingAttachmentModel.md) | The attachments for this return. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


