# ISBNLab\BooksApi

All URIs are relative to https://www.isbnlab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBookByAsin()**](BooksApi.md#getBookByAsin) | **GET** /api/book/asin/{asin} | Look up a book by Amazon ASIN. |
| [**getBookById()**](BooksApi.md#getBookById) | **GET** /api/book/{id} | Look up a book by ISBNLab book id. |
| [**getBookByIsbn()**](BooksApi.md#getBookByIsbn) | **GET** /api/book/isbn/{isbn} | Look up a book by ISBN-10 or ISBN-13. |
| [**getBookCoverByAsin()**](BooksApi.md#getBookCoverByAsin) | **GET** /api/book/cover/asin/{asin} | Get the cover image URLs for a book by ASIN. |
| [**getBookCoverByIsbn()**](BooksApi.md#getBookCoverByIsbn) | **GET** /api/book/cover/isbn/{isbn} | Get the cover image URLs for a book by ISBN. |
| [**getEditionsByAsin()**](BooksApi.md#getEditionsByAsin) | **GET** /api/editions/asin/{asin} | Get every other edition of a book by ASIN. |
| [**getEditionsByIsbn()**](BooksApi.md#getEditionsByIsbn) | **GET** /api/editions/isbn/{isbn} | Get every other edition of a book by ISBN. |
| [**searchBooks()**](BooksApi.md#searchBooks) | **GET** /api/search/book/{query} | Search books by title, subtitle, author or ISBN. |


## `getBookByAsin()`

```php
getBookByAsin($asin): \ISBNLab\Model\Book
```

Look up a book by Amazon ASIN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asin = 'asin_example'; // string | ASIN identifier

try {
    $result = $apiInstance->getBookByAsin($asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookByAsin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asin** | **string**| ASIN identifier | |

### Return type

[**\ISBNLab\Model\Book**](../Model/Book.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookById()`

```php
getBookById($id): \ISBNLab\Model\Book
```

Look up a book by ISBNLab book id.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Book identifier

try {
    $result = $apiInstance->getBookById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Book identifier | |

### Return type

[**\ISBNLab\Model\Book**](../Model/Book.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookByIsbn()`

```php
getBookByIsbn($isbn): \ISBNLab\Model\Book
```

Look up a book by ISBN-10 or ISBN-13.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN identifier

try {
    $result = $apiInstance->getBookByIsbn($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookByIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN identifier | |

### Return type

[**\ISBNLab\Model\Book**](../Model/Book.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookCoverByAsin()`

```php
getBookCoverByAsin($asin): \ISBNLab\Model\BookCover
```

Get the cover image URLs for a book by ASIN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asin = 'asin_example'; // string | ASIN identifier

try {
    $result = $apiInstance->getBookCoverByAsin($asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookCoverByAsin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asin** | **string**| ASIN identifier | |

### Return type

[**\ISBNLab\Model\BookCover**](../Model/BookCover.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookCoverByIsbn()`

```php
getBookCoverByIsbn($isbn): \ISBNLab\Model\BookCover
```

Get the cover image URLs for a book by ISBN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN identifier

try {
    $result = $apiInstance->getBookCoverByIsbn($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getBookCoverByIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN identifier | |

### Return type

[**\ISBNLab\Model\BookCover**](../Model/BookCover.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditionsByAsin()`

```php
getEditionsByAsin($asin): \ISBNLab\Model\BookEditions
```

Get every other edition of a book by ASIN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asin = 'asin_example'; // string | ASIN identifier

try {
    $result = $apiInstance->getEditionsByAsin($asin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getEditionsByAsin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asin** | **string**| ASIN identifier | |

### Return type

[**\ISBNLab\Model\BookEditions**](../Model/BookEditions.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditionsByIsbn()`

```php
getEditionsByIsbn($isbn): \ISBNLab\Model\BookEditions
```

Get every other edition of a book by ISBN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isbn = 'isbn_example'; // string | ISBN identifier

try {
    $result = $apiInstance->getEditionsByIsbn($isbn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->getEditionsByIsbn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isbn** | **string**| ISBN identifier | |

### Return type

[**\ISBNLab\Model\BookEditions**](../Model/BookEditions.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchBooks()`

```php
searchBooks($query, $limit, $page, $maxResults): \ISBNLab\Model\Book[]
```

Search books by title, subtitle, author or ISBN.

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


$apiInstance = new ISBNLab\Api\BooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Search text
$limit = 10; // int | Books per page, 1-100. Default 10.
$page = 1; // int | Page number, starting at 1. Default 1.
$maxResults = 100; // int | Maximum number of results across all pages. Default 100.

try {
    $result = $apiInstance->searchBooks($query, $limit, $page, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BooksApi->searchBooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Search text | |
| **limit** | **int**| Books per page, 1-100. Default 10. | [optional] [default to 10] |
| **page** | **int**| Page number, starting at 1. Default 1. | [optional] [default to 1] |
| **maxResults** | **int**| Maximum number of results across all pages. Default 100. | [optional] [default to 100] |

### Return type

[**\ISBNLab\Model\Book[]**](../Model/Book.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
