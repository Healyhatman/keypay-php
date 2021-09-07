<?php
/**
 * AuInitialDeductionModel
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
 * AuInitialDeductionModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuInitialDeductionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuInitialDeductionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_resc' => 'bool',
        'tax_exempt' => 'bool',
        'is_member_voluntary' => 'bool',
        'is_resc_status_read_only' => 'bool',
        'deduction_category_id' => 'int',
        'name' => 'string',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_resc' => null,
        'tax_exempt' => null,
        'is_member_voluntary' => null,
        'is_resc_status_read_only' => null,
        'deduction_category_id' => 'int32',
        'name' => null,
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
        'is_resc' => 'isRESC',
        'tax_exempt' => 'taxExempt',
        'is_member_voluntary' => 'isMemberVoluntary',
        'is_resc_status_read_only' => 'isRescStatusReadOnly',
        'deduction_category_id' => 'deductionCategoryId',
        'name' => 'name',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_resc' => 'setIsResc',
        'tax_exempt' => 'setTaxExempt',
        'is_member_voluntary' => 'setIsMemberVoluntary',
        'is_resc_status_read_only' => 'setIsRescStatusReadOnly',
        'deduction_category_id' => 'setDeductionCategoryId',
        'name' => 'setName',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_resc' => 'getIsResc',
        'tax_exempt' => 'getTaxExempt',
        'is_member_voluntary' => 'getIsMemberVoluntary',
        'is_resc_status_read_only' => 'getIsRescStatusReadOnly',
        'deduction_category_id' => 'getDeductionCategoryId',
        'name' => 'getName',
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
        $this->container['is_resc'] = isset($data['is_resc']) ? $data['is_resc'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['is_member_voluntary'] = isset($data['is_member_voluntary']) ? $data['is_member_voluntary'] : null;
        $this->container['is_resc_status_read_only'] = isset($data['is_resc_status_read_only']) ? $data['is_resc_status_read_only'] : null;
        $this->container['deduction_category_id'] = isset($data['deduction_category_id']) ? $data['deduction_category_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
     * Gets is_resc
     *
     * @return bool
     */
    public function getIsResc()
    {
        return $this->container['is_resc'];
    }

    /**
     * Sets is_resc
     *
     * @param bool $is_resc 
     *
     * @return $this
     */
    public function setIsResc($is_resc)
    {
        $this->container['is_resc'] = $is_resc;

        return $this;
    }

    /**
     * Gets tax_exempt
     *
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool $tax_exempt 
     *
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets is_member_voluntary
     *
     * @return bool
     */
    public function getIsMemberVoluntary()
    {
        return $this->container['is_member_voluntary'];
    }

    /**
     * Sets is_member_voluntary
     *
     * @param bool $is_member_voluntary 
     *
     * @return $this
     */
    public function setIsMemberVoluntary($is_member_voluntary)
    {
        $this->container['is_member_voluntary'] = $is_member_voluntary;

        return $this;
    }

    /**
     * Gets is_resc_status_read_only
     *
     * @return bool
     */
    public function getIsRescStatusReadOnly()
    {
        return $this->container['is_resc_status_read_only'];
    }

    /**
     * Sets is_resc_status_read_only
     *
     * @param bool $is_resc_status_read_only 
     *
     * @return $this
     */
    public function setIsRescStatusReadOnly($is_resc_status_read_only)
    {
        $this->container['is_resc_status_read_only'] = $is_resc_status_read_only;

        return $this;
    }

    /**
     * Gets deduction_category_id
     *
     * @return int
     */
    public function getDeductionCategoryId()
    {
        return $this->container['deduction_category_id'];
    }

    /**
     * Sets deduction_category_id
     *
     * @param int $deduction_category_id 
     *
     * @return $this
     */
    public function setDeductionCategoryId($deduction_category_id)
    {
        $this->container['deduction_category_id'] = $deduction_category_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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

