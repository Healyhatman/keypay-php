<?php
/**
 * TasksReportExportModel
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
 * TasksReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TasksReportExportModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TasksReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pay_run_task_id' => 'int',
        'employee_name' => 'string',
        'employee_id' => 'int',
        'external_id' => 'string',
        'task_description' => 'string',
        'created_by' => 'string',
        'created_date' => '\DateTime',
        'due_date' => '\DateTime',
        'completed' => 'bool',
        'notes' => '\OpenAPI\Client\Model\TasksReportNoteModel[]',
        'completed_by' => 'string',
        'completed_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pay_run_task_id' => 'int32',
        'employee_name' => null,
        'employee_id' => 'int32',
        'external_id' => null,
        'task_description' => null,
        'created_by' => null,
        'created_date' => 'date-time',
        'due_date' => 'date-time',
        'completed' => null,
        'notes' => null,
        'completed_by' => null,
        'completed_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pay_run_task_id' => false,
		'employee_name' => false,
		'employee_id' => false,
		'external_id' => false,
		'task_description' => false,
		'created_by' => false,
		'created_date' => false,
		'due_date' => false,
		'completed' => false,
		'notes' => false,
		'completed_by' => false,
		'completed_date' => false
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
        'pay_run_task_id' => 'payRunTaskId',
        'employee_name' => 'employeeName',
        'employee_id' => 'employeeId',
        'external_id' => 'externalId',
        'task_description' => 'taskDescription',
        'created_by' => 'createdBy',
        'created_date' => 'createdDate',
        'due_date' => 'dueDate',
        'completed' => 'completed',
        'notes' => 'notes',
        'completed_by' => 'completedBy',
        'completed_date' => 'completedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_run_task_id' => 'setPayRunTaskId',
        'employee_name' => 'setEmployeeName',
        'employee_id' => 'setEmployeeId',
        'external_id' => 'setExternalId',
        'task_description' => 'setTaskDescription',
        'created_by' => 'setCreatedBy',
        'created_date' => 'setCreatedDate',
        'due_date' => 'setDueDate',
        'completed' => 'setCompleted',
        'notes' => 'setNotes',
        'completed_by' => 'setCompletedBy',
        'completed_date' => 'setCompletedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_run_task_id' => 'getPayRunTaskId',
        'employee_name' => 'getEmployeeName',
        'employee_id' => 'getEmployeeId',
        'external_id' => 'getExternalId',
        'task_description' => 'getTaskDescription',
        'created_by' => 'getCreatedBy',
        'created_date' => 'getCreatedDate',
        'due_date' => 'getDueDate',
        'completed' => 'getCompleted',
        'notes' => 'getNotes',
        'completed_by' => 'getCompletedBy',
        'completed_date' => 'getCompletedDate'
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
        $this->setIfExists('pay_run_task_id', $data ?? [], null);
        $this->setIfExists('employee_name', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('task_description', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('completed', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('completed_by', $data ?? [], null);
        $this->setIfExists('completed_date', $data ?? [], null);
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
     * Gets pay_run_task_id
     *
     * @return int|null
     */
    public function getPayRunTaskId()
    {
        return $this->container['pay_run_task_id'];
    }

    /**
     * Sets pay_run_task_id
     *
     * @param int|null $pay_run_task_id 
     *
     * @return self
     */
    public function setPayRunTaskId($pay_run_task_id)
    {
        if (is_null($pay_run_task_id)) {
            throw new \InvalidArgumentException('non-nullable pay_run_task_id cannot be null');
        }
        $this->container['pay_run_task_id'] = $pay_run_task_id;

        return $this;
    }

    /**
     * Gets employee_name
     *
     * @return string|null
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string|null $employee_name 
     *
     * @return self
     */
    public function setEmployeeName($employee_name)
    {
        if (is_null($employee_name)) {
            throw new \InvalidArgumentException('non-nullable employee_name cannot be null');
        }
        $this->container['employee_name'] = $employee_name;

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
     * Gets task_description
     *
     * @return string|null
     */
    public function getTaskDescription()
    {
        return $this->container['task_description'];
    }

    /**
     * Sets task_description
     *
     * @param string|null $task_description 
     *
     * @return self
     */
    public function setTaskDescription($task_description)
    {
        if (is_null($task_description)) {
            throw new \InvalidArgumentException('non-nullable task_description cannot be null');
        }
        $this->container['task_description'] = $task_description;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by 
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime|null $created_date 
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date 
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed 
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        if (is_null($completed)) {
            throw new \InvalidArgumentException('non-nullable completed cannot be null');
        }
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \OpenAPI\Client\Model\TasksReportNoteModel[]|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \OpenAPI\Client\Model\TasksReportNoteModel[]|null $notes 
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets completed_by
     *
     * @return string|null
     */
    public function getCompletedBy()
    {
        return $this->container['completed_by'];
    }

    /**
     * Sets completed_by
     *
     * @param string|null $completed_by 
     *
     * @return self
     */
    public function setCompletedBy($completed_by)
    {
        if (is_null($completed_by)) {
            throw new \InvalidArgumentException('non-nullable completed_by cannot be null');
        }
        $this->container['completed_by'] = $completed_by;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime|null
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime|null $completed_date 
     *
     * @return self
     */
    public function setCompletedDate($completed_date)
    {
        if (is_null($completed_date)) {
            throw new \InvalidArgumentException('non-nullable completed_date cannot be null');
        }
        $this->container['completed_date'] = $completed_date;

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


