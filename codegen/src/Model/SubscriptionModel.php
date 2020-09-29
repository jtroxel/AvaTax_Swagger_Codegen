<?php
/**
 * SubscriptionModel
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
 * SubscriptionModel Class Doc Comment
 *
 * @category Class
 * @description Represents a service that this account has subscribed to.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'account_id' => 'int',
        'subscription_type_id' => 'int',
        'subscription_description' => 'string',
        'effective_date' => '\DateTime',
        'end_date' => '\DateTime',
        'created_date' => '\DateTime',
        'created_user_id' => 'int',
        'modified_date' => '\DateTime',
        'modified_user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'account_id' => 'int32',
        'subscription_type_id' => 'int32',
        'subscription_description' => null,
        'effective_date' => 'date',
        'end_date' => 'date',
        'created_date' => 'date-time',
        'created_user_id' => 'int32',
        'modified_date' => 'date-time',
        'modified_user_id' => 'int32'
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
        'account_id' => 'accountId',
        'subscription_type_id' => 'subscriptionTypeId',
        'subscription_description' => 'subscriptionDescription',
        'effective_date' => 'effectiveDate',
        'end_date' => 'endDate',
        'created_date' => 'createdDate',
        'created_user_id' => 'createdUserId',
        'modified_date' => 'modifiedDate',
        'modified_user_id' => 'modifiedUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_id' => 'setAccountId',
        'subscription_type_id' => 'setSubscriptionTypeId',
        'subscription_description' => 'setSubscriptionDescription',
        'effective_date' => 'setEffectiveDate',
        'end_date' => 'setEndDate',
        'created_date' => 'setCreatedDate',
        'created_user_id' => 'setCreatedUserId',
        'modified_date' => 'setModifiedDate',
        'modified_user_id' => 'setModifiedUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_id' => 'getAccountId',
        'subscription_type_id' => 'getSubscriptionTypeId',
        'subscription_description' => 'getSubscriptionDescription',
        'effective_date' => 'getEffectiveDate',
        'end_date' => 'getEndDate',
        'created_date' => 'getCreatedDate',
        'created_user_id' => 'getCreatedUserId',
        'modified_date' => 'getModifiedDate',
        'modified_user_id' => 'getModifiedUserId'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['subscription_type_id'] = isset($data['subscription_type_id']) ? $data['subscription_type_id'] : null;
        $this->container['subscription_description'] = isset($data['subscription_description']) ? $data['subscription_description'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_user_id'] = isset($data['created_user_id']) ? $data['created_user_id'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['modified_user_id'] = isset($data['modified_user_id']) ? $data['modified_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['subscription_description']) && (mb_strlen($this->container['subscription_description']) > 25)) {
            $invalidProperties[] = "invalid value for 'subscription_description', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['subscription_description']) && (mb_strlen($this->container['subscription_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'subscription_description', the character length must be bigger than or equal to 0.";
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
     * @param int $id The unique ID number of this subscription.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The unique ID number of the account this subscription belongs to.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param int $subscription_type_id The unique ID number of the service that the account is subscribed to. If this is provided, subscription description is ignored.
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
     * @param string $subscription_description A friendly description of the service that the account is subscribed to. You can either provide the subscription type Id or this but not both. If  subscription type Id is provided, then this information is ignored and this field will be updated with the information from subscription type id.
     *
     * @return $this
     */
    public function setSubscriptionDescription($subscription_description)
    {
        if (!is_null($subscription_description) && (mb_strlen($subscription_description) > 25)) {
            throw new \InvalidArgumentException('invalid length for $subscription_description when calling SubscriptionModel., must be smaller than or equal to 25.');
        }
        if (!is_null($subscription_description) && (mb_strlen($subscription_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subscription_description when calling SubscriptionModel., must be bigger than or equal to 0.');
        }

        $this->container['subscription_description'] = $subscription_description;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date The date when the subscription began.
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

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
     * @param \DateTime $end_date If the subscription has ended or will end, this date indicates when the subscription ends.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date The date when this record was created.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets created_user_id
     *
     * @return int
     */
    public function getCreatedUserId()
    {
        return $this->container['created_user_id'];
    }

    /**
     * Sets created_user_id
     *
     * @param int $created_user_id The User ID of the user who created this record.
     *
     * @return $this
     */
    public function setCreatedUserId($created_user_id)
    {
        $this->container['created_user_id'] = $created_user_id;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param \DateTime $modified_date The date/time when this record was last modified.
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets modified_user_id
     *
     * @return int
     */
    public function getModifiedUserId()
    {
        return $this->container['modified_user_id'];
    }

    /**
     * Sets modified_user_id
     *
     * @param int $modified_user_id The user ID of the user who last modified this record.
     *
     * @return $this
     */
    public function setModifiedUserId($modified_user_id)
    {
        $this->container['modified_user_id'] = $modified_user_id;

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

