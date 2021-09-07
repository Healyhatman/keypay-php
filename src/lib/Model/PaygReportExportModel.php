<?php
/**
 * PaygReportExportModel
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
 * PaygReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaygReportExportModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaygReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location' => 'string',
        'month' => 'string',
        'gross_earnings' => 'double',
        'tax_exempt_earnings' => 'double',
        'pre_tax_deductions' => 'double',
        'taxable_earnings' => 'double',
        'payg' => 'double',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location' => null,
        'month' => null,
        'gross_earnings' => 'double',
        'tax_exempt_earnings' => 'double',
        'pre_tax_deductions' => 'double',
        'taxable_earnings' => 'double',
        'payg' => 'double',
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
        'month' => 'month',
        'gross_earnings' => 'grossEarnings',
        'tax_exempt_earnings' => 'taxExemptEarnings',
        'pre_tax_deductions' => 'preTaxDeductions',
        'taxable_earnings' => 'taxableEarnings',
        'payg' => 'payg',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'month' => 'setMonth',
        'gross_earnings' => 'setGrossEarnings',
        'tax_exempt_earnings' => 'setTaxExemptEarnings',
        'pre_tax_deductions' => 'setPreTaxDeductions',
        'taxable_earnings' => 'setTaxableEarnings',
        'payg' => 'setPayg',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'month' => 'getMonth',
        'gross_earnings' => 'getGrossEarnings',
        'tax_exempt_earnings' => 'getTaxExemptEarnings',
        'pre_tax_deductions' => 'getPreTaxDeductions',
        'taxable_earnings' => 'getTaxableEarnings',
        'payg' => 'getPayg',
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['gross_earnings'] = isset($data['gross_earnings']) ? $data['gross_earnings'] : null;
        $this->container['tax_exempt_earnings'] = isset($data['tax_exempt_earnings']) ? $data['tax_exempt_earnings'] : null;
        $this->container['pre_tax_deductions'] = isset($data['pre_tax_deductions']) ? $data['pre_tax_deductions'] : null;
        $this->container['taxable_earnings'] = isset($data['taxable_earnings']) ? $data['taxable_earnings'] : null;
        $this->container['payg'] = isset($data['payg']) ? $data['payg'] : null;
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
     * Gets month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets gross_earnings
     *
     * @return float
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param float $gross_earnings
     *
     * @return $this
     */
    public function setGrossEarnings($gross_earnings)
    {
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets tax_exempt_earnings
     *
     * @return float
     */
    public function getTaxExemptEarnings()
    {
        return $this->container['tax_exempt_earnings'];
    }

    /**
     * Sets tax_exempt_earnings
     *
     * @param float $tax_exempt_earnings
     *
     * @return $this
     */
    public function setTaxExemptEarnings($tax_exempt_earnings)
    {
        $this->container['tax_exempt_earnings'] = $tax_exempt_earnings;

        return $this;
    }

    /**
     * Gets pre_tax_deductions
     *
     * @return float
     */
    public function getPreTaxDeductions()
    {
        return $this->container['pre_tax_deductions'];
    }

    /**
     * Sets pre_tax_deductions
     *
     * @param float $pre_tax_deductions
     *
     * @return $this
     */
    public function setPreTaxDeductions($pre_tax_deductions)
    {
        $this->container['pre_tax_deductions'] = $pre_tax_deductions;

        return $this;
    }

    /**
     * Gets taxable_earnings
     *
     * @return float
     */
    public function getTaxableEarnings()
    {
        return $this->container['taxable_earnings'];
    }

    /**
     * Sets taxable_earnings
     *
     * @param float $taxable_earnings
     *
     * @return $this
     */
    public function setTaxableEarnings($taxable_earnings)
    {
        $this->container['taxable_earnings'] = $taxable_earnings;

        return $this;
    }

    /**
     * Gets payg
     *
     * @return float
     */
    public function getPayg()
    {
        return $this->container['payg'];
    }

    /**
     * Sets payg
     *
     * @param float $payg
     *
     * @return $this
     */
    public function setPayg($payg)
    {
        $this->container['payg'] = $payg;

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
