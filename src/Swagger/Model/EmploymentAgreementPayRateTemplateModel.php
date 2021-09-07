<?php
/**
 * EmploymentAgreementPayRateTemplateModel
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
 * EmploymentAgreementPayRateTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmploymentAgreementPayRateTemplateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmploymentAgreementPayRateTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_rate_template_id' => 'int',
        'pay_rate_template' => '\Swagger\Client\Model\PayRateTemplateModel',
        'min_age' => 'int',
        'max_age' => 'int',
        'min_anniversary_months' => 'int',
        'max_anniversary_months' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_rate_template_id' => 'int32',
        'pay_rate_template' => null,
        'min_age' => 'int32',
        'max_age' => 'int32',
        'min_anniversary_months' => 'int32',
        'max_anniversary_months' => 'int32'
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
        'pay_rate_template_id' => 'payRateTemplateId',
        'pay_rate_template' => 'payRateTemplate',
        'min_age' => 'minAge',
        'max_age' => 'maxAge',
        'min_anniversary_months' => 'minAnniversaryMonths',
        'max_anniversary_months' => 'maxAnniversaryMonths'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_rate_template_id' => 'setPayRateTemplateId',
        'pay_rate_template' => 'setPayRateTemplate',
        'min_age' => 'setMinAge',
        'max_age' => 'setMaxAge',
        'min_anniversary_months' => 'setMinAnniversaryMonths',
        'max_anniversary_months' => 'setMaxAnniversaryMonths'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_rate_template_id' => 'getPayRateTemplateId',
        'pay_rate_template' => 'getPayRateTemplate',
        'min_age' => 'getMinAge',
        'max_age' => 'getMaxAge',
        'min_anniversary_months' => 'getMinAnniversaryMonths',
        'max_anniversary_months' => 'getMaxAnniversaryMonths'
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
        $this->container['pay_rate_template_id'] = isset($data['pay_rate_template_id']) ? $data['pay_rate_template_id'] : null;
        $this->container['pay_rate_template'] = isset($data['pay_rate_template']) ? $data['pay_rate_template'] : null;
        $this->container['min_age'] = isset($data['min_age']) ? $data['min_age'] : null;
        $this->container['max_age'] = isset($data['max_age']) ? $data['max_age'] : null;
        $this->container['min_anniversary_months'] = isset($data['min_anniversary_months']) ? $data['min_anniversary_months'] : null;
        $this->container['max_anniversary_months'] = isset($data['max_anniversary_months']) ? $data['max_anniversary_months'] : null;
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
     * Gets pay_rate_template_id
     *
     * @return int
     */
    public function getPayRateTemplateId()
    {
        return $this->container['pay_rate_template_id'];
    }

    /**
     * Sets pay_rate_template_id
     *
     * @param int $pay_rate_template_id 
     *
     * @return $this
     */
    public function setPayRateTemplateId($pay_rate_template_id)
    {
        $this->container['pay_rate_template_id'] = $pay_rate_template_id;

        return $this;
    }

    /**
     * Gets pay_rate_template
     *
     * @return \Swagger\Client\Model\PayRateTemplateModel
     */
    public function getPayRateTemplate()
    {
        return $this->container['pay_rate_template'];
    }

    /**
     * Sets pay_rate_template
     *
     * @param \Swagger\Client\Model\PayRateTemplateModel $pay_rate_template 
     *
     * @return $this
     */
    public function setPayRateTemplate($pay_rate_template)
    {
        $this->container['pay_rate_template'] = $pay_rate_template;

        return $this;
    }

    /**
     * Gets min_age
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->container['min_age'];
    }

    /**
     * Sets min_age
     *
     * @param int $min_age 
     *
     * @return $this
     */
    public function setMinAge($min_age)
    {
        $this->container['min_age'] = $min_age;

        return $this;
    }

    /**
     * Gets max_age
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->container['max_age'];
    }

    /**
     * Sets max_age
     *
     * @param int $max_age 
     *
     * @return $this
     */
    public function setMaxAge($max_age)
    {
        $this->container['max_age'] = $max_age;

        return $this;
    }

    /**
     * Gets min_anniversary_months
     *
     * @return int
     */
    public function getMinAnniversaryMonths()
    {
        return $this->container['min_anniversary_months'];
    }

    /**
     * Sets min_anniversary_months
     *
     * @param int $min_anniversary_months 
     *
     * @return $this
     */
    public function setMinAnniversaryMonths($min_anniversary_months)
    {
        $this->container['min_anniversary_months'] = $min_anniversary_months;

        return $this;
    }

    /**
     * Gets max_anniversary_months
     *
     * @return int
     */
    public function getMaxAnniversaryMonths()
    {
        return $this->container['max_anniversary_months'];
    }

    /**
     * Sets max_anniversary_months
     *
     * @param int $max_anniversary_months 
     *
     * @return $this
     */
    public function setMaxAnniversaryMonths($max_anniversary_months)
    {
        $this->container['max_anniversary_months'] = $max_anniversary_months;

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

