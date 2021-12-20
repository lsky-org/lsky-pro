<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingDefinition File
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
* DeviceManagementSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingDefinition extends Entity
{

     /** 
     * Gets the constraints
    * Collection of constraints for the setting value
     *
     * @return array The constraints
     */
    public function getConstraints()
    {
        if (array_key_exists("constraints", $this->_propDict)) {
           return $this->_propDict["constraints"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the constraints
    * Collection of constraints for the setting value
    *
    * @param DeviceManagementConstraint $val The constraints
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setConstraints($val)
    {
		$this->_propDict["constraints"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dependencies
    * Collection of dependencies on other settings
     *
     * @return array The dependencies
     */
    public function getDependencies()
    {
        if (array_key_exists("dependencies", $this->_propDict)) {
           return $this->_propDict["dependencies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dependencies
    * Collection of dependencies on other settings
    *
    * @param DeviceManagementSettingDependency $val The dependencies
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setDependencies($val)
    {
		$this->_propDict["dependencies"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The setting's description
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
    * The setting's description
    *
    * @param string $val The description
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The setting's display name
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
    * The setting's display name
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the documentationUrl
    * Url to setting documentation
    *
    * @return string The documentationUrl
    */
    public function getDocumentationUrl()
    {
        if (array_key_exists("documentationUrl", $this->_propDict)) {
            return $this->_propDict["documentationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the documentationUrl
    * Url to setting documentation
    *
    * @param string $val The documentationUrl
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setDocumentationUrl($val)
    {
        $this->_propDict["documentationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the headerSubtitle
    * subtitle of the setting header for more details about the category/section
    *
    * @return string The headerSubtitle
    */
    public function getHeaderSubtitle()
    {
        if (array_key_exists("headerSubtitle", $this->_propDict)) {
            return $this->_propDict["headerSubtitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the headerSubtitle
    * subtitle of the setting header for more details about the category/section
    *
    * @param string $val The headerSubtitle
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setHeaderSubtitle($val)
    {
        $this->_propDict["headerSubtitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the headerTitle
    * title of the setting header represents a category/section of a setting/settings
    *
    * @return string The headerTitle
    */
    public function getHeaderTitle()
    {
        if (array_key_exists("headerTitle", $this->_propDict)) {
            return $this->_propDict["headerTitle"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the headerTitle
    * title of the setting header represents a category/section of a setting/settings
    *
    * @param string $val The headerTitle
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setHeaderTitle($val)
    {
        $this->_propDict["headerTitle"] = $val;
        return $this;
    }
    
    /**
    * Gets the isTopLevel
    * If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
    *
    * @return bool The isTopLevel
    */
    public function getIsTopLevel()
    {
        if (array_key_exists("isTopLevel", $this->_propDict)) {
            return $this->_propDict["isTopLevel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isTopLevel
    * If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
    *
    * @param bool $val The isTopLevel
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setIsTopLevel($val)
    {
        $this->_propDict["isTopLevel"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the keywords
    * Keywords associated with the setting
    *
    * @return string The keywords
    */
    public function getKeywords()
    {
        if (array_key_exists("keywords", $this->_propDict)) {
            return $this->_propDict["keywords"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the keywords
    * Keywords associated with the setting
    *
    * @param string $val The keywords
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setKeywords($val)
    {
        $this->_propDict["keywords"] = $val;
        return $this;
    }
    
    /**
    * Gets the placeholderText
    * Placeholder text as an example of valid input
    *
    * @return string The placeholderText
    */
    public function getPlaceholderText()
    {
        if (array_key_exists("placeholderText", $this->_propDict)) {
            return $this->_propDict["placeholderText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the placeholderText
    * Placeholder text as an example of valid input
    *
    * @param string $val The placeholderText
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setPlaceholderText($val)
    {
        $this->_propDict["placeholderText"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueType
    * The data type of the value. Possible values are: integer, boolean, string, complex, collection, abstractComplex.
    *
    * @return DeviceManangementIntentValueType The valueType
    */
    public function getValueType()
    {
        if (array_key_exists("valueType", $this->_propDict)) {
            if (is_a($this->_propDict["valueType"], "\Beta\Microsoft\Graph\Model\DeviceManangementIntentValueType")) {
                return $this->_propDict["valueType"];
            } else {
                $this->_propDict["valueType"] = new DeviceManangementIntentValueType($this->_propDict["valueType"]);
                return $this->_propDict["valueType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the valueType
    * The data type of the value. Possible values are: integer, boolean, string, complex, collection, abstractComplex.
    *
    * @param DeviceManangementIntentValueType $val The valueType
    *
    * @return DeviceManagementSettingDefinition
    */
    public function setValueType($val)
    {
        $this->_propDict["valueType"] = $val;
        return $this;
    }
    
}
