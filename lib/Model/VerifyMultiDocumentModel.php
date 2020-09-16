<?php
/**
 * VerifyMultiDocumentModel
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
 * VerifyMultiDocumentModel Class Doc Comment
 *
 * @category Class
 * @description Verify that a MultiDocument object matches the information in your accounting system.                If all attributes of the MultiDocument object match the values in your request, the  MultiDocument object will be moved to the document status &#x60;Posted&#x60;.                For more information on document status, see [DocumentStatus](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentStatus/).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VerifyMultiDocumentModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VerifyMultiDocumentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'type' => 'string',
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
        'code' => null,
        'type' => null,
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
        'code' => 'code',
        'type' => 'type',
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
        'code' => 'setCode',
        'type' => 'setType',
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
        'code' => 'getCode',
        'type' => 'getType',
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

    const TYPE_SALES_ORDER = 'SalesOrder';
    const TYPE_SALES_INVOICE = 'SalesInvoice';
    const TYPE_PURCHASE_ORDER = 'PurchaseOrder';
    const TYPE_PURCHASE_INVOICE = 'PurchaseInvoice';
    const TYPE_RETURN_ORDER = 'ReturnOrder';
    const TYPE_RETURN_INVOICE = 'ReturnInvoice';
    const TYPE_INVENTORY_TRANSFER_ORDER = 'InventoryTransferOrder';
    const TYPE_INVENTORY_TRANSFER_INVOICE = 'InventoryTransferInvoice';
    const TYPE_REVERSE_CHARGE_ORDER = 'ReverseChargeOrder';
    const TYPE_REVERSE_CHARGE_INVOICE = 'ReverseChargeInvoice';
    const TYPE_CUSTOMS_INVOICE = 'CustomsInvoice';
    const TYPE_CUSTOMS_ORDER = 'CustomsOrder';
    const TYPE_ANY = 'Any';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SALES_ORDER,
            self::TYPE_SALES_INVOICE,
            self::TYPE_PURCHASE_ORDER,
            self::TYPE_PURCHASE_INVOICE,
            self::TYPE_RETURN_ORDER,
            self::TYPE_RETURN_INVOICE,
            self::TYPE_INVENTORY_TRANSFER_ORDER,
            self::TYPE_INVENTORY_TRANSFER_INVOICE,
            self::TYPE_REVERSE_CHARGE_ORDER,
            self::TYPE_REVERSE_CHARGE_INVOICE,
            self::TYPE_CUSTOMS_INVOICE,
            self::TYPE_CUSTOMS_ORDER,
            self::TYPE_ANY,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 45)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['code']) < 0)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Represents the unique code of this MultiDocument transaction.                A MultiDocument transaction is uniquely identified by its `accountId`, `code`, and `type`.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if ((mb_strlen($code) > 45)) {
            throw new \InvalidArgumentException('invalid length for $code when calling VerifyMultiDocumentModel., must be smaller than or equal to 45.');
        }
        if ((mb_strlen($code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $code when calling VerifyMultiDocumentModel., must be bigger than or equal to 0.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Represents the document type of this MultiDocument transaction.  For more information about  document types, see [DocumentType](https://developer.avalara.com/api-reference/avatax/rest/v2/models/enums/DocumentType/).                A MultiDocument transaction is uniquely identified by its `accountId`, `code`, and `type`.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
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


