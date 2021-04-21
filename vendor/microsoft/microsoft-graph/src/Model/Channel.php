<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Channel File
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
* Channel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Channel extends Entity
{
    /**
    * Gets the createdDateTime
    * Read only. Timestamp at which the channel was created.
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
    * Read only. Timestamp at which the channel was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Channel
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Optional textual description for the channel.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Optional textual description for the channel.
    *
    * @param string $val The description
    *
    * @return Channel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Channel name as it will appear to the user in Microsoft Teams.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Channel name as it will appear to the user in Microsoft Teams.
    *
    * @param string $val The displayName
    *
    * @return Channel
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    * The email address for sending messages to the channel. Read-only.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * The email address for sending messages to the channel. Read-only.
    *
    * @param string $val The email
    *
    * @return Channel
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the isFavoriteByDefault
    * Indicates whether the channel should automatically be marked 'favorite' for all members of the team. Can only be set programmatically with Create team. Default: false.
    *
    * @return bool The isFavoriteByDefault
    */
    public function getIsFavoriteByDefault()
    {
        if (array_key_exists("isFavoriteByDefault", $this->_propDict)) {
            return $this->_propDict["isFavoriteByDefault"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFavoriteByDefault
    * Indicates whether the channel should automatically be marked 'favorite' for all members of the team. Can only be set programmatically with Create team. Default: false.
    *
    * @param bool $val The isFavoriteByDefault
    *
    * @return Channel
    */
    public function setIsFavoriteByDefault($val)
    {
        $this->_propDict["isFavoriteByDefault"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the membershipType
    * The type of the channel. Can be set during creation and cannot be changed. Default: standard.
    *
    * @return ChannelMembershipType The membershipType
    */
    public function getMembershipType()
    {
        if (array_key_exists("membershipType", $this->_propDict)) {
            if (is_a($this->_propDict["membershipType"], "\Microsoft\Graph\Model\ChannelMembershipType")) {
                return $this->_propDict["membershipType"];
            } else {
                $this->_propDict["membershipType"] = new ChannelMembershipType($this->_propDict["membershipType"]);
                return $this->_propDict["membershipType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the membershipType
    * The type of the channel. Can be set during creation and cannot be changed. Default: standard.
    *
    * @param ChannelMembershipType $val The membershipType
    *
    * @return Channel
    */
    public function setMembershipType($val)
    {
        $this->_propDict["membershipType"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * A hyperlink that will go to the channel in Microsoft Teams. This is the URL that you get when you right-click a channel in Microsoft Teams and select Get link to channel. This URL should be treated as an opaque blob, and not parsed. Read-only.
    *
    * @param string $val The webUrl
    *
    * @return Channel
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the filesFolder
    * Metadata for the location where the channel's files are stored.
    *
    * @return DriveItem The filesFolder
    */
    public function getFilesFolder()
    {
        if (array_key_exists("filesFolder", $this->_propDict)) {
            if (is_a($this->_propDict["filesFolder"], "\Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["filesFolder"];
            } else {
                $this->_propDict["filesFolder"] = new DriveItem($this->_propDict["filesFolder"]);
                return $this->_propDict["filesFolder"];
            }
        }
        return null;
    }
    
    /**
    * Sets the filesFolder
    * Metadata for the location where the channel's files are stored.
    *
    * @param DriveItem $val The filesFolder
    *
    * @return Channel
    */
    public function setFilesFolder($val)
    {
        $this->_propDict["filesFolder"] = $val;
        return $this;
    }
    

     /** 
     * Gets the members
    * A collection of membership records associated with the channel.
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
    * A collection of membership records associated with the channel.
    *
    * @param ConversationMember $val The members
    *
    * @return Channel
    */
    public function setMembers($val)
    {
		$this->_propDict["members"] = $val;
        return $this;
    }
    

     /** 
     * Gets the messages
    * A collection of all the messages in the channel. A navigation property. Nullable.
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
    * A collection of all the messages in the channel. A navigation property. Nullable.
    *
    * @param ChatMessage $val The messages
    *
    * @return Channel
    */
    public function setMessages($val)
    {
		$this->_propDict["messages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tabs
    * A collection of all the tabs in the channel. A navigation property.
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
    * A collection of all the tabs in the channel. A navigation property.
    *
    * @param TeamsTab $val The tabs
    *
    * @return Channel
    */
    public function setTabs($val)
    {
		$this->_propDict["tabs"] = $val;
        return $this;
    }
    
}
