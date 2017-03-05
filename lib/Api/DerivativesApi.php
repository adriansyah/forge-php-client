<?php
/**
 * DerivativesApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Api;

use \Autodesk\Client\ApiException;

/**
 * DerivativesApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DerivativesApi extends AbstractApi
{
    /**
     * Operation deleteManifest
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Result
     */
    public function deleteManifest($urn)
    {
        list($response) = $this->deleteManifestWithHttpInfo($urn);
        return $response;
    }

    /**
     * Operation deleteManifestWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteManifestWithHttpInfo($urn)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling deleteManifest');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/manifest";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Result',
                '/modelderivative/v2/designdata/{urn}/manifest'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Result', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Diagnostics', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDerivativeManifest
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $derivative_urn The URL-encoded URN of the derivatives. The URN is retrieved from the GET :urn/manifest endpoint. (required)
     * @param int $range This is the standard RFC 2616 range request header. It only supports one range specifier per request: 1. Range:bytes&#x3D;0-63 (returns the first 64 bytes) 2. Range:bytes&#x3D;64-127 (returns the second set of 64 bytes) 3. Range:bytes&#x3D;1022- (returns all the bytes from offset 1022 to the end) 4. If the range header is not specified, the whole content is returned. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function getDerivativeManifest($urn, $derivative_urn, $range = null)
    {
        list($response) = $this->getDerivativeManifestWithHttpInfo($urn, $derivative_urn, $range);
        return $response;
    }

    /**
     * Operation getDerivativeManifestWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $derivative_urn The URL-encoded URN of the derivatives. The URN is retrieved from the GET :urn/manifest endpoint. (required)
     * @param int $range This is the standard RFC 2616 range request header. It only supports one range specifier per request: 1. Range:bytes&#x3D;0-63 (returns the first 64 bytes) 2. Range:bytes&#x3D;64-127 (returns the second set of 64 bytes) 3. Range:bytes&#x3D;1022- (returns all the bytes from offset 1022 to the end) 4. If the range header is not specified, the whole content is returned. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDerivativeManifestWithHttpInfo($urn, $derivative_urn, $range = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getDerivativeManifest');
        }
        // verify the required parameter 'derivative_urn' is set
        if ($derivative_urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $derivative_urn when calling getDerivativeManifest');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/manifest/{derivativeUrn}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/octet-stream']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($range !== null) {
            $headerParams['Range'] = $this->apiClient->getSerializer()->toHeaderValue($range);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // path params
        if ($derivative_urn !== null) {
            $resourcePath = str_replace(
                "{" . "derivativeUrn" . "}",
                $this->apiClient->getSerializer()->toPathValue($derivative_urn),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/modelderivative/v2/designdata/{urn}/manifest/{derivativeUrn}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getFormats
     *
     * 
     *
     * @param \DateTime $if_modified_since The supported formats are only returned if they were modified since the specified date. An invalid date returns the latest supported format list. If the supported formats have not been modified since the specified date, the endpoint returns a &#x60;NOT MODIFIED&#x60; (304) response. (optional)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Formats
     */
    public function getFormats($if_modified_since = null, $accept_encoding = null)
    {
        list($response) = $this->getFormatsWithHttpInfo($if_modified_since, $accept_encoding);
        return $response;
    }

    /**
     * Operation getFormatsWithHttpInfo
     *
     * 
     *
     * @param \DateTime $if_modified_since The supported formats are only returned if they were modified since the specified date. An invalid date returns the latest supported format list. If the supported formats have not been modified since the specified date, the endpoint returns a &#x60;NOT MODIFIED&#x60; (304) response. (optional)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Formats, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFormatsWithHttpInfo($if_modified_since = null, $accept_encoding = null)
    {
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/formats";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = $this->apiClient->getSerializer()->toHeaderValue($if_modified_since);
        }
        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = $this->apiClient->getSerializer()->toHeaderValue($accept_encoding);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Formats',
                '/modelderivative/v2/designdata/formats'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Formats', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Formats', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getManifest
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Manifest
     */
    public function getManifest($urn, $accept_encoding = null)
    {
        list($response) = $this->getManifestWithHttpInfo($urn, $accept_encoding);
        return $response;
    }

    /**
     * Operation getManifestWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Manifest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getManifestWithHttpInfo($urn, $accept_encoding = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getManifest');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/manifest";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = $this->apiClient->getSerializer()->toHeaderValue($accept_encoding);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Manifest',
                '/modelderivative/v2/designdata/{urn}/manifest'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Manifest', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Manifest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMetadata
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Metadata
     */
    public function getMetadata($urn, $accept_encoding = null)
    {
        list($response) = $this->getMetadataWithHttpInfo($urn, $accept_encoding);
        return $response;
    }

    /**
     * Operation getMetadataWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Metadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMetadataWithHttpInfo($urn, $accept_encoding = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getMetadata');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/metadata";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = $this->apiClient->getSerializer()->toHeaderValue($accept_encoding);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Metadata',
                '/modelderivative/v2/designdata/{urn}/metadata'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Metadata', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Metadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getModelviewMetadata
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $guid Unique model view ID. Call [GET {urn}/metadata](https://developer.autodesk.com/en/docs/model-derivative/v2/reference/http/urn-metadata-GET) to get the ID (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Metadata
     */
    public function getModelviewMetadata($urn, $guid, $accept_encoding = null)
    {
        list($response) = $this->getModelviewMetadataWithHttpInfo($urn, $guid, $accept_encoding);
        return $response;
    }

    /**
     * Operation getModelviewMetadataWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $guid Unique model view ID. Call [GET {urn}/metadata](https://developer.autodesk.com/en/docs/model-derivative/v2/reference/http/urn-metadata-GET) to get the ID (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Metadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getModelviewMetadataWithHttpInfo($urn, $guid, $accept_encoding = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getModelviewMetadata');
        }
        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling getModelviewMetadata');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/metadata/{guid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = $this->apiClient->getSerializer()->toHeaderValue($accept_encoding);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // path params
        if ($guid !== null) {
            $resourcePath = str_replace(
                "{" . "guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($guid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Metadata',
                '/modelderivative/v2/designdata/{urn}/metadata/{guid}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Metadata', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Metadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getModelviewProperties
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $guid Unique model view ID. Call [GET {urn}/metadata](https://developer.autodesk.com/en/docs/model-derivative/v2/reference/http/urn-metadata-GET) to get the ID (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Metadata
     */
    public function getModelviewProperties($urn, $guid, $accept_encoding = null)
    {
        list($response) = $this->getModelviewPropertiesWithHttpInfo($urn, $guid, $accept_encoding);
        return $response;
    }

    /**
     * Operation getModelviewPropertiesWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param string $guid Unique model view ID. Call [GET {urn}/metadata](https://developer.autodesk.com/en/docs/model-derivative/v2/reference/http/urn-metadata-GET) to get the ID (required)
     * @param string $accept_encoding If specified with &#x60;gzip&#x60; or &#x60;*&#x60;, content will be compressed and returned in a GZIP format. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Metadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getModelviewPropertiesWithHttpInfo($urn, $guid, $accept_encoding = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getModelviewProperties');
        }
        // verify the required parameter 'guid' is set
        if ($guid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $guid when calling getModelviewProperties');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/metadata/{guid}/properties";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($accept_encoding !== null) {
            $headerParams['Accept-Encoding'] = $this->apiClient->getSerializer()->toHeaderValue($accept_encoding);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // path params
        if ($guid !== null) {
            $resourcePath = str_replace(
                "{" . "guid" . "}",
                $this->apiClient->getSerializer()->toPathValue($guid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Metadata',
                '/modelderivative/v2/designdata/{urn}/metadata/{guid}/properties'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Metadata', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Metadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getThumbnail
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param int $width The desired width of the thumbnail. Possible values are 100, 200 and 400. (optional)
     * @param int $height The desired height of the thumbnail. Possible values are 100, 200 and 400. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \SplFileObject
     */
    public function getThumbnail($urn, $width = null, $height = null)
    {
        list($response) = $this->getThumbnailWithHttpInfo($urn, $width, $height);
        return $response;
    }

    /**
     * Operation getThumbnailWithHttpInfo
     *
     * 
     *
     * @param string $urn The Base64 (URL Safe) encoded design URN (required)
     * @param int $width The desired width of the thumbnail. Possible values are 100, 200 and 400. (optional)
     * @param int $height The desired height of the thumbnail. Possible values are 100, 200 and 400. (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getThumbnailWithHttpInfo($urn, $width = null, $height = null)
    {
        // verify the required parameter 'urn' is set
        if ($urn === null) {
            throw new \InvalidArgumentException('Missing the required parameter $urn when calling getThumbnail');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/{urn}/thumbnail";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/octet-stream']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($width !== null) {
            $queryParams['width'] = $this->apiClient->getSerializer()->toQueryValue($width);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = $this->apiClient->getSerializer()->toQueryValue($height);
        }
        // path params
        if ($urn !== null) {
            $resourcePath = str_replace(
                "{" . "urn" . "}",
                $this->apiClient->getSerializer()->toPathValue($urn),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SplFileObject',
                '/modelderivative/v2/designdata/{urn}/thumbnail'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation translate
     *
     * 
     *
     * @param \Autodesk\Client\Model\JobPayload $job (required)
     * @param bool $x_ads_force &#x60;true&#x60;: the endpoint replaces previously translated output file types with the newly generated derivatives  &#x60;false&#x60; (default): previously created derivatives are not replaced (optional, default to false)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Job
     */
    public function translate($job, $x_ads_force = null)
    {
        list($response) = $this->translateWithHttpInfo($job, $x_ads_force);
        return $response;
    }

    /**
     * Operation translateWithHttpInfo
     *
     * 
     *
     * @param \Autodesk\Client\Model\JobPayload $job (required)
     * @param bool $x_ads_force &#x60;true&#x60;: the endpoint replaces previously translated output file types with the newly generated derivatives  &#x60;false&#x60; (default): previously created derivatives are not replaced (optional, default to false)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Job, HTTP status code, HTTP response headers (array of strings)
     */
    public function translateWithHttpInfo($job, $x_ads_force = null)
    {
        // verify the required parameter 'job' is set
        if ($job === null) {
            throw new \InvalidArgumentException('Missing the required parameter $job when calling translate');
        }
        // parse inputs
        $resourcePath = "/modelderivative/v2/designdata/job";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($x_ads_force !== null) {
            $headerParams['x-ads-force'] = $this->apiClient->getSerializer()->toHeaderValue($x_ads_force);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($job)) {
            $_tempBody = $job;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Job',
                '/modelderivative/v2/designdata/job'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Job', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Job', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Job', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Diagnostics', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
