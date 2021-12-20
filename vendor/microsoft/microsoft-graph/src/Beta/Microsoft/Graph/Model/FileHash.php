<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileHash File
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
* FileHash class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileHash extends Entity
{

    /**
    * Gets the hashType
    * File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
    *
    * @return FileHashType The hashType
    */
    public function getHashType()
    {
        if (array_key_exists("hashType", $this->_propDict)) {
            if (is_a($this->_propDict["hashType"], "\Beta\Microsoft\Graph\Model\FileHashType")) {
                return $this->_propDict["hashType"];
            } else {
                $this->_propDict["hashType"] = new FileHashType($this->_propDict["hashType"]);
                return $this->_propDict["hashType"];
            }
        }
        return null;
    }

    /**
    * Sets the hashType
    * File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
    *
    * @param FileHashType $val The value to assign to the hashType
    *
    * @return FileHash The FileHash
    */
    public function setHashType($val)
    {
        $this->_propDict["hashType"] = $val;
         return $this;
    }
    /**
    * Gets the hashValue
    * Value of the file hash.
    *
    * @return string The hashValue
    */
    public function getHashValue()
    {
        if (array_key_exists("hashValue", $this->_propDict)) {
            return $this->_propDict["hashValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hashValue
    * Value of the file hash.
    *
    * @param string $val The value of the hashValue
    *
    * @return FileHash
    */
    public function setHashValue($val)
    {
        $this->_propDict["hashValue"] = $val;
        return $this;
    }
}
