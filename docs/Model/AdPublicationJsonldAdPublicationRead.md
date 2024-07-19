# AdPublicationJsonldAdPublicationRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**context** | [**OneOfAdPublicationJsonldAdPublicationReadContext**](OneOfAdPublicationJsonldAdPublicationReadContext.md) |  | [optional] 
**id** | **int** | The unique identifier of the ad publication, in the Ubiflow IS. | [optional] 
**ad** | [**\Ubiflow\Model\AdJsonldAdPublicationRead**](AdJsonldAdPublicationRead.md) |  | [optional] 
**advertiserPublication** | [**\Ubiflow\Model\AdvertiserPublicationJsonldAdPublicationRead**](AdvertiserPublicationJsonldAdPublicationRead.md) |  | [optional] 
**selected** | **bool** | Indicates weather the ad has been selected by the advertiser to be published.  Note that the fact that an ad is selected does NOT guarantee that it will be published, for multiple reasons :  - It may not be publishable (or may become unpublishable after an update).  - The advertiser has a quota (maximum number of ads) for this portal. In this case :      - If the advertiser publication is configured to be automatic (thus not manual),        the selection of ads is not taken into account :        in other terms, the \&quot;selected\&quot; boolean has no effect.      - If the advertiser publication is configured to be manual,        Ubiflow send the maximum number of ads until the quota is reached.  - The portal may refuse to publish the ad, for reasons that belong to it :      - It has a moderation tool, and moderators judged that the ad is not convenient.      - There is currently a litigation between the portal and the advertiser. | [optional] 
**publishable** | **bool** | Indicates weather the ad may be published on the portal.  When the ad is not publishable on the portal, the reasons are indicated in the dedicated property \&quot;publicationIncompatibilities\&quot;.  Note that a publishable ad will NOT always be published. Either because it is not selected, or for many other reasons (for more details, see the comments on the \&quot;selected\&quot; property). | [optional] 
**publicationIncompatibilities** | [**\Ubiflow\Model\AdPublicationIncompatibilityJsonldAdPublicationRead[]**](AdPublicationIncompatibilityJsonldAdPublicationRead.md) | The collection of all reasons why the ad may not be published on the portal. | [optional] 
**lastPublishedAt** | [**\DateTime**](\DateTime.md) | The date the ad was published (ie sent by Ubiflow to the portal) for the last time.  This date is null if the ad has been unpublished.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 
**unPublishedAt** | [**\DateTime**](\DateTime.md) | The date the ad was unpublished (ie Ubiflow sent an order to the portal to remove its publication).  This date is null if the ad is currently published.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 
**urlOnPortal** | **string** | The url of the ad on the portal.  This property is defined only when the ad is currently published on the portal AND when the portal has communicated its url to Ubiflow. This is why you cannot entirely rely on this property to know if the ad is currently published. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

