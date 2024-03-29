<?php
/**
 * EmployeeDetailsFields
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
 * EmployeeDetailsFields Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmployeeDetailsFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeDetailsFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'show_start_date' => 'bool',
        'show_title' => 'bool',
        'show_preferred_name' => 'bool',
        'show_previous_surname' => 'bool',
        'show_gender' => 'bool',
        'show_date_of_birth' => 'bool',
        'show_anniversary_date' => 'bool',
        'show_postal_address' => 'bool',
        'is_name_mandatory' => 'bool',
        'is_address_mandatory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'show_start_date' => null,
        'show_title' => null,
        'show_preferred_name' => null,
        'show_previous_surname' => null,
        'show_gender' => null,
        'show_date_of_birth' => null,
        'show_anniversary_date' => null,
        'show_postal_address' => null,
        'is_name_mandatory' => null,
        'is_address_mandatory' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'show_start_date' => false,
		'show_title' => false,
		'show_preferred_name' => false,
		'show_previous_surname' => false,
		'show_gender' => false,
		'show_date_of_birth' => false,
		'show_anniversary_date' => false,
		'show_postal_address' => false,
		'is_name_mandatory' => false,
		'is_address_mandatory' => false
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
        'show_start_date' => 'showStartDate',
        'show_title' => 'showTitle',
        'show_preferred_name' => 'showPreferredName',
        'show_previous_surname' => 'showPreviousSurname',
        'show_gender' => 'showGender',
        'show_date_of_birth' => 'showDateOfBirth',
        'show_anniversary_date' => 'showAnniversaryDate',
        'show_postal_address' => 'showPostalAddress',
        'is_name_mandatory' => 'isNameMandatory',
        'is_address_mandatory' => 'isAddressMandatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_start_date' => 'setShowStartDate',
        'show_title' => 'setShowTitle',
        'show_preferred_name' => 'setShowPreferredName',
        'show_previous_surname' => 'setShowPreviousSurname',
        'show_gender' => 'setShowGender',
        'show_date_of_birth' => 'setShowDateOfBirth',
        'show_anniversary_date' => 'setShowAnniversaryDate',
        'show_postal_address' => 'setShowPostalAddress',
        'is_name_mandatory' => 'setIsNameMandatory',
        'is_address_mandatory' => 'setIsAddressMandatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_start_date' => 'getShowStartDate',
        'show_title' => 'getShowTitle',
        'show_preferred_name' => 'getShowPreferredName',
        'show_previous_surname' => 'getShowPreviousSurname',
        'show_gender' => 'getShowGender',
        'show_date_of_birth' => 'getShowDateOfBirth',
        'show_anniversary_date' => 'getShowAnniversaryDate',
        'show_postal_address' => 'getShowPostalAddress',
        'is_name_mandatory' => 'getIsNameMandatory',
        'is_address_mandatory' => 'getIsAddressMandatory'
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
        $this->setIfExists('show_start_date', $data ?? [], null);
        $this->setIfExists('show_title', $data ?? [], null);
        $this->setIfExists('show_preferred_name', $data ?? [], null);
        $this->setIfExists('show_previous_surname', $data ?? [], null);
        $this->setIfExists('show_gender', $data ?? [], null);
        $this->setIfExists('show_date_of_birth', $data ?? [], null);
        $this->setIfExists('show_anniversary_date', $data ?? [], null);
        $this->setIfExists('show_postal_address', $data ?? [], null);
        $this->setIfExists('is_name_mandatory', $data ?? [], null);
        $this->setIfExists('is_address_mandatory', $data ?? [], null);
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
     * Gets show_start_date
     *
     * @return bool|null
     */
    public function getShowStartDate()
    {
        return $this->container['show_start_date'];
    }

    /**
     * Sets show_start_date
     *
     * @param bool|null $show_start_date 
     *
     * @return self
     */
    public function setShowStartDate($show_start_date)
    {
        if (is_null($show_start_date)) {
            throw new \InvalidArgumentException('non-nullable show_start_date cannot be null');
        }
        $this->container['show_start_date'] = $show_start_date;

        return $this;
    }

    /**
     * Gets show_title
     *
     * @return bool|null
     */
    public function getShowTitle()
    {
        return $this->container['show_title'];
    }

    /**
     * Sets show_title
     *
     * @param bool|null $show_title 
     *
     * @return self
     */
    public function setShowTitle($show_title)
    {
        if (is_null($show_title)) {
            throw new \InvalidArgumentException('non-nullable show_title cannot be null');
        }
        $this->container['show_title'] = $show_title;

        return $this;
    }

    /**
     * Gets show_preferred_name
     *
     * @return bool|null
     */
    public function getShowPreferredName()
    {
        return $this->container['show_preferred_name'];
    }

    /**
     * Sets show_preferred_name
     *
     * @param bool|null $show_preferred_name 
     *
     * @return self
     */
    public function setShowPreferredName($show_preferred_name)
    {
        if (is_null($show_preferred_name)) {
            throw new \InvalidArgumentException('non-nullable show_preferred_name cannot be null');
        }
        $this->container['show_preferred_name'] = $show_preferred_name;

        return $this;
    }

    /**
     * Gets show_previous_surname
     *
     * @return bool|null
     */
    public function getShowPreviousSurname()
    {
        return $this->container['show_previous_surname'];
    }

    /**
     * Sets show_previous_surname
     *
     * @param bool|null $show_previous_surname 
     *
     * @return self
     */
    public function setShowPreviousSurname($show_previous_surname)
    {
        if (is_null($show_previous_surname)) {
            throw new \InvalidArgumentException('non-nullable show_previous_surname cannot be null');
        }
        $this->container['show_previous_surname'] = $show_previous_surname;

        return $this;
    }

    /**
     * Gets show_gender
     *
     * @return bool|null
     */
    public function getShowGender()
    {
        return $this->container['show_gender'];
    }

    /**
     * Sets show_gender
     *
     * @param bool|null $show_gender 
     *
     * @return self
     */
    public function setShowGender($show_gender)
    {
        if (is_null($show_gender)) {
            throw new \InvalidArgumentException('non-nullable show_gender cannot be null');
        }
        $this->container['show_gender'] = $show_gender;

        return $this;
    }

    /**
     * Gets show_date_of_birth
     *
     * @return bool|null
     */
    public function getShowDateOfBirth()
    {
        return $this->container['show_date_of_birth'];
    }

    /**
     * Sets show_date_of_birth
     *
     * @param bool|null $show_date_of_birth 
     *
     * @return self
     */
    public function setShowDateOfBirth($show_date_of_birth)
    {
        if (is_null($show_date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable show_date_of_birth cannot be null');
        }
        $this->container['show_date_of_birth'] = $show_date_of_birth;

        return $this;
    }

    /**
     * Gets show_anniversary_date
     *
     * @return bool|null
     */
    public function getShowAnniversaryDate()
    {
        return $this->container['show_anniversary_date'];
    }

    /**
     * Sets show_anniversary_date
     *
     * @param bool|null $show_anniversary_date 
     *
     * @return self
     */
    public function setShowAnniversaryDate($show_anniversary_date)
    {
        if (is_null($show_anniversary_date)) {
            throw new \InvalidArgumentException('non-nullable show_anniversary_date cannot be null');
        }
        $this->container['show_anniversary_date'] = $show_anniversary_date;

        return $this;
    }

    /**
     * Gets show_postal_address
     *
     * @return bool|null
     */
    public function getShowPostalAddress()
    {
        return $this->container['show_postal_address'];
    }

    /**
     * Sets show_postal_address
     *
     * @param bool|null $show_postal_address 
     *
     * @return self
     */
    public function setShowPostalAddress($show_postal_address)
    {
        if (is_null($show_postal_address)) {
            throw new \InvalidArgumentException('non-nullable show_postal_address cannot be null');
        }
        $this->container['show_postal_address'] = $show_postal_address;

        return $this;
    }

    /**
     * Gets is_name_mandatory
     *
     * @return bool|null
     */
    public function getIsNameMandatory()
    {
        return $this->container['is_name_mandatory'];
    }

    /**
     * Sets is_name_mandatory
     *
     * @param bool|null $is_name_mandatory 
     *
     * @return self
     */
    public function setIsNameMandatory($is_name_mandatory)
    {
        if (is_null($is_name_mandatory)) {
            throw new \InvalidArgumentException('non-nullable is_name_mandatory cannot be null');
        }
        $this->container['is_name_mandatory'] = $is_name_mandatory;

        return $this;
    }

    /**
     * Gets is_address_mandatory
     *
     * @return bool|null
     */
    public function getIsAddressMandatory()
    {
        return $this->container['is_address_mandatory'];
    }

    /**
     * Sets is_address_mandatory
     *
     * @param bool|null $is_address_mandatory 
     *
     * @return self
     */
    public function setIsAddressMandatory($is_address_mandatory)
    {
        if (is_null($is_address_mandatory)) {
            throw new \InvalidArgumentException('non-nullable is_address_mandatory cannot be null');
        }
        $this->container['is_address_mandatory'] = $is_address_mandatory;

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


