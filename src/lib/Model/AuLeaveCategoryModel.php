<?php
/**
 * AuLeaveCategoryModel
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
 * AuLeaveCategoryModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuLeaveCategoryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuLeaveCategoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contingent_period' => 'double',
        'entitlement_period' => 'double',
        'leave_loading' => 'double',
        'unit_type' => 'string',
        'leave_category_type' => 'string',
        'leave_accrual_rule' => '\Swagger\Client\Model\AuLeaveAccrualRuleModel',
        'transfer_on_termination_to_pay_category_id' => 'int',
        'id' => 'int',
        'name' => 'string',
        'units' => 'double',
        'automatically_accrues' => 'bool',
        'is_private' => 'bool',
        'exclude_from_termination_payout' => 'bool',
        'external_id' => 'string',
        'source' => 'string',
        'is_balance_untracked' => 'bool',
        'deduct_from_primary_pay_category' => 'bool',
        'deduct_from_pay_category_id' => 'int',
        'transfer_to_pay_category_id' => 'int',
        'hide_accruals_on_payslip' => 'bool',
        'use_deduct_from_pay_category_rate' => 'bool',
        'is_name_private' => 'bool',
        'leave_unit_type' => 'string',
        'payout_as_etp' => 'bool',
        'accrues_first_pay_run_per_period_only' => 'bool',
        'prevent_negative_balance_unpaid_leave_category_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contingent_period' => 'double',
        'entitlement_period' => 'double',
        'leave_loading' => 'double',
        'unit_type' => null,
        'leave_category_type' => null,
        'leave_accrual_rule' => null,
        'transfer_on_termination_to_pay_category_id' => 'int32',
        'id' => 'int32',
        'name' => null,
        'units' => 'double',
        'automatically_accrues' => null,
        'is_private' => null,
        'exclude_from_termination_payout' => null,
        'external_id' => null,
        'source' => null,
        'is_balance_untracked' => null,
        'deduct_from_primary_pay_category' => null,
        'deduct_from_pay_category_id' => 'int32',
        'transfer_to_pay_category_id' => 'int32',
        'hide_accruals_on_payslip' => null,
        'use_deduct_from_pay_category_rate' => null,
        'is_name_private' => null,
        'leave_unit_type' => null,
        'payout_as_etp' => null,
        'accrues_first_pay_run_per_period_only' => null,
        'prevent_negative_balance_unpaid_leave_category_id' => 'int32'
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
        'contingent_period' => 'contingentPeriod',
        'entitlement_period' => 'entitlementPeriod',
        'leave_loading' => 'leaveLoading',
        'unit_type' => 'unitType',
        'leave_category_type' => 'leaveCategoryType',
        'leave_accrual_rule' => 'leaveAccrualRule',
        'transfer_on_termination_to_pay_category_id' => 'transferOnTerminationToPayCategoryId',
        'id' => 'id',
        'name' => 'name',
        'units' => 'units',
        'automatically_accrues' => 'automaticallyAccrues',
        'is_private' => 'isPrivate',
        'exclude_from_termination_payout' => 'excludeFromTerminationPayout',
        'external_id' => 'externalId',
        'source' => 'source',
        'is_balance_untracked' => 'isBalanceUntracked',
        'deduct_from_primary_pay_category' => 'deductFromPrimaryPayCategory',
        'deduct_from_pay_category_id' => 'deductFromPayCategoryId',
        'transfer_to_pay_category_id' => 'transferToPayCategoryId',
        'hide_accruals_on_payslip' => 'hideAccrualsOnPayslip',
        'use_deduct_from_pay_category_rate' => 'useDeductFromPayCategoryRate',
        'is_name_private' => 'isNamePrivate',
        'leave_unit_type' => 'leaveUnitType',
        'payout_as_etp' => 'payoutAsETP',
        'accrues_first_pay_run_per_period_only' => 'accruesFirstPayRunPerPeriodOnly',
        'prevent_negative_balance_unpaid_leave_category_id' => 'preventNegativeBalanceUnpaidLeaveCategoryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contingent_period' => 'setContingentPeriod',
        'entitlement_period' => 'setEntitlementPeriod',
        'leave_loading' => 'setLeaveLoading',
        'unit_type' => 'setUnitType',
        'leave_category_type' => 'setLeaveCategoryType',
        'leave_accrual_rule' => 'setLeaveAccrualRule',
        'transfer_on_termination_to_pay_category_id' => 'setTransferOnTerminationToPayCategoryId',
        'id' => 'setId',
        'name' => 'setName',
        'units' => 'setUnits',
        'automatically_accrues' => 'setAutomaticallyAccrues',
        'is_private' => 'setIsPrivate',
        'exclude_from_termination_payout' => 'setExcludeFromTerminationPayout',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'is_balance_untracked' => 'setIsBalanceUntracked',
        'deduct_from_primary_pay_category' => 'setDeductFromPrimaryPayCategory',
        'deduct_from_pay_category_id' => 'setDeductFromPayCategoryId',
        'transfer_to_pay_category_id' => 'setTransferToPayCategoryId',
        'hide_accruals_on_payslip' => 'setHideAccrualsOnPayslip',
        'use_deduct_from_pay_category_rate' => 'setUseDeductFromPayCategoryRate',
        'is_name_private' => 'setIsNamePrivate',
        'leave_unit_type' => 'setLeaveUnitType',
        'payout_as_etp' => 'setPayoutAsEtp',
        'accrues_first_pay_run_per_period_only' => 'setAccruesFirstPayRunPerPeriodOnly',
        'prevent_negative_balance_unpaid_leave_category_id' => 'setPreventNegativeBalanceUnpaidLeaveCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contingent_period' => 'getContingentPeriod',
        'entitlement_period' => 'getEntitlementPeriod',
        'leave_loading' => 'getLeaveLoading',
        'unit_type' => 'getUnitType',
        'leave_category_type' => 'getLeaveCategoryType',
        'leave_accrual_rule' => 'getLeaveAccrualRule',
        'transfer_on_termination_to_pay_category_id' => 'getTransferOnTerminationToPayCategoryId',
        'id' => 'getId',
        'name' => 'getName',
        'units' => 'getUnits',
        'automatically_accrues' => 'getAutomaticallyAccrues',
        'is_private' => 'getIsPrivate',
        'exclude_from_termination_payout' => 'getExcludeFromTerminationPayout',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'is_balance_untracked' => 'getIsBalanceUntracked',
        'deduct_from_primary_pay_category' => 'getDeductFromPrimaryPayCategory',
        'deduct_from_pay_category_id' => 'getDeductFromPayCategoryId',
        'transfer_to_pay_category_id' => 'getTransferToPayCategoryId',
        'hide_accruals_on_payslip' => 'getHideAccrualsOnPayslip',
        'use_deduct_from_pay_category_rate' => 'getUseDeductFromPayCategoryRate',
        'is_name_private' => 'getIsNamePrivate',
        'leave_unit_type' => 'getLeaveUnitType',
        'payout_as_etp' => 'getPayoutAsEtp',
        'accrues_first_pay_run_per_period_only' => 'getAccruesFirstPayRunPerPeriodOnly',
        'prevent_negative_balance_unpaid_leave_category_id' => 'getPreventNegativeBalanceUnpaidLeaveCategoryId'
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

    const UNIT_TYPE_DAYS = 'Days';
    const UNIT_TYPE_WEEKS = 'Weeks';
    const UNIT_TYPE_HOURS_PER_HOUR_WORKED = 'HoursPerHourWorked';
    const UNIT_TYPE_HOURS_PER_PAY_RUN = 'HoursPerPayRun';
    const UNIT_TYPE_STANDARD_DAYS = 'StandardDays';
    const UNIT_TYPE_STANDARD_WEEKS = 'StandardWeeks';
    const UNIT_TYPE_DAY_PER_CALENDAR_DAY = 'DayPerCalendarDay';
    const LEAVE_CATEGORY_TYPE_STANDARD = 'Standard';
    const LEAVE_CATEGORY_TYPE_LONG_SERVICE_LEAVE = 'LongServiceLeave';
    const LEAVE_CATEGORY_TYPE_PERSONAL_CARERS_LEAVE = 'PersonalCarersLeave';
    const LEAVE_UNIT_TYPE_HOURS = 'Hours';
    const LEAVE_UNIT_TYPE_DAYS = 'Days';
    const LEAVE_UNIT_TYPE_WEEKS = 'Weeks';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_DAYS,
            self::UNIT_TYPE_WEEKS,
            self::UNIT_TYPE_HOURS_PER_HOUR_WORKED,
            self::UNIT_TYPE_HOURS_PER_PAY_RUN,
            self::UNIT_TYPE_STANDARD_DAYS,
            self::UNIT_TYPE_STANDARD_WEEKS,
            self::UNIT_TYPE_DAY_PER_CALENDAR_DAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveCategoryTypeAllowableValues()
    {
        return [
            self::LEAVE_CATEGORY_TYPE_STANDARD,
            self::LEAVE_CATEGORY_TYPE_LONG_SERVICE_LEAVE,
            self::LEAVE_CATEGORY_TYPE_PERSONAL_CARERS_LEAVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveUnitTypeAllowableValues()
    {
        return [
            self::LEAVE_UNIT_TYPE_HOURS,
            self::LEAVE_UNIT_TYPE_DAYS,
            self::LEAVE_UNIT_TYPE_WEEKS,
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
        $this->container['contingent_period'] = isset($data['contingent_period']) ? $data['contingent_period'] : null;
        $this->container['entitlement_period'] = isset($data['entitlement_period']) ? $data['entitlement_period'] : null;
        $this->container['leave_loading'] = isset($data['leave_loading']) ? $data['leave_loading'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['leave_category_type'] = isset($data['leave_category_type']) ? $data['leave_category_type'] : null;
        $this->container['leave_accrual_rule'] = isset($data['leave_accrual_rule']) ? $data['leave_accrual_rule'] : null;
        $this->container['transfer_on_termination_to_pay_category_id'] = isset($data['transfer_on_termination_to_pay_category_id']) ? $data['transfer_on_termination_to_pay_category_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['automatically_accrues'] = isset($data['automatically_accrues']) ? $data['automatically_accrues'] : null;
        $this->container['is_private'] = isset($data['is_private']) ? $data['is_private'] : null;
        $this->container['exclude_from_termination_payout'] = isset($data['exclude_from_termination_payout']) ? $data['exclude_from_termination_payout'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['is_balance_untracked'] = isset($data['is_balance_untracked']) ? $data['is_balance_untracked'] : null;
        $this->container['deduct_from_primary_pay_category'] = isset($data['deduct_from_primary_pay_category']) ? $data['deduct_from_primary_pay_category'] : null;
        $this->container['deduct_from_pay_category_id'] = isset($data['deduct_from_pay_category_id']) ? $data['deduct_from_pay_category_id'] : null;
        $this->container['transfer_to_pay_category_id'] = isset($data['transfer_to_pay_category_id']) ? $data['transfer_to_pay_category_id'] : null;
        $this->container['hide_accruals_on_payslip'] = isset($data['hide_accruals_on_payslip']) ? $data['hide_accruals_on_payslip'] : null;
        $this->container['use_deduct_from_pay_category_rate'] = isset($data['use_deduct_from_pay_category_rate']) ? $data['use_deduct_from_pay_category_rate'] : null;
        $this->container['is_name_private'] = isset($data['is_name_private']) ? $data['is_name_private'] : null;
        $this->container['leave_unit_type'] = isset($data['leave_unit_type']) ? $data['leave_unit_type'] : null;
        $this->container['payout_as_etp'] = isset($data['payout_as_etp']) ? $data['payout_as_etp'] : null;
        $this->container['accrues_first_pay_run_per_period_only'] = isset($data['accrues_first_pay_run_per_period_only']) ? $data['accrues_first_pay_run_per_period_only'] : null;
        $this->container['prevent_negative_balance_unpaid_leave_category_id'] = isset($data['prevent_negative_balance_unpaid_leave_category_id']) ? $data['prevent_negative_balance_unpaid_leave_category_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($this->container['unit_type']) && !in_array($this->container['unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveCategoryTypeAllowableValues();
        if (!is_null($this->container['leave_category_type']) && !in_array($this->container['leave_category_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_category_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveUnitTypeAllowableValues();
        if (!is_null($this->container['leave_unit_type']) && !in_array($this->container['leave_unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_unit_type', must be one of '%s'",
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
     * Gets contingent_period
     *
     * @return double
     */
    public function getContingentPeriod()
    {
        return $this->container['contingent_period'];
    }

    /**
     * Sets contingent_period
     *
     * @param double $contingent_period 
     *
     * @return $this
     */
    public function setContingentPeriod($contingent_period)
    {
        $this->container['contingent_period'] = $contingent_period;

        return $this;
    }

    /**
     * Gets entitlement_period
     *
     * @return double
     */
    public function getEntitlementPeriod()
    {
        return $this->container['entitlement_period'];
    }

    /**
     * Sets entitlement_period
     *
     * @param double $entitlement_period 
     *
     * @return $this
     */
    public function setEntitlementPeriod($entitlement_period)
    {
        $this->container['entitlement_period'] = $entitlement_period;

        return $this;
    }

    /**
     * Gets leave_loading
     *
     * @return double
     */
    public function getLeaveLoading()
    {
        return $this->container['leave_loading'];
    }

    /**
     * Sets leave_loading
     *
     * @param double $leave_loading 
     *
     * @return $this
     */
    public function setLeaveLoading($leave_loading)
    {
        $this->container['leave_loading'] = $leave_loading;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string $unit_type 
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($unit_type) && !in_array($unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets leave_category_type
     *
     * @return string
     */
    public function getLeaveCategoryType()
    {
        return $this->container['leave_category_type'];
    }

    /**
     * Sets leave_category_type
     *
     * @param string $leave_category_type 
     *
     * @return $this
     */
    public function setLeaveCategoryType($leave_category_type)
    {
        $allowedValues = $this->getLeaveCategoryTypeAllowableValues();
        if (!is_null($leave_category_type) && !in_array($leave_category_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_category_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_category_type'] = $leave_category_type;

        return $this;
    }

    /**
     * Gets leave_accrual_rule
     *
     * @return \Swagger\Client\Model\AuLeaveAccrualRuleModel
     */
    public function getLeaveAccrualRule()
    {
        return $this->container['leave_accrual_rule'];
    }

    /**
     * Sets leave_accrual_rule
     *
     * @param \Swagger\Client\Model\AuLeaveAccrualRuleModel $leave_accrual_rule 
     *
     * @return $this
     */
    public function setLeaveAccrualRule($leave_accrual_rule)
    {
        $this->container['leave_accrual_rule'] = $leave_accrual_rule;

        return $this;
    }

    /**
     * Gets transfer_on_termination_to_pay_category_id
     *
     * @return int
     */
    public function getTransferOnTerminationToPayCategoryId()
    {
        return $this->container['transfer_on_termination_to_pay_category_id'];
    }

    /**
     * Sets transfer_on_termination_to_pay_category_id
     *
     * @param int $transfer_on_termination_to_pay_category_id 
     *
     * @return $this
     */
    public function setTransferOnTerminationToPayCategoryId($transfer_on_termination_to_pay_category_id)
    {
        $this->container['transfer_on_termination_to_pay_category_id'] = $transfer_on_termination_to_pay_category_id;

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
     * Gets units
     *
     * @return double
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param double $units 
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets automatically_accrues
     *
     * @return bool
     */
    public function getAutomaticallyAccrues()
    {
        return $this->container['automatically_accrues'];
    }

    /**
     * Sets automatically_accrues
     *
     * @param bool $automatically_accrues 
     *
     * @return $this
     */
    public function setAutomaticallyAccrues($automatically_accrues)
    {
        $this->container['automatically_accrues'] = $automatically_accrues;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool $is_private 
     *
     * @return $this
     */
    public function setIsPrivate($is_private)
    {
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets exclude_from_termination_payout
     *
     * @return bool
     */
    public function getExcludeFromTerminationPayout()
    {
        return $this->container['exclude_from_termination_payout'];
    }

    /**
     * Sets exclude_from_termination_payout
     *
     * @param bool $exclude_from_termination_payout 
     *
     * @return $this
     */
    public function setExcludeFromTerminationPayout($exclude_from_termination_payout)
    {
        $this->container['exclude_from_termination_payout'] = $exclude_from_termination_payout;

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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source 
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets is_balance_untracked
     *
     * @return bool
     */
    public function getIsBalanceUntracked()
    {
        return $this->container['is_balance_untracked'];
    }

    /**
     * Sets is_balance_untracked
     *
     * @param bool $is_balance_untracked 
     *
     * @return $this
     */
    public function setIsBalanceUntracked($is_balance_untracked)
    {
        $this->container['is_balance_untracked'] = $is_balance_untracked;

        return $this;
    }

    /**
     * Gets deduct_from_primary_pay_category
     *
     * @return bool
     */
    public function getDeductFromPrimaryPayCategory()
    {
        return $this->container['deduct_from_primary_pay_category'];
    }

    /**
     * Sets deduct_from_primary_pay_category
     *
     * @param bool $deduct_from_primary_pay_category 
     *
     * @return $this
     */
    public function setDeductFromPrimaryPayCategory($deduct_from_primary_pay_category)
    {
        $this->container['deduct_from_primary_pay_category'] = $deduct_from_primary_pay_category;

        return $this;
    }

    /**
     * Gets deduct_from_pay_category_id
     *
     * @return int
     */
    public function getDeductFromPayCategoryId()
    {
        return $this->container['deduct_from_pay_category_id'];
    }

    /**
     * Sets deduct_from_pay_category_id
     *
     * @param int $deduct_from_pay_category_id 
     *
     * @return $this
     */
    public function setDeductFromPayCategoryId($deduct_from_pay_category_id)
    {
        $this->container['deduct_from_pay_category_id'] = $deduct_from_pay_category_id;

        return $this;
    }

    /**
     * Gets transfer_to_pay_category_id
     *
     * @return int
     */
    public function getTransferToPayCategoryId()
    {
        return $this->container['transfer_to_pay_category_id'];
    }

    /**
     * Sets transfer_to_pay_category_id
     *
     * @param int $transfer_to_pay_category_id 
     *
     * @return $this
     */
    public function setTransferToPayCategoryId($transfer_to_pay_category_id)
    {
        $this->container['transfer_to_pay_category_id'] = $transfer_to_pay_category_id;

        return $this;
    }

    /**
     * Gets hide_accruals_on_payslip
     *
     * @return bool
     */
    public function getHideAccrualsOnPayslip()
    {
        return $this->container['hide_accruals_on_payslip'];
    }

    /**
     * Sets hide_accruals_on_payslip
     *
     * @param bool $hide_accruals_on_payslip 
     *
     * @return $this
     */
    public function setHideAccrualsOnPayslip($hide_accruals_on_payslip)
    {
        $this->container['hide_accruals_on_payslip'] = $hide_accruals_on_payslip;

        return $this;
    }

    /**
     * Gets use_deduct_from_pay_category_rate
     *
     * @return bool
     */
    public function getUseDeductFromPayCategoryRate()
    {
        return $this->container['use_deduct_from_pay_category_rate'];
    }

    /**
     * Sets use_deduct_from_pay_category_rate
     *
     * @param bool $use_deduct_from_pay_category_rate 
     *
     * @return $this
     */
    public function setUseDeductFromPayCategoryRate($use_deduct_from_pay_category_rate)
    {
        $this->container['use_deduct_from_pay_category_rate'] = $use_deduct_from_pay_category_rate;

        return $this;
    }

    /**
     * Gets is_name_private
     *
     * @return bool
     */
    public function getIsNamePrivate()
    {
        return $this->container['is_name_private'];
    }

    /**
     * Sets is_name_private
     *
     * @param bool $is_name_private 
     *
     * @return $this
     */
    public function setIsNamePrivate($is_name_private)
    {
        $this->container['is_name_private'] = $is_name_private;

        return $this;
    }

    /**
     * Gets leave_unit_type
     *
     * @return string
     */
    public function getLeaveUnitType()
    {
        return $this->container['leave_unit_type'];
    }

    /**
     * Sets leave_unit_type
     *
     * @param string $leave_unit_type 
     *
     * @return $this
     */
    public function setLeaveUnitType($leave_unit_type)
    {
        $allowedValues = $this->getLeaveUnitTypeAllowableValues();
        if (!is_null($leave_unit_type) && !in_array($leave_unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_unit_type'] = $leave_unit_type;

        return $this;
    }

    /**
     * Gets payout_as_etp
     *
     * @return bool
     */
    public function getPayoutAsEtp()
    {
        return $this->container['payout_as_etp'];
    }

    /**
     * Sets payout_as_etp
     *
     * @param bool $payout_as_etp 
     *
     * @return $this
     */
    public function setPayoutAsEtp($payout_as_etp)
    {
        $this->container['payout_as_etp'] = $payout_as_etp;

        return $this;
    }

    /**
     * Gets accrues_first_pay_run_per_period_only
     *
     * @return bool
     */
    public function getAccruesFirstPayRunPerPeriodOnly()
    {
        return $this->container['accrues_first_pay_run_per_period_only'];
    }

    /**
     * Sets accrues_first_pay_run_per_period_only
     *
     * @param bool $accrues_first_pay_run_per_period_only 
     *
     * @return $this
     */
    public function setAccruesFirstPayRunPerPeriodOnly($accrues_first_pay_run_per_period_only)
    {
        $this->container['accrues_first_pay_run_per_period_only'] = $accrues_first_pay_run_per_period_only;

        return $this;
    }

    /**
     * Gets prevent_negative_balance_unpaid_leave_category_id
     *
     * @return int
     */
    public function getPreventNegativeBalanceUnpaidLeaveCategoryId()
    {
        return $this->container['prevent_negative_balance_unpaid_leave_category_id'];
    }

    /**
     * Sets prevent_negative_balance_unpaid_leave_category_id
     *
     * @param int $prevent_negative_balance_unpaid_leave_category_id 
     *
     * @return $this
     */
    public function setPreventNegativeBalanceUnpaidLeaveCategoryId($prevent_negative_balance_unpaid_leave_category_id)
    {
        $this->container['prevent_negative_balance_unpaid_leave_category_id'] = $prevent_negative_balance_unpaid_leave_category_id;

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


