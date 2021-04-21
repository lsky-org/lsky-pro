<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionNetworkLearningSummary File
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
* WindowsInformationProtectionNetworkLearningSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionNetworkLearningSummary extends Entity
{
    /**
    * Gets the deviceCount
    * Device Count
    *
    * @return int The deviceCount
    */
    public function getDeviceCount()
    {
        if (array_key_exists("deviceCount", $this->_propDict)) {
            return $this->_propDict["deviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceCount
    * Device Count
    *
    * @param int $val The deviceCount
    *
    * @return WindowsInformationProtectionNetworkLearningSummary
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the url
    * Website url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    * Website url
    *
    * @param string $val The url
    *
    * @return WindowsInformationProtectionNetworkLearningSummary
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
}
