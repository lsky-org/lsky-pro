<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteAssistancePartner File
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
* RemoteAssistancePartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteAssistancePartner extends Entity
{
    /**
    * Gets the displayName
    * Display name of the partner.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Display name of the partner.
    *
    * @param string $val The displayName
    *
    * @return RemoteAssistancePartner
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastConnectionDateTime
    * Timestamp of the last request sent to Intune by the TEM partner.
    *
    * @return \DateTime The lastConnectionDateTime
    */
    public function getLastConnectionDateTime()
    {
        if (array_key_exists("lastConnectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionDateTime"], "\DateTime")) {
                return $this->_propDict["lastConnectionDateTime"];
            } else {
                $this->_propDict["lastConnectionDateTime"] = new \DateTime($this->_propDict["lastConnectionDateTime"]);
                return $this->_propDict["lastConnectionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastConnectionDateTime
    * Timestamp of the last request sent to Intune by the TEM partner.
    *
    * @param \DateTime $val The lastConnectionDateTime
    *
    * @return RemoteAssistancePartner
    */
    public function setLastConnectionDateTime($val)
    {
        $this->_propDict["lastConnectionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onboardingRequestExpiryDateTime
    * When the OnboardingStatus is Onboarding, This is the date time when the onboarding request expires.
    *
    * @return \DateTime The onboardingRequestExpiryDateTime
    */
    public function getOnboardingRequestExpiryDateTime()
    {
        if (array_key_exists("onboardingRequestExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingRequestExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["onboardingRequestExpiryDateTime"];
            } else {
                $this->_propDict["onboardingRequestExpiryDateTime"] = new \DateTime($this->_propDict["onboardingRequestExpiryDateTime"]);
                return $this->_propDict["onboardingRequestExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onboardingRequestExpiryDateTime
    * When the OnboardingStatus is Onboarding, This is the date time when the onboarding request expires.
    *
    * @param \DateTime $val The onboardingRequestExpiryDateTime
    *
    * @return RemoteAssistancePartner
    */
    public function setOnboardingRequestExpiryDateTime($val)
    {
        $this->_propDict["onboardingRequestExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onboardingStatus
    * A friendly description of the current TeamViewer connector status. Possible values are: notOnboarded, onboarding, onboarded.
    *
    * @return RemoteAssistanceOnboardingStatus The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingStatus"], "\Beta\Microsoft\Graph\Model\RemoteAssistanceOnboardingStatus")) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new RemoteAssistanceOnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onboardingStatus
    * A friendly description of the current TeamViewer connector status. Possible values are: notOnboarded, onboarding, onboarded.
    *
    * @param RemoteAssistanceOnboardingStatus $val The onboardingStatus
    *
    * @return RemoteAssistancePartner
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the onboardingUrl
    * URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
    *
    * @return string The onboardingUrl
    */
    public function getOnboardingUrl()
    {
        if (array_key_exists("onboardingUrl", $this->_propDict)) {
            return $this->_propDict["onboardingUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onboardingUrl
    * URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service.
    *
    * @param string $val The onboardingUrl
    *
    * @return RemoteAssistancePartner
    */
    public function setOnboardingUrl($val)
    {
        $this->_propDict["onboardingUrl"] = $val;
        return $this;
    }
    
}
