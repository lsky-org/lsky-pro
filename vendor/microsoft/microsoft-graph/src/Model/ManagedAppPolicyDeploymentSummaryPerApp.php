<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppPolicyDeploymentSummaryPerApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ManagedAppPolicyDeploymentSummaryPerApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppPolicyDeploymentSummaryPerApp extends Entity
{
    /**
    * Gets the configurationAppliedUserCount
    * Number of users the policy is applied.
    *
    * @return int The configurationAppliedUserCount
    */
    public function getConfigurationAppliedUserCount()
    {
        if (array_key_exists("configurationAppliedUserCount", $this->_propDict)) {
            return $this->_propDict["configurationAppliedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the configurationAppliedUserCount
    * Number of users the policy is applied.
    *
    * @param int $val The value of the configurationAppliedUserCount
    *
    * @return ManagedAppPolicyDeploymentSummaryPerApp
    */
    public function setConfigurationAppliedUserCount($val)
    {
        $this->_propDict["configurationAppliedUserCount"] = $val;
        return $this;
    }

    /**
    * Gets the mobileAppIdentifier
    * Deployment of an app.
    *
    * @return MobileAppIdentifier The mobileAppIdentifier
    */
    public function getMobileAppIdentifier()
    {
        if (array_key_exists("mobileAppIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["mobileAppIdentifier"], "\Microsoft\Graph\Model\MobileAppIdentifier")) {
                return $this->_propDict["mobileAppIdentifier"];
            } else {
                $this->_propDict["mobileAppIdentifier"] = new MobileAppIdentifier($this->_propDict["mobileAppIdentifier"]);
                return $this->_propDict["mobileAppIdentifier"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileAppIdentifier
    * Deployment of an app.
    *
    * @param MobileAppIdentifier $val The value to assign to the mobileAppIdentifier
    *
    * @return ManagedAppPolicyDeploymentSummaryPerApp The ManagedAppPolicyDeploymentSummaryPerApp
    */
    public function setMobileAppIdentifier($val)
    {
        $this->_propDict["mobileAppIdentifier"] = $val;
         return $this;
    }
}
