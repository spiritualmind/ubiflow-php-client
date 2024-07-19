<?php
/**
 * CallTrackingApi
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
 * CallTrackingApi Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallTrackingApi
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
     * Operation getCallTrackingCollection
     *
     * Retrieves a collection of call tracking
     *
     * @param  string $advertiserLogin advertiserLogin (optional)
     * @param  string $portalName portalName (optional)
     * @param  string $createdAtBefore createdAtBefore (optional)
     * @param  string $createdAtAfter createdAtAfter (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ubiflow\Model\CallTrackingCallTrackingRead[]
     */
    public function getCallTrackingCollection($advertiserLogin = null, $portalName = null, $createdAtBefore = null, $createdAtAfter = null)
    {
        list($response) = $this->getCallTrackingCollectionWithHttpInfo($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter);
        return $response;
    }

    /**
     * Operation getCallTrackingCollectionWithHttpInfo
     *
     * Retrieves a collection of call tracking
     *
     * @param  string $advertiserLogin (optional)
     * @param  string $portalName (optional)
     * @param  string $createdAtBefore (optional)
     * @param  string $createdAtAfter (optional)
     *
     * @throws \Ubiflow\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ubiflow\Model\CallTrackingCallTrackingRead[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCallTrackingCollectionWithHttpInfo($advertiserLogin = null, $portalName = null, $createdAtBefore = null, $createdAtAfter = null)
    {
        $returnType = '\Ubiflow\Model\CallTrackingCallTrackingRead[]';
        $request = $this->getCallTrackingCollectionRequest($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter);

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
                        '\Ubiflow\Model\CallTrackingCallTrackingRead[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCallTrackingCollectionAsync
     *
     * Retrieves a collection of call tracking
     *
     * @param  string $advertiserLogin (optional)
     * @param  string $portalName (optional)
     * @param  string $createdAtBefore (optional)
     * @param  string $createdAtAfter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallTrackingCollectionAsync($advertiserLogin = null, $portalName = null, $createdAtBefore = null, $createdAtAfter = null)
    {
        return $this->getCallTrackingCollectionAsyncWithHttpInfo($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCallTrackingCollectionAsyncWithHttpInfo
     *
     * Retrieves a collection of call tracking
     *
     * @param  string $advertiserLogin (optional)
     * @param  string $portalName (optional)
     * @param  string $createdAtBefore (optional)
     * @param  string $createdAtAfter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallTrackingCollectionAsyncWithHttpInfo($advertiserLogin = null, $portalName = null, $createdAtBefore = null, $createdAtAfter = null)
    {
        $returnType = '\Ubiflow\Model\CallTrackingCallTrackingRead[]';
        $request = $this->getCallTrackingCollectionRequest($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter);

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
     * Create request for operation 'getCallTrackingCollection'
     *
     * @param  string $advertiserLogin (optional)
     * @param  string $portalName (optional)
     * @param  string $createdAtBefore (optional)
     * @param  string $createdAtAfter (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCallTrackingCollectionRequest($advertiserLogin = null, $portalName = null, $createdAtBefore = null, $createdAtAfter = null)
    {

        $resourcePath = '/api/call_trackings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($advertiserLogin !== null) {
            $queryParams['advertiser.login'] = ObjectSerializer::toQueryValue($advertiserLogin, null);
        }
        // query params
        if ($portalName !== null) {
            $queryParams['portal.name'] = ObjectSerializer::toQueryValue($portalName, null);
        }
        // query params
        if ($createdAtBefore !== null) {
            $queryParams['createdAt[before]'] = ObjectSerializer::toQueryValue($createdAtBefore, null);
        }
        // query params
        if ($createdAtAfter !== null) {
            $queryParams['createdAt[after]'] = ObjectSerializer::toQueryValue($createdAtAfter, null);
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