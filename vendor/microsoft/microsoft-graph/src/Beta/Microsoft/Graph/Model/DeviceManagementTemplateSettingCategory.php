<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateSettingCategory File
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
* DeviceManagementTemplateSettingCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateSettingCategory extends DeviceManagementSettingCategory
{

     /** 
     * Gets the recommendedSettings
    * The settings this category contains
     *
     * @return array The recommendedSettings
     */
    public function getRecommendedSettings()
    {
        if (array_key_exists("recommendedSettings", $this->_propDict)) {
           return $this->_propDict["recommendedSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the recommendedSettings
    * The settings this category contains
    *
    * @param DeviceManagementSettingInstance $val The recommendedSettings
    *
    * @return DeviceManagementTemplateSettingCategory
    */
    public function setRecommendedSettings($val)
    {
		$this->_propDict["recommendedSettings"] = $val;
        return $this;
    }
    
}
