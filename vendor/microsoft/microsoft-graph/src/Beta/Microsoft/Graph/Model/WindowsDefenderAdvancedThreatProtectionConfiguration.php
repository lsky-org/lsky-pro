<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderAdvancedThreatProtectionConfiguration File
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
* WindowsDefenderAdvancedThreatProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderAdvancedThreatProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the advancedThreatProtectionAutoPopulateOnboardingBlob
    * Auto populate onboarding blob programmatically from Advanced Threat protection service
    *
    * @return bool The advancedThreatProtectionAutoPopulateOnboardingBlob
    */
    public function getAdvancedThreatProtectionAutoPopulateOnboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionAutoPopulateOnboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionAutoPopulateOnboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionAutoPopulateOnboardingBlob
    * Auto populate onboarding blob programmatically from Advanced Threat protection service
    *
    * @param bool $val The advancedThreatProtectionAutoPopulateOnboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionAutoPopulateOnboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionAutoPopulateOnboardingBlob"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOffboardingBlob
    * Windows Defender AdvancedThreatProtection Offboarding Blob.
    *
    * @return string The advancedThreatProtectionOffboardingBlob
    */
    public function getAdvancedThreatProtectionOffboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionOffboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOffboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOffboardingBlob
    * Windows Defender AdvancedThreatProtection Offboarding Blob.
    *
    * @param string $val The advancedThreatProtectionOffboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOffboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionOffboardingBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOffboardingFilename
    * Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
    *
    * @return string The advancedThreatProtectionOffboardingFilename
    */
    public function getAdvancedThreatProtectionOffboardingFilename()
    {
        if (array_key_exists("advancedThreatProtectionOffboardingFilename", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOffboardingFilename"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOffboardingFilename
    * Name of the file from which AdvancedThreatProtectionOffboardingBlob was obtained.
    *
    * @param string $val The advancedThreatProtectionOffboardingFilename
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOffboardingFilename($val)
    {
        $this->_propDict["advancedThreatProtectionOffboardingFilename"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOnboardingBlob
    * Windows Defender AdvancedThreatProtection Onboarding Blob.
    *
    * @return string The advancedThreatProtectionOnboardingBlob
    */
    public function getAdvancedThreatProtectionOnboardingBlob()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingBlob", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOnboardingBlob"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingBlob
    * Windows Defender AdvancedThreatProtection Onboarding Blob.
    *
    * @param string $val The advancedThreatProtectionOnboardingBlob
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOnboardingBlob($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingBlob"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionOnboardingFilename
    * Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
    *
    * @return string The advancedThreatProtectionOnboardingFilename
    */
    public function getAdvancedThreatProtectionOnboardingFilename()
    {
        if (array_key_exists("advancedThreatProtectionOnboardingFilename", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionOnboardingFilename"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionOnboardingFilename
    * Name of the file from which AdvancedThreatProtectionOnboardingBlob was obtained.
    *
    * @param string $val The advancedThreatProtectionOnboardingFilename
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAdvancedThreatProtectionOnboardingFilename($val)
    {
        $this->_propDict["advancedThreatProtectionOnboardingFilename"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowSampleSharing
    * Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
    *
    * @return bool The allowSampleSharing
    */
    public function getAllowSampleSharing()
    {
        if (array_key_exists("allowSampleSharing", $this->_propDict)) {
            return $this->_propDict["allowSampleSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowSampleSharing
    * Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
    *
    * @param bool $val The allowSampleSharing
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setAllowSampleSharing($val)
    {
        $this->_propDict["allowSampleSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableExpeditedTelemetryReporting
    * Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    *
    * @return bool The enableExpeditedTelemetryReporting
    */
    public function getEnableExpeditedTelemetryReporting()
    {
        if (array_key_exists("enableExpeditedTelemetryReporting", $this->_propDict)) {
            return $this->_propDict["enableExpeditedTelemetryReporting"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableExpeditedTelemetryReporting
    * Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency.
    *
    * @param bool $val The enableExpeditedTelemetryReporting
    *
    * @return WindowsDefenderAdvancedThreatProtectionConfiguration
    */
    public function setEnableExpeditedTelemetryReporting($val)
    {
        $this->_propDict["enableExpeditedTelemetryReporting"] = boolval($val);
        return $this;
    }
    
}
