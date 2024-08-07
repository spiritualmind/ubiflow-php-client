<?php
/**
 * AdvertiserPublicationApi
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
 * AdvertiserPublicationApi Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserPublicationApi
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
     * Operation getAdvertiserPublicationCollection
     *
     * Retrieves a collection of AdvertiserPublications
     *
     * @param  string $advertiserId advertiserId (optional)
     * @param  string $portalCode portalCode (optional)
     * @param  string $portalName portalName (optional)
     * @param  bool $portalFree portalFree (optional)
     * @param  bool $active active (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[]
     */
    public function getAdvertiserPublicationCollection($advertiserId = null, $portalCode = null, $portalName = null, $portalFree = null, $active = null)
    {
        list($response) = $this->getAdvertiserPublicationCollectionWithHttpInfo($advertiserId, $portalCode, $portalName, $portalFree, $active);
        return $response;
    }

    /**
     * Operation getAdvertiserPublicationCollectionWithHttpInfo
     *
     * Retrieves a collection of AdvertiserPublications
     *
     * @param  string $advertiserId (optional)
     * @param  string $portalCode (optional)
     * @param  string $portalName (optional)
     * @param  bool $portalFree (optional)
     * @param  bool $active (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdvertiserPublicationCollectionWithHttpInfo($advertiserId = null, $portalCode = null, $portalName = null, $portalFree = null, $active = null)
    {
        $returnType = '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[]';
        $request = $this->getAdvertiserPublicationCollectionRequest($advertiserId, $portalCode, $portalName, $portalFree, $active);

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
                        '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdvertiserPublicationCollectionAsync
     *
     * Retrieves a collection of AdvertiserPublications
     *
     * @param  string $advertiserId (optional)
     * @param  string $portalCode (optional)
     * @param  string $portalName (optional)
     * @param  bool $portalFree (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserPublicationCollectionAsync($advertiserId = null, $portalCode = null, $portalName = null, $portalFree = null, $active = null)
    {
        return $this->getAdvertiserPublicationCollectionAsyncWithHttpInfo($advertiserId, $portalCode, $portalName, $portalFree, $active)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdvertiserPublicationCollectionAsyncWithHttpInfo
     *
     * Retrieves a collection of AdvertiserPublications
     *
     * @param  string $advertiserId (optional)
     * @param  string $portalCode (optional)
     * @param  string $portalName (optional)
     * @param  bool $portalFree (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserPublicationCollectionAsyncWithHttpInfo($advertiserId = null, $portalCode = null, $portalName = null, $portalFree = null, $active = null)
    {
        $returnType = '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[]';
        $request = $this->getAdvertiserPublicationCollectionRequest($advertiserId, $portalCode, $portalName, $portalFree, $active);

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
     * Create request for operation 'getAdvertiserPublicationCollection'
     *
     * @param  string $advertiserId (optional)
     * @param  string $portalCode (optional)
     * @param  string $portalName (optional)
     * @param  bool $portalFree (optional)
     * @param  bool $active (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdvertiserPublicationCollectionRequest($advertiserId = null, $portalCode = null, $portalName = null, $portalFree = null, $active = null)
    {

        $resourcePath = '/api/advertiser_publications';
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
        if ($portalCode !== null) {
            $queryParams['portal.code'] = ObjectSerializer::toQueryValue($portalCode, null);
        }
        // query params
        if ($portalName !== null) {
            $queryParams['portal.name'] = ObjectSerializer::toQueryValue($portalName, null);
        }
        // query params
        if ($portalFree !== null) {
            $queryParams['portal.free'] = ObjectSerializer::toQueryValue($portalFree, null);
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
     * Operation getAdvertiserPublicationItem
     *
     * Retrieves an AdvertiserPublication
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead
     */
    public function getAdvertiserPublicationItem($id)
    {
        list($response) = $this->getAdvertiserPublicationItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAdvertiserPublicationItemWithHttpInfo
     *
     * Retrieves an AdvertiserPublication
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAdvertiserPublicationItemWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead';
        $request = $this->getAdvertiserPublicationItemRequest($id);

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
                        '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAdvertiserPublicationItemAsync
     *
     * Retrieves an AdvertiserPublication
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserPublicationItemAsync($id)
    {
        return $this->getAdvertiserPublicationItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAdvertiserPublicationItemAsyncWithHttpInfo
     *
     * Retrieves an AdvertiserPublication
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAdvertiserPublicationItemAsyncWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead';
        $request = $this->getAdvertiserPublicationItemRequest($id);

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
     * Create request for operation 'getAdvertiserPublicationItem'
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAdvertiserPublicationItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getAdvertiserPublicationItem'
            );
        }

        $resourcePath = '/api/advertiser_publications/{id}';
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
