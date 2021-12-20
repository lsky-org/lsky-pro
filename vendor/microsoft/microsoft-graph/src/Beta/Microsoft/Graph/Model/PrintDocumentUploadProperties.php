<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintDocumentUploadProperties File
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
* PrintDocumentUploadProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintDocumentUploadProperties extends Entity
{
    /**
    * Gets the contentType
    * The document's content (MIME) type.
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
    * The document's content (MIME) type.
    *
    * @param string $val The value of the contentType
    *
    * @return PrintDocumentUploadProperties
    */
    public function setContentType($val)
    {
        $this->_propDict["contentType"] = $val;
        return $this;
    }
    /**
    * Gets the documentName
    * The document's name.
    *
    * @return string The documentName
    */
    public function getDocumentName()
    {
        if (array_key_exists("documentName", $this->_propDict)) {
            return $this->_propDict["documentName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the documentName
    * The document's name.
    *
    * @param string $val The value of the documentName
    *
    * @return PrintDocumentUploadProperties
    */
    public function setDocumentName($val)
    {
        $this->_propDict["documentName"] = $val;
        return $this;
    }
    /**
    * Gets the size
    * The document's size in bytes.
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
    * The document's size in bytes.
    *
    * @param int $val The value of the size
    *
    * @return PrintDocumentUploadProperties
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
}
