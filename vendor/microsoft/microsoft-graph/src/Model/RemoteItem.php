<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteItem File
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
* RemoteItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteItem extends Entity
{

    /**
    * Gets the createdBy
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * Identity of the user, device, and application which created the item. Read-only.
    *
    * @param IdentitySet $val The value to assign to the createdBy
    *
    * @return RemoteItem The RemoteItem
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    * Date and time of item creation. Read-only.
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
    * Date and time of item creation. Read-only.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return RemoteItem The RemoteItem
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the file
    * Indicates that the remote item is a file. Read-only.
    *
    * @return File The file
    */
    public function getFile()
    {
        if (array_key_exists("file", $this->_propDict)) {
            if (is_a($this->_propDict["file"], "\Microsoft\Graph\Model\File")) {
                return $this->_propDict["file"];
            } else {
                $this->_propDict["file"] = new File($this->_propDict["file"]);
                return $this->_propDict["file"];
            }
        }
        return null;
    }

    /**
    * Sets the file
    * Indicates that the remote item is a file. Read-only.
    *
    * @param File $val The value to assign to the file
    *
    * @return RemoteItem The RemoteItem
    */
    public function setFile($val)
    {
        $this->_propDict["file"] = $val;
         return $this;
    }

    /**
    * Gets the fileSystemInfo
    * Information about the remote item from the local file system. Read-only.
    *
    * @return FileSystemInfo The fileSystemInfo
    */
    public function getFileSystemInfo()
    {
        if (array_key_exists("fileSystemInfo", $this->_propDict)) {
            if (is_a($this->_propDict["fileSystemInfo"], "\Microsoft\Graph\Model\FileSystemInfo")) {
                return $this->_propDict["fileSystemInfo"];
            } else {
                $this->_propDict["fileSystemInfo"] = new FileSystemInfo($this->_propDict["fileSystemInfo"]);
                return $this->_propDict["fileSystemInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the fileSystemInfo
    * Information about the remote item from the local file system. Read-only.
    *
    * @param FileSystemInfo $val The value to assign to the fileSystemInfo
    *
    * @return RemoteItem The RemoteItem
    */
    public function setFileSystemInfo($val)
    {
        $this->_propDict["fileSystemInfo"] = $val;
         return $this;
    }

    /**
    * Gets the folder
    * Indicates that the remote item is a folder. Read-only.
    *
    * @return Folder The folder
    */
    public function getFolder()
    {
        if (array_key_exists("folder", $this->_propDict)) {
            if (is_a($this->_propDict["folder"], "\Microsoft\Graph\Model\Folder")) {
                return $this->_propDict["folder"];
            } else {
                $this->_propDict["folder"] = new Folder($this->_propDict["folder"]);
                return $this->_propDict["folder"];
            }
        }
        return null;
    }

    /**
    * Sets the folder
    * Indicates that the remote item is a folder. Read-only.
    *
    * @param Folder $val The value to assign to the folder
    *
    * @return RemoteItem The RemoteItem
    */
    public function setFolder($val)
    {
        $this->_propDict["folder"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * Unique identifier for the remote item in its drive. Read-only.
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
    * Unique identifier for the remote item in its drive. Read-only.
    *
    * @param string $val The value of the id
    *
    * @return RemoteItem
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the image
    * Image metadata, if the item is an image. Read-only.
    *
    * @return Image The image
    */
    public function getImage()
    {
        if (array_key_exists("image", $this->_propDict)) {
            if (is_a($this->_propDict["image"], "\Microsoft\Graph\Model\Image")) {
                return $this->_propDict["image"];
            } else {
                $this->_propDict["image"] = new Image($this->_propDict["image"]);
                return $this->_propDict["image"];
            }
        }
        return null;
    }

    /**
    * Sets the image
    * Image metadata, if the item is an image. Read-only.
    *
    * @param Image $val The value to assign to the image
    *
    * @return RemoteItem The RemoteItem
    */
    public function setImage($val)
    {
        $this->_propDict["image"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedBy
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedBy
    * Identity of the user, device, and application which last modified the item. Read-only.
    *
    * @param IdentitySet $val The value to assign to the lastModifiedBy
    *
    * @return RemoteItem The RemoteItem
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
         return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * Date and time the item was last modified. Read-only.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    * Date and time the item was last modified. Read-only.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return RemoteItem The RemoteItem
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Optional. Filename of the remote item. Read-only.
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
    * Optional. Filename of the remote item. Read-only.
    *
    * @param string $val The value of the name
    *
    * @return RemoteItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the package
    * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
    *
    * @return Package The package
    */
    public function getPackage()
    {
        if (array_key_exists("package", $this->_propDict)) {
            if (is_a($this->_propDict["package"], "\Microsoft\Graph\Model\Package")) {
                return $this->_propDict["package"];
            } else {
                $this->_propDict["package"] = new Package($this->_propDict["package"]);
                return $this->_propDict["package"];
            }
        }
        return null;
    }

    /**
    * Sets the package
    * If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.
    *
    * @param Package $val The value to assign to the package
    *
    * @return RemoteItem The RemoteItem
    */
    public function setPackage($val)
    {
        $this->_propDict["package"] = $val;
         return $this;
    }

    /**
    * Gets the parentReference
    * Properties of the parent of the remote item. Read-only.
    *
    * @return ItemReference The parentReference
    */
    public function getParentReference()
    {
        if (array_key_exists("parentReference", $this->_propDict)) {
            if (is_a($this->_propDict["parentReference"], "\Microsoft\Graph\Model\ItemReference")) {
                return $this->_propDict["parentReference"];
            } else {
                $this->_propDict["parentReference"] = new ItemReference($this->_propDict["parentReference"]);
                return $this->_propDict["parentReference"];
            }
        }
        return null;
    }

    /**
    * Sets the parentReference
    * Properties of the parent of the remote item. Read-only.
    *
    * @param ItemReference $val The value to assign to the parentReference
    *
    * @return RemoteItem The RemoteItem
    */
    public function setParentReference($val)
    {
        $this->_propDict["parentReference"] = $val;
         return $this;
    }

    /**
    * Gets the shared
    * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
    *
    * @return Shared The shared
    */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
            if (is_a($this->_propDict["shared"], "\Microsoft\Graph\Model\Shared")) {
                return $this->_propDict["shared"];
            } else {
                $this->_propDict["shared"] = new Shared($this->_propDict["shared"]);
                return $this->_propDict["shared"];
            }
        }
        return null;
    }

    /**
    * Sets the shared
    * Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.
    *
    * @param Shared $val The value to assign to the shared
    *
    * @return RemoteItem The RemoteItem
    */
    public function setShared($val)
    {
        $this->_propDict["shared"] = $val;
         return $this;
    }

    /**
    * Gets the sharepointIds
    * Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "\Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepointIds
    * Provides interop between items in OneDrive for Business and SharePoint with the full set of item identifiers. Read-only.
    *
    * @param SharepointIds $val The value to assign to the sharepointIds
    *
    * @return RemoteItem The RemoteItem
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
         return $this;
    }
    /**
    * Gets the size
    * Size of the remote item. Read-only.
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
    * Size of the remote item. Read-only.
    *
    * @param int $val The value of the size
    *
    * @return RemoteItem
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }

    /**
    * Gets the specialFolder
    * If the current item is also available as a special folder, this facet is returned. Read-only.
    *
    * @return SpecialFolder The specialFolder
    */
    public function getSpecialFolder()
    {
        if (array_key_exists("specialFolder", $this->_propDict)) {
            if (is_a($this->_propDict["specialFolder"], "\Microsoft\Graph\Model\SpecialFolder")) {
                return $this->_propDict["specialFolder"];
            } else {
                $this->_propDict["specialFolder"] = new SpecialFolder($this->_propDict["specialFolder"]);
                return $this->_propDict["specialFolder"];
            }
        }
        return null;
    }

    /**
    * Sets the specialFolder
    * If the current item is also available as a special folder, this facet is returned. Read-only.
    *
    * @param SpecialFolder $val The value to assign to the specialFolder
    *
    * @return RemoteItem The RemoteItem
    */
    public function setSpecialFolder($val)
    {
        $this->_propDict["specialFolder"] = $val;
         return $this;
    }

    /**
    * Gets the video
    * Video metadata, if the item is a video. Read-only.
    *
    * @return Video The video
    */
    public function getVideo()
    {
        if (array_key_exists("video", $this->_propDict)) {
            if (is_a($this->_propDict["video"], "\Microsoft\Graph\Model\Video")) {
                return $this->_propDict["video"];
            } else {
                $this->_propDict["video"] = new Video($this->_propDict["video"]);
                return $this->_propDict["video"];
            }
        }
        return null;
    }

    /**
    * Sets the video
    * Video metadata, if the item is a video. Read-only.
    *
    * @param Video $val The value to assign to the video
    *
    * @return RemoteItem The RemoteItem
    */
    public function setVideo($val)
    {
        $this->_propDict["video"] = $val;
         return $this;
    }
    /**
    * Gets the webDavUrl
    * DAV compatible URL for the item.
    *
    * @return string The webDavUrl
    */
    public function getWebDavUrl()
    {
        if (array_key_exists("webDavUrl", $this->_propDict)) {
            return $this->_propDict["webDavUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webDavUrl
    * DAV compatible URL for the item.
    *
    * @param string $val The value of the webDavUrl
    *
    * @return RemoteItem
    */
    public function setWebDavUrl($val)
    {
        $this->_propDict["webDavUrl"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * URL that displays the resource in the browser. Read-only.
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
    * URL that displays the resource in the browser. Read-only.
    *
    * @param string $val The value of the webUrl
    *
    * @return RemoteItem
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
