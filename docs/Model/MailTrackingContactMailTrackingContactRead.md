# MailTrackingContactMailTrackingContactRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the contact, in the Ubiflow IS. | [optional] 
**portal** | [**\Ubiflow\Model\PortalMailTrackingContactRead**](PortalMailTrackingContactRead.md) |  | [optional] 
**ad** | [**\Ubiflow\Model\AdMailTrackingContactRead**](AdMailTrackingContactRead.md) |  | [optional] 
**urlOnPortal** | **string** | The url of the ad on the portal. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The date the contact sent the email on the portal.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 
**sentAt** | [**\DateTime**](\DateTime.md) | The date Ubiflow sent the email to the advertiser.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 
**contactInformation** | [**\Ubiflow\Model\ContactInformationMailTrackingContactRead**](ContactInformationMailTrackingContactRead.md) |  | [optional] 
**comment** | **string** | The comment written by the contact about the ad on the portal. | [optional] 
**hotLead** | **bool** | Whether the contact is a hot lead or not.  A lead is hot when he asked himself some information about the ad on the portal.  A lead is not hot when he has been provided by the portal who deduced that this lead COULD be interested by the ad, either because the lead has created on the portal an alert concerning new ads which match some criteria, or because this ad is similar to another ad for which the lead has shown some interest.  By default, the API only returns hot leads when GETting a collection of contacts. Non hot leads may be retrieved thanks to the filter corresponding to this property. | [optional] 
**scoring** | [****](.md) |  | [optional] 
**scoringTotal** | [****](.md) |  | [optional] 
**dataForm** | [****](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

