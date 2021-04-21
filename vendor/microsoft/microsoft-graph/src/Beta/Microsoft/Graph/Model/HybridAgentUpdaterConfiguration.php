<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HybridAgentUpdaterConfiguration File
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
* HybridAgentUpdaterConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HybridAgentUpdaterConfiguration extends Entity
{
    /**
    * Gets the allowUpdateConfigurationOverride
    * Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
    *
    * @return bool The allowUpdateConfigurationOverride
    */
    public function getAllowUpdateConfigurationOverride()
    {
        if (array_key_exists("allowUpdateConfigurationOverride", $this->_propDict)) {
            return $this->_propDict["allowUpdateConfigurationOverride"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUpdateConfigurationOverride
    * Indicates if updater configuration will be skipped and the agent will receive an update when the next version of the agent is available.
    *
    * @param bool $val The value of the allowUpdateConfigurationOverride
    *
    * @return HybridAgentUpdaterConfiguration
    */
    public function setAllowUpdateConfigurationOverride($val)
    {
        $this->_propDict["allowUpdateConfigurationOverride"] = $val;
        return $this;
    }

    /**
    * Gets the deferUpdateDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The deferUpdateDateTime
    */
    public function getDeferUpdateDateTime()
    {
        if (array_key_exists("deferUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deferUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["deferUpdateDateTime"];
            } else {
                $this->_propDict["deferUpdateDateTime"] = new \DateTime($this->_propDict["deferUpdateDateTime"]);
                return $this->_propDict["deferUpdateDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deferUpdateDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the deferUpdateDateTime
    *
    * @return HybridAgentUpdaterConfiguration The HybridAgentUpdaterConfiguration
    */
    public function setDeferUpdateDateTime($val)
    {
        $this->_propDict["deferUpdateDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the updateWindow
    *
    * @return UpdateWindow The updateWindow
    */
    public function getUpdateWindow()
    {
        if (array_key_exists("updateWindow", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindow"], "\Beta\Microsoft\Graph\Model\UpdateWindow")) {
                return $this->_propDict["updateWindow"];
            } else {
                $this->_propDict["updateWindow"] = new UpdateWindow($this->_propDict["updateWindow"]);
                return $this->_propDict["updateWindow"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindow
    *
    * @param UpdateWindow $val The value to assign to the updateWindow
    *
    * @return HybridAgentUpdaterConfiguration The HybridAgentUpdaterConfiguration
    */
    public function setUpdateWindow($val)
    {
        $this->_propDict["updateWindow"] = $val;
         return $this;
    }
}
