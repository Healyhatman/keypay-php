<?php
/**
 * SingleValueNode
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
 * SingleValueNode Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleValueNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SingleValueNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_reference' => '\Swagger\Client\Model\IEdmTypeReference',
        'kind' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_reference' => null,
        'kind' => null
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
        'type_reference' => 'typeReference',
        'kind' => 'kind'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_reference' => 'setTypeReference',
        'kind' => 'setKind'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_reference' => 'getTypeReference',
        'kind' => 'getKind'
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

    const KIND_NONE = 'None';
    const KIND_CONSTANT = 'Constant';
    const KIND_CONVERT = 'Convert';
    const KIND_NONENTITY_RANGE_VARIABLE_REFERENCE = 'NonentityRangeVariableReference';
    const KIND_BINARY_OPERATOR = 'BinaryOperator';
    const KIND_UNARY_OPERATOR = 'UnaryOperator';
    const KIND_SINGLE_VALUE_PROPERTY_ACCESS = 'SingleValuePropertyAccess';
    const KIND_COLLECTION_PROPERTY_ACCESS = 'CollectionPropertyAccess';
    const KIND_SINGLE_VALUE_FUNCTION_CALL = 'SingleValueFunctionCall';
    const KIND_ANY = 'Any';
    const KIND_COLLECTION_NAVIGATION_NODE = 'CollectionNavigationNode';
    const KIND_SINGLE_NAVIGATION_NODE = 'SingleNavigationNode';
    const KIND_SINGLE_VALUE_OPEN_PROPERTY_ACCESS = 'SingleValueOpenPropertyAccess';
    const KIND_SINGLE_ENTITY_CAST = 'SingleEntityCast';
    const KIND_ALL = 'All';
    const KIND_ENTITY_COLLECTION_CAST = 'EntityCollectionCast';
    const KIND_ENTITY_RANGE_VARIABLE_REFERENCE = 'EntityRangeVariableReference';
    const KIND_SINGLE_ENTITY_FUNCTION_CALL = 'SingleEntityFunctionCall';
    const KIND_COLLECTION_FUNCTION_CALL = 'CollectionFunctionCall';
    const KIND_ENTITY_COLLECTION_FUNCTION_CALL = 'EntityCollectionFunctionCall';
    const KIND_NAMED_FUNCTION_PARAMETER = 'NamedFunctionParameter';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_NONE,
            self::KIND_CONSTANT,
            self::KIND_CONVERT,
            self::KIND_NONENTITY_RANGE_VARIABLE_REFERENCE,
            self::KIND_BINARY_OPERATOR,
            self::KIND_UNARY_OPERATOR,
            self::KIND_SINGLE_VALUE_PROPERTY_ACCESS,
            self::KIND_COLLECTION_PROPERTY_ACCESS,
            self::KIND_SINGLE_VALUE_FUNCTION_CALL,
            self::KIND_ANY,
            self::KIND_COLLECTION_NAVIGATION_NODE,
            self::KIND_SINGLE_NAVIGATION_NODE,
            self::KIND_SINGLE_VALUE_OPEN_PROPERTY_ACCESS,
            self::KIND_SINGLE_ENTITY_CAST,
            self::KIND_ALL,
            self::KIND_ENTITY_COLLECTION_CAST,
            self::KIND_ENTITY_RANGE_VARIABLE_REFERENCE,
            self::KIND_SINGLE_ENTITY_FUNCTION_CALL,
            self::KIND_COLLECTION_FUNCTION_CALL,
            self::KIND_ENTITY_COLLECTION_FUNCTION_CALL,
            self::KIND_NAMED_FUNCTION_PARAMETER,
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
        $this->container['type_reference'] = isset($data['type_reference']) ? $data['type_reference'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kind', must be one of '%s'",
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
     * Gets type_reference
     *
     * @return \Swagger\Client\Model\IEdmTypeReference
     */
    public function getTypeReference()
    {
        return $this->container['type_reference'];
    }

    /**
     * Sets type_reference
     *
     * @param \Swagger\Client\Model\IEdmTypeReference $type_reference 
     *
     * @return $this
     */
    public function setTypeReference($type_reference)
    {
        $this->container['type_reference'] = $type_reference;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind 
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

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

