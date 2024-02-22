<?php
/**
 * LeaveEntitlementModel
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
 * LeaveEntitlementModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LeaveEntitlementModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveEntitlementModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'carry_over_type' => 'string',
        'carry_over_amount' => 'float',
        'is_pro_rata' => 'bool',
        'leave_balance_type' => 'string',
        'leave_entitlement_tiers' => '\OpenAPI\Client\Model\LeaveEntitlementTierModel[]',
        'forfeiture_type' => 'string',
        'forfeiture_amount' => 'float',
        'forfeiture_months_start_after' => 'int',
        'standard_allowance_unit_type_amount' => 'float',
        'standard_allowance_unit_type' => 'string'
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
        'carry_over_type' => null,
        'carry_over_amount' => 'double',
        'is_pro_rata' => null,
        'leave_balance_type' => null,
        'leave_entitlement_tiers' => null,
        'forfeiture_type' => null,
        'forfeiture_amount' => 'double',
        'forfeiture_months_start_after' => 'int32',
        'standard_allowance_unit_type_amount' => 'double',
        'standard_allowance_unit_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'carry_over_type' => false,
		'carry_over_amount' => false,
		'is_pro_rata' => false,
		'leave_balance_type' => false,
		'leave_entitlement_tiers' => false,
		'forfeiture_type' => false,
		'forfeiture_amount' => false,
		'forfeiture_months_start_after' => false,
		'standard_allowance_unit_type_amount' => false,
		'standard_allowance_unit_type' => false
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
        'carry_over_type' => 'carryOverType',
        'carry_over_amount' => 'carryOverAmount',
        'is_pro_rata' => 'isProRata',
        'leave_balance_type' => 'leaveBalanceType',
        'leave_entitlement_tiers' => 'leaveEntitlementTiers',
        'forfeiture_type' => 'forfeitureType',
        'forfeiture_amount' => 'forfeitureAmount',
        'forfeiture_months_start_after' => 'forfeitureMonthsStartAfter',
        'standard_allowance_unit_type_amount' => 'standardAllowanceUnitTypeAmount',
        'standard_allowance_unit_type' => 'standardAllowanceUnitType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'carry_over_type' => 'setCarryOverType',
        'carry_over_amount' => 'setCarryOverAmount',
        'is_pro_rata' => 'setIsProRata',
        'leave_balance_type' => 'setLeaveBalanceType',
        'leave_entitlement_tiers' => 'setLeaveEntitlementTiers',
        'forfeiture_type' => 'setForfeitureType',
        'forfeiture_amount' => 'setForfeitureAmount',
        'forfeiture_months_start_after' => 'setForfeitureMonthsStartAfter',
        'standard_allowance_unit_type_amount' => 'setStandardAllowanceUnitTypeAmount',
        'standard_allowance_unit_type' => 'setStandardAllowanceUnitType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'carry_over_type' => 'getCarryOverType',
        'carry_over_amount' => 'getCarryOverAmount',
        'is_pro_rata' => 'getIsProRata',
        'leave_balance_type' => 'getLeaveBalanceType',
        'leave_entitlement_tiers' => 'getLeaveEntitlementTiers',
        'forfeiture_type' => 'getForfeitureType',
        'forfeiture_amount' => 'getForfeitureAmount',
        'forfeiture_months_start_after' => 'getForfeitureMonthsStartAfter',
        'standard_allowance_unit_type_amount' => 'getStandardAllowanceUnitTypeAmount',
        'standard_allowance_unit_type' => 'getStandardAllowanceUnitType'
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

    public const CARRY_OVER_TYPE_NONE = 'None';
    public const CARRY_OVER_TYPE_UNLIMITED = 'Unlimited';
    public const CARRY_OVER_TYPE_UP_TO = 'UpTo';
    public const LEAVE_BALANCE_TYPE_NONE = 'None';
    public const LEAVE_BALANCE_TYPE_FULL = 'Full';
    public const LEAVE_BALANCE_TYPE_PRO_RATA = 'ProRata';
    public const FORFEITURE_TYPE_NONE = 'None';
    public const FORFEITURE_TYPE_UNLIMITED = 'Unlimited';
    public const FORFEITURE_TYPE_UP_TO = 'UpTo';
    public const STANDARD_ALLOWANCE_UNIT_TYPE_MONTHLY = 'Monthly';
    public const STANDARD_ALLOWANCE_UNIT_TYPE_YEARLY = 'Yearly';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarryOverTypeAllowableValues()
    {
        return [
            self::CARRY_OVER_TYPE_NONE,
            self::CARRY_OVER_TYPE_UNLIMITED,
            self::CARRY_OVER_TYPE_UP_TO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveBalanceTypeAllowableValues()
    {
        return [
            self::LEAVE_BALANCE_TYPE_NONE,
            self::LEAVE_BALANCE_TYPE_FULL,
            self::LEAVE_BALANCE_TYPE_PRO_RATA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getForfeitureTypeAllowableValues()
    {
        return [
            self::FORFEITURE_TYPE_NONE,
            self::FORFEITURE_TYPE_UNLIMITED,
            self::FORFEITURE_TYPE_UP_TO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandardAllowanceUnitTypeAllowableValues()
    {
        return [
            self::STANDARD_ALLOWANCE_UNIT_TYPE_MONTHLY,
            self::STANDARD_ALLOWANCE_UNIT_TYPE_YEARLY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('carry_over_type', $data ?? [], null);
        $this->setIfExists('carry_over_amount', $data ?? [], null);
        $this->setIfExists('is_pro_rata', $data ?? [], null);
        $this->setIfExists('leave_balance_type', $data ?? [], null);
        $this->setIfExists('leave_entitlement_tiers', $data ?? [], null);
        $this->setIfExists('forfeiture_type', $data ?? [], null);
        $this->setIfExists('forfeiture_amount', $data ?? [], null);
        $this->setIfExists('forfeiture_months_start_after', $data ?? [], null);
        $this->setIfExists('standard_allowance_unit_type_amount', $data ?? [], null);
        $this->setIfExists('standard_allowance_unit_type', $data ?? [], null);
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

        $allowedValues = $this->getCarryOverTypeAllowableValues();
        if (!is_null($this->container['carry_over_type']) && !in_array($this->container['carry_over_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carry_over_type', must be one of '%s'",
                $this->container['carry_over_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveBalanceTypeAllowableValues();
        if (!is_null($this->container['leave_balance_type']) && !in_array($this->container['leave_balance_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'leave_balance_type', must be one of '%s'",
                $this->container['leave_balance_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getForfeitureTypeAllowableValues();
        if (!is_null($this->container['forfeiture_type']) && !in_array($this->container['forfeiture_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'forfeiture_type', must be one of '%s'",
                $this->container['forfeiture_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStandardAllowanceUnitTypeAllowableValues();
        if (!is_null($this->container['standard_allowance_unit_type']) && !in_array($this->container['standard_allowance_unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'standard_allowance_unit_type', must be one of '%s'",
                $this->container['standard_allowance_unit_type'],
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
     * Gets carry_over_type
     *
     * @return string|null
     */
    public function getCarryOverType()
    {
        return $this->container['carry_over_type'];
    }

    /**
     * Sets carry_over_type
     *
     * @param string|null $carry_over_type 
     *
     * @return self
     */
    public function setCarryOverType($carry_over_type)
    {
        if (is_null($carry_over_type)) {
            throw new \InvalidArgumentException('non-nullable carry_over_type cannot be null');
        }
        $allowedValues = $this->getCarryOverTypeAllowableValues();
        if (!in_array($carry_over_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carry_over_type', must be one of '%s'",
                    $carry_over_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carry_over_type'] = $carry_over_type;

        return $this;
    }

    /**
     * Gets carry_over_amount
     *
     * @return float|null
     */
    public function getCarryOverAmount()
    {
        return $this->container['carry_over_amount'];
    }

    /**
     * Sets carry_over_amount
     *
     * @param float|null $carry_over_amount 
     *
     * @return self
     */
    public function setCarryOverAmount($carry_over_amount)
    {
        if (is_null($carry_over_amount)) {
            throw new \InvalidArgumentException('non-nullable carry_over_amount cannot be null');
        }
        $this->container['carry_over_amount'] = $carry_over_amount;

        return $this;
    }

    /**
     * Gets is_pro_rata
     *
     * @return bool|null
     */
    public function getIsProRata()
    {
        return $this->container['is_pro_rata'];
    }

    /**
     * Sets is_pro_rata
     *
     * @param bool|null $is_pro_rata 
     *
     * @return self
     */
    public function setIsProRata($is_pro_rata)
    {
        if (is_null($is_pro_rata)) {
            throw new \InvalidArgumentException('non-nullable is_pro_rata cannot be null');
        }
        $this->container['is_pro_rata'] = $is_pro_rata;

        return $this;
    }

    /**
     * Gets leave_balance_type
     *
     * @return string|null
     */
    public function getLeaveBalanceType()
    {
        return $this->container['leave_balance_type'];
    }

    /**
     * Sets leave_balance_type
     *
     * @param string|null $leave_balance_type 
     *
     * @return self
     */
    public function setLeaveBalanceType($leave_balance_type)
    {
        if (is_null($leave_balance_type)) {
            throw new \InvalidArgumentException('non-nullable leave_balance_type cannot be null');
        }
        $allowedValues = $this->getLeaveBalanceTypeAllowableValues();
        if (!in_array($leave_balance_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'leave_balance_type', must be one of '%s'",
                    $leave_balance_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_balance_type'] = $leave_balance_type;

        return $this;
    }

    /**
     * Gets leave_entitlement_tiers
     *
     * @return \OpenAPI\Client\Model\LeaveEntitlementTierModel[]|null
     */
    public function getLeaveEntitlementTiers()
    {
        return $this->container['leave_entitlement_tiers'];
    }

    /**
     * Sets leave_entitlement_tiers
     *
     * @param \OpenAPI\Client\Model\LeaveEntitlementTierModel[]|null $leave_entitlement_tiers 
     *
     * @return self
     */
    public function setLeaveEntitlementTiers($leave_entitlement_tiers)
    {
        if (is_null($leave_entitlement_tiers)) {
            throw new \InvalidArgumentException('non-nullable leave_entitlement_tiers cannot be null');
        }
        $this->container['leave_entitlement_tiers'] = $leave_entitlement_tiers;

        return $this;
    }

    /**
     * Gets forfeiture_type
     *
     * @return string|null
     */
    public function getForfeitureType()
    {
        return $this->container['forfeiture_type'];
    }

    /**
     * Sets forfeiture_type
     *
     * @param string|null $forfeiture_type 
     *
     * @return self
     */
    public function setForfeitureType($forfeiture_type)
    {
        if (is_null($forfeiture_type)) {
            throw new \InvalidArgumentException('non-nullable forfeiture_type cannot be null');
        }
        $allowedValues = $this->getForfeitureTypeAllowableValues();
        if (!in_array($forfeiture_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'forfeiture_type', must be one of '%s'",
                    $forfeiture_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['forfeiture_type'] = $forfeiture_type;

        return $this;
    }

    /**
     * Gets forfeiture_amount
     *
     * @return float|null
     */
    public function getForfeitureAmount()
    {
        return $this->container['forfeiture_amount'];
    }

    /**
     * Sets forfeiture_amount
     *
     * @param float|null $forfeiture_amount 
     *
     * @return self
     */
    public function setForfeitureAmount($forfeiture_amount)
    {
        if (is_null($forfeiture_amount)) {
            throw new \InvalidArgumentException('non-nullable forfeiture_amount cannot be null');
        }
        $this->container['forfeiture_amount'] = $forfeiture_amount;

        return $this;
    }

    /**
     * Gets forfeiture_months_start_after
     *
     * @return int|null
     */
    public function getForfeitureMonthsStartAfter()
    {
        return $this->container['forfeiture_months_start_after'];
    }

    /**
     * Sets forfeiture_months_start_after
     *
     * @param int|null $forfeiture_months_start_after 
     *
     * @return self
     */
    public function setForfeitureMonthsStartAfter($forfeiture_months_start_after)
    {
        if (is_null($forfeiture_months_start_after)) {
            throw new \InvalidArgumentException('non-nullable forfeiture_months_start_after cannot be null');
        }
        $this->container['forfeiture_months_start_after'] = $forfeiture_months_start_after;

        return $this;
    }

    /**
     * Gets standard_allowance_unit_type_amount
     *
     * @return float|null
     */
    public function getStandardAllowanceUnitTypeAmount()
    {
        return $this->container['standard_allowance_unit_type_amount'];
    }

    /**
     * Sets standard_allowance_unit_type_amount
     *
     * @param float|null $standard_allowance_unit_type_amount 
     *
     * @return self
     */
    public function setStandardAllowanceUnitTypeAmount($standard_allowance_unit_type_amount)
    {
        if (is_null($standard_allowance_unit_type_amount)) {
            throw new \InvalidArgumentException('non-nullable standard_allowance_unit_type_amount cannot be null');
        }
        $this->container['standard_allowance_unit_type_amount'] = $standard_allowance_unit_type_amount;

        return $this;
    }

    /**
     * Gets standard_allowance_unit_type
     *
     * @return string|null
     */
    public function getStandardAllowanceUnitType()
    {
        return $this->container['standard_allowance_unit_type'];
    }

    /**
     * Sets standard_allowance_unit_type
     *
     * @param string|null $standard_allowance_unit_type 
     *
     * @return self
     */
    public function setStandardAllowanceUnitType($standard_allowance_unit_type)
    {
        if (is_null($standard_allowance_unit_type)) {
            throw new \InvalidArgumentException('non-nullable standard_allowance_unit_type cannot be null');
        }
        $allowedValues = $this->getStandardAllowanceUnitTypeAllowableValues();
        if (!in_array($standard_allowance_unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'standard_allowance_unit_type', must be one of '%s'",
                    $standard_allowance_unit_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standard_allowance_unit_type'] = $standard_allowance_unit_type;

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

