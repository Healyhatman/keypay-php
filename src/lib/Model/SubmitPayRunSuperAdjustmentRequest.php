<?php
/**
 * SubmitPayRunSuperAdjustmentRequest
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
 * SubmitPayRunSuperAdjustmentRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubmitPayRunSuperAdjustmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubmitPayRunSuperAdjustmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'super_adjustments' => 'map[string,\Swagger\Client\Model\SuperAdjustmentModel[]]',
        'pay_run_id' => 'int',
        'employee_id_type' => 'string',
        'replace_existing' => 'bool',
        'suppress_calculations' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'super_adjustments' => null,
        'pay_run_id' => 'int32',
        'employee_id_type' => null,
        'replace_existing' => null,
        'suppress_calculations' => null
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
        'super_adjustments' => 'superAdjustments',
        'pay_run_id' => 'payRunId',
        'employee_id_type' => 'employeeIdType',
        'replace_existing' => 'replaceExisting',
        'suppress_calculations' => 'suppressCalculations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_adjustments' => 'setSuperAdjustments',
        'pay_run_id' => 'setPayRunId',
        'employee_id_type' => 'setEmployeeIdType',
        'replace_existing' => 'setReplaceExisting',
        'suppress_calculations' => 'setSuppressCalculations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_adjustments' => 'getSuperAdjustments',
        'pay_run_id' => 'getPayRunId',
        'employee_id_type' => 'getEmployeeIdType',
        'replace_existing' => 'getReplaceExisting',
        'suppress_calculations' => 'getSuppressCalculations'
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

    const EMPLOYEE_ID_TYPE_STANDARD = 'Standard';
    const EMPLOYEE_ID_TYPE_EXTERNAL = 'External';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmployeeIdTypeAllowableValues()
    {
        return [
            self::EMPLOYEE_ID_TYPE_STANDARD,
            self::EMPLOYEE_ID_TYPE_EXTERNAL,
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
        $this->container['super_adjustments'] = isset($data['super_adjustments']) ? $data['super_adjustments'] : null;
        $this->container['pay_run_id'] = isset($data['pay_run_id']) ? $data['pay_run_id'] : null;
        $this->container['employee_id_type'] = isset($data['employee_id_type']) ? $data['employee_id_type'] : null;
        $this->container['replace_existing'] = isset($data['replace_existing']) ? $data['replace_existing'] : null;
        $this->container['suppress_calculations'] = isset($data['suppress_calculations']) ? $data['suppress_calculations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (!is_null($this->container['employee_id_type']) && !in_array($this->container['employee_id_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'employee_id_type', must be one of '%s'",
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
     * Gets super_adjustments
     *
     * @return map[string,\Swagger\Client\Model\SuperAdjustmentModel[]]
     */
    public function getSuperAdjustments()
    {
        return $this->container['super_adjustments'];
    }

    /**
     * Sets super_adjustments
     *
     * @param map[string,\Swagger\Client\Model\SuperAdjustmentModel[]] $super_adjustments 
     *
     * @return $this
     */
    public function setSuperAdjustments($super_adjustments)
    {
        $this->container['super_adjustments'] = $super_adjustments;

        return $this;
    }

    /**
     * Gets pay_run_id
     *
     * @return int
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param int $pay_run_id 
     *
     * @return $this
     */
    public function setPayRunId($pay_run_id)
    {
        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }

    /**
     * Gets employee_id_type
     *
     * @return string
     */
    public function getEmployeeIdType()
    {
        return $this->container['employee_id_type'];
    }

    /**
     * Sets employee_id_type
     *
     * @param string $employee_id_type 
     *
     * @return $this
     */
    public function setEmployeeIdType($employee_id_type)
    {
        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (!is_null($employee_id_type) && !in_array($employee_id_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'employee_id_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employee_id_type'] = $employee_id_type;

        return $this;
    }

    /**
     * Gets replace_existing
     *
     * @return bool
     */
    public function getReplaceExisting()
    {
        return $this->container['replace_existing'];
    }

    /**
     * Sets replace_existing
     *
     * @param bool $replace_existing 
     *
     * @return $this
     */
    public function setReplaceExisting($replace_existing)
    {
        $this->container['replace_existing'] = $replace_existing;

        return $this;
    }

    /**
     * Gets suppress_calculations
     *
     * @return bool
     */
    public function getSuppressCalculations()
    {
        return $this->container['suppress_calculations'];
    }

    /**
     * Sets suppress_calculations
     *
     * @param bool $suppress_calculations 
     *
     * @return $this
     */
    public function setSuppressCalculations($suppress_calculations)
    {
        $this->container['suppress_calculations'] = $suppress_calculations;

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


