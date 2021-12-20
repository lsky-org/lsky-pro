<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MimeContent File
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
* MimeContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MimeContent extends Entity
{
    /**
    * Gets the type
    * Indicates the content mime type.
    *
    * @return string The type
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
    * Indicates the content mime type.
    *
    * @param string $val The value of the type
    *
    * @return MimeContent
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The byte array that contains the actual content.
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
    * The byte array that contains the actual content.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the value
    *
    * @return MimeContent The MimeContent
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
