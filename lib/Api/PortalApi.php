<?php
/**
 * PortalApi
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
 * PortalApi Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PortalApi
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
     * Operation getPortalCollection
     *
     * Retrieves a collection of Portals
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  string $code code (optional)
     * @param  string $universeCode universeCode (optional)
     * @param  string $name name (optional)
     * @param  bool $multiPublicationCompatible multiPublicationCompatible (optional)
     * @param  bool $contactManagerCompatible contactManagerCompatible (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\Portal[]
     */
    public function getPortalCollection($page = '1', $code = null, $universeCode = null, $name = null, $multiPublicationCompatible = null, $contactManagerCompatible = null)
    {
        list($response) = $this->getPortalCollectionWithHttpInfo($page, $code, $universeCode, $name, $multiPublicationCompatible, $contactManagerCompatible);
        return $response;
    }

    /**
     * Operation getPortalCollectionWithHttpInfo
     *
     * Retrieves a collection of Portals
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  string $code (optional)
     * @param  string $universeCode (optional)
     * @param  string $name (optional)
     * @param  bool $multiPublicationCompatible (optional)
     * @param  bool $contactManagerCompatible (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\Portal[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPortalCollectionWithHttpInfo($page = '1', $code = null, $universeCode = null, $name = null, $multiPublicationCompatible = null, $contactManagerCompatible = null)
    {
        $returnType = '\Ubiflow\Model\Portal[]';
        $request = $this->getPortalCollectionRequest($page, $code, $universeCode, $name, $multiPublicationCompatible, $contactManagerCompatible);

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
                        '\Ubiflow\Model\Portal[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPortalCollectionAsync
     *
     * Retrieves a collection of Portals
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  string $code (optional)
     * @param  string $universeCode (optional)
     * @param  string $name (optional)
     * @param  bool $multiPublicationCompatible (optional)
     * @param  bool $contactManagerCompatible (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPortalCollectionAsync($page = '1', $code = null, $universeCode = null, $name = null, $multiPublicationCompatible = null, $contactManagerCompatible = null)
    {
        return $this->getPortalCollectionAsyncWithHttpInfo($page, $code, $universeCode, $name, $multiPublicationCompatible, $contactManagerCompatible)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPortalCollectionAsyncWithHttpInfo
     *
     * Retrieves a collection of Portals
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  string $code (optional)
     * @param  string $universeCode (optional)
     * @param  string $name (optional)
     * @param  bool $multiPublicationCompatible (optional)
     * @param  bool $contactManagerCompatible (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPortalCollectionAsyncWithHttpInfo($page = '1', $code = null, $universeCode = null, $name = null, $multiPublicationCompatible = null, $contactManagerCompatible = null)
    {
        $returnType = '\Ubiflow\Model\Portal[]';
        $request = $this->getPortalCollectionRequest($page, $code, $universeCode, $name, $multiPublicationCompatible, $contactManagerCompatible);

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
     * Create request for operation 'getPortalCollection'
     *
     * @param  int $page The collection page number (optional, default to 1)
     * @param  string $code (optional)
     * @param  string $universeCode (optional)
     * @param  string $name (optional)
     * @param  bool $multiPublicationCompatible (optional)
     * @param  bool $contactManagerCompatible (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPortalCollectionRequest($page = '1', $code = null, $universeCode = null, $name = null, $multiPublicationCompatible = null, $contactManagerCompatible = null)
    {

        $resourcePath = '/api/portals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($code !== null) {
            $queryParams['code'] = ObjectSerializer::toQueryValue($code, null);
        }
        // query params
        if ($universeCode !== null) {
            $queryParams['universe.code'] = ObjectSerializer::toQueryValue($universeCode, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($multiPublicationCompatible !== null) {
            $queryParams['multiPublicationCompatible'] = ObjectSerializer::toQueryValue($multiPublicationCompatible, null);
        }
        // query params
        if ($contactManagerCompatible !== null) {
            $queryParams['contactManagerCompatible'] = ObjectSerializer::toQueryValue($contactManagerCompatible, null);
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
     * Operation getPortalItem
     *
     * Retrieves a Portal
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\Portal
     */
    public function getPortalItem($id)
    {
        list($response) = $this->getPortalItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getPortalItemWithHttpInfo
     *
     * Retrieves a Portal
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\Portal, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPortalItemWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\Portal';
        $request = $this->getPortalItemRequest($id);

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
                        '\Ubiflow\Model\Portal',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPortalItemAsync
     *
     * Retrieves a Portal
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPortalItemAsync($id)
    {
        return $this->getPortalItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPortalItemAsyncWithHttpInfo
     *
     * Retrieves a Portal
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPortalItemAsyncWithHttpInfo($id)
    {
        $returnType = '\Ubiflow\Model\Portal';
        $request = $this->getPortalItemRequest($id);

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
     * Create request for operation 'getPortalItem'
     *
     * @param  string $id Resource identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPortalItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getPortalItem'
            );
        }

        $resourcePath = '/api/portals/{id}';
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
