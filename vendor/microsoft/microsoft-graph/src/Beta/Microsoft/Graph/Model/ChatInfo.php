<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatInfo File
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
* ChatInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatInfo extends Entity
{
    /**
    * Gets the messageId
    * The unique identifier for a message in a Microsoft Teams channel.
    *
    * @return string The messageId
    */
    public function getMessageId()
    {
        if (array_key_exists("messageId", $this->_propDict)) {
            return $this->_propDict["messageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageId
    * The unique identifier for a message in a Microsoft Teams channel.
    *
    * @param string $val The value of the messageId
    *
    * @return ChatInfo
    */
    public function setMessageId($val)
    {
        $this->_propDict["messageId"] = $val;
        return $this;
    }
    /**
    * Gets the replyChainMessageId
    * The ID of the reply message.
    *
    * @return string The replyChainMessageId
    */
    public function getReplyChainMessageId()
    {
        if (array_key_exists("replyChainMessageId", $this->_propDict)) {
            return $this->_propDict["replyChainMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the replyChainMessageId
    * The ID of the reply message.
    *
    * @param string $val The value of the replyChainMessageId
    *
    * @return ChatInfo
    */
    public function setReplyChainMessageId($val)
    {
        $this->_propDict["replyChainMessageId"] = $val;
        return $this;
    }
    /**
    * Gets the threadId
    * The unique identifier for a thread in Microsoft Teams.
    *
    * @return string The threadId
    */
    public function getThreadId()
    {
        if (array_key_exists("threadId", $this->_propDict)) {
            return $this->_propDict["threadId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the threadId
    * The unique identifier for a thread in Microsoft Teams.
    *
    * @param string $val The value of the threadId
    *
    * @return ChatInfo
    */
    public function setThreadId($val)
    {
        $this->_propDict["threadId"] = $val;
        return $this;
    }
}
