# LocationValidationModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**settings_validated** | **bool** | True if the location has a value for each jurisdiction-required setting.  The user is required to ensure that the values are correct according to the jurisdiction; this flag  does not indicate whether the taxing jurisdiction has accepted the data you have provided. | [optional] 
**required_settings** | [**\Together\Taxes\Model\LocationQuestionModel[]**](LocationQuestionModel.md) | A list of settings that must be defined for this location | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


