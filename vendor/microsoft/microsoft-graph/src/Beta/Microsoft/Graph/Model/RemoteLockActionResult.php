<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteLockActionResult File
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
* RemoteLockActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteLockActionResult extends DeviceActionResult
{
    /**
    * Gets the unlockPin
    * Pin to unlock the client
    *
    * @return string The unlockPin
    */
    public function getUnlockPin()
    {
        if (array_key_exists("unlockPin", $this->_propDict)) {
            return $this->_propDict["unlockPin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unlockPin
    * Pin to unlock the client
    *
    * @param string $val The value of the unlockPin
    *
    * @return RemoteLockActionResult
    */
    public function setUnlockPin($val)
    {
        $this->_propDict["unlockPin"] = $val;
        return $this;
    }
}
