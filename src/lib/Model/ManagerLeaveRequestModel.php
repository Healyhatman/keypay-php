<?php
/**
 * ManagerLeaveRequestModel
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
 * ManagerLeaveRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagerLeaveRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ManagerLeaveRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employee_id' => 'int',
        'employee_name' => 'string',
        'in_progress' => 'bool',
        'termination_date' => '\DateTime',
        'can_approve' => 'bool',
        'accrued_balance' => 'double',
        'exceeds_balance' => 'bool',
        'is_leave_based_roster_shift' => 'bool',
        'total_hours' => 'double',
        'leave_category_id' => 'int',
        'work_type_id' => 'int',
        'work_type_name' => 'string',
        'is_approved' => 'bool',
        'is_declined' => 'bool',
        'is_cancelled' => 'bool',
        'is_pending' => 'bool',
        'id' => 'int',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'requested_date' => '\DateTime',
        'leave_category_name' => 'string',
        'hours_per_day' => 'double',
        'total_units' => 'double',
        'notes' => 'string',
        'total_days' => 'double',
        'amount' => 'string',
        'status' => 'string',
        'status_update_notes' => 'string',
        'can_cancel' => 'bool',
        'can_modify' => 'bool',
        'require_notes_for_leave_requests' => 'bool',
        'attachment' => '\Swagger\Client\Model\AttachmentModel',
        'unit_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employee_id' => 'int32',
        'employee_name' => null,
        'in_progress' => null,
        'termination_date' => 'date-time',
        'can_approve' => null,
        'accrued_balance' => 'double',
        'exceeds_balance' => null,
        'is_leave_based_roster_shift' => null,
        'total_hours' => 'double',
        'leave_category_id' => 'int32',
        'work_type_id' => 'int32',
        'work_type_name' => null,
        'is_approved' => null,
        'is_declined' => null,
        'is_cancelled' => null,
        'is_pending' => null,
        'id' => 'int32',
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'requested_date' => 'date-time',
        'leave_category_name' => null,
        'hours_per_day' => 'double',
        'total_units' => 'double',
        'notes' => null,
        'total_days' => 'double',
        'amount' => null,
        'status' => null,
        'status_update_notes' => null,
        'can_cancel' => null,
        'can_modify' => null,
        'require_notes_for_leave_requests' => null,
        'attachment' => null,
        'unit_type' => null
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
        'employee_id' => 'employeeId',
        'employee_name' => 'employeeName',
        'in_progress' => 'inProgress',
        'termination_date' => 'terminationDate',
        'can_approve' => 'canApprove',
        'accrued_balance' => 'accruedBalance',
        'exceeds_balance' => 'exceedsBalance',
        'is_leave_based_roster_shift' => 'isLeaveBasedRosterShift',
        'total_hours' => 'totalHours',
        'leave_category_id' => 'leaveCategoryId',
        'work_type_id' => 'workTypeId',
        'work_type_name' => 'workTypeName',
        'is_approved' => 'isApproved',
        'is_declined' => 'isDeclined',
        'is_cancelled' => 'isCancelled',
        'is_pending' => 'isPending',
        'id' => 'id',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'requested_date' => 'requestedDate',
        'leave_category_name' => 'leaveCategoryName',
        'hours_per_day' => 'hoursPerDay',
        'total_units' => 'totalUnits',
        'notes' => 'notes',
        'total_days' => 'totalDays',
        'amount' => 'amount',
        'status' => 'status',
        'status_update_notes' => 'statusUpdateNotes',
        'can_cancel' => 'canCancel',
        'can_modify' => 'canModify',
        'require_notes_for_leave_requests' => 'requireNotesForLeaveRequests',
        'attachment' => 'attachment',
        'unit_type' => 'unitType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'employee_name' => 'setEmployeeName',
        'in_progress' => 'setInProgress',
        'termination_date' => 'setTerminationDate',
        'can_approve' => 'setCanApprove',
        'accrued_balance' => 'setAccruedBalance',
        'exceeds_balance' => 'setExceedsBalance',
        'is_leave_based_roster_shift' => 'setIsLeaveBasedRosterShift',
        'total_hours' => 'setTotalHours',
        'leave_category_id' => 'setLeaveCategoryId',
        'work_type_id' => 'setWorkTypeId',
        'work_type_name' => 'setWorkTypeName',
        'is_approved' => 'setIsApproved',
        'is_declined' => 'setIsDeclined',
        'is_cancelled' => 'setIsCancelled',
        'is_pending' => 'setIsPending',
        'id' => 'setId',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'requested_date' => 'setRequestedDate',
        'leave_category_name' => 'setLeaveCategoryName',
        'hours_per_day' => 'setHoursPerDay',
        'total_units' => 'setTotalUnits',
        'notes' => 'setNotes',
        'total_days' => 'setTotalDays',
        'amount' => 'setAmount',
        'status' => 'setStatus',
        'status_update_notes' => 'setStatusUpdateNotes',
        'can_cancel' => 'setCanCancel',
        'can_modify' => 'setCanModify',
        'require_notes_for_leave_requests' => 'setRequireNotesForLeaveRequests',
        'attachment' => 'setAttachment',
        'unit_type' => 'setUnitType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'employee_name' => 'getEmployeeName',
        'in_progress' => 'getInProgress',
        'termination_date' => 'getTerminationDate',
        'can_approve' => 'getCanApprove',
        'accrued_balance' => 'getAccruedBalance',
        'exceeds_balance' => 'getExceedsBalance',
        'is_leave_based_roster_shift' => 'getIsLeaveBasedRosterShift',
        'total_hours' => 'getTotalHours',
        'leave_category_id' => 'getLeaveCategoryId',
        'work_type_id' => 'getWorkTypeId',
        'work_type_name' => 'getWorkTypeName',
        'is_approved' => 'getIsApproved',
        'is_declined' => 'getIsDeclined',
        'is_cancelled' => 'getIsCancelled',
        'is_pending' => 'getIsPending',
        'id' => 'getId',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'requested_date' => 'getRequestedDate',
        'leave_category_name' => 'getLeaveCategoryName',
        'hours_per_day' => 'getHoursPerDay',
        'total_units' => 'getTotalUnits',
        'notes' => 'getNotes',
        'total_days' => 'getTotalDays',
        'amount' => 'getAmount',
        'status' => 'getStatus',
        'status_update_notes' => 'getStatusUpdateNotes',
        'can_cancel' => 'getCanCancel',
        'can_modify' => 'getCanModify',
        'require_notes_for_leave_requests' => 'getRequireNotesForLeaveRequests',
        'attachment' => 'getAttachment',
        'unit_type' => 'getUnitType'
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

    const UNIT_TYPE_HOURS = 'Hours';
    const UNIT_TYPE_DAYS = 'Days';
    const UNIT_TYPE_WEEKS = 'Weeks';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_HOURS,
            self::UNIT_TYPE_DAYS,
            self::UNIT_TYPE_WEEKS,
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employee_name'] = isset($data['employee_name']) ? $data['employee_name'] : null;
        $this->container['in_progress'] = isset($data['in_progress']) ? $data['in_progress'] : null;
        $this->container['termination_date'] = isset($data['termination_date']) ? $data['termination_date'] : null;
        $this->container['can_approve'] = isset($data['can_approve']) ? $data['can_approve'] : null;
        $this->container['accrued_balance'] = isset($data['accrued_balance']) ? $data['accrued_balance'] : null;
        $this->container['exceeds_balance'] = isset($data['exceeds_balance']) ? $data['exceeds_balance'] : null;
        $this->container['is_leave_based_roster_shift'] = isset($data['is_leave_based_roster_shift']) ? $data['is_leave_based_roster_shift'] : null;
        $this->container['total_hours'] = isset($data['total_hours']) ? $data['total_hours'] : null;
        $this->container['leave_category_id'] = isset($data['leave_category_id']) ? $data['leave_category_id'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['work_type_name'] = isset($data['work_type_name']) ? $data['work_type_name'] : null;
        $this->container['is_approved'] = isset($data['is_approved']) ? $data['is_approved'] : null;
        $this->container['is_declined'] = isset($data['is_declined']) ? $data['is_declined'] : null;
        $this->container['is_cancelled'] = isset($data['is_cancelled']) ? $data['is_cancelled'] : null;
        $this->container['is_pending'] = isset($data['is_pending']) ? $data['is_pending'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['requested_date'] = isset($data['requested_date']) ? $data['requested_date'] : null;
        $this->container['leave_category_name'] = isset($data['leave_category_name']) ? $data['leave_category_name'] : null;
        $this->container['hours_per_day'] = isset($data['hours_per_day']) ? $data['hours_per_day'] : null;
        $this->container['total_units'] = isset($data['total_units']) ? $data['total_units'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['total_days'] = isset($data['total_days']) ? $data['total_days'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_update_notes'] = isset($data['status_update_notes']) ? $data['status_update_notes'] : null;
        $this->container['can_cancel'] = isset($data['can_cancel']) ? $data['can_cancel'] : null;
        $this->container['can_modify'] = isset($data['can_modify']) ? $data['can_modify'] : null;
        $this->container['require_notes_for_leave_requests'] = isset($data['require_notes_for_leave_requests']) ? $data['require_notes_for_leave_requests'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
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
     * Gets employee_name
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string $employee_name 
     *
     * @return $this
     */
    public function setEmployeeName($employee_name)
    {
        $this->container['employee_name'] = $employee_name;

        return $this;
    }

    /**
     * Gets in_progress
     *
     * @return bool
     */
    public function getInProgress()
    {
        return $this->container['in_progress'];
    }

    /**
     * Sets in_progress
     *
     * @param bool $in_progress 
     *
     * @return $this
     */
    public function setInProgress($in_progress)
    {
        $this->container['in_progress'] = $in_progress;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime $termination_date 
     *
     * @return $this
     */
    public function setTerminationDate($termination_date)
    {
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets can_approve
     *
     * @return bool
     */
    public function getCanApprove()
    {
        return $this->container['can_approve'];
    }

    /**
     * Sets can_approve
     *
     * @param bool $can_approve 
     *
     * @return $this
     */
    public function setCanApprove($can_approve)
    {
        $this->container['can_approve'] = $can_approve;

        return $this;
    }

    /**
     * Gets accrued_balance
     *
     * @return double
     */
    public function getAccruedBalance()
    {
        return $this->container['accrued_balance'];
    }

    /**
     * Sets accrued_balance
     *
     * @param double $accrued_balance 
     *
     * @return $this
     */
    public function setAccruedBalance($accrued_balance)
    {
        $this->container['accrued_balance'] = $accrued_balance;

        return $this;
    }

    /**
     * Gets exceeds_balance
     *
     * @return bool
     */
    public function getExceedsBalance()
    {
        return $this->container['exceeds_balance'];
    }

    /**
     * Sets exceeds_balance
     *
     * @param bool $exceeds_balance 
     *
     * @return $this
     */
    public function setExceedsBalance($exceeds_balance)
    {
        $this->container['exceeds_balance'] = $exceeds_balance;

        return $this;
    }

    /**
     * Gets is_leave_based_roster_shift
     *
     * @return bool
     */
    public function getIsLeaveBasedRosterShift()
    {
        return $this->container['is_leave_based_roster_shift'];
    }

    /**
     * Sets is_leave_based_roster_shift
     *
     * @param bool $is_leave_based_roster_shift 
     *
     * @return $this
     */
    public function setIsLeaveBasedRosterShift($is_leave_based_roster_shift)
    {
        $this->container['is_leave_based_roster_shift'] = $is_leave_based_roster_shift;

        return $this;
    }

    /**
     * Gets total_hours
     *
     * @return double
     */
    public function getTotalHours()
    {
        return $this->container['total_hours'];
    }

    /**
     * Sets total_hours
     *
     * @param double $total_hours 
     *
     * @return $this
     */
    public function setTotalHours($total_hours)
    {
        $this->container['total_hours'] = $total_hours;

        return $this;
    }

    /**
     * Gets leave_category_id
     *
     * @return int
     */
    public function getLeaveCategoryId()
    {
        return $this->container['leave_category_id'];
    }

    /**
     * Sets leave_category_id
     *
     * @param int $leave_category_id 
     *
     * @return $this
     */
    public function setLeaveCategoryId($leave_category_id)
    {
        $this->container['leave_category_id'] = $leave_category_id;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int $work_type_id 
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets work_type_name
     *
     * @return string
     */
    public function getWorkTypeName()
    {
        return $this->container['work_type_name'];
    }

    /**
     * Sets work_type_name
     *
     * @param string $work_type_name 
     *
     * @return $this
     */
    public function setWorkTypeName($work_type_name)
    {
        $this->container['work_type_name'] = $work_type_name;

        return $this;
    }

    /**
     * Gets is_approved
     *
     * @return bool
     */
    public function getIsApproved()
    {
        return $this->container['is_approved'];
    }

    /**
     * Sets is_approved
     *
     * @param bool $is_approved 
     *
     * @return $this
     */
    public function setIsApproved($is_approved)
    {
        $this->container['is_approved'] = $is_approved;

        return $this;
    }

    /**
     * Gets is_declined
     *
     * @return bool
     */
    public function getIsDeclined()
    {
        return $this->container['is_declined'];
    }

    /**
     * Sets is_declined
     *
     * @param bool $is_declined 
     *
     * @return $this
     */
    public function setIsDeclined($is_declined)
    {
        $this->container['is_declined'] = $is_declined;

        return $this;
    }

    /**
     * Gets is_cancelled
     *
     * @return bool
     */
    public function getIsCancelled()
    {
        return $this->container['is_cancelled'];
    }

    /**
     * Sets is_cancelled
     *
     * @param bool $is_cancelled 
     *
     * @return $this
     */
    public function setIsCancelled($is_cancelled)
    {
        $this->container['is_cancelled'] = $is_cancelled;

        return $this;
    }

    /**
     * Gets is_pending
     *
     * @return bool
     */
    public function getIsPending()
    {
        return $this->container['is_pending'];
    }

    /**
     * Sets is_pending
     *
     * @param bool $is_pending 
     *
     * @return $this
     */
    public function setIsPending($is_pending)
    {
        $this->container['is_pending'] = $is_pending;

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
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date 
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets requested_date
     *
     * @return \DateTime
     */
    public function getRequestedDate()
    {
        return $this->container['requested_date'];
    }

    /**
     * Sets requested_date
     *
     * @param \DateTime $requested_date 
     *
     * @return $this
     */
    public function setRequestedDate($requested_date)
    {
        $this->container['requested_date'] = $requested_date;

        return $this;
    }

    /**
     * Gets leave_category_name
     *
     * @return string
     */
    public function getLeaveCategoryName()
    {
        return $this->container['leave_category_name'];
    }

    /**
     * Sets leave_category_name
     *
     * @param string $leave_category_name 
     *
     * @return $this
     */
    public function setLeaveCategoryName($leave_category_name)
    {
        $this->container['leave_category_name'] = $leave_category_name;

        return $this;
    }

    /**
     * Gets hours_per_day
     *
     * @return double
     */
    public function getHoursPerDay()
    {
        return $this->container['hours_per_day'];
    }

    /**
     * Sets hours_per_day
     *
     * @param double $hours_per_day 
     *
     * @return $this
     */
    public function setHoursPerDay($hours_per_day)
    {
        $this->container['hours_per_day'] = $hours_per_day;

        return $this;
    }

    /**
     * Gets total_units
     *
     * @return double
     */
    public function getTotalUnits()
    {
        return $this->container['total_units'];
    }

    /**
     * Sets total_units
     *
     * @param double $total_units 
     *
     * @return $this
     */
    public function setTotalUnits($total_units)
    {
        $this->container['total_units'] = $total_units;

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
     * Gets total_days
     *
     * @return double
     */
    public function getTotalDays()
    {
        return $this->container['total_days'];
    }

    /**
     * Sets total_days
     *
     * @param double $total_days 
     *
     * @return $this
     */
    public function setTotalDays($total_days)
    {
        $this->container['total_days'] = $total_days;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_update_notes
     *
     * @return string
     */
    public function getStatusUpdateNotes()
    {
        return $this->container['status_update_notes'];
    }

    /**
     * Sets status_update_notes
     *
     * @param string $status_update_notes 
     *
     * @return $this
     */
    public function setStatusUpdateNotes($status_update_notes)
    {
        $this->container['status_update_notes'] = $status_update_notes;

        return $this;
    }

    /**
     * Gets can_cancel
     *
     * @return bool
     */
    public function getCanCancel()
    {
        return $this->container['can_cancel'];
    }

    /**
     * Sets can_cancel
     *
     * @param bool $can_cancel 
     *
     * @return $this
     */
    public function setCanCancel($can_cancel)
    {
        $this->container['can_cancel'] = $can_cancel;

        return $this;
    }

    /**
     * Gets can_modify
     *
     * @return bool
     */
    public function getCanModify()
    {
        return $this->container['can_modify'];
    }

    /**
     * Sets can_modify
     *
     * @param bool $can_modify 
     *
     * @return $this
     */
    public function setCanModify($can_modify)
    {
        $this->container['can_modify'] = $can_modify;

        return $this;
    }

    /**
     * Gets require_notes_for_leave_requests
     *
     * @return bool
     */
    public function getRequireNotesForLeaveRequests()
    {
        return $this->container['require_notes_for_leave_requests'];
    }

    /**
     * Sets require_notes_for_leave_requests
     *
     * @param bool $require_notes_for_leave_requests 
     *
     * @return $this
     */
    public function setRequireNotesForLeaveRequests($require_notes_for_leave_requests)
    {
        $this->container['require_notes_for_leave_requests'] = $require_notes_for_leave_requests;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \Swagger\Client\Model\AttachmentModel
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Swagger\Client\Model\AttachmentModel $attachment 
     *
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

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


