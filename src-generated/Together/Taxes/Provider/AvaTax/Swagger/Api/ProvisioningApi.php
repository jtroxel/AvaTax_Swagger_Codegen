<?php
/**
 * ProvisioningApi
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
 * ProvisioningApi Class Doc Comment
 *
 * @category Class
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProvisioningApi
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
     * Operation requestNewAccount
     *
     * Request a new Avalara account
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountRequestModel $body Information about the account you wish to create and the selected product offerings. (optional)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountModel
     */
    public function requestNewAccount($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        list($response) = $this->requestNewAccountWithHttpInfo($x_avalara_client, $body);
        return $response;
    }

    /**
     * Operation requestNewAccountWithHttpInfo
     *
     * Request a new Avalara account
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountRequestModel $body Information about the account you wish to create and the selected product offerings. (optional)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function requestNewAccountWithHttpInfo($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountModel';
        $request = $this->requestNewAccountRequest($x_avalara_client, $body);

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
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation requestNewAccountAsync
     *
     * Request a new Avalara account
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountRequestModel $body Information about the account you wish to create and the selected product offerings. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function requestNewAccountAsync($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        return $this->requestNewAccountAsyncWithHttpInfo($x_avalara_client, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation requestNewAccountAsyncWithHttpInfo
     *
     * Request a new Avalara account
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountRequestModel $body Information about the account you wish to create and the selected product offerings. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function requestNewAccountAsyncWithHttpInfo($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountModel';
        $request = $this->requestNewAccountRequest($x_avalara_client, $body);

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
     * Create request for operation 'requestNewAccount'
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\NewAccountRequestModel $body Information about the account you wish to create and the selected product offerings. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function requestNewAccountRequest($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {

        $resourcePath = '/api/v2/accounts/request';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_avalara_client !== null) {
            $headerParams['X-Avalara-Client'] = ObjectSerializer::toHeaderValue($x_avalara_client);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation requestNewEntitlement
     *
     * Request a new entitilement to an existing customer
     *
     * @param  int $id The avatax account id of the customer (required)
     * @param  string $offer The offer to be added to an already existing customer (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\OfferModel
     */
    public function requestNewEntitlement($id, $offer, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        list($response) = $this->requestNewEntitlementWithHttpInfo($id, $offer, $x_avalara_client);
        return $response;
    }

    /**
     * Operation requestNewEntitlementWithHttpInfo
     *
     * Request a new entitilement to an existing customer
     *
     * @param  int $id The avatax account id of the customer (required)
     * @param  string $offer The offer to be added to an already existing customer (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\OfferModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function requestNewEntitlementWithHttpInfo($id, $offer, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\OfferModel';
        $request = $this->requestNewEntitlementRequest($id, $offer, $x_avalara_client);

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
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\OfferModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation requestNewEntitlementAsync
     *
     * Request a new entitilement to an existing customer
     *
     * @param  int $id The avatax account id of the customer (required)
     * @param  string $offer The offer to be added to an already existing customer (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function requestNewEntitlementAsync($id, $offer, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        return $this->requestNewEntitlementAsyncWithHttpInfo($id, $offer, $x_avalara_client)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation requestNewEntitlementAsyncWithHttpInfo
     *
     * Request a new entitilement to an existing customer
     *
     * @param  int $id The avatax account id of the customer (required)
     * @param  string $offer The offer to be added to an already existing customer (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function requestNewEntitlementAsyncWithHttpInfo($id, $offer, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\OfferModel';
        $request = $this->requestNewEntitlementRequest($id, $offer, $x_avalara_client);

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
     * Create request for operation 'requestNewEntitlement'
     *
     * @param  int $id The avatax account id of the customer (required)
     * @param  string $offer The offer to be added to an already existing customer (required)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function requestNewEntitlementRequest($id, $offer, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling requestNewEntitlement'
            );
        }
        // verify the required parameter 'offer' is set
        if ($offer === null || (is_array($offer) && count($offer) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $offer when calling requestNewEntitlement'
            );
        }

        $resourcePath = '/api/v2/accounts/{id}/entitlements/{offer}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($offer !== null) {
            $resourcePath = str_replace(
                '{' . 'offer' . '}',
                ObjectSerializer::toPathValue($offer),
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
            'POST',
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
