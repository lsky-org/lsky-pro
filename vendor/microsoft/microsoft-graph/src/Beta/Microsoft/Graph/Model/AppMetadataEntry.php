<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppMetadataEntry File
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
* AppMetadataEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppMetadataEntry extends Entity
{
    /**
    * Gets the key
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    *
    * @param string $val The value of the key
    *
    * @return AppMetadataEntry
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }

    /**
    * Gets the value
    *
    * @return \GuzzleHttp\Psr7\Stream The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the value
    *
    * @return AppMetadataEntry The AppMetadataEntry
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
