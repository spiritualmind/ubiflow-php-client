# Ubiflow\UniverseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUniverseCollection**](UniverseApi.md#getuniversecollection) | **GET** /api/repository/universes | Retrieves a collection of Universes
[**getUniverseItem**](UniverseApi.md#getuniverseitem) | **GET** /api/repository/universes/{code} | Retrieves an Universe

# **getUniverseCollection**
> \Ubiflow\Model\Universe[] getUniverseCollection()

Retrieves a collection of Universes

Retrieves the collection of Universe resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUniverseCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ubiflow\Model\Universe[]**](../Model/Universe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseItem**
> \Ubiflow\Model\Universe getUniverseItem($code)

Retrieves an Universe

Retrieves a Universe resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UniverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Resource identifier

try {
    $result = $apiInstance->getUniverseItem($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\Universe**](../Model/Universe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

