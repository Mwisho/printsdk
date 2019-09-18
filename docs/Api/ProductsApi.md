# Swagger\Client\ProductsApi

All URIs are relative to *https://api.print.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGet**](ProductsApi.md#productsGet) | **GET** /products | List of products
[**productsSkuGet**](ProductsApi.md#productsSkuGet) | **GET** /products/{sku} | Product specifics
[**productsSkuPricePost**](ProductsApi.md#productsSkuPricePost) | **POST** /products/{sku}/price | Product price
[**productsSkuPricesGet**](ProductsApi.md#productsSkuPricesGet) | **GET** /products/{sku}/prices | Product Prices


# **productsGet**
> \Swagger\Client\Model\GetProductsResponse productsGet()

List of products

List of product descriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsSkuGet**
> \Swagger\Client\Model\GetProductResponse productsSkuGet($sku, $view, $fields)

Product specifics

Get specifics of a single Print.com product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$view = "view_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->productsSkuGet($sku, $view, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsSkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **view** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\GetProductResponse**](../Model/GetProductResponse.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsSkuPricePost**
> \Swagger\Client\Model\ProductPriceResponse productsSkuPricePost($sku, $get_product_price_request)

Product price

Get price of a Print.com product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 
$get_product_price_request = new \Swagger\Client\Model\GetProductPriceRequest(); // \Swagger\Client\Model\GetProductPriceRequest | 

try {
    $result = $apiInstance->productsSkuPricePost($sku, $get_product_price_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsSkuPricePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **get_product_price_request** | [**\Swagger\Client\Model\GetProductPriceRequest**](../Model/GetProductPriceRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductPriceResponse**](../Model/ProductPriceResponse.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsSkuPricesGet**
> \Swagger\Client\Model\ProductPricesResponse productsSkuPricesGet($sku)

Product Prices

Retrieve all prices for a given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | 

try {
    $result = $apiInstance->productsSkuPricesGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsSkuPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProductPricesResponse**](../Model/ProductPricesResponse.md)

### Authorization

[DefaultAuthorizer](../../README.md#DefaultAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

