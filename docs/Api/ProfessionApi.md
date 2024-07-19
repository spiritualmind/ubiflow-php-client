# Ubiflow\ProfessionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfessionCollection**](ProfessionApi.md#getprofessioncollection) | **GET** /api/repository/professions | Retrieves a collection of Professions
[**getProfessionItem**](ProfessionApi.md#getprofessionitem) | **GET** /api/repository/professions/{code} | Retrieves a Profession

# **getProfessionCollection**
> \Ubiflow\Model\Profession[] getProfessionCollection()

Retrieves a collection of Professions

Retrieves the collection of Profession resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\ProfessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProfessionCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfessionApi->getProfessionCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ubiflow\Model\Profession[]**](../Model/Profession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfessionItem**
> \Ubiflow\Model\Profession getProfessionItem($code)

Retrieves a Profession

Retrieves a Profession resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\ProfessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Resource identifier

try {
    $result = $apiInstance->getProfessionItem($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfessionApi->getProfessionItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\Profession**](../Model/Profession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

