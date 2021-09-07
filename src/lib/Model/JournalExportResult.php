<?php
/**
 * JournalExportResult
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
 * JournalExportResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalExportResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalExportResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'message' => 'string',
        'journal_source' => 'string',
        'journal_external_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'message' => null,
        'journal_source' => null,
        'journal_external_reference_id' => null
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
        'status' => 'status',
        'message' => 'message',
        'journal_source' => 'journalSource',
        'journal_external_reference_id' => 'journalExternalReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'message' => 'setMessage',
        'journal_source' => 'setJournalSource',
        'journal_external_reference_id' => 'setJournalExternalReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'message' => 'getMessage',
        'journal_source' => 'getJournalSource',
        'journal_external_reference_id' => 'getJournalExternalReferenceId'
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

    const STATUS_NOT_EXPORTED = 'NotExported';
    const STATUS_SUCCESS = 'Success';
    const STATUS_FAILURE_UNKNOWN_ERROR = 'FailureUnknownError';
    const STATUS_FAILURE_ACCOUNTS_NOT_CONFIGURED = 'FailureAccountsNotConfigured';
    const STATUS_FAILURE_ITEMS_DELETED = 'FailureItemsDeleted';
    const STATUS_FAILURE_ACCOUNT_PERIOD_CLOSED = 'FailureAccountPeriodClosed';
    const STATUS_FAILURE_NOT_AUTHENTICATED = 'FailureNotAuthenticated';
    const STATUS_FAILURE_ALREADY_EXPORTED = 'FailureAlreadyExported';
    const STATUS_FAILURE_FUNCTION_DISABLED = 'FailureFunctionDisabled';
    const STATUS_FAILURE_CANNOT_USE_ACCOUNTS_PAYABLE_ACCOUNT = 'FailureCannotUseAccountsPayableAccount';
    const STATUS_FAILURE_VENDOR_MESSAGE = 'FailureVendorMessage';
    const STATUS_FAILURE_INTERCOMPANY_LOAN_ACCOUNTS_NOT_CONFIGURED = 'FailureIntercompanyLoanAccountsNotConfigured';
    const STATUS_FAILURE_GST_SETUP = 'FailureGSTSetup';
    const STATUS_FAILURE_KNOWN_ERROR = 'FailureKnownError';
    const STATUS_FAILURES_TENANT_NOT_SUPPLIED = 'FailuresTenantNotSupplied';
    const STATUS_RESULT_UNKNOWN = 'ResultUnknown';
    const JOURNAL_SOURCE_NONE = 'None';
    const JOURNAL_SOURCE_SAASU = 'Saasu';
    const JOURNAL_SOURCE_XERO = 'Xero';
    const JOURNAL_SOURCE_MYOB = 'MYOB';
    const JOURNAL_SOURCE_DEPUTY = 'Deputy';
    const JOURNAL_SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    const JOURNAL_SOURCE_CLICK_SUPER = 'ClickSuper';
    const JOURNAL_SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    const JOURNAL_SOURCE_FILE_IMPORT = 'FileImport';
    const JOURNAL_SOURCE_FILE_EXPORT = 'FileExport';
    const JOURNAL_SOURCE_QUICK_BOOKS = 'QuickBooks';
    const JOURNAL_SOURCE_HARMONY = 'Harmony';
    const JOURNAL_SOURCE_AWARD_STORE = 'AwardStore';
    const JOURNAL_SOURCE_ATTACHE = 'Attache';
    const JOURNAL_SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    const JOURNAL_SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    const JOURNAL_SOURCE_API = 'API';
    const JOURNAL_SOURCE_MICRO_POWER = 'MicroPower';
    const JOURNAL_SOURCE_ROSTER_LIVE = 'RosterLive';
    const JOURNAL_SOURCE_NET_SUITE = 'NetSuite';
    const JOURNAL_SOURCE_KOUNTA = 'Kounta';
    const JOURNAL_SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    const JOURNAL_SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    const JOURNAL_SOURCE_JONAS_PREMIER = 'JonasPremier';
    const JOURNAL_SOURCE_WAGE_EASY = 'WageEasy';
    const JOURNAL_SOURCE_MAESTRANO = 'Maestrano';
    const JOURNAL_SOURCE_WORK_ZONE = 'WorkZone';
    const JOURNAL_SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    const JOURNAL_SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    const JOURNAL_SOURCE_ONBOARDING = 'Onboarding';
    const JOURNAL_SOURCE_ADMIN = 'Admin';
    const JOURNAL_SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    const JOURNAL_SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    const JOURNAL_SOURCE_SAGE50 = 'Sage50';
    const JOURNAL_SOURCE_PENSION_SYNC = 'PensionSync';
    const JOURNAL_SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    const JOURNAL_SOURCE_PRONTO_XI = 'ProntoXI';
    const JOURNAL_SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    const JOURNAL_SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    const JOURNAL_SOURCE_BEAM = 'Beam';
    const JOURNAL_SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    const JOURNAL_SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    const JOURNAL_SOURCE_WIISE = 'Wiise';
    const JOURNAL_SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    const JOURNAL_SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    const JOURNAL_SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    const JOURNAL_SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    const JOURNAL_SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    const JOURNAL_SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    const JOURNAL_SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    const JOURNAL_SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    const JOURNAL_SOURCE_O_AUTH = 'OAuth';
    const JOURNAL_SOURCE_FRESH_BOOKS = 'FreshBooks';
    const JOURNAL_SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    const JOURNAL_SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    const JOURNAL_SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    const JOURNAL_SOURCE_TELLEROO = 'Telleroo';
    const JOURNAL_SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_EXPORTED,
            self::STATUS_SUCCESS,
            self::STATUS_FAILURE_UNKNOWN_ERROR,
            self::STATUS_FAILURE_ACCOUNTS_NOT_CONFIGURED,
            self::STATUS_FAILURE_ITEMS_DELETED,
            self::STATUS_FAILURE_ACCOUNT_PERIOD_CLOSED,
            self::STATUS_FAILURE_NOT_AUTHENTICATED,
            self::STATUS_FAILURE_ALREADY_EXPORTED,
            self::STATUS_FAILURE_FUNCTION_DISABLED,
            self::STATUS_FAILURE_CANNOT_USE_ACCOUNTS_PAYABLE_ACCOUNT,
            self::STATUS_FAILURE_VENDOR_MESSAGE,
            self::STATUS_FAILURE_INTERCOMPANY_LOAN_ACCOUNTS_NOT_CONFIGURED,
            self::STATUS_FAILURE_GST_SETUP,
            self::STATUS_FAILURE_KNOWN_ERROR,
            self::STATUS_FAILURES_TENANT_NOT_SUPPLIED,
            self::STATUS_RESULT_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJournalSourceAllowableValues()
    {
        return [
            self::JOURNAL_SOURCE_NONE,
            self::JOURNAL_SOURCE_SAASU,
            self::JOURNAL_SOURCE_XERO,
            self::JOURNAL_SOURCE_MYOB,
            self::JOURNAL_SOURCE_DEPUTY,
            self::JOURNAL_SOURCE_EMPLOYEE_TIME_PUNCH,
            self::JOURNAL_SOURCE_CLICK_SUPER,
            self::JOURNAL_SOURCE_INTEGRATED_TIMESHEETS,
            self::JOURNAL_SOURCE_FILE_IMPORT,
            self::JOURNAL_SOURCE_FILE_EXPORT,
            self::JOURNAL_SOURCE_QUICK_BOOKS,
            self::JOURNAL_SOURCE_HARMONY,
            self::JOURNAL_SOURCE_AWARD_STORE,
            self::JOURNAL_SOURCE_ATTACHE,
            self::JOURNAL_SOURCE_INTEGRATED_ROSTERING,
            self::JOURNAL_SOURCE_RECKON_ACCOUNTS,
            self::JOURNAL_SOURCE_API,
            self::JOURNAL_SOURCE_MICRO_POWER,
            self::JOURNAL_SOURCE_ROSTER_LIVE,
            self::JOURNAL_SOURCE_NET_SUITE,
            self::JOURNAL_SOURCE_KOUNTA,
            self::JOURNAL_SOURCE_TIME_AND_ATTENDANCE_KIOSK,
            self::JOURNAL_SOURCE_DETAILED_FILE_EXPORT,
            self::JOURNAL_SOURCE_JONAS_PREMIER,
            self::JOURNAL_SOURCE_WAGE_EASY,
            self::JOURNAL_SOURCE_MAESTRANO,
            self::JOURNAL_SOURCE_WORK_ZONE,
            self::JOURNAL_SOURCE_EMPLOYEE_PORTAL,
            self::JOURNAL_SOURCE_ROSTER_TEMPLATE,
            self::JOURNAL_SOURCE_ONBOARDING,
            self::JOURNAL_SOURCE_ADMIN,
            self::JOURNAL_SOURCE_WORK_ZONE_CLOCK_ON_OFF,
            self::JOURNAL_SOURCE_NET_SUITE_ONE_WORLD,
            self::JOURNAL_SOURCE_SAGE50,
            self::JOURNAL_SOURCE_PENSION_SYNC,
            self::JOURNAL_SOURCE_FINANCIALS_OFFICE,
            self::JOURNAL_SOURCE_PRONTO_XI,
            self::JOURNAL_SOURCE_PAY_RUN_DEFAULT,
            self::JOURNAL_SOURCE_STANDARD_WORK_DAY,
            self::JOURNAL_SOURCE_BEAM,
            self::JOURNAL_SOURCE_PAY_RUN_AUTOMATION,
            self::JOURNAL_SOURCE_BUREAU_DASHBOARD,
            self::JOURNAL_SOURCE_WIISE,
            self::JOURNAL_SOURCE_QBO_MIGRATION_TOOL,
            self::JOURNAL_SOURCE_ABRIDGED_FILE_IMPORT,
            self::JOURNAL_SOURCE_QBO_FORCED_MIGRATION,
            self::JOURNAL_SOURCE_HMRC_DPS_UPDATE,
            self::JOURNAL_SOURCE_HMRC_DPS_STUDENT_LOAN,
            self::JOURNAL_SOURCE_HMRC_DPS_POST_GRAD_LOAN,
            self::JOURNAL_SOURCE_SAGE50_FILE_IMPORTER,
            self::JOURNAL_SOURCE_FPS_FILE_IMPORTER,
            self::JOURNAL_SOURCE_O_AUTH,
            self::JOURNAL_SOURCE_FRESH_BOOKS,
            self::JOURNAL_SOURCE_STAR_FILE_IMPORTER,
            self::JOURNAL_SOURCE_ACTIVE_CAMPAIGN,
            self::JOURNAL_SOURCE_SUMMARY_AND_DETAILS_EXPORT,
            self::JOURNAL_SOURCE_TELLEROO,
            self::JOURNAL_SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['journal_source'] = isset($data['journal_source']) ? $data['journal_source'] : null;
        $this->container['journal_external_reference_id'] = isset($data['journal_external_reference_id']) ? $data['journal_external_reference_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJournalSourceAllowableValues();
        if (!is_null($this->container['journal_source']) && !in_array($this->container['journal_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'journal_source', must be one of '%s'",
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
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets journal_source
     *
     * @return string
     */
    public function getJournalSource()
    {
        return $this->container['journal_source'];
    }

    /**
     * Sets journal_source
     *
     * @param string $journal_source 
     *
     * @return $this
     */
    public function setJournalSource($journal_source)
    {
        $allowedValues = $this->getJournalSourceAllowableValues();
        if (!is_null($journal_source) && !in_array($journal_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'journal_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['journal_source'] = $journal_source;

        return $this;
    }

    /**
     * Gets journal_external_reference_id
     *
     * @return string
     */
    public function getJournalExternalReferenceId()
    {
        return $this->container['journal_external_reference_id'];
    }

    /**
     * Sets journal_external_reference_id
     *
     * @param string $journal_external_reference_id 
     *
     * @return $this
     */
    public function setJournalExternalReferenceId($journal_external_reference_id)
    {
        $this->container['journal_external_reference_id'] = $journal_external_reference_id;

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

