<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppAppAssignedDeviceLicense File
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
* IosVppAppAssignedDeviceLicense class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppAppAssignedDeviceLicense extends IosVppAppAssignedLicense
{
    /**
    * Gets the deviceName
    * The device name.
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * The device name.
    *
    * @param string $val The deviceName
    *
    * @return IosVppAppAssignedDeviceLicense
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    * The managed device ID.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    * The managed device ID.
    *
    * @param string $val The managedDeviceId
    *
    * @return IosVppAppAssignedDeviceLicense
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
}
