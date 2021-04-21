<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileEncryptionInfo File
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
* FileEncryptionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileEncryptionInfo extends Entity
{

    /**
    * Gets the encryptionKey
    * The key used to encrypt the file content.
    *
    * @return \GuzzleHttp\Psr7\Stream The encryptionKey
    */
    public function getEncryptionKey()
    {
        if (array_key_exists("encryptionKey", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionKey"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["encryptionKey"];
            } else {
                $this->_propDict["encryptionKey"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["encryptionKey"]);
                return $this->_propDict["encryptionKey"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptionKey
    * The key used to encrypt the file content.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the encryptionKey
    *
    * @return FileEncryptionInfo The FileEncryptionInfo
    */
    public function setEncryptionKey($val)
    {
        $this->_propDict["encryptionKey"] = $val;
         return $this;
    }

    /**
    * Gets the fileDigest
    * The file digest prior to encryption.
    *
    * @return \GuzzleHttp\Psr7\Stream The fileDigest
    */
    public function getFileDigest()
    {
        if (array_key_exists("fileDigest", $this->_propDict)) {
            if (is_a($this->_propDict["fileDigest"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["fileDigest"];
            } else {
                $this->_propDict["fileDigest"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["fileDigest"]);
                return $this->_propDict["fileDigest"];
            }
        }
        return null;
    }

    /**
    * Sets the fileDigest
    * The file digest prior to encryption.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the fileDigest
    *
    * @return FileEncryptionInfo The FileEncryptionInfo
    */
    public function setFileDigest($val)
    {
        $this->_propDict["fileDigest"] = $val;
         return $this;
    }
    /**
    * Gets the fileDigestAlgorithm
    * The file digest algorithm.
    *
    * @return string The fileDigestAlgorithm
    */
    public function getFileDigestAlgorithm()
    {
        if (array_key_exists("fileDigestAlgorithm", $this->_propDict)) {
            return $this->_propDict["fileDigestAlgorithm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileDigestAlgorithm
    * The file digest algorithm.
    *
    * @param string $val The value of the fileDigestAlgorithm
    *
    * @return FileEncryptionInfo
    */
    public function setFileDigestAlgorithm($val)
    {
        $this->_propDict["fileDigestAlgorithm"] = $val;
        return $this;
    }

    /**
    * Gets the initializationVector
    * The initialization vector used for the encryption algorithm.
    *
    * @return \GuzzleHttp\Psr7\Stream The initializationVector
    */
    public function getInitializationVector()
    {
        if (array_key_exists("initializationVector", $this->_propDict)) {
            if (is_a($this->_propDict["initializationVector"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["initializationVector"];
            } else {
                $this->_propDict["initializationVector"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["initializationVector"]);
                return $this->_propDict["initializationVector"];
            }
        }
        return null;
    }

    /**
    * Sets the initializationVector
    * The initialization vector used for the encryption algorithm.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the initializationVector
    *
    * @return FileEncryptionInfo The FileEncryptionInfo
    */
    public function setInitializationVector($val)
    {
        $this->_propDict["initializationVector"] = $val;
         return $this;
    }

    /**
    * Gets the mac
    * The hash of the encrypted file content + IV (content hash).
    *
    * @return \GuzzleHttp\Psr7\Stream The mac
    */
    public function getMac()
    {
        if (array_key_exists("mac", $this->_propDict)) {
            if (is_a($this->_propDict["mac"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["mac"];
            } else {
                $this->_propDict["mac"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["mac"]);
                return $this->_propDict["mac"];
            }
        }
        return null;
    }

    /**
    * Sets the mac
    * The hash of the encrypted file content + IV (content hash).
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the mac
    *
    * @return FileEncryptionInfo The FileEncryptionInfo
    */
    public function setMac($val)
    {
        $this->_propDict["mac"] = $val;
         return $this;
    }

    /**
    * Gets the macKey
    * The key used to get mac.
    *
    * @return \GuzzleHttp\Psr7\Stream The macKey
    */
    public function getMacKey()
    {
        if (array_key_exists("macKey", $this->_propDict)) {
            if (is_a($this->_propDict["macKey"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["macKey"];
            } else {
                $this->_propDict["macKey"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["macKey"]);
                return $this->_propDict["macKey"];
            }
        }
        return null;
    }

    /**
    * Sets the macKey
    * The key used to get mac.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the macKey
    *
    * @return FileEncryptionInfo The FileEncryptionInfo
    */
    public function setMacKey($val)
    {
        $this->_propDict["macKey"] = $val;
         return $this;
    }
    /**
    * Gets the profileIdentifier
    * The the profile identifier.
    *
    * @return string The profileIdentifier
    */
    public function getProfileIdentifier()
    {
        if (array_key_exists("profileIdentifier", $this->_propDict)) {
            return $this->_propDict["profileIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileIdentifier
    * The the profile identifier.
    *
    * @param string $val The value of the profileIdentifier
    *
    * @return FileEncryptionInfo
    */
    public function setProfileIdentifier($val)
    {
        $this->_propDict["profileIdentifier"] = $val;
        return $this;
    }
}
