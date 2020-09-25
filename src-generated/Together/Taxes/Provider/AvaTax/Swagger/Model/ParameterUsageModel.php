<?php
/**
 * ParameterUsageModel
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
 * ParameterUsageModel Class Doc Comment
 *
 * @category Class
 * @description usage of system defined parameters.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParameterUsageModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParameterUsageModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parameter_id' => 'int',
        'product_code' => 'string',
        'country' => 'string',
        'region' => 'string',
        'system_id' => 'int',
        'tax_type_id' => 'string',
        'attribute_type' => 'string',
        'name' => 'string',
        'data_type' => 'string',
        'help_text' => 'string',
        'label' => 'string',
        'help_url' => 'string',
        'values' => 'string[]',
        'measurement_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'parameter_id' => 'int64',
        'product_code' => null,
        'country' => null,
        'region' => null,
        'system_id' => 'int32',
        'tax_type_id' => null,
        'attribute_type' => null,
        'name' => null,
        'data_type' => null,
        'help_text' => null,
        'label' => null,
        'help_url' => null,
        'values' => null,
        'measurement_type' => null
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
        'id' => 'id',
        'parameter_id' => 'parameterId',
        'product_code' => 'productCode',
        'country' => 'country',
        'region' => 'region',
        'system_id' => 'systemId',
        'tax_type_id' => 'taxTypeId',
        'attribute_type' => 'attributeType',
        'name' => 'name',
        'data_type' => 'dataType',
        'help_text' => 'helpText',
        'label' => 'label',
        'help_url' => 'helpUrl',
        'values' => 'values',
        'measurement_type' => 'measurementType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parameter_id' => 'setParameterId',
        'product_code' => 'setProductCode',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'system_id' => 'setSystemId',
        'tax_type_id' => 'setTaxTypeId',
        'attribute_type' => 'setAttributeType',
        'name' => 'setName',
        'data_type' => 'setDataType',
        'help_text' => 'setHelpText',
        'label' => 'setLabel',
        'help_url' => 'setHelpUrl',
        'values' => 'setValues',
        'measurement_type' => 'setMeasurementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parameter_id' => 'getParameterId',
        'product_code' => 'getProductCode',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'system_id' => 'getSystemId',
        'tax_type_id' => 'getTaxTypeId',
        'attribute_type' => 'getAttributeType',
        'name' => 'getName',
        'data_type' => 'getDataType',
        'help_text' => 'getHelpText',
        'label' => 'getLabel',
        'help_url' => 'getHelpUrl',
        'values' => 'getValues',
        'measurement_type' => 'getMeasurementType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parameter_id'] = isset($data['parameter_id']) ? $data['parameter_id'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['tax_type_id'] = isset($data['tax_type_id']) ? $data['tax_type_id'] : null;
        $this->container['attribute_type'] = isset($data['attribute_type']) ? $data['attribute_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['help_url'] = isset($data['help_url']) ? $data['help_url'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['measurement_type'] = isset($data['measurement_type']) ? $data['measurement_type'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique ID number of this property.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parameter_id
     *
     * @return int
     */
    public function getParameterId()
    {
        return $this->container['parameter_id'];
    }

    /**
     * Sets parameter_id
     *
     * @param int $parameter_id The id of the parameter.
     *
     * @return $this
     */
    public function setParameterId($parameter_id)
    {
        $this->container['parameter_id'] = $parameter_id;

        return $this;
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
     * @param string $product_code Product code for the parameter usage item.
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

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
     * @param string $country The country for the parameter usage item.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * @param string $region The state for the parameter usage item.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id System Id for the parameter usage item
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

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
     * @param string $tax_type_id tax type for the parameter usage item.
     *
     * @return $this
     */
    public function setTaxTypeId($tax_type_id)
    {
        $this->container['tax_type_id'] = $tax_type_id;

        return $this;
    }

    /**
     * Gets attribute_type
     *
     * @return string
     */
    public function getAttributeType()
    {
        return $this->container['attribute_type'];
    }

    /**
     * Sets attribute_type
     *
     * @param string $attribute_type The type of parameter as determined by its application, e.g. Product, Transaction, Calculated
     *
     * @return $this
     */
    public function setAttributeType($attribute_type)
    {
        $this->container['attribute_type'] = $attribute_type;

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
     * @param string $name The name of the property.  To use this property, add a field on the `parameters` object of a [CreateTransaction](https://developer.avalara.com/api-reference/avatax/rest/v2/methods/Transactions/CreateTransaction/) call.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type The data type of the property.
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->container['help_text'];
    }

    /**
     * Sets help_text
     *
     * @param string $help_text Help text to be shown to the user when they are filling out this parameter.  Help text may include HTML links to additional  content with more information about a parameter.
     *
     * @return $this
     */
    public function setHelpText($help_text)
    {
        $this->container['help_text'] = $help_text;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label that helps the user to identify a parameter
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets help_url
     *
     * @return string
     */
    public function getHelpUrl()
    {
        return $this->container['help_url'];
    }

    /**
     * Sets help_url
     *
     * @param string $help_url A help url that provides more information about the parameter
     *
     * @return $this
     */
    public function setHelpUrl($help_url)
    {
        $this->container['help_url'] = $help_url;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values If the parameter is of enumeration data type, then this list will be populated with all of the possible enumeration values.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets measurement_type
     *
     * @return string
     */
    public function getMeasurementType()
    {
        return $this->container['measurement_type'];
    }

    /**
     * Sets measurement_type
     *
     * @param string $measurement_type The unit of measurement type of the parameter
     *
     * @return $this
     */
    public function setMeasurementType($measurement_type)
    {
        $this->container['measurement_type'] = $measurement_type;

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


