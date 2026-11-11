# ISBNLab\PublishersApi

All URIs are relative to https://www.isbnlab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findPublisher()**](PublishersApi.md#findPublisher) | **GET** /api/publisher/search/{search} | Find a publisher by name. |
| [**getPublisher()**](PublishersApi.md#getPublisher) | **GET** /api/publisher/{id} | Look up a publisher by id. |
| [**getPublishersByPrefix()**](PublishersApi.md#getPublishersByPrefix) | **GET** /api/publisher/prefix/{prefix} | List the publishers that use an ISBN registrant prefix. |


## `findPublisher()`

```php
findPublisher($search): \ISBNLab\Model\Publisher
```

Find a publisher by name.

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


$apiInstance = new ISBNLab\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Name to search for.

try {
    $result = $apiInstance->findPublisher($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->findPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Name to search for. | |

### Return type

[**\ISBNLab\Model\Publisher**](../Model/Publisher.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublisher()`

```php
getPublisher($id): \ISBNLab\Model\Publisher
```

Look up a publisher by id.

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


$apiInstance = new ISBNLab\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Publisher identifier

try {
    $result = $apiInstance->getPublisher($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getPublisher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Publisher identifier | |

### Return type

[**\ISBNLab\Model\Publisher**](../Model/Publisher.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublishersByPrefix()`

```php
getPublishersByPrefix($prefix, $page): \ISBNLab\Model\Publisher[]
```

List the publishers that use an ISBN registrant prefix.

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


$apiInstance = new ISBNLab\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix = 'prefix_example'; // string | ISBN registrant prefix, for example 978-0-7653.
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getPublishersByPrefix($prefix, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->getPublishersByPrefix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix** | **string**| ISBN registrant prefix, for example 978-0-7653. | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\ISBNLab\Model\Publisher[]**](../Model/Publisher.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
