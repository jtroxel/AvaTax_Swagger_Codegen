<?php
/**
 * NoticeFinanceModel
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
 * NoticeFinanceModel Class Doc Comment
 *
 * @category Class
 * @description Represents estimated financial results from responding to a tax notice.
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoticeFinanceModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoticeFinanceModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'notice_id' => 'int',
        'notice_date' => '\DateTime',
        'due_date' => '\DateTime',
        'notice_number' => 'string',
        'tax_due' => 'double',
        'penalty' => 'double',
        'interest' => 'double',
        'credits' => 'double',
        'tax_abated' => 'double',
        'customer_penalty' => 'double',
        'customer_interest' => 'double',
        'csp_fee_refund' => 'double',
        'file_name' => 'string',
        'resource_file_id' => 'int',
        'created_date' => '\DateTime',
        'created_user_id' => 'int',
        'modified_date' => '\DateTime',
        'modified_user_id' => 'int',
        'attachment_upload_request' => '\Together\Taxes\Model\ResourceFileUploadRequestModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'notice_id' => 'int32',
        'notice_date' => 'date-time',
        'due_date' => 'date-time',
        'notice_number' => null,
        'tax_due' => 'double',
        'penalty' => 'double',
        'interest' => 'double',
        'credits' => 'double',
        'tax_abated' => 'double',
        'customer_penalty' => 'double',
        'customer_interest' => 'double',
        'csp_fee_refund' => 'double',
        'file_name' => null,
        'resource_file_id' => 'int64',
        'created_date' => 'date-time',
        'created_user_id' => 'int32',
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
        'notice_date' => 'noticeDate',
        'due_date' => 'dueDate',
        'notice_number' => 'noticeNumber',
        'tax_due' => 'taxDue',
        'penalty' => 'penalty',
        'interest' => 'interest',
        'credits' => 'credits',
        'tax_abated' => 'taxAbated',
        'customer_penalty' => 'customerPenalty',
        'customer_interest' => 'customerInterest',
        'csp_fee_refund' => 'cspFeeRefund',
        'file_name' => 'fileName',
        'resource_file_id' => 'resourceFileId',
        'created_date' => 'createdDate',
        'created_user_id' => 'createdUserId',
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
        'notice_date' => 'setNoticeDate',
        'due_date' => 'setDueDate',
        'notice_number' => 'setNoticeNumber',
        'tax_due' => 'setTaxDue',
        'penalty' => 'setPenalty',
        'interest' => 'setInterest',
        'credits' => 'setCredits',
        'tax_abated' => 'setTaxAbated',
        'customer_penalty' => 'setCustomerPenalty',
        'customer_interest' => 'setCustomerInterest',
        'csp_fee_refund' => 'setCspFeeRefund',
        'file_name' => 'setFileName',
        'resource_file_id' => 'setResourceFileId',
        'created_date' => 'setCreatedDate',
        'created_user_id' => 'setCreatedUserId',
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
        'notice_date' => 'getNoticeDate',
        'due_date' => 'getDueDate',
        'notice_number' => 'getNoticeNumber',
        'tax_due' => 'getTaxDue',
        'penalty' => 'getPenalty',
        'interest' => 'getInterest',
        'credits' => 'getCredits',
        'tax_abated' => 'getTaxAbated',
        'customer_penalty' => 'getCustomerPenalty',
        'customer_interest' => 'getCustomerInterest',
        'csp_fee_refund' => 'getCspFeeRefund',
        'file_name' => 'getFileName',
        'resource_file_id' => 'getResourceFileId',
        'created_date' => 'getCreatedDate',
        'created_user_id' => 'getCreatedUserId',
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
        $this->container['notice_date'] = isset($data['notice_date']) ? $data['notice_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['notice_number'] = isset($data['notice_number']) ? $data['notice_number'] : null;
        $this->container['tax_due'] = isset($data['tax_due']) ? $data['tax_due'] : null;
        $this->container['penalty'] = isset($data['penalty']) ? $data['penalty'] : null;
        $this->container['interest'] = isset($data['interest']) ? $data['interest'] : null;
        $this->container['credits'] = isset($data['credits']) ? $data['credits'] : null;
        $this->container['tax_abated'] = isset($data['tax_abated']) ? $data['tax_abated'] : null;
        $this->container['customer_penalty'] = isset($data['customer_penalty']) ? $data['customer_penalty'] : null;
        $this->container['customer_interest'] = isset($data['customer_interest']) ? $data['customer_interest'] : null;
        $this->container['csp_fee_refund'] = isset($data['csp_fee_refund']) ? $data['csp_fee_refund'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['resource_file_id'] = isset($data['resource_file_id']) ? $data['resource_file_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_user_id'] = isset($data['created_user_id']) ? $data['created_user_id'] : null;
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
     * @param int $id The Unique Id of the Finance Model
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
     * @param int $notice_id The unique ID of the the tax notice associated with the the finance detail
     *
     * @return $this
     */
    public function setNoticeId($notice_id)
    {
        $this->container['notice_id'] = $notice_id;

        return $this;
    }

    /**
     * Gets notice_date
     *
     * @return \DateTime
     */
    public function getNoticeDate()
    {
        return $this->container['notice_date'];
    }

    /**
     * Sets notice_date
     *
     * @param \DateTime $notice_date The date of the notice
     *
     * @return $this
     */
    public function setNoticeDate($notice_date)
    {
        $this->container['notice_date'] = $notice_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date The due date of the notice
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets notice_number
     *
     * @return string
     */
    public function getNoticeNumber()
    {
        return $this->container['notice_number'];
    }

    /**
     * Sets notice_number
     *
     * @param string $notice_number The sequential number of the notice
     *
     * @return $this
     */
    public function setNoticeNumber($notice_number)
    {
        $this->container['notice_number'] = $notice_number;

        return $this;
    }

    /**
     * Gets tax_due
     *
     * @return double
     */
    public function getTaxDue()
    {
        return $this->container['tax_due'];
    }

    /**
     * Sets tax_due
     *
     * @param double $tax_due The amount of tax due on the notice
     *
     * @return $this
     */
    public function setTaxDue($tax_due)
    {
        $this->container['tax_due'] = $tax_due;

        return $this;
    }

    /**
     * Gets penalty
     *
     * @return double
     */
    public function getPenalty()
    {
        return $this->container['penalty'];
    }

    /**
     * Sets penalty
     *
     * @param double $penalty The amound of penalty listed on the notice
     *
     * @return $this
     */
    public function setPenalty($penalty)
    {
        $this->container['penalty'] = $penalty;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return double
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param double $interest The amount of interest listed on the notice
     *
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return double
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param double $credits The amount of credits listed on the notice
     *
     * @return $this
     */
    public function setCredits($credits)
    {
        $this->container['credits'] = $credits;

        return $this;
    }

    /**
     * Gets tax_abated
     *
     * @return double
     */
    public function getTaxAbated()
    {
        return $this->container['tax_abated'];
    }

    /**
     * Sets tax_abated
     *
     * @param double $tax_abated The amount of tax abated on the notice
     *
     * @return $this
     */
    public function setTaxAbated($tax_abated)
    {
        $this->container['tax_abated'] = $tax_abated;

        return $this;
    }

    /**
     * Gets customer_penalty
     *
     * @return double
     */
    public function getCustomerPenalty()
    {
        return $this->container['customer_penalty'];
    }

    /**
     * Sets customer_penalty
     *
     * @param double $customer_penalty The amount of customer penalty on the notice
     *
     * @return $this
     */
    public function setCustomerPenalty($customer_penalty)
    {
        $this->container['customer_penalty'] = $customer_penalty;

        return $this;
    }

    /**
     * Gets customer_interest
     *
     * @return double
     */
    public function getCustomerInterest()
    {
        return $this->container['customer_interest'];
    }

    /**
     * Sets customer_interest
     *
     * @param double $customer_interest The amount of customer interest on the notice
     *
     * @return $this
     */
    public function setCustomerInterest($customer_interest)
    {
        $this->container['customer_interest'] = $customer_interest;

        return $this;
    }

    /**
     * Gets csp_fee_refund
     *
     * @return double
     */
    public function getCspFeeRefund()
    {
        return $this->container['csp_fee_refund'];
    }

    /**
     * Sets csp_fee_refund
     *
     * @param double $csp_fee_refund The amount of CSP Fee Refund on the notice
     *
     * @return $this
     */
    public function setCspFeeRefund($csp_fee_refund)
    {
        $this->container['csp_fee_refund'] = $csp_fee_refund;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name The name of the file attached to the finance detail
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

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
     * @param int $resource_file_id The ResourceFileId of the finance detail attachment
     *
     * @return $this
     */
    public function setResourceFileId($resource_file_id)
    {
        $this->container['resource_file_id'] = $resource_file_id;

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
     * Gets attachment_upload_request
     *
     * @return \Together\Taxes\Model\ResourceFileUploadRequestModel
     */
    public function getAttachmentUploadRequest()
    {
        return $this->container['attachment_upload_request'];
    }

    /**
     * Sets attachment_upload_request
     *
     * @param \Together\Taxes\Model\ResourceFileUploadRequestModel $attachment_upload_request An attachment to the finance detail
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


