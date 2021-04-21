<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EnterpriseModernAppManagementConfiguration File
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
* Windows10EnterpriseModernAppManagementConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10EnterpriseModernAppManagementConfiguration extends DeviceConfiguration
{
    /**
    * Gets the uninstallBuiltInApps
    * Indicates whether or not to uninstall a fixed list of built-in Windows apps.
    *
    * @return bool The uninstallBuiltInApps
    */
    public function getUninstallBuiltInApps()
    {
        if (array_key_exists("uninstallBuiltInApps", $this->_propDict)) {
            return $this->_propDict["uninstallBuiltInApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uninstallBuiltInApps
    * Indicates whether or not to uninstall a fixed list of built-in Windows apps.
    *
    * @param bool $val The uninstallBuiltInApps
    *
    * @return Windows10EnterpriseModernAppManagementConfiguration
    */
    public function setUninstallBuiltInApps($val)
    {
        $this->_propDict["uninstallBuiltInApps"] = boolval($val);
        return $this;
    }
    
}
