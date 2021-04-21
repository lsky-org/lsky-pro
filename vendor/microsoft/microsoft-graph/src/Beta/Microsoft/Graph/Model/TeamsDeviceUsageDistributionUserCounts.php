<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsDeviceUsageDistributionUserCounts File
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
* TeamsDeviceUsageDistributionUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsDeviceUsageDistributionUserCounts extends Entity
{
    /**
    * Gets the androidPhone
    *
    * @return int The androidPhone
    */
    public function getAndroidPhone()
    {
        if (array_key_exists("androidPhone", $this->_propDict)) {
            return $this->_propDict["androidPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidPhone
    *
    * @param int $val The androidPhone
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setAndroidPhone($val)
    {
        $this->_propDict["androidPhone"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the chromeOS
    *
    * @return int The chromeOS
    */
    public function getChromeOS()
    {
        if (array_key_exists("chromeOS", $this->_propDict)) {
            return $this->_propDict["chromeOS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the chromeOS
    *
    * @param int $val The chromeOS
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setChromeOS($val)
    {
        $this->_propDict["chromeOS"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the ios
    *
    * @return int The ios
    */
    public function getIos()
    {
        if (array_key_exists("ios", $this->_propDict)) {
            return $this->_propDict["ios"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ios
    *
    * @param int $val The ios
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setIos($val)
    {
        $this->_propDict["ios"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the linux
    *
    * @return int The linux
    */
    public function getLinux()
    {
        if (array_key_exists("linux", $this->_propDict)) {
            return $this->_propDict["linux"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the linux
    *
    * @param int $val The linux
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setLinux($val)
    {
        $this->_propDict["linux"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mac
    *
    * @return int The mac
    */
    public function getMac()
    {
        if (array_key_exists("mac", $this->_propDict)) {
            return $this->_propDict["mac"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mac
    *
    * @param int $val The mac
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setMac($val)
    {
        $this->_propDict["mac"] = intval($val);
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
    * @return TeamsDeviceUsageDistributionUserCounts
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
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the web
    *
    * @return int The web
    */
    public function getWeb()
    {
        if (array_key_exists("web", $this->_propDict)) {
            return $this->_propDict["web"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the web
    *
    * @param int $val The web
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the windows
    *
    * @return int The windows
    */
    public function getWindows()
    {
        if (array_key_exists("windows", $this->_propDict)) {
            return $this->_propDict["windows"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windows
    *
    * @param int $val The windows
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the windowsPhone
    *
    * @return int The windowsPhone
    */
    public function getWindowsPhone()
    {
        if (array_key_exists("windowsPhone", $this->_propDict)) {
            return $this->_propDict["windowsPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsPhone
    *
    * @param int $val The windowsPhone
    *
    * @return TeamsDeviceUsageDistributionUserCounts
    */
    public function setWindowsPhone($val)
    {
        $this->_propDict["windowsPhone"] = intval($val);
        return $this;
    }
    
}
