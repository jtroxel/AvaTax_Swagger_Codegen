<?php
/**
 * FundingStatusModel
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
 * FundingStatusModel Class Doc Comment
 *
 * @category Class
 * @description Status of an Avalara Managed Returns funding configuration for a company
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FundingStatusModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FundingStatusModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_id' => 'int',
        'subledger_profile_id' => 'int',
        'company_id' => 'string',
        'domain' => 'string',
        'recipient' => 'string',
        'sender' => 'string',
        'document_key' => 'string',
        'document_type' => 'string',
        'document_name' => 'string',
        'method_return' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\FundingESignMethodReturn',
        'status' => 'string',
        'error_message' => 'string',
        'last_polled' => '\DateTime',
        'last_signed' => '\DateTime',
        'last_activated' => '\DateTime',
        'template_request_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_id' => 'int64',
        'subledger_profile_id' => 'int32',
        'company_id' => null,
        'domain' => null,
        'recipient' => null,
        'sender' => null,
        'document_key' => null,
        'document_type' => null,
        'document_name' => null,
        'method_return' => null,
        'status' => null,
        'error_message' => null,
        'last_polled' => 'date-time',
        'last_signed' => 'date-time',
        'last_activated' => 'date-time',
        'template_request_id' => 'int64'
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
        'request_id' => 'requestId',
        'subledger_profile_id' => 'subledgerProfileID',
        'company_id' => 'companyID',
        'domain' => 'domain',
        'recipient' => 'recipient',
        'sender' => 'sender',
        'document_key' => 'documentKey',
        'document_type' => 'documentType',
        'document_name' => 'documentName',
        'method_return' => 'methodReturn',
        'status' => 'status',
        'error_message' => 'errorMessage',
        'last_polled' => 'lastPolled',
        'last_signed' => 'lastSigned',
        'last_activated' => 'lastActivated',
        'template_request_id' => 'templateRequestId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
        'subledger_profile_id' => 'setSubledgerProfileId',
        'company_id' => 'setCompanyId',
        'domain' => 'setDomain',
        'recipient' => 'setRecipient',
        'sender' => 'setSender',
        'document_key' => 'setDocumentKey',
        'document_type' => 'setDocumentType',
        'document_name' => 'setDocumentName',
        'method_return' => 'setMethodReturn',
        'status' => 'setStatus',
        'error_message' => 'setErrorMessage',
        'last_polled' => 'setLastPolled',
        'last_signed' => 'setLastSigned',
        'last_activated' => 'setLastActivated',
        'template_request_id' => 'setTemplateRequestId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
        'subledger_profile_id' => 'getSubledgerProfileId',
        'company_id' => 'getCompanyId',
        'domain' => 'getDomain',
        'recipient' => 'getRecipient',
        'sender' => 'getSender',
        'document_key' => 'getDocumentKey',
        'document_type' => 'getDocumentType',
        'document_name' => 'getDocumentName',
        'method_return' => 'getMethodReturn',
        'status' => 'getStatus',
        'error_message' => 'getErrorMessage',
        'last_polled' => 'getLastPolled',
        'last_signed' => 'getLastSigned',
        'last_activated' => 'getLastActivated',
        'template_request_id' => 'getTemplateRequestId'
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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['subledger_profile_id'] = isset($data['subledger_profile_id']) ? $data['subledger_profile_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['document_key'] = isset($data['document_key']) ? $data['document_key'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_name'] = isset($data['document_name']) ? $data['document_name'] : null;
        $this->container['method_return'] = isset($data['method_return']) ? $data['method_return'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['last_polled'] = isset($data['last_polled']) ? $data['last_polled'] : null;
        $this->container['last_signed'] = isset($data['last_signed']) ? $data['last_signed'] : null;
        $this->container['last_activated'] = isset($data['last_activated']) ? $data['last_activated'] : null;
        $this->container['template_request_id'] = isset($data['template_request_id']) ? $data['template_request_id'] : null;
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
     * Gets request_id
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param int $request_id The unique ID number of this funding request
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets subledger_profile_id
     *
     * @return int
     */
    public function getSubledgerProfileId()
    {
        return $this->container['subledger_profile_id'];
    }

    /**
     * Sets subledger_profile_id
     *
     * @param int $subledger_profile_id SubledgerProfileID
     *
     * @return $this
     */
    public function setSubledgerProfileId($subledger_profile_id)
    {
        $this->container['subledger_profile_id'] = $subledger_profile_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id CompanyID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Sender
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets document_key
     *
     * @return string
     */
    public function getDocumentKey()
    {
        return $this->container['document_key'];
    }

    /**
     * Sets document_key
     *
     * @param string $document_key DocumentKey
     *
     * @return $this
     */
    public function setDocumentKey($document_key)
    {
        $this->container['document_key'] = $document_key;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type DocumentType
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_name
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->container['document_name'];
    }

    /**
     * Sets document_name
     *
     * @param string $document_name DocumentName
     *
     * @return $this
     */
    public function setDocumentName($document_name)
    {
        $this->container['document_name'] = $document_name;

        return $this;
    }

    /**
     * Gets method_return
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\FundingESignMethodReturn
     */
    public function getMethodReturn()
    {
        return $this->container['method_return'];
    }

    /**
     * Sets method_return
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\FundingESignMethodReturn $method_return MethodReturn
     *
     * @return $this
     */
    public function setMethodReturn($method_return)
    {
        $this->container['method_return'] = $method_return;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message ErrorMessage
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets last_polled
     *
     * @return \DateTime
     */
    public function getLastPolled()
    {
        return $this->container['last_polled'];
    }

    /**
     * Sets last_polled
     *
     * @param \DateTime $last_polled LastPolled
     *
     * @return $this
     */
    public function setLastPolled($last_polled)
    {
        $this->container['last_polled'] = $last_polled;

        return $this;
    }

    /**
     * Gets last_signed
     *
     * @return \DateTime
     */
    public function getLastSigned()
    {
        return $this->container['last_signed'];
    }

    /**
     * Sets last_signed
     *
     * @param \DateTime $last_signed LastSigned
     *
     * @return $this
     */
    public function setLastSigned($last_signed)
    {
        $this->container['last_signed'] = $last_signed;

        return $this;
    }

    /**
     * Gets last_activated
     *
     * @return \DateTime
     */
    public function getLastActivated()
    {
        return $this->container['last_activated'];
    }

    /**
     * Sets last_activated
     *
     * @param \DateTime $last_activated LastActivated
     *
     * @return $this
     */
    public function setLastActivated($last_activated)
    {
        $this->container['last_activated'] = $last_activated;

        return $this;
    }

    /**
     * Gets template_request_id
     *
     * @return int
     */
    public function getTemplateRequestId()
    {
        return $this->container['template_request_id'];
    }

    /**
     * Sets template_request_id
     *
     * @param int $template_request_id TemplateRequestId
     *
     * @return $this
     */
    public function setTemplateRequestId($template_request_id)
    {
        $this->container['template_request_id'] = $template_request_id;

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


