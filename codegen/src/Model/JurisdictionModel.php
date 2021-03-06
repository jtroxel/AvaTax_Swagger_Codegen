<?php
/**
 * JurisdictionModel
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
 * JurisdictionModel Class Doc Comment
 *
 * @category Class
 * @description Represents information about a single legal taxing jurisdiction
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JurisdictionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JurisdictionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'type' => 'string',
        'rate' => 'double',
        'sales_rate' => 'double',
        'signature_code' => 'string',
        'region' => 'string',
        'use_rate' => 'double',
        'city' => 'string',
        'county' => 'string',
        'country' => 'string',
        'short_name' => 'string',
        'state_fips' => 'string',
        'county_fips' => 'string',
        'place_fips' => 'string',
        'id' => 'int',
        'effective_date' => '\DateTime',
        'end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'type' => null,
        'rate' => 'double',
        'sales_rate' => 'double',
        'signature_code' => null,
        'region' => null,
        'use_rate' => 'double',
        'city' => null,
        'county' => null,
        'country' => null,
        'short_name' => null,
        'state_fips' => null,
        'county_fips' => null,
        'place_fips' => null,
        'id' => 'int32',
        'effective_date' => 'date-time',
        'end_date' => 'date-time'
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
        'code' => 'code',
        'name' => 'name',
        'type' => 'type',
        'rate' => 'rate',
        'sales_rate' => 'salesRate',
        'signature_code' => 'signatureCode',
        'region' => 'region',
        'use_rate' => 'useRate',
        'city' => 'city',
        'county' => 'county',
        'country' => 'country',
        'short_name' => 'shortName',
        'state_fips' => 'stateFips',
        'county_fips' => 'countyFips',
        'place_fips' => 'placeFips',
        'id' => 'id',
        'effective_date' => 'effectiveDate',
        'end_date' => 'endDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'type' => 'setType',
        'rate' => 'setRate',
        'sales_rate' => 'setSalesRate',
        'signature_code' => 'setSignatureCode',
        'region' => 'setRegion',
        'use_rate' => 'setUseRate',
        'city' => 'setCity',
        'county' => 'setCounty',
        'country' => 'setCountry',
        'short_name' => 'setShortName',
        'state_fips' => 'setStateFips',
        'county_fips' => 'setCountyFips',
        'place_fips' => 'setPlaceFips',
        'id' => 'setId',
        'effective_date' => 'setEffectiveDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'type' => 'getType',
        'rate' => 'getRate',
        'sales_rate' => 'getSalesRate',
        'signature_code' => 'getSignatureCode',
        'region' => 'getRegion',
        'use_rate' => 'getUseRate',
        'city' => 'getCity',
        'county' => 'getCounty',
        'country' => 'getCountry',
        'short_name' => 'getShortName',
        'state_fips' => 'getStateFips',
        'county_fips' => 'getCountyFips',
        'place_fips' => 'getPlaceFips',
        'id' => 'getId',
        'effective_date' => 'getEffectiveDate',
        'end_date' => 'getEndDate'
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

    const TYPE_COUNTRY = 'Country';
    const TYPE_STATE = 'State';
    const TYPE_COUNTY = 'County';
    const TYPE_CITY = 'City';
    const TYPE_SPECIAL = 'Special';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COUNTRY,
            self::TYPE_STATE,
            self::TYPE_COUNTY,
            self::TYPE_CITY,
            self::TYPE_SPECIAL,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['sales_rate'] = isset($data['sales_rate']) ? $data['sales_rate'] : null;
        $this->container['signature_code'] = isset($data['signature_code']) ? $data['signature_code'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['use_rate'] = isset($data['use_rate']) ? $data['use_rate'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['state_fips'] = isset($data['state_fips']) ? $data['state_fips'] : null;
        $this->container['county_fips'] = isset($data['county_fips']) ? $data['county_fips'] : null;
        $this->container['place_fips'] = isset($data['place_fips']) ? $data['place_fips'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['signature_code'] === null) {
            $invalidProperties[] = "'signature_code' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The code that is used to identify this jurisdiction
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string $name The name of this jurisdiction
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $type The type of the jurisdiction, indicating whether it is a country, state/region, city, for example.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * @param double $rate The base rate of tax specific to this jurisdiction.
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets sales_rate
     *
     * @return double
     */
    public function getSalesRate()
    {
        return $this->container['sales_rate'];
    }

    /**
     * Sets sales_rate
     *
     * @param double $sales_rate The \"Sales\" tax rate specific to this jurisdiction.
     *
     * @return $this
     */
    public function setSalesRate($sales_rate)
    {
        $this->container['sales_rate'] = $sales_rate;

        return $this;
    }

    /**
     * Gets signature_code
     *
     * @return string
     */
    public function getSignatureCode()
    {
        return $this->container['signature_code'];
    }

    /**
     * Sets signature_code
     *
     * @param string $signature_code The Avalara-supplied signature code for this jurisdiction.
     *
     * @return $this
     */
    public function setSignatureCode($signature_code)
    {
        $this->container['signature_code'] = $signature_code;

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
     * Gets use_rate
     *
     * @return double
     */
    public function getUseRate()
    {
        return $this->container['use_rate'];
    }

    /**
     * Sets use_rate
     *
     * @param double $use_rate The \"Seller's Use\" tax rate specific to this jurisdiction.
     *
     * @return $this
     */
    public function setUseRate($use_rate)
    {
        $this->container['use_rate'] = $use_rate;

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
     * @param string $city The city name of this jurisdiction
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * @param string $county The county name of this jurisdiction
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

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
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name A short name of the jurisidiction
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets state_fips
     *
     * @return string
     */
    public function getStateFips()
    {
        return $this->container['state_fips'];
    }

    /**
     * Sets state_fips
     *
     * @param string $state_fips State FIPS code
     *
     * @return $this
     */
    public function setStateFips($state_fips)
    {
        $this->container['state_fips'] = $state_fips;

        return $this;
    }

    /**
     * Gets county_fips
     *
     * @return string
     */
    public function getCountyFips()
    {
        return $this->container['county_fips'];
    }

    /**
     * Sets county_fips
     *
     * @param string $county_fips County FIPS code
     *
     * @return $this
     */
    public function setCountyFips($county_fips)
    {
        $this->container['county_fips'] = $county_fips;

        return $this;
    }

    /**
     * Gets place_fips
     *
     * @return string
     */
    public function getPlaceFips()
    {
        return $this->container['place_fips'];
    }

    /**
     * Sets place_fips
     *
     * @param string $place_fips City FIPS code
     *
     * @return $this
     */
    public function setPlaceFips($place_fips)
    {
        $this->container['place_fips'] = $place_fips;

        return $this;
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
     * @param int $id Unique AvaTax Id of this Jurisdiction
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param \DateTime $effective_date The date this jurisdiction starts to take effect on tax calculations
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
     * @param \DateTime $end_date The date this jurisdiction stops to take effect on tax calculations
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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


