<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceProtectionOverview File
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
* DeviceProtectionOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceProtectionOverview extends Entity
{
    /**
    * Gets the cleanDeviceCount
    * Clean device count.
    *
    * @return int The cleanDeviceCount
    */
    public function getCleanDeviceCount()
    {
        if (array_key_exists("cleanDeviceCount", $this->_propDict)) {
            return $this->_propDict["cleanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cleanDeviceCount
    * Clean device count.
    *
    * @param int $val The value of the cleanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setCleanDeviceCount($val)
    {
        $this->_propDict["cleanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the criticalFailuresDeviceCount
    * Critical failures device count.
    *
    * @return int The criticalFailuresDeviceCount
    */
    public function getCriticalFailuresDeviceCount()
    {
        if (array_key_exists("criticalFailuresDeviceCount", $this->_propDict)) {
            return $this->_propDict["criticalFailuresDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the criticalFailuresDeviceCount
    * Critical failures device count.
    *
    * @param int $val The value of the criticalFailuresDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setCriticalFailuresDeviceCount($val)
    {
        $this->_propDict["criticalFailuresDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the inactiveThreatAgentDeviceCount
    * Device with inactive threat agent count
    *
    * @return int The inactiveThreatAgentDeviceCount
    */
    public function getInactiveThreatAgentDeviceCount()
    {
        if (array_key_exists("inactiveThreatAgentDeviceCount", $this->_propDict)) {
            return $this->_propDict["inactiveThreatAgentDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveThreatAgentDeviceCount
    * Device with inactive threat agent count
    *
    * @param int $val The value of the inactiveThreatAgentDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setInactiveThreatAgentDeviceCount($val)
    {
        $this->_propDict["inactiveThreatAgentDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingFullScanDeviceCount
    * Pending full scan device count.
    *
    * @return int The pendingFullScanDeviceCount
    */
    public function getPendingFullScanDeviceCount()
    {
        if (array_key_exists("pendingFullScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingFullScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingFullScanDeviceCount
    * Pending full scan device count.
    *
    * @param int $val The value of the pendingFullScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingFullScanDeviceCount($val)
    {
        $this->_propDict["pendingFullScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingManualStepsDeviceCount
    * Pending manual steps device count.
    *
    * @return int The pendingManualStepsDeviceCount
    */
    public function getPendingManualStepsDeviceCount()
    {
        if (array_key_exists("pendingManualStepsDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingManualStepsDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingManualStepsDeviceCount
    * Pending manual steps device count.
    *
    * @param int $val The value of the pendingManualStepsDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingManualStepsDeviceCount($val)
    {
        $this->_propDict["pendingManualStepsDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingOfflineScanDeviceCount
    * Pending offline scan device count.
    *
    * @return int The pendingOfflineScanDeviceCount
    */
    public function getPendingOfflineScanDeviceCount()
    {
        if (array_key_exists("pendingOfflineScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingOfflineScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingOfflineScanDeviceCount
    * Pending offline scan device count.
    *
    * @param int $val The value of the pendingOfflineScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingOfflineScanDeviceCount($val)
    {
        $this->_propDict["pendingOfflineScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingQuickScanDeviceCount
    * Pending quick scan device count. Valid values -2147483648 to 2147483647
    *
    * @return int The pendingQuickScanDeviceCount
    */
    public function getPendingQuickScanDeviceCount()
    {
        if (array_key_exists("pendingQuickScanDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingQuickScanDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingQuickScanDeviceCount
    * Pending quick scan device count. Valid values -2147483648 to 2147483647
    *
    * @param int $val The value of the pendingQuickScanDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingQuickScanDeviceCount($val)
    {
        $this->_propDict["pendingQuickScanDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingRestartDeviceCount
    * Pending restart device count.
    *
    * @return int The pendingRestartDeviceCount
    */
    public function getPendingRestartDeviceCount()
    {
        if (array_key_exists("pendingRestartDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingRestartDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingRestartDeviceCount
    * Pending restart device count.
    *
    * @param int $val The value of the pendingRestartDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingRestartDeviceCount($val)
    {
        $this->_propDict["pendingRestartDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingSignatureUpdateDeviceCount
    * Device with old signature count.
    *
    * @return int The pendingSignatureUpdateDeviceCount
    */
    public function getPendingSignatureUpdateDeviceCount()
    {
        if (array_key_exists("pendingSignatureUpdateDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingSignatureUpdateDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingSignatureUpdateDeviceCount
    * Device with old signature count.
    *
    * @param int $val The value of the pendingSignatureUpdateDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setPendingSignatureUpdateDeviceCount($val)
    {
        $this->_propDict["pendingSignatureUpdateDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalReportedDeviceCount
    * Total device count.
    *
    * @return int The totalReportedDeviceCount
    */
    public function getTotalReportedDeviceCount()
    {
        if (array_key_exists("totalReportedDeviceCount", $this->_propDict)) {
            return $this->_propDict["totalReportedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalReportedDeviceCount
    * Total device count.
    *
    * @param int $val The value of the totalReportedDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setTotalReportedDeviceCount($val)
    {
        $this->_propDict["totalReportedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the unknownStateThreatAgentDeviceCount
    * Device with threat agent state as unknown count.
    *
    * @return int The unknownStateThreatAgentDeviceCount
    */
    public function getUnknownStateThreatAgentDeviceCount()
    {
        if (array_key_exists("unknownStateThreatAgentDeviceCount", $this->_propDict)) {
            return $this->_propDict["unknownStateThreatAgentDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unknownStateThreatAgentDeviceCount
    * Device with threat agent state as unknown count.
    *
    * @param int $val The value of the unknownStateThreatAgentDeviceCount
    *
    * @return DeviceProtectionOverview
    */
    public function setUnknownStateThreatAgentDeviceCount($val)
    {
        $this->_propDict["unknownStateThreatAgentDeviceCount"] = $val;
        return $this;
    }
}
