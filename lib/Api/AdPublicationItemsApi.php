<?php
/**
 * AdPublicationItemsApi
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
 * AdPublicationItemsApi Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdPublicationItemsApi
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
     * Operation getAdPublicationItemsItem
     *
     * Retrieves a collection of AdPublication resources for a same Ad
     *
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdPublicationItemsAdPublicationsRead
     */
    public function getAdPublicationItemsItem($adId)
    {
        list($response) = $this->getAdPublicationItemsItemWithHttpInfo($adId);
        return $response;
    }

    /**
     * Operation getAdPublicationItemsItemWithHttpInfo
     *
     * Retrieves a collection of AdPublication resources for a same Ad
     *
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdPublicationItemsAdPublicationsRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdPublicationItemsItemWithHttpInfo($adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->getAdPublicationItemsItemRequest($adId);

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
                        '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdPublicationItemsItemAsync
     *
     * Retrieves a collection of AdPublication resources for a same Ad
     *
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdPublicationItemsItemAsync($adId)
    {
        return $this->getAdPublicationItemsItemAsyncWithHttpInfo($adId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdPublicationItemsItemAsyncWithHttpInfo
     *
     * Retrieves a collection of AdPublication resources for a same Ad
     *
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdPublicationItemsItemAsyncWithHttpInfo($adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->getAdPublicationItemsItemRequest($adId);

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
     * Create request for operation 'getAdPublicationItemsItem'
     *
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdPublicationItemsItemRequest($adId)
    {
        // verify the required parameter 'adId' is set
        if ($adId === null || (is_array($adId) && count($adId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $adId when calling getAdPublicationItemsItem'
            );
        }

        $resourcePath = '/api/ad_publication_items/{adId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($adId !== null) {
            $resourcePath = str_replace(
                '{' . 'adId' . '}',
                ObjectSerializer::toPathValue($adId),
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
     * Operation putAdPublicationItemsItem
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdPublicationItemsAdPublicationsRead
     */
    public function putAdPublicationItemsItem($body, $adId)
    {
        list($response) = $this->putAdPublicationItemsItemWithHttpInfo($body, $adId);
        return $response;
    }

    /**
     * Operation putAdPublicationItemsItemWithHttpInfo
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdPublicationItemsAdPublicationsRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function putAdPublicationItemsItemWithHttpInfo($body, $adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->putAdPublicationItemsItemRequest($body, $adId);

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
                        '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putAdPublicationItemsItemAsync
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAdPublicationItemsItemAsync($body, $adId)
    {
        return $this->putAdPublicationItemsItemAsyncWithHttpInfo($body, $adId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putAdPublicationItemsItemAsyncWithHttpInfo
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAdPublicationItemsItemAsyncWithHttpInfo($body, $adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->putAdPublicationItemsItemRequest($body, $adId);

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
     * Create request for operation 'putAdPublicationItemsItem'
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putAdPublicationItemsItemRequest($body, $adId)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling putAdPublicationItemsItem'
            );
        }
        // verify the required parameter 'adId' is set
        if ($adId === null || (is_array($adId) && count($adId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $adId when calling putAdPublicationItemsItem'
            );
        }

        $resourcePath = '/api/ad_publication_items/{adId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($adId !== null) {
            $resourcePath = str_replace(
                '{' . 'adId' . '}',
                ObjectSerializer::toPathValue($adId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/ld+json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/ld+json', 'text/html'],
                ['application/json', 'application/ld+json', 'text/html']
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation putAdPublicationItemsItem
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdPublicationItemsAdPublicationsRead
     */
    public function putAdPublicationItemsItem($body, $adId)
    {
        list($response) = $this->putAdPublicationItemsItemWithHttpInfo($body, $adId);
        return $response;
    }

    /**
     * Operation putAdPublicationItemsItemWithHttpInfo
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdPublicationItemsAdPublicationsRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function putAdPublicationItemsItemWithHttpInfo($body, $adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->putAdPublicationItemsItemRequest($body, $adId);

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
                        '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putAdPublicationItemsItemAsync
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAdPublicationItemsItemAsync($body, $adId)
    {
        return $this->putAdPublicationItemsItemAsyncWithHttpInfo($body, $adId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putAdPublicationItemsItemAsyncWithHttpInfo
     *
     * Updates a collection of AdPublication resources for a same Ad
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putAdPublicationItemsItemAsyncWithHttpInfo($body, $adId)
    {
        $returnType = '\Ubiflow\Model\AdPublicationItemsAdPublicationsRead';
        $request = $this->putAdPublicationItemsItemRequest($body, $adId);

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
     * Create request for operation 'putAdPublicationItemsItem'
     *
     * @param  \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite $body The updated AdPublicationItems resource (required)
     * @param  string $adId Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putAdPublicationItemsItemRequest($body, $adId)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling putAdPublicationItemsItem'
            );
        }
        // verify the required parameter 'adId' is set
        if ($adId === null || (is_array($adId) && count($adId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $adId when calling putAdPublicationItemsItem'
            );
        }

        $resourcePath = '/api/ad_publication_items/{adId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($adId !== null) {
            $resourcePath = str_replace(
                '{' . 'adId' . '}',
                ObjectSerializer::toPathValue($adId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/ld+json', 'text/html']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/ld+json', 'text/html'],
                ['application/json', 'application/ld+json', 'text/html']
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
            'PUT',
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