<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Conversation File
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
* Conversation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Conversation extends Entity
{
    /**
    * Gets the hasAttachments
    * Indicates whether any of the posts within this Conversation has at least one attachment.
    *
    * @return bool The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasAttachments
    * Indicates whether any of the posts within this Conversation has at least one attachment.
    *
    * @param bool $val The hasAttachments
    *
    * @return Conversation
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastDeliveredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastDeliveredDateTime
    */
    public function getLastDeliveredDateTime()
    {
        if (array_key_exists("lastDeliveredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDeliveredDateTime"], "\DateTime")) {
                return $this->_propDict["lastDeliveredDateTime"];
            } else {
                $this->_propDict["lastDeliveredDateTime"] = new \DateTime($this->_propDict["lastDeliveredDateTime"]);
                return $this->_propDict["lastDeliveredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastDeliveredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastDeliveredDateTime
    *
    * @return Conversation
    */
    public function setLastDeliveredDateTime($val)
    {
        $this->_propDict["lastDeliveredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the preview
    * A short summary from the body of the latest post in this converstaion.
    *
    * @return string The preview
    */
    public function getPreview()
    {
        if (array_key_exists("preview", $this->_propDict)) {
            return $this->_propDict["preview"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preview
    * A short summary from the body of the latest post in this converstaion.
    *
    * @param string $val The preview
    *
    * @return Conversation
    */
    public function setPreview($val)
    {
        $this->_propDict["preview"] = $val;
        return $this;
    }
    
    /**
    * Gets the topic
    * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
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
    * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
    *
    * @param string $val The topic
    *
    * @return Conversation
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }
    
    /**
    * Gets the uniqueSenders
    * All the users that sent a message to this Conversation.
    *
    * @return string The uniqueSenders
    */
    public function getUniqueSenders()
    {
        if (array_key_exists("uniqueSenders", $this->_propDict)) {
            return $this->_propDict["uniqueSenders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uniqueSenders
    * All the users that sent a message to this Conversation.
    *
    * @param string $val The uniqueSenders
    *
    * @return Conversation
    */
    public function setUniqueSenders($val)
    {
        $this->_propDict["uniqueSenders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the threads
    * A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     *
     * @return array The threads
     */
    public function getThreads()
    {
        if (array_key_exists("threads", $this->_propDict)) {
           return $this->_propDict["threads"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the threads
    * A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
    *
    * @param ConversationThread $val The threads
    *
    * @return Conversation
    */
    public function setThreads($val)
    {
		$this->_propDict["threads"] = $val;
        return $this;
    }
    
}
