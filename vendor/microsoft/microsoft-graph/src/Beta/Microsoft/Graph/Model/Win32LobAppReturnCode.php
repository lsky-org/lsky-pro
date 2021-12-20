<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppReturnCode File
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
* Win32LobAppReturnCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppReturnCode extends Entity
{
    /**
    * Gets the returnCode
    * Return code.
    *
    * @return int The returnCode
    */
    public function getReturnCode()
    {
        if (array_key_exists("returnCode", $this->_propDict)) {
            return $this->_propDict["returnCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the returnCode
    * Return code.
    *
    * @param int $val The value of the returnCode
    *
    * @return Win32LobAppReturnCode
    */
    public function setReturnCode($val)
    {
        $this->_propDict["returnCode"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of return code. Possible values are: failed, success, softReboot, hardReboot, retry.
    *
    * @return Win32LobAppReturnCodeType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\Win32LobAppReturnCodeType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new Win32LobAppReturnCodeType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of return code. Possible values are: failed, success, softReboot, hardReboot, retry.
    *
    * @param Win32LobAppReturnCodeType $val The value to assign to the type
    *
    * @return Win32LobAppReturnCode The Win32LobAppReturnCode
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
