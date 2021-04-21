<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProtectOnlineMeetingAction File
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
* ProtectOnlineMeetingAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProtectOnlineMeetingAction extends LabelActionBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.protectOnlineMeetingAction");
    }


    /**
    * Gets the allowedForwarders
    *
    * @return OnlineMeetingForwarders The allowedForwarders
    */
    public function getAllowedForwarders()
    {
        if (array_key_exists("allowedForwarders", $this->_propDict)) {
            if (is_a($this->_propDict["allowedForwarders"], "\Beta\Microsoft\Graph\Model\OnlineMeetingForwarders")) {
                return $this->_propDict["allowedForwarders"];
            } else {
                $this->_propDict["allowedForwarders"] = new OnlineMeetingForwarders($this->_propDict["allowedForwarders"]);
                return $this->_propDict["allowedForwarders"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedForwarders
    *
    * @param OnlineMeetingForwarders $val The value to assign to the allowedForwarders
    *
    * @return ProtectOnlineMeetingAction The ProtectOnlineMeetingAction
    */
    public function setAllowedForwarders($val)
    {
        $this->_propDict["allowedForwarders"] = $val;
         return $this;
    }

    /**
    * Gets the allowedPresenters
    *
    * @return OnlineMeetingPresenters The allowedPresenters
    */
    public function getAllowedPresenters()
    {
        if (array_key_exists("allowedPresenters", $this->_propDict)) {
            if (is_a($this->_propDict["allowedPresenters"], "\Beta\Microsoft\Graph\Model\OnlineMeetingPresenters")) {
                return $this->_propDict["allowedPresenters"];
            } else {
                $this->_propDict["allowedPresenters"] = new OnlineMeetingPresenters($this->_propDict["allowedPresenters"]);
                return $this->_propDict["allowedPresenters"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedPresenters
    *
    * @param OnlineMeetingPresenters $val The value to assign to the allowedPresenters
    *
    * @return ProtectOnlineMeetingAction The ProtectOnlineMeetingAction
    */
    public function setAllowedPresenters($val)
    {
        $this->_propDict["allowedPresenters"] = $val;
         return $this;
    }
    /**
    * Gets the isCopyToClipboardEnabled
    *
    * @return bool The isCopyToClipboardEnabled
    */
    public function getIsCopyToClipboardEnabled()
    {
        if (array_key_exists("isCopyToClipboardEnabled", $this->_propDict)) {
            return $this->_propDict["isCopyToClipboardEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCopyToClipboardEnabled
    *
    * @param bool $val The value of the isCopyToClipboardEnabled
    *
    * @return ProtectOnlineMeetingAction
    */
    public function setIsCopyToClipboardEnabled($val)
    {
        $this->_propDict["isCopyToClipboardEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the isLobbyEnabled
    *
    * @return bool The isLobbyEnabled
    */
    public function getIsLobbyEnabled()
    {
        if (array_key_exists("isLobbyEnabled", $this->_propDict)) {
            return $this->_propDict["isLobbyEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isLobbyEnabled
    *
    * @param bool $val The value of the isLobbyEnabled
    *
    * @return ProtectOnlineMeetingAction
    */
    public function setIsLobbyEnabled($val)
    {
        $this->_propDict["isLobbyEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the lobbyBypassSettings
    *
    * @return LobbyBypassSettings The lobbyBypassSettings
    */
    public function getLobbyBypassSettings()
    {
        if (array_key_exists("lobbyBypassSettings", $this->_propDict)) {
            if (is_a($this->_propDict["lobbyBypassSettings"], "\Beta\Microsoft\Graph\Model\LobbyBypassSettings")) {
                return $this->_propDict["lobbyBypassSettings"];
            } else {
                $this->_propDict["lobbyBypassSettings"] = new LobbyBypassSettings($this->_propDict["lobbyBypassSettings"]);
                return $this->_propDict["lobbyBypassSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the lobbyBypassSettings
    *
    * @param LobbyBypassSettings $val The value to assign to the lobbyBypassSettings
    *
    * @return ProtectOnlineMeetingAction The ProtectOnlineMeetingAction
    */
    public function setLobbyBypassSettings($val)
    {
        $this->_propDict["lobbyBypassSettings"] = $val;
         return $this;
    }
}
