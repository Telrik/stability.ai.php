<?php
/**
 * FinishReason
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stability.ai REST API
 *
 * Welcome to the Stability.ai REST API developer preview!  Please note, this is an beta version of our new REST API.  API operations use the following versioning scheme: - `/v*alpha*`: under development and the interface is subject to change - `/v*beta*`: interface is stable, preparing for production release - `/v*` interface is stable and ready for production workloads  Your DreamStudio API key will be required for authentication: [How to find your API key](https://platform.stability.ai/docs/getting-started/authentication)  If you have feedback or encounter any issues with the API, please reach out:   - [https://github.com/Stability-AI/REST-API](https://github.com/Stability-AI/REST-API)   - [https://discord.gg/stablediffusion #API channel](https://discord.com/channels/1002292111942635562/1042896447311454361)
 *
 * The version of the OpenAPI document: v1beta
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FinishReason Class Doc Comment
 *
 * @category Class
 * @description The result of the generation process. - &#x60;SUCCESS&#x60; indicates success - &#x60;ERROR&#x60; indicates an error - &#x60;CONTENT_FILTERED&#x60; indicates the result affected by the content filter and may be blurred.  This header is only present when the &#x60;Accept&#x60; is set to &#x60;image/png&#x60;.  Otherwise it is returned in the response body.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FinishReason
{
    /**
     * Possible values of this enum
     */
    public const SUCCESS = 'SUCCESS';

    public const ERROR = 'ERROR';

    public const CONTENT_FILTERED = 'CONTENT_FILTERED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::ERROR,
            self::CONTENT_FILTERED
        ];
    }
}


