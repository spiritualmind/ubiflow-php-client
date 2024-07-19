# AdDataJsonldAdWrite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**OneOfAdDataJsonldAdWriteContext**](OneOfAdDataJsonldAdWriteContext.md) |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**code** | **string** | The identifier (code name) of the type of data. | 
**value** | [****](.md) | The value of the data.  When creating (*POST*) or updating (*PUT*) an ad, the value of a data may be of many types, depending on the type of data in your own system :  - Basic types :   - **string** : must be enclosed by double-quote, eg: *\&quot;string\&quot;*   - **boolean** : must be one of *true*, *false*   - **integer** : digits without leading zero, eg:  *123*   - **float** : digits with optional decimals&#x27; precision (using a dot as separator), eg: *123.45*   - **null** : fixed to *null*. We do recommend to avoid providing null/unknown data in order to optimize the payload size. - Date or DateTime must be provided in a French formatted string   - **Date** : *\&quot;31/12/2023\&quot;* for December the 31st of 2023   - **DateTime** : *\&quot;31/12/2023 23:45:59\&quot;* for December the 31st of 2023 at time 11pm 45 minutes and 59 seconds - Complex types are managed in their standard JSON representation :   - object : surrounded by curly brackets, { and }, it contains a comma-separated list of *\&quot;name\&quot;:value* pairs ;   - array : surrounded by square brackets, [ and ], it contains a comma-separated list of values.  The object and array types enable you to compose multiple values, eventually having different types. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

