<?php
/**
 * AuEssWorkTypeModel
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
 * AuEssWorkTypeModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuEssWorkTypeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuEssWorkTypeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_unit_based_work_type' => 'bool',
        'unit_type' => 'string',
        'employment_types' => 'string[]',
        'award_package_id' => 'int',
        'award_package_name' => 'string',
        'id' => 'int',
        'name' => 'string',
        'pay_category_id' => 'int',
        'leave_category_id' => 'int',
        'external_id' => 'string',
        'source' => 'string',
        'accrues_leave' => 'bool',
        'mapping_type' => 'string',
        'short_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_unit_based_work_type' => null,
        'unit_type' => null,
        'employment_types' => null,
        'award_package_id' => 'int32',
        'award_package_name' => null,
        'id' => 'int32',
        'name' => null,
        'pay_category_id' => 'int32',
        'leave_category_id' => 'int32',
        'external_id' => null,
        'source' => null,
        'accrues_leave' => null,
        'mapping_type' => null,
        'short_code' => null
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
        'is_unit_based_work_type' => 'isUnitBasedWorkType',
        'unit_type' => 'unitType',
        'employment_types' => 'employmentTypes',
        'award_package_id' => 'awardPackageId',
        'award_package_name' => 'awardPackageName',
        'id' => 'id',
        'name' => 'name',
        'pay_category_id' => 'payCategoryId',
        'leave_category_id' => 'leaveCategoryId',
        'external_id' => 'externalId',
        'source' => 'source',
        'accrues_leave' => 'accruesLeave',
        'mapping_type' => 'mappingType',
        'short_code' => 'shortCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_unit_based_work_type' => 'setIsUnitBasedWorkType',
        'unit_type' => 'setUnitType',
        'employment_types' => 'setEmploymentTypes',
        'award_package_id' => 'setAwardPackageId',
        'award_package_name' => 'setAwardPackageName',
        'id' => 'setId',
        'name' => 'setName',
        'pay_category_id' => 'setPayCategoryId',
        'leave_category_id' => 'setLeaveCategoryId',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'accrues_leave' => 'setAccruesLeave',
        'mapping_type' => 'setMappingType',
        'short_code' => 'setShortCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_unit_based_work_type' => 'getIsUnitBasedWorkType',
        'unit_type' => 'getUnitType',
        'employment_types' => 'getEmploymentTypes',
        'award_package_id' => 'getAwardPackageId',
        'award_package_name' => 'getAwardPackageName',
        'id' => 'getId',
        'name' => 'getName',
        'pay_category_id' => 'getPayCategoryId',
        'leave_category_id' => 'getLeaveCategoryId',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'accrues_leave' => 'getAccruesLeave',
        'mapping_type' => 'getMappingType',
        'short_code' => 'getShortCode'
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

    const EMPLOYMENT_TYPES_UNKNOWN = 'Unknown';
    const EMPLOYMENT_TYPES_FULL_TIME = 'FullTime';
    const EMPLOYMENT_TYPES_PART_TIME = 'PartTime';
    const EMPLOYMENT_TYPES_LABOUR_HIRE = 'LabourHire';
    const EMPLOYMENT_TYPES_SUPERANNUATION_INCOME_STREAM = 'SuperannuationIncomeStream';
    const EMPLOYMENT_TYPES_CASUAL = 'Casual';
    const MAPPING_TYPE_PAY_CATEGORY = 'PayCategory';
    const MAPPING_TYPE_LEAVE_CATEGORY = 'LeaveCategory';
    const MAPPING_TYPE_PRIMARY_PAY_CATEGORY = 'PrimaryPayCategory';
    const MAPPING_TYPE_SHIFT_CONDITION = 'ShiftCondition';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmploymentTypesAllowableValues()
    {
        return [
            self::EMPLOYMENT_TYPES_UNKNOWN,
            self::EMPLOYMENT_TYPES_FULL_TIME,
            self::EMPLOYMENT_TYPES_PART_TIME,
            self::EMPLOYMENT_TYPES_LABOUR_HIRE,
            self::EMPLOYMENT_TYPES_SUPERANNUATION_INCOME_STREAM,
            self::EMPLOYMENT_TYPES_CASUAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMappingTypeAllowableValues()
    {
        return [
            self::MAPPING_TYPE_PAY_CATEGORY,
            self::MAPPING_TYPE_LEAVE_CATEGORY,
            self::MAPPING_TYPE_PRIMARY_PAY_CATEGORY,
            self::MAPPING_TYPE_SHIFT_CONDITION,
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
        $this->container['is_unit_based_work_type'] = isset($data['is_unit_based_work_type']) ? $data['is_unit_based_work_type'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['employment_types'] = isset($data['employment_types']) ? $data['employment_types'] : null;
        $this->container['award_package_id'] = isset($data['award_package_id']) ? $data['award_package_id'] : null;
        $this->container['award_package_name'] = isset($data['award_package_name']) ? $data['award_package_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pay_category_id'] = isset($data['pay_category_id']) ? $data['pay_category_id'] : null;
        $this->container['leave_category_id'] = isset($data['leave_category_id']) ? $data['leave_category_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['accrues_leave'] = isset($data['accrues_leave']) ? $data['accrues_leave'] : null;
        $this->container['mapping_type'] = isset($data['mapping_type']) ? $data['mapping_type'] : null;
        $this->container['short_code'] = isset($data['short_code']) ? $data['short_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMappingTypeAllowableValues();
        if (!is_null($this->container['mapping_type']) && !in_array($this->container['mapping_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mapping_type', must be one of '%s'",
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
     * Gets is_unit_based_work_type
     *
     * @return bool
     */
    public function getIsUnitBasedWorkType()
    {
        return $this->container['is_unit_based_work_type'];
    }

    /**
     * Sets is_unit_based_work_type
     *
     * @param bool $is_unit_based_work_type 
     *
     * @return $this
     */
    public function setIsUnitBasedWorkType($is_unit_based_work_type)
    {
        $this->container['is_unit_based_work_type'] = $is_unit_based_work_type;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string $unit_type 
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets employment_types
     *
     * @return string[]
     */
    public function getEmploymentTypes()
    {
        return $this->container['employment_types'];
    }

    /**
     * Sets employment_types
     *
     * @param string[] $employment_types 
     *
     * @return $this
     */
    public function setEmploymentTypes($employment_types)
    {
        $allowedValues = $this->getEmploymentTypesAllowableValues();
        if (!is_null($employment_types) && array_diff($employment_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'employment_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employment_types'] = $employment_types;

        return $this;
    }

    /**
     * Gets award_package_id
     *
     * @return int
     */
    public function getAwardPackageId()
    {
        return $this->container['award_package_id'];
    }

    /**
     * Sets award_package_id
     *
     * @param int $award_package_id 
     *
     * @return $this
     */
    public function setAwardPackageId($award_package_id)
    {
        $this->container['award_package_id'] = $award_package_id;

        return $this;
    }

    /**
     * Gets award_package_name
     *
     * @return string
     */
    public function getAwardPackageName()
    {
        return $this->container['award_package_name'];
    }

    /**
     * Sets award_package_name
     *
     * @param string $award_package_name 
     *
     * @return $this
     */
    public function setAwardPackageName($award_package_name)
    {
        $this->container['award_package_name'] = $award_package_name;

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
     * Gets leave_category_id
     *
     * @return int
     */
    public function getLeaveCategoryId()
    {
        return $this->container['leave_category_id'];
    }

    /**
     * Sets leave_category_id
     *
     * @param int $leave_category_id 
     *
     * @return $this
     */
    public function setLeaveCategoryId($leave_category_id)
    {
        $this->container['leave_category_id'] = $leave_category_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id 
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source 
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets accrues_leave
     *
     * @return bool
     */
    public function getAccruesLeave()
    {
        return $this->container['accrues_leave'];
    }

    /**
     * Sets accrues_leave
     *
     * @param bool $accrues_leave 
     *
     * @return $this
     */
    public function setAccruesLeave($accrues_leave)
    {
        $this->container['accrues_leave'] = $accrues_leave;

        return $this;
    }

    /**
     * Gets mapping_type
     *
     * @return string
     */
    public function getMappingType()
    {
        return $this->container['mapping_type'];
    }

    /**
     * Sets mapping_type
     *
     * @param string $mapping_type 
     *
     * @return $this
     */
    public function setMappingType($mapping_type)
    {
        $allowedValues = $this->getMappingTypeAllowableValues();
        if (!is_null($mapping_type) && !in_array($mapping_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mapping_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mapping_type'] = $mapping_type;

        return $this;
    }

    /**
     * Gets short_code
     *
     * @return string
     */
    public function getShortCode()
    {
        return $this->container['short_code'];
    }

    /**
     * Sets short_code
     *
     * @param string $short_code 
     *
     * @return $this
     */
    public function setShortCode($short_code)
    {
        $this->container['short_code'] = $short_code;

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


