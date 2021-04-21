<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleUserInitiatedEnrollmentProfile File
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
* AppleUserInitiatedEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleUserInitiatedEnrollmentProfile extends Entity
{

     /** 
     * Gets the availableEnrollmentTypeOptions
    * List of available enrollment type options
     *
     * @return array The availableEnrollmentTypeOptions
     */
    public function getAvailableEnrollmentTypeOptions()
    {
        if (array_key_exists("availableEnrollmentTypeOptions", $this->_propDict)) {
           return $this->_propDict["availableEnrollmentTypeOptions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the availableEnrollmentTypeOptions
    * List of available enrollment type options
    *
    * @param AppleOwnerTypeEnrollmentType $val The availableEnrollmentTypeOptions
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setAvailableEnrollmentTypeOptions($val)
    {
		$this->_propDict["availableEnrollmentTypeOptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Profile creation time
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
    * Profile creation time
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultEnrollmentType
    * The default profile enrollment type. Possible values are: unknown, device, user.
    *
    * @return AppleUserInitiatedEnrollmentType The defaultEnrollmentType
    */
    public function getDefaultEnrollmentType()
    {
        if (array_key_exists("defaultEnrollmentType", $this->_propDict)) {
            if (is_a($this->_propDict["defaultEnrollmentType"], "\Beta\Microsoft\Graph\Model\AppleUserInitiatedEnrollmentType")) {
                return $this->_propDict["defaultEnrollmentType"];
            } else {
                $this->_propDict["defaultEnrollmentType"] = new AppleUserInitiatedEnrollmentType($this->_propDict["defaultEnrollmentType"]);
                return $this->_propDict["defaultEnrollmentType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultEnrollmentType
    * The default profile enrollment type. Possible values are: unknown, device, user.
    *
    * @param AppleUserInitiatedEnrollmentType $val The defaultEnrollmentType
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setDefaultEnrollmentType($val)
    {
        $this->_propDict["defaultEnrollmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the profile
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Description of the profile
    *
    * @param string $val The description
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the profile
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
    * Name of the profile
    *
    * @param string $val The displayName
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Profile last modified time
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
    * Profile last modified time
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    * The platform of the Device. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @return DevicePlatformType The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\DevicePlatformType")) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new DevicePlatformType($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platform
    * The platform of the Device. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @param DevicePlatformType $val The platform
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    * Priority, 0 is highest
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    * Priority, 0 is highest
    *
    * @param int $val The priority
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of assignments for this profile.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * The list of assignments for this profile.
    *
    * @param AppleEnrollmentProfileAssignment $val The assignments
    *
    * @return AppleUserInitiatedEnrollmentProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}
