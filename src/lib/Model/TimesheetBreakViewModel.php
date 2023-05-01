<?php
/**
 * TimesheetBreakViewModel
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
 * TimesheetBreakViewModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimesheetBreakViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimesheetBreakViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'submitted_start' => '\DateTime',
        'submitted_end' => '\DateTime',
        'is_paid_break' => 'bool',
        'formatted_start' => 'string',
        'formatted_end' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'start' => 'date-time',
        'end' => 'date-time',
        'submitted_start' => 'date-time',
        'submitted_end' => 'date-time',
        'is_paid_break' => null,
        'formatted_start' => null,
        'formatted_end' => null
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
        'id' => 'id',
        'start' => 'start',
        'end' => 'end',
        'submitted_start' => 'submittedStart',
        'submitted_end' => 'submittedEnd',
        'is_paid_break' => 'isPaidBreak',
        'formatted_start' => 'formattedStart',
        'formatted_end' => 'formattedEnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'start' => 'setStart',
        'end' => 'setEnd',
        'submitted_start' => 'setSubmittedStart',
        'submitted_end' => 'setSubmittedEnd',
        'is_paid_break' => 'setIsPaidBreak',
        'formatted_start' => 'setFormattedStart',
        'formatted_end' => 'setFormattedEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'start' => 'getStart',
        'end' => 'getEnd',
        'submitted_start' => 'getSubmittedStart',
        'submitted_end' => 'getSubmittedEnd',
        'is_paid_break' => 'getIsPaidBreak',
        'formatted_start' => 'getFormattedStart',
        'formatted_end' => 'getFormattedEnd'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['submitted_start'] = isset($data['submitted_start']) ? $data['submitted_start'] : null;
        $this->container['submitted_end'] = isset($data['submitted_end']) ? $data['submitted_end'] : null;
        $this->container['is_paid_break'] = isset($data['is_paid_break']) ? $data['is_paid_break'] : null;
        $this->container['formatted_start'] = isset($data['formatted_start']) ? $data['formatted_start'] : null;
        $this->container['formatted_end'] = isset($data['formatted_end']) ? $data['formatted_end'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start 
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end 
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets submitted_start
     *
     * @return \DateTime
     */
    public function getSubmittedStart()
    {
        return $this->container['submitted_start'];
    }

    /**
     * Sets submitted_start
     *
     * @param \DateTime $submitted_start 
     *
     * @return $this
     */
    public function setSubmittedStart($submitted_start)
    {
        $this->container['submitted_start'] = $submitted_start;

        return $this;
    }

    /**
     * Gets submitted_end
     *
     * @return \DateTime
     */
    public function getSubmittedEnd()
    {
        return $this->container['submitted_end'];
    }

    /**
     * Sets submitted_end
     *
     * @param \DateTime $submitted_end 
     *
     * @return $this
     */
    public function setSubmittedEnd($submitted_end)
    {
        $this->container['submitted_end'] = $submitted_end;

        return $this;
    }

    /**
     * Gets is_paid_break
     *
     * @return bool
     */
    public function getIsPaidBreak()
    {
        return $this->container['is_paid_break'];
    }

    /**
     * Sets is_paid_break
     *
     * @param bool $is_paid_break 
     *
     * @return $this
     */
    public function setIsPaidBreak($is_paid_break)
    {
        $this->container['is_paid_break'] = $is_paid_break;

        return $this;
    }

    /**
     * Gets formatted_start
     *
     * @return string
     */
    public function getFormattedStart()
    {
        return $this->container['formatted_start'];
    }

    /**
     * Sets formatted_start
     *
     * @param string $formatted_start 
     *
     * @return $this
     */
    public function setFormattedStart($formatted_start)
    {
        $this->container['formatted_start'] = $formatted_start;

        return $this;
    }

    /**
     * Gets formatted_end
     *
     * @return string
     */
    public function getFormattedEnd()
    {
        return $this->container['formatted_end'];
    }

    /**
     * Sets formatted_end
     *
     * @param string $formatted_end 
     *
     * @return $this
     */
    public function setFormattedEnd($formatted_end)
    {
        $this->container['formatted_end'] = $formatted_end;

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


