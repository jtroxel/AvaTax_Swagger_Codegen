<?php
/**
 * NoticeCommentModel
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
 * NoticeCommentModel Class Doc Comment
 *
 * @category Class
 * @description Represents communication between Avalara and the company regarding the processing of a tax notice.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoticeCommentModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoticeCommentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'notice_id' => 'int',
        'date' => '\DateTime',
        'comment' => 'string',
        'comment_user_id' => 'int',
        'comment_user_name' => 'string',
        'comment_type_id' => 'int',
        'comment_type' => 'string',
        'comment_link' => 'string',
        'tax_notice_file_name' => 'string',
        'resource_file_id' => 'int',
        'modified_date' => '\DateTime',
        'modified_user_id' => 'int',
        'attachment_upload_request' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\ResourceFileUploadRequestModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'notice_id' => 'int32',
        'date' => 'date-time',
        'comment' => null,
        'comment_user_id' => 'int32',
        'comment_user_name' => null,
        'comment_type_id' => 'int32',
        'comment_type' => null,
        'comment_link' => null,
        'tax_notice_file_name' => null,
        'resource_file_id' => 'int64',
        'modified_date' => 'date-time',
        'modified_user_id' => 'int32',
        'attachment_upload_request' => null
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
        'notice_id' => 'noticeId',
        'date' => 'date',
        'comment' => 'comment',
        'comment_user_id' => 'commentUserId',
        'comment_user_name' => 'commentUserName',
        'comment_type_id' => 'commentTypeId',
        'comment_type' => 'commentType',
        'comment_link' => 'commentLink',
        'tax_notice_file_name' => 'taxNoticeFileName',
        'resource_file_id' => 'resourceFileId',
        'modified_date' => 'modifiedDate',
        'modified_user_id' => 'modifiedUserId',
        'attachment_upload_request' => 'attachmentUploadRequest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'notice_id' => 'setNoticeId',
        'date' => 'setDate',
        'comment' => 'setComment',
        'comment_user_id' => 'setCommentUserId',
        'comment_user_name' => 'setCommentUserName',
        'comment_type_id' => 'setCommentTypeId',
        'comment_type' => 'setCommentType',
        'comment_link' => 'setCommentLink',
        'tax_notice_file_name' => 'setTaxNoticeFileName',
        'resource_file_id' => 'setResourceFileId',
        'modified_date' => 'setModifiedDate',
        'modified_user_id' => 'setModifiedUserId',
        'attachment_upload_request' => 'setAttachmentUploadRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'notice_id' => 'getNoticeId',
        'date' => 'getDate',
        'comment' => 'getComment',
        'comment_user_id' => 'getCommentUserId',
        'comment_user_name' => 'getCommentUserName',
        'comment_type_id' => 'getCommentTypeId',
        'comment_type' => 'getCommentType',
        'comment_link' => 'getCommentLink',
        'tax_notice_file_name' => 'getTaxNoticeFileName',
        'resource_file_id' => 'getResourceFileId',
        'modified_date' => 'getModifiedDate',
        'modified_user_id' => 'getModifiedUserId',
        'attachment_upload_request' => 'getAttachmentUploadRequest'
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

    const COMMENT_TYPE_INTERNAL = 'Internal';
    const COMMENT_TYPE_CUSTOMER = 'Customer';
    const COMMENT_TYPE_POA_ATTACHMENT = 'POAAttachment';
    const COMMENT_TYPE_NOTICE_VOUCHER = 'NoticeVoucher';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommentTypeAllowableValues()
    {
        return [
            self::COMMENT_TYPE_INTERNAL,
            self::COMMENT_TYPE_CUSTOMER,
            self::COMMENT_TYPE_POA_ATTACHMENT,
            self::COMMENT_TYPE_NOTICE_VOUCHER,
        ];
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
        $this->container['notice_id'] = isset($data['notice_id']) ? $data['notice_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['comment_user_id'] = isset($data['comment_user_id']) ? $data['comment_user_id'] : null;
        $this->container['comment_user_name'] = isset($data['comment_user_name']) ? $data['comment_user_name'] : null;
        $this->container['comment_type_id'] = isset($data['comment_type_id']) ? $data['comment_type_id'] : null;
        $this->container['comment_type'] = isset($data['comment_type']) ? $data['comment_type'] : null;
        $this->container['comment_link'] = isset($data['comment_link']) ? $data['comment_link'] : null;
        $this->container['tax_notice_file_name'] = isset($data['tax_notice_file_name']) ? $data['tax_notice_file_name'] : null;
        $this->container['resource_file_id'] = isset($data['resource_file_id']) ? $data['resource_file_id'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['modified_user_id'] = isset($data['modified_user_id']) ? $data['modified_user_id'] : null;
        $this->container['attachment_upload_request'] = isset($data['attachment_upload_request']) ? $data['attachment_upload_request'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notice_id'] === null) {
            $invalidProperties[] = "'notice_id' can't be null";
        }
        if ($this->container['comment_type'] === null) {
            $invalidProperties[] = "'comment_type' can't be null";
        }
        $allowedValues = $this->getCommentTypeAllowableValues();
        if (!is_null($this->container['comment_type']) && !in_array($this->container['comment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'comment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['tax_notice_file_name']) && (mb_strlen($this->container['tax_notice_file_name']) > 300)) {
            $invalidProperties[] = "invalid value for 'tax_notice_file_name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['tax_notice_file_name']) && (mb_strlen($this->container['tax_notice_file_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'tax_notice_file_name', the character length must be bigger than or equal to 0.";
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
     * @param int $id The unique ID number of this notice.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets notice_id
     *
     * @return int
     */
    public function getNoticeId()
    {
        return $this->container['notice_id'];
    }

    /**
     * Sets notice_id
     *
     * @param int $notice_id The ID of the notice this comment is attached too
     *
     * @return $this
     */
    public function setNoticeId($notice_id)
    {
        $this->container['notice_id'] = $notice_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The date this comment was entered
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment TaxNoticeComment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets comment_user_id
     *
     * @return int
     */
    public function getCommentUserId()
    {
        return $this->container['comment_user_id'];
    }

    /**
     * Sets comment_user_id
     *
     * @param int $comment_user_id TaxNoticeCommentUserId
     *
     * @return $this
     */
    public function setCommentUserId($comment_user_id)
    {
        $this->container['comment_user_id'] = $comment_user_id;

        return $this;
    }

    /**
     * Gets comment_user_name
     *
     * @return string
     */
    public function getCommentUserName()
    {
        return $this->container['comment_user_name'];
    }

    /**
     * Sets comment_user_name
     *
     * @param string $comment_user_name TaxNoticeCommentUserName
     *
     * @return $this
     */
    public function setCommentUserName($comment_user_name)
    {
        $this->container['comment_user_name'] = $comment_user_name;

        return $this;
    }

    /**
     * Gets comment_type_id
     *
     * @return int
     */
    public function getCommentTypeId()
    {
        return $this->container['comment_type_id'];
    }

    /**
     * Sets comment_type_id
     *
     * @param int $comment_type_id taxNoticeCommentTypeId
     *
     * @return $this
     */
    public function setCommentTypeId($comment_type_id)
    {
        $this->container['comment_type_id'] = $comment_type_id;

        return $this;
    }

    /**
     * Gets comment_type
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->container['comment_type'];
    }

    /**
     * Sets comment_type
     *
     * @param string $comment_type taxNoticeCommentType
     *
     * @return $this
     */
    public function setCommentType($comment_type)
    {
        $allowedValues = $this->getCommentTypeAllowableValues();
        if (!in_array($comment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'comment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['comment_type'] = $comment_type;

        return $this;
    }

    /**
     * Gets comment_link
     *
     * @return string
     */
    public function getCommentLink()
    {
        return $this->container['comment_link'];
    }

    /**
     * Sets comment_link
     *
     * @param string $comment_link TaxNoticeCommentLink
     *
     * @return $this
     */
    public function setCommentLink($comment_link)
    {
        $this->container['comment_link'] = $comment_link;

        return $this;
    }

    /**
     * Gets tax_notice_file_name
     *
     * @return string
     */
    public function getTaxNoticeFileName()
    {
        return $this->container['tax_notice_file_name'];
    }

    /**
     * Sets tax_notice_file_name
     *
     * @param string $tax_notice_file_name TaxNoticeFileName
     *
     * @return $this
     */
    public function setTaxNoticeFileName($tax_notice_file_name)
    {
        if (!is_null($tax_notice_file_name) && (mb_strlen($tax_notice_file_name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $tax_notice_file_name when calling NoticeCommentModel., must be smaller than or equal to 300.');
        }
        if (!is_null($tax_notice_file_name) && (mb_strlen($tax_notice_file_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tax_notice_file_name when calling NoticeCommentModel., must be bigger than or equal to 0.');
        }

        $this->container['tax_notice_file_name'] = $tax_notice_file_name;

        return $this;
    }

    /**
     * Gets resource_file_id
     *
     * @return int
     */
    public function getResourceFileId()
    {
        return $this->container['resource_file_id'];
    }

    /**
     * Sets resource_file_id
     *
     * @param int $resource_file_id resourceFileId
     *
     * @return $this
     */
    public function setResourceFileId($resource_file_id)
    {
        $this->container['resource_file_id'] = $resource_file_id;

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
     * Gets attachment_upload_request
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\ResourceFileUploadRequestModel
     */
    public function getAttachmentUploadRequest()
    {
        return $this->container['attachment_upload_request'];
    }

    /**
     * Sets attachment_upload_request
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\ResourceFileUploadRequestModel $attachment_upload_request An attachment to the detail
     *
     * @return $this
     */
    public function setAttachmentUploadRequest($attachment_upload_request)
    {
        $this->container['attachment_upload_request'] = $attachment_upload_request;

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


