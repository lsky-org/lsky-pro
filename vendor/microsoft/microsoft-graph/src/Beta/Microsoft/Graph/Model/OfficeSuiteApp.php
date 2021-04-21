<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeSuiteApp File
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
* OfficeSuiteApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeSuiteApp extends MobileApp
{
    /**
    * Gets the autoAcceptEula
    * The value to accept the EULA automatically on the enduser's device.
    *
    * @return bool The autoAcceptEula
    */
    public function getAutoAcceptEula()
    {
        if (array_key_exists("autoAcceptEula", $this->_propDict)) {
            return $this->_propDict["autoAcceptEula"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the autoAcceptEula
    * The value to accept the EULA automatically on the enduser's device.
    *
    * @param bool $val The autoAcceptEula
    *
    * @return OfficeSuiteApp
    */
    public function setAutoAcceptEula($val)
    {
        $this->_propDict["autoAcceptEula"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the excludedApps
    * The property to represent the apps which are excluded from the selected Office365 Product Id.
    *
    * @return ExcludedApps The excludedApps
    */
    public function getExcludedApps()
    {
        if (array_key_exists("excludedApps", $this->_propDict)) {
            if (is_a($this->_propDict["excludedApps"], "\Beta\Microsoft\Graph\Model\ExcludedApps")) {
                return $this->_propDict["excludedApps"];
            } else {
                $this->_propDict["excludedApps"] = new ExcludedApps($this->_propDict["excludedApps"]);
                return $this->_propDict["excludedApps"];
            }
        }
        return null;
    }
    
    /**
    * Sets the excludedApps
    * The property to represent the apps which are excluded from the selected Office365 Product Id.
    *
    * @param ExcludedApps $val The excludedApps
    *
    * @return OfficeSuiteApp
    */
    public function setExcludedApps($val)
    {
        $this->_propDict["excludedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the installProgressDisplayLevel
    * To specify the level of display for the Installation Progress Setup UI on the Device. Possible values are: none, full.
    *
    * @return OfficeSuiteInstallProgressDisplayLevel The installProgressDisplayLevel
    */
    public function getInstallProgressDisplayLevel()
    {
        if (array_key_exists("installProgressDisplayLevel", $this->_propDict)) {
            if (is_a($this->_propDict["installProgressDisplayLevel"], "\Beta\Microsoft\Graph\Model\OfficeSuiteInstallProgressDisplayLevel")) {
                return $this->_propDict["installProgressDisplayLevel"];
            } else {
                $this->_propDict["installProgressDisplayLevel"] = new OfficeSuiteInstallProgressDisplayLevel($this->_propDict["installProgressDisplayLevel"]);
                return $this->_propDict["installProgressDisplayLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installProgressDisplayLevel
    * To specify the level of display for the Installation Progress Setup UI on the Device. Possible values are: none, full.
    *
    * @param OfficeSuiteInstallProgressDisplayLevel $val The installProgressDisplayLevel
    *
    * @return OfficeSuiteApp
    */
    public function setInstallProgressDisplayLevel($val)
    {
        $this->_propDict["installProgressDisplayLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the localesToInstall
    * The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
    *
    * @return string The localesToInstall
    */
    public function getLocalesToInstall()
    {
        if (array_key_exists("localesToInstall", $this->_propDict)) {
            return $this->_propDict["localesToInstall"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the localesToInstall
    * The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
    *
    * @param string $val The localesToInstall
    *
    * @return OfficeSuiteApp
    */
    public function setLocalesToInstall($val)
    {
        $this->_propDict["localesToInstall"] = $val;
        return $this;
    }
    
    /**
    * Gets the officeConfigurationXml
    * The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
    *
    * @return \GuzzleHttp\Psr7\Stream The officeConfigurationXml
    */
    public function getOfficeConfigurationXml()
    {
        if (array_key_exists("officeConfigurationXml", $this->_propDict)) {
            if (is_a($this->_propDict["officeConfigurationXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["officeConfigurationXml"];
            } else {
                $this->_propDict["officeConfigurationXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["officeConfigurationXml"]);
                return $this->_propDict["officeConfigurationXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the officeConfigurationXml
    * The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The officeConfigurationXml
    *
    * @return OfficeSuiteApp
    */
    public function setOfficeConfigurationXml($val)
    {
        $this->_propDict["officeConfigurationXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the officePlatformArchitecture
    * The property to represent the Office365 app suite version. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @return WindowsArchitecture The officePlatformArchitecture
    */
    public function getOfficePlatformArchitecture()
    {
        if (array_key_exists("officePlatformArchitecture", $this->_propDict)) {
            if (is_a($this->_propDict["officePlatformArchitecture"], "\Beta\Microsoft\Graph\Model\WindowsArchitecture")) {
                return $this->_propDict["officePlatformArchitecture"];
            } else {
                $this->_propDict["officePlatformArchitecture"] = new WindowsArchitecture($this->_propDict["officePlatformArchitecture"]);
                return $this->_propDict["officePlatformArchitecture"];
            }
        }
        return null;
    }
    
    /**
    * Sets the officePlatformArchitecture
    * The property to represent the Office365 app suite version. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @param WindowsArchitecture $val The officePlatformArchitecture
    *
    * @return OfficeSuiteApp
    */
    public function setOfficePlatformArchitecture($val)
    {
        $this->_propDict["officePlatformArchitecture"] = $val;
        return $this;
    }
    

     /** 
     * Gets the productIds
    * The Product Ids that represent the Office365 Suite SKU.
     *
     * @return array The productIds
     */
    public function getProductIds()
    {
        if (array_key_exists("productIds", $this->_propDict)) {
           return $this->_propDict["productIds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the productIds
    * The Product Ids that represent the Office365 Suite SKU.
    *
    * @param OfficeProductId $val The productIds
    *
    * @return OfficeSuiteApp
    */
    public function setProductIds($val)
    {
		$this->_propDict["productIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the shouldUninstallOlderVersionsOfOffice
    * The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
    *
    * @return bool The shouldUninstallOlderVersionsOfOffice
    */
    public function getShouldUninstallOlderVersionsOfOffice()
    {
        if (array_key_exists("shouldUninstallOlderVersionsOfOffice", $this->_propDict)) {
            return $this->_propDict["shouldUninstallOlderVersionsOfOffice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shouldUninstallOlderVersionsOfOffice
    * The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
    *
    * @param bool $val The shouldUninstallOlderVersionsOfOffice
    *
    * @return OfficeSuiteApp
    */
    public function setShouldUninstallOlderVersionsOfOffice($val)
    {
        $this->_propDict["shouldUninstallOlderVersionsOfOffice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the targetVersion
    * The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
    *
    * @return string The targetVersion
    */
    public function getTargetVersion()
    {
        if (array_key_exists("targetVersion", $this->_propDict)) {
            return $this->_propDict["targetVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetVersion
    * The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
    *
    * @param string $val The targetVersion
    *
    * @return OfficeSuiteApp
    */
    public function setTargetVersion($val)
    {
        $this->_propDict["targetVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateChannel
    * The property to represent the Office365 Update Channel. Possible values are: none, current, deferred, firstReleaseCurrent, firstReleaseDeferred, monthlyEnterprise.
    *
    * @return OfficeUpdateChannel The updateChannel
    */
    public function getUpdateChannel()
    {
        if (array_key_exists("updateChannel", $this->_propDict)) {
            if (is_a($this->_propDict["updateChannel"], "\Beta\Microsoft\Graph\Model\OfficeUpdateChannel")) {
                return $this->_propDict["updateChannel"];
            } else {
                $this->_propDict["updateChannel"] = new OfficeUpdateChannel($this->_propDict["updateChannel"]);
                return $this->_propDict["updateChannel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateChannel
    * The property to represent the Office365 Update Channel. Possible values are: none, current, deferred, firstReleaseCurrent, firstReleaseDeferred, monthlyEnterprise.
    *
    * @param OfficeUpdateChannel $val The updateChannel
    *
    * @return OfficeSuiteApp
    */
    public function setUpdateChannel($val)
    {
        $this->_propDict["updateChannel"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateVersion
    * The property to represent the update version in which the specific target version is available for the Office365 app suite.
    *
    * @return string The updateVersion
    */
    public function getUpdateVersion()
    {
        if (array_key_exists("updateVersion", $this->_propDict)) {
            return $this->_propDict["updateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updateVersion
    * The property to represent the update version in which the specific target version is available for the Office365 app suite.
    *
    * @param string $val The updateVersion
    *
    * @return OfficeSuiteApp
    */
    public function setUpdateVersion($val)
    {
        $this->_propDict["updateVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the useSharedComputerActivation
    * The property to represent that whether the shared computer activation is used not for Office365 app suite.
    *
    * @return bool The useSharedComputerActivation
    */
    public function getUseSharedComputerActivation()
    {
        if (array_key_exists("useSharedComputerActivation", $this->_propDict)) {
            return $this->_propDict["useSharedComputerActivation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useSharedComputerActivation
    * The property to represent that whether the shared computer activation is used not for Office365 app suite.
    *
    * @param bool $val The useSharedComputerActivation
    *
    * @return OfficeSuiteApp
    */
    public function setUseSharedComputerActivation($val)
    {
        $this->_propDict["useSharedComputerActivation"] = boolval($val);
        return $this;
    }
    
}
