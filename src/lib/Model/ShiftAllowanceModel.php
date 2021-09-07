<?php
/**
 * ShiftAllowanceModel
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
 * ShiftAllowanceModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftAllowanceModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftAllowanceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_category' => 'string',
        'pay_category_id' => 'int',
        'units' => 'double',
        'cost' => 'double',
        'rate_multiplier' => 'double',
        'option' => 'string',
        'type' => 'string',
        'classification' => '\Swagger\Client\Model\NominalClassification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_category' => null,
        'pay_category_id' => 'int32',
        'units' => 'double',
        'cost' => 'double',
        'rate_multiplier' => 'double',
        'option' => null,
        'type' => null,
        'classification' => null
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
        'pay_category' => 'payCategory',
        'pay_category_id' => 'payCategoryId',
        'units' => 'units',
        'cost' => 'cost',
        'rate_multiplier' => 'rateMultiplier',
        'option' => 'option',
        'type' => 'type',
        'classification' => 'classification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_category' => 'setPayCategory',
        'pay_category_id' => 'setPayCategoryId',
        'units' => 'setUnits',
        'cost' => 'setCost',
        'rate_multiplier' => 'setRateMultiplier',
        'option' => 'setOption',
        'type' => 'setType',
        'classification' => 'setClassification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_category' => 'getPayCategory',
        'pay_category_id' => 'getPayCategoryId',
        'units' => 'getUnits',
        'cost' => 'getCost',
        'rate_multiplier' => 'getRateMultiplier',
        'option' => 'getOption',
        'type' => 'getType',
        'classification' => 'getClassification'
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

    const OPTION_FIXED = 'Fixed';
    const OPTION_PER_HOUR_WORKED = 'PerHourWorked';
    const OPTION_PERCENTAGE_OF_SHIFT_COST = 'PercentageOfShiftCost';
    const OPTION_PER_SHIFT_UNIT = 'PerShiftUnit';
    const TYPE_STANDARD = 'Standard';
    const TYPE_ALL_PURPOSE = 'AllPurpose';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionAllowableValues()
    {
        return [
            self::OPTION_FIXED,
            self::OPTION_PER_HOUR_WORKED,
            self::OPTION_PERCENTAGE_OF_SHIFT_COST,
            self::OPTION_PER_SHIFT_UNIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
            self::TYPE_ALL_PURPOSE,
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
        $this->container['pay_category'] = isset($data['pay_category']) ? $data['pay_category'] : null;
        $this->container['pay_category_id'] = isset($data['pay_category_id']) ? $data['pay_category_id'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['rate_multiplier'] = isset($data['rate_multiplier']) ? $data['rate_multiplier'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOptionAllowableValues();
        if (!is_null($this->container['option']) && !in_array($this->container['option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'option', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets pay_category_id
     *
     * @return int
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int $pay_category_id 
     *
     * @return $this
     */
    public function setPayCategoryId($pay_category_id)
    {
        $this->container['pay_category_id'] = $pay_category_id;

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
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost 
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets rate_multiplier
     *
     * @return double
     */
    public function getRateMultiplier()
    {
        return $this->container['rate_multiplier'];
    }

    /**
     * Sets rate_multiplier
     *
     * @param double $rate_multiplier 
     *
     * @return $this
     */
    public function setRateMultiplier($rate_multiplier)
    {
        $this->container['rate_multiplier'] = $rate_multiplier;

        return $this;
    }

    /**
     * Gets option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string $option 
     *
     * @return $this
     */
    public function setOption($option)
    {
        $allowedValues = $this->getOptionAllowableValues();
        if (!is_null($option) && !in_array($option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return \Swagger\Client\Model\NominalClassification
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param \Swagger\Client\Model\NominalClassification $classification 
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;

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

