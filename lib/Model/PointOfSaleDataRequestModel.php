<?php
/**
 * PointOfSaleDataRequestModel
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
 * PointOfSaleDataRequestModel Class Doc Comment
 *
 * @category Class
 * @description Point-of-Sale Data Request Model
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointOfSaleDataRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PointOfSaleDataRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_code' => 'string',
        'document_date' => '\DateTime',
        'response_type' => 'string',
        'tax_codes' => 'string[]',
        'item_codes' => 'string[]',
        'location_codes' => 'string[]',
        'include_juris_codes' => 'bool',
        'partner_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_code' => null,
        'document_date' => 'date',
        'response_type' => null,
        'tax_codes' => null,
        'item_codes' => null,
        'location_codes' => null,
        'include_juris_codes' => null,
        'partner_id' => null
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
        'company_code' => 'companyCode',
        'document_date' => 'documentDate',
        'response_type' => 'responseType',
        'tax_codes' => 'taxCodes',
        'item_codes' => 'itemCodes',
        'location_codes' => 'locationCodes',
        'include_juris_codes' => 'includeJurisCodes',
        'partner_id' => 'partnerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_code' => 'setCompanyCode',
        'document_date' => 'setDocumentDate',
        'response_type' => 'setResponseType',
        'tax_codes' => 'setTaxCodes',
        'item_codes' => 'setItemCodes',
        'location_codes' => 'setLocationCodes',
        'include_juris_codes' => 'setIncludeJurisCodes',
        'partner_id' => 'setPartnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_code' => 'getCompanyCode',
        'document_date' => 'getDocumentDate',
        'response_type' => 'getResponseType',
        'tax_codes' => 'getTaxCodes',
        'item_codes' => 'getItemCodes',
        'location_codes' => 'getLocationCodes',
        'include_juris_codes' => 'getIncludeJurisCodes',
        'partner_id' => 'getPartnerId'
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

    const RESPONSE_TYPE_JSON = 'Json';
    const RESPONSE_TYPE_CSV = 'Csv';
    const RESPONSE_TYPE_XML = 'Xml';
    const PARTNER_ID_DMA = 'DMA';
    const PARTNER_ID_AX7 = 'AX7';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseTypeAllowableValues()
    {
        return [
            self::RESPONSE_TYPE_JSON,
            self::RESPONSE_TYPE_CSV,
            self::RESPONSE_TYPE_XML,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartnerIdAllowableValues()
    {
        return [
            self::PARTNER_ID_DMA,
            self::PARTNER_ID_AX7,
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
        $this->container['company_code'] = isset($data['company_code']) ? $data['company_code'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['response_type'] = isset($data['response_type']) ? $data['response_type'] : null;
        $this->container['tax_codes'] = isset($data['tax_codes']) ? $data['tax_codes'] : null;
        $this->container['item_codes'] = isset($data['item_codes']) ? $data['item_codes'] : null;
        $this->container['location_codes'] = isset($data['location_codes']) ? $data['location_codes'] : null;
        $this->container['include_juris_codes'] = isset($data['include_juris_codes']) ? $data['include_juris_codes'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_code'] === null) {
            $invalidProperties[] = "'company_code' can't be null";
        }
        $allowedValues = $this->getResponseTypeAllowableValues();
        if (!is_null($this->container['response_type']) && !in_array($this->container['response_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'response_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPartnerIdAllowableValues();
        if (!is_null($this->container['partner_id']) && !in_array($this->container['partner_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'partner_id', must be one of '%s'",
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
     * Gets company_code
     *
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     *
     * @param string $company_code A unique code that references a company within your account.
     *
     * @return $this
     */
    public function setCompanyCode($company_code)
    {
        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime $document_date The date associated with the response content. Default is current date. This field can be used to backdate or postdate the response content.
     *
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets response_type
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->container['response_type'];
    }

    /**
     * Sets response_type
     *
     * @param string $response_type The format of your response. Formats include JSON, CSV, and XML.
     *
     * @return $this
     */
    public function setResponseType($response_type)
    {
        $allowedValues = $this->getResponseTypeAllowableValues();
        if (!is_null($response_type) && !in_array($response_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'response_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['response_type'] = $response_type;

        return $this;
    }

    /**
     * Gets tax_codes
     *
     * @return string[]
     */
    public function getTaxCodes()
    {
        return $this->container['tax_codes'];
    }

    /**
     * Sets tax_codes
     *
     * @param string[] $tax_codes A list of tax codes to include in this point-of-sale file. If no tax codes are specified, response will include all distinct tax codes associated with the Items within your company.
     *
     * @return $this
     */
    public function setTaxCodes($tax_codes)
    {
        $this->container['tax_codes'] = $tax_codes;

        return $this;
    }

    /**
     * Gets item_codes
     *
     * @return string[]
     */
    public function getItemCodes()
    {
        return $this->container['item_codes'];
    }

    /**
     * Sets item_codes
     *
     * @param string[] $item_codes A list of item codes to include in this point-of-sale file. If no item codes are specified, responese will include all distinct item codes associated with the Items within your company.
     *
     * @return $this
     */
    public function setItemCodes($item_codes)
    {
        $this->container['item_codes'] = $item_codes;

        return $this;
    }

    /**
     * Gets location_codes
     *
     * @return string[]
     */
    public function getLocationCodes()
    {
        return $this->container['location_codes'];
    }

    /**
     * Sets location_codes
     *
     * @param string[] $location_codes A list of location codes to include in this point-of-sale file. If no location codes are specified, response will include all locations within your company.
     *
     * @return $this
     */
    public function setLocationCodes($location_codes)
    {
        $this->container['location_codes'] = $location_codes;

        return $this;
    }

    /**
     * Gets include_juris_codes
     *
     * @return bool
     */
    public function getIncludeJurisCodes()
    {
        return $this->container['include_juris_codes'];
    }

    /**
     * Sets include_juris_codes
     *
     * @param bool $include_juris_codes Set this value to true to include Juris Code in the response.
     *
     * @return $this
     */
    public function setIncludeJurisCodes($include_juris_codes)
    {
        $this->container['include_juris_codes'] = $include_juris_codes;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param string $partner_id A unique code assoicated with the Partner you may be working with. If you are not working with a Partner or your Partner has not provided you an ID, leave null.
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $allowedValues = $this->getPartnerIdAllowableValues();
        if (!is_null($partner_id) && !in_array($partner_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'partner_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['partner_id'] = $partner_id;

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


