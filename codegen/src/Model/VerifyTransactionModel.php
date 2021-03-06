<?php
/**
 * VerifyTransactionModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Together\Taxes\Provider\AvaTax\Swagger
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

namespace Together\Taxes\Provider\AvaTax\Swagger\Model;

use \ArrayAccess;
use \Together\Taxes\Provider\AvaTax\Swagger\ObjectSerializer;

/**
 * VerifyTransactionModel Class Doc Comment
 *
 * @category Class
 * @description Verify this transaction by matching it to values in your accounting system.                You may specify one or more of the following fields to verify: &#x60;date&#x60;, &#x60;totalAmount&#x60;, or &#x60;totalTax&#x60;.  This call will report an error if there is any difference between the data stored in AvaTax and  the data stored in your accounting system.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VerifyTransactionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VerifyTransactionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'verify_transaction_date' => '\DateTime',
        'verify_total_amount' => 'double',
        'verify_total_tax' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'verify_transaction_date' => 'date-time',
        'verify_total_amount' => 'double',
        'verify_total_tax' => 'double'
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
        'verify_transaction_date' => 'verifyTransactionDate',
        'verify_total_amount' => 'verifyTotalAmount',
        'verify_total_tax' => 'verifyTotalTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verify_transaction_date' => 'setVerifyTransactionDate',
        'verify_total_amount' => 'setVerifyTotalAmount',
        'verify_total_tax' => 'setVerifyTotalTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verify_transaction_date' => 'getVerifyTransactionDate',
        'verify_total_amount' => 'getVerifyTotalAmount',
        'verify_total_tax' => 'getVerifyTotalTax'
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
        $this->container['verify_transaction_date'] = isset($data['verify_transaction_date']) ? $data['verify_transaction_date'] : null;
        $this->container['verify_total_amount'] = isset($data['verify_total_amount']) ? $data['verify_total_amount'] : null;
        $this->container['verify_total_tax'] = isset($data['verify_total_tax']) ? $data['verify_total_tax'] : null;
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
     * Gets verify_transaction_date
     *
     * @return \DateTime
     */
    public function getVerifyTransactionDate()
    {
        return $this->container['verify_transaction_date'];
    }

    /**
     * Sets verify_transaction_date
     *
     * @param \DateTime $verify_transaction_date Set this value if you wish to verify a match between `verifyTransactionDate` and  the `documentDate` value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field.
     *
     * @return $this
     */
    public function setVerifyTransactionDate($verify_transaction_date)
    {
        $this->container['verify_transaction_date'] = $verify_transaction_date;

        return $this;
    }

    /**
     * Gets verify_total_amount
     *
     * @return double
     */
    public function getVerifyTotalAmount()
    {
        return $this->container['verify_total_amount'];
    }

    /**
     * Sets verify_total_amount
     *
     * @param double $verify_total_amount Set this value if you wish to verify a match between `verifyTotalAmount` and  the `totalAmount` value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field.
     *
     * @return $this
     */
    public function setVerifyTotalAmount($verify_total_amount)
    {
        $this->container['verify_total_amount'] = $verify_total_amount;

        return $this;
    }

    /**
     * Gets verify_total_tax
     *
     * @return double
     */
    public function getVerifyTotalTax()
    {
        return $this->container['verify_total_tax'];
    }

    /**
     * Sets verify_total_tax
     *
     * @param double $verify_total_tax Set this value if you wish to verify a match between `verifyTotalTax` and  the `totalTax` value on the transaction recorded in AvaTax.                If you leave this field empty, we will skip verification for this field.
     *
     * @return $this
     */
    public function setVerifyTotalTax($verify_total_tax)
    {
        $this->container['verify_total_tax'] = $verify_total_tax;

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


