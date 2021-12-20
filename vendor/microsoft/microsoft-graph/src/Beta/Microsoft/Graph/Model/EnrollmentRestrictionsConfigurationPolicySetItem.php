<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnrollmentRestrictionsConfigurationPolicySetItem File
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
* EnrollmentRestrictionsConfigurationPolicySetItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnrollmentRestrictionsConfigurationPolicySetItem extends PolicySetItem
{
    /**
    * Gets the limit
    * Limit of the EnrollmentRestrictionsConfigurationPolicySetItem.
    *
    * @return int The limit
    */
    public function getLimit()
    {
        if (array_key_exists("limit", $this->_propDict)) {
            return $this->_propDict["limit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the limit
    * Limit of the EnrollmentRestrictionsConfigurationPolicySetItem.
    *
    * @param int $val The limit
    *
    * @return EnrollmentRestrictionsConfigurationPolicySetItem
    */
    public function setLimit($val)
    {
        $this->_propDict["limit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the priority
    * Priority of the EnrollmentRestrictionsConfigurationPolicySetItem.
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    * Priority of the EnrollmentRestrictionsConfigurationPolicySetItem.
    *
    * @param int $val The priority
    *
    * @return EnrollmentRestrictionsConfigurationPolicySetItem
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
}
