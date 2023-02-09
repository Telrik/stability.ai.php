# # ImageToImageUsingImageStrengthRequestBodyAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text_prompts** | [**\OpenAPI\Client\Model\TextPrompt[]**](TextPrompt.md) | An array of text prompts to use for generation.  Due to how arrays are represented in &#x60;multipart/form-data&#x60; requests, prompts must adhear to the format &#x60;text_prompts[index][text|weight]&#x60;, where &#x60;index&#x60; is some integer used to tie the text and weight together.  While &#x60;index&#x60; does not have to be sequential, duplicate entries  will override previous entries, so it is recommended to use sequential indices.  Given a text prompt with the text &#x60;A lighthouse on a cliff&#x60; and a weight of &#x60;0.5&#x60;, it would be represented as: &#x60;&#x60;&#x60; text_prompts[0][text]: \&quot;A lighthouse on a cliff\&quot; text_prompts[0][weight]: 0.5 &#x60;&#x60;&#x60;  To add another prompt to that request simply provide the values under a new &#x60;index&#x60;:  &#x60;&#x60;&#x60; text_prompts[0][text]: \&quot;A lighthouse on a cliff\&quot; text_prompts[0][weight]: 0.5 text_prompts[1][text]: \&quot;land, ground, dirt, grass\&quot; text_prompts[1][weight]: -0.9 &#x60;&#x60;&#x60; |
**init_image** | **\SplFileObject** | Image used to initialize the diffusion process, in lieu of random noise. |
**init_image_mode** | [**\OpenAPI\Client\Model\InitImageMode**](InitImageMode.md) |  | [optional]
**image_strength** | **float** | How much influence the &#x60;init_image&#x60; has on the diffusion process. Values close to &#x60;1&#x60; will yield images very similar to the &#x60;init_image&#x60; while values close to &#x60;0&#x60; will yield images wildly different than the &#x60;init_image&#x60;. The behavior of this is meant to mirror DreamStudio&#39;s \&quot;Image Strength\&quot; slider.  &lt;br/&gt; &lt;br/&gt; This parameter is just an alternate way to set &#x60;step_schedule_start&#x60;, which is done via the calculation &#x60;1 - image_strength&#x60;. For example, passing in an Image Strength of 35% (&#x60;0.35&#x60;) would result in a &#x60;step_schedule_start&#x60; of &#x60;0.65&#x60;. | [optional] [default to 0.35]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
