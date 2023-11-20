<?php
/**
 * ManagerTimesheetSubmitModel
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
 * ManagerTimesheetSubmitModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ManagerTimesheetSubmitModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagerTimesheetSubmitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'employee_id' => 'int',
        'location_id' => 'int',
        'work_type_id' => 'int',
        'pay_category_id' => 'int',
        'leave_category_id' => 'int',
        'leave_request_id' => 'int',
        'classification_id' => 'int',
        'shift_condition_ids' => 'int[]',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'submitted_start' => '\DateTime',
        'submitted_end' => '\DateTime',
        'units' => 'float',
        'rate' => 'float',
        'comments' => 'string',
        'hidden_comments' => 'string',
        'breaks' => '\OpenAPI\Client\Model\TimesheetBreakSubmitModel[]',
        'attachment' => '\OpenAPI\Client\Model\Attachment',
        'source' => 'string',
        'location_is_deleted' => 'bool',
        'dimension_value_ids' => 'int[]'
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
        'location_id' => 'int32',
        'work_type_id' => 'int32',
        'pay_category_id' => 'int32',
        'leave_category_id' => 'int32',
        'leave_request_id' => 'int32',
        'classification_id' => 'int32',
        'shift_condition_ids' => 'int32',
        'start' => 'date-time',
        'end' => 'date-time',
        'submitted_start' => 'date-time',
        'submitted_end' => 'date-time',
        'units' => 'double',
        'rate' => 'double',
        'comments' => null,
        'hidden_comments' => null,
        'breaks' => null,
        'attachment' => null,
        'source' => null,
        'location_is_deleted' => null,
        'dimension_value_ids' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'employee_id' => false,
		'location_id' => false,
		'work_type_id' => false,
		'pay_category_id' => false,
		'leave_category_id' => false,
		'leave_request_id' => false,
		'classification_id' => false,
		'shift_condition_ids' => false,
		'start' => false,
		'end' => false,
		'submitted_start' => false,
		'submitted_end' => false,
		'units' => false,
		'rate' => false,
		'comments' => false,
		'hidden_comments' => false,
		'breaks' => false,
		'attachment' => false,
		'source' => false,
		'location_is_deleted' => false,
		'dimension_value_ids' => false
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
        'location_id' => 'locationId',
        'work_type_id' => 'workTypeId',
        'pay_category_id' => 'payCategoryId',
        'leave_category_id' => 'leaveCategoryId',
        'leave_request_id' => 'leaveRequestId',
        'classification_id' => 'classificationId',
        'shift_condition_ids' => 'shiftConditionIds',
        'start' => 'start',
        'end' => 'end',
        'submitted_start' => 'submittedStart',
        'submitted_end' => 'submittedEnd',
        'units' => 'units',
        'rate' => 'rate',
        'comments' => 'comments',
        'hidden_comments' => 'hiddenComments',
        'breaks' => 'breaks',
        'attachment' => 'attachment',
        'source' => 'source',
        'location_is_deleted' => 'locationIsDeleted',
        'dimension_value_ids' => 'dimensionValueIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'location_id' => 'setLocationId',
        'work_type_id' => 'setWorkTypeId',
        'pay_category_id' => 'setPayCategoryId',
        'leave_category_id' => 'setLeaveCategoryId',
        'leave_request_id' => 'setLeaveRequestId',
        'classification_id' => 'setClassificationId',
        'shift_condition_ids' => 'setShiftConditionIds',
        'start' => 'setStart',
        'end' => 'setEnd',
        'submitted_start' => 'setSubmittedStart',
        'submitted_end' => 'setSubmittedEnd',
        'units' => 'setUnits',
        'rate' => 'setRate',
        'comments' => 'setComments',
        'hidden_comments' => 'setHiddenComments',
        'breaks' => 'setBreaks',
        'attachment' => 'setAttachment',
        'source' => 'setSource',
        'location_is_deleted' => 'setLocationIsDeleted',
        'dimension_value_ids' => 'setDimensionValueIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'location_id' => 'getLocationId',
        'work_type_id' => 'getWorkTypeId',
        'pay_category_id' => 'getPayCategoryId',
        'leave_category_id' => 'getLeaveCategoryId',
        'leave_request_id' => 'getLeaveRequestId',
        'classification_id' => 'getClassificationId',
        'shift_condition_ids' => 'getShiftConditionIds',
        'start' => 'getStart',
        'end' => 'getEnd',
        'submitted_start' => 'getSubmittedStart',
        'submitted_end' => 'getSubmittedEnd',
        'units' => 'getUnits',
        'rate' => 'getRate',
        'comments' => 'getComments',
        'hidden_comments' => 'getHiddenComments',
        'breaks' => 'getBreaks',
        'attachment' => 'getAttachment',
        'source' => 'getSource',
        'location_is_deleted' => 'getLocationIsDeleted',
        'dimension_value_ids' => 'getDimensionValueIds'
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

    public const SOURCE_NONE = 'None';
    public const SOURCE_SAASU = 'Saasu';
    public const SOURCE_XERO = 'Xero';
    public const SOURCE_MYOB = 'MYOB';
    public const SOURCE_DEPUTY = 'Deputy';
    public const SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    public const SOURCE_CLICK_SUPER = 'ClickSuper';
    public const SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    public const SOURCE_FILE_IMPORT = 'FileImport';
    public const SOURCE_FILE_EXPORT = 'FileExport';
    public const SOURCE_QUICK_BOOKS = 'QuickBooks';
    public const SOURCE_HARMONY = 'Harmony';
    public const SOURCE_AWARD_STORE = 'AwardStore';
    public const SOURCE_ATTACHE = 'Attache';
    public const SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    public const SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    public const SOURCE_API = 'API';
    public const SOURCE_MICRO_POWER = 'MicroPower';
    public const SOURCE_ROSTER_LIVE = 'RosterLive';
    public const SOURCE_NET_SUITE = 'NetSuite';
    public const SOURCE_KOUNTA = 'Kounta';
    public const SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    public const SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    public const SOURCE_JONAS_PREMIER = 'JonasPremier';
    public const SOURCE_WAGE_EASY = 'WageEasy';
    public const SOURCE_MAESTRANO = 'Maestrano';
    public const SOURCE_WORK_ZONE = 'WorkZone';
    public const SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    public const SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    public const SOURCE_ONBOARDING = 'Onboarding';
    public const SOURCE_ADMIN = 'Admin';
    public const SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    public const SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    public const SOURCE_SAGE50 = 'Sage50';
    public const SOURCE_PENSION_SYNC = 'PensionSync';
    public const SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    public const SOURCE_PRONTO_XI = 'ProntoXI';
    public const SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    public const SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    public const SOURCE_BEAM = 'Beam';
    public const SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    public const SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    public const SOURCE_WIISE = 'Wiise';
    public const SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    public const SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    public const SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    public const SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    public const SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    public const SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    public const SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    public const SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    public const SOURCE_O_AUTH = 'OAuth';
    public const SOURCE_FRESH_BOOKS = 'FreshBooks';
    public const SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    public const SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    public const SOURCE_TELLEROO = 'Telleroo';
    public const SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    public const SOURCE_BUSINESS_CENTRAL = 'BusinessCentral';
    public const SOURCE_PAYTRON = 'Paytron';
    public const SOURCE_ACCESS_FINANCIALS = 'AccessFinancials';
    public const SOURCE_COMMA = 'Comma';
    public const SOURCE_ZOHO = 'Zoho';
    public const SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER = 'FlatFileEmployeeImporter';
    public const SOURCE_TWINFIELD = 'Twinfield';
    public const SOURCE_SAGE_ACCOUNTING = 'SageAccounting';
    public const SOURCE_SQUARE = 'Square';
    public const SOURCE_QUICKFILE = 'Quickfile';
    public const SOURCE_TIDE = 'Tide';
    public const SOURCE_TIDE_SSO = 'TideSso';
    public const SOURCE_FREE_AGENT = 'FreeAgent';
    public const SOURCE_AKAHU = 'Akahu';
    public const SOURCE_INSTA_PAY = 'InstaPay';
    public const SOURCE_ZEPTO = 'Zepto';
    public const SOURCE_SLACK = 'Slack';
    public const SOURCE_CAXTON = 'Caxton';
    public const SOURCE_QUICKBOOKS_STANDALONE_PAYROLL = 'QuickbooksStandalonePayroll';
    public const SOURCE_IMPORT_EMPLOYEE_SELF_SETUP = 'ImportEmployeeSelfSetup';
    public const SOURCE_XERO_IDENTITY_PAYROLL_SIGN_UP = 'XeroIdentityPayrollSignUp';
    public const SOURCE_XERO_IDENTITY_HR_SIGN_UP = 'XeroIdentityHrSignUp';
    public const SOURCE_SAGE_INTACCT = 'SageIntacct';
    public const SOURCE_DAILY_PAY = 'DailyPay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_NONE,
            self::SOURCE_SAASU,
            self::SOURCE_XERO,
            self::SOURCE_MYOB,
            self::SOURCE_DEPUTY,
            self::SOURCE_EMPLOYEE_TIME_PUNCH,
            self::SOURCE_CLICK_SUPER,
            self::SOURCE_INTEGRATED_TIMESHEETS,
            self::SOURCE_FILE_IMPORT,
            self::SOURCE_FILE_EXPORT,
            self::SOURCE_QUICK_BOOKS,
            self::SOURCE_HARMONY,
            self::SOURCE_AWARD_STORE,
            self::SOURCE_ATTACHE,
            self::SOURCE_INTEGRATED_ROSTERING,
            self::SOURCE_RECKON_ACCOUNTS,
            self::SOURCE_API,
            self::SOURCE_MICRO_POWER,
            self::SOURCE_ROSTER_LIVE,
            self::SOURCE_NET_SUITE,
            self::SOURCE_KOUNTA,
            self::SOURCE_TIME_AND_ATTENDANCE_KIOSK,
            self::SOURCE_DETAILED_FILE_EXPORT,
            self::SOURCE_JONAS_PREMIER,
            self::SOURCE_WAGE_EASY,
            self::SOURCE_MAESTRANO,
            self::SOURCE_WORK_ZONE,
            self::SOURCE_EMPLOYEE_PORTAL,
            self::SOURCE_ROSTER_TEMPLATE,
            self::SOURCE_ONBOARDING,
            self::SOURCE_ADMIN,
            self::SOURCE_WORK_ZONE_CLOCK_ON_OFF,
            self::SOURCE_NET_SUITE_ONE_WORLD,
            self::SOURCE_SAGE50,
            self::SOURCE_PENSION_SYNC,
            self::SOURCE_FINANCIALS_OFFICE,
            self::SOURCE_PRONTO_XI,
            self::SOURCE_PAY_RUN_DEFAULT,
            self::SOURCE_STANDARD_WORK_DAY,
            self::SOURCE_BEAM,
            self::SOURCE_PAY_RUN_AUTOMATION,
            self::SOURCE_BUREAU_DASHBOARD,
            self::SOURCE_WIISE,
            self::SOURCE_QBO_MIGRATION_TOOL,
            self::SOURCE_ABRIDGED_FILE_IMPORT,
            self::SOURCE_QBO_FORCED_MIGRATION,
            self::SOURCE_HMRC_DPS_UPDATE,
            self::SOURCE_HMRC_DPS_STUDENT_LOAN,
            self::SOURCE_HMRC_DPS_POST_GRAD_LOAN,
            self::SOURCE_SAGE50_FILE_IMPORTER,
            self::SOURCE_FPS_FILE_IMPORTER,
            self::SOURCE_O_AUTH,
            self::SOURCE_FRESH_BOOKS,
            self::SOURCE_STAR_FILE_IMPORTER,
            self::SOURCE_ACTIVE_CAMPAIGN,
            self::SOURCE_SUMMARY_AND_DETAILS_EXPORT,
            self::SOURCE_TELLEROO,
            self::SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD,
            self::SOURCE_BUSINESS_CENTRAL,
            self::SOURCE_PAYTRON,
            self::SOURCE_ACCESS_FINANCIALS,
            self::SOURCE_COMMA,
            self::SOURCE_ZOHO,
            self::SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER,
            self::SOURCE_TWINFIELD,
            self::SOURCE_SAGE_ACCOUNTING,
            self::SOURCE_SQUARE,
            self::SOURCE_QUICKFILE,
            self::SOURCE_TIDE,
            self::SOURCE_TIDE_SSO,
            self::SOURCE_FREE_AGENT,
            self::SOURCE_AKAHU,
            self::SOURCE_INSTA_PAY,
            self::SOURCE_ZEPTO,
            self::SOURCE_SLACK,
            self::SOURCE_CAXTON,
            self::SOURCE_QUICKBOOKS_STANDALONE_PAYROLL,
            self::SOURCE_IMPORT_EMPLOYEE_SELF_SETUP,
            self::SOURCE_XERO_IDENTITY_PAYROLL_SIGN_UP,
            self::SOURCE_XERO_IDENTITY_HR_SIGN_UP,
            self::SOURCE_SAGE_INTACCT,
            self::SOURCE_DAILY_PAY,
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('work_type_id', $data ?? [], null);
        $this->setIfExists('pay_category_id', $data ?? [], null);
        $this->setIfExists('leave_category_id', $data ?? [], null);
        $this->setIfExists('leave_request_id', $data ?? [], null);
        $this->setIfExists('classification_id', $data ?? [], null);
        $this->setIfExists('shift_condition_ids', $data ?? [], null);
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('submitted_start', $data ?? [], null);
        $this->setIfExists('submitted_end', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('hidden_comments', $data ?? [], null);
        $this->setIfExists('breaks', $data ?? [], null);
        $this->setIfExists('attachment', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('location_is_deleted', $data ?? [], null);
        $this->setIfExists('dimension_value_ids', $data ?? [], null);
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

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
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
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id 
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int|null
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int|null $work_type_id 
     *
     * @return self
     */
    public function setWorkTypeId($work_type_id)
    {
        if (is_null($work_type_id)) {
            throw new \InvalidArgumentException('non-nullable work_type_id cannot be null');
        }
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets pay_category_id
     *
     * @return int|null
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int|null $pay_category_id 
     *
     * @return self
     */
    public function setPayCategoryId($pay_category_id)
    {
        if (is_null($pay_category_id)) {
            throw new \InvalidArgumentException('non-nullable pay_category_id cannot be null');
        }
        $this->container['pay_category_id'] = $pay_category_id;

        return $this;
    }

    /**
     * Gets leave_category_id
     *
     * @return int|null
     */
    public function getLeaveCategoryId()
    {
        return $this->container['leave_category_id'];
    }

    /**
     * Sets leave_category_id
     *
     * @param int|null $leave_category_id 
     *
     * @return self
     */
    public function setLeaveCategoryId($leave_category_id)
    {
        if (is_null($leave_category_id)) {
            throw new \InvalidArgumentException('non-nullable leave_category_id cannot be null');
        }
        $this->container['leave_category_id'] = $leave_category_id;

        return $this;
    }

    /**
     * Gets leave_request_id
     *
     * @return int|null
     */
    public function getLeaveRequestId()
    {
        return $this->container['leave_request_id'];
    }

    /**
     * Sets leave_request_id
     *
     * @param int|null $leave_request_id 
     *
     * @return self
     */
    public function setLeaveRequestId($leave_request_id)
    {
        if (is_null($leave_request_id)) {
            throw new \InvalidArgumentException('non-nullable leave_request_id cannot be null');
        }
        $this->container['leave_request_id'] = $leave_request_id;

        return $this;
    }

    /**
     * Gets classification_id
     *
     * @return int|null
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param int|null $classification_id 
     *
     * @return self
     */
    public function setClassificationId($classification_id)
    {
        if (is_null($classification_id)) {
            throw new \InvalidArgumentException('non-nullable classification_id cannot be null');
        }
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Gets shift_condition_ids
     *
     * @return int[]|null
     */
    public function getShiftConditionIds()
    {
        return $this->container['shift_condition_ids'];
    }

    /**
     * Sets shift_condition_ids
     *
     * @param int[]|null $shift_condition_ids 
     *
     * @return self
     */
    public function setShiftConditionIds($shift_condition_ids)
    {
        if (is_null($shift_condition_ids)) {
            throw new \InvalidArgumentException('non-nullable shift_condition_ids cannot be null');
        }
        $this->container['shift_condition_ids'] = $shift_condition_ids;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start 
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            throw new \InvalidArgumentException('non-nullable start cannot be null');
        }
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end 
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets submitted_start
     *
     * @return \DateTime|null
     */
    public function getSubmittedStart()
    {
        return $this->container['submitted_start'];
    }

    /**
     * Sets submitted_start
     *
     * @param \DateTime|null $submitted_start 
     *
     * @return self
     */
    public function setSubmittedStart($submitted_start)
    {
        if (is_null($submitted_start)) {
            throw new \InvalidArgumentException('non-nullable submitted_start cannot be null');
        }
        $this->container['submitted_start'] = $submitted_start;

        return $this;
    }

    /**
     * Gets submitted_end
     *
     * @return \DateTime|null
     */
    public function getSubmittedEnd()
    {
        return $this->container['submitted_end'];
    }

    /**
     * Sets submitted_end
     *
     * @param \DateTime|null $submitted_end 
     *
     * @return self
     */
    public function setSubmittedEnd($submitted_end)
    {
        if (is_null($submitted_end)) {
            throw new \InvalidArgumentException('non-nullable submitted_end cannot be null');
        }
        $this->container['submitted_end'] = $submitted_end;

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
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments 
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets hidden_comments
     *
     * @return string|null
     */
    public function getHiddenComments()
    {
        return $this->container['hidden_comments'];
    }

    /**
     * Sets hidden_comments
     *
     * @param string|null $hidden_comments 
     *
     * @return self
     */
    public function setHiddenComments($hidden_comments)
    {
        if (is_null($hidden_comments)) {
            throw new \InvalidArgumentException('non-nullable hidden_comments cannot be null');
        }
        $this->container['hidden_comments'] = $hidden_comments;

        return $this;
    }

    /**
     * Gets breaks
     *
     * @return \OpenAPI\Client\Model\TimesheetBreakSubmitModel[]|null
     */
    public function getBreaks()
    {
        return $this->container['breaks'];
    }

    /**
     * Sets breaks
     *
     * @param \OpenAPI\Client\Model\TimesheetBreakSubmitModel[]|null $breaks 
     *
     * @return self
     */
    public function setBreaks($breaks)
    {
        if (is_null($breaks)) {
            throw new \InvalidArgumentException('non-nullable breaks cannot be null');
        }
        $this->container['breaks'] = $breaks;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \OpenAPI\Client\Model\Attachment|null
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \OpenAPI\Client\Model\Attachment|null $attachment attachment
     *
     * @return self
     */
    public function setAttachment($attachment)
    {
        if (is_null($attachment)) {
            throw new \InvalidArgumentException('non-nullable attachment cannot be null');
        }
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets location_is_deleted
     *
     * @return bool|null
     */
    public function getLocationIsDeleted()
    {
        return $this->container['location_is_deleted'];
    }

    /**
     * Sets location_is_deleted
     *
     * @param bool|null $location_is_deleted 
     *
     * @return self
     */
    public function setLocationIsDeleted($location_is_deleted)
    {
        if (is_null($location_is_deleted)) {
            throw new \InvalidArgumentException('non-nullable location_is_deleted cannot be null');
        }
        $this->container['location_is_deleted'] = $location_is_deleted;

        return $this;
    }

    /**
     * Gets dimension_value_ids
     *
     * @return int[]|null
     */
    public function getDimensionValueIds()
    {
        return $this->container['dimension_value_ids'];
    }

    /**
     * Sets dimension_value_ids
     *
     * @param int[]|null $dimension_value_ids 
     *
     * @return self
     */
    public function setDimensionValueIds($dimension_value_ids)
    {
        if (is_null($dimension_value_ids)) {
            throw new \InvalidArgumentException('non-nullable dimension_value_ids cannot be null');
        }
        $this->container['dimension_value_ids'] = $dimension_value_ids;

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


