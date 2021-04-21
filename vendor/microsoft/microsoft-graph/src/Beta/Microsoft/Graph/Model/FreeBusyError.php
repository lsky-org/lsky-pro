<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FreeBusyError File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* FreeBusyError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FreeBusyError extends Entity
{
    /**
    * Gets the message
    * Describes the error.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * Describes the error.
    *
    * @param string $val The value of the message
    *
    * @return FreeBusyError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the responseCode
    * The response code from querying for the availability of the user, distribution list, or resource.
    *
    * @return string The responseCode
    */
    public function getResponseCode()
    {
        if (array_key_exists("responseCode", $this->_propDict)) {
            return $this->_propDict["responseCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responseCode
    * The response code from querying for the availability of the user, distribution list, or resource.
    *
    * @param string $val The value of the responseCode
    *
    * @return FreeBusyError
    */
    public function setResponseCode($val)
    {
        $this->_propDict["responseCode"] = $val;
        return $this;
    }
}
