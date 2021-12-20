<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallTranscriptionInfo File
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
* CallTranscriptionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallTranscriptionInfo extends Entity
{

    /**
    * Gets the lastModifiedDateTime
    * The state modified time in UTC.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The state modified time in UTC.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return CallTranscriptionInfo The CallTranscriptionInfo
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Possible values are: notStarted, active, inactive.
    *
    * @return CallTranscriptionState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\CallTranscriptionState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new CallTranscriptionState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Possible values are: notStarted, active, inactive.
    *
    * @param CallTranscriptionState $val The value to assign to the state
    *
    * @return CallTranscriptionInfo The CallTranscriptionInfo
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
