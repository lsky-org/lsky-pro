<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChromeOSOnboardingSettings File
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
* ChromeOSOnboardingSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChromeOSOnboardingSettings extends Entity
{
    /**
    * Gets the lastDirectorySyncDateTime
    * The ChromebookTenant's LastDirectorySyncDateTime
    *
    * @return \DateTime The lastDirectorySyncDateTime
    */
    public function getLastDirectorySyncDateTime()
    {
        if (array_key_exists("lastDirectorySyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDirectorySyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastDirectorySyncDateTime"];
            } else {
                $this->_propDict["lastDirectorySyncDateTime"] = new \DateTime($this->_propDict["lastDirectorySyncDateTime"]);
                return $this->_propDict["lastDirectorySyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastDirectorySyncDateTime
    * The ChromebookTenant's LastDirectorySyncDateTime
    *
    * @param \DateTime $val The lastDirectorySyncDateTime
    *
    * @return ChromeOSOnboardingSettings
    */
    public function setLastDirectorySyncDateTime($val)
    {
        $this->_propDict["lastDirectorySyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The ChromebookTenant's LastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The ChromebookTenant's LastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ChromeOSOnboardingSettings
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the onboardingStatus
    * The ChromebookTenant's OnboardingStatus
    *
    * @return OnboardingStatus The onboardingStatus
    */
    public function getOnboardingStatus()
    {
        if (array_key_exists("onboardingStatus", $this->_propDict)) {
            if (is_a($this->_propDict["onboardingStatus"], "\Beta\Microsoft\Graph\Model\OnboardingStatus")) {
                return $this->_propDict["onboardingStatus"];
            } else {
                $this->_propDict["onboardingStatus"] = new OnboardingStatus($this->_propDict["onboardingStatus"]);
                return $this->_propDict["onboardingStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onboardingStatus
    * The ChromebookTenant's OnboardingStatus
    *
    * @param OnboardingStatus $val The onboardingStatus
    *
    * @return ChromeOSOnboardingSettings
    */
    public function setOnboardingStatus($val)
    {
        $this->_propDict["onboardingStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerUserPrincipalName
    * The ChromebookTenant's OwnerUserPrincipalName
    *
    * @return string The ownerUserPrincipalName
    */
    public function getOwnerUserPrincipalName()
    {
        if (array_key_exists("ownerUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerUserPrincipalName
    * The ChromebookTenant's OwnerUserPrincipalName
    *
    * @param string $val The ownerUserPrincipalName
    *
    * @return ChromeOSOnboardingSettings
    */
    public function setOwnerUserPrincipalName($val)
    {
        $this->_propDict["ownerUserPrincipalName"] = $val;
        return $this;
    }
    
}
