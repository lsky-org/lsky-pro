<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Post File
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
* Post class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Post extends OutlookItem
{
    /**
    * Gets the body
    * The contents of the post. This is a default property. This property can be null.
    *
    * @return ItemBody The body
    */
    public function getBody()
    {
        if (array_key_exists("body", $this->_propDict)) {
            if (is_a($this->_propDict["body"], "\Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["body"];
            } else {
                $this->_propDict["body"] = new ItemBody($this->_propDict["body"]);
                return $this->_propDict["body"];
            }
        }
        return null;
    }
    
    /**
    * Sets the body
    * The contents of the post. This is a default property. This property can be null.
    *
    * @param ItemBody $val The body
    *
    * @return Post
    */
    public function setBody($val)
    {
        $this->_propDict["body"] = $val;
        return $this;
    }
    
    /**
    * Gets the conversationId
    * Unique ID of the conversation. Read-only.
    *
    * @return string The conversationId
    */
    public function getConversationId()
    {
        if (array_key_exists("conversationId", $this->_propDict)) {
            return $this->_propDict["conversationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conversationId
    * Unique ID of the conversation. Read-only.
    *
    * @param string $val The conversationId
    *
    * @return Post
    */
    public function setConversationId($val)
    {
        $this->_propDict["conversationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the conversationThreadId
    * Unique ID of the conversation thread. Read-only.
    *
    * @return string The conversationThreadId
    */
    public function getConversationThreadId()
    {
        if (array_key_exists("conversationThreadId", $this->_propDict)) {
            return $this->_propDict["conversationThreadId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conversationThreadId
    * Unique ID of the conversation thread. Read-only.
    *
    * @param string $val The conversationThreadId
    *
    * @return Post
    */
    public function setConversationThreadId($val)
    {
        $this->_propDict["conversationThreadId"] = $val;
        return $this;
    }
    
    /**
    * Gets the from
    * Used in delegate access scenarios. Indicates who posted the message on behalf of another user. This is a default property.
    *
    * @return Recipient The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            if (is_a($this->_propDict["from"], "\Beta\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["from"];
            } else {
                $this->_propDict["from"] = new Recipient($this->_propDict["from"]);
                return $this->_propDict["from"];
            }
        }
        return null;
    }
    
    /**
    * Sets the from
    * Used in delegate access scenarios. Indicates who posted the message on behalf of another user. This is a default property.
    *
    * @param Recipient $val The from
    *
    * @return Post
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasAttachments
    * Indicates whether the post has at least one attachment. This is a default property.
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
    * Indicates whether the post has at least one attachment. This is a default property.
    *
    * @param bool $val The hasAttachments
    *
    * @return Post
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the importance
    * The importance of a group post: low, normal, high.
    *
    * @return Importance The importance
    */
    public function getImportance()
    {
        if (array_key_exists("importance", $this->_propDict)) {
            if (is_a($this->_propDict["importance"], "\Beta\Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["importance"];
            } else {
                $this->_propDict["importance"] = new Importance($this->_propDict["importance"]);
                return $this->_propDict["importance"];
            }
        }
        return null;
    }
    
    /**
    * Sets the importance
    * The importance of a group post: low, normal, high.
    *
    * @param Importance $val The importance
    *
    * @return Post
    */
    public function setImportance($val)
    {
        $this->_propDict["importance"] = $val;
        return $this;
    }
    

     /** 
     * Gets the newParticipants
    * Conversation participants that were added to the thread as part of this post.
     *
     * @return array The newParticipants
     */
    public function getNewParticipants()
    {
        if (array_key_exists("newParticipants", $this->_propDict)) {
           return $this->_propDict["newParticipants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the newParticipants
    * Conversation participants that were added to the thread as part of this post.
    *
    * @param Recipient $val The newParticipants
    *
    * @return Post
    */
    public function setNewParticipants($val)
    {
		$this->_propDict["newParticipants"] = $val;
        return $this;
    }
    
    /**
    * Gets the receivedDateTime
    * Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The receivedDateTime
    */
    public function getReceivedDateTime()
    {
        if (array_key_exists("receivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["receivedDateTime"], "\DateTime")) {
                return $this->_propDict["receivedDateTime"];
            } else {
                $this->_propDict["receivedDateTime"] = new \DateTime($this->_propDict["receivedDateTime"]);
                return $this->_propDict["receivedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the receivedDateTime
    * Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The receivedDateTime
    *
    * @return Post
    */
    public function setReceivedDateTime($val)
    {
        $this->_propDict["receivedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the sender
    * Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
    *
    * @return Recipient The sender
    */
    public function getSender()
    {
        if (array_key_exists("sender", $this->_propDict)) {
            if (is_a($this->_propDict["sender"], "\Beta\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["sender"];
            } else {
                $this->_propDict["sender"] = new Recipient($this->_propDict["sender"]);
                return $this->_propDict["sender"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sender
    * Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
    *
    * @param Recipient $val The sender
    *
    * @return Post
    */
    public function setSender($val)
    {
        $this->_propDict["sender"] = $val;
        return $this;
    }
    

     /** 
     * Gets the attachments
    * The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the post. Read-only. Nullable.
     *
     * @return array The attachments
     */
    public function getAttachments()
    {
        if (array_key_exists("attachments", $this->_propDict)) {
           return $this->_propDict["attachments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attachments
    * The collection of fileAttachment, itemAttachment, and referenceAttachment attachments for the post. Read-only. Nullable.
    *
    * @param Attachment $val The attachments
    *
    * @return Post
    */
    public function setAttachments($val)
    {
		$this->_propDict["attachments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the post. Read-only. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the post. Read-only. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return Post
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    
    /**
    * Gets the inReplyTo
    * The earlier post that this post is replying to in the conversationThread. Read-only.
    *
    * @return Post The inReplyTo
    */
    public function getInReplyTo()
    {
        if (array_key_exists("inReplyTo", $this->_propDict)) {
            if (is_a($this->_propDict["inReplyTo"], "\Beta\Microsoft\Graph\Model\Post")) {
                return $this->_propDict["inReplyTo"];
            } else {
                $this->_propDict["inReplyTo"] = new Post($this->_propDict["inReplyTo"]);
                return $this->_propDict["inReplyTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inReplyTo
    * The earlier post that this post is replying to in the conversationThread. Read-only.
    *
    * @param Post $val The inReplyTo
    *
    * @return Post
    */
    public function setInReplyTo($val)
    {
        $this->_propDict["inReplyTo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mentions
     *
     * @return array The mentions
     */
    public function getMentions()
    {
        if (array_key_exists("mentions", $this->_propDict)) {
           return $this->_propDict["mentions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mentions
    *
    * @param Mention $val The mentions
    *
    * @return Post
    */
    public function setMentions($val)
    {
		$this->_propDict["mentions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the post. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return Post
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the post. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the post. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return Post
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    
}
