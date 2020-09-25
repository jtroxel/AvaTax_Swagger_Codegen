# AuditModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **int** | A unique ID number referring to this individual API call. | [optional] 
**account_id** | **int** | The unique ID number of the account to which the user belongs. | [optional] 
**user_id** | **int** | The unique ID number of the user that performed this API call. | [optional] 
**ip_address** | **string** | The origin IP address from which AvaTax received this API call.  If you use a proxy layer or other  gateway, this IP address may be the address of the gateway.  This information is not guaranteed  to be accurate and may change based on network conditions between your site and AvaTax. | [optional] 
**machine_name** | **string** | If your API call specified a &#x60;MachineName&#x60; in the [Client Profile Headers](https://developer.avalara.com/avatax/client-headers/), this  variable will contain its value.  This information is self-reported by the client and is not guaranteed to be present. | [optional] 
**client_name** | **string** | If your API call specified a &#x60;ClientName&#x60; in the [Client Profile Headers](https://developer.avalara.com/avatax/client-headers/), this  variable will contain its value.  This information is self-reported by the client and is not guaranteed to be present. | [optional] 
**client_version** | **string** | If your API call specified a &#x60;ClientVersion&#x60; in the [Client Profile Headers](https://developer.avalara.com/avatax/client-headers/), this  variable will contain its value.  This information is self-reported by the client and is not guaranteed to be present. | [optional] 
**adapter_name** | **string** | If your API call specified a &#x60;AdapterName&#x60; in the [Client Profile Headers](https://developer.avalara.com/avatax/client-headers/), this  variable will contain its value.  This information is self-reported by the client and is not guaranteed to be present. | [optional] 
**adapter_version** | **string** | If your API call specified a &#x60;AdapterVersion&#x60; in the [Client Profile Headers](https://developer.avalara.com/avatax/client-headers/), this  variable will contain its value.  This information is self-reported by the client and is not guaranteed to be present. | [optional] 
**server_name** | **string** | The server name of the AvaTax server that responded to this API call. | [optional] 
**server_version** | **string** | The software version number of the currently deployed AvaTax API software on the server that responded to this API call. | [optional] 
**reference_id** | **int** | A context-dependent reference ID for this API call.  This reference ID is not guaranteed to contain a specific value  and may be used differently by various API calls. | [optional] 
**severity_level_id** | **int** | If the API contained a specific type of error code, this value would contain the unique ID number of the severity level  of the response returned to the client. | [optional] 
**server_timestamp** | [**\DateTime**](\DateTime.md) | The server timestamp, in UTC, of the time when the server received this API call. | [optional] 
**server_duration** | **int** | The number of milliseconds that the AvaTax server took to respond to this API call. | [optional] 
**service_name** | **string** | The service name of the AvaTax API service that responded to this API call. | [optional] 
**operation** | **string** | The operation name of this API call. | [optional] 
**reference_code** | **string** | A context-dependent reference code for this API call.  This reference code is not guaranteed to contain a specific value  and may be used differently by various API calls. | [optional] 
**error_message** | **string** | If this API call reported an error, this contains the name of the error that was returned.  You can look up more  information about AvaTax error messages on the [AvaTax REST Error Page](https://developer.avalara.com/avatax/errors/). | [optional] 
**audit_message** | **string** | Reserved for Avalara internal usage. | [optional] 
**load_balancer_duration** | **int** | Reserved for Avalara internal usage. | [optional] 
**record_count** | **int** | If this API call returned an array of information, this value contains the number of records returned. | [optional] 
**reference_authorization** | **string** | Reserved for Avalara internal usage. | [optional] 
**is_queued** | **bool** | Reserved for Avalara internal usage. | [optional] 
**database_call_count** | **int** | If this API call included requests made to any of the AvaTax data layers, this contains the number of requests that were traced.                Please note that not all data layers support this measurement. | [optional] 
**database_call_duration** | **string** | If this API call included requests made to any of the AvaTax data layers, this contains the total duration time measured for all the requests.                Please note that not all data layers support this measurement. | [optional] 
**remote_call_duration** | **string** | If this API call included interoperation with other Avalara services, this contains the amount of time taken by those services. | [optional] 
**events** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AuditEvent[]**](AuditEvent.md) | Reserved for Avalara internal usage. | [optional] 
**request_url** | **string** | The original request URL as provided by the client. | [optional] 
**request_body** | **string** | If this request was an HTTP request that included a body such as a POST or a PUT, this will contain the request body sent by the client.                This request body is represented as a string, exactly as it was received from the client.  Regardless of whether the request was JSON,  Base64 encoded bytes, or a CSV file, this contains the exact contents of the request body. | [optional] 
**response_status** | **int** | The HTTP response code that was sent by the server. | [optional] 
**response_body** | **string** | The entire response body sent from the AvaTax server to the client.  This value is returned as a string regardless of whether the results  were JSON-formatted text, CSV files, or raw strings. | [optional] 
**remote_calls** | [**\Together\Taxes\Provider\AvaTax\Swagger\Model\AuditModel[]**](AuditModel.md) | Reserved for Avalara internal usage. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


