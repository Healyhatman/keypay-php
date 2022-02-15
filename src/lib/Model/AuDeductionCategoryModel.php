<?php
/**
 * AuDeductionCategoryModel
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
 * AuDeductionCategoryModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuDeductionCategoryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuDeductionCategoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_exempt' => 'bool',
        'expense_general_ledger_mapping_code' => 'string',
        'liability_general_ledger_mapping_code' => 'string',
        'sgc_calculation_impact' => 'string',
        'payment_summary_classification' => 'string',
        'is_resc' => 'bool',
        'id' => 'int',
        'name' => 'string',
        'source' => 'string',
        'external_id' => 'string',
        'is_system' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_exempt' => null,
        'expense_general_ledger_mapping_code' => null,
        'liability_general_ledger_mapping_code' => null,
        'sgc_calculation_impact' => null,
        'payment_summary_classification' => null,
        'is_resc' => null,
        'id' => 'int32',
        'name' => null,
        'source' => null,
        'external_id' => null,
        'is_system' => null
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
        'tax_exempt' => 'taxExempt',
        'expense_general_ledger_mapping_code' => 'expenseGeneralLedgerMappingCode',
        'liability_general_ledger_mapping_code' => 'liabilityGeneralLedgerMappingCode',
        'sgc_calculation_impact' => 'sgcCalculationImpact',
        'payment_summary_classification' => 'paymentSummaryClassification',
        'is_resc' => 'isResc',
        'id' => 'id',
        'name' => 'name',
        'source' => 'source',
        'external_id' => 'externalId',
        'is_system' => 'isSystem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_exempt' => 'setTaxExempt',
        'expense_general_ledger_mapping_code' => 'setExpenseGeneralLedgerMappingCode',
        'liability_general_ledger_mapping_code' => 'setLiabilityGeneralLedgerMappingCode',
        'sgc_calculation_impact' => 'setSgcCalculationImpact',
        'payment_summary_classification' => 'setPaymentSummaryClassification',
        'is_resc' => 'setIsResc',
        'id' => 'setId',
        'name' => 'setName',
        'source' => 'setSource',
        'external_id' => 'setExternalId',
        'is_system' => 'setIsSystem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_exempt' => 'getTaxExempt',
        'expense_general_ledger_mapping_code' => 'getExpenseGeneralLedgerMappingCode',
        'liability_general_ledger_mapping_code' => 'getLiabilityGeneralLedgerMappingCode',
        'sgc_calculation_impact' => 'getSgcCalculationImpact',
        'payment_summary_classification' => 'getPaymentSummaryClassification',
        'is_resc' => 'getIsResc',
        'id' => 'getId',
        'name' => 'getName',
        'source' => 'getSource',
        'external_id' => 'getExternalId',
        'is_system' => 'getIsSystem'
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

    const SGC_CALCULATION_IMPACT_NONE = 'None';
    const SGC_CALCULATION_IMPACT_REDUCES_OTE = 'ReducesOTE';
    const PAYMENT_SUMMARY_CLASSIFICATION__DEFAULT = 'Default';
    const PAYMENT_SUMMARY_CLASSIFICATION_UNION_OR_PROFESSIONAL_ASSOCIATION_FEES = 'UnionOrProfessionalAssociationFees';
    const PAYMENT_SUMMARY_CLASSIFICATION_WORKPLACE_GIVING = 'WorkplaceGiving';
    const PAYMENT_SUMMARY_CLASSIFICATION_CHILD_SUPPORT_DEDUCTION = 'ChildSupportDeduction';
    const PAYMENT_SUMMARY_CLASSIFICATION_CHILD_SUPPORT_GARNISHEE = 'ChildSupportGarnishee';
    const PAYMENT_SUMMARY_CLASSIFICATION_SALARY_SACRIFICE_OTHER_EMPLOYEE_BENEFITS = 'SalarySacrificeOtherEmployeeBenefits';
    const PAYMENT_SUMMARY_CLASSIFICATION_SALARY_SACRIFICE_SUPERANNUATION = 'SalarySacrificeSuperannuation';
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
    const SOURCE_ACCESS_FINANCIALS = 'AccessFinancials';
    const SOURCE_ZOHO = 'Zoho';
    const SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER = 'FlatFileEmployeeImporter';
    const SOURCE_TWINFIELD = 'Twinfield';
    const SOURCE_SAGE_ACCOUNTING = 'SageAccounting';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSgcCalculationImpactAllowableValues()
    {
        return [
            self::SGC_CALCULATION_IMPACT_NONE,
            self::SGC_CALCULATION_IMPACT_REDUCES_OTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentSummaryClassificationAllowableValues()
    {
        return [
            self::PAYMENT_SUMMARY_CLASSIFICATION__DEFAULT,
            self::PAYMENT_SUMMARY_CLASSIFICATION_UNION_OR_PROFESSIONAL_ASSOCIATION_FEES,
            self::PAYMENT_SUMMARY_CLASSIFICATION_WORKPLACE_GIVING,
            self::PAYMENT_SUMMARY_CLASSIFICATION_CHILD_SUPPORT_DEDUCTION,
            self::PAYMENT_SUMMARY_CLASSIFICATION_CHILD_SUPPORT_GARNISHEE,
            self::PAYMENT_SUMMARY_CLASSIFICATION_SALARY_SACRIFICE_OTHER_EMPLOYEE_BENEFITS,
            self::PAYMENT_SUMMARY_CLASSIFICATION_SALARY_SACRIFICE_SUPERANNUATION,
        ];
    }
    
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
            self::SOURCE_ZOHO,
            self::SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER,
            self::SOURCE_TWINFIELD,
            self::SOURCE_SAGE_ACCOUNTING,
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
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['expense_general_ledger_mapping_code'] = isset($data['expense_general_ledger_mapping_code']) ? $data['expense_general_ledger_mapping_code'] : null;
        $this->container['liability_general_ledger_mapping_code'] = isset($data['liability_general_ledger_mapping_code']) ? $data['liability_general_ledger_mapping_code'] : null;
        $this->container['sgc_calculation_impact'] = isset($data['sgc_calculation_impact']) ? $data['sgc_calculation_impact'] : null;
        $this->container['payment_summary_classification'] = isset($data['payment_summary_classification']) ? $data['payment_summary_classification'] : null;
        $this->container['is_resc'] = isset($data['is_resc']) ? $data['is_resc'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['is_system'] = isset($data['is_system']) ? $data['is_system'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSgcCalculationImpactAllowableValues();
        if (!is_null($this->container['sgc_calculation_impact']) && !in_array($this->container['sgc_calculation_impact'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sgc_calculation_impact', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentSummaryClassificationAllowableValues();
        if (!is_null($this->container['payment_summary_classification']) && !in_array($this->container['payment_summary_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_summary_classification', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets tax_exempt
     *
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool $tax_exempt 
     *
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets expense_general_ledger_mapping_code
     *
     * @return string
     */
    public function getExpenseGeneralLedgerMappingCode()
    {
        return $this->container['expense_general_ledger_mapping_code'];
    }

    /**
     * Sets expense_general_ledger_mapping_code
     *
     * @param string $expense_general_ledger_mapping_code 
     *
     * @return $this
     */
    public function setExpenseGeneralLedgerMappingCode($expense_general_ledger_mapping_code)
    {
        $this->container['expense_general_ledger_mapping_code'] = $expense_general_ledger_mapping_code;

        return $this;
    }

    /**
     * Gets liability_general_ledger_mapping_code
     *
     * @return string
     */
    public function getLiabilityGeneralLedgerMappingCode()
    {
        return $this->container['liability_general_ledger_mapping_code'];
    }

    /**
     * Sets liability_general_ledger_mapping_code
     *
     * @param string $liability_general_ledger_mapping_code 
     *
     * @return $this
     */
    public function setLiabilityGeneralLedgerMappingCode($liability_general_ledger_mapping_code)
    {
        $this->container['liability_general_ledger_mapping_code'] = $liability_general_ledger_mapping_code;

        return $this;
    }

    /**
     * Gets sgc_calculation_impact
     *
     * @return string
     */
    public function getSgcCalculationImpact()
    {
        return $this->container['sgc_calculation_impact'];
    }

    /**
     * Sets sgc_calculation_impact
     *
     * @param string $sgc_calculation_impact 
     *
     * @return $this
     */
    public function setSgcCalculationImpact($sgc_calculation_impact)
    {
        $allowedValues = $this->getSgcCalculationImpactAllowableValues();
        if (!is_null($sgc_calculation_impact) && !in_array($sgc_calculation_impact, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sgc_calculation_impact', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sgc_calculation_impact'] = $sgc_calculation_impact;

        return $this;
    }

    /**
     * Gets payment_summary_classification
     *
     * @return string
     */
    public function getPaymentSummaryClassification()
    {
        return $this->container['payment_summary_classification'];
    }

    /**
     * Sets payment_summary_classification
     *
     * @param string $payment_summary_classification 
     *
     * @return $this
     */
    public function setPaymentSummaryClassification($payment_summary_classification)
    {
        $allowedValues = $this->getPaymentSummaryClassificationAllowableValues();
        if (!is_null($payment_summary_classification) && !in_array($payment_summary_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_summary_classification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_summary_classification'] = $payment_summary_classification;

        return $this;
    }

    /**
     * Gets is_resc
     *
     * @return bool
     */
    public function getIsResc()
    {
        return $this->container['is_resc'];
    }

    /**
     * Sets is_resc
     *
     * @param bool $is_resc 
     *
     * @return $this
     */
    public function setIsResc($is_resc)
    {
        $this->container['is_resc'] = $is_resc;

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
     * Gets is_system
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool $is_system 
     *
     * @return $this
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

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


