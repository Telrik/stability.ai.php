# # GenerationRequestOptionalParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cfg_scale** | **float** | How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt) | [optional] [default to 7]
**clip_guidance_preset** | [**\OpenAPI\Client\Model\ClipGuidancePreset**](ClipGuidancePreset.md) |  | [optional]
**height** | **int** | Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] [default to 512]
**width** | **int** | Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;589,824 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; - All other engines: &lt;span style&#x3D;&#39;display: flex; justify-content: flex-start; gap:8px&#39;&gt;262,144 &lt;span&gt;≤&lt;/span&gt; &#x60;height * width&#x60; &lt;span&gt;≤&lt;/span&gt; 1,048,576&lt;/span&gt; | [optional] [default to 512]
**sampler** | [**\OpenAPI\Client\Model\Sampler**](Sampler.md) |  | [optional]
**samples** | **int** | Number of images to generate | [optional] [default to 1]
**seed** | **int** | Random noise seed (omit this option or use &#x60;0&#x60; for a random seed) | [optional] [default to 0]
**steps** | **int** | Number of diffusion steps to run | [optional] [default to 50]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
