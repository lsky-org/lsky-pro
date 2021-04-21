<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationOptionDefinition File
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
* DeviceManagementConfigurationOptionDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationOptionDefinition extends Entity
{

    /**
    * Gets the dependedOnBy
    * List of Settings that depends on this option
    *
    * @return DeviceManagementConfigurationSettingDependedOnBy The dependedOnBy
    */
    public function getDependedOnBy()
    {
        if (array_key_exists("dependedOnBy", $this->_propDict)) {
            if (is_a($this->_propDict["dependedOnBy"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingDependedOnBy")) {
                return $this->_propDict["dependedOnBy"];
            } else {
                $this->_propDict["dependedOnBy"] = new DeviceManagementConfigurationSettingDependedOnBy($this->_propDict["dependedOnBy"]);
                return $this->_propDict["dependedOnBy"];
            }
        }
        return null;
    }

    /**
    * Sets the dependedOnBy
    * List of Settings that depends on this option
    *
    * @param DeviceManagementConfigurationSettingDependedOnBy $val The value to assign to the dependedOnBy
    *
    * @return DeviceManagementConfigurationOptionDefinition The DeviceManagementConfigurationOptionDefinition
    */
    public function setDependedOnBy($val)
    {
        $this->_propDict["dependedOnBy"] = $val;
         return $this;
    }

    /**
    * Gets the dependentOn
    * List of dependent settings for this option
    *
    * @return DeviceManagementConfigurationDependentOn The dependentOn
    */
    public function getDependentOn()
    {
        if (array_key_exists("dependentOn", $this->_propDict)) {
            if (is_a($this->_propDict["dependentOn"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationDependentOn")) {
                return $this->_propDict["dependentOn"];
            } else {
                $this->_propDict["dependentOn"] = new DeviceManagementConfigurationDependentOn($this->_propDict["dependentOn"]);
                return $this->_propDict["dependentOn"];
            }
        }
        return null;
    }

    /**
    * Sets the dependentOn
    * List of dependent settings for this option
    *
    * @param DeviceManagementConfigurationDependentOn $val The value to assign to the dependentOn
    *
    * @return DeviceManagementConfigurationOptionDefinition The DeviceManagementConfigurationOptionDefinition
    */
    public function setDependentOn($val)
    {
        $this->_propDict["dependentOn"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * Description of the option
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
    * Description of the option
    *
    * @param string $val The value of the description
    *
    * @return DeviceManagementConfigurationOptionDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Friendly name of the option
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
    * Friendly name of the option
    *
    * @param string $val The value of the displayName
    *
    * @return DeviceManagementConfigurationOptionDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the helpText
    * Help text of the option
    *
    * @return string The helpText
    */
    public function getHelpText()
    {
        if (array_key_exists("helpText", $this->_propDict)) {
            return $this->_propDict["helpText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the helpText
    * Help text of the option
    *
    * @param string $val The value of the helpText
    *
    * @return DeviceManagementConfigurationOptionDefinition
    */
    public function setHelpText($val)
    {
        $this->_propDict["helpText"] = $val;
        return $this;
    }
    /**
    * Gets the itemId
    * Identifier of option
    *
    * @return string The itemId
    */
    public function getItemId()
    {
        if (array_key_exists("itemId", $this->_propDict)) {
            return $this->_propDict["itemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemId
    * Identifier of option
    *
    * @param string $val The value of the itemId
    *
    * @return DeviceManagementConfigurationOptionDefinition
    */
    public function setItemId($val)
    {
        $this->_propDict["itemId"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Name of the option
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the option
    *
    * @param string $val The value of the name
    *
    * @return DeviceManagementConfigurationOptionDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the optionValue
    * Value of the option
    *
    * @return DeviceManagementConfigurationSettingValue The optionValue
    */
    public function getOptionValue()
    {
        if (array_key_exists("optionValue", $this->_propDict)) {
            if (is_a($this->_propDict["optionValue"], "\Beta\Microsoft\Graph\Model\DeviceManagementConfigurationSettingValue")) {
                return $this->_propDict["optionValue"];
            } else {
                $this->_propDict["optionValue"] = new DeviceManagementConfigurationSettingValue($this->_propDict["optionValue"]);
                return $this->_propDict["optionValue"];
            }
        }
        return null;
    }

    /**
    * Sets the optionValue
    * Value of the option
    *
    * @param DeviceManagementConfigurationSettingValue $val The value to assign to the optionValue
    *
    * @return DeviceManagementConfigurationOptionDefinition The DeviceManagementConfigurationOptionDefinition
    */
    public function setOptionValue($val)
    {
        $this->_propDict["optionValue"] = $val;
         return $this;
    }
}
