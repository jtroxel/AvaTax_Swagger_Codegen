<?php
/**
 * FundingInitiateModel
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
 * FundingInitiateModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FundingInitiateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FundingInitiateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_email' => 'bool',
        'funding_email_recipient' => 'string',
        'request_widget' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_email' => null,
        'funding_email_recipient' => null,
        'request_widget' => null
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
        'request_email' => 'requestEmail',
        'funding_email_recipient' => 'fundingEmailRecipient',
        'request_widget' => 'requestWidget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_email' => 'setRequestEmail',
        'funding_email_recipient' => 'setFundingEmailRecipient',
        'request_widget' => 'setRequestWidget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_email' => 'getRequestEmail',
        'funding_email_recipient' => 'getFundingEmailRecipient',
        'request_widget' => 'getRequestWidget'
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
        $this->container['request_email'] = isset($data['request_email']) ? $data['request_email'] : null;
        $this->container['funding_email_recipient'] = isset($data['funding_email_recipient']) ? $data['funding_email_recipient'] : null;
        $this->container['request_widget'] = isset($data['request_widget']) ? $data['request_widget'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['funding_email_recipient'] === null) {
            $invalidProperties[] = "'funding_email_recipient' can't be null";
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
     * Gets request_email
     *
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->container['request_email'];
    }

    /**
     * Sets request_email
     *
     * @param bool $request_email Set this value to true to request an email to the recipient
     *
     * @return $this
     */
    public function setRequestEmail($request_email)
    {
        $this->container['request_email'] = $request_email;

        return $this;
    }

    /**
     * Gets funding_email_recipient
     *
     * @return string
     */
    public function getFundingEmailRecipient()
    {
        return $this->container['funding_email_recipient'];
    }

    /**
     * Sets funding_email_recipient
     *
     * @param string $funding_email_recipient If you have requested an email for funding setup, this is the recipient who will receive an  email inviting them to setup funding configuration for Avalara Managed Returns.  The recipient can  then click on a link in the email and setup funding configuration for this company.
     *
     * @return $this
     */
    public function setFundingEmailRecipient($funding_email_recipient)
    {
        $this->container['funding_email_recipient'] = $funding_email_recipient;

        return $this;
    }

    /**
     * Gets request_widget
     *
     * @return bool
     */
    public function getRequestWidget()
    {
        return $this->container['request_widget'];
    }

    /**
     * Sets request_widget
     *
     * @param bool $request_widget Set this value to true to request an HTML-based funding widget that can be embedded within an  existing user interface.  A user can then interact with the HTML-based funding widget to set up  funding information for the company.
     *
     * @return $this
     */
    public function setRequestWidget($request_widget)
    {
        $this->container['request_widget'] = $request_widget;

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


