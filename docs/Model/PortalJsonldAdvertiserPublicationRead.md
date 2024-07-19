# PortalJsonldAdvertiserPublicationRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfPortalJsonldAdvertiserPublicationReadContext**](OneOfPortalJsonldAdvertiserPublicationReadContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**id** | **int** | The unique identifier of the portal, in the Ubiflow IS. | [optional] 
**code** | **string** | The unique code of the portal, in the Ubiflow IS. | 
**name** | **string** | The name of the portal. | [optional] 
**active** | **bool** | Indicates weather the portal is active. Inactive portals are not used anymore. | [optional] 
**private** | **bool** | Indicates weather the portal is a private portal.  A private portal almost always matches the needs of a specific advertiser to publish ads to a specific portal who only display ads from this advertiser : this is typically used when Ubiflow send ads to a web agency who manages the personal web site of an advertiser.  Private portals should NOT be seen by advertisers other than the specific advertiser for whom this portal has been created. | [optional] 
**free** | **bool** | Indicates weather the portal is free (ie advertisers don&#x27;t pay to publish ads). | [optional] 
**url** | **string** | The url of the main page of the portal. | [optional] 
**logoUrl** | **string** | The url of the portal&#x27;s logo. | [optional] 
**multiPublicationCompatible** | **bool** | Indicates weather ads may be published by Ubiflow on the portal. | [optional] 
**contactManagerCompatible** | **bool** | Indicates weather mail-tracking contacts may be managed by Ubiflow for the portal. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

