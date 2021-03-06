<?php
/**
 * AdjustMultiDocumentModel
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
 * AdjustMultiDocumentModel Class Doc Comment
 *
 * @category Class
 * @description Replace an existing MultiDocument transaction recorded in AvaTax with a new one.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdjustMultiDocumentModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdjustMultiDocumentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjustment_reason' => 'string',
        'adjust_description' => 'string',
        'new_transaction' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adjustment_reason' => null,
        'adjust_description' => null,
        'new_transaction' => null
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
        'adjust_description' => 'adjustDescription',
        'new_transaction' => 'newTransaction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment_reason' => 'setAdjustmentReason',
        'adjust_description' => 'setAdjustDescription',
        'new_transaction' => 'setNewTransaction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment_reason' => 'getAdjustmentReason',
        'adjust_description' => 'getAdjustDescription',
        'new_transaction' => 'getNewTransaction'
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
        $this->container['adjust_description'] = isset($data['adjust_description']) ? $data['adjust_description'] : null;
        $this->container['new_transaction'] = isset($data['new_transaction']) ? $data['new_transaction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['adjustment_reason'] === null) {
            $invalidProperties[] = "'adjustment_reason' can't be null";
        }
        $allowedValues = $this->getAdjustmentReasonAllowableValues();
        if (!is_null($this->container['adjustment_reason']) && !in_array($this->container['adjustment_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'adjustment_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['new_transaction'] === null) {
            $invalidProperties[] = "'new_transaction' can't be null";
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
        if (!in_array($adjustment_reason, $allowedValues, true)) {
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
     * Gets adjust_description
     *
     * @return string
     */
    public function getAdjustDescription()
    {
        return $this->container['adjust_description'];
    }

    /**
     * Sets adjust_description
     *
     * @param string $adjust_description If the AdjustmentReason is \"Other\", specify the reason here.                This is required when the AdjustmentReason is 8 (Other).
     *
     * @return $this
     */
    public function setAdjustDescription($adjust_description)
    {
        $this->container['adjust_description'] = $adjust_description;

        return $this;
    }

    /**
     * Gets new_transaction
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel
     */
    public function getNewTransaction()
    {
        return $this->container['new_transaction'];
    }

    /**
     * Sets new_transaction
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\CreateMultiDocumentModel $new_transaction Replace the current MultiDocument transaction with tax data calculated for this new MultiDocument transaction
     *
     * @return $this
     */
    public function setNewTransaction($new_transaction)
    {
        $this->container['new_transaction'] = $new_transaction;

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


