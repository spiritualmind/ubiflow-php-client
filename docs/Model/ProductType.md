# ProductType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | The identifier of the type of product described by the ad, in the Ubiflow IS.  When creating or updating an ad :  - Neither the code nor the description are mandatory.   But at least one of the two properties must be set.  - It is very important to define the code or description very accurately,   so that the ad get published in the right category on each portal :   otherwise users of the portals will not see the ad when using precise criteria,   which will result in less visibility and thus less contacts for the advertiser owning the ad.  - The most accurate way to define the product type is to do a complete mapping   between your own product types and Ubiflow&#x27;s product types.   But this can be very tedious, so you can choose to make only a partial mapping,   for example using only Ubiflow&#x27;s main product types (level one (1) and two (2)).   In this case, you should please add some more information about the product type,   by defining in the ProductType.description property the full string value of your own product type,   ie the descriptive value (and not a code name) as it is defined in your own IS.  - Anyway, it is part of Ubiflow&#x27;s job to do its best to define the product type   more accurately, using the code of the product type and its description (if you set it),   the title and text of the ad, and any data enabling to have a better result.   So after POSTing or UPDATing an ad, don&#x27;t be surprised   if the product type of the same ad you GET is different from the one you set. | [optional] 
**description** | **string** | A short description of the type of product.  Neither the code nor the description are mandatory when creating or updating an ad. But at least one of the two properties must be set.  Refer to the ProductType.code property for more details. | [optional] 
**language** | [**\Ubiflow\Model\Language**](Language.md) |  | [optional] 
**universe** | **string** | The universe related to the product type. | [optional] 
**relatedProfessions** | **string[]** | A list of all professions related to the product type. | [optional] 
**level** | **int** | The level of the type of product in the whole tree of product types.  The root product type has a level of one (1).  A descendant has a level of one (1) more than its parent. | [optional] 
**parent** | **string** | The parent of the current product type, in the tree of all product types.  The only product type who has no parent is the root of the tree. | [optional] 
**children** | **string[]** | The children of the current product type, in the tree of all product types.  A product type who has no children is a leaf of the tree. | [optional] 
**externalServiceCode** | [****](.md) |  | [optional] 
**id** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

