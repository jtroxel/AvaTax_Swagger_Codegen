# CertificateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID number of this certificate. | [optional] 
**company_id** | **int** | The unique ID number of the AvaTax company that recorded this certificate. | [optional] 
**signed_date** | [**\DateTime**](\DateTime.md) | The date when this certificate was signed. | 
**expiration_date** | [**\DateTime**](\DateTime.md) | Expiration date when this certificate will no longer be valid. | 
**filename** | **string** | File name for the image of this certificate.                When creating a certificate, if you do not upload a PDF or JPG image, you must specify the filename  of the certificate as it is tracked in your repository.                To create a certificate, you must provide one of the following fields: either a &#x60;filename&#x60;, a &#x60;pdf&#x60; file,  or an array of JPG &#x60;pages&#x60;.  The API will return an error if you omit these fields or if you attempt to  put values in more than one of them. | [optional] 
**document_exists** | **bool** | This value is true if there exists scanned PDF copy of this certificate or the PDF version of the form that the customer filled via the CertCapture wizard on S3 bucket. | [optional] 
**valid** | **bool** | True if this certificate is marked as valid.  A valid certificate can be considered for exemption purposes.  When a certificate is marked invalid, it will no longer be considered when calculating exemption for  a customer. | [optional] 
**verified** | **bool** | This value is true if the certificate has gone through the certificate validation process.  For more information on the certificate validation process, please see the Avalara Help Center. | [optional] 
**exempt_percentage** | **double** | If this certificate provides exemption from transactional taxes, what percentage of the transaction  is considered exempt?                For a fully exempt certificate, this percentage should be 100. | [optional] 
**is_single_certificate** | **bool** | This value is true if this certificate is a single (or standalone) certificate.  This value is set  during the audit stage of the certificate validation process. | [optional] 
**exemption_number** | **string** | Indicates the tax number passed in for the certificate. | [optional] 
**validated_exemption_reason** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\ExemptionReasonModel**](ExemptionReasonModel.md) | The exemption reason that CertCapture audit/internal logic identifies for created certificate. | [optional] 
**exemption_reason** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\ExemptionReasonModel**](ExemptionReasonModel.md) | The exemption reason associated with this certificate.  For example, the reason code for exemption  for purposes of resale is &#x60;RESALE&#x60;.                For a list of exemption reasons, call &#x60;ListCertificateExemptReasons&#x60;. | 
**status** | **string** | The status of the certificate | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was created. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**page_count** | **int** | Number of pages contained within this certificate. | [optional] 
**customers** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CustomerModel[]**](CustomerModel.md) | A list of customers to which this certificate applies.  You can fetch this data by specifying  &#x60;$include&#x3D;customers&#x60; when calling a certificate fetch API. | [optional] 
**po_numbers** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\PoNumberModel[]**](PoNumberModel.md) | A list of purchase order numbers that are valid for use with this certificate.                If this certificate is applicable for all purchase order numbers, this field will be empty.                You can fetch this data by specifying &#x60;$include&#x3D;po_numbers&#x60; when calling a certificate fetch API. | [optional] 
**exposure_zone** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\ExposureZoneModel**](ExposureZoneModel.md) | The exposure zone where this certificate is valid. | 
**attributes** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\CertificateAttributeModel[]**](CertificateAttributeModel.md) | A list of certificate attributes that apply to this certificate.                You can fetch this data by specifying &#x60;$include&#x3D;attributes&#x60; when calling a certificate fetch API. | [optional] 
**ecms_id** | **int** | The unique ID number of current AvaTax Exemption Certificate that refers this certificate. | [optional] 
**ecms_status** | **string** | The status of current AvaTax Exemption Certificate  that refers to this certificate. | [optional] 
**pdf** | **string** | This field is available for input only.  To retrieve the image after creation, use the  &#x60;DownloadCertificateImage&#x60; API.                When creating a certificate, you may optionally provide a PDF image in Base64 URLEncoded format.  PDFs are automatically parsed into individual page JPG images and can be retrieved back  later as either the original PDF or the individual pages.                To create a certificate, you must provide one of the following fields: either a &#x60;filename&#x60;, a &#x60;pdf&#x60; file,  or an array of JPG &#x60;pages&#x60;.  The API will return an error if you omit these fields or if you attempt to  put values in more than one of them. | [optional] 
**pages** | **string[]** | This field is available for input only.  To retrieve the image after creation, use the  &#x60;DownloadCertificateImage&#x60; API.                When creating a certificate, you may optionally provide a list of JPG images, one per page, in  Base64 URLEncoded format.  These JPG images are automatically combined into a single downloadable  PDF and can be retrieved back later as either the original JPG images or the combined PDF.                To create a certificate, you must provide one of the following fields: either a &#x60;filename&#x60;, a &#x60;pdf&#x60; file,  or an array of JPG &#x60;pages&#x60;.  The API will return an error if you omit these fields or if you attempt to  put values in more than one of them. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


