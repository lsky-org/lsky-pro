<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentInfo File
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
* ContentInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentInfo extends Entity
{

    /**
    * Gets the format
    * Possible values are: default, email.
    *
    * @return ContentFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\ContentFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new ContentFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }

    /**
    * Sets the format
    * Possible values are: default, email.
    *
    * @param ContentFormat $val The value to assign to the format
    *
    * @return ContentInfo The ContentInfo
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
         return $this;
    }
    /**
    * Gets the identifier
    * Identifier used for Azure Information Protection Analytics.
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    * Identifier used for Azure Information Protection Analytics.
    *
    * @param string $val The value of the identifier
    *
    * @return ContentInfo
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    * Existing Microsoft Information Protection metadata is passed as key/value pairs, where the key is the MSIP_Label_GUID_PropName.
    *
    * @return KeyValuePair The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new KeyValuePair($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    * Existing Microsoft Information Protection metadata is passed as key/value pairs, where the key is the MSIP_Label_GUID_PropName.
    *
    * @param KeyValuePair $val The value to assign to the metadata
    *
    * @return ContentInfo The ContentInfo
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Possible values are: rest, motion, use.
    *
    * @return ContentState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ContentState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ContentState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Possible values are: rest, motion, use.
    *
    * @param ContentState $val The value to assign to the state
    *
    * @return ContentInfo The ContentInfo
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }
}
