# Ubiflow\ProductTypeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductTypeCollection**](ProductTypeApi.md#getproducttypecollection) | **GET** /api/repository/product_types | Retrieves a collection of ProductTypes
[**getProductTypeItem**](ProductTypeApi.md#getproducttypeitem) | **GET** /api/repository/product_types/{code} | Retrieves a ProductType

# **getProductTypeCollection**
> \Ubiflow\Model\ProductType[] getProductTypeCollection($languageCode, $relatedProfessionCode)

Retrieves a collection of ProductTypes

Retrieves the collection of ProductType resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$languageCode = "languageCode_example"; // string | 
$relatedProfessionCode = "relatedProfessionCode_example"; // string | 

try {
    $result = $apiInstance->getProductTypeCollection($languageCode, $relatedProfessionCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **languageCode** | **string**|  | [optional]
 **relatedProfessionCode** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductTypeItem**
> \Ubiflow\Model\ProductType getProductTypeItem($code)

Retrieves a ProductType

Retrieves a ProductType resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\ProductTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Resource identifier

try {
    $result = $apiInstance->getProductTypeItem($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->getProductTypeItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\ProductType**](../Model/ProductType.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

