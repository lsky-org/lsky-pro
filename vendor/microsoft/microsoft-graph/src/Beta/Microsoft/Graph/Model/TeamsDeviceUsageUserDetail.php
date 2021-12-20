<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsDeviceUsageUserDetail File
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
* TeamsDeviceUsageUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsDeviceUsageUserDetail extends Entity
{
    /**
    * Gets the deletedDate
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    *
    * @param \DateTime $val The deletedDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isLicensed
    *
    * @return bool The isLicensed
    */
    public function getIsLicensed()
    {
        if (array_key_exists("isLicensed", $this->_propDict)) {
            return $this->_propDict["isLicensed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isLicensed
    *
    * @param bool $val The isLicensed
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setIsLicensed($val)
    {
        $this->_propDict["isLicensed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \DateTime The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime")) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the usedAndroidPhone
    *
    * @return bool The usedAndroidPhone
    */
    public function getUsedAndroidPhone()
    {
        if (array_key_exists("usedAndroidPhone", $this->_propDict)) {
            return $this->_propDict["usedAndroidPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedAndroidPhone
    *
    * @param bool $val The usedAndroidPhone
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedAndroidPhone($val)
    {
        $this->_propDict["usedAndroidPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedChromeOS
    *
    * @return bool The usedChromeOS
    */
    public function getUsedChromeOS()
    {
        if (array_key_exists("usedChromeOS", $this->_propDict)) {
            return $this->_propDict["usedChromeOS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedChromeOS
    *
    * @param bool $val The usedChromeOS
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedChromeOS($val)
    {
        $this->_propDict["usedChromeOS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediOS
    *
    * @return bool The usediOS
    */
    public function getUsediOS()
    {
        if (array_key_exists("usediOS", $this->_propDict)) {
            return $this->_propDict["usediOS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediOS
    *
    * @param bool $val The usediOS
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsediOS($val)
    {
        $this->_propDict["usediOS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedLinux
    *
    * @return bool The usedLinux
    */
    public function getUsedLinux()
    {
        if (array_key_exists("usedLinux", $this->_propDict)) {
            return $this->_propDict["usedLinux"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedLinux
    *
    * @param bool $val The usedLinux
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedLinux($val)
    {
        $this->_propDict["usedLinux"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedMac
    *
    * @return bool The usedMac
    */
    public function getUsedMac()
    {
        if (array_key_exists("usedMac", $this->_propDict)) {
            return $this->_propDict["usedMac"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedMac
    *
    * @param bool $val The usedMac
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedMac($val)
    {
        $this->_propDict["usedMac"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWeb
    *
    * @return bool The usedWeb
    */
    public function getUsedWeb()
    {
        if (array_key_exists("usedWeb", $this->_propDict)) {
            return $this->_propDict["usedWeb"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWeb
    *
    * @param bool $val The usedWeb
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWeb($val)
    {
        $this->_propDict["usedWeb"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindows
    *
    * @return bool The usedWindows
    */
    public function getUsedWindows()
    {
        if (array_key_exists("usedWindows", $this->_propDict)) {
            return $this->_propDict["usedWindows"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWindows
    *
    * @param bool $val The usedWindows
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWindows($val)
    {
        $this->_propDict["usedWindows"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindowsPhone
    *
    * @return bool The usedWindowsPhone
    */
    public function getUsedWindowsPhone()
    {
        if (array_key_exists("usedWindowsPhone", $this->_propDict)) {
            return $this->_propDict["usedWindowsPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWindowsPhone
    *
    * @param bool $val The usedWindowsPhone
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUsedWindowsPhone($val)
    {
        $this->_propDict["usedWindowsPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return TeamsDeviceUsageUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
