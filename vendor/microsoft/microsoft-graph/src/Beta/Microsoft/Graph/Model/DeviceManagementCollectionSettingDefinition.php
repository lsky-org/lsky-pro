<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementCollectionSettingDefinition File
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
* DeviceManagementCollectionSettingDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementCollectionSettingDefinition extends DeviceManagementSettingDefinition
{
    /**
    * Gets the elementDefinitionId
    * The Setting Definition ID that describes what each element of the collection looks like
    *
    * @return string The elementDefinitionId
    */
    public function getElementDefinitionId()
    {
        if (array_key_exists("elementDefinitionId", $this->_propDict)) {
            return $this->_propDict["elementDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the elementDefinitionId
    * The Setting Definition ID that describes what each element of the collection looks like
    *
    * @param string $val The elementDefinitionId
    *
    * @return DeviceManagementCollectionSettingDefinition
    */
    public function setElementDefinitionId($val)
    {
        $this->_propDict["elementDefinitionId"] = $val;
        return $this;
    }
    
}
