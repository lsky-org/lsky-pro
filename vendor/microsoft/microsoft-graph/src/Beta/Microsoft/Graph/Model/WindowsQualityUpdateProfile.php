<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsQualityUpdateProfile File
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
* WindowsQualityUpdateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsQualityUpdateProfile extends Entity
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
    * @return WindowsQualityUpdateProfile
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
    * @return WindowsQualityUpdateProfile
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
    * @return WindowsQualityUpdateProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the profile.
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
    * The display name for the profile.
    *
    * @param string $val The displayName
    *
    * @return WindowsQualityUpdateProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the expeditedUpdateSettings
    * Expedited update settings.
    *
    * @return ExpeditedWindowsQualityUpdateSettings The expeditedUpdateSettings
    */
    public function getExpeditedUpdateSettings()
    {
        if (array_key_exists("expeditedUpdateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["expeditedUpdateSettings"], "\Beta\Microsoft\Graph\Model\ExpeditedWindowsQualityUpdateSettings")) {
                return $this->_propDict["expeditedUpdateSettings"];
            } else {
                $this->_propDict["expeditedUpdateSettings"] = new ExpeditedWindowsQualityUpdateSettings($this->_propDict["expeditedUpdateSettings"]);
                return $this->_propDict["expeditedUpdateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expeditedUpdateSettings
    * Expedited update settings.
    *
    * @param ExpeditedWindowsQualityUpdateSettings $val The expeditedUpdateSettings
    *
    * @return WindowsQualityUpdateProfile
    */
    public function setExpeditedUpdateSettings($val)
    {
        $this->_propDict["expeditedUpdateSettings"] = $val;
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
    * @return WindowsQualityUpdateProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the releaseDateDisplayName
    * Friendly release date to display for a Quality Update release
    *
    * @return string The releaseDateDisplayName
    */
    public function getReleaseDateDisplayName()
    {
        if (array_key_exists("releaseDateDisplayName", $this->_propDict)) {
            return $this->_propDict["releaseDateDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the releaseDateDisplayName
    * Friendly release date to display for a Quality Update release
    *
    * @param string $val The releaseDateDisplayName
    *
    * @return WindowsQualityUpdateProfile
    */
    public function setReleaseDateDisplayName($val)
    {
        $this->_propDict["releaseDateDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Quality Update entity.
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
    * List of Scope Tags for this Quality Update entity.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return WindowsQualityUpdateProfile
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
    * @param WindowsQualityUpdateProfileAssignment $val The assignments
    *
    * @return WindowsQualityUpdateProfile
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}
