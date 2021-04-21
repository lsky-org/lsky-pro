<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentityState File
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
* ImportedWindowsAutopilotDeviceIdentityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImportedWindowsAutopilotDeviceIdentityState extends Entity
{
    /**
    * Gets the deviceErrorCode
    * Device error code reported by Device Directory Service(DDS).
    *
    * @return int The deviceErrorCode
    */
    public function getDeviceErrorCode()
    {
        if (array_key_exists("deviceErrorCode", $this->_propDict)) {
            return $this->_propDict["deviceErrorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceErrorCode
    * Device error code reported by Device Directory Service(DDS).
    *
    * @param int $val The value of the deviceErrorCode
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceErrorCode($val)
    {
        $this->_propDict["deviceErrorCode"] = $val;
        return $this;
    }
    /**
    * Gets the deviceErrorName
    * Device error name reported by Device Directory Service(DDS).
    *
    * @return string The deviceErrorName
    */
    public function getDeviceErrorName()
    {
        if (array_key_exists("deviceErrorName", $this->_propDict)) {
            return $this->_propDict["deviceErrorName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceErrorName
    * Device error name reported by Device Directory Service(DDS).
    *
    * @param string $val The value of the deviceErrorName
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceErrorName($val)
    {
        $this->_propDict["deviceErrorName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceImportStatus
    * Device status reported by Device Directory Service(DDS). Possible values are: unknown, pending, partial, complete, error.
    *
    * @return ImportedWindowsAutopilotDeviceIdentityImportStatus The deviceImportStatus
    */
    public function getDeviceImportStatus()
    {
        if (array_key_exists("deviceImportStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deviceImportStatus"], "\Beta\Microsoft\Graph\Model\ImportedWindowsAutopilotDeviceIdentityImportStatus")) {
                return $this->_propDict["deviceImportStatus"];
            } else {
                $this->_propDict["deviceImportStatus"] = new ImportedWindowsAutopilotDeviceIdentityImportStatus($this->_propDict["deviceImportStatus"]);
                return $this->_propDict["deviceImportStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceImportStatus
    * Device status reported by Device Directory Service(DDS). Possible values are: unknown, pending, partial, complete, error.
    *
    * @param ImportedWindowsAutopilotDeviceIdentityImportStatus $val The value to assign to the deviceImportStatus
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState The ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceImportStatus($val)
    {
        $this->_propDict["deviceImportStatus"] = $val;
         return $this;
    }
    /**
    * Gets the deviceRegistrationId
    * Device Registration ID for successfully added device reported by Device Directory Service(DDS).
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
    * Device Registration ID for successfully added device reported by Device Directory Service(DDS).
    *
    * @param string $val The value of the deviceRegistrationId
    *
    * @return ImportedWindowsAutopilotDeviceIdentityState
    */
    public function setDeviceRegistrationId($val)
    {
        $this->_propDict["deviceRegistrationId"] = $val;
        return $this;
    }
}
