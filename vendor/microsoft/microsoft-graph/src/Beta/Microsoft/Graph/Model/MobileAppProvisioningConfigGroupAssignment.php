<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppProvisioningConfigGroupAssignment File
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
* MobileAppProvisioningConfigGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppProvisioningConfigGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    * The ID of the AAD group in which the app provisioning configuration is being targeted.
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    * The ID of the AAD group in which the app provisioning configuration is being targeted.
    *
    * @param string $val The targetGroupId
    *
    * @return MobileAppProvisioningConfigGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
}
