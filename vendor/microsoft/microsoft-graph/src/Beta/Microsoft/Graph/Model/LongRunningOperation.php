<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LongRunningOperation File
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
* LongRunningOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LongRunningOperation extends Entity
{
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return LongRunningOperation
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActionDateTime
    *
    * @return \DateTime The lastActionDateTime
    */
    public function getLastActionDateTime()
    {
        if (array_key_exists("lastActionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastActionDateTime"], "\DateTime")) {
                return $this->_propDict["lastActionDateTime"];
            } else {
                $this->_propDict["lastActionDateTime"] = new \DateTime($this->_propDict["lastActionDateTime"]);
                return $this->_propDict["lastActionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActionDateTime
    *
    * @param \DateTime $val The lastActionDateTime
    *
    * @return LongRunningOperation
    */
    public function setLastActionDateTime($val)
    {
        $this->_propDict["lastActionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceLocation
    *
    * @return string The resourceLocation
    */
    public function getResourceLocation()
    {
        if (array_key_exists("resourceLocation", $this->_propDict)) {
            return $this->_propDict["resourceLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceLocation
    *
    * @param string $val The resourceLocation
    *
    * @return LongRunningOperation
    */
    public function setResourceLocation($val)
    {
        $this->_propDict["resourceLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return LongRunningOperationStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\LongRunningOperationStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new LongRunningOperationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param LongRunningOperationStatus $val The status
    *
    * @return LongRunningOperation
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusDetail
    *
    * @return string The statusDetail
    */
    public function getStatusDetail()
    {
        if (array_key_exists("statusDetail", $this->_propDict)) {
            return $this->_propDict["statusDetail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statusDetail
    *
    * @param string $val The statusDetail
    *
    * @return LongRunningOperation
    */
    public function setStatusDetail($val)
    {
        $this->_propDict["statusDetail"] = $val;
        return $this;
    }
    
}
