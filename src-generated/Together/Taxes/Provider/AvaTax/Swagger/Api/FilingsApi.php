<?php
/**
 * FilingsApi
 * PHP version 5
 *
 * @category Class
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AvaTax API
 *
 * REST interface to Avalara's enterprise tax service, AvaTax.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Together\Taxes\Provider\AvaTax\Swagger\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Together\Taxes\Provider\AvaTax\Swagger\ApiException;
use Together\Taxes\Provider\AvaTax\Swagger\Configuration;
use Together\Taxes\Provider\AvaTax\Swagger\HeaderSelector;
use Together\Taxes\Provider\AvaTax\Swagger\ObjectSerializer;

/**
 * FilingsApi Class Doc Comment
 *
 * @category Class
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAccrualFilings
     *
     * Retrieve a filing containing the return and all its accrual returns.
     *
     * @param  int $company_id The ID of the company that owns these returns (required)
     * @param  int $filing_return_id The ID of the filing return (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiTaxFilingModel
     */
    public function getAccrualFilings($company_id, $filing_return_id, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        list($response) = $this->getAccrualFilingsWithHttpInfo($company_id, $filing_return_id, $x_avalara_client);
        return $response;
    }

    /**
     * Operation getAccrualFilingsWithHttpInfo
     *
     * Retrieve a filing containing the return and all its accrual returns.
     *
     * @param  int $company_id The ID of the company that owns these returns (required)
     * @param  int $filing_return_id The ID of the filing return (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiTaxFilingModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccrualFilingsWithHttpInfo($company_id, $filing_return_id, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiTaxFilingModel';
        $request = $this->getAccrualFilingsRequest($company_id, $filing_return_id, $x_avalara_client);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiTaxFilingModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAccrualFilingsAsync
     *
     * Retrieve a filing containing the return and all its accrual returns.
     *
     * @param  int $company_id The ID of the company that owns these returns (required)
     * @param  int $filing_return_id The ID of the filing return (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccrualFilingsAsync($company_id, $filing_return_id, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        return $this->getAccrualFilingsAsyncWithHttpInfo($company_id, $filing_return_id, $x_avalara_client)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccrualFilingsAsyncWithHttpInfo
     *
     * Retrieve a filing containing the return and all its accrual returns.
     *
     * @param  int $company_id The ID of the company that owns these returns (required)
     * @param  int $filing_return_id The ID of the filing return (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccrualFilingsAsyncWithHttpInfo($company_id, $filing_return_id, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultMultiTaxFilingModel';
        $request = $this->getAccrualFilingsRequest($company_id, $filing_return_id, $x_avalara_client);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAccrualFilings'
     *
     * @param  int $company_id The ID of the company that owns these returns (required)
     * @param  int $filing_return_id The ID of the filing return (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAccrualFilingsRequest($company_id, $filing_return_id, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getAccrualFilings'
            );
        }
        // verify the required parameter 'filing_return_id' is set
        if ($filing_return_id === null || (is_array($filing_return_id) && count($filing_return_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filing_return_id when calling getAccrualFilings'
            );
        }

        $resourcePath = '/api/v2/companies/{companyId}/filings/accrual/{filingReturnId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_avalara_client !== null) {
            $headerParams['X-Avalara-Client'] = ObjectSerializer::toHeaderValue($x_avalara_client);
        }

        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'companyId' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }
        // path params
        if ($filing_return_id !== null) {
            $resourcePath = str_replace(
                '{' . 'filingReturnId' . '}',
                ObjectSerializer::toPathValue($filing_return_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getFiledReturns
     *
     * Retrieve a list of filed returns for the specified company in the year and month of a given filing period.
     *
     * @param  int $company_id The ID of the company that owns these batches (required)
     * @param  int $end_period_month The month of the period you are trying to retrieve (optional)
     * @param  int $end_period_year The year of the period you are trying to retrieve (optional)
     * @param  string $frequency The frequency of the return you are trying to retrieve (optional)
     * @param  string $status The status of the return(s) you are trying to retrieve (optional)
     * @param  string $country The country of the return(s) you are trying to retrieve (optional)
     * @param  string $region The region of the return(s) you are trying to retrieve (optional)
     * @param  int $filing_calendar_id The filing calendar id of the return you are trying to retrieve (optional)
     * @param  string $taxform_code The unique tax form code of the form. (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultFiledReturnModel
     */
    public function getFiledReturns($company_id, $end_period_month = null, $end_period_year = null, $frequency = null, $status = null, $country = null, $region = null, $filing_calendar_id = null, $taxform_code = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        list($response) = $this->getFiledReturnsWithHttpInfo($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client);
        return $response;
    }

    /**
     * Operation getFiledReturnsWithHttpInfo
     *
     * Retrieve a list of filed returns for the specified company in the year and month of a given filing period.
     *
     * @param  int $company_id The ID of the company that owns these batches (required)
     * @param  int $end_period_month The month of the period you are trying to retrieve (optional)
     * @param  int $end_period_year The year of the period you are trying to retrieve (optional)
     * @param  string $frequency The frequency of the return you are trying to retrieve (optional)
     * @param  string $status The status of the return(s) you are trying to retrieve (optional)
     * @param  string $country The country of the return(s) you are trying to retrieve (optional)
     * @param  string $region The region of the return(s) you are trying to retrieve (optional)
     * @param  int $filing_calendar_id The filing calendar id of the return you are trying to retrieve (optional)
     * @param  string $taxform_code The unique tax form code of the form. (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultFiledReturnModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFiledReturnsWithHttpInfo($company_id, $end_period_month = null, $end_period_year = null, $frequency = null, $status = null, $country = null, $region = null, $filing_calendar_id = null, $taxform_code = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultFiledReturnModel';
        $request = $this->getFiledReturnsRequest($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultFiledReturnModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getFiledReturnsAsync
     *
     * Retrieve a list of filed returns for the specified company in the year and month of a given filing period.
     *
     * @param  int $company_id The ID of the company that owns these batches (required)
     * @param  int $end_period_month The month of the period you are trying to retrieve (optional)
     * @param  int $end_period_year The year of the period you are trying to retrieve (optional)
     * @param  string $frequency The frequency of the return you are trying to retrieve (optional)
     * @param  string $status The status of the return(s) you are trying to retrieve (optional)
     * @param  string $country The country of the return(s) you are trying to retrieve (optional)
     * @param  string $region The region of the return(s) you are trying to retrieve (optional)
     * @param  int $filing_calendar_id The filing calendar id of the return you are trying to retrieve (optional)
     * @param  string $taxform_code The unique tax form code of the form. (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFiledReturnsAsync($company_id, $end_period_month = null, $end_period_year = null, $frequency = null, $status = null, $country = null, $region = null, $filing_calendar_id = null, $taxform_code = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        return $this->getFiledReturnsAsyncWithHttpInfo($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFiledReturnsAsyncWithHttpInfo
     *
     * Retrieve a list of filed returns for the specified company in the year and month of a given filing period.
     *
     * @param  int $company_id The ID of the company that owns these batches (required)
     * @param  int $end_period_month The month of the period you are trying to retrieve (optional)
     * @param  int $end_period_year The year of the period you are trying to retrieve (optional)
     * @param  string $frequency The frequency of the return you are trying to retrieve (optional)
     * @param  string $status The status of the return(s) you are trying to retrieve (optional)
     * @param  string $country The country of the return(s) you are trying to retrieve (optional)
     * @param  string $region The region of the return(s) you are trying to retrieve (optional)
     * @param  int $filing_calendar_id The filing calendar id of the return you are trying to retrieve (optional)
     * @param  string $taxform_code The unique tax form code of the form. (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFiledReturnsAsyncWithHttpInfo($company_id, $end_period_month = null, $end_period_year = null, $frequency = null, $status = null, $country = null, $region = null, $filing_calendar_id = null, $taxform_code = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\FetchResultFiledReturnModel';
        $request = $this->getFiledReturnsRequest($company_id, $end_period_month, $end_period_year, $frequency, $status, $country, $region, $filing_calendar_id, $taxform_code, $x_avalara_client);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getFiledReturns'
     *
     * @param  int $company_id The ID of the company that owns these batches (required)
     * @param  int $end_period_month The month of the period you are trying to retrieve (optional)
     * @param  int $end_period_year The year of the period you are trying to retrieve (optional)
     * @param  string $frequency The frequency of the return you are trying to retrieve (optional)
     * @param  string $status The status of the return(s) you are trying to retrieve (optional)
     * @param  string $country The country of the return(s) you are trying to retrieve (optional)
     * @param  string $region The region of the return(s) you are trying to retrieve (optional)
     * @param  int $filing_calendar_id The filing calendar id of the return you are trying to retrieve (optional)
     * @param  string $taxform_code The unique tax form code of the form. (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFiledReturnsRequest($company_id, $end_period_month = null, $end_period_year = null, $frequency = null, $status = null, $country = null, $region = null, $filing_calendar_id = null, $taxform_code = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getFiledReturns'
            );
        }

        $resourcePath = '/api/v2/companies/{companyId}/filings/returns/filed';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($end_period_month !== null) {
            $queryParams['endPeriodMonth'] = ObjectSerializer::toQueryValue($end_period_month);
        }
        // query params
        if ($end_period_year !== null) {
            $queryParams['endPeriodYear'] = ObjectSerializer::toQueryValue($end_period_year);
        }
        // query params
        if ($frequency !== null) {
            $queryParams['frequency'] = ObjectSerializer::toQueryValue($frequency);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = ObjectSerializer::toQueryValue($country);
        }
        // query params
        if ($region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($region);
        }
        // query params
        if ($filing_calendar_id !== null) {
            $queryParams['filingCalendarId'] = ObjectSerializer::toQueryValue($filing_calendar_id);
        }
        // query params
        if ($taxform_code !== null) {
            $queryParams['taxformCode'] = ObjectSerializer::toQueryValue($taxform_code);
        }
        // header params
        if ($x_avalara_client !== null) {
            $headerParams['X-Avalara-Client'] = ObjectSerializer::toHeaderValue($x_avalara_client);
        }

        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'companyId' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
