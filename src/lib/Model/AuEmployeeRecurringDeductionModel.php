<?php
/**
 * AuEmployeeRecurringDeductionModel
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
 * AuEmployeeRecurringDeductionModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuEmployeeRecurringDeductionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuEmployeeRecurringDeductionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deduction_type' => 'string',
        'paid_to' => 'string',
        'name' => 'string',
        'deduction_category_id' => 'int',
        'paid_to_account_id' => 'int',
        'external_reference_id' => 'string',
        'preserved_earnings_amount_not_reached_action' => 'string',
        'carry_forward_unpaid_deductions' => 'bool',
        'carry_forward_unused_preserved_earnings' => 'bool',
        'payment_reference' => 'string',
        'preserved_earnings' => 'string',
        'preserved_earnings_amount' => 'double',
        'additional_data' => 'int',
        'priority' => 'int',
        'deleted' => 'bool',
        'id' => 'int',
        'employee_id' => 'int',
        'amount' => 'double',
        'expiry_date' => '\DateTime',
        'from_date' => '\DateTime',
        'maximum_amount_paid' => 'double',
        'total_amount_paid' => 'double',
        'is_active' => 'bool',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deduction_type' => null,
        'paid_to' => null,
        'name' => null,
        'deduction_category_id' => 'int32',
        'paid_to_account_id' => 'int32',
        'external_reference_id' => null,
        'preserved_earnings_amount_not_reached_action' => null,
        'carry_forward_unpaid_deductions' => null,
        'carry_forward_unused_preserved_earnings' => null,
        'payment_reference' => null,
        'preserved_earnings' => null,
        'preserved_earnings_amount' => 'double',
        'additional_data' => 'int32',
        'priority' => 'int32',
        'deleted' => null,
        'id' => 'int32',
        'employee_id' => 'int32',
        'amount' => 'double',
        'expiry_date' => 'date-time',
        'from_date' => 'date-time',
        'maximum_amount_paid' => 'double',
        'total_amount_paid' => 'double',
        'is_active' => null,
        'notes' => null
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
        'deduction_type' => 'deductionType',
        'paid_to' => 'paidTo',
        'name' => 'name',
        'deduction_category_id' => 'deductionCategoryId',
        'paid_to_account_id' => 'paidToAccountId',
        'external_reference_id' => 'externalReferenceId',
        'preserved_earnings_amount_not_reached_action' => 'preservedEarningsAmountNotReachedAction',
        'carry_forward_unpaid_deductions' => 'carryForwardUnpaidDeductions',
        'carry_forward_unused_preserved_earnings' => 'carryForwardUnusedPreservedEarnings',
        'payment_reference' => 'paymentReference',
        'preserved_earnings' => 'preservedEarnings',
        'preserved_earnings_amount' => 'preservedEarningsAmount',
        'additional_data' => 'additionalData',
        'priority' => 'priority',
        'deleted' => 'deleted',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'amount' => 'amount',
        'expiry_date' => 'expiryDate',
        'from_date' => 'fromDate',
        'maximum_amount_paid' => 'maximumAmountPaid',
        'total_amount_paid' => 'totalAmountPaid',
        'is_active' => 'isActive',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deduction_type' => 'setDeductionType',
        'paid_to' => 'setPaidTo',
        'name' => 'setName',
        'deduction_category_id' => 'setDeductionCategoryId',
        'paid_to_account_id' => 'setPaidToAccountId',
        'external_reference_id' => 'setExternalReferenceId',
        'preserved_earnings_amount_not_reached_action' => 'setPreservedEarningsAmountNotReachedAction',
        'carry_forward_unpaid_deductions' => 'setCarryForwardUnpaidDeductions',
        'carry_forward_unused_preserved_earnings' => 'setCarryForwardUnusedPreservedEarnings',
        'payment_reference' => 'setPaymentReference',
        'preserved_earnings' => 'setPreservedEarnings',
        'preserved_earnings_amount' => 'setPreservedEarningsAmount',
        'additional_data' => 'setAdditionalData',
        'priority' => 'setPriority',
        'deleted' => 'setDeleted',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'amount' => 'setAmount',
        'expiry_date' => 'setExpiryDate',
        'from_date' => 'setFromDate',
        'maximum_amount_paid' => 'setMaximumAmountPaid',
        'total_amount_paid' => 'setTotalAmountPaid',
        'is_active' => 'setIsActive',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deduction_type' => 'getDeductionType',
        'paid_to' => 'getPaidTo',
        'name' => 'getName',
        'deduction_category_id' => 'getDeductionCategoryId',
        'paid_to_account_id' => 'getPaidToAccountId',
        'external_reference_id' => 'getExternalReferenceId',
        'preserved_earnings_amount_not_reached_action' => 'getPreservedEarningsAmountNotReachedAction',
        'carry_forward_unpaid_deductions' => 'getCarryForwardUnpaidDeductions',
        'carry_forward_unused_preserved_earnings' => 'getCarryForwardUnusedPreservedEarnings',
        'payment_reference' => 'getPaymentReference',
        'preserved_earnings' => 'getPreservedEarnings',
        'preserved_earnings_amount' => 'getPreservedEarningsAmount',
        'additional_data' => 'getAdditionalData',
        'priority' => 'getPriority',
        'deleted' => 'getDeleted',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'amount' => 'getAmount',
        'expiry_date' => 'getExpiryDate',
        'from_date' => 'getFromDate',
        'maximum_amount_paid' => 'getMaximumAmountPaid',
        'total_amount_paid' => 'getTotalAmountPaid',
        'is_active' => 'getIsActive',
        'notes' => 'getNotes'
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

    const DEDUCTION_TYPE_NOT_SET = 'NotSet';
    const DEDUCTION_TYPE_FIXED = 'Fixed';
    const DEDUCTION_TYPE_PERCENTAGE_GROSS = 'PercentageGross';
    const DEDUCTION_TYPE_PERCENTAGE_OTE = 'PercentageOTE';
    const DEDUCTION_TYPE_PERCENTAGE_STUDENT_LOAN = 'PercentageStudentLoan';
    const DEDUCTION_TYPE_PERCENTAGE_NET = 'PercentageNet';
    const DEDUCTION_TYPE_TIERED = 'Tiered';
    const PAID_TO_MANUAL = 'Manual';
    const PAID_TO_BANK_ACCOUNT = 'BankAccount';
    const PAID_TO_SUPER_FUND = 'SuperFund';
    const PAID_TO_BPAY = 'Bpay';
    const PAID_TO_PENSION_SCHEME = 'PensionScheme';
    const PAID_TO_TAX_OFFICE = 'TaxOffice';
    const PAID_TO_CPFB = 'CPFB';
    const PRESERVED_EARNINGS_AMOUNT_NOT_REACHED_ACTION_DO_NOT_PAY = 'DoNotPay';
    const PRESERVED_EARNINGS_AMOUNT_NOT_REACHED_ACTION_PAY_TO_LIMIT = 'PayToLimit';
    const PRESERVED_EARNINGS_NEVER = 'Never';
    const PRESERVED_EARNINGS_AMOUNT = 'Amount';
    const PRESERVED_EARNINGS_PERCENTAGE = 'Percentage';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeductionTypeAllowableValues()
    {
        return [
            self::DEDUCTION_TYPE_NOT_SET,
            self::DEDUCTION_TYPE_FIXED,
            self::DEDUCTION_TYPE_PERCENTAGE_GROSS,
            self::DEDUCTION_TYPE_PERCENTAGE_OTE,
            self::DEDUCTION_TYPE_PERCENTAGE_STUDENT_LOAN,
            self::DEDUCTION_TYPE_PERCENTAGE_NET,
            self::DEDUCTION_TYPE_TIERED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaidToAllowableValues()
    {
        return [
            self::PAID_TO_MANUAL,
            self::PAID_TO_BANK_ACCOUNT,
            self::PAID_TO_SUPER_FUND,
            self::PAID_TO_BPAY,
            self::PAID_TO_PENSION_SCHEME,
            self::PAID_TO_TAX_OFFICE,
            self::PAID_TO_CPFB,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreservedEarningsAmountNotReachedActionAllowableValues()
    {
        return [
            self::PRESERVED_EARNINGS_AMOUNT_NOT_REACHED_ACTION_DO_NOT_PAY,
            self::PRESERVED_EARNINGS_AMOUNT_NOT_REACHED_ACTION_PAY_TO_LIMIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreservedEarningsAllowableValues()
    {
        return [
            self::PRESERVED_EARNINGS_NEVER,
            self::PRESERVED_EARNINGS_AMOUNT,
            self::PRESERVED_EARNINGS_PERCENTAGE,
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
        $this->container['deduction_type'] = isset($data['deduction_type']) ? $data['deduction_type'] : null;
        $this->container['paid_to'] = isset($data['paid_to']) ? $data['paid_to'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['deduction_category_id'] = isset($data['deduction_category_id']) ? $data['deduction_category_id'] : null;
        $this->container['paid_to_account_id'] = isset($data['paid_to_account_id']) ? $data['paid_to_account_id'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['preserved_earnings_amount_not_reached_action'] = isset($data['preserved_earnings_amount_not_reached_action']) ? $data['preserved_earnings_amount_not_reached_action'] : null;
        $this->container['carry_forward_unpaid_deductions'] = isset($data['carry_forward_unpaid_deductions']) ? $data['carry_forward_unpaid_deductions'] : null;
        $this->container['carry_forward_unused_preserved_earnings'] = isset($data['carry_forward_unused_preserved_earnings']) ? $data['carry_forward_unused_preserved_earnings'] : null;
        $this->container['payment_reference'] = isset($data['payment_reference']) ? $data['payment_reference'] : null;
        $this->container['preserved_earnings'] = isset($data['preserved_earnings']) ? $data['preserved_earnings'] : null;
        $this->container['preserved_earnings_amount'] = isset($data['preserved_earnings_amount']) ? $data['preserved_earnings_amount'] : null;
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['maximum_amount_paid'] = isset($data['maximum_amount_paid']) ? $data['maximum_amount_paid'] : null;
        $this->container['total_amount_paid'] = isset($data['total_amount_paid']) ? $data['total_amount_paid'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeductionTypeAllowableValues();
        if (!is_null($this->container['deduction_type']) && !in_array($this->container['deduction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deduction_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaidToAllowableValues();
        if (!is_null($this->container['paid_to']) && !in_array($this->container['paid_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paid_to', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPreservedEarningsAmountNotReachedActionAllowableValues();
        if (!is_null($this->container['preserved_earnings_amount_not_reached_action']) && !in_array($this->container['preserved_earnings_amount_not_reached_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preserved_earnings_amount_not_reached_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPreservedEarningsAllowableValues();
        if (!is_null($this->container['preserved_earnings']) && !in_array($this->container['preserved_earnings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preserved_earnings', must be one of '%s'",
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
     * Gets deduction_type
     *
     * @return string
     */
    public function getDeductionType()
    {
        return $this->container['deduction_type'];
    }

    /**
     * Sets deduction_type
     *
     * @param string $deduction_type 
     *
     * @return $this
     */
    public function setDeductionType($deduction_type)
    {
        $allowedValues = $this->getDeductionTypeAllowableValues();
        if (!is_null($deduction_type) && !in_array($deduction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deduction_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deduction_type'] = $deduction_type;

        return $this;
    }

    /**
     * Gets paid_to
     *
     * @return string
     */
    public function getPaidTo()
    {
        return $this->container['paid_to'];
    }

    /**
     * Sets paid_to
     *
     * @param string $paid_to 
     *
     * @return $this
     */
    public function setPaidTo($paid_to)
    {
        $allowedValues = $this->getPaidToAllowableValues();
        if (!is_null($paid_to) && !in_array($paid_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paid_to', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paid_to'] = $paid_to;

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
     * Gets deduction_category_id
     *
     * @return int
     */
    public function getDeductionCategoryId()
    {
        return $this->container['deduction_category_id'];
    }

    /**
     * Sets deduction_category_id
     *
     * @param int $deduction_category_id 
     *
     * @return $this
     */
    public function setDeductionCategoryId($deduction_category_id)
    {
        $this->container['deduction_category_id'] = $deduction_category_id;

        return $this;
    }

    /**
     * Gets paid_to_account_id
     *
     * @return int
     */
    public function getPaidToAccountId()
    {
        return $this->container['paid_to_account_id'];
    }

    /**
     * Sets paid_to_account_id
     *
     * @param int $paid_to_account_id 
     *
     * @return $this
     */
    public function setPaidToAccountId($paid_to_account_id)
    {
        $this->container['paid_to_account_id'] = $paid_to_account_id;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string $external_reference_id 
     *
     * @return $this
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets preserved_earnings_amount_not_reached_action
     *
     * @return string
     */
    public function getPreservedEarningsAmountNotReachedAction()
    {
        return $this->container['preserved_earnings_amount_not_reached_action'];
    }

    /**
     * Sets preserved_earnings_amount_not_reached_action
     *
     * @param string $preserved_earnings_amount_not_reached_action 
     *
     * @return $this
     */
    public function setPreservedEarningsAmountNotReachedAction($preserved_earnings_amount_not_reached_action)
    {
        $allowedValues = $this->getPreservedEarningsAmountNotReachedActionAllowableValues();
        if (!is_null($preserved_earnings_amount_not_reached_action) && !in_array($preserved_earnings_amount_not_reached_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preserved_earnings_amount_not_reached_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preserved_earnings_amount_not_reached_action'] = $preserved_earnings_amount_not_reached_action;

        return $this;
    }

    /**
     * Gets carry_forward_unpaid_deductions
     *
     * @return bool
     */
    public function getCarryForwardUnpaidDeductions()
    {
        return $this->container['carry_forward_unpaid_deductions'];
    }

    /**
     * Sets carry_forward_unpaid_deductions
     *
     * @param bool $carry_forward_unpaid_deductions 
     *
     * @return $this
     */
    public function setCarryForwardUnpaidDeductions($carry_forward_unpaid_deductions)
    {
        $this->container['carry_forward_unpaid_deductions'] = $carry_forward_unpaid_deductions;

        return $this;
    }

    /**
     * Gets carry_forward_unused_preserved_earnings
     *
     * @return bool
     */
    public function getCarryForwardUnusedPreservedEarnings()
    {
        return $this->container['carry_forward_unused_preserved_earnings'];
    }

    /**
     * Sets carry_forward_unused_preserved_earnings
     *
     * @param bool $carry_forward_unused_preserved_earnings 
     *
     * @return $this
     */
    public function setCarryForwardUnusedPreservedEarnings($carry_forward_unused_preserved_earnings)
    {
        $this->container['carry_forward_unused_preserved_earnings'] = $carry_forward_unused_preserved_earnings;

        return $this;
    }

    /**
     * Gets payment_reference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param string $payment_reference 
     *
     * @return $this
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets preserved_earnings
     *
     * @return string
     */
    public function getPreservedEarnings()
    {
        return $this->container['preserved_earnings'];
    }

    /**
     * Sets preserved_earnings
     *
     * @param string $preserved_earnings 
     *
     * @return $this
     */
    public function setPreservedEarnings($preserved_earnings)
    {
        $allowedValues = $this->getPreservedEarningsAllowableValues();
        if (!is_null($preserved_earnings) && !in_array($preserved_earnings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preserved_earnings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preserved_earnings'] = $preserved_earnings;

        return $this;
    }

    /**
     * Gets preserved_earnings_amount
     *
     * @return double
     */
    public function getPreservedEarningsAmount()
    {
        return $this->container['preserved_earnings_amount'];
    }

    /**
     * Sets preserved_earnings_amount
     *
     * @param double $preserved_earnings_amount 
     *
     * @return $this
     */
    public function setPreservedEarningsAmount($preserved_earnings_amount)
    {
        $this->container['preserved_earnings_amount'] = $preserved_earnings_amount;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return int
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param int $additional_data 
     *
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted 
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date 
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date 
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets maximum_amount_paid
     *
     * @return double
     */
    public function getMaximumAmountPaid()
    {
        return $this->container['maximum_amount_paid'];
    }

    /**
     * Sets maximum_amount_paid
     *
     * @param double $maximum_amount_paid 
     *
     * @return $this
     */
    public function setMaximumAmountPaid($maximum_amount_paid)
    {
        $this->container['maximum_amount_paid'] = $maximum_amount_paid;

        return $this;
    }

    /**
     * Gets total_amount_paid
     *
     * @return double
     */
    public function getTotalAmountPaid()
    {
        return $this->container['total_amount_paid'];
    }

    /**
     * Sets total_amount_paid
     *
     * @param double $total_amount_paid 
     *
     * @return $this
     */
    public function setTotalAmountPaid($total_amount_paid)
    {
        $this->container['total_amount_paid'] = $total_amount_paid;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active 
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes 
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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


