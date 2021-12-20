<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamMessagingSettings File
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
* TeamMessagingSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamMessagingSettings extends Entity
{
    /**
    * Gets the allowChannelMentions
    * If set to true, @channel mentions are allowed.
    *
    * @return bool The allowChannelMentions
    */
    public function getAllowChannelMentions()
    {
        if (array_key_exists("allowChannelMentions", $this->_propDict)) {
            return $this->_propDict["allowChannelMentions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowChannelMentions
    * If set to true, @channel mentions are allowed.
    *
    * @param bool $val The value of the allowChannelMentions
    *
    * @return TeamMessagingSettings
    */
    public function setAllowChannelMentions($val)
    {
        $this->_propDict["allowChannelMentions"] = $val;
        return $this;
    }
    /**
    * Gets the allowOwnerDeleteMessages
    * If set to true, owners can delete any message.
    *
    * @return bool The allowOwnerDeleteMessages
    */
    public function getAllowOwnerDeleteMessages()
    {
        if (array_key_exists("allowOwnerDeleteMessages", $this->_propDict)) {
            return $this->_propDict["allowOwnerDeleteMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowOwnerDeleteMessages
    * If set to true, owners can delete any message.
    *
    * @param bool $val The value of the allowOwnerDeleteMessages
    *
    * @return TeamMessagingSettings
    */
    public function setAllowOwnerDeleteMessages($val)
    {
        $this->_propDict["allowOwnerDeleteMessages"] = $val;
        return $this;
    }
    /**
    * Gets the allowTeamMentions
    * If set to true, @team mentions are allowed.
    *
    * @return bool The allowTeamMentions
    */
    public function getAllowTeamMentions()
    {
        if (array_key_exists("allowTeamMentions", $this->_propDict)) {
            return $this->_propDict["allowTeamMentions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTeamMentions
    * If set to true, @team mentions are allowed.
    *
    * @param bool $val The value of the allowTeamMentions
    *
    * @return TeamMessagingSettings
    */
    public function setAllowTeamMentions($val)
    {
        $this->_propDict["allowTeamMentions"] = $val;
        return $this;
    }
    /**
    * Gets the allowUserDeleteMessages
    * If set to true, users can delete their messages.
    *
    * @return bool The allowUserDeleteMessages
    */
    public function getAllowUserDeleteMessages()
    {
        if (array_key_exists("allowUserDeleteMessages", $this->_propDict)) {
            return $this->_propDict["allowUserDeleteMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUserDeleteMessages
    * If set to true, users can delete their messages.
    *
    * @param bool $val The value of the allowUserDeleteMessages
    *
    * @return TeamMessagingSettings
    */
    public function setAllowUserDeleteMessages($val)
    {
        $this->_propDict["allowUserDeleteMessages"] = $val;
        return $this;
    }
    /**
    * Gets the allowUserEditMessages
    * If set to true, users can edit their messages.
    *
    * @return bool The allowUserEditMessages
    */
    public function getAllowUserEditMessages()
    {
        if (array_key_exists("allowUserEditMessages", $this->_propDict)) {
            return $this->_propDict["allowUserEditMessages"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUserEditMessages
    * If set to true, users can edit their messages.
    *
    * @param bool $val The value of the allowUserEditMessages
    *
    * @return TeamMessagingSettings
    */
    public function setAllowUserEditMessages($val)
    {
        $this->_propDict["allowUserEditMessages"] = $val;
        return $this;
    }
}
