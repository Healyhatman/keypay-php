<?php
/**
 * AuDashboardModel
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
 * AuDashboardModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuDashboardModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuDashboardModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'features' => '\Swagger\Client\Model\AuFeaturesModel',
        'next_shift' => '\Swagger\Client\Model\AuEssRosterShiftModel',
        'latest_payslip' => '\Swagger\Client\Model\EssPayslipModel',
        'leave_balances' => '\Swagger\Client\Model\LeaveBalanceModel[]',
        'titles' => '\Swagger\Client\Model\TitleViewModel[]',
        'work_types' => '\Swagger\Client\Model\EssWorkTypeModel[]',
        'shift_conditions' => '\Swagger\Client\Model\EssWorkTypeModel[]',
        'locations' => '\Swagger\Client\Model\LocationModel[]',
        'classifications' => '\Swagger\Client\Model\ClassificationSelectModel[]',
        'leave_categories' => '\Swagger\Client\Model\EssLeaveCategoryModel[]',
        'current_week_satisfaction_survey' => '\Swagger\Client\Model\EssSatisfactionSurvey',
        'timesheets' => '\Swagger\Client\Model\EssCurrentTimesheetsModel',
        'timesheet_entry_period_end' => '\DateTime',
        'expense_categories' => '\Swagger\Client\Model\ExpenseCategoryResponseModel[]',
        'tax_codes' => '\Swagger\Client\Model\JournalServiceTaxCode[]',
        'expenses' => '\Swagger\Client\Model\EssCurrentExpensesModel',
        'pending_shift_count' => 'int',
        'proposed_swap_count' => 'int',
        'current_shift' => '\Swagger\Client\Model\EssCurrentShiftModel',
        'documents_requiring_acknowledgement_count' => 'int',
        'region' => 'string',
        'biddable_shift_count' => 'int',
        'is_terminated' => 'bool',
        'google_maps_api_key' => 'string',
        'start_date' => '\DateTime',
        'standard_hours' => '\Swagger\Client\Model\StandardHoursModel',
        'not_accepted_shifts_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'features' => null,
        'next_shift' => null,
        'latest_payslip' => null,
        'leave_balances' => null,
        'titles' => null,
        'work_types' => null,
        'shift_conditions' => null,
        'locations' => null,
        'classifications' => null,
        'leave_categories' => null,
        'current_week_satisfaction_survey' => null,
        'timesheets' => null,
        'timesheet_entry_period_end' => 'date-time',
        'expense_categories' => null,
        'tax_codes' => null,
        'expenses' => null,
        'pending_shift_count' => 'int32',
        'proposed_swap_count' => 'int32',
        'current_shift' => null,
        'documents_requiring_acknowledgement_count' => 'int32',
        'region' => null,
        'biddable_shift_count' => 'int32',
        'is_terminated' => null,
        'google_maps_api_key' => null,
        'start_date' => 'date-time',
        'standard_hours' => null,
        'not_accepted_shifts_count' => 'int32'
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
        'features' => 'features',
        'next_shift' => 'nextShift',
        'latest_payslip' => 'latestPayslip',
        'leave_balances' => 'leaveBalances',
        'titles' => 'titles',
        'work_types' => 'workTypes',
        'shift_conditions' => 'shiftConditions',
        'locations' => 'locations',
        'classifications' => 'classifications',
        'leave_categories' => 'leaveCategories',
        'current_week_satisfaction_survey' => 'currentWeekSatisfactionSurvey',
        'timesheets' => 'timesheets',
        'timesheet_entry_period_end' => 'timesheetEntryPeriodEnd',
        'expense_categories' => 'expenseCategories',
        'tax_codes' => 'taxCodes',
        'expenses' => 'expenses',
        'pending_shift_count' => 'pendingShiftCount',
        'proposed_swap_count' => 'proposedSwapCount',
        'current_shift' => 'currentShift',
        'documents_requiring_acknowledgement_count' => 'documentsRequiringAcknowledgementCount',
        'region' => 'region',
        'biddable_shift_count' => 'biddableShiftCount',
        'is_terminated' => 'isTerminated',
        'google_maps_api_key' => 'googleMapsApiKey',
        'start_date' => 'startDate',
        'standard_hours' => 'standardHours',
        'not_accepted_shifts_count' => 'notAcceptedShiftsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'features' => 'setFeatures',
        'next_shift' => 'setNextShift',
        'latest_payslip' => 'setLatestPayslip',
        'leave_balances' => 'setLeaveBalances',
        'titles' => 'setTitles',
        'work_types' => 'setWorkTypes',
        'shift_conditions' => 'setShiftConditions',
        'locations' => 'setLocations',
        'classifications' => 'setClassifications',
        'leave_categories' => 'setLeaveCategories',
        'current_week_satisfaction_survey' => 'setCurrentWeekSatisfactionSurvey',
        'timesheets' => 'setTimesheets',
        'timesheet_entry_period_end' => 'setTimesheetEntryPeriodEnd',
        'expense_categories' => 'setExpenseCategories',
        'tax_codes' => 'setTaxCodes',
        'expenses' => 'setExpenses',
        'pending_shift_count' => 'setPendingShiftCount',
        'proposed_swap_count' => 'setProposedSwapCount',
        'current_shift' => 'setCurrentShift',
        'documents_requiring_acknowledgement_count' => 'setDocumentsRequiringAcknowledgementCount',
        'region' => 'setRegion',
        'biddable_shift_count' => 'setBiddableShiftCount',
        'is_terminated' => 'setIsTerminated',
        'google_maps_api_key' => 'setGoogleMapsApiKey',
        'start_date' => 'setStartDate',
        'standard_hours' => 'setStandardHours',
        'not_accepted_shifts_count' => 'setNotAcceptedShiftsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'features' => 'getFeatures',
        'next_shift' => 'getNextShift',
        'latest_payslip' => 'getLatestPayslip',
        'leave_balances' => 'getLeaveBalances',
        'titles' => 'getTitles',
        'work_types' => 'getWorkTypes',
        'shift_conditions' => 'getShiftConditions',
        'locations' => 'getLocations',
        'classifications' => 'getClassifications',
        'leave_categories' => 'getLeaveCategories',
        'current_week_satisfaction_survey' => 'getCurrentWeekSatisfactionSurvey',
        'timesheets' => 'getTimesheets',
        'timesheet_entry_period_end' => 'getTimesheetEntryPeriodEnd',
        'expense_categories' => 'getExpenseCategories',
        'tax_codes' => 'getTaxCodes',
        'expenses' => 'getExpenses',
        'pending_shift_count' => 'getPendingShiftCount',
        'proposed_swap_count' => 'getProposedSwapCount',
        'current_shift' => 'getCurrentShift',
        'documents_requiring_acknowledgement_count' => 'getDocumentsRequiringAcknowledgementCount',
        'region' => 'getRegion',
        'biddable_shift_count' => 'getBiddableShiftCount',
        'is_terminated' => 'getIsTerminated',
        'google_maps_api_key' => 'getGoogleMapsApiKey',
        'start_date' => 'getStartDate',
        'standard_hours' => 'getStandardHours',
        'not_accepted_shifts_count' => 'getNotAcceptedShiftsCount'
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
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['next_shift'] = isset($data['next_shift']) ? $data['next_shift'] : null;
        $this->container['latest_payslip'] = isset($data['latest_payslip']) ? $data['latest_payslip'] : null;
        $this->container['leave_balances'] = isset($data['leave_balances']) ? $data['leave_balances'] : null;
        $this->container['titles'] = isset($data['titles']) ? $data['titles'] : null;
        $this->container['work_types'] = isset($data['work_types']) ? $data['work_types'] : null;
        $this->container['shift_conditions'] = isset($data['shift_conditions']) ? $data['shift_conditions'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['leave_categories'] = isset($data['leave_categories']) ? $data['leave_categories'] : null;
        $this->container['current_week_satisfaction_survey'] = isset($data['current_week_satisfaction_survey']) ? $data['current_week_satisfaction_survey'] : null;
        $this->container['timesheets'] = isset($data['timesheets']) ? $data['timesheets'] : null;
        $this->container['timesheet_entry_period_end'] = isset($data['timesheet_entry_period_end']) ? $data['timesheet_entry_period_end'] : null;
        $this->container['expense_categories'] = isset($data['expense_categories']) ? $data['expense_categories'] : null;
        $this->container['tax_codes'] = isset($data['tax_codes']) ? $data['tax_codes'] : null;
        $this->container['expenses'] = isset($data['expenses']) ? $data['expenses'] : null;
        $this->container['pending_shift_count'] = isset($data['pending_shift_count']) ? $data['pending_shift_count'] : null;
        $this->container['proposed_swap_count'] = isset($data['proposed_swap_count']) ? $data['proposed_swap_count'] : null;
        $this->container['current_shift'] = isset($data['current_shift']) ? $data['current_shift'] : null;
        $this->container['documents_requiring_acknowledgement_count'] = isset($data['documents_requiring_acknowledgement_count']) ? $data['documents_requiring_acknowledgement_count'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['biddable_shift_count'] = isset($data['biddable_shift_count']) ? $data['biddable_shift_count'] : null;
        $this->container['is_terminated'] = isset($data['is_terminated']) ? $data['is_terminated'] : null;
        $this->container['google_maps_api_key'] = isset($data['google_maps_api_key']) ? $data['google_maps_api_key'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['standard_hours'] = isset($data['standard_hours']) ? $data['standard_hours'] : null;
        $this->container['not_accepted_shifts_count'] = isset($data['not_accepted_shifts_count']) ? $data['not_accepted_shifts_count'] : null;
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
     * Gets features
     *
     * @return \Swagger\Client\Model\AuFeaturesModel
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Swagger\Client\Model\AuFeaturesModel $features 
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets next_shift
     *
     * @return \Swagger\Client\Model\AuEssRosterShiftModel
     */
    public function getNextShift()
    {
        return $this->container['next_shift'];
    }

    /**
     * Sets next_shift
     *
     * @param \Swagger\Client\Model\AuEssRosterShiftModel $next_shift 
     *
     * @return $this
     */
    public function setNextShift($next_shift)
    {
        $this->container['next_shift'] = $next_shift;

        return $this;
    }

    /**
     * Gets latest_payslip
     *
     * @return \Swagger\Client\Model\EssPayslipModel
     */
    public function getLatestPayslip()
    {
        return $this->container['latest_payslip'];
    }

    /**
     * Sets latest_payslip
     *
     * @param \Swagger\Client\Model\EssPayslipModel $latest_payslip 
     *
     * @return $this
     */
    public function setLatestPayslip($latest_payslip)
    {
        $this->container['latest_payslip'] = $latest_payslip;

        return $this;
    }

    /**
     * Gets leave_balances
     *
     * @return \Swagger\Client\Model\LeaveBalanceModel[]
     */
    public function getLeaveBalances()
    {
        return $this->container['leave_balances'];
    }

    /**
     * Sets leave_balances
     *
     * @param \Swagger\Client\Model\LeaveBalanceModel[] $leave_balances 
     *
     * @return $this
     */
    public function setLeaveBalances($leave_balances)
    {
        $this->container['leave_balances'] = $leave_balances;

        return $this;
    }

    /**
     * Gets titles
     *
     * @return \Swagger\Client\Model\TitleViewModel[]
     */
    public function getTitles()
    {
        return $this->container['titles'];
    }

    /**
     * Sets titles
     *
     * @param \Swagger\Client\Model\TitleViewModel[] $titles 
     *
     * @return $this
     */
    public function setTitles($titles)
    {
        $this->container['titles'] = $titles;

        return $this;
    }

    /**
     * Gets work_types
     *
     * @return \Swagger\Client\Model\EssWorkTypeModel[]
     */
    public function getWorkTypes()
    {
        return $this->container['work_types'];
    }

    /**
     * Sets work_types
     *
     * @param \Swagger\Client\Model\EssWorkTypeModel[] $work_types 
     *
     * @return $this
     */
    public function setWorkTypes($work_types)
    {
        $this->container['work_types'] = $work_types;

        return $this;
    }

    /**
     * Gets shift_conditions
     *
     * @return \Swagger\Client\Model\EssWorkTypeModel[]
     */
    public function getShiftConditions()
    {
        return $this->container['shift_conditions'];
    }

    /**
     * Sets shift_conditions
     *
     * @param \Swagger\Client\Model\EssWorkTypeModel[] $shift_conditions 
     *
     * @return $this
     */
    public function setShiftConditions($shift_conditions)
    {
        $this->container['shift_conditions'] = $shift_conditions;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Swagger\Client\Model\LocationModel[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Swagger\Client\Model\LocationModel[] $locations 
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets classifications
     *
     * @return \Swagger\Client\Model\ClassificationSelectModel[]
     */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
     * Sets classifications
     *
     * @param \Swagger\Client\Model\ClassificationSelectModel[] $classifications 
     *
     * @return $this
     */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;

        return $this;
    }

    /**
     * Gets leave_categories
     *
     * @return \Swagger\Client\Model\EssLeaveCategoryModel[]
     */
    public function getLeaveCategories()
    {
        return $this->container['leave_categories'];
    }

    /**
     * Sets leave_categories
     *
     * @param \Swagger\Client\Model\EssLeaveCategoryModel[] $leave_categories 
     *
     * @return $this
     */
    public function setLeaveCategories($leave_categories)
    {
        $this->container['leave_categories'] = $leave_categories;

        return $this;
    }

    /**
     * Gets current_week_satisfaction_survey
     *
     * @return \Swagger\Client\Model\EssSatisfactionSurvey
     */
    public function getCurrentWeekSatisfactionSurvey()
    {
        return $this->container['current_week_satisfaction_survey'];
    }

    /**
     * Sets current_week_satisfaction_survey
     *
     * @param \Swagger\Client\Model\EssSatisfactionSurvey $current_week_satisfaction_survey 
     *
     * @return $this
     */
    public function setCurrentWeekSatisfactionSurvey($current_week_satisfaction_survey)
    {
        $this->container['current_week_satisfaction_survey'] = $current_week_satisfaction_survey;

        return $this;
    }

    /**
     * Gets timesheets
     *
     * @return \Swagger\Client\Model\EssCurrentTimesheetsModel
     */
    public function getTimesheets()
    {
        return $this->container['timesheets'];
    }

    /**
     * Sets timesheets
     *
     * @param \Swagger\Client\Model\EssCurrentTimesheetsModel $timesheets 
     *
     * @return $this
     */
    public function setTimesheets($timesheets)
    {
        $this->container['timesheets'] = $timesheets;

        return $this;
    }

    /**
     * Gets timesheet_entry_period_end
     *
     * @return \DateTime
     */
    public function getTimesheetEntryPeriodEnd()
    {
        return $this->container['timesheet_entry_period_end'];
    }

    /**
     * Sets timesheet_entry_period_end
     *
     * @param \DateTime $timesheet_entry_period_end 
     *
     * @return $this
     */
    public function setTimesheetEntryPeriodEnd($timesheet_entry_period_end)
    {
        $this->container['timesheet_entry_period_end'] = $timesheet_entry_period_end;

        return $this;
    }

    /**
     * Gets expense_categories
     *
     * @return \Swagger\Client\Model\ExpenseCategoryResponseModel[]
     */
    public function getExpenseCategories()
    {
        return $this->container['expense_categories'];
    }

    /**
     * Sets expense_categories
     *
     * @param \Swagger\Client\Model\ExpenseCategoryResponseModel[] $expense_categories 
     *
     * @return $this
     */
    public function setExpenseCategories($expense_categories)
    {
        $this->container['expense_categories'] = $expense_categories;

        return $this;
    }

    /**
     * Gets tax_codes
     *
     * @return \Swagger\Client\Model\JournalServiceTaxCode[]
     */
    public function getTaxCodes()
    {
        return $this->container['tax_codes'];
    }

    /**
     * Sets tax_codes
     *
     * @param \Swagger\Client\Model\JournalServiceTaxCode[] $tax_codes 
     *
     * @return $this
     */
    public function setTaxCodes($tax_codes)
    {
        $this->container['tax_codes'] = $tax_codes;

        return $this;
    }

    /**
     * Gets expenses
     *
     * @return \Swagger\Client\Model\EssCurrentExpensesModel
     */
    public function getExpenses()
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param \Swagger\Client\Model\EssCurrentExpensesModel $expenses 
     *
     * @return $this
     */
    public function setExpenses($expenses)
    {
        $this->container['expenses'] = $expenses;

        return $this;
    }

    /**
     * Gets pending_shift_count
     *
     * @return int
     */
    public function getPendingShiftCount()
    {
        return $this->container['pending_shift_count'];
    }

    /**
     * Sets pending_shift_count
     *
     * @param int $pending_shift_count 
     *
     * @return $this
     */
    public function setPendingShiftCount($pending_shift_count)
    {
        $this->container['pending_shift_count'] = $pending_shift_count;

        return $this;
    }

    /**
     * Gets proposed_swap_count
     *
     * @return int
     */
    public function getProposedSwapCount()
    {
        return $this->container['proposed_swap_count'];
    }

    /**
     * Sets proposed_swap_count
     *
     * @param int $proposed_swap_count 
     *
     * @return $this
     */
    public function setProposedSwapCount($proposed_swap_count)
    {
        $this->container['proposed_swap_count'] = $proposed_swap_count;

        return $this;
    }

    /**
     * Gets current_shift
     *
     * @return \Swagger\Client\Model\EssCurrentShiftModel
     */
    public function getCurrentShift()
    {
        return $this->container['current_shift'];
    }

    /**
     * Sets current_shift
     *
     * @param \Swagger\Client\Model\EssCurrentShiftModel $current_shift 
     *
     * @return $this
     */
    public function setCurrentShift($current_shift)
    {
        $this->container['current_shift'] = $current_shift;

        return $this;
    }

    /**
     * Gets documents_requiring_acknowledgement_count
     *
     * @return int
     */
    public function getDocumentsRequiringAcknowledgementCount()
    {
        return $this->container['documents_requiring_acknowledgement_count'];
    }

    /**
     * Sets documents_requiring_acknowledgement_count
     *
     * @param int $documents_requiring_acknowledgement_count 
     *
     * @return $this
     */
    public function setDocumentsRequiringAcknowledgementCount($documents_requiring_acknowledgement_count)
    {
        $this->container['documents_requiring_acknowledgement_count'] = $documents_requiring_acknowledgement_count;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region 
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets biddable_shift_count
     *
     * @return int
     */
    public function getBiddableShiftCount()
    {
        return $this->container['biddable_shift_count'];
    }

    /**
     * Sets biddable_shift_count
     *
     * @param int $biddable_shift_count 
     *
     * @return $this
     */
    public function setBiddableShiftCount($biddable_shift_count)
    {
        $this->container['biddable_shift_count'] = $biddable_shift_count;

        return $this;
    }

    /**
     * Gets is_terminated
     *
     * @return bool
     */
    public function getIsTerminated()
    {
        return $this->container['is_terminated'];
    }

    /**
     * Sets is_terminated
     *
     * @param bool $is_terminated 
     *
     * @return $this
     */
    public function setIsTerminated($is_terminated)
    {
        $this->container['is_terminated'] = $is_terminated;

        return $this;
    }

    /**
     * Gets google_maps_api_key
     *
     * @return string
     */
    public function getGoogleMapsApiKey()
    {
        return $this->container['google_maps_api_key'];
    }

    /**
     * Sets google_maps_api_key
     *
     * @param string $google_maps_api_key 
     *
     * @return $this
     */
    public function setGoogleMapsApiKey($google_maps_api_key)
    {
        $this->container['google_maps_api_key'] = $google_maps_api_key;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date 
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets standard_hours
     *
     * @return \Swagger\Client\Model\StandardHoursModel
     */
    public function getStandardHours()
    {
        return $this->container['standard_hours'];
    }

    /**
     * Sets standard_hours
     *
     * @param \Swagger\Client\Model\StandardHoursModel $standard_hours 
     *
     * @return $this
     */
    public function setStandardHours($standard_hours)
    {
        $this->container['standard_hours'] = $standard_hours;

        return $this;
    }

    /**
     * Gets not_accepted_shifts_count
     *
     * @return int
     */
    public function getNotAcceptedShiftsCount()
    {
        return $this->container['not_accepted_shifts_count'];
    }

    /**
     * Sets not_accepted_shifts_count
     *
     * @param int $not_accepted_shifts_count 
     *
     * @return $this
     */
    public function setNotAcceptedShiftsCount($not_accepted_shifts_count)
    {
        $this->container['not_accepted_shifts_count'] = $not_accepted_shifts_count;

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

