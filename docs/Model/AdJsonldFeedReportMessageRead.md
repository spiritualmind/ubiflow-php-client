# AdJsonldFeedReportMessageRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfAdJsonldFeedReportMessageReadContext**](OneOfAdJsonldFeedReportMessageReadContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**reference** | **string** | The unique identifier of the ad, from the point of vue of the advertiser owning the ad. This string is unique for a given advertiser.  The reference is an identifier used by all parties : the advertiser, the software editor, web portals. That is why once an ad has been created with a given reference, this reference cannot be modified anymore.  This string should not contain any character forbidden in file systems or urls. The reference originally given when the ad is created may thus be modified by Ubiflow : unsupported characters are replaced by un underscore (\&quot;_\&quot;). But in such cases you can still use the original reference when updating an ad. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

