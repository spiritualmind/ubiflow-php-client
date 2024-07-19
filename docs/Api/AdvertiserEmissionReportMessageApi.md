# Ubiflow\AdvertiserEmissionReportMessageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserEmissionReportMessageCollection**](AdvertiserEmissionReportMessageApi.md#getadvertiseremissionreportmessagecollection) | **GET** /api/advertiser_emission_report_messages | Retrieves a collection of AdvertiserEmissionsReportMessages

# **getAdvertiserEmissionReportMessageCollection**
> \Ubiflow\Model\AdvertiserEmissionReportMessageFeedReportMessageRead[] getAdvertiserEmissionReportMessageCollection($page, $feedReportAdvertiserEmissionId, $feedReportAdvertiserEmissionAdvertiserId, $feedReportAdvertiserEmissionIssuerCode, $feedReportId, $orderCreatedAt)

Retrieves a collection of AdvertiserEmissionsReportMessages

Retrieves the collection of AdvertiserEmissionReportMessage resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserEmissionReportMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$feedReportAdvertiserEmissionId = "feedReportAdvertiserEmissionId_example"; // string | 
$feedReportAdvertiserEmissionAdvertiserId = "feedReportAdvertiserEmissionAdvertiserId_example"; // string | 
$feedReportAdvertiserEmissionIssuerCode = "feedReportAdvertiserEmissionIssuerCode_example"; // string | 
$feedReportId = "feedReportId_example"; // string | 
$orderCreatedAt = "orderCreatedAt_example"; // string | 

try {
    $result = $apiInstance->getAdvertiserEmissionReportMessageCollection($page, $feedReportAdvertiserEmissionId, $feedReportAdvertiserEmissionAdvertiserId, $feedReportAdvertiserEmissionIssuerCode, $feedReportId, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserEmissionReportMessageApi->getAdvertiserEmissionReportMessageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **feedReportAdvertiserEmissionId** | **string**|  | [optional]
 **feedReportAdvertiserEmissionAdvertiserId** | **string**|  | [optional]
 **feedReportAdvertiserEmissionIssuerCode** | **string**|  | [optional]
 **feedReportId** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\AdvertiserEmissionReportMessageFeedReportMessageRead[]**](../Model/AdvertiserEmissionReportMessageFeedReportMessageRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

