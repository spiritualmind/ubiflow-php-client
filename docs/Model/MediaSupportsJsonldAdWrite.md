# MediaSupportsJsonldAdWrite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfMediaSupportsJsonldAdWriteContext**](OneOfMediaSupportsJsonldAdWriteContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**videoUrl** | **string** | The url of the video describing the product of the ad.  This property is used only for video urls : pictures have their own property.  Note : The video url is also available under the data \&quot;visite_virtuelle\&quot;. When creating or updating an ad, you can use either the \&quot;videoUrl\&quot; property or the specific data : if the \&quot;videoUrl\&quot; property is set, it will have priority. | [optional] 
**pictures** | [**\Ubiflow\Model\PictureJsonldAdWrite[]**](PictureJsonldAdWrite.md) | The collection of pictures linked to the ad. | 
**documents** | [**\Ubiflow\Model\DocumentJsonldAdWrite[]**](DocumentJsonldAdWrite.md) | The collection of documents linked to the ad. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

