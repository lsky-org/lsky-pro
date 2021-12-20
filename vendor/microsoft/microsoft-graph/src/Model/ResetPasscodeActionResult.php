<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResetPasscodeActionResult File
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
* ResetPasscodeActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResetPasscodeActionResult extends DeviceActionResult
{
    /**
    * Gets the passcode
    * Newly generated passcode for the device
    *
    * @return string The passcode
    */
    public function getPasscode()
    {
        if (array_key_exists("passcode", $this->_propDict)) {
            return $this->_propDict["passcode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the passcode
    * Newly generated passcode for the device
    *
    * @param string $val The value of the passcode
    *
    * @return ResetPasscodeActionResult
    */
    public function setPasscode($val)
    {
        $this->_propDict["passcode"] = $val;
        return $this;
    }
}
