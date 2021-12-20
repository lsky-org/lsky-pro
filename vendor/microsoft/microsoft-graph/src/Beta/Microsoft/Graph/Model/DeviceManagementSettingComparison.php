<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingComparison File
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
* DeviceManagementSettingComparison class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingComparison extends Entity
{

    /**
    * Gets the comparisonResult
    * Setting comparison result. Possible values are: unknown, equal, notEqual, added, removed.
    *
    * @return DeviceManagementComparisonResult The comparisonResult
    */
    public function getComparisonResult()
    {
        if (array_key_exists("comparisonResult", $this->_propDict)) {
            if (is_a($this->_propDict["comparisonResult"], "\Beta\Microsoft\Graph\Model\DeviceManagementComparisonResult")) {
                return $this->_propDict["comparisonResult"];
            } else {
                $this->_propDict["comparisonResult"] = new DeviceManagementComparisonResult($this->_propDict["comparisonResult"]);
                return $this->_propDict["comparisonResult"];
            }
        }
        return null;
    }

    /**
    * Sets the comparisonResult
    * Setting comparison result. Possible values are: unknown, equal, notEqual, added, removed.
    *
    * @param DeviceManagementComparisonResult $val The value to assign to the comparisonResult
    *
    * @return DeviceManagementSettingComparison The DeviceManagementSettingComparison
    */
    public function setComparisonResult($val)
    {
        $this->_propDict["comparisonResult"] = $val;
         return $this;
    }
    /**
    * Gets the currentValueJson
    * JSON representation of current intent (or) template setting's value
    *
    * @return string The currentValueJson
    */
    public function getCurrentValueJson()
    {
        if (array_key_exists("currentValueJson", $this->_propDict)) {
            return $this->_propDict["currentValueJson"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currentValueJson
    * JSON representation of current intent (or) template setting's value
    *
    * @param string $val The value of the currentValueJson
    *
    * @return DeviceManagementSettingComparison
    */
    public function setCurrentValueJson($val)
    {
        $this->_propDict["currentValueJson"] = $val;
        return $this;
    }
    /**
    * Gets the definitionId
    * The ID of the setting definition for this instance
    *
    * @return string The definitionId
    */
    public function getDefinitionId()
    {
        if (array_key_exists("definitionId", $this->_propDict)) {
            return $this->_propDict["definitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the definitionId
    * The ID of the setting definition for this instance
    *
    * @param string $val The value of the definitionId
    *
    * @return DeviceManagementSettingComparison
    */
    public function setDefinitionId($val)
    {
        $this->_propDict["definitionId"] = $val;
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
    * @param string $val The value of the displayName
    *
    * @return DeviceManagementSettingComparison
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * The setting ID
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The setting ID
    *
    * @param string $val The value of the id
    *
    * @return DeviceManagementSettingComparison
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the newValueJson
    * JSON representation of new template setting's value
    *
    * @return string The newValueJson
    */
    public function getNewValueJson()
    {
        if (array_key_exists("newValueJson", $this->_propDict)) {
            return $this->_propDict["newValueJson"];
        } else {
            return null;
        }
    }

    /**
    * Sets the newValueJson
    * JSON representation of new template setting's value
    *
    * @param string $val The value of the newValueJson
    *
    * @return DeviceManagementSettingComparison
    */
    public function setNewValueJson($val)
    {
        $this->_propDict["newValueJson"] = $val;
        return $this;
    }
}
