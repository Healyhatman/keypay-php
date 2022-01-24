<?php
/**
 * ShiftBreakModel
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
 * ShiftBreakModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftBreakModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftBreakModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start' => '\Swagger\Client\Model\StartBreakModel',
        'end' => '\Swagger\Client\Model\EndBreakModel',
        'employee_id' => 'int',
        'latitude' => 'double',
        'longitude' => 'double',
        'kiosk_id' => 'int',
        'ip_address' => 'string',
        'image' => 'string',
        'is_admin_initiated' => 'bool',
        'recorded_time_utc' => '\DateTime',
        'utc_offset' => 'string',
        'note_visibility' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start' => null,
        'end' => null,
        'employee_id' => 'int32',
        'latitude' => 'double',
        'longitude' => 'double',
        'kiosk_id' => 'int32',
        'ip_address' => null,
        'image' => 'byte',
        'is_admin_initiated' => null,
        'recorded_time_utc' => 'date-time',
        'utc_offset' => null,
        'note_visibility' => null
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
        'start' => 'start',
        'end' => 'end',
        'employee_id' => 'employeeId',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'kiosk_id' => 'kioskId',
        'ip_address' => 'ipAddress',
        'image' => 'image',
        'is_admin_initiated' => 'isAdminInitiated',
        'recorded_time_utc' => 'recordedTimeUtc',
        'utc_offset' => 'utcOffset',
        'note_visibility' => 'noteVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'end' => 'setEnd',
        'employee_id' => 'setEmployeeId',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'kiosk_id' => 'setKioskId',
        'ip_address' => 'setIpAddress',
        'image' => 'setImage',
        'is_admin_initiated' => 'setIsAdminInitiated',
        'recorded_time_utc' => 'setRecordedTimeUtc',
        'utc_offset' => 'setUtcOffset',
        'note_visibility' => 'setNoteVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'end' => 'getEnd',
        'employee_id' => 'getEmployeeId',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'kiosk_id' => 'getKioskId',
        'ip_address' => 'getIpAddress',
        'image' => 'getImage',
        'is_admin_initiated' => 'getIsAdminInitiated',
        'recorded_time_utc' => 'getRecordedTimeUtc',
        'utc_offset' => 'getUtcOffset',
        'note_visibility' => 'getNoteVisibility'
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

    const NOTE_VISIBILITY_HIDDEN = 'Hidden';
    const NOTE_VISIBILITY_VISIBLE = 'Visible';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoteVisibilityAllowableValues()
    {
        return [
            self::NOTE_VISIBILITY_HIDDEN,
            self::NOTE_VISIBILITY_VISIBLE,
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['kiosk_id'] = isset($data['kiosk_id']) ? $data['kiosk_id'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['is_admin_initiated'] = isset($data['is_admin_initiated']) ? $data['is_admin_initiated'] : null;
        $this->container['recorded_time_utc'] = isset($data['recorded_time_utc']) ? $data['recorded_time_utc'] : null;
        $this->container['utc_offset'] = isset($data['utc_offset']) ? $data['utc_offset'] : null;
        $this->container['note_visibility'] = isset($data['note_visibility']) ? $data['note_visibility'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['image']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['image'])) {
            $invalidProperties[] = "invalid value for 'image', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        $allowedValues = $this->getNoteVisibilityAllowableValues();
        if (!is_null($this->container['note_visibility']) && !in_array($this->container['note_visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'note_visibility', must be one of '%s'",
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
     * Gets start
     *
     * @return \Swagger\Client\Model\StartBreakModel
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \Swagger\Client\Model\StartBreakModel $start 
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
     * @return \Swagger\Client\Model\EndBreakModel
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \Swagger\Client\Model\EndBreakModel $end 
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
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
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude 
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude 
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets kiosk_id
     *
     * @return int
     */
    public function getKioskId()
    {
        return $this->container['kiosk_id'];
    }

    /**
     * Sets kiosk_id
     *
     * @param int $kiosk_id 
     *
     * @return $this
     */
    public function setKioskId($kiosk_id)
    {
        $this->container['kiosk_id'] = $kiosk_id;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address 
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image 
     *
     * @return $this
     */
    public function setImage($image)
    {

        if (!is_null($image) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $image))) {
            throw new \InvalidArgumentException("invalid value for $image when calling ShiftBreakModel., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets is_admin_initiated
     *
     * @return bool
     */
    public function getIsAdminInitiated()
    {
        return $this->container['is_admin_initiated'];
    }

    /**
     * Sets is_admin_initiated
     *
     * @param bool $is_admin_initiated 
     *
     * @return $this
     */
    public function setIsAdminInitiated($is_admin_initiated)
    {
        $this->container['is_admin_initiated'] = $is_admin_initiated;

        return $this;
    }

    /**
     * Gets recorded_time_utc
     *
     * @return \DateTime
     */
    public function getRecordedTimeUtc()
    {
        return $this->container['recorded_time_utc'];
    }

    /**
     * Sets recorded_time_utc
     *
     * @param \DateTime $recorded_time_utc 
     *
     * @return $this
     */
    public function setRecordedTimeUtc($recorded_time_utc)
    {
        $this->container['recorded_time_utc'] = $recorded_time_utc;

        return $this;
    }

    /**
     * Gets utc_offset
     *
     * @return string
     */
    public function getUtcOffset()
    {
        return $this->container['utc_offset'];
    }

    /**
     * Sets utc_offset
     *
     * @param string $utc_offset 
     *
     * @return $this
     */
    public function setUtcOffset($utc_offset)
    {
        $this->container['utc_offset'] = $utc_offset;

        return $this;
    }

    /**
     * Gets note_visibility
     *
     * @return string
     */
    public function getNoteVisibility()
    {
        return $this->container['note_visibility'];
    }

    /**
     * Sets note_visibility
     *
     * @param string $note_visibility 
     *
     * @return $this
     */
    public function setNoteVisibility($note_visibility)
    {
        $allowedValues = $this->getNoteVisibilityAllowableValues();
        if (!is_null($note_visibility) && !in_array($note_visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'note_visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['note_visibility'] = $note_visibility;

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


