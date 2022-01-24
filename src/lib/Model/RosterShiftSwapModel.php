<?php
/**
 * RosterShiftSwapModel
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
 * RosterShiftSwapModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RosterShiftSwapModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RosterShiftSwapModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'from_employee' => 'string',
        'to_employee' => 'string',
        'from_employee_id' => 'int',
        'to_employee_id' => 'int',
        'date_created' => '\DateTime',
        'note' => 'string',
        'rejected_reason' => 'string',
        'status' => 'int',
        'status_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'from_employee' => null,
        'to_employee' => null,
        'from_employee_id' => 'int32',
        'to_employee_id' => 'int32',
        'date_created' => 'date-time',
        'note' => null,
        'rejected_reason' => null,
        'status' => 'int32',
        'status_description' => null
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
        'id' => 'id',
        'from_employee' => 'fromEmployee',
        'to_employee' => 'toEmployee',
        'from_employee_id' => 'fromEmployeeId',
        'to_employee_id' => 'toEmployeeId',
        'date_created' => 'dateCreated',
        'note' => 'note',
        'rejected_reason' => 'rejectedReason',
        'status' => 'status',
        'status_description' => 'statusDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'from_employee' => 'setFromEmployee',
        'to_employee' => 'setToEmployee',
        'from_employee_id' => 'setFromEmployeeId',
        'to_employee_id' => 'setToEmployeeId',
        'date_created' => 'setDateCreated',
        'note' => 'setNote',
        'rejected_reason' => 'setRejectedReason',
        'status' => 'setStatus',
        'status_description' => 'setStatusDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'from_employee' => 'getFromEmployee',
        'to_employee' => 'getToEmployee',
        'from_employee_id' => 'getFromEmployeeId',
        'to_employee_id' => 'getToEmployeeId',
        'date_created' => 'getDateCreated',
        'note' => 'getNote',
        'rejected_reason' => 'getRejectedReason',
        'status' => 'getStatus',
        'status_description' => 'getStatusDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['from_employee'] = isset($data['from_employee']) ? $data['from_employee'] : null;
        $this->container['to_employee'] = isset($data['to_employee']) ? $data['to_employee'] : null;
        $this->container['from_employee_id'] = isset($data['from_employee_id']) ? $data['from_employee_id'] : null;
        $this->container['to_employee_id'] = isset($data['to_employee_id']) ? $data['to_employee_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['rejected_reason'] = isset($data['rejected_reason']) ? $data['rejected_reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_description'] = isset($data['status_description']) ? $data['status_description'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets from_employee
     *
     * @return string
     */
    public function getFromEmployee()
    {
        return $this->container['from_employee'];
    }

    /**
     * Sets from_employee
     *
     * @param string $from_employee 
     *
     * @return $this
     */
    public function setFromEmployee($from_employee)
    {
        $this->container['from_employee'] = $from_employee;

        return $this;
    }

    /**
     * Gets to_employee
     *
     * @return string
     */
    public function getToEmployee()
    {
        return $this->container['to_employee'];
    }

    /**
     * Sets to_employee
     *
     * @param string $to_employee 
     *
     * @return $this
     */
    public function setToEmployee($to_employee)
    {
        $this->container['to_employee'] = $to_employee;

        return $this;
    }

    /**
     * Gets from_employee_id
     *
     * @return int
     */
    public function getFromEmployeeId()
    {
        return $this->container['from_employee_id'];
    }

    /**
     * Sets from_employee_id
     *
     * @param int $from_employee_id 
     *
     * @return $this
     */
    public function setFromEmployeeId($from_employee_id)
    {
        $this->container['from_employee_id'] = $from_employee_id;

        return $this;
    }

    /**
     * Gets to_employee_id
     *
     * @return int
     */
    public function getToEmployeeId()
    {
        return $this->container['to_employee_id'];
    }

    /**
     * Sets to_employee_id
     *
     * @param int $to_employee_id 
     *
     * @return $this
     */
    public function setToEmployeeId($to_employee_id)
    {
        $this->container['to_employee_id'] = $to_employee_id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created 
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note 
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets rejected_reason
     *
     * @return string
     */
    public function getRejectedReason()
    {
        return $this->container['rejected_reason'];
    }

    /**
     * Sets rejected_reason
     *
     * @param string $rejected_reason 
     *
     * @return $this
     */
    public function setRejectedReason($rejected_reason)
    {
        $this->container['rejected_reason'] = $rejected_reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string $status_description 
     *
     * @return $this
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

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


