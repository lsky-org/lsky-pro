<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentPlatformRestrictionsConfiguration File
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
* DeviceEnrollmentPlatformRestrictionsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration
{
    /**
    * Gets the androidForWorkRestriction
    * Android for work restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The androidForWorkRestriction
    */
    public function getAndroidForWorkRestriction()
    {
        if (array_key_exists("androidForWorkRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["androidForWorkRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["androidForWorkRestriction"];
            } else {
                $this->_propDict["androidForWorkRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["androidForWorkRestriction"]);
                return $this->_propDict["androidForWorkRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidForWorkRestriction
    * Android for work restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The androidForWorkRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setAndroidForWorkRestriction($val)
    {
        $this->_propDict["androidForWorkRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidRestriction
    * Android restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The androidRestriction
    */
    public function getAndroidRestriction()
    {
        if (array_key_exists("androidRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["androidRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["androidRestriction"];
            } else {
                $this->_propDict["androidRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["androidRestriction"]);
                return $this->_propDict["androidRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidRestriction
    * Android restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The androidRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setAndroidRestriction($val)
    {
        $this->_propDict["androidRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the aospRestriction
    * AOSP restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The aospRestriction
    */
    public function getAospRestriction()
    {
        if (array_key_exists("aospRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["aospRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["aospRestriction"];
            } else {
                $this->_propDict["aospRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["aospRestriction"]);
                return $this->_propDict["aospRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the aospRestriction
    * AOSP restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The aospRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setAospRestriction($val)
    {
        $this->_propDict["aospRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the iosRestriction
    * Ios restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The iosRestriction
    */
    public function getIosRestriction()
    {
        if (array_key_exists("iosRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["iosRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["iosRestriction"];
            } else {
                $this->_propDict["iosRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["iosRestriction"]);
                return $this->_propDict["iosRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iosRestriction
    * Ios restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The iosRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setIosRestriction($val)
    {
        $this->_propDict["iosRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the macOSRestriction
    * Mac restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The macOSRestriction
    */
    public function getMacOSRestriction()
    {
        if (array_key_exists("macOSRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["macOSRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["macOSRestriction"];
            } else {
                $this->_propDict["macOSRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["macOSRestriction"]);
                return $this->_propDict["macOSRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the macOSRestriction
    * Mac restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The macOSRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setMacOSRestriction($val)
    {
        $this->_propDict["macOSRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the macRestriction
    * Mac restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The macRestriction
    */
    public function getMacRestriction()
    {
        if (array_key_exists("macRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["macRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["macRestriction"];
            } else {
                $this->_propDict["macRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["macRestriction"]);
                return $this->_propDict["macRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the macRestriction
    * Mac restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The macRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setMacRestriction($val)
    {
        $this->_propDict["macRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsHomeSkuRestriction
    * Windows Home Sku restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The windowsHomeSkuRestriction
    */
    public function getWindowsHomeSkuRestriction()
    {
        if (array_key_exists("windowsHomeSkuRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["windowsHomeSkuRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["windowsHomeSkuRestriction"];
            } else {
                $this->_propDict["windowsHomeSkuRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["windowsHomeSkuRestriction"]);
                return $this->_propDict["windowsHomeSkuRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsHomeSkuRestriction
    * Windows Home Sku restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The windowsHomeSkuRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setWindowsHomeSkuRestriction($val)
    {
        $this->_propDict["windowsHomeSkuRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsMobileRestriction
    * Windows mobile restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The windowsMobileRestriction
    */
    public function getWindowsMobileRestriction()
    {
        if (array_key_exists("windowsMobileRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["windowsMobileRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["windowsMobileRestriction"];
            } else {
                $this->_propDict["windowsMobileRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["windowsMobileRestriction"]);
                return $this->_propDict["windowsMobileRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsMobileRestriction
    * Windows mobile restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The windowsMobileRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setWindowsMobileRestriction($val)
    {
        $this->_propDict["windowsMobileRestriction"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsRestriction
    * Windows restrictions based on platform, platform operating system version, and device ownership
    *
    * @return DeviceEnrollmentPlatformRestriction The windowsRestriction
    */
    public function getWindowsRestriction()
    {
        if (array_key_exists("windowsRestriction", $this->_propDict)) {
            if (is_a($this->_propDict["windowsRestriction"], "\Beta\Microsoft\Graph\Model\DeviceEnrollmentPlatformRestriction")) {
                return $this->_propDict["windowsRestriction"];
            } else {
                $this->_propDict["windowsRestriction"] = new DeviceEnrollmentPlatformRestriction($this->_propDict["windowsRestriction"]);
                return $this->_propDict["windowsRestriction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsRestriction
    * Windows restrictions based on platform, platform operating system version, and device ownership
    *
    * @param DeviceEnrollmentPlatformRestriction $val The windowsRestriction
    *
    * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public function setWindowsRestriction($val)
    {
        $this->_propDict["windowsRestriction"] = $val;
        return $this;
    }
    
}
