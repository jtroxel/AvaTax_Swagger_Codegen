<?php
/**
 * NexusTaxTypeGroupModel
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
 * NexusTaxTypeGroupModel Class Doc Comment
 *
 * @category Class
 * @description Represents a group of tax types
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NexusTaxTypeGroupModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NexusTaxTypeGroupModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'nexus_tax_type_group_id' => 'string',
        'description' => 'string',
        'subscription_type_id' => 'int',
        'subscription_description' => 'string',
        'tab_name' => 'string',
        'show_column' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'nexus_tax_type_group_id' => null,
        'description' => null,
        'subscription_type_id' => 'int32',
        'subscription_description' => null,
        'tab_name' => null,
        'show_column' => null
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
        'nexus_tax_type_group_id' => 'nexusTaxTypeGroupId',
        'description' => 'description',
        'subscription_type_id' => 'subscriptionTypeId',
        'subscription_description' => 'subscriptionDescription',
        'tab_name' => 'tabName',
        'show_column' => 'showColumn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'nexus_tax_type_group_id' => 'setNexusTaxTypeGroupId',
        'description' => 'setDescription',
        'subscription_type_id' => 'setSubscriptionTypeId',
        'subscription_description' => 'setSubscriptionDescription',
        'tab_name' => 'setTabName',
        'show_column' => 'setShowColumn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'nexus_tax_type_group_id' => 'getNexusTaxTypeGroupId',
        'description' => 'getDescription',
        'subscription_type_id' => 'getSubscriptionTypeId',
        'subscription_description' => 'getSubscriptionDescription',
        'tab_name' => 'getTabName',
        'show_column' => 'getShowColumn'
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
        $this->container['nexus_tax_type_group_id'] = isset($data['nexus_tax_type_group_id']) ? $data['nexus_tax_type_group_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subscription_type_id'] = isset($data['subscription_type_id']) ? $data['subscription_type_id'] : null;
        $this->container['subscription_description'] = isset($data['subscription_description']) ? $data['subscription_description'] : null;
        $this->container['tab_name'] = isset($data['tab_name']) ? $data['tab_name'] : null;
        $this->container['show_column'] = isset($data['show_column']) ? $data['show_column'] : null;
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
     * @param int $id The unique ID number of this nexus tax type group.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets nexus_tax_type_group_id
     *
     * @return string
     */
    public function getNexusTaxTypeGroupId()
    {
        return $this->container['nexus_tax_type_group_id'];
    }

    /**
     * Sets nexus_tax_type_group_id
     *
     * @param string $nexus_tax_type_group_id The unique human readable Id of this nexus tax type group.
     *
     * @return $this
     */
    public function setNexusTaxTypeGroupId($nexus_tax_type_group_id)
    {
        $this->container['nexus_tax_type_group_id'] = $nexus_tax_type_group_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of this nexus tax type group.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets subscription_type_id
     *
     * @return int
     */
    public function getSubscriptionTypeId()
    {
        return $this->container['subscription_type_id'];
    }

    /**
     * Sets subscription_type_id
     *
     * @param int $subscription_type_id If this tax type group requires a subscription, this contains the ID number of the subscription type required to use it.
     *
     * @return $this
     */
    public function setSubscriptionTypeId($subscription_type_id)
    {
        $this->container['subscription_type_id'] = $subscription_type_id;

        return $this;
    }

    /**
     * Gets subscription_description
     *
     * @return string
     */
    public function getSubscriptionDescription()
    {
        return $this->container['subscription_description'];
    }

    /**
     * Sets subscription_description
     *
     * @param string $subscription_description If this tax type group requires a subscription, this contains the friendly name of the subscription type required to use it.
     *
     * @return $this
     */
    public function setSubscriptionDescription($subscription_description)
    {
        $this->container['subscription_description'] = $subscription_description;

        return $this;
    }

    /**
     * Gets tab_name
     *
     * @return string
     */
    public function getTabName()
    {
        return $this->container['tab_name'];
    }

    /**
     * Sets tab_name
     *
     * @param string $tab_name The name of the tab in the AvaTax website corresponding to this tax type group.
     *
     * @return $this
     */
    public function setTabName($tab_name)
    {
        $this->container['tab_name'] = $tab_name;

        return $this;
    }

    /**
     * Gets show_column
     *
     * @return bool
     */
    public function getShowColumn()
    {
        return $this->container['show_column'];
    }

    /**
     * Sets show_column
     *
     * @param bool $show_column True if this tax type group is displayed in the user interface of the AvaTax website.
     *
     * @return $this
     */
    public function setShowColumn($show_column)
    {
        $this->container['show_column'] = $show_column;

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


