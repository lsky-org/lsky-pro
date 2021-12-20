<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsFeatureUpdateProfile File
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
* WindowsFeatureUpdateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsFeatureUpdateProfile extends Entity
{
    /**
    * Gets the createdDateTime
    * The date time that the profile was created.
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
    * The date time that the profile was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deployableContentDisplayName
    * Friendly display name of the quality update profile deployable content
    *
    * @return string The deployableContentDisplayName
    */
    public function getDeployableContentDisplayName()
    {
        if (array_key_exists("deployableContentDisplayName", $this->_propDict)) {
            return $this->_propDict["deployableContentDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployableContentDisplayName
    * Friendly display name of the quality update profile deployable content
    *
    * @param string $val The deployableContentDisplayName
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setDeployableContentDisplayName($val)
    {
        $this->_propDict["deployableContentDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the profile which is specified by the user.
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
    * The description of the profile which is specified by the user.
    *
    * @param string $val The description
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the profile.
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
    * The display name of the profile.
    *
    * @param string $val The displayName
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdateVersion
    * The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
    *
    * @return string The featureUpdateVersion
    */
    public function getFeatureUpdateVersion()
    {
        if (array_key_exists("featureUpdateVersion", $this->_propDict)) {
            return $this->_propDict["featureUpdateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdateVersion
    * The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
    *
    * @param string $val The featureUpdateVersion
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setFeatureUpdateVersion($val)
    {
        $this->_propDict["featureUpdateVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date time that the profile was last modified.
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
    * The date time that the profile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Feature Update entity.
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
    * List of Scope Tags for this Feature Update entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments of the profile.
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
    * The list of group assignments of the profile.
    *
    * @param WindowsFeatureUpdateProfileAssignment $val The assignments
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceUpdateStates
    * The list of device states this profile targeted to
     *
     * @return array The deviceUpdateStates
     */
    public function getDeviceUpdateStates()
    {
        if (array_key_exists("deviceUpdateStates", $this->_propDict)) {
           return $this->_propDict["deviceUpdateStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceUpdateStates
    * The list of device states this profile targeted to
    *
    * @param WindowsUpdateState $val The deviceUpdateStates
    *
    * @return WindowsFeatureUpdateProfile
    */
    public function setDeviceUpdateStates($val)
    {
		$this->_propDict["deviceUpdateStates"] = $val;
        return $this;
    }
    
}
