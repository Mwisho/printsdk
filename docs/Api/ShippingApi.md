# Swagger\Client\ShippingApi

All URIs are relative to *https://api.print.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsSkuShippingPossibilitiesPost**](ShippingApi.md#productsSkuShippingPossibilitiesPost) | **POST** /products/{sku}/shipping-possibilities | Shipping possibilities


# **productsSkuShippingPossibilitiesPost**
> \Swagger\Client\Model\ShippingPossibilitiesResponse productsSkuShippingPossibilitiesPost($sku, $shipping_possibilities_request)

Shipping possibilities

Retrieve shipping possibilities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | SKU of the product you want to retrieve shipping possiblities.
$shipping_possibilities_request = new \Swagger\Client\Model\ShippingPossibilitiesRequest(); // \Swagger\Client\Model\ShippingPossibilitiesRequest | 

try {
    $result = $apiInstance->productsSkuShippingPossibilitiesPost($sku, $shipping_possibilities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->productsSkuShippingPossibilitiesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| SKU of the product you want to retrieve shipping possiblities. |
 **shipping_possibilities_request** | [**\Swagger\Client\Model\ShippingPossibilitiesRequest**](../Model/ShippingPossibilitiesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ShippingPossibilitiesResponse**](../Model/ShippingPossibilitiesResponse.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

