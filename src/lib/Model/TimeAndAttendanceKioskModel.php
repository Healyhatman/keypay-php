<?php
/**
 * TimeAndAttendanceKioskModel
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
 * TimeAndAttendanceKioskModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeAndAttendanceKioskModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeAndAttendanceKioskModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'external_id' => 'string',
        'location_id' => 'int',
        'name' => 'string',
        'time_zone' => 'string',
        'allow_higher_classification_selection' => 'bool',
        'branding' => '\Swagger\Client\Model\WhiteLabelBrandingModel',
        'is_location_required' => 'bool',
        'is_work_type_required' => 'bool',
        'restrict_locations_for_employees' => 'bool',
        'allow_employee_shift_selection' => 'bool',
        'clock_on_window_minutes' => 'int',
        'clock_off_window_minutes' => 'int',
        'iana_time_zone' => 'string',
        'is_photo_required' => 'bool',
        'can_add_employees' => 'bool',
        'available_to_all_restricted_users_with_kiosk_access' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'external_id' => null,
        'location_id' => 'int32',
        'name' => null,
        'time_zone' => null,
        'allow_higher_classification_selection' => null,
        'branding' => null,
        'is_location_required' => null,
        'is_work_type_required' => null,
        'restrict_locations_for_employees' => null,
        'allow_employee_shift_selection' => null,
        'clock_on_window_minutes' => 'int32',
        'clock_off_window_minutes' => 'int32',
        'iana_time_zone' => null,
        'is_photo_required' => null,
        'can_add_employees' => null,
        'available_to_all_restricted_users_with_kiosk_access' => null
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
        'external_id' => 'externalId',
        'location_id' => 'locationId',
        'name' => 'name',
        'time_zone' => 'timeZone',
        'allow_higher_classification_selection' => 'allowHigherClassificationSelection',
        'branding' => 'branding',
        'is_location_required' => 'isLocationRequired',
        'is_work_type_required' => 'isWorkTypeRequired',
        'restrict_locations_for_employees' => 'restrictLocationsForEmployees',
        'allow_employee_shift_selection' => 'allowEmployeeShiftSelection',
        'clock_on_window_minutes' => 'clockOnWindowMinutes',
        'clock_off_window_minutes' => 'clockOffWindowMinutes',
        'iana_time_zone' => 'ianaTimeZone',
        'is_photo_required' => 'isPhotoRequired',
        'can_add_employees' => 'canAddEmployees',
        'available_to_all_restricted_users_with_kiosk_access' => 'availableToAllRestrictedUsersWithKioskAccess'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'location_id' => 'setLocationId',
        'name' => 'setName',
        'time_zone' => 'setTimeZone',
        'allow_higher_classification_selection' => 'setAllowHigherClassificationSelection',
        'branding' => 'setBranding',
        'is_location_required' => 'setIsLocationRequired',
        'is_work_type_required' => 'setIsWorkTypeRequired',
        'restrict_locations_for_employees' => 'setRestrictLocationsForEmployees',
        'allow_employee_shift_selection' => 'setAllowEmployeeShiftSelection',
        'clock_on_window_minutes' => 'setClockOnWindowMinutes',
        'clock_off_window_minutes' => 'setClockOffWindowMinutes',
        'iana_time_zone' => 'setIanaTimeZone',
        'is_photo_required' => 'setIsPhotoRequired',
        'can_add_employees' => 'setCanAddEmployees',
        'available_to_all_restricted_users_with_kiosk_access' => 'setAvailableToAllRestrictedUsersWithKioskAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'location_id' => 'getLocationId',
        'name' => 'getName',
        'time_zone' => 'getTimeZone',
        'allow_higher_classification_selection' => 'getAllowHigherClassificationSelection',
        'branding' => 'getBranding',
        'is_location_required' => 'getIsLocationRequired',
        'is_work_type_required' => 'getIsWorkTypeRequired',
        'restrict_locations_for_employees' => 'getRestrictLocationsForEmployees',
        'allow_employee_shift_selection' => 'getAllowEmployeeShiftSelection',
        'clock_on_window_minutes' => 'getClockOnWindowMinutes',
        'clock_off_window_minutes' => 'getClockOffWindowMinutes',
        'iana_time_zone' => 'getIanaTimeZone',
        'is_photo_required' => 'getIsPhotoRequired',
        'can_add_employees' => 'getCanAddEmployees',
        'available_to_all_restricted_users_with_kiosk_access' => 'getAvailableToAllRestrictedUsersWithKioskAccess'
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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['allow_higher_classification_selection'] = isset($data['allow_higher_classification_selection']) ? $data['allow_higher_classification_selection'] : null;
        $this->container['branding'] = isset($data['branding']) ? $data['branding'] : null;
        $this->container['is_location_required'] = isset($data['is_location_required']) ? $data['is_location_required'] : null;
        $this->container['is_work_type_required'] = isset($data['is_work_type_required']) ? $data['is_work_type_required'] : null;
        $this->container['restrict_locations_for_employees'] = isset($data['restrict_locations_for_employees']) ? $data['restrict_locations_for_employees'] : null;
        $this->container['allow_employee_shift_selection'] = isset($data['allow_employee_shift_selection']) ? $data['allow_employee_shift_selection'] : null;
        $this->container['clock_on_window_minutes'] = isset($data['clock_on_window_minutes']) ? $data['clock_on_window_minutes'] : null;
        $this->container['clock_off_window_minutes'] = isset($data['clock_off_window_minutes']) ? $data['clock_off_window_minutes'] : null;
        $this->container['iana_time_zone'] = isset($data['iana_time_zone']) ? $data['iana_time_zone'] : null;
        $this->container['is_photo_required'] = isset($data['is_photo_required']) ? $data['is_photo_required'] : null;
        $this->container['can_add_employees'] = isset($data['can_add_employees']) ? $data['can_add_employees'] : null;
        $this->container['available_to_all_restricted_users_with_kiosk_access'] = isset($data['available_to_all_restricted_users_with_kiosk_access']) ? $data['available_to_all_restricted_users_with_kiosk_access'] : null;
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
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone 
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets allow_higher_classification_selection
     *
     * @return bool
     */
    public function getAllowHigherClassificationSelection()
    {
        return $this->container['allow_higher_classification_selection'];
    }

    /**
     * Sets allow_higher_classification_selection
     *
     * @param bool $allow_higher_classification_selection 
     *
     * @return $this
     */
    public function setAllowHigherClassificationSelection($allow_higher_classification_selection)
    {
        $this->container['allow_higher_classification_selection'] = $allow_higher_classification_selection;

        return $this;
    }

    /**
     * Gets branding
     *
     * @return \Swagger\Client\Model\WhiteLabelBrandingModel
     */
    public function getBranding()
    {
        return $this->container['branding'];
    }

    /**
     * Sets branding
     *
     * @param \Swagger\Client\Model\WhiteLabelBrandingModel $branding 
     *
     * @return $this
     */
    public function setBranding($branding)
    {
        $this->container['branding'] = $branding;

        return $this;
    }

    /**
     * Gets is_location_required
     *
     * @return bool
     */
    public function getIsLocationRequired()
    {
        return $this->container['is_location_required'];
    }

    /**
     * Sets is_location_required
     *
     * @param bool $is_location_required 
     *
     * @return $this
     */
    public function setIsLocationRequired($is_location_required)
    {
        $this->container['is_location_required'] = $is_location_required;

        return $this;
    }

    /**
     * Gets is_work_type_required
     *
     * @return bool
     */
    public function getIsWorkTypeRequired()
    {
        return $this->container['is_work_type_required'];
    }

    /**
     * Sets is_work_type_required
     *
     * @param bool $is_work_type_required 
     *
     * @return $this
     */
    public function setIsWorkTypeRequired($is_work_type_required)
    {
        $this->container['is_work_type_required'] = $is_work_type_required;

        return $this;
    }

    /**
     * Gets restrict_locations_for_employees
     *
     * @return bool
     */
    public function getRestrictLocationsForEmployees()
    {
        return $this->container['restrict_locations_for_employees'];
    }

    /**
     * Sets restrict_locations_for_employees
     *
     * @param bool $restrict_locations_for_employees 
     *
     * @return $this
     */
    public function setRestrictLocationsForEmployees($restrict_locations_for_employees)
    {
        $this->container['restrict_locations_for_employees'] = $restrict_locations_for_employees;

        return $this;
    }

    /**
     * Gets allow_employee_shift_selection
     *
     * @return bool
     */
    public function getAllowEmployeeShiftSelection()
    {
        return $this->container['allow_employee_shift_selection'];
    }

    /**
     * Sets allow_employee_shift_selection
     *
     * @param bool $allow_employee_shift_selection 
     *
     * @return $this
     */
    public function setAllowEmployeeShiftSelection($allow_employee_shift_selection)
    {
        $this->container['allow_employee_shift_selection'] = $allow_employee_shift_selection;

        return $this;
    }

    /**
     * Gets clock_on_window_minutes
     *
     * @return int
     */
    public function getClockOnWindowMinutes()
    {
        return $this->container['clock_on_window_minutes'];
    }

    /**
     * Sets clock_on_window_minutes
     *
     * @param int $clock_on_window_minutes 
     *
     * @return $this
     */
    public function setClockOnWindowMinutes($clock_on_window_minutes)
    {
        $this->container['clock_on_window_minutes'] = $clock_on_window_minutes;

        return $this;
    }

    /**
     * Gets clock_off_window_minutes
     *
     * @return int
     */
    public function getClockOffWindowMinutes()
    {
        return $this->container['clock_off_window_minutes'];
    }

    /**
     * Sets clock_off_window_minutes
     *
     * @param int $clock_off_window_minutes 
     *
     * @return $this
     */
    public function setClockOffWindowMinutes($clock_off_window_minutes)
    {
        $this->container['clock_off_window_minutes'] = $clock_off_window_minutes;

        return $this;
    }

    /**
     * Gets iana_time_zone
     *
     * @return string
     */
    public function getIanaTimeZone()
    {
        return $this->container['iana_time_zone'];
    }

    /**
     * Sets iana_time_zone
     *
     * @param string $iana_time_zone 
     *
     * @return $this
     */
    public function setIanaTimeZone($iana_time_zone)
    {
        $this->container['iana_time_zone'] = $iana_time_zone;

        return $this;
    }

    /**
     * Gets is_photo_required
     *
     * @return bool
     */
    public function getIsPhotoRequired()
    {
        return $this->container['is_photo_required'];
    }

    /**
     * Sets is_photo_required
     *
     * @param bool $is_photo_required 
     *
     * @return $this
     */
    public function setIsPhotoRequired($is_photo_required)
    {
        $this->container['is_photo_required'] = $is_photo_required;

        return $this;
    }

    /**
     * Gets can_add_employees
     *
     * @return bool
     */
    public function getCanAddEmployees()
    {
        return $this->container['can_add_employees'];
    }

    /**
     * Sets can_add_employees
     *
     * @param bool $can_add_employees 
     *
     * @return $this
     */
    public function setCanAddEmployees($can_add_employees)
    {
        $this->container['can_add_employees'] = $can_add_employees;

        return $this;
    }

    /**
     * Gets available_to_all_restricted_users_with_kiosk_access
     *
     * @return bool
     */
    public function getAvailableToAllRestrictedUsersWithKioskAccess()
    {
        return $this->container['available_to_all_restricted_users_with_kiosk_access'];
    }

    /**
     * Sets available_to_all_restricted_users_with_kiosk_access
     *
     * @param bool $available_to_all_restricted_users_with_kiosk_access 
     *
     * @return $this
     */
    public function setAvailableToAllRestrictedUsersWithKioskAccess($available_to_all_restricted_users_with_kiosk_access)
    {
        $this->container['available_to_all_restricted_users_with_kiosk_access'] = $available_to_all_restricted_users_with_kiosk_access;

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


