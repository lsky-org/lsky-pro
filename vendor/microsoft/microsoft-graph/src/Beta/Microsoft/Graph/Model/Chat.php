<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Chat File
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
* Chat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Chat extends Entity
{
    /**
    * Gets the chatType
    * Specifies the type of chat. Possible values are:group, oneOnOne and meeting.
    *
    * @return ChatType The chatType
    */
    public function getChatType()
    {
        if (array_key_exists("chatType", $this->_propDict)) {
            if (is_a($this->_propDict["chatType"], "\Beta\Microsoft\Graph\Model\ChatType")) {
                return $this->_propDict["chatType"];
            } else {
                $this->_propDict["chatType"] = new ChatType($this->_propDict["chatType"]);
                return $this->_propDict["chatType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the chatType
    * Specifies the type of chat. Possible values are:group, oneOnOne and meeting.
    *
    * @param ChatType $val The chatType
    *
    * @return Chat
    */
    public function setChatType($val)
    {
        $this->_propDict["chatType"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Date and time at which the chat was created. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Date and time at which the chat was created. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Chat
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    * Date and time at which the chat was renamed or list of members were last changed. Read-only.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return Chat
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @return string The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the topic
    * (Optional) Subject or topic for the chat. Only available for group chats.
    *
    * @param string $val The topic
    *
    * @return Chat
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }
    

     /** 
     * Gets the installedApps
    * A collection of all the apps in the chat. Nullable.
     *
     * @return array The installedApps
     */
    public function getInstalledApps()
    {
        if (array_key_exists("installedApps", $this->_propDict)) {
           return $this->_propDict["installedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the installedApps
    * A collection of all the apps in the chat. Nullable.
    *
    * @param TeamsAppInstallation $val The installedApps
    *
    * @return Chat
    */
    public function setInstalledApps($val)
    {
		$this->_propDict["installedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * A collection of all the members in the chat. Nullable.
     *
     * @return array The members
     */
    public function getMembers()
    {
        if (array_key_exists("members", $this->_propDict)) {
           return $this->_propDict["members"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the members
    * A collection of all the members in the chat. Nullable.
    *
    * @param ConversationMember $val The members
    *
    * @return Chat
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * A collection of all the messages in the chat. Nullable.
     *
     * @return array The messages
     */
    public function getMessages()
    {
        if (array_key_exists("messages", $this->_propDict)) {
           return $this->_propDict["messages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the messages
    * A collection of all the messages in the chat. Nullable.
    *
    * @param ChatMessage $val The messages
    *
    * @return Chat
    */
    public function setMessages($val)
    {
		$this->_propDict["messages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionGrants
    * A collection of permissions granted to apps for the chat.
     *
     * @return array The permissionGrants
     */
    public function getPermissionGrants()
    {
        if (array_key_exists("permissionGrants", $this->_propDict)) {
           return $this->_propDict["permissionGrants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissionGrants
    * A collection of permissions granted to apps for the chat.
    *
    * @param ResourceSpecificPermissionGrant $val The permissionGrants
    *
    * @return Chat
    */
    public function setPermissionGrants($val)
    {
		$this->_propDict["permissionGrants"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tabs
     *
     * @return array The tabs
     */
    public function getTabs()
    {
        if (array_key_exists("tabs", $this->_propDict)) {
           return $this->_propDict["tabs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tabs
    *
    * @param TeamsTab $val The tabs
    *
    * @return Chat
    */
    public function setTabs($val)
    {
		$this->_propDict["tabs"] = $val;
        return $this;
    }
    
}
