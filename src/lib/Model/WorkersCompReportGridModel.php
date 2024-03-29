<?php
/**
 * WorkersCompReportGridModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Australia
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: AU
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * WorkersCompReportGridModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkersCompReportGridModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkersCompReportGridModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employing_entity_id' => 'int',
        'employing_entity' => 'string',
        'pay_category_id' => 'int',
        'earnings_reporting' => 'float',
        'super_contribution_reporting' => 'float',
        'location_id' => 'int',
        'location_name' => 'string',
        'reporting_location_id' => 'int',
        'reporting_location_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employing_entity_id' => 'int32',
        'employing_entity' => null,
        'pay_category_id' => 'int32',
        'earnings_reporting' => 'double',
        'super_contribution_reporting' => 'double',
        'location_id' => 'int32',
        'location_name' => null,
        'reporting_location_id' => 'int32',
        'reporting_location_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employing_entity_id' => false,
		'employing_entity' => false,
		'pay_category_id' => false,
		'earnings_reporting' => false,
		'super_contribution_reporting' => false,
		'location_id' => false,
		'location_name' => false,
		'reporting_location_id' => false,
		'reporting_location_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'employing_entity_id' => 'employingEntityId',
        'employing_entity' => 'employingEntity',
        'pay_category_id' => 'payCategoryId',
        'earnings_reporting' => 'earningsReporting',
        'super_contribution_reporting' => 'superContributionReporting',
        'location_id' => 'locationId',
        'location_name' => 'locationName',
        'reporting_location_id' => 'reportingLocationId',
        'reporting_location_name' => 'reportingLocationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employing_entity_id' => 'setEmployingEntityId',
        'employing_entity' => 'setEmployingEntity',
        'pay_category_id' => 'setPayCategoryId',
        'earnings_reporting' => 'setEarningsReporting',
        'super_contribution_reporting' => 'setSuperContributionReporting',
        'location_id' => 'setLocationId',
        'location_name' => 'setLocationName',
        'reporting_location_id' => 'setReportingLocationId',
        'reporting_location_name' => 'setReportingLocationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employing_entity_id' => 'getEmployingEntityId',
        'employing_entity' => 'getEmployingEntity',
        'pay_category_id' => 'getPayCategoryId',
        'earnings_reporting' => 'getEarningsReporting',
        'super_contribution_reporting' => 'getSuperContributionReporting',
        'location_id' => 'getLocationId',
        'location_name' => 'getLocationName',
        'reporting_location_id' => 'getReportingLocationId',
        'reporting_location_name' => 'getReportingLocationName'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('employing_entity_id', $data ?? [], null);
        $this->setIfExists('employing_entity', $data ?? [], null);
        $this->setIfExists('pay_category_id', $data ?? [], null);
        $this->setIfExists('earnings_reporting', $data ?? [], null);
        $this->setIfExists('super_contribution_reporting', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('location_name', $data ?? [], null);
        $this->setIfExists('reporting_location_id', $data ?? [], null);
        $this->setIfExists('reporting_location_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets employing_entity_id
     *
     * @return int|null
     */
    public function getEmployingEntityId()
    {
        return $this->container['employing_entity_id'];
    }

    /**
     * Sets employing_entity_id
     *
     * @param int|null $employing_entity_id 
     *
     * @return self
     */
    public function setEmployingEntityId($employing_entity_id)
    {
        if (is_null($employing_entity_id)) {
            throw new \InvalidArgumentException('non-nullable employing_entity_id cannot be null');
        }
        $this->container['employing_entity_id'] = $employing_entity_id;

        return $this;
    }

    /**
     * Gets employing_entity
     *
     * @return string|null
     */
    public function getEmployingEntity()
    {
        return $this->container['employing_entity'];
    }

    /**
     * Sets employing_entity
     *
     * @param string|null $employing_entity 
     *
     * @return self
     */
    public function setEmployingEntity($employing_entity)
    {
        if (is_null($employing_entity)) {
            throw new \InvalidArgumentException('non-nullable employing_entity cannot be null');
        }
        $this->container['employing_entity'] = $employing_entity;

        return $this;
    }

    /**
     * Gets pay_category_id
     *
     * @return int|null
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int|null $pay_category_id 
     *
     * @return self
     */
    public function setPayCategoryId($pay_category_id)
    {
        if (is_null($pay_category_id)) {
            throw new \InvalidArgumentException('non-nullable pay_category_id cannot be null');
        }
        $this->container['pay_category_id'] = $pay_category_id;

        return $this;
    }

    /**
     * Gets earnings_reporting
     *
     * @return float|null
     */
    public function getEarningsReporting()
    {
        return $this->container['earnings_reporting'];
    }

    /**
     * Sets earnings_reporting
     *
     * @param float|null $earnings_reporting 
     *
     * @return self
     */
    public function setEarningsReporting($earnings_reporting)
    {
        if (is_null($earnings_reporting)) {
            throw new \InvalidArgumentException('non-nullable earnings_reporting cannot be null');
        }
        $this->container['earnings_reporting'] = $earnings_reporting;

        return $this;
    }

    /**
     * Gets super_contribution_reporting
     *
     * @return float|null
     */
    public function getSuperContributionReporting()
    {
        return $this->container['super_contribution_reporting'];
    }

    /**
     * Sets super_contribution_reporting
     *
     * @param float|null $super_contribution_reporting 
     *
     * @return self
     */
    public function setSuperContributionReporting($super_contribution_reporting)
    {
        if (is_null($super_contribution_reporting)) {
            throw new \InvalidArgumentException('non-nullable super_contribution_reporting cannot be null');
        }
        $this->container['super_contribution_reporting'] = $super_contribution_reporting;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id 
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string|null $location_name 
     *
     * @return self
     */
    public function setLocationName($location_name)
    {
        if (is_null($location_name)) {
            throw new \InvalidArgumentException('non-nullable location_name cannot be null');
        }
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets reporting_location_id
     *
     * @return int|null
     */
    public function getReportingLocationId()
    {
        return $this->container['reporting_location_id'];
    }

    /**
     * Sets reporting_location_id
     *
     * @param int|null $reporting_location_id 
     *
     * @return self
     */
    public function setReportingLocationId($reporting_location_id)
    {
        if (is_null($reporting_location_id)) {
            throw new \InvalidArgumentException('non-nullable reporting_location_id cannot be null');
        }
        $this->container['reporting_location_id'] = $reporting_location_id;

        return $this;
    }

    /**
     * Gets reporting_location_name
     *
     * @return string|null
     */
    public function getReportingLocationName()
    {
        return $this->container['reporting_location_name'];
    }

    /**
     * Sets reporting_location_name
     *
     * @param string|null $reporting_location_name 
     *
     * @return self
     */
    public function setReportingLocationName($reporting_location_name)
    {
        if (is_null($reporting_location_name)) {
            throw new \InvalidArgumentException('non-nullable reporting_location_name cannot be null');
        }
        $this->container['reporting_location_name'] = $reporting_location_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


