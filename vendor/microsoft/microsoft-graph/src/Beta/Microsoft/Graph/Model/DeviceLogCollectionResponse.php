<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceLogCollectionResponse File
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
* DeviceLogCollectionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceLogCollectionResponse extends Entity
{
    /**
    * Gets the errorCode
    * The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    * The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    *
    * @param int $val The errorCode
    *
    * @return DeviceLogCollectionResponse
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the expirationDateTimeUTC
    * The DateTime of the expiration of the logs
    *
    * @return \DateTime The expirationDateTimeUTC
    */
    public function getExpirationDateTimeUTC()
    {
        if (array_key_exists("expirationDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTimeUTC"], "\DateTime")) {
                return $this->_propDict["expirationDateTimeUTC"];
            } else {
                $this->_propDict["expirationDateTimeUTC"] = new \DateTime($this->_propDict["expirationDateTimeUTC"]);
                return $this->_propDict["expirationDateTimeUTC"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTimeUTC
    * The DateTime of the expiration of the logs
    *
    * @param \DateTime $val The expirationDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setExpirationDateTimeUTC($val)
    {
        $this->_propDict["expirationDateTimeUTC"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedByUserPrincipalName
    * The UPN for who initiated the request
    *
    * @return string The initiatedByUserPrincipalName
    */
    public function getInitiatedByUserPrincipalName()
    {
        if (array_key_exists("initiatedByUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["initiatedByUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initiatedByUserPrincipalName
    * The UPN for who initiated the request
    *
    * @param string $val The initiatedByUserPrincipalName
    *
    * @return DeviceLogCollectionResponse
    */
    public function setInitiatedByUserPrincipalName($val)
    {
        $this->_propDict["initiatedByUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    * The device Id
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    * The device Id
    *
    * @param string $val The managedDeviceId
    *
    * @return DeviceLogCollectionResponse
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the receivedDateTimeUTC
    * The DateTime the request was received
    *
    * @return \DateTime The receivedDateTimeUTC
    */
    public function getReceivedDateTimeUTC()
    {
        if (array_key_exists("receivedDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTimeUTC"], "\DateTime")) {
                return $this->_propDict["receivedDateTimeUTC"];
            } else {
                $this->_propDict["receivedDateTimeUTC"] = new \DateTime($this->_propDict["receivedDateTimeUTC"]);
                return $this->_propDict["receivedDateTimeUTC"];
            }
        }
        return null;
    }
    
    /**
    * Sets the receivedDateTimeUTC
    * The DateTime the request was received
    *
    * @param \DateTime $val The receivedDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setReceivedDateTimeUTC($val)
    {
        $this->_propDict["receivedDateTimeUTC"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedDateTimeUTC
    * The DateTime of the request
    *
    * @return \DateTime The requestedDateTimeUTC
    */
    public function getRequestedDateTimeUTC()
    {
        if (array_key_exists("requestedDateTimeUTC", $this->_propDict)) {
            if (is_a($this->_propDict["requestedDateTimeUTC"], "\DateTime")) {
                return $this->_propDict["requestedDateTimeUTC"];
            } else {
                $this->_propDict["requestedDateTimeUTC"] = new \DateTime($this->_propDict["requestedDateTimeUTC"]);
                return $this->_propDict["requestedDateTimeUTC"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestedDateTimeUTC
    * The DateTime of the request
    *
    * @param \DateTime $val The requestedDateTimeUTC
    *
    * @return DeviceLogCollectionResponse
    */
    public function setRequestedDateTimeUTC($val)
    {
        $this->_propDict["requestedDateTimeUTC"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    * The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    * The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The size
    *
    * @return DeviceLogCollectionResponse
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of the log collection request
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * The status of the log collection request
    *
    * @param string $val The status
    *
    * @return DeviceLogCollectionResponse
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
