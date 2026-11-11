# ISBNLab\SubjectsApi

All URIs are relative to https://www.isbnlab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findSubject()**](SubjectsApi.md#findSubject) | **GET** /api/subject/search/{search} | Find a subject by name. |
| [**getSubject()**](SubjectsApi.md#getSubject) | **GET** /api/subject/{id} | Look up a subject by id. |


## `findSubject()`

```php
findSubject($search): \ISBNLab\Model\Subject
```

Find a subject by name.

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


$apiInstance = new ISBNLab\Api\SubjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Name to search for.

try {
    $result = $apiInstance->findSubject($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubjectsApi->findSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Name to search for. | |

### Return type

[**\ISBNLab\Model\Subject**](../Model/Subject.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubject()`

```php
getSubject($id): \ISBNLab\Model\Subject
```

Look up a subject by id.

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


$apiInstance = new ISBNLab\Api\SubjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Subject identifier

try {
    $result = $apiInstance->getSubject($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubjectsApi->getSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Subject identifier | |

### Return type

[**\ISBNLab\Model\Subject**](../Model/Subject.md)

### Authorization

[UrlKey](../../README.md#UrlKey), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
