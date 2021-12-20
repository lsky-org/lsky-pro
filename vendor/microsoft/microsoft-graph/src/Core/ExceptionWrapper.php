<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* ExceptionWrapper File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/

namespace Microsoft\Graph\Core;

use GuzzleHttp\Exception\BadResponseException;
use Microsoft\Graph\Exception\GraphException;

/**
 * Class ExceptionWrapper
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
class ExceptionWrapper
{
    /**
     * Wrap Guzzle BadResponseException which returns truncated exception messages for 4xx and 5xx responses.
     * Adds response body to the exception message.
     *
     * @param BadResponseException $ex
     * @return GraphException containing HTTP response from Graph API
     * 
     */
    public static function wrapGuzzleBadResponseException(BadResponseException $ex)
    {
        $errMsg = "Received {$ex->getResponse()->getStatusCode()} for call to {$ex->getRequest()->getUri()}\nAPI response: {$ex->getResponse()->getBody()->getContents()}";
        return new GraphException($errMsg);
    }
} 