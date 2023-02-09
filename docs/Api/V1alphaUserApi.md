# OpenAPI\Client\V1alphaUserApi

All URIs are relative to https://api.stability.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AlphauserAccount()**](V1alphaUserApi.md#v1AlphauserAccount) | **GET** /v1alpha/user/account | account |
| [**v1AlphauserBalance()**](V1alphaUserApi.md#v1AlphauserBalance) | **GET** /v1alpha/user/balance | balance |


## `v1AlphauserAccount()`

```php
v1AlphauserAccount($authorization): \OpenAPI\Client\Model\V1AlphaAccountResponseBody
```

account

Get information about the account associated with the provided API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = sk-KT........; // string

try {
    $result = $apiInstance->v1AlphauserAccount($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaUserApi->v1AlphauserAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\V1AlphaAccountResponseBody**](../Model/V1AlphaAccountResponseBody.md)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AlphauserBalance()`

```php
v1AlphauserBalance($authorization, $organization): \OpenAPI\Client\Model\BalanceResponseBody
```

balance

Get the credit balance of the account/organization associated with the API key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = sk-KT........; // string
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.

try {
    $result = $apiInstance->v1AlphauserBalance($authorization, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaUserApi->v1AlphauserBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BalanceResponseBody**](../Model/BalanceResponseBody.md)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
