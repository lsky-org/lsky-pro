<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementCollectionSettingInstance File
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
* DeviceManagementCollectionSettingInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementCollectionSettingInstance extends DeviceManagementSettingInstance
{

     /** 
     * Gets the value
    * The collection of values
     *
     * @return array The value
     */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
           return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the value
    * The collection of values
    *
    * @param DeviceManagementSettingInstance $val The value
    *
    * @return DeviceManagementCollectionSettingInstance
    */
    public function setValue($val)
    {
		$this->_propDict["value"] = $val;
        return $this;
    }
    
}
