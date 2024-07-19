# Ubiflow\UserApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserItem**](UserApi.md#deleteuseritem) | **DELETE** /api/users/{id} | Delete an User
[**getUserCollection**](UserApi.md#getusercollection) | **GET** /api/users | Retrieves a collection of Users
[**getUserItem**](UserApi.md#getuseritem) | **GET** /api/users/{id} | Retrieves an User
[**postUserCollection**](UserApi.md#postusercollection) | **POST** /api/users | Create an User
[**putUserItem**](UserApi.md#putuseritem) | **PUT** /api/users/{id} | Update an User

# **deleteUserItem**
> deleteUserItem($id)

Delete an User

Removes the User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $apiInstance->deleteUserItem($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCollection**
> \Ubiflow\Model\User[] getUserCollection($page, $scope, $scope, $codeNameInScope, $codeNameInScope, $orderId, $orderUsername)

Retrieves a collection of Users

Retrieves the collection of User resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$scope = "scope_example"; // string | 
$scope = array("scope_example"); // string[] | 
$codeNameInScope = "codeNameInScope_example"; // string | 
$codeNameInScope = array("codeNameInScope_example"); // string[] | 
$orderId = "orderId_example"; // string | 
$orderUsername = "orderUsername_example"; // string | 

try {
    $result = $apiInstance->getUserCollection($page, $scope, $scope, $codeNameInScope, $codeNameInScope, $orderId, $orderUsername);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]
 **scope** | **string**|  | [optional]
 **scope** | [**string[]**](../Model/string.md)|  | [optional]
 **codeNameInScope** | **string**|  | [optional]
 **codeNameInScope** | [**string[]**](../Model/string.md)|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderUsername** | **string**|  | [optional]

### Return type

[**\Ubiflow\Model\User[]**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserItem**
> \Ubiflow\Model\User getUserItem($id)

Retrieves an User

Retrieves a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserCollection**
> \Ubiflow\Model\User postUserCollection($body)

Create an User

Creates a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\User(); // \Ubiflow\Model\User | The new User resource

try {
    $result = $apiInstance->postUserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\User**](../Model/User.md)| The new User resource |

### Return type

[**\Ubiflow\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserCollection**
> \Ubiflow\Model\User postUserCollection($body)

Create an User

Creates a User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\User(); // \Ubiflow\Model\User | The new User resource

try {
    $result = $apiInstance->postUserCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\User**](../Model/User.md)| The new User resource |

### Return type

[**\Ubiflow\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserItem**
> \Ubiflow\Model\User putUserItem($body, $id)

Update an User

Replaces the User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\User(); // \Ubiflow\Model\User | The updated User resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putUserItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\User**](../Model/User.md)| The updated User resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserItem**
> \Ubiflow\Model\User putUserItem($body, $id)

Update an User

Replaces the User resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\User(); // \Ubiflow\Model\User | The updated User resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putUserItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ubiflow\Model\User**](../Model/User.md)| The updated User resource |
 **id** | **string**| Resource identifier |

### Return type

[**\Ubiflow\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/ld+json, text/html
 - **Accept**: application/json, application/ld+json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

