# Ubliflow Classified API
The Classifieds API is organized around REST.

Our API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.

Documentation : [Classified API](https://api-classifieds.ubiflow.net/)

- API version: 1.0.0
- Package version: _See Tags and Releases_

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/spiritualmind/ubliflow-php-client.git"
    }
  ],
  "require": {
    "spiritualmind/ubliflow-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $apiInstance->deleteAdItem($id);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAdItem: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$advertiserId = "advertiserId_example"; // string | 
$advertiserCode = "advertiserCode_example"; // string | 
$reference = "reference_example"; // string | 
$parentAdId = "parentAdId_example"; // string | 
$createdAtBefore = "createdAtBefore_example"; // string | 
$createdAtAfter = "createdAtAfter_example"; // string | 
$updatedAtBefore = "updatedAtBefore_example"; // string | 
$updatedAtAfter = "updatedAtAfter_example"; // string | 
$status = "status_example"; // string | 
$status = array("status_example"); // string[] | 
$transactionCode = "transactionCode_example"; // string | 
$transactionCode = array("transactionCode_example"); // string[] | 
$productTypeCode = "productTypeCode_example"; // string | 
$productTypeCode = array("productTypeCode_example"); // string[] | 
$transactionPriceGte = "transactionPriceGte_example"; // string | 
$transactionPriceLte = "transactionPriceLte_example"; // string | 

try {
    $result = $apiInstance->getAdCollection($page, $advertiserId, $advertiserCode, $reference, $parentAdId, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $status, $status, $transactionCode, $transactionCode, $productTypeCode, $productTypeCode, $transactionPriceGte, $transactionPriceLte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->getAdItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdItem: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The new Ad resource

try {
    $result = $apiInstance->postAdCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->postAdCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Ubiflow\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

$apiInstance = new Ubiflow\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ubiflow\Model\AdAdWrite(); // \Ubiflow\Model\AdAdWrite | The updated Ad resource
$id = "id_example"; // string | Resource identifier

try {
    $result = $apiInstance->putAdItem($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->putAdItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdApi* | [**deleteAdItem**](docs/Api/AdApi.md#deleteaditem) | **DELETE** /api/ads/{id} | Delete an Ad
*AdApi* | [**getAdCollection**](docs/Api/AdApi.md#getadcollection) | **GET** /api/ads | Retrieves a collection of Ads
*AdApi* | [**getAdItem**](docs/Api/AdApi.md#getaditem) | **GET** /api/ads/{id} | Retrieves an Ad
*AdApi* | [**postAdCollection**](docs/Api/AdApi.md#postadcollection) | **POST** /api/ads | Create an Ad
*AdApi* | [**putAdItem**](docs/Api/AdApi.md#putaditem) | **PUT** /api/ads/{id} | Update an Ad
*AdPublicationApi* | [**getAdPublicationCollection**](docs/Api/AdPublicationApi.md#getadpublicationcollection) | **GET** /api/ad_publications | Retrieves a collection of AdPublications
*AdPublicationApi* | [**getAdPublicationItem**](docs/Api/AdPublicationApi.md#getadpublicationitem) | **GET** /api/ad_publications/{id} | Retrieves an AdPublication
*AdPublicationApi* | [**putAdPublicationItem**](docs/Api/AdPublicationApi.md#putadpublicationitem) | **PUT** /api/ad_publications/{id} | Update an AdPublication
*AdPublicationItemsApi* | [**getAdPublicationItemsItem**](docs/Api/AdPublicationItemsApi.md#getadpublicationitemsitem) | **GET** /api/ad_publication_items/{adId} | Retrieves a collection of AdPublication resources for a same Ad
*AdPublicationItemsApi* | [**putAdPublicationItemsItem**](docs/Api/AdPublicationItemsApi.md#putadpublicationitemsitem) | **PUT** /api/ad_publication_items/{adId} | Updates a collection of AdPublication resources for a same Ad
*AdvertiserApi* | [**getAdvertiserCollection**](docs/Api/AdvertiserApi.md#getadvertisercollection) | **GET** /api/advertisers | Retrieves a collection of Advertisers
*AdvertiserApi* | [**getAdvertiserItem**](docs/Api/AdvertiserApi.md#getadvertiseritem) | **GET** /api/advertisers/{id} | Retrieves an Advertiser
*AdvertiserEmissionApi* | [**getAdvertiserEmissionCollection**](docs/Api/AdvertiserEmissionApi.md#getadvertiseremissioncollection) | **GET** /api/advertiser_emissions | Retrieves a collection of AdvertiserEmissions
*AdvertiserEmissionApi* | [**getAdvertiserEmissionItem**](docs/Api/AdvertiserEmissionApi.md#getadvertiseremissionitem) | **GET** /api/advertiser_emissions/{id} | Retrieves an AdvertiserEmission
*AdvertiserEmissionReportApi* | [**getAdvertiserEmissionReportCollection**](docs/Api/AdvertiserEmissionReportApi.md#getadvertiseremissionreportcollection) | **GET** /api/advertiser_emission_reports | Retrieves a collection of AdvertiserEmissionReports
*AdvertiserEmissionReportMessageApi* | [**getAdvertiserEmissionReportMessageCollection**](docs/Api/AdvertiserEmissionReportMessageApi.md#getadvertiseremissionreportmessagecollection) | **GET** /api/advertiser_emission_report_messages | Retrieves a collection of AdvertiserEmissionsReportMessages
*AdvertiserPublicationApi* | [**getAdvertiserPublicationCollection**](docs/Api/AdvertiserPublicationApi.md#getadvertiserpublicationcollection) | **GET** /api/advertiser_publications | Retrieves a collection of AdvertiserPublications
*AdvertiserPublicationApi* | [**getAdvertiserPublicationItem**](docs/Api/AdvertiserPublicationApi.md#getadvertiserpublicationitem) | **GET** /api/advertiser_publications/{id} | Retrieves an AdvertiserPublication
*AdvertiserPublicationReportApi* | [**getAdvertiserPublicationReportCollection**](docs/Api/AdvertiserPublicationReportApi.md#getadvertiserpublicationreportcollection) | **GET** /api/advertiser_publication_reports | Retrieves a collection of AdvertiserPublicationReports
*AdvertiserPublicationReportMessageApi* | [**getAdvertiserPublicationReportMessageCollection**](docs/Api/AdvertiserPublicationReportMessageApi.md#getadvertiserpublicationreportmessagecollection) | **GET** /api/advertiser_publication_report_messages | Retrieves a collection of AdvertiserPublicationReportMessages
*CallTrackingApi* | [**getCallTrackingCollection**](docs/Api/CallTrackingApi.md#getcalltrackingcollection) | **GET** /api/call_trackings | Retrieves a collection of call tracking
*IssuerApi* | [**getIssuerCollection**](docs/Api/IssuerApi.md#getissuercollection) | **GET** /api/issuers | Retrieves a collection of Issuers
*IssuerApi* | [**getIssuerItem**](docs/Api/IssuerApi.md#getissueritem) | **GET** /api/issuers/{id} | Retrieves an Issuer
*MailTrackingContactApi* | [**getMailTrackingContactCollection**](docs/Api/MailTrackingContactApi.md#getmailtrackingcontactcollection) | **GET** /api/mail_tracking_contacts | Retrieves a collection of MailTrackingContacts
*MailTrackingContactApi* | [**getMailTrackingContactItem**](docs/Api/MailTrackingContactApi.md#getmailtrackingcontactitem) | **GET** /api/mail_tracking_contacts/{id} | Retrieves a MailTrackingContact
*NetworkApi* | [**getNetworkCollection**](docs/Api/NetworkApi.md#getnetworkcollection) | **GET** /api/networks | Retrieves a collection of Networks
*NetworkApi* | [**getNetworkItem**](docs/Api/NetworkApi.md#getnetworkitem) | **GET** /api/networks/{id} | Retrieves a Network
*PortalApi* | [**getPortalCollection**](docs/Api/PortalApi.md#getportalcollection) | **GET** /api/portals | Retrieves a collection of Portals
*PortalApi* | [**getPortalItem**](docs/Api/PortalApi.md#getportalitem) | **GET** /api/portals/{id} | Retrieves a Portal
*ProductTypeApi* | [**getProductTypeCollection**](docs/Api/ProductTypeApi.md#getproducttypecollection) | **GET** /api/repository/product_types | Retrieves a collection of ProductTypes
*ProductTypeApi* | [**getProductTypeItem**](docs/Api/ProductTypeApi.md#getproducttypeitem) | **GET** /api/repository/product_types/{code} | Retrieves a ProductType
*ProfessionApi* | [**getProfessionCollection**](docs/Api/ProfessionApi.md#getprofessioncollection) | **GET** /api/repository/professions | Retrieves a collection of Professions
*ProfessionApi* | [**getProfessionItem**](docs/Api/ProfessionApi.md#getprofessionitem) | **GET** /api/repository/professions/{code} | Retrieves a Profession
*UniverseApi* | [**getUniverseCollection**](docs/Api/UniverseApi.md#getuniversecollection) | **GET** /api/repository/universes | Retrieves a collection of Universes
*UniverseApi* | [**getUniverseItem**](docs/Api/UniverseApi.md#getuniverseitem) | **GET** /api/repository/universes/{code} | Retrieves an Universe
*UserApi* | [**deleteUserItem**](docs/Api/UserApi.md#deleteuseritem) | **DELETE** /api/users/{id} | Delete an User
*UserApi* | [**getUserCollection**](docs/Api/UserApi.md#getusercollection) | **GET** /api/users | Retrieves a collection of Users
*UserApi* | [**getUserItem**](docs/Api/UserApi.md#getuseritem) | **GET** /api/users/{id} | Retrieves an User
*UserApi* | [**postUserCollection**](docs/Api/UserApi.md#postusercollection) | **POST** /api/users | Create an User
*UserApi* | [**putUserItem**](docs/Api/UserApi.md#putuseritem) | **PUT** /api/users/{id} | Update an User

## Documentation For Models

 - [AdAdPublicationRead](docs/Model/AdAdPublicationRead.md)
 - [AdAdRead](docs/Model/AdAdRead.md)
 - [AdAdWrite](docs/Model/AdAdWrite.md)
 - [AdDataAdRead](docs/Model/AdDataAdRead.md)
 - [AdDataAdWrite](docs/Model/AdDataAdWrite.md)
 - [AdDataJsonldAdRead](docs/Model/AdDataJsonldAdRead.md)
 - [AdDataJsonldAdWrite](docs/Model/AdDataJsonldAdWrite.md)
 - [AdFeedReportMessageRead](docs/Model/AdFeedReportMessageRead.md)
 - [AdJsonldAdPublicationRead](docs/Model/AdJsonldAdPublicationRead.md)
 - [AdJsonldAdRead](docs/Model/AdJsonldAdRead.md)
 - [AdJsonldAdWrite](docs/Model/AdJsonldAdWrite.md)
 - [AdJsonldFeedReportMessageRead](docs/Model/AdJsonldFeedReportMessageRead.md)
 - [AdJsonldMailTrackingContactRead](docs/Model/AdJsonldMailTrackingContactRead.md)
 - [AdMailTrackingContactRead](docs/Model/AdMailTrackingContactRead.md)
 - [AdPublicationAdPublicationRead](docs/Model/AdPublicationAdPublicationRead.md)
 - [AdPublicationAdPublicationWrite](docs/Model/AdPublicationAdPublicationWrite.md)
 - [AdPublicationAdPublicationsRead](docs/Model/AdPublicationAdPublicationsRead.md)
 - [AdPublicationAdPublicationsWrite](docs/Model/AdPublicationAdPublicationsWrite.md)
 - [AdPublicationAdWrite](docs/Model/AdPublicationAdWrite.md)
 - [AdPublicationIncompatibilityAdPublicationRead](docs/Model/AdPublicationIncompatibilityAdPublicationRead.md)
 - [AdPublicationIncompatibilityAdPublicationsRead](docs/Model/AdPublicationIncompatibilityAdPublicationsRead.md)
 - [AdPublicationIncompatibilityJsonldAdPublicationRead](docs/Model/AdPublicationIncompatibilityJsonldAdPublicationRead.md)
 - [AdPublicationIncompatibilityJsonldAdPublicationsRead](docs/Model/AdPublicationIncompatibilityJsonldAdPublicationsRead.md)
 - [AdPublicationItemsAdPublicationsRead](docs/Model/AdPublicationItemsAdPublicationsRead.md)
 - [AdPublicationItemsAdPublicationsWrite](docs/Model/AdPublicationItemsAdPublicationsWrite.md)
 - [AdPublicationItemsAdWrite](docs/Model/AdPublicationItemsAdWrite.md)
 - [AdPublicationItemsJsonldAdPublicationsRead](docs/Model/AdPublicationItemsJsonldAdPublicationsRead.md)
 - [AdPublicationItemsJsonldAdPublicationsWrite](docs/Model/AdPublicationItemsJsonldAdPublicationsWrite.md)
 - [AdPublicationItemsJsonldAdWrite](docs/Model/AdPublicationItemsJsonldAdWrite.md)
 - [AdPublicationJsonldAdPublicationRead](docs/Model/AdPublicationJsonldAdPublicationRead.md)
 - [AdPublicationJsonldAdPublicationWrite](docs/Model/AdPublicationJsonldAdPublicationWrite.md)
 - [AdPublicationJsonldAdPublicationsRead](docs/Model/AdPublicationJsonldAdPublicationsRead.md)
 - [AdPublicationJsonldAdPublicationsWrite](docs/Model/AdPublicationJsonldAdPublicationsWrite.md)
 - [AdPublicationJsonldAdWrite](docs/Model/AdPublicationJsonldAdWrite.md)
 - [AdSourceAdRead](docs/Model/AdSourceAdRead.md)
 - [AdSourceAdWrite](docs/Model/AdSourceAdWrite.md)
 - [AdSourceJsonldAdRead](docs/Model/AdSourceJsonldAdRead.md)
 - [AdSourceJsonldAdWrite](docs/Model/AdSourceJsonldAdWrite.md)
 - [Advertiser](docs/Model/Advertiser.md)
 - [AdvertiserAdPublicationRead](docs/Model/AdvertiserAdPublicationRead.md)
 - [AdvertiserAdRead](docs/Model/AdvertiserAdRead.md)
 - [AdvertiserAdWrite](docs/Model/AdvertiserAdWrite.md)
 - [AdvertiserAdvertiserPublicationRead](docs/Model/AdvertiserAdvertiserPublicationRead.md)
 - [AdvertiserEmissionAdvertiserEmissionRead](docs/Model/AdvertiserEmissionAdvertiserEmissionRead.md)
 - [AdvertiserEmissionFeedReportRead](docs/Model/AdvertiserEmissionFeedReportRead.md)
 - [AdvertiserEmissionJsonldAdvertiserEmissionRead](docs/Model/AdvertiserEmissionJsonldAdvertiserEmissionRead.md)
 - [AdvertiserEmissionJsonldFeedReportRead](docs/Model/AdvertiserEmissionJsonldFeedReportRead.md)
 - [AdvertiserEmissionReportFeedReportRead](docs/Model/AdvertiserEmissionReportFeedReportRead.md)
 - [AdvertiserEmissionReportJsonldFeedReportRead](docs/Model/AdvertiserEmissionReportJsonldFeedReportRead.md)
 - [AdvertiserEmissionReportMessageFeedReportMessageRead](docs/Model/AdvertiserEmissionReportMessageFeedReportMessageRead.md)
 - [AdvertiserEmissionReportMessageJsonldFeedReportMessageRead](docs/Model/AdvertiserEmissionReportMessageJsonldFeedReportMessageRead.md)
 - [AdvertiserJsonld](docs/Model/AdvertiserJsonld.md)
 - [AdvertiserJsonldAdPublicationRead](docs/Model/AdvertiserJsonldAdPublicationRead.md)
 - [AdvertiserJsonldAdRead](docs/Model/AdvertiserJsonldAdRead.md)
 - [AdvertiserJsonldAdWrite](docs/Model/AdvertiserJsonldAdWrite.md)
 - [AdvertiserJsonldAdvertiserPublicationRead](docs/Model/AdvertiserJsonldAdvertiserPublicationRead.md)
 - [AdvertiserPublicationAdPublicationRead](docs/Model/AdvertiserPublicationAdPublicationRead.md)
 - [AdvertiserPublicationAdPublicationsRead](docs/Model/AdvertiserPublicationAdPublicationsRead.md)
 - [AdvertiserPublicationAdPublicationsWrite](docs/Model/AdvertiserPublicationAdPublicationsWrite.md)
 - [AdvertiserPublicationAdWrite](docs/Model/AdvertiserPublicationAdWrite.md)
 - [AdvertiserPublicationAdvertiserPublicationRead](docs/Model/AdvertiserPublicationAdvertiserPublicationRead.md)
 - [AdvertiserPublicationFeedReportRead](docs/Model/AdvertiserPublicationFeedReportRead.md)
 - [AdvertiserPublicationJsonldAdPublicationRead](docs/Model/AdvertiserPublicationJsonldAdPublicationRead.md)
 - [AdvertiserPublicationJsonldAdPublicationsRead](docs/Model/AdvertiserPublicationJsonldAdPublicationsRead.md)
 - [AdvertiserPublicationJsonldAdPublicationsWrite](docs/Model/AdvertiserPublicationJsonldAdPublicationsWrite.md)
 - [AdvertiserPublicationJsonldAdWrite](docs/Model/AdvertiserPublicationJsonldAdWrite.md)
 - [AdvertiserPublicationJsonldAdvertiserPublicationRead](docs/Model/AdvertiserPublicationJsonldAdvertiserPublicationRead.md)
 - [AdvertiserPublicationJsonldFeedReportRead](docs/Model/AdvertiserPublicationJsonldFeedReportRead.md)
 - [AdvertiserPublicationReportFeedReportRead](docs/Model/AdvertiserPublicationReportFeedReportRead.md)
 - [AdvertiserPublicationReportJsonldFeedReportRead](docs/Model/AdvertiserPublicationReportJsonldFeedReportRead.md)
 - [AdvertiserPublicationReportMessageFeedReportMessageRead](docs/Model/AdvertiserPublicationReportMessageFeedReportMessageRead.md)
 - [AdvertiserPublicationReportMessageJsonldFeedReportMessageRead](docs/Model/AdvertiserPublicationReportMessageJsonldFeedReportMessageRead.md)
 - [AnyOfAdAdWriteAdPublications](docs/Model/AnyOfAdAdWriteAdPublications.md)
 - [AnyOfAdJsonldAdWriteAdPublications](docs/Model/AnyOfAdJsonldAdWriteAdPublications.md)
 - [AnyOfAdvertiserEmissionReportMessageFeedReportMessageReadAd](docs/Model/AnyOfAdvertiserEmissionReportMessageFeedReportMessageReadAd.md)
 - [AnyOfAdvertiserEmissionReportMessageFeedReportMessageReadFeedReport](docs/Model/AnyOfAdvertiserEmissionReportMessageFeedReportMessageReadFeedReport.md)
 - [AnyOfAdvertiserEmissionReportMessageJsonldFeedReportMessageReadAd](docs/Model/AnyOfAdvertiserEmissionReportMessageJsonldFeedReportMessageReadAd.md)
 - [AnyOfAdvertiserEmissionReportMessageJsonldFeedReportMessageReadFeedReport](docs/Model/AnyOfAdvertiserEmissionReportMessageJsonldFeedReportMessageReadFeedReport.md)
 - [AnyOfAdvertiserPublicationReportMessageFeedReportMessageReadAd](docs/Model/AnyOfAdvertiserPublicationReportMessageFeedReportMessageReadAd.md)
 - [AnyOfAdvertiserPublicationReportMessageFeedReportMessageReadFeedReport](docs/Model/AnyOfAdvertiserPublicationReportMessageFeedReportMessageReadFeedReport.md)
 - [AnyOfAdvertiserPublicationReportMessageJsonldFeedReportMessageReadAd](docs/Model/AnyOfAdvertiserPublicationReportMessageJsonldFeedReportMessageReadAd.md)
 - [AnyOfAdvertiserPublicationReportMessageJsonldFeedReportMessageReadFeedReport](docs/Model/AnyOfAdvertiserPublicationReportMessageJsonldFeedReportMessageReadFeedReport.md)
 - [CallTrackingCallTrackingRead](docs/Model/CallTrackingCallTrackingRead.md)
 - [CallTrackingJsonldCallTrackingRead](docs/Model/CallTrackingJsonldCallTrackingRead.md)
 - [ContactInformationJsonldMailTrackingContactRead](docs/Model/ContactInformationJsonldMailTrackingContactRead.md)
 - [ContactInformationMailTrackingContactRead](docs/Model/ContactInformationMailTrackingContactRead.md)
 - [DocumentAdRead](docs/Model/DocumentAdRead.md)
 - [DocumentAdWrite](docs/Model/DocumentAdWrite.md)
 - [DocumentJsonldAdRead](docs/Model/DocumentJsonldAdRead.md)
 - [DocumentJsonldAdWrite](docs/Model/DocumentJsonldAdWrite.md)
 - [FeedReportFeedReportMessageRead](docs/Model/FeedReportFeedReportMessageRead.md)
 - [FeedReportJsonldFeedReportMessageRead](docs/Model/FeedReportJsonldFeedReportMessageRead.md)
 - [FeedReportResultsFeedReportRead](docs/Model/FeedReportResultsFeedReportRead.md)
 - [FeedReportResultsJsonldFeedReportRead](docs/Model/FeedReportResultsJsonldFeedReportRead.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse200Hydrasearch](docs/Model/InlineResponse200Hydrasearch.md)
 - [InlineResponse200HydrasearchHydramapping](docs/Model/InlineResponse200HydrasearchHydramapping.md)
 - [InlineResponse200Hydraview](docs/Model/InlineResponse200Hydraview.md)
 - [Issuer](docs/Model/Issuer.md)
 - [IssuerAdvertiserEmissionRead](docs/Model/IssuerAdvertiserEmissionRead.md)
 - [IssuerJsonld](docs/Model/IssuerJsonld.md)
 - [IssuerJsonldAdvertiserEmissionRead](docs/Model/IssuerJsonldAdvertiserEmissionRead.md)
 - [Language](docs/Model/Language.md)
 - [LanguageJsonld](docs/Model/LanguageJsonld.md)
 - [MailTrackingContactJsonldMailTrackingContactRead](docs/Model/MailTrackingContactJsonldMailTrackingContactRead.md)
 - [MailTrackingContactMailTrackingContactRead](docs/Model/MailTrackingContactMailTrackingContactRead.md)
 - [MediaSupportsAdRead](docs/Model/MediaSupportsAdRead.md)
 - [MediaSupportsAdWrite](docs/Model/MediaSupportsAdWrite.md)
 - [MediaSupportsJsonldAdRead](docs/Model/MediaSupportsJsonldAdRead.md)
 - [MediaSupportsJsonldAdWrite](docs/Model/MediaSupportsJsonldAdWrite.md)
 - [Network](docs/Model/Network.md)
 - [NetworkJsonld](docs/Model/NetworkJsonld.md)
 - [OneOfAdDataJsonldAdReadContext](docs/Model/OneOfAdDataJsonldAdReadContext.md)
 - [OneOfAdDataJsonldAdWriteContext](docs/Model/OneOfAdDataJsonldAdWriteContext.md)
 - [OneOfAdJsonldAdPublicationReadContext](docs/Model/OneOfAdJsonldAdPublicationReadContext.md)
 - [OneOfAdJsonldAdReadContext](docs/Model/OneOfAdJsonldAdReadContext.md)
 - [OneOfAdJsonldAdWriteContext](docs/Model/OneOfAdJsonldAdWriteContext.md)
 - [OneOfAdJsonldFeedReportMessageReadContext](docs/Model/OneOfAdJsonldFeedReportMessageReadContext.md)
 - [OneOfAdJsonldMailTrackingContactReadContext](docs/Model/OneOfAdJsonldMailTrackingContactReadContext.md)
 - [OneOfAdPublicationIncompatibilityJsonldAdPublicationReadContext](docs/Model/OneOfAdPublicationIncompatibilityJsonldAdPublicationReadContext.md)
 - [OneOfAdPublicationIncompatibilityJsonldAdPublicationsReadContext](docs/Model/OneOfAdPublicationIncompatibilityJsonldAdPublicationsReadContext.md)
 - [OneOfAdPublicationItemsJsonldAdPublicationsReadContext](docs/Model/OneOfAdPublicationItemsJsonldAdPublicationsReadContext.md)
 - [OneOfAdPublicationItemsJsonldAdPublicationsWriteContext](docs/Model/OneOfAdPublicationItemsJsonldAdPublicationsWriteContext.md)
 - [OneOfAdPublicationItemsJsonldAdWriteContext](docs/Model/OneOfAdPublicationItemsJsonldAdWriteContext.md)
 - [OneOfAdPublicationJsonldAdPublicationReadContext](docs/Model/OneOfAdPublicationJsonldAdPublicationReadContext.md)
 - [OneOfAdPublicationJsonldAdPublicationWriteContext](docs/Model/OneOfAdPublicationJsonldAdPublicationWriteContext.md)
 - [OneOfAdPublicationJsonldAdPublicationsReadContext](docs/Model/OneOfAdPublicationJsonldAdPublicationsReadContext.md)
 - [OneOfAdPublicationJsonldAdPublicationsWriteContext](docs/Model/OneOfAdPublicationJsonldAdPublicationsWriteContext.md)
 - [OneOfAdPublicationJsonldAdWriteContext](docs/Model/OneOfAdPublicationJsonldAdWriteContext.md)
 - [OneOfAdSourceJsonldAdReadContext](docs/Model/OneOfAdSourceJsonldAdReadContext.md)
 - [OneOfAdSourceJsonldAdWriteContext](docs/Model/OneOfAdSourceJsonldAdWriteContext.md)
 - [OneOfAdvertiserEmissionJsonldAdvertiserEmissionReadContext](docs/Model/OneOfAdvertiserEmissionJsonldAdvertiserEmissionReadContext.md)
 - [OneOfAdvertiserEmissionJsonldFeedReportReadContext](docs/Model/OneOfAdvertiserEmissionJsonldFeedReportReadContext.md)
 - [OneOfAdvertiserJsonldAdPublicationReadContext](docs/Model/OneOfAdvertiserJsonldAdPublicationReadContext.md)
 - [OneOfAdvertiserJsonldAdReadContext](docs/Model/OneOfAdvertiserJsonldAdReadContext.md)
 - [OneOfAdvertiserJsonldAdWriteContext](docs/Model/OneOfAdvertiserJsonldAdWriteContext.md)
 - [OneOfAdvertiserJsonldAdvertiserPublicationReadContext](docs/Model/OneOfAdvertiserJsonldAdvertiserPublicationReadContext.md)
 - [OneOfAdvertiserJsonldContext](docs/Model/OneOfAdvertiserJsonldContext.md)
 - [OneOfAdvertiserPublicationJsonldAdPublicationReadContext](docs/Model/OneOfAdvertiserPublicationJsonldAdPublicationReadContext.md)
 - [OneOfAdvertiserPublicationJsonldAdPublicationsReadContext](docs/Model/OneOfAdvertiserPublicationJsonldAdPublicationsReadContext.md)
 - [OneOfAdvertiserPublicationJsonldAdPublicationsWriteContext](docs/Model/OneOfAdvertiserPublicationJsonldAdPublicationsWriteContext.md)
 - [OneOfAdvertiserPublicationJsonldAdWriteContext](docs/Model/OneOfAdvertiserPublicationJsonldAdWriteContext.md)
 - [OneOfAdvertiserPublicationJsonldAdvertiserPublicationReadContext](docs/Model/OneOfAdvertiserPublicationJsonldAdvertiserPublicationReadContext.md)
 - [OneOfAdvertiserPublicationJsonldFeedReportReadContext](docs/Model/OneOfAdvertiserPublicationJsonldFeedReportReadContext.md)
 - [OneOfContactInformationJsonldMailTrackingContactReadContext](docs/Model/OneOfContactInformationJsonldMailTrackingContactReadContext.md)
 - [OneOfDocumentJsonldAdReadContext](docs/Model/OneOfDocumentJsonldAdReadContext.md)
 - [OneOfDocumentJsonldAdWriteContext](docs/Model/OneOfDocumentJsonldAdWriteContext.md)
 - [OneOfFeedReportJsonldFeedReportMessageReadContext](docs/Model/OneOfFeedReportJsonldFeedReportMessageReadContext.md)
 - [OneOfFeedReportResultsJsonldFeedReportReadContext](docs/Model/OneOfFeedReportResultsJsonldFeedReportReadContext.md)
 - [OneOfIssuerJsonldAdvertiserEmissionReadContext](docs/Model/OneOfIssuerJsonldAdvertiserEmissionReadContext.md)
 - [OneOfIssuerJsonldContext](docs/Model/OneOfIssuerJsonldContext.md)
 - [OneOfLanguageJsonldContext](docs/Model/OneOfLanguageJsonldContext.md)
 - [OneOfMailTrackingContactJsonldMailTrackingContactReadContext](docs/Model/OneOfMailTrackingContactJsonldMailTrackingContactReadContext.md)
 - [OneOfMediaSupportsJsonldAdReadContext](docs/Model/OneOfMediaSupportsJsonldAdReadContext.md)
 - [OneOfMediaSupportsJsonldAdWriteContext](docs/Model/OneOfMediaSupportsJsonldAdWriteContext.md)
 - [OneOfNetworkJsonldContext](docs/Model/OneOfNetworkJsonldContext.md)
 - [OneOfPictureJsonldAdReadContext](docs/Model/OneOfPictureJsonldAdReadContext.md)
 - [OneOfPictureJsonldAdWriteContext](docs/Model/OneOfPictureJsonldAdWriteContext.md)
 - [OneOfPortalJsonldAdPublicationReadContext](docs/Model/OneOfPortalJsonldAdPublicationReadContext.md)
 - [OneOfPortalJsonldAdPublicationsReadContext](docs/Model/OneOfPortalJsonldAdPublicationsReadContext.md)
 - [OneOfPortalJsonldAdPublicationsWriteContext](docs/Model/OneOfPortalJsonldAdPublicationsWriteContext.md)
 - [OneOfPortalJsonldAdWriteContext](docs/Model/OneOfPortalJsonldAdWriteContext.md)
 - [OneOfPortalJsonldAdvertiserPublicationReadContext](docs/Model/OneOfPortalJsonldAdvertiserPublicationReadContext.md)
 - [OneOfPortalJsonldContext](docs/Model/OneOfPortalJsonldContext.md)
 - [OneOfPortalJsonldMailTrackingContactReadContext](docs/Model/OneOfPortalJsonldMailTrackingContactReadContext.md)
 - [OneOfPostalAddressJsonldMailTrackingContactReadContext](docs/Model/OneOfPostalAddressJsonldMailTrackingContactReadContext.md)
 - [OneOfProductTypeJsonldAdReadContext](docs/Model/OneOfProductTypeJsonldAdReadContext.md)
 - [OneOfProductTypeJsonldAdWriteContext](docs/Model/OneOfProductTypeJsonldAdWriteContext.md)
 - [OneOfProductTypeJsonldContext](docs/Model/OneOfProductTypeJsonldContext.md)
 - [OneOfProfessionJsonldContext](docs/Model/OneOfProfessionJsonldContext.md)
 - [OneOfRelatedAdJsonldAdReadContext](docs/Model/OneOfRelatedAdJsonldAdReadContext.md)
 - [OneOfRelatedAdJsonldAdWriteContext](docs/Model/OneOfRelatedAdJsonldAdWriteContext.md)
 - [OneOfTransactionJsonldAdReadContext](docs/Model/OneOfTransactionJsonldAdReadContext.md)
 - [OneOfTransactionJsonldAdWriteContext](docs/Model/OneOfTransactionJsonldAdWriteContext.md)
 - [OneOfUniverseJsonldContext](docs/Model/OneOfUniverseJsonldContext.md)
 - [OneOfUserJsonldContext](docs/Model/OneOfUserJsonldContext.md)
 - [PictureAdRead](docs/Model/PictureAdRead.md)
 - [PictureAdWrite](docs/Model/PictureAdWrite.md)
 - [PictureJsonldAdRead](docs/Model/PictureJsonldAdRead.md)
 - [PictureJsonldAdWrite](docs/Model/PictureJsonldAdWrite.md)
 - [Portal](docs/Model/Portal.md)
 - [PortalAdPublicationRead](docs/Model/PortalAdPublicationRead.md)
 - [PortalAdPublicationsRead](docs/Model/PortalAdPublicationsRead.md)
 - [PortalAdPublicationsWrite](docs/Model/PortalAdPublicationsWrite.md)
 - [PortalAdWrite](docs/Model/PortalAdWrite.md)
 - [PortalAdvertiserPublicationRead](docs/Model/PortalAdvertiserPublicationRead.md)
 - [PortalJsonld](docs/Model/PortalJsonld.md)
 - [PortalJsonldAdPublicationRead](docs/Model/PortalJsonldAdPublicationRead.md)
 - [PortalJsonldAdPublicationsRead](docs/Model/PortalJsonldAdPublicationsRead.md)
 - [PortalJsonldAdPublicationsWrite](docs/Model/PortalJsonldAdPublicationsWrite.md)
 - [PortalJsonldAdWrite](docs/Model/PortalJsonldAdWrite.md)
 - [PortalJsonldAdvertiserPublicationRead](docs/Model/PortalJsonldAdvertiserPublicationRead.md)
 - [PortalJsonldMailTrackingContactRead](docs/Model/PortalJsonldMailTrackingContactRead.md)
 - [PortalMailTrackingContactRead](docs/Model/PortalMailTrackingContactRead.md)
 - [PostalAddressJsonldMailTrackingContactRead](docs/Model/PostalAddressJsonldMailTrackingContactRead.md)
 - [PostalAddressMailTrackingContactRead](docs/Model/PostalAddressMailTrackingContactRead.md)
 - [ProductType](docs/Model/ProductType.md)
 - [ProductTypeAdRead](docs/Model/ProductTypeAdRead.md)
 - [ProductTypeAdWrite](docs/Model/ProductTypeAdWrite.md)
 - [ProductTypeJsonld](docs/Model/ProductTypeJsonld.md)
 - [ProductTypeJsonldAdRead](docs/Model/ProductTypeJsonldAdRead.md)
 - [ProductTypeJsonldAdWrite](docs/Model/ProductTypeJsonldAdWrite.md)
 - [Profession](docs/Model/Profession.md)
 - [ProfessionJsonld](docs/Model/ProfessionJsonld.md)
 - [RelatedAdAdRead](docs/Model/RelatedAdAdRead.md)
 - [RelatedAdAdWrite](docs/Model/RelatedAdAdWrite.md)
 - [RelatedAdJsonldAdRead](docs/Model/RelatedAdJsonldAdRead.md)
 - [RelatedAdJsonldAdWrite](docs/Model/RelatedAdJsonldAdWrite.md)
 - [TransactionAdRead](docs/Model/TransactionAdRead.md)
 - [TransactionAdWrite](docs/Model/TransactionAdWrite.md)
 - [TransactionJsonldAdRead](docs/Model/TransactionJsonldAdRead.md)
 - [TransactionJsonldAdWrite](docs/Model/TransactionJsonldAdWrite.md)
 - [Universe](docs/Model/Universe.md)
 - [UniverseJsonld](docs/Model/UniverseJsonld.md)
 - [User](docs/Model/User.md)
 - [UserJsonld](docs/Model/UserJsonld.md)

## Documentation For Authorization

Please ask your Ubliflow account manager for your API key

## apiKey

- **Type**: API key
- **API key parameter name**: X-AUTH-TOKEN
- **Location**: HTTP header


## Author
- @Ubiflow
- @SwaggerCodeGen
- @Spiritualmind



