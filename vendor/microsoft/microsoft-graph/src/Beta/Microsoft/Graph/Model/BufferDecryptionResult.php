<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BufferDecryptionResult File
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
* BufferDecryptionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BufferDecryptionResult extends Entity
{

    /**
    * Gets the decryptedBuffer
    *
    * @return \GuzzleHttp\Psr7\Stream The decryptedBuffer
    */
    public function getDecryptedBuffer()
    {
        if (array_key_exists("decryptedBuffer", $this->_propDict)) {
            if (is_a($this->_propDict["decryptedBuffer"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["decryptedBuffer"];
            } else {
                $this->_propDict["decryptedBuffer"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["decryptedBuffer"]);
                return $this->_propDict["decryptedBuffer"];
            }
        }
        return null;
    }

    /**
    * Sets the decryptedBuffer
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the decryptedBuffer
    *
    * @return BufferDecryptionResult The BufferDecryptionResult
    */
    public function setDecryptedBuffer($val)
    {
        $this->_propDict["decryptedBuffer"] = $val;
         return $this;
    }
}
