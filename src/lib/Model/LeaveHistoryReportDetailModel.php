<?php
/**
 * LeaveHistoryReportDetailModel
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
 * LeaveHistoryReportDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeaveHistoryReportDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeaveHistoryReportDetailModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_period' => 'string',
        'notes' => 'string',
        'leave_accrued' => 'double',
        'leave_taken' => 'double',
        'unit_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_period' => null,
        'notes' => null,
        'leave_accrued' => 'double',
        'leave_taken' => 'double',
        'unit_type' => null
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
        'pay_period' => 'payPeriod',
        'notes' => 'notes',
        'leave_accrued' => 'leaveAccrued',
        'leave_taken' => 'leaveTaken',
        'unit_type' => 'unitType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_period' => 'setPayPeriod',
        'notes' => 'setNotes',
        'leave_accrued' => 'setLeaveAccrued',
        'leave_taken' => 'setLeaveTaken',
        'unit_type' => 'setUnitType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_period' => 'getPayPeriod',
        'notes' => 'getNotes',
        'leave_accrued' => 'getLeaveAccrued',
        'leave_taken' => 'getLeaveTaken',
        'unit_type' => 'getUnitType'
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

    const UNIT_TYPE_HOURS = 'Hours';
    const UNIT_TYPE_DAYS = 'Days';
    const UNIT_TYPE_WEEKS = 'Weeks';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_HOURS,
            self::UNIT_TYPE_DAYS,
            self::UNIT_TYPE_WEEKS,
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
        $this->container['pay_period'] = isset($data['pay_period']) ? $data['pay_period'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['leave_accrued'] = isset($data['leave_accrued']) ? $data['leave_accrued'] : null;
        $this->container['leave_taken'] = isset($data['leave_taken']) ? $data['leave_taken'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($this->container['unit_type']) && !in_array($this->container['unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_type', must be one of '%s'",
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
     * Gets pay_period
     *
     * @return string
     */
    public function getPayPeriod()
    {
        return $this->container['pay_period'];
    }

    /**
     * Sets pay_period
     *
     * @param string $pay_period 
     *
     * @return $this
     */
    public function setPayPeriod($pay_period)
    {
        $this->container['pay_period'] = $pay_period;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes 
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets leave_accrued
     *
     * @return double
     */
    public function getLeaveAccrued()
    {
        return $this->container['leave_accrued'];
    }

    /**
     * Sets leave_accrued
     *
     * @param double $leave_accrued 
     *
     * @return $this
     */
    public function setLeaveAccrued($leave_accrued)
    {
        $this->container['leave_accrued'] = $leave_accrued;

        return $this;
    }

    /**
     * Gets leave_taken
     *
     * @return double
     */
    public function getLeaveTaken()
    {
        return $this->container['leave_taken'];
    }

    /**
     * Sets leave_taken
     *
     * @param double $leave_taken 
     *
     * @return $this
     */
    public function setLeaveTaken($leave_taken)
    {
        $this->container['leave_taken'] = $leave_taken;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string $unit_type 
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($unit_type) && !in_array($unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_type'] = $unit_type;

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


