<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationUserStateSummary File
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
* DeviceConfigurationUserStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceConfigurationUserStateSummary extends Entity
{
    /**
    * Gets the compliantUserCount
    * Number of compliant users
    *
    * @return int The compliantUserCount
    */
    public function getCompliantUserCount()
    {
        if (array_key_exists("compliantUserCount", $this->_propDict)) {
            return $this->_propDict["compliantUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantUserCount
    * Number of compliant users
    *
    * @param int $val The compliantUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setCompliantUserCount($val)
    {
        $this->_propDict["compliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictUserCount
    * Number of conflict users
    *
    * @return int The conflictUserCount
    */
    public function getConflictUserCount()
    {
        if (array_key_exists("conflictUserCount", $this->_propDict)) {
            return $this->_propDict["conflictUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictUserCount
    * Number of conflict users
    *
    * @param int $val The conflictUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setConflictUserCount($val)
    {
        $this->_propDict["conflictUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorUserCount
    * Number of error users
    *
    * @return int The errorUserCount
    */
    public function getErrorUserCount()
    {
        if (array_key_exists("errorUserCount", $this->_propDict)) {
            return $this->_propDict["errorUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorUserCount
    * Number of error users
    *
    * @param int $val The errorUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantUserCount
    * Number of NonCompliant users
    *
    * @return int The nonCompliantUserCount
    */
    public function getNonCompliantUserCount()
    {
        if (array_key_exists("nonCompliantUserCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantUserCount
    * Number of NonCompliant users
    *
    * @param int $val The nonCompliantUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setNonCompliantUserCount($val)
    {
        $this->_propDict["nonCompliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableUserCount
    * Number of not applicable users
    *
    * @return int The notApplicableUserCount
    */
    public function getNotApplicableUserCount()
    {
        if (array_key_exists("notApplicableUserCount", $this->_propDict)) {
            return $this->_propDict["notApplicableUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableUserCount
    * Number of not applicable users
    *
    * @param int $val The notApplicableUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setNotApplicableUserCount($val)
    {
        $this->_propDict["notApplicableUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedUserCount
    * Number of remediated users
    *
    * @return int The remediatedUserCount
    */
    public function getRemediatedUserCount()
    {
        if (array_key_exists("remediatedUserCount", $this->_propDict)) {
            return $this->_propDict["remediatedUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedUserCount
    * Number of remediated users
    *
    * @param int $val The remediatedUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setRemediatedUserCount($val)
    {
        $this->_propDict["remediatedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownUserCount
    * Number of unknown users
    *
    * @return int The unknownUserCount
    */
    public function getUnknownUserCount()
    {
        if (array_key_exists("unknownUserCount", $this->_propDict)) {
            return $this->_propDict["unknownUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownUserCount
    * Number of unknown users
    *
    * @param int $val The unknownUserCount
    *
    * @return DeviceConfigurationUserStateSummary
    */
    public function setUnknownUserCount($val)
    {
        $this->_propDict["unknownUserCount"] = intval($val);
        return $this;
    }
    
}
