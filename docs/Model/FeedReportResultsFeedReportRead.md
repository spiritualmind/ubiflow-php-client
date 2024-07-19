# FeedReportResultsFeedReportRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**processed** | **int** | The number of elements processed during the feed.  It should normally be equal to the sum of the valid, unvalid and deleted elements. | [optional] 
**invalid** | **int** | The number of unvalid elements during the feed. | [optional] 
**valid** | **int** | The number of valid elements during the feed.  It should normally be equal to the sum of the identical, modified and added elements. | [optional] 
**identical** | **int** | The number of elements which are identical, compared to the previous feed. | [optional] 
**modified** | **int** | The number of elements which were modified, compared to the previous feed. | [optional] 
**added** | **int** | The number of elements which were added, compared to the previous feed. | [optional] 
**deleted** | **int** | The number of elements which were deleted, compared to the previous feed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

