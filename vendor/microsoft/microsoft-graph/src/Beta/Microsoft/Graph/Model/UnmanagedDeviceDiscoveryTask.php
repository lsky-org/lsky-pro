<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnmanagedDeviceDiscoveryTask File
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
* UnmanagedDeviceDiscoveryTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnmanagedDeviceDiscoveryTask extends DeviceAppManagementTask
{

     /** 
     * Gets the unmanagedDevices
    * Unmanaged devices discovered in the network.
     *
     * @return array The unmanagedDevices
     */
    public function getUnmanagedDevices()
    {
        if (array_key_exists("unmanagedDevices", $this->_propDict)) {
           return $this->_propDict["unmanagedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the unmanagedDevices
    * Unmanaged devices discovered in the network.
    *
    * @param UnmanagedDevice $val The unmanagedDevices
    *
    * @return UnmanagedDeviceDiscoveryTask
    */
    public function setUnmanagedDevices($val)
    {
		$this->_propDict["unmanagedDevices"] = $val;
        return $this;
    }
    
}
