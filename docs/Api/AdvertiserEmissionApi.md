# Ubiflow\AdvertiserEmissionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserEmissionCollection**](AdvertiserEmissionApi.md#getadvertiseremissioncollection) | **GET** /api/advertiser_emissions | Retrieves a collection of AdvertiserEmissions
[**getAdvertiserEmissionItem**](AdvertiserEmissionApi.md#getadvertiseremissionitem) | **GET** /api/advertiser_emissions/{id} | Retrieves an AdvertiserEmission

# **getAdvertiserEmissionCollection**
> \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[] getAdvertiserEmissionCollection($advertiserId, $issuerCode, $issuerName, $active)

Retrieves a collection of AdvertiserEmissions

Retrieves the collection of AdvertiserEmission resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserEmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserId = "advertiserId_example"; // string | 
$issuerCode = "issuerCode_example"; // string | 
$issuerName = "issuerName_example"; // string | 
$active = true; // bool | 

try {
    $result = $apiInstance->getAdvertiserEmissionCollection($advertiserId, $issuerCode, $issuerName, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserEmissionApi->getAdvertiserEmissionCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserId** | **string**|  | [optional]
 **issuerCode** | **string**|  | [optional]
 **issuerName** | **string**|  | [optional]
 **active** | **bool**|  | [optional]

### Return type

[**\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead[]**](../Model/AdvertiserEmissionAdvertiserEmissionRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvertiserEmissionItem**
> \Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead getAdvertiserEmissionItem($id)

Retrieves an AdvertiserEmission

Retrieves a AdvertiserEmission resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserEmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdvertiserEmissionItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserEmissionApi->getAdvertiserEmissionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\AdvertiserEmissionAdvertiserEmissionRead**](../Model/AdvertiserEmissionAdvertiserEmissionRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

