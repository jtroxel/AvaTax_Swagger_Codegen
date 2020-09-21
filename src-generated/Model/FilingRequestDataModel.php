<?php
/**
 * FilingRequestDataModel
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
 * FilingRequestDataModel Class Doc Comment
 *
 * @category Class
 * @description Represents a commitment to file a tax return on a recurring basis.  Only used if you subscribe to Avalara Returns.
 * @package  Together\Taxes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilingRequestDataModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilingRequestDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_return_id' => 'int',
        'return_name' => 'string',
        'tax_form_code' => 'string',
        'filing_frequency_id' => 'string',
        'registration_id' => 'string',
        'months' => 'int',
        'fiscal_year_start_month' => 'int',
        'tax_type_id' => 'string',
        'location_code' => 'string',
        'eff_date' => '\DateTime',
        'end_date' => '\DateTime',
        'is_clone' => 'bool',
        'country' => 'string',
        'region' => 'string',
        'tax_authority_id' => 'int',
        'tax_authority_name' => 'string',
        'answers' => '\Together\Taxes\Model\FilingAnswerModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_return_id' => 'int64',
        'return_name' => null,
        'tax_form_code' => null,
        'filing_frequency_id' => null,
        'registration_id' => null,
        'months' => 'int16',
        'fiscal_year_start_month' => 'int32',
        'tax_type_id' => null,
        'location_code' => null,
        'eff_date' => 'date',
        'end_date' => 'date',
        'is_clone' => null,
        'country' => null,
        'region' => null,
        'tax_authority_id' => 'int32',
        'tax_authority_name' => null,
        'answers' => null
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
        'company_return_id' => 'companyReturnId',
        'return_name' => 'returnName',
        'tax_form_code' => 'taxFormCode',
        'filing_frequency_id' => 'filingFrequencyId',
        'registration_id' => 'registrationId',
        'months' => 'months',
        'fiscal_year_start_month' => 'fiscalYearStartMonth',
        'tax_type_id' => 'taxTypeId',
        'location_code' => 'locationCode',
        'eff_date' => 'effDate',
        'end_date' => 'endDate',
        'is_clone' => 'isClone',
        'country' => 'country',
        'region' => 'region',
        'tax_authority_id' => 'taxAuthorityId',
        'tax_authority_name' => 'taxAuthorityName',
        'answers' => 'answers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_return_id' => 'setCompanyReturnId',
        'return_name' => 'setReturnName',
        'tax_form_code' => 'setTaxFormCode',
        'filing_frequency_id' => 'setFilingFrequencyId',
        'registration_id' => 'setRegistrationId',
        'months' => 'setMonths',
        'fiscal_year_start_month' => 'setFiscalYearStartMonth',
        'tax_type_id' => 'setTaxTypeId',
        'location_code' => 'setLocationCode',
        'eff_date' => 'setEffDate',
        'end_date' => 'setEndDate',
        'is_clone' => 'setIsClone',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'tax_authority_id' => 'setTaxAuthorityId',
        'tax_authority_name' => 'setTaxAuthorityName',
        'answers' => 'setAnswers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_return_id' => 'getCompanyReturnId',
        'return_name' => 'getReturnName',
        'tax_form_code' => 'getTaxFormCode',
        'filing_frequency_id' => 'getFilingFrequencyId',
        'registration_id' => 'getRegistrationId',
        'months' => 'getMonths',
        'fiscal_year_start_month' => 'getFiscalYearStartMonth',
        'tax_type_id' => 'getTaxTypeId',
        'location_code' => 'getLocationCode',
        'eff_date' => 'getEffDate',
        'end_date' => 'getEndDate',
        'is_clone' => 'getIsClone',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'tax_authority_id' => 'getTaxAuthorityId',
        'tax_authority_name' => 'getTaxAuthorityName',
        'answers' => 'getAnswers'
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

    const FILING_FREQUENCY_ID_MONTHLY = 'Monthly';
    const FILING_FREQUENCY_ID_QUARTERLY = 'Quarterly';
    const FILING_FREQUENCY_ID_SEMI_ANNUALLY = 'SemiAnnually';
    const FILING_FREQUENCY_ID_ANNUALLY = 'Annually';
    const FILING_FREQUENCY_ID_BIMONTHLY = 'Bimonthly';
    const FILING_FREQUENCY_ID_OCCASIONAL = 'Occasional';
    const FILING_FREQUENCY_ID_INVERSE_QUARTERLY = 'InverseQuarterly';
    const FILING_FREQUENCY_ID_WEEKLY = 'Weekly';
    const TAX_TYPE_ID_E = 'E';
    const TAX_TYPE_ID_LODGING = 'Lodging';
    const TAX_TYPE_ID_BOTTLE = 'Bottle';
    const TAX_TYPE_ID_RENT_TO_OWN = 'RentToOwn';
    const TAX_TYPE_ID_ALL = 'All';
    const TAX_TYPE_ID_BOTH_SALES_AND_USE_TAX = 'BothSalesAndUseTax';
    const TAX_TYPE_ID_CONSUMER_USE_TAX = 'ConsumerUseTax';
    const TAX_TYPE_ID_CONSUMERS_USE_AND_SELLERS_USE_TAX = 'ConsumersUseAndSellersUseTax';
    const TAX_TYPE_ID_CONSUMER_USE_AND_SALES_TAX = 'ConsumerUseAndSalesTax';
    const TAX_TYPE_ID_FEE = 'Fee';
    const TAX_TYPE_ID_VAT_INPUT_TAX = 'VATInputTax';
    const TAX_TYPE_ID_LIGHT_BULBS = 'LightBulbs';
    const TAX_TYPE_ID_MEALS = 'Meals';
    const TAX_TYPE_ID_VAT_NONRECOVERABLE_INPUT_TAX = 'VATNonrecoverableInputTax';
    const TAX_TYPE_ID_VAT_OUTPUT_TAX = 'VATOutputTax';
    const TAX_TYPE_ID_RENTAL = 'Rental';
    const TAX_TYPE_ID_SALES_TAX = 'SalesTax';
    const TAX_TYPE_ID_USE_TAX = 'UseTax';
    const TAX_TYPE_ID_E_WASTE = 'EWaste';
    const TAX_TYPE_ID_BATTERIES = 'Batteries';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilingFrequencyIdAllowableValues()
    {
        return [
            self::FILING_FREQUENCY_ID_MONTHLY,
            self::FILING_FREQUENCY_ID_QUARTERLY,
            self::FILING_FREQUENCY_ID_SEMI_ANNUALLY,
            self::FILING_FREQUENCY_ID_ANNUALLY,
            self::FILING_FREQUENCY_ID_BIMONTHLY,
            self::FILING_FREQUENCY_ID_OCCASIONAL,
            self::FILING_FREQUENCY_ID_INVERSE_QUARTERLY,
            self::FILING_FREQUENCY_ID_WEEKLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeIdAllowableValues()
    {
        return [
            self::TAX_TYPE_ID_E,
            self::TAX_TYPE_ID_LODGING,
            self::TAX_TYPE_ID_BOTTLE,
            self::TAX_TYPE_ID_RENT_TO_OWN,
            self::TAX_TYPE_ID_ALL,
            self::TAX_TYPE_ID_BOTH_SALES_AND_USE_TAX,
            self::TAX_TYPE_ID_CONSUMER_USE_TAX,
            self::TAX_TYPE_ID_CONSUMERS_USE_AND_SELLERS_USE_TAX,
            self::TAX_TYPE_ID_CONSUMER_USE_AND_SALES_TAX,
            self::TAX_TYPE_ID_FEE,
            self::TAX_TYPE_ID_VAT_INPUT_TAX,
            self::TAX_TYPE_ID_LIGHT_BULBS,
            self::TAX_TYPE_ID_MEALS,
            self::TAX_TYPE_ID_VAT_NONRECOVERABLE_INPUT_TAX,
            self::TAX_TYPE_ID_VAT_OUTPUT_TAX,
            self::TAX_TYPE_ID_RENTAL,
            self::TAX_TYPE_ID_SALES_TAX,
            self::TAX_TYPE_ID_USE_TAX,
            self::TAX_TYPE_ID_E_WASTE,
            self::TAX_TYPE_ID_BATTERIES,
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
        $this->container['company_return_id'] = isset($data['company_return_id']) ? $data['company_return_id'] : null;
        $this->container['return_name'] = isset($data['return_name']) ? $data['return_name'] : null;
        $this->container['tax_form_code'] = isset($data['tax_form_code']) ? $data['tax_form_code'] : null;
        $this->container['filing_frequency_id'] = isset($data['filing_frequency_id']) ? $data['filing_frequency_id'] : null;
        $this->container['registration_id'] = isset($data['registration_id']) ? $data['registration_id'] : null;
        $this->container['months'] = isset($data['months']) ? $data['months'] : null;
        $this->container['fiscal_year_start_month'] = isset($data['fiscal_year_start_month']) ? $data['fiscal_year_start_month'] : null;
        $this->container['tax_type_id'] = isset($data['tax_type_id']) ? $data['tax_type_id'] : null;
        $this->container['location_code'] = isset($data['location_code']) ? $data['location_code'] : null;
        $this->container['eff_date'] = isset($data['eff_date']) ? $data['eff_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['is_clone'] = isset($data['is_clone']) ? $data['is_clone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['tax_authority_id'] = isset($data['tax_authority_id']) ? $data['tax_authority_id'] : null;
        $this->container['tax_authority_name'] = isset($data['tax_authority_name']) ? $data['tax_authority_name'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['filing_frequency_id'] === null) {
            $invalidProperties[] = "'filing_frequency_id' can't be null";
        }
        $allowedValues = $this->getFilingFrequencyIdAllowableValues();
        if (!is_null($this->container['filing_frequency_id']) && !in_array($this->container['filing_frequency_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filing_frequency_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['months'] === null) {
            $invalidProperties[] = "'months' can't be null";
        }
        $allowedValues = $this->getTaxTypeIdAllowableValues();
        if (!is_null($this->container['tax_type_id']) && !in_array($this->container['tax_type_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_type_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['eff_date'] === null) {
            $invalidProperties[] = "'eff_date' can't be null";
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
     * Gets company_return_id
     *
     * @return int
     */
    public function getCompanyReturnId()
    {
        return $this->container['company_return_id'];
    }

    /**
     * Sets company_return_id
     *
     * @param int $company_return_id The company return ID if requesting an update.
     *
     * @return $this
     */
    public function setCompanyReturnId($company_return_id)
    {
        $this->container['company_return_id'] = $company_return_id;

        return $this;
    }

    /**
     * Gets return_name
     *
     * @return string
     */
    public function getReturnName()
    {
        return $this->container['return_name'];
    }

    /**
     * Sets return_name
     *
     * @param string $return_name DEPRECATED - Date: 9/13/2018, Version: 18.10, Message: Please use `taxFormCode` instead.  The legacy return name of the requested calendar.
     *
     * @return $this
     */
    public function setReturnName($return_name)
    {
        $this->container['return_name'] = $return_name;

        return $this;
    }

    /**
     * Gets tax_form_code
     *
     * @return string
     */
    public function getTaxFormCode()
    {
        return $this->container['tax_form_code'];
    }

    /**
     * Sets tax_form_code
     *
     * @param string $tax_form_code The Avalara standard tax form code of the tax form for this filing calendar.  The first two characters of the tax form code  are the ISO 3166 country code of the country that issued this form.
     *
     * @return $this
     */
    public function setTaxFormCode($tax_form_code)
    {
        $this->container['tax_form_code'] = $tax_form_code;

        return $this;
    }

    /**
     * Gets filing_frequency_id
     *
     * @return string
     */
    public function getFilingFrequencyId()
    {
        return $this->container['filing_frequency_id'];
    }

    /**
     * Sets filing_frequency_id
     *
     * @param string $filing_frequency_id The filing frequency of the request
     *
     * @return $this
     */
    public function setFilingFrequencyId($filing_frequency_id)
    {
        $allowedValues = $this->getFilingFrequencyIdAllowableValues();
        if (!in_array($filing_frequency_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filing_frequency_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filing_frequency_id'] = $filing_frequency_id;

        return $this;
    }

    /**
     * Gets registration_id
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->container['registration_id'];
    }

    /**
     * Sets registration_id
     *
     * @param string $registration_id State registration ID of the company requesting the filing calendar.
     *
     * @return $this
     */
    public function setRegistrationId($registration_id)
    {
        $this->container['registration_id'] = $registration_id;

        return $this;
    }

    /**
     * Gets months
     *
     * @return int
     */
    public function getMonths()
    {
        return $this->container['months'];
    }

    /**
     * Sets months
     *
     * @param int $months The months of the request
     *
     * @return $this
     */
    public function setMonths($months)
    {
        $this->container['months'] = $months;

        return $this;
    }

    /**
     * Gets fiscal_year_start_month
     *
     * @return int
     */
    public function getFiscalYearStartMonth()
    {
        return $this->container['fiscal_year_start_month'];
    }

    /**
     * Sets fiscal_year_start_month
     *
     * @param int $fiscal_year_start_month The start period of a fiscal year for this form/company
     *
     * @return $this
     */
    public function setFiscalYearStartMonth($fiscal_year_start_month)
    {
        $this->container['fiscal_year_start_month'] = $fiscal_year_start_month;

        return $this;
    }

    /**
     * Gets tax_type_id
     *
     * @return string
     */
    public function getTaxTypeId()
    {
        return $this->container['tax_type_id'];
    }

    /**
     * Sets tax_type_id
     *
     * @param string $tax_type_id The type of tax to report on this return.
     *
     * @return $this
     */
    public function setTaxTypeId($tax_type_id)
    {
        $allowedValues = $this->getTaxTypeIdAllowableValues();
        if (!is_null($tax_type_id) && !in_array($tax_type_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_type_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_type_id'] = $tax_type_id;

        return $this;
    }

    /**
     * Gets location_code
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->container['location_code'];
    }

    /**
     * Sets location_code
     *
     * @param string $location_code Location code of the request
     *
     * @return $this
     */
    public function setLocationCode($location_code)
    {
        $this->container['location_code'] = $location_code;

        return $this;
    }

    /**
     * Gets eff_date
     *
     * @return \DateTime
     */
    public function getEffDate()
    {
        return $this->container['eff_date'];
    }

    /**
     * Sets eff_date
     *
     * @param \DateTime $eff_date Filing cycle effective date of the request
     *
     * @return $this
     */
    public function setEffDate($eff_date)
    {
        $this->container['eff_date'] = $eff_date;

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
     * @param \DateTime $end_date Filing cycle end date of the request
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets is_clone
     *
     * @return bool
     */
    public function getIsClone()
    {
        return $this->container['is_clone'];
    }

    /**
     * Sets is_clone
     *
     * @param bool $is_clone Flag if the request is a clone of a current filing calendar
     *
     * @return $this
     */
    public function setIsClone($is_clone)
    {
        $this->container['is_clone'] = $is_clone;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The two character ISO 3166 country code of the country that issued the tax form for this filing calendar.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region The two or three character ISO 3166 code of the region / state / province that issued the tax form for this filing calendar.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets tax_authority_id
     *
     * @return int
     */
    public function getTaxAuthorityId()
    {
        return $this->container['tax_authority_id'];
    }

    /**
     * Sets tax_authority_id
     *
     * @param int $tax_authority_id The tax authority id of the return
     *
     * @return $this
     */
    public function setTaxAuthorityId($tax_authority_id)
    {
        $this->container['tax_authority_id'] = $tax_authority_id;

        return $this;
    }

    /**
     * Gets tax_authority_name
     *
     * @return string
     */
    public function getTaxAuthorityName()
    {
        return $this->container['tax_authority_name'];
    }

    /**
     * Sets tax_authority_name
     *
     * @param string $tax_authority_name The tax authority name on the return
     *
     * @return $this
     */
    public function setTaxAuthorityName($tax_authority_name)
    {
        $this->container['tax_authority_name'] = $tax_authority_name;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return \Together\Taxes\Model\FilingAnswerModel[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param \Together\Taxes\Model\FilingAnswerModel[] $answers Filing question answers
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

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


