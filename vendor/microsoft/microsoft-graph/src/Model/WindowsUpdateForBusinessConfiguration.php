<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateForBusinessConfiguration File
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
* WindowsUpdateForBusinessConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateForBusinessConfiguration extends DeviceConfiguration
{
    /**
    * Gets the automaticUpdateMode
    * Automatic update mode. Possible values are: userDefined, notifyDownload, autoInstallAtMaintenanceTime, autoInstallAndRebootAtMaintenanceTime, autoInstallAndRebootAtScheduledTime, autoInstallAndRebootWithoutEndUserControl, windowsDefault.
    *
    * @return AutomaticUpdateMode The automaticUpdateMode
    */
    public function getAutomaticUpdateMode()
    {
        if (array_key_exists("automaticUpdateMode", $this->_propDict)) {
            if (is_a($this->_propDict["automaticUpdateMode"], "\Microsoft\Graph\Model\AutomaticUpdateMode")) {
                return $this->_propDict["automaticUpdateMode"];
            } else {
                $this->_propDict["automaticUpdateMode"] = new AutomaticUpdateMode($this->_propDict["automaticUpdateMode"]);
                return $this->_propDict["automaticUpdateMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the automaticUpdateMode
    * Automatic update mode. Possible values are: userDefined, notifyDownload, autoInstallAtMaintenanceTime, autoInstallAndRebootAtMaintenanceTime, autoInstallAndRebootAtScheduledTime, autoInstallAndRebootWithoutEndUserControl, windowsDefault.
    *
    * @param AutomaticUpdateMode $val The automaticUpdateMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setAutomaticUpdateMode($val)
    {
        $this->_propDict["automaticUpdateMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessReadyUpdatesOnly
    * Determines which branch devices will receive their updates from. Possible values are: userDefined, all, businessReadyOnly, windowsInsiderBuildFast, windowsInsiderBuildSlow, windowsInsiderBuildRelease.
    *
    * @return WindowsUpdateType The businessReadyUpdatesOnly
    */
    public function getBusinessReadyUpdatesOnly()
    {
        if (array_key_exists("businessReadyUpdatesOnly", $this->_propDict)) {
            if (is_a($this->_propDict["businessReadyUpdatesOnly"], "\Microsoft\Graph\Model\WindowsUpdateType")) {
                return $this->_propDict["businessReadyUpdatesOnly"];
            } else {
                $this->_propDict["businessReadyUpdatesOnly"] = new WindowsUpdateType($this->_propDict["businessReadyUpdatesOnly"]);
                return $this->_propDict["businessReadyUpdatesOnly"];
            }
        }
        return null;
    }
    
    /**
    * Sets the businessReadyUpdatesOnly
    * Determines which branch devices will receive their updates from. Possible values are: userDefined, all, businessReadyOnly, windowsInsiderBuildFast, windowsInsiderBuildSlow, windowsInsiderBuildRelease.
    *
    * @param WindowsUpdateType $val The businessReadyUpdatesOnly
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setBusinessReadyUpdatesOnly($val)
    {
        $this->_propDict["businessReadyUpdatesOnly"] = $val;
        return $this;
    }
    
    /**
    * Gets the deliveryOptimizationMode
    * Delivery Optimization Mode. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @return WindowsDeliveryOptimizationMode The deliveryOptimizationMode
    */
    public function getDeliveryOptimizationMode()
    {
        if (array_key_exists("deliveryOptimizationMode", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryOptimizationMode"], "\Microsoft\Graph\Model\WindowsDeliveryOptimizationMode")) {
                return $this->_propDict["deliveryOptimizationMode"];
            } else {
                $this->_propDict["deliveryOptimizationMode"] = new WindowsDeliveryOptimizationMode($this->_propDict["deliveryOptimizationMode"]);
                return $this->_propDict["deliveryOptimizationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deliveryOptimizationMode
    * Delivery Optimization Mode. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @param WindowsDeliveryOptimizationMode $val The deliveryOptimizationMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDeliveryOptimizationMode($val)
    {
        $this->_propDict["deliveryOptimizationMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the driversExcluded
    * Exclude Windows update Drivers
    *
    * @return bool The driversExcluded
    */
    public function getDriversExcluded()
    {
        if (array_key_exists("driversExcluded", $this->_propDict)) {
            return $this->_propDict["driversExcluded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the driversExcluded
    * Exclude Windows update Drivers
    *
    * @param bool $val The driversExcluded
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDriversExcluded($val)
    {
        $this->_propDict["driversExcluded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesDeferralPeriodInDays
    * Defer Feature Updates by these many days
    *
    * @return int The featureUpdatesDeferralPeriodInDays
    */
    public function getFeatureUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("featureUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["featureUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesDeferralPeriodInDays
    * Defer Feature Updates by these many days
    *
    * @param int $val The featureUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["featureUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPaused
    * Pause Feature Updates
    *
    * @return bool The featureUpdatesPaused
    */
    public function getFeatureUpdatesPaused()
    {
        if (array_key_exists("featureUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["featureUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesPaused
    * Pause Feature Updates
    *
    * @param bool $val The featureUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPaused($val)
    {
        $this->_propDict["featureUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPauseExpiryDateTime
    * Feature Updates Pause Expiry datetime
    *
    * @return \DateTime The featureUpdatesPauseExpiryDateTime
    */
    public function getFeatureUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("featureUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["featureUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["featureUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesPauseExpiryDateTime
    * Feature Updates Pause Expiry datetime
    *
    * @param \DateTime $val The featureUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["featureUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the installationSchedule
    * Installation schedule
    *
    * @return WindowsUpdateInstallScheduleType The installationSchedule
    */
    public function getInstallationSchedule()
    {
        if (array_key_exists("installationSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["installationSchedule"], "\Microsoft\Graph\Model\WindowsUpdateInstallScheduleType")) {
                return $this->_propDict["installationSchedule"];
            } else {
                $this->_propDict["installationSchedule"] = new WindowsUpdateInstallScheduleType($this->_propDict["installationSchedule"]);
                return $this->_propDict["installationSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installationSchedule
    * Installation schedule
    *
    * @param WindowsUpdateInstallScheduleType $val The installationSchedule
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setInstallationSchedule($val)
    {
        $this->_propDict["installationSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftUpdateServiceAllowed
    * Allow Microsoft Update Service
    *
    * @return bool The microsoftUpdateServiceAllowed
    */
    public function getMicrosoftUpdateServiceAllowed()
    {
        if (array_key_exists("microsoftUpdateServiceAllowed", $this->_propDict)) {
            return $this->_propDict["microsoftUpdateServiceAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftUpdateServiceAllowed
    * Allow Microsoft Update Service
    *
    * @param bool $val The microsoftUpdateServiceAllowed
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setMicrosoftUpdateServiceAllowed($val)
    {
        $this->_propDict["microsoftUpdateServiceAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the prereleaseFeatures
    * The pre-release features. Possible values are: userDefined, settingsOnly, settingsAndExperimentations, notAllowed.
    *
    * @return PrereleaseFeatures The prereleaseFeatures
    */
    public function getPrereleaseFeatures()
    {
        if (array_key_exists("prereleaseFeatures", $this->_propDict)) {
            if (is_a($this->_propDict["prereleaseFeatures"], "\Microsoft\Graph\Model\PrereleaseFeatures")) {
                return $this->_propDict["prereleaseFeatures"];
            } else {
                $this->_propDict["prereleaseFeatures"] = new PrereleaseFeatures($this->_propDict["prereleaseFeatures"]);
                return $this->_propDict["prereleaseFeatures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the prereleaseFeatures
    * The pre-release features. Possible values are: userDefined, settingsOnly, settingsAndExperimentations, notAllowed.
    *
    * @param PrereleaseFeatures $val The prereleaseFeatures
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setPrereleaseFeatures($val)
    {
        $this->_propDict["prereleaseFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesDeferralPeriodInDays
    * Defer Quality Updates by these many days
    *
    * @return int The qualityUpdatesDeferralPeriodInDays
    */
    public function getQualityUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("qualityUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesDeferralPeriodInDays
    * Defer Quality Updates by these many days
    *
    * @param int $val The qualityUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["qualityUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPaused
    * Pause Quality Updates
    *
    * @return bool The qualityUpdatesPaused
    */
    public function getQualityUpdatesPaused()
    {
        if (array_key_exists("qualityUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesPaused
    * Pause Quality Updates
    *
    * @param bool $val The qualityUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPaused($val)
    {
        $this->_propDict["qualityUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPauseExpiryDateTime
    * Quality Updates Pause Expiry datetime
    *
    * @return \DateTime The qualityUpdatesPauseExpiryDateTime
    */
    public function getQualityUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("qualityUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["qualityUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesPauseExpiryDateTime
    * Quality Updates Pause Expiry datetime
    *
    * @param \DateTime $val The qualityUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
}
