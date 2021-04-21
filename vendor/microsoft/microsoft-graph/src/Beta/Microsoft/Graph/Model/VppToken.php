<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppToken File
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
* VppToken class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VppToken extends Entity
{
    /**
    * Gets the appleId
    * The apple Id associated with the given Apple Volume Purchase Program Token.
    *
    * @return string The appleId
    */
    public function getAppleId()
    {
        if (array_key_exists("appleId", $this->_propDict)) {
            return $this->_propDict["appleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleId
    * The apple Id associated with the given Apple Volume Purchase Program Token.
    *
    * @param string $val The appleId
    *
    * @return VppToken
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the automaticallyUpdateApps
    * Whether or not apps for the VPP token will be automatically updated.
    *
    * @return bool The automaticallyUpdateApps
    */
    public function getAutomaticallyUpdateApps()
    {
        if (array_key_exists("automaticallyUpdateApps", $this->_propDict)) {
            return $this->_propDict["automaticallyUpdateApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the automaticallyUpdateApps
    * Whether or not apps for the VPP token will be automatically updated.
    *
    * @param bool $val The automaticallyUpdateApps
    *
    * @return VppToken
    */
    public function setAutomaticallyUpdateApps($val)
    {
        $this->_propDict["automaticallyUpdateApps"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the claimTokenManagementFromExternalMdm
    * Admin consent to allow claiming token management from external MDM.
    *
    * @return bool The claimTokenManagementFromExternalMdm
    */
    public function getClaimTokenManagementFromExternalMdm()
    {
        if (array_key_exists("claimTokenManagementFromExternalMdm", $this->_propDict)) {
            return $this->_propDict["claimTokenManagementFromExternalMdm"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the claimTokenManagementFromExternalMdm
    * Admin consent to allow claiming token management from external MDM.
    *
    * @param bool $val The claimTokenManagementFromExternalMdm
    *
    * @return VppToken
    */
    public function setClaimTokenManagementFromExternalMdm($val)
    {
        $this->_propDict["claimTokenManagementFromExternalMdm"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the countryOrRegion
    * Whether or not apps for the VPP token will be automatically updated.
    *
    * @return string The countryOrRegion
    */
    public function getCountryOrRegion()
    {
        if (array_key_exists("countryOrRegion", $this->_propDict)) {
            return $this->_propDict["countryOrRegion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryOrRegion
    * Whether or not apps for the VPP token will be automatically updated.
    *
    * @param string $val The countryOrRegion
    *
    * @return VppToken
    */
    public function setCountryOrRegion($val)
    {
        $this->_propDict["countryOrRegion"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataSharingConsentGranted
    * Consent granted for data sharing with the Apple Volume Purchase Program.
    *
    * @return bool The dataSharingConsentGranted
    */
    public function getDataSharingConsentGranted()
    {
        if (array_key_exists("dataSharingConsentGranted", $this->_propDict)) {
            return $this->_propDict["dataSharingConsentGranted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataSharingConsentGranted
    * Consent granted for data sharing with the Apple Volume Purchase Program.
    *
    * @param bool $val The dataSharingConsentGranted
    *
    * @return VppToken
    */
    public function setDataSharingConsentGranted($val)
    {
        $this->_propDict["dataSharingConsentGranted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * An admin specified token friendly name.
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
    * An admin specified token friendly name.
    *
    * @param string $val The displayName
    *
    * @return VppToken
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * The expiration date time of the Apple Volume Purchase Program Token.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * The expiration date time of the Apple Volume Purchase Program Token.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return VppToken
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modification date time associated with the Apple Volume Purchase Program Token.
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
    * Last modification date time associated with the Apple Volume Purchase Program Token.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return VppToken
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return VppToken
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncStatus
    * Current sync status of the last application sync which was triggered using the Apple Volume Purchase Program Token. Possible values are: none, inProgress, completed, failed. Possible values are: none, inProgress, completed, failed.
    *
    * @return VppTokenSyncStatus The lastSyncStatus
    */
    public function getLastSyncStatus()
    {
        if (array_key_exists("lastSyncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncStatus"], "\Beta\Microsoft\Graph\Model\VppTokenSyncStatus")) {
                return $this->_propDict["lastSyncStatus"];
            } else {
                $this->_propDict["lastSyncStatus"] = new VppTokenSyncStatus($this->_propDict["lastSyncStatus"]);
                return $this->_propDict["lastSyncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncStatus
    * Current sync status of the last application sync which was triggered using the Apple Volume Purchase Program Token. Possible values are: none, inProgress, completed, failed. Possible values are: none, inProgress, completed, failed.
    *
    * @param VppTokenSyncStatus $val The lastSyncStatus
    *
    * @return VppToken
    */
    public function setLastSyncStatus($val)
    {
        $this->_propDict["lastSyncStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the locationName
    * Token location returned from Apple VPP.
    *
    * @return string The locationName
    */
    public function getLocationName()
    {
        if (array_key_exists("locationName", $this->_propDict)) {
            return $this->_propDict["locationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locationName
    * Token location returned from Apple VPP.
    *
    * @param string $val The locationName
    *
    * @return VppToken
    */
    public function setLocationName($val)
    {
        $this->_propDict["locationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizationName
    * The organization associated with the Apple Volume Purchase Program Token
    *
    * @return string The organizationName
    */
    public function getOrganizationName()
    {
        if (array_key_exists("organizationName", $this->_propDict)) {
            return $this->_propDict["organizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationName
    * The organization associated with the Apple Volume Purchase Program Token
    *
    * @param string $val The organizationName
    *
    * @return VppToken
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * Role Scope Tags IDs assigned to this entity.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * Role Scope Tags IDs assigned to this entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return VppToken
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Current state of the Apple Volume Purchase Program Token. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM, duplicateLocationId.
    *
    * @return VppTokenState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\VppTokenState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new VppTokenState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Current state of the Apple Volume Purchase Program Token. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM. Possible values are: unknown, valid, expired, invalid, assignedToExternalMDM, duplicateLocationId.
    *
    * @param VppTokenState $val The state
    *
    * @return VppToken
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the token
    * The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
    *
    * @return string The token
    */
    public function getToken()
    {
        if (array_key_exists("token", $this->_propDict)) {
            return $this->_propDict["token"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the token
    * The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
    *
    * @param string $val The token
    *
    * @return VppToken
    */
    public function setToken($val)
    {
        $this->_propDict["token"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenActionResults
    * The collection of statuses of the actions performed on the Apple Volume Purchase Program Token.
     *
     * @return array The tokenActionResults
     */
    public function getTokenActionResults()
    {
        if (array_key_exists("tokenActionResults", $this->_propDict)) {
           return $this->_propDict["tokenActionResults"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenActionResults
    * The collection of statuses of the actions performed on the Apple Volume Purchase Program Token.
    *
    * @param VppTokenActionResult $val The tokenActionResults
    *
    * @return VppToken
    */
    public function setTokenActionResults($val)
    {
		$this->_propDict["tokenActionResults"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenAccountType
    * The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
    *
    * @return VppTokenAccountType The vppTokenAccountType
    */
    public function getVppTokenAccountType()
    {
        if (array_key_exists("vppTokenAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["vppTokenAccountType"], "\Beta\Microsoft\Graph\Model\VppTokenAccountType")) {
                return $this->_propDict["vppTokenAccountType"];
            } else {
                $this->_propDict["vppTokenAccountType"] = new VppTokenAccountType($this->_propDict["vppTokenAccountType"]);
                return $this->_propDict["vppTokenAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vppTokenAccountType
    * The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
    *
    * @param VppTokenAccountType $val The vppTokenAccountType
    *
    * @return VppToken
    */
    public function setVppTokenAccountType($val)
    {
        $this->_propDict["vppTokenAccountType"] = $val;
        return $this;
    }
    
}
