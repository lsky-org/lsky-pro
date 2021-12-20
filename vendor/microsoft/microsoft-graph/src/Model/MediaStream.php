<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaStream File
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
* MediaStream class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaStream extends Entity
{

    /**
    * Gets the direction
    * The direction. The possible values are inactive, sendOnly, receiveOnly, sendReceive.
    *
    * @return MediaDirection The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "\Microsoft\Graph\Model\MediaDirection")) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new MediaDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    * The direction. The possible values are inactive, sendOnly, receiveOnly, sendReceive.
    *
    * @param MediaDirection $val The value to assign to the direction
    *
    * @return MediaStream The MediaStream
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
         return $this;
    }
    /**
    * Gets the label
    * The media stream label.
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    * The media stream label.
    *
    * @param string $val The value of the label
    *
    * @return MediaStream
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }

    /**
    * Gets the mediaType
    * The media type. The possible value are unknown, audio, video, videoBasedScreenSharing, data.
    *
    * @return Modality The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            if (is_a($this->_propDict["mediaType"], "\Microsoft\Graph\Model\Modality")) {
                return $this->_propDict["mediaType"];
            } else {
                $this->_propDict["mediaType"] = new Modality($this->_propDict["mediaType"]);
                return $this->_propDict["mediaType"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaType
    * The media type. The possible value are unknown, audio, video, videoBasedScreenSharing, data.
    *
    * @param Modality $val The value to assign to the mediaType
    *
    * @return MediaStream The MediaStream
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
         return $this;
    }
    /**
    * Gets the serverMuted
    * Indicates whether the media is muted by the server.
    *
    * @return bool The serverMuted
    */
    public function getServerMuted()
    {
        if (array_key_exists("serverMuted", $this->_propDict)) {
            return $this->_propDict["serverMuted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serverMuted
    * Indicates whether the media is muted by the server.
    *
    * @param bool $val The value of the serverMuted
    *
    * @return MediaStream
    */
    public function setServerMuted($val)
    {
        $this->_propDict["serverMuted"] = $val;
        return $this;
    }
    /**
    * Gets the sourceId
    * The source ID.
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    * The source ID.
    *
    * @param string $val The value of the sourceId
    *
    * @return MediaStream
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
}
