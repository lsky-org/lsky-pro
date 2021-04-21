<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepMacOSEnrollmentProfile File
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
* DepMacOSEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile
{
    /**
    * Gets the accessibilityScreenDisabled
    * Indicates if Accessibility screen is disabled
    *
    * @return bool The accessibilityScreenDisabled
    */
    public function getAccessibilityScreenDisabled()
    {
        if (array_key_exists("accessibilityScreenDisabled", $this->_propDict)) {
            return $this->_propDict["accessibilityScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessibilityScreenDisabled
    * Indicates if Accessibility screen is disabled
    *
    * @param bool $val The accessibilityScreenDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setAccessibilityScreenDisabled($val)
    {
        $this->_propDict["accessibilityScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the chooseYourLockScreenDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @return bool The chooseYourLockScreenDisabled
    */
    public function getChooseYourLockScreenDisabled()
    {
        if (array_key_exists("chooseYourLockScreenDisabled", $this->_propDict)) {
            return $this->_propDict["chooseYourLockScreenDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the chooseYourLockScreenDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @param bool $val The chooseYourLockScreenDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setChooseYourLockScreenDisabled($val)
    {
        $this->_propDict["chooseYourLockScreenDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultDisabled
    * Indicates if file vault is disabled
    *
    * @return bool The fileVaultDisabled
    */
    public function getFileVaultDisabled()
    {
        if (array_key_exists("fileVaultDisabled", $this->_propDict)) {
            return $this->_propDict["fileVaultDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultDisabled
    * Indicates if file vault is disabled
    *
    * @param bool $val The fileVaultDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setFileVaultDisabled($val)
    {
        $this->_propDict["fileVaultDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudDiagnosticsDisabled
    * Indicates if iCloud Analytics screen is disabled
    *
    * @return bool The iCloudDiagnosticsDisabled
    */
    public function getICloudDiagnosticsDisabled()
    {
        if (array_key_exists("iCloudDiagnosticsDisabled", $this->_propDict)) {
            return $this->_propDict["iCloudDiagnosticsDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudDiagnosticsDisabled
    * Indicates if iCloud Analytics screen is disabled
    *
    * @param bool $val The iCloudDiagnosticsDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setICloudDiagnosticsDisabled($val)
    {
        $this->_propDict["iCloudDiagnosticsDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iCloudStorageDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @return bool The iCloudStorageDisabled
    */
    public function getICloudStorageDisabled()
    {
        if (array_key_exists("iCloudStorageDisabled", $this->_propDict)) {
            return $this->_propDict["iCloudStorageDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iCloudStorageDisabled
    * Indicates if iCloud Documents and Desktop screen is disabled
    *
    * @param bool $val The iCloudStorageDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setICloudStorageDisabled($val)
    {
        $this->_propDict["iCloudStorageDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @return bool The passCodeDisabled
    */
    public function getPassCodeDisabled()
    {
        if (array_key_exists("passCodeDisabled", $this->_propDict)) {
            return $this->_propDict["passCodeDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passCodeDisabled
    * Indicates if Passcode setup pane is disabled
    *
    * @param bool $val The passCodeDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setPassCodeDisabled($val)
    {
        $this->_propDict["passCodeDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the registrationDisabled
    * Indicates if registration is disabled
    *
    * @return bool The registrationDisabled
    */
    public function getRegistrationDisabled()
    {
        if (array_key_exists("registrationDisabled", $this->_propDict)) {
            return $this->_propDict["registrationDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the registrationDisabled
    * Indicates if registration is disabled
    *
    * @param bool $val The registrationDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setRegistrationDisabled($val)
    {
        $this->_propDict["registrationDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @return bool The zoomDisabled
    */
    public function getZoomDisabled()
    {
        if (array_key_exists("zoomDisabled", $this->_propDict)) {
            return $this->_propDict["zoomDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the zoomDisabled
    * Indicates if zoom setup pane is disabled
    *
    * @param bool $val The zoomDisabled
    *
    * @return DepMacOSEnrollmentProfile
    */
    public function setZoomDisabled($val)
    {
        $this->_propDict["zoomDisabled"] = boolval($val);
        return $this;
    }
    
}
