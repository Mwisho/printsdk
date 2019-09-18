# Swagger\Client\PrintGatewayApi

All URIs are relative to *https://api.print.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginPost**](PrintGatewayApi.md#loginPost) | **POST** /login | Login


# **loginPost**
> loginPost($i_credentials)

Login

Get a JWT token for api.print.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PrintGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$i_credentials = new \Swagger\Client\Model\ICredentials(); // \Swagger\Client\Model\ICredentials | 

try {
    $apiInstance->loginPost($i_credentials);
} catch (Exception $e) {
    echo 'Exception when calling PrintGatewayApi->loginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **i_credentials** | [**\Swagger\Client\Model\ICredentials**](../Model/ICredentials.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

