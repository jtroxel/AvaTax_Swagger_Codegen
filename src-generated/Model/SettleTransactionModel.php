<?php
/**
 * SettleTransactionModel
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
 * SettleTransactionModel Class Doc Comment
 *
 * @category Class
 * @description Settle this transaction with your ledger by executing one or many actions against that transaction.                You may use this endpoint to verify the transaction, change the transaction&#39;s code, and commit the transaction for reporting purposes.  This endpoint may be used to execute any or all of these actions at once.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettleTransactionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SettleTransactionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'verify' => '\Swagger\Client\Model\VerifyTransactionModel',
        'change_code' => '\Swagger\Client\Model\ChangeTransactionCodeModel',
        'commit' => '\Swagger\Client\Model\CommitTransactionModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'verify' => null,
        'change_code' => null,
        'commit' => null
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
        'verify' => 'verify',
        'change_code' => 'changeCode',
        'commit' => 'commit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verify' => 'setVerify',
        'change_code' => 'setChangeCode',
        'commit' => 'setCommit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verify' => 'getVerify',
        'change_code' => 'getChangeCode',
        'commit' => 'getCommit'
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
        $this->container['verify'] = isset($data['verify']) ? $data['verify'] : null;
        $this->container['change_code'] = isset($data['change_code']) ? $data['change_code'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
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
     * Gets verify
     *
     * @return \Swagger\Client\Model\VerifyTransactionModel
     */
    public function getVerify()
    {
        return $this->container['verify'];
    }

    /**
     * Sets verify
     *
     * @param \Swagger\Client\Model\VerifyTransactionModel $verify To verify this transaction, you may provide information in this field.                If you leave this field null, the transaction will not be verified.
     *
     * @return $this
     */
    public function setVerify($verify)
    {
        $this->container['verify'] = $verify;

        return $this;
    }

    /**
     * Gets change_code
     *
     * @return \Swagger\Client\Model\ChangeTransactionCodeModel
     */
    public function getChangeCode()
    {
        return $this->container['change_code'];
    }

    /**
     * Sets change_code
     *
     * @param \Swagger\Client\Model\ChangeTransactionCodeModel $change_code To change the code for this transaction, you may provide information in this field.                If you leave this field null, the transaction's code will not be changed.
     *
     * @return $this
     */
    public function setChangeCode($change_code)
    {
        $this->container['change_code'] = $change_code;

        return $this;
    }

    /**
     * Gets commit
     *
     * @return \Swagger\Client\Model\CommitTransactionModel
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     *
     * @param \Swagger\Client\Model\CommitTransactionModel $commit To commit this transaction so that it can be reported on a tax filing, you may provide information in this field.                If you leave this field null, the transaction's commit status will not be changed.                If you use Avalara's Managed Returns Service, committing a transaction will allow that transaction to be filed.
     *
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

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

