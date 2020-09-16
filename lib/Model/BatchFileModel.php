<?php
/**
 * BatchFileModel
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
 * BatchFileModel Class Doc Comment
 *
 * @category Class
 * @description Represents one file in a batch upload.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchFileModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchFileModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'batch_id' => 'int',
        'name' => 'string',
        'content' => 'string',
        'content_length' => 'int',
        'content_type' => 'string',
        'file_extension' => 'string',
        'file_path' => 'string',
        'error_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'batch_id' => 'int32',
        'name' => null,
        'content' => 'byte',
        'content_length' => 'int32',
        'content_type' => null,
        'file_extension' => null,
        'file_path' => null,
        'error_count' => 'int32'
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
        'batch_id' => 'batchId',
        'name' => 'name',
        'content' => 'content',
        'content_length' => 'contentLength',
        'content_type' => 'contentType',
        'file_extension' => 'fileExtension',
        'file_path' => 'filePath',
        'error_count' => 'errorCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'batch_id' => 'setBatchId',
        'name' => 'setName',
        'content' => 'setContent',
        'content_length' => 'setContentLength',
        'content_type' => 'setContentType',
        'file_extension' => 'setFileExtension',
        'file_path' => 'setFilePath',
        'error_count' => 'setErrorCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'batch_id' => 'getBatchId',
        'name' => 'getName',
        'content' => 'getContent',
        'content_length' => 'getContentLength',
        'content_type' => 'getContentType',
        'file_extension' => 'getFileExtension',
        'file_path' => 'getFilePath',
        'error_count' => 'getErrorCount'
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
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['content_length'] = isset($data['content_length']) ? $data['content_length'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['file_path'] = isset($data['file_path']) ? $data['file_path'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content'])) {
            $invalidProperties[] = "invalid value for 'content', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['content_type']) && (mb_strlen($this->container['content_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['content_type']) && (mb_strlen($this->container['content_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['file_extension']) && (mb_strlen($this->container['file_extension']) > 10)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['file_extension']) && (mb_strlen($this->container['file_extension']) < 0)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be bigger than or equal to 0.";
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
     * @param int $id The unique ID number assigned to this batch file.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param int $batch_id The unique ID number of the batch that this file belongs to.
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

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
     * @param string $name Logical Name of file (e.g. \"Input\" or \"Error\").
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BatchFileModel., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BatchFileModel., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Content of the batch file.
     *
     * @return $this
     */
    public function setContent($content)
    {

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $content))) {
            throw new \InvalidArgumentException("invalid value for $content when calling BatchFileModel., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_length
     *
     * @return int
     */
    public function getContentLength()
    {
        return $this->container['content_length'];
    }

    /**
     * Sets content_length
     *
     * @param int $content_length Size of content, in bytes.
     *
     * @return $this
     */
    public function setContentLength($content_length)
    {
        $this->container['content_length'] = $content_length;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type Content mime type (e.g. text/csv).  This is used for HTTP downloading.
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        if (!is_null($content_type) && (mb_strlen($content_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling BatchFileModel., must be smaller than or equal to 100.');
        }
        if (!is_null($content_type) && (mb_strlen($content_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling BatchFileModel., must be bigger than or equal to 0.');
        }

        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string $file_extension File extension (e.g. CSV).
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        if (!is_null($file_extension) && (mb_strlen($file_extension) > 10)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling BatchFileModel., must be smaller than or equal to 10.');
        }
        if (!is_null($file_extension) && (mb_strlen($file_extension) < 0)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling BatchFileModel., must be bigger than or equal to 0.');
        }

        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets file_path
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['file_path'];
    }

    /**
     * Sets file_path
     *
     * @param string $file_path Path to the file - name/S3 key
     *
     * @return $this
     */
    public function setFilePath($file_path)
    {
        $this->container['file_path'] = $file_path;

        return $this;
    }

    /**
     * Gets error_count
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     *
     * @param int $error_count Number of errors that occurred when processing this file.
     *
     * @return $this
     */
    public function setErrorCount($error_count)
    {
        $this->container['error_count'] = $error_count;

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


