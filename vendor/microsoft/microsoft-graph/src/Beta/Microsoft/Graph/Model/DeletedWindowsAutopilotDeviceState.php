<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeletedWindowsAutopilotDeviceState File
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
* DeletedWindowsAutopilotDeviceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeletedWindowsAutopilotDeviceState extends Entity
{

    /**
    * Gets the deletionState
    * Device deletion state. Possible values are: unknown, failed, accepted, error.
    *
    * @return WindowsAutopilotDeviceDeletionState The deletionState
    */
    public function getDeletionState()
    {
        if (array_key_exists("deletionState", $this->_propDict)) {
            if (is_a($this->_propDict["deletionState"], "\Beta\Microsoft\Graph\Model\WindowsAutopilotDeviceDeletionState")) {
                return $this->_propDict["deletionState"];
            } else {
                $this->_propDict["deletionState"] = new WindowsAutopilotDeviceDeletionState($this->_propDict["deletionState"]);
                return $this->_propDict["deletionState"];
            }
        }
        return null;
    }

    /**
    * Sets the deletionState
    * Device deletion state. Possible values are: unknown, failed, accepted, error.
    *
    * @param WindowsAutopilotDeviceDeletionState $val The value to assign to the deletionState
    *
    * @return DeletedWindowsAutopilotDeviceState The DeletedWindowsAutopilotDeviceState
    */
    public function setDeletionState($val)
    {
        $this->_propDict["deletionState"] = $val;
         return $this;
    }
    /**
    * Gets the deviceRegistrationId
    * ZTD Device Registration ID .
    *
    * @return string The deviceRegistrationId
    */
    public function getDeviceRegistrationId()
    {
        if (array_key_exists("deviceRegistrationId", $this->_propDict)) {
            return $this->_propDict["deviceRegistrationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceRegistrationId
    * ZTD Device Registration ID .
    *
    * @param string $val The value of the deviceRegistrationId
    *
    * @return DeletedWindowsAutopilotDeviceState
    */
    public function setDeviceRegistrationId($val)
    {
        $this->_propDict["deviceRegistrationId"] = $val;
        return $this;
    }
    /**
    * Gets the errorMessage
    * Device deletion error message.
    *
    * @return string The errorMessage
    */
    public function getErrorMessage()
    {
        if (array_key_exists("errorMessage", $this->_propDict)) {
            return $this->_propDict["errorMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorMessage
    * Device deletion error message.
    *
    * @param string $val The value of the errorMessage
    *
    * @return DeletedWindowsAutopilotDeviceState
    */
    public function setErrorMessage($val)
    {
        $this->_propDict["errorMessage"] = $val;
        return $this;
    }
    /**
    * Gets the serialNumber
    * Autopilot Device Serial Number
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * Autopilot Device Serial Number
    *
    * @param string $val The value of the serialNumber
    *
    * @return DeletedWindowsAutopilotDeviceState
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
}
