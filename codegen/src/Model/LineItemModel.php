<?php
/**
 * LineItemModel
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
 * LineItemModel Class Doc Comment
 *
 * @category Class
 * @description Represents one line item in a transaction
 * @package  Together\Taxes\Provider\AvaTax\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItemModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'quantity' => 'double',
        'amount' => 'double',
        'addresses' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\AddressesModel',
        'tax_code' => 'string',
        'customer_usage_type' => 'string',
        'entity_use_code' => 'string',
        'item_code' => 'string',
        'exemption_code' => 'string',
        'discounted' => 'bool',
        'tax_included' => 'bool',
        'revenue_account' => 'string',
        'ref1' => 'string',
        'ref2' => 'string',
        'description' => 'string',
        'business_identification_no' => 'string',
        'tax_override' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\TaxOverrideModel',
        'parameters' => '\Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineParameterModel[]',
        'hs_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'quantity' => 'double',
        'amount' => 'double',
        'addresses' => null,
        'tax_code' => null,
        'customer_usage_type' => null,
        'entity_use_code' => null,
        'item_code' => null,
        'exemption_code' => null,
        'discounted' => null,
        'tax_included' => null,
        'revenue_account' => null,
        'ref1' => null,
        'ref2' => null,
        'description' => null,
        'business_identification_no' => null,
        'tax_override' => null,
        'parameters' => null,
        'hs_code' => null
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
        'number' => 'number',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'addresses' => 'addresses',
        'tax_code' => 'taxCode',
        'customer_usage_type' => 'customerUsageType',
        'entity_use_code' => 'entityUseCode',
        'item_code' => 'itemCode',
        'exemption_code' => 'exemptionCode',
        'discounted' => 'discounted',
        'tax_included' => 'taxIncluded',
        'revenue_account' => 'revenueAccount',
        'ref1' => 'ref1',
        'ref2' => 'ref2',
        'description' => 'description',
        'business_identification_no' => 'businessIdentificationNo',
        'tax_override' => 'taxOverride',
        'parameters' => 'parameters',
        'hs_code' => 'hsCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'addresses' => 'setAddresses',
        'tax_code' => 'setTaxCode',
        'customer_usage_type' => 'setCustomerUsageType',
        'entity_use_code' => 'setEntityUseCode',
        'item_code' => 'setItemCode',
        'exemption_code' => 'setExemptionCode',
        'discounted' => 'setDiscounted',
        'tax_included' => 'setTaxIncluded',
        'revenue_account' => 'setRevenueAccount',
        'ref1' => 'setRef1',
        'ref2' => 'setRef2',
        'description' => 'setDescription',
        'business_identification_no' => 'setBusinessIdentificationNo',
        'tax_override' => 'setTaxOverride',
        'parameters' => 'setParameters',
        'hs_code' => 'setHsCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'addresses' => 'getAddresses',
        'tax_code' => 'getTaxCode',
        'customer_usage_type' => 'getCustomerUsageType',
        'entity_use_code' => 'getEntityUseCode',
        'item_code' => 'getItemCode',
        'exemption_code' => 'getExemptionCode',
        'discounted' => 'getDiscounted',
        'tax_included' => 'getTaxIncluded',
        'revenue_account' => 'getRevenueAccount',
        'ref1' => 'getRef1',
        'ref2' => 'getRef2',
        'description' => 'getDescription',
        'business_identification_no' => 'getBusinessIdentificationNo',
        'tax_override' => 'getTaxOverride',
        'parameters' => 'getParameters',
        'hs_code' => 'getHsCode'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['customer_usage_type'] = isset($data['customer_usage_type']) ? $data['customer_usage_type'] : null;
        $this->container['entity_use_code'] = isset($data['entity_use_code']) ? $data['entity_use_code'] : null;
        $this->container['item_code'] = isset($data['item_code']) ? $data['item_code'] : null;
        $this->container['exemption_code'] = isset($data['exemption_code']) ? $data['exemption_code'] : null;
        $this->container['discounted'] = isset($data['discounted']) ? $data['discounted'] : null;
        $this->container['tax_included'] = isset($data['tax_included']) ? $data['tax_included'] : null;
        $this->container['revenue_account'] = isset($data['revenue_account']) ? $data['revenue_account'] : null;
        $this->container['ref1'] = isset($data['ref1']) ? $data['ref1'] : null;
        $this->container['ref2'] = isset($data['ref2']) ? $data['ref2'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['business_identification_no'] = isset($data['business_identification_no']) ? $data['business_identification_no'] : null;
        $this->container['tax_override'] = isset($data['tax_override']) ? $data['tax_override'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 50)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 0)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['tax_code']) && (mb_strlen($this->container['tax_code']) > 25)) {
            $invalidProperties[] = "invalid value for 'tax_code', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['tax_code']) && (mb_strlen($this->container['tax_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'tax_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['customer_usage_type']) && (mb_strlen($this->container['customer_usage_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'customer_usage_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['customer_usage_type']) && (mb_strlen($this->container['customer_usage_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'customer_usage_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['entity_use_code']) && (mb_strlen($this->container['entity_use_code']) > 25)) {
            $invalidProperties[] = "invalid value for 'entity_use_code', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['entity_use_code']) && (mb_strlen($this->container['entity_use_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'entity_use_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['item_code']) && (mb_strlen($this->container['item_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'item_code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['item_code']) && (mb_strlen($this->container['item_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'item_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['revenue_account']) && (mb_strlen($this->container['revenue_account']) > 50)) {
            $invalidProperties[] = "invalid value for 'revenue_account', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['revenue_account']) && (mb_strlen($this->container['revenue_account']) < 0)) {
            $invalidProperties[] = "invalid value for 'revenue_account', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ref1']) && (mb_strlen($this->container['ref1']) > 250)) {
            $invalidProperties[] = "invalid value for 'ref1', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['ref1']) && (mb_strlen($this->container['ref1']) < 0)) {
            $invalidProperties[] = "invalid value for 'ref1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['ref2']) && (mb_strlen($this->container['ref2']) > 250)) {
            $invalidProperties[] = "invalid value for 'ref2', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['ref2']) && (mb_strlen($this->container['ref2']) < 0)) {
            $invalidProperties[] = "invalid value for 'ref2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2096)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2096.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['business_identification_no']) && (mb_strlen($this->container['business_identification_no']) > 25)) {
            $invalidProperties[] = "invalid value for 'business_identification_no', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['business_identification_no']) && (mb_strlen($this->container['business_identification_no']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_identification_no', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hs_code']) && (mb_strlen($this->container['hs_code']) > 25)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['hs_code']) && (mb_strlen($this->container['hs_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'hs_code', the character length must be bigger than or equal to 0.";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The line number of this line within the document.  This can be any text that is useful to you, such as numeric line numbers, alphabetic line numbers, or other text.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $number when calling LineItemModel., must be smaller than or equal to 50.');
        }
        if (!is_null($number) && (mb_strlen($number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $number when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity Quantity of items in this line.  This quantity value should always be a positive value representing the quantity of product that changed hands, even when handling returns or refunds.                If not provided, or if set to zero, the quantity value is assumed to be one (1).
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Total amount for this line.  The amount represents the net currency value that changed hands from the customer (represented by the `customerCode` field) to the company (represented by the `companyCode`) field.                For sale transactions, this value must be positive.  It indicates the amount of money paid by the customer to the company.                For refund or return transactions, this value must be negative.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressesModel
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\AddressesModel $addresses The addresses to use for this transaction line.                If you set this value to `null`, or if you omit this element from your API call, then instead the transaction  will use the `addresses` from the document level.                If you specify any other value besides `null`, only addresses specified for this line will be used for this line.
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string $tax_code Tax Code - System or Custom Tax Code.                You can use your own tax code mapping or standard Avalara tax codes.  For a full list of tax codes, see `ListTaxCodes`.
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        if (!is_null($tax_code) && (mb_strlen($tax_code) > 25)) {
            throw new \InvalidArgumentException('invalid length for $tax_code when calling LineItemModel., must be smaller than or equal to 25.');
        }
        if (!is_null($tax_code) && (mb_strlen($tax_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tax_code when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets customer_usage_type
     *
     * @return string
     */
    public function getCustomerUsageType()
    {
        return $this->container['customer_usage_type'];
    }

    /**
     * Sets customer_usage_type
     *
     * @param string $customer_usage_type DEPRECATED - Date: 10/16/2017, Version: 17.11, Message: Please use `entityUseCode` instead.
     *
     * @return $this
     */
    public function setCustomerUsageType($customer_usage_type)
    {
        if (!is_null($customer_usage_type) && (mb_strlen($customer_usage_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $customer_usage_type when calling LineItemModel., must be smaller than or equal to 25.');
        }
        if (!is_null($customer_usage_type) && (mb_strlen($customer_usage_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customer_usage_type when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['customer_usage_type'] = $customer_usage_type;

        return $this;
    }

    /**
     * Gets entity_use_code
     *
     * @return string
     */
    public function getEntityUseCode()
    {
        return $this->container['entity_use_code'];
    }

    /**
     * Sets entity_use_code
     *
     * @param string $entity_use_code Entity Use Code - The client application customer or usage type.  This field allows you to designate a type of usage that  may make this transaction considered exempt by reason of exempt usage.                For a list of entity use codes, see the Definitions API `ListEntityUseCodes`.
     *
     * @return $this
     */
    public function setEntityUseCode($entity_use_code)
    {
        if (!is_null($entity_use_code) && (mb_strlen($entity_use_code) > 25)) {
            throw new \InvalidArgumentException('invalid length for $entity_use_code when calling LineItemModel., must be smaller than or equal to 25.');
        }
        if (!is_null($entity_use_code) && (mb_strlen($entity_use_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $entity_use_code when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['entity_use_code'] = $entity_use_code;

        return $this;
    }

    /**
     * Gets item_code
     *
     * @return string
     */
    public function getItemCode()
    {
        return $this->container['item_code'];
    }

    /**
     * Sets item_code
     *
     * @param string $item_code Item Code (SKU).  If you provide an `itemCode` field, the AvaTax API will look up the item you created with the `CreateItems` API call  and use all the information available about that item for this transaction.
     *
     * @return $this
     */
    public function setItemCode($item_code)
    {
        if (!is_null($item_code) && (mb_strlen($item_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $item_code when calling LineItemModel., must be smaller than or equal to 50.');
        }
        if (!is_null($item_code) && (mb_strlen($item_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $item_code when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['item_code'] = $item_code;

        return $this;
    }

    /**
     * Gets exemption_code
     *
     * @return string
     */
    public function getExemptionCode()
    {
        return $this->container['exemption_code'];
    }

    /**
     * Sets exemption_code
     *
     * @param string $exemption_code The customer Tax Id Number (tax_number) associated with a certificate - Sales tax calculation requests first determine if there is an applicable  ECMS entry available, and will utilize it for exemption processing. If no applicable ECMS entry is available, the AvaTax service  will determine if an Exemption Number field is populated or an Entity/Use Code is included in the sales tax calculation request,  and will perform exemption processing using either of those two options.  Note: This is same as 'exemptNo' in TransactionModel.
     *
     * @return $this
     */
    public function setExemptionCode($exemption_code)
    {
        $this->container['exemption_code'] = $exemption_code;

        return $this;
    }

    /**
     * Gets discounted
     *
     * @return bool
     */
    public function getDiscounted()
    {
        return $this->container['discounted'];
    }

    /**
     * Sets discounted
     *
     * @param bool $discounted True if the document discount should be applied to this line.  If this value is false, or not provided, discounts will not be  applied to this line even if they are specified on the root `discount` element.
     *
     * @return $this
     */
    public function setDiscounted($discounted)
    {
        $this->container['discounted'] = $discounted;

        return $this;
    }

    /**
     * Gets tax_included
     *
     * @return bool
     */
    public function getTaxIncluded()
    {
        return $this->container['tax_included'];
    }

    /**
     * Sets tax_included
     *
     * @param bool $tax_included Indicates whether the `amount` for this line already includes tax.                If this value is `true`, the final price of this line including tax will equal the value in `amount`.                If this value is `null` or `false`, the final price will equal `amount` plus whatever taxes apply to this line.
     *
     * @return $this
     */
    public function setTaxIncluded($tax_included)
    {
        $this->container['tax_included'] = $tax_included;

        return $this;
    }

    /**
     * Gets revenue_account
     *
     * @return string
     */
    public function getRevenueAccount()
    {
        return $this->container['revenue_account'];
    }

    /**
     * Sets revenue_account
     *
     * @param string $revenue_account Revenue Account (Customer Defined Field).                This field is available for you to use to provide whatever information your implementation requires.  It does not affect tax calculation.
     *
     * @return $this
     */
    public function setRevenueAccount($revenue_account)
    {
        if (!is_null($revenue_account) && (mb_strlen($revenue_account) > 50)) {
            throw new \InvalidArgumentException('invalid length for $revenue_account when calling LineItemModel., must be smaller than or equal to 50.');
        }
        if (!is_null($revenue_account) && (mb_strlen($revenue_account) < 0)) {
            throw new \InvalidArgumentException('invalid length for $revenue_account when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['revenue_account'] = $revenue_account;

        return $this;
    }

    /**
     * Gets ref1
     *
     * @return string
     */
    public function getRef1()
    {
        return $this->container['ref1'];
    }

    /**
     * Sets ref1
     *
     * @param string $ref1 Ref1 (Customer Defined Field)                This field is available for you to use to provide whatever information your implementation requires.  It does not affect tax calculation.
     *
     * @return $this
     */
    public function setRef1($ref1)
    {
        if (!is_null($ref1) && (mb_strlen($ref1) > 250)) {
            throw new \InvalidArgumentException('invalid length for $ref1 when calling LineItemModel., must be smaller than or equal to 250.');
        }
        if (!is_null($ref1) && (mb_strlen($ref1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ref1 when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['ref1'] = $ref1;

        return $this;
    }

    /**
     * Gets ref2
     *
     * @return string
     */
    public function getRef2()
    {
        return $this->container['ref2'];
    }

    /**
     * Sets ref2
     *
     * @param string $ref2 Ref2 (Customer Defined Field)                This field is available for you to use to provide whatever information your implementation requires.  It does not affect tax calculation.
     *
     * @return $this
     */
    public function setRef2($ref2)
    {
        if (!is_null($ref2) && (mb_strlen($ref2) > 250)) {
            throw new \InvalidArgumentException('invalid length for $ref2 when calling LineItemModel., must be smaller than or equal to 250.');
        }
        if (!is_null($ref2) && (mb_strlen($ref2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ref2 when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['ref2'] = $ref2;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item description.                For Streamlined Sales Tax (SST) customers, this field is required if an unmapped `itemCode` is used.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 2096)) {
            throw new \InvalidArgumentException('invalid length for $description when calling LineItemModel., must be smaller than or equal to 2096.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $description when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets business_identification_no
     *
     * @return string
     */
    public function getBusinessIdentificationNo()
    {
        return $this->container['business_identification_no'];
    }

    /**
     * Sets business_identification_no
     *
     * @param string $business_identification_no VAT business identification number for the customer for this line item.  If you leave this field empty,  this line item will use whatever business identification number you provided at the transaction level.                If you specify a VAT business identification number for the customer in this transaction and you have also set up  a business identification number for your company during company setup, this transaction will be treated as a  business-to-business transaction for VAT purposes and it will be calculated according to VAT tax rules.
     *
     * @return $this
     */
    public function setBusinessIdentificationNo($business_identification_no)
    {
        if (!is_null($business_identification_no) && (mb_strlen($business_identification_no) > 25)) {
            throw new \InvalidArgumentException('invalid length for $business_identification_no when calling LineItemModel., must be smaller than or equal to 25.');
        }
        if (!is_null($business_identification_no) && (mb_strlen($business_identification_no) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_identification_no when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['business_identification_no'] = $business_identification_no;

        return $this;
    }

    /**
     * Gets tax_override
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxOverrideModel
     */
    public function getTaxOverride()
    {
        return $this->container['tax_override'];
    }

    /**
     * Sets tax_override
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\TaxOverrideModel $tax_override Specifies a tax override for this line.
     *
     * @return $this
     */
    public function setTaxOverride($tax_override)
    {
        $this->container['tax_override'] = $tax_override;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineParameterModel[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionLineParameterModel[] $parameters Special parameters that apply to this line within this transaction.                To get a full list of available parameters, please use the `ListParameters` API.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code The Item code for Custom Duty / Global Import tax determination  Harmonized Tariff System code for this transaction.                For a list of harmonized tariff codes, see the Definitions API for harmonized tariff codes.
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        if (!is_null($hs_code) && (mb_strlen($hs_code) > 25)) {
            throw new \InvalidArgumentException('invalid length for $hs_code when calling LineItemModel., must be smaller than or equal to 25.');
        }
        if (!is_null($hs_code) && (mb_strlen($hs_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $hs_code when calling LineItemModel., must be bigger than or equal to 0.');
        }

        $this->container['hs_code'] = $hs_code;

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


