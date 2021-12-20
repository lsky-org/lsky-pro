<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LobbyBypassSettings File
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
* LobbyBypassSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LobbyBypassSettings extends Entity
{
    /**
    * Gets the isDialInBypassEnabled
    * Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
    *
    * @return bool The isDialInBypassEnabled
    */
    public function getIsDialInBypassEnabled()
    {
        if (array_key_exists("isDialInBypassEnabled", $this->_propDict)) {
            return $this->_propDict["isDialInBypassEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDialInBypassEnabled
    * Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
    *
    * @param bool $val The value of the isDialInBypassEnabled
    *
    * @return LobbyBypassSettings
    */
    public function setIsDialInBypassEnabled($val)
    {
        $this->_propDict["isDialInBypassEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the scope
    * Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Possible values are listed in the following table. Optional.
    *
    * @return LobbyBypassScope The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\LobbyBypassScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new LobbyBypassScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    * Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Possible values are listed in the following table. Optional.
    *
    * @param LobbyBypassScope $val The value to assign to the scope
    *
    * @return LobbyBypassSettings The LobbyBypassSettings
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }
}
