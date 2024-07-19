# TransactionAdRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The identifier of the transaction between the advertiser and any person interested by the ad.  When POSTing or UPDATing an ad, just ignore this property if you send data in your own format. If you use Ubiflow&#x27;s format, available identifiers are :  - In the \&quot;IMMO\&quot; universe (Real estate) :   - \&quot;A\&quot; : Real estate for sale application   - \&quot;B\&quot; : Demise   - \&quot;F\&quot; : Business   - \&quot;G\&quot; : Sale of constructions ; used for the profession \&quot;PROMOTEUR\&quot; (\&quot;Developer\&quot;)   - \&quot;H\&quot; : Sale of constructions ; used for the profession \&quot;CMI\&quot; (\&quot;Builder of detached houses\&quot;)   - \&quot;I\&quot; : Auction   - \&quot;J\&quot; : Real estate services   - \&quot;L\&quot; : Rent   - \&quot;M\&quot; : Sale or rent   - \&quot;P\&quot; : Rent (sailing)   - \&quot;S\&quot; : Seasonal rent   - \&quot;V\&quot; : Sale   - \&quot;W\&quot; : Life annuity   - \&quot;Z\&quot; : Real estate for rent application  - In the \&quot;VO\&quot; universe (Vehicles) :   - \&quot;O\&quot; : Used car for sale | [optional] 
**description** | **string** | A short description of the transaction. | [optional] 
**price** | **float** | The price to pay to get the product related to the ad, expressed in euros.  When POSTing or UPDATing an ad, you can set a float value for the price. But only the integer part of the price will be taken into account.  For some type of transactions, the price may be described by several data. In this case, this price is the most important of all data. In any case, any specific data about pricing may be retrieved through the ad&#x27;s collection of data.  -  For \&quot;Seasonal rent\&quot; (S) you must put the low season weekly price | [optional] 
**privatePrice** | **bool** | Indicates whereas the advertiser wishes to communicate on the price of the ad.  If the price is private, it wont be published on any portal.  By default, the price is a public data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

