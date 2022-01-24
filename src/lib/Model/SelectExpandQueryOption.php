<?php
/**
 * SelectExpandQueryOption
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
 * SelectExpandQueryOption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SelectExpandQueryOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SelectExpandQueryOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => '\Swagger\Client\Model\ODataQueryContext',
        'raw_select' => 'string',
        'raw_expand' => 'string',
        'validator' => '\Swagger\Client\Model\SelectExpandQueryValidator',
        'select_expand_clause' => '\Swagger\Client\Model\SelectExpandClause'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
        'raw_select' => null,
        'raw_expand' => null,
        'validator' => null,
        'select_expand_clause' => null
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
        'context' => 'context',
        'raw_select' => 'rawSelect',
        'raw_expand' => 'rawExpand',
        'validator' => 'validator',
        'select_expand_clause' => 'selectExpandClause'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'raw_select' => 'setRawSelect',
        'raw_expand' => 'setRawExpand',
        'validator' => 'setValidator',
        'select_expand_clause' => 'setSelectExpandClause'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'raw_select' => 'getRawSelect',
        'raw_expand' => 'getRawExpand',
        'validator' => 'getValidator',
        'select_expand_clause' => 'getSelectExpandClause'
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['raw_select'] = isset($data['raw_select']) ? $data['raw_select'] : null;
        $this->container['raw_expand'] = isset($data['raw_expand']) ? $data['raw_expand'] : null;
        $this->container['validator'] = isset($data['validator']) ? $data['validator'] : null;
        $this->container['select_expand_clause'] = isset($data['select_expand_clause']) ? $data['select_expand_clause'] : null;
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
     * Gets context
     *
     * @return \Swagger\Client\Model\ODataQueryContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \Swagger\Client\Model\ODataQueryContext $context 
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets raw_select
     *
     * @return string
     */
    public function getRawSelect()
    {
        return $this->container['raw_select'];
    }

    /**
     * Sets raw_select
     *
     * @param string $raw_select 
     *
     * @return $this
     */
    public function setRawSelect($raw_select)
    {
        $this->container['raw_select'] = $raw_select;

        return $this;
    }

    /**
     * Gets raw_expand
     *
     * @return string
     */
    public function getRawExpand()
    {
        return $this->container['raw_expand'];
    }

    /**
     * Sets raw_expand
     *
     * @param string $raw_expand 
     *
     * @return $this
     */
    public function setRawExpand($raw_expand)
    {
        $this->container['raw_expand'] = $raw_expand;

        return $this;
    }

    /**
     * Gets validator
     *
     * @return \Swagger\Client\Model\SelectExpandQueryValidator
     */
    public function getValidator()
    {
        return $this->container['validator'];
    }

    /**
     * Sets validator
     *
     * @param \Swagger\Client\Model\SelectExpandQueryValidator $validator 
     *
     * @return $this
     */
    public function setValidator($validator)
    {
        $this->container['validator'] = $validator;

        return $this;
    }

    /**
     * Gets select_expand_clause
     *
     * @return \Swagger\Client\Model\SelectExpandClause
     */
    public function getSelectExpandClause()
    {
        return $this->container['select_expand_clause'];
    }

    /**
     * Sets select_expand_clause
     *
     * @param \Swagger\Client\Model\SelectExpandClause $select_expand_clause 
     *
     * @return $this
     */
    public function setSelectExpandClause($select_expand_clause)
    {
        $this->container['select_expand_clause'] = $select_expand_clause;

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


