# Ubiflow\IssuerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIssuerCollection**](IssuerApi.md#getissuercollection) | **GET** /api/issuers | Retrieves a collection of Issuers
[**getIssuerItem**](IssuerApi.md#getissueritem) | **GET** /api/issuers/{id} | Retrieves an Issuer

# **getIssuerCollection**
> \Ubiflow\Model\Issuer[] getIssuerCollection($page, $code, $universeCode, $name)

Retrieves a collection of Issuers

Retrieves the collection of Issuer resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$code = "code_example"; // string | 
$universeCode = "universeCode_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getIssuerCollection($page, $code, $universeCode, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->getIssuerCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **code** | **string**|  | [optional]
 **universeCode** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\Issuer[]**](../Model/Issuer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIssuerItem**
> \Ubiflow\Model\Issuer getIssuerItem($id)

Retrieves an Issuer

Retrieves a Issuer resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\IssuerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getIssuerItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuerApi->getIssuerItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\Issuer**](../Model/Issuer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

