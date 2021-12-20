<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelServerLogCollectionResponse File
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
* MicrosoftTunnelServerLogCollectionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelServerLogCollectionResponse extends Entity
{
    /**
    * Gets the endDateTime
    * The end time of the logs collected
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * The end time of the logs collected
    *
    * @param \DateTime $val The endDateTime
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expiryDateTime
    * The time when the log collection is expired
    *
    * @return \DateTime The expiryDateTime
    */
    public function getExpiryDateTime()
    {
        if (array_key_exists("expiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryDateTime"], "\DateTime")) {
                return $this->_propDict["expiryDateTime"];
            } else {
                $this->_propDict["expiryDateTime"] = new \DateTime($this->_propDict["expiryDateTime"]);
                return $this->_propDict["expiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiryDateTime
    * The time when the log collection is expired
    *
    * @param \DateTime $val The expiryDateTime
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setExpiryDateTime($val)
    {
        $this->_propDict["expiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestDateTime
    * The time when the log collection was requested
    *
    * @return \DateTime The requestDateTime
    */
    public function getRequestDateTime()
    {
        if (array_key_exists("requestDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestDateTime"], "\DateTime")) {
                return $this->_propDict["requestDateTime"];
            } else {
                $this->_propDict["requestDateTime"] = new \DateTime($this->_propDict["requestDateTime"]);
                return $this->_propDict["requestDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestDateTime
    * The time when the log collection was requested
    *
    * @param \DateTime $val The requestDateTime
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setRequestDateTime($val)
    {
        $this->_propDict["requestDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverId
    * ID of the server the log collection is requested upon
    *
    * @return string The serverId
    */
    public function getServerId()
    {
        if (array_key_exists("serverId", $this->_propDict)) {
            return $this->_propDict["serverId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serverId
    * ID of the server the log collection is requested upon
    *
    * @param string $val The serverId
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setServerId($val)
    {
        $this->_propDict["serverId"] = $val;
        return $this;
    }
    
    /**
    * Gets the sizeInBytes
    * The size of the logs in bytes
    *
    * @return int The sizeInBytes
    */
    public function getSizeInBytes()
    {
        if (array_key_exists("sizeInBytes", $this->_propDict)) {
            return $this->_propDict["sizeInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sizeInBytes
    * The size of the logs in bytes
    *
    * @param int $val The sizeInBytes
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setSizeInBytes($val)
    {
        $this->_propDict["sizeInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * The start time of the logs collected
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * The start time of the logs collected
    *
    * @param \DateTime $val The startDateTime
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of log collection. Possible values are: pending, completed, failed.
    *
    * @return MicrosoftTunnelLogCollectionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\MicrosoftTunnelLogCollectionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new MicrosoftTunnelLogCollectionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The status of log collection. Possible values are: pending, completed, failed.
    *
    * @param MicrosoftTunnelLogCollectionStatus $val The status
    *
    * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
