<?php
/**
 * SetWhiteLabelFeatureAccessModel
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
 * SetWhiteLabelFeatureAccessModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetWhiteLabelFeatureAccessModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetWhiteLabelFeatureAccessModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feature' => 'string',
        'enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feature' => null,
        'enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feature' => false,
		'enabled' => false
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
        'feature' => 'feature',
        'enabled' => 'enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature' => 'setFeature',
        'enabled' => 'setEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature' => 'getFeature',
        'enabled' => 'getEnabled'
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

    public const FEATURE_NONE = 'None';
    public const FEATURE_PAY_RUN_INCLUSIONS_REPORT = 'PayRunInclusionsReport';
    public const FEATURE_SHIFT_BIDDING = 'ShiftBidding';
    public const FEATURE_UK_STATUTORY_PAY = 'UkStatutoryPay';
    public const FEATURE_PAY_RUN_DEFAULT_AND_TIMESHEETS_PAY_RUN_STRATEGY = 'PayRunDefaultAndTimesheetsPayRunStrategy';
    public const FEATURE_DISABLE_TRY_BUY_FOR_QBO = 'DisableTryBuyForQBO';
    public const FEATURE_PAYMENT_SUMMARIES_STP_WARNING = 'PaymentSummariesSTPWarning';
    public const FEATURE_HELP_LINK_OVERRIDES = 'HelpLinkOverrides';
    public const FEATURE_PENSION_BANDING = 'PensionBanding';
    public const FEATURE_EOFY_STP_WIZARD = 'EofyStpWizard';
    public const FEATURE_PAYMENT_SUMMARY_ENABLED = 'PaymentSummaryEnabled';
    public const FEATURE_PAY_EVENT_REPORT = 'PayEventReport';
    public const FEATURE_MANUAL_ADDRESSES_UI = 'ManualAddressesUI';
    public const FEATURE_ACCESS_GLOBAL_ACH_PAYMENT_FILE = 'AccessGlobalAchPaymentFile';
    public const FEATURE_GROUPED_EARNINGS_FOR_SWD_STRATEGY = 'GroupedEarningsForSWDStrategy';
    public const FEATURE_REQUIRE_CAPTCHA_ON_LOGIN = 'RequireCaptchaOnLogin';
    public const FEATURE_REPORT_FLUSH_HEADERS = 'ReportFlushHeaders';
    public const FEATURE_REPORT_STREAM_HTML = 'ReportStreamHtml';
    public const FEATURE_AWS_PDF = 'AwsPdf';
    public const FEATURE_QBO_CHECK_ENTITLEMENTS_USING_V4_API = 'QBOCheckEntitlementsUsingV4Api';
    public const FEATURE_USE_MOCK_PENSION_SYNC_SERVICES = 'UseMockPensionSyncServices';
    public const FEATURE_UK_STATUTORY_MATERNITY_PAY = 'UkStatutoryMaternityPay';
    public const FEATURE_SINGLE_EMPLOYEE_PERMISSION_CHECK = 'SingleEmployeePermissionCheck';
    public const FEATURE_UK_STATUTORY_ADOPTION_PAY = 'UkStatutoryAdoptionPay';
    public const FEATURE_UK_STATUTORY_PATERNITY_PAY = 'UkStatutoryPaternityPay';
    public const FEATURE_UK_STATUTORY_PARENTAL_BEREAVEMENT_PAY = 'UkStatutoryParentalBereavementPay';
    public const FEATURE_RESTRICT_CLOSELY_HELD_WITH_STP = 'RestrictCloselyHeldWithStp';
    public const FEATURE_O_AUTH2_READY = 'OAuth2Ready';
    public const FEATURE_QBO_UK_BILLING_SERVICE_FAKE_DATA = 'QboUkBillingServiceFakeData';
    public const FEATURE_STRIPE_SCA = 'StripeSCA';
    public const FEATURE_DISABLE_STP_FOR_NON_PAYING_CUSTOMERS = 'DisableStpForNonPayingCustomers';
    public const FEATURE_TEMP_ALLOW_PAYROLL_FOR_NON_PAYING_CUSTOMERS = 'TempAllowPayrollForNonPayingCustomers';
    public const FEATURE_UK_TERMINATION_PAYMENTS = 'UkTerminationPayments';
    public const FEATURE_QBO_USER_GUIDE_TILE = 'QboUserGuideTile';
    public const FEATURE_QBO_DEPRECATE_ENTITLEMENTS_CHECK_WITH_COMPANY_INFO_API = 'QboDeprecateEntitlementsCheckWithCompanyInfoApi';
    public const FEATURE_SAGE_AUTOMATIC_ADDRESS_PICKER = 'SageAutomaticAddressPicker';
    public const FEATURE_HMRC_DPS_REQUESTS_TURNED_OFF = 'HmrcDpsRequestsTurnedOff';
    public const FEATURE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const FEATURE_AUDIT_INITIAL_PAY_RUN_TOTAL_DATA = 'AuditInitialPayRunTotalData';
    public const FEATURE_REGIONALISED_MAIL_CHIMP_SYNC = 'RegionalisedMailChimpSync';
    public const FEATURE_BULK_UPDATE_PAY_RATES = 'BulkUpdatePayRates';
    public const FEATURE_EMPLOYEE_NAVIGATION_IMPROVEMENT = 'EmployeeNavigationImprovement';
    public const FEATURE_CLOSELY_HELD_EMPLOYEE_QUARTERLY_REPORTING = 'CloselyHeldEmployeeQuarterlyReporting';
    public const FEATURE_API_TESTS = 'ApiTests';
    public const FEATURE_NATIONAL_INSURANCE_BACK_CALCULATION = 'NationalInsuranceBackCalculation';
    public const FEATURE_MANDATORY_CONTACT_DETAILS = 'MandatoryContactDetails';
    public const FEATURE_ROSTER_WARNINGS = 'RosterWarnings';
    public const FEATURE_SHOW_BRAND_SELECTION = 'ShowBrandSelection';
    public const FEATURE_SSL_CERTIFICATE_PROVISIONING = 'SslCertificateProvisioning';
    public const FEATURE_STRIPE_SCA_UPGRADE = 'StripeScaUpgrade';
    public const FEATURE_NAT_WEST_BANK_LINE_BULK_PAYMENT = 'NatWestBankLineBulkPayment';
    public const FEATURE_REPORTING_DIMENSIONS = 'ReportingDimensions';
    public const FEATURE_SSO_FOR_MULTIPLE_BUSINESSES_ALLOWED = 'SsoForMultipleBusinessesAllowed';
    public const FEATURE_STP_PHASE2 = 'StpPhase2';
    public const FEATURE_PEOPLES_PENSION_REPORT_FORMAT = 'PeoplesPensionReportFormat';
    public const FEATURE_RTI_CUSTOM_EMAIL_ADDRESS = 'RtiCustomEmailAddress';
    public const FEATURE_STANDARD_LIFE_PENSION_CONTRIBUTIONS_REPORT = 'StandardLifePensionContributionsReport';
    public const FEATURE_OVERRIDE_STP2_AND_CONTINUE_WITH_STP1 = 'OverrideStp2AndContinueWithStp1';
    public const FEATURE_STP_POLLING_DELAY = 'STPPollingDelay';
    public const FEATURE_RECALCULATE_CPF = 'RecalculateCpf';
    public const FEATURE_DISABLE_NET_TO_GROSS_PAY_CATEGORIES = 'DisableNetToGrossPayCategories';
    public const FEATURE_CALCULATED_LEAVE_ACCRUAL = 'CalculatedLeaveAccrual';
    public const FEATURE_PAY_RUN_V2_READ_ONLY = 'PayRunV2ReadOnly';
    public const FEATURE_SQUARE_TIMESHEETS = 'SquareTimesheets';
    public const FEATURE_PAY_RUN_V2_READ_WRITE = 'PayRunV2ReadWrite';
    public const FEATURE_CSP_REPORTING = 'CspReporting';
    public const FEATURE_INFORMALLY_PAYROLLING = 'InformallyPayrolling';
    public const FEATURE_UK_GENDER_PAY_GAP_REPORT = 'UkGenderPayGapReport';
    public const FEATURE_TAX_CODE_DECLARATION_V2 = 'TaxCodeDeclarationV2';
    public const FEATURE_PRO_RATED_HOURS_FOR_NEW_AND_TERMINATED_EMPLOYEES = 'ProRatedHoursForNewAndTerminatedEmployees';
    public const FEATURE_UK_COURT_ORDER_AEO = 'UkCourtOrderAeo';
    public const FEATURE_REMOVE_MINIMUM_SUPER_THRESHOLD = 'RemoveMinimumSuperThreshold';
    public const FEATURE_EXCLUDE_PRT_ROW_LOCKING = 'ExcludePRTRowLocking';
    public const FEATURE_QBO_BUREAU_INTEGRATION = 'QboBureauIntegration';
    public const FEATURE_PAY_DAY_FILING_EMPLOYING_ENTITIES = 'PayDayFilingEmployingEntities';
    public const FEATURE_TIMESHEETS_ONLY_FEATURE = 'TimesheetsOnlyFeature';
    public const FEATURE_SUPER_CHOICE_MARKETPLACE = 'SuperChoiceMarketplace';
    public const FEATURE_NSOW_ALLOW_DIFFERENT_SUBSIDIARIES = 'NSOWAllowDifferentSubsidiaries';
    public const FEATURE_APPLY_CUSTOM_STYLING_EH = 'ApplyCustomStylingEH';
    public const FEATURE_NET_SUITE_CONFIGURABLE_GST = 'NetSuiteConfigurableGST';
    public const FEATURE_BACK_PAY = 'BackPay';
    public const FEATURE_EMAIL_NOTIFICATION_TEMPLATES = 'EmailNotificationTemplates';
    public const FEATURE_SG_IDENTITY_TYPE_API_IMPORT_MANDATORY = 'SgIdentityTypeApiImportMandatory';
    public const FEATURE_USER_EDITABLE_AVERAGE_HOURS = 'UserEditableAverageHours';
    public const FEATURE_LOCATION_IMPORT_AND_EXPORT_IMPROVEMENT = 'LocationImportAndExportImprovement';
    public const FEATURE_UK_OCCUPATIONAL_ABSENCE = 'UkOccupationalAbsence';
    public const FEATURE_EMPLOYEE_ONBOARDING_WIZARD_V2 = 'EmployeeOnboardingWizardV2';
    public const FEATURE_VALIDATE_DATE_PAID_FOR_STP2_PAY_EVENTS = 'ValidateDatePaidForStp2PayEvents';
    public const FEATURE_PAID_AND_UNPAID_MEAL_BREAKS = 'PaidAndUnpaidMealBreaks';
    public const FEATURE_MANUAL_SUPER_BATCH = 'ManualSuperBatch';
    public const FEATURE_ZOHO_INCLUDE_IN_VAT_RETURN_FEATURE = 'ZohoIncludeInVatReturnFeature';
    public const FEATURE_PREVENT_NEGATIVE_LEAVE_BALANCES = 'PreventNegativeLeaveBalances';
    public const FEATURE_AKAHU = 'Akahu';
    public const FEATURE_DARBY_EMPLOYEE_SUMMARY = 'DARByEmployeeSummary';
    public const FEATURE_TAX_CODE_ERROR_LOGGING = 'TaxCodeErrorLogging';
    public const FEATURE_REMOVE_PRO_RATA_INVOICE_CALC = 'RemoveProRataInvoiceCalc';
    public const FEATURE_UK_PENSION_SYNC_LEGAL_AND_GENERAL = 'UkPensionSyncLegalAndGeneral';
    public const FEATURE_ADJUST_PAYE_BY_CONCURRENT_PAY_RUN = 'AdjustPayeByConcurrentPayRun';
    public const FEATURE_CAN_HIDE_BILLING_PLANS = 'CanHideBillingPlans';
    public const FEATURE_OWP_HISTORIC_EARNINGS = 'OWPHistoricEarnings';
    public const FEATURE_SWAG_ON_ACCESS = 'SwagOnAccess';
    public const FEATURE_WORK_ZONE_OFF_ACCESS = 'WorkZoneOffAccess';
    public const FEATURE_ZEPTO = 'Zepto';
    public const FEATURE_APPLY_SWAG_EMAIL_TEMPLATE = 'ApplySwagEmailTemplate';
    public const FEATURE_STUDENT_LOAN_ADJUSTMENTS = 'StudentLoanAdjustments';
    public const FEATURE_MDM_CONSUMER = 'MdmConsumer';
    public const FEATURE_MDM_PRODUCER = 'MdmProducer';
    public const FEATURE_UK_END_OF_YEAR2223 = 'UkEndOfYear2223';
    public const FEATURE_UK_SYSTEM_CALCULATIONS = 'UkSystemCalculations';
    public const FEATURE_FRANKIE_ONE = 'FrankieOne';
    public const FEATURE_IN_APP_INTEGRATION_PROMPTS = 'InAppIntegrationPrompts';
    public const FEATURE_USE_EXTERNAL_IDP = 'UseExternalIdp';
    public const FEATURE_USE_TWO_STEP_LOGIN = 'UseTwoStepLogin';
    public const FEATURE_LEAVE_ENTITLEMENT = 'LeaveEntitlement';
    public const FEATURE_EMAIL_ADDRESS_CHANGE_CONFIRMATION = 'EmailAddressChangeConfirmation';
    public const FEATURE_NON_RESC_EMPLOYER_CONTRIBUTION = 'NonRescEmployerContribution';
    public const FEATURE_SLACK = 'Slack';
    public const FEATURE_DASHBOARD_QBO_STANDALONE_PAYROLL = 'DashboardQboStandalonePayroll';
    public const FEATURE_WORK_ZONE_OFF_ACCESS_EXCLUSION = 'WorkZoneOffAccessExclusion';
    public const FEATURE_QBO_STANDALONE_PAYROLL = 'QBOStandalonePayroll';
    public const FEATURE_FREE_AGENT_INCLUDE_USER_DATA_IN_JOURNAL_ENTRIES = 'FreeAgentIncludeUserDataInJournalEntries';
    public const FEATURE_NEGATE_MAILCHIMP_IN_WHITE_LABEL_SAVE = 'NegateMailchimpInWhiteLabelSave';
    public const FEATURE_MALAYSIA_ORDINARY_RATE = 'MalaysiaOrdinaryRate';
    public const FEATURE_IRREGULAR_HOURS = 'IrregularHours';
    public const FEATURE_SAASU_CREDENTIALS_MIGRATION = 'SaasuCredentialsMigration';
    public const FEATURE_ALLOW_BUSINESS_EMPLOYEE_GROUPS = 'AllowBusinessEmployeeGroups';
    public const FEATURE_TIMESHEET_DIMENSIONS = 'TimesheetDimensions';
    public const FEATURE_NET_SUITE_ASYNC_JOURNAL_POST = 'NetSuiteAsyncJournalPost';
    public const FEATURE_BUSINESS_CENTRAL_ENVIRONMENTS = 'BusinessCentralEnvironments';
    public const FEATURE_HIDE_EMAIL_LOGIN_INSTRUCTIONS = 'HideEmailLoginInstructions';
    public const FEATURE_CAXTON = 'Caxton';
    public const FEATURE_EMAIL_ADDRESS_CHANGE_CONFIRMATION_OFF = 'EmailAddressChangeConfirmationOff';
    public const FEATURE_GENERATE_AND_SEND_USAGE_FOR_BUSINESS_BILLED_DIRECTLY = 'GenerateAndSendUsageForBusinessBilledDirectly';
    public const FEATURE_ROSTERING_UPLIFT = 'RosteringUplift';
    public const FEATURE_UK_PAY_SCHEDULE_PRO_RATA = 'UkPayScheduleProRata';
    public const FEATURE_OVERRIDE_INCLUDE_SCOPES_IN_QBO_CONNECTION = 'OverrideIncludeScopesInQboConnection';
    public const FEATURE_QBO_ONLY_COMMIT_VALID_TOKENS_TO_REDIS = 'QboOnlyCommitValidTokensToRedis';
    public const FEATURE_OVERRIDE_SCOPES_IF_EXISTING_TOKEN_HAS_BILLING_SCOPE = 'OverrideScopesIfExistingTokenHasBillingScope';
    public const FEATURE_REFRESH_TOKEN_IN_BILLING_ENTITLEMENTS_COMMAND = 'RefreshTokenInBillingEntitlementsCommand';
    public const FEATURE_AUTO_PAY_RUN_VARIABLE_DATE_PAID = 'AutoPayRunVariableDatePaid';
    public const FEATURE_ROSTERING_UPLIFT_BUDGET_AS_HOURS = 'RosteringUpliftBudgetAsHours';
    public const FEATURE_UK_OCCUPATIONAL_MATERNITY_LEAVE = 'UkOccupationalMaternityLeave';
    public const FEATURE_SMS_SENDER_NAME_SUB_ACCOUNT = 'SmsSenderNameSubAccount';
    public const FEATURE_ONLY_FIRM_CHECK_NEW_QBO_BUSINESSES = 'OnlyFirmCheckNewQboBusinesses';
    public const FEATURE_BYPASS_QBO_STANDALONE_FLAG_USING_REALM_IDS = 'BypassQboStandaloneFlagUsingRealmIds';
    public const FEATURE_MY_USE_CALENDAR_DAY_FOR_INCOMPLETE_MONTH = 'MyUseCalendarDayForIncompleteMonth';
    public const FEATURE_USE_SPLIT_O_AUTH_TOKEN_REPOSITORY = 'UseSplitOAuthTokenRepository';
    public const FEATURE_LEAVE_ENTITLEMENT_SEA = 'LeaveEntitlementSea';
    public const FEATURE_GATEWAY_SERVICES_LOGIN_POPUP = 'GatewayServicesLoginPopup';
    public const FEATURE_RETURN_TO_WORK_LEAVE = 'ReturnToWorkLeave';
    public const FEATURE_ADDITIONAL_SEA_PAYSLIP_SETTINGS = 'AdditionalSEAPayslipSettings';
    public const FEATURE_DELETE_PAY_RUN_DEADLOCK_AND_FOREIGN_KEY_FIX = 'DeletePayRunDeadlockAndForeignKeyFix';
    public const FEATURE_SICK_REASON_REPORT = 'SickReasonReport';
    public const FEATURE_DUPLICATE_NI_RECORD_FIX = 'DuplicateNIRecordFix';
    public const FEATURE_INCORRECT_P45_MONTH_FOR_T0_TAX_CODE_FIX = 'IncorrectP45MonthForT0TaxCodeFix';
    public const FEATURE_USE_SPLIT_BILLING_ENTITLEMENTS_COMMAND = 'UseSplitBillingEntitlementsCommand';
    public const FEATURE_YTD_INCORRECT_BACK_CALC_NUMBERS_BUG_FIX = 'YTDIncorrectBackCalcNumbersBugFix';
    public const FEATURE_SET_DEFAULT_BILLING_PLAN_BY_NAME_IF_NEW_WL = 'SetDefaultBillingPlanByNameIfNewWL';
    public const FEATURE_PAYR495_FIX_FOR_CONTEXT_NOT_SET_CORRECTLY = 'PAYR495_FixForContextNotSetCorrectly';
    public const FEATURE_QBO_KEEP_NAVIGATION_MODE_ON_SSO_REDIRECT = 'QboKeepNavigationModeOnSSORedirect';
    public const FEATURE_USE_SOURCE_INSTEAD_OF_CHECKING_ENTITLEMENTS = 'UseSourceInsteadOfCheckingEntitlements';
    public const FEATURE_STORE_STANDALONE_PAYROLL_TOKEN_IN_OIDC_TOKEN_TABLE = 'StoreStandalonePayrollTokenInOidcTokenTable';
    public const FEATURE_SYNC_QUICK_BOOKS_BUSINESS_USING_OIDC_TOKEN = 'SyncQuickBooksBusinessUsingOidcToken';
    public const FEATURE_QUICK_BOOKS_REVOKE_TOKEN_ADMIN_BUTTON_IN374 = 'QuickBooksRevokeTokenAdminButton_IN374';
    public const FEATURE_NP131_LONG_RUNNING_TASKS = 'NP131LongRunningTasks';
    public const FEATURE_HMRC_DPS_NOTICES = 'HmrcDpsNotices';
    public const FEATURE_COMPANY_INFO_REALM_ID_IN383 = 'CompanyInfoRealmId_IN383';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE_NONE,
            self::FEATURE_PAY_RUN_INCLUSIONS_REPORT,
            self::FEATURE_SHIFT_BIDDING,
            self::FEATURE_UK_STATUTORY_PAY,
            self::FEATURE_PAY_RUN_DEFAULT_AND_TIMESHEETS_PAY_RUN_STRATEGY,
            self::FEATURE_DISABLE_TRY_BUY_FOR_QBO,
            self::FEATURE_PAYMENT_SUMMARIES_STP_WARNING,
            self::FEATURE_HELP_LINK_OVERRIDES,
            self::FEATURE_PENSION_BANDING,
            self::FEATURE_EOFY_STP_WIZARD,
            self::FEATURE_PAYMENT_SUMMARY_ENABLED,
            self::FEATURE_PAY_EVENT_REPORT,
            self::FEATURE_MANUAL_ADDRESSES_UI,
            self::FEATURE_ACCESS_GLOBAL_ACH_PAYMENT_FILE,
            self::FEATURE_GROUPED_EARNINGS_FOR_SWD_STRATEGY,
            self::FEATURE_REQUIRE_CAPTCHA_ON_LOGIN,
            self::FEATURE_REPORT_FLUSH_HEADERS,
            self::FEATURE_REPORT_STREAM_HTML,
            self::FEATURE_AWS_PDF,
            self::FEATURE_QBO_CHECK_ENTITLEMENTS_USING_V4_API,
            self::FEATURE_USE_MOCK_PENSION_SYNC_SERVICES,
            self::FEATURE_UK_STATUTORY_MATERNITY_PAY,
            self::FEATURE_SINGLE_EMPLOYEE_PERMISSION_CHECK,
            self::FEATURE_UK_STATUTORY_ADOPTION_PAY,
            self::FEATURE_UK_STATUTORY_PATERNITY_PAY,
            self::FEATURE_UK_STATUTORY_PARENTAL_BEREAVEMENT_PAY,
            self::FEATURE_RESTRICT_CLOSELY_HELD_WITH_STP,
            self::FEATURE_O_AUTH2_READY,
            self::FEATURE_QBO_UK_BILLING_SERVICE_FAKE_DATA,
            self::FEATURE_STRIPE_SCA,
            self::FEATURE_DISABLE_STP_FOR_NON_PAYING_CUSTOMERS,
            self::FEATURE_TEMP_ALLOW_PAYROLL_FOR_NON_PAYING_CUSTOMERS,
            self::FEATURE_UK_TERMINATION_PAYMENTS,
            self::FEATURE_QBO_USER_GUIDE_TILE,
            self::FEATURE_QBO_DEPRECATE_ENTITLEMENTS_CHECK_WITH_COMPANY_INFO_API,
            self::FEATURE_SAGE_AUTOMATIC_ADDRESS_PICKER,
            self::FEATURE_HMRC_DPS_REQUESTS_TURNED_OFF,
            self::FEATURE_ACTIVE_CAMPAIGN,
            self::FEATURE_AUDIT_INITIAL_PAY_RUN_TOTAL_DATA,
            self::FEATURE_REGIONALISED_MAIL_CHIMP_SYNC,
            self::FEATURE_BULK_UPDATE_PAY_RATES,
            self::FEATURE_EMPLOYEE_NAVIGATION_IMPROVEMENT,
            self::FEATURE_CLOSELY_HELD_EMPLOYEE_QUARTERLY_REPORTING,
            self::FEATURE_API_TESTS,
            self::FEATURE_NATIONAL_INSURANCE_BACK_CALCULATION,
            self::FEATURE_MANDATORY_CONTACT_DETAILS,
            self::FEATURE_ROSTER_WARNINGS,
            self::FEATURE_SHOW_BRAND_SELECTION,
            self::FEATURE_SSL_CERTIFICATE_PROVISIONING,
            self::FEATURE_STRIPE_SCA_UPGRADE,
            self::FEATURE_NAT_WEST_BANK_LINE_BULK_PAYMENT,
            self::FEATURE_REPORTING_DIMENSIONS,
            self::FEATURE_SSO_FOR_MULTIPLE_BUSINESSES_ALLOWED,
            self::FEATURE_STP_PHASE2,
            self::FEATURE_PEOPLES_PENSION_REPORT_FORMAT,
            self::FEATURE_RTI_CUSTOM_EMAIL_ADDRESS,
            self::FEATURE_STANDARD_LIFE_PENSION_CONTRIBUTIONS_REPORT,
            self::FEATURE_OVERRIDE_STP2_AND_CONTINUE_WITH_STP1,
            self::FEATURE_STP_POLLING_DELAY,
            self::FEATURE_RECALCULATE_CPF,
            self::FEATURE_DISABLE_NET_TO_GROSS_PAY_CATEGORIES,
            self::FEATURE_CALCULATED_LEAVE_ACCRUAL,
            self::FEATURE_PAY_RUN_V2_READ_ONLY,
            self::FEATURE_SQUARE_TIMESHEETS,
            self::FEATURE_PAY_RUN_V2_READ_WRITE,
            self::FEATURE_CSP_REPORTING,
            self::FEATURE_INFORMALLY_PAYROLLING,
            self::FEATURE_UK_GENDER_PAY_GAP_REPORT,
            self::FEATURE_TAX_CODE_DECLARATION_V2,
            self::FEATURE_PRO_RATED_HOURS_FOR_NEW_AND_TERMINATED_EMPLOYEES,
            self::FEATURE_UK_COURT_ORDER_AEO,
            self::FEATURE_REMOVE_MINIMUM_SUPER_THRESHOLD,
            self::FEATURE_EXCLUDE_PRT_ROW_LOCKING,
            self::FEATURE_QBO_BUREAU_INTEGRATION,
            self::FEATURE_PAY_DAY_FILING_EMPLOYING_ENTITIES,
            self::FEATURE_TIMESHEETS_ONLY_FEATURE,
            self::FEATURE_SUPER_CHOICE_MARKETPLACE,
            self::FEATURE_NSOW_ALLOW_DIFFERENT_SUBSIDIARIES,
            self::FEATURE_APPLY_CUSTOM_STYLING_EH,
            self::FEATURE_NET_SUITE_CONFIGURABLE_GST,
            self::FEATURE_BACK_PAY,
            self::FEATURE_EMAIL_NOTIFICATION_TEMPLATES,
            self::FEATURE_SG_IDENTITY_TYPE_API_IMPORT_MANDATORY,
            self::FEATURE_USER_EDITABLE_AVERAGE_HOURS,
            self::FEATURE_LOCATION_IMPORT_AND_EXPORT_IMPROVEMENT,
            self::FEATURE_UK_OCCUPATIONAL_ABSENCE,
            self::FEATURE_EMPLOYEE_ONBOARDING_WIZARD_V2,
            self::FEATURE_VALIDATE_DATE_PAID_FOR_STP2_PAY_EVENTS,
            self::FEATURE_PAID_AND_UNPAID_MEAL_BREAKS,
            self::FEATURE_MANUAL_SUPER_BATCH,
            self::FEATURE_ZOHO_INCLUDE_IN_VAT_RETURN_FEATURE,
            self::FEATURE_PREVENT_NEGATIVE_LEAVE_BALANCES,
            self::FEATURE_AKAHU,
            self::FEATURE_DARBY_EMPLOYEE_SUMMARY,
            self::FEATURE_TAX_CODE_ERROR_LOGGING,
            self::FEATURE_REMOVE_PRO_RATA_INVOICE_CALC,
            self::FEATURE_UK_PENSION_SYNC_LEGAL_AND_GENERAL,
            self::FEATURE_ADJUST_PAYE_BY_CONCURRENT_PAY_RUN,
            self::FEATURE_CAN_HIDE_BILLING_PLANS,
            self::FEATURE_OWP_HISTORIC_EARNINGS,
            self::FEATURE_SWAG_ON_ACCESS,
            self::FEATURE_WORK_ZONE_OFF_ACCESS,
            self::FEATURE_ZEPTO,
            self::FEATURE_APPLY_SWAG_EMAIL_TEMPLATE,
            self::FEATURE_STUDENT_LOAN_ADJUSTMENTS,
            self::FEATURE_MDM_CONSUMER,
            self::FEATURE_MDM_PRODUCER,
            self::FEATURE_UK_END_OF_YEAR2223,
            self::FEATURE_UK_SYSTEM_CALCULATIONS,
            self::FEATURE_FRANKIE_ONE,
            self::FEATURE_IN_APP_INTEGRATION_PROMPTS,
            self::FEATURE_USE_EXTERNAL_IDP,
            self::FEATURE_USE_TWO_STEP_LOGIN,
            self::FEATURE_LEAVE_ENTITLEMENT,
            self::FEATURE_EMAIL_ADDRESS_CHANGE_CONFIRMATION,
            self::FEATURE_NON_RESC_EMPLOYER_CONTRIBUTION,
            self::FEATURE_SLACK,
            self::FEATURE_DASHBOARD_QBO_STANDALONE_PAYROLL,
            self::FEATURE_WORK_ZONE_OFF_ACCESS_EXCLUSION,
            self::FEATURE_QBO_STANDALONE_PAYROLL,
            self::FEATURE_FREE_AGENT_INCLUDE_USER_DATA_IN_JOURNAL_ENTRIES,
            self::FEATURE_NEGATE_MAILCHIMP_IN_WHITE_LABEL_SAVE,
            self::FEATURE_MALAYSIA_ORDINARY_RATE,
            self::FEATURE_IRREGULAR_HOURS,
            self::FEATURE_SAASU_CREDENTIALS_MIGRATION,
            self::FEATURE_ALLOW_BUSINESS_EMPLOYEE_GROUPS,
            self::FEATURE_TIMESHEET_DIMENSIONS,
            self::FEATURE_NET_SUITE_ASYNC_JOURNAL_POST,
            self::FEATURE_BUSINESS_CENTRAL_ENVIRONMENTS,
            self::FEATURE_HIDE_EMAIL_LOGIN_INSTRUCTIONS,
            self::FEATURE_CAXTON,
            self::FEATURE_EMAIL_ADDRESS_CHANGE_CONFIRMATION_OFF,
            self::FEATURE_GENERATE_AND_SEND_USAGE_FOR_BUSINESS_BILLED_DIRECTLY,
            self::FEATURE_ROSTERING_UPLIFT,
            self::FEATURE_UK_PAY_SCHEDULE_PRO_RATA,
            self::FEATURE_OVERRIDE_INCLUDE_SCOPES_IN_QBO_CONNECTION,
            self::FEATURE_QBO_ONLY_COMMIT_VALID_TOKENS_TO_REDIS,
            self::FEATURE_OVERRIDE_SCOPES_IF_EXISTING_TOKEN_HAS_BILLING_SCOPE,
            self::FEATURE_REFRESH_TOKEN_IN_BILLING_ENTITLEMENTS_COMMAND,
            self::FEATURE_AUTO_PAY_RUN_VARIABLE_DATE_PAID,
            self::FEATURE_ROSTERING_UPLIFT_BUDGET_AS_HOURS,
            self::FEATURE_UK_OCCUPATIONAL_MATERNITY_LEAVE,
            self::FEATURE_SMS_SENDER_NAME_SUB_ACCOUNT,
            self::FEATURE_ONLY_FIRM_CHECK_NEW_QBO_BUSINESSES,
            self::FEATURE_BYPASS_QBO_STANDALONE_FLAG_USING_REALM_IDS,
            self::FEATURE_MY_USE_CALENDAR_DAY_FOR_INCOMPLETE_MONTH,
            self::FEATURE_USE_SPLIT_O_AUTH_TOKEN_REPOSITORY,
            self::FEATURE_LEAVE_ENTITLEMENT_SEA,
            self::FEATURE_GATEWAY_SERVICES_LOGIN_POPUP,
            self::FEATURE_RETURN_TO_WORK_LEAVE,
            self::FEATURE_ADDITIONAL_SEA_PAYSLIP_SETTINGS,
            self::FEATURE_DELETE_PAY_RUN_DEADLOCK_AND_FOREIGN_KEY_FIX,
            self::FEATURE_SICK_REASON_REPORT,
            self::FEATURE_DUPLICATE_NI_RECORD_FIX,
            self::FEATURE_INCORRECT_P45_MONTH_FOR_T0_TAX_CODE_FIX,
            self::FEATURE_USE_SPLIT_BILLING_ENTITLEMENTS_COMMAND,
            self::FEATURE_YTD_INCORRECT_BACK_CALC_NUMBERS_BUG_FIX,
            self::FEATURE_SET_DEFAULT_BILLING_PLAN_BY_NAME_IF_NEW_WL,
            self::FEATURE_PAYR495_FIX_FOR_CONTEXT_NOT_SET_CORRECTLY,
            self::FEATURE_QBO_KEEP_NAVIGATION_MODE_ON_SSO_REDIRECT,
            self::FEATURE_USE_SOURCE_INSTEAD_OF_CHECKING_ENTITLEMENTS,
            self::FEATURE_STORE_STANDALONE_PAYROLL_TOKEN_IN_OIDC_TOKEN_TABLE,
            self::FEATURE_SYNC_QUICK_BOOKS_BUSINESS_USING_OIDC_TOKEN,
            self::FEATURE_QUICK_BOOKS_REVOKE_TOKEN_ADMIN_BUTTON_IN374,
            self::FEATURE_NP131_LONG_RUNNING_TASKS,
            self::FEATURE_HMRC_DPS_NOTICES,
            self::FEATURE_COMPANY_INFO_REALM_ID_IN383,
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
        $this->setIfExists('feature', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
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

        $allowedValues = $this->getFeatureAllowableValues();
        if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feature', must be one of '%s'",
                $this->container['feature'],
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
     * Gets feature
     *
     * @return string|null
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param string|null $feature 
     *
     * @return self
     */
    public function setFeature($feature)
    {
        if (is_null($feature)) {
            throw new \InvalidArgumentException('non-nullable feature cannot be null');
        }
        $allowedValues = $this->getFeatureAllowableValues();
        if (!in_array($feature, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feature', must be one of '%s'",
                    $feature,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled 
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

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

