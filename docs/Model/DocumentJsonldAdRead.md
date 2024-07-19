# DocumentJsonldAdRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfDocumentJsonldAdReadContext**](OneOfDocumentJsonldAdReadContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**sourceUrl** | **string** | The url of the document stored by the source (ie the user who created the ad).  When POSTing an ad, the url is required so that Ubiflow can upload the document.  When UPDATing an ad, the url may be omitted if the document has not been updated since the last POST or UPDATE of the ad : in this case you have to set the same name for the document. | [optional] 
**name** | **string** | The name of the document.  When POSTing or UPDATing an ad, the name is not required. If empty, it will be set to the trailing name component of the url. | [optional] 
**title** | **string** | The title of the document (very short description), in the language of the advertiser. | [optional] 
**url** | **string** | The url of the document stored on Ubiflow&#x27;s platform. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

