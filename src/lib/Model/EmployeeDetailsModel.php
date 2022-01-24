<?php
/**
 * EmployeeDetailsModel
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
 * EmployeeDetailsModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'first_name' => 'string',
        'preferred_name' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'gender' => 'string',
        'date_of_birth' => '\DateTime',
        'anniversary_date' => '\DateTime',
        'external_id' => 'string',
        'residential_street_address' => 'string',
        'residential_address_line2' => 'string',
        'residential_suburb' => 'string',
        'residential_state' => 'string',
        'residential_post_code' => 'string',
        'postal_street_address' => 'string',
        'postal_address_line2' => 'string',
        'postal_suburb' => 'string',
        'postal_state' => 'string',
        'postal_post_code' => 'string',
        'email_address' => 'string',
        'home_phone' => 'string',
        'work_phone' => 'string',
        'mobile_phone' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'residential_city' => 'string',
        'residential_county' => 'string',
        'postal_city' => 'string',
        'postal_county' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'title' => null,
        'first_name' => null,
        'preferred_name' => null,
        'middle_name' => null,
        'surname' => null,
        'gender' => null,
        'date_of_birth' => 'date-time',
        'anniversary_date' => 'date-time',
        'external_id' => null,
        'residential_street_address' => null,
        'residential_address_line2' => null,
        'residential_suburb' => null,
        'residential_state' => null,
        'residential_post_code' => null,
        'postal_street_address' => null,
        'postal_address_line2' => null,
        'postal_suburb' => null,
        'postal_state' => null,
        'postal_post_code' => null,
        'email_address' => null,
        'home_phone' => null,
        'work_phone' => null,
        'mobile_phone' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'residential_city' => null,
        'residential_county' => null,
        'postal_city' => null,
        'postal_county' => null
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
        'id' => 'id',
        'title' => 'title',
        'first_name' => 'firstName',
        'preferred_name' => 'preferredName',
        'middle_name' => 'middleName',
        'surname' => 'surname',
        'gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'anniversary_date' => 'anniversaryDate',
        'external_id' => 'externalId',
        'residential_street_address' => 'residentialStreetAddress',
        'residential_address_line2' => 'residentialAddressLine2',
        'residential_suburb' => 'residentialSuburb',
        'residential_state' => 'residentialState',
        'residential_post_code' => 'residentialPostCode',
        'postal_street_address' => 'postalStreetAddress',
        'postal_address_line2' => 'postalAddressLine2',
        'postal_suburb' => 'postalSuburb',
        'postal_state' => 'postalState',
        'postal_post_code' => 'postalPostCode',
        'email_address' => 'emailAddress',
        'home_phone' => 'homePhone',
        'work_phone' => 'workPhone',
        'mobile_phone' => 'mobilePhone',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'residential_city' => 'residentialCity',
        'residential_county' => 'residentialCounty',
        'postal_city' => 'postalCity',
        'postal_county' => 'postalCounty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'preferred_name' => 'setPreferredName',
        'middle_name' => 'setMiddleName',
        'surname' => 'setSurname',
        'gender' => 'setGender',
        'date_of_birth' => 'setDateOfBirth',
        'anniversary_date' => 'setAnniversaryDate',
        'external_id' => 'setExternalId',
        'residential_street_address' => 'setResidentialStreetAddress',
        'residential_address_line2' => 'setResidentialAddressLine2',
        'residential_suburb' => 'setResidentialSuburb',
        'residential_state' => 'setResidentialState',
        'residential_post_code' => 'setResidentialPostCode',
        'postal_street_address' => 'setPostalStreetAddress',
        'postal_address_line2' => 'setPostalAddressLine2',
        'postal_suburb' => 'setPostalSuburb',
        'postal_state' => 'setPostalState',
        'postal_post_code' => 'setPostalPostCode',
        'email_address' => 'setEmailAddress',
        'home_phone' => 'setHomePhone',
        'work_phone' => 'setWorkPhone',
        'mobile_phone' => 'setMobilePhone',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'residential_city' => 'setResidentialCity',
        'residential_county' => 'setResidentialCounty',
        'postal_city' => 'setPostalCity',
        'postal_county' => 'setPostalCounty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'preferred_name' => 'getPreferredName',
        'middle_name' => 'getMiddleName',
        'surname' => 'getSurname',
        'gender' => 'getGender',
        'date_of_birth' => 'getDateOfBirth',
        'anniversary_date' => 'getAnniversaryDate',
        'external_id' => 'getExternalId',
        'residential_street_address' => 'getResidentialStreetAddress',
        'residential_address_line2' => 'getResidentialAddressLine2',
        'residential_suburb' => 'getResidentialSuburb',
        'residential_state' => 'getResidentialState',
        'residential_post_code' => 'getResidentialPostCode',
        'postal_street_address' => 'getPostalStreetAddress',
        'postal_address_line2' => 'getPostalAddressLine2',
        'postal_suburb' => 'getPostalSuburb',
        'postal_state' => 'getPostalState',
        'postal_post_code' => 'getPostalPostCode',
        'email_address' => 'getEmailAddress',
        'home_phone' => 'getHomePhone',
        'work_phone' => 'getWorkPhone',
        'mobile_phone' => 'getMobilePhone',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'residential_city' => 'getResidentialCity',
        'residential_county' => 'getResidentialCounty',
        'postal_city' => 'getPostalCity',
        'postal_county' => 'getPostalCounty'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['preferred_name'] = isset($data['preferred_name']) ? $data['preferred_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['anniversary_date'] = isset($data['anniversary_date']) ? $data['anniversary_date'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['residential_street_address'] = isset($data['residential_street_address']) ? $data['residential_street_address'] : null;
        $this->container['residential_address_line2'] = isset($data['residential_address_line2']) ? $data['residential_address_line2'] : null;
        $this->container['residential_suburb'] = isset($data['residential_suburb']) ? $data['residential_suburb'] : null;
        $this->container['residential_state'] = isset($data['residential_state']) ? $data['residential_state'] : null;
        $this->container['residential_post_code'] = isset($data['residential_post_code']) ? $data['residential_post_code'] : null;
        $this->container['postal_street_address'] = isset($data['postal_street_address']) ? $data['postal_street_address'] : null;
        $this->container['postal_address_line2'] = isset($data['postal_address_line2']) ? $data['postal_address_line2'] : null;
        $this->container['postal_suburb'] = isset($data['postal_suburb']) ? $data['postal_suburb'] : null;
        $this->container['postal_state'] = isset($data['postal_state']) ? $data['postal_state'] : null;
        $this->container['postal_post_code'] = isset($data['postal_post_code']) ? $data['postal_post_code'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['home_phone'] = isset($data['home_phone']) ? $data['home_phone'] : null;
        $this->container['work_phone'] = isset($data['work_phone']) ? $data['work_phone'] : null;
        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['residential_city'] = isset($data['residential_city']) ? $data['residential_city'] : null;
        $this->container['residential_county'] = isset($data['residential_county']) ? $data['residential_county'] : null;
        $this->container['postal_city'] = isset($data['postal_city']) ? $data['postal_city'] : null;
        $this->container['postal_county'] = isset($data['postal_county']) ? $data['postal_county'] : null;
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets preferred_name
     *
     * @return string
     */
    public function getPreferredName()
    {
        return $this->container['preferred_name'];
    }

    /**
     * Sets preferred_name
     *
     * @param string $preferred_name 
     *
     * @return $this
     */
    public function setPreferredName($preferred_name)
    {
        $this->container['preferred_name'] = $preferred_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string $middle_name 
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

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
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender 
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth 
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets anniversary_date
     *
     * @return \DateTime
     */
    public function getAnniversaryDate()
    {
        return $this->container['anniversary_date'];
    }

    /**
     * Sets anniversary_date
     *
     * @param \DateTime $anniversary_date 
     *
     * @return $this
     */
    public function setAnniversaryDate($anniversary_date)
    {
        $this->container['anniversary_date'] = $anniversary_date;

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
     * Gets residential_street_address
     *
     * @return string
     */
    public function getResidentialStreetAddress()
    {
        return $this->container['residential_street_address'];
    }

    /**
     * Sets residential_street_address
     *
     * @param string $residential_street_address 
     *
     * @return $this
     */
    public function setResidentialStreetAddress($residential_street_address)
    {
        $this->container['residential_street_address'] = $residential_street_address;

        return $this;
    }

    /**
     * Gets residential_address_line2
     *
     * @return string
     */
    public function getResidentialAddressLine2()
    {
        return $this->container['residential_address_line2'];
    }

    /**
     * Sets residential_address_line2
     *
     * @param string $residential_address_line2 
     *
     * @return $this
     */
    public function setResidentialAddressLine2($residential_address_line2)
    {
        $this->container['residential_address_line2'] = $residential_address_line2;

        return $this;
    }

    /**
     * Gets residential_suburb
     *
     * @return string
     */
    public function getResidentialSuburb()
    {
        return $this->container['residential_suburb'];
    }

    /**
     * Sets residential_suburb
     *
     * @param string $residential_suburb 
     *
     * @return $this
     */
    public function setResidentialSuburb($residential_suburb)
    {
        $this->container['residential_suburb'] = $residential_suburb;

        return $this;
    }

    /**
     * Gets residential_state
     *
     * @return string
     */
    public function getResidentialState()
    {
        return $this->container['residential_state'];
    }

    /**
     * Sets residential_state
     *
     * @param string $residential_state 
     *
     * @return $this
     */
    public function setResidentialState($residential_state)
    {
        $this->container['residential_state'] = $residential_state;

        return $this;
    }

    /**
     * Gets residential_post_code
     *
     * @return string
     */
    public function getResidentialPostCode()
    {
        return $this->container['residential_post_code'];
    }

    /**
     * Sets residential_post_code
     *
     * @param string $residential_post_code 
     *
     * @return $this
     */
    public function setResidentialPostCode($residential_post_code)
    {
        $this->container['residential_post_code'] = $residential_post_code;

        return $this;
    }

    /**
     * Gets postal_street_address
     *
     * @return string
     */
    public function getPostalStreetAddress()
    {
        return $this->container['postal_street_address'];
    }

    /**
     * Sets postal_street_address
     *
     * @param string $postal_street_address 
     *
     * @return $this
     */
    public function setPostalStreetAddress($postal_street_address)
    {
        $this->container['postal_street_address'] = $postal_street_address;

        return $this;
    }

    /**
     * Gets postal_address_line2
     *
     * @return string
     */
    public function getPostalAddressLine2()
    {
        return $this->container['postal_address_line2'];
    }

    /**
     * Sets postal_address_line2
     *
     * @param string $postal_address_line2 
     *
     * @return $this
     */
    public function setPostalAddressLine2($postal_address_line2)
    {
        $this->container['postal_address_line2'] = $postal_address_line2;

        return $this;
    }

    /**
     * Gets postal_suburb
     *
     * @return string
     */
    public function getPostalSuburb()
    {
        return $this->container['postal_suburb'];
    }

    /**
     * Sets postal_suburb
     *
     * @param string $postal_suburb 
     *
     * @return $this
     */
    public function setPostalSuburb($postal_suburb)
    {
        $this->container['postal_suburb'] = $postal_suburb;

        return $this;
    }

    /**
     * Gets postal_state
     *
     * @return string
     */
    public function getPostalState()
    {
        return $this->container['postal_state'];
    }

    /**
     * Sets postal_state
     *
     * @param string $postal_state 
     *
     * @return $this
     */
    public function setPostalState($postal_state)
    {
        $this->container['postal_state'] = $postal_state;

        return $this;
    }

    /**
     * Gets postal_post_code
     *
     * @return string
     */
    public function getPostalPostCode()
    {
        return $this->container['postal_post_code'];
    }

    /**
     * Sets postal_post_code
     *
     * @param string $postal_post_code 
     *
     * @return $this
     */
    public function setPostalPostCode($postal_post_code)
    {
        $this->container['postal_post_code'] = $postal_post_code;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address 
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets home_phone
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->container['home_phone'];
    }

    /**
     * Sets home_phone
     *
     * @param string $home_phone 
     *
     * @return $this
     */
    public function setHomePhone($home_phone)
    {
        $this->container['home_phone'] = $home_phone;

        return $this;
    }

    /**
     * Gets work_phone
     *
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->container['work_phone'];
    }

    /**
     * Sets work_phone
     *
     * @param string $work_phone 
     *
     * @return $this
     */
    public function setWorkPhone($work_phone)
    {
        $this->container['work_phone'] = $work_phone;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string $mobile_phone 
     *
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

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
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date 
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets residential_city
     *
     * @return string
     */
    public function getResidentialCity()
    {
        return $this->container['residential_city'];
    }

    /**
     * Sets residential_city
     *
     * @param string $residential_city 
     *
     * @return $this
     */
    public function setResidentialCity($residential_city)
    {
        $this->container['residential_city'] = $residential_city;

        return $this;
    }

    /**
     * Gets residential_county
     *
     * @return string
     */
    public function getResidentialCounty()
    {
        return $this->container['residential_county'];
    }

    /**
     * Sets residential_county
     *
     * @param string $residential_county 
     *
     * @return $this
     */
    public function setResidentialCounty($residential_county)
    {
        $this->container['residential_county'] = $residential_county;

        return $this;
    }

    /**
     * Gets postal_city
     *
     * @return string
     */
    public function getPostalCity()
    {
        return $this->container['postal_city'];
    }

    /**
     * Sets postal_city
     *
     * @param string $postal_city 
     *
     * @return $this
     */
    public function setPostalCity($postal_city)
    {
        $this->container['postal_city'] = $postal_city;

        return $this;
    }

    /**
     * Gets postal_county
     *
     * @return string
     */
    public function getPostalCounty()
    {
        return $this->container['postal_county'];
    }

    /**
     * Sets postal_county
     *
     * @param string $postal_county 
     *
     * @return $this
     */
    public function setPostalCounty($postal_county)
    {
        $this->container['postal_county'] = $postal_county;

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


