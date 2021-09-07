<?php
/**
 * AuActiveEmployeesModel
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
 * AuActiveEmployeesModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuActiveEmployeesModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuActiveEmployeesModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abn' => 'string',
        'is_stp_enabled' => 'bool',
        'business_id' => 'int',
        'business_name' => 'string',
        'date_created' => '\DateTime',
        'billing_plan' => 'string',
        'realm_id' => 'string',
        'external_id' => 'string',
        'email_addresses' => 'string',
        'user_ids' => 'string',
        'number_of_incomplete_employees' => 'int',
        'number_of_complete_employees' => 'int',
        'number_of_employees_paid' => 'int',
        'number_of_pay_runs' => 'int',
        'date_last_pay_run_finalised' => '\DateTime',
        'date_last_billable_activity' => '\DateTime',
        'active_emps' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abn' => null,
        'is_stp_enabled' => null,
        'business_id' => 'int32',
        'business_name' => null,
        'date_created' => 'date-time',
        'billing_plan' => null,
        'realm_id' => null,
        'external_id' => null,
        'email_addresses' => null,
        'user_ids' => null,
        'number_of_incomplete_employees' => 'int32',
        'number_of_complete_employees' => 'int32',
        'number_of_employees_paid' => 'int32',
        'number_of_pay_runs' => 'int32',
        'date_last_pay_run_finalised' => 'date-time',
        'date_last_billable_activity' => 'date-time',
        'active_emps' => 'int32'
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
        'abn' => 'abn',
        'is_stp_enabled' => 'isStpEnabled',
        'business_id' => 'businessId',
        'business_name' => 'businessName',
        'date_created' => 'dateCreated',
        'billing_plan' => 'billingPlan',
        'realm_id' => 'realmId',
        'external_id' => 'externalId',
        'email_addresses' => 'emailAddresses',
        'user_ids' => 'userIds',
        'number_of_incomplete_employees' => 'numberOfIncompleteEmployees',
        'number_of_complete_employees' => 'numberOfCompleteEmployees',
        'number_of_employees_paid' => 'numberOfEmployeesPaid',
        'number_of_pay_runs' => 'numberOfPayRuns',
        'date_last_pay_run_finalised' => 'dateLastPayRunFinalised',
        'date_last_billable_activity' => 'dateLastBillableActivity',
        'active_emps' => 'activeEmps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abn' => 'setAbn',
        'is_stp_enabled' => 'setIsStpEnabled',
        'business_id' => 'setBusinessId',
        'business_name' => 'setBusinessName',
        'date_created' => 'setDateCreated',
        'billing_plan' => 'setBillingPlan',
        'realm_id' => 'setRealmId',
        'external_id' => 'setExternalId',
        'email_addresses' => 'setEmailAddresses',
        'user_ids' => 'setUserIds',
        'number_of_incomplete_employees' => 'setNumberOfIncompleteEmployees',
        'number_of_complete_employees' => 'setNumberOfCompleteEmployees',
        'number_of_employees_paid' => 'setNumberOfEmployeesPaid',
        'number_of_pay_runs' => 'setNumberOfPayRuns',
        'date_last_pay_run_finalised' => 'setDateLastPayRunFinalised',
        'date_last_billable_activity' => 'setDateLastBillableActivity',
        'active_emps' => 'setActiveEmps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abn' => 'getAbn',
        'is_stp_enabled' => 'getIsStpEnabled',
        'business_id' => 'getBusinessId',
        'business_name' => 'getBusinessName',
        'date_created' => 'getDateCreated',
        'billing_plan' => 'getBillingPlan',
        'realm_id' => 'getRealmId',
        'external_id' => 'getExternalId',
        'email_addresses' => 'getEmailAddresses',
        'user_ids' => 'getUserIds',
        'number_of_incomplete_employees' => 'getNumberOfIncompleteEmployees',
        'number_of_complete_employees' => 'getNumberOfCompleteEmployees',
        'number_of_employees_paid' => 'getNumberOfEmployeesPaid',
        'number_of_pay_runs' => 'getNumberOfPayRuns',
        'date_last_pay_run_finalised' => 'getDateLastPayRunFinalised',
        'date_last_billable_activity' => 'getDateLastBillableActivity',
        'active_emps' => 'getActiveEmps'
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
        $this->container['abn'] = isset($data['abn']) ? $data['abn'] : null;
        $this->container['is_stp_enabled'] = isset($data['is_stp_enabled']) ? $data['is_stp_enabled'] : null;
        $this->container['business_id'] = isset($data['business_id']) ? $data['business_id'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['billing_plan'] = isset($data['billing_plan']) ? $data['billing_plan'] : null;
        $this->container['realm_id'] = isset($data['realm_id']) ? $data['realm_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['user_ids'] = isset($data['user_ids']) ? $data['user_ids'] : null;
        $this->container['number_of_incomplete_employees'] = isset($data['number_of_incomplete_employees']) ? $data['number_of_incomplete_employees'] : null;
        $this->container['number_of_complete_employees'] = isset($data['number_of_complete_employees']) ? $data['number_of_complete_employees'] : null;
        $this->container['number_of_employees_paid'] = isset($data['number_of_employees_paid']) ? $data['number_of_employees_paid'] : null;
        $this->container['number_of_pay_runs'] = isset($data['number_of_pay_runs']) ? $data['number_of_pay_runs'] : null;
        $this->container['date_last_pay_run_finalised'] = isset($data['date_last_pay_run_finalised']) ? $data['date_last_pay_run_finalised'] : null;
        $this->container['date_last_billable_activity'] = isset($data['date_last_billable_activity']) ? $data['date_last_billable_activity'] : null;
        $this->container['active_emps'] = isset($data['active_emps']) ? $data['active_emps'] : null;
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
     * Gets abn
     *
     * @return string
     */
    public function getAbn()
    {
        return $this->container['abn'];
    }

    /**
     * Sets abn
     *
     * @param string $abn 
     *
     * @return $this
     */
    public function setAbn($abn)
    {
        $this->container['abn'] = $abn;

        return $this;
    }

    /**
     * Gets is_stp_enabled
     *
     * @return bool
     */
    public function getIsStpEnabled()
    {
        return $this->container['is_stp_enabled'];
    }

    /**
     * Sets is_stp_enabled
     *
     * @param bool $is_stp_enabled 
     *
     * @return $this
     */
    public function setIsStpEnabled($is_stp_enabled)
    {
        $this->container['is_stp_enabled'] = $is_stp_enabled;

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
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created 
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets billing_plan
     *
     * @return string
     */
    public function getBillingPlan()
    {
        return $this->container['billing_plan'];
    }

    /**
     * Sets billing_plan
     *
     * @param string $billing_plan 
     *
     * @return $this
     */
    public function setBillingPlan($billing_plan)
    {
        $this->container['billing_plan'] = $billing_plan;

        return $this;
    }

    /**
     * Gets realm_id
     *
     * @return string
     */
    public function getRealmId()
    {
        return $this->container['realm_id'];
    }

    /**
     * Sets realm_id
     *
     * @param string $realm_id 
     *
     * @return $this
     */
    public function setRealmId($realm_id)
    {
        $this->container['realm_id'] = $realm_id;

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
     * Gets email_addresses
     *
     * @return string
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param string $email_addresses 
     *
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string $user_ids 
     *
     * @return $this
     */
    public function setUserIds($user_ids)
    {
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets number_of_incomplete_employees
     *
     * @return int
     */
    public function getNumberOfIncompleteEmployees()
    {
        return $this->container['number_of_incomplete_employees'];
    }

    /**
     * Sets number_of_incomplete_employees
     *
     * @param int $number_of_incomplete_employees 
     *
     * @return $this
     */
    public function setNumberOfIncompleteEmployees($number_of_incomplete_employees)
    {
        $this->container['number_of_incomplete_employees'] = $number_of_incomplete_employees;

        return $this;
    }

    /**
     * Gets number_of_complete_employees
     *
     * @return int
     */
    public function getNumberOfCompleteEmployees()
    {
        return $this->container['number_of_complete_employees'];
    }

    /**
     * Sets number_of_complete_employees
     *
     * @param int $number_of_complete_employees 
     *
     * @return $this
     */
    public function setNumberOfCompleteEmployees($number_of_complete_employees)
    {
        $this->container['number_of_complete_employees'] = $number_of_complete_employees;

        return $this;
    }

    /**
     * Gets number_of_employees_paid
     *
     * @return int
     */
    public function getNumberOfEmployeesPaid()
    {
        return $this->container['number_of_employees_paid'];
    }

    /**
     * Sets number_of_employees_paid
     *
     * @param int $number_of_employees_paid 
     *
     * @return $this
     */
    public function setNumberOfEmployeesPaid($number_of_employees_paid)
    {
        $this->container['number_of_employees_paid'] = $number_of_employees_paid;

        return $this;
    }

    /**
     * Gets number_of_pay_runs
     *
     * @return int
     */
    public function getNumberOfPayRuns()
    {
        return $this->container['number_of_pay_runs'];
    }

    /**
     * Sets number_of_pay_runs
     *
     * @param int $number_of_pay_runs 
     *
     * @return $this
     */
    public function setNumberOfPayRuns($number_of_pay_runs)
    {
        $this->container['number_of_pay_runs'] = $number_of_pay_runs;

        return $this;
    }

    /**
     * Gets date_last_pay_run_finalised
     *
     * @return \DateTime
     */
    public function getDateLastPayRunFinalised()
    {
        return $this->container['date_last_pay_run_finalised'];
    }

    /**
     * Sets date_last_pay_run_finalised
     *
     * @param \DateTime $date_last_pay_run_finalised 
     *
     * @return $this
     */
    public function setDateLastPayRunFinalised($date_last_pay_run_finalised)
    {
        $this->container['date_last_pay_run_finalised'] = $date_last_pay_run_finalised;

        return $this;
    }

    /**
     * Gets date_last_billable_activity
     *
     * @return \DateTime
     */
    public function getDateLastBillableActivity()
    {
        return $this->container['date_last_billable_activity'];
    }

    /**
     * Sets date_last_billable_activity
     *
     * @param \DateTime $date_last_billable_activity 
     *
     * @return $this
     */
    public function setDateLastBillableActivity($date_last_billable_activity)
    {
        $this->container['date_last_billable_activity'] = $date_last_billable_activity;

        return $this;
    }

    /**
     * Gets active_emps
     *
     * @return int
     */
    public function getActiveEmps()
    {
        return $this->container['active_emps'];
    }

    /**
     * Sets active_emps
     *
     * @param int $active_emps 
     *
     * @return $this
     */
    public function setActiveEmps($active_emps)
    {
        $this->container['active_emps'] = $active_emps;

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

