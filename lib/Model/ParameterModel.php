<?php
/**
 * ParameterModel
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
 * ParameterModel Class Doc Comment
 *
 * @category Class
 * @description An extra property that can change the behavior of tax transactions.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParameterModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParameterModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'category' => 'string',
        'name' => 'string',
        'data_type' => 'string',
        'help_text' => 'string',
        'service_types' => 'string[]',
        'prompt' => 'string',
        'regular_expression' => 'string',
        'label' => 'string',
        'help_url' => 'string',
        'attribute_type' => 'string',
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
        'category' => null,
        'name' => null,
        'data_type' => null,
        'help_text' => null,
        'service_types' => null,
        'prompt' => null,
        'regular_expression' => null,
        'label' => null,
        'help_url' => null,
        'attribute_type' => null,
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
        'category' => 'category',
        'name' => 'name',
        'data_type' => 'dataType',
        'help_text' => 'helpText',
        'service_types' => 'serviceTypes',
        'prompt' => 'prompt',
        'regular_expression' => 'regularExpression',
        'label' => 'label',
        'help_url' => 'helpUrl',
        'attribute_type' => 'attributeType',
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
        'category' => 'setCategory',
        'name' => 'setName',
        'data_type' => 'setDataType',
        'help_text' => 'setHelpText',
        'service_types' => 'setServiceTypes',
        'prompt' => 'setPrompt',
        'regular_expression' => 'setRegularExpression',
        'label' => 'setLabel',
        'help_url' => 'setHelpUrl',
        'attribute_type' => 'setAttributeType',
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
        'category' => 'getCategory',
        'name' => 'getName',
        'data_type' => 'getDataType',
        'help_text' => 'getHelpText',
        'service_types' => 'getServiceTypes',
        'prompt' => 'getPrompt',
        'regular_expression' => 'getRegularExpression',
        'label' => 'getLabel',
        'help_url' => 'getHelpUrl',
        'attribute_type' => 'getAttributeType',
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['help_text'] = isset($data['help_text']) ? $data['help_text'] : null;
        $this->container['service_types'] = isset($data['service_types']) ? $data['service_types'] : null;
        $this->container['prompt'] = isset($data['prompt']) ? $data['prompt'] : null;
        $this->container['regular_expression'] = isset($data['regular_expression']) ? $data['regular_expression'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['help_url'] = isset($data['help_url']) ? $data['help_url'] : null;
        $this->container['attribute_type'] = isset($data['attribute_type']) ? $data['attribute_type'] : null;
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  The category grouping of this parameter.  When your user interface displays a large number of parameters, they should  be grouped by their category value.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * Gets service_types
     *
     * @return string[]
     */
    public function getServiceTypes()
    {
        return $this->container['service_types'];
    }

    /**
     * Sets service_types
     *
     * @param string[] $service_types A list of service types to which this parameter applies.
     *
     * @return $this
     */
    public function setServiceTypes($service_types)
    {
        $this->container['service_types'] = $service_types;

        return $this;
    }

    /**
     * Gets prompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param string $prompt DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  The prompt you should use when displaying this parameter to a user.  For example, if your user interface displays a  parameter in a text box, this is the label you should use to identify that text box.
     *
     * @return $this
     */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets regular_expression
     *
     * @return string
     */
    public function getRegularExpression()
    {
        return $this->container['regular_expression'];
    }

    /**
     * Sets regular_expression
     *
     * @param string $regular_expression DEPRECATED - Date: 07/25/2018, Version: 18.7, Message: This field is deprecated and will return null.  If your user interface permits client-side validation of parameters, this string is a regular expression you can use  to validate the user's data entry prior to submitting a tax request.
     *
     * @return $this
     */
    public function setRegularExpression($regular_expression)
    {
        $this->container['regular_expression'] = $regular_expression;

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


