<?php
/**
 * ActivateAccountModel
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
 * ActivateAccountModel Class Doc Comment
 *
 * @category Class
 * @description Represents a request to activate an account by reading and accepting its terms and conditions.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivateAccountModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivateAccountModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_avalara_terms_and_conditions' => 'bool',
        'have_read_avalara_terms_and_conditions' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_avalara_terms_and_conditions' => null,
        'have_read_avalara_terms_and_conditions' => null
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
        'accept_avalara_terms_and_conditions' => 'acceptAvalaraTermsAndConditions',
        'have_read_avalara_terms_and_conditions' => 'haveReadAvalaraTermsAndConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_avalara_terms_and_conditions' => 'setAcceptAvalaraTermsAndConditions',
        'have_read_avalara_terms_and_conditions' => 'setHaveReadAvalaraTermsAndConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_avalara_terms_and_conditions' => 'getAcceptAvalaraTermsAndConditions',
        'have_read_avalara_terms_and_conditions' => 'getHaveReadAvalaraTermsAndConditions'
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
        $this->container['accept_avalara_terms_and_conditions'] = isset($data['accept_avalara_terms_and_conditions']) ? $data['accept_avalara_terms_and_conditions'] : null;
        $this->container['have_read_avalara_terms_and_conditions'] = isset($data['have_read_avalara_terms_and_conditions']) ? $data['have_read_avalara_terms_and_conditions'] : null;
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
     * Gets accept_avalara_terms_and_conditions
     *
     * @return bool
     */
    public function getAcceptAvalaraTermsAndConditions()
    {
        return $this->container['accept_avalara_terms_and_conditions'];
    }

    /**
     * Sets accept_avalara_terms_and_conditions
     *
     * @param bool $accept_avalara_terms_and_conditions Set this to true if and only if you accept Avalara's terms and conditions for your account.
     *
     * @return $this
     */
    public function setAcceptAvalaraTermsAndConditions($accept_avalara_terms_and_conditions)
    {
        $this->container['accept_avalara_terms_and_conditions'] = $accept_avalara_terms_and_conditions;

        return $this;
    }

    /**
     * Gets have_read_avalara_terms_and_conditions
     *
     * @return bool
     */
    public function getHaveReadAvalaraTermsAndConditions()
    {
        return $this->container['have_read_avalara_terms_and_conditions'];
    }

    /**
     * Sets have_read_avalara_terms_and_conditions
     *
     * @param bool $have_read_avalara_terms_and_conditions Set this to true if and only if you have fully read Avalara's terms and conditions for your account.
     *
     * @return $this
     */
    public function setHaveReadAvalaraTermsAndConditions($have_read_avalara_terms_and_conditions)
    {
        $this->container['have_read_avalara_terms_and_conditions'] = $have_read_avalara_terms_and_conditions;

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


