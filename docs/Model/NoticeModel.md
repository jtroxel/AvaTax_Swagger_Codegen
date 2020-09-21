# NoticeModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID number of this notice. | 
**company_id** | **int** | The unique ID number of the company to which this notice belongs. | 
**status_id** | **int** | The status id of the notice | 
**status** | **string** | The status of the notice | [optional] 
**received_date** | [**\DateTime**](\DateTime.md) | The received date of the notice | 
**closed_date** | [**\DateTime**](\DateTime.md) | The closed date of the notice | [optional] 
**total_remit** | **double** | The total remmitance amount for the notice | [optional] 
**customer_type_id** | **string** | NoticeCustomerTypeID can be retrieved from the definitions API | 
**country** | **string** | Name or ISO 3166 code identifying the country that sent this notice.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API &#x60;ListCountries&#x60;. | [optional] 
**region** | **string** | Name or ISO 3166 code identifying the region within the country that sent this notice.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API &#x60;ListRegions&#x60;. | [optional] 
**tax_authority_id** | **int** | The tax authority id of the notice | [optional] 
**filing_frequency** | **string** | The filing frequency of the notice | [optional] 
**filing_type_id** | **string** | The filing type of the notice | [optional] 
**ticket_reference_no** | **string** | The ticket reference number of the notice | [optional] 
**ticket_reference_url** | **string** | The ticket reference url of the notice | [optional] 
**sales_force_case** | **string** | The sales force case of the notice | [optional] 
**sales_force_case_url** | **string** | The URL to the sales force case | [optional] 
**tax_period** | **string** | The tax period of the notice | [optional] 
**reason_id** | **int** | The notice reason id | 
**reason** | **string** | The notice reason | [optional] 
**type_id** | **int** | The tax notice type id | [optional] 
**type** | **string** | The tax notice type description | [optional] 
**customer_funding_option_id** | **string** | The notice customer funding options | [optional] 
**priority_id** | **string** | The priority of the notice | 
**customer_comment** | **string** | Comments from the customer on this notice | [optional] 
**hide_from_customer** | **bool** | Indicator to hide from customer | 
**expected_resolution_date** | [**\DateTime**](\DateTime.md) | Expected resolution date of the notice | [optional] 
**show_resolution_date_to_customer** | **bool** | Indicator to show customer this resolution date | 
**closed_by_user_id** | **int** | The unique ID number of the user that closed the notice | [optional] 
**created_by_user_name** | **string** | The user who created the notice | [optional] 
**owned_by_user_id** | **int** | The unique ID number of the user that owns the notice | [optional] 
**description** | **string** | The description of the notice | [optional] 
**ava_file_form_id** | **int** | The ava file form id of the notice | [optional] 
**revenue_contact_id** | **int** | The id of the revenue contact | [optional] 
**compliance_contact_id** | **int** | The id of the compliance contact | [optional] 
**tax_form_code** | **string** | The tax form code of the notice | [optional] 
**document_reference** | **string** | The document reference of the notice | [optional] 
**jurisdiction_name** | **string** | The jurisdiction name of the notice | [optional] 
**jurisdiction_type** | **string** | The jurisdiction type of the notice | [optional] 
**comments** | [**\Together\Taxes\Model\NoticeCommentModel[]**](NoticeCommentModel.md) | Additional comments on the notice | [optional] 
**finances** | [**\Together\Taxes\Model\NoticeFinanceModel[]**](NoticeFinanceModel.md) | Finance details of the notice | [optional] 
**responsibility** | [**\Together\Taxes\Model\NoticeResponsibilityDetailModel[]**](NoticeResponsibilityDetailModel.md) | Notice Responsibility Details | [optional] 
**root_cause** | [**\Together\Taxes\Model\NoticeRootCauseDetailModel[]**](NoticeRootCauseDetailModel.md) | Notice Root Cause Details | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date when this record was created. | [optional] 
**created_user_id** | **int** | The User ID of the user who created this record. | [optional] 
**modified_date** | [**\DateTime**](\DateTime.md) | The date/time when this record was last modified. | [optional] 
**modified_user_id** | **int** | The user ID of the user who last modified this record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


