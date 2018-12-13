<?php
/**
 * VersionApi
 * PHP version 5
 *
 * @category Class
 * @package  ketoSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Package main ORY Keto
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.sh
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ketoSDK\Api;

use \ketoSDK\ApiClient;
use \ketoSDK\ApiException;
use \ketoSDK\Configuration;
use \ketoSDK\ObjectSerializer;

/**
 * VersionApi Class Doc Comment
 *
 * @category Class
 * @package  ketoSDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VersionApi
{
    /**
     * API Client
     *
     * @var \ketoSDK\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ketoSDK\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ketoSDK\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ketoSDK\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ketoSDK\ApiClient $apiClient set the API client
     *
     * @return VersionApi
     */
    public function setApiClient(\ketoSDK\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getVersion
     *
     * Get service version
     *
     * Client for keto
     *
     * @throws \ketoSDK\ApiException on non-2xx response
     * @return \ketoSDK\Model\Version
     */
    public function getVersion()
    {
        list($response) = $this->getVersionWithHttpInfo();
        return $response;
    }

    /**
     * Operation getVersionWithHttpInfo
     *
     * Get service version
     *
     * Client for keto
     *
     * @throws \ketoSDK\ApiException on non-2xx response
     * @return array of \ketoSDK\Model\Version, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVersionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/version";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ketoSDK\Model\Version',
                '/version'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ketoSDK\Model\Version', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ketoSDK\Model\Version', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}