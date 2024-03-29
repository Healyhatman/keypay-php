<?php
/**
 * WhiteLabelBrandingModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Australia
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: AU
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
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
 * WhiteLabelBrandingModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhiteLabelBrandingModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhiteLabelBrandingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_url' => 'string',
        'background_image_url' => 'string',
        'background_colour' => 'string',
        'text_colour' => 'string',
        'text_hover_colour' => 'string',
        'text_secondary_colour' => 'string',
        'dark_mode_logo_url' => 'string',
        'dark_mode_background_colour' => 'string',
        'dark_mode_text_colour' => 'string',
        'dark_mode_text_secondary_colour' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_url' => null,
        'background_image_url' => null,
        'background_colour' => null,
        'text_colour' => null,
        'text_hover_colour' => null,
        'text_secondary_colour' => null,
        'dark_mode_logo_url' => null,
        'dark_mode_background_colour' => null,
        'dark_mode_text_colour' => null,
        'dark_mode_text_secondary_colour' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'logo_url' => false,
		'background_image_url' => false,
		'background_colour' => false,
		'text_colour' => false,
		'text_hover_colour' => false,
		'text_secondary_colour' => false,
		'dark_mode_logo_url' => false,
		'dark_mode_background_colour' => false,
		'dark_mode_text_colour' => false,
		'dark_mode_text_secondary_colour' => false
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
        'logo_url' => 'logoUrl',
        'background_image_url' => 'backgroundImageUrl',
        'background_colour' => 'backgroundColour',
        'text_colour' => 'textColour',
        'text_hover_colour' => 'textHoverColour',
        'text_secondary_colour' => 'textSecondaryColour',
        'dark_mode_logo_url' => 'darkModeLogoUrl',
        'dark_mode_background_colour' => 'darkModeBackgroundColour',
        'dark_mode_text_colour' => 'darkModeTextColour',
        'dark_mode_text_secondary_colour' => 'darkModeTextSecondaryColour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_url' => 'setLogoUrl',
        'background_image_url' => 'setBackgroundImageUrl',
        'background_colour' => 'setBackgroundColour',
        'text_colour' => 'setTextColour',
        'text_hover_colour' => 'setTextHoverColour',
        'text_secondary_colour' => 'setTextSecondaryColour',
        'dark_mode_logo_url' => 'setDarkModeLogoUrl',
        'dark_mode_background_colour' => 'setDarkModeBackgroundColour',
        'dark_mode_text_colour' => 'setDarkModeTextColour',
        'dark_mode_text_secondary_colour' => 'setDarkModeTextSecondaryColour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_url' => 'getLogoUrl',
        'background_image_url' => 'getBackgroundImageUrl',
        'background_colour' => 'getBackgroundColour',
        'text_colour' => 'getTextColour',
        'text_hover_colour' => 'getTextHoverColour',
        'text_secondary_colour' => 'getTextSecondaryColour',
        'dark_mode_logo_url' => 'getDarkModeLogoUrl',
        'dark_mode_background_colour' => 'getDarkModeBackgroundColour',
        'dark_mode_text_colour' => 'getDarkModeTextColour',
        'dark_mode_text_secondary_colour' => 'getDarkModeTextSecondaryColour'
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
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('background_image_url', $data ?? [], null);
        $this->setIfExists('background_colour', $data ?? [], null);
        $this->setIfExists('text_colour', $data ?? [], null);
        $this->setIfExists('text_hover_colour', $data ?? [], null);
        $this->setIfExists('text_secondary_colour', $data ?? [], null);
        $this->setIfExists('dark_mode_logo_url', $data ?? [], null);
        $this->setIfExists('dark_mode_background_colour', $data ?? [], null);
        $this->setIfExists('dark_mode_text_colour', $data ?? [], null);
        $this->setIfExists('dark_mode_text_secondary_colour', $data ?? [], null);
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
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url 
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        if (is_null($logo_url)) {
            throw new \InvalidArgumentException('non-nullable logo_url cannot be null');
        }
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets background_image_url
     *
     * @return string|null
     */
    public function getBackgroundImageUrl()
    {
        return $this->container['background_image_url'];
    }

    /**
     * Sets background_image_url
     *
     * @param string|null $background_image_url 
     *
     * @return self
     */
    public function setBackgroundImageUrl($background_image_url)
    {
        if (is_null($background_image_url)) {
            throw new \InvalidArgumentException('non-nullable background_image_url cannot be null');
        }
        $this->container['background_image_url'] = $background_image_url;

        return $this;
    }

    /**
     * Gets background_colour
     *
     * @return string|null
     */
    public function getBackgroundColour()
    {
        return $this->container['background_colour'];
    }

    /**
     * Sets background_colour
     *
     * @param string|null $background_colour 
     *
     * @return self
     */
    public function setBackgroundColour($background_colour)
    {
        if (is_null($background_colour)) {
            throw new \InvalidArgumentException('non-nullable background_colour cannot be null');
        }
        $this->container['background_colour'] = $background_colour;

        return $this;
    }

    /**
     * Gets text_colour
     *
     * @return string|null
     */
    public function getTextColour()
    {
        return $this->container['text_colour'];
    }

    /**
     * Sets text_colour
     *
     * @param string|null $text_colour 
     *
     * @return self
     */
    public function setTextColour($text_colour)
    {
        if (is_null($text_colour)) {
            throw new \InvalidArgumentException('non-nullable text_colour cannot be null');
        }
        $this->container['text_colour'] = $text_colour;

        return $this;
    }

    /**
     * Gets text_hover_colour
     *
     * @return string|null
     */
    public function getTextHoverColour()
    {
        return $this->container['text_hover_colour'];
    }

    /**
     * Sets text_hover_colour
     *
     * @param string|null $text_hover_colour 
     *
     * @return self
     */
    public function setTextHoverColour($text_hover_colour)
    {
        if (is_null($text_hover_colour)) {
            throw new \InvalidArgumentException('non-nullable text_hover_colour cannot be null');
        }
        $this->container['text_hover_colour'] = $text_hover_colour;

        return $this;
    }

    /**
     * Gets text_secondary_colour
     *
     * @return string|null
     */
    public function getTextSecondaryColour()
    {
        return $this->container['text_secondary_colour'];
    }

    /**
     * Sets text_secondary_colour
     *
     * @param string|null $text_secondary_colour 
     *
     * @return self
     */
    public function setTextSecondaryColour($text_secondary_colour)
    {
        if (is_null($text_secondary_colour)) {
            throw new \InvalidArgumentException('non-nullable text_secondary_colour cannot be null');
        }
        $this->container['text_secondary_colour'] = $text_secondary_colour;

        return $this;
    }

    /**
     * Gets dark_mode_logo_url
     *
     * @return string|null
     */
    public function getDarkModeLogoUrl()
    {
        return $this->container['dark_mode_logo_url'];
    }

    /**
     * Sets dark_mode_logo_url
     *
     * @param string|null $dark_mode_logo_url 
     *
     * @return self
     */
    public function setDarkModeLogoUrl($dark_mode_logo_url)
    {
        if (is_null($dark_mode_logo_url)) {
            throw new \InvalidArgumentException('non-nullable dark_mode_logo_url cannot be null');
        }
        $this->container['dark_mode_logo_url'] = $dark_mode_logo_url;

        return $this;
    }

    /**
     * Gets dark_mode_background_colour
     *
     * @return string|null
     */
    public function getDarkModeBackgroundColour()
    {
        return $this->container['dark_mode_background_colour'];
    }

    /**
     * Sets dark_mode_background_colour
     *
     * @param string|null $dark_mode_background_colour 
     *
     * @return self
     */
    public function setDarkModeBackgroundColour($dark_mode_background_colour)
    {
        if (is_null($dark_mode_background_colour)) {
            throw new \InvalidArgumentException('non-nullable dark_mode_background_colour cannot be null');
        }
        $this->container['dark_mode_background_colour'] = $dark_mode_background_colour;

        return $this;
    }

    /**
     * Gets dark_mode_text_colour
     *
     * @return string|null
     */
    public function getDarkModeTextColour()
    {
        return $this->container['dark_mode_text_colour'];
    }

    /**
     * Sets dark_mode_text_colour
     *
     * @param string|null $dark_mode_text_colour 
     *
     * @return self
     */
    public function setDarkModeTextColour($dark_mode_text_colour)
    {
        if (is_null($dark_mode_text_colour)) {
            throw new \InvalidArgumentException('non-nullable dark_mode_text_colour cannot be null');
        }
        $this->container['dark_mode_text_colour'] = $dark_mode_text_colour;

        return $this;
    }

    /**
     * Gets dark_mode_text_secondary_colour
     *
     * @return string|null
     */
    public function getDarkModeTextSecondaryColour()
    {
        return $this->container['dark_mode_text_secondary_colour'];
    }

    /**
     * Sets dark_mode_text_secondary_colour
     *
     * @param string|null $dark_mode_text_secondary_colour 
     *
     * @return self
     */
    public function setDarkModeTextSecondaryColour($dark_mode_text_secondary_colour)
    {
        if (is_null($dark_mode_text_secondary_colour)) {
            throw new \InvalidArgumentException('non-nullable dark_mode_text_secondary_colour cannot be null');
        }
        $this->container['dark_mode_text_secondary_colour'] = $dark_mode_text_secondary_colour;

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


