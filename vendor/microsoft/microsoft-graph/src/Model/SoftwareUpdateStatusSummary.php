<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SoftwareUpdateStatusSummary File
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
* SoftwareUpdateStatusSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SoftwareUpdateStatusSummary extends Entity
{
    /**
    * Gets the compliantDeviceCount
    * Number of compliant devices.
    *
    * @return int The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the compliantDeviceCount
    * Number of compliant devices.
    *
    * @param int $val The compliantDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the compliantUserCount
    * Number of compliant users.
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
    * Number of compliant users.
    *
    * @param int $val The compliantUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setCompliantUserCount($val)
    {
        $this->_propDict["compliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictDeviceCount
    * Number of conflict devices.
    *
    * @return int The conflictDeviceCount
    */
    public function getConflictDeviceCount()
    {
        if (array_key_exists("conflictDeviceCount", $this->_propDict)) {
            return $this->_propDict["conflictDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictDeviceCount
    * Number of conflict devices.
    *
    * @param int $val The conflictDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setConflictDeviceCount($val)
    {
        $this->_propDict["conflictDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictUserCount
    * Number of conflict users.
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
    * Number of conflict users.
    *
    * @param int $val The conflictUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setConflictUserCount($val)
    {
        $this->_propDict["conflictUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the policy.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the policy.
    *
    * @param string $val The displayName
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorDeviceCount
    * Number of devices had error.
    *
    * @return int The errorDeviceCount
    */
    public function getErrorDeviceCount()
    {
        if (array_key_exists("errorDeviceCount", $this->_propDict)) {
            return $this->_propDict["errorDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorDeviceCount
    * Number of devices had error.
    *
    * @param int $val The errorDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setErrorDeviceCount($val)
    {
        $this->_propDict["errorDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorUserCount
    * Number of users had error.
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
    * Number of users had error.
    *
    * @param int $val The errorUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setErrorUserCount($val)
    {
        $this->_propDict["errorUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantDeviceCount
    * Number of non compliant devices.
    *
    * @return int The nonCompliantDeviceCount
    */
    public function getNonCompliantDeviceCount()
    {
        if (array_key_exists("nonCompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nonCompliantDeviceCount
    * Number of non compliant devices.
    *
    * @param int $val The nonCompliantDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the nonCompliantUserCount
    * Number of non compliant users.
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
    * Number of non compliant users.
    *
    * @param int $val The nonCompliantUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setNonCompliantUserCount($val)
    {
        $this->_propDict["nonCompliantUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableDeviceCount
    * Number of not applicable devices.
    *
    * @return int The notApplicableDeviceCount
    */
    public function getNotApplicableDeviceCount()
    {
        if (array_key_exists("notApplicableDeviceCount", $this->_propDict)) {
            return $this->_propDict["notApplicableDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableDeviceCount
    * Number of not applicable devices.
    *
    * @param int $val The notApplicableDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setNotApplicableDeviceCount($val)
    {
        $this->_propDict["notApplicableDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableUserCount
    * Number of not applicable users.
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
    * Number of not applicable users.
    *
    * @param int $val The notApplicableUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setNotApplicableUserCount($val)
    {
        $this->_propDict["notApplicableUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedDeviceCount
    * Number of remediated devices.
    *
    * @return int The remediatedDeviceCount
    */
    public function getRemediatedDeviceCount()
    {
        if (array_key_exists("remediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediatedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remediatedDeviceCount
    * Number of remediated devices.
    *
    * @param int $val The remediatedDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remediatedUserCount
    * Number of remediated users.
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
    * Number of remediated users.
    *
    * @param int $val The remediatedUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setRemediatedUserCount($val)
    {
        $this->_propDict["remediatedUserCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownDeviceCount
    * Number of unknown devices.
    *
    * @return int The unknownDeviceCount
    */
    public function getUnknownDeviceCount()
    {
        if (array_key_exists("unknownDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownDeviceCount
    * Number of unknown devices.
    *
    * @param int $val The unknownDeviceCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setUnknownDeviceCount($val)
    {
        $this->_propDict["unknownDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownUserCount
    * Number of unknown users.
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
    * Number of unknown users.
    *
    * @param int $val The unknownUserCount
    *
    * @return SoftwareUpdateStatusSummary
    */
    public function setUnknownUserCount($val)
    {
        $this->_propDict["unknownUserCount"] = intval($val);
        return $this;
    }
    
}
