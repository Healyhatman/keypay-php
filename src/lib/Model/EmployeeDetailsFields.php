<?php
/**
 * EmployeeDetailsFields
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: AU
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EmployeeDetailsFields Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeDetailsFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeDetailsFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        return self::$swaggerModelName;
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
        $this->container['show_start_date'] = isset($data['show_start_date']) ? $data['show_start_date'] : null;
        $this->container['show_title'] = isset($data['show_title']) ? $data['show_title'] : null;
        $this->container['show_preferred_name'] = isset($data['show_preferred_name']) ? $data['show_preferred_name'] : null;
        $this->container['show_previous_surname'] = isset($data['show_previous_surname']) ? $data['show_previous_surname'] : null;
        $this->container['show_gender'] = isset($data['show_gender']) ? $data['show_gender'] : null;
        $this->container['show_date_of_birth'] = isset($data['show_date_of_birth']) ? $data['show_date_of_birth'] : null;
        $this->container['show_anniversary_date'] = isset($data['show_anniversary_date']) ? $data['show_anniversary_date'] : null;
        $this->container['show_postal_address'] = isset($data['show_postal_address']) ? $data['show_postal_address'] : null;
        $this->container['is_name_mandatory'] = isset($data['is_name_mandatory']) ? $data['is_name_mandatory'] : null;
        $this->container['is_address_mandatory'] = isset($data['is_address_mandatory']) ? $data['is_address_mandatory'] : null;
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
     * @return bool
     */
    public function getShowStartDate()
    {
        return $this->container['show_start_date'];
    }

    /**
     * Sets show_start_date
     *
     * @param bool $show_start_date 
     *
     * @return $this
     */
    public function setShowStartDate($show_start_date)
    {
        $this->container['show_start_date'] = $show_start_date;

        return $this;
    }

    /**
     * Gets show_title
     *
     * @return bool
     */
    public function getShowTitle()
    {
        return $this->container['show_title'];
    }

    /**
     * Sets show_title
     *
     * @param bool $show_title 
     *
     * @return $this
     */
    public function setShowTitle($show_title)
    {
        $this->container['show_title'] = $show_title;

        return $this;
    }

    /**
     * Gets show_preferred_name
     *
     * @return bool
     */
    public function getShowPreferredName()
    {
        return $this->container['show_preferred_name'];
    }

    /**
     * Sets show_preferred_name
     *
     * @param bool $show_preferred_name 
     *
     * @return $this
     */
    public function setShowPreferredName($show_preferred_name)
    {
        $this->container['show_preferred_name'] = $show_preferred_name;

        return $this;
    }

    /**
     * Gets show_previous_surname
     *
     * @return bool
     */
    public function getShowPreviousSurname()
    {
        return $this->container['show_previous_surname'];
    }

    /**
     * Sets show_previous_surname
     *
     * @param bool $show_previous_surname 
     *
     * @return $this
     */
    public function setShowPreviousSurname($show_previous_surname)
    {
        $this->container['show_previous_surname'] = $show_previous_surname;

        return $this;
    }

    /**
     * Gets show_gender
     *
     * @return bool
     */
    public function getShowGender()
    {
        return $this->container['show_gender'];
    }

    /**
     * Sets show_gender
     *
     * @param bool $show_gender 
     *
     * @return $this
     */
    public function setShowGender($show_gender)
    {
        $this->container['show_gender'] = $show_gender;

        return $this;
    }

    /**
     * Gets show_date_of_birth
     *
     * @return bool
     */
    public function getShowDateOfBirth()
    {
        return $this->container['show_date_of_birth'];
    }

    /**
     * Sets show_date_of_birth
     *
     * @param bool $show_date_of_birth 
     *
     * @return $this
     */
    public function setShowDateOfBirth($show_date_of_birth)
    {
        $this->container['show_date_of_birth'] = $show_date_of_birth;

        return $this;
    }

    /**
     * Gets show_anniversary_date
     *
     * @return bool
     */
    public function getShowAnniversaryDate()
    {
        return $this->container['show_anniversary_date'];
    }

    /**
     * Sets show_anniversary_date
     *
     * @param bool $show_anniversary_date 
     *
     * @return $this
     */
    public function setShowAnniversaryDate($show_anniversary_date)
    {
        $this->container['show_anniversary_date'] = $show_anniversary_date;

        return $this;
    }

    /**
     * Gets show_postal_address
     *
     * @return bool
     */
    public function getShowPostalAddress()
    {
        return $this->container['show_postal_address'];
    }

    /**
     * Sets show_postal_address
     *
     * @param bool $show_postal_address 
     *
     * @return $this
     */
    public function setShowPostalAddress($show_postal_address)
    {
        $this->container['show_postal_address'] = $show_postal_address;

        return $this;
    }

    /**
     * Gets is_name_mandatory
     *
     * @return bool
     */
    public function getIsNameMandatory()
    {
        return $this->container['is_name_mandatory'];
    }

    /**
     * Sets is_name_mandatory
     *
     * @param bool $is_name_mandatory 
     *
     * @return $this
     */
    public function setIsNameMandatory($is_name_mandatory)
    {
        $this->container['is_name_mandatory'] = $is_name_mandatory;

        return $this;
    }

    /**
     * Gets is_address_mandatory
     *
     * @return bool
     */
    public function getIsAddressMandatory()
    {
        return $this->container['is_address_mandatory'];
    }

    /**
     * Sets is_address_mandatory
     *
     * @param bool $is_address_mandatory 
     *
     * @return $this
     */
    public function setIsAddressMandatory($is_address_mandatory)
    {
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
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

