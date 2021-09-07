<?php
/**
 * PayScheduleDateForecastResultApiModel
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
 * PayScheduleDateForecastResultApiModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayScheduleDateForecastResultApiModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayScheduleDateForecastResultApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'next_scheduled_pay_run_date' => '\DateTime',
        'next_scheduled_from_date' => '\DateTime',
        'next_scheduled_to_date' => '\DateTime',
        'next_scheduled_paid_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'next_scheduled_pay_run_date' => 'date-time',
        'next_scheduled_from_date' => 'date-time',
        'next_scheduled_to_date' => 'date-time',
        'next_scheduled_paid_date' => 'date-time'
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
        'next_scheduled_pay_run_date' => 'nextScheduledPayRunDate',
        'next_scheduled_from_date' => 'nextScheduledFromDate',
        'next_scheduled_to_date' => 'nextScheduledToDate',
        'next_scheduled_paid_date' => 'nextScheduledPaidDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next_scheduled_pay_run_date' => 'setNextScheduledPayRunDate',
        'next_scheduled_from_date' => 'setNextScheduledFromDate',
        'next_scheduled_to_date' => 'setNextScheduledToDate',
        'next_scheduled_paid_date' => 'setNextScheduledPaidDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next_scheduled_pay_run_date' => 'getNextScheduledPayRunDate',
        'next_scheduled_from_date' => 'getNextScheduledFromDate',
        'next_scheduled_to_date' => 'getNextScheduledToDate',
        'next_scheduled_paid_date' => 'getNextScheduledPaidDate'
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
        $this->container['next_scheduled_pay_run_date'] = isset($data['next_scheduled_pay_run_date']) ? $data['next_scheduled_pay_run_date'] : null;
        $this->container['next_scheduled_from_date'] = isset($data['next_scheduled_from_date']) ? $data['next_scheduled_from_date'] : null;
        $this->container['next_scheduled_to_date'] = isset($data['next_scheduled_to_date']) ? $data['next_scheduled_to_date'] : null;
        $this->container['next_scheduled_paid_date'] = isset($data['next_scheduled_paid_date']) ? $data['next_scheduled_paid_date'] : null;
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
     * Gets next_scheduled_pay_run_date
     *
     * @return \DateTime
     */
    public function getNextScheduledPayRunDate()
    {
        return $this->container['next_scheduled_pay_run_date'];
    }

    /**
     * Sets next_scheduled_pay_run_date
     *
     * @param \DateTime $next_scheduled_pay_run_date 
     *
     * @return $this
     */
    public function setNextScheduledPayRunDate($next_scheduled_pay_run_date)
    {
        $this->container['next_scheduled_pay_run_date'] = $next_scheduled_pay_run_date;

        return $this;
    }

    /**
     * Gets next_scheduled_from_date
     *
     * @return \DateTime
     */
    public function getNextScheduledFromDate()
    {
        return $this->container['next_scheduled_from_date'];
    }

    /**
     * Sets next_scheduled_from_date
     *
     * @param \DateTime $next_scheduled_from_date 
     *
     * @return $this
     */
    public function setNextScheduledFromDate($next_scheduled_from_date)
    {
        $this->container['next_scheduled_from_date'] = $next_scheduled_from_date;

        return $this;
    }

    /**
     * Gets next_scheduled_to_date
     *
     * @return \DateTime
     */
    public function getNextScheduledToDate()
    {
        return $this->container['next_scheduled_to_date'];
    }

    /**
     * Sets next_scheduled_to_date
     *
     * @param \DateTime $next_scheduled_to_date 
     *
     * @return $this
     */
    public function setNextScheduledToDate($next_scheduled_to_date)
    {
        $this->container['next_scheduled_to_date'] = $next_scheduled_to_date;

        return $this;
    }

    /**
     * Gets next_scheduled_paid_date
     *
     * @return \DateTime
     */
    public function getNextScheduledPaidDate()
    {
        return $this->container['next_scheduled_paid_date'];
    }

    /**
     * Sets next_scheduled_paid_date
     *
     * @param \DateTime $next_scheduled_paid_date 
     *
     * @return $this
     */
    public function setNextScheduledPaidDate($next_scheduled_paid_date)
    {
        $this->container['next_scheduled_paid_date'] = $next_scheduled_paid_date;

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

