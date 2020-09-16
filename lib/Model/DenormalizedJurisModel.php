<?php
/**
 * DenormalizedJurisModel
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
 * DenormalizedJurisModel Class Doc Comment
 *
 * @category Class
 * @description Represents information about a single legal taxing jurisdiction within a specific Avalara tax region.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DenormalizedJurisModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DenormalizedJurisModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'effective_date' => '\DateTime',
        'end_date' => '\DateTime',
        'juris_code' => 'string',
        'jurisdiction_id' => 'int',
        'juris_type' => 'string',
        'juris_name' => 'string',
        'state_assigned_code' => 'string',
        'tax_authority_id' => 'int',
        'state' => 'string',
        'country' => 'string',
        'county' => 'string',
        'city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'effective_date' => 'date-time',
        'end_date' => 'date-time',
        'juris_code' => null,
        'jurisdiction_id' => 'int32',
        'juris_type' => null,
        'juris_name' => null,
        'state_assigned_code' => null,
        'tax_authority_id' => 'int32',
        'state' => null,
        'country' => null,
        'county' => null,
        'city' => null
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
        'effective_date' => 'effectiveDate',
        'end_date' => 'endDate',
        'juris_code' => 'jurisCode',
        'jurisdiction_id' => 'jurisdictionId',
        'juris_type' => 'jurisType',
        'juris_name' => 'jurisName',
        'state_assigned_code' => 'stateAssignedCode',
        'tax_authority_id' => 'taxAuthorityId',
        'state' => 'state',
        'country' => 'country',
        'county' => 'county',
        'city' => 'city'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effective_date' => 'setEffectiveDate',
        'end_date' => 'setEndDate',
        'juris_code' => 'setJurisCode',
        'jurisdiction_id' => 'setJurisdictionId',
        'juris_type' => 'setJurisType',
        'juris_name' => 'setJurisName',
        'state_assigned_code' => 'setStateAssignedCode',
        'tax_authority_id' => 'setTaxAuthorityId',
        'state' => 'setState',
        'country' => 'setCountry',
        'county' => 'setCounty',
        'city' => 'setCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effective_date' => 'getEffectiveDate',
        'end_date' => 'getEndDate',
        'juris_code' => 'getJurisCode',
        'jurisdiction_id' => 'getJurisdictionId',
        'juris_type' => 'getJurisType',
        'juris_name' => 'getJurisName',
        'state_assigned_code' => 'getStateAssignedCode',
        'tax_authority_id' => 'getTaxAuthorityId',
        'state' => 'getState',
        'country' => 'getCountry',
        'county' => 'getCounty',
        'city' => 'getCity'
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

    const JURIS_TYPE_COUNTRY = 'Country';
    const JURIS_TYPE_STATE = 'State';
    const JURIS_TYPE_COUNTY = 'County';
    const JURIS_TYPE_CITY = 'City';
    const JURIS_TYPE_SPECIAL = 'Special';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJurisTypeAllowableValues()
    {
        return [
            self::JURIS_TYPE_COUNTRY,
            self::JURIS_TYPE_STATE,
            self::JURIS_TYPE_COUNTY,
            self::JURIS_TYPE_CITY,
            self::JURIS_TYPE_SPECIAL,
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
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['juris_code'] = isset($data['juris_code']) ? $data['juris_code'] : null;
        $this->container['jurisdiction_id'] = isset($data['jurisdiction_id']) ? $data['jurisdiction_id'] : null;
        $this->container['juris_type'] = isset($data['juris_type']) ? $data['juris_type'] : null;
        $this->container['juris_name'] = isset($data['juris_name']) ? $data['juris_name'] : null;
        $this->container['state_assigned_code'] = isset($data['state_assigned_code']) ? $data['state_assigned_code'] : null;
        $this->container['tax_authority_id'] = isset($data['tax_authority_id']) ? $data['tax_authority_id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getJurisTypeAllowableValues();
        if (!is_null($this->container['juris_type']) && !in_array($this->container['juris_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'juris_type', must be one of '%s'",
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
     * @param \DateTime $effective_date The jurisdiction's effective date.
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
     * @param \DateTime $end_date The jurisdiction's end date.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets juris_code
     *
     * @return string
     */
    public function getJurisCode()
    {
        return $this->container['juris_code'];
    }

    /**
     * Sets juris_code
     *
     * @param string $juris_code The jurisdiction's code.
     *
     * @return $this
     */
    public function setJurisCode($juris_code)
    {
        $this->container['juris_code'] = $juris_code;

        return $this;
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
     * @param int $jurisdiction_id The jurisdiction's id.
     *
     * @return $this
     */
    public function setJurisdictionId($jurisdiction_id)
    {
        $this->container['jurisdiction_id'] = $jurisdiction_id;

        return $this;
    }

    /**
     * Gets juris_type
     *
     * @return string
     */
    public function getJurisType()
    {
        return $this->container['juris_type'];
    }

    /**
     * Sets juris_type
     *
     * @param string $juris_type The jurisdiction's type.
     *
     * @return $this
     */
    public function setJurisType($juris_type)
    {
        $allowedValues = $this->getJurisTypeAllowableValues();
        if (!is_null($juris_type) && !in_array($juris_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'juris_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['juris_type'] = $juris_type;

        return $this;
    }

    /**
     * Gets juris_name
     *
     * @return string
     */
    public function getJurisName()
    {
        return $this->container['juris_name'];
    }

    /**
     * Sets juris_name
     *
     * @param string $juris_name The jurisdiction's name.
     *
     * @return $this
     */
    public function setJurisName($juris_name)
    {
        $this->container['juris_name'] = $juris_name;

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
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The jurisdiction's region.  This should exist on the TaxRegion, but in practice often doesn't.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param string $country The jurisdiction's country.  This should exist on the TaxRegion, but in practice often doesn't.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county The jurisdiction's county.  This should exist on the TaxRegion, but in practice often doesn't.
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The jurisdiction's city.  This should exist on the TaxRegion, but in practice often doesn't.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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


