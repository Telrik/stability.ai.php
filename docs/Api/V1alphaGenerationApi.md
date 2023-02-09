# OpenAPI\Client\V1alphaGenerationApi

All URIs are relative to https://api.stability.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1AlphaimageToImage()**](V1alphaGenerationApi.md#v1AlphaimageToImage) | **POST** /v1alpha/generation/{engine_id}/image-to-image | image-to-image |
| [**v1Alphamasking()**](V1alphaGenerationApi.md#v1Alphamasking) | **POST** /v1alpha/generation/{engine_id}/image-to-image/masking | image-to-image/masking |
| [**v1AlphatextToImage()**](V1alphaGenerationApi.md#v1AlphatextToImage) | **POST** /v1alpha/generation/{engine_id}/text-to-image | text-to-image |


## `v1AlphaimageToImage()`

```php
v1AlphaimageToImage($engine_id, $authorization, $init_image, $options, $accept, $organization)
```

image-to-image

Generate big fancy pictures from small fancy pictures - deprecated, use v1beta/image-to-image instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-diffusion-512-v2-0; // string
$authorization = sk-KT........; // string
$init_image = "/path/to/file.txt"; // \SplFileObject | Initial image to use for the image-to-image generation
$options = new \OpenAPI\Client\Model\ImageToImageOptions(); // \OpenAPI\Client\Model\ImageToImageOptions
$accept = application/json; // string
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.

try {
    $apiInstance->v1AlphaimageToImage($engine_id, $authorization, $init_image, $options, $accept, $organization);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaGenerationApi->v1AlphaimageToImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **authorization** | **string**|  | |
| **init_image** | **\SplFileObject****\SplFileObject**| Initial image to use for the image-to-image generation | |
| **options** | [**\OpenAPI\Client\Model\ImageToImageOptions**](../Model/ImageToImageOptions.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json&#39;] |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |

### Return type

void (empty response body)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1Alphamasking()`

```php
v1Alphamasking($engine_id, $authorization, $init_image, $options, $accept, $organization, $mask_image)
```

image-to-image/masking

Paint fancy things into fancy pictures - deprecated, use v1beta/image-to-image/masking instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-diffusion-512-v2-0; // string
$authorization = sk-KT........; // string
$init_image = "/path/to/file.txt"; // \SplFileObject | Initial image to use for the image-to-image generation
$options = new \OpenAPI\Client\Model\MaskingOptions(); // \OpenAPI\Client\Model\MaskingOptions
$accept = application/json; // string
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.
$mask_image = "/path/to/file.txt"; // \SplFileObject | Optional grayscale mask that allows for influence over which pixels are eligible for diffusion and at what strength. Must be the same dimensions as the `init_image`. Use the `mask_source` option to specify whether the white or black pixels should be inpainted. (Note: if you set `mask_source` to `INIT_IMAGE_ALPHA` you can omit the `mask_image` parameter.)

try {
    $apiInstance->v1Alphamasking($engine_id, $authorization, $init_image, $options, $accept, $organization, $mask_image);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaGenerationApi->v1Alphamasking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **authorization** | **string**|  | |
| **init_image** | **\SplFileObject****\SplFileObject**| Initial image to use for the image-to-image generation | |
| **options** | [**\OpenAPI\Client\Model\MaskingOptions**](../Model/MaskingOptions.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json&#39;] |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |
| **mask_image** | **\SplFileObject****\SplFileObject**| Optional grayscale mask that allows for influence over which pixels are eligible for diffusion and at what strength. Must be the same dimensions as the &#x60;init_image&#x60;. Use the &#x60;mask_source&#x60; option to specify whether the white or black pixels should be inpainted. (Note: if you set &#x60;mask_source&#x60; to &#x60;INIT_IMAGE_ALPHA&#x60; you can omit the &#x60;mask_image&#x60; parameter.) | [optional] |

### Return type

void (empty response body)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1AlphatextToImage()`

```php
v1AlphatextToImage($engine_id, $authorization, $v1_alpha_text_to_image_request_body, $accept, $organization): \OpenAPI\Client\Model\Image[]
```

text-to-image

Generate an image from text - deprecated, use v1beta/text-to-image instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-diffusion-512-v2-0; // string
$authorization = sk-KT........; // string
$v1_alpha_text_to_image_request_body = {"cfg_scale":7,"clip_guidance_preset":"FAST_BLUE","height":512,"width":512,"sampler":"K_DPM_2_ANCESTRAL","samples":1,"seed":0,"steps":75,"text_prompts":[{"text":"A lighthouse on a cliff","weight":1}]}; // \OpenAPI\Client\Model\V1AlphaTextToImageRequestBody
$accept = application/json; // string
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.

try {
    $result = $apiInstance->v1AlphatextToImage($engine_id, $authorization, $v1_alpha_text_to_image_request_body, $accept, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaGenerationApi->v1AlphatextToImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **authorization** | **string**|  | |
| **v1_alpha_text_to_image_request_body** | [**\OpenAPI\Client\Model\V1AlphaTextToImageRequestBody**](../Model/V1AlphaTextToImageRequestBody.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json&#39;] |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
