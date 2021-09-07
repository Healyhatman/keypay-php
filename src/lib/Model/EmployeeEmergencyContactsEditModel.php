<?php
/**
 * EmployeeEmergencyContactsEditModel
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
 * EmployeeEmergencyContactsEditModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeEmergencyContactsEditModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeEmergencyContactsEditModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'primary_emergency_contact' => '\Swagger\Client\Model\EmergencyContactEditModel',
        'secondary_emergency_contact' => '\Swagger\Client\Model\EmergencyContactEditModel',
        'can_edit' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'primary_emergency_contact' => null,
        'secondary_emergency_contact' => null,
        'can_edit' => null
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
        'primary_emergency_contact' => 'primaryEmergencyContact',
        'secondary_emergency_contact' => 'secondaryEmergencyContact',
        'can_edit' => 'canEdit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_emergency_contact' => 'setPrimaryEmergencyContact',
        'secondary_emergency_contact' => 'setSecondaryEmergencyContact',
        'can_edit' => 'setCanEdit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_emergency_contact' => 'getPrimaryEmergencyContact',
        'secondary_emergency_contact' => 'getSecondaryEmergencyContact',
        'can_edit' => 'getCanEdit'
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
        $this->container['primary_emergency_contact'] = isset($data['primary_emergency_contact']) ? $data['primary_emergency_contact'] : null;
        $this->container['secondary_emergency_contact'] = isset($data['secondary_emergency_contact']) ? $data['secondary_emergency_contact'] : null;
        $this->container['can_edit'] = isset($data['can_edit']) ? $data['can_edit'] : null;
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
     * Gets primary_emergency_contact
     *
     * @return \Swagger\Client\Model\EmergencyContactEditModel
     */
    public function getPrimaryEmergencyContact()
    {
        return $this->container['primary_emergency_contact'];
    }

    /**
     * Sets primary_emergency_contact
     *
     * @param \Swagger\Client\Model\EmergencyContactEditModel $primary_emergency_contact 
     *
     * @return $this
     */
    public function setPrimaryEmergencyContact($primary_emergency_contact)
    {
        $this->container['primary_emergency_contact'] = $primary_emergency_contact;

        return $this;
    }

    /**
     * Gets secondary_emergency_contact
     *
     * @return \Swagger\Client\Model\EmergencyContactEditModel
     */
    public function getSecondaryEmergencyContact()
    {
        return $this->container['secondary_emergency_contact'];
    }

    /**
     * Sets secondary_emergency_contact
     *
     * @param \Swagger\Client\Model\EmergencyContactEditModel $secondary_emergency_contact 
     *
     * @return $this
     */
    public function setSecondaryEmergencyContact($secondary_emergency_contact)
    {
        $this->container['secondary_emergency_contact'] = $secondary_emergency_contact;

        return $this;
    }

    /**
     * Gets can_edit
     *
     * @return bool
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     *
     * @param bool $can_edit 
     *
     * @return $this
     */
    public function setCanEdit($can_edit)
    {
        $this->container['can_edit'] = $can_edit;

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

