<?php
/**
 * MultiTaxFilingModel
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
 * MultiTaxFilingModel Class Doc Comment
 *
 * @category Class
 * @description Represents a listing of all tax calculation data for filings and for accruing to future filings.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiTaxFilingModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiTaxFilingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'company_id' => 'int',
        'month' => 'int',
        'year' => 'int',
        'type' => 'string',
        'tax_summary' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxSummaryModel',
        'tax_details' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxDetailsModel[]',
        'filing_regions' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\MultiTaxFilingRegionModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'company_id' => 'int32',
        'month' => 'int32',
        'year' => 'int16',
        'type' => null,
        'tax_summary' => null,
        'tax_details' => null,
        'filing_regions' => null
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
        'id' => 'id',
        'company_id' => 'companyId',
        'month' => 'month',
        'year' => 'year',
        'type' => 'type',
        'tax_summary' => 'taxSummary',
        'tax_details' => 'taxDetails',
        'filing_regions' => 'filingRegions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'month' => 'setMonth',
        'year' => 'setYear',
        'type' => 'setType',
        'tax_summary' => 'setTaxSummary',
        'tax_details' => 'setTaxDetails',
        'filing_regions' => 'setFilingRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'month' => 'getMonth',
        'year' => 'getYear',
        'type' => 'getType',
        'tax_summary' => 'getTaxSummary',
        'tax_details' => 'getTaxDetails',
        'filing_regions' => 'getFilingRegions'
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

    const TYPE_ORIGINAL = 'Original';
    const TYPE_AMENDED = 'Amended';
    const TYPE_TEST = 'Test';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ORIGINAL,
            self::TYPE_AMENDED,
            self::TYPE_TEST,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tax_summary'] = isset($data['tax_summary']) ? $data['tax_summary'] : null;
        $this->container['tax_details'] = isset($data['tax_details']) ? $data['tax_details'] : null;
        $this->container['filing_regions'] = isset($data['filing_regions']) ? $data['filing_regions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique ID number of this filing.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id The unique ID number of the company for this filing.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month The month of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015.
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year The year of the filing period for this tax filing.  The filing period represents the year and month of the last day of taxes being reported on this filing.  For example, an annual tax filing for Jan-Dec 2015 would have a filing period of Dec 2015.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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
     * @param string $type Indicates whether this is an original or an amended filing.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets tax_summary
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxSummaryModel
     */
    public function getTaxSummary()
    {
        return $this->container['tax_summary'];
    }

    /**
     * Sets tax_summary
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxSummaryModel $tax_summary A summary of all taxes combined for this period
     *
     * @return $this
     */
    public function setTaxSummary($tax_summary)
    {
        $this->container['tax_summary'] = $tax_summary;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxDetailsModel[]
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsTaxDetailsModel[] $tax_details A detailed breakdown of the taxes in this filing
     *
     * @return $this
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets filing_regions
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiTaxFilingRegionModel[]
     */
    public function getFilingRegions()
    {
        return $this->container['filing_regions'];
    }

    /**
     * Sets filing_regions
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\MultiTaxFilingRegionModel[] $filing_regions A listing of regional tax filings within this time period.
     *
     * @return $this
     */
    public function setFilingRegions($filing_regions)
    {
        $this->container['filing_regions'] = $filing_regions;

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


