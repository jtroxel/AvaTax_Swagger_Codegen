<?php
/**
 * TaxRegionModel
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

namespace Together\TaxProvider\AvaTax\Swagger\Model;

use \ArrayAccess;
use \Together\Taxes\ObjectSerializer;

/**
 * TaxRegionModel Class Doc Comment
 *
 * @category Class
 * @description The tax region model.
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxRegionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxRegionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'code' => 'string',
        'name' => 'string',
        'county' => 'string',
        'city' => 'string',
        'region' => 'string',
        'country' => 'string',
        'ser_code' => 'string',
        'signature_code' => 'string',
        'effective_date' => '\DateTime',
        'end_date' => '\DateTime',
        'is_acm' => 'bool',
        'is_sst' => 'bool',
        'jurisdictions' => '\Together\Taxes\Model\DenormalizedJurisModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'code' => null,
        'name' => null,
        'county' => null,
        'city' => null,
        'region' => null,
        'country' => null,
        'ser_code' => null,
        'signature_code' => null,
        'effective_date' => 'date',
        'end_date' => 'date',
        'is_acm' => null,
        'is_sst' => null,
        'jurisdictions' => null
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
        'code' => 'code',
        'name' => 'name',
        'county' => 'county',
        'city' => 'city',
        'region' => 'region',
        'country' => 'country',
        'ser_code' => 'serCode',
        'signature_code' => 'signatureCode',
        'effective_date' => 'effectiveDate',
        'end_date' => 'endDate',
        'is_acm' => 'isAcm',
        'is_sst' => 'isSst',
        'jurisdictions' => 'jurisdictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'name' => 'setName',
        'county' => 'setCounty',
        'city' => 'setCity',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'ser_code' => 'setSerCode',
        'signature_code' => 'setSignatureCode',
        'effective_date' => 'setEffectiveDate',
        'end_date' => 'setEndDate',
        'is_acm' => 'setIsAcm',
        'is_sst' => 'setIsSst',
        'jurisdictions' => 'setJurisdictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'name' => 'getName',
        'county' => 'getCounty',
        'city' => 'getCity',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'ser_code' => 'getSerCode',
        'signature_code' => 'getSignatureCode',
        'effective_date' => 'getEffectiveDate',
        'end_date' => 'getEndDate',
        'is_acm' => 'getIsAcm',
        'is_sst' => 'getIsSst',
        'jurisdictions' => 'getJurisdictions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['ser_code'] = isset($data['ser_code']) ? $data['ser_code'] : null;
        $this->container['signature_code'] = isset($data['signature_code']) ? $data['signature_code'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['is_acm'] = isset($data['is_acm']) ? $data['is_acm'] : null;
        $this->container['is_sst'] = isset($data['is_sst']) ? $data['is_sst'] : null;
        $this->container['jurisdictions'] = isset($data['jurisdictions']) ? $data['jurisdictions'] : null;
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
     * @param int $id The id of the tax region.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $code The code of the tax region.
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
     * @param string $name The name of the tax region.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $county The name of the county.
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
     * @param string $city The name of the city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * Gets ser_code
     *
     * @return string
     */
    public function getSerCode()
    {
        return $this->container['ser_code'];
    }

    /**
     * Sets ser_code
     *
     * @param string $ser_code The ser code.
     *
     * @return $this
     */
    public function setSerCode($ser_code)
    {
        $this->container['ser_code'] = $ser_code;

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
     * @param string $signature_code The tax region signature code.
     *
     * @return $this
     */
    public function setSignatureCode($signature_code)
    {
        $this->container['signature_code'] = $signature_code;

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
     * @param \DateTime $effective_date The date this tax region starts to take effect.
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
     * @param \DateTime $end_date The date this tax region stops to take effect.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets is_acm
     *
     * @return bool
     */
    public function getIsAcm()
    {
        return $this->container['is_acm'];
    }

    /**
     * Sets is_acm
     *
     * @param bool $is_acm Is Acm flag.
     *
     * @return $this
     */
    public function setIsAcm($is_acm)
    {
        $this->container['is_acm'] = $is_acm;

        return $this;
    }

    /**
     * Gets is_sst
     *
     * @return bool
     */
    public function getIsSst()
    {
        return $this->container['is_sst'];
    }

    /**
     * Sets is_sst
     *
     * @param bool $is_sst Is SST flag.
     *
     * @return $this
     */
    public function setIsSst($is_sst)
    {
        $this->container['is_sst'] = $is_sst;

        return $this;
    }

    /**
     * Gets jurisdictions
     *
     * @return \Together\Taxes\Model\DenormalizedJurisModel[]
     */
    public function getJurisdictions()
    {
        return $this->container['jurisdictions'];
    }

    /**
     * Sets jurisdictions
     *
     * @param \Together\Taxes\Model\DenormalizedJurisModel[] $jurisdictions List of jurisdictions associated with this tax region.
     *
     * @return $this
     */
    public function setJurisdictions($jurisdictions)
    {
        $this->container['jurisdictions'] = $jurisdictions;

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

