<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptRemediationHistory File
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
* DeviceHealthScriptRemediationHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptRemediationHistory extends Entity
{

    /**
    * Gets the historyData
    * The number of devices remediated by the device health script on the given date.
    *
    * @return DeviceHealthScriptRemediationHistoryData The historyData
    */
    public function getHistoryData()
    {
        if (array_key_exists("historyData", $this->_propDict)) {
            if (is_a($this->_propDict["historyData"], "\Beta\Microsoft\Graph\Model\DeviceHealthScriptRemediationHistoryData")) {
                return $this->_propDict["historyData"];
            } else {
                $this->_propDict["historyData"] = new DeviceHealthScriptRemediationHistoryData($this->_propDict["historyData"]);
                return $this->_propDict["historyData"];
            }
        }
        return null;
    }

    /**
    * Sets the historyData
    * The number of devices remediated by the device health script on the given date.
    *
    * @param DeviceHealthScriptRemediationHistoryData $val The value to assign to the historyData
    *
    * @return DeviceHealthScriptRemediationHistory The DeviceHealthScriptRemediationHistory
    */
    public function setHistoryData($val)
    {
        $this->_propDict["historyData"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date on which the results history is calculated for the healthscript.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * The date on which the results history is calculated for the healthscript.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return DeviceHealthScriptRemediationHistory The DeviceHealthScriptRemediationHistory
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
}
