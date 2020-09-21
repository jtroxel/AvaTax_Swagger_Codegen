<?php


use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

/**
 * @covers AvaTaxClient
 */
final class AvaTaxClientTest extends TestCase
{

    /**
     * @var \Swagger\Client\Configuration $config
     */
    private $config;
   /**
     * @var \Avalara\PingResultModel
     */
    private $auth;
    /**
     * @var array|false|string
     */
    private $company_code;

    /** @var \Avalara\AvaTaxClient $client */
    private $client;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }

    public function setUp(): void
    {
        parent::setUp();
        // Create a new client
        if (!$this->client) {
            $this->company_code = getenv('SANDBOX_COMPANY');
            $this->client = new Avalara\AvaTaxClient($this->company_code, '1.0', 'localhost', 'production');
        }
        // Configure HTTP basic authorization: UserSecurity
        $this->configuration = $this->config = Swagger\Client\Configuration::getDefaultConfiguration()
            ->setUsername(getenv('SANDBOX_USERNAME'))
            ->setPassword(getenv('SANDBOX_PASSWORD'))
            ->setHost("rest.avatax.com");

    }

    public function testAuth()
    {
        $apiInstance = new Swagger\Client\Api\UtilitiesApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            $this->client->getClient(),
            $this->config
        );
        $apiInstance->ping();
        $this->assertNotNull($this->auth, "Should be able to call Ping");
        $this->assertEquals(true, $this->auth->authenticated, "Environment variables should provide correct authentication");
    }

    public function testConstructorThrowsExceptionForMissingRequirements()
    {
        $this->expectException(\Exception::class);
        new Avalara\AvaTaxClient('', '', '', '');
    }


    public function testValidateAddressResolve()
    {   #
        $addResolution = $this->client->resolveAddress('2560 Blake', null, null, 'Denver', 'CO', '80401', 'US', TextCase::C_MIXED);

        $this->assertNotNull($addResolution, "Response ARM is not null");
        $this->assertEquals($addResolution->validatedAddresses[0]->postalCode, '80205-2180');

    }

    public function testCreateSalesOrderTransaction()
    {

        // Create a basic company with nexus in the state of Washington
//        $model = new Avalara\CompanyInitializationModel();
//        $model->city = "Bainbridge Island";
//        $model->companyCode = getenv('SANDBOX_COMPANY');
//        $model->country = "US";
//        $model->email = "bob@example.org";
//        $model->faxNumber = null;
//        $model->firstName = "Bob";
//        $model->lastName = "McExample";
//        $model->line1 = "100 Ravine Lane";
//        $model->mobileNumber = "206 555 1212";
//        $model->phoneNumber = "206 555 1212";
//        $model->postalCode = "98110";
//        $model->region = "WA";
//        $model->taxpayerIdNumber = "123456789";
//        $model->name = "Bob's Greatest Popcorn";
//        $model->title = "Owner/CEO";
//        $testCompany = $client->companyInitialize($model);
//
//        // Assert that company setup succeeded
//        $this->assertNotNull($testCompany, "Test company should be created");
//        $this->assertTrue(count($testCompany->nexus) > 0, "Test company should have nexus");
//        $this->assertTrue(count($testCompany->locations)> 0, "Test company should have locations");
        $tb = $this->getTransactionBuilderFor(Avalara\DocumentType::C_SALESORDER);

        // Put in transaction details to the TransactionBuilder object we just created
        $createTransactionModel = $this->buildTransactionModel($tb);

        $this->assertNotNull($createTransactionModel, "Response stdClass is not null");
//        $this->assertTrue($createTransactionModel instanceof TransactionModel);

        // echo out the transaction response from CreateTransaction
        // echo '<pre>' . json_encode($createTransactionModel, JSON_PRETTY_PRINT) . '</pre>';
    }

    /**
     * @return stdClass
     */
    public function testCreateSalesInvoiceTransaction(): stdClass
    {
        // Construct and assert if we can initiate a new transaction builder object
        $tb = $this->getTransactionBuilderFor(Avalara\DocumentType::C_SALESINVOICE);

        // Put in transaction details to the TransactionBuilder object we just created
        $create_transaction = $this->buildTransactionModel($tb);

        $this->assertNotNull($create_transaction, "Response stdClass is not null");
        return $create_transaction;
        //  $this->assertTrue($createTransactionModel instanceof TransactionModel);
    }

    /**
     * @depends testCreateSalesInvoiceTransaction
     */
    public function testSalesInvoiceCommitTransaction($createTransactionModel)
    {

        $trans_id = $createTransactionModel->id; // This will have to be persisted, saved with user or something

        $recorded_transaction = $this->client->getTransactionById($createTransactionModel->id);
        $this->assertNotNull($recorded_transaction, "Couldn't retrieve transaction we just saved");

        $commitFlag = new CommitTransactionModel();
        $commitFlag->commit = true;
        $status = $this->client->commitTransaction($this->company_code, $recorded_transaction->code,
            Avalara\DocumentType::C_SALESINVOICE, 'SummaryOnly', $commitFlag);
        $this->assertNotNull($status, "No result from commit");
        $this->assertEquals($status->status, 'Committed');

        return $trans_id;
    }


    /**
     * @depends testSalesInvoiceCommitTransaction
     */
    public function testRefundTransaction($transId)
    {
        $committed_transaction = $this->client->getTransactionById($transId);
        $this->assertNotNull($committed_transaction, "Couldn't retrieve transaction we just committed");

        $refundTransactionModel = new RefundTransactionModel();
        $refundTransactionModel->referenceCode = 'wtf';
        $refundTransactionModel->refundTransactionCode = $committed_transaction->code . '_refunded';
        $refundTransactionModel->refundDate = "2020-09-18";
        $refundTransactionModel->refundType = 'Full';


        $status = $this->client->refundTransaction($this->company_code, $committed_transaction->code, 'SummaryOnly',
            Avalara\DocumentType::C_SALESINVOICE, 'true', $refundTransactionModel);
        $this->assertNotNull($status, "No result from commit");

    }

    public function testExtendingAvaTaxWorkFlow()
    {
        // Create an instance of an extended class of AvaTaxClient, and test the inherited functionalities and also the ability to add additional config/info on the client object
        $client = new Avalara\ClientExtensionExample('phpTestApp', '1.0', 'travis-ci', 'sandbox', [], 'my additional client info');
        $myClient = $client->getClient();

        // assertions with comment
        $this->assertInstanceOf(Avalara\AvaTaxClient::class, $myClient, "getClient returns an AvaTaxClient object when called by an instance from an extended class");
        $this->assertTrue($myClient->echoAddedConfig() == "my additional client info", "Extended method can hold additional client configuration/info");

        // add credentials
        $client->withSecurity(getenv('SANDBOX_USERNAME'), getenv('SANDBOX_PASSWORD'));

        // Call 'Ping' to verify that we are connected
        $p = $client->Ping();
        $this->assertNotNull($p, "Should be able to call Ping");
    }

    /**
     * @param \Avalara\TransactionBuilder $tb
     * @return stdClass # TODO TransactionModel
     */
    public function buildTransactionModel(\Avalara\TransactionBuilder $tb)
    {
        $createTransactionModel = $tb->withAddress('ShipFrom', '123 Main Street', null, null, 'Irvine', 'CA', '92615', 'US')
            ->withAddress('ShipTo', '2560 Blake', null, null, 'Denver', 'CO', '80401', 'US')
            ->withLine(100.0, 1, null, "P0000000")
            ->withLine(1234.56, 1, null, "P0000000")
            ->withExemptLine(50.0, null, "NT")
            ->withLine(2000.0, 1, null, "P0000000")
            ->withLineAddress(Avalara\TransactionAddressType::C_SHIPFROM, "123 Main Street", null, null, "Irvine", "CA", "92615", "US")
            ->withLineAddress(Avalara\TransactionAddressType::C_SHIPTO, "1500 Broadway", null, null, "New York", "NY", "10019", "US")
            ->withLine(50.0, 1, null, "FR010000")
            ->create();
        # create calls transactions/create with the internal CreateTransactionModel held in the builder,
        #    https://sandbox-rest.avatax.com/swagger/ui/index.html#/Transactions/CreateTransaction
        #    returns a stdObj rep of a TransactionModel json_decoded from CreateTransaction json
        #       (Note:  We could subclass the client and override restCall to serialize into an object or something)
        return $createTransactionModel;
    }

    /**
     * @param $docType
     * @return \Avalara\TransactionBuilder
     */
    public function getTransactionBuilderFor($docType): \Avalara\TransactionBuilder
    {
// Construct and assert if we can initiate a new transaction builder object
        $tb = new Avalara\TransactionBuilder($this->client, $this->company_code,
            $docType, 'ABC');
        $this->assertNotNull($tb, "TransactionBuilder object can be created");
        $this->assertInstanceOf(Avalara\TransactionBuilder::class, $tb);
        return $tb;
    }

}
