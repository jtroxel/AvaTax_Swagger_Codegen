<?php

namespace Together\Taxes\Provider\AvaTax\Model;

use DateTime;
use Together\Taxes\Provider\AvaTax\AvaTaxClientConfig;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressesModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressLocationInfo;
use Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\LineItemModel;

/*
 * Simple factory class to create TransactionModels using the AvaTaxClientConfig
 */
class TransactionModelFactoryConfig
{
    private $avaTaxConfig;
    
    /**
     * TransactionModelFactoryConfig constructor.
     * @param AvaTaxClientConfig $avaTaxConfig, config object holding account information
     */
    public function __construct(AvaTaxClientConfig $avaTaxConfig)
    {
        $this->avaTaxConfig = $avaTaxConfig;
    }
    
    /**
     * @param string $transType a string matching values in CreateTransactionModel::TYPE_*
     * @param string $customerCode a string ID for this customer, not the companyCode of the avatax account
     * @param DateTime $transDatetime time to be recorded for this transaction
     * @param AddressLocationInfo $shipToAddress of recipient or
     * @param AddressLocationInfo $shipFromAddress
     * @param string $description
     * @param string|null $transCode
     * @param array $lineItems
     * @return CreateTransactionModel
     */
    public function create(
        string $transType,
        string $customerCode,
        DateTime $transDatetime,
        AddressLocationInfo $shipToAddress,
        AddressLocationInfo $shipFromAddress,
        string $description,
        ?string $transCode,
        LineItemModel ...$lineItems
    ): CreateTransactionModel
    {
        $body = new CreateTransactionModel();
        $body
            ->setCode($transCode) // Set code if given or use AvaTax-generated guid
            ->setCompanyCode($this->avaTaxConfig->getCompanyCode())
            ->setCustomerCode($customerCode)
            ->setType($transType)
            ->setDate($transDatetime)
            ->setAddresses((new AddressesModel())
                    ->setShipTo(
                        $shipToAddress
                    )
                    ->setShipFrom(
                        $shipFromAddress
                    )
            )
            ->setDescription($description)
            ->setLines(
                    $lineItems,
            );
        return $body;
    }
}
