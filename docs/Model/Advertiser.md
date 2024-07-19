# Advertiser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier for an advertiser, in the Ubiflow IS.  Neither the id nor the code are mandatory when creating or updating an ad. But at least one of the two properties must be set. | [optional] 
**code** | **string** | The unique code for an advertiser, in the Ubiflow IS.  Typically the string \&quot;ag\&quot; followed by 6 or 7 numbers.  Neither the id nor the code are mandatory when creating or updating an ad. But at least one of the two properties must be set. | [optional] 
**universeCode** | **string** | The identifier (code name) of the universe for an advertiser.  The list of all identifiers may be retrieved through the Universe resource. | [optional] 
**professionCode** | **string** | The identifier (code name) of the profession practiced by an advertiser.  The list of all identifiers may be retrieved through the Profession resource. | [optional] 
**profession** | **string** | The profession of the advertiser. | [optional] 
**commercialName** | **string** | The commercial name. | [optional] 
**socialReason** | **string** | The social reason (company name). | [optional] 
**siret** | **string** | the siret. | [optional] 
**email** | **string** | The email. | [optional] 
**webSite** | **string** | The web site. | [optional] 
**phone** | **string** | The phone. | [optional] 
**address** | **string** | The address. | [optional] 
**zipCode** | **string** | The zip code. | [optional] 
**city** | **string** | The city. | [optional] 
**country** | **string** | The country. | [optional] 
**urlAutomaticConnectionToCustomerSpace** | **string** | The automatic url of connection to the space customer of the advertiser.  By default, this url is visible only for an advertiser. For other types of users, it is visible for users who have asked it to Ubiflow. | [optional] 
**externalServiceCode** | [****](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

