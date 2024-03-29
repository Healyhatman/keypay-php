<?php
/**
 * SuperFundModel
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
 * SuperFundModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SuperFundModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperFundModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'employee_id' => 'int',
        'name' => 'string',
        'member_number' => 'string',
        'allocated_percentage' => 'float',
        'fixed_amount' => 'float',
        'super_product' => '\OpenAPI\Client\Model\SuperProductModel',
        'allocate_balance' => 'bool',
        'can_be_deleted' => 'bool',
        'is_employer_nominated_fund' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'employee_id' => 'int32',
        'name' => null,
        'member_number' => null,
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'super_product' => null,
        'allocate_balance' => null,
        'can_be_deleted' => null,
        'is_employer_nominated_fund' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'employee_id' => false,
		'name' => false,
		'member_number' => false,
		'allocated_percentage' => false,
		'fixed_amount' => false,
		'super_product' => false,
		'allocate_balance' => false,
		'can_be_deleted' => false,
		'is_employer_nominated_fund' => false
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
        'id' => 'id',
        'employee_id' => 'employeeId',
        'name' => 'name',
        'member_number' => 'memberNumber',
        'allocated_percentage' => 'allocatedPercentage',
        'fixed_amount' => 'fixedAmount',
        'super_product' => 'superProduct',
        'allocate_balance' => 'allocateBalance',
        'can_be_deleted' => 'canBeDeleted',
        'is_employer_nominated_fund' => 'isEmployerNominatedFund'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'name' => 'setName',
        'member_number' => 'setMemberNumber',
        'allocated_percentage' => 'setAllocatedPercentage',
        'fixed_amount' => 'setFixedAmount',
        'super_product' => 'setSuperProduct',
        'allocate_balance' => 'setAllocateBalance',
        'can_be_deleted' => 'setCanBeDeleted',
        'is_employer_nominated_fund' => 'setIsEmployerNominatedFund'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'name' => 'getName',
        'member_number' => 'getMemberNumber',
        'allocated_percentage' => 'getAllocatedPercentage',
        'fixed_amount' => 'getFixedAmount',
        'super_product' => 'getSuperProduct',
        'allocate_balance' => 'getAllocateBalance',
        'can_be_deleted' => 'getCanBeDeleted',
        'is_employer_nominated_fund' => 'getIsEmployerNominatedFund'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('member_number', $data ?? [], null);
        $this->setIfExists('allocated_percentage', $data ?? [], null);
        $this->setIfExists('fixed_amount', $data ?? [], null);
        $this->setIfExists('super_product', $data ?? [], null);
        $this->setIfExists('allocate_balance', $data ?? [], null);
        $this->setIfExists('can_be_deleted', $data ?? [], null);
        $this->setIfExists('is_employer_nominated_fund', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets member_number
     *
     * @return string|null
     */
    public function getMemberNumber()
    {
        return $this->container['member_number'];
    }

    /**
     * Sets member_number
     *
     * @param string|null $member_number 
     *
     * @return self
     */
    public function setMemberNumber($member_number)
    {
        if (is_null($member_number)) {
            throw new \InvalidArgumentException('non-nullable member_number cannot be null');
        }
        $this->container['member_number'] = $member_number;

        return $this;
    }

    /**
     * Gets allocated_percentage
     *
     * @return float|null
     */
    public function getAllocatedPercentage()
    {
        return $this->container['allocated_percentage'];
    }

    /**
     * Sets allocated_percentage
     *
     * @param float|null $allocated_percentage 
     *
     * @return self
     */
    public function setAllocatedPercentage($allocated_percentage)
    {
        if (is_null($allocated_percentage)) {
            throw new \InvalidArgumentException('non-nullable allocated_percentage cannot be null');
        }
        $this->container['allocated_percentage'] = $allocated_percentage;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float|null $fixed_amount 
     *
     * @return self
     */
    public function setFixedAmount($fixed_amount)
    {
        if (is_null($fixed_amount)) {
            throw new \InvalidArgumentException('non-nullable fixed_amount cannot be null');
        }
        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets super_product
     *
     * @return \OpenAPI\Client\Model\SuperProductModel|null
     */
    public function getSuperProduct()
    {
        return $this->container['super_product'];
    }

    /**
     * Sets super_product
     *
     * @param \OpenAPI\Client\Model\SuperProductModel|null $super_product super_product
     *
     * @return self
     */
    public function setSuperProduct($super_product)
    {
        if (is_null($super_product)) {
            throw new \InvalidArgumentException('non-nullable super_product cannot be null');
        }
        $this->container['super_product'] = $super_product;

        return $this;
    }

    /**
     * Gets allocate_balance
     *
     * @return bool|null
     */
    public function getAllocateBalance()
    {
        return $this->container['allocate_balance'];
    }

    /**
     * Sets allocate_balance
     *
     * @param bool|null $allocate_balance 
     *
     * @return self
     */
    public function setAllocateBalance($allocate_balance)
    {
        if (is_null($allocate_balance)) {
            throw new \InvalidArgumentException('non-nullable allocate_balance cannot be null');
        }
        $this->container['allocate_balance'] = $allocate_balance;

        return $this;
    }

    /**
     * Gets can_be_deleted
     *
     * @return bool|null
     */
    public function getCanBeDeleted()
    {
        return $this->container['can_be_deleted'];
    }

    /**
     * Sets can_be_deleted
     *
     * @param bool|null $can_be_deleted 
     *
     * @return self
     */
    public function setCanBeDeleted($can_be_deleted)
    {
        if (is_null($can_be_deleted)) {
            throw new \InvalidArgumentException('non-nullable can_be_deleted cannot be null');
        }
        $this->container['can_be_deleted'] = $can_be_deleted;

        return $this;
    }

    /**
     * Gets is_employer_nominated_fund
     *
     * @return bool|null
     */
    public function getIsEmployerNominatedFund()
    {
        return $this->container['is_employer_nominated_fund'];
    }

    /**
     * Sets is_employer_nominated_fund
     *
     * @param bool|null $is_employer_nominated_fund 
     *
     * @return self
     */
    public function setIsEmployerNominatedFund($is_employer_nominated_fund)
    {
        if (is_null($is_employer_nominated_fund)) {
            throw new \InvalidArgumentException('non-nullable is_employer_nominated_fund cannot be null');
        }
        $this->container['is_employer_nominated_fund'] = $is_employer_nominated_fund;

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


