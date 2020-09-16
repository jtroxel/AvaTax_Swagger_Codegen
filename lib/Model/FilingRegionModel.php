<?php
/**
 * FilingRegionModel
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
 * FilingRegionModel Class Doc Comment
 *
 * @category Class
 * @description Regions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilingRegionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilingRegionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'filing_id' => 'int',
        'country' => 'string',
        'region' => 'string',
        'sales_amount' => 'double',
        'taxable_amount' => 'double',
        'tax_amount' => 'double',
        'tax_due_amount' => 'double',
        'collect_amount' => 'double',
        'total_remittance_amount' => 'double',
        'non_taxable_amount' => 'double',
        'consumer_use_tax_amount' => 'double',
        'consumer_use_non_taxable_amount' => 'double',
        'consumer_use_taxable_amount' => 'double',
        'approve_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'has_nexus' => 'bool',
        'status' => 'string',
        'returns' => '\Swagger\Client\Model\FilingReturnModel[]',
        'suggest_returns' => '\Swagger\Client\Model\FilingsCheckupSuggestedFormModel[]',
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
        'id' => 'int64',
        'filing_id' => 'int64',
        'country' => null,
        'region' => null,
        'sales_amount' => 'double',
        'taxable_amount' => 'double',
        'tax_amount' => 'double',
        'tax_due_amount' => 'double',
        'collect_amount' => 'double',
        'total_remittance_amount' => 'double',
        'non_taxable_amount' => 'double',
        'consumer_use_tax_amount' => 'double',
        'consumer_use_non_taxable_amount' => 'double',
        'consumer_use_taxable_amount' => 'double',
        'approve_date' => 'date-time',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'has_nexus' => null,
        'status' => null,
        'returns' => null,
        'suggest_returns' => null,
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
        'filing_id' => 'filingId',
        'country' => 'country',
        'region' => 'region',
        'sales_amount' => 'salesAmount',
        'taxable_amount' => 'taxableAmount',
        'tax_amount' => 'taxAmount',
        'tax_due_amount' => 'taxDueAmount',
        'collect_amount' => 'collectAmount',
        'total_remittance_amount' => 'totalRemittanceAmount',
        'non_taxable_amount' => 'nonTaxableAmount',
        'consumer_use_tax_amount' => 'consumerUseTaxAmount',
        'consumer_use_non_taxable_amount' => 'consumerUseNonTaxableAmount',
        'consumer_use_taxable_amount' => 'consumerUseTaxableAmount',
        'approve_date' => 'approveDate',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'has_nexus' => 'hasNexus',
        'status' => 'status',
        'returns' => 'returns',
        'suggest_returns' => 'suggestReturns',
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
        'filing_id' => 'setFilingId',
        'country' => 'setCountry',
        'region' => 'setRegion',
        'sales_amount' => 'setSalesAmount',
        'taxable_amount' => 'setTaxableAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_due_amount' => 'setTaxDueAmount',
        'collect_amount' => 'setCollectAmount',
        'total_remittance_amount' => 'setTotalRemittanceAmount',
        'non_taxable_amount' => 'setNonTaxableAmount',
        'consumer_use_tax_amount' => 'setConsumerUseTaxAmount',
        'consumer_use_non_taxable_amount' => 'setConsumerUseNonTaxableAmount',
        'consumer_use_taxable_amount' => 'setConsumerUseTaxableAmount',
        'approve_date' => 'setApproveDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'has_nexus' => 'setHasNexus',
        'status' => 'setStatus',
        'returns' => 'setReturns',
        'suggest_returns' => 'setSuggestReturns',
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
        'filing_id' => 'getFilingId',
        'country' => 'getCountry',
        'region' => 'getRegion',
        'sales_amount' => 'getSalesAmount',
        'taxable_amount' => 'getTaxableAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_due_amount' => 'getTaxDueAmount',
        'collect_amount' => 'getCollectAmount',
        'total_remittance_amount' => 'getTotalRemittanceAmount',
        'non_taxable_amount' => 'getNonTaxableAmount',
        'consumer_use_tax_amount' => 'getConsumerUseTaxAmount',
        'consumer_use_non_taxable_amount' => 'getConsumerUseNonTaxableAmount',
        'consumer_use_taxable_amount' => 'getConsumerUseTaxableAmount',
        'approve_date' => 'getApproveDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'has_nexus' => 'getHasNexus',
        'status' => 'getStatus',
        'returns' => 'getReturns',
        'suggest_returns' => 'getSuggestReturns',
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

    const STATUS_PENDING_APPROVAL = 'PendingApproval';
    const STATUS_DIRTY = 'Dirty';
    const STATUS_APPROVED_TO_FILE = 'ApprovedToFile';
    const STATUS_PENDING_FILING = 'PendingFiling';
    const STATUS_PENDING_FILING_ON_BEHALF = 'PendingFilingOnBehalf';
    const STATUS_FILED = 'Filed';
    const STATUS_FILED_ON_BEHALF = 'FiledOnBehalf';
    const STATUS_RETURN_ACCEPTED = 'ReturnAccepted';
    const STATUS_RETURN_ACCEPTED_ON_BEHALF = 'ReturnAcceptedOnBehalf';
    const STATUS_PAYMENT_REMITTED = 'PaymentRemitted';
    const STATUS_VOIDED = 'Voided';
    const STATUS_PENDING_RETURN = 'PendingReturn';
    const STATUS_PENDING_RETURN_ON_BEHALF = 'PendingReturnOnBehalf';
    const STATUS_DO_NOT_FILE = 'DoNotFile';
    const STATUS_RETURN_REJECTED = 'ReturnRejected';
    const STATUS_RETURN_REJECTED_ON_BEHALF = 'ReturnRejectedOnBehalf';
    const STATUS_APPROVED_TO_FILE_ON_BEHALF = 'ApprovedToFileOnBehalf';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_DIRTY,
            self::STATUS_APPROVED_TO_FILE,
            self::STATUS_PENDING_FILING,
            self::STATUS_PENDING_FILING_ON_BEHALF,
            self::STATUS_FILED,
            self::STATUS_FILED_ON_BEHALF,
            self::STATUS_RETURN_ACCEPTED,
            self::STATUS_RETURN_ACCEPTED_ON_BEHALF,
            self::STATUS_PAYMENT_REMITTED,
            self::STATUS_VOIDED,
            self::STATUS_PENDING_RETURN,
            self::STATUS_PENDING_RETURN_ON_BEHALF,
            self::STATUS_DO_NOT_FILE,
            self::STATUS_RETURN_REJECTED,
            self::STATUS_RETURN_REJECTED_ON_BEHALF,
            self::STATUS_APPROVED_TO_FILE_ON_BEHALF,
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
        $this->container['filing_id'] = isset($data['filing_id']) ? $data['filing_id'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sales_amount'] = isset($data['sales_amount']) ? $data['sales_amount'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_due_amount'] = isset($data['tax_due_amount']) ? $data['tax_due_amount'] : null;
        $this->container['collect_amount'] = isset($data['collect_amount']) ? $data['collect_amount'] : null;
        $this->container['total_remittance_amount'] = isset($data['total_remittance_amount']) ? $data['total_remittance_amount'] : null;
        $this->container['non_taxable_amount'] = isset($data['non_taxable_amount']) ? $data['non_taxable_amount'] : null;
        $this->container['consumer_use_tax_amount'] = isset($data['consumer_use_tax_amount']) ? $data['consumer_use_tax_amount'] : null;
        $this->container['consumer_use_non_taxable_amount'] = isset($data['consumer_use_non_taxable_amount']) ? $data['consumer_use_non_taxable_amount'] : null;
        $this->container['consumer_use_taxable_amount'] = isset($data['consumer_use_taxable_amount']) ? $data['consumer_use_taxable_amount'] : null;
        $this->container['approve_date'] = isset($data['approve_date']) ? $data['approve_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['has_nexus'] = isset($data['has_nexus']) ? $data['has_nexus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['returns'] = isset($data['returns']) ? $data['returns'] : null;
        $this->container['suggest_returns'] = isset($data['suggest_returns']) ? $data['suggest_returns'] : null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param int $id The unique ID number of this filing region.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets filing_id
     *
     * @return int
     */
    public function getFilingId()
    {
        return $this->container['filing_id'];
    }

    /**
     * Sets filing_id
     *
     * @param int $filing_id The filing id that this region belongs too
     *
     * @return $this
     */
    public function setFilingId($filing_id)
    {
        $this->container['filing_id'] = $filing_id;

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
     * @param string $country The two-character ISO-3166 code for the country.
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
     * @param string $region The two or three character region code for the region.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets sales_amount
     *
     * @return double
     */
    public function getSalesAmount()
    {
        return $this->container['sales_amount'];
    }

    /**
     * Sets sales_amount
     *
     * @param double $sales_amount The sales amount.
     *
     * @return $this
     */
    public function setSalesAmount($sales_amount)
    {
        $this->container['sales_amount'] = $sales_amount;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return double
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param double $taxable_amount The taxable amount.
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount The tax amount.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_due_amount
     *
     * @return double
     */
    public function getTaxDueAmount()
    {
        return $this->container['tax_due_amount'];
    }

    /**
     * Sets tax_due_amount
     *
     * @param double $tax_due_amount The tax amount due.
     *
     * @return $this
     */
    public function setTaxDueAmount($tax_due_amount)
    {
        $this->container['tax_due_amount'] = $tax_due_amount;

        return $this;
    }

    /**
     * Gets collect_amount
     *
     * @return double
     */
    public function getCollectAmount()
    {
        return $this->container['collect_amount'];
    }

    /**
     * Sets collect_amount
     *
     * @param double $collect_amount The amount collected by Avalara for this region
     *
     * @return $this
     */
    public function setCollectAmount($collect_amount)
    {
        $this->container['collect_amount'] = $collect_amount;

        return $this;
    }

    /**
     * Gets total_remittance_amount
     *
     * @return double
     */
    public function getTotalRemittanceAmount()
    {
        return $this->container['total_remittance_amount'];
    }

    /**
     * Sets total_remittance_amount
     *
     * @param double $total_remittance_amount Total remittance amount of all returns in region
     *
     * @return $this
     */
    public function setTotalRemittanceAmount($total_remittance_amount)
    {
        $this->container['total_remittance_amount'] = $total_remittance_amount;

        return $this;
    }

    /**
     * Gets non_taxable_amount
     *
     * @return double
     */
    public function getNonTaxableAmount()
    {
        return $this->container['non_taxable_amount'];
    }

    /**
     * Sets non_taxable_amount
     *
     * @param double $non_taxable_amount The non-taxable amount.
     *
     * @return $this
     */
    public function setNonTaxableAmount($non_taxable_amount)
    {
        $this->container['non_taxable_amount'] = $non_taxable_amount;

        return $this;
    }

    /**
     * Gets consumer_use_tax_amount
     *
     * @return double
     */
    public function getConsumerUseTaxAmount()
    {
        return $this->container['consumer_use_tax_amount'];
    }

    /**
     * Sets consumer_use_tax_amount
     *
     * @param double $consumer_use_tax_amount Consumer use tax liability.
     *
     * @return $this
     */
    public function setConsumerUseTaxAmount($consumer_use_tax_amount)
    {
        $this->container['consumer_use_tax_amount'] = $consumer_use_tax_amount;

        return $this;
    }

    /**
     * Gets consumer_use_non_taxable_amount
     *
     * @return double
     */
    public function getConsumerUseNonTaxableAmount()
    {
        return $this->container['consumer_use_non_taxable_amount'];
    }

    /**
     * Sets consumer_use_non_taxable_amount
     *
     * @param double $consumer_use_non_taxable_amount Consumer use non-taxable amount.
     *
     * @return $this
     */
    public function setConsumerUseNonTaxableAmount($consumer_use_non_taxable_amount)
    {
        $this->container['consumer_use_non_taxable_amount'] = $consumer_use_non_taxable_amount;

        return $this;
    }

    /**
     * Gets consumer_use_taxable_amount
     *
     * @return double
     */
    public function getConsumerUseTaxableAmount()
    {
        return $this->container['consumer_use_taxable_amount'];
    }

    /**
     * Sets consumer_use_taxable_amount
     *
     * @param double $consumer_use_taxable_amount Consumer use taxable amount.
     *
     * @return $this
     */
    public function setConsumerUseTaxableAmount($consumer_use_taxable_amount)
    {
        $this->container['consumer_use_taxable_amount'] = $consumer_use_taxable_amount;

        return $this;
    }

    /**
     * Gets approve_date
     *
     * @return \DateTime
     */
    public function getApproveDate()
    {
        return $this->container['approve_date'];
    }

    /**
     * Sets approve_date
     *
     * @param \DateTime $approve_date The date the filing region was approved.
     *
     * @return $this
     */
    public function setApproveDate($approve_date)
    {
        $this->container['approve_date'] = $approve_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The start date for the filing cycle.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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
     * @param \DateTime $end_date The end date for the filing cycle.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets has_nexus
     *
     * @return bool
     */
    public function getHasNexus()
    {
        return $this->container['has_nexus'];
    }

    /**
     * Sets has_nexus
     *
     * @param bool $has_nexus Whether or not you have nexus in this region.
     *
     * @return $this
     */
    public function setHasNexus($has_nexus)
    {
        $this->container['has_nexus'] = $has_nexus;

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
     * @param string $status The current status of the filing region.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets returns
     *
     * @return \Swagger\Client\Model\FilingReturnModel[]
     */
    public function getReturns()
    {
        return $this->container['returns'];
    }

    /**
     * Sets returns
     *
     * @param \Swagger\Client\Model\FilingReturnModel[] $returns A list of tax returns in this region.
     *
     * @return $this
     */
    public function setReturns($returns)
    {
        $this->container['returns'] = $returns;

        return $this;
    }

    /**
     * Gets suggest_returns
     *
     * @return \Swagger\Client\Model\FilingsCheckupSuggestedFormModel[]
     */
    public function getSuggestReturns()
    {
        return $this->container['suggest_returns'];
    }

    /**
     * Sets suggest_returns
     *
     * @param \Swagger\Client\Model\FilingsCheckupSuggestedFormModel[] $suggest_returns A list of tax returns in this region.
     *
     * @return $this
     */
    public function setSuggestReturns($suggest_returns)
    {
        $this->container['suggest_returns'] = $suggest_returns;

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


