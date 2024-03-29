<?php
/**
 * AuApiPaySlipEarningsLineModel
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
 * AuApiPaySlipEarningsLineModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuApiPaySlipEarningsLineModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuApiPaySlipEarningsLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'super_contribution' => 'float',
        'pay_category_name' => 'string',
        'units' => 'float',
        'is_fixed' => 'bool',
        'is_tax_exempt' => 'bool',
        'rate' => 'float',
        'notes' => 'string',
        'gross_earnings' => 'float',
        'taxable_earnings' => 'float',
        'location_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'super_contribution' => 'double',
        'pay_category_name' => null,
        'units' => 'double',
        'is_fixed' => null,
        'is_tax_exempt' => null,
        'rate' => 'double',
        'notes' => null,
        'gross_earnings' => 'double',
        'taxable_earnings' => 'double',
        'location_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'super_contribution' => false,
		'pay_category_name' => false,
		'units' => false,
		'is_fixed' => false,
		'is_tax_exempt' => false,
		'rate' => false,
		'notes' => false,
		'gross_earnings' => false,
		'taxable_earnings' => false,
		'location_name' => false
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
        'super_contribution' => 'superContribution',
        'pay_category_name' => 'payCategoryName',
        'units' => 'units',
        'is_fixed' => 'isFixed',
        'is_tax_exempt' => 'isTaxExempt',
        'rate' => 'rate',
        'notes' => 'notes',
        'gross_earnings' => 'grossEarnings',
        'taxable_earnings' => 'taxableEarnings',
        'location_name' => 'locationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_contribution' => 'setSuperContribution',
        'pay_category_name' => 'setPayCategoryName',
        'units' => 'setUnits',
        'is_fixed' => 'setIsFixed',
        'is_tax_exempt' => 'setIsTaxExempt',
        'rate' => 'setRate',
        'notes' => 'setNotes',
        'gross_earnings' => 'setGrossEarnings',
        'taxable_earnings' => 'setTaxableEarnings',
        'location_name' => 'setLocationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_contribution' => 'getSuperContribution',
        'pay_category_name' => 'getPayCategoryName',
        'units' => 'getUnits',
        'is_fixed' => 'getIsFixed',
        'is_tax_exempt' => 'getIsTaxExempt',
        'rate' => 'getRate',
        'notes' => 'getNotes',
        'gross_earnings' => 'getGrossEarnings',
        'taxable_earnings' => 'getTaxableEarnings',
        'location_name' => 'getLocationName'
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
        $this->setIfExists('super_contribution', $data ?? [], null);
        $this->setIfExists('pay_category_name', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('is_fixed', $data ?? [], null);
        $this->setIfExists('is_tax_exempt', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('gross_earnings', $data ?? [], null);
        $this->setIfExists('taxable_earnings', $data ?? [], null);
        $this->setIfExists('location_name', $data ?? [], null);
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
     * Gets super_contribution
     *
     * @return float|null
     */
    public function getSuperContribution()
    {
        return $this->container['super_contribution'];
    }

    /**
     * Sets super_contribution
     *
     * @param float|null $super_contribution 
     *
     * @return self
     */
    public function setSuperContribution($super_contribution)
    {
        if (is_null($super_contribution)) {
            throw new \InvalidArgumentException('non-nullable super_contribution cannot be null');
        }
        $this->container['super_contribution'] = $super_contribution;

        return $this;
    }

    /**
     * Gets pay_category_name
     *
     * @return string|null
     */
    public function getPayCategoryName()
    {
        return $this->container['pay_category_name'];
    }

    /**
     * Sets pay_category_name
     *
     * @param string|null $pay_category_name 
     *
     * @return self
     */
    public function setPayCategoryName($pay_category_name)
    {
        if (is_null($pay_category_name)) {
            throw new \InvalidArgumentException('non-nullable pay_category_name cannot be null');
        }
        $this->container['pay_category_name'] = $pay_category_name;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float|null $units 
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets is_fixed
     *
     * @return bool|null
     */
    public function getIsFixed()
    {
        return $this->container['is_fixed'];
    }

    /**
     * Sets is_fixed
     *
     * @param bool|null $is_fixed 
     *
     * @return self
     */
    public function setIsFixed($is_fixed)
    {
        if (is_null($is_fixed)) {
            throw new \InvalidArgumentException('non-nullable is_fixed cannot be null');
        }
        $this->container['is_fixed'] = $is_fixed;

        return $this;
    }

    /**
     * Gets is_tax_exempt
     *
     * @return bool|null
     */
    public function getIsTaxExempt()
    {
        return $this->container['is_tax_exempt'];
    }

    /**
     * Sets is_tax_exempt
     *
     * @param bool|null $is_tax_exempt 
     *
     * @return self
     */
    public function setIsTaxExempt($is_tax_exempt)
    {
        if (is_null($is_tax_exempt)) {
            throw new \InvalidArgumentException('non-nullable is_tax_exempt cannot be null');
        }
        $this->container['is_tax_exempt'] = $is_tax_exempt;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate 
     *
     * @return self
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes 
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets gross_earnings
     *
     * @return float|null
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param float|null $gross_earnings 
     *
     * @return self
     */
    public function setGrossEarnings($gross_earnings)
    {
        if (is_null($gross_earnings)) {
            throw new \InvalidArgumentException('non-nullable gross_earnings cannot be null');
        }
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets taxable_earnings
     *
     * @return float|null
     */
    public function getTaxableEarnings()
    {
        return $this->container['taxable_earnings'];
    }

    /**
     * Sets taxable_earnings
     *
     * @param float|null $taxable_earnings 
     *
     * @return self
     */
    public function setTaxableEarnings($taxable_earnings)
    {
        if (is_null($taxable_earnings)) {
            throw new \InvalidArgumentException('non-nullable taxable_earnings cannot be null');
        }
        $this->container['taxable_earnings'] = $taxable_earnings;

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


