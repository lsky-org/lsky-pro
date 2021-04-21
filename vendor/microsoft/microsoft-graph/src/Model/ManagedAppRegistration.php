<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppRegistration File
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
* ManagedAppRegistration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppRegistration extends Entity
{
    /**
    * Gets the appIdentifier
    * The app package Identifier
    *
    * @return MobileAppIdentifier The appIdentifier
    */
    public function getAppIdentifier()
    {
        if (array_key_exists("appIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["appIdentifier"], "\Microsoft\Graph\Model\MobileAppIdentifier")) {
                return $this->_propDict["appIdentifier"];
            } else {
                $this->_propDict["appIdentifier"] = new MobileAppIdentifier($this->_propDict["appIdentifier"]);
                return $this->_propDict["appIdentifier"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appIdentifier
    * The app package Identifier
    *
    * @param MobileAppIdentifier $val The appIdentifier
    *
    * @return ManagedAppRegistration
    */
    public function setAppIdentifier($val)
    {
        $this->_propDict["appIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationVersion
    * App version
    *
    * @return string The applicationVersion
    */
    public function getApplicationVersion()
    {
        if (array_key_exists("applicationVersion", $this->_propDict)) {
            return $this->_propDict["applicationVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationVersion
    * App version
    *
    * @param string $val The applicationVersion
    *
    * @return ManagedAppRegistration
    */
    public function setApplicationVersion($val)
    {
        $this->_propDict["applicationVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Date and time of creation
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Date and time of creation
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ManagedAppRegistration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Host device name
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * Host device name
    *
    * @param string $val The deviceName
    *
    * @return ManagedAppRegistration
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceTag
    * App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
    *
    * @return string The deviceTag
    */
    public function getDeviceTag()
    {
        if (array_key_exists("deviceTag", $this->_propDict)) {
            return $this->_propDict["deviceTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceTag
    * App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
    *
    * @param string $val The deviceTag
    *
    * @return ManagedAppRegistration
    */
    public function setDeviceTag($val)
    {
        $this->_propDict["deviceTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    * Host device type
    *
    * @return string The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            return $this->_propDict["deviceType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceType
    * Host device type
    *
    * @param string $val The deviceType
    *
    * @return ManagedAppRegistration
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the flaggedReasons
    * Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     *
     * @return array The flaggedReasons
     */
    public function getFlaggedReasons()
    {
        if (array_key_exists("flaggedReasons", $this->_propDict)) {
           return $this->_propDict["flaggedReasons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the flaggedReasons
    * Zero or more reasons an app registration is flagged. E.g. app running on rooted device
    *
    * @param ManagedAppFlaggedReason $val The flaggedReasons
    *
    * @return ManagedAppRegistration
    */
    public function setFlaggedReasons($val)
    {
		$this->_propDict["flaggedReasons"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * Date and time of last the app synced with management service.
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
    * Date and time of last the app synced with management service.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return ManagedAppRegistration
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the managementSdkVersion
    * App management SDK version
    *
    * @return string The managementSdkVersion
    */
    public function getManagementSdkVersion()
    {
        if (array_key_exists("managementSdkVersion", $this->_propDict)) {
            return $this->_propDict["managementSdkVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managementSdkVersion
    * App management SDK version
    *
    * @param string $val The managementSdkVersion
    *
    * @return ManagedAppRegistration
    */
    public function setManagementSdkVersion($val)
    {
        $this->_propDict["managementSdkVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the platformVersion
    * Operating System version
    *
    * @return string The platformVersion
    */
    public function getPlatformVersion()
    {
        if (array_key_exists("platformVersion", $this->_propDict)) {
            return $this->_propDict["platformVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the platformVersion
    * Operating System version
    *
    * @param string $val The platformVersion
    *
    * @return ManagedAppRegistration
    */
    public function setPlatformVersion($val)
    {
        $this->_propDict["platformVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The user Id to who this app registration belongs.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The user Id to who this app registration belongs.
    *
    * @param string $val The userId
    *
    * @return ManagedAppRegistration
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Version of the entity.
    *
    * @return string The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Version of the entity.
    *
    * @param string $val The version
    *
    * @return ManagedAppRegistration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appliedPolicies
    * Zero or more policys already applied on the registered app when it last synchronized with managment service.
     *
     * @return array The appliedPolicies
     */
    public function getAppliedPolicies()
    {
        if (array_key_exists("appliedPolicies", $this->_propDict)) {
           return $this->_propDict["appliedPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliedPolicies
    * Zero or more policys already applied on the registered app when it last synchronized with managment service.
    *
    * @param ManagedAppPolicy $val The appliedPolicies
    *
    * @return ManagedAppRegistration
    */
    public function setAppliedPolicies($val)
    {
		$this->_propDict["appliedPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the intendedPolicies
    * Zero or more policies admin intended for the app as of now.
     *
     * @return array The intendedPolicies
     */
    public function getIntendedPolicies()
    {
        if (array_key_exists("intendedPolicies", $this->_propDict)) {
           return $this->_propDict["intendedPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the intendedPolicies
    * Zero or more policies admin intended for the app as of now.
    *
    * @param ManagedAppPolicy $val The intendedPolicies
    *
    * @return ManagedAppRegistration
    */
    public function setIntendedPolicies($val)
    {
		$this->_propDict["intendedPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * Zero or more long running operations triggered on the app registration.
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    * Zero or more long running operations triggered on the app registration.
    *
    * @param ManagedAppOperation $val The operations
    *
    * @return ManagedAppRegistration
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    
}
