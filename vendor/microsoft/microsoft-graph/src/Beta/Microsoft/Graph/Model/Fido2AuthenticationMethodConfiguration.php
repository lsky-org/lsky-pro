<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Fido2AuthenticationMethodConfiguration File
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
* Fido2AuthenticationMethodConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Fido2AuthenticationMethodConfiguration extends AuthenticationMethodConfiguration
{
    /**
    * Gets the isAttestationEnforced
    * Determines whether attestation must be enforced for FIDO2 security key registration.
    *
    * @return bool The isAttestationEnforced
    */
    public function getIsAttestationEnforced()
    {
        if (array_key_exists("isAttestationEnforced", $this->_propDict)) {
            return $this->_propDict["isAttestationEnforced"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAttestationEnforced
    * Determines whether attestation must be enforced for FIDO2 security key registration.
    *
    * @param bool $val The isAttestationEnforced
    *
    * @return Fido2AuthenticationMethodConfiguration
    */
    public function setIsAttestationEnforced($val)
    {
        $this->_propDict["isAttestationEnforced"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSelfServiceRegistrationAllowed
    * Determines if users can register new FIDO2 security keys.
    *
    * @return bool The isSelfServiceRegistrationAllowed
    */
    public function getIsSelfServiceRegistrationAllowed()
    {
        if (array_key_exists("isSelfServiceRegistrationAllowed", $this->_propDict)) {
            return $this->_propDict["isSelfServiceRegistrationAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSelfServiceRegistrationAllowed
    * Determines if users can register new FIDO2 security keys.
    *
    * @param bool $val The isSelfServiceRegistrationAllowed
    *
    * @return Fido2AuthenticationMethodConfiguration
    */
    public function setIsSelfServiceRegistrationAllowed($val)
    {
        $this->_propDict["isSelfServiceRegistrationAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keyRestrictions
    * Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (e.g. make and model) of the authenticator.
    *
    * @return Fido2KeyRestrictions The keyRestrictions
    */
    public function getKeyRestrictions()
    {
        if (array_key_exists("keyRestrictions", $this->_propDict)) {
            if (is_a($this->_propDict["keyRestrictions"], "\Beta\Microsoft\Graph\Model\Fido2KeyRestrictions")) {
                return $this->_propDict["keyRestrictions"];
            } else {
                $this->_propDict["keyRestrictions"] = new Fido2KeyRestrictions($this->_propDict["keyRestrictions"]);
                return $this->_propDict["keyRestrictions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyRestrictions
    * Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (e.g. make and model) of the authenticator.
    *
    * @param Fido2KeyRestrictions $val The keyRestrictions
    *
    * @return Fido2AuthenticationMethodConfiguration
    */
    public function setKeyRestrictions($val)
    {
        $this->_propDict["keyRestrictions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
     *
     * @return array The includeTargets
     */
    public function getIncludeTargets()
    {
        if (array_key_exists("includeTargets", $this->_propDict)) {
           return $this->_propDict["includeTargets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the includeTargets
    * A collection of users or groups who are enabled to use the authentication method.
    *
    * @param AuthenticationMethodTarget $val The includeTargets
    *
    * @return Fido2AuthenticationMethodConfiguration
    */
    public function setIncludeTargets($val)
    {
		$this->_propDict["includeTargets"] = $val;
        return $this;
    }
    
}
