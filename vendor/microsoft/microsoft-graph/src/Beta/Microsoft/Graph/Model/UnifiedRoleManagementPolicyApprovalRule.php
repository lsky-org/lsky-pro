<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleManagementPolicyApprovalRule File
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
* UnifiedRoleManagementPolicyApprovalRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleManagementPolicyApprovalRule extends UnifiedRoleManagementPolicyRule
{
    /**
    * Gets the setting
    *
    * @return ApprovalSettings The setting
    */
    public function getSetting()
    {
        if (array_key_exists("setting", $this->_propDict)) {
            if (is_a($this->_propDict["setting"], "\Beta\Microsoft\Graph\Model\ApprovalSettings")) {
                return $this->_propDict["setting"];
            } else {
                $this->_propDict["setting"] = new ApprovalSettings($this->_propDict["setting"]);
                return $this->_propDict["setting"];
            }
        }
        return null;
    }
    
    /**
    * Sets the setting
    *
    * @param ApprovalSettings $val The setting
    *
    * @return UnifiedRoleManagementPolicyApprovalRule
    */
    public function setSetting($val)
    {
        $this->_propDict["setting"] = $val;
        return $this;
    }
    
}
