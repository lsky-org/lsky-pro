<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppInstallExperience File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* Win32LobAppInstallExperience class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppInstallExperience extends Entity
{

    /**
    * Gets the deviceRestartBehavior
    * Device restart behavior. Possible values are: basedOnReturnCode, allow, suppress, force.
    *
    * @return Win32LobAppRestartBehavior The deviceRestartBehavior
    */
    public function getDeviceRestartBehavior()
    {
        if (array_key_exists("deviceRestartBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["deviceRestartBehavior"], "\Microsoft\Graph\Model\Win32LobAppRestartBehavior")) {
                return $this->_propDict["deviceRestartBehavior"];
            } else {
                $this->_propDict["deviceRestartBehavior"] = new Win32LobAppRestartBehavior($this->_propDict["deviceRestartBehavior"]);
                return $this->_propDict["deviceRestartBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceRestartBehavior
    * Device restart behavior. Possible values are: basedOnReturnCode, allow, suppress, force.
    *
    * @param Win32LobAppRestartBehavior $val The value to assign to the deviceRestartBehavior
    *
    * @return Win32LobAppInstallExperience The Win32LobAppInstallExperience
    */
    public function setDeviceRestartBehavior($val)
    {
        $this->_propDict["deviceRestartBehavior"] = $val;
         return $this;
    }

    /**
    * Gets the runAsAccount
    * Indicates the type of execution context the app runs in. Possible values are: system, user.
    *
    * @return RunAsAccountType The runAsAccount
    */
    public function getRunAsAccount()
    {
        if (array_key_exists("runAsAccount", $this->_propDict)) {
            if (is_a($this->_propDict["runAsAccount"], "\Microsoft\Graph\Model\RunAsAccountType")) {
                return $this->_propDict["runAsAccount"];
            } else {
                $this->_propDict["runAsAccount"] = new RunAsAccountType($this->_propDict["runAsAccount"]);
                return $this->_propDict["runAsAccount"];
            }
        }
        return null;
    }

    /**
    * Sets the runAsAccount
    * Indicates the type of execution context the app runs in. Possible values are: system, user.
    *
    * @param RunAsAccountType $val The value to assign to the runAsAccount
    *
    * @return Win32LobAppInstallExperience The Win32LobAppInstallExperience
    */
    public function setRunAsAccount($val)
    {
        $this->_propDict["runAsAccount"] = $val;
         return $this;
    }
}
