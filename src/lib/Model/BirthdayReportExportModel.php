<?php
/**
 * BirthdayReportExportModel
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
 * BirthdayReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BirthdayReportExportModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BirthdayReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location' => 'string',
        'date_of_birth' => '\DateTime',
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'external_id' => 'string',
        'employment_status' => 'string',
        'age' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location' => null,
        'date_of_birth' => 'date-time',
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'external_id' => null,
        'employment_status' => null,
        'age' => 'int32'
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
        'location' => 'location',
        'date_of_birth' => 'dateOfBirth',
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'external_id' => 'externalId',
        'employment_status' => 'employmentStatus',
        'age' => 'age'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'date_of_birth' => 'setDateOfBirth',
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'external_id' => 'setExternalId',
        'employment_status' => 'setEmploymentStatus',
        'age' => 'setAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'date_of_birth' => 'getDateOfBirth',
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'external_id' => 'getExternalId',
        'employment_status' => 'getEmploymentStatus',
        'age' => 'getAge'
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['employment_status'] = isset($data['employment_status']) ? $data['employment_status'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
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
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth 
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

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
     * Gets employment_status
     *
     * @return string
     */
    public function getEmploymentStatus()
    {
        return $this->container['employment_status'];
    }

    /**
     * Sets employment_status
     *
     * @param string $employment_status 
     *
     * @return $this
     */
    public function setEmploymentStatus($employment_status)
    {
        $this->container['employment_status'] = $employment_status;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age 
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

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


