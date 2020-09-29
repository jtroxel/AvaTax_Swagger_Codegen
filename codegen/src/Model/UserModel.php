<?php
/**
 * UserModel
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
 * UserModel Class Doc Comment
 *
 * @category Class
 * @description An account user who is permitted to use AvaTax.
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'account_id' => 'int',
        'company_id' => 'int',
        'user_name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'postal_code' => 'string',
        'security_role_id' => 'string',
        'password_status' => 'string',
        'is_active' => 'bool',
        'created_date' => '\DateTime',
        'modified_date' => '\DateTime',
        'subject_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'account_id' => 'int32',
        'company_id' => 'int32',
        'user_name' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'postal_code' => null,
        'security_role_id' => null,
        'password_status' => null,
        'is_active' => null,
        'created_date' => 'date-time',
        'modified_date' => 'date-time',
        'subject_id' => null
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
        'user_name' => 'userName',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'postal_code' => 'postalCode',
        'security_role_id' => 'securityRoleId',
        'password_status' => 'passwordStatus',
        'is_active' => 'isActive',
        'created_date' => 'createdDate',
        'modified_date' => 'modifiedDate',
        'subject_id' => 'subjectId'
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
        'user_name' => 'setUserName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'postal_code' => 'setPostalCode',
        'security_role_id' => 'setSecurityRoleId',
        'password_status' => 'setPasswordStatus',
        'is_active' => 'setIsActive',
        'created_date' => 'setCreatedDate',
        'modified_date' => 'setModifiedDate',
        'subject_id' => 'setSubjectId'
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
        'user_name' => 'getUserName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'postal_code' => 'getPostalCode',
        'security_role_id' => 'getSecurityRoleId',
        'password_status' => 'getPasswordStatus',
        'is_active' => 'getIsActive',
        'created_date' => 'getCreatedDate',
        'modified_date' => 'getModifiedDate',
        'subject_id' => 'getSubjectId'
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

    const SECURITY_ROLE_ID_NO_ACCESS = 'NoAccess';
    const SECURITY_ROLE_ID_SITE_ADMIN = 'SiteAdmin';
    const SECURITY_ROLE_ID_ACCOUNT_OPERATOR = 'AccountOperator';
    const SECURITY_ROLE_ID_ACCOUNT_ADMIN = 'AccountAdmin';
    const SECURITY_ROLE_ID_ACCOUNT_USER = 'AccountUser';
    const SECURITY_ROLE_ID_SYSTEM_ADMIN = 'SystemAdmin';
    const SECURITY_ROLE_ID_REGISTRAR = 'Registrar';
    const SECURITY_ROLE_ID_CSP_TESTER = 'CSPTester';
    const SECURITY_ROLE_ID_CSP_ADMIN = 'CSPAdmin';
    const SECURITY_ROLE_ID_SYSTEM_OPERATOR = 'SystemOperator';
    const SECURITY_ROLE_ID_TECHNICAL_SUPPORT_USER = 'TechnicalSupportUser';
    const SECURITY_ROLE_ID_TECHNICAL_SUPPORT_ADMIN = 'TechnicalSupportAdmin';
    const SECURITY_ROLE_ID_TREASURY_USER = 'TreasuryUser';
    const SECURITY_ROLE_ID_TREASURY_ADMIN = 'TreasuryAdmin';
    const SECURITY_ROLE_ID_COMPLIANCE_USER = 'ComplianceUser';
    const SECURITY_ROLE_ID_COMPLIANCE_ADMIN = 'ComplianceAdmin';
    const SECURITY_ROLE_ID_PRO_STORES_OPERATOR = 'ProStoresOperator';
    const SECURITY_ROLE_ID_COMPANY_USER = 'CompanyUser';
    const SECURITY_ROLE_ID_COMPANY_ADMIN = 'CompanyAdmin';
    const SECURITY_ROLE_ID_COMPLIANCE_TEMP_USER = 'ComplianceTempUser';
    const SECURITY_ROLE_ID_COMPLIANCE_ROOT_USER = 'ComplianceRootUser';
    const SECURITY_ROLE_ID_COMPLIANCE_OPERATOR = 'ComplianceOperator';
    const SECURITY_ROLE_ID_SST_ADMIN = 'SSTAdmin';
    const SECURITY_ROLE_ID_FIRM_USER = 'FirmUser';
    const SECURITY_ROLE_ID_FIRM_ADMIN = 'FirmAdmin';
    const PASSWORD_STATUS_USER_CANNOT_CHANGE = 'UserCannotChange';
    const PASSWORD_STATUS_USER_CAN_CHANGE = 'UserCanChange';
    const PASSWORD_STATUS_USER_MUST_CHANGE = 'UserMustChange';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityRoleIdAllowableValues()
    {
        return [
            self::SECURITY_ROLE_ID_NO_ACCESS,
            self::SECURITY_ROLE_ID_SITE_ADMIN,
            self::SECURITY_ROLE_ID_ACCOUNT_OPERATOR,
            self::SECURITY_ROLE_ID_ACCOUNT_ADMIN,
            self::SECURITY_ROLE_ID_ACCOUNT_USER,
            self::SECURITY_ROLE_ID_SYSTEM_ADMIN,
            self::SECURITY_ROLE_ID_REGISTRAR,
            self::SECURITY_ROLE_ID_CSP_TESTER,
            self::SECURITY_ROLE_ID_CSP_ADMIN,
            self::SECURITY_ROLE_ID_SYSTEM_OPERATOR,
            self::SECURITY_ROLE_ID_TECHNICAL_SUPPORT_USER,
            self::SECURITY_ROLE_ID_TECHNICAL_SUPPORT_ADMIN,
            self::SECURITY_ROLE_ID_TREASURY_USER,
            self::SECURITY_ROLE_ID_TREASURY_ADMIN,
            self::SECURITY_ROLE_ID_COMPLIANCE_USER,
            self::SECURITY_ROLE_ID_COMPLIANCE_ADMIN,
            self::SECURITY_ROLE_ID_PRO_STORES_OPERATOR,
            self::SECURITY_ROLE_ID_COMPANY_USER,
            self::SECURITY_ROLE_ID_COMPANY_ADMIN,
            self::SECURITY_ROLE_ID_COMPLIANCE_TEMP_USER,
            self::SECURITY_ROLE_ID_COMPLIANCE_ROOT_USER,
            self::SECURITY_ROLE_ID_COMPLIANCE_OPERATOR,
            self::SECURITY_ROLE_ID_SST_ADMIN,
            self::SECURITY_ROLE_ID_FIRM_USER,
            self::SECURITY_ROLE_ID_FIRM_ADMIN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPasswordStatusAllowableValues()
    {
        return [
            self::PASSWORD_STATUS_USER_CANNOT_CHANGE,
            self::PASSWORD_STATUS_USER_CAN_CHANGE,
            self::PASSWORD_STATUS_USER_MUST_CHANGE,
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
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['security_role_id'] = isset($data['security_role_id']) ? $data['security_role_id'] : null;
        $this->container['password_status'] = isset($data['password_status']) ? $data['password_status'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['subject_id'] = isset($data['subject_id']) ? $data['subject_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ((mb_strlen($this->container['user_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['user_name']) < 5)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['first_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ((mb_strlen($this->container['last_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['last_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 50)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['security_role_id'] === null) {
            $invalidProperties[] = "'security_role_id' can't be null";
        }
        $allowedValues = $this->getSecurityRoleIdAllowableValues();
        if (!is_null($this->container['security_role_id']) && !in_array($this->container['security_role_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'security_role_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPasswordStatusAllowableValues();
        if (!is_null($this->container['password_status']) && !in_array($this->container['password_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'password_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['subject_id']) && (mb_strlen($this->container['subject_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'subject_id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['subject_id']) && (mb_strlen($this->container['subject_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject_id', the character length must be bigger than or equal to 0.";
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
     * @param int $id The unique ID number of this user.
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
     * @param int $account_id The unique ID number of the account to which this user belongs.
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
     * @param int $company_id If this user is locked to one company (and its children), this is the unique ID number of the company to which this user belongs.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name The username which is used to log on to the AvaTax website, or to authenticate against API calls.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        if ((mb_strlen($user_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling UserModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($user_name) < 5)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling UserModel., must be bigger than or equal to 5.');
        }

        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The first or given name of the user.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling UserModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($first_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling UserModel., must be bigger than or equal to 0.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name The last or family name of the user.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if ((mb_strlen($last_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling UserModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($last_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling UserModel., must be bigger than or equal to 0.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address to be used to contact this user.  If the user has forgotten a password, an email can be sent to this email address with information on how to reset this password.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 50)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UserModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UserModel., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code in which this user resides.
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling UserModel., must be smaller than or equal to 10.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling UserModel., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets security_role_id
     *
     * @return string
     */
    public function getSecurityRoleId()
    {
        return $this->container['security_role_id'];
    }

    /**
     * Sets security_role_id
     *
     * @param string $security_role_id The security level for this user.
     *
     * @return $this
     */
    public function setSecurityRoleId($security_role_id)
    {
        $allowedValues = $this->getSecurityRoleIdAllowableValues();
        if (!in_array($security_role_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'security_role_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['security_role_id'] = $security_role_id;

        return $this;
    }

    /**
     * Gets password_status
     *
     * @return string
     */
    public function getPasswordStatus()
    {
        return $this->container['password_status'];
    }

    /**
     * Sets password_status
     *
     * @param string $password_status The status of the user's password. For a new user created, this is always going to be `UserMustChange`
     *
     * @return $this
     */
    public function setPasswordStatus($password_status)
    {
        $allowedValues = $this->getPasswordStatusAllowableValues();
        if (!is_null($password_status) && !in_array($password_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'password_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['password_status'] = $password_status;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active True if this user is currently active.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * Gets subject_id
     *
     * @return string
     */
    public function getSubjectId()
    {
        return $this->container['subject_id'];
    }

    /**
     * Sets subject_id
     *
     * @param string $subject_id Matches the subjectId of corresponding user record in AI.
     *
     * @return $this
     */
    public function setSubjectId($subject_id)
    {
        if (!is_null($subject_id) && (mb_strlen($subject_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $subject_id when calling UserModel., must be smaller than or equal to 32.');
        }
        if (!is_null($subject_id) && (mb_strlen($subject_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject_id when calling UserModel., must be bigger than or equal to 0.');
        }

        $this->container['subject_id'] = $subject_id;

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

