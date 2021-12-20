<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary File
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
* WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary extends Entity
{
    /**
    * Gets the deployedDeviceCount
    * Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
    *
    * @return int The deployedDeviceCount
    */
    public function getDeployedDeviceCount()
    {
        if (array_key_exists("deployedDeviceCount", $this->_propDict)) {
            return $this->_propDict["deployedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deployedDeviceCount
    * Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
    *
    * @param int $val The deployedDeviceCount
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary
    */
    public function setDeployedDeviceCount($val)
    {
        $this->_propDict["deployedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedDeviceCount
    * Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
    *
    * @return int The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedDeviceCount
    * Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
    *
    * @param int $val The failedDeviceCount
    *
    * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = intval($val);
        return $this;
    }
    
}
