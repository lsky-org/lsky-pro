<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementAssignmentFilter File
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
* DeviceAndAppManagementAssignmentFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAndAppManagementAssignmentFilter extends Entity
{
    /**
    * Gets the createdDateTime
    * Creation time of the Assignment Filter.
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
    * Creation time of the Assignment Filter.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description of the Assignment Filter.
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
    * Description of the Assignment Filter.
    *
    * @param string $val The description
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * DisplayName of the Assignment Filter.
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
    * DisplayName of the Assignment Filter.
    *
    * @param string $val The displayName
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Last modified time of the Assignment Filter.
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
    * Last modified time of the Assignment Filter.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the platform
    * Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
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
    * Platform type of the devices on which the Assignment Filter will be applicable. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @param DevicePlatformType $val The platform
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTags
    * RoleScopeTags of the Assignment Filter.
    *
    * @return string The roleScopeTags
    */
    public function getRoleScopeTags()
    {
        if (array_key_exists("roleScopeTags", $this->_propDict)) {
            return $this->_propDict["roleScopeTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTags
    * RoleScopeTags of the Assignment Filter.
    *
    * @param string $val The roleScopeTags
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setRoleScopeTags($val)
    {
        $this->_propDict["roleScopeTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the rule
    * Rule definition of the Assignment Filter.
    *
    * @return string The rule
    */
    public function getRule()
    {
        if (array_key_exists("rule", $this->_propDict)) {
            return $this->_propDict["rule"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rule
    * Rule definition of the Assignment Filter.
    *
    * @param string $val The rule
    *
    * @return DeviceAndAppManagementAssignmentFilter
    */
    public function setRule($val)
    {
        $this->_propDict["rule"] = $val;
        return $this;
    }
    
}
