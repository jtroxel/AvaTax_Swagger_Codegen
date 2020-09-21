<?php
/**
 * AddressLocationInfo
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
 * AddressLocationInfo Class Doc Comment
 *
 * @category Class
 * @description Represents an address to resolve.
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressLocationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressLocationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_code' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string',
        'city' => 'string',
        'region' => 'string',
        'country' => 'string',
        'postal_code' => 'string',
        'latitude' => 'double',
        'longitude' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_code' => null,
        'line1' => null,
        'line2' => null,
        'line3' => null,
        'city' => null,
        'region' => null,
        'country' => null,
        'postal_code' => null,
        'latitude' => 'double',
        'longitude' => 'double'
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
        'location_code' => 'locationCode',
        'line1' => 'line1',
        'line2' => 'line2',
        'line3' => 'line3',
        'city' => 'city',
        'region' => 'region',
        'country' => 'country',
        'postal_code' => 'postalCode',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_code' => 'setLocationCode',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'city' => 'setCity',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_code' => 'getLocationCode',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'city' => 'getCity',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
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
        $this->container['location_code'] = isset($data['location_code']) ? $data['location_code'] : null;
        $this->container['line1'] = isset($data['line1']) ? $data['line1'] : null;
        $this->container['line2'] = isset($data['line2']) ? $data['line2'] : null;
        $this->container['line3'] = isset($data['line3']) ? $data['line3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['line1']) && (mb_strlen($this->container['line1']) > 100)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['line1']) && (mb_strlen($this->container['line1']) < 0)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) > 100)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) < 0)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['line3']) && (mb_strlen($this->container['line3']) > 100)) {
            $invalidProperties[] = "invalid value for 'line3', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['line3']) && (mb_strlen($this->container['line3']) < 0)) {
            $invalidProperties[] = "invalid value for 'line3', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 11)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
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
     * Gets location_code
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->container['location_code'];
    }

    /**
     * Sets location_code
     *
     * @param string $location_code If you wish to use the address of an existing location for this company, specify the address here.  Otherwise, leave this value empty.                The `locationCode` field on this object allows you to quickly use the address of an existing `locationModel` object instead  of having to retype the address completely.                This field does not affect the behavior of transactions that must be filed on location-based tax returns.  To specify how a  transaction will be reported on location-based tax returns, please see the `reportingLocationCode` field  on the [CreateTransactionModel](https://developer.avalara.com/api-reference/avatax/rest/v2/models/CreateTransactionModel/) element.
     *
     * @return $this
     */
    public function setLocationCode($location_code)
    {
        $this->container['location_code'] = $location_code;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 First line of the street address
     *
     * @return $this
     */
    public function setLine1($line1)
    {
        if (!is_null($line1) && (mb_strlen($line1) > 100)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling AddressLocationInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($line1) && (mb_strlen($line1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling AddressLocationInfo., must be bigger than or equal to 0.');
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string $line2 Second line of the street address
     *
     * @return $this
     */
    public function setLine2($line2)
    {
        if (!is_null($line2) && (mb_strlen($line2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling AddressLocationInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($line2) && (mb_strlen($line2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling AddressLocationInfo., must be bigger than or equal to 0.');
        }

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string $line3 Third line of the street address
     *
     * @return $this
     */
    public function setLine3($line3)
    {
        if (!is_null($line3) && (mb_strlen($line3) > 100)) {
            throw new \InvalidArgumentException('invalid length for $line3 when calling AddressLocationInfo., must be smaller than or equal to 100.');
        }
        if (!is_null($line3) && (mb_strlen($line3) < 0)) {
            throw new \InvalidArgumentException('invalid length for $line3 when calling AddressLocationInfo., must be bigger than or equal to 0.');
        }

        $this->container['line3'] = $line3;

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
     * @param string $city City component of the address
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressLocationInfo., must be smaller than or equal to 50.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressLocationInfo., must be bigger than or equal to 0.');
        }

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
     * @param string $country Name or ISO 3166 code identifying the country.                This field supports many different country identifiers:   * Two character ISO 3166 codes   * Three character ISO 3166 codes   * Fully spelled out names of the country in ISO supported languages   * Common alternative spellings for many countries                For a full list of all supported codes and names, please see the Definitions API `ListCountries`.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal Code / Zip Code component of the address.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 11)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling AddressLocationInfo., must be smaller than or equal to 11.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling AddressLocationInfo., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude Geospatial latitude measurement, in Decimal Degrees floating point format.
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude Geospatial longitude measurement, in Decimal Degrees floating point format.
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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


