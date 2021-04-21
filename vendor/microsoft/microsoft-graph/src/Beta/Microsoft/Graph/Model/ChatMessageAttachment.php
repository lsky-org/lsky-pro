<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessageAttachment File
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
* ChatMessageAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessageAttachment extends Entity
{
    /**
    * Gets the content
    * The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
    *
    * @param string $val The value of the content
    *
    * @return ChatMessageAttachment
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    /**
    * Gets the contentType
    * The media type of the content attachment. It can have the following values: reference: Attachment is a link to another file. Populate the contentURL with the link to the object.Any contentTypes supported by the Bot Framework's Attachment objectapplication/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
    *
    * @return string The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            return $this->_propDict["contentType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentType
    * The media type of the content attachment. It can have the following values: reference: Attachment is a link to another file. Populate the contentURL with the link to the object.Any contentTypes supported by the Bot Framework's Attachment objectapplication/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
    *
    * @param string $val The value of the contentType
    *
    * @return ChatMessageAttachment
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    /**
    * Gets the contentUrl
    * URL for the content of the attachment. Supported protocols: http, https, file and data.
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentUrl
    * URL for the content of the attachment. Supported protocols: http, https, file and data.
    *
    * @param string $val The value of the contentUrl
    *
    * @return ChatMessageAttachment
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Read-only. Unique id of the attachment.
    *
    * @return string The id
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
    * Read-only. Unique id of the attachment.
    *
    * @param string $val The value of the id
    *
    * @return ChatMessageAttachment
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Name of the attachment.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the attachment.
    *
    * @param string $val The value of the name
    *
    * @return ChatMessageAttachment
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the thumbnailUrl
    * URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user clicks the image, the channel would open the document.
    *
    * @return string The thumbnailUrl
    */
    public function getThumbnailUrl()
    {
        if (array_key_exists("thumbnailUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the thumbnailUrl
    * URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user clicks the image, the channel would open the document.
    *
    * @param string $val The value of the thumbnailUrl
    *
    * @return ChatMessageAttachment
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
}
