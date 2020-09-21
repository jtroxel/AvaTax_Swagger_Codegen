<?php
/**
 * MultiTaxFilingRegionModel
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
 * MultiTaxFilingRegionModel Class Doc Comment
 *
 * @category Class
 * @description Regions
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiTaxFilingRegionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiTaxFilingRegionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'region' => 'string',
        'has_nexus' => 'bool',
        'status' => 'string',
        'region_tax_summary' => '\Together\Taxes\Model\FilingsTaxSummaryModel',
        'region_tax_details' => '\Together\Taxes\Model\FilingsTaxDetailsModel[]',
        'suggest_returns' => '\Together\Taxes\Model\FilingsCheckupSuggestedFormModel[]',
        'returns' => '\Together\Taxes\Model\MultiTaxFilingReturnModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'region' => null,
        'has_nexus' => null,
        'status' => null,
        'region_tax_summary' => null,
        'region_tax_details' => null,
        'suggest_returns' => null,
        'returns' => null
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
        'country' => 'country',
        'region' => 'region',
        'has_nexus' => 'hasNexus',
        'status' => 'status',
        'region_tax_summary' => 'regionTaxSummary',
        'region_tax_details' => 'regionTaxDetails',
        'suggest_returns' => 'suggestReturns',
        'returns' => 'returns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'region' => 'setRegion',
        'has_nexus' => 'setHasNexus',
        'status' => 'setStatus',
        'region_tax_summary' => 'setRegionTaxSummary',
        'region_tax_details' => 'setRegionTaxDetails',
        'suggest_returns' => 'setSuggestReturns',
        'returns' => 'setReturns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'region' => 'getRegion',
        'has_nexus' => 'getHasNexus',
        'status' => 'getStatus',
        'region_tax_summary' => 'getRegionTaxSummary',
        'region_tax_details' => 'getRegionTaxDetails',
        'suggest_returns' => 'getSuggestReturns',
        'returns' => 'getReturns'
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

    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_DIRTY = 'Dirty';
    const STATUS_APPROVED_TO_FILE = 'ApprovedToFile';
    const STATUS_PENDING_FILING = 'PendingFiling';
    const STATUS_PENDING_FILING_ON_BEHALF = 'PendingFilingOnBehalf';
    const STATUS_FILED = 'Filed';
    const STATUS_FILED_ON_BEHALF = 'FiledOnBehalf';
    const STATUS_RETURN_ACCEPTED = 'ReturnAccepted';
    const STATUS_RETURN_ACCEPTED_ON_BEHALF = 'ReturnAcceptedOnBehalf';
    const STATUS_PAYMENT_REMITTED = 'PaymentRemitted';
    const STATUS_VOIDED = 'Voided';
    const STATUS_PENDING_RETURN = 'PendingReturn';
    const STATUS_PENDING_RETURN_ON_BEHALF = 'PendingReturnOnBehalf';
    const STATUS_DO_NOT_FILE = 'DoNotFile';
    const STATUS_RETURN_REJECTED = 'ReturnRejected';
    const STATUS_RETURN_REJECTED_ON_BEHALF = 'ReturnRejectedOnBehalf';
    const STATUS_APPROVED_TO_FILE_ON_BEHALF = 'ApprovedToFileOnBehalf';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_DIRTY,
            self::STATUS_APPROVED_TO_FILE,
            self::STATUS_PENDING_FILING,
            self::STATUS_PENDING_FILING_ON_BEHALF,
            self::STATUS_FILED,
            self::STATUS_FILED_ON_BEHALF,
            self::STATUS_RETURN_ACCEPTED,
            self::STATUS_RETURN_ACCEPTED_ON_BEHALF,
            self::STATUS_PAYMENT_REMITTED,
            self::STATUS_VOIDED,
            self::STATUS_PENDING_RETURN,
            self::STATUS_PENDING_RETURN_ON_BEHALF,
            self::STATUS_DO_NOT_FILE,
            self::STATUS_RETURN_REJECTED,
            self::STATUS_RETURN_REJECTED_ON_BEHALF,
            self::STATUS_APPROVED_TO_FILE_ON_BEHALF,
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['has_nexus'] = isset($data['has_nexus']) ? $data['has_nexus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region_tax_summary'] = isset($data['region_tax_summary']) ? $data['region_tax_summary'] : null;
        $this->container['region_tax_details'] = isset($data['region_tax_details']) ? $data['region_tax_details'] : null;
        $this->container['suggest_returns'] = isset($data['suggest_returns']) ? $data['suggest_returns'] : null;
        $this->container['returns'] = isset($data['returns']) ? $data['returns'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The two-character ISO-3166 code for the country.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region The two or three character region code for the region.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets has_nexus
     *
     * @return bool
     */
    public function getHasNexus()
    {
        return $this->container['has_nexus'];
    }

    /**
     * Sets has_nexus
     *
     * @param bool $has_nexus Whether or not you have nexus in this region.
     *
     * @return $this
     */
    public function setHasNexus($has_nexus)
    {
        $this->container['has_nexus'] = $has_nexus;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the filing region.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets region_tax_summary
     *
     * @return \Together\Taxes\Model\FilingsTaxSummaryModel
     */
    public function getRegionTaxSummary()
    {
        return $this->container['region_tax_summary'];
    }

    /**
     * Sets region_tax_summary
     *
     * @param \Together\Taxes\Model\FilingsTaxSummaryModel $region_tax_summary A summary of all taxes compbined for this period
     *
     * @return $this
     */
    public function setRegionTaxSummary($region_tax_summary)
    {
        $this->container['region_tax_summary'] = $region_tax_summary;

        return $this;
    }

    /**
     * Gets region_tax_details
     *
     * @return \Together\Taxes\Model\FilingsTaxDetailsModel[]
     */
    public function getRegionTaxDetails()
    {
        return $this->container['region_tax_details'];
    }

    /**
     * Sets region_tax_details
     *
     * @param \Together\Taxes\Model\FilingsTaxDetailsModel[] $region_tax_details A detailed breakdown of the taxes in this filing
     *
     * @return $this
     */
    public function setRegionTaxDetails($region_tax_details)
    {
        $this->container['region_tax_details'] = $region_tax_details;

        return $this;
    }

    /**
     * Gets suggest_returns
     *
     * @return \Together\Taxes\Model\FilingsCheckupSuggestedFormModel[]
     */
    public function getSuggestReturns()
    {
        return $this->container['suggest_returns'];
    }

    /**
     * Sets suggest_returns
     *
     * @param \Together\Taxes\Model\FilingsCheckupSuggestedFormModel[] $suggest_returns A list of tax returns in this region.
     *
     * @return $this
     */
    public function setSuggestReturns($suggest_returns)
    {
        $this->container['suggest_returns'] = $suggest_returns;

        return $this;
    }

    /**
     * Gets returns
     *
     * @return \Together\Taxes\Model\MultiTaxFilingReturnModel[]
     */
    public function getReturns()
    {
        return $this->container['returns'];
    }

    /**
     * Sets returns
     *
     * @param \Together\Taxes\Model\MultiTaxFilingReturnModel[] $returns A list of tax returns in this region.
     *
     * @return $this
     */
    public function setReturns($returns)
    {
        $this->container['returns'] = $returns;

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


