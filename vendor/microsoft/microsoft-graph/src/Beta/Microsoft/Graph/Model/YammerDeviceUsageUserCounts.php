<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerDeviceUsageUserCounts File
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
* YammerDeviceUsageUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerDeviceUsageUserCounts extends Entity
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
    * @return YammerDeviceUsageUserCounts
    */
    public function setAndroidPhone($val)
    {
        $this->_propDict["androidPhone"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the iPad
    *
    * @return int The iPad
    */
    public function getIPad()
    {
        if (array_key_exists("iPad", $this->_propDict)) {
            return $this->_propDict["iPad"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iPad
    *
    * @param int $val The iPad
    *
    * @return YammerDeviceUsageUserCounts
    */
    public function setIPad($val)
    {
        $this->_propDict["iPad"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the iPhone
    *
    * @return int The iPhone
    */
    public function getIPhone()
    {
        if (array_key_exists("iPhone", $this->_propDict)) {
            return $this->_propDict["iPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iPhone
    *
    * @param int $val The iPhone
    *
    * @return YammerDeviceUsageUserCounts
    */
    public function setIPhone($val)
    {
        $this->_propDict["iPhone"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the other
    *
    * @return int The other
    */
    public function getOther()
    {
        if (array_key_exists("other", $this->_propDict)) {
            return $this->_propDict["other"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the other
    *
    * @param int $val The other
    *
    * @return YammerDeviceUsageUserCounts
    */
    public function setOther($val)
    {
        $this->_propDict["other"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \DateTime The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\DateTime")) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \DateTime $val The reportDate
    *
    * @return YammerDeviceUsageUserCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
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
    * @return YammerDeviceUsageUserCounts
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
    * @return YammerDeviceUsageUserCounts
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
    * @return YammerDeviceUsageUserCounts
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = intval($val);
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
    * @return YammerDeviceUsageUserCounts
    */
    public function setWindowsPhone($val)
    {
        $this->_propDict["windowsPhone"] = intval($val);
        return $this;
    }
    
}
