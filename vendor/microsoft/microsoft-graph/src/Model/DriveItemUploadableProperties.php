<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DriveItemUploadableProperties File
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
* DriveItemUploadableProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DriveItemUploadableProperties extends Entity
{
    /**
    * Gets the description
    * Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
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
    * Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
    *
    * @param string $val The value of the description
    *
    * @return DriveItemUploadableProperties
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the fileSize
    * Provides an expected file size to perform a quota check prior to upload. Only on OneDrive Personal.
    *
    * @return int The fileSize
    */
    public function getFileSize()
    {
        if (array_key_exists("fileSize", $this->_propDict)) {
            return $this->_propDict["fileSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileSize
    * Provides an expected file size to perform a quota check prior to upload. Only on OneDrive Personal.
    *
    * @param int $val The value of the fileSize
    *
    * @return DriveItemUploadableProperties
    */
    public function setFileSize($val)
    {
        $this->_propDict["fileSize"] = $val;
        return $this;
    }

    /**
    * Gets the fileSystemInfo
    * File system information on client. Read-write.
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
    * File system information on client. Read-write.
    *
    * @param FileSystemInfo $val The value to assign to the fileSystemInfo
    *
    * @return DriveItemUploadableProperties The DriveItemUploadableProperties
    */
    public function setFileSystemInfo($val)
    {
        $this->_propDict["fileSystemInfo"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * The name of the item (filename and extension). Read-write.
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
    * The name of the item (filename and extension). Read-write.
    *
    * @param string $val The value of the name
    *
    * @return DriveItemUploadableProperties
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
