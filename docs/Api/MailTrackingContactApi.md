# Ubiflow\MailTrackingContactApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMailTrackingContactCollection**](MailTrackingContactApi.md#getmailtrackingcontactcollection) | **GET** /api/mail_tracking_contacts | Retrieves a collection of MailTrackingContacts
[**getMailTrackingContactItem**](MailTrackingContactApi.md#getmailtrackingcontactitem) | **GET** /api/mail_tracking_contacts/{id} | Retrieves a MailTrackingContact

# **getMailTrackingContactCollection**
> \Ubiflow\Model\MailTrackingContactMailTrackingContactRead[] getMailTrackingContactCollection($page, $adAdvertiserId, $adReference, $contactInformationIdentity, $contactInformationEmail, $contactInformationPhone, $createdAtBefore, $createdAtAfter, $sentAtBefore, $sentAtAfter, $portalId, $portalId, $hotLead)

Retrieves a collection of MailTrackingContacts

Retrieves the collection of MailTrackingContact resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\MailTrackingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$adAdvertiserId = "adAdvertiserId_example"; // string | 
$adReference = "adReference_example"; // string | 
$contactInformationIdentity = "contactInformationIdentity_example"; // string | 
$contactInformationEmail = "contactInformationEmail_example"; // string | 
$contactInformationPhone = "contactInformationPhone_example"; // string | 
$createdAtBefore = "createdAtBefore_example"; // string | 
$createdAtAfter = "createdAtAfter_example"; // string | 
$sentAtBefore = "sentAtBefore_example"; // string | 
$sentAtAfter = "sentAtAfter_example"; // string | 
$portalId = "portalId_example"; // string | 
$portalId = array("portalId_example"); // string[] | 
$hotLead = true; // bool | 

try {
    $result = $apiInstance->getMailTrackingContactCollection($page, $adAdvertiserId, $adReference, $contactInformationIdentity, $contactInformationEmail, $contactInformationPhone, $createdAtBefore, $createdAtAfter, $sentAtBefore, $sentAtAfter, $portalId, $portalId, $hotLead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTrackingContactApi->getMailTrackingContactCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **adAdvertiserId** | **string**|  | [optional]
 **adReference** | **string**|  | [optional]
 **contactInformationIdentity** | **string**|  | [optional]
 **contactInformationEmail** | **string**|  | [optional]
 **contactInformationPhone** | **string**|  | [optional]
 **createdAtBefore** | **string**|  | [optional]
 **createdAtAfter** | **string**|  | [optional]
 **sentAtBefore** | **string**|  | [optional]
 **sentAtAfter** | **string**|  | [optional]
 **portalId** | **string**|  | [optional]
 **portalId** | [**string[]**](../Model/string.md)|  | [optional]
 **hotLead** | **bool**|  | [optional]

### Return type

[**\Ubiflow\Model\MailTrackingContactMailTrackingContactRead[]**](../Model/MailTrackingContactMailTrackingContactRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTrackingContactItem**
> \Ubiflow\Model\MailTrackingContactMailTrackingContactRead getMailTrackingContactItem($id)

Retrieves a MailTrackingContact

Retrieves a MailTrackingContact resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\MailTrackingContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getMailTrackingContactItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTrackingContactApi->getMailTrackingContactItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\MailTrackingContactMailTrackingContactRead**](../Model/MailTrackingContactMailTrackingContactRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

