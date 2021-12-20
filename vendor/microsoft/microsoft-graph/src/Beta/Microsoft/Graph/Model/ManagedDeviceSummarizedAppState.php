<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceSummarizedAppState File
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
* ManagedDeviceSummarizedAppState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceSummarizedAppState extends Entity
{
    /**
    * Gets the deviceId
    * DeviceId of device represented by this object
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * DeviceId of device represented by this object
    *
    * @param string $val The value of the deviceId
    *
    * @return ManagedDeviceSummarizedAppState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }

    /**
    * Gets the summarizedAppState
    * runState for the object. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState The summarizedAppState
    */
    public function getSummarizedAppState()
    {
        if (array_key_exists("summarizedAppState", $this->_propDict)) {
            if (is_a($this->_propDict["summarizedAppState"], "\Beta\Microsoft\Graph\Model\RunState")) {
                return $this->_propDict["summarizedAppState"];
            } else {
                $this->_propDict["summarizedAppState"] = new RunState($this->_propDict["summarizedAppState"]);
                return $this->_propDict["summarizedAppState"];
            }
        }
        return null;
    }

    /**
    * Sets the summarizedAppState
    * runState for the object. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The value to assign to the summarizedAppState
    *
    * @return ManagedDeviceSummarizedAppState The ManagedDeviceSummarizedAppState
    */
    public function setSummarizedAppState($val)
    {
        $this->_propDict["summarizedAppState"] = $val;
         return $this;
    }
}
