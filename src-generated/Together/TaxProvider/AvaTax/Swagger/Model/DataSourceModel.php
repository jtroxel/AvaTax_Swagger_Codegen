<?php
/**
 * DataSourceModel
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

namespace Together\TaxProvider\AvaTax\Swagger\Model;

use \ArrayAccess;
use \Together\Taxes\ObjectSerializer;

/**
 * DataSourceModel Class Doc Comment
 *
 * @category Class
 * @description Data source object
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourceModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSourceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'company_id' => 'int',
        'source' => 'string',
        'instance' => 'string',
        'is_enabled' => 'bool',
        'is_synced' => 'bool',
        'is_authorized' => 'bool',
        'last_synced_date' => '\DateTime',
        'created_user_id' => 'int',
        'created_date' => '\DateTime',
        'modified_user_id' => 'int',
        'modified_date' => '\DateTime',
        'deleted_date' => '\DateTime',
        'recalculate' => 'bool',
        'name' => 'string',
        'external_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'company_id' => 'int32',
        'source' => null,
        'instance' => null,
        'is_enabled' => null,
        'is_synced' => null,
        'is_authorized' => null,
        'last_synced_date' => 'date-time',
        'created_user_id' => 'int32',
        'created_date' => 'date-time',
        'modified_user_id' => 'int32',
        'modified_date' => 'date-time',
        'deleted_date' => 'date-time',
        'recalculate' => null,
        'name' => null,
        'external_state' => null
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
        'company_id' => 'companyId',
        'source' => 'source',
        'instance' => 'instance',
        'is_enabled' => 'isEnabled',
        'is_synced' => 'isSynced',
        'is_authorized' => 'isAuthorized',
        'last_synced_date' => 'lastSyncedDate',
        'created_user_id' => 'createdUserId',
        'created_date' => 'createdDate',
        'modified_user_id' => 'modifiedUserId',
        'modified_date' => 'modifiedDate',
        'deleted_date' => 'deletedDate',
        'recalculate' => 'recalculate',
        'name' => 'name',
        'external_state' => 'externalState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'source' => 'setSource',
        'instance' => 'setInstance',
        'is_enabled' => 'setIsEnabled',
        'is_synced' => 'setIsSynced',
        'is_authorized' => 'setIsAuthorized',
        'last_synced_date' => 'setLastSyncedDate',
        'created_user_id' => 'setCreatedUserId',
        'created_date' => 'setCreatedDate',
        'modified_user_id' => 'setModifiedUserId',
        'modified_date' => 'setModifiedDate',
        'deleted_date' => 'setDeletedDate',
        'recalculate' => 'setRecalculate',
        'name' => 'setName',
        'external_state' => 'setExternalState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'source' => 'getSource',
        'instance' => 'getInstance',
        'is_enabled' => 'getIsEnabled',
        'is_synced' => 'getIsSynced',
        'is_authorized' => 'getIsAuthorized',
        'last_synced_date' => 'getLastSyncedDate',
        'created_user_id' => 'getCreatedUserId',
        'created_date' => 'getCreatedDate',
        'modified_user_id' => 'getModifiedUserId',
        'modified_date' => 'getModifiedDate',
        'deleted_date' => 'getDeletedDate',
        'recalculate' => 'getRecalculate',
        'name' => 'getName',
        'external_state' => 'getExternalState'
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['is_synced'] = isset($data['is_synced']) ? $data['is_synced'] : null;
        $this->container['is_authorized'] = isset($data['is_authorized']) ? $data['is_authorized'] : null;
        $this->container['last_synced_date'] = isset($data['last_synced_date']) ? $data['last_synced_date'] : null;
        $this->container['created_user_id'] = isset($data['created_user_id']) ? $data['created_user_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['modified_user_id'] = isset($data['modified_user_id']) ? $data['modified_user_id'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['deleted_date'] = isset($data['deleted_date']) ? $data['deleted_date'] : null;
        $this->container['recalculate'] = isset($data['recalculate']) ? $data['recalculate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_state'] = isset($data['external_state']) ? $data['external_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
     * @param int $id The id of the datasource.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id The id of the company to which the datasource belongs to.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source The extractor/connector id.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets instance
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param string $instance The unique ID number of this connection.
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled The connection using the connection_id is enabled. The customer is responsible to enable or disable.
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets is_synced
     *
     * @return bool
     */
    public function getIsSynced()
    {
        return $this->container['is_synced'];
    }

    /**
     * Sets is_synced
     *
     * @param bool $is_synced If all the information has been transferred from the extractor to the database.
     *
     * @return $this
     */
    public function setIsSynced($is_synced)
    {
        $this->container['is_synced'] = $is_synced;

        return $this;
    }

    /**
     * Gets is_authorized
     *
     * @return bool
     */
    public function getIsAuthorized()
    {
        return $this->container['is_authorized'];
    }

    /**
     * Sets is_authorized
     *
     * @param bool $is_authorized True if this data source is authorized.
     *
     * @return $this
     */
    public function setIsAuthorized($is_authorized)
    {
        $this->container['is_authorized'] = $is_authorized;

        return $this;
    }

    /**
     * Gets last_synced_date
     *
     * @return \DateTime
     */
    public function getLastSyncedDate()
    {
        return $this->container['last_synced_date'];
    }

    /**
     * Sets last_synced_date
     *
     * @param \DateTime $last_synced_date The date when the information was last synched.
     *
     * @return $this
     */
    public function setLastSyncedDate($last_synced_date)
    {
        $this->container['last_synced_date'] = $last_synced_date;

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
     * Gets deleted_date
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->container['deleted_date'];
    }

    /**
     * Sets deleted_date
     *
     * @param \DateTime $deleted_date The date when this record was deleted.
     *
     * @return $this
     */
    public function setDeletedDate($deleted_date)
    {
        $this->container['deleted_date'] = $deleted_date;

        return $this;
    }

    /**
     * Gets recalculate
     *
     * @return bool
     */
    public function getRecalculate()
    {
        return $this->container['recalculate'];
    }

    /**
     * Sets recalculate
     *
     * @param bool $recalculate Specifies whether transactions created by this data source needs to re-calculate tax or not
     *
     * @return $this
     */
    public function setRecalculate($recalculate)
    {
        $this->container['recalculate'] = $recalculate;

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
     * @param string $name Specifies the name of the extractor
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets external_state
     *
     * @return string
     */
    public function getExternalState()
    {
        return $this->container['external_state'];
    }

    /**
     * Sets external_state
     *
     * @param string $external_state Specifies any implementation-specific information along with the DataSource.This field has no internal meaning in AvaTax and is purely for the convenience of the DataSource API user
     *
     * @return $this
     */
    public function setExternalState($external_state)
    {
        $this->container['external_state'] = $external_state;

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

