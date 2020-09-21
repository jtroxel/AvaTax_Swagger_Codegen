<?php
/**
 * CreateOrAdjustTransactionModel
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
 * CreateOrAdjustTransactionModel Class Doc Comment
 *
 * @category Class
 * @description Create or adjust transaction model
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOrAdjustTransactionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateOrAdjustTransactionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjustment_reason' => 'string',
        'adjustment_description' => 'string',
        'create_transaction_model' => '\Swagger\Client\Model\CreateTransactionModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adjustment_reason' => null,
        'adjustment_description' => null,
        'create_transaction_model' => null
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
        'adjustment_reason' => 'adjustmentReason',
        'adjustment_description' => 'adjustmentDescription',
        'create_transaction_model' => 'createTransactionModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment_reason' => 'setAdjustmentReason',
        'adjustment_description' => 'setAdjustmentDescription',
        'create_transaction_model' => 'setCreateTransactionModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment_reason' => 'getAdjustmentReason',
        'adjustment_description' => 'getAdjustmentDescription',
        'create_transaction_model' => 'getCreateTransactionModel'
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

    const ADJUSTMENT_REASON_NOT_ADJUSTED = 'NotAdjusted';
    const ADJUSTMENT_REASON_SOURCING_ISSUE = 'SourcingIssue';
    const ADJUSTMENT_REASON_RECONCILED_WITH_GENERAL_LEDGER = 'ReconciledWithGeneralLedger';
    const ADJUSTMENT_REASON_EXEMPT_CERT_APPLIED = 'ExemptCertApplied';
    const ADJUSTMENT_REASON_PRICE_ADJUSTED = 'PriceAdjusted';
    const ADJUSTMENT_REASON_PRODUCT_RETURNED = 'ProductReturned';
    const ADJUSTMENT_REASON_PRODUCT_EXCHANGED = 'ProductExchanged';
    const ADJUSTMENT_REASON_BAD_DEBT = 'BadDebt';
    const ADJUSTMENT_REASON_OTHER = 'Other';
    const ADJUSTMENT_REASON_OFFLINE = 'Offline';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdjustmentReasonAllowableValues()
    {
        return [
            self::ADJUSTMENT_REASON_NOT_ADJUSTED,
            self::ADJUSTMENT_REASON_SOURCING_ISSUE,
            self::ADJUSTMENT_REASON_RECONCILED_WITH_GENERAL_LEDGER,
            self::ADJUSTMENT_REASON_EXEMPT_CERT_APPLIED,
            self::ADJUSTMENT_REASON_PRICE_ADJUSTED,
            self::ADJUSTMENT_REASON_PRODUCT_RETURNED,
            self::ADJUSTMENT_REASON_PRODUCT_EXCHANGED,
            self::ADJUSTMENT_REASON_BAD_DEBT,
            self::ADJUSTMENT_REASON_OTHER,
            self::ADJUSTMENT_REASON_OFFLINE,
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
        $this->container['adjustment_reason'] = isset($data['adjustment_reason']) ? $data['adjustment_reason'] : null;
        $this->container['adjustment_description'] = isset($data['adjustment_description']) ? $data['adjustment_description'] : null;
        $this->container['create_transaction_model'] = isset($data['create_transaction_model']) ? $data['create_transaction_model'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAdjustmentReasonAllowableValues();
        if (!is_null($this->container['adjustment_reason']) && !in_array($this->container['adjustment_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'adjustment_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['create_transaction_model'] === null) {
            $invalidProperties[] = "'create_transaction_model' can't be null";
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
     * Gets adjustment_reason
     *
     * @return string
     */
    public function getAdjustmentReason()
    {
        return $this->container['adjustment_reason'];
    }

    /**
     * Sets adjustment_reason
     *
     * @param string $adjustment_reason A reason code indicating why this adjustment was made
     *
     * @return $this
     */
    public function setAdjustmentReason($adjustment_reason)
    {
        $allowedValues = $this->getAdjustmentReasonAllowableValues();
        if (!is_null($adjustment_reason) && !in_array($adjustment_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'adjustment_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adjustment_reason'] = $adjustment_reason;

        return $this;
    }

    /**
     * Gets adjustment_description
     *
     * @return string
     */
    public function getAdjustmentDescription()
    {
        return $this->container['adjustment_description'];
    }

    /**
     * Sets adjustment_description
     *
     * @param string $adjustment_description If the AdjustmentReason is \"Other\", specify the reason here.                This is required when the AdjustmentReason is 8 (Other).
     *
     * @return $this
     */
    public function setAdjustmentDescription($adjustment_description)
    {
        $this->container['adjustment_description'] = $adjustment_description;

        return $this;
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
     * @param \Swagger\Client\Model\CreateTransactionModel $create_transaction_model The create transaction model to be created or updated.                If the transaction does not exist, create transaction.  If the transaction exists, adjust the existing transaction.
     *
     * @return $this
     */
    public function setCreateTransactionModel($create_transaction_model)
    {
        $this->container['create_transaction_model'] = $create_transaction_model;

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

