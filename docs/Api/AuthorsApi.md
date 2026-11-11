# ISBNLab\AuthorsApi

All URIs are relative to https://www.isbnlab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAuthor()**](AuthorsApi.md#findAuthor) | **GET** /api/author/search/{search} | Find an author by name. |
| [**getAuthor()**](AuthorsApi.md#getAuthor) | **GET** /api/author/{id} | Look up an author by id. |


## `findAuthor()`

```php
findAuthor($search): \ISBNLab\Model\Author
```

Find an author by name.

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


$apiInstance = new ISBNLab\Api\AuthorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Name to search for.

try {
    $result = $apiInstance->findAuthor($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorsApi->findAuthor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Name to search for. | |

### Return type

[**\ISBNLab\Model\Author**](../Model/Author.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthor()`

```php
getAuthor($id): \ISBNLab\Model\Author
```

Look up an author by id.

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


$apiInstance = new ISBNLab\Api\AuthorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Author identifier

try {
    $result = $apiInstance->getAuthor($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorsApi->getAuthor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Author identifier | |

### Return type

[**\ISBNLab\Model\Author**](../Model/Author.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
