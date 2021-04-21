<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Audio File
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
* Audio class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Audio extends Entity
{
    /**
    * Gets the album
    * The title of the album for this audio file.
    *
    * @return string The album
    */
    public function getAlbum()
    {
        if (array_key_exists("album", $this->_propDict)) {
            return $this->_propDict["album"];
        } else {
            return null;
        }
    }

    /**
    * Sets the album
    * The title of the album for this audio file.
    *
    * @param string $val The value of the album
    *
    * @return Audio
    */
    public function setAlbum($val)
    {
        $this->_propDict["album"] = $val;
        return $this;
    }
    /**
    * Gets the albumArtist
    * The artist named on the album for the audio file.
    *
    * @return string The albumArtist
    */
    public function getAlbumArtist()
    {
        if (array_key_exists("albumArtist", $this->_propDict)) {
            return $this->_propDict["albumArtist"];
        } else {
            return null;
        }
    }

    /**
    * Sets the albumArtist
    * The artist named on the album for the audio file.
    *
    * @param string $val The value of the albumArtist
    *
    * @return Audio
    */
    public function setAlbumArtist($val)
    {
        $this->_propDict["albumArtist"] = $val;
        return $this;
    }
    /**
    * Gets the artist
    * The performing artist for the audio file.
    *
    * @return string The artist
    */
    public function getArtist()
    {
        if (array_key_exists("artist", $this->_propDict)) {
            return $this->_propDict["artist"];
        } else {
            return null;
        }
    }

    /**
    * Sets the artist
    * The performing artist for the audio file.
    *
    * @param string $val The value of the artist
    *
    * @return Audio
    */
    public function setArtist($val)
    {
        $this->_propDict["artist"] = $val;
        return $this;
    }
    /**
    * Gets the bitrate
    * Bitrate expressed in kbps.
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
    * Bitrate expressed in kbps.
    *
    * @param int $val The value of the bitrate
    *
    * @return Audio
    */
    public function setBitrate($val)
    {
        $this->_propDict["bitrate"] = $val;
        return $this;
    }
    /**
    * Gets the composers
    * The name of the composer of the audio file.
    *
    * @return string The composers
    */
    public function getComposers()
    {
        if (array_key_exists("composers", $this->_propDict)) {
            return $this->_propDict["composers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the composers
    * The name of the composer of the audio file.
    *
    * @param string $val The value of the composers
    *
    * @return Audio
    */
    public function setComposers($val)
    {
        $this->_propDict["composers"] = $val;
        return $this;
    }
    /**
    * Gets the copyright
    * Copyright information for the audio file.
    *
    * @return string The copyright
    */
    public function getCopyright()
    {
        if (array_key_exists("copyright", $this->_propDict)) {
            return $this->_propDict["copyright"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copyright
    * Copyright information for the audio file.
    *
    * @param string $val The value of the copyright
    *
    * @return Audio
    */
    public function setCopyright($val)
    {
        $this->_propDict["copyright"] = $val;
        return $this;
    }
    /**
    * Gets the disc
    * The number of the disc this audio file came from.
    *
    * @return int The disc
    */
    public function getDisc()
    {
        if (array_key_exists("disc", $this->_propDict)) {
            return $this->_propDict["disc"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disc
    * The number of the disc this audio file came from.
    *
    * @param int $val The value of the disc
    *
    * @return Audio
    */
    public function setDisc($val)
    {
        $this->_propDict["disc"] = $val;
        return $this;
    }
    /**
    * Gets the discCount
    * The total number of discs in this album.
    *
    * @return int The discCount
    */
    public function getDiscCount()
    {
        if (array_key_exists("discCount", $this->_propDict)) {
            return $this->_propDict["discCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the discCount
    * The total number of discs in this album.
    *
    * @param int $val The value of the discCount
    *
    * @return Audio
    */
    public function setDiscCount($val)
    {
        $this->_propDict["discCount"] = $val;
        return $this;
    }
    /**
    * Gets the duration
    * Duration of the audio file, expressed in milliseconds
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
    * Duration of the audio file, expressed in milliseconds
    *
    * @param int $val The value of the duration
    *
    * @return Audio
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    /**
    * Gets the genre
    * The genre of this audio file.
    *
    * @return string The genre
    */
    public function getGenre()
    {
        if (array_key_exists("genre", $this->_propDict)) {
            return $this->_propDict["genre"];
        } else {
            return null;
        }
    }

    /**
    * Sets the genre
    * The genre of this audio file.
    *
    * @param string $val The value of the genre
    *
    * @return Audio
    */
    public function setGenre($val)
    {
        $this->_propDict["genre"] = $val;
        return $this;
    }
    /**
    * Gets the hasDrm
    * Indicates if the file is protected with digital rights management.
    *
    * @return bool The hasDrm
    */
    public function getHasDrm()
    {
        if (array_key_exists("hasDrm", $this->_propDict)) {
            return $this->_propDict["hasDrm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasDrm
    * Indicates if the file is protected with digital rights management.
    *
    * @param bool $val The value of the hasDrm
    *
    * @return Audio
    */
    public function setHasDrm($val)
    {
        $this->_propDict["hasDrm"] = $val;
        return $this;
    }
    /**
    * Gets the isVariableBitrate
    * Indicates if the file is encoded with a variable bitrate.
    *
    * @return bool The isVariableBitrate
    */
    public function getIsVariableBitrate()
    {
        if (array_key_exists("isVariableBitrate", $this->_propDict)) {
            return $this->_propDict["isVariableBitrate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isVariableBitrate
    * Indicates if the file is encoded with a variable bitrate.
    *
    * @param bool $val The value of the isVariableBitrate
    *
    * @return Audio
    */
    public function setIsVariableBitrate($val)
    {
        $this->_propDict["isVariableBitrate"] = $val;
        return $this;
    }
    /**
    * Gets the title
    * The title of the audio file.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }

    /**
    * Sets the title
    * The title of the audio file.
    *
    * @param string $val The value of the title
    *
    * @return Audio
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    /**
    * Gets the track
    * The number of the track on the original disc for this audio file.
    *
    * @return int The track
    */
    public function getTrack()
    {
        if (array_key_exists("track", $this->_propDict)) {
            return $this->_propDict["track"];
        } else {
            return null;
        }
    }

    /**
    * Sets the track
    * The number of the track on the original disc for this audio file.
    *
    * @param int $val The value of the track
    *
    * @return Audio
    */
    public function setTrack($val)
    {
        $this->_propDict["track"] = $val;
        return $this;
    }
    /**
    * Gets the trackCount
    * The total number of tracks on the original disc for this audio file.
    *
    * @return int The trackCount
    */
    public function getTrackCount()
    {
        if (array_key_exists("trackCount", $this->_propDict)) {
            return $this->_propDict["trackCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackCount
    * The total number of tracks on the original disc for this audio file.
    *
    * @param int $val The value of the trackCount
    *
    * @return Audio
    */
    public function setTrackCount($val)
    {
        $this->_propDict["trackCount"] = $val;
        return $this;
    }
    /**
    * Gets the year
    * The year the audio file was recorded.
    *
    * @return int The year
    */
    public function getYear()
    {
        if (array_key_exists("year", $this->_propDict)) {
            return $this->_propDict["year"];
        } else {
            return null;
        }
    }

    /**
    * Sets the year
    * The year the audio file was recorded.
    *
    * @param int $val The value of the year
    *
    * @return Audio
    */
    public function setYear($val)
    {
        $this->_propDict["year"] = $val;
        return $this;
    }
}
