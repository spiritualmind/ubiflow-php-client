# Ubiflow\AdvertiserPublicationReportApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserPublicationReportCollection**](AdvertiserPublicationReportApi.md#getadvertiserpublicationreportcollection) | **GET** /api/advertiser_publication_reports | Retrieves a collection of AdvertiserPublicationReports

# **getAdvertiserPublicationReportCollection**
> \Ubiflow\Model\AdvertiserPublicationReportFeedReportRead[] getAdvertiserPublicationReportCollection($page, $advertiserPublicationId, $advertiserPublicationAdvertiserId, $advertiserPublicationPortalCode, $id, $orderEndedAt)

Retrieves a collection of AdvertiserPublicationReports

Retrieves the collection of AdvertiserPublicationReport resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserPublicationReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$advertiserPublicationId = "advertiserPublicationId_example"; // string | 
$advertiserPublicationAdvertiserId = "advertiserPublicationAdvertiserId_example"; // string | 
$advertiserPublicationPortalCode = "advertiserPublicationPortalCode_example"; // string | 
$id = "id_example"; // string | 
$orderEndedAt = "orderEndedAt_example"; // string | 

try {
    $result = $apiInstance->getAdvertiserPublicationReportCollection($page, $advertiserPublicationId, $advertiserPublicationAdvertiserId, $advertiserPublicationPortalCode, $id, $orderEndedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserPublicationReportApi->getAdvertiserPublicationReportCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **advertiserPublicationId** | **string**|  | [optional]
 **advertiserPublicationAdvertiserId** | **string**|  | [optional]
 **advertiserPublicationPortalCode** | **string**|  | [optional]
 **id** | **string**|  | [optional]
 **orderEndedAt** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\AdvertiserPublicationReportFeedReportRead[]**](../Model/AdvertiserPublicationReportFeedReportRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

