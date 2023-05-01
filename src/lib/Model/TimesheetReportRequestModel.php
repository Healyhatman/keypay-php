<?php
/**
 * TimesheetReportRequestModel
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
 * TimesheetReportRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimesheetReportRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimesheetReportRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_id' => 'int',
        'include_costs' => 'bool',
        'statuses' => 'string[]',
        'work_type_id' => 'int',
        'pay_schedule_id' => 'int',
        'include_post_tax_deductions' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'location_id' => 'int',
        'employing_entity_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_id' => 'int32',
        'include_costs' => null,
        'statuses' => null,
        'work_type_id' => 'int32',
        'pay_schedule_id' => 'int32',
        'include_post_tax_deductions' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'location_id' => 'int32',
        'employing_entity_id' => 'int32'
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
        'employee_id' => 'employeeId',
        'include_costs' => 'includeCosts',
        'statuses' => 'statuses',
        'work_type_id' => 'workTypeId',
        'pay_schedule_id' => 'payScheduleId',
        'include_post_tax_deductions' => 'includePostTaxDeductions',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'location_id' => 'locationId',
        'employing_entity_id' => 'employingEntityId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'include_costs' => 'setIncludeCosts',
        'statuses' => 'setStatuses',
        'work_type_id' => 'setWorkTypeId',
        'pay_schedule_id' => 'setPayScheduleId',
        'include_post_tax_deductions' => 'setIncludePostTaxDeductions',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'location_id' => 'setLocationId',
        'employing_entity_id' => 'setEmployingEntityId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'include_costs' => 'getIncludeCosts',
        'statuses' => 'getStatuses',
        'work_type_id' => 'getWorkTypeId',
        'pay_schedule_id' => 'getPayScheduleId',
        'include_post_tax_deductions' => 'getIncludePostTaxDeductions',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'location_id' => 'getLocationId',
        'employing_entity_id' => 'getEmployingEntityId'
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

    const STATUSES_MISSING = 'Missing';
    const STATUSES_SUBMITTED = 'Submitted';
    const STATUSES_APPROVED = 'Approved';
    const STATUSES_REJECTED = 'Rejected';
    const STATUSES_PROCESSED = 'Processed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusesAllowableValues()
    {
        return [
            self::STATUSES_MISSING,
            self::STATUSES_SUBMITTED,
            self::STATUSES_APPROVED,
            self::STATUSES_REJECTED,
            self::STATUSES_PROCESSED,
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['include_costs'] = isset($data['include_costs']) ? $data['include_costs'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['pay_schedule_id'] = isset($data['pay_schedule_id']) ? $data['pay_schedule_id'] : null;
        $this->container['include_post_tax_deductions'] = isset($data['include_post_tax_deductions']) ? $data['include_post_tax_deductions'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['employing_entity_id'] = isset($data['employing_entity_id']) ? $data['employing_entity_id'] : null;
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
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id 
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets include_costs
     *
     * @return bool
     */
    public function getIncludeCosts()
    {
        return $this->container['include_costs'];
    }

    /**
     * Sets include_costs
     *
     * @param bool $include_costs 
     *
     * @return $this
     */
    public function setIncludeCosts($include_costs)
    {
        $this->container['include_costs'] = $include_costs;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return string[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[] $statuses 
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $allowedValues = $this->getStatusesAllowableValues();
        if (!is_null($statuses) && array_diff($statuses, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statuses', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int $work_type_id 
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets pay_schedule_id
     *
     * @return int
     */
    public function getPayScheduleId()
    {
        return $this->container['pay_schedule_id'];
    }

    /**
     * Sets pay_schedule_id
     *
     * @param int $pay_schedule_id 
     *
     * @return $this
     */
    public function setPayScheduleId($pay_schedule_id)
    {
        $this->container['pay_schedule_id'] = $pay_schedule_id;

        return $this;
    }

    /**
     * Gets include_post_tax_deductions
     *
     * @return bool
     */
    public function getIncludePostTaxDeductions()
    {
        return $this->container['include_post_tax_deductions'];
    }

    /**
     * Sets include_post_tax_deductions
     *
     * @param bool $include_post_tax_deductions 
     *
     * @return $this
     */
    public function setIncludePostTaxDeductions($include_post_tax_deductions)
    {
        $this->container['include_post_tax_deductions'] = $include_post_tax_deductions;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date 
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date 
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id 
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets employing_entity_id
     *
     * @return int
     */
    public function getEmployingEntityId()
    {
        return $this->container['employing_entity_id'];
    }

    /**
     * Sets employing_entity_id
     *
     * @param int $employing_entity_id 
     *
     * @return $this
     */
    public function setEmployingEntityId($employing_entity_id)
    {
        $this->container['employing_entity_id'] = $employing_entity_id;

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


