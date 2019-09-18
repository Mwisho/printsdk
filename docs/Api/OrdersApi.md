# Swagger\Client\OrdersApi

All URIs are relative to *https://api.print.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersPost**](OrdersApi.md#ordersPost) | **POST** /orders | Place Order


# **ordersPost**
> \Swagger\Client\Model\OrderResponseModel ordersPost($order_request_model)

Place Order

Places an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_request_model = new \Swagger\Client\Model\OrderRequestModel(); // \Swagger\Client\Model\OrderRequestModel | 

try {
    $result = $apiInstance->ordersPost($order_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_request_model** | [**\Swagger\Client\Model\OrderRequestModel**](../Model/OrderRequestModel.md)|  |

### Return type

[**\Swagger\Client\Model\OrderResponseModel**](../Model/OrderResponseModel.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

