<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosManagedAppProtection File
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
* IosManagedAppProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosManagedAppProtection extends TargetedManagedAppProtection
{
    /**
    * Gets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work.
    *
    * @return string The allowedIosDeviceModels
    */
    public function getAllowedIosDeviceModels()
    {
        if (array_key_exists("allowedIosDeviceModels", $this->_propDict)) {
            return $this->_propDict["allowedIosDeviceModels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowedIosDeviceModels
    * Semicolon seperated list of device models allowed, as a string, for the managed app to work.
    *
    * @param string $val The allowedIosDeviceModels
    *
    * @return IosManagedAppProtection
    */
    public function setAllowedIosDeviceModels($val)
    {
        $this->_propDict["allowedIosDeviceModels"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. Possible values are: block, wipe, warn.
    *
    * @return ManagedAppRemediationAction The appActionIfIosDeviceModelNotAllowed
    */
    public function getAppActionIfIosDeviceModelNotAllowed()
    {
        if (array_key_exists("appActionIfIosDeviceModelNotAllowed", $this->_propDict)) {
            if (is_a($this->_propDict["appActionIfIosDeviceModelNotAllowed"], "\Beta\Microsoft\Graph\Model\ManagedAppRemediationAction")) {
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            } else {
                $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = new ManagedAppRemediationAction($this->_propDict["appActionIfIosDeviceModelNotAllowed"]);
                return $this->_propDict["appActionIfIosDeviceModelNotAllowed"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appActionIfIosDeviceModelNotAllowed
    * Defines a managed app behavior, either block or wipe, if the specified device model is not allowed. Possible values are: block, wipe, warn.
    *
    * @param ManagedAppRemediationAction $val The appActionIfIosDeviceModelNotAllowed
    *
    * @return IosManagedAppProtection
    */
    public function setAppActionIfIosDeviceModelNotAllowed($val)
    {
        $this->_propDict["appActionIfIosDeviceModelNotAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @return ManagedAppDataEncryptionType The appDataEncryptionType
    */
    public function getAppDataEncryptionType()
    {
        if (array_key_exists("appDataEncryptionType", $this->_propDict)) {
            if (is_a($this->_propDict["appDataEncryptionType"], "\Beta\Microsoft\Graph\Model\ManagedAppDataEncryptionType")) {
                return $this->_propDict["appDataEncryptionType"];
            } else {
                $this->_propDict["appDataEncryptionType"] = new ManagedAppDataEncryptionType($this->_propDict["appDataEncryptionType"]);
                return $this->_propDict["appDataEncryptionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appDataEncryptionType
    * Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    *
    * @param ManagedAppDataEncryptionType $val The appDataEncryptionType
    *
    * @return IosManagedAppProtection
    */
    public function setAppDataEncryptionType($val)
    {
        $this->_propDict["appDataEncryptionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the customBrowserProtocol
    * A custom browser protocol to open weblink on iOS.
    *
    * @return string The customBrowserProtocol
    */
    public function getCustomBrowserProtocol()
    {
        if (array_key_exists("customBrowserProtocol", $this->_propDict)) {
            return $this->_propDict["customBrowserProtocol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customBrowserProtocol
    * A custom browser protocol to open weblink on iOS.
    *
    * @param string $val The customBrowserProtocol
    *
    * @return IosManagedAppProtection
    */
    public function setCustomBrowserProtocol($val)
    {
        $this->_propDict["customBrowserProtocol"] = $val;
        return $this;
    }
    
    /**
    * Gets the customDialerAppProtocol
    * Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
    *
    * @return string The customDialerAppProtocol
    */
    public function getCustomDialerAppProtocol()
    {
        if (array_key_exists("customDialerAppProtocol", $this->_propDict)) {
            return $this->_propDict["customDialerAppProtocol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customDialerAppProtocol
    * Protocol of a custom dialer app to click-to-open a phone number on iOS, for example, skype:.
    *
    * @param string $val The customDialerAppProtocol
    *
    * @return IosManagedAppProtection
    */
    public function setCustomDialerAppProtocol($val)
    {
        $this->_propDict["customDialerAppProtocol"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @return int The deployedAppCount
    */
    public function getDeployedAppCount()
    {
        if (array_key_exists("deployedAppCount", $this->_propDict)) {
            return $this->_propDict["deployedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedAppCount
    * Count of apps to which the current policy is deployed.
    *
    * @param int $val The deployedAppCount
    *
    * @return IosManagedAppProtection
    */
    public function setDeployedAppCount($val)
    {
        $this->_propDict["deployedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
    *
    * @return bool The disableProtectionOfManagedOutboundOpenInData
    */
    public function getDisableProtectionOfManagedOutboundOpenInData()
    {
        if (array_key_exists("disableProtectionOfManagedOutboundOpenInData", $this->_propDict)) {
            return $this->_propDict["disableProtectionOfManagedOutboundOpenInData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableProtectionOfManagedOutboundOpenInData
    * Disable protection of data transferred to other apps through IOS OpenIn option. This setting is only allowed to be True when AllowedOutboundDataTransferDestinations is set to ManagedApps.
    *
    * @param bool $val The disableProtectionOfManagedOutboundOpenInData
    *
    * @return IosManagedAppProtection
    */
    public function setDisableProtectionOfManagedOutboundOpenInData($val)
    {
        $this->_propDict["disableProtectionOfManagedOutboundOpenInData"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the exemptedAppProtocols
    * Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
     *
     * @return array The exemptedAppProtocols
     */
    public function getExemptedAppProtocols()
    {
        if (array_key_exists("exemptedAppProtocols", $this->_propDict)) {
           return $this->_propDict["exemptedAppProtocols"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exemptedAppProtocols
    * Apps in this list will be exempt from the policy and will be able to receive data from managed apps.
    *
    * @param KeyValuePair $val The exemptedAppProtocols
    *
    * @return IosManagedAppProtection
    */
    public function setExemptedAppProtocols($val)
    {
		$this->_propDict["exemptedAppProtocols"] = $val;
        return $this;
    }
    
    /**
    * Gets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
    *
    * @return bool The faceIdBlocked
    */
    public function getFaceIdBlocked()
    {
        if (array_key_exists("faceIdBlocked", $this->_propDict)) {
            return $this->_propDict["faceIdBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the faceIdBlocked
    * Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
    *
    * @param bool $val The faceIdBlocked
    *
    * @return IosManagedAppProtection
    */
    public function setFaceIdBlocked($val)
    {
        $this->_propDict["faceIdBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
    *
    * @return bool The filterOpenInToOnlyManagedApps
    */
    public function getFilterOpenInToOnlyManagedApps()
    {
        if (array_key_exists("filterOpenInToOnlyManagedApps", $this->_propDict)) {
            return $this->_propDict["filterOpenInToOnlyManagedApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filterOpenInToOnlyManagedApps
    * Defines if open-in operation is supported from the managed app to the filesharing locations selected. This setting only applies when AllowedOutboundDataTransferDestinations is set to ManagedApps and DisableProtectionOfManagedOutboundOpenInData is set to False.
    *
    * @param bool $val The filterOpenInToOnlyManagedApps
    *
    * @return IosManagedAppProtection
    */
    public function setFilterOpenInToOnlyManagedApps($val)
    {
        $this->_propDict["filterOpenInToOnlyManagedApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @return string The minimumRequiredSdkVersion
    */
    public function getMinimumRequiredSdkVersion()
    {
        if (array_key_exists("minimumRequiredSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumRequiredSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRequiredSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumRequiredSdkVersion
    *
    * @return IosManagedAppProtection
    */
    public function setMinimumRequiredSdkVersion($val)
    {
        $this->_propDict["minimumRequiredSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumWipeSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @return string The minimumWipeSdkVersion
    */
    public function getMinimumWipeSdkVersion()
    {
        if (array_key_exists("minimumWipeSdkVersion", $this->_propDict)) {
            return $this->_propDict["minimumWipeSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumWipeSdkVersion
    * Versions less than the specified version will block the managed app from accessing company data.
    *
    * @param string $val The minimumWipeSdkVersion
    *
    * @return IosManagedAppProtection
    */
    public function setMinimumWipeSdkVersion($val)
    {
        $this->_propDict["minimumWipeSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
    *
    * @return bool The protectInboundDataFromUnknownSources
    */
    public function getProtectInboundDataFromUnknownSources()
    {
        if (array_key_exists("protectInboundDataFromUnknownSources", $this->_propDict)) {
            return $this->_propDict["protectInboundDataFromUnknownSources"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protectInboundDataFromUnknownSources
    * Protect incoming data from unknown source. This setting is only allowed to be True when AllowedInboundDataTransferSources is set to AllApps.
    *
    * @param bool $val The protectInboundDataFromUnknownSources
    *
    * @return IosManagedAppProtection
    */
    public function setProtectInboundDataFromUnknownSources($val)
    {
        $this->_propDict["protectInboundDataFromUnknownSources"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app
    *
    * @return bool The thirdPartyKeyboardsBlocked
    */
    public function getThirdPartyKeyboardsBlocked()
    {
        if (array_key_exists("thirdPartyKeyboardsBlocked", $this->_propDict)) {
            return $this->_propDict["thirdPartyKeyboardsBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thirdPartyKeyboardsBlocked
    * Defines if third party keyboards are allowed while accessing a managed app
    *
    * @param bool $val The thirdPartyKeyboardsBlocked
    *
    * @return IosManagedAppProtection
    */
    public function setThirdPartyKeyboardsBlocked($val)
    {
        $this->_propDict["thirdPartyKeyboardsBlocked"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the apps
    * List of apps to which the policy is deployed.
     *
     * @return array The apps
     */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
           return $this->_propDict["apps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the apps
    * List of apps to which the policy is deployed.
    *
    * @param ManagedMobileApp $val The apps
    *
    * @return IosManagedAppProtection
    */
    public function setApps($val)
    {
		$this->_propDict["apps"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @return ManagedAppPolicyDeploymentSummary The deploymentSummary
    */
    public function getDeploymentSummary()
    {
        if (array_key_exists("deploymentSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentSummary"], "\Beta\Microsoft\Graph\Model\ManagedAppPolicyDeploymentSummary")) {
                return $this->_propDict["deploymentSummary"];
            } else {
                $this->_propDict["deploymentSummary"] = new ManagedAppPolicyDeploymentSummary($this->_propDict["deploymentSummary"]);
                return $this->_propDict["deploymentSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentSummary
    * Navigation property to deployment summary of the configuration.
    *
    * @param ManagedAppPolicyDeploymentSummary $val The deploymentSummary
    *
    * @return IosManagedAppProtection
    */
    public function setDeploymentSummary($val)
    {
        $this->_propDict["deploymentSummary"] = $val;
        return $this;
    }
    
}
