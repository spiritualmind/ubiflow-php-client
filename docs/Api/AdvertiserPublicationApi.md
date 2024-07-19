# Ubiflow\AdvertiserPublicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserPublicationCollection**](AdvertiserPublicationApi.md#getadvertiserpublicationcollection) | **GET** /api/advertiser_publications | Retrieves a collection of AdvertiserPublications
[**getAdvertiserPublicationItem**](AdvertiserPublicationApi.md#getadvertiserpublicationitem) | **GET** /api/advertiser_publications/{id} | Retrieves an AdvertiserPublication

# **getAdvertiserPublicationCollection**
> \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[] getAdvertiserPublicationCollection($advertiserId, $portalCode, $portalName, $portalFree, $active)

Retrieves a collection of AdvertiserPublications

Retrieves the collection of AdvertiserPublication resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserId = "advertiserId_example"; // string | 
$portalCode = "portalCode_example"; // string | 
$portalName = "portalName_example"; // string | 
$portalFree = true; // bool | 
$active = true; // bool | 

try {
    $result = $apiInstance->getAdvertiserPublicationCollection($advertiserId, $portalCode, $portalName, $portalFree, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserPublicationApi->getAdvertiserPublicationCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserId** | **string**|  | [optional]
 **portalCode** | **string**|  | [optional]
 **portalName** | **string**|  | [optional]
 **portalFree** | **bool**|  | [optional]
 **active** | **bool**|  | [optional]

### Return type

[**\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead[]**](../Model/AdvertiserPublicationAdvertiserPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvertiserPublicationItem**
> \Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead getAdvertiserPublicationItem($id)

Retrieves an AdvertiserPublication

Retrieves a AdvertiserPublication resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserPublicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdvertiserPublicationItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserPublicationApi->getAdvertiserPublicationItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdvertiserPublicationAdvertiserPublicationRead**](../Model/AdvertiserPublicationAdvertiserPublicationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

