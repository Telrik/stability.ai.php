# OpenAPI\Client\V1betaGenerationApi

All URIs are relative to https://api.stability.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**imageToImage()**](V1betaGenerationApi.md#imageToImage) | **POST** /v1beta/generation/{engine_id}/image-to-image | image-to-image |
| [**masking()**](V1betaGenerationApi.md#masking) | **POST** /v1beta/generation/{engine_id}/image-to-image/masking | image-to-image/masking |
| [**textToImage()**](V1betaGenerationApi.md#textToImage) | **POST** /v1beta/generation/{engine_id}/text-to-image | text-to-image |


## `imageToImage()`

```php
imageToImage($engine_id, $text_prompts, $init_image, $accept, $organization, $init_image_mode, $image_strength, $step_schedule_start, $step_schedule_end, $cfg_scale, $clip_guidance_preset, $height, $width, $sampler, $samples, $seed, $steps): \OpenAPI\Client\Model\Image[]
```

image-to-image

Generate big fancy pictures from small fancy pictures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1betaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-diffusion-512-v2-0; // string
$text_prompts = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TextPrompt()); // \OpenAPI\Client\Model\TextPrompt[] | An array of text prompts to use for generation.  Due to how arrays are represented in `multipart/form-data` requests, prompts must adhear to the format `text_prompts[index][text|weight]`, where `index` is some integer used to tie the text and weight together.  While `index` does not have to be sequential, duplicate entries  will override previous entries, so it is recommended to use sequential indices.  Given a text prompt with the text `A lighthouse on a cliff` and a weight of `0.5`, it would be represented as: ``` text_prompts[0][text]: \\\"A lighthouse on a cliff\\\" text_prompts[0][weight]: 0.5 ```  To add another prompt to that request simply provide the values under a new `index`:  ``` text_prompts[0][text]: \\\"A lighthouse on a cliff\\\" text_prompts[0][weight]: 0.5 text_prompts[1][text]: \\\"land, ground, dirt, grass\\\" text_prompts[1][weight]: -0.9 ```
$init_image = "/path/to/file.txt"; // \SplFileObject | Image used to initialize the diffusion process, in lieu of random noise.
$accept = 'application/json'; // string | The format of the response.  Leave blank for JSON, or set to 'image/png' for a PNG image.
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.
$init_image_mode = new \OpenAPI\Client\Model\InitImageMode(); // \OpenAPI\Client\Model\InitImageMode
$image_strength = 3.4; // float | How much influence the `init_image` has on the diffusion process. Values close to `1` will yield images very similar to the `init_image` while values close to `0` will yield images wildly different than the `init_image`. The behavior of this is meant to mirror DreamStudio's \\\"Image Strength\\\" slider.  <br/> <br/> This parameter is just an alternate way to set `step_schedule_start`, which is done via the calculation `1 - image_strength`. For example, passing in an Image Strength of 35% (`0.35`) would result in a `step_schedule_start` of `0.65`.
$step_schedule_start = 3.4; // float | Skips a proportion of the start of the diffusion steps, allowing the init_image to influence the final generated image.  Lower values will result in more influence from the init_image, while higher values will result in more influence from the diffusion steps.  (e.g. a value of `0` would simply return you the init_image, where a value of `1` would return you a completely different image.)
$step_schedule_end = 3.4; // float | Skips a proportion of the end of the diffusion steps, allowing the init_image to influence the final generated image.  Lower values will result in more influence from the init_image, while higher values will result in more influence from the diffusion steps.
$cfg_scale = 3.4; // float | How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt)
$clip_guidance_preset = new \OpenAPI\Client\Model\ClipGuidancePreset(); // \OpenAPI\Client\Model\ClipGuidancePreset
$height = 56; // int | Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
$width = 56; // int | Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
$sampler = new \OpenAPI\Client\Model\Sampler(); // \OpenAPI\Client\Model\Sampler
$samples = 56; // int | Number of images to generate
$seed = 56; // int | Random noise seed (omit this option or use `0` for a random seed)
$steps = 56; // int | Number of diffusion steps to run

try {
    $result = $apiInstance->imageToImage($engine_id, $text_prompts, $init_image, $accept, $organization, $init_image_mode, $image_strength, $step_schedule_start, $step_schedule_end, $cfg_scale, $clip_guidance_preset, $height, $width, $sampler, $samples, $seed, $steps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1betaGenerationApi->imageToImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **text_prompts** | [**\OpenAPI\Client\Model\TextPrompt[]**](../Model/\OpenAPI\Client\Model\TextPrompt.md)| An array of text prompts to use for generation.  Due to how arrays are represented in &#x60;multipart/form-data&#x60; requests, prompts must adhear to the format &#x60;text_prompts[index][text|weight]&#x60;, where &#x60;index&#x60; is some integer used to tie the text and weight together.  While &#x60;index&#x60; does not have to be sequential, duplicate entries  will override previous entries, so it is recommended to use sequential indices.  Given a text prompt with the text &#x60;A lighthouse on a cliff&#x60; and a weight of &#x60;0.5&#x60;, it would be represented as: &#x60;&#x60;&#x60; text_prompts[0][text]: \\\&quot;A lighthouse on a cliff\\\&quot; text_prompts[0][weight]: 0.5 &#x60;&#x60;&#x60;  To add another prompt to that request simply provide the values under a new &#x60;index&#x60;:  &#x60;&#x60;&#x60; text_prompts[0][text]: \\\&quot;A lighthouse on a cliff\\\&quot; text_prompts[0][weight]: 0.5 text_prompts[1][text]: \\\&quot;land, ground, dirt, grass\\\&quot; text_prompts[1][weight]: -0.9 &#x60;&#x60;&#x60; | |
| **init_image** | **\SplFileObject****\SplFileObject**| Image used to initialize the diffusion process, in lieu of random noise. | |
| **accept** | **string**| The format of the response.  Leave blank for JSON, or set to &#39;image/png&#39; for a PNG image. | [optional] [default to &#39;application/json&#39;] |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |
| **init_image_mode** | [**\OpenAPI\Client\Model\InitImageMode**](../Model/InitImageMode.md)|  | [optional] |
| **image_strength** | **float**| How much influence the &#x60;init_image&#x60; has on the diffusion process. Values close to &#x60;1&#x60; will yield images very similar to the &#x60;init_image&#x60; while values close to &#x60;0&#x60; will yield images wildly different than the &#x60;init_image&#x60;. The behavior of this is meant to mirror DreamStudio&#39;s \\\&quot;Image Strength\\\&quot; slider.  &lt;br/&gt; &lt;br/&gt; This parameter is just an alternate way to set &#x60;step_schedule_start&#x60;, which is done via the calculation &#x60;1 - image_strength&#x60;. For example, passing in an Image Strength of 35% (&#x60;0.35&#x60;) would result in a &#x60;step_schedule_start&#x60; of &#x60;0.65&#x60;. | [optional] |
| **step_schedule_start** | **float**| Skips a proportion of the start of the diffusion steps, allowing the init_image to influence the final generated image.  Lower values will result in more influence from the init_image, while higher values will result in more influence from the diffusion steps.  (e.g. a value of &#x60;0&#x60; would simply return you the init_image, where a value of &#x60;1&#x60; would return you a completely different image.) | [optional] |
| **step_schedule_end** | **float**| Skips a proportion of the end of the diffusion steps, allowing the init_image to influence the final generated image.  Lower values will result in more influence from the init_image, while higher values will result in more influence from the diffusion steps. | [optional] |
| **cfg_scale** | **float**| How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt) | [optional] |
| **clip_guidance_preset** | [**\OpenAPI\Client\Model\ClipGuidancePreset**](../Model/ClipGuidancePreset.md)|  | [optional] |
| **height** | **int**| Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] |
| **width** | **int**| Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] |
| **sampler** | [**\OpenAPI\Client\Model\Sampler**](../Model/Sampler.md)|  | [optional] |
| **samples** | **int**| Number of images to generate | [optional] |
| **seed** | **int**| Random noise seed (omit this option or use &#x60;0&#x60; for a random seed) | [optional] |
| **steps** | **int**| Number of diffusion steps to run | [optional] |

### Return type

[**\OpenAPI\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `masking()`

```php
masking($engine_id, $init_image, $mask_source, $text_prompts, $accept, $organization, $mask_image, $cfg_scale, $clip_guidance_preset, $height, $width, $sampler, $samples, $seed, $steps): \OpenAPI\Client\Model\Image[]
```

image-to-image/masking

Paint fancy things into fancy pictures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1betaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-inpainting-512-v2-0; // string
$init_image = "/path/to/file.txt"; // \SplFileObject | Image used to initialize the diffusion process, in lieu of random noise.
$mask_source = 'mask_source_example'; // string | For any given pixel, the mask determines the strength of generation on a linear scale.  This parameter determines where to source the mask from: - `MASK_IMAGE_WHITE` will use the white pixels of the mask_image as the mask, where white pixels are completely replaced and black pixels are unchanged - `MASK_IMAGE_BLACK` will use the black pixels of the mask_image as the mask, where black pixels are completely replaced and white pixels are unchanged - `INIT_IMAGE_ALPHA` will use the alpha channel of the init_image as the mask, where fully transparent pixels are completely replaced and fully opaque pixels are unchanged
$text_prompts = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TextPrompt()); // \OpenAPI\Client\Model\TextPrompt[] | An array of text prompts to use for generation.  Due to how arrays are represented in `multipart/form-data` requests, prompts must adhear to the format `text_prompts[index][text|weight]`, where `index` is some integer used to tie the text and weight together.  While `index` does not have to be sequential, duplicate entries  will override previous entries, so it is recommended to use sequential indices.  Given a text prompt with the text `A lighthouse on a cliff` and a weight of `0.5`, it would be represented as: ``` text_prompts[0][text]: \\\"A lighthouse on a cliff\\\" text_prompts[0][weight]: 0.5 ```  To add another prompt to that request simply provide the values under a new `index`:  ``` text_prompts[0][text]: \\\"A lighthouse on a cliff\\\" text_prompts[0][weight]: 0.5 text_prompts[1][text]: \\\"land, ground, dirt, grass\\\" text_prompts[1][weight]: -0.9 ```
$accept = 'application/json'; // string | The format of the response.  Leave blank for JSON, or set to 'image/png' for a PNG image.
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.
$mask_image = "/path/to/file.txt"; // \SplFileObject | Optional grayscale mask that allows for influence over which pixels are eligible for diffusion and at what strength. Must be the same dimensions as the `init_image`. Use the `mask_source` option to specify whether the white or black pixels should be inpainted.
$cfg_scale = 3.4; // float | How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt)
$clip_guidance_preset = new \OpenAPI\Client\Model\ClipGuidancePreset(); // \OpenAPI\Client\Model\ClipGuidancePreset
$height = 56; // int | Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
$width = 56; // int | Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
$sampler = new \OpenAPI\Client\Model\Sampler(); // \OpenAPI\Client\Model\Sampler
$samples = 56; // int | Number of images to generate
$seed = 56; // int | Random noise seed (omit this option or use `0` for a random seed)
$steps = 56; // int | Number of diffusion steps to run

try {
    $result = $apiInstance->masking($engine_id, $init_image, $mask_source, $text_prompts, $accept, $organization, $mask_image, $cfg_scale, $clip_guidance_preset, $height, $width, $sampler, $samples, $seed, $steps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1betaGenerationApi->masking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **init_image** | **\SplFileObject****\SplFileObject**| Image used to initialize the diffusion process, in lieu of random noise. | |
| **mask_source** | **string**| For any given pixel, the mask determines the strength of generation on a linear scale.  This parameter determines where to source the mask from: - &#x60;MASK_IMAGE_WHITE&#x60; will use the white pixels of the mask_image as the mask, where white pixels are completely replaced and black pixels are unchanged - &#x60;MASK_IMAGE_BLACK&#x60; will use the black pixels of the mask_image as the mask, where black pixels are completely replaced and white pixels are unchanged - &#x60;INIT_IMAGE_ALPHA&#x60; will use the alpha channel of the init_image as the mask, where fully transparent pixels are completely replaced and fully opaque pixels are unchanged | |
| **text_prompts** | [**\OpenAPI\Client\Model\TextPrompt[]**](../Model/\OpenAPI\Client\Model\TextPrompt.md)| An array of text prompts to use for generation.  Due to how arrays are represented in &#x60;multipart/form-data&#x60; requests, prompts must adhear to the format &#x60;text_prompts[index][text|weight]&#x60;, where &#x60;index&#x60; is some integer used to tie the text and weight together.  While &#x60;index&#x60; does not have to be sequential, duplicate entries  will override previous entries, so it is recommended to use sequential indices.  Given a text prompt with the text &#x60;A lighthouse on a cliff&#x60; and a weight of &#x60;0.5&#x60;, it would be represented as: &#x60;&#x60;&#x60; text_prompts[0][text]: \\\&quot;A lighthouse on a cliff\\\&quot; text_prompts[0][weight]: 0.5 &#x60;&#x60;&#x60;  To add another prompt to that request simply provide the values under a new &#x60;index&#x60;:  &#x60;&#x60;&#x60; text_prompts[0][text]: \\\&quot;A lighthouse on a cliff\\\&quot; text_prompts[0][weight]: 0.5 text_prompts[1][text]: \\\&quot;land, ground, dirt, grass\\\&quot; text_prompts[1][weight]: -0.9 &#x60;&#x60;&#x60; | |
| **accept** | **string**| The format of the response.  Leave blank for JSON, or set to &#39;image/png&#39; for a PNG image. | [optional] [default to &#39;application/json&#39;] |
| **organization** | **string**| Allows for requests to be scoped to an organization other than the user&#39;s default.  If not provided, the user&#39;s default organization will be used. | [optional] |
| **mask_image** | **\SplFileObject****\SplFileObject**| Optional grayscale mask that allows for influence over which pixels are eligible for diffusion and at what strength. Must be the same dimensions as the &#x60;init_image&#x60;. Use the &#x60;mask_source&#x60; option to specify whether the white or black pixels should be inpainted. | [optional] |
| **cfg_scale** | **float**| How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt) | [optional] |
| **clip_guidance_preset** | [**\OpenAPI\Client\Model\ClipGuidancePreset**](../Model/ClipGuidancePreset.md)|  | [optional] |
| **height** | **int**| Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] |
| **width** | **int**| Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] |
| **sampler** | [**\OpenAPI\Client\Model\Sampler**](../Model/Sampler.md)|  | [optional] |
| **samples** | **int**| Number of images to generate | [optional] |
| **seed** | **int**| Random noise seed (omit this option or use &#x60;0&#x60; for a random seed) | [optional] |
| **steps** | **int**| Number of diffusion steps to run | [optional] |

### Return type

[**\OpenAPI\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[STABILITY_API_KEY](../../README.md#STABILITY_API_KEY)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `textToImage()`

```php
textToImage($engine_id, $text_to_image_request_body, $accept, $organization): \OpenAPI\Client\Model\Image[]
```

text-to-image

Generate an image from text

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1betaGenerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_id = stable-diffusion-512-v2-0; // string
$text_to_image_request_body = {"cfg_scale":7,"clip_guidance_preset":"FAST_BLUE","height":512,"width":512,"sampler":"K_DPM_2_ANCESTRAL","samples":1,"steps":75,"text_prompts":[{"text":"A lighthouse on a cliff","weight":1}]}; // \OpenAPI\Client\Model\TextToImageRequestBody
$accept = 'application/json'; // string | The format of the response.  Leave blank for JSON, or set to 'image/png' for a PNG image.
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.

try {
    $result = $apiInstance->textToImage($engine_id, $text_to_image_request_body, $accept, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1betaGenerationApi->textToImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_id** | **string**|  | |
| **text_to_image_request_body** | [**\OpenAPI\Client\Model\TextToImageRequestBody**](../Model/TextToImageRequestBody.md)|  | |
| **accept** | **string**| The format of the response.  Leave blank for JSON, or set to &#39;image/png&#39; for a PNG image. | [optional] [default to &#39;application/json&#39;] |
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
