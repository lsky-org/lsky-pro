<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Video File
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
* Video class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Video extends Entity
{
    /**
    * Gets the audioBitsPerSample
    * Number of audio bits per sample.
    *
    * @return int The audioBitsPerSample
    */
    public function getAudioBitsPerSample()
    {
        if (array_key_exists("audioBitsPerSample", $this->_propDict)) {
            return $this->_propDict["audioBitsPerSample"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audioBitsPerSample
    * Number of audio bits per sample.
    *
    * @param int $val The value of the audioBitsPerSample
    *
    * @return Video
    */
    public function setAudioBitsPerSample($val)
    {
        $this->_propDict["audioBitsPerSample"] = $val;
        return $this;
    }
    /**
    * Gets the audioChannels
    * Number of audio channels.
    *
    * @return int The audioChannels
    */
    public function getAudioChannels()
    {
        if (array_key_exists("audioChannels", $this->_propDict)) {
            return $this->_propDict["audioChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audioChannels
    * Number of audio channels.
    *
    * @param int $val The value of the audioChannels
    *
    * @return Video
    */
    public function setAudioChannels($val)
    {
        $this->_propDict["audioChannels"] = $val;
        return $this;
    }
    /**
    * Gets the audioFormat
    * Name of the audio format (AAC, MP3, etc.).
    *
    * @return string The audioFormat
    */
    public function getAudioFormat()
    {
        if (array_key_exists("audioFormat", $this->_propDict)) {
            return $this->_propDict["audioFormat"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audioFormat
    * Name of the audio format (AAC, MP3, etc.).
    *
    * @param string $val The value of the audioFormat
    *
    * @return Video
    */
    public function setAudioFormat($val)
    {
        $this->_propDict["audioFormat"] = $val;
        return $this;
    }
    /**
    * Gets the audioSamplesPerSecond
    * Number of audio samples per second.
    *
    * @return int The audioSamplesPerSecond
    */
    public function getAudioSamplesPerSecond()
    {
        if (array_key_exists("audioSamplesPerSecond", $this->_propDict)) {
            return $this->_propDict["audioSamplesPerSecond"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audioSamplesPerSecond
    * Number of audio samples per second.
    *
    * @param int $val The value of the audioSamplesPerSecond
    *
    * @return Video
    */
    public function setAudioSamplesPerSecond($val)
    {
        $this->_propDict["audioSamplesPerSecond"] = $val;
        return $this;
    }
    /**
    * Gets the bitrate
    * Bit rate of the video in bits per second.
    *
    * @return int The bitrate
    */
    public function getBitrate()
    {
        if (array_key_exists("bitrate", $this->_propDict)) {
            return $this->_propDict["bitrate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bitrate
    * Bit rate of the video in bits per second.
    *
    * @param int $val The value of the bitrate
    *
    * @return Video
    */
    public function setBitrate($val)
    {
        $this->_propDict["bitrate"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    * Duration of the file in milliseconds.
    *
    * @return int The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the duration
    * Duration of the file in milliseconds.
    *
    * @param int $val The value of the duration
    *
    * @return Video
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    /**
    * Gets the fourCC
    * 'Four character code' name of the video format.
    *
    * @return string The fourCC
    */
    public function getFourCC()
    {
        if (array_key_exists("fourCC", $this->_propDict)) {
            return $this->_propDict["fourCC"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fourCC
    * 'Four character code' name of the video format.
    *
    * @param string $val The value of the fourCC
    *
    * @return Video
    */
    public function setFourCC($val)
    {
        $this->_propDict["fourCC"] = $val;
        return $this;
    }
    /**
    * Gets the frameRate
    * Frame rate of the video.
    *
    * @return float The frameRate
    */
    public function getFrameRate()
    {
        if (array_key_exists("frameRate", $this->_propDict)) {
            return $this->_propDict["frameRate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the frameRate
    * Frame rate of the video.
    *
    * @param float $val The value of the frameRate
    *
    * @return Video
    */
    public function setFrameRate($val)
    {
        $this->_propDict["frameRate"] = $val;
        return $this;
    }
    /**
    * Gets the height
    * Height of the video, in pixels.
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }

    /**
    * Sets the height
    * Height of the video, in pixels.
    *
    * @param int $val The value of the height
    *
    * @return Video
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    /**
    * Gets the width
    * Width of the video, in pixels.
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    * Width of the video, in pixels.
    *
    * @param int $val The value of the width
    *
    * @return Video
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
}
