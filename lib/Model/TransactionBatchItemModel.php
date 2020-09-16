<?php
/**
 * TransactionBatchItemModel
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
 * TransactionBatchItemModel Class Doc Comment
 *
 * @category Class
 * @description Represents a transaction batch item.  Only one child transaction model should contain data.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionBatchItemModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionBatchItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_transaction_model' => '\Swagger\Client\Model\CreateTransactionModel',
        'adjust_transaction_model' => '\Swagger\Client\Model\BatchAdjustTransactionModel',
        'void_transaction_model' => '\Swagger\Client\Model\BatchVoidTransactionModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_transaction_model' => null,
        'adjust_transaction_model' => null,
        'void_transaction_model' => null
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
        'create_transaction_model' => 'createTransactionModel',
        'adjust_transaction_model' => 'adjustTransactionModel',
        'void_transaction_model' => 'voidTransactionModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_transaction_model' => 'setCreateTransactionModel',
        'adjust_transaction_model' => 'setAdjustTransactionModel',
        'void_transaction_model' => 'setVoidTransactionModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_transaction_model' => 'getCreateTransactionModel',
        'adjust_transaction_model' => 'getAdjustTransactionModel',
        'void_transaction_model' => 'getVoidTransactionModel'
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
        $this->container['create_transaction_model'] = isset($data['create_transaction_model']) ? $data['create_transaction_model'] : null;
        $this->container['adjust_transaction_model'] = isset($data['adjust_transaction_model']) ? $data['adjust_transaction_model'] : null;
        $this->container['void_transaction_model'] = isset($data['void_transaction_model']) ? $data['void_transaction_model'] : null;
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
     * Gets create_transaction_model
     *
     * @return \Swagger\Client\Model\CreateTransactionModel
     */
    public function getCreateTransactionModel()
    {
        return $this->container['create_transaction_model'];
    }

    /**
     * Sets create_transaction_model
     *
     * @param \Swagger\Client\Model\CreateTransactionModel $create_transaction_model Represents a transaction to be created.
     *
     * @return $this
     */
    public function setCreateTransactionModel($create_transaction_model)
    {
        $this->container['create_transaction_model'] = $create_transaction_model;

        return $this;
    }

    /**
     * Gets adjust_transaction_model
     *
     * @return \Swagger\Client\Model\BatchAdjustTransactionModel
     */
    public function getAdjustTransactionModel()
    {
        return $this->container['adjust_transaction_model'];
    }

    /**
     * Sets adjust_transaction_model
     *
     * @param \Swagger\Client\Model\BatchAdjustTransactionModel $adjust_transaction_model Represents an existing transaction to be adjusted.
     *
     * @return $this
     */
    public function setAdjustTransactionModel($adjust_transaction_model)
    {
        $this->container['adjust_transaction_model'] = $adjust_transaction_model;

        return $this;
    }

    /**
     * Gets void_transaction_model
     *
     * @return \Swagger\Client\Model\BatchVoidTransactionModel
     */
    public function getVoidTransactionModel()
    {
        return $this->container['void_transaction_model'];
    }

    /**
     * Sets void_transaction_model
     *
     * @param \Swagger\Client\Model\BatchVoidTransactionModel $void_transaction_model Represents an existing transaction to be voided.
     *
     * @return $this
     */
    public function setVoidTransactionModel($void_transaction_model)
    {
        $this->container['void_transaction_model'] = $void_transaction_model;

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


