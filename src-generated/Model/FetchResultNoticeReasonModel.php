<?php
/**
 * FetchResultNoticeReasonModel
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
 * FetchResultNoticeReasonModel Class Doc Comment
 *
 * @category Class
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FetchResultNoticeReasonModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FetchResult[NoticeReasonModel]';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recordset_count' => 'int',
        'value' => '\Together\Taxes\Model\NoticeReasonModel[]',
        'next_link' => 'string',
        'page_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recordset_count' => 'int32',
        'value' => null,
        'next_link' => null,
        'page_key' => null
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
        'recordset_count' => '@recordsetCount',
        'value' => 'value',
        'next_link' => '@nextLink',
        'page_key' => 'pageKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recordset_count' => 'setRecordsetCount',
        'value' => 'setValue',
        'next_link' => 'setNextLink',
        'page_key' => 'setPageKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recordset_count' => 'getRecordsetCount',
        'value' => 'getValue',
        'next_link' => 'getNextLink',
        'page_key' => 'getPageKey'
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
        $this->container['recordset_count'] = isset($data['recordset_count']) ? $data['recordset_count'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['next_link'] = isset($data['next_link']) ? $data['next_link'] : null;
        $this->container['page_key'] = isset($data['page_key']) ? $data['page_key'] : null;
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
     * Gets recordset_count
     *
     * @return int
     */
    public function getRecordsetCount()
    {
        return $this->container['recordset_count'];
    }

    /**
     * Sets recordset_count
     *
     * @param int $recordset_count recordset_count
     *
     * @return $this
     */
    public function setRecordsetCount($recordset_count)
    {
        $this->container['recordset_count'] = $recordset_count;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Together\Taxes\Model\NoticeReasonModel[]
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Together\Taxes\Model\NoticeReasonModel[] $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets next_link
     *
     * @return string
     */
    public function getNextLink()
    {
        return $this->container['next_link'];
    }

    /**
     * Sets next_link
     *
     * @param string $next_link next_link
     *
     * @return $this
     */
    public function setNextLink($next_link)
    {
        $this->container['next_link'] = $next_link;

        return $this;
    }

    /**
     * Gets page_key
     *
     * @return string
     */
    public function getPageKey()
    {
        return $this->container['page_key'];
    }

    /**
     * Sets page_key
     *
     * @param string $page_key page_key
     *
     * @return $this
     */
    public function setPageKey($page_key)
    {
        $this->container['page_key'] = $page_key;

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


