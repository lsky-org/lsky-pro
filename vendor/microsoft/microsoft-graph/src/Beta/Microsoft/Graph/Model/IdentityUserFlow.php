<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityUserFlow File
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
* IdentityUserFlow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityUserFlow extends Entity
{
    /**
    * Gets the userFlowType
    *
    * @return UserFlowType The userFlowType
    */
    public function getUserFlowType()
    {
        if (array_key_exists("userFlowType", $this->_propDict)) {
            if (is_a($this->_propDict["userFlowType"], "\Beta\Microsoft\Graph\Model\UserFlowType")) {
                return $this->_propDict["userFlowType"];
            } else {
                $this->_propDict["userFlowType"] = new UserFlowType($this->_propDict["userFlowType"]);
                return $this->_propDict["userFlowType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userFlowType
    *
    * @param UserFlowType $val The userFlowType
    *
    * @return IdentityUserFlow
    */
    public function setUserFlowType($val)
    {
        $this->_propDict["userFlowType"] = $val;
        return $this;
    }
    
    /**
    * Gets the userFlowTypeVersion
    *
    * @return Single The userFlowTypeVersion
    */
    public function getUserFlowTypeVersion()
    {
        if (array_key_exists("userFlowTypeVersion", $this->_propDict)) {
            if (is_a($this->_propDict["userFlowTypeVersion"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["userFlowTypeVersion"];
            } else {
                $this->_propDict["userFlowTypeVersion"] = new Single($this->_propDict["userFlowTypeVersion"]);
                return $this->_propDict["userFlowTypeVersion"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userFlowTypeVersion
    *
    * @param Single $val The userFlowTypeVersion
    *
    * @return IdentityUserFlow
    */
    public function setUserFlowTypeVersion($val)
    {
        $this->_propDict["userFlowTypeVersion"] = $val;
        return $this;
    }
    
}
