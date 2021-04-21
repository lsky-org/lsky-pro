<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionAppLearningSummary File
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
* WindowsInformationProtectionAppLearningSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionAppLearningSummary extends Entity
{
    /**
    * Gets the applicationName
    * Application Name
    *
    * @return string The applicationName
    */
    public function getApplicationName()
    {
        if (array_key_exists("applicationName", $this->_propDict)) {
            return $this->_propDict["applicationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationName
    * Application Name
    *
    * @param string $val The applicationName
    *
    * @return WindowsInformationProtectionAppLearningSummary
    */
    public function setApplicationName($val)
    {
        $this->_propDict["applicationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationType
    * Application Type. Possible values are: universal, desktop.
    *
    * @return ApplicationType The applicationType
    */
    public function getApplicationType()
    {
        if (array_key_exists("applicationType", $this->_propDict)) {
            if (is_a($this->_propDict["applicationType"], "\Microsoft\Graph\Model\ApplicationType")) {
                return $this->_propDict["applicationType"];
            } else {
                $this->_propDict["applicationType"] = new ApplicationType($this->_propDict["applicationType"]);
                return $this->_propDict["applicationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationType
    * Application Type. Possible values are: universal, desktop.
    *
    * @param ApplicationType $val The applicationType
    *
    * @return WindowsInformationProtectionAppLearningSummary
    */
    public function setApplicationType($val)
    {
        $this->_propDict["applicationType"] = $val;
        return $this;
    }
    
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
    * @return WindowsInformationProtectionAppLearningSummary
    */
    public function setDeviceCount($val)
    {
        $this->_propDict["deviceCount"] = intval($val);
        return $this;
    }
    
}
