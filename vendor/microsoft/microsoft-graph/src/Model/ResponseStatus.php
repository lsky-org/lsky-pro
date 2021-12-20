<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResponseStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ResponseStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResponseStatus extends Entity
{

    /**
    * Gets the response
    * The response type. Possible values are: None, Organizer, TentativelyAccepted, Accepted, Declined, NotResponded.
    *
    * @return ResponseType The response
    */
    public function getResponse()
    {
        if (array_key_exists("response", $this->_propDict)) {
            if (is_a($this->_propDict["response"], "\Microsoft\Graph\Model\ResponseType")) {
                return $this->_propDict["response"];
            } else {
                $this->_propDict["response"] = new ResponseType($this->_propDict["response"]);
                return $this->_propDict["response"];
            }
        }
        return null;
    }

    /**
    * Sets the response
    * The response type. Possible values are: None, Organizer, TentativelyAccepted, Accepted, Declined, NotResponded.
    *
    * @param ResponseType $val The value to assign to the response
    *
    * @return ResponseStatus The ResponseStatus
    */
    public function setResponse($val)
    {
        $this->_propDict["response"] = $val;
         return $this;
    }

    /**
    * Gets the time
    * The date and time that the response was returned. It uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "\DateTime")) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new \DateTime($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    * The date and time that the response was returned. It uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the time
    *
    * @return ResponseStatus The ResponseStatus
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
}
