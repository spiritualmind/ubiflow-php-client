# Ubiflow\AdPublicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdPublicationCollection**](AdPublicationApi.md#getadpublicationcollection) | **GET** /api/ad_publications | Retrieves a collection of AdPublications
[**getAdPublicationItem**](AdPublicationApi.md#getadpublicationitem) | **GET** /api/ad_publications/{id} | Retrieves an AdPublication
[**putAdPublicationItem**](AdPublicationApi.md#putadpublicationitem) | **PUT** /api/ad_publications/{id} | Update an AdPublication

# **getAdPublicationCollection**
> \Ubiflow\Model\AdPublicationAdPublicationRead[] getAdPublicationCollection($adId, $advertiserPublicationPortalId, $advertiserPublicationPortalCode)

Retrieves a collection of AdPublications

Retrieves the collection of AdPublication resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adId = "adId_example"; // string | 
$advertiserPublicationPortalId = "advertiserPublicationPortalId_example"; // string | 
$advertiserPublicationPortalCode = "advertiserPublicationPortalCode_example"; // string | 

try {
    $result = $apiInstance->getAdPublicationCollection($adId, $advertiserPublicationPortalId, $advertiserPublicationPortalCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationApi->getAdPublicationCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adId** | **string**|  | [optional]
 **advertiserPublicationPortalId** | **string**|  | [optional]
 **advertiserPublicationPortalCode** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\AdPublicationAdPublicationRead[]**](../Model/AdPublicationAdPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdPublicationItem**
> \Ubiflow\Model\AdPublicationAdPublicationRead getAdPublicationItem($id)

Retrieves an AdPublication

Retrieves a AdPublication resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdPublicationItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationApi->getAdPublicationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationAdPublicationRead**](../Model/AdPublicationAdPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdPublicationItem**
> \Ubiflow\Model\AdPublicationAdPublicationRead putAdPublicationItem($body, $id)

Update an AdPublication

Replaces the AdPublication resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdPublicationAdPublicationWrite(); // \Ubiflow\Model\AdPublicationAdPublicationWrite | The updated AdPublication resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdPublicationItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationApi->putAdPublicationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdPublicationAdPublicationWrite**](../Model/AdPublicationAdPublicationWrite.md)| The updated AdPublication resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationAdPublicationRead**](../Model/AdPublicationAdPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdPublicationItem**
> \Ubiflow\Model\AdPublicationAdPublicationRead putAdPublicationItem($body, $id)

Update an AdPublication

Replaces the AdPublication resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdPublicationAdPublicationWrite(); // \Ubiflow\Model\AdPublicationAdPublicationWrite | The updated AdPublication resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdPublicationItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationApi->putAdPublicationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdPublicationAdPublicationWrite**](../Model/AdPublicationAdPublicationWrite.md)| The updated AdPublication resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationAdPublicationRead**](../Model/AdPublicationAdPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

