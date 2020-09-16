<?php
/**
 * ComplianceJurisdictionRateModel
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
 * ComplianceJurisdictionRateModel Class Doc Comment
 *
 * @category Class
 * @description A flattened model for jurisdictions and rates.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComplianceJurisdictionRateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComplianceJurisdictionRateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jurisdiction_id' => 'int',
        'country' => 'string',
        'region' => 'string',
        'name' => 'string',
        'jurisdiction_type_id' => 'string',
        'rate' => 'double',
        'rate_type_id' => 'string',
        'tax_type_id' => 'string',
        'effective_date' => '\DateTime',
        'end_date' => '\DateTime',
        'state_assigned_code' => 'string',
        'tax_authority_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jurisdiction_id' => 'int32',
        'country' => null,
        'region' => null,
        'name' => null,
        'jurisdiction_type_id' => null,
        'rate' => 'double',
        'rate_type_id' => null,
        'tax_type_id' => null,
        'effective_date' => 'date',
        'end_date' => 'date',
        'state_assigned_code' => null,
        'tax_authority_id' => 'int32'
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
        'jurisdiction_id' => 'jurisdictionId',
        'country' => 'country',
        'region' => 'region',
        'name' => 'name',
        'jurisdiction_type_id' => 'jurisdictionTypeId',
        'rate' => 'rate',
        'rate_type_id' => 'rateTypeId',
        'tax_type_id' => 'taxTypeId',
        'effective_date' => 'effectiveDate',
        'end_date' => 'endDate',
        'state_assigned_code' => 'stateAssignedCode',
        'tax_authority_id' => 'taxAuthorityId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jurisdiction_id' => 'setJurisdictionId',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'name' => 'setName',
        'jurisdiction_type_id' => 'setJurisdictionTypeId',
        'rate' => 'setRate',
        'rate_type_id' => 'setRateTypeId',
        'tax_type_id' => 'setTaxTypeId',
        'effective_date' => 'setEffectiveDate',
        'end_date' => 'setEndDate',
        'state_assigned_code' => 'setStateAssignedCode',
        'tax_authority_id' => 'setTaxAuthorityId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jurisdiction_id' => 'getJurisdictionId',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'name' => 'getName',
        'jurisdiction_type_id' => 'getJurisdictionTypeId',
        'rate' => 'getRate',
        'rate_type_id' => 'getRateTypeId',
        'tax_type_id' => 'getTaxTypeId',
        'effective_date' => 'getEffectiveDate',
        'end_date' => 'getEndDate',
        'state_assigned_code' => 'getStateAssignedCode',
        'tax_authority_id' => 'getTaxAuthorityId'
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
        $this->container['jurisdiction_id'] = isset($data['jurisdiction_id']) ? $data['jurisdiction_id'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['jurisdiction_type_id'] = isset($data['jurisdiction_type_id']) ? $data['jurisdiction_type_id'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['rate_type_id'] = isset($data['rate_type_id']) ? $data['rate_type_id'] : null;
        $this->container['tax_type_id'] = isset($data['tax_type_id']) ? $data['tax_type_id'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['state_assigned_code'] = isset($data['state_assigned_code']) ? $data['state_assigned_code'] : null;
        $this->container['tax_authority_id'] = isset($data['tax_authority_id']) ? $data['tax_authority_id'] : null;
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
     * Gets jurisdiction_id
     *
     * @return int
     */
    public function getJurisdictionId()
    {
        return $this->container['jurisdiction_id'];
    }

    /**
     * Sets jurisdiction_id
     *
     * @param int $jurisdiction_id The id of the jurisdiction.
     *
     * @return $this
     */
    public function setJurisdictionId($jurisdiction_id)
    {
        $this->container['jurisdiction_id'] = $jurisdiction_id;

        return $this;
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
     * @param string $country Name or ISO 3166 code identifying the country of this jurisdiction.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API `ListCountries`.
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
     * @param string $region Name or ISO 3166 code identifying the region within the country.                This field supports many different region identifiers:   * Two and three character ISO 3166 region codes   * Fully spelled out names of the region in ISO supported languages   * Common alternative spellings for many regions                For a full list of all supported codes and names, please see the Definitions API `ListRegions`.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the jurisdiction.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets jurisdiction_type_id
     *
     * @return string
     */
    public function getJurisdictionTypeId()
    {
        return $this->container['jurisdiction_type_id'];
    }

    /**
     * Sets jurisdiction_type_id
     *
     * @param string $jurisdiction_type_id The type of the jurisdiction, indicating whether it is a country, state/region, city, for example.
     *
     * @return $this
     */
    public function setJurisdictionTypeId($jurisdiction_type_id)
    {
        $this->container['jurisdiction_type_id'] = $jurisdiction_type_id;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate The compontent rate.
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets rate_type_id
     *
     * @return string
     */
    public function getRateTypeId()
    {
        return $this->container['rate_type_id'];
    }

    /**
     * Sets rate_type_id
     *
     * @param string $rate_type_id The rate type.
     *
     * @return $this
     */
    public function setRateTypeId($rate_type_id)
    {
        $this->container['rate_type_id'] = $rate_type_id;

        return $this;
    }

    /**
     * Gets tax_type_id
     *
     * @return string
     */
    public function getTaxTypeId()
    {
        return $this->container['tax_type_id'];
    }

    /**
     * Sets tax_type_id
     *
     * @param string $tax_type_id The tax type.
     *
     * @return $this
     */
    public function setTaxTypeId($tax_type_id)
    {
        $this->container['tax_type_id'] = $tax_type_id;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date The date this rate is starts to take effect.
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The date this rate is no longer active.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets state_assigned_code
     *
     * @return string
     */
    public function getStateAssignedCode()
    {
        return $this->container['state_assigned_code'];
    }

    /**
     * Sets state_assigned_code
     *
     * @param string $state_assigned_code The state assigned code.
     *
     * @return $this
     */
    public function setStateAssignedCode($state_assigned_code)
    {
        $this->container['state_assigned_code'] = $state_assigned_code;

        return $this;
    }

    /**
     * Gets tax_authority_id
     *
     * @return int
     */
    public function getTaxAuthorityId()
    {
        return $this->container['tax_authority_id'];
    }

    /**
     * Sets tax_authority_id
     *
     * @param int $tax_authority_id The id of the tax authority.
     *
     * @return $this
     */
    public function setTaxAuthorityId($tax_authority_id)
    {
        $this->container['tax_authority_id'] = $tax_authority_id;

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


