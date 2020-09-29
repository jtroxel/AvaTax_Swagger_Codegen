<?php

namespace Together\Taxes\Provider\AvaTax;

use Exception;
use Together\Taxes\Provider\AvaTax\Swagger\Configuration;

/**
 * Base AvaTaxClientConfig object that holds connectivity data for the AvaTax v2 API server.
 * Note: based off the Client class from the Client SDK, but only holds the configuration data
 */
class AvaTaxClientConfig
{
    const AVATAX_BASE_URI_LIVE = 'https://rest.avatax.com';
    const AVATAX_BASE_URI_SANDBOX = 'https://sandbox-rest.avatax.com';
    const SMUGMUG_AVATAX_CLIENT_SWAGGER_CODEGEN_V_0_1 = "smugmug/avatax-client-swagger-codegen; v0.1";
    
    /**
     * @var Configuration $configuration The Guzzle client to use to connect to AvaTax
     */
    protected $configuration;
    
    /**
     * @var string      The application name as reported to AvaTax
     */
    protected $appName;
    
    /**
     * @var string      The application version as reported to AvaTax
     */
    protected $appVersion;
    
    /**
     * @var string      The machine name as reported to AvaTax
     */
    protected $machineName;
    
    /**
     * @var string      The root URL of the AvaTax environment to contact
     */
    protected $environment;
    
    /** @var array $guzzleParams additional params for Guzzle client */
    private $guzzleParams;
    
    /** @var string $companyCode The "code" set up with the Avalara account */
    private $companyCode;
    
    /**
     * Construct a new AvaTaxClientConfig
     *
     * @param string $customerCode a string ID for this customer, not the companyCode of the avatax account
     * @param string|null $appName Specify the name of your application here.  Should not contain any semicolons.
     * @param string|null $appVersion Specify the version number of your application here.
     *                                Should not contain any semicolons.
     * @param string $environment Indicates which server to use; acceptable values are "sandbox" or "production",
     *                                or the full URL of your AvaTax instance.
     * @throws Exception
     */
    public function __construct(
        string $customerCode,
        ?string $appName = null,
        ?string $appVersion = null,
        $environment = ""
    ) {
        $this->companyCode = $customerCode;
        $this->configuration = Configuration::getDefaultConfiguration();
        $this->appName = $appName ?? $customerCode; // App "name" defaults to customer code
        $this->appVersion = $appVersion ?? "";
        $this->environment = $environment;
        $this->guzzleParams = [];
        
        // Determine startup environment
        $base_uri = self::AVATAX_BASE_URI_LIVE;
        if ($environment == "sandbox") {
            $base_uri = self::AVATAX_BASE_URI_SANDBOX;
        } elseif ((substr($environment, 0, 8) == 'https://')
            || (substr($environment, 0, 7) == 'http://')) {
            $base_uri = $environment;
        }
        
        // Prevent overriding the base_uri
        $this->configuration->setHost($base_uri);
    }
    
    /**
     * Configure this client to use the specified username/password security settings
     *
     * @param string $username The username for your AvaTax user account
     * @param string $password The password for your AvaTax user account
     * @return AvaTaxClientConfig
     */
    public function withBasicAuth($username, $password)
    {
        $this->configuration->setUsername($username);
        $this->configuration->setPassword($password);
        return $this;
    }
    
    /**
     * Configure this client to use Account ID / License Key security
     *
     * @param int $accountId The account ID for your AvaTax account
     * @param string $licenseKey The private license key for your AvaTax account
     * @return AvaTaxClientConfig
     */
    /*    public function withLicenseKey($accountId, $licenseKey)
        {
            // TODO
            return $this;
        }*/
    
    /**
     * Configure this client to use bearer token
     *
     * @param string $bearerToken The private bearer token for your AvaTax account
     * @return AvaTaxClientConfig
     */
    public function withBearerToken($bearerToken)
    {
        $this->configuration->setAccessToken($bearerToken);
        return $this;
    }
    
    /**
     * Add additional params for client config
     * @param array $guzzleParams
     * @return $this
     */
    public function withParams(array $guzzleParams)
    {
        if (is_array($guzzleParams)) {
            $this->guzzleParams .= $guzzleParams;
        }
        return $this;
    }
    
    /**
     * Add optional machine name for client header
     * @param string $machineName
     * @return $this
     */
    public function withMachineName(string $machineName)
    {
        // machine name is nullable, but must be empty string to avoid error when concat in client string.
        $this->machineName = $machineName ?? "";
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCompanyCode(): string
    {
        return $this->companyCode;
    }
    
    /**
     * @return string
     */
    public function getAvaClientHeader(): string
    {
        return "{$this->appName}; {$this->appVersion}; "
            . self::SMUGMUG_AVATAX_CLIENT_SWAGGER_CODEGEN_V_0_1 . "; {$this->machineName}";
    }
    
    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }
    
}
