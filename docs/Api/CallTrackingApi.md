# Ubiflow\CallTrackingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCallTrackingCollection**](CallTrackingApi.md#getcalltrackingcollection) | **GET** /api/call_trackings | Retrieves a collection of call tracking

# **getCallTrackingCollection**
> \Ubiflow\Model\CallTrackingCallTrackingRead[] getCallTrackingCollection($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter)

Retrieves a collection of call tracking

Retrieves the collection of CallTracking resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\CallTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiserLogin = "advertiserLogin_example"; // string | 
$portalName = "portalName_example"; // string | 
$createdAtBefore = "createdAtBefore_example"; // string | 
$createdAtAfter = "createdAtAfter_example"; // string | 

try {
    $result = $apiInstance->getCallTrackingCollection($advertiserLogin, $portalName, $createdAtBefore, $createdAtAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTrackingApi->getCallTrackingCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiserLogin** | **string**|  | [optional]
 **portalName** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\CallTrackingCallTrackingRead[]**](../Model/CallTrackingCallTrackingRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

