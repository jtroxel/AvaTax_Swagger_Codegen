<?php
/**
 * CreateTransactionBatchResponseModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AvaTax API
 *
 * REST interface to Avalara's enterprise tax service, AvaTax.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
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
 * CreateTransactionBatchResponseModel Class Doc Comment
 *
 * @category Class
 * @description Represents a create transaction batch response model.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateTransactionBatchResponseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateTransactionBatchResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'account_id' => 'int',
        'company_id' => 'int',
        'status' => 'string',
        'started_date' => '\DateTime',
        'record_count' => 'int',
        'current_record' => 'int',
        'completed_date' => '\DateTime',
        'created_date' => '\DateTime',
        'created_user_id' => 'int',
        'modified_date' => '\DateTime',
        'modified_user_id' => 'int',
        'files' => '\Swagger\Client\Model\BatchFileModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'account_id' => 'int32',
        'company_id' => 'int32',
        'status' => null,
        'started_date' => 'date-time',
        'record_count' => 'int32',
        'current_record' => 'int32',
        'completed_date' => 'date-time',
        'created_date' => 'date-time',
        'created_user_id' => 'int32',
        'modified_date' => 'date-time',
        'modified_user_id' => 'int32',
        'files' => null
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
        'name' => 'name',
        'account_id' => 'accountId',
        'company_id' => 'companyId',
        'status' => 'status',
        'started_date' => 'startedDate',
        'record_count' => 'recordCount',
        'current_record' => 'currentRecord',
        'completed_date' => 'completedDate',
        'created_date' => 'createdDate',
        'created_user_id' => 'createdUserId',
        'modified_date' => 'modifiedDate',
        'modified_user_id' => 'modifiedUserId',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'account_id' => 'setAccountId',
        'company_id' => 'setCompanyId',
        'status' => 'setStatus',
        'started_date' => 'setStartedDate',
        'record_count' => 'setRecordCount',
        'current_record' => 'setCurrentRecord',
        'completed_date' => 'setCompletedDate',
        'created_date' => 'setCreatedDate',
        'created_user_id' => 'setCreatedUserId',
        'modified_date' => 'setModifiedDate',
        'modified_user_id' => 'setModifiedUserId',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'account_id' => 'getAccountId',
        'company_id' => 'getCompanyId',
        'status' => 'getStatus',
        'started_date' => 'getStartedDate',
        'record_count' => 'getRecordCount',
        'current_record' => 'getCurrentRecord',
        'completed_date' => 'getCompletedDate',
        'created_date' => 'getCreatedDate',
        'created_user_id' => 'getCreatedUserId',
        'modified_date' => 'getModifiedDate',
        'modified_user_id' => 'getModifiedUserId',
        'files' => 'getFiles'
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

    const STATUS_WAITING = 'Waiting';
    const STATUS_SYSTEM_ERRORS = 'SystemErrors';
    const STATUS_CANCELLED = 'Cancelled';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_CREATING = 'Creating';
    const STATUS_DELETED = 'Deleted';
    const STATUS_ERRORS = 'Errors';
    const STATUS_PAUSED = 'Paused';
    const STATUS_PROCESSING = 'Processing';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_SYSTEM_ERRORS,
            self::STATUS_CANCELLED,
            self::STATUS_COMPLETED,
            self::STATUS_CREATING,
            self::STATUS_DELETED,
            self::STATUS_ERRORS,
            self::STATUS_PAUSED,
            self::STATUS_PROCESSING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['started_date'] = isset($data['started_date']) ? $data['started_date'] : null;
        $this->container['record_count'] = isset($data['record_count']) ? $data['record_count'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
        $this->container['completed_date'] = isset($data['completed_date']) ? $data['completed_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_user_id'] = isset($data['created_user_id']) ? $data['created_user_id'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['modified_user_id'] = isset($data['modified_user_id']) ? $data['modified_user_id'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 194)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 194.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param int $id The unique ID number of this batch.
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
     * @param string $name The user-friendly readable name for this batch.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 194)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateTransactionBatchResponseModel., must be smaller than or equal to 194.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateTransactionBatchResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The Account ID number of the account that owns this batch.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id The Company ID number of the company that owns this batch.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
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
     * @param string $status This batch's current processing status
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
     * Gets started_date
     *
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->container['started_date'];
    }

    /**
     * Sets started_date
     *
     * @param \DateTime $started_date The date/time when this batch started processing
     *
     * @return $this
     */
    public function setStartedDate($started_date)
    {
        $this->container['started_date'] = $started_date;

        return $this;
    }

    /**
     * Gets record_count
     *
     * @return int
     */
    public function getRecordCount()
    {
        return $this->container['record_count'];
    }

    /**
     * Sets record_count
     *
     * @param int $record_count The number of records in this batch; determined by the server
     *
     * @return $this
     */
    public function setRecordCount($record_count)
    {
        $this->container['record_count'] = $record_count;

        return $this;
    }

    /**
     * Gets current_record
     *
     * @return int
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param int $current_record The current record being processed
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {
        $this->container['current_record'] = $current_record;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime $completed_date The date/time when this batch was completely processed
     *
     * @return $this
     */
    public function setCompletedDate($completed_date)
    {
        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date The date when this record was created.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets created_user_id
     *
     * @return int
     */
    public function getCreatedUserId()
    {
        return $this->container['created_user_id'];
    }

    /**
     * Sets created_user_id
     *
     * @param int $created_user_id The User ID of the user who created this record.
     *
     * @return $this
     */
    public function setCreatedUserId($created_user_id)
    {
        $this->container['created_user_id'] = $created_user_id;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param \DateTime $modified_date The date/time when this record was last modified.
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets modified_user_id
     *
     * @return int
     */
    public function getModifiedUserId()
    {
        return $this->container['modified_user_id'];
    }

    /**
     * Sets modified_user_id
     *
     * @param int $modified_user_id The user ID of the user who last modified this record.
     *
     * @return $this
     */
    public function setModifiedUserId($modified_user_id)
    {
        $this->container['modified_user_id'] = $modified_user_id;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Swagger\Client\Model\BatchFileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Swagger\Client\Model\BatchFileModel[] $files The list of files contained in this batch.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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

