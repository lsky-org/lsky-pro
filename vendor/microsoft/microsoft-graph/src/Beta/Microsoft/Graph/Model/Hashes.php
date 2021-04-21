<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Hashes File
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
* Hashes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Hashes extends Entity
{
    /**
    * Gets the crc32Hash
    * The CRC32 value of the file (if available). Read-only.
    *
    * @return string The crc32Hash
    */
    public function getCrc32Hash()
    {
        if (array_key_exists("crc32Hash", $this->_propDict)) {
            return $this->_propDict["crc32Hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the crc32Hash
    * The CRC32 value of the file (if available). Read-only.
    *
    * @param string $val The value of the crc32Hash
    *
    * @return Hashes
    */
    public function setCrc32Hash($val)
    {
        $this->_propDict["crc32Hash"] = $val;
        return $this;
    }
    /**
    * Gets the quickXorHash
    * A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
    *
    * @return string The quickXorHash
    */
    public function getQuickXorHash()
    {
        if (array_key_exists("quickXorHash", $this->_propDict)) {
            return $this->_propDict["quickXorHash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the quickXorHash
    * A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
    *
    * @param string $val The value of the quickXorHash
    *
    * @return Hashes
    */
    public function setQuickXorHash($val)
    {
        $this->_propDict["quickXorHash"] = $val;
        return $this;
    }
    /**
    * Gets the sha1Hash
    * SHA1 hash for the contents of the file (if available). Read-only.
    *
    * @return string The sha1Hash
    */
    public function getSha1Hash()
    {
        if (array_key_exists("sha1Hash", $this->_propDict)) {
            return $this->_propDict["sha1Hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha1Hash
    * SHA1 hash for the contents of the file (if available). Read-only.
    *
    * @param string $val The value of the sha1Hash
    *
    * @return Hashes
    */
    public function setSha1Hash($val)
    {
        $this->_propDict["sha1Hash"] = $val;
        return $this;
    }
    /**
    * Gets the sha256Hash
    * SHA256 hash for the contents of the file (if available). Read-only.
    *
    * @return string The sha256Hash
    */
    public function getSha256Hash()
    {
        if (array_key_exists("sha256Hash", $this->_propDict)) {
            return $this->_propDict["sha256Hash"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sha256Hash
    * SHA256 hash for the contents of the file (if available). Read-only.
    *
    * @param string $val The value of the sha256Hash
    *
    * @return Hashes
    */
    public function setSha256Hash($val)
    {
        $this->_propDict["sha256Hash"] = $val;
        return $this;
    }
}
