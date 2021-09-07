<?php
/**
 * EssLeaveEstimate
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * EssLeaveEstimate Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EssLeaveEstimate implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EssLeaveEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leave_balance' => 'double',
        'approved_leave' => 'double',
        'available_balance' => 'double',
        'leave_required' => '\Swagger\Client\Model\UnitAndHourLeaveEstimateModel',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leave_balance' => 'double',
        'approved_leave' => 'double',
        'available_balance' => 'double',
        'leave_required' => null,
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
        'leave_balance' => 'leaveBalance',
        'approved_leave' => 'approvedLeave',
        'available_balance' => 'availableBalance',
        'leave_required' => 'leaveRequired',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_balance' => 'setLeaveBalance',
        'approved_leave' => 'setApprovedLeave',
        'available_balance' => 'setAvailableBalance',
        'leave_required' => 'setLeaveRequired',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_balance' => 'getLeaveBalance',
        'approved_leave' => 'getApprovedLeave',
        'available_balance' => 'getAvailableBalance',
        'leave_required' => 'getLeaveRequired',
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
        $this->container['leave_balance'] = isset($data['leave_balance']) ? $data['leave_balance'] : null;
        $this->container['approved_leave'] = isset($data['approved_leave']) ? $data['approved_leave'] : null;
        $this->container['available_balance'] = isset($data['available_balance']) ? $data['available_balance'] : null;
        $this->container['leave_required'] = isset($data['leave_required']) ? $data['leave_required'] : null;
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
     * Gets leave_balance
     *
     * @return float
     */
    public function getLeaveBalance()
    {
        return $this->container['leave_balance'];
    }

    /**
     * Sets leave_balance
     *
     * @param float $leave_balance
     *
     * @return $this
     */
    public function setLeaveBalance($leave_balance)
    {
        $this->container['leave_balance'] = $leave_balance;

        return $this;
    }

    /**
     * Gets approved_leave
     *
     * @return float
     */
    public function getApprovedLeave()
    {
        return $this->container['approved_leave'];
    }

    /**
     * Sets approved_leave
     *
     * @param float $approved_leave
     *
     * @return $this
     */
    public function setApprovedLeave($approved_leave)
    {
        $this->container['approved_leave'] = $approved_leave;

        return $this;
    }

    /**
     * Gets available_balance
     *
     * @return float
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance
     *
     * @param float $available_balance
     *
     * @return $this
     */
    public function setAvailableBalance($available_balance)
    {
        $this->container['available_balance'] = $available_balance;

        return $this;
    }

    /**
     * Gets leave_required
     *
     * @return \Swagger\Client\Model\UnitAndHourLeaveEstimateModel
     */
    public function getLeaveRequired()
    {
        return $this->container['leave_required'];
    }

    /**
     * Sets leave_required
     *
     * @param \Swagger\Client\Model\UnitAndHourLeaveEstimateModel $leave_required
     *
     * @return $this
     */
    public function setLeaveRequired($leave_required)
    {
        $this->container['leave_required'] = $leave_required;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
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
