<?php
/**
 * FilingsTaxSummaryModel
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
 * FilingsTaxSummaryModel Class Doc Comment
 *
 * @category Class
 * @description Represents a listing of all tax calculation data for filings and for accruing to future filings.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilingsTaxSummaryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilingsTaxSummaryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sales_amount' => 'double',
        'taxable_amount' => 'double',
        'non_taxable_amount' => 'double',
        'tax_amount' => 'double',
        'remittance_amount' => 'double',
        'collect_amount' => 'double',
        'sales_accrual_amount' => 'double',
        'taxable_accrual_amount' => 'double',
        'non_taxable_accrual_amount' => 'double',
        'tax_accrual_amount' => 'double',
        'reportable_sales_amount' => 'double',
        'reportable_non_taxable_amount' => 'double',
        'reportable_taxable_amount' => 'double',
        'reportable_tax_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sales_amount' => 'double',
        'taxable_amount' => 'double',
        'non_taxable_amount' => 'double',
        'tax_amount' => 'double',
        'remittance_amount' => 'double',
        'collect_amount' => 'double',
        'sales_accrual_amount' => 'double',
        'taxable_accrual_amount' => 'double',
        'non_taxable_accrual_amount' => 'double',
        'tax_accrual_amount' => 'double',
        'reportable_sales_amount' => 'double',
        'reportable_non_taxable_amount' => 'double',
        'reportable_taxable_amount' => 'double',
        'reportable_tax_amount' => 'double'
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
        'sales_amount' => 'salesAmount',
        'taxable_amount' => 'taxableAmount',
        'non_taxable_amount' => 'nonTaxableAmount',
        'tax_amount' => 'taxAmount',
        'remittance_amount' => 'remittanceAmount',
        'collect_amount' => 'collectAmount',
        'sales_accrual_amount' => 'salesAccrualAmount',
        'taxable_accrual_amount' => 'taxableAccrualAmount',
        'non_taxable_accrual_amount' => 'nonTaxableAccrualAmount',
        'tax_accrual_amount' => 'taxAccrualAmount',
        'reportable_sales_amount' => 'reportableSalesAmount',
        'reportable_non_taxable_amount' => 'reportableNonTaxableAmount',
        'reportable_taxable_amount' => 'reportableTaxableAmount',
        'reportable_tax_amount' => 'reportableTaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sales_amount' => 'setSalesAmount',
        'taxable_amount' => 'setTaxableAmount',
        'non_taxable_amount' => 'setNonTaxableAmount',
        'tax_amount' => 'setTaxAmount',
        'remittance_amount' => 'setRemittanceAmount',
        'collect_amount' => 'setCollectAmount',
        'sales_accrual_amount' => 'setSalesAccrualAmount',
        'taxable_accrual_amount' => 'setTaxableAccrualAmount',
        'non_taxable_accrual_amount' => 'setNonTaxableAccrualAmount',
        'tax_accrual_amount' => 'setTaxAccrualAmount',
        'reportable_sales_amount' => 'setReportableSalesAmount',
        'reportable_non_taxable_amount' => 'setReportableNonTaxableAmount',
        'reportable_taxable_amount' => 'setReportableTaxableAmount',
        'reportable_tax_amount' => 'setReportableTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sales_amount' => 'getSalesAmount',
        'taxable_amount' => 'getTaxableAmount',
        'non_taxable_amount' => 'getNonTaxableAmount',
        'tax_amount' => 'getTaxAmount',
        'remittance_amount' => 'getRemittanceAmount',
        'collect_amount' => 'getCollectAmount',
        'sales_accrual_amount' => 'getSalesAccrualAmount',
        'taxable_accrual_amount' => 'getTaxableAccrualAmount',
        'non_taxable_accrual_amount' => 'getNonTaxableAccrualAmount',
        'tax_accrual_amount' => 'getTaxAccrualAmount',
        'reportable_sales_amount' => 'getReportableSalesAmount',
        'reportable_non_taxable_amount' => 'getReportableNonTaxableAmount',
        'reportable_taxable_amount' => 'getReportableTaxableAmount',
        'reportable_tax_amount' => 'getReportableTaxAmount'
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
        $this->container['sales_amount'] = isset($data['sales_amount']) ? $data['sales_amount'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['non_taxable_amount'] = isset($data['non_taxable_amount']) ? $data['non_taxable_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['remittance_amount'] = isset($data['remittance_amount']) ? $data['remittance_amount'] : null;
        $this->container['collect_amount'] = isset($data['collect_amount']) ? $data['collect_amount'] : null;
        $this->container['sales_accrual_amount'] = isset($data['sales_accrual_amount']) ? $data['sales_accrual_amount'] : null;
        $this->container['taxable_accrual_amount'] = isset($data['taxable_accrual_amount']) ? $data['taxable_accrual_amount'] : null;
        $this->container['non_taxable_accrual_amount'] = isset($data['non_taxable_accrual_amount']) ? $data['non_taxable_accrual_amount'] : null;
        $this->container['tax_accrual_amount'] = isset($data['tax_accrual_amount']) ? $data['tax_accrual_amount'] : null;
        $this->container['reportable_sales_amount'] = isset($data['reportable_sales_amount']) ? $data['reportable_sales_amount'] : null;
        $this->container['reportable_non_taxable_amount'] = isset($data['reportable_non_taxable_amount']) ? $data['reportable_non_taxable_amount'] : null;
        $this->container['reportable_taxable_amount'] = isset($data['reportable_taxable_amount']) ? $data['reportable_taxable_amount'] : null;
        $this->container['reportable_tax_amount'] = isset($data['reportable_tax_amount']) ? $data['reportable_tax_amount'] : null;
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
     * Gets sales_amount
     *
     * @return double
     */
    public function getSalesAmount()
    {
        return $this->container['sales_amount'];
    }

    /**
     * Sets sales_amount
     *
     * @param double $sales_amount The total sales amount
     *
     * @return $this
     */
    public function setSalesAmount($sales_amount)
    {
        $this->container['sales_amount'] = $sales_amount;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return double
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param double $taxable_amount The taxable amount
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets non_taxable_amount
     *
     * @return double
     */
    public function getNonTaxableAmount()
    {
        return $this->container['non_taxable_amount'];
    }

    /**
     * Sets non_taxable_amount
     *
     * @param double $non_taxable_amount The nontaxable amount
     *
     * @return $this
     */
    public function setNonTaxableAmount($non_taxable_amount)
    {
        $this->container['non_taxable_amount'] = $non_taxable_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount The tax amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets remittance_amount
     *
     * @return double
     */
    public function getRemittanceAmount()
    {
        return $this->container['remittance_amount'];
    }

    /**
     * Sets remittance_amount
     *
     * @param double $remittance_amount The remittance amount
     *
     * @return $this
     */
    public function setRemittanceAmount($remittance_amount)
    {
        $this->container['remittance_amount'] = $remittance_amount;

        return $this;
    }

    /**
     * Gets collect_amount
     *
     * @return double
     */
    public function getCollectAmount()
    {
        return $this->container['collect_amount'];
    }

    /**
     * Sets collect_amount
     *
     * @param double $collect_amount The collect amount
     *
     * @return $this
     */
    public function setCollectAmount($collect_amount)
    {
        $this->container['collect_amount'] = $collect_amount;

        return $this;
    }

    /**
     * Gets sales_accrual_amount
     *
     * @return double
     */
    public function getSalesAccrualAmount()
    {
        return $this->container['sales_accrual_amount'];
    }

    /**
     * Sets sales_accrual_amount
     *
     * @param double $sales_accrual_amount The sales accrual amount
     *
     * @return $this
     */
    public function setSalesAccrualAmount($sales_accrual_amount)
    {
        $this->container['sales_accrual_amount'] = $sales_accrual_amount;

        return $this;
    }

    /**
     * Gets taxable_accrual_amount
     *
     * @return double
     */
    public function getTaxableAccrualAmount()
    {
        return $this->container['taxable_accrual_amount'];
    }

    /**
     * Sets taxable_accrual_amount
     *
     * @param double $taxable_accrual_amount The taxable sales accrual amount
     *
     * @return $this
     */
    public function setTaxableAccrualAmount($taxable_accrual_amount)
    {
        $this->container['taxable_accrual_amount'] = $taxable_accrual_amount;

        return $this;
    }

    /**
     * Gets non_taxable_accrual_amount
     *
     * @return double
     */
    public function getNonTaxableAccrualAmount()
    {
        return $this->container['non_taxable_accrual_amount'];
    }

    /**
     * Sets non_taxable_accrual_amount
     *
     * @param double $non_taxable_accrual_amount The nontaxable accrual amount
     *
     * @return $this
     */
    public function setNonTaxableAccrualAmount($non_taxable_accrual_amount)
    {
        $this->container['non_taxable_accrual_amount'] = $non_taxable_accrual_amount;

        return $this;
    }

    /**
     * Gets tax_accrual_amount
     *
     * @return double
     */
    public function getTaxAccrualAmount()
    {
        return $this->container['tax_accrual_amount'];
    }

    /**
     * Sets tax_accrual_amount
     *
     * @param double $tax_accrual_amount The tax accrual amount
     *
     * @return $this
     */
    public function setTaxAccrualAmount($tax_accrual_amount)
    {
        $this->container['tax_accrual_amount'] = $tax_accrual_amount;

        return $this;
    }

    /**
     * Gets reportable_sales_amount
     *
     * @return double
     */
    public function getReportableSalesAmount()
    {
        return $this->container['reportable_sales_amount'];
    }

    /**
     * Sets reportable_sales_amount
     *
     * @param double $reportable_sales_amount reportableSalesAmount
     *
     * @return $this
     */
    public function setReportableSalesAmount($reportable_sales_amount)
    {
        $this->container['reportable_sales_amount'] = $reportable_sales_amount;

        return $this;
    }

    /**
     * Gets reportable_non_taxable_amount
     *
     * @return double
     */
    public function getReportableNonTaxableAmount()
    {
        return $this->container['reportable_non_taxable_amount'];
    }

    /**
     * Sets reportable_non_taxable_amount
     *
     * @param double $reportable_non_taxable_amount reportableNonTaxableAmount
     *
     * @return $this
     */
    public function setReportableNonTaxableAmount($reportable_non_taxable_amount)
    {
        $this->container['reportable_non_taxable_amount'] = $reportable_non_taxable_amount;

        return $this;
    }

    /**
     * Gets reportable_taxable_amount
     *
     * @return double
     */
    public function getReportableTaxableAmount()
    {
        return $this->container['reportable_taxable_amount'];
    }

    /**
     * Sets reportable_taxable_amount
     *
     * @param double $reportable_taxable_amount reportableTaxableAmount
     *
     * @return $this
     */
    public function setReportableTaxableAmount($reportable_taxable_amount)
    {
        $this->container['reportable_taxable_amount'] = $reportable_taxable_amount;

        return $this;
    }

    /**
     * Gets reportable_tax_amount
     *
     * @return double
     */
    public function getReportableTaxAmount()
    {
        return $this->container['reportable_tax_amount'];
    }

    /**
     * Sets reportable_tax_amount
     *
     * @param double $reportable_tax_amount reportableTaxAmount
     *
     * @return $this
     */
    public function setReportableTaxAmount($reportable_tax_amount)
    {
        $this->container['reportable_tax_amount'] = $reportable_tax_amount;

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


