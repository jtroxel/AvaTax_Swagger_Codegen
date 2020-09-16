<?php
/**
 * AuditTransactionModel
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
 * AuditTransactionModel Class Doc Comment
 *
 * @category Class
 * @description Information about a previously created transaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditTransactionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuditTransactionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'int',
        'reconstructed' => '\Swagger\Client\Model\ReconstructedApiRequestResponseModel',
        'server_timestamp' => '\DateTime',
        'server_duration' => '\DateTime',
        'api_call_status' => 'string',
        'original' => '\Swagger\Client\Model\OriginalApiRequestResponseModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => 'int32',
        'reconstructed' => null,
        'server_timestamp' => 'date-time',
        'server_duration' => 'date-time',
        'api_call_status' => null,
        'original' => null
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
        'company_id' => 'companyId',
        'reconstructed' => 'reconstructed',
        'server_timestamp' => 'serverTimestamp',
        'server_duration' => 'serverDuration',
        'api_call_status' => 'apiCallStatus',
        'original' => 'original'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'reconstructed' => 'setReconstructed',
        'server_timestamp' => 'setServerTimestamp',
        'server_duration' => 'setServerDuration',
        'api_call_status' => 'setApiCallStatus',
        'original' => 'setOriginal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'reconstructed' => 'getReconstructed',
        'server_timestamp' => 'getServerTimestamp',
        'server_duration' => 'getServerDuration',
        'api_call_status' => 'getApiCallStatus',
        'original' => 'getOriginal'
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

    const API_CALL_STATUS_ORIGINAL_API_CALL_AVAILABLE = 'OriginalApiCallAvailable';
    const API_CALL_STATUS_RECONSTRUCTED_API_CALL_AVAILABLE = 'ReconstructedApiCallAvailable';
    const API_CALL_STATUS_ANY = 'Any';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApiCallStatusAllowableValues()
    {
        return [
            self::API_CALL_STATUS_ORIGINAL_API_CALL_AVAILABLE,
            self::API_CALL_STATUS_RECONSTRUCTED_API_CALL_AVAILABLE,
            self::API_CALL_STATUS_ANY,
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['reconstructed'] = isset($data['reconstructed']) ? $data['reconstructed'] : null;
        $this->container['server_timestamp'] = isset($data['server_timestamp']) ? $data['server_timestamp'] : null;
        $this->container['server_duration'] = isset($data['server_duration']) ? $data['server_duration'] : null;
        $this->container['api_call_status'] = isset($data['api_call_status']) ? $data['api_call_status'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApiCallStatusAllowableValues();
        if (!is_null($this->container['api_call_status']) && !in_array($this->container['api_call_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'api_call_status', must be one of '%s'",
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
     * @param int $company_id Unique ID number of the company that created this transaction
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets reconstructed
     *
     * @return \Swagger\Client\Model\ReconstructedApiRequestResponseModel
     */
    public function getReconstructed()
    {
        return $this->container['reconstructed'];
    }

    /**
     * Sets reconstructed
     *
     * @param \Swagger\Client\Model\ReconstructedApiRequestResponseModel $reconstructed Reconstructed API request/response
     *
     * @return $this
     */
    public function setReconstructed($reconstructed)
    {
        $this->container['reconstructed'] = $reconstructed;

        return $this;
    }

    /**
     * Gets server_timestamp
     *
     * @return \DateTime
     */
    public function getServerTimestamp()
    {
        return $this->container['server_timestamp'];
    }

    /**
     * Sets server_timestamp
     *
     * @param \DateTime $server_timestamp Server timestamp, in UTC, of the date/time when the original transaction was created
     *
     * @return $this
     */
    public function setServerTimestamp($server_timestamp)
    {
        $this->container['server_timestamp'] = $server_timestamp;

        return $this;
    }

    /**
     * Gets server_duration
     *
     * @return \DateTime
     */
    public function getServerDuration()
    {
        return $this->container['server_duration'];
    }

    /**
     * Sets server_duration
     *
     * @param \DateTime $server_duration Length of time the original API call took
     *
     * @return $this
     */
    public function setServerDuration($server_duration)
    {
        $this->container['server_duration'] = $server_duration;

        return $this;
    }

    /**
     * Gets api_call_status
     *
     * @return string
     */
    public function getApiCallStatus()
    {
        return $this->container['api_call_status'];
    }

    /**
     * Sets api_call_status
     *
     * @param string $api_call_status api call status
     *
     * @return $this
     */
    public function setApiCallStatus($api_call_status)
    {
        $allowedValues = $this->getApiCallStatusAllowableValues();
        if (!is_null($api_call_status) && !in_array($api_call_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'api_call_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['api_call_status'] = $api_call_status;

        return $this;
    }

    /**
     * Gets original
     *
     * @return \Swagger\Client\Model\OriginalApiRequestResponseModel
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param \Swagger\Client\Model\OriginalApiRequestResponseModel $original Original API request/response
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

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


