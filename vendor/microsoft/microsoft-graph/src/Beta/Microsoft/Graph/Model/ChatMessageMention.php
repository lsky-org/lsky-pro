<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageMention File
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
* ChatMessageMention class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageMention extends Entity
{
    /**
    * Gets the id
    * Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding &amp;lt;at id='{index}'&amp;gt; tag in the message body.
    *
    * @return int The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding &amp;lt;at id='{index}'&amp;gt; tag in the message body.
    *
    * @param int $val The value of the id
    *
    * @return ChatMessageMention
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the mentioned
    * The entity (user, application, team, or channel) that was mentioned.  If it was a channel or team that was @mentioned, the identitySet contains a conversation property giving the ID of the team/channel, and a conversationIdentityType property that represents either the team or channel.
    *
    * @return IdentitySet The mentioned
    */
    public function getMentioned()
    {
        if (array_key_exists("mentioned", $this->_propDict)) {
            if (is_a($this->_propDict["mentioned"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["mentioned"];
            } else {
                $this->_propDict["mentioned"] = new IdentitySet($this->_propDict["mentioned"]);
                return $this->_propDict["mentioned"];
            }
        }
        return null;
    }

    /**
    * Sets the mentioned
    * The entity (user, application, team, or channel) that was mentioned.  If it was a channel or team that was @mentioned, the identitySet contains a conversation property giving the ID of the team/channel, and a conversationIdentityType property that represents either the team or channel.
    *
    * @param IdentitySet $val The value to assign to the mentioned
    *
    * @return ChatMessageMention The ChatMessageMention
    */
    public function setMentioned($val)
    {
        $this->_propDict["mentioned"] = $val;
         return $this;
    }
    /**
    * Gets the mentionText
    * String used to represent the mention. For example, a user's display name, a team name.
    *
    * @return string The mentionText
    */
    public function getMentionText()
    {
        if (array_key_exists("mentionText", $this->_propDict)) {
            return $this->_propDict["mentionText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mentionText
    * String used to represent the mention. For example, a user's display name, a team name.
    *
    * @param string $val The value of the mentionText
    *
    * @return ChatMessageMention
    */
    public function setMentionText($val)
    {
        $this->_propDict["mentionText"] = $val;
        return $this;
    }
}
