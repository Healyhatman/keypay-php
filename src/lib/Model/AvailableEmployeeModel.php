<?php
/**
 * AvailableEmployeeModel
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
 * AvailableEmployeeModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableEmployeeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailableEmployeeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'business_id' => 'int',
        'business_name' => 'string',
        'job_title' => 'string',
        'has_profile_image' => 'bool',
        'branding' => '\Swagger\Client\Model\WhiteLabelBrandingModel',
        'default_location_id' => 'int',
        'profile_image_url' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'business_id' => 'int32',
        'business_name' => null,
        'job_title' => null,
        'has_profile_image' => null,
        'branding' => null,
        'default_location_id' => 'int32',
        'profile_image_url' => null,
        'region' => null
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
        'name' => 'name',
        'business_id' => 'businessId',
        'business_name' => 'businessName',
        'job_title' => 'jobTitle',
        'has_profile_image' => 'hasProfileImage',
        'branding' => 'branding',
        'default_location_id' => 'defaultLocationId',
        'profile_image_url' => 'profileImageUrl',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'business_id' => 'setBusinessId',
        'business_name' => 'setBusinessName',
        'job_title' => 'setJobTitle',
        'has_profile_image' => 'setHasProfileImage',
        'branding' => 'setBranding',
        'default_location_id' => 'setDefaultLocationId',
        'profile_image_url' => 'setProfileImageUrl',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'business_id' => 'getBusinessId',
        'business_name' => 'getBusinessName',
        'job_title' => 'getJobTitle',
        'has_profile_image' => 'getHasProfileImage',
        'branding' => 'getBranding',
        'default_location_id' => 'getDefaultLocationId',
        'profile_image_url' => 'getProfileImageUrl',
        'region' => 'getRegion'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['business_id'] = isset($data['business_id']) ? $data['business_id'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['has_profile_image'] = isset($data['has_profile_image']) ? $data['has_profile_image'] : null;
        $this->container['branding'] = isset($data['branding']) ? $data['branding'] : null;
        $this->container['default_location_id'] = isset($data['default_location_id']) ? $data['default_location_id'] : null;
        $this->container['profile_image_url'] = isset($data['profile_image_url']) ? $data['profile_image_url'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
     * Gets business_id
     *
     * @return int
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param int $business_id 
     *
     * @return $this
     */
    public function setBusinessId($business_id)
    {
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name 
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title 
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets has_profile_image
     *
     * @return bool
     */
    public function getHasProfileImage()
    {
        return $this->container['has_profile_image'];
    }

    /**
     * Sets has_profile_image
     *
     * @param bool $has_profile_image 
     *
     * @return $this
     */
    public function setHasProfileImage($has_profile_image)
    {
        $this->container['has_profile_image'] = $has_profile_image;

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
     * Gets default_location_id
     *
     * @return int
     */
    public function getDefaultLocationId()
    {
        return $this->container['default_location_id'];
    }

    /**
     * Sets default_location_id
     *
     * @param int $default_location_id 
     *
     * @return $this
     */
    public function setDefaultLocationId($default_location_id)
    {
        $this->container['default_location_id'] = $default_location_id;

        return $this;
    }

    /**
     * Gets profile_image_url
     *
     * @return string
     */
    public function getProfileImageUrl()
    {
        return $this->container['profile_image_url'];
    }

    /**
     * Sets profile_image_url
     *
     * @param string $profile_image_url 
     *
     * @return $this
     */
    public function setProfileImageUrl($profile_image_url)
    {
        $this->container['profile_image_url'] = $profile_image_url;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region 
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

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

