<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppAssignment File
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
* MobileAppAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppAssignment extends Entity
{
    /**
    * Gets the intent
    * The install intent defined by the admin. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @return InstallIntent The intent
    */
    public function getIntent()
    {
        if (array_key_exists("intent", $this->_propDict)) {
            if (is_a($this->_propDict["intent"], "\Beta\Microsoft\Graph\Model\InstallIntent")) {
                return $this->_propDict["intent"];
            } else {
                $this->_propDict["intent"] = new InstallIntent($this->_propDict["intent"]);
                return $this->_propDict["intent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intent
    * The install intent defined by the admin. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @param InstallIntent $val The intent
    *
    * @return MobileAppAssignment
    */
    public function setIntent($val)
    {
        $this->_propDict["intent"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * The settings for target assignment defined by the admin.
    *
    * @return MobileAppAssignmentSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\MobileAppAssignmentSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new MobileAppAssignmentSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * The settings for target assignment defined by the admin.
    *
    * @param MobileAppAssignmentSettings $val The settings
    *
    * @return MobileAppAssignment
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the source
    * The resource type which is the source for the assignment. Possible values are: direct, policySets.
    *
    * @return DeviceAndAppManagementAssignmentSource The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentSource")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new DeviceAndAppManagementAssignmentSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }
    
    /**
    * Sets the source
    * The resource type which is the source for the assignment. Possible values are: direct, policySets.
    *
    * @param DeviceAndAppManagementAssignmentSource $val The source
    *
    * @return MobileAppAssignment
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceId
    * The identifier of the source of the assignment.
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceId
    * The identifier of the source of the assignment.
    *
    * @param string $val The sourceId
    *
    * @return MobileAppAssignment
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The target group assignment defined by the admin.
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * The target group assignment defined by the admin.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return MobileAppAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
