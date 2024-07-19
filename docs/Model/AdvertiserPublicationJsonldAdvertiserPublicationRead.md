# AdvertiserPublicationJsonldAdvertiserPublicationRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**context** | [**OneOfAdvertiserPublicationJsonldAdvertiserPublicationReadContext**](OneOfAdvertiserPublicationJsonldAdvertiserPublicationReadContext.md) |  | [optional] 
**id** | **int** | The unique identifier of the advertiser publication, in the Ubiflow IS. | [optional] 
**advertiser** | [**\Ubiflow\Model\AdvertiserJsonldAdvertiserPublicationRead**](AdvertiserJsonldAdvertiserPublicationRead.md) |  | [optional] 
**portal** | [**\Ubiflow\Model\PortalJsonldAdvertiserPublicationRead**](PortalJsonldAdvertiserPublicationRead.md) |  | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The date the publication was created for the advertiser.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 
**active** | **bool** | Indicates weather the publication is active (ie ads may be published). | [optional] 
**maxNumberOfAds** | **int** | The quota indicating the maximum number of ads that may be published on the portal by the advertiser (null for an unlimited publication). | [optional] 
**adsSelectionConfiguration** | **string** | The way the advertiser select the ads he wants to publish on the portal.  - 1 : The advertiser makes his own manual selection of ads,       either on his customer area, or through the gateway of his software.  - 2 : The advertiser does not make any manual selection of ads :       he chose to automatically publish the maximum number of ads (regarding the quota configured),      with ads sorted by decreasing date of creation,      which is the date the ad was created in the Ubiflow IS.  - 3 : The advertiser does not make any manual selection of ads :       he chose to automatically publish the maximum number of ads (regarding the quota configured),      with ads sorted by decreasing date of input,      which is the date the ad was created by the advertiser      (input for the first time) in the software he uses.  - 4 : The advertiser does not make any manual selection of ads :       he chose to automatically publish the maximum number of ads (regarding the quota configured),      with ads sorted by decreasing date of integration,      which is the date the ad was modified for the last time in the Ubiflow IS.  - 5 : The advertiser does not make any manual selection of ads :       he chose to automatically publish the maximum number of ads (regarding the quota configured),      with ads sorted by decreasing date of mandate (in the real estate universe). | 
**lastPublicationDate** | [**\DateTime**](\DateTime.md) | The date the advertiser published ads for the last time.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

