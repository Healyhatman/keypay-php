<?php
/**
 * ODataQueryOptionsBusiness
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
 * ODataQueryOptionsBusiness Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ODataQueryOptionsBusiness implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ODataQueryOptions[Business]';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'if_match' => 'object',
        'if_none_match' => 'object',
        'context' => '\Swagger\Client\Model\ODataQueryContext',
        'request' => 'object',
        'raw_values' => '\Swagger\Client\Model\ODataRawQueryOptions',
        'select_expand' => '\Swagger\Client\Model\SelectExpandQueryOption',
        'filter' => '\Swagger\Client\Model\FilterQueryOption',
        'order_by' => '\Swagger\Client\Model\OrderByQueryOption',
        'skip' => '\Swagger\Client\Model\SkipQueryOption',
        'top' => '\Swagger\Client\Model\TopQueryOption',
        'inline_count' => '\Swagger\Client\Model\InlineCountQueryOption',
        'validator' => '\Swagger\Client\Model\ODataQueryValidator'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'if_match' => null,
        'if_none_match' => null,
        'context' => null,
        'request' => null,
        'raw_values' => null,
        'select_expand' => null,
        'filter' => null,
        'order_by' => null,
        'skip' => null,
        'top' => null,
        'inline_count' => null,
        'validator' => null
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
        'if_match' => 'ifMatch',
        'if_none_match' => 'ifNoneMatch',
        'context' => 'context',
        'request' => 'request',
        'raw_values' => 'rawValues',
        'select_expand' => 'selectExpand',
        'filter' => 'filter',
        'order_by' => 'orderBy',
        'skip' => 'skip',
        'top' => 'top',
        'inline_count' => 'inlineCount',
        'validator' => 'validator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'if_match' => 'setIfMatch',
        'if_none_match' => 'setIfNoneMatch',
        'context' => 'setContext',
        'request' => 'setRequest',
        'raw_values' => 'setRawValues',
        'select_expand' => 'setSelectExpand',
        'filter' => 'setFilter',
        'order_by' => 'setOrderBy',
        'skip' => 'setSkip',
        'top' => 'setTop',
        'inline_count' => 'setInlineCount',
        'validator' => 'setValidator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'if_match' => 'getIfMatch',
        'if_none_match' => 'getIfNoneMatch',
        'context' => 'getContext',
        'request' => 'getRequest',
        'raw_values' => 'getRawValues',
        'select_expand' => 'getSelectExpand',
        'filter' => 'getFilter',
        'order_by' => 'getOrderBy',
        'skip' => 'getSkip',
        'top' => 'getTop',
        'inline_count' => 'getInlineCount',
        'validator' => 'getValidator'
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
        $this->container['if_match'] = isset($data['if_match']) ? $data['if_match'] : null;
        $this->container['if_none_match'] = isset($data['if_none_match']) ? $data['if_none_match'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['raw_values'] = isset($data['raw_values']) ? $data['raw_values'] : null;
        $this->container['select_expand'] = isset($data['select_expand']) ? $data['select_expand'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['inline_count'] = isset($data['inline_count']) ? $data['inline_count'] : null;
        $this->container['validator'] = isset($data['validator']) ? $data['validator'] : null;
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
     * Gets if_match
     *
     * @return object
     */
    public function getIfMatch()
    {
        return $this->container['if_match'];
    }

    /**
     * Sets if_match
     *
     * @param object $if_match 
     *
     * @return $this
     */
    public function setIfMatch($if_match)
    {
        $this->container['if_match'] = $if_match;

        return $this;
    }

    /**
     * Gets if_none_match
     *
     * @return object
     */
    public function getIfNoneMatch()
    {
        return $this->container['if_none_match'];
    }

    /**
     * Sets if_none_match
     *
     * @param object $if_none_match 
     *
     * @return $this
     */
    public function setIfNoneMatch($if_none_match)
    {
        $this->container['if_none_match'] = $if_none_match;

        return $this;
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
     * Gets request
     *
     * @return object
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param object $request 
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets raw_values
     *
     * @return \Swagger\Client\Model\ODataRawQueryOptions
     */
    public function getRawValues()
    {
        return $this->container['raw_values'];
    }

    /**
     * Sets raw_values
     *
     * @param \Swagger\Client\Model\ODataRawQueryOptions $raw_values 
     *
     * @return $this
     */
    public function setRawValues($raw_values)
    {
        $this->container['raw_values'] = $raw_values;

        return $this;
    }

    /**
     * Gets select_expand
     *
     * @return \Swagger\Client\Model\SelectExpandQueryOption
     */
    public function getSelectExpand()
    {
        return $this->container['select_expand'];
    }

    /**
     * Sets select_expand
     *
     * @param \Swagger\Client\Model\SelectExpandQueryOption $select_expand 
     *
     * @return $this
     */
    public function setSelectExpand($select_expand)
    {
        $this->container['select_expand'] = $select_expand;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \Swagger\Client\Model\FilterQueryOption
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \Swagger\Client\Model\FilterQueryOption $filter 
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Swagger\Client\Model\OrderByQueryOption
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Swagger\Client\Model\OrderByQueryOption $order_by 
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return \Swagger\Client\Model\SkipQueryOption
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param \Swagger\Client\Model\SkipQueryOption $skip 
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets top
     *
     * @return \Swagger\Client\Model\TopQueryOption
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param \Swagger\Client\Model\TopQueryOption $top 
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets inline_count
     *
     * @return \Swagger\Client\Model\InlineCountQueryOption
     */
    public function getInlineCount()
    {
        return $this->container['inline_count'];
    }

    /**
     * Sets inline_count
     *
     * @param \Swagger\Client\Model\InlineCountQueryOption $inline_count 
     *
     * @return $this
     */
    public function setInlineCount($inline_count)
    {
        $this->container['inline_count'] = $inline_count;

        return $this;
    }

    /**
     * Gets validator
     *
     * @return \Swagger\Client\Model\ODataQueryValidator
     */
    public function getValidator()
    {
        return $this->container['validator'];
    }

    /**
     * Sets validator
     *
     * @param \Swagger\Client\Model\ODataQueryValidator $validator 
     *
     * @return $this
     */
    public function setValidator($validator)
    {
        $this->container['validator'] = $validator;

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


