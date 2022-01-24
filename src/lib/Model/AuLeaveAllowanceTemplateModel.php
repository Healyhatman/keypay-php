<?php
/**
 * AuLeaveAllowanceTemplateModel
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
 * AuLeaveAllowanceTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuLeaveAllowanceTemplateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuLeaveAllowanceTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leave_loading_calculated_from_pay_category_id' => 'int',
        'leave_categories' => '\Swagger\Client\Model\AuLeaveAllowanceTemplateLeaveCategoryApiModel[]',
        'award_id' => 'int',
        'award_name' => 'string',
        'id' => 'int',
        'name' => 'string',
        'external_id' => 'string',
        'source' => 'string',
        'leave_year_start' => '\DateTime',
        'leave_accrual_start_date_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leave_loading_calculated_from_pay_category_id' => 'int32',
        'leave_categories' => null,
        'award_id' => 'int32',
        'award_name' => null,
        'id' => 'int32',
        'name' => null,
        'external_id' => null,
        'source' => null,
        'leave_year_start' => 'date-time',
        'leave_accrual_start_date_type' => null
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
        'leave_loading_calculated_from_pay_category_id' => 'leaveLoadingCalculatedFromPayCategoryId',
        'leave_categories' => 'leaveCategories',
        'award_id' => 'awardId',
        'award_name' => 'awardName',
        'id' => 'id',
        'name' => 'name',
        'external_id' => 'externalId',
        'source' => 'source',
        'leave_year_start' => 'leaveYearStart',
        'leave_accrual_start_date_type' => 'leaveAccrualStartDateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_loading_calculated_from_pay_category_id' => 'setLeaveLoadingCalculatedFromPayCategoryId',
        'leave_categories' => 'setLeaveCategories',
        'award_id' => 'setAwardId',
        'award_name' => 'setAwardName',
        'id' => 'setId',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'leave_year_start' => 'setLeaveYearStart',
        'leave_accrual_start_date_type' => 'setLeaveAccrualStartDateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_loading_calculated_from_pay_category_id' => 'getLeaveLoadingCalculatedFromPayCategoryId',
        'leave_categories' => 'getLeaveCategories',
        'award_id' => 'getAwardId',
        'award_name' => 'getAwardName',
        'id' => 'getId',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'leave_year_start' => 'getLeaveYearStart',
        'leave_accrual_start_date_type' => 'getLeaveAccrualStartDateType'
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

    const SOURCE_NONE = 'None';
    const SOURCE_SAASU = 'Saasu';
    const SOURCE_XERO = 'Xero';
    const SOURCE_MYOB = 'MYOB';
    const SOURCE_DEPUTY = 'Deputy';
    const SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    const SOURCE_CLICK_SUPER = 'ClickSuper';
    const SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    const SOURCE_FILE_IMPORT = 'FileImport';
    const SOURCE_FILE_EXPORT = 'FileExport';
    const SOURCE_QUICK_BOOKS = 'QuickBooks';
    const SOURCE_HARMONY = 'Harmony';
    const SOURCE_AWARD_STORE = 'AwardStore';
    const SOURCE_ATTACHE = 'Attache';
    const SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    const SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    const SOURCE_API = 'API';
    const SOURCE_MICRO_POWER = 'MicroPower';
    const SOURCE_ROSTER_LIVE = 'RosterLive';
    const SOURCE_NET_SUITE = 'NetSuite';
    const SOURCE_KOUNTA = 'Kounta';
    const SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    const SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    const SOURCE_JONAS_PREMIER = 'JonasPremier';
    const SOURCE_WAGE_EASY = 'WageEasy';
    const SOURCE_MAESTRANO = 'Maestrano';
    const SOURCE_WORK_ZONE = 'WorkZone';
    const SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    const SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    const SOURCE_ONBOARDING = 'Onboarding';
    const SOURCE_ADMIN = 'Admin';
    const SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    const SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    const SOURCE_SAGE50 = 'Sage50';
    const SOURCE_PENSION_SYNC = 'PensionSync';
    const SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    const SOURCE_PRONTO_XI = 'ProntoXI';
    const SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    const SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    const SOURCE_BEAM = 'Beam';
    const SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    const SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    const SOURCE_WIISE = 'Wiise';
    const SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    const SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    const SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    const SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    const SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    const SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    const SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    const SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    const SOURCE_O_AUTH = 'OAuth';
    const SOURCE_FRESH_BOOKS = 'FreshBooks';
    const SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    const SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    const SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    const SOURCE_TELLEROO = 'Telleroo';
    const SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    const SOURCE_BUSINESS_CENTRAL = 'BusinessCentral';
    const SOURCE_PAYTRON = 'Paytron';
    const SOURCE_ZOHO = 'Zoho';
    const SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER = 'FlatFileEmployeeImporter';
    const SOURCE_TWINFIELD = 'Twinfield';
    const SOURCE_SAGE_ACCOUNTING = 'SageAccounting';
    const LEAVE_ACCRUAL_START_DATE_TYPE_EMPLOYEE_START_DATE = 'EmployeeStartDate';
    const LEAVE_ACCRUAL_START_DATE_TYPE_SPECIFIED_DATE = 'SpecifiedDate';
    

    
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
            self::SOURCE_ZOHO,
            self::SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER,
            self::SOURCE_TWINFIELD,
            self::SOURCE_SAGE_ACCOUNTING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveAccrualStartDateTypeAllowableValues()
    {
        return [
            self::LEAVE_ACCRUAL_START_DATE_TYPE_EMPLOYEE_START_DATE,
            self::LEAVE_ACCRUAL_START_DATE_TYPE_SPECIFIED_DATE,
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
        $this->container['leave_loading_calculated_from_pay_category_id'] = isset($data['leave_loading_calculated_from_pay_category_id']) ? $data['leave_loading_calculated_from_pay_category_id'] : null;
        $this->container['leave_categories'] = isset($data['leave_categories']) ? $data['leave_categories'] : null;
        $this->container['award_id'] = isset($data['award_id']) ? $data['award_id'] : null;
        $this->container['award_name'] = isset($data['award_name']) ? $data['award_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['leave_year_start'] = isset($data['leave_year_start']) ? $data['leave_year_start'] : null;
        $this->container['leave_accrual_start_date_type'] = isset($data['leave_accrual_start_date_type']) ? $data['leave_accrual_start_date_type'] : null;
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
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveAccrualStartDateTypeAllowableValues();
        if (!is_null($this->container['leave_accrual_start_date_type']) && !in_array($this->container['leave_accrual_start_date_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_accrual_start_date_type', must be one of '%s'",
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
     * Gets leave_loading_calculated_from_pay_category_id
     *
     * @return int
     */
    public function getLeaveLoadingCalculatedFromPayCategoryId()
    {
        return $this->container['leave_loading_calculated_from_pay_category_id'];
    }

    /**
     * Sets leave_loading_calculated_from_pay_category_id
     *
     * @param int $leave_loading_calculated_from_pay_category_id 
     *
     * @return $this
     */
    public function setLeaveLoadingCalculatedFromPayCategoryId($leave_loading_calculated_from_pay_category_id)
    {
        $this->container['leave_loading_calculated_from_pay_category_id'] = $leave_loading_calculated_from_pay_category_id;

        return $this;
    }

    /**
     * Gets leave_categories
     *
     * @return \Swagger\Client\Model\AuLeaveAllowanceTemplateLeaveCategoryApiModel[]
     */
    public function getLeaveCategories()
    {
        return $this->container['leave_categories'];
    }

    /**
     * Sets leave_categories
     *
     * @param \Swagger\Client\Model\AuLeaveAllowanceTemplateLeaveCategoryApiModel[] $leave_categories 
     *
     * @return $this
     */
    public function setLeaveCategories($leave_categories)
    {
        $this->container['leave_categories'] = $leave_categories;

        return $this;
    }

    /**
     * Gets award_id
     *
     * @return int
     */
    public function getAwardId()
    {
        return $this->container['award_id'];
    }

    /**
     * Sets award_id
     *
     * @param int $award_id 
     *
     * @return $this
     */
    public function setAwardId($award_id)
    {
        $this->container['award_id'] = $award_id;

        return $this;
    }

    /**
     * Gets award_name
     *
     * @return string
     */
    public function getAwardName()
    {
        return $this->container['award_name'];
    }

    /**
     * Sets award_name
     *
     * @param string $award_name 
     *
     * @return $this
     */
    public function setAwardName($award_name)
    {
        $this->container['award_name'] = $award_name;

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
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets leave_year_start
     *
     * @return \DateTime
     */
    public function getLeaveYearStart()
    {
        return $this->container['leave_year_start'];
    }

    /**
     * Sets leave_year_start
     *
     * @param \DateTime $leave_year_start 
     *
     * @return $this
     */
    public function setLeaveYearStart($leave_year_start)
    {
        $this->container['leave_year_start'] = $leave_year_start;

        return $this;
    }

    /**
     * Gets leave_accrual_start_date_type
     *
     * @return string
     */
    public function getLeaveAccrualStartDateType()
    {
        return $this->container['leave_accrual_start_date_type'];
    }

    /**
     * Sets leave_accrual_start_date_type
     *
     * @param string $leave_accrual_start_date_type 
     *
     * @return $this
     */
    public function setLeaveAccrualStartDateType($leave_accrual_start_date_type)
    {
        $allowedValues = $this->getLeaveAccrualStartDateTypeAllowableValues();
        if (!is_null($leave_accrual_start_date_type) && !in_array($leave_accrual_start_date_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_accrual_start_date_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_accrual_start_date_type'] = $leave_accrual_start_date_type;

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


