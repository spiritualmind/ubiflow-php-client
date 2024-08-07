<?php
/**
 * AdvertiserEmissionApi
 * PHP version 5
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ubiflow\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ubiflow\ApiException;
use Ubiflow\Configuration;
use Ubiflow\HeaderSelector;
use Ubiflow\ObjectSerializer;

/**
 * AdvertiserEmissionApi Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserEmissionApi
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
     * Operation getAdvertiserEmissionCollection
     *
     * Retrieves a collection of AdvertiserEmissions
     *
     * @param  string $advertiserId advertiserId (optional)
     * @param  string $issuerCode issuerCode (optional)
     * @param  string $issuerName issuerName (optional)
     * @param  bool $active active (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[]
     */
    public function getAdvertiserEmissionCollection($advertiserId = null, $issuerCode = null, $issuerName = null, $active = null)
    {
        list($response) = $this->getAdvertiserEmissionCollectionWithHttpInfo($advertiserId, $issuerCode, $issuerName, $active);
        return $response;
    }

    /**
     * Operation getAdvertiserEmissionCollectionWithHttpInfo
     *
     * Retrieves a collection of AdvertiserEmissions
     *
     * @param  string $advertiserId (optional)
     * @param  string $issuerCode (optional)
     * @param  string $issuerName (optional)
     * @param  bool $active (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdvertiserEmissionCollectionWithHttpInfo($advertiserId = null, $issuerCode = null, $issuerName = null, $active = null)
    {
        $returnType = '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[]';
        $request = $this->getAdvertiserEmissionCollectionRequest($advertiserId, $issuerCode, $issuerName, $active);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdvertiserEmissionCollectionAsync
     *
     * Retrieves a collection of AdvertiserEmissions
     *
     * @param  string $advertiserId (optional)
     * @param  string $issuerCode (optional)
     * @param  string $issuerName (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserEmissionCollectionAsync($advertiserId = null, $issuerCode = null, $issuerName = null, $active = null)
    {
        return $this->getAdvertiserEmissionCollectionAsyncWithHttpInfo($advertiserId, $issuerCode, $issuerName, $active)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdvertiserEmissionCollectionAsyncWithHttpInfo
     *
     * Retrieves a collection of AdvertiserEmissions
     *
     * @param  string $advertiserId (optional)
     * @param  string $issuerCode (optional)
     * @param  string $issuerName (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserEmissionCollectionAsyncWithHttpInfo($advertiserId = null, $issuerCode = null, $issuerName = null, $active = null)
    {
        $returnType = '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[]';
        $request = $this->getAdvertiserEmissionCollectionRequest($advertiserId, $issuerCode, $issuerName, $active);

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
     * Create request for operation 'getAdvertiserEmissionCollection'
     *
     * @param  string $advertiserId (optional)
     * @param  string $issuerCode (optional)
     * @param  string $issuerName (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdvertiserEmissionCollectionRequest($advertiserId = null, $issuerCode = null, $issuerName = null, $active = null)
    {

        $resourcePath = '/api/advertiser_emissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($advertiserId !== null) {
            $queryParams['advertiser.id'] = ObjectSerializer::toQueryValue($advertiserId, null);
        }
        // query params
        if ($issuerCode !== null) {
            $queryParams['issuer.code'] = ObjectSerializer::toQueryValue($issuerCode, null);
        }
        // query params
        if ($issuerName !== null) {
            $queryParams['issuer.name'] = ObjectSerializer::toQueryValue($issuerName, null);
        }
        // query params
        if ($active !== null) {
            $queryParams['active'] = ObjectSerializer::toQueryValue($active, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/ld+json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/ld+json', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-TOKEN');
        if ($apiKey !== null) {
            $headers['X-AUTH-TOKEN'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAdvertiserEmissionItem
     *
     * Retrieves an AdvertiserEmission
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead
     */
    public function getAdvertiserEmissionItem($id)
    {
        list($response) = $this->getAdvertiserEmissionItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAdvertiserEmissionItemWithHttpInfo
     *
     * Retrieves an AdvertiserEmission
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdvertiserEmissionItemWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead';
        $request = $this->getAdvertiserEmissionItemRequest($id);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdvertiserEmissionItemAsync
     *
     * Retrieves an AdvertiserEmission
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserEmissionItemAsync($id)
    {
        return $this->getAdvertiserEmissionItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdvertiserEmissionItemAsyncWithHttpInfo
     *
     * Retrieves an AdvertiserEmission
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserEmissionItemAsyncWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead';
        $request = $this->getAdvertiserEmissionItemRequest($id);

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
     * Create request for operation 'getAdvertiserEmissionItem'
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdvertiserEmissionItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getAdvertiserEmissionItem'
            );
        }

        $resourcePath = '/api/advertiser_emissions/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/ld+json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/ld+json', 'text/html'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-TOKEN');
        if ($apiKey !== null) {
            $headers['X-AUTH-TOKEN'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
