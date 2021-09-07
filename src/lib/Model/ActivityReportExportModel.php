<?php
/**
 * ActivityReportExportModel
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
 * ActivityReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityReportExportModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivityReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_id' => 'int',
        'location_id' => 'int',
        'location' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'total_hours' => 'double',
        'gross_earnings' => 'double',
        'taxable_earnings' => 'double',
        'payg_withholding' => 'double',
        'super_contributions' => 'double',
        'employer_contributions' => 'double',
        'net_earnings' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_id' => 'int32',
        'location_id' => 'int32',
        'location' => null,
        'first_name' => null,
        'surname' => null,
        'total_hours' => 'double',
        'gross_earnings' => 'double',
        'taxable_earnings' => 'double',
        'payg_withholding' => 'double',
        'super_contributions' => 'double',
        'employer_contributions' => 'double',
        'net_earnings' => 'double'
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
        'employee_id' => 'employeeId',
        'location_id' => 'locationId',
        'location' => 'location',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'total_hours' => 'totalHours',
        'gross_earnings' => 'grossEarnings',
        'taxable_earnings' => 'taxableEarnings',
        'payg_withholding' => 'paygWithholding',
        'super_contributions' => 'superContributions',
        'employer_contributions' => 'employerContributions',
        'net_earnings' => 'netEarnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'location_id' => 'setLocationId',
        'location' => 'setLocation',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'total_hours' => 'setTotalHours',
        'gross_earnings' => 'setGrossEarnings',
        'taxable_earnings' => 'setTaxableEarnings',
        'payg_withholding' => 'setPaygWithholding',
        'super_contributions' => 'setSuperContributions',
        'employer_contributions' => 'setEmployerContributions',
        'net_earnings' => 'setNetEarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'location_id' => 'getLocationId',
        'location' => 'getLocation',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'total_hours' => 'getTotalHours',
        'gross_earnings' => 'getGrossEarnings',
        'taxable_earnings' => 'getTaxableEarnings',
        'payg_withholding' => 'getPaygWithholding',
        'super_contributions' => 'getSuperContributions',
        'employer_contributions' => 'getEmployerContributions',
        'net_earnings' => 'getNetEarnings'
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['total_hours'] = isset($data['total_hours']) ? $data['total_hours'] : null;
        $this->container['gross_earnings'] = isset($data['gross_earnings']) ? $data['gross_earnings'] : null;
        $this->container['taxable_earnings'] = isset($data['taxable_earnings']) ? $data['taxable_earnings'] : null;
        $this->container['payg_withholding'] = isset($data['payg_withholding']) ? $data['payg_withholding'] : null;
        $this->container['super_contributions'] = isset($data['super_contributions']) ? $data['super_contributions'] : null;
        $this->container['employer_contributions'] = isset($data['employer_contributions']) ? $data['employer_contributions'] : null;
        $this->container['net_earnings'] = isset($data['net_earnings']) ? $data['net_earnings'] : null;
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
     * Gets total_hours
     *
     * @return double
     */
    public function getTotalHours()
    {
        return $this->container['total_hours'];
    }

    /**
     * Sets total_hours
     *
     * @param double $total_hours 
     *
     * @return $this
     */
    public function setTotalHours($total_hours)
    {
        $this->container['total_hours'] = $total_hours;

        return $this;
    }

    /**
     * Gets gross_earnings
     *
     * @return double
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param double $gross_earnings 
     *
     * @return $this
     */
    public function setGrossEarnings($gross_earnings)
    {
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets taxable_earnings
     *
     * @return double
     */
    public function getTaxableEarnings()
    {
        return $this->container['taxable_earnings'];
    }

    /**
     * Sets taxable_earnings
     *
     * @param double $taxable_earnings 
     *
     * @return $this
     */
    public function setTaxableEarnings($taxable_earnings)
    {
        $this->container['taxable_earnings'] = $taxable_earnings;

        return $this;
    }

    /**
     * Gets payg_withholding
     *
     * @return double
     */
    public function getPaygWithholding()
    {
        return $this->container['payg_withholding'];
    }

    /**
     * Sets payg_withholding
     *
     * @param double $payg_withholding 
     *
     * @return $this
     */
    public function setPaygWithholding($payg_withholding)
    {
        $this->container['payg_withholding'] = $payg_withholding;

        return $this;
    }

    /**
     * Gets super_contributions
     *
     * @return double
     */
    public function getSuperContributions()
    {
        return $this->container['super_contributions'];
    }

    /**
     * Sets super_contributions
     *
     * @param double $super_contributions 
     *
     * @return $this
     */
    public function setSuperContributions($super_contributions)
    {
        $this->container['super_contributions'] = $super_contributions;

        return $this;
    }

    /**
     * Gets employer_contributions
     *
     * @return double
     */
    public function getEmployerContributions()
    {
        return $this->container['employer_contributions'];
    }

    /**
     * Sets employer_contributions
     *
     * @param double $employer_contributions 
     *
     * @return $this
     */
    public function setEmployerContributions($employer_contributions)
    {
        $this->container['employer_contributions'] = $employer_contributions;

        return $this;
    }

    /**
     * Gets net_earnings
     *
     * @return double
     */
    public function getNetEarnings()
    {
        return $this->container['net_earnings'];
    }

    /**
     * Sets net_earnings
     *
     * @param double $net_earnings 
     *
     * @return $this
     */
    public function setNetEarnings($net_earnings)
    {
        $this->container['net_earnings'] = $net_earnings;

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

