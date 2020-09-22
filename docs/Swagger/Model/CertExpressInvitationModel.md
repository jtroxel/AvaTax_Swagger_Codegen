# CertExpressInvitationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | A unique ID number representing this CertExpress invitation. | [optional] 
**company_id** | **int** | The unique ID number of the AvaTax company that sent this invitation. | [optional] 
**recipient** | **string** | The email address to which this invitation was sent.  If this invitation was presented as a weblink, this value will be null. | [optional] 
**customer_code** | **string** | The unique code of the customer that received this invitation.  Note: This field is case sensitive. To have exemption certificates apply, this value should  be the same as the one passed to create a customer. | [optional] 
**customer** | [**\Together\Taxes\Model\CustomerModel**](CustomerModel.md) | The customer who received this invitation. | [optional] 
**cover_letter** | [**\Together\Taxes\Model\CoverLetterModel**](CoverLetterModel.md) | The attached cover letter object to this request. | [optional] 
**email_status** | **string** | The status of the emails associated with this invitation.  If this invitation was sent via email,  this value will change to &#x60;Sent&#x60; when the email message has been sent. | [optional] 
**cover_letters_only** | **bool** | True if this invitation contained a cover letter only. | [optional] 
**exposure_zones** | **int[]** | When an invitation is sent, it contains a list of exposure zones for which the customer is invited to upload  their exemption certificates.  This list contains the ID numbers of the exposure zones identified.                For a list of exposure zones, please call &#x60;ListCertificateExposureZones&#x60;. | [optional] 
**exempt_reasons** | **int[]** | The list of exemption reasons identified by this CertExpress invitation.                For a list of reason codes, please call &#x60;ListCertificateExemptReasons&#x60;. | [optional] 
**delivery_method** | **string** | Indicates the method that was used to deliver this CertExpress invitation. | [optional] 
**message** | **string** | The custom message delivered with this invitation. | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the invitation. | [optional] 
**request_link** | **string** | The web link (URL) that a customer can click on or visit to begin using this CertExpress invitation.                This value is only usable if the status of this invitation is &#x60;Ready&#x60; and the request was created with type &#x60;Download&#x60;.  NOTE: This link usually takes a few minutes to be available. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


