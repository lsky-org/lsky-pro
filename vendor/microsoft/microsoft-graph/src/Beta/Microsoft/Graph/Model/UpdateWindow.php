<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UpdateWindow File
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
* UpdateWindow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UpdateWindow extends Entity
{

    /**
    * Gets the updateWindowEndTime
    * End of a time window during which agents can receive updates
    *
    * @return TimeOfDay The updateWindowEndTime
    */
    public function getUpdateWindowEndTime()
    {
        if (array_key_exists("updateWindowEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindowEndTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["updateWindowEndTime"];
            } else {
                $this->_propDict["updateWindowEndTime"] = new TimeOfDay($this->_propDict["updateWindowEndTime"]);
                return $this->_propDict["updateWindowEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindowEndTime
    * End of a time window during which agents can receive updates
    *
    * @param TimeOfDay $val The value to assign to the updateWindowEndTime
    *
    * @return UpdateWindow The UpdateWindow
    */
    public function setUpdateWindowEndTime($val)
    {
        $this->_propDict["updateWindowEndTime"] = $val;
         return $this;
    }

    /**
    * Gets the updateWindowStartTime
    * Start of a time window during which agents can receive updates
    *
    * @return TimeOfDay The updateWindowStartTime
    */
    public function getUpdateWindowStartTime()
    {
        if (array_key_exists("updateWindowStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["updateWindowStartTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["updateWindowStartTime"];
            } else {
                $this->_propDict["updateWindowStartTime"] = new TimeOfDay($this->_propDict["updateWindowStartTime"]);
                return $this->_propDict["updateWindowStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the updateWindowStartTime
    * Start of a time window during which agents can receive updates
    *
    * @param TimeOfDay $val The value to assign to the updateWindowStartTime
    *
    * @return UpdateWindow The UpdateWindow
    */
    public function setUpdateWindowStartTime($val)
    {
        $this->_propDict["updateWindowStartTime"] = $val;
         return $this;
    }
}
