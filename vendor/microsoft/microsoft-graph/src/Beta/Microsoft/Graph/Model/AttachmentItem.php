<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttachmentItem File
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
* AttachmentItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttachmentItem extends Entity
{

    /**
    * Gets the attachmentType
    * The type of attachment. Possible values are: file, item, reference. Required.
    *
    * @return AttachmentType The attachmentType
    */
    public function getAttachmentType()
    {
        if (array_key_exists("attachmentType", $this->_propDict)) {
            if (is_a($this->_propDict["attachmentType"], "\Beta\Microsoft\Graph\Model\AttachmentType")) {
                return $this->_propDict["attachmentType"];
            } else {
                $this->_propDict["attachmentType"] = new AttachmentType($this->_propDict["attachmentType"]);
                return $this->_propDict["attachmentType"];
            }
        }
        return null;
    }

    /**
    * Sets the attachmentType
    * The type of attachment. Possible values are: file, item, reference. Required.
    *
    * @param AttachmentType $val The value to assign to the attachmentType
    *
    * @return AttachmentItem The AttachmentItem
    */
    public function setAttachmentType($val)
    {
        $this->_propDict["attachmentType"] = $val;
         return $this;
    }
    /**
    * Gets the contentType
    * The nature of the data in the attachment. Optional.
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
    * The nature of the data in the attachment. Optional.
    *
    * @param string $val The value of the contentType
    *
    * @return AttachmentItem
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    /**
    * Gets the isInline
    * true if the attachment is an inline attachment; otherwise, false. Optional.
    *
    * @return bool The isInline
    */
    public function getIsInline()
    {
        if (array_key_exists("isInline", $this->_propDict)) {
            return $this->_propDict["isInline"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isInline
    * true if the attachment is an inline attachment; otherwise, false. Optional.
    *
    * @param bool $val The value of the isInline
    *
    * @return AttachmentItem
    */
    public function setIsInline($val)
    {
        $this->_propDict["isInline"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
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
    * The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
    *
    * @param string $val The value of the name
    *
    * @return AttachmentItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the size
    * The length of the attachment in bytes. Required.
    *
    * @return int The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    * The length of the attachment in bytes. Required.
    *
    * @param int $val The value of the size
    *
    * @return AttachmentItem
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
