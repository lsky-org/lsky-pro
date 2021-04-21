<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSignInDetailedSummary File
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
* ApplicationSignInDetailedSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationSignInDetailedSummary extends Entity
{
    /**
    * Gets the aggregatedEventDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The aggregatedEventDateTime
    */
    public function getAggregatedEventDateTime()
    {
        if (array_key_exists("aggregatedEventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["aggregatedEventDateTime"], "\DateTime")) {
                return $this->_propDict["aggregatedEventDateTime"];
            } else {
                $this->_propDict["aggregatedEventDateTime"] = new \DateTime($this->_propDict["aggregatedEventDateTime"]);
                return $this->_propDict["aggregatedEventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the aggregatedEventDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The aggregatedEventDateTime
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAggregatedEventDateTime($val)
    {
        $this->_propDict["aggregatedEventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * Name of the application that the user signed in to.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * Name of the application that the user signed in to.
    *
    * @param string $val The appDisplayName
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * ID of the application that the user signed in to.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    * ID of the application that the user signed in to.
    *
    * @param string $val The appId
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInCount
    * Count of sign-ins made by the application.
    *
    * @return int The signInCount
    */
    public function getSignInCount()
    {
        if (array_key_exists("signInCount", $this->_propDict)) {
            return $this->_propDict["signInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInCount
    * Count of sign-ins made by the application.
    *
    * @param int $val The signInCount
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setSignInCount($val)
    {
        $this->_propDict["signInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the status
    * Details of the sign-in status.
    *
    * @return SignInStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SignInStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Details of the sign-in status.
    *
    * @param SignInStatus $val The status
    *
    * @return ApplicationSignInDetailedSummary
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
