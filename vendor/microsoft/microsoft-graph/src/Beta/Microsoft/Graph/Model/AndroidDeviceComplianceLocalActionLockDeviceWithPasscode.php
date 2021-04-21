<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceComplianceLocalActionLockDeviceWithPasscode File
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
* AndroidDeviceComplianceLocalActionLockDeviceWithPasscode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceComplianceLocalActionLockDeviceWithPasscode extends AndroidDeviceComplianceLocalActionBase
{
    /**
    * Gets the passcode
    * Passcode to reset to Android device. This property is read-only.
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
    * Passcode to reset to Android device. This property is read-only.
    *
    * @param string $val The passcode
    *
    * @return AndroidDeviceComplianceLocalActionLockDeviceWithPasscode
    */
    public function setPasscode($val)
    {
        $this->_propDict["passcode"] = $val;
        return $this;
    }
    
    /**
    * Gets the passcodeSignInFailureCountBeforeWipe
    * Number of sign in failures before wiping device, the value can be 4-11. Valid values 4 to 11
    *
    * @return int The passcodeSignInFailureCountBeforeWipe
    */
    public function getPasscodeSignInFailureCountBeforeWipe()
    {
        if (array_key_exists("passcodeSignInFailureCountBeforeWipe", $this->_propDict)) {
            return $this->_propDict["passcodeSignInFailureCountBeforeWipe"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passcodeSignInFailureCountBeforeWipe
    * Number of sign in failures before wiping device, the value can be 4-11. Valid values 4 to 11
    *
    * @param int $val The passcodeSignInFailureCountBeforeWipe
    *
    * @return AndroidDeviceComplianceLocalActionLockDeviceWithPasscode
    */
    public function setPasscodeSignInFailureCountBeforeWipe($val)
    {
        $this->_propDict["passcodeSignInFailureCountBeforeWipe"] = intval($val);
        return $this;
    }
    
}
