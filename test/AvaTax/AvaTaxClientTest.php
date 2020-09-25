<?php

namespace AvaTax;

use PHPUnit\Framework\TestCase;
use Together\Taxes\Provider\AvaTax\AvaTaxClientConfig;
use Together\Taxes\Provider\AvaTax\Swagger\Api\AddressesApi;
use Together\Taxes\Provider\AvaTax\Swagger\Api\TransactionsApi;
use Together\Taxes\Provider\AvaTax\Swagger\Api\UtilitiesApi;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressesModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressLocationInfo;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressResolutionModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\AddressValidationInfo;
use Together\Taxes\Provider\AvaTax\Swagger\Model\CommitTransactionModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\CreateTransactionModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\LineItemModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\RefundTransactionModel;
use Together\Taxes\Provider\AvaTax\Swagger\Model\TransactionModel;

/**
 * @covers AvaTaxClient
 */
final class AvaTaxClientTest extends TestCase
{
    
    
    /** @var AvaTaxClientConfig $avaTaxClientConfig */
    private $avaTaxClientConfig;
    /**
     * @var TransactionsApi
     */
    private $apiInstance;
    
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }
    
    public function setUp(): void
    {
        parent::setUp();
        // Create a new client
        if (!$this->avaTaxClientConfig) {
            $this->avaTaxClientConfig =
                (new AvaTaxClientConfig(
                    getenv('SANDBOX_COMPANY'), '1.0',
                    static::class, 'production'
                ))
                    ->withBasicAuth(getenv('SANDBOX_USERNAME'), getenv('SANDBOX_PASSWORD'))
                    ->withMachineName('test-machine');
        }
    }
    
    public function testAuth()
    {
        $apiInstance = new UtilitiesApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            null,
            $this->avaTaxClientConfig->getConfiguration()
        );
        $result = $apiInstance->ping($this->avaTaxClientConfig->getAvaClientHeader());
        $this->assertNotNull($result, "Should be able to call Ping");
        $this->assertEquals(true, $result->getAuthenticated(), "Should authenticate");
    }
    
    public function testValidateAddressResolve()
    {
        $apiInstance = $this->getAddressesApi();
        $addResolution = $apiInstance->resolveAddress(
            '2560 Blake',
            null,
            null,
            'Denver',
            'CO',
            '80401',
            'US',
            AddressValidationInfo::TEXT_CASE_MIXED,
            $this->avaTaxClientConfig->getAvaClientHeader()
        );
        
        $this->assertNotNull($addResolution, "Response ARM is not null");
        $this->assertTrue($addResolution instanceof AddressResolutionModel);
        $this->assertEquals($addResolution->getValidatedAddresses()[0]->getPostalCode(), '80205-2180');
        $this->assertContains(
            $addResolution->getResolutionQuality(),
            $addResolution->getResolutionQualityAllowableValues()
        );
    }
    
    public function testCreateSalesOrderTransaction()
    {
        $this->apiInstance = $this->getTransactionsApi();
    
        $body = $this->getCreateTransactionModel(CreateTransactionModel::TYPE_SALES_ORDER);
    
        try {
            $salesOrderTx = $this->apiInstance->createTransaction(
                'SummaryOnly',
                $this->avaTaxClientConfig->getAvaClientHeader(),
                $body
            );
            $this->assertNotNull($salesOrderTx, "Response stdClass is not null");
            $this->assertTrue($salesOrderTx instanceof TransactionModel);
            return $salesOrderTx;
        } catch (\Exception $e) {
            echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
            throw $e;
        }
    }
    
    /**
     * @depends testCreateSalesOrderTransaction
     * @return TransactionModel
     * @throws \Together\Taxes\Provider\AvaTax\Swagger\ApiException
     */
    public function testCreateSalesInvoiceTransaction($salesOrderTx): TransactionModel
    {
        $this->apiInstance = $this->getTransactionsApi();
        
        $salesInvoiceTx = $this->apiInstance->createTransaction(
            'SummaryOnly',
            $this->avaTaxClientConfig->getAvaClientHeader(),
            $this->getCreateTransactionModel(CreateTransactionModel::TYPE_SALES_INVOICE)
        );
        $this->assertNotNull($salesInvoiceTx, "Response stdClass is not null");
        $this->assertTrue($salesInvoiceTx instanceof TransactionModel);
        return $salesInvoiceTx;
    }
    
    /**
     * @depends testCreateSalesInvoiceTransaction
     */
    public function testSalesInvoiceCommitTransaction(TransactionModel $salesInvoiceModel)
    {
        
        $this->apiInstance = $this->getTransactionsApi();

        $recorded_transaction = $this->apiInstance->getTransactionById($salesInvoiceModel->getId());
        $this->assertNotNull($recorded_transaction, "Couldn't retrieve transaction we just saved");
        
        $status = $this->apiInstance->commitTransaction(
            $this->avaTaxClientConfig->getCompanyCode(),
            $recorded_transaction->getCode(),
            $recorded_transaction->getType(),
            'Summary'
        );
        $this->assertNotNull($status, "No result from commit");
        $this->assertEquals($status->status, 'Committed');
        
        return $trans_id;
    }
    
    
    /**
     * @depends testSalesInvoiceCommitTransaction
     */
    public function testRefundTransaction($transId)
    {
        $this->apiInstance = $this->getTransactionsApi();
        $committed_transaction = $this->apiInstance->getTransactionById($transId);
        $this->assertNotNull($committed_transaction, "Couldn't retrieve transaction we just committed");
        
        $refundTransactionModel = new RefundTransactionModel();
        $refundTransactionModel->referenceCode = 'wtf';
        $refundTransactionModel->refundTransactionCode = $committed_transaction->getCode() . '_refunded';
        $refundTransactionModel->refundDate = "2020-09-18";
        $refundTransactionModel->refundType = 'Full';
        
        
        $status = $this->apiInstance->refundTransaction(
            'SummaryOnly',
            $this->avaTaxClientConfig->getAvaClientHeader(),
            new RefundTransactionModel($refundTransactionModel)
        );
        $this->assertNotNull($status, "No result from commit");
    }
    
    
    /**
     * @param $type
     * @return CreateTransactionModel
     */
    public function getCreateTransactionModel($type): CreateTransactionModel
    {
        $body = new CreateTransactionModel();
        $body
            ->setCompanyCode($this->avaTaxClientConfig->getCompanyCode())
            ->setCustomerCode($this->avaTaxClientConfig->getCompanyCode())
            ->setType($type)
            ->setDate(new \DateTime())
            ->setAddresses(
                (new AddressesModel())
                    ->setShipTo(
                        (new AddressLocationInfo())
                            ->setLine1("2560 Blake")
                            ->setLine2("")
                            ->setCity("Denver")
                            ->setRegion("CO")
                            ->setPostalCode("80401")
                            ->setCountry("US")
                    )
                    ->setShipFrom(
                        (new AddressLocationInfo())
                            ->setLine1("123 Main Street")
                            ->setLine2("Ste 101")
                            ->setCity("Mountain View")
                            ->setRegion("CA")
                            ->setPostalCode("95401")
                            ->setCountry("US")
                    )
            )
            ->setDescription("Test transaction fun!")
            ->setLines(
                [
                    (new LineItemModel())
                        ->setDescription("Base charge")
                        ->setAmount(49.99)
                        ->setTaxIncluded(false),
                    (new LineItemModel())
                        ->setDescription("Handling")
                        ->setAmount(7.77)
                        ->setTaxIncluded(true),
                
                ]
            );
        return $body;
    }
    
    public function getTransactionsApi(): TransactionsApi
    {
        return new TransactionsApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            null,
            $this->avaTaxClientConfig->getConfiguration()
        );
    }
    /**
     * @return AddressesApi
     */
    public function getAddressesApi(): AddressesApi
    {
        $apiInstance = new AddressesApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            null,
            $this->avaTaxClientConfig->getConfiguration()
        );
        return $apiInstance;
    }
    
}
