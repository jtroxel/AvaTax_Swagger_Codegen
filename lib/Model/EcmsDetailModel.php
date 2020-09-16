<?php
/**
 * EcmsDetailModel
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
 * EcmsDetailModel Class Doc Comment
 *
 * @category Class
 * @description Represents an ECMS record, used internally by AvaTax to track information about exemptions.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcmsDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EcmsDetailModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exempt_cert_detail_id' => 'int',
        'exempt_cert_id' => 'int',
        'state_fips' => 'string',
        'region' => 'string',
        'id_no' => 'string',
        'country' => 'string',
        'end_date' => '\DateTime',
        'id_type' => 'string',
        'is_tax_code_list_exclusion_list' => 'int',
        'tax_codes' => '\Swagger\Client\Model\EcmsDetailTaxCodeModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exempt_cert_detail_id' => 'int32',
        'exempt_cert_id' => 'int32',
        'state_fips' => null,
        'region' => null,
        'id_no' => null,
        'country' => null,
        'end_date' => 'date-time',
        'id_type' => null,
        'is_tax_code_list_exclusion_list' => 'int32',
        'tax_codes' => null
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
        'exempt_cert_detail_id' => 'exemptCertDetailId',
        'exempt_cert_id' => 'exemptCertId',
        'state_fips' => 'stateFips',
        'region' => 'region',
        'id_no' => 'idNo',
        'country' => 'country',
        'end_date' => 'endDate',
        'id_type' => 'idType',
        'is_tax_code_list_exclusion_list' => 'isTaxCodeListExclusionList',
        'tax_codes' => 'taxCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exempt_cert_detail_id' => 'setExemptCertDetailId',
        'exempt_cert_id' => 'setExemptCertId',
        'state_fips' => 'setStateFips',
        'region' => 'setRegion',
        'id_no' => 'setIdNo',
        'country' => 'setCountry',
        'end_date' => 'setEndDate',
        'id_type' => 'setIdType',
        'is_tax_code_list_exclusion_list' => 'setIsTaxCodeListExclusionList',
        'tax_codes' => 'setTaxCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exempt_cert_detail_id' => 'getExemptCertDetailId',
        'exempt_cert_id' => 'getExemptCertId',
        'state_fips' => 'getStateFips',
        'region' => 'getRegion',
        'id_no' => 'getIdNo',
        'country' => 'getCountry',
        'end_date' => 'getEndDate',
        'id_type' => 'getIdType',
        'is_tax_code_list_exclusion_list' => 'getIsTaxCodeListExclusionList',
        'tax_codes' => 'getTaxCodes'
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
        $this->container['exempt_cert_detail_id'] = isset($data['exempt_cert_detail_id']) ? $data['exempt_cert_detail_id'] : null;
        $this->container['exempt_cert_id'] = isset($data['exempt_cert_id']) ? $data['exempt_cert_id'] : null;
        $this->container['state_fips'] = isset($data['state_fips']) ? $data['state_fips'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['id_no'] = isset($data['id_no']) ? $data['id_no'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['is_tax_code_list_exclusion_list'] = isset($data['is_tax_code_list_exclusion_list']) ? $data['is_tax_code_list_exclusion_list'] : null;
        $this->container['tax_codes'] = isset($data['tax_codes']) ? $data['tax_codes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['exempt_cert_detail_id'] === null) {
            $invalidProperties[] = "'exempt_cert_detail_id' can't be null";
        }
        if ($this->container['exempt_cert_id'] === null) {
            $invalidProperties[] = "'exempt_cert_id' can't be null";
        }
        if ($this->container['state_fips'] === null) {
            $invalidProperties[] = "'state_fips' can't be null";
        }
        if ((mb_strlen($this->container['state_fips']) > 2)) {
            $invalidProperties[] = "invalid value for 'state_fips', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['state_fips']) < 0)) {
            $invalidProperties[] = "invalid value for 'state_fips', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if (!is_null($this->container['id_no']) && (mb_strlen($this->container['id_no']) > 100)) {
            $invalidProperties[] = "invalid value for 'id_no', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['id_no']) && (mb_strlen($this->container['id_no']) < 0)) {
            $invalidProperties[] = "invalid value for 'id_no', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (!is_null($this->container['id_type']) && (mb_strlen($this->container['id_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'id_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['id_type']) && (mb_strlen($this->container['id_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'id_type', the character length must be bigger than or equal to 0.";
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
     * Gets exempt_cert_detail_id
     *
     * @return int
     */
    public function getExemptCertDetailId()
    {
        return $this->container['exempt_cert_detail_id'];
    }

    /**
     * Sets exempt_cert_detail_id
     *
     * @param int $exempt_cert_detail_id Unique, system-assigned identifier of a ExemptCertDetail record.
     *
     * @return $this
     */
    public function setExemptCertDetailId($exempt_cert_detail_id)
    {
        $this->container['exempt_cert_detail_id'] = $exempt_cert_detail_id;

        return $this;
    }

    /**
     * Gets exempt_cert_id
     *
     * @return int
     */
    public function getExemptCertId()
    {
        return $this->container['exempt_cert_id'];
    }

    /**
     * Sets exempt_cert_id
     *
     * @param int $exempt_cert_id The calc_id associated with a certificate in CertCapture.
     *
     * @return $this
     */
    public function setExemptCertId($exempt_cert_id)
    {
        $this->container['exempt_cert_id'] = $exempt_cert_id;

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
     * @param string $state_fips State FIPS
     *
     * @return $this
     */
    public function setStateFips($state_fips)
    {
        if ((mb_strlen($state_fips) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state_fips when calling EcmsDetailModel., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($state_fips) < 0)) {
            throw new \InvalidArgumentException('invalid length for $state_fips when calling EcmsDetailModel., must be bigger than or equal to 0.');
        }

        $this->container['state_fips'] = $state_fips;

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
     * Gets id_no
     *
     * @return string
     */
    public function getIdNo()
    {
        return $this->container['id_no'];
    }

    /**
     * Sets id_no
     *
     * @param string $id_no The customer Tax Id Number (tax_number) associated with a certificate. This is same as exemptionNo in Transactions.
     *
     * @return $this
     */
    public function setIdNo($id_no)
    {
        if (!is_null($id_no) && (mb_strlen($id_no) > 100)) {
            throw new \InvalidArgumentException('invalid length for $id_no when calling EcmsDetailModel., must be smaller than or equal to 100.');
        }
        if (!is_null($id_no) && (mb_strlen($id_no) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id_no when calling EcmsDetailModel., must be bigger than or equal to 0.');
        }

        $this->container['id_no'] = $id_no;

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
     * @param \DateTime $end_date End date of this exempt certificate
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets id_type
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param string $id_type The type of idNo (tax_number) associated with a certificate.  Example: Driver's Licence Number, Permit Number.
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        if (!is_null($id_type) && (mb_strlen($id_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $id_type when calling EcmsDetailModel., must be smaller than or equal to 50.');
        }
        if (!is_null($id_type) && (mb_strlen($id_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $id_type when calling EcmsDetailModel., must be bigger than or equal to 0.');
        }

        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets is_tax_code_list_exclusion_list
     *
     * @return int
     */
    public function getIsTaxCodeListExclusionList()
    {
        return $this->container['is_tax_code_list_exclusion_list'];
    }

    /**
     * Sets is_tax_code_list_exclusion_list
     *
     * @param int $is_tax_code_list_exclusion_list Is the tax code list an exculsion list?
     *
     * @return $this
     */
    public function setIsTaxCodeListExclusionList($is_tax_code_list_exclusion_list)
    {
        $this->container['is_tax_code_list_exclusion_list'] = $is_tax_code_list_exclusion_list;

        return $this;
    }

    /**
     * Gets tax_codes
     *
     * @return \Swagger\Client\Model\EcmsDetailTaxCodeModel[]
     */
    public function getTaxCodes()
    {
        return $this->container['tax_codes'];
    }

    /**
     * Sets tax_codes
     *
     * @param \Swagger\Client\Model\EcmsDetailTaxCodeModel[] $tax_codes optional: list of tax code associated with this exempt certificate detail
     *
     * @return $this
     */
    public function setTaxCodes($tax_codes)
    {
        $this->container['tax_codes'] = $tax_codes;

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


