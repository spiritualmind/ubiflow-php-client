# AdvertiserEmissionAdvertiserEmissionRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the advertiser emission, in the Ubiflow IS. | [optional] 
**advertiser** | **string** | The advertiser for whom the emission is configured. | [optional] 
**issuer** | [**\Ubiflow\Model\IssuerAdvertiserEmissionRead**](IssuerAdvertiserEmissionRead.md) |  | [optional] 
**active** | **bool** | Indicates weather the emission is active (ie the issuer send ads for the advertiser). | [optional] 
**lastEmissionDate** | [**\DateTime**](\DateTime.md) | The date the issuer sent ads of the advertiser to Ubiflow for the last time.  Dates use the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339#section-5.8\&quot;&gt;RFC3339&lt;/a&gt; format (ex: 2020-12-16T00:00:00+00). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

