<?php
/**
 * EcmsDetailTaxCodeModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Together\Taxes
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

namespace Together\Taxes\Model;

use \ArrayAccess;
use \Together\Taxes\ObjectSerializer;

/**
 * EcmsDetailTaxCodeModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcmsDetailTaxCodeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcmsDetailTaxCodeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exempt_cert_detail_tax_code_id' => 'int',
        'exempt_cert_detail_id' => 'int',
        'tax_code_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exempt_cert_detail_tax_code_id' => 'int32',
        'exempt_cert_detail_id' => 'int32',
        'tax_code_id' => 'int32'
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
        'exempt_cert_detail_tax_code_id' => 'exemptCertDetailTaxCodeId',
        'exempt_cert_detail_id' => 'exemptCertDetailId',
        'tax_code_id' => 'taxCodeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exempt_cert_detail_tax_code_id' => 'setExemptCertDetailTaxCodeId',
        'exempt_cert_detail_id' => 'setExemptCertDetailId',
        'tax_code_id' => 'setTaxCodeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exempt_cert_detail_tax_code_id' => 'getExemptCertDetailTaxCodeId',
        'exempt_cert_detail_id' => 'getExemptCertDetailId',
        'tax_code_id' => 'getTaxCodeId'
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
        $this->container['exempt_cert_detail_tax_code_id'] = isset($data['exempt_cert_detail_tax_code_id']) ? $data['exempt_cert_detail_tax_code_id'] : null;
        $this->container['exempt_cert_detail_id'] = isset($data['exempt_cert_detail_id']) ? $data['exempt_cert_detail_id'] : null;
        $this->container['tax_code_id'] = isset($data['tax_code_id']) ? $data['tax_code_id'] : null;
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
     * Gets exempt_cert_detail_tax_code_id
     *
     * @return int
     */
    public function getExemptCertDetailTaxCodeId()
    {
        return $this->container['exempt_cert_detail_tax_code_id'];
    }

    /**
     * Sets exempt_cert_detail_tax_code_id
     *
     * @param int $exempt_cert_detail_tax_code_id Id of the exempt certificate detail tax code
     *
     * @return $this
     */
    public function setExemptCertDetailTaxCodeId($exempt_cert_detail_tax_code_id)
    {
        $this->container['exempt_cert_detail_tax_code_id'] = $exempt_cert_detail_tax_code_id;

        return $this;
    }

    /**
     * Gets exempt_cert_detail_id
     *
     * @return int
     */
    public function getExemptCertDetailId()
    {
        return $this->container['exempt_cert_detail_id'];
    }

    /**
     * Sets exempt_cert_detail_id
     *
     * @param int $exempt_cert_detail_id exempt certificate detail id
     *
     * @return $this
     */
    public function setExemptCertDetailId($exempt_cert_detail_id)
    {
        $this->container['exempt_cert_detail_id'] = $exempt_cert_detail_id;

        return $this;
    }

    /**
     * Gets tax_code_id
     *
     * @return int
     */
    public function getTaxCodeId()
    {
        return $this->container['tax_code_id'];
    }

    /**
     * Sets tax_code_id
     *
     * @param int $tax_code_id tax code id
     *
     * @return $this
     */
    public function setTaxCodeId($tax_code_id)
    {
        $this->container['tax_code_id'] = $tax_code_id;

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


