<?php
/**
 * IsoCountryModel
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
 * IsoCountryModel Class Doc Comment
 *
 * @category Class
 * @description Represents an ISO 3166 recognized country
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IsoCountryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IsoCountryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'alpha3_code' => 'string',
        'name' => 'string',
        'is_european_union' => 'bool',
        'localized_names' => '\Swagger\Client\Model\IsoLocalizedName[]',
        'addresses_require_region' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'alpha3_code' => null,
        'name' => null,
        'is_european_union' => null,
        'localized_names' => null,
        'addresses_require_region' => null
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
        'alpha3_code' => 'alpha3Code',
        'name' => 'name',
        'is_european_union' => 'isEuropeanUnion',
        'localized_names' => 'localizedNames',
        'addresses_require_region' => 'addressesRequireRegion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'alpha3_code' => 'setAlpha3Code',
        'name' => 'setName',
        'is_european_union' => 'setIsEuropeanUnion',
        'localized_names' => 'setLocalizedNames',
        'addresses_require_region' => 'setAddressesRequireRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'alpha3_code' => 'getAlpha3Code',
        'name' => 'getName',
        'is_european_union' => 'getIsEuropeanUnion',
        'localized_names' => 'getLocalizedNames',
        'addresses_require_region' => 'getAddressesRequireRegion'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['alpha3_code'] = isset($data['alpha3_code']) ? $data['alpha3_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_european_union'] = isset($data['is_european_union']) ? $data['is_european_union'] : null;
        $this->container['localized_names'] = isset($data['localized_names']) ? $data['localized_names'] : null;
        $this->container['addresses_require_region'] = isset($data['addresses_require_region']) ? $data['addresses_require_region'] : null;
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
     * @param string $code The two character ISO 3166 country code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets alpha3_code
     *
     * @return string
     */
    public function getAlpha3Code()
    {
        return $this->container['alpha3_code'];
    }

    /**
     * Sets alpha3_code
     *
     * @param string $alpha3_code The three character ISO 3166 country code
     *
     * @return $this
     */
    public function setAlpha3Code($alpha3_code)
    {
        $this->container['alpha3_code'] = $alpha3_code;

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
     * @param string $name The full name of this country in uppercase.                For names in proper or formal case, or for names in other languages, please examine the `localizedNames` element for an appropriate name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_european_union
     *
     * @return bool
     */
    public function getIsEuropeanUnion()
    {
        return $this->container['is_european_union'];
    }

    /**
     * Sets is_european_union
     *
     * @param bool $is_european_union True if this country is a member of the European Union
     *
     * @return $this
     */
    public function setIsEuropeanUnion($is_european_union)
    {
        $this->container['is_european_union'] = $is_european_union;

        return $this;
    }

    /**
     * Gets localized_names
     *
     * @return \Swagger\Client\Model\IsoLocalizedName[]
     */
    public function getLocalizedNames()
    {
        return $this->container['localized_names'];
    }

    /**
     * Sets localized_names
     *
     * @param \Swagger\Client\Model\IsoLocalizedName[] $localized_names A list of localized names in a variety of languages.                This list is maintained by the International Standards Organization.
     *
     * @return $this
     */
    public function setLocalizedNames($localized_names)
    {
        $this->container['localized_names'] = $localized_names;

        return $this;
    }

    /**
     * Gets addresses_require_region
     *
     * @return bool
     */
    public function getAddressesRequireRegion()
    {
        return $this->container['addresses_require_region'];
    }

    /**
     * Sets addresses_require_region
     *
     * @param bool $addresses_require_region Whether or not this country requires a region in postal addresses.
     *
     * @return $this
     */
    public function setAddressesRequireRegion($addresses_require_region)
    {
        $this->container['addresses_require_region'] = $addresses_require_region;

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


