# AdPublicationAdPublicationsWrite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertiserPublication** | [**\Ubiflow\Model\AdvertiserPublicationAdPublicationsWrite**](AdvertiserPublicationAdPublicationsWrite.md) |  | [optional] 
**selected** | **bool** | Indicates weather the ad has been selected by the advertiser to be published.  Note that the fact that an ad is selected does NOT guarantee that it will be published, for multiple reasons :  - It may not be publishable (or may become unpublishable after an update).  - The advertiser has a quota (maximum number of ads) for this portal. In this case :      - If the advertiser publication is configured to be automatic (thus not manual),        the selection of ads is not taken into account :        in other terms, the \&quot;selected\&quot; boolean has no effect.      - If the advertiser publication is configured to be manual,        Ubiflow send the maximum number of ads until the quota is reached.  - The portal may refuse to publish the ad, for reasons that belong to it :      - It has a moderation tool, and moderators judged that the ad is not convenient.      - There is currently a litigation between the portal and the advertiser. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

