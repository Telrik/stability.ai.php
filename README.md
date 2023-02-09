# OpenAPIClient-php

Welcome to the Stability.ai REST API developer preview!

Please note, this is an beta version of our new REST API.

API operations use the following versioning scheme:
- `/v*alpha*`: under development and the interface is subject to change
- `/v*beta*`: interface is stable, preparing for production release
- `/v*` interface is stable and ready for production workloads

Your DreamStudio API key will be required for authentication: [How to find your API key](https://platform.stability.ai/docs/getting-started/authentication)

If you have feedback or encounter any issues with the API, please reach out:
  - [https://github.com/Stability-AI/REST-API](https://github.com/Stability-AI/REST-API)
  - [https://discord.gg/stablediffusion #API channel](https://discord.com/channels/1002292111942635562/1042896447311454361)



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: STABILITY_API_KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\V1alphaEnginesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = sk-KT........; // string
$organization = org-123456; // string | Allows for requests to be scoped to an organization other than the user's default.  If not provided, the user's default organization will be used.

try {
    $result = $apiInstance->v1AlphalistEngines($authorization, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V1alphaEnginesApi->v1AlphalistEngines: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.stability.ai*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*V1alphaEnginesApi* | [**v1AlphalistEngines**](docs/Api/V1alphaEnginesApi.md#v1alphalistengines) | **GET** /v1alpha/engines/list | list
*V1alphaGenerationApi* | [**v1AlphaimageToImage**](docs/Api/V1alphaGenerationApi.md#v1alphaimagetoimage) | **POST** /v1alpha/generation/{engine_id}/image-to-image | image-to-image
*V1alphaGenerationApi* | [**v1Alphamasking**](docs/Api/V1alphaGenerationApi.md#v1alphamasking) | **POST** /v1alpha/generation/{engine_id}/image-to-image/masking | image-to-image/masking
*V1alphaGenerationApi* | [**v1AlphatextToImage**](docs/Api/V1alphaGenerationApi.md#v1alphatexttoimage) | **POST** /v1alpha/generation/{engine_id}/text-to-image | text-to-image
*V1alphaUserApi* | [**v1AlphauserAccount**](docs/Api/V1alphaUserApi.md#v1alphauseraccount) | **GET** /v1alpha/user/account | account
*V1alphaUserApi* | [**v1AlphauserBalance**](docs/Api/V1alphaUserApi.md#v1alphauserbalance) | **GET** /v1alpha/user/balance | balance
*V1betaEnginesApi* | [**listEngines**](docs/Api/V1betaEnginesApi.md#listengines) | **GET** /v1beta/engines/list | list
*V1betaGenerationApi* | [**imageToImage**](docs/Api/V1betaGenerationApi.md#imagetoimage) | **POST** /v1beta/generation/{engine_id}/image-to-image | image-to-image
*V1betaGenerationApi* | [**masking**](docs/Api/V1betaGenerationApi.md#masking) | **POST** /v1beta/generation/{engine_id}/image-to-image/masking | image-to-image/masking
*V1betaGenerationApi* | [**textToImage**](docs/Api/V1betaGenerationApi.md#texttoimage) | **POST** /v1beta/generation/{engine_id}/text-to-image | text-to-image
*V1betaUserApi* | [**userAccount**](docs/Api/V1betaUserApi.md#useraccount) | **GET** /v1beta/user/account | account
*V1betaUserApi* | [**userBalance**](docs/Api/V1betaUserApi.md#userbalance) | **GET** /v1beta/user/balance | balance

## Models

- [AccountResponseBody](docs/Model/AccountResponseBody.md)
- [BalanceResponseBody](docs/Model/BalanceResponseBody.md)
- [ClipGuidancePreset](docs/Model/ClipGuidancePreset.md)
- [Engine](docs/Model/Engine.md)
- [Error](docs/Model/Error.md)
- [FinishReason](docs/Model/FinishReason.md)
- [GenerationRequestOptionalParams](docs/Model/GenerationRequestOptionalParams.md)
- [Image](docs/Model/Image.md)
- [ImageToImageUsingImageStrengthRequestBody](docs/Model/ImageToImageUsingImageStrengthRequestBody.md)
- [ImageToImageUsingImageStrengthRequestBodyAllOf](docs/Model/ImageToImageUsingImageStrengthRequestBodyAllOf.md)
- [ImageToImageUsingStepScheduleRequestBody](docs/Model/ImageToImageUsingStepScheduleRequestBody.md)
- [ImageToImageUsingStepScheduleRequestBodyAllOf](docs/Model/ImageToImageUsingStepScheduleRequestBodyAllOf.md)
- [ListEnginesResponseBody](docs/Model/ListEnginesResponseBody.md)
- [MaskingUsingInitImageAlphaRequestBody](docs/Model/MaskingUsingInitImageAlphaRequestBody.md)
- [MaskingUsingInitImageAlphaRequestBodyAllOf](docs/Model/MaskingUsingInitImageAlphaRequestBodyAllOf.md)
- [MaskingUsingMaskImageRequestBody](docs/Model/MaskingUsingMaskImageRequestBody.md)
- [MaskingUsingMaskImageRequestBodyAllOf](docs/Model/MaskingUsingMaskImageRequestBodyAllOf.md)
- [OrganizationMembership](docs/Model/OrganizationMembership.md)
- [Sampler](docs/Model/Sampler.md)
- [TextPrompt](docs/Model/TextPrompt.md)
- [TextToImageRequestBody](docs/Model/TextToImageRequestBody.md)
- [TextToImageRequestBodyAllOf](docs/Model/TextToImageRequestBodyAllOf.md)
- [V1AlphaAccountResponseBody](docs/Model/V1AlphaAccountResponseBody.md)
- [V1AlphaError](docs/Model/V1AlphaError.md)
- [V1AlphaListEnginesResponseBody](docs/Model/V1AlphaListEnginesResponseBody.md)
- [V1AlphaOrganizationMembership](docs/Model/V1AlphaOrganizationMembership.md)
- [V1AlphaTextToImageRequestBody](docs/Model/V1AlphaTextToImageRequestBody.md)

## Authorization

### STABILITY_API_KEY

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
