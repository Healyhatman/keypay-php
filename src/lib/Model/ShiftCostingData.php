<?php
/**
 * ShiftCostingData
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
 * ShiftCostingData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftCostingData implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftCostingData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shift_parts' => '\Swagger\Client\Model\ShiftPartModel[]',
        'allowances' => '\Swagger\Client\Model\ShiftAllowanceModel[]',
        'liabilities' => '\Swagger\Client\Model\ShiftLiabilityModel[]',
        'is_consolidated' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shift_parts' => null,
        'allowances' => null,
        'liabilities' => null,
        'is_consolidated' => null,
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
        'shift_parts' => 'shiftParts',
        'allowances' => 'allowances',
        'liabilities' => 'liabilities',
        'is_consolidated' => 'isConsolidated',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shift_parts' => 'setShiftParts',
        'allowances' => 'setAllowances',
        'liabilities' => 'setLiabilities',
        'is_consolidated' => 'setIsConsolidated',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shift_parts' => 'getShiftParts',
        'allowances' => 'getAllowances',
        'liabilities' => 'getLiabilities',
        'is_consolidated' => 'getIsConsolidated',
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
        $this->container['shift_parts'] = isset($data['shift_parts']) ? $data['shift_parts'] : null;
        $this->container['allowances'] = isset($data['allowances']) ? $data['allowances'] : null;
        $this->container['liabilities'] = isset($data['liabilities']) ? $data['liabilities'] : null;
        $this->container['is_consolidated'] = isset($data['is_consolidated']) ? $data['is_consolidated'] : null;
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
     * Gets shift_parts
     *
     * @return \Swagger\Client\Model\ShiftPartModel[]
     */
    public function getShiftParts()
    {
        return $this->container['shift_parts'];
    }

    /**
     * Sets shift_parts
     *
     * @param \Swagger\Client\Model\ShiftPartModel[] $shift_parts
     *
     * @return $this
     */
    public function setShiftParts($shift_parts)
    {
        $this->container['shift_parts'] = $shift_parts;

        return $this;
    }

    /**
     * Gets allowances
     *
     * @return \Swagger\Client\Model\ShiftAllowanceModel[]
     */
    public function getAllowances()
    {
        return $this->container['allowances'];
    }

    /**
     * Sets allowances
     *
     * @param \Swagger\Client\Model\ShiftAllowanceModel[] $allowances
     *
     * @return $this
     */
    public function setAllowances($allowances)
    {
        $this->container['allowances'] = $allowances;

        return $this;
    }

    /**
     * Gets liabilities
     *
     * @return \Swagger\Client\Model\ShiftLiabilityModel[]
     */
    public function getLiabilities()
    {
        return $this->container['liabilities'];
    }

    /**
     * Sets liabilities
     *
     * @param \Swagger\Client\Model\ShiftLiabilityModel[] $liabilities
     *
     * @return $this
     */
    public function setLiabilities($liabilities)
    {
        $this->container['liabilities'] = $liabilities;

        return $this;
    }

    /**
     * Gets is_consolidated
     *
     * @return bool
     */
    public function getIsConsolidated()
    {
        return $this->container['is_consolidated'];
    }

    /**
     * Sets is_consolidated
     *
     * @param bool $is_consolidated
     *
     * @return $this
     */
    public function setIsConsolidated($is_consolidated)
    {
        $this->container['is_consolidated'] = $is_consolidated;

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
