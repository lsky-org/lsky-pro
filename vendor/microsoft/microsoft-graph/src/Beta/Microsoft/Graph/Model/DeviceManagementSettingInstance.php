<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettingInstance File
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
* DeviceManagementSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementSettingInstance extends Entity
{
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
    * @param string $val The definitionId
    *
    * @return DeviceManagementSettingInstance
    */
    public function setDefinitionId($val)
    {
        $this->_propDict["definitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueJson
    * JSON representation of the value
    *
    * @return string The valueJson
    */
    public function getValueJson()
    {
        if (array_key_exists("valueJson", $this->_propDict)) {
            return $this->_propDict["valueJson"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the valueJson
    * JSON representation of the value
    *
    * @param string $val The valueJson
    *
    * @return DeviceManagementSettingInstance
    */
    public function setValueJson($val)
    {
        $this->_propDict["valueJson"] = $val;
        return $this;
    }
    
}
