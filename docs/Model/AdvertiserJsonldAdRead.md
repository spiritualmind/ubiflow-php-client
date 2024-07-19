# AdvertiserJsonldAdRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfAdvertiserJsonldAdReadContext**](OneOfAdvertiserJsonldAdReadContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**id** | **int** | The unique identifier for an advertiser, in the Ubiflow IS.  Neither the id nor the code are mandatory when creating or updating an ad. But at least one of the two properties must be set. | [optional] 
**code** | **string** | The unique code for an advertiser, in the Ubiflow IS.  Typically the string \&quot;ag\&quot; followed by 6 or 7 numbers.  Neither the id nor the code are mandatory when creating or updating an ad. But at least one of the two properties must be set. | [optional] 
**universeCode** | **string** | The identifier (code name) of the universe for an advertiser.  The list of all identifiers may be retrieved through the Universe resource. | [optional] 
**professionCode** | **string** | The identifier (code name) of the profession practiced by an advertiser.  The list of all identifiers may be retrieved through the Profession resource. | [optional] 
**profession** | **string** | The profession of the advertiser. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

