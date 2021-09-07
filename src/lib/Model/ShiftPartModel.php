<?php
/**
 * ShiftPartModel
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
 * ShiftPartModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftPartModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftPartModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_break' => 'bool',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'effective_duration' => 'string',
        'actual_duration' => 'string',
        'pay_category' => 'string',
        'pay_category_id' => 'int',
        'cost' => 'double',
        'rate_multiplier' => 'double',
        'base_rate' => 'double',
        'calculated_rate' => 'double',
        'display_duration' => 'string',
        'work_type' => '\Swagger\Client\Model\NominalWorkType',
        'classification' => '\Swagger\Client\Model\NominalClassification',
        'leave_category' => '\Swagger\Client\Model\NominalLeaveCategory',
        'location' => '\Swagger\Client\Model\NominalLocation',
        'is_allowance_or_unit_based' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_break' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'effective_duration' => null,
        'actual_duration' => null,
        'pay_category' => null,
        'pay_category_id' => 'int32',
        'cost' => 'double',
        'rate_multiplier' => 'double',
        'base_rate' => 'double',
        'calculated_rate' => 'double',
        'display_duration' => null,
        'work_type' => null,
        'classification' => null,
        'leave_category' => null,
        'location' => null,
        'is_allowance_or_unit_based' => null
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
        'is_break' => 'isBreak',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'effective_duration' => 'effectiveDuration',
        'actual_duration' => 'actualDuration',
        'pay_category' => 'payCategory',
        'pay_category_id' => 'payCategoryId',
        'cost' => 'cost',
        'rate_multiplier' => 'rateMultiplier',
        'base_rate' => 'baseRate',
        'calculated_rate' => 'calculatedRate',
        'display_duration' => 'displayDuration',
        'work_type' => 'workType',
        'classification' => 'classification',
        'leave_category' => 'leaveCategory',
        'location' => 'location',
        'is_allowance_or_unit_based' => 'isAllowanceOrUnitBased'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_break' => 'setIsBreak',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'effective_duration' => 'setEffectiveDuration',
        'actual_duration' => 'setActualDuration',
        'pay_category' => 'setPayCategory',
        'pay_category_id' => 'setPayCategoryId',
        'cost' => 'setCost',
        'rate_multiplier' => 'setRateMultiplier',
        'base_rate' => 'setBaseRate',
        'calculated_rate' => 'setCalculatedRate',
        'display_duration' => 'setDisplayDuration',
        'work_type' => 'setWorkType',
        'classification' => 'setClassification',
        'leave_category' => 'setLeaveCategory',
        'location' => 'setLocation',
        'is_allowance_or_unit_based' => 'setIsAllowanceOrUnitBased'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_break' => 'getIsBreak',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'effective_duration' => 'getEffectiveDuration',
        'actual_duration' => 'getActualDuration',
        'pay_category' => 'getPayCategory',
        'pay_category_id' => 'getPayCategoryId',
        'cost' => 'getCost',
        'rate_multiplier' => 'getRateMultiplier',
        'base_rate' => 'getBaseRate',
        'calculated_rate' => 'getCalculatedRate',
        'display_duration' => 'getDisplayDuration',
        'work_type' => 'getWorkType',
        'classification' => 'getClassification',
        'leave_category' => 'getLeaveCategory',
        'location' => 'getLocation',
        'is_allowance_or_unit_based' => 'getIsAllowanceOrUnitBased'
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
        $this->container['is_break'] = isset($data['is_break']) ? $data['is_break'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['effective_duration'] = isset($data['effective_duration']) ? $data['effective_duration'] : null;
        $this->container['actual_duration'] = isset($data['actual_duration']) ? $data['actual_duration'] : null;
        $this->container['pay_category'] = isset($data['pay_category']) ? $data['pay_category'] : null;
        $this->container['pay_category_id'] = isset($data['pay_category_id']) ? $data['pay_category_id'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['rate_multiplier'] = isset($data['rate_multiplier']) ? $data['rate_multiplier'] : null;
        $this->container['base_rate'] = isset($data['base_rate']) ? $data['base_rate'] : null;
        $this->container['calculated_rate'] = isset($data['calculated_rate']) ? $data['calculated_rate'] : null;
        $this->container['display_duration'] = isset($data['display_duration']) ? $data['display_duration'] : null;
        $this->container['work_type'] = isset($data['work_type']) ? $data['work_type'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['leave_category'] = isset($data['leave_category']) ? $data['leave_category'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['is_allowance_or_unit_based'] = isset($data['is_allowance_or_unit_based']) ? $data['is_allowance_or_unit_based'] : null;
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
     * Gets is_break
     *
     * @return bool
     */
    public function getIsBreak()
    {
        return $this->container['is_break'];
    }

    /**
     * Sets is_break
     *
     * @param bool $is_break 
     *
     * @return $this
     */
    public function setIsBreak($is_break)
    {
        $this->container['is_break'] = $is_break;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time 
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time 
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets effective_duration
     *
     * @return string
     */
    public function getEffectiveDuration()
    {
        return $this->container['effective_duration'];
    }

    /**
     * Sets effective_duration
     *
     * @param string $effective_duration 
     *
     * @return $this
     */
    public function setEffectiveDuration($effective_duration)
    {
        $this->container['effective_duration'] = $effective_duration;

        return $this;
    }

    /**
     * Gets actual_duration
     *
     * @return string
     */
    public function getActualDuration()
    {
        return $this->container['actual_duration'];
    }

    /**
     * Sets actual_duration
     *
     * @param string $actual_duration 
     *
     * @return $this
     */
    public function setActualDuration($actual_duration)
    {
        $this->container['actual_duration'] = $actual_duration;

        return $this;
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
     * Gets base_rate
     *
     * @return double
     */
    public function getBaseRate()
    {
        return $this->container['base_rate'];
    }

    /**
     * Sets base_rate
     *
     * @param double $base_rate 
     *
     * @return $this
     */
    public function setBaseRate($base_rate)
    {
        $this->container['base_rate'] = $base_rate;

        return $this;
    }

    /**
     * Gets calculated_rate
     *
     * @return double
     */
    public function getCalculatedRate()
    {
        return $this->container['calculated_rate'];
    }

    /**
     * Sets calculated_rate
     *
     * @param double $calculated_rate 
     *
     * @return $this
     */
    public function setCalculatedRate($calculated_rate)
    {
        $this->container['calculated_rate'] = $calculated_rate;

        return $this;
    }

    /**
     * Gets display_duration
     *
     * @return string
     */
    public function getDisplayDuration()
    {
        return $this->container['display_duration'];
    }

    /**
     * Sets display_duration
     *
     * @param string $display_duration 
     *
     * @return $this
     */
    public function setDisplayDuration($display_duration)
    {
        $this->container['display_duration'] = $display_duration;

        return $this;
    }

    /**
     * Gets work_type
     *
     * @return \Swagger\Client\Model\NominalWorkType
     */
    public function getWorkType()
    {
        return $this->container['work_type'];
    }

    /**
     * Sets work_type
     *
     * @param \Swagger\Client\Model\NominalWorkType $work_type 
     *
     * @return $this
     */
    public function setWorkType($work_type)
    {
        $this->container['work_type'] = $work_type;

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
     * Gets leave_category
     *
     * @return \Swagger\Client\Model\NominalLeaveCategory
     */
    public function getLeaveCategory()
    {
        return $this->container['leave_category'];
    }

    /**
     * Sets leave_category
     *
     * @param \Swagger\Client\Model\NominalLeaveCategory $leave_category 
     *
     * @return $this
     */
    public function setLeaveCategory($leave_category)
    {
        $this->container['leave_category'] = $leave_category;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\NominalLocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\NominalLocation $location 
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets is_allowance_or_unit_based
     *
     * @return bool
     */
    public function getIsAllowanceOrUnitBased()
    {
        return $this->container['is_allowance_or_unit_based'];
    }

    /**
     * Sets is_allowance_or_unit_based
     *
     * @param bool $is_allowance_or_unit_based 
     *
     * @return $this
     */
    public function setIsAllowanceOrUnitBased($is_allowance_or_unit_based)
    {
        $this->container['is_allowance_or_unit_based'] = $is_allowance_or_unit_based;

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

