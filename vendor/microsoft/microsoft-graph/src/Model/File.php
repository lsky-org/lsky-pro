<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* File File
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
* File class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class File extends Entity
{

    /**
    * Gets the hashes
    * Hashes of the file's binary content, if available. Read-only.
    *
    * @return Hashes The hashes
    */
    public function getHashes()
    {
        if (array_key_exists("hashes", $this->_propDict)) {
            if (is_a($this->_propDict["hashes"], "\Microsoft\Graph\Model\Hashes")) {
                return $this->_propDict["hashes"];
            } else {
                $this->_propDict["hashes"] = new Hashes($this->_propDict["hashes"]);
                return $this->_propDict["hashes"];
            }
        }
        return null;
    }

    /**
    * Sets the hashes
    * Hashes of the file's binary content, if available. Read-only.
    *
    * @param Hashes $val The value to assign to the hashes
    *
    * @return File The File
    */
    public function setHashes($val)
    {
        $this->_propDict["hashes"] = $val;
         return $this;
    }
    /**
    * Gets the mimeType
    * The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
    *
    * @return string The mimeType
    */
    public function getMimeType()
    {
        if (array_key_exists("mimeType", $this->_propDict)) {
            return $this->_propDict["mimeType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mimeType
    * The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
    *
    * @param string $val The value of the mimeType
    *
    * @return File
    */
    public function setMimeType($val)
    {
        $this->_propDict["mimeType"] = $val;
        return $this;
    }
    /**
    * Gets the processingMetadata
    *
    * @return bool The processingMetadata
    */
    public function getProcessingMetadata()
    {
        if (array_key_exists("processingMetadata", $this->_propDict)) {
            return $this->_propDict["processingMetadata"];
        } else {
            return null;
        }
    }

    /**
    * Sets the processingMetadata
    *
    * @param bool $val The value of the processingMetadata
    *
    * @return File
    */
    public function setProcessingMetadata($val)
    {
        $this->_propDict["processingMetadata"] = $val;
        return $this;
    }
}
