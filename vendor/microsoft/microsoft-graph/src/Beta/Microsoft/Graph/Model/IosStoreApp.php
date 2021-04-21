<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosStoreApp File
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
* IosStoreApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosStoreApp extends MobileApp
{
    /**
    * Gets the applicableDeviceType
    * The iOS architecture for which this app can run on.
    *
    * @return IosDeviceType The applicableDeviceType
    */
    public function getApplicableDeviceType()
    {
        if (array_key_exists("applicableDeviceType", $this->_propDict)) {
            if (is_a($this->_propDict["applicableDeviceType"], "\Beta\Microsoft\Graph\Model\IosDeviceType")) {
                return $this->_propDict["applicableDeviceType"];
            } else {
                $this->_propDict["applicableDeviceType"] = new IosDeviceType($this->_propDict["applicableDeviceType"]);
                return $this->_propDict["applicableDeviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableDeviceType
    * The iOS architecture for which this app can run on.
    *
    * @param IosDeviceType $val The applicableDeviceType
    *
    * @return IosStoreApp
    */
    public function setApplicableDeviceType($val)
    {
        $this->_propDict["applicableDeviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appStoreUrl
    * The Apple App Store URL
    *
    * @return string The appStoreUrl
    */
    public function getAppStoreUrl()
    {
        if (array_key_exists("appStoreUrl", $this->_propDict)) {
            return $this->_propDict["appStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreUrl
    * The Apple App Store URL
    *
    * @param string $val The appStoreUrl
    *
    * @return IosStoreApp
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the bundleId
    * The Identity Name.
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bundleId
    * The Identity Name.
    *
    * @param string $val The bundleId
    *
    * @return IosStoreApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @return IosMinimumOperatingSystem The minimumSupportedOperatingSystem
    */
    public function getMinimumSupportedOperatingSystem()
    {
        if (array_key_exists("minimumSupportedOperatingSystem", $this->_propDict)) {
            if (is_a($this->_propDict["minimumSupportedOperatingSystem"], "\Beta\Microsoft\Graph\Model\IosMinimumOperatingSystem")) {
                return $this->_propDict["minimumSupportedOperatingSystem"];
            } else {
                $this->_propDict["minimumSupportedOperatingSystem"] = new IosMinimumOperatingSystem($this->_propDict["minimumSupportedOperatingSystem"]);
                return $this->_propDict["minimumSupportedOperatingSystem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minimumSupportedOperatingSystem
    * The value for the minimum applicable operating system.
    *
    * @param IosMinimumOperatingSystem $val The minimumSupportedOperatingSystem
    *
    * @return IosStoreApp
    */
    public function setMinimumSupportedOperatingSystem($val)
    {
        $this->_propDict["minimumSupportedOperatingSystem"] = $val;
        return $this;
    }
    
}
