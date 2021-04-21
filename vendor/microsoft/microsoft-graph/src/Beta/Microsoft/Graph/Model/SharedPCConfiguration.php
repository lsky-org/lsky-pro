<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedPCConfiguration File
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
* SharedPCConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedPCConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountManagerPolicy
    * Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
    *
    * @return SharedPCAccountManagerPolicy The accountManagerPolicy
    */
    public function getAccountManagerPolicy()
    {
        if (array_key_exists("accountManagerPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accountManagerPolicy"], "\Beta\Microsoft\Graph\Model\SharedPCAccountManagerPolicy")) {
                return $this->_propDict["accountManagerPolicy"];
            } else {
                $this->_propDict["accountManagerPolicy"] = new SharedPCAccountManagerPolicy($this->_propDict["accountManagerPolicy"]);
                return $this->_propDict["accountManagerPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accountManagerPolicy
    * Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
    *
    * @param SharedPCAccountManagerPolicy $val The accountManagerPolicy
    *
    * @return SharedPCConfiguration
    */
    public function setAccountManagerPolicy($val)
    {
        $this->_propDict["accountManagerPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowedAccounts
    * Indicates which type of accounts are allowed to use on a shared PC. Possible values are: notConfigured, guest, domain.
    *
    * @return SharedPCAllowedAccountType The allowedAccounts
    */
    public function getAllowedAccounts()
    {
        if (array_key_exists("allowedAccounts", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAccounts"], "\Beta\Microsoft\Graph\Model\SharedPCAllowedAccountType")) {
                return $this->_propDict["allowedAccounts"];
            } else {
                $this->_propDict["allowedAccounts"] = new SharedPCAllowedAccountType($this->_propDict["allowedAccounts"]);
                return $this->_propDict["allowedAccounts"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedAccounts
    * Indicates which type of accounts are allowed to use on a shared PC. Possible values are: notConfigured, guest, domain.
    *
    * @param SharedPCAllowedAccountType $val The allowedAccounts
    *
    * @return SharedPCConfiguration
    */
    public function setAllowedAccounts($val)
    {
        $this->_propDict["allowedAccounts"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowLocalStorage
    * Specifies whether local storage is allowed on a shared PC.
    *
    * @return bool The allowLocalStorage
    */
    public function getAllowLocalStorage()
    {
        if (array_key_exists("allowLocalStorage", $this->_propDict)) {
            return $this->_propDict["allowLocalStorage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowLocalStorage
    * Specifies whether local storage is allowed on a shared PC.
    *
    * @param bool $val The allowLocalStorage
    *
    * @return SharedPCConfiguration
    */
    public function setAllowLocalStorage($val)
    {
        $this->_propDict["allowLocalStorage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableAccountManager
    * Disables the account manager for shared PC mode.
    *
    * @return bool The disableAccountManager
    */
    public function getDisableAccountManager()
    {
        if (array_key_exists("disableAccountManager", $this->_propDict)) {
            return $this->_propDict["disableAccountManager"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableAccountManager
    * Disables the account manager for shared PC mode.
    *
    * @param bool $val The disableAccountManager
    *
    * @return SharedPCConfiguration
    */
    public function setDisableAccountManager($val)
    {
        $this->_propDict["disableAccountManager"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableEduPolicies
    * Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
    *
    * @return bool The disableEduPolicies
    */
    public function getDisableEduPolicies()
    {
        if (array_key_exists("disableEduPolicies", $this->_propDict)) {
            return $this->_propDict["disableEduPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableEduPolicies
    * Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
    *
    * @param bool $val The disableEduPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setDisableEduPolicies($val)
    {
        $this->_propDict["disableEduPolicies"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disablePowerPolicies
    * Specifies whether the default shared PC power policies should be disabled.
    *
    * @return bool The disablePowerPolicies
    */
    public function getDisablePowerPolicies()
    {
        if (array_key_exists("disablePowerPolicies", $this->_propDict)) {
            return $this->_propDict["disablePowerPolicies"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disablePowerPolicies
    * Specifies whether the default shared PC power policies should be disabled.
    *
    * @param bool $val The disablePowerPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setDisablePowerPolicies($val)
    {
        $this->_propDict["disablePowerPolicies"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableSignInOnResume
    * Disables the requirement to sign in whenever the device wakes up from sleep mode.
    *
    * @return bool The disableSignInOnResume
    */
    public function getDisableSignInOnResume()
    {
        if (array_key_exists("disableSignInOnResume", $this->_propDict)) {
            return $this->_propDict["disableSignInOnResume"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableSignInOnResume
    * Disables the requirement to sign in whenever the device wakes up from sleep mode.
    *
    * @param bool $val The disableSignInOnResume
    *
    * @return SharedPCConfiguration
    */
    public function setDisableSignInOnResume($val)
    {
        $this->_propDict["disableSignInOnResume"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enabled
    * Enables shared PC mode and applies the shared pc policies.
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    * Enables shared PC mode and applies the shared pc policies.
    *
    * @param bool $val The enabled
    *
    * @return SharedPCConfiguration
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fastFirstSignIn
    * Specifies whether to auto connect new non-admin Azure AD accounts to pre-configured candidate local accounts. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The fastFirstSignIn
    */
    public function getFastFirstSignIn()
    {
        if (array_key_exists("fastFirstSignIn", $this->_propDict)) {
            if (is_a($this->_propDict["fastFirstSignIn"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["fastFirstSignIn"];
            } else {
                $this->_propDict["fastFirstSignIn"] = new Enablement($this->_propDict["fastFirstSignIn"]);
                return $this->_propDict["fastFirstSignIn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fastFirstSignIn
    * Specifies whether to auto connect new non-admin Azure AD accounts to pre-configured candidate local accounts. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The fastFirstSignIn
    *
    * @return SharedPCConfiguration
    */
    public function setFastFirstSignIn($val)
    {
        $this->_propDict["fastFirstSignIn"] = $val;
        return $this;
    }
    
    /**
    * Gets the idleTimeBeforeSleepInSeconds
    * Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
    *
    * @return int The idleTimeBeforeSleepInSeconds
    */
    public function getIdleTimeBeforeSleepInSeconds()
    {
        if (array_key_exists("idleTimeBeforeSleepInSeconds", $this->_propDict)) {
            return $this->_propDict["idleTimeBeforeSleepInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the idleTimeBeforeSleepInSeconds
    * Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
    *
    * @param int $val The idleTimeBeforeSleepInSeconds
    *
    * @return SharedPCConfiguration
    */
    public function setIdleTimeBeforeSleepInSeconds($val)
    {
        $this->_propDict["idleTimeBeforeSleepInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the kioskAppDisplayName
    * Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
    *
    * @return string The kioskAppDisplayName
    */
    public function getKioskAppDisplayName()
    {
        if (array_key_exists("kioskAppDisplayName", $this->_propDict)) {
            return $this->_propDict["kioskAppDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskAppDisplayName
    * Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
    *
    * @param string $val The kioskAppDisplayName
    *
    * @return SharedPCConfiguration
    */
    public function setKioskAppDisplayName($val)
    {
        $this->_propDict["kioskAppDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the kioskAppUserModelId
    * Specifies the application user model ID of the app to use with assigned access.
    *
    * @return string The kioskAppUserModelId
    */
    public function getKioskAppUserModelId()
    {
        if (array_key_exists("kioskAppUserModelId", $this->_propDict)) {
            return $this->_propDict["kioskAppUserModelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kioskAppUserModelId
    * Specifies the application user model ID of the app to use with assigned access.
    *
    * @param string $val The kioskAppUserModelId
    *
    * @return SharedPCConfiguration
    */
    public function setKioskAppUserModelId($val)
    {
        $this->_propDict["kioskAppUserModelId"] = $val;
        return $this;
    }
    
    /**
    * Gets the localStorage
    * Specifies whether local storage is allowed on a shared PC. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The localStorage
    */
    public function getLocalStorage()
    {
        if (array_key_exists("localStorage", $this->_propDict)) {
            if (is_a($this->_propDict["localStorage"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["localStorage"];
            } else {
                $this->_propDict["localStorage"] = new Enablement($this->_propDict["localStorage"]);
                return $this->_propDict["localStorage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localStorage
    * Specifies whether local storage is allowed on a shared PC. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The localStorage
    *
    * @return SharedPCConfiguration
    */
    public function setLocalStorage($val)
    {
        $this->_propDict["localStorage"] = $val;
        return $this;
    }
    
    /**
    * Gets the maintenanceStartTime
    * Specifies the daily start time of maintenance hour.
    *
    * @return TimeOfDay The maintenanceStartTime
    */
    public function getMaintenanceStartTime()
    {
        if (array_key_exists("maintenanceStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["maintenanceStartTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["maintenanceStartTime"];
            } else {
                $this->_propDict["maintenanceStartTime"] = new TimeOfDay($this->_propDict["maintenanceStartTime"]);
                return $this->_propDict["maintenanceStartTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the maintenanceStartTime
    * Specifies the daily start time of maintenance hour.
    *
    * @param TimeOfDay $val The maintenanceStartTime
    *
    * @return SharedPCConfiguration
    */
    public function setMaintenanceStartTime($val)
    {
        $this->_propDict["maintenanceStartTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the setAccountManager
    * Disables the account manager for shared PC mode. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The setAccountManager
    */
    public function getSetAccountManager()
    {
        if (array_key_exists("setAccountManager", $this->_propDict)) {
            if (is_a($this->_propDict["setAccountManager"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["setAccountManager"];
            } else {
                $this->_propDict["setAccountManager"] = new Enablement($this->_propDict["setAccountManager"]);
                return $this->_propDict["setAccountManager"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setAccountManager
    * Disables the account manager for shared PC mode. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The setAccountManager
    *
    * @return SharedPCConfiguration
    */
    public function setSetAccountManager($val)
    {
        $this->_propDict["setAccountManager"] = $val;
        return $this;
    }
    
    /**
    * Gets the setEduPolicies
    * Specifies whether the default shared PC education environment policies should be enabled/disabled/not configured. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The setEduPolicies
    */
    public function getSetEduPolicies()
    {
        if (array_key_exists("setEduPolicies", $this->_propDict)) {
            if (is_a($this->_propDict["setEduPolicies"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["setEduPolicies"];
            } else {
                $this->_propDict["setEduPolicies"] = new Enablement($this->_propDict["setEduPolicies"]);
                return $this->_propDict["setEduPolicies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setEduPolicies
    * Specifies whether the default shared PC education environment policies should be enabled/disabled/not configured. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The setEduPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setSetEduPolicies($val)
    {
        $this->_propDict["setEduPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the setPowerPolicies
    * Specifies whether the default shared PC power policies should be enabled/disabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The setPowerPolicies
    */
    public function getSetPowerPolicies()
    {
        if (array_key_exists("setPowerPolicies", $this->_propDict)) {
            if (is_a($this->_propDict["setPowerPolicies"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["setPowerPolicies"];
            } else {
                $this->_propDict["setPowerPolicies"] = new Enablement($this->_propDict["setPowerPolicies"]);
                return $this->_propDict["setPowerPolicies"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setPowerPolicies
    * Specifies whether the default shared PC power policies should be enabled/disabled. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The setPowerPolicies
    *
    * @return SharedPCConfiguration
    */
    public function setSetPowerPolicies($val)
    {
        $this->_propDict["setPowerPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInOnResume
    * Specifies the requirement to sign in whenever the device wakes up from sleep mode. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The signInOnResume
    */
    public function getSignInOnResume()
    {
        if (array_key_exists("signInOnResume", $this->_propDict)) {
            if (is_a($this->_propDict["signInOnResume"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["signInOnResume"];
            } else {
                $this->_propDict["signInOnResume"] = new Enablement($this->_propDict["signInOnResume"]);
                return $this->_propDict["signInOnResume"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signInOnResume
    * Specifies the requirement to sign in whenever the device wakes up from sleep mode. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The signInOnResume
    *
    * @return SharedPCConfiguration
    */
    public function setSignInOnResume($val)
    {
        $this->_propDict["signInOnResume"] = $val;
        return $this;
    }
    
}
