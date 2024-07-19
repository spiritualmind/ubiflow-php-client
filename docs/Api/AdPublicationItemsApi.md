# Ubiflow\AdPublicationItemsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdPublicationItemsItem**](AdPublicationItemsApi.md#getadpublicationitemsitem) | **GET** /api/ad_publication_items/{adId} | Retrieves a collection of AdPublication resources for a same Ad
[**putAdPublicationItemsItem**](AdPublicationItemsApi.md#putadpublicationitemsitem) | **PUT** /api/ad_publication_items/{adId} | Updates a collection of AdPublication resources for a same Ad

# **getAdPublicationItemsItem**
> \Ubiflow\Model\AdPublicationItemsAdPublicationsRead getAdPublicationItemsItem($adId)

Retrieves a collection of AdPublication resources for a same Ad

Retrieves a AdPublicationItems resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adId = "adId_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdPublicationItemsItem($adId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationItemsApi->getAdPublicationItemsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adId** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationItemsAdPublicationsRead**](../Model/AdPublicationItemsAdPublicationsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdPublicationItemsItem**
> \Ubiflow\Model\AdPublicationItemsAdPublicationsRead putAdPublicationItemsItem($body, $adId)

Updates a collection of AdPublication resources for a same Ad

Replaces the AdPublicationItems resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite(); // \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite | The updated AdPublicationItems resource
$adId = "adId_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdPublicationItemsItem($body, $adId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationItemsApi->putAdPublicationItemsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdPublicationItemsAdPublicationsWrite**](../Model/AdPublicationItemsAdPublicationsWrite.md)| The updated AdPublicationItems resource |
 **adId** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationItemsAdPublicationsRead**](../Model/AdPublicationItemsAdPublicationsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAdPublicationItemsItem**
> \Ubiflow\Model\AdPublicationItemsAdPublicationsRead putAdPublicationItemsItem($body, $adId)

Updates a collection of AdPublication resources for a same Ad

Replaces the AdPublicationItems resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdPublicationItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite(); // \Ubiflow\Model\AdPublicationItemsAdPublicationsWrite | The updated AdPublicationItems resource
$adId = "adId_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdPublicationItemsItem($body, $adId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdPublicationItemsApi->putAdPublicationItemsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\AdPublicationItemsAdPublicationsWrite**](../Model/AdPublicationItemsAdPublicationsWrite.md)| The updated AdPublicationItems resource |
 **adId** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdPublicationItemsAdPublicationsRead**](../Model/AdPublicationItemsAdPublicationsRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

