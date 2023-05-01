<?php
/**
 * AuGrossToNetResponseModel
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
 * AuGrossToNetResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuGrossToNetResponseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuGrossToNetResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payg' => 'double',
        'sfss' => 'double',
        'help' => 'double',
        'net_earnings' => 'double',
        'sgc' => 'double',
        'employer_contribution' => 'double',
        'non_resc_employer_contribution' => 'double',
        'total_gross_plus_super' => 'double',
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'primary_location_id' => 'int',
        'primary_location' => 'string',
        'external_id' => 'string',
        'total_hours' => 'double',
        'gross_earnings' => 'map[string,double]',
        'total_gross_earnings' => 'double',
        'total_tax_exempt_earnings' => 'double',
        'pre_tax_deductions' => 'map[string,double]',
        'total_pre_tax_deductions' => 'double',
        'taxable_earnings' => 'double',
        'post_tax_deductions' => 'map[string,double]',
        'total_post_tax_deductions' => 'double',
        'expenses' => 'map[string,double]',
        'total_expenses' => 'double',
        'bank_payments' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payg' => 'double',
        'sfss' => 'double',
        'help' => 'double',
        'net_earnings' => 'double',
        'sgc' => 'double',
        'employer_contribution' => 'double',
        'non_resc_employer_contribution' => 'double',
        'total_gross_plus_super' => 'double',
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'primary_location_id' => 'int32',
        'primary_location' => null,
        'external_id' => null,
        'total_hours' => 'double',
        'gross_earnings' => 'double',
        'total_gross_earnings' => 'double',
        'total_tax_exempt_earnings' => 'double',
        'pre_tax_deductions' => 'double',
        'total_pre_tax_deductions' => 'double',
        'taxable_earnings' => 'double',
        'post_tax_deductions' => 'double',
        'total_post_tax_deductions' => 'double',
        'expenses' => 'double',
        'total_expenses' => 'double',
        'bank_payments' => 'double'
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
        'payg' => 'payg',
        'sfss' => 'sfss',
        'help' => 'help',
        'net_earnings' => 'netEarnings',
        'sgc' => 'sgc',
        'employer_contribution' => 'employerContribution',
        'non_resc_employer_contribution' => 'nonRescEmployerContribution',
        'total_gross_plus_super' => 'totalGrossPlusSuper',
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'primary_location_id' => 'primaryLocationId',
        'primary_location' => 'primaryLocation',
        'external_id' => 'externalId',
        'total_hours' => 'totalHours',
        'gross_earnings' => 'grossEarnings',
        'total_gross_earnings' => 'totalGrossEarnings',
        'total_tax_exempt_earnings' => 'totalTaxExemptEarnings',
        'pre_tax_deductions' => 'preTaxDeductions',
        'total_pre_tax_deductions' => 'totalPreTaxDeductions',
        'taxable_earnings' => 'taxableEarnings',
        'post_tax_deductions' => 'postTaxDeductions',
        'total_post_tax_deductions' => 'totalPostTaxDeductions',
        'expenses' => 'expenses',
        'total_expenses' => 'totalExpenses',
        'bank_payments' => 'bankPayments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payg' => 'setPayg',
        'sfss' => 'setSfss',
        'help' => 'setHelp',
        'net_earnings' => 'setNetEarnings',
        'sgc' => 'setSgc',
        'employer_contribution' => 'setEmployerContribution',
        'non_resc_employer_contribution' => 'setNonRescEmployerContribution',
        'total_gross_plus_super' => 'setTotalGrossPlusSuper',
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'primary_location_id' => 'setPrimaryLocationId',
        'primary_location' => 'setPrimaryLocation',
        'external_id' => 'setExternalId',
        'total_hours' => 'setTotalHours',
        'gross_earnings' => 'setGrossEarnings',
        'total_gross_earnings' => 'setTotalGrossEarnings',
        'total_tax_exempt_earnings' => 'setTotalTaxExemptEarnings',
        'pre_tax_deductions' => 'setPreTaxDeductions',
        'total_pre_tax_deductions' => 'setTotalPreTaxDeductions',
        'taxable_earnings' => 'setTaxableEarnings',
        'post_tax_deductions' => 'setPostTaxDeductions',
        'total_post_tax_deductions' => 'setTotalPostTaxDeductions',
        'expenses' => 'setExpenses',
        'total_expenses' => 'setTotalExpenses',
        'bank_payments' => 'setBankPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payg' => 'getPayg',
        'sfss' => 'getSfss',
        'help' => 'getHelp',
        'net_earnings' => 'getNetEarnings',
        'sgc' => 'getSgc',
        'employer_contribution' => 'getEmployerContribution',
        'non_resc_employer_contribution' => 'getNonRescEmployerContribution',
        'total_gross_plus_super' => 'getTotalGrossPlusSuper',
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'primary_location_id' => 'getPrimaryLocationId',
        'primary_location' => 'getPrimaryLocation',
        'external_id' => 'getExternalId',
        'total_hours' => 'getTotalHours',
        'gross_earnings' => 'getGrossEarnings',
        'total_gross_earnings' => 'getTotalGrossEarnings',
        'total_tax_exempt_earnings' => 'getTotalTaxExemptEarnings',
        'pre_tax_deductions' => 'getPreTaxDeductions',
        'total_pre_tax_deductions' => 'getTotalPreTaxDeductions',
        'taxable_earnings' => 'getTaxableEarnings',
        'post_tax_deductions' => 'getPostTaxDeductions',
        'total_post_tax_deductions' => 'getTotalPostTaxDeductions',
        'expenses' => 'getExpenses',
        'total_expenses' => 'getTotalExpenses',
        'bank_payments' => 'getBankPayments'
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
        $this->container['payg'] = isset($data['payg']) ? $data['payg'] : null;
        $this->container['sfss'] = isset($data['sfss']) ? $data['sfss'] : null;
        $this->container['help'] = isset($data['help']) ? $data['help'] : null;
        $this->container['net_earnings'] = isset($data['net_earnings']) ? $data['net_earnings'] : null;
        $this->container['sgc'] = isset($data['sgc']) ? $data['sgc'] : null;
        $this->container['employer_contribution'] = isset($data['employer_contribution']) ? $data['employer_contribution'] : null;
        $this->container['non_resc_employer_contribution'] = isset($data['non_resc_employer_contribution']) ? $data['non_resc_employer_contribution'] : null;
        $this->container['total_gross_plus_super'] = isset($data['total_gross_plus_super']) ? $data['total_gross_plus_super'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['primary_location_id'] = isset($data['primary_location_id']) ? $data['primary_location_id'] : null;
        $this->container['primary_location'] = isset($data['primary_location']) ? $data['primary_location'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['total_hours'] = isset($data['total_hours']) ? $data['total_hours'] : null;
        $this->container['gross_earnings'] = isset($data['gross_earnings']) ? $data['gross_earnings'] : null;
        $this->container['total_gross_earnings'] = isset($data['total_gross_earnings']) ? $data['total_gross_earnings'] : null;
        $this->container['total_tax_exempt_earnings'] = isset($data['total_tax_exempt_earnings']) ? $data['total_tax_exempt_earnings'] : null;
        $this->container['pre_tax_deductions'] = isset($data['pre_tax_deductions']) ? $data['pre_tax_deductions'] : null;
        $this->container['total_pre_tax_deductions'] = isset($data['total_pre_tax_deductions']) ? $data['total_pre_tax_deductions'] : null;
        $this->container['taxable_earnings'] = isset($data['taxable_earnings']) ? $data['taxable_earnings'] : null;
        $this->container['post_tax_deductions'] = isset($data['post_tax_deductions']) ? $data['post_tax_deductions'] : null;
        $this->container['total_post_tax_deductions'] = isset($data['total_post_tax_deductions']) ? $data['total_post_tax_deductions'] : null;
        $this->container['expenses'] = isset($data['expenses']) ? $data['expenses'] : null;
        $this->container['total_expenses'] = isset($data['total_expenses']) ? $data['total_expenses'] : null;
        $this->container['bank_payments'] = isset($data['bank_payments']) ? $data['bank_payments'] : null;
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
     * Gets payg
     *
     * @return double
     */
    public function getPayg()
    {
        return $this->container['payg'];
    }

    /**
     * Sets payg
     *
     * @param double $payg 
     *
     * @return $this
     */
    public function setPayg($payg)
    {
        $this->container['payg'] = $payg;

        return $this;
    }

    /**
     * Gets sfss
     *
     * @return double
     */
    public function getSfss()
    {
        return $this->container['sfss'];
    }

    /**
     * Sets sfss
     *
     * @param double $sfss 
     *
     * @return $this
     */
    public function setSfss($sfss)
    {
        $this->container['sfss'] = $sfss;

        return $this;
    }

    /**
     * Gets help
     *
     * @return double
     */
    public function getHelp()
    {
        return $this->container['help'];
    }

    /**
     * Sets help
     *
     * @param double $help 
     *
     * @return $this
     */
    public function setHelp($help)
    {
        $this->container['help'] = $help;

        return $this;
    }

    /**
     * Gets net_earnings
     *
     * @return double
     */
    public function getNetEarnings()
    {
        return $this->container['net_earnings'];
    }

    /**
     * Sets net_earnings
     *
     * @param double $net_earnings 
     *
     * @return $this
     */
    public function setNetEarnings($net_earnings)
    {
        $this->container['net_earnings'] = $net_earnings;

        return $this;
    }

    /**
     * Gets sgc
     *
     * @return double
     */
    public function getSgc()
    {
        return $this->container['sgc'];
    }

    /**
     * Sets sgc
     *
     * @param double $sgc 
     *
     * @return $this
     */
    public function setSgc($sgc)
    {
        $this->container['sgc'] = $sgc;

        return $this;
    }

    /**
     * Gets employer_contribution
     *
     * @return double
     */
    public function getEmployerContribution()
    {
        return $this->container['employer_contribution'];
    }

    /**
     * Sets employer_contribution
     *
     * @param double $employer_contribution 
     *
     * @return $this
     */
    public function setEmployerContribution($employer_contribution)
    {
        $this->container['employer_contribution'] = $employer_contribution;

        return $this;
    }

    /**
     * Gets non_resc_employer_contribution
     *
     * @return double
     */
    public function getNonRescEmployerContribution()
    {
        return $this->container['non_resc_employer_contribution'];
    }

    /**
     * Sets non_resc_employer_contribution
     *
     * @param double $non_resc_employer_contribution 
     *
     * @return $this
     */
    public function setNonRescEmployerContribution($non_resc_employer_contribution)
    {
        $this->container['non_resc_employer_contribution'] = $non_resc_employer_contribution;

        return $this;
    }

    /**
     * Gets total_gross_plus_super
     *
     * @return double
     */
    public function getTotalGrossPlusSuper()
    {
        return $this->container['total_gross_plus_super'];
    }

    /**
     * Sets total_gross_plus_super
     *
     * @param double $total_gross_plus_super 
     *
     * @return $this
     */
    public function setTotalGrossPlusSuper($total_gross_plus_super)
    {
        $this->container['total_gross_plus_super'] = $total_gross_plus_super;

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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name 
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname 
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets primary_location_id
     *
     * @return int
     */
    public function getPrimaryLocationId()
    {
        return $this->container['primary_location_id'];
    }

    /**
     * Sets primary_location_id
     *
     * @param int $primary_location_id 
     *
     * @return $this
     */
    public function setPrimaryLocationId($primary_location_id)
    {
        $this->container['primary_location_id'] = $primary_location_id;

        return $this;
    }

    /**
     * Gets primary_location
     *
     * @return string
     */
    public function getPrimaryLocation()
    {
        return $this->container['primary_location'];
    }

    /**
     * Sets primary_location
     *
     * @param string $primary_location 
     *
     * @return $this
     */
    public function setPrimaryLocation($primary_location)
    {
        $this->container['primary_location'] = $primary_location;

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
     * Gets gross_earnings
     *
     * @return map[string,double]
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param map[string,double] $gross_earnings 
     *
     * @return $this
     */
    public function setGrossEarnings($gross_earnings)
    {
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets total_gross_earnings
     *
     * @return double
     */
    public function getTotalGrossEarnings()
    {
        return $this->container['total_gross_earnings'];
    }

    /**
     * Sets total_gross_earnings
     *
     * @param double $total_gross_earnings 
     *
     * @return $this
     */
    public function setTotalGrossEarnings($total_gross_earnings)
    {
        $this->container['total_gross_earnings'] = $total_gross_earnings;

        return $this;
    }

    /**
     * Gets total_tax_exempt_earnings
     *
     * @return double
     */
    public function getTotalTaxExemptEarnings()
    {
        return $this->container['total_tax_exempt_earnings'];
    }

    /**
     * Sets total_tax_exempt_earnings
     *
     * @param double $total_tax_exempt_earnings 
     *
     * @return $this
     */
    public function setTotalTaxExemptEarnings($total_tax_exempt_earnings)
    {
        $this->container['total_tax_exempt_earnings'] = $total_tax_exempt_earnings;

        return $this;
    }

    /**
     * Gets pre_tax_deductions
     *
     * @return map[string,double]
     */
    public function getPreTaxDeductions()
    {
        return $this->container['pre_tax_deductions'];
    }

    /**
     * Sets pre_tax_deductions
     *
     * @param map[string,double] $pre_tax_deductions 
     *
     * @return $this
     */
    public function setPreTaxDeductions($pre_tax_deductions)
    {
        $this->container['pre_tax_deductions'] = $pre_tax_deductions;

        return $this;
    }

    /**
     * Gets total_pre_tax_deductions
     *
     * @return double
     */
    public function getTotalPreTaxDeductions()
    {
        return $this->container['total_pre_tax_deductions'];
    }

    /**
     * Sets total_pre_tax_deductions
     *
     * @param double $total_pre_tax_deductions 
     *
     * @return $this
     */
    public function setTotalPreTaxDeductions($total_pre_tax_deductions)
    {
        $this->container['total_pre_tax_deductions'] = $total_pre_tax_deductions;

        return $this;
    }

    /**
     * Gets taxable_earnings
     *
     * @return double
     */
    public function getTaxableEarnings()
    {
        return $this->container['taxable_earnings'];
    }

    /**
     * Sets taxable_earnings
     *
     * @param double $taxable_earnings 
     *
     * @return $this
     */
    public function setTaxableEarnings($taxable_earnings)
    {
        $this->container['taxable_earnings'] = $taxable_earnings;

        return $this;
    }

    /**
     * Gets post_tax_deductions
     *
     * @return map[string,double]
     */
    public function getPostTaxDeductions()
    {
        return $this->container['post_tax_deductions'];
    }

    /**
     * Sets post_tax_deductions
     *
     * @param map[string,double] $post_tax_deductions 
     *
     * @return $this
     */
    public function setPostTaxDeductions($post_tax_deductions)
    {
        $this->container['post_tax_deductions'] = $post_tax_deductions;

        return $this;
    }

    /**
     * Gets total_post_tax_deductions
     *
     * @return double
     */
    public function getTotalPostTaxDeductions()
    {
        return $this->container['total_post_tax_deductions'];
    }

    /**
     * Sets total_post_tax_deductions
     *
     * @param double $total_post_tax_deductions 
     *
     * @return $this
     */
    public function setTotalPostTaxDeductions($total_post_tax_deductions)
    {
        $this->container['total_post_tax_deductions'] = $total_post_tax_deductions;

        return $this;
    }

    /**
     * Gets expenses
     *
     * @return map[string,double]
     */
    public function getExpenses()
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param map[string,double] $expenses 
     *
     * @return $this
     */
    public function setExpenses($expenses)
    {
        $this->container['expenses'] = $expenses;

        return $this;
    }

    /**
     * Gets total_expenses
     *
     * @return double
     */
    public function getTotalExpenses()
    {
        return $this->container['total_expenses'];
    }

    /**
     * Sets total_expenses
     *
     * @param double $total_expenses 
     *
     * @return $this
     */
    public function setTotalExpenses($total_expenses)
    {
        $this->container['total_expenses'] = $total_expenses;

        return $this;
    }

    /**
     * Gets bank_payments
     *
     * @return double
     */
    public function getBankPayments()
    {
        return $this->container['bank_payments'];
    }

    /**
     * Sets bank_payments
     *
     * @param double $bank_payments 
     *
     * @return $this
     */
    public function setBankPayments($bank_payments)
    {
        $this->container['bank_payments'] = $bank_payments;

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


