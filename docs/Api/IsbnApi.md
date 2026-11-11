# ISBNLab\IsbnApi

All URIs are relative to https://www.isbnlab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**asinToIsbn()**](IsbnApi.md#asinToIsbn) | **GET** /api/isbn/asin-to-isbn/{asin} | Convert an Amazon ASIN to ISBN. |
| [**eanToIsbn()**](IsbnApi.md#eanToIsbn) | **GET** /api/isbn/ean-to-isbn/{ean} | Convert an EAN to ISBN. |
| [**isbn10ToIsbn13()**](IsbnApi.md#isbn10ToIsbn13) | **GET** /api/isbn/isbn10-to-isbn13/{isbn10} | Convert an ISBN-10 to ISBN-13. |
| [**isbn13ToIsbn10()**](IsbnApi.md#isbn13ToIsbn10) | **GET** /api/isbn/isbn13-to-isbn10/{isbn13} | Convert an ISBN-13 to ISBN-10. |
| [**isbnToAsin()**](IsbnApi.md#isbnToAsin) | **GET** /api/isbn/isbn-to-asin/{isbn} | Convert an ISBN to Amazon ASIN. |
| [**isbnToEan()**](IsbnApi.md#isbnToEan) | **GET** /api/isbn/isbn-to-ean/{isbn} | Convert an ISBN to EAN. |
| [**parseIsbn()**](IsbnApi.md#parseIsbn) | **GET** /api/isbn/isbn-lookup/{isbn} | Validate an ISBN and split it into its parts. |


## `asinToIsbn()`

```php
asinToIsbn($asin): \ISBNLab\Model\IsbnDetails
```

Convert an Amazon ASIN to ISBN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asin = 'asin_example'; // string | ASIN

try {
    $result = $apiInstance->asinToIsbn($asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->asinToIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asin** | **string**| ASIN | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eanToIsbn()`

```php
eanToIsbn($ean): \ISBNLab\Model\IsbnDetails
```

Convert an EAN to ISBN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ean = 'ean_example'; // string | EAN

try {
    $result = $apiInstance->eanToIsbn($ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->eanToIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ean** | **string**| EAN | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isbn10ToIsbn13()`

```php
isbn10ToIsbn13($isbn10): \ISBNLab\Model\IsbnDetails
```

Convert an ISBN-10 to ISBN-13.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn10 = 'isbn10_example'; // string | ISBN-10

try {
    $result = $apiInstance->isbn10ToIsbn13($isbn10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->isbn10ToIsbn13: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn10** | **string**| ISBN-10 | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isbn13ToIsbn10()`

```php
isbn13ToIsbn10($isbn13): \ISBNLab\Model\IsbnDetails
```

Convert an ISBN-13 to ISBN-10.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn13 = 'isbn13_example'; // string | ISBN-13

try {
    $result = $apiInstance->isbn13ToIsbn10($isbn13);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->isbn13ToIsbn10: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn13** | **string**| ISBN-13 | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isbnToAsin()`

```php
isbnToAsin($isbn): \ISBNLab\Model\IsbnDetails
```

Convert an ISBN to Amazon ASIN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN

try {
    $result = $apiInstance->isbnToAsin($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->isbnToAsin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isbnToEan()`

```php
isbnToEan($isbn): \ISBNLab\Model\IsbnDetails
```

Convert an ISBN to EAN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN

try {
    $result = $apiInstance->isbnToEan($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->isbnToEan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `parseIsbn()`

```php
parseIsbn($isbn): \ISBNLab\Model\IsbnDetails
```

Validate an ISBN and split it into its parts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlKey
$config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ISBNLab\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure Bearer authorization: Token
$config = ISBNLab\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new ISBNLab\Api\IsbnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN

try {
    $result = $apiInstance->parseIsbn($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IsbnApi->parseIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN | |

### Return type

[**\ISBNLab\Model\IsbnDetails**](../Model/IsbnDetails.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
