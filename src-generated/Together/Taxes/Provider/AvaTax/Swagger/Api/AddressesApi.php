<?php
/**
 * AddressesApi
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
 * AddressesApi Class Doc Comment
 *
 * @category Class
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressesApi
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
     * Operation resolveAddress
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $line1 Line 1 (optional)
     * @param  string $line2 Line 2 (optional)
     * @param  string $line3 Line 3 (optional)
     * @param  string $city City (optional)
     * @param  string $region State / Province / Region (optional)
     * @param  string $postal_code Postal Code / Zip Code (optional)
     * @param  string $country Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) (optional)
     * @param  string $text_case selectable text case for address validation (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel
     */
    public function resolveAddress($line1 = null, $line2 = null, $line3 = null, $city = null, $region = null, $postal_code = null, $country = null, $text_case = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        list($response) = $this->resolveAddressWithHttpInfo($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client);
        return $response;
    }

    /**
     * Operation resolveAddressWithHttpInfo
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $line1 Line 1 (optional)
     * @param  string $line2 Line 2 (optional)
     * @param  string $line3 Line 3 (optional)
     * @param  string $city City (optional)
     * @param  string $region State / Province / Region (optional)
     * @param  string $postal_code Postal Code / Zip Code (optional)
     * @param  string $country Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) (optional)
     * @param  string $text_case selectable text case for address validation (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function resolveAddressWithHttpInfo($line1 = null, $line2 = null, $line3 = null, $city = null, $region = null, $postal_code = null, $country = null, $text_case = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel';
        $request = $this->resolveAddressRequest($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client);

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
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation resolveAddressAsync
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $line1 Line 1 (optional)
     * @param  string $line2 Line 2 (optional)
     * @param  string $line3 Line 3 (optional)
     * @param  string $city City (optional)
     * @param  string $region State / Province / Region (optional)
     * @param  string $postal_code Postal Code / Zip Code (optional)
     * @param  string $country Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) (optional)
     * @param  string $text_case selectable text case for address validation (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resolveAddressAsync($line1 = null, $line2 = null, $line3 = null, $city = null, $region = null, $postal_code = null, $country = null, $text_case = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        return $this->resolveAddressAsyncWithHttpInfo($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resolveAddressAsyncWithHttpInfo
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $line1 Line 1 (optional)
     * @param  string $line2 Line 2 (optional)
     * @param  string $line3 Line 3 (optional)
     * @param  string $city City (optional)
     * @param  string $region State / Province / Region (optional)
     * @param  string $postal_code Postal Code / Zip Code (optional)
     * @param  string $country Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) (optional)
     * @param  string $text_case selectable text case for address validation (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resolveAddressAsyncWithHttpInfo($line1 = null, $line2 = null, $line3 = null, $city = null, $region = null, $postal_code = null, $country = null, $text_case = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel';
        $request = $this->resolveAddressRequest($line1, $line2, $line3, $city, $region, $postal_code, $country, $text_case, $x_avalara_client);

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
     * Create request for operation 'resolveAddress'
     *
     * @param  string $line1 Line 1 (optional)
     * @param  string $line2 Line 2 (optional)
     * @param  string $line3 Line 3 (optional)
     * @param  string $city City (optional)
     * @param  string $region State / Province / Region (optional)
     * @param  string $postal_code Postal Code / Zip Code (optional)
     * @param  string $country Two character ISO 3166 Country Code (see /api/v2/definitions/countries for a full list) (optional)
     * @param  string $text_case selectable text case for address validation (optional)
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function resolveAddressRequest($line1 = null, $line2 = null, $line3 = null, $city = null, $region = null, $postal_code = null, $country = null, $text_case = null, $x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0')
    {

        $resourcePath = '/api/v2/addresses/resolve';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($line1 !== null) {
            $queryParams['line1'] = ObjectSerializer::toQueryValue($line1);
        }
        // query params
        if ($line2 !== null) {
            $queryParams['line2'] = ObjectSerializer::toQueryValue($line2);
        }
        // query params
        if ($line3 !== null) {
            $queryParams['line3'] = ObjectSerializer::toQueryValue($line3);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = ObjectSerializer::toQueryValue($city);
        }
        // query params
        if ($region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($region);
        }
        // query params
        if ($postal_code !== null) {
            $queryParams['postalCode'] = ObjectSerializer::toQueryValue($postal_code);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = ObjectSerializer::toQueryValue($country);
        }
        // query params
        if ($text_case !== null) {
            $queryParams['textCase'] = ObjectSerializer::toQueryValue($text_case);
        }
        // header params
        if ($x_avalara_client !== null) {
            $headerParams['X-Avalara-Client'] = ObjectSerializer::toHeaderValue($x_avalara_client);
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
     * Operation resolveAddressPost
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo $body The address to resolve (optional)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel
     */
    public function resolveAddressPost($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        list($response) = $this->resolveAddressPostWithHttpInfo($x_avalara_client, $body);
        return $response;
    }

    /**
     * Operation resolveAddressPostWithHttpInfo
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo $body The address to resolve (optional)
     *
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function resolveAddressPostWithHttpInfo($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel';
        $request = $this->resolveAddressPostRequest($x_avalara_client, $body);

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
                        '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation resolveAddressPostAsync
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo $body The address to resolve (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resolveAddressPostAsync($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        return $this->resolveAddressPostAsyncWithHttpInfo($x_avalara_client, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resolveAddressPostAsyncWithHttpInfo
     *
     * Retrieve geolocation information for a specified address
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo $body The address to resolve (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resolveAddressPostAsyncWithHttpInfo($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {
        $returnType = '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel';
        $request = $this->resolveAddressPostRequest($x_avalara_client, $body);

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
     * Create request for operation 'resolveAddressPost'
     *
     * @param  string $x_avalara_client Identifies the software you are using to call this API.  For more information on the client header, see [Client Headers](https://developer.avalara.com/avatax/client-headers/) . (optional, default to Swagger UI; 20.9.0; Custom; 1.0)
     * @param  \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo $body The address to resolve (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function resolveAddressPostRequest($x_avalara_client = 'Swagger UI; 20.9.0; Custom; 1.0', $body = null)
    {

        $resourcePath = '/api/v2/addresses/resolve';
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
