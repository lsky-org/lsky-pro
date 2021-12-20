<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationProfile File
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
* EducationSynchronizationProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationProfile extends Entity
{
    /**
    * Gets the dataProvider
    * The data provider used for the profile.
    *
    * @return EducationSynchronizationDataProvider The dataProvider
    */
    public function getDataProvider()
    {
        if (array_key_exists("dataProvider", $this->_propDict)) {
            if (is_a($this->_propDict["dataProvider"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationDataProvider")) {
                return $this->_propDict["dataProvider"];
            } else {
                $this->_propDict["dataProvider"] = new EducationSynchronizationDataProvider($this->_propDict["dataProvider"]);
                return $this->_propDict["dataProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataProvider
    * The data provider used for the profile.
    *
    * @param EducationSynchronizationDataProvider $val The dataProvider
    *
    * @return EducationSynchronizationProfile
    */
    public function setDataProvider($val)
    {
        $this->_propDict["dataProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the configuration profile for syncing identities.
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
    * Name of the configuration profile for syncing identities.
    *
    * @param string $val The displayName
    *
    * @return EducationSynchronizationProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDate
    * The date the profile should be considered expired and cease syncing. When null. the profile will never expire. (optional)
    *
    * @return \DateTime The expirationDate
    */
    public function getExpirationDate()
    {
        if (array_key_exists("expirationDate", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDate"], "\DateTime")) {
                return $this->_propDict["expirationDate"];
            } else {
                $this->_propDict["expirationDate"] = new \DateTime($this->_propDict["expirationDate"]);
                return $this->_propDict["expirationDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDate
    * The date the profile should be considered expired and cease syncing. When null. the profile will never expire. (optional)
    *
    * @param \DateTime $val The expirationDate
    *
    * @return EducationSynchronizationProfile
    */
    public function setExpirationDate($val)
    {
        $this->_propDict["expirationDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the handleSpecialCharacterConstraint
    * Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
    *
    * @return bool The handleSpecialCharacterConstraint
    */
    public function getHandleSpecialCharacterConstraint()
    {
        if (array_key_exists("handleSpecialCharacterConstraint", $this->_propDict)) {
            return $this->_propDict["handleSpecialCharacterConstraint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the handleSpecialCharacterConstraint
    * Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
    *
    * @param bool $val The handleSpecialCharacterConstraint
    *
    * @return EducationSynchronizationProfile
    */
    public function setHandleSpecialCharacterConstraint($val)
    {
        $this->_propDict["handleSpecialCharacterConstraint"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the identitySynchronizationConfiguration
    * Determines how the Profile should [create new][fullsync] or [match existing][dirsync] AAD Users.
    *
    * @return EducationIdentitySynchronizationConfiguration The identitySynchronizationConfiguration
    */
    public function getIdentitySynchronizationConfiguration()
    {
        if (array_key_exists("identitySynchronizationConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["identitySynchronizationConfiguration"], "\Beta\Microsoft\Graph\Model\EducationIdentitySynchronizationConfiguration")) {
                return $this->_propDict["identitySynchronizationConfiguration"];
            } else {
                $this->_propDict["identitySynchronizationConfiguration"] = new EducationIdentitySynchronizationConfiguration($this->_propDict["identitySynchronizationConfiguration"]);
                return $this->_propDict["identitySynchronizationConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identitySynchronizationConfiguration
    * Determines how the Profile should [create new][fullsync] or [match existing][dirsync] AAD Users.
    *
    * @param EducationIdentitySynchronizationConfiguration $val The identitySynchronizationConfiguration
    *
    * @return EducationSynchronizationProfile
    */
    public function setIdentitySynchronizationConfiguration($val)
    {
        $this->_propDict["identitySynchronizationConfiguration"] = $val;
        return $this;
    }
    

     /** 
     * Gets the licensesToAssign
    * License setup configuration.
     *
     * @return array The licensesToAssign
     */
    public function getLicensesToAssign()
    {
        if (array_key_exists("licensesToAssign", $this->_propDict)) {
           return $this->_propDict["licensesToAssign"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the licensesToAssign
    * License setup configuration.
    *
    * @param EducationSynchronizationLicenseAssignment $val The licensesToAssign
    *
    * @return EducationSynchronizationProfile
    */
    public function setLicensesToAssign($val)
    {
		$this->_propDict["licensesToAssign"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
    *
    * @return EducationSynchronizationProfileState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationProfileState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new EducationSynchronizationProfileState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
    *
    * @param EducationSynchronizationProfileState $val The state
    *
    * @return EducationSynchronizationProfile
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the errors
    * All errors associated with this synchronization profile.
     *
     * @return array The errors
     */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
           return $this->_propDict["errors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the errors
    * All errors associated with this synchronization profile.
    *
    * @param EducationSynchronizationError $val The errors
    *
    * @return EducationSynchronizationProfile
    */
    public function setErrors($val)
    {
		$this->_propDict["errors"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileStatus
    * The synchronization status.
    *
    * @return EducationSynchronizationProfileStatus The profileStatus
    */
    public function getProfileStatus()
    {
        if (array_key_exists("profileStatus", $this->_propDict)) {
            if (is_a($this->_propDict["profileStatus"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationProfileStatus")) {
                return $this->_propDict["profileStatus"];
            } else {
                $this->_propDict["profileStatus"] = new EducationSynchronizationProfileStatus($this->_propDict["profileStatus"]);
                return $this->_propDict["profileStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profileStatus
    * The synchronization status.
    *
    * @param EducationSynchronizationProfileStatus $val The profileStatus
    *
    * @return EducationSynchronizationProfile
    */
    public function setProfileStatus($val)
    {
        $this->_propDict["profileStatus"] = $val;
        return $this;
    }
    
}
