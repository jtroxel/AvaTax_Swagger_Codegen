<?php
/**
 * FilingsCheckupAuthorityModel
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
 * FilingsCheckupAuthorityModel Class Doc Comment
 *
 * @category Class
 * @description Cycle Safe Expiration results.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilingsCheckupAuthorityModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilingsCheckupAuthorityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_authority_id' => 'int',
        'location_code' => 'string',
        'tax_authority_name' => 'string',
        'tax_authority_type_id' => 'int',
        'jurisdiction_id' => 'int',
        'tax' => 'double',
        'tax_type_id' => 'string',
        'suggested_forms' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsCheckupSuggestedFormModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_authority_id' => 'int32',
        'location_code' => null,
        'tax_authority_name' => null,
        'tax_authority_type_id' => 'int32',
        'jurisdiction_id' => 'int32',
        'tax' => 'double',
        'tax_type_id' => null,
        'suggested_forms' => null
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
        'tax_authority_id' => 'taxAuthorityId',
        'location_code' => 'locationCode',
        'tax_authority_name' => 'taxAuthorityName',
        'tax_authority_type_id' => 'taxAuthorityTypeId',
        'jurisdiction_id' => 'jurisdictionId',
        'tax' => 'tax',
        'tax_type_id' => 'taxTypeId',
        'suggested_forms' => 'suggestedForms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_authority_id' => 'setTaxAuthorityId',
        'location_code' => 'setLocationCode',
        'tax_authority_name' => 'setTaxAuthorityName',
        'tax_authority_type_id' => 'setTaxAuthorityTypeId',
        'jurisdiction_id' => 'setJurisdictionId',
        'tax' => 'setTax',
        'tax_type_id' => 'setTaxTypeId',
        'suggested_forms' => 'setSuggestedForms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_authority_id' => 'getTaxAuthorityId',
        'location_code' => 'getLocationCode',
        'tax_authority_name' => 'getTaxAuthorityName',
        'tax_authority_type_id' => 'getTaxAuthorityTypeId',
        'jurisdiction_id' => 'getJurisdictionId',
        'tax' => 'getTax',
        'tax_type_id' => 'getTaxTypeId',
        'suggested_forms' => 'getSuggestedForms'
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
        $this->container['tax_authority_id'] = isset($data['tax_authority_id']) ? $data['tax_authority_id'] : null;
        $this->container['location_code'] = isset($data['location_code']) ? $data['location_code'] : null;
        $this->container['tax_authority_name'] = isset($data['tax_authority_name']) ? $data['tax_authority_name'] : null;
        $this->container['tax_authority_type_id'] = isset($data['tax_authority_type_id']) ? $data['tax_authority_type_id'] : null;
        $this->container['jurisdiction_id'] = isset($data['jurisdiction_id']) ? $data['jurisdiction_id'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['tax_type_id'] = isset($data['tax_type_id']) ? $data['tax_type_id'] : null;
        $this->container['suggested_forms'] = isset($data['suggested_forms']) ? $data['suggested_forms'] : null;
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
     * @param int $tax_authority_id Unique ID of the tax authority
     *
     * @return $this
     */
    public function setTaxAuthorityId($tax_authority_id)
    {
        $this->container['tax_authority_id'] = $tax_authority_id;

        return $this;
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
     * @param string $location_code Location Code of the tax authority
     *
     * @return $this
     */
    public function setLocationCode($location_code)
    {
        $this->container['location_code'] = $location_code;

        return $this;
    }

    /**
     * Gets tax_authority_name
     *
     * @return string
     */
    public function getTaxAuthorityName()
    {
        return $this->container['tax_authority_name'];
    }

    /**
     * Sets tax_authority_name
     *
     * @param string $tax_authority_name Name of the tax authority
     *
     * @return $this
     */
    public function setTaxAuthorityName($tax_authority_name)
    {
        $this->container['tax_authority_name'] = $tax_authority_name;

        return $this;
    }

    /**
     * Gets tax_authority_type_id
     *
     * @return int
     */
    public function getTaxAuthorityTypeId()
    {
        return $this->container['tax_authority_type_id'];
    }

    /**
     * Sets tax_authority_type_id
     *
     * @param int $tax_authority_type_id Type Id of the tax authority
     *
     * @return $this
     */
    public function setTaxAuthorityTypeId($tax_authority_type_id)
    {
        $this->container['tax_authority_type_id'] = $tax_authority_type_id;

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
     * @param int $jurisdiction_id Jurisdiction Id of the tax authority
     *
     * @return $this
     */
    public function setJurisdictionId($jurisdiction_id)
    {
        $this->container['jurisdiction_id'] = $jurisdiction_id;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double $tax Amount of tax collected in this tax authority
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
     * @param string $tax_type_id Tax Type collected in the tax authority
     *
     * @return $this
     */
    public function setTaxTypeId($tax_type_id)
    {
        $this->container['tax_type_id'] = $tax_type_id;

        return $this;
    }

    /**
     * Gets suggested_forms
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsCheckupSuggestedFormModel[]
     */
    public function getSuggestedForms()
    {
        return $this->container['suggested_forms'];
    }

    /**
     * Sets suggested_forms
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\FilingsCheckupSuggestedFormModel[] $suggested_forms Suggested forms to file due to tax collected
     *
     * @return $this
     */
    public function setSuggestedForms($suggested_forms)
    {
        $this->container['suggested_forms'] = $suggested_forms;

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


