<?php
/**
 * EmployeeDetailsModel
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
 * EmployeeDetailsModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmployeeDetailsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'title' => false,
		'first_name' => false,
		'preferred_name' => false,
		'middle_name' => false,
		'surname' => false,
		'gender' => false,
		'date_of_birth' => false,
		'anniversary_date' => false,
		'external_id' => false,
		'residential_street_address' => false,
		'residential_address_line2' => false,
		'residential_suburb' => false,
		'residential_state' => false,
		'residential_post_code' => false,
		'postal_street_address' => false,
		'postal_address_line2' => false,
		'postal_suburb' => false,
		'postal_state' => false,
		'postal_post_code' => false,
		'email_address' => false,
		'home_phone' => false,
		'work_phone' => false,
		'mobile_phone' => false,
		'start_date' => false,
		'end_date' => false,
		'residential_city' => false,
		'residential_county' => false,
		'postal_city' => false,
		'postal_county' => false
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
        return self::$openAPIModelName;
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('preferred_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('anniversary_date', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('residential_street_address', $data ?? [], null);
        $this->setIfExists('residential_address_line2', $data ?? [], null);
        $this->setIfExists('residential_suburb', $data ?? [], null);
        $this->setIfExists('residential_state', $data ?? [], null);
        $this->setIfExists('residential_post_code', $data ?? [], null);
        $this->setIfExists('postal_street_address', $data ?? [], null);
        $this->setIfExists('postal_address_line2', $data ?? [], null);
        $this->setIfExists('postal_suburb', $data ?? [], null);
        $this->setIfExists('postal_state', $data ?? [], null);
        $this->setIfExists('postal_post_code', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('home_phone', $data ?? [], null);
        $this->setIfExists('work_phone', $data ?? [], null);
        $this->setIfExists('mobile_phone', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('residential_city', $data ?? [], null);
        $this->setIfExists('residential_county', $data ?? [], null);
        $this->setIfExists('postal_city', $data ?? [], null);
        $this->setIfExists('postal_county', $data ?? [], null);
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets preferred_name
     *
     * @return string|null
     */
    public function getPreferredName()
    {
        return $this->container['preferred_name'];
    }

    /**
     * Sets preferred_name
     *
     * @param string|null $preferred_name 
     *
     * @return self
     */
    public function setPreferredName($preferred_name)
    {
        if (is_null($preferred_name)) {
            throw new \InvalidArgumentException('non-nullable preferred_name cannot be null');
        }
        $this->container['preferred_name'] = $preferred_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name 
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname 
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender 
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth 
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets anniversary_date
     *
     * @return \DateTime|null
     */
    public function getAnniversaryDate()
    {
        return $this->container['anniversary_date'];
    }

    /**
     * Sets anniversary_date
     *
     * @param \DateTime|null $anniversary_date 
     *
     * @return self
     */
    public function setAnniversaryDate($anniversary_date)
    {
        if (is_null($anniversary_date)) {
            throw new \InvalidArgumentException('non-nullable anniversary_date cannot be null');
        }
        $this->container['anniversary_date'] = $anniversary_date;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id 
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets residential_street_address
     *
     * @return string|null
     */
    public function getResidentialStreetAddress()
    {
        return $this->container['residential_street_address'];
    }

    /**
     * Sets residential_street_address
     *
     * @param string|null $residential_street_address 
     *
     * @return self
     */
    public function setResidentialStreetAddress($residential_street_address)
    {
        if (is_null($residential_street_address)) {
            throw new \InvalidArgumentException('non-nullable residential_street_address cannot be null');
        }
        $this->container['residential_street_address'] = $residential_street_address;

        return $this;
    }

    /**
     * Gets residential_address_line2
     *
     * @return string|null
     */
    public function getResidentialAddressLine2()
    {
        return $this->container['residential_address_line2'];
    }

    /**
     * Sets residential_address_line2
     *
     * @param string|null $residential_address_line2 
     *
     * @return self
     */
    public function setResidentialAddressLine2($residential_address_line2)
    {
        if (is_null($residential_address_line2)) {
            throw new \InvalidArgumentException('non-nullable residential_address_line2 cannot be null');
        }
        $this->container['residential_address_line2'] = $residential_address_line2;

        return $this;
    }

    /**
     * Gets residential_suburb
     *
     * @return string|null
     */
    public function getResidentialSuburb()
    {
        return $this->container['residential_suburb'];
    }

    /**
     * Sets residential_suburb
     *
     * @param string|null $residential_suburb 
     *
     * @return self
     */
    public function setResidentialSuburb($residential_suburb)
    {
        if (is_null($residential_suburb)) {
            throw new \InvalidArgumentException('non-nullable residential_suburb cannot be null');
        }
        $this->container['residential_suburb'] = $residential_suburb;

        return $this;
    }

    /**
     * Gets residential_state
     *
     * @return string|null
     */
    public function getResidentialState()
    {
        return $this->container['residential_state'];
    }

    /**
     * Sets residential_state
     *
     * @param string|null $residential_state 
     *
     * @return self
     */
    public function setResidentialState($residential_state)
    {
        if (is_null($residential_state)) {
            throw new \InvalidArgumentException('non-nullable residential_state cannot be null');
        }
        $this->container['residential_state'] = $residential_state;

        return $this;
    }

    /**
     * Gets residential_post_code
     *
     * @return string|null
     */
    public function getResidentialPostCode()
    {
        return $this->container['residential_post_code'];
    }

    /**
     * Sets residential_post_code
     *
     * @param string|null $residential_post_code 
     *
     * @return self
     */
    public function setResidentialPostCode($residential_post_code)
    {
        if (is_null($residential_post_code)) {
            throw new \InvalidArgumentException('non-nullable residential_post_code cannot be null');
        }
        $this->container['residential_post_code'] = $residential_post_code;

        return $this;
    }

    /**
     * Gets postal_street_address
     *
     * @return string|null
     */
    public function getPostalStreetAddress()
    {
        return $this->container['postal_street_address'];
    }

    /**
     * Sets postal_street_address
     *
     * @param string|null $postal_street_address 
     *
     * @return self
     */
    public function setPostalStreetAddress($postal_street_address)
    {
        if (is_null($postal_street_address)) {
            throw new \InvalidArgumentException('non-nullable postal_street_address cannot be null');
        }
        $this->container['postal_street_address'] = $postal_street_address;

        return $this;
    }

    /**
     * Gets postal_address_line2
     *
     * @return string|null
     */
    public function getPostalAddressLine2()
    {
        return $this->container['postal_address_line2'];
    }

    /**
     * Sets postal_address_line2
     *
     * @param string|null $postal_address_line2 
     *
     * @return self
     */
    public function setPostalAddressLine2($postal_address_line2)
    {
        if (is_null($postal_address_line2)) {
            throw new \InvalidArgumentException('non-nullable postal_address_line2 cannot be null');
        }
        $this->container['postal_address_line2'] = $postal_address_line2;

        return $this;
    }

    /**
     * Gets postal_suburb
     *
     * @return string|null
     */
    public function getPostalSuburb()
    {
        return $this->container['postal_suburb'];
    }

    /**
     * Sets postal_suburb
     *
     * @param string|null $postal_suburb 
     *
     * @return self
     */
    public function setPostalSuburb($postal_suburb)
    {
        if (is_null($postal_suburb)) {
            throw new \InvalidArgumentException('non-nullable postal_suburb cannot be null');
        }
        $this->container['postal_suburb'] = $postal_suburb;

        return $this;
    }

    /**
     * Gets postal_state
     *
     * @return string|null
     */
    public function getPostalState()
    {
        return $this->container['postal_state'];
    }

    /**
     * Sets postal_state
     *
     * @param string|null $postal_state 
     *
     * @return self
     */
    public function setPostalState($postal_state)
    {
        if (is_null($postal_state)) {
            throw new \InvalidArgumentException('non-nullable postal_state cannot be null');
        }
        $this->container['postal_state'] = $postal_state;

        return $this;
    }

    /**
     * Gets postal_post_code
     *
     * @return string|null
     */
    public function getPostalPostCode()
    {
        return $this->container['postal_post_code'];
    }

    /**
     * Sets postal_post_code
     *
     * @param string|null $postal_post_code 
     *
     * @return self
     */
    public function setPostalPostCode($postal_post_code)
    {
        if (is_null($postal_post_code)) {
            throw new \InvalidArgumentException('non-nullable postal_post_code cannot be null');
        }
        $this->container['postal_post_code'] = $postal_post_code;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address 
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets home_phone
     *
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->container['home_phone'];
    }

    /**
     * Sets home_phone
     *
     * @param string|null $home_phone 
     *
     * @return self
     */
    public function setHomePhone($home_phone)
    {
        if (is_null($home_phone)) {
            throw new \InvalidArgumentException('non-nullable home_phone cannot be null');
        }
        $this->container['home_phone'] = $home_phone;

        return $this;
    }

    /**
     * Gets work_phone
     *
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->container['work_phone'];
    }

    /**
     * Sets work_phone
     *
     * @param string|null $work_phone 
     *
     * @return self
     */
    public function setWorkPhone($work_phone)
    {
        if (is_null($work_phone)) {
            throw new \InvalidArgumentException('non-nullable work_phone cannot be null');
        }
        $this->container['work_phone'] = $work_phone;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string|null $mobile_phone 
     *
     * @return self
     */
    public function setMobilePhone($mobile_phone)
    {
        if (is_null($mobile_phone)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone cannot be null');
        }
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date 
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date 
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets residential_city
     *
     * @return string|null
     */
    public function getResidentialCity()
    {
        return $this->container['residential_city'];
    }

    /**
     * Sets residential_city
     *
     * @param string|null $residential_city 
     *
     * @return self
     */
    public function setResidentialCity($residential_city)
    {
        if (is_null($residential_city)) {
            throw new \InvalidArgumentException('non-nullable residential_city cannot be null');
        }
        $this->container['residential_city'] = $residential_city;

        return $this;
    }

    /**
     * Gets residential_county
     *
     * @return string|null
     */
    public function getResidentialCounty()
    {
        return $this->container['residential_county'];
    }

    /**
     * Sets residential_county
     *
     * @param string|null $residential_county 
     *
     * @return self
     */
    public function setResidentialCounty($residential_county)
    {
        if (is_null($residential_county)) {
            throw new \InvalidArgumentException('non-nullable residential_county cannot be null');
        }
        $this->container['residential_county'] = $residential_county;

        return $this;
    }

    /**
     * Gets postal_city
     *
     * @return string|null
     */
    public function getPostalCity()
    {
        return $this->container['postal_city'];
    }

    /**
     * Sets postal_city
     *
     * @param string|null $postal_city 
     *
     * @return self
     */
    public function setPostalCity($postal_city)
    {
        if (is_null($postal_city)) {
            throw new \InvalidArgumentException('non-nullable postal_city cannot be null');
        }
        $this->container['postal_city'] = $postal_city;

        return $this;
    }

    /**
     * Gets postal_county
     *
     * @return string|null
     */
    public function getPostalCounty()
    {
        return $this->container['postal_county'];
    }

    /**
     * Sets postal_county
     *
     * @param string|null $postal_county 
     *
     * @return self
     */
    public function setPostalCounty($postal_county)
    {
        if (is_null($postal_county)) {
            throw new \InvalidArgumentException('non-nullable postal_county cannot be null');
        }
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


