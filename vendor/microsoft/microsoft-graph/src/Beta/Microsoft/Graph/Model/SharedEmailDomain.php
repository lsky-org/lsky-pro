<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedEmailDomain File
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
* SharedEmailDomain class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedEmailDomain extends Entity
{
    /**
    * Gets the provisioningStatus
    *
    * @return string The provisioningStatus
    */
    public function getProvisioningStatus()
    {
        if (array_key_exists("provisioningStatus", $this->_propDict)) {
            return $this->_propDict["provisioningStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the provisioningStatus
    *
    * @param string $val The provisioningStatus
    *
    * @return SharedEmailDomain
    */
    public function setProvisioningStatus($val)
    {
        $this->_propDict["provisioningStatus"] = $val;
        return $this;
    }
    
}
