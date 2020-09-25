<?php
/**
 * TaxDetailsByTaxType
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
 * TaxDetailsByTaxType Class Doc Comment
 *
 * @category Class
 * @description Tax Details by Tax Type
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxDetailsByTaxType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxDetailsByTaxType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_type' => 'string',
        'total_taxable' => 'double',
        'total_exempt' => 'double',
        'total_non_taxable' => 'double',
        'total_tax' => 'double',
        'tax_sub_type_details' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\TaxDetailsByTaxSubType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_type' => null,
        'total_taxable' => 'double',
        'total_exempt' => 'double',
        'total_non_taxable' => 'double',
        'total_tax' => 'double',
        'tax_sub_type_details' => null
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
        'tax_type' => 'taxType',
        'total_taxable' => 'totalTaxable',
        'total_exempt' => 'totalExempt',
        'total_non_taxable' => 'totalNonTaxable',
        'total_tax' => 'totalTax',
        'tax_sub_type_details' => 'taxSubTypeDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_type' => 'setTaxType',
        'total_taxable' => 'setTotalTaxable',
        'total_exempt' => 'setTotalExempt',
        'total_non_taxable' => 'setTotalNonTaxable',
        'total_tax' => 'setTotalTax',
        'tax_sub_type_details' => 'setTaxSubTypeDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_type' => 'getTaxType',
        'total_taxable' => 'getTotalTaxable',
        'total_exempt' => 'getTotalExempt',
        'total_non_taxable' => 'getTotalNonTaxable',
        'total_tax' => 'getTotalTax',
        'tax_sub_type_details' => 'getTaxSubTypeDetails'
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
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['total_taxable'] = isset($data['total_taxable']) ? $data['total_taxable'] : null;
        $this->container['total_exempt'] = isset($data['total_exempt']) ? $data['total_exempt'] : null;
        $this->container['total_non_taxable'] = isset($data['total_non_taxable']) ? $data['total_non_taxable'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['tax_sub_type_details'] = isset($data['tax_sub_type_details']) ? $data['tax_sub_type_details'] : null;
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
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type Tax Type
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets total_taxable
     *
     * @return double
     */
    public function getTotalTaxable()
    {
        return $this->container['total_taxable'];
    }

    /**
     * Sets total_taxable
     *
     * @param double $total_taxable Total taxable amount by tax type
     *
     * @return $this
     */
    public function setTotalTaxable($total_taxable)
    {
        $this->container['total_taxable'] = $total_taxable;

        return $this;
    }

    /**
     * Gets total_exempt
     *
     * @return double
     */
    public function getTotalExempt()
    {
        return $this->container['total_exempt'];
    }

    /**
     * Sets total_exempt
     *
     * @param double $total_exempt Total exempt by tax type
     *
     * @return $this
     */
    public function setTotalExempt($total_exempt)
    {
        $this->container['total_exempt'] = $total_exempt;

        return $this;
    }

    /**
     * Gets total_non_taxable
     *
     * @return double
     */
    public function getTotalNonTaxable()
    {
        return $this->container['total_non_taxable'];
    }

    /**
     * Sets total_non_taxable
     *
     * @param double $total_non_taxable Total non taxable by tax type
     *
     * @return $this
     */
    public function setTotalNonTaxable($total_non_taxable)
    {
        $this->container['total_non_taxable'] = $total_non_taxable;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return double
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double $total_tax Total tax by tax type
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets tax_sub_type_details
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxDetailsByTaxSubType[]
     */
    public function getTaxSubTypeDetails()
    {
        return $this->container['tax_sub_type_details'];
    }

    /**
     * Sets tax_sub_type_details
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxDetailsByTaxSubType[] $tax_sub_type_details Tax subtype details
     *
     * @return $this
     */
    public function setTaxSubTypeDetails($tax_sub_type_details)
    {
        $this->container['tax_sub_type_details'] = $tax_sub_type_details;

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


