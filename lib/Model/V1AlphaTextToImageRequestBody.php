<?php
/**
 * V1AlphaTextToImageRequestBody
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V1AlphaTextToImageRequestBody Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AlphaTextToImageRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V1AlphaTextToImageRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cfg_scale' => 'float',
        'clip_guidance_preset' => '\OpenAPI\Client\Model\ClipGuidancePreset',
        'height' => 'int',
        'width' => 'int',
        'sampler' => '\OpenAPI\Client\Model\Sampler',
        'samples' => 'int',
        'seed' => 'int',
        'steps' => 'int',
        'text_prompts' => '\OpenAPI\Client\Model\V1AlphaTextPrompt[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cfg_scale' => null,
        'clip_guidance_preset' => null,
        'height' => null,
        'width' => null,
        'sampler' => null,
        'samples' => null,
        'seed' => null,
        'steps' => null,
        'text_prompts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cfg_scale' => false,
		'clip_guidance_preset' => false,
		'height' => false,
		'width' => false,
		'sampler' => false,
		'samples' => false,
		'seed' => false,
		'steps' => false,
		'text_prompts' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cfg_scale' => 'cfg_scale',
        'clip_guidance_preset' => 'clip_guidance_preset',
        'height' => 'height',
        'width' => 'width',
        'sampler' => 'sampler',
        'samples' => 'samples',
        'seed' => 'seed',
        'steps' => 'steps',
        'text_prompts' => 'text_prompts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cfg_scale' => 'setCfgScale',
        'clip_guidance_preset' => 'setClipGuidancePreset',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'sampler' => 'setSampler',
        'samples' => 'setSamples',
        'seed' => 'setSeed',
        'steps' => 'setSteps',
        'text_prompts' => 'setTextPrompts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cfg_scale' => 'getCfgScale',
        'clip_guidance_preset' => 'getClipGuidancePreset',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'sampler' => 'getSampler',
        'samples' => 'getSamples',
        'seed' => 'getSeed',
        'steps' => 'getSteps',
        'text_prompts' => 'getTextPrompts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('cfg_scale', $data ?? [], 7);
        $this->setIfExists('clip_guidance_preset', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], 512);
        $this->setIfExists('width', $data ?? [], 512);
        $this->setIfExists('sampler', $data ?? [], null);
        $this->setIfExists('samples', $data ?? [], 1);
        $this->setIfExists('seed', $data ?? [], 0);
        $this->setIfExists('steps', $data ?? [], 50);
        $this->setIfExists('text_prompts', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cfg_scale']) && ($this->container['cfg_scale'] > 35)) {
            $invalidProperties[] = "invalid value for 'cfg_scale', must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['cfg_scale']) && ($this->container['cfg_scale'] < 0)) {
            $invalidProperties[] = "invalid value for 'cfg_scale', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['height']) && ($this->container['height'] < 128)) {
            $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 128.";
        }

        if (!is_null($this->container['width']) && ($this->container['width'] < 128)) {
            $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 128.";
        }

        if (!is_null($this->container['samples']) && ($this->container['samples'] > 10)) {
            $invalidProperties[] = "invalid value for 'samples', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['samples']) && ($this->container['samples'] < 1)) {
            $invalidProperties[] = "invalid value for 'samples', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['seed']) && ($this->container['seed'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'seed', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['seed']) && ($this->container['seed'] < 0)) {
            $invalidProperties[] = "invalid value for 'seed', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['steps']) && ($this->container['steps'] > 150)) {
            $invalidProperties[] = "invalid value for 'steps', must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['steps']) && ($this->container['steps'] < 10)) {
            $invalidProperties[] = "invalid value for 'steps', must be bigger than or equal to 10.";
        }

        if ($this->container['text_prompts'] === null) {
            $invalidProperties[] = "'text_prompts' can't be null";
        }
        if ((count($this->container['text_prompts']) < 1)) {
            $invalidProperties[] = "invalid value for 'text_prompts', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cfg_scale
     *
     * @return float|null
     */
    public function getCfgScale()
    {
        return $this->container['cfg_scale'];
    }

    /**
     * Sets cfg_scale
     *
     * @param float|null $cfg_scale How strictly the diffusion process adheres to the prompt text (higher values keep your image closer to your prompt)
     *
     * @return self
     */
    public function setCfgScale($cfg_scale)
    {
        if (is_null($cfg_scale)) {
            throw new \InvalidArgumentException('non-nullable cfg_scale cannot be null');
        }

        if (($cfg_scale > 35)) {
            throw new \InvalidArgumentException('invalid value for $cfg_scale when calling V1AlphaTextToImageRequestBody., must be smaller than or equal to 35.');
        }
        if (($cfg_scale < 0)) {
            throw new \InvalidArgumentException('invalid value for $cfg_scale when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 0.');
        }

        $this->container['cfg_scale'] = $cfg_scale;

        return $this;
    }

    /**
     * Gets clip_guidance_preset
     *
     * @return \OpenAPI\Client\Model\ClipGuidancePreset|null
     */
    public function getClipGuidancePreset()
    {
        return $this->container['clip_guidance_preset'];
    }

    /**
     * Sets clip_guidance_preset
     *
     * @param \OpenAPI\Client\Model\ClipGuidancePreset|null $clip_guidance_preset clip_guidance_preset
     *
     * @return self
     */
    public function setClipGuidancePreset($clip_guidance_preset)
    {
        if (is_null($clip_guidance_preset)) {
            throw new \InvalidArgumentException('non-nullable clip_guidance_preset cannot be null');
        }
        $this->container['clip_guidance_preset'] = $clip_guidance_preset;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height Width of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }

        if (($height < 128)) {
            throw new \InvalidArgumentException('invalid value for $height when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 128.');
        }

        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Height of the image in pixels.  Must be in increments of 64 and pass the following validation: - For 768 engines: <span style='display: flex; justify-content: flex-start; gap:8px'>589,824 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span> - All other engines: <span style='display: flex; justify-content: flex-start; gap:8px'>262,144 <span>≤</span> `height * width` <span>≤</span> 1,048,576</span>
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }

        if (($width < 128)) {
            throw new \InvalidArgumentException('invalid value for $width when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 128.');
        }

        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets sampler
     *
     * @return \OpenAPI\Client\Model\Sampler|null
     */
    public function getSampler()
    {
        return $this->container['sampler'];
    }

    /**
     * Sets sampler
     *
     * @param \OpenAPI\Client\Model\Sampler|null $sampler sampler
     *
     * @return self
     */
    public function setSampler($sampler)
    {
        if (is_null($sampler)) {
            throw new \InvalidArgumentException('non-nullable sampler cannot be null');
        }
        $this->container['sampler'] = $sampler;

        return $this;
    }

    /**
     * Gets samples
     *
     * @return int|null
     */
    public function getSamples()
    {
        return $this->container['samples'];
    }

    /**
     * Sets samples
     *
     * @param int|null $samples Number of images to generate
     *
     * @return self
     */
    public function setSamples($samples)
    {
        if (is_null($samples)) {
            throw new \InvalidArgumentException('non-nullable samples cannot be null');
        }

        if (($samples > 10)) {
            throw new \InvalidArgumentException('invalid value for $samples when calling V1AlphaTextToImageRequestBody., must be smaller than or equal to 10.');
        }
        if (($samples < 1)) {
            throw new \InvalidArgumentException('invalid value for $samples when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 1.');
        }

        $this->container['samples'] = $samples;

        return $this;
    }

    /**
     * Gets seed
     *
     * @return int|null
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     *
     * @param int|null $seed Random noise seed (omit this option or use `0` for a random seed)
     *
     * @return self
     */
    public function setSeed($seed)
    {
        if (is_null($seed)) {
            throw new \InvalidArgumentException('non-nullable seed cannot be null');
        }

        if (($seed > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $seed when calling V1AlphaTextToImageRequestBody., must be smaller than or equal to 2147483647.');
        }
        if (($seed < 0)) {
            throw new \InvalidArgumentException('invalid value for $seed when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 0.');
        }

        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return int|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param int|null $steps Number of diffusion steps to run
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }

        if (($steps > 150)) {
            throw new \InvalidArgumentException('invalid value for $steps when calling V1AlphaTextToImageRequestBody., must be smaller than or equal to 150.');
        }
        if (($steps < 10)) {
            throw new \InvalidArgumentException('invalid value for $steps when calling V1AlphaTextToImageRequestBody., must be bigger than or equal to 10.');
        }

        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets text_prompts
     *
     * @return \OpenAPI\Client\Model\V1AlphaTextPrompt[]
     */
    public function getTextPrompts()
    {
        return $this->container['text_prompts'];
    }

    /**
     * Sets text_prompts
     *
     * @param \OpenAPI\Client\Model\V1AlphaTextPrompt[] $text_prompts text_prompts
     *
     * @return self
     */
    public function setTextPrompts($text_prompts)
    {
        if (is_null($text_prompts)) {
            throw new \InvalidArgumentException('non-nullable text_prompts cannot be null');
        }


        if ((count($text_prompts) < 1)) {
            throw new \InvalidArgumentException('invalid length for $text_prompts when calling V1AlphaTextToImageRequestBody., number of items must be greater than or equal to 1.');
        }
        $this->container['text_prompts'] = $text_prompts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

