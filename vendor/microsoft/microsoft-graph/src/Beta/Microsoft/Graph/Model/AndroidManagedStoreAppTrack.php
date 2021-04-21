<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppTrack File
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
* AndroidManagedStoreAppTrack class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppTrack extends Entity
{
    /**
    * Gets the trackAlias
    * Friendly name for track.
    *
    * @return string The trackAlias
    */
    public function getTrackAlias()
    {
        if (array_key_exists("trackAlias", $this->_propDict)) {
            return $this->_propDict["trackAlias"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackAlias
    * Friendly name for track.
    *
    * @param string $val The value of the trackAlias
    *
    * @return AndroidManagedStoreAppTrack
    */
    public function setTrackAlias($val)
    {
        $this->_propDict["trackAlias"] = $val;
        return $this;
    }
    /**
    * Gets the trackId
    * Unique track identifier.
    *
    * @return string The trackId
    */
    public function getTrackId()
    {
        if (array_key_exists("trackId", $this->_propDict)) {
            return $this->_propDict["trackId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the trackId
    * Unique track identifier.
    *
    * @param string $val The value of the trackId
    *
    * @return AndroidManagedStoreAppTrack
    */
    public function setTrackId($val)
    {
        $this->_propDict["trackId"] = $val;
        return $this;
    }
}
