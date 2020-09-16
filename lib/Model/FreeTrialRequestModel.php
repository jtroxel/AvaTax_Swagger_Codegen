<?php
/**
 * FreeTrialRequestModel
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
 * FreeTrialRequestModel Class Doc Comment
 *
 * @category Class
 * @description Represents a request for a free trial account for AvaTax.  Free trial accounts are only available on the Sandbox environment.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreeTrialRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreeTrialRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'company' => 'string',
        'phone' => 'string',
        'campaign' => 'string',
        'company_address' => '\Swagger\Client\Model\CompanyAddress',
        'website' => 'string',
        'have_read_avalara_terms_and_conditions' => 'bool',
        'accept_avalara_terms_and_conditions' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'company' => null,
        'phone' => null,
        'campaign' => null,
        'company_address' => null,
        'website' => null,
        'have_read_avalara_terms_and_conditions' => null,
        'accept_avalara_terms_and_conditions' => null
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'company' => 'company',
        'phone' => 'phone',
        'campaign' => 'campaign',
        'company_address' => 'companyAddress',
        'website' => 'website',
        'have_read_avalara_terms_and_conditions' => 'haveReadAvalaraTermsAndConditions',
        'accept_avalara_terms_and_conditions' => 'acceptAvalaraTermsAndConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'company' => 'setCompany',
        'phone' => 'setPhone',
        'campaign' => 'setCampaign',
        'company_address' => 'setCompanyAddress',
        'website' => 'setWebsite',
        'have_read_avalara_terms_and_conditions' => 'setHaveReadAvalaraTermsAndConditions',
        'accept_avalara_terms_and_conditions' => 'setAcceptAvalaraTermsAndConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'company' => 'getCompany',
        'phone' => 'getPhone',
        'campaign' => 'getCampaign',
        'company_address' => 'getCompanyAddress',
        'website' => 'getWebsite',
        'have_read_avalara_terms_and_conditions' => 'getHaveReadAvalaraTermsAndConditions',
        'accept_avalara_terms_and_conditions' => 'getAcceptAvalaraTermsAndConditions'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['company_address'] = isset($data['company_address']) ? $data['company_address'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['have_read_avalara_terms_and_conditions'] = isset($data['have_read_avalara_terms_and_conditions']) ? $data['have_read_avalara_terms_and_conditions'] : null;
        $this->container['accept_avalara_terms_and_conditions'] = isset($data['accept_avalara_terms_and_conditions']) ? $data['accept_avalara_terms_and_conditions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['company_address'] === null) {
            $invalidProperties[] = "'company_address' can't be null";
        }
        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) > 50)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['website']) && (mb_strlen($this->container['website']) < 0)) {
            $invalidProperties[] = "invalid value for 'website', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['have_read_avalara_terms_and_conditions'] === null) {
            $invalidProperties[] = "'have_read_avalara_terms_and_conditions' can't be null";
        }
        if ($this->container['accept_avalara_terms_and_conditions'] === null) {
            $invalidProperties[] = "'accept_avalara_terms_and_conditions' can't be null";
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
     * @param string $first_name The first or given name of the user requesting a free trial.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FreeTrialRequestModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($first_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FreeTrialRequestModel., must be bigger than or equal to 0.');
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
     * @param string $last_name The last or family name of the user requesting a free trial.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if ((mb_strlen($last_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling FreeTrialRequestModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($last_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling FreeTrialRequestModel., must be bigger than or equal to 0.');
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
     * @param string $email The email address of the user requesting a free trial.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 50)) {
            throw new \InvalidArgumentException('invalid length for $email when calling FreeTrialRequestModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling FreeTrialRequestModel., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company The company or organizational name for this free trial.  If this account is for personal use, it is acceptable  to use your full name here.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The phone number of the person requesting the free trial.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string $campaign Campaign identifier for Notification purpose
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets company_address
     *
     * @return \Swagger\Client\Model\CompanyAddress
     */
    public function getCompanyAddress()
    {
        return $this->container['company_address'];
    }

    /**
     * Sets company_address
     *
     * @param \Swagger\Client\Model\CompanyAddress $company_address The Address information of the account
     *
     * @return $this
     */
    public function setCompanyAddress($company_address)
    {
        $this->container['company_address'] = $company_address;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website Website of the company or user requesting a free trial
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        if (!is_null($website) && (mb_strlen($website) > 50)) {
            throw new \InvalidArgumentException('invalid length for $website when calling FreeTrialRequestModel., must be smaller than or equal to 50.');
        }
        if (!is_null($website) && (mb_strlen($website) < 0)) {
            throw new \InvalidArgumentException('invalid length for $website when calling FreeTrialRequestModel., must be bigger than or equal to 0.');
        }

        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets have_read_avalara_terms_and_conditions
     *
     * @return bool
     */
    public function getHaveReadAvalaraTermsAndConditions()
    {
        return $this->container['have_read_avalara_terms_and_conditions'];
    }

    /**
     * Sets have_read_avalara_terms_and_conditions
     *
     * @param bool $have_read_avalara_terms_and_conditions Read Avalara's terms and conditions is necessary for a free trial account
     *
     * @return $this
     */
    public function setHaveReadAvalaraTermsAndConditions($have_read_avalara_terms_and_conditions)
    {
        $this->container['have_read_avalara_terms_and_conditions'] = $have_read_avalara_terms_and_conditions;

        return $this;
    }

    /**
     * Gets accept_avalara_terms_and_conditions
     *
     * @return bool
     */
    public function getAcceptAvalaraTermsAndConditions()
    {
        return $this->container['accept_avalara_terms_and_conditions'];
    }

    /**
     * Sets accept_avalara_terms_and_conditions
     *
     * @param bool $accept_avalara_terms_and_conditions Accept Avalara's terms and conditions is necessary for a free trial
     *
     * @return $this
     */
    public function setAcceptAvalaraTermsAndConditions($accept_avalara_terms_and_conditions)
    {
        $this->container['accept_avalara_terms_and_conditions'] = $accept_avalara_terms_and_conditions;

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

