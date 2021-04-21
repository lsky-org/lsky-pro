<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaInfo File
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
* MediaInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaInfo extends Entity
{
    /**
    * Gets the resourceId
    * Optional, used to uniquely identity the resource. If passed the prompt uri will be cached against this resourceId as key.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceId
    * Optional, used to uniquely identity the resource. If passed the prompt uri will be cached against this resourceId as key.
    *
    * @param string $val The value of the resourceId
    *
    * @return MediaInfo
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    /**
    * Gets the uri
    * Path to the prompt to be played. Currently only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16KHz) sampling rate is only supported.
    *
    * @return string The uri
    */
    public function getUri()
    {
        if (array_key_exists("uri", $this->_propDict)) {
            return $this->_propDict["uri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uri
    * Path to the prompt to be played. Currently only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16KHz) sampling rate is only supported.
    *
    * @param string $val The value of the uri
    *
    * @return MediaInfo
    */
    public function setUri($val)
    {
        $this->_propDict["uri"] = $val;
        return $this;
    }
}
