# Ubiflow\AdApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAdItem**](AdApi.md#deleteaditem) | **DELETE** /api/ads/{id} | Delete an Ad
[**getAdCollection**](AdApi.md#getadcollection) | **GET** /api/ads | Retrieves a collection of Ads
[**getAdItem**](AdApi.md#getaditem) | **GET** /api/ads/{id} | Retrieves an Ad
[**postAdCollection**](AdApi.md#postadcollection) | **POST** /api/ads | Create an Ad
[**putAdItem**](AdApi.md#putaditem) | **PUT** /api/ads/{id} | Update an Ad

# **deleteAdItem**
> deleteAdItem($id)

Delete an Ad

Removes the Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $apiInstance->deleteAdItem($id);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAdItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdCollection**
> \Ubiflow\Model\AdAdRead[] getAdCollection($page, $advertiserId, $advertiserCode, $reference, $parentAdId, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $status, $status, $transactionCode, $transactionCode, $productTypeCode, $productTypeCode, $transactionPriceGte, $transactionPriceLte)

Retrieves a collection of Ads

Retrieves the collection of Ad resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$advertiserId = "advertiserId_example"; // string | 
$advertiserCode = "advertiserCode_example"; // string | 
$reference = "reference_example"; // string | 
$parentAdId = "parentAdId_example"; // string | 
$createdAtBefore = "createdAtBefore_example"; // string | 
$createdAtAfter = "createdAtAfter_example"; // string | 
$updatedAtBefore = "updatedAtBefore_example"; // string | 
$updatedAtAfter = "updatedAtAfter_example"; // string | 
$status = "status_example"; // string | 
$status = array("status_example"); // string[] | 
$transactionCode = "transactionCode_example"; // string | 
$transactionCode = array("transactionCode_example"); // string[] | 
$productTypeCode = "productTypeCode_example"; // string | 
$productTypeCode = array("productTypeCode_example"); // string[] | 
$transactionPriceGte = "transactionPriceGte_example"; // string | 
$transactionPriceLte = "transactionPriceLte_example"; // string | 

try {
    $result = $apiInstance->getAdCollection($page, $advertiserId, $advertiserCode, $reference, $parentAdId, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $status, $status, $transactionCode, $transactionCode, $productTypeCode, $productTypeCode, $transactionPriceGte, $transactionPriceLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **advertiserId** | **string**|  | [optional]
 **advertiserCode** | **string**|  | [optional]
 **reference** | **string**|  | [optional]
 **parentAdId** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **updatedAtBefore** | **string**|  | [optional]
 **updatedAtAfter** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **transactionCode** | **string**|  | [optional]
 **transactionCode** | [**string[]**](../Model/string.md)|  | [optional]
 **productTypeCode** | **string**|  | [optional]
 **productTypeCode** | [**string[]**](../Model/string.md)|  | [optional]
 **transactionPriceGte** | **string**|  | [optional]
 **transactionPriceLte** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\AdAdRead[]**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdItem**
> \Ubiflow\Model\AdAdRead getAdItem($id)

Retrieves an Ad

Retrieves a Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdAdRead**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAdCollection**
> \Ubiflow\Model\AdAdRead postAdCollection($body)

Create an Ad

Creates a Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The new Ad resource

try {
    $result = $apiInstance->postAdCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->postAdCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdAdWrite**](../Model/AdAdWrite.md)| The new Ad resource |

### Return type

[**\Ubiflow\Model\AdAdRead**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAdCollection**
> \Ubiflow\Model\AdAdRead postAdCollection($body)

Create an Ad

Creates a Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The new Ad resource

try {
    $result = $apiInstance->postAdCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->postAdCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdAdWrite**](../Model/AdAdWrite.md)| The new Ad resource |

### Return type

[**\Ubiflow\Model\AdAdRead**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdItem**
> \Ubiflow\Model\AdAdRead putAdItem($body, $id)

Update an Ad

Replaces the Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The updated Ad resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->putAdItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdAdWrite**](../Model/AdAdWrite.md)| The updated Ad resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdAdRead**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdItem**
> \Ubiflow\Model\AdAdRead putAdItem($body, $id)

Update an Ad

Replaces the Ad resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The updated Ad resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->putAdItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdAdWrite**](../Model/AdAdWrite.md)| The updated Ad resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdAdRead**](../Model/AdAdRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

