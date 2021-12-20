<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlternativeSecurityId File
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
* AlternativeSecurityId class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlternativeSecurityId extends Entity
{
    /**
    * Gets the identityProvider
    * For internal use only
    *
    * @return string The identityProvider
    */
    public function getIdentityProvider()
    {
        if (array_key_exists("identityProvider", $this->_propDict)) {
            return $this->_propDict["identityProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityProvider
    * For internal use only
    *
    * @param string $val The value of the identityProvider
    *
    * @return AlternativeSecurityId
    */
    public function setIdentityProvider($val)
    {
        $this->_propDict["identityProvider"] = $val;
        return $this;
    }

    /**
    * Gets the key
    * For internal use only
    *
    * @return \GuzzleHttp\Psr7\Stream The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    * For internal use only
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the key
    *
    * @return AlternativeSecurityId The AlternativeSecurityId
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * For internal use only
    *
    * @return int The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * For internal use only
    *
    * @param int $val The value of the type
    *
    * @return AlternativeSecurityId
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
