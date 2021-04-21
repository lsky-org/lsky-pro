<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSecretKeyStringValuePair File
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
* SynchronizationSecretKeyStringValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationSecretKeyStringValuePair extends Entity
{

    /**
    * Gets the key
    * Possible values are: None, UserName, Password, SecretToken, AppKey, BaseAddress, ClientIdentifier, ClientSecret, SingleSignOnType, Sandbox, Url, Domain, ConsumerKey, ConsumerSecret, TokenKey, TokenExpiration, Oauth2AccessToken, Oauth2AccessTokenCreationTime, Oauth2RefreshToken, SyncAll, InstanceName, Oauth2ClientId, Oauth2ClientSecret, CompanyId, UpdateKeyOnSoftDelete, SynchronizationSchedule, SystemOfRecord, SandboxName, EnforceDomain, SyncNotificationSettings, Server, PerformInboundEntitlementGrants, HardDeletesEnabled, SyncAgentCompatibilityKey, SyncAgentADContainer, ValidateDomain, TestReferences.
    *
    * @return SynchronizationSecret The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "\Beta\Microsoft\Graph\Model\SynchronizationSecret")) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = new SynchronizationSecret($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    * Possible values are: None, UserName, Password, SecretToken, AppKey, BaseAddress, ClientIdentifier, ClientSecret, SingleSignOnType, Sandbox, Url, Domain, ConsumerKey, ConsumerSecret, TokenKey, TokenExpiration, Oauth2AccessToken, Oauth2AccessTokenCreationTime, Oauth2RefreshToken, SyncAll, InstanceName, Oauth2ClientId, Oauth2ClientSecret, CompanyId, UpdateKeyOnSoftDelete, SynchronizationSchedule, SystemOfRecord, SandboxName, EnforceDomain, SyncNotificationSettings, Server, PerformInboundEntitlementGrants, HardDeletesEnabled, SyncAgentCompatibilityKey, SyncAgentADContainer, ValidateDomain, TestReferences.
    *
    * @param SynchronizationSecret $val The value to assign to the key
    *
    * @return SynchronizationSecretKeyStringValuePair The SynchronizationSecretKeyStringValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * The value of the secret.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * The value of the secret.
    *
    * @param string $val The value of the value
    *
    * @return SynchronizationSecretKeyStringValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
