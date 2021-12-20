<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceRestrictionAction File
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
* DeviceRestrictionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceRestrictionAction extends DlpActionInfo
{
    /**
    * Gets the message
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return DeviceRestrictionAction
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

    /**
    * Gets the restrictionAction
    *
    * @return RestrictionAction The restrictionAction
    */
    public function getRestrictionAction()
    {
        if (array_key_exists("restrictionAction", $this->_propDict)) {
            if (is_a($this->_propDict["restrictionAction"], "\Beta\Microsoft\Graph\Model\RestrictionAction")) {
                return $this->_propDict["restrictionAction"];
            } else {
                $this->_propDict["restrictionAction"] = new RestrictionAction($this->_propDict["restrictionAction"]);
                return $this->_propDict["restrictionAction"];
            }
        }
        return null;
    }

    /**
    * Sets the restrictionAction
    *
    * @param RestrictionAction $val The value to assign to the restrictionAction
    *
    * @return DeviceRestrictionAction The DeviceRestrictionAction
    */
    public function setRestrictionAction($val)
    {
        $this->_propDict["restrictionAction"] = $val;
         return $this;
    }

    /**
    * Gets the triggers
    *
    * @return RestrictionTrigger The triggers
    */
    public function getTriggers()
    {
        if (array_key_exists("triggers", $this->_propDict)) {
            if (is_a($this->_propDict["triggers"], "\Beta\Microsoft\Graph\Model\RestrictionTrigger")) {
                return $this->_propDict["triggers"];
            } else {
                $this->_propDict["triggers"] = new RestrictionTrigger($this->_propDict["triggers"]);
                return $this->_propDict["triggers"];
            }
        }
        return null;
    }

    /**
    * Sets the triggers
    *
    * @param RestrictionTrigger $val The value to assign to the triggers
    *
    * @return DeviceRestrictionAction The DeviceRestrictionAction
    */
    public function setTriggers($val)
    {
        $this->_propDict["triggers"] = $val;
         return $this;
    }
}
