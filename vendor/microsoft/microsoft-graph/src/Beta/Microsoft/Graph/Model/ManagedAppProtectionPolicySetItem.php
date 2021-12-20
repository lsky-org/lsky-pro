<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppProtectionPolicySetItem File
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
* ManagedAppProtectionPolicySetItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppProtectionPolicySetItem extends PolicySetItem
{
    /**
    * Gets the targetedAppManagementLevels
    * TargetedAppManagementLevels of the ManagedAppPolicySetItem.
    *
    * @return string The targetedAppManagementLevels
    */
    public function getTargetedAppManagementLevels()
    {
        if (array_key_exists("targetedAppManagementLevels", $this->_propDict)) {
            return $this->_propDict["targetedAppManagementLevels"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedAppManagementLevels
    * TargetedAppManagementLevels of the ManagedAppPolicySetItem.
    *
    * @param string $val The targetedAppManagementLevels
    *
    * @return ManagedAppProtectionPolicySetItem
    */
    public function setTargetedAppManagementLevels($val)
    {
        $this->_propDict["targetedAppManagementLevels"] = $val;
        return $this;
    }
    
}
