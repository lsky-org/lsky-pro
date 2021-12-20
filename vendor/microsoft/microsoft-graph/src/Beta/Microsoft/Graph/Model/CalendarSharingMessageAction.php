<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarSharingMessageAction File
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
* CalendarSharingMessageAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarSharingMessageAction extends Entity
{

    /**
    * Gets the action
    *
    * @return CalendarSharingAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\CalendarSharingAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new CalendarSharingAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    *
    * @param CalendarSharingAction $val The value to assign to the action
    *
    * @return CalendarSharingMessageAction The CalendarSharingMessageAction
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the actionType
    *
    * @return CalendarSharingActionType The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            if (is_a($this->_propDict["actionType"], "\Beta\Microsoft\Graph\Model\CalendarSharingActionType")) {
                return $this->_propDict["actionType"];
            } else {
                $this->_propDict["actionType"] = new CalendarSharingActionType($this->_propDict["actionType"]);
                return $this->_propDict["actionType"];
            }
        }
        return null;
    }

    /**
    * Sets the actionType
    *
    * @param CalendarSharingActionType $val The value to assign to the actionType
    *
    * @return CalendarSharingMessageAction The CalendarSharingMessageAction
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
         return $this;
    }

    /**
    * Gets the importance
    *
    * @return CalendarSharingActionImportance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Beta\Microsoft\Graph\Model\CalendarSharingActionImportance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new CalendarSharingActionImportance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }

    /**
    * Sets the importance
    *
    * @param CalendarSharingActionImportance $val The value to assign to the importance
    *
    * @return CalendarSharingMessageAction The CalendarSharingMessageAction
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
         return $this;
    }
}
