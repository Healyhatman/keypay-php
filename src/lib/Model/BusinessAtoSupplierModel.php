<?php
/**
 * BusinessAtoSupplierModel
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * BusinessAtoSupplierModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAtoSupplierModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAtoSupplierModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'abn' => 'string',
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'suburb' => 'string',
        'state' => 'string',
        'post_code' => 'string',
        'contact_name' => 'string',
        'signatory_name' => 'string',
        'phone_number' => 'string',
        'fax_number' => 'string',
        'country' => 'string',
        'branch' => 'string',
        'role' => 'string',
        'tax_agent_number' => 'string',
        'intermediary_abn' => 'string',
        'intermediary_contact_name' => 'string',
        'intermediary_contact_email' => 'string',
        'intermediary_contact_phone' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'abn' => null,
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'suburb' => null,
        'state' => null,
        'post_code' => null,
        'contact_name' => null,
        'signatory_name' => null,
        'phone_number' => null,
        'fax_number' => null,
        'country' => null,
        'branch' => null,
        'role' => null,
        'tax_agent_number' => null,
        'intermediary_abn' => null,
        'intermediary_contact_name' => null,
        'intermediary_contact_email' => null,
        'intermediary_contact_phone' => null,
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
        'abn' => 'abn',
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'suburb' => 'suburb',
        'state' => 'state',
        'post_code' => 'postCode',
        'contact_name' => 'contactName',
        'signatory_name' => 'signatoryName',
        'phone_number' => 'phoneNumber',
        'fax_number' => 'faxNumber',
        'country' => 'country',
        'branch' => 'branch',
        'role' => 'role',
        'tax_agent_number' => 'taxAgentNumber',
        'intermediary_abn' => 'intermediaryAbn',
        'intermediary_contact_name' => 'intermediaryContactName',
        'intermediary_contact_email' => 'intermediaryContactEmail',
        'intermediary_contact_phone' => 'intermediaryContactPhone',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'abn' => 'setAbn',
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'suburb' => 'setSuburb',
        'state' => 'setState',
        'post_code' => 'setPostCode',
        'contact_name' => 'setContactName',
        'signatory_name' => 'setSignatoryName',
        'phone_number' => 'setPhoneNumber',
        'fax_number' => 'setFaxNumber',
        'country' => 'setCountry',
        'branch' => 'setBranch',
        'role' => 'setRole',
        'tax_agent_number' => 'setTaxAgentNumber',
        'intermediary_abn' => 'setIntermediaryAbn',
        'intermediary_contact_name' => 'setIntermediaryContactName',
        'intermediary_contact_email' => 'setIntermediaryContactEmail',
        'intermediary_contact_phone' => 'setIntermediaryContactPhone',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'abn' => 'getAbn',
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'suburb' => 'getSuburb',
        'state' => 'getState',
        'post_code' => 'getPostCode',
        'contact_name' => 'getContactName',
        'signatory_name' => 'getSignatoryName',
        'phone_number' => 'getPhoneNumber',
        'fax_number' => 'getFaxNumber',
        'country' => 'getCountry',
        'branch' => 'getBranch',
        'role' => 'getRole',
        'tax_agent_number' => 'getTaxAgentNumber',
        'intermediary_abn' => 'getIntermediaryAbn',
        'intermediary_contact_name' => 'getIntermediaryContactName',
        'intermediary_contact_email' => 'getIntermediaryContactEmail',
        'intermediary_contact_phone' => 'getIntermediaryContactPhone',
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

    public const ROLE_EMPLOYER = 'Employer';
    public const ROLE_REGISTERED_TAX_AGENT = 'RegisteredTaxAgent';
    public const ROLE_INTERMEDIARY = 'Intermediary';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_EMPLOYER,
            self::ROLE_REGISTERED_TAX_AGENT,
            self::ROLE_INTERMEDIARY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['abn'] = isset($data['abn']) ? $data['abn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['signatory_name'] = isset($data['signatory_name']) ? $data['signatory_name'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['fax_number'] = isset($data['fax_number']) ? $data['fax_number'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['tax_agent_number'] = isset($data['tax_agent_number']) ? $data['tax_agent_number'] : null;
        $this->container['intermediary_abn'] = isset($data['intermediary_abn']) ? $data['intermediary_abn'] : null;
        $this->container['intermediary_contact_name'] = isset($data['intermediary_contact_name']) ? $data['intermediary_contact_name'] : null;
        $this->container['intermediary_contact_email'] = isset($data['intermediary_contact_email']) ? $data['intermediary_contact_email'] : null;
        $this->container['intermediary_contact_phone'] = isset($data['intermediary_contact_phone']) ? $data['intermediary_contact_phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoleAllowableValues();
        if (! is_null($this->container['role']) && ! in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
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
     * Gets abn
     *
     * @return string
     */
    public function getAbn()
    {
        return $this->container['abn'];
    }

    /**
     * Sets abn
     *
     * @param string $abn
     *
     * @return $this
     */
    public function setAbn($abn)
    {
        $this->container['abn'] = $abn;

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
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets signatory_name
     *
     * @return string
     */
    public function getSignatoryName()
    {
        return $this->container['signatory_name'];
    }

    /**
     * Sets signatory_name
     *
     * @param string $signatory_name
     *
     * @return $this
     */
    public function setSignatoryName($signatory_name)
    {
        $this->container['signatory_name'] = $signatory_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets fax_number
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->container['fax_number'];
    }

    /**
     * Sets fax_number
     *
     * @param string $fax_number
     *
     * @return $this
     */
    public function setFaxNumber($fax_number)
    {
        $this->container['fax_number'] = $fax_number;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (! is_null($role) && ! in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets tax_agent_number
     *
     * @return string
     */
    public function getTaxAgentNumber()
    {
        return $this->container['tax_agent_number'];
    }

    /**
     * Sets tax_agent_number
     *
     * @param string $tax_agent_number
     *
     * @return $this
     */
    public function setTaxAgentNumber($tax_agent_number)
    {
        $this->container['tax_agent_number'] = $tax_agent_number;

        return $this;
    }

    /**
     * Gets intermediary_abn
     *
     * @return string
     */
    public function getIntermediaryAbn()
    {
        return $this->container['intermediary_abn'];
    }

    /**
     * Sets intermediary_abn
     *
     * @param string $intermediary_abn
     *
     * @return $this
     */
    public function setIntermediaryAbn($intermediary_abn)
    {
        $this->container['intermediary_abn'] = $intermediary_abn;

        return $this;
    }

    /**
     * Gets intermediary_contact_name
     *
     * @return string
     */
    public function getIntermediaryContactName()
    {
        return $this->container['intermediary_contact_name'];
    }

    /**
     * Sets intermediary_contact_name
     *
     * @param string $intermediary_contact_name
     *
     * @return $this
     */
    public function setIntermediaryContactName($intermediary_contact_name)
    {
        $this->container['intermediary_contact_name'] = $intermediary_contact_name;

        return $this;
    }

    /**
     * Gets intermediary_contact_email
     *
     * @return string
     */
    public function getIntermediaryContactEmail()
    {
        return $this->container['intermediary_contact_email'];
    }

    /**
     * Sets intermediary_contact_email
     *
     * @param string $intermediary_contact_email
     *
     * @return $this
     */
    public function setIntermediaryContactEmail($intermediary_contact_email)
    {
        $this->container['intermediary_contact_email'] = $intermediary_contact_email;

        return $this;
    }

    /**
     * Gets intermediary_contact_phone
     *
     * @return string
     */
    public function getIntermediaryContactPhone()
    {
        return $this->container['intermediary_contact_phone'];
    }

    /**
     * Sets intermediary_contact_phone
     *
     * @param string $intermediary_contact_phone
     *
     * @return $this
     */
    public function setIntermediaryContactPhone($intermediary_contact_phone)
    {
        $this->container['intermediary_contact_phone'] = $intermediary_contact_phone;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
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
