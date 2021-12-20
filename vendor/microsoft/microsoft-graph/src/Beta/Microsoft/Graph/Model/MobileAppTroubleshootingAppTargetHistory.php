<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppTroubleshootingAppTargetHistory File
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
* MobileAppTroubleshootingAppTargetHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppTroubleshootingAppTargetHistory extends MobileAppTroubleshootingHistoryItem
{
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
    * @return MobileAppTroubleshootingAppTargetHistory
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
    * @return MobileAppTroubleshootingAppTargetHistory The MobileAppTroubleshootingAppTargetHistory
    */
    public function setRunState($val)
    {
        $this->_propDict["runState"] = $val;
         return $this;
    }
    /**
    * Gets the securityGroupId
    * AAD security group id to which it was targeted.
    *
    * @return string The securityGroupId
    */
    public function getSecurityGroupId()
    {
        if (array_key_exists("securityGroupId", $this->_propDict)) {
            return $this->_propDict["securityGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityGroupId
    * AAD security group id to which it was targeted.
    *
    * @param string $val The value of the securityGroupId
    *
    * @return MobileAppTroubleshootingAppTargetHistory
    */
    public function setSecurityGroupId($val)
    {
        $this->_propDict["securityGroupId"] = $val;
        return $this;
    }
}
