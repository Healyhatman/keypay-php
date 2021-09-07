<?php
/**
 * ExpenseReferenceData
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
 * ExpenseReferenceData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpenseReferenceData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExpenseReferenceData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expense_categories' => '\Swagger\Client\Model\ExpenseCategoryResponseModel[]',
        'tax_codes' => '\Swagger\Client\Model\ExpenseTaxCode[]',
        'locations' => '\Swagger\Client\Model\LocationModel[]',
        'default_location_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expense_categories' => null,
        'tax_codes' => null,
        'locations' => null,
        'default_location_id' => 'int32'
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
        'expense_categories' => 'expenseCategories',
        'tax_codes' => 'taxCodes',
        'locations' => 'locations',
        'default_location_id' => 'defaultLocationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expense_categories' => 'setExpenseCategories',
        'tax_codes' => 'setTaxCodes',
        'locations' => 'setLocations',
        'default_location_id' => 'setDefaultLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expense_categories' => 'getExpenseCategories',
        'tax_codes' => 'getTaxCodes',
        'locations' => 'getLocations',
        'default_location_id' => 'getDefaultLocationId'
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
        $this->container['expense_categories'] = isset($data['expense_categories']) ? $data['expense_categories'] : null;
        $this->container['tax_codes'] = isset($data['tax_codes']) ? $data['tax_codes'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['default_location_id'] = isset($data['default_location_id']) ? $data['default_location_id'] : null;
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
     * Gets expense_categories
     *
     * @return \Swagger\Client\Model\ExpenseCategoryResponseModel[]
     */
    public function getExpenseCategories()
    {
        return $this->container['expense_categories'];
    }

    /**
     * Sets expense_categories
     *
     * @param \Swagger\Client\Model\ExpenseCategoryResponseModel[] $expense_categories 
     *
     * @return $this
     */
    public function setExpenseCategories($expense_categories)
    {
        $this->container['expense_categories'] = $expense_categories;

        return $this;
    }

    /**
     * Gets tax_codes
     *
     * @return \Swagger\Client\Model\ExpenseTaxCode[]
     */
    public function getTaxCodes()
    {
        return $this->container['tax_codes'];
    }

    /**
     * Sets tax_codes
     *
     * @param \Swagger\Client\Model\ExpenseTaxCode[] $tax_codes 
     *
     * @return $this
     */
    public function setTaxCodes($tax_codes)
    {
        $this->container['tax_codes'] = $tax_codes;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Swagger\Client\Model\LocationModel[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Swagger\Client\Model\LocationModel[] $locations 
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets default_location_id
     *
     * @return int
     */
    public function getDefaultLocationId()
    {
        return $this->container['default_location_id'];
    }

    /**
     * Sets default_location_id
     *
     * @param int $default_location_id 
     *
     * @return $this
     */
    public function setDefaultLocationId($default_location_id)
    {
        $this->container['default_location_id'] = $default_location_id;

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

