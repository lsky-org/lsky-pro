<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* GraphCollectionRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Http;

use Microsoft\Graph\Exception\GraphException;
use Microsoft\Graph\Core\GraphConstants;

/**
 * Class GraphCollectionRequest
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class GraphCollectionRequest extends GraphRequest
{
    /**
    * The size of page to divide the collection into
    *
    * @var int
    */
    protected $pageSize;
    /**
    * The next link to use in calling a new page of results
    *
    * @var string
    */
    protected $nextLink;
    /**
    * The delta link to use in calling /delta a subsequent time
    *
    * @var string
    */
    protected $deltaLink;
    /**
    * True if the user has reached the end of the collection
    *
    * @var bool
    */
    protected $end;
    /**
    * The endpoint that the user called (with query parameters)
    *
    * @var string
    */
    protected $originalEndpoint;
    /**
     * The return type that the user specified
     *
     * @var object
     */
    protected $originalReturnType;

    /**
    * Constructs a new GraphCollectionRequest object
    *
    * @param string $requestType The HTTP verb for the
    *                            request ("GET", "POST", "PUT", etc.)
    * @param string $endpoint    The URI of the endpoint to hit
    * @param string $accessToken A valid access token
    * @param string $baseUrl     The base URL of the request
    * @param string $apiVersion  The version of the API to call
    * @param string $proxyPort   The url where to proxy through
    * @throws GraphException when no access token is provided
    */
    public function __construct($requestType, $endpoint, $accessToken, $baseUrl, $apiVersion, $proxyPort = null)
    {
        parent::__construct(
            $requestType,
            $endpoint,
            $accessToken,
            $baseUrl,
            $apiVersion,
            $proxyPort
        );
        $this->end = false;
    }

	/**
	 * Gets the number of entries in the collection
	 *
	 * @return int the number of entries
	 * @throws GraphException
	 */
    public function count()
    {
        $query = '$count=true';
        $request = new GraphRequest(
            $this->requestType,
            $this->endpoint . $this->getConcatenator() . $query,
            $this->accessToken,
            $this->baseUrl,
            $this->apiVersion,
            $this->proxyPort
        );
        $result = $request->execute()->getBody();

        if (array_key_exists("@odata.count", $result)) {
            return $result['@odata.count'];
        }

        /* The $count query parameter for the Graph API
           is available on several models but not all */
        trigger_error('Count unavailable for this collection');
    }

    /**
    * Sets the number of results to return with each call
    * to "getPage()"
    *
    * @param int $pageSize The page size
    *
     * @throws GraphException if the requested page size exceeds
     *         the Graph's defined page size limit
    * @return GraphCollectionRequest object
    */
    public function setPageSize($pageSize)
    {
        if ($pageSize > GraphConstants::MAX_PAGE_SIZE) {
            throw new GraphException(GraphConstants::MAX_PAGE_SIZE_ERROR);
        }
        $this->pageSize = $pageSize;
        return $this;
    }

	/**
	 * Gets the next page of results
	 *
	 * @param bool $prev When true, get the previous page
	 *
	 * @return array of objects of class $returnType
	 * @throws GraphException
	 */
    public function getPage()
    {
        $this->setPageCallInfo();
        $response = $this->execute();

        return $this->processPageCallReturn($response);
    }

    /**
    * Sets the required query information to get a new page
    *
    * @param bool $prev Set to true for the previous page
    *
    * @return GraphCollectionRequest
    */
    public function setPageCallInfo()
    {
        // Store these to add temporary query data to request
        $this->originalReturnType = $this->returnType;

        /* This allows processPageCallReturn to receive
           all of the response data, not just the objects */
        $this->returnType = null;

        if ($this->end) {
            trigger_error('Reached end of collection');
        }

        if ($this->nextLink) {
            $baseLength = strlen($this->baseUrl) + strlen($this->apiVersion);
            $this->endpoint = substr($this->nextLink, $baseLength);
        } else {
            // This is the first request to the endpoint
            if ($this->pageSize) {
                $this->endpoint .= $this->getConcatenator() . '$top=' . $this->pageSize;
            }
        }
        return $this;
    }

    /**
    * Clean up after making a page call request
    *
    * @param GraphResponse $response The GraphResponse returned
    *        after making a page call
    *
    * @return mixed result of the call, formatted according
    *         to the returnType set by the user
    */
    public function processPageCallReturn($response)
    {
        $this->nextLink = $response->getNextLink();
        $this->deltaLink = $response->getDeltaLink();

        /* If no skip token is returned, we have reached the end
           of the collection */
        if (!$this->nextLink) {
            $this->end = true;
        }

        $result = $response->getBody();

        // Cast as user-defined model
        if ($this->originalReturnType) {
            $result = $response->getResponseAsObject($this->originalReturnType);
        }

        // Restore user-defined parameters
        $this->returnType = $this->originalReturnType;

        return $result;
    }

    /**
    * Gets whether the user has reached the end of the collection
    *
    * @return bool The end
    */
    public function isEnd()
    {
        return $this->end;
    }

    /**
    * Gets a delta link to use with subsequent
    * calls to /delta
    *
    * @return string|null The delta link
    */
    public function getDeltaLink()
    {
        return $this->deltaLink;
    }
}