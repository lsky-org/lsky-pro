<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EditionUpgradeConfiguration File
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
* EditionUpgradeConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EditionUpgradeConfiguration extends DeviceConfiguration
{
    /**
    * Gets the license
    * Edition Upgrade License File Content.
    *
    * @return string The license
    */
    public function getLicense()
    {
        if (array_key_exists("license", $this->_propDict)) {
            return $this->_propDict["license"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the license
    * Edition Upgrade License File Content.
    *
    * @param string $val The license
    *
    * @return EditionUpgradeConfiguration
    */
    public function setLicense($val)
    {
        $this->_propDict["license"] = $val;
        return $this;
    }
    
    /**
    * Gets the licenseType
    * Edition Upgrade License Type. Possible values are: productKey, licenseFile, notConfigured.
    *
    * @return EditionUpgradeLicenseType The licenseType
    */
    public function getLicenseType()
    {
        if (array_key_exists("licenseType", $this->_propDict)) {
            if (is_a($this->_propDict["licenseType"], "\Beta\Microsoft\Graph\Model\EditionUpgradeLicenseType")) {
                return $this->_propDict["licenseType"];
            } else {
                $this->_propDict["licenseType"] = new EditionUpgradeLicenseType($this->_propDict["licenseType"]);
                return $this->_propDict["licenseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licenseType
    * Edition Upgrade License Type. Possible values are: productKey, licenseFile, notConfigured.
    *
    * @param EditionUpgradeLicenseType $val The licenseType
    *
    * @return EditionUpgradeConfiguration
    */
    public function setLicenseType($val)
    {
        $this->_propDict["licenseType"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    * Edition Upgrade Product Key.
    *
    * @return string The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productKey
    * Edition Upgrade Product Key.
    *
    * @param string $val The productKey
    *
    * @return EditionUpgradeConfiguration
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetEdition
    * Edition Upgrade Target Edition. Possible values are: windows10Enterprise, windows10EnterpriseN, windows10Education, windows10EducationN, windows10MobileEnterprise, windows10HolographicEnterprise, windows10Professional, windows10ProfessionalN, windows10ProfessionalEducation, windows10ProfessionalEducationN, windows10ProfessionalWorkstation, windows10ProfessionalWorkstationN, notConfigured, windows10Home, windows10HomeChina, windows10HomeN, windows10HomeSingleLanguage, windows10Mobile, windows10IoTCore, windows10IoTCoreCommercial.
    *
    * @return Windows10EditionType The targetEdition
    */
    public function getTargetEdition()
    {
        if (array_key_exists("targetEdition", $this->_propDict)) {
            if (is_a($this->_propDict["targetEdition"], "\Beta\Microsoft\Graph\Model\Windows10EditionType")) {
                return $this->_propDict["targetEdition"];
            } else {
                $this->_propDict["targetEdition"] = new Windows10EditionType($this->_propDict["targetEdition"]);
                return $this->_propDict["targetEdition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the targetEdition
    * Edition Upgrade Target Edition. Possible values are: windows10Enterprise, windows10EnterpriseN, windows10Education, windows10EducationN, windows10MobileEnterprise, windows10HolographicEnterprise, windows10Professional, windows10ProfessionalN, windows10ProfessionalEducation, windows10ProfessionalEducationN, windows10ProfessionalWorkstation, windows10ProfessionalWorkstationN, notConfigured, windows10Home, windows10HomeChina, windows10HomeN, windows10HomeSingleLanguage, windows10Mobile, windows10IoTCore, windows10IoTCoreCommercial.
    *
    * @param Windows10EditionType $val The targetEdition
    *
    * @return EditionUpgradeConfiguration
    */
    public function setTargetEdition($val)
    {
        $this->_propDict["targetEdition"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsSMode
    * S mode configuration. Possible values are: noRestriction, block, unlock.
    *
    * @return WindowsSModeConfiguration The windowsSMode
    */
    public function getWindowsSMode()
    {
        if (array_key_exists("windowsSMode", $this->_propDict)) {
            if (is_a($this->_propDict["windowsSMode"], "\Beta\Microsoft\Graph\Model\WindowsSModeConfiguration")) {
                return $this->_propDict["windowsSMode"];
            } else {
                $this->_propDict["windowsSMode"] = new WindowsSModeConfiguration($this->_propDict["windowsSMode"]);
                return $this->_propDict["windowsSMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsSMode
    * S mode configuration. Possible values are: noRestriction, block, unlock.
    *
    * @param WindowsSModeConfiguration $val The windowsSMode
    *
    * @return EditionUpgradeConfiguration
    */
    public function setWindowsSMode($val)
    {
        $this->_propDict["windowsSMode"] = $val;
        return $this;
    }
    
}
