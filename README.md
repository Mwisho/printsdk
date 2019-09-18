# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2019-09-18T08:39:50Z
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: DefaultAuthorizer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->contactsGet();
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.print.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactApi* | [**contactsGet**](docs/Api/ContactApi.md#contactsget) | **GET** /contacts | 
*ContactApi* | [**contactsIdDelete**](docs/Api/ContactApi.md#contactsiddelete) | **DELETE** /contacts/{id} | 
*ContactApi* | [**contactsIdPut**](docs/Api/ContactApi.md#contactsidput) | **PUT** /contacts/{id} | Update contact
*ContactApi* | [**contactsPost**](docs/Api/ContactApi.md#contactspost) | **POST** /contacts | New contact
*ContactApi* | [**placesGet**](docs/Api/ContactApi.md#placesget) | **GET** /places | Get address
*ContactApi* | [**placesSearchGet**](docs/Api/ContactApi.md#placessearchget) | **GET** /places/search | Find address
*ContactApi* | [**placesSuggestionsGet**](docs/Api/ContactApi.md#placessuggestionsget) | **GET** /places/suggestions | Address suggestions
*ContactApi* | [**placesValidatePost**](docs/Api/ContactApi.md#placesvalidatepost) | **POST** /places/validate | Validate address
*OrdersApi* | [**ordersPost**](docs/Api/OrdersApi.md#orderspost) | **POST** /orders | Place Order
*PrintGatewayApi* | [**loginPost**](docs/Api/PrintGatewayApi.md#loginpost) | **POST** /login | Login
*ProductsApi* | [**productsGet**](docs/Api/ProductsApi.md#productsget) | **GET** /products | List of products
*ProductsApi* | [**productsSkuGet**](docs/Api/ProductsApi.md#productsskuget) | **GET** /products/{sku} | Product specifics
*ProductsApi* | [**productsSkuPricePost**](docs/Api/ProductsApi.md#productsskupricepost) | **POST** /products/{sku}/price | Product price
*ProductsApi* | [**productsSkuPricesGet**](docs/Api/ProductsApi.md#productsskupricesget) | **GET** /products/{sku}/prices | Product Prices
*ShippingApi* | [**productsSkuShippingPossibilitiesPost**](docs/Api/ShippingApi.md#productsskushippingpossibilitiespost) | **POST** /products/{sku}/shipping-possibilities | Shipping possibilities


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Address1](docs/Model/Address1.md)
 - [Address2](docs/Model/Address2.md)
 - [BillingAddress](docs/Model/BillingAddress.md)
 - [BillingAddress1](docs/Model/BillingAddress1.md)
 - [Contact](docs/Model/Contact.md)
 - [Contact1](docs/Model/Contact1.md)
 - [ContactNew](docs/Model/ContactNew.md)
 - [ContactUpdate](docs/Model/ContactUpdate.md)
 - [Credentials](docs/Model/Credentials.md)
 - [CustomSizes](docs/Model/CustomSizes.md)
 - [GetProductPriceRequest](docs/Model/GetProductPriceRequest.md)
 - [GetProductResponse](docs/Model/GetProductResponse.md)
 - [GetProductResponseOptions](docs/Model/GetProductResponseOptions.md)
 - [GetProductResponseProperties](docs/Model/GetProductResponseProperties.md)
 - [GetProductsResponse](docs/Model/GetProductsResponse.md)
 - [GetProductsResponseInner](docs/Model/GetProductsResponseInner.md)
 - [ICredentials](docs/Model/ICredentials.md)
 - [Item](docs/Model/Item.md)
 - [OrderRequestModel](docs/Model/OrderRequestModel.md)
 - [OrderRequestModelItems](docs/Model/OrderRequestModelItems.md)
 - [OrderRequestModelShipments](docs/Model/OrderRequestModelShipments.md)
 - [OrderResponseModel](docs/Model/OrderResponseModel.md)
 - [OrderResponseModelItems](docs/Model/OrderResponseModelItems.md)
 - [OrderResponseModelShipments](docs/Model/OrderResponseModelShipments.md)
 - [OrderResponseModelShipments1](docs/Model/OrderResponseModelShipments1.md)
 - [OrderResponseModelTracks](docs/Model/OrderResponseModelTracks.md)
 - [Price](docs/Model/Price.md)
 - [Price1](docs/Model/Price1.md)
 - [Prices](docs/Model/Prices.md)
 - [ProductPriceResponse](docs/Model/ProductPriceResponse.md)
 - [ProductPricesResponse](docs/Model/ProductPricesResponse.md)
 - [ProductPricesResponseInner](docs/Model/ProductPricesResponseInner.md)
 - [SenderAddress](docs/Model/SenderAddress.md)
 - [SenderAddress1](docs/Model/SenderAddress1.md)
 - [ShippingPossibilitiesRequest](docs/Model/ShippingPossibilitiesRequest.md)
 - [ShippingPossibilitiesResponse](docs/Model/ShippingPossibilitiesResponse.md)
 - [ShippingPossibilitiesResponsePossibilities](docs/Model/ShippingPossibilitiesResponsePossibilities.md)
 - [ShippingPossibilitiesResponseResults](docs/Model/ShippingPossibilitiesResponseResults.md)
 - [ValidateAddress](docs/Model/ValidateAddress.md)


## Documentation For Authorization


## DefaultAuthorizer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



