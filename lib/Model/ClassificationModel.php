<?php
/**
 * ClassificationModel
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
 * ClassificationModel Class Doc Comment
 *
 * @category Class
 * @description Represents a classification for a given item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClassificationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClassificationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_code' => 'string',
        'system_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_code' => null,
        'system_code' => null
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
        'product_code' => 'productCode',
        'system_code' => 'systemCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_code' => 'setProductCode',
        'system_code' => 'setSystemCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_code' => 'getProductCode',
        'system_code' => 'getSystemCode'
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
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['system_code'] = isset($data['system_code']) ? $data['system_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_code'] === null) {
            $invalidProperties[] = "'product_code' can't be null";
        }
        if ((mb_strlen($this->container['product_code']) > 25)) {
            $invalidProperties[] = "invalid value for 'product_code', the character length must be smaller than or equal to 25.";
        }

        if ((mb_strlen($this->container['product_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'product_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['system_code']) && (mb_strlen($this->container['system_code']) > 25)) {
            $invalidProperties[] = "invalid value for 'system_code', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['system_code']) && (mb_strlen($this->container['system_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'system_code', the character length must be bigger than or equal to 0.";
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
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code The product code of an item in a given system.
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        if ((mb_strlen($product_code) > 25)) {
            throw new \InvalidArgumentException('invalid length for $product_code when calling ClassificationModel., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($product_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $product_code when calling ClassificationModel., must be bigger than or equal to 0.');
        }

        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets system_code
     *
     * @return string
     */
    public function getSystemCode()
    {
        return $this->container['system_code'];
    }

    /**
     * Sets system_code
     *
     * @param string $system_code The system code in which the product belongs.
     *
     * @return $this
     */
    public function setSystemCode($system_code)
    {
        if (!is_null($system_code) && (mb_strlen($system_code) > 25)) {
            throw new \InvalidArgumentException('invalid length for $system_code when calling ClassificationModel., must be smaller than or equal to 25.');
        }
        if (!is_null($system_code) && (mb_strlen($system_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $system_code when calling ClassificationModel., must be bigger than or equal to 0.');
        }

        $this->container['system_code'] = $system_code;

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


