<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DocumentSetContent File
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
* DocumentSetContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DocumentSetContent extends Entity
{

    /**
    * Gets the contentType
    * Content type information of the file.
    *
    * @return ContentTypeInfo The contentType
    */
    public function getContentType()
    {
        if (array_key_exists("contentType", $this->_propDict)) {
            if (is_a($this->_propDict["contentType"], "\Beta\Microsoft\Graph\Model\ContentTypeInfo")) {
                return $this->_propDict["contentType"];
            } else {
                $this->_propDict["contentType"] = new ContentTypeInfo($this->_propDict["contentType"]);
                return $this->_propDict["contentType"];
            }
        }
        return null;
    }

    /**
    * Sets the contentType
    * Content type information of the file.
    *
    * @param ContentTypeInfo $val The value to assign to the contentType
    *
    * @return DocumentSetContent The DocumentSetContent
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
         return $this;
    }
    /**
    * Gets the fileName
    * Name of the file in resource folder that should be added as a default content or a template in the document set
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * Name of the file in resource folder that should be added as a default content or a template in the document set
    *
    * @param string $val The value of the fileName
    *
    * @return DocumentSetContent
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    /**
    * Gets the folderName
    * Folder name in which the file will be placed when a new document set is created in the library.
    *
    * @return string The folderName
    */
    public function getFolderName()
    {
        if (array_key_exists("folderName", $this->_propDict)) {
            return $this->_propDict["folderName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the folderName
    * Folder name in which the file will be placed when a new document set is created in the library.
    *
    * @param string $val The value of the folderName
    *
    * @return DocumentSetContent
    */
    public function setFolderName($val)
    {
        $this->_propDict["folderName"] = $val;
        return $this;
    }
}
