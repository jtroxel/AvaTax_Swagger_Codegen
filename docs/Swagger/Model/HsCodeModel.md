# HsCodeModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hs_code** | **string** | The harmonized tariff system code for this section and chapter.                A full HS code contains more than six characters.  Partial HS codes with two, four, or six characters may have child codes underneath them.  A child code is one that contains greater specificity than a parent code.  It is recommended that when you identify a product you use  the most detailed code available to identify it.                Top level sections do not have HS Codes. | [optional] 
**id** | **int** | A unique identifier for this harmonized tariff system code.                To search for a list of child codes underneath a specific HS code, search for codes where the child&#39;s &#x60;parentHsCodeId&#x60; value matches the parent&#39;s &#x60;id&#x60; value. | 
**parent_hs_code_id** | **int** | The unique ID number of the parent HS code or HS code prefix.                To search for a list of child codes underneath a specific HS code, search for codes where the child&#39;s &#x60;parentHsCodeId&#x60; value matches the parent&#39;s &#x60;id&#x60; value. | [optional] 
**description** | **string** | A human readable description that identifies Code descriptive text for this Section, Chapter, Heading, or Subheading. | 
**system** | **string** | The system to which this HS code belongs. | [optional] 
**destination_country** | **string** | The destination country identified with this HS Code.  This value applies when certain products are classified in specific ways by  bilateral trade agreements. | [optional] 
**eff_date** | [**\DateTime**](\DateTime.md) | For codes that have been expired or defined on specific dates, this value indicates the earliest  date for which this code is considered valid.                If this value is null, this code can be used for any valid date earlier than its end date. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | For codes that have been expired or defined on specific dates, this value indicates the latest  date for which this code is considered valid.                If this value is null, this code can be used for any valid date later than its effective date. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


