<?php
/**
 * AddTransactionLineModel
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
 * AddTransactionLineModel Class Doc Comment
 *
 * @category Class
 * @description Model to add specific lines to exising transaction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddTransactionLineModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddTransactionLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_code' => 'string',
        'transaction_code' => 'string',
        'document_type' => 'string',
        'lines' => '\Swagger\Client\Model\LineItemModel[]',
        'renumber' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_code' => null,
        'transaction_code' => null,
        'document_type' => null,
        'lines' => null,
        'renumber' => null
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
        'company_code' => 'companyCode',
        'transaction_code' => 'transactionCode',
        'document_type' => 'documentType',
        'lines' => 'lines',
        'renumber' => 'renumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_code' => 'setCompanyCode',
        'transaction_code' => 'setTransactionCode',
        'document_type' => 'setDocumentType',
        'lines' => 'setLines',
        'renumber' => 'setRenumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_code' => 'getCompanyCode',
        'transaction_code' => 'getTransactionCode',
        'document_type' => 'getDocumentType',
        'lines' => 'getLines',
        'renumber' => 'getRenumber'
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

    const DOCUMENT_TYPE_SALES_ORDER = 'SalesOrder';
    const DOCUMENT_TYPE_SALES_INVOICE = 'SalesInvoice';
    const DOCUMENT_TYPE_PURCHASE_ORDER = 'PurchaseOrder';
    const DOCUMENT_TYPE_PURCHASE_INVOICE = 'PurchaseInvoice';
    const DOCUMENT_TYPE_RETURN_ORDER = 'ReturnOrder';
    const DOCUMENT_TYPE_RETURN_INVOICE = 'ReturnInvoice';
    const DOCUMENT_TYPE_INVENTORY_TRANSFER_ORDER = 'InventoryTransferOrder';
    const DOCUMENT_TYPE_INVENTORY_TRANSFER_INVOICE = 'InventoryTransferInvoice';
    const DOCUMENT_TYPE_REVERSE_CHARGE_ORDER = 'ReverseChargeOrder';
    const DOCUMENT_TYPE_REVERSE_CHARGE_INVOICE = 'ReverseChargeInvoice';
    const DOCUMENT_TYPE_CUSTOMS_INVOICE = 'CustomsInvoice';
    const DOCUMENT_TYPE_CUSTOMS_ORDER = 'CustomsOrder';
    const DOCUMENT_TYPE_ANY = 'Any';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_SALES_ORDER,
            self::DOCUMENT_TYPE_SALES_INVOICE,
            self::DOCUMENT_TYPE_PURCHASE_ORDER,
            self::DOCUMENT_TYPE_PURCHASE_INVOICE,
            self::DOCUMENT_TYPE_RETURN_ORDER,
            self::DOCUMENT_TYPE_RETURN_INVOICE,
            self::DOCUMENT_TYPE_INVENTORY_TRANSFER_ORDER,
            self::DOCUMENT_TYPE_INVENTORY_TRANSFER_INVOICE,
            self::DOCUMENT_TYPE_REVERSE_CHARGE_ORDER,
            self::DOCUMENT_TYPE_REVERSE_CHARGE_INVOICE,
            self::DOCUMENT_TYPE_CUSTOMS_INVOICE,
            self::DOCUMENT_TYPE_CUSTOMS_ORDER,
            self::DOCUMENT_TYPE_ANY,
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
        $this->container['company_code'] = isset($data['company_code']) ? $data['company_code'] : null;
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['renumber'] = isset($data['renumber']) ? $data['renumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_code'] === null) {
            $invalidProperties[] = "'company_code' can't be null";
        }
        if ($this->container['transaction_code'] === null) {
            $invalidProperties[] = "'transaction_code' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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
     * Gets company_code
     *
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     *
     * @param string $company_code company code
     *
     * @return $this
     */
    public function setCompanyCode($company_code)
    {
        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets transaction_code
     *
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->container['transaction_code'];
    }

    /**
     * Sets transaction_code
     *
     * @param string $transaction_code document code for the transaction to add lines
     *
     * @return $this
     */
    public function setTransactionCode($transaction_code)
    {
        $this->container['transaction_code'] = $transaction_code;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type document type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Swagger\Client\Model\LineItemModel[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Swagger\Client\Model\LineItemModel[] $lines List of lines to be added
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets renumber
     *
     * @return bool
     */
    public function getRenumber()
    {
        return $this->container['renumber'];
    }

    /**
     * Sets renumber
     *
     * @param bool $renumber Option to renumber lines after add. After renumber, the line number becomes: \"1\", \"2\", \"3\", ...
     *
     * @return $this
     */
    public function setRenumber($renumber)
    {
        $this->container['renumber'] = $renumber;

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

