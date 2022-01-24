<?php
/**
 * TimesheetRoundingRulesModel
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
 * TimesheetRoundingRulesModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimesheetRoundingRulesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimesheetRoundingRulesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'shift_start_rounding_direction' => 'string',
        'shift_start_rounding_interval' => 'int',
        'shift_end_rounding_direction' => 'string',
        'shift_end_rounding_interval' => 'int',
        'break_start_rounding_direction' => 'string',
        'break_start_rounding_interval' => 'int',
        'break_end_rounding_direction' => 'string',
        'break_end_rounding_interval' => 'int',
        'round_up_to_shift_start_time_rounding_interval' => 'int',
        'round_down_to_shift_start_time_rounding_interval' => 'int',
        'round_up_to_shift_end_time_rounding_interval' => 'int',
        'round_down_to_shift_end_time_rounding_interval' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'shift_start_rounding_direction' => null,
        'shift_start_rounding_interval' => 'int32',
        'shift_end_rounding_direction' => null,
        'shift_end_rounding_interval' => 'int32',
        'break_start_rounding_direction' => null,
        'break_start_rounding_interval' => 'int32',
        'break_end_rounding_direction' => null,
        'break_end_rounding_interval' => 'int32',
        'round_up_to_shift_start_time_rounding_interval' => 'int32',
        'round_down_to_shift_start_time_rounding_interval' => 'int32',
        'round_up_to_shift_end_time_rounding_interval' => 'int32',
        'round_down_to_shift_end_time_rounding_interval' => 'int32'
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
        'shift_start_rounding_direction' => 'shiftStartRoundingDirection',
        'shift_start_rounding_interval' => 'shiftStartRoundingInterval',
        'shift_end_rounding_direction' => 'shiftEndRoundingDirection',
        'shift_end_rounding_interval' => 'shiftEndRoundingInterval',
        'break_start_rounding_direction' => 'breakStartRoundingDirection',
        'break_start_rounding_interval' => 'breakStartRoundingInterval',
        'break_end_rounding_direction' => 'breakEndRoundingDirection',
        'break_end_rounding_interval' => 'breakEndRoundingInterval',
        'round_up_to_shift_start_time_rounding_interval' => 'roundUpToShiftStartTimeRoundingInterval',
        'round_down_to_shift_start_time_rounding_interval' => 'roundDownToShiftStartTimeRoundingInterval',
        'round_up_to_shift_end_time_rounding_interval' => 'roundUpToShiftEndTimeRoundingInterval',
        'round_down_to_shift_end_time_rounding_interval' => 'roundDownToShiftEndTimeRoundingInterval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'shift_start_rounding_direction' => 'setShiftStartRoundingDirection',
        'shift_start_rounding_interval' => 'setShiftStartRoundingInterval',
        'shift_end_rounding_direction' => 'setShiftEndRoundingDirection',
        'shift_end_rounding_interval' => 'setShiftEndRoundingInterval',
        'break_start_rounding_direction' => 'setBreakStartRoundingDirection',
        'break_start_rounding_interval' => 'setBreakStartRoundingInterval',
        'break_end_rounding_direction' => 'setBreakEndRoundingDirection',
        'break_end_rounding_interval' => 'setBreakEndRoundingInterval',
        'round_up_to_shift_start_time_rounding_interval' => 'setRoundUpToShiftStartTimeRoundingInterval',
        'round_down_to_shift_start_time_rounding_interval' => 'setRoundDownToShiftStartTimeRoundingInterval',
        'round_up_to_shift_end_time_rounding_interval' => 'setRoundUpToShiftEndTimeRoundingInterval',
        'round_down_to_shift_end_time_rounding_interval' => 'setRoundDownToShiftEndTimeRoundingInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'shift_start_rounding_direction' => 'getShiftStartRoundingDirection',
        'shift_start_rounding_interval' => 'getShiftStartRoundingInterval',
        'shift_end_rounding_direction' => 'getShiftEndRoundingDirection',
        'shift_end_rounding_interval' => 'getShiftEndRoundingInterval',
        'break_start_rounding_direction' => 'getBreakStartRoundingDirection',
        'break_start_rounding_interval' => 'getBreakStartRoundingInterval',
        'break_end_rounding_direction' => 'getBreakEndRoundingDirection',
        'break_end_rounding_interval' => 'getBreakEndRoundingInterval',
        'round_up_to_shift_start_time_rounding_interval' => 'getRoundUpToShiftStartTimeRoundingInterval',
        'round_down_to_shift_start_time_rounding_interval' => 'getRoundDownToShiftStartTimeRoundingInterval',
        'round_up_to_shift_end_time_rounding_interval' => 'getRoundUpToShiftEndTimeRoundingInterval',
        'round_down_to_shift_end_time_rounding_interval' => 'getRoundDownToShiftEndTimeRoundingInterval'
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

    const SHIFT_START_ROUNDING_DIRECTION_NONE = 'None';
    const SHIFT_START_ROUNDING_DIRECTION_UP = 'Up';
    const SHIFT_START_ROUNDING_DIRECTION_DOWN = 'Down';
    const SHIFT_START_ROUNDING_DIRECTION_TO_THE_NEAREST = 'ToTheNearest';
    const SHIFT_END_ROUNDING_DIRECTION_NONE = 'None';
    const SHIFT_END_ROUNDING_DIRECTION_UP = 'Up';
    const SHIFT_END_ROUNDING_DIRECTION_DOWN = 'Down';
    const SHIFT_END_ROUNDING_DIRECTION_TO_THE_NEAREST = 'ToTheNearest';
    const BREAK_START_ROUNDING_DIRECTION_NONE = 'None';
    const BREAK_START_ROUNDING_DIRECTION_UP = 'Up';
    const BREAK_START_ROUNDING_DIRECTION_DOWN = 'Down';
    const BREAK_START_ROUNDING_DIRECTION_TO_THE_NEAREST = 'ToTheNearest';
    const BREAK_END_ROUNDING_DIRECTION_NONE = 'None';
    const BREAK_END_ROUNDING_DIRECTION_UP = 'Up';
    const BREAK_END_ROUNDING_DIRECTION_DOWN = 'Down';
    const BREAK_END_ROUNDING_DIRECTION_TO_THE_NEAREST = 'ToTheNearest';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShiftStartRoundingDirectionAllowableValues()
    {
        return [
            self::SHIFT_START_ROUNDING_DIRECTION_NONE,
            self::SHIFT_START_ROUNDING_DIRECTION_UP,
            self::SHIFT_START_ROUNDING_DIRECTION_DOWN,
            self::SHIFT_START_ROUNDING_DIRECTION_TO_THE_NEAREST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShiftEndRoundingDirectionAllowableValues()
    {
        return [
            self::SHIFT_END_ROUNDING_DIRECTION_NONE,
            self::SHIFT_END_ROUNDING_DIRECTION_UP,
            self::SHIFT_END_ROUNDING_DIRECTION_DOWN,
            self::SHIFT_END_ROUNDING_DIRECTION_TO_THE_NEAREST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakStartRoundingDirectionAllowableValues()
    {
        return [
            self::BREAK_START_ROUNDING_DIRECTION_NONE,
            self::BREAK_START_ROUNDING_DIRECTION_UP,
            self::BREAK_START_ROUNDING_DIRECTION_DOWN,
            self::BREAK_START_ROUNDING_DIRECTION_TO_THE_NEAREST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakEndRoundingDirectionAllowableValues()
    {
        return [
            self::BREAK_END_ROUNDING_DIRECTION_NONE,
            self::BREAK_END_ROUNDING_DIRECTION_UP,
            self::BREAK_END_ROUNDING_DIRECTION_DOWN,
            self::BREAK_END_ROUNDING_DIRECTION_TO_THE_NEAREST,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['shift_start_rounding_direction'] = isset($data['shift_start_rounding_direction']) ? $data['shift_start_rounding_direction'] : null;
        $this->container['shift_start_rounding_interval'] = isset($data['shift_start_rounding_interval']) ? $data['shift_start_rounding_interval'] : null;
        $this->container['shift_end_rounding_direction'] = isset($data['shift_end_rounding_direction']) ? $data['shift_end_rounding_direction'] : null;
        $this->container['shift_end_rounding_interval'] = isset($data['shift_end_rounding_interval']) ? $data['shift_end_rounding_interval'] : null;
        $this->container['break_start_rounding_direction'] = isset($data['break_start_rounding_direction']) ? $data['break_start_rounding_direction'] : null;
        $this->container['break_start_rounding_interval'] = isset($data['break_start_rounding_interval']) ? $data['break_start_rounding_interval'] : null;
        $this->container['break_end_rounding_direction'] = isset($data['break_end_rounding_direction']) ? $data['break_end_rounding_direction'] : null;
        $this->container['break_end_rounding_interval'] = isset($data['break_end_rounding_interval']) ? $data['break_end_rounding_interval'] : null;
        $this->container['round_up_to_shift_start_time_rounding_interval'] = isset($data['round_up_to_shift_start_time_rounding_interval']) ? $data['round_up_to_shift_start_time_rounding_interval'] : null;
        $this->container['round_down_to_shift_start_time_rounding_interval'] = isset($data['round_down_to_shift_start_time_rounding_interval']) ? $data['round_down_to_shift_start_time_rounding_interval'] : null;
        $this->container['round_up_to_shift_end_time_rounding_interval'] = isset($data['round_up_to_shift_end_time_rounding_interval']) ? $data['round_up_to_shift_end_time_rounding_interval'] : null;
        $this->container['round_down_to_shift_end_time_rounding_interval'] = isset($data['round_down_to_shift_end_time_rounding_interval']) ? $data['round_down_to_shift_end_time_rounding_interval'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getShiftStartRoundingDirectionAllowableValues();
        if (!is_null($this->container['shift_start_rounding_direction']) && !in_array($this->container['shift_start_rounding_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shift_start_rounding_direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShiftEndRoundingDirectionAllowableValues();
        if (!is_null($this->container['shift_end_rounding_direction']) && !in_array($this->container['shift_end_rounding_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shift_end_rounding_direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBreakStartRoundingDirectionAllowableValues();
        if (!is_null($this->container['break_start_rounding_direction']) && !in_array($this->container['break_start_rounding_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'break_start_rounding_direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBreakEndRoundingDirectionAllowableValues();
        if (!is_null($this->container['break_end_rounding_direction']) && !in_array($this->container['break_end_rounding_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'break_end_rounding_direction', must be one of '%s'",
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
     * Gets shift_start_rounding_direction
     *
     * @return string
     */
    public function getShiftStartRoundingDirection()
    {
        return $this->container['shift_start_rounding_direction'];
    }

    /**
     * Sets shift_start_rounding_direction
     *
     * @param string $shift_start_rounding_direction 
     *
     * @return $this
     */
    public function setShiftStartRoundingDirection($shift_start_rounding_direction)
    {
        $allowedValues = $this->getShiftStartRoundingDirectionAllowableValues();
        if (!is_null($shift_start_rounding_direction) && !in_array($shift_start_rounding_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shift_start_rounding_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shift_start_rounding_direction'] = $shift_start_rounding_direction;

        return $this;
    }

    /**
     * Gets shift_start_rounding_interval
     *
     * @return int
     */
    public function getShiftStartRoundingInterval()
    {
        return $this->container['shift_start_rounding_interval'];
    }

    /**
     * Sets shift_start_rounding_interval
     *
     * @param int $shift_start_rounding_interval 
     *
     * @return $this
     */
    public function setShiftStartRoundingInterval($shift_start_rounding_interval)
    {
        $this->container['shift_start_rounding_interval'] = $shift_start_rounding_interval;

        return $this;
    }

    /**
     * Gets shift_end_rounding_direction
     *
     * @return string
     */
    public function getShiftEndRoundingDirection()
    {
        return $this->container['shift_end_rounding_direction'];
    }

    /**
     * Sets shift_end_rounding_direction
     *
     * @param string $shift_end_rounding_direction 
     *
     * @return $this
     */
    public function setShiftEndRoundingDirection($shift_end_rounding_direction)
    {
        $allowedValues = $this->getShiftEndRoundingDirectionAllowableValues();
        if (!is_null($shift_end_rounding_direction) && !in_array($shift_end_rounding_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shift_end_rounding_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shift_end_rounding_direction'] = $shift_end_rounding_direction;

        return $this;
    }

    /**
     * Gets shift_end_rounding_interval
     *
     * @return int
     */
    public function getShiftEndRoundingInterval()
    {
        return $this->container['shift_end_rounding_interval'];
    }

    /**
     * Sets shift_end_rounding_interval
     *
     * @param int $shift_end_rounding_interval 
     *
     * @return $this
     */
    public function setShiftEndRoundingInterval($shift_end_rounding_interval)
    {
        $this->container['shift_end_rounding_interval'] = $shift_end_rounding_interval;

        return $this;
    }

    /**
     * Gets break_start_rounding_direction
     *
     * @return string
     */
    public function getBreakStartRoundingDirection()
    {
        return $this->container['break_start_rounding_direction'];
    }

    /**
     * Sets break_start_rounding_direction
     *
     * @param string $break_start_rounding_direction 
     *
     * @return $this
     */
    public function setBreakStartRoundingDirection($break_start_rounding_direction)
    {
        $allowedValues = $this->getBreakStartRoundingDirectionAllowableValues();
        if (!is_null($break_start_rounding_direction) && !in_array($break_start_rounding_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'break_start_rounding_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['break_start_rounding_direction'] = $break_start_rounding_direction;

        return $this;
    }

    /**
     * Gets break_start_rounding_interval
     *
     * @return int
     */
    public function getBreakStartRoundingInterval()
    {
        return $this->container['break_start_rounding_interval'];
    }

    /**
     * Sets break_start_rounding_interval
     *
     * @param int $break_start_rounding_interval 
     *
     * @return $this
     */
    public function setBreakStartRoundingInterval($break_start_rounding_interval)
    {
        $this->container['break_start_rounding_interval'] = $break_start_rounding_interval;

        return $this;
    }

    /**
     * Gets break_end_rounding_direction
     *
     * @return string
     */
    public function getBreakEndRoundingDirection()
    {
        return $this->container['break_end_rounding_direction'];
    }

    /**
     * Sets break_end_rounding_direction
     *
     * @param string $break_end_rounding_direction 
     *
     * @return $this
     */
    public function setBreakEndRoundingDirection($break_end_rounding_direction)
    {
        $allowedValues = $this->getBreakEndRoundingDirectionAllowableValues();
        if (!is_null($break_end_rounding_direction) && !in_array($break_end_rounding_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'break_end_rounding_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['break_end_rounding_direction'] = $break_end_rounding_direction;

        return $this;
    }

    /**
     * Gets break_end_rounding_interval
     *
     * @return int
     */
    public function getBreakEndRoundingInterval()
    {
        return $this->container['break_end_rounding_interval'];
    }

    /**
     * Sets break_end_rounding_interval
     *
     * @param int $break_end_rounding_interval 
     *
     * @return $this
     */
    public function setBreakEndRoundingInterval($break_end_rounding_interval)
    {
        $this->container['break_end_rounding_interval'] = $break_end_rounding_interval;

        return $this;
    }

    /**
     * Gets round_up_to_shift_start_time_rounding_interval
     *
     * @return int
     */
    public function getRoundUpToShiftStartTimeRoundingInterval()
    {
        return $this->container['round_up_to_shift_start_time_rounding_interval'];
    }

    /**
     * Sets round_up_to_shift_start_time_rounding_interval
     *
     * @param int $round_up_to_shift_start_time_rounding_interval 
     *
     * @return $this
     */
    public function setRoundUpToShiftStartTimeRoundingInterval($round_up_to_shift_start_time_rounding_interval)
    {
        $this->container['round_up_to_shift_start_time_rounding_interval'] = $round_up_to_shift_start_time_rounding_interval;

        return $this;
    }

    /**
     * Gets round_down_to_shift_start_time_rounding_interval
     *
     * @return int
     */
    public function getRoundDownToShiftStartTimeRoundingInterval()
    {
        return $this->container['round_down_to_shift_start_time_rounding_interval'];
    }

    /**
     * Sets round_down_to_shift_start_time_rounding_interval
     *
     * @param int $round_down_to_shift_start_time_rounding_interval 
     *
     * @return $this
     */
    public function setRoundDownToShiftStartTimeRoundingInterval($round_down_to_shift_start_time_rounding_interval)
    {
        $this->container['round_down_to_shift_start_time_rounding_interval'] = $round_down_to_shift_start_time_rounding_interval;

        return $this;
    }

    /**
     * Gets round_up_to_shift_end_time_rounding_interval
     *
     * @return int
     */
    public function getRoundUpToShiftEndTimeRoundingInterval()
    {
        return $this->container['round_up_to_shift_end_time_rounding_interval'];
    }

    /**
     * Sets round_up_to_shift_end_time_rounding_interval
     *
     * @param int $round_up_to_shift_end_time_rounding_interval 
     *
     * @return $this
     */
    public function setRoundUpToShiftEndTimeRoundingInterval($round_up_to_shift_end_time_rounding_interval)
    {
        $this->container['round_up_to_shift_end_time_rounding_interval'] = $round_up_to_shift_end_time_rounding_interval;

        return $this;
    }

    /**
     * Gets round_down_to_shift_end_time_rounding_interval
     *
     * @return int
     */
    public function getRoundDownToShiftEndTimeRoundingInterval()
    {
        return $this->container['round_down_to_shift_end_time_rounding_interval'];
    }

    /**
     * Sets round_down_to_shift_end_time_rounding_interval
     *
     * @param int $round_down_to_shift_end_time_rounding_interval 
     *
     * @return $this
     */
    public function setRoundDownToShiftEndTimeRoundingInterval($round_down_to_shift_end_time_rounding_interval)
    {
        $this->container['round_down_to_shift_end_time_rounding_interval'] = $round_down_to_shift_end_time_rounding_interval;

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


