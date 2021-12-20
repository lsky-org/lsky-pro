<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActivationCounts File
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
* Office365ActivationCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ActivationCounts extends Entity
{
    /**
    * Gets the android
    * The activation count on an Android device.
    *
    * @return int The android
    */
    public function getAndroid()
    {
        if (array_key_exists("android", $this->_propDict)) {
            return $this->_propDict["android"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the android
    * The activation count on an Android device.
    *
    * @param int $val The android
    *
    * @return Office365ActivationCounts
    */
    public function setAndroid($val)
    {
        $this->_propDict["android"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the ios
    * The activation count on iOS.
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
    * The activation count on iOS.
    *
    * @param int $val The ios
    *
    * @return Office365ActivationCounts
    */
    public function setIos($val)
    {
        $this->_propDict["ios"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mac
    * The activation count on Mac OS.
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
    * The activation count on Mac OS.
    *
    * @param int $val The mac
    *
    * @return Office365ActivationCounts
    */
    public function setMac($val)
    {
        $this->_propDict["mac"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the productType
    * The product type, such as 'Microsoft 365 ProPlus' or 'Project Client'.
    *
    * @return string The productType
    */
    public function getProductType()
    {
        if (array_key_exists("productType", $this->_propDict)) {
            return $this->_propDict["productType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productType
    * The product type, such as 'Microsoft 365 ProPlus' or 'Project Client'.
    *
    * @param string $val The productType
    *
    * @return Office365ActivationCounts
    */
    public function setProductType($val)
    {
        $this->_propDict["productType"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
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
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ActivationCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the windows
    * The activation count on Windows. This number includes every activation on any Windows computer.
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
    * The activation count on Windows. This number includes every activation on any Windows computer.
    *
    * @param int $val The windows
    *
    * @return Office365ActivationCounts
    */
    public function setWindows($val)
    {
        $this->_propDict["windows"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the windows10Mobile
    * The activation count on Windows 10 mobile.
    *
    * @return int The windows10Mobile
    */
    public function getWindows10Mobile()
    {
        if (array_key_exists("windows10Mobile", $this->_propDict)) {
            return $this->_propDict["windows10Mobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windows10Mobile
    * The activation count on Windows 10 mobile.
    *
    * @param int $val The windows10Mobile
    *
    * @return Office365ActivationCounts
    */
    public function setWindows10Mobile($val)
    {
        $this->_propDict["windows10Mobile"] = intval($val);
        return $this;
    }
    
}
