# Ubiflow\AdvertiserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertiserCollection**](AdvertiserApi.md#getadvertisercollection) | **GET** /api/advertisers | Retrieves a collection of Advertisers
[**getAdvertiserItem**](AdvertiserApi.md#getadvertiseritem) | **GET** /api/advertisers/{id} | Retrieves an Advertiser

# **getAdvertiserCollection**
> \Ubiflow\Model\Advertiser[] getAdvertiserCollection($page, $code, $professionCode, $commercialName, $socialReason, $siret, $email, $phone)

Retrieves a collection of Advertisers

Retrieves the collection of Advertiser resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$code = "code_example"; // string | 
$professionCode = "professionCode_example"; // string | 
$commercialName = "commercialName_example"; // string | 
$socialReason = "socialReason_example"; // string | 
$siret = "siret_example"; // string | 
$email = "email_example"; // string | 
$phone = "phone_example"; // string | 

try {
    $result = $apiInstance->getAdvertiserCollection($page, $code, $professionCode, $commercialName, $socialReason, $siret, $email, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->getAdvertiserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **code** | **string**|  | [optional]
 **professionCode** | **string**|  | [optional]
 **commercialName** | **string**|  | [optional]
 **socialReason** | **string**|  | [optional]
 **siret** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **phone** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\Advertiser[]**](../Model/Advertiser.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvertiserItem**
> \Ubiflow\Model\Advertiser getAdvertiserItem($id)

Retrieves an Advertiser

Retrieves a Advertiser resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdvertiserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->getAdvertiserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\Advertiser**](../Model/Advertiser.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

