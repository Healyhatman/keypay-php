<?php
/**
 * LeaveBalancesReportRequestModel
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
 * LeaveBalancesReportRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeaveBalancesReportRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeaveBalancesReportRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_id' => 'int',
        'leave_type_id' => 'int',
        'group_by' => 'string',
        'employing_entity_id' => 'int',
        'as_at_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_id' => 'int32',
        'leave_type_id' => 'int32',
        'group_by' => null,
        'employing_entity_id' => 'int32',
        'as_at_date' => 'date-time'
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
        'location_id' => 'locationId',
        'leave_type_id' => 'leaveTypeId',
        'group_by' => 'groupBy',
        'employing_entity_id' => 'employingEntityId',
        'as_at_date' => 'asAtDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_id' => 'setLocationId',
        'leave_type_id' => 'setLeaveTypeId',
        'group_by' => 'setGroupBy',
        'employing_entity_id' => 'setEmployingEntityId',
        'as_at_date' => 'setAsAtDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_id' => 'getLocationId',
        'leave_type_id' => 'getLeaveTypeId',
        'group_by' => 'getGroupBy',
        'employing_entity_id' => 'getEmployingEntityId',
        'as_at_date' => 'getAsAtDate'
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

    const GROUP_BY_ACCRUAL_LOCATION = 'AccrualLocation';
    const GROUP_BY_DEFAULT_LOCATION = 'DefaultLocation';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupByAllowableValues()
    {
        return [
            self::GROUP_BY_ACCRUAL_LOCATION,
            self::GROUP_BY_DEFAULT_LOCATION,
        ];
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
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['leave_type_id'] = isset($data['leave_type_id']) ? $data['leave_type_id'] : null;
        $this->container['group_by'] = isset($data['group_by']) ? $data['group_by'] : null;
        $this->container['employing_entity_id'] = isset($data['employing_entity_id']) ? $data['employing_entity_id'] : null;
        $this->container['as_at_date'] = isset($data['as_at_date']) ? $data['as_at_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGroupByAllowableValues();
        if (!is_null($this->container['group_by']) && !in_array($this->container['group_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'group_by', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id 
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets leave_type_id
     *
     * @return int
     */
    public function getLeaveTypeId()
    {
        return $this->container['leave_type_id'];
    }

    /**
     * Sets leave_type_id
     *
     * @param int $leave_type_id 
     *
     * @return $this
     */
    public function setLeaveTypeId($leave_type_id)
    {
        $this->container['leave_type_id'] = $leave_type_id;

        return $this;
    }

    /**
     * Gets group_by
     *
     * @return string
     */
    public function getGroupBy()
    {
        return $this->container['group_by'];
    }

    /**
     * Sets group_by
     *
     * @param string $group_by 
     *
     * @return $this
     */
    public function setGroupBy($group_by)
    {
        $allowedValues = $this->getGroupByAllowableValues();
        if (!is_null($group_by) && !in_array($group_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'group_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['group_by'] = $group_by;

        return $this;
    }

    /**
     * Gets employing_entity_id
     *
     * @return int
     */
    public function getEmployingEntityId()
    {
        return $this->container['employing_entity_id'];
    }

    /**
     * Sets employing_entity_id
     *
     * @param int $employing_entity_id 
     *
     * @return $this
     */
    public function setEmployingEntityId($employing_entity_id)
    {
        $this->container['employing_entity_id'] = $employing_entity_id;

        return $this;
    }

    /**
     * Gets as_at_date
     *
     * @return \DateTime
     */
    public function getAsAtDate()
    {
        return $this->container['as_at_date'];
    }

    /**
     * Sets as_at_date
     *
     * @param \DateTime $as_at_date 
     *
     * @return $this
     */
    public function setAsAtDate($as_at_date)
    {
        $this->container['as_at_date'] = $as_at_date;

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

