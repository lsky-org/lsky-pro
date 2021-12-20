<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessSessionControls File
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
* ConditionalAccessSessionControls class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessSessionControls extends Entity
{

    /**
    * Gets the applicationEnforcedRestrictions
    * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
    *
    * @return ApplicationEnforcedRestrictionsSessionControl The applicationEnforcedRestrictions
    */
    public function getApplicationEnforcedRestrictions()
    {
        if (array_key_exists("applicationEnforcedRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["applicationEnforcedRestrictions"], "\Microsoft\Graph\Model\ApplicationEnforcedRestrictionsSessionControl")) {
                return $this->_propDict["applicationEnforcedRestrictions"];
            } else {
                $this->_propDict["applicationEnforcedRestrictions"] = new ApplicationEnforcedRestrictionsSessionControl($this->_propDict["applicationEnforcedRestrictions"]);
                return $this->_propDict["applicationEnforcedRestrictions"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationEnforcedRestrictions
    * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
    *
    * @param ApplicationEnforcedRestrictionsSessionControl $val The value to assign to the applicationEnforcedRestrictions
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setApplicationEnforcedRestrictions($val)
    {
        $this->_propDict["applicationEnforcedRestrictions"] = $val;
         return $this;
    }

    /**
    * Gets the cloudAppSecurity
    * Session control to apply cloud app security.
    *
    * @return CloudAppSecuritySessionControl The cloudAppSecurity
    */
    public function getCloudAppSecurity()
    {
        if (array_key_exists("cloudAppSecurity", $this->_propDict)) {
            if (is_a($this->_propDict["cloudAppSecurity"], "\Microsoft\Graph\Model\CloudAppSecuritySessionControl")) {
                return $this->_propDict["cloudAppSecurity"];
            } else {
                $this->_propDict["cloudAppSecurity"] = new CloudAppSecuritySessionControl($this->_propDict["cloudAppSecurity"]);
                return $this->_propDict["cloudAppSecurity"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudAppSecurity
    * Session control to apply cloud app security.
    *
    * @param CloudAppSecuritySessionControl $val The value to assign to the cloudAppSecurity
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setCloudAppSecurity($val)
    {
        $this->_propDict["cloudAppSecurity"] = $val;
         return $this;
    }

    /**
    * Gets the persistentBrowser
    * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
    *
    * @return PersistentBrowserSessionControl The persistentBrowser
    */
    public function getPersistentBrowser()
    {
        if (array_key_exists("persistentBrowser", $this->_propDict)) {
            if (is_a($this->_propDict["persistentBrowser"], "\Microsoft\Graph\Model\PersistentBrowserSessionControl")) {
                return $this->_propDict["persistentBrowser"];
            } else {
                $this->_propDict["persistentBrowser"] = new PersistentBrowserSessionControl($this->_propDict["persistentBrowser"]);
                return $this->_propDict["persistentBrowser"];
            }
        }
        return null;
    }

    /**
    * Sets the persistentBrowser
    * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
    *
    * @param PersistentBrowserSessionControl $val The value to assign to the persistentBrowser
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setPersistentBrowser($val)
    {
        $this->_propDict["persistentBrowser"] = $val;
         return $this;
    }

    /**
    * Gets the signInFrequency
    * Session control to enforce signin frequency.
    *
    * @return SignInFrequencySessionControl The signInFrequency
    */
    public function getSignInFrequency()
    {
        if (array_key_exists("signInFrequency", $this->_propDict)) {
            if (is_a($this->_propDict["signInFrequency"], "\Microsoft\Graph\Model\SignInFrequencySessionControl")) {
                return $this->_propDict["signInFrequency"];
            } else {
                $this->_propDict["signInFrequency"] = new SignInFrequencySessionControl($this->_propDict["signInFrequency"]);
                return $this->_propDict["signInFrequency"];
            }
        }
        return null;
    }

    /**
    * Sets the signInFrequency
    * Session control to enforce signin frequency.
    *
    * @param SignInFrequencySessionControl $val The value to assign to the signInFrequency
    *
    * @return ConditionalAccessSessionControls The ConditionalAccessSessionControls
    */
    public function setSignInFrequency($val)
    {
        $this->_propDict["signInFrequency"] = $val;
         return $this;
    }
}
