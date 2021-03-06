<?php
/**
 * AddressResolutionModel
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
 * AddressResolutionModel Class Doc Comment
 *
 * @category Class
 * @description Address Resolution Model
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressResolutionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressResolutionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressInfo',
        'validated_addresses' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\ValidatedAddressInfo[]',
        'coordinates' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\CoordinateInfo',
        'resolution_quality' => 'string',
        'tax_authorities' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\TaxAuthorityInfo[]',
        'messages' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\AvaTaxMessage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'validated_addresses' => null,
        'coordinates' => null,
        'resolution_quality' => null,
        'tax_authorities' => null,
        'messages' => null
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
        'address' => 'address',
        'validated_addresses' => 'validatedAddresses',
        'coordinates' => 'coordinates',
        'resolution_quality' => 'resolutionQuality',
        'tax_authorities' => 'taxAuthorities',
        'messages' => 'messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'validated_addresses' => 'setValidatedAddresses',
        'coordinates' => 'setCoordinates',
        'resolution_quality' => 'setResolutionQuality',
        'tax_authorities' => 'setTaxAuthorities',
        'messages' => 'setMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'validated_addresses' => 'getValidatedAddresses',
        'coordinates' => 'getCoordinates',
        'resolution_quality' => 'getResolutionQuality',
        'tax_authorities' => 'getTaxAuthorities',
        'messages' => 'getMessages'
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

    const RESOLUTION_QUALITY_NOT_CODED = 'NotCoded';
    const RESOLUTION_QUALITY_EXTERNAL = 'External';
    const RESOLUTION_QUALITY_COUNTRY_CENTROID = 'CountryCentroid';
    const RESOLUTION_QUALITY_REGION_CENTROID = 'RegionCentroid';
    const RESOLUTION_QUALITY_PARTIAL_CENTROID = 'PartialCentroid';
    const RESOLUTION_QUALITY_POSTAL_CENTROID_GOOD = 'PostalCentroidGood';
    const RESOLUTION_QUALITY_POSTAL_CENTROID_BETTER = 'PostalCentroidBetter';
    const RESOLUTION_QUALITY_POSTAL_CENTROID_BEST = 'PostalCentroidBest';
    const RESOLUTION_QUALITY_INTERSECTION = 'Intersection';
    const RESOLUTION_QUALITY_INTERPOLATED = 'Interpolated';
    const RESOLUTION_QUALITY_ROOFTOP = 'Rooftop';
    const RESOLUTION_QUALITY_CONSTANT = 'Constant';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionQualityAllowableValues()
    {
        return [
            self::RESOLUTION_QUALITY_NOT_CODED,
            self::RESOLUTION_QUALITY_EXTERNAL,
            self::RESOLUTION_QUALITY_COUNTRY_CENTROID,
            self::RESOLUTION_QUALITY_REGION_CENTROID,
            self::RESOLUTION_QUALITY_PARTIAL_CENTROID,
            self::RESOLUTION_QUALITY_POSTAL_CENTROID_GOOD,
            self::RESOLUTION_QUALITY_POSTAL_CENTROID_BETTER,
            self::RESOLUTION_QUALITY_POSTAL_CENTROID_BEST,
            self::RESOLUTION_QUALITY_INTERSECTION,
            self::RESOLUTION_QUALITY_INTERPOLATED,
            self::RESOLUTION_QUALITY_ROOFTOP,
            self::RESOLUTION_QUALITY_CONSTANT,
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['validated_addresses'] = isset($data['validated_addresses']) ? $data['validated_addresses'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['resolution_quality'] = isset($data['resolution_quality']) ? $data['resolution_quality'] : null;
        $this->container['tax_authorities'] = isset($data['tax_authorities']) ? $data['tax_authorities'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResolutionQualityAllowableValues();
        if (!is_null($this->container['resolution_quality']) && !in_array($this->container['resolution_quality'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resolution_quality', must be one of '%s'",
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
     * Gets address
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressInfo
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressInfo $address The original address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets validated_addresses
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\ValidatedAddressInfo[]
     */
    public function getValidatedAddresses()
    {
        return $this->container['validated_addresses'];
    }

    /**
     * Sets validated_addresses
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\ValidatedAddressInfo[] $validated_addresses The validated address or addresses
     *
     * @return $this
     */
    public function setValidatedAddresses($validated_addresses)
    {
        $this->container['validated_addresses'] = $validated_addresses;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\CoordinateInfo
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\CoordinateInfo $coordinates The geospatial coordinates of this address
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets resolution_quality
     *
     * @return string
     */
    public function getResolutionQuality()
    {
        return $this->container['resolution_quality'];
    }

    /**
     * Sets resolution_quality
     *
     * @param string $resolution_quality The resolution quality of the geospatial coordinates
     *
     * @return $this
     */
    public function setResolutionQuality($resolution_quality)
    {
        $allowedValues = $this->getResolutionQualityAllowableValues();
        if (!is_null($resolution_quality) && !in_array($resolution_quality, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolution_quality', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolution_quality'] = $resolution_quality;

        return $this;
    }

    /**
     * Gets tax_authorities
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxAuthorityInfo[]
     */
    public function getTaxAuthorities()
    {
        return $this->container['tax_authorities'];
    }

    /**
     * Sets tax_authorities
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxAuthorityInfo[] $tax_authorities List of informational and warning messages regarding this address
     *
     * @return $this
     */
    public function setTaxAuthorities($tax_authorities)
    {
        $this->container['tax_authorities'] = $tax_authorities;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\AvaTaxMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\AvaTaxMessage[] $messages List of informational and warning messages regarding this address
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

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


