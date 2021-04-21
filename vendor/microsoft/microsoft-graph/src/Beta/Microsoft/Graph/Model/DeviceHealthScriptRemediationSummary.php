<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptRemediationSummary File
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
* DeviceHealthScriptRemediationSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptRemediationSummary extends Entity
{
    /**
    * Gets the remediatedDeviceCount
    * The number of devices remediated by device health scripts.
    *
    * @return int The remediatedDeviceCount
    */
    public function getRemediatedDeviceCount()
    {
        if (array_key_exists("remediatedDeviceCount", $this->_propDict)) {
            return $this->_propDict["remediatedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remediatedDeviceCount
    * The number of devices remediated by device health scripts.
    *
    * @param int $val The value of the remediatedDeviceCount
    *
    * @return DeviceHealthScriptRemediationSummary
    */
    public function setRemediatedDeviceCount($val)
    {
        $this->_propDict["remediatedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the scriptCount
    * The number of device health scripts deployed.
    *
    * @return int The scriptCount
    */
    public function getScriptCount()
    {
        if (array_key_exists("scriptCount", $this->_propDict)) {
            return $this->_propDict["scriptCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the scriptCount
    * The number of device health scripts deployed.
    *
    * @param int $val The value of the scriptCount
    *
    * @return DeviceHealthScriptRemediationSummary
    */
    public function setScriptCount($val)
    {
        $this->_propDict["scriptCount"] = $val;
        return $this;
    }
}
