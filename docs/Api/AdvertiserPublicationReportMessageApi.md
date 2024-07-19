# Ubiflow\AdvertiserPublicationReportMessageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserPublicationReportMessageCollection**](AdvertiserPublicationReportMessageApi.md#getadvertiserpublicationreportmessagecollection) | **GET** /api/advertiser_publication_report_messages | Retrieves a collection of AdvertiserPublicationReportMessages

# **getAdvertiserPublicationReportMessageCollection**
> \Ubiflow\Model\AdvertiserPublicationReportMessageFeedReportMessageRead[] getAdvertiserPublicationReportMessageCollection($page, $feedReportAdvertiserPublicationId, $feedReportAdvertiserPublicationAdvertiserId, $feedReportAdvertiserPublicationPortalCode, $feedReportId, $orderCreatedAt)

Retrieves a collection of AdvertiserPublicationReportMessages

Retrieves the collection of AdvertiserPublicationReportMessage resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserPublicationReportMessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$feedReportAdvertiserPublicationId = "feedReportAdvertiserPublicationId_example"; // string | 
$feedReportAdvertiserPublicationAdvertiserId = "feedReportAdvertiserPublicationAdvertiserId_example"; // string | 
$feedReportAdvertiserPublicationPortalCode = "feedReportAdvertiserPublicationPortalCode_example"; // string | 
$feedReportId = "feedReportId_example"; // string | 
$orderCreatedAt = "orderCreatedAt_example"; // string | 

try {
    $result = $apiInstance->getAdvertiserPublicationReportMessageCollection($page, $feedReportAdvertiserPublicationId, $feedReportAdvertiserPublicationAdvertiserId, $feedReportAdvertiserPublicationPortalCode, $feedReportId, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserPublicationReportMessageApi->getAdvertiserPublicationReportMessageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **feedReportAdvertiserPublicationId** | **string**|  | [optional]
 **feedReportAdvertiserPublicationAdvertiserId** | **string**|  | [optional]
 **feedReportAdvertiserPublicationPortalCode** | **string**|  | [optional]
 **feedReportId** | **string**|  | [optional]
 **orderCreatedAt** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\AdvertiserPublicationReportMessageFeedReportMessageRead[]**](../Model/AdvertiserPublicationReportMessageFeedReportMessageRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

