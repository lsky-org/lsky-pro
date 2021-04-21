<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceAttachment File
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
* ReferenceAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferenceAttachment extends Attachment
{
    /**
    * Gets the isFolder
    * Specifies whether the attachment is a link to a folder. Must set this to true if sourceUrl is a link to a folder. Optional.
    *
    * @return bool The isFolder
    */
    public function getIsFolder()
    {
        if (array_key_exists("isFolder", $this->_propDict)) {
            return $this->_propDict["isFolder"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFolder
    * Specifies whether the attachment is a link to a folder. Must set this to true if sourceUrl is a link to a folder. Optional.
    *
    * @param bool $val The isFolder
    *
    * @return ReferenceAttachment
    */
    public function setIsFolder($val)
    {
        $this->_propDict["isFolder"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the permission
    * Specifies the permissions granted for the attachment by the type of provider in providerType. Possible values are: other, view, edit, anonymousView, anonymousEdit, organizationView, organizationEdit. Optional.
    *
    * @return ReferenceAttachmentPermission The permission
    */
    public function getPermission()
    {
        if (array_key_exists("permission", $this->_propDict)) {
            if (is_a($this->_propDict["permission"], "\Beta\Microsoft\Graph\Model\ReferenceAttachmentPermission")) {
                return $this->_propDict["permission"];
            } else {
                $this->_propDict["permission"] = new ReferenceAttachmentPermission($this->_propDict["permission"]);
                return $this->_propDict["permission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permission
    * Specifies the permissions granted for the attachment by the type of provider in providerType. Possible values are: other, view, edit, anonymousView, anonymousEdit, organizationView, organizationEdit. Optional.
    *
    * @param ReferenceAttachmentPermission $val The permission
    *
    * @return ReferenceAttachment
    */
    public function setPermission($val)
    {
        $this->_propDict["permission"] = $val;
        return $this;
    }
    
    /**
    * Gets the previewUrl
    * Applies to only a reference attachment of an image - URL to get a preview image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
    *
    * @return string The previewUrl
    */
    public function getPreviewUrl()
    {
        if (array_key_exists("previewUrl", $this->_propDict)) {
            return $this->_propDict["previewUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the previewUrl
    * Applies to only a reference attachment of an image - URL to get a preview image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
    *
    * @param string $val The previewUrl
    *
    * @return ReferenceAttachment
    */
    public function setPreviewUrl($val)
    {
        $this->_propDict["previewUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the providerType
    * The type of provider that supports an attachment of this contentType. Possible values are: other, oneDriveBusiness, oneDriveConsumer, dropbox. Optional.
    *
    * @return ReferenceAttachmentProvider The providerType
    */
    public function getProviderType()
    {
        if (array_key_exists("providerType", $this->_propDict)) {
            if (is_a($this->_propDict["providerType"], "\Beta\Microsoft\Graph\Model\ReferenceAttachmentProvider")) {
                return $this->_propDict["providerType"];
            } else {
                $this->_propDict["providerType"] = new ReferenceAttachmentProvider($this->_propDict["providerType"]);
                return $this->_propDict["providerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the providerType
    * The type of provider that supports an attachment of this contentType. Possible values are: other, oneDriveBusiness, oneDriveConsumer, dropbox. Optional.
    *
    * @param ReferenceAttachmentProvider $val The providerType
    *
    * @return ReferenceAttachment
    */
    public function setProviderType($val)
    {
        $this->_propDict["providerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceUrl
    * URL to get the attachment content. If this is a URL to a folder, then for the folder to be displayed correctly in Outlook or Outlook on the web, set isFolder to true. Required.
    *
    * @return string The sourceUrl
    */
    public function getSourceUrl()
    {
        if (array_key_exists("sourceUrl", $this->_propDict)) {
            return $this->_propDict["sourceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceUrl
    * URL to get the attachment content. If this is a URL to a folder, then for the folder to be displayed correctly in Outlook or Outlook on the web, set isFolder to true. Required.
    *
    * @param string $val The sourceUrl
    *
    * @return ReferenceAttachment
    */
    public function setSourceUrl($val)
    {
        $this->_propDict["sourceUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnailUrl
    * Applies to only a reference attachment of an image - URL to get a thumbnail image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
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
    * Applies to only a reference attachment of an image - URL to get a thumbnail image. Use thumbnailUrl and previewUrl only when sourceUrl identifies an image file. Optional.
    *
    * @param string $val The thumbnailUrl
    *
    * @return ReferenceAttachment
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
}
