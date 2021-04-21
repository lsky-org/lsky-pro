<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BufferEncryptionResult File
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
* BufferEncryptionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BufferEncryptionResult extends Entity
{

    /**
    * Gets the encryptedBuffer
    *
    * @return \GuzzleHttp\Psr7\Stream The encryptedBuffer
    */
    public function getEncryptedBuffer()
    {
        if (array_key_exists("encryptedBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["encryptedBuffer"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["encryptedBuffer"];
            } else {
                $this->_propDict["encryptedBuffer"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["encryptedBuffer"]);
                return $this->_propDict["encryptedBuffer"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptedBuffer
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the encryptedBuffer
    *
    * @return BufferEncryptionResult The BufferEncryptionResult
    */
    public function setEncryptedBuffer($val)
    {
        $this->_propDict["encryptedBuffer"] = $val;
         return $this;
    }

    /**
    * Gets the publishingLicense
    *
    * @return \GuzzleHttp\Psr7\Stream The publishingLicense
    */
    public function getPublishingLicense()
    {
        if (array_key_exists("publishingLicense", $this->_propDict)) {
            if (is_a($this->_propDict["publishingLicense"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["publishingLicense"];
            } else {
                $this->_propDict["publishingLicense"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["publishingLicense"]);
                return $this->_propDict["publishingLicense"];
            }
        }
        return null;
    }

    /**
    * Sets the publishingLicense
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the publishingLicense
    *
    * @return BufferEncryptionResult The BufferEncryptionResult
    */
    public function setPublishingLicense($val)
    {
        $this->_propDict["publishingLicense"] = $val;
         return $this;
    }
}
