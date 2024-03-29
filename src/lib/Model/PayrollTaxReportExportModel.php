<?php
/**
 * PayrollTaxReportExportModel
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
 * PayrollTaxReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayrollTaxReportExportModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayrollTaxReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'external_id' => 'string',
        'location' => 'string',
        'type' => 'string',
        'state' => 'string',
        'amount' => 'float',
        'employee_payroll_tax_exempt' => 'bool',
        'pay_category_payroll_tax_exempt' => 'bool',
        'termination_payment' => 'bool',
        'allowance' => 'bool',
        'etp' => 'bool',
        'genuine_redundancy' => 'bool',
        'lump_sum_d' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'external_id' => null,
        'location' => null,
        'type' => null,
        'state' => null,
        'amount' => 'double',
        'employee_payroll_tax_exempt' => null,
        'pay_category_payroll_tax_exempt' => null,
        'termination_payment' => null,
        'allowance' => null,
        'etp' => null,
        'genuine_redundancy' => null,
        'lump_sum_d' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
		'first_name' => false,
		'surname' => false,
		'external_id' => false,
		'location' => false,
		'type' => false,
		'state' => false,
		'amount' => false,
		'employee_payroll_tax_exempt' => false,
		'pay_category_payroll_tax_exempt' => false,
		'termination_payment' => false,
		'allowance' => false,
		'etp' => false,
		'genuine_redundancy' => false,
		'lump_sum_d' => false
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
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'external_id' => 'externalId',
        'location' => 'location',
        'type' => 'type',
        'state' => 'state',
        'amount' => 'amount',
        'employee_payroll_tax_exempt' => 'employeePayrollTaxExempt',
        'pay_category_payroll_tax_exempt' => 'payCategoryPayrollTaxExempt',
        'termination_payment' => 'terminationPayment',
        'allowance' => 'allowance',
        'etp' => 'etp',
        'genuine_redundancy' => 'genuineRedundancy',
        'lump_sum_d' => 'lumpSumD'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'external_id' => 'setExternalId',
        'location' => 'setLocation',
        'type' => 'setType',
        'state' => 'setState',
        'amount' => 'setAmount',
        'employee_payroll_tax_exempt' => 'setEmployeePayrollTaxExempt',
        'pay_category_payroll_tax_exempt' => 'setPayCategoryPayrollTaxExempt',
        'termination_payment' => 'setTerminationPayment',
        'allowance' => 'setAllowance',
        'etp' => 'setEtp',
        'genuine_redundancy' => 'setGenuineRedundancy',
        'lump_sum_d' => 'setLumpSumD'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'external_id' => 'getExternalId',
        'location' => 'getLocation',
        'type' => 'getType',
        'state' => 'getState',
        'amount' => 'getAmount',
        'employee_payroll_tax_exempt' => 'getEmployeePayrollTaxExempt',
        'pay_category_payroll_tax_exempt' => 'getPayCategoryPayrollTaxExempt',
        'termination_payment' => 'getTerminationPayment',
        'allowance' => 'getAllowance',
        'etp' => 'getEtp',
        'genuine_redundancy' => 'getGenuineRedundancy',
        'lump_sum_d' => 'getLumpSumD'
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('employee_payroll_tax_exempt', $data ?? [], null);
        $this->setIfExists('pay_category_payroll_tax_exempt', $data ?? [], null);
        $this->setIfExists('termination_payment', $data ?? [], null);
        $this->setIfExists('allowance', $data ?? [], null);
        $this->setIfExists('etp', $data ?? [], null);
        $this->setIfExists('genuine_redundancy', $data ?? [], null);
        $this->setIfExists('lump_sum_d', $data ?? [], null);
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
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location 
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state 
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount 
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets employee_payroll_tax_exempt
     *
     * @return bool|null
     */
    public function getEmployeePayrollTaxExempt()
    {
        return $this->container['employee_payroll_tax_exempt'];
    }

    /**
     * Sets employee_payroll_tax_exempt
     *
     * @param bool|null $employee_payroll_tax_exempt 
     *
     * @return self
     */
    public function setEmployeePayrollTaxExempt($employee_payroll_tax_exempt)
    {
        if (is_null($employee_payroll_tax_exempt)) {
            throw new \InvalidArgumentException('non-nullable employee_payroll_tax_exempt cannot be null');
        }
        $this->container['employee_payroll_tax_exempt'] = $employee_payroll_tax_exempt;

        return $this;
    }

    /**
     * Gets pay_category_payroll_tax_exempt
     *
     * @return bool|null
     */
    public function getPayCategoryPayrollTaxExempt()
    {
        return $this->container['pay_category_payroll_tax_exempt'];
    }

    /**
     * Sets pay_category_payroll_tax_exempt
     *
     * @param bool|null $pay_category_payroll_tax_exempt 
     *
     * @return self
     */
    public function setPayCategoryPayrollTaxExempt($pay_category_payroll_tax_exempt)
    {
        if (is_null($pay_category_payroll_tax_exempt)) {
            throw new \InvalidArgumentException('non-nullable pay_category_payroll_tax_exempt cannot be null');
        }
        $this->container['pay_category_payroll_tax_exempt'] = $pay_category_payroll_tax_exempt;

        return $this;
    }

    /**
     * Gets termination_payment
     *
     * @return bool|null
     */
    public function getTerminationPayment()
    {
        return $this->container['termination_payment'];
    }

    /**
     * Sets termination_payment
     *
     * @param bool|null $termination_payment 
     *
     * @return self
     */
    public function setTerminationPayment($termination_payment)
    {
        if (is_null($termination_payment)) {
            throw new \InvalidArgumentException('non-nullable termination_payment cannot be null');
        }
        $this->container['termination_payment'] = $termination_payment;

        return $this;
    }

    /**
     * Gets allowance
     *
     * @return bool|null
     */
    public function getAllowance()
    {
        return $this->container['allowance'];
    }

    /**
     * Sets allowance
     *
     * @param bool|null $allowance 
     *
     * @return self
     */
    public function setAllowance($allowance)
    {
        if (is_null($allowance)) {
            throw new \InvalidArgumentException('non-nullable allowance cannot be null');
        }
        $this->container['allowance'] = $allowance;

        return $this;
    }

    /**
     * Gets etp
     *
     * @return bool|null
     */
    public function getEtp()
    {
        return $this->container['etp'];
    }

    /**
     * Sets etp
     *
     * @param bool|null $etp 
     *
     * @return self
     */
    public function setEtp($etp)
    {
        if (is_null($etp)) {
            throw new \InvalidArgumentException('non-nullable etp cannot be null');
        }
        $this->container['etp'] = $etp;

        return $this;
    }

    /**
     * Gets genuine_redundancy
     *
     * @return bool|null
     */
    public function getGenuineRedundancy()
    {
        return $this->container['genuine_redundancy'];
    }

    /**
     * Sets genuine_redundancy
     *
     * @param bool|null $genuine_redundancy 
     *
     * @return self
     */
    public function setGenuineRedundancy($genuine_redundancy)
    {
        if (is_null($genuine_redundancy)) {
            throw new \InvalidArgumentException('non-nullable genuine_redundancy cannot be null');
        }
        $this->container['genuine_redundancy'] = $genuine_redundancy;

        return $this;
    }

    /**
     * Gets lump_sum_d
     *
     * @return bool|null
     */
    public function getLumpSumD()
    {
        return $this->container['lump_sum_d'];
    }

    /**
     * Sets lump_sum_d
     *
     * @param bool|null $lump_sum_d 
     *
     * @return self
     */
    public function setLumpSumD($lump_sum_d)
    {
        if (is_null($lump_sum_d)) {
            throw new \InvalidArgumentException('non-nullable lump_sum_d cannot be null');
        }
        $this->container['lump_sum_d'] = $lump_sum_d;

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


