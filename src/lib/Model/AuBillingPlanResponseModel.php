<?php
/**
 * AuBillingPlanResponseModel
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
 * AuBillingPlanResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuBillingPlanResponseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuBillingPlanResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'super_inclusion' => 'string',
        'function_pay_conditions' => 'string',
        'function_awards' => 'string',
        'id' => 'int',
        'name' => 'string',
        'type' => 'string',
        'price_per_unit' => 'double',
        'price_per_sms' => 'double',
        'included_employees' => 'int',
        'function_rostering' => 'string',
        'function_time_and_attendance' => 'string',
        'function_employee_onboarding' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'super_inclusion' => null,
        'function_pay_conditions' => null,
        'function_awards' => null,
        'id' => 'int32',
        'name' => null,
        'type' => null,
        'price_per_unit' => 'double',
        'price_per_sms' => 'double',
        'included_employees' => 'int32',
        'function_rostering' => null,
        'function_time_and_attendance' => null,
        'function_employee_onboarding' => null,
        'description' => null
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
        'super_inclusion' => 'superInclusion',
        'function_pay_conditions' => 'functionPayConditions',
        'function_awards' => 'functionAwards',
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'price_per_unit' => 'pricePerUnit',
        'price_per_sms' => 'pricePerSms',
        'included_employees' => 'includedEmployees',
        'function_rostering' => 'functionRostering',
        'function_time_and_attendance' => 'functionTimeAndAttendance',
        'function_employee_onboarding' => 'functionEmployeeOnboarding',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_inclusion' => 'setSuperInclusion',
        'function_pay_conditions' => 'setFunctionPayConditions',
        'function_awards' => 'setFunctionAwards',
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'price_per_unit' => 'setPricePerUnit',
        'price_per_sms' => 'setPricePerSms',
        'included_employees' => 'setIncludedEmployees',
        'function_rostering' => 'setFunctionRostering',
        'function_time_and_attendance' => 'setFunctionTimeAndAttendance',
        'function_employee_onboarding' => 'setFunctionEmployeeOnboarding',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_inclusion' => 'getSuperInclusion',
        'function_pay_conditions' => 'getFunctionPayConditions',
        'function_awards' => 'getFunctionAwards',
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'price_per_unit' => 'getPricePerUnit',
        'price_per_sms' => 'getPricePerSms',
        'included_employees' => 'getIncludedEmployees',
        'function_rostering' => 'getFunctionRostering',
        'function_time_and_attendance' => 'getFunctionTimeAndAttendance',
        'function_employee_onboarding' => 'getFunctionEmployeeOnboarding',
        'description' => 'getDescription'
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

    const SUPER_INCLUSION_NONE = 'None';
    const SUPER_INCLUSION_WEEKLY = 'Weekly';
    const SUPER_INCLUSION_MONTHLY = 'Monthly';
    const SUPER_INCLUSION_QUARTERLY = 'Quarterly';
    const FUNCTION_PAY_CONDITIONS_DISABLED = 'Disabled';
    const FUNCTION_PAY_CONDITIONS_ENABLED = 'Enabled';
    const FUNCTION_PAY_CONDITIONS_UPSELL = 'Upsell';
    const FUNCTION_PAY_CONDITIONS_COMING_SOON = 'ComingSoon';
    const FUNCTION_AWARDS_DISABLED = 'Disabled';
    const FUNCTION_AWARDS_ENABLED = 'Enabled';
    const FUNCTION_AWARDS_UPSELL = 'Upsell';
    const FUNCTION_AWARDS_COMING_SOON = 'ComingSoon';
    const TYPE_PER_EMPLOYEE_PER_MONTH = 'PerEmployeePerMonth';
    const TYPE_LICENSE = 'License';
    const TYPE_PER_HOUR_PAID = 'PerHourPaid';
    const FUNCTION_ROSTERING_DISABLED = 'Disabled';
    const FUNCTION_ROSTERING_ENABLED = 'Enabled';
    const FUNCTION_ROSTERING_UPSELL = 'Upsell';
    const FUNCTION_ROSTERING_COMING_SOON = 'ComingSoon';
    const FUNCTION_TIME_AND_ATTENDANCE_DISABLED = 'Disabled';
    const FUNCTION_TIME_AND_ATTENDANCE_ENABLED = 'Enabled';
    const FUNCTION_TIME_AND_ATTENDANCE_UPSELL = 'Upsell';
    const FUNCTION_TIME_AND_ATTENDANCE_COMING_SOON = 'ComingSoon';
    const FUNCTION_EMPLOYEE_ONBOARDING_DISABLED = 'Disabled';
    const FUNCTION_EMPLOYEE_ONBOARDING_ENABLED = 'Enabled';
    const FUNCTION_EMPLOYEE_ONBOARDING_UPSELL = 'Upsell';
    const FUNCTION_EMPLOYEE_ONBOARDING_COMING_SOON = 'ComingSoon';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSuperInclusionAllowableValues()
    {
        return [
            self::SUPER_INCLUSION_NONE,
            self::SUPER_INCLUSION_WEEKLY,
            self::SUPER_INCLUSION_MONTHLY,
            self::SUPER_INCLUSION_QUARTERLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionPayConditionsAllowableValues()
    {
        return [
            self::FUNCTION_PAY_CONDITIONS_DISABLED,
            self::FUNCTION_PAY_CONDITIONS_ENABLED,
            self::FUNCTION_PAY_CONDITIONS_UPSELL,
            self::FUNCTION_PAY_CONDITIONS_COMING_SOON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionAwardsAllowableValues()
    {
        return [
            self::FUNCTION_AWARDS_DISABLED,
            self::FUNCTION_AWARDS_ENABLED,
            self::FUNCTION_AWARDS_UPSELL,
            self::FUNCTION_AWARDS_COMING_SOON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PER_EMPLOYEE_PER_MONTH,
            self::TYPE_LICENSE,
            self::TYPE_PER_HOUR_PAID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionRosteringAllowableValues()
    {
        return [
            self::FUNCTION_ROSTERING_DISABLED,
            self::FUNCTION_ROSTERING_ENABLED,
            self::FUNCTION_ROSTERING_UPSELL,
            self::FUNCTION_ROSTERING_COMING_SOON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionTimeAndAttendanceAllowableValues()
    {
        return [
            self::FUNCTION_TIME_AND_ATTENDANCE_DISABLED,
            self::FUNCTION_TIME_AND_ATTENDANCE_ENABLED,
            self::FUNCTION_TIME_AND_ATTENDANCE_UPSELL,
            self::FUNCTION_TIME_AND_ATTENDANCE_COMING_SOON,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionEmployeeOnboardingAllowableValues()
    {
        return [
            self::FUNCTION_EMPLOYEE_ONBOARDING_DISABLED,
            self::FUNCTION_EMPLOYEE_ONBOARDING_ENABLED,
            self::FUNCTION_EMPLOYEE_ONBOARDING_UPSELL,
            self::FUNCTION_EMPLOYEE_ONBOARDING_COMING_SOON,
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
        $this->container['super_inclusion'] = isset($data['super_inclusion']) ? $data['super_inclusion'] : null;
        $this->container['function_pay_conditions'] = isset($data['function_pay_conditions']) ? $data['function_pay_conditions'] : null;
        $this->container['function_awards'] = isset($data['function_awards']) ? $data['function_awards'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['price_per_unit'] = isset($data['price_per_unit']) ? $data['price_per_unit'] : null;
        $this->container['price_per_sms'] = isset($data['price_per_sms']) ? $data['price_per_sms'] : null;
        $this->container['included_employees'] = isset($data['included_employees']) ? $data['included_employees'] : null;
        $this->container['function_rostering'] = isset($data['function_rostering']) ? $data['function_rostering'] : null;
        $this->container['function_time_and_attendance'] = isset($data['function_time_and_attendance']) ? $data['function_time_and_attendance'] : null;
        $this->container['function_employee_onboarding'] = isset($data['function_employee_onboarding']) ? $data['function_employee_onboarding'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSuperInclusionAllowableValues();
        if (!is_null($this->container['super_inclusion']) && !in_array($this->container['super_inclusion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'super_inclusion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFunctionPayConditionsAllowableValues();
        if (!is_null($this->container['function_pay_conditions']) && !in_array($this->container['function_pay_conditions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_pay_conditions', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFunctionAwardsAllowableValues();
        if (!is_null($this->container['function_awards']) && !in_array($this->container['function_awards'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_awards', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFunctionRosteringAllowableValues();
        if (!is_null($this->container['function_rostering']) && !in_array($this->container['function_rostering'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_rostering', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFunctionTimeAndAttendanceAllowableValues();
        if (!is_null($this->container['function_time_and_attendance']) && !in_array($this->container['function_time_and_attendance'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_time_and_attendance', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFunctionEmployeeOnboardingAllowableValues();
        if (!is_null($this->container['function_employee_onboarding']) && !in_array($this->container['function_employee_onboarding'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'function_employee_onboarding', must be one of '%s'",
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
     * Gets super_inclusion
     *
     * @return string
     */
    public function getSuperInclusion()
    {
        return $this->container['super_inclusion'];
    }

    /**
     * Sets super_inclusion
     *
     * @param string $super_inclusion 
     *
     * @return $this
     */
    public function setSuperInclusion($super_inclusion)
    {
        $allowedValues = $this->getSuperInclusionAllowableValues();
        if (!is_null($super_inclusion) && !in_array($super_inclusion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'super_inclusion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['super_inclusion'] = $super_inclusion;

        return $this;
    }

    /**
     * Gets function_pay_conditions
     *
     * @return string
     */
    public function getFunctionPayConditions()
    {
        return $this->container['function_pay_conditions'];
    }

    /**
     * Sets function_pay_conditions
     *
     * @param string $function_pay_conditions 
     *
     * @return $this
     */
    public function setFunctionPayConditions($function_pay_conditions)
    {
        $allowedValues = $this->getFunctionPayConditionsAllowableValues();
        if (!is_null($function_pay_conditions) && !in_array($function_pay_conditions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_pay_conditions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_pay_conditions'] = $function_pay_conditions;

        return $this;
    }

    /**
     * Gets function_awards
     *
     * @return string
     */
    public function getFunctionAwards()
    {
        return $this->container['function_awards'];
    }

    /**
     * Sets function_awards
     *
     * @param string $function_awards 
     *
     * @return $this
     */
    public function setFunctionAwards($function_awards)
    {
        $allowedValues = $this->getFunctionAwardsAllowableValues();
        if (!is_null($function_awards) && !in_array($function_awards, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_awards', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_awards'] = $function_awards;

        return $this;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets price_per_unit
     *
     * @return double
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param double $price_per_unit 
     *
     * @return $this
     */
    public function setPricePerUnit($price_per_unit)
    {
        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }

    /**
     * Gets price_per_sms
     *
     * @return double
     */
    public function getPricePerSms()
    {
        return $this->container['price_per_sms'];
    }

    /**
     * Sets price_per_sms
     *
     * @param double $price_per_sms 
     *
     * @return $this
     */
    public function setPricePerSms($price_per_sms)
    {
        $this->container['price_per_sms'] = $price_per_sms;

        return $this;
    }

    /**
     * Gets included_employees
     *
     * @return int
     */
    public function getIncludedEmployees()
    {
        return $this->container['included_employees'];
    }

    /**
     * Sets included_employees
     *
     * @param int $included_employees 
     *
     * @return $this
     */
    public function setIncludedEmployees($included_employees)
    {
        $this->container['included_employees'] = $included_employees;

        return $this;
    }

    /**
     * Gets function_rostering
     *
     * @return string
     */
    public function getFunctionRostering()
    {
        return $this->container['function_rostering'];
    }

    /**
     * Sets function_rostering
     *
     * @param string $function_rostering 
     *
     * @return $this
     */
    public function setFunctionRostering($function_rostering)
    {
        $allowedValues = $this->getFunctionRosteringAllowableValues();
        if (!is_null($function_rostering) && !in_array($function_rostering, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_rostering', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_rostering'] = $function_rostering;

        return $this;
    }

    /**
     * Gets function_time_and_attendance
     *
     * @return string
     */
    public function getFunctionTimeAndAttendance()
    {
        return $this->container['function_time_and_attendance'];
    }

    /**
     * Sets function_time_and_attendance
     *
     * @param string $function_time_and_attendance 
     *
     * @return $this
     */
    public function setFunctionTimeAndAttendance($function_time_and_attendance)
    {
        $allowedValues = $this->getFunctionTimeAndAttendanceAllowableValues();
        if (!is_null($function_time_and_attendance) && !in_array($function_time_and_attendance, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_time_and_attendance', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_time_and_attendance'] = $function_time_and_attendance;

        return $this;
    }

    /**
     * Gets function_employee_onboarding
     *
     * @return string
     */
    public function getFunctionEmployeeOnboarding()
    {
        return $this->container['function_employee_onboarding'];
    }

    /**
     * Sets function_employee_onboarding
     *
     * @param string $function_employee_onboarding 
     *
     * @return $this
     */
    public function setFunctionEmployeeOnboarding($function_employee_onboarding)
    {
        $allowedValues = $this->getFunctionEmployeeOnboardingAllowableValues();
        if (!is_null($function_employee_onboarding) && !in_array($function_employee_onboarding, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'function_employee_onboarding', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['function_employee_onboarding'] = $function_employee_onboarding;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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

