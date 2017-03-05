<?php
/**
 * WorkItemsApi
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
 * WorkItemsApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkItemsApi extends AbstractApi
{
    /**
     * Operation createWorkItem
     *
     * Creates a new WorkItem.
     *
     * @param \Autodesk\Client\Model\WorkItem $work_item (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\WorkItemResp
     */
    public function createWorkItem($work_item)
    {
        list($response) = $this->createWorkItemWithHttpInfo($work_item);
        return $response;
    }

    /**
     * Operation createWorkItemWithHttpInfo
     *
     * Creates a new WorkItem.
     *
     * @param \Autodesk\Client\Model\WorkItem $work_item (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\WorkItemResp, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWorkItemWithHttpInfo($work_item)
    {
        // verify the required parameter 'work_item' is set
        if ($work_item === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_item when calling createWorkItem');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/WorkItems";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($work_item)) {
            $_tempBody = $work_item;
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
                '\Autodesk\Client\Model\WorkItemResp',
                '/autocad.io/us-east/v2/WorkItems'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\WorkItemResp', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\WorkItemResp', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteWorkItem
     *
     * Removes a specific WorkItem.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteWorkItem($id)
    {
        list($response) = $this->deleteWorkItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteWorkItemWithHttpInfo
     *
     * Removes a specific WorkItem.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWorkItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteWorkItem');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/WorkItems(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                null,
                '/autocad.io/us-east/v2/WorkItems(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getAllWorkItems
     *
     * Returns the details of all WorkItems.
     *
     * @param int $skip (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\DesignAutomationWorkItems
     */
    public function getAllWorkItems($skip = null)
    {
        list($response) = $this->getAllWorkItemsWithHttpInfo($skip);
        return $response;
    }

    /**
     * Operation getAllWorkItemsWithHttpInfo
     *
     * Returns the details of all WorkItems.
     *
     * @param int $skip (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\DesignAutomationWorkItems, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWorkItemsWithHttpInfo($skip = null)
    {
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/WorkItems";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($skip !== null) {
            $queryParams['$skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
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
                '\Autodesk\Client\Model\DesignAutomationWorkItems',
                '/autocad.io/us-east/v2/WorkItems'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\DesignAutomationWorkItems', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\DesignAutomationWorkItems', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWorkItem
     *
     * Returns the details of a specific WorkItem.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\WorkItemResp
     */
    public function getWorkItem($id)
    {
        list($response) = $this->getWorkItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getWorkItemWithHttpInfo
     *
     * Returns the details of a specific WorkItem.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\WorkItemResp, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWorkItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getWorkItem');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/WorkItems(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Autodesk\Client\Model\WorkItemResp',
                '/autocad.io/us-east/v2/WorkItems(&#39;{id}&#39;)'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\WorkItemResp', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\WorkItemResp', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
