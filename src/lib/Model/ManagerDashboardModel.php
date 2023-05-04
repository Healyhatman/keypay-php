<?php
/**
 * ManagerDashboardModel
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
 * ManagerDashboardModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagerDashboardModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ManagerDashboardModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pending_leave_requests' => '\Swagger\Client\Model\ManagerItemCountModel',
        'submitted_timesheets' => '\Swagger\Client\Model\ManagerItemCountModel',
        'pending_expense_requests' => '\Swagger\Client\Model\ManagerItemCountModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pending_leave_requests' => null,
        'submitted_timesheets' => null,
        'pending_expense_requests' => null
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
        'pending_leave_requests' => 'pendingLeaveRequests',
        'submitted_timesheets' => 'submittedTimesheets',
        'pending_expense_requests' => 'pendingExpenseRequests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pending_leave_requests' => 'setPendingLeaveRequests',
        'submitted_timesheets' => 'setSubmittedTimesheets',
        'pending_expense_requests' => 'setPendingExpenseRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pending_leave_requests' => 'getPendingLeaveRequests',
        'submitted_timesheets' => 'getSubmittedTimesheets',
        'pending_expense_requests' => 'getPendingExpenseRequests'
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
        $this->container['pending_leave_requests'] = isset($data['pending_leave_requests']) ? $data['pending_leave_requests'] : null;
        $this->container['submitted_timesheets'] = isset($data['submitted_timesheets']) ? $data['submitted_timesheets'] : null;
        $this->container['pending_expense_requests'] = isset($data['pending_expense_requests']) ? $data['pending_expense_requests'] : null;
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
     * Gets pending_leave_requests
     *
     * @return \Swagger\Client\Model\ManagerItemCountModel
     */
    public function getPendingLeaveRequests()
    {
        return $this->container['pending_leave_requests'];
    }

    /**
     * Sets pending_leave_requests
     *
     * @param \Swagger\Client\Model\ManagerItemCountModel $pending_leave_requests 
     *
     * @return $this
     */
    public function setPendingLeaveRequests($pending_leave_requests)
    {
        $this->container['pending_leave_requests'] = $pending_leave_requests;

        return $this;
    }

    /**
     * Gets submitted_timesheets
     *
     * @return \Swagger\Client\Model\ManagerItemCountModel
     */
    public function getSubmittedTimesheets()
    {
        return $this->container['submitted_timesheets'];
    }

    /**
     * Sets submitted_timesheets
     *
     * @param \Swagger\Client\Model\ManagerItemCountModel $submitted_timesheets 
     *
     * @return $this
     */
    public function setSubmittedTimesheets($submitted_timesheets)
    {
        $this->container['submitted_timesheets'] = $submitted_timesheets;

        return $this;
    }

    /**
     * Gets pending_expense_requests
     *
     * @return \Swagger\Client\Model\ManagerItemCountModel
     */
    public function getPendingExpenseRequests()
    {
        return $this->container['pending_expense_requests'];
    }

    /**
     * Sets pending_expense_requests
     *
     * @param \Swagger\Client\Model\ManagerItemCountModel $pending_expense_requests 
     *
     * @return $this
     */
    public function setPendingExpenseRequests($pending_expense_requests)
    {
        $this->container['pending_expense_requests'] = $pending_expense_requests;

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

