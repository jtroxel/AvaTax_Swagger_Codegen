<?php
/**
 * NotificationModel
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
 * NotificationModel Class Doc Comment
 *
 * @category Class
 * @description Represents a single notification.                A notification is a message from Avalara that may have relevance to your business.  You may want  to regularly review notifications and then dismiss them when you are certain that you have addressed  any relevant concerns raised by this notification.                An example of a notification would be a message about new software, or a change to AvaTax that may  affect you, or a potential issue with your company&#39;s tax profile.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'account_id' => 'int',
        'company_id' => 'int',
        'reference_object' => 'string',
        'reference_id' => 'int',
        'severity_level_id' => 'string',
        'category' => 'string',
        'topic' => 'string',
        'message' => 'string',
        'needs_action' => 'bool',
        'action_name' => 'string',
        'action_link' => 'string',
        'action_due_date' => '\DateTime',
        'dismissed' => 'bool',
        'dismissed_by_user_id' => 'int',
        'dismissed_date' => '\DateTime',
        'expire_date' => '\DateTime',
        'created_user_id' => 'int',
        'created_date' => '\DateTime',
        'modified_user_id' => 'int',
        'modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'account_id' => 'int32',
        'company_id' => 'int32',
        'reference_object' => null,
        'reference_id' => 'int64',
        'severity_level_id' => null,
        'category' => null,
        'topic' => null,
        'message' => null,
        'needs_action' => null,
        'action_name' => null,
        'action_link' => null,
        'action_due_date' => 'date-time',
        'dismissed' => null,
        'dismissed_by_user_id' => 'int32',
        'dismissed_date' => 'date-time',
        'expire_date' => 'date-time',
        'created_user_id' => 'int32',
        'created_date' => 'date-time',
        'modified_user_id' => 'int32',
        'modified_date' => 'date-time'
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
        'company_id' => 'companyId',
        'reference_object' => 'referenceObject',
        'reference_id' => 'referenceId',
        'severity_level_id' => 'severityLevelId',
        'category' => 'category',
        'topic' => 'topic',
        'message' => 'message',
        'needs_action' => 'needsAction',
        'action_name' => 'actionName',
        'action_link' => 'actionLink',
        'action_due_date' => 'actionDueDate',
        'dismissed' => 'dismissed',
        'dismissed_by_user_id' => 'dismissedByUserId',
        'dismissed_date' => 'dismissedDate',
        'expire_date' => 'expireDate',
        'created_user_id' => 'createdUserId',
        'created_date' => 'createdDate',
        'modified_user_id' => 'modifiedUserId',
        'modified_date' => 'modifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_id' => 'setAccountId',
        'company_id' => 'setCompanyId',
        'reference_object' => 'setReferenceObject',
        'reference_id' => 'setReferenceId',
        'severity_level_id' => 'setSeverityLevelId',
        'category' => 'setCategory',
        'topic' => 'setTopic',
        'message' => 'setMessage',
        'needs_action' => 'setNeedsAction',
        'action_name' => 'setActionName',
        'action_link' => 'setActionLink',
        'action_due_date' => 'setActionDueDate',
        'dismissed' => 'setDismissed',
        'dismissed_by_user_id' => 'setDismissedByUserId',
        'dismissed_date' => 'setDismissedDate',
        'expire_date' => 'setExpireDate',
        'created_user_id' => 'setCreatedUserId',
        'created_date' => 'setCreatedDate',
        'modified_user_id' => 'setModifiedUserId',
        'modified_date' => 'setModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_id' => 'getAccountId',
        'company_id' => 'getCompanyId',
        'reference_object' => 'getReferenceObject',
        'reference_id' => 'getReferenceId',
        'severity_level_id' => 'getSeverityLevelId',
        'category' => 'getCategory',
        'topic' => 'getTopic',
        'message' => 'getMessage',
        'needs_action' => 'getNeedsAction',
        'action_name' => 'getActionName',
        'action_link' => 'getActionLink',
        'action_due_date' => 'getActionDueDate',
        'dismissed' => 'getDismissed',
        'dismissed_by_user_id' => 'getDismissedByUserId',
        'dismissed_date' => 'getDismissedDate',
        'expire_date' => 'getExpireDate',
        'created_user_id' => 'getCreatedUserId',
        'created_date' => 'getCreatedDate',
        'modified_user_id' => 'getModifiedUserId',
        'modified_date' => 'getModifiedDate'
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

    const SEVERITY_LEVEL_ID_NEUTRAL = 'Neutral';
    const SEVERITY_LEVEL_ID_ADVISORY = 'Advisory';
    const SEVERITY_LEVEL_ID_BLOCKING = 'Blocking';
    const SEVERITY_LEVEL_ID_COMPLETE = 'Complete';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityLevelIdAllowableValues()
    {
        return [
            self::SEVERITY_LEVEL_ID_NEUTRAL,
            self::SEVERITY_LEVEL_ID_ADVISORY,
            self::SEVERITY_LEVEL_ID_BLOCKING,
            self::SEVERITY_LEVEL_ID_COMPLETE,
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['reference_object'] = isset($data['reference_object']) ? $data['reference_object'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['severity_level_id'] = isset($data['severity_level_id']) ? $data['severity_level_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['needs_action'] = isset($data['needs_action']) ? $data['needs_action'] : null;
        $this->container['action_name'] = isset($data['action_name']) ? $data['action_name'] : null;
        $this->container['action_link'] = isset($data['action_link']) ? $data['action_link'] : null;
        $this->container['action_due_date'] = isset($data['action_due_date']) ? $data['action_due_date'] : null;
        $this->container['dismissed'] = isset($data['dismissed']) ? $data['dismissed'] : null;
        $this->container['dismissed_by_user_id'] = isset($data['dismissed_by_user_id']) ? $data['dismissed_by_user_id'] : null;
        $this->container['dismissed_date'] = isset($data['dismissed_date']) ? $data['dismissed_date'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['created_user_id'] = isset($data['created_user_id']) ? $data['created_user_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['modified_user_id'] = isset($data['modified_user_id']) ? $data['modified_user_id'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['reference_object']) && (mb_strlen($this->container['reference_object']) > 20)) {
            $invalidProperties[] = "invalid value for 'reference_object', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['reference_object']) && (mb_strlen($this->container['reference_object']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference_object', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['severity_level_id'] === null) {
            $invalidProperties[] = "'severity_level_id' can't be null";
        }
        $allowedValues = $this->getSeverityLevelIdAllowableValues();
        if (!is_null($this->container['severity_level_id']) && !in_array($this->container['severity_level_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'severity_level_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 50)) {
            $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
            $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 250)) {
            $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) < 0)) {
            $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if (!is_null($this->container['action_name']) && (mb_strlen($this->container['action_name']) > 250)) {
            $invalidProperties[] = "invalid value for 'action_name', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['action_name']) && (mb_strlen($this->container['action_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'action_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['action_link']) && (mb_strlen($this->container['action_link']) > 250)) {
            $invalidProperties[] = "invalid value for 'action_link', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['action_link']) && (mb_strlen($this->container['action_link']) < 0)) {
            $invalidProperties[] = "invalid value for 'action_link', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['expire_date'] === null) {
            $invalidProperties[] = "'expire_date' can't be null";
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
     * @param int $id The unique id of the notification.
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
     * @param int $account_id The unique ID number of the account that received this notification.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param int $company_id If this notification was tied to a specific company, this will be the  unique ID number of the company that received the notification.  Notifications that  are tied to accounts will have a `NULL` value for `companyId`.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets reference_object
     *
     * @return string
     */
    public function getReferenceObject()
    {
        return $this->container['reference_object'];
    }

    /**
     * Sets reference_object
     *
     * @param string $reference_object The type name of object referred to by this notification, if any.                Some notifications may include information about a related data object.                For example, if this notification was related to a nexus declaration, the `referenceObject` field would  be  `Nexus` and the `referenceId` field would be the unique ID number of that nexus.
     *
     * @return $this
     */
    public function setReferenceObject($reference_object)
    {
        if (!is_null($reference_object) && (mb_strlen($reference_object) > 20)) {
            throw new \InvalidArgumentException('invalid length for $reference_object when calling NotificationModel., must be smaller than or equal to 20.');
        }
        if (!is_null($reference_object) && (mb_strlen($reference_object) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference_object when calling NotificationModel., must be bigger than or equal to 0.');
        }

        $this->container['reference_object'] = $reference_object;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return int
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param int $reference_id The unique reference Id number of the object referred to by this notification, if any.                Some notifications may include information about a related data object.                For example, if this notification was related to a nexus declaration, the `referenceObject` field would  be  `Nexus` and the `referenceId` field would be the unique ID number of that nexus.
     *
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets severity_level_id
     *
     * @return string
     */
    public function getSeverityLevelId()
    {
        return $this->container['severity_level_id'];
    }

    /**
     * Sets severity_level_id
     *
     * @param string $severity_level_id The severity level of the notification.
     *
     * @return $this
     */
    public function setSeverityLevelId($severity_level_id)
    {
        $allowedValues = $this->getSeverityLevelIdAllowableValues();
        if (!in_array($severity_level_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'severity_level_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['severity_level_id'] = $severity_level_id;

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
     * @param string $category The category of this notification.                Notification categories are a useful way to group related notifications together. Category names may change  over time.                For Example: \"Backdated Transactions\" or \"Nexus Jurisdiction Alerts\", or \"Certificate Expiration\".
     *
     * @return $this
     */
    public function setCategory($category)
    {
        if (!is_null($category) && (mb_strlen($category) > 50)) {
            throw new \InvalidArgumentException('invalid length for $category when calling NotificationModel., must be smaller than or equal to 50.');
        }
        if (!is_null($category) && (mb_strlen($category) < 0)) {
            throw new \InvalidArgumentException('invalid length for $category when calling NotificationModel., must be bigger than or equal to 0.');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string $topic The topic of this notification.                Notification topics contain information about the notification.  They are a summary of the issue and can  help you decide what type of action to take.                For Example: \"Backdated Transactions\" or \"Nexus Jurisdiction Alerts\", or \"Certificate Expiration\".
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        if (!is_null($topic) && (mb_strlen($topic) > 250)) {
            throw new \InvalidArgumentException('invalid length for $topic when calling NotificationModel., must be smaller than or equal to 250.');
        }
        if (!is_null($topic) && (mb_strlen($topic) < 0)) {
            throw new \InvalidArgumentException('invalid length for $topic when calling NotificationModel., must be bigger than or equal to 0.');
        }

        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The message for this notification.  This is a friendly description of the notification and any relevant  information that can help you decide what kind of action, if any, to take in response.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets needs_action
     *
     * @return bool
     */
    public function getNeedsAction()
    {
        return $this->container['needs_action'];
    }

    /**
     * Sets needs_action
     *
     * @param bool $needs_action If this notification object requires user action to resolve, this value will be set to true.
     *
     * @return $this
     */
    public function setNeedsAction($needs_action)
    {
        $this->container['needs_action'] = $needs_action;

        return $this;
    }

    /**
     * Gets action_name
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->container['action_name'];
    }

    /**
     * Sets action_name
     *
     * @param string $action_name If there is a specific action suggested by this notification, this is the name of the action.                An action is a suggested next step such as \"Review Your Tax Profile.\"  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by `actionLink` and give the  hyperlink the name `actionName`.
     *
     * @return $this
     */
    public function setActionName($action_name)
    {
        if (!is_null($action_name) && (mb_strlen($action_name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $action_name when calling NotificationModel., must be smaller than or equal to 250.');
        }
        if (!is_null($action_name) && (mb_strlen($action_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $action_name when calling NotificationModel., must be bigger than or equal to 0.');
        }

        $this->container['action_name'] = $action_name;

        return $this;
    }

    /**
     * Gets action_link
     *
     * @return string
     */
    public function getActionLink()
    {
        return $this->container['action_link'];
    }

    /**
     * Sets action_link
     *
     * @param string $action_link If there is a specific action suggested by this notification, this is the URL of the action.                An action is a suggested next step such as \"Review Your Tax Profile.\"  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by `actionLink` and give the  hyperlink the name `actionName`.
     *
     * @return $this
     */
    public function setActionLink($action_link)
    {
        if (!is_null($action_link) && (mb_strlen($action_link) > 250)) {
            throw new \InvalidArgumentException('invalid length for $action_link when calling NotificationModel., must be smaller than or equal to 250.');
        }
        if (!is_null($action_link) && (mb_strlen($action_link) < 0)) {
            throw new \InvalidArgumentException('invalid length for $action_link when calling NotificationModel., must be bigger than or equal to 0.');
        }

        $this->container['action_link'] = $action_link;

        return $this;
    }

    /**
     * Gets action_due_date
     *
     * @return \DateTime
     */
    public function getActionDueDate()
    {
        return $this->container['action_due_date'];
    }

    /**
     * Sets action_due_date
     *
     * @param \DateTime $action_due_date If there is a specific action suggested by this notification, and if this action is requested  by a specific due date, this value will be the due date for the action.                An action is a suggested next step such as \"Review Your Tax Profile.\"  If an action is suggested,  you should give the viewer a hyperlink to the location referred to by `actionLink` and give the  hyperlink the name `actionName`.                For actions that have deadlines, such as \"Confirm your tax registration before filing\", this value  will be set to the deadline date for the action.  Otherwise, this value will be null.
     *
     * @return $this
     */
    public function setActionDueDate($action_due_date)
    {
        $this->container['action_due_date'] = $action_due_date;

        return $this;
    }

    /**
     * Gets dismissed
     *
     * @return bool
     */
    public function getDismissed()
    {
        return $this->container['dismissed'];
    }

    /**
     * Sets dismissed
     *
     * @param bool $dismissed When a user has finished reviewing a notification, they may opt to dismiss it by calling the  `DismissNotification` API.  This API marks the notification as dismissed, and dismissed notifications  will generally not appear in most user interfaces.
     *
     * @return $this
     */
    public function setDismissed($dismissed)
    {
        $this->container['dismissed'] = $dismissed;

        return $this;
    }

    /**
     * Gets dismissed_by_user_id
     *
     * @return int
     */
    public function getDismissedByUserId()
    {
        return $this->container['dismissed_by_user_id'];
    }

    /**
     * Sets dismissed_by_user_id
     *
     * @param int $dismissed_by_user_id If this notification has been dismissed, this indicates the unique ID number of the user that  dismissed the notification.
     *
     * @return $this
     */
    public function setDismissedByUserId($dismissed_by_user_id)
    {
        $this->container['dismissed_by_user_id'] = $dismissed_by_user_id;

        return $this;
    }

    /**
     * Gets dismissed_date
     *
     * @return \DateTime
     */
    public function getDismissedDate()
    {
        return $this->container['dismissed_date'];
    }

    /**
     * Sets dismissed_date
     *
     * @param \DateTime $dismissed_date If this notification has been dismissed, this indicates the timestamp (in UTC time) when the user  dismissed the notification.
     *
     * @return $this
     */
    public function setDismissedDate($dismissed_date)
    {
        $this->container['dismissed_date'] = $dismissed_date;

        return $this;
    }

    /**
     * Gets expire_date
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     *
     * @param \DateTime $expire_date If this notification is time sensitive, this is the latest date when the notification should be  displayed to the user.
     *
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

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
     * @param int $created_user_id The unique ID number of the user who created the notification.
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
     * @param \DateTime $created_date The UTC timestamp of the time when this notification was created.
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
     * @param int $modified_user_id The unique ID number of the user who most recently modified this notification.
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
     * @param \DateTime $modified_date The UTC timestamp of the time when this notification was last modified.
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

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

