<?php
/**
 * LocationAccessModel
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * LocationAccessModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationAccessModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocationAccessModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter_type' => 'string',
        'location_ids' => 'int[]',
        'permissions' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter_type' => null,
        'location_ids' => 'int32',
        'permissions' => null,
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
        'filter_type' => 'filterType',
        'location_ids' => 'locationIds',
        'permissions' => 'permissions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_type' => 'setFilterType',
        'location_ids' => 'setLocationIds',
        'permissions' => 'setPermissions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_type' => 'getFilterType',
        'location_ids' => 'getLocationIds',
        'permissions' => 'getPermissions',
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

    public const FILTER_TYPE_LOCATION = 'Location';
    public const FILTER_TYPE_LOCATION_OR_PARENTS = 'LocationOrParents';
    public const PERMISSIONS_APPROVE_TIMESHEETS = 'ApproveTimesheets';
    public const PERMISSIONS_APPROVE_LEAVE_REQUESTS = 'ApproveLeaveRequests';
    public const PERMISSIONS_CREATE_TIMESHEETS = 'CreateTimesheets';
    public const PERMISSIONS_CREATE_LEAVE_REQUESTS = 'CreateLeaveRequests';
    public const PERMISSIONS_VIEW_LEAVE_REQUESTS = 'ViewLeaveRequests';
    public const PERMISSIONS_MANAGE_ROSTERS = 'ManageRosters';
    public const PERMISSIONS_VIEW_ROSTERS = 'ViewRosters';
    public const PERMISSIONS_VIEW_SHIFT_COSTS = 'ViewShiftCosts';
    public const PERMISSIONS_VIEW_EXPENSES = 'ViewExpenses';
    public const PERMISSIONS_CREATE_EXPENSES = 'CreateExpenses';
    public const PERMISSIONS_APPROVE_EXPENSES = 'ApproveExpenses';
    public const PERMISSIONS_CREATE_TASKS = 'CreateTasks';
    public const PERMISSIONS_VIEW_EMPLOYEE_DOCUMENTS = 'ViewEmployeeDocuments';
    public const PERMISSIONS_MANAGE_EMPLOYEE_DOCUMENTS = 'ManageEmployeeDocuments';
    public const PERMISSIONS_VIEW_EMPLOYEE_QUALIFICATIONS = 'ViewEmployeeQualifications';
    public const PERMISSIONS_MANAGE_EMPLOYEE_QUALIFICATIONS = 'ManageEmployeeQualifications';
    public const PERMISSIONS_INITIATE_EMPLOYEE_SELF_SETUP = 'InitiateEmployeeSelfSetup';
    public const PERMISSIONS_ADD_EMPLOYEE_FROM_KIOSK = 'AddEmployeeFromKiosk';
    public const PERMISSIONS_VIEW_EMPLOYEE_DETAILS = 'ViewEmployeeDetails';
    public const PERMISSIONS_EDIT_BASIC_EMPLOYEE_DETAILS = 'EditBasicEmployeeDetails';
    public const PERMISSIONS_EDIT_ALL_EMPLOYEE_DETAILS = 'EditAllEmployeeDetails';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterTypeAllowableValues()
    {
        return [
            self::FILTER_TYPE_LOCATION,
            self::FILTER_TYPE_LOCATION_OR_PARENTS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionsAllowableValues()
    {
        return [
            self::PERMISSIONS_APPROVE_TIMESHEETS,
            self::PERMISSIONS_APPROVE_LEAVE_REQUESTS,
            self::PERMISSIONS_CREATE_TIMESHEETS,
            self::PERMISSIONS_CREATE_LEAVE_REQUESTS,
            self::PERMISSIONS_VIEW_LEAVE_REQUESTS,
            self::PERMISSIONS_MANAGE_ROSTERS,
            self::PERMISSIONS_VIEW_ROSTERS,
            self::PERMISSIONS_VIEW_SHIFT_COSTS,
            self::PERMISSIONS_VIEW_EXPENSES,
            self::PERMISSIONS_CREATE_EXPENSES,
            self::PERMISSIONS_APPROVE_EXPENSES,
            self::PERMISSIONS_CREATE_TASKS,
            self::PERMISSIONS_VIEW_EMPLOYEE_DOCUMENTS,
            self::PERMISSIONS_MANAGE_EMPLOYEE_DOCUMENTS,
            self::PERMISSIONS_VIEW_EMPLOYEE_QUALIFICATIONS,
            self::PERMISSIONS_MANAGE_EMPLOYEE_QUALIFICATIONS,
            self::PERMISSIONS_INITIATE_EMPLOYEE_SELF_SETUP,
            self::PERMISSIONS_ADD_EMPLOYEE_FROM_KIOSK,
            self::PERMISSIONS_VIEW_EMPLOYEE_DETAILS,
            self::PERMISSIONS_EDIT_BASIC_EMPLOYEE_DETAILS,
            self::PERMISSIONS_EDIT_ALL_EMPLOYEE_DETAILS,
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
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['location_ids'] = isset($data['location_ids']) ? $data['location_ids'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFilterTypeAllowableValues();
        if (! is_null($this->container['filter_type']) && ! in_array($this->container['filter_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filter_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPermissionsAllowableValues();
        if (! is_null($this->container['permissions']) && ! in_array($this->container['permissions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'permissions', must be one of '%s'",
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
     * Gets filter_type
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     * @param string $filter_type
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $allowedValues = $this->getFilterTypeAllowableValues();
        if (! is_null($filter_type) && ! in_array($filter_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filter_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_type'] = $filter_type;

        return $this;
    }

    /**
     * Gets location_ids
     *
     * @return int[]
     */
    public function getLocationIds()
    {
        return $this->container['location_ids'];
    }

    /**
     * Sets location_ids
     *
     * @param int[] $location_ids
     *
     * @return $this
     */
    public function setLocationIds($location_ids)
    {
        $this->container['location_ids'] = $location_ids;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string $permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $allowedValues = $this->getPermissionsAllowableValues();
        if (! is_null($permissions) && ! in_array($permissions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'permissions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
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
