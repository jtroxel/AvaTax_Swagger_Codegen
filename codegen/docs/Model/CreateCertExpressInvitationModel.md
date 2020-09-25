# CreateCertExpressInvitationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient** | **string** | If the value of &#x60;deliveryMethod&#x60; is set to &#x60;Email&#x60;, please specify the email address of the recipient  for the request. | [optional] 
**cover_letter_title** | **string** | If this invitation is sent via email or download, please specify the cover letter to use when building this  invitation.  For a list of cover letters, please call &#x60;ListCoverLetters&#x60;. | [optional] 
**exposure_zones** | **int[]** | You may optionally specify a list of exposure zones to request in this CertExpress invitation.  If you list  more than one exposure zone, the customer will be prompted to provide an exemption certificate for each one.  If you do not provide a list of exposure zones, the customer will be prompted to select an exposure zone.                For a list of available exposure zones, please call &#x60;ListCertificateExposureZones&#x60;. | [optional] 
**exempt_reasons** | **int[]** | You may optionally specify a list of exemption reasons to pre-populate in this CertExpress invitation.  If you list exemption reasons, the customer will have part of their form already filled in when they visit  the CertExpress website.                For a list of available exemption reasons, please call &#x60;ListCertificateExemptReasons&#x60;. | [optional] 
**delivery_method** | **string** | Specify the type of invitation.  CertExpress invitations can be delivered via email, web link, or  facsimile.                * If you specify &#x60;Email&#x60;, the invitation will be delivered via email.  Please ask the customer to ensure that  * If you specify &#x60;Fax&#x60;, the invitation will be sent via fax to the customer&#39;s fax number on file.  * If you specify &#x60;Download&#x60;, the invitation will be prepared as a web link that you can display to the customer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


