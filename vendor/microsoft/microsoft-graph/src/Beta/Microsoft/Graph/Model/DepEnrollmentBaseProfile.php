<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepEnrollmentBaseProfile File
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
* DepEnrollmentBaseProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepEnrollmentBaseProfile extends EnrollmentProfile
{
    /**
    * Gets the appleIdDisabled
    * Indicates if Apple id setup pane is disabled
    *
    * @return bool The appleIdDisabled
    */
    public function getAppleIdDisabled()
    {
        if (array_key_exists("appleIdDisabled", $this->_propDict)) {
            return $this->_propDict["appleIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdDisabled
    * Indicates if Apple id setup pane is disabled
    *
    * @param bool $val The appleIdDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setAppleIdDisabled($val)
    {
        $this->_propDict["appleIdDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applePayDisabled
    * Indicates if Apple pay setup pane is disabled
    *
    * @return bool The applePayDisabled
    */
    public function getApplePayDisabled()
    {
        if (array_key_exists("applePayDisabled", $this->_propDict)) {
            return $this->_propDict["applePayDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applePayDisabled
    * Indicates if Apple pay setup pane is disabled
    *
    * @param bool $val The applePayDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setApplePayDisabled($val)
    {
        $this->_propDict["applePayDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the configurationWebUrl
    * URL for setup assistant login
    *
    * @return bool The configurationWebUrl
    */
    public function getConfigurationWebUrl()
    {
        if (array_key_exists("configurationWebUrl", $this->_propDict)) {
            return $this->_propDict["configurationWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationWebUrl
    * URL for setup assistant login
    *
    * @param bool $val The configurationWebUrl
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setConfigurationWebUrl($val)
    {
        $this->_propDict["configurationWebUrl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the deviceNameTemplate
    * Sets a literal or name pattern.
    *
    * @return string The deviceNameTemplate
    */
    public function getDeviceNameTemplate()
    {
        if (array_key_exists("deviceNameTemplate", $this->_propDict)) {
            return $this->_propDict["deviceNameTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceNameTemplate
    * Sets a literal or name pattern.
    *
    * @param string $val The deviceNameTemplate
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setDeviceNameTemplate($val)
    {
        $this->_propDict["deviceNameTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the diagnosticsDisabled
    * Indicates if diagnostics setup pane is disabled
    *
    * @return bool The diagnosticsDisabled
    */
    public function getDiagnosticsDisabled()
    {
        if (array_key_exists("diagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["diagnosticsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the diagnosticsDisabled
    * Indicates if diagnostics setup pane is disabled
    *
    * @param bool $val The diagnosticsDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setDiagnosticsDisabled($val)
    {
        $this->_propDict["diagnosticsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayToneSetupDisabled
    * Indicates if displaytone setup screen is disabled
    *
    * @return bool The displayToneSetupDisabled
    */
    public function getDisplayToneSetupDisabled()
    {
        if (array_key_exists("displayToneSetupDisabled", $this->_propDict)) {
            return $this->_propDict["displayToneSetupDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayToneSetupDisabled
    * Indicates if displaytone setup screen is disabled
    *
    * @param bool $val The displayToneSetupDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setDisplayToneSetupDisabled($val)
    {
        $this->_propDict["displayToneSetupDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDefault
    * Indicates if this is the default profile
    *
    * @return bool The isDefault
    */
    public function getIsDefault()
    {
        if (array_key_exists("isDefault", $this->_propDict)) {
            return $this->_propDict["isDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefault
    * Indicates if this is the default profile
    *
    * @param bool $val The isDefault
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setIsDefault($val)
    {
        $this->_propDict["isDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isMandatory
    * Indicates if the profile is mandatory
    *
    * @return bool The isMandatory
    */
    public function getIsMandatory()
    {
        if (array_key_exists("isMandatory", $this->_propDict)) {
            return $this->_propDict["isMandatory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMandatory
    * Indicates if the profile is mandatory
    *
    * @param bool $val The isMandatory
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setIsMandatory($val)
    {
        $this->_propDict["isMandatory"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locationDisabled
    * Indicates if Location service setup pane is disabled
    *
    * @return bool The locationDisabled
    */
    public function getLocationDisabled()
    {
        if (array_key_exists("locationDisabled", $this->_propDict)) {
            return $this->_propDict["locationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationDisabled
    * Indicates if Location service setup pane is disabled
    *
    * @param bool $val The locationDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setLocationDisabled($val)
    {
        $this->_propDict["locationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the privacyPaneDisabled
    * Indicates if privacy screen is disabled
    *
    * @return bool The privacyPaneDisabled
    */
    public function getPrivacyPaneDisabled()
    {
        if (array_key_exists("privacyPaneDisabled", $this->_propDict)) {
            return $this->_propDict["privacyPaneDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyPaneDisabled
    * Indicates if privacy screen is disabled
    *
    * @param bool $val The privacyPaneDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setPrivacyPaneDisabled($val)
    {
        $this->_propDict["privacyPaneDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the profileRemovalDisabled
    * Indicates if the profile removal option is disabled
    *
    * @return bool The profileRemovalDisabled
    */
    public function getProfileRemovalDisabled()
    {
        if (array_key_exists("profileRemovalDisabled", $this->_propDict)) {
            return $this->_propDict["profileRemovalDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the profileRemovalDisabled
    * Indicates if the profile removal option is disabled
    *
    * @param bool $val The profileRemovalDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setProfileRemovalDisabled($val)
    {
        $this->_propDict["profileRemovalDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restoreBlocked
    * Indicates if Restore setup pane is blocked
    *
    * @return bool The restoreBlocked
    */
    public function getRestoreBlocked()
    {
        if (array_key_exists("restoreBlocked", $this->_propDict)) {
            return $this->_propDict["restoreBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restoreBlocked
    * Indicates if Restore setup pane is blocked
    *
    * @param bool $val The restoreBlocked
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setRestoreBlocked($val)
    {
        $this->_propDict["restoreBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenTimeScreenDisabled
    * Indicates if screen timeout setup is disabled
    *
    * @return bool The screenTimeScreenDisabled
    */
    public function getScreenTimeScreenDisabled()
    {
        if (array_key_exists("screenTimeScreenDisabled", $this->_propDict)) {
            return $this->_propDict["screenTimeScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenTimeScreenDisabled
    * Indicates if screen timeout setup is disabled
    *
    * @param bool $val The screenTimeScreenDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setScreenTimeScreenDisabled($val)
    {
        $this->_propDict["screenTimeScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the siriDisabled
    * Indicates if siri setup pane is disabled
    *
    * @return bool The siriDisabled
    */
    public function getSiriDisabled()
    {
        if (array_key_exists("siriDisabled", $this->_propDict)) {
            return $this->_propDict["siriDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siriDisabled
    * Indicates if siri setup pane is disabled
    *
    * @param bool $val The siriDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setSiriDisabled($val)
    {
        $this->_propDict["siriDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supervisedModeEnabled
    * Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
    *
    * @return bool The supervisedModeEnabled
    */
    public function getSupervisedModeEnabled()
    {
        if (array_key_exists("supervisedModeEnabled", $this->_propDict)) {
            return $this->_propDict["supervisedModeEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supervisedModeEnabled
    * Supervised mode, True to enable, false otherwise. See https://docs.microsoft.com/intune/deploy-use/enroll-devices-in-microsoft-intune for additional information.
    *
    * @param bool $val The supervisedModeEnabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setSupervisedModeEnabled($val)
    {
        $this->_propDict["supervisedModeEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the supportDepartment
    * Support department information
    *
    * @return string The supportDepartment
    */
    public function getSupportDepartment()
    {
        if (array_key_exists("supportDepartment", $this->_propDict)) {
            return $this->_propDict["supportDepartment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportDepartment
    * Support department information
    *
    * @param string $val The supportDepartment
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setSupportDepartment($val)
    {
        $this->_propDict["supportDepartment"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportPhoneNumber
    * Support phone number
    *
    * @return string The supportPhoneNumber
    */
    public function getSupportPhoneNumber()
    {
        if (array_key_exists("supportPhoneNumber", $this->_propDict)) {
            return $this->_propDict["supportPhoneNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportPhoneNumber
    * Support phone number
    *
    * @param string $val The supportPhoneNumber
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setSupportPhoneNumber($val)
    {
        $this->_propDict["supportPhoneNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditionsDisabled
    * Indicates if 'Terms and Conditions' setup pane is disabled
    *
    * @return bool The termsAndConditionsDisabled
    */
    public function getTermsAndConditionsDisabled()
    {
        if (array_key_exists("termsAndConditionsDisabled", $this->_propDict)) {
            return $this->_propDict["termsAndConditionsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the termsAndConditionsDisabled
    * Indicates if 'Terms and Conditions' setup pane is disabled
    *
    * @param bool $val The termsAndConditionsDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setTermsAndConditionsDisabled($val)
    {
        $this->_propDict["termsAndConditionsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the touchIdDisabled
    * Indicates if touch id setup pane is disabled
    *
    * @return bool The touchIdDisabled
    */
    public function getTouchIdDisabled()
    {
        if (array_key_exists("touchIdDisabled", $this->_propDict)) {
            return $this->_propDict["touchIdDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the touchIdDisabled
    * Indicates if touch id setup pane is disabled
    *
    * @param bool $val The touchIdDisabled
    *
    * @return DepEnrollmentBaseProfile
    */
    public function setTouchIdDisabled($val)
    {
        $this->_propDict["touchIdDisabled"] = boolval($val);
        return $this;
    }
    
}
