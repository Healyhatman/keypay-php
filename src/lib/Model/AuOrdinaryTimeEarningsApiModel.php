<?php
/**
 * AuOrdinaryTimeEarningsApiModel
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
 * AuOrdinaryTimeEarningsApiModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuOrdinaryTimeEarningsApiModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuOrdinaryTimeEarningsApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'super' => 'float',
        'super_percentage_of_earnings' => 'float',
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'external_id' => 'string',
        'pay_run' => 'string',
        'pay_category' => 'string',
        'pay_period_starting' => '\DateTime',
        'pay_period_ending' => '\DateTime',
        'earnings' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'super' => 'double',
        'super_percentage_of_earnings' => 'double',
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'external_id' => null,
        'pay_run' => null,
        'pay_category' => null,
        'pay_period_starting' => 'date-time',
        'pay_period_ending' => 'date-time',
        'earnings' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'super' => false,
		'super_percentage_of_earnings' => false,
		'employee_id' => false,
		'first_name' => false,
		'surname' => false,
		'external_id' => false,
		'pay_run' => false,
		'pay_category' => false,
		'pay_period_starting' => false,
		'pay_period_ending' => false,
		'earnings' => false
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
        'super' => 'super',
        'super_percentage_of_earnings' => 'superPercentageOfEarnings',
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'external_id' => 'externalId',
        'pay_run' => 'payRun',
        'pay_category' => 'payCategory',
        'pay_period_starting' => 'payPeriodStarting',
        'pay_period_ending' => 'payPeriodEnding',
        'earnings' => 'earnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super' => 'setSuper',
        'super_percentage_of_earnings' => 'setSuperPercentageOfEarnings',
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'external_id' => 'setExternalId',
        'pay_run' => 'setPayRun',
        'pay_category' => 'setPayCategory',
        'pay_period_starting' => 'setPayPeriodStarting',
        'pay_period_ending' => 'setPayPeriodEnding',
        'earnings' => 'setEarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super' => 'getSuper',
        'super_percentage_of_earnings' => 'getSuperPercentageOfEarnings',
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'external_id' => 'getExternalId',
        'pay_run' => 'getPayRun',
        'pay_category' => 'getPayCategory',
        'pay_period_starting' => 'getPayPeriodStarting',
        'pay_period_ending' => 'getPayPeriodEnding',
        'earnings' => 'getEarnings'
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
        $this->setIfExists('super', $data ?? [], null);
        $this->setIfExists('super_percentage_of_earnings', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('pay_run', $data ?? [], null);
        $this->setIfExists('pay_category', $data ?? [], null);
        $this->setIfExists('pay_period_starting', $data ?? [], null);
        $this->setIfExists('pay_period_ending', $data ?? [], null);
        $this->setIfExists('earnings', $data ?? [], null);
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
     * Gets super
     *
     * @return float|null
     */
    public function getSuper()
    {
        return $this->container['super'];
    }

    /**
     * Sets super
     *
     * @param float|null $super 
     *
     * @return self
     */
    public function setSuper($super)
    {
        if (is_null($super)) {
            throw new \InvalidArgumentException('non-nullable super cannot be null');
        }
        $this->container['super'] = $super;

        return $this;
    }

    /**
     * Gets super_percentage_of_earnings
     *
     * @return float|null
     */
    public function getSuperPercentageOfEarnings()
    {
        return $this->container['super_percentage_of_earnings'];
    }

    /**
     * Sets super_percentage_of_earnings
     *
     * @param float|null $super_percentage_of_earnings 
     *
     * @return self
     */
    public function setSuperPercentageOfEarnings($super_percentage_of_earnings)
    {
        if (is_null($super_percentage_of_earnings)) {
            throw new \InvalidArgumentException('non-nullable super_percentage_of_earnings cannot be null');
        }
        $this->container['super_percentage_of_earnings'] = $super_percentage_of_earnings;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int|null $employee_id 
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname 
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id 
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets pay_run
     *
     * @return string|null
     */
    public function getPayRun()
    {
        return $this->container['pay_run'];
    }

    /**
     * Sets pay_run
     *
     * @param string|null $pay_run 
     *
     * @return self
     */
    public function setPayRun($pay_run)
    {
        if (is_null($pay_run)) {
            throw new \InvalidArgumentException('non-nullable pay_run cannot be null');
        }
        $this->container['pay_run'] = $pay_run;

        return $this;
    }

    /**
     * Gets pay_category
     *
     * @return string|null
     */
    public function getPayCategory()
    {
        return $this->container['pay_category'];
    }

    /**
     * Sets pay_category
     *
     * @param string|null $pay_category 
     *
     * @return self
     */
    public function setPayCategory($pay_category)
    {
        if (is_null($pay_category)) {
            throw new \InvalidArgumentException('non-nullable pay_category cannot be null');
        }
        $this->container['pay_category'] = $pay_category;

        return $this;
    }

    /**
     * Gets pay_period_starting
     *
     * @return \DateTime|null
     */
    public function getPayPeriodStarting()
    {
        return $this->container['pay_period_starting'];
    }

    /**
     * Sets pay_period_starting
     *
     * @param \DateTime|null $pay_period_starting 
     *
     * @return self
     */
    public function setPayPeriodStarting($pay_period_starting)
    {
        if (is_null($pay_period_starting)) {
            throw new \InvalidArgumentException('non-nullable pay_period_starting cannot be null');
        }
        $this->container['pay_period_starting'] = $pay_period_starting;

        return $this;
    }

    /**
     * Gets pay_period_ending
     *
     * @return \DateTime|null
     */
    public function getPayPeriodEnding()
    {
        return $this->container['pay_period_ending'];
    }

    /**
     * Sets pay_period_ending
     *
     * @param \DateTime|null $pay_period_ending 
     *
     * @return self
     */
    public function setPayPeriodEnding($pay_period_ending)
    {
        if (is_null($pay_period_ending)) {
            throw new \InvalidArgumentException('non-nullable pay_period_ending cannot be null');
        }
        $this->container['pay_period_ending'] = $pay_period_ending;

        return $this;
    }

    /**
     * Gets earnings
     *
     * @return float|null
     */
    public function getEarnings()
    {
        return $this->container['earnings'];
    }

    /**
     * Sets earnings
     *
     * @param float|null $earnings 
     *
     * @return self
     */
    public function setEarnings($earnings)
    {
        if (is_null($earnings)) {
            throw new \InvalidArgumentException('non-nullable earnings cannot be null');
        }
        $this->container['earnings'] = $earnings;

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


