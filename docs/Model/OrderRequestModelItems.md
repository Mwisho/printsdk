# OrderRequestModelItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_address** | [**\Swagger\Client\Model\SenderAddress**](SenderAddress.md) |  | [optional] 
**print_coupon** | **string** | Optional coupon code for discounts | [optional] 
**customer_reference** | **string** | Personal reference of order item | [optional] 
**delivery_promise** | **bool** | Whether delivery promise is selected Defaults to false | [optional] 
**options** | **object** | Order item options | 
**file_url** | **string** | Optional file URL of pdf to be printed Order will still be placed if this url wasn&#39;t available | [optional] 
**sku** | **string** | Uniquely identifying sku of ordered product | 
**shipments** | [**\Swagger\Client\Model\OrderRequestModelShipments[]**](OrderRequestModelShipments.md) | Where the order item needs to be shipped Multiple addresses possible with different amounts of copies Each shipment has optional carrier method and delivery date which will be checked against the chosen options.urgency | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


