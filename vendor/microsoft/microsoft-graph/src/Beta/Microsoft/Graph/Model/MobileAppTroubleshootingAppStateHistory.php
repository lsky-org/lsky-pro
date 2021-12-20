<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppTroubleshootingAppStateHistory File
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
* MobileAppTroubleshootingAppStateHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppTroubleshootingAppStateHistory extends MobileAppTroubleshootingHistoryItem
{

    /**
    * Gets the actionType
    * Action type for Intune Application. Possible values are: unknown, installCommandSent, installed, uninstalled, userRequestedInstall.
    *
    * @return MobileAppActionType The actionType
    */
    public function getActionType()
    {
        if (array_key_exists("actionType", $this->_propDict)) {
            if (is_a($this->_propDict["actionType"], "\Beta\Microsoft\Graph\Model\MobileAppActionType")) {
                return $this->_propDict["actionType"];
            } else {
                $this->_propDict["actionType"] = new MobileAppActionType($this->_propDict["actionType"]);
                return $this->_propDict["actionType"];
            }
        }
        return null;
    }

    /**
    * Sets the actionType
    * Action type for Intune Application. Possible values are: unknown, installCommandSent, installed, uninstalled, userRequestedInstall.
    *
    * @param MobileAppActionType $val The value to assign to the actionType
    *
    * @return MobileAppTroubleshootingAppStateHistory The MobileAppTroubleshootingAppStateHistory
    */
    public function setActionType($val)
    {
        $this->_propDict["actionType"] = $val;
         return $this;
    }
    /**
    * Gets the errorCode
    * Error code for the failure, empty if no failure.
    *
    * @return string The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * Error code for the failure, empty if no failure.
    *
    * @param string $val The value of the errorCode
    *
    * @return MobileAppTroubleshootingAppStateHistory
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }

    /**
    * Gets the runState
    * Status of the item. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @return RunState The runState
    */
    public function getRunState()
    {
        if (array_key_exists("runState", $this->_propDict)) {
            if (is_a($this->_propDict["runState"], "\Beta\Microsoft\Graph\Model\RunState")) {
                return $this->_propDict["runState"];
            } else {
                $this->_propDict["runState"] = new RunState($this->_propDict["runState"]);
                return $this->_propDict["runState"];
            }
        }
        return null;
    }

    /**
    * Sets the runState
    * Status of the item. Possible values are: unknown, success, fail, scriptError, pending, notApplicable.
    *
    * @param RunState $val The value to assign to the runState
    *
    * @return MobileAppTroubleshootingAppStateHistory The MobileAppTroubleshootingAppStateHistory
    */
    public function setRunState($val)
    {
        $this->_propDict["runState"] = $val;
         return $this;
    }
}
