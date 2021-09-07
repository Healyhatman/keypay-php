<?php
/**
 * AuPayCategoriesModel
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
 * AuPayCategoriesModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuPayCategoriesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuPayCategoriesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'super_amount' => 'double',
        'pay_category' => 'string',
        'pay_run' => 'string',
        'date_paid' => '\DateTime',
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'external_id' => 'string',
        'location' => 'string',
        'units' => 'double',
        'rate' => 'double',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'super_amount' => 'double',
        'pay_category' => null,
        'pay_run' => null,
        'date_paid' => 'date-time',
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'external_id' => null,
        'location' => null,
        'units' => 'double',
        'rate' => 'double',
        'amount' => 'double'
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
        'super_amount' => 'superAmount',
        'pay_category' => 'payCategory',
        'pay_run' => 'payRun',
        'date_paid' => 'datePaid',
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'external_id' => 'externalId',
        'location' => 'location',
        'units' => 'units',
        'rate' => 'rate',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_amount' => 'setSuperAmount',
        'pay_category' => 'setPayCategory',
        'pay_run' => 'setPayRun',
        'date_paid' => 'setDatePaid',
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'external_id' => 'setExternalId',
        'location' => 'setLocation',
        'units' => 'setUnits',
        'rate' => 'setRate',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_amount' => 'getSuperAmount',
        'pay_category' => 'getPayCategory',
        'pay_run' => 'getPayRun',
        'date_paid' => 'getDatePaid',
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'external_id' => 'getExternalId',
        'location' => 'getLocation',
        'units' => 'getUnits',
        'rate' => 'getRate',
        'amount' => 'getAmount'
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
        $this->container['super_amount'] = isset($data['super_amount']) ? $data['super_amount'] : null;
        $this->container['pay_category'] = isset($data['pay_category']) ? $data['pay_category'] : null;
        $this->container['pay_run'] = isset($data['pay_run']) ? $data['pay_run'] : null;
        $this->container['date_paid'] = isset($data['date_paid']) ? $data['date_paid'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
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
     * Gets super_amount
     *
     * @return double
     */
    public function getSuperAmount()
    {
        return $this->container['super_amount'];
    }

    /**
     * Sets super_amount
     *
     * @param double $super_amount 
     *
     * @return $this
     */
    public function setSuperAmount($super_amount)
    {
        $this->container['super_amount'] = $super_amount;

        return $this;
    }

    /**
     * Gets pay_category
     *
     * @return string
     */
    public function getPayCategory()
    {
        return $this->container['pay_category'];
    }

    /**
     * Sets pay_category
     *
     * @param string $pay_category 
     *
     * @return $this
     */
    public function setPayCategory($pay_category)
    {
        $this->container['pay_category'] = $pay_category;

        return $this;
    }

    /**
     * Gets pay_run
     *
     * @return string
     */
    public function getPayRun()
    {
        return $this->container['pay_run'];
    }

    /**
     * Sets pay_run
     *
     * @param string $pay_run 
     *
     * @return $this
     */
    public function setPayRun($pay_run)
    {
        $this->container['pay_run'] = $pay_run;

        return $this;
    }

    /**
     * Gets date_paid
     *
     * @return \DateTime
     */
    public function getDatePaid()
    {
        return $this->container['date_paid'];
    }

    /**
     * Sets date_paid
     *
     * @param \DateTime $date_paid 
     *
     * @return $this
     */
    public function setDatePaid($date_paid)
    {
        $this->container['date_paid'] = $date_paid;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id 
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name 
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname 
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id 
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location 
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets units
     *
     * @return double
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param double $units 
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate 
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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

