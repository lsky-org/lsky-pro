<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Bundle File
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
* Bundle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Bundle extends Entity
{

    /**
    * Gets the album
    * If the bundle is an [album][], then the album property is included
    *
    * @return Album The album
    */
    public function getAlbum()
    {
        if (array_key_exists("album", $this->_propDict)) {
            if (is_a($this->_propDict["album"], "\Beta\Microsoft\Graph\Model\Album")) {
                return $this->_propDict["album"];
            } else {
                $this->_propDict["album"] = new Album($this->_propDict["album"]);
                return $this->_propDict["album"];
            }
        }
        return null;
    }

    /**
    * Sets the album
    * If the bundle is an [album][], then the album property is included
    *
    * @param Album $val The value to assign to the album
    *
    * @return Bundle The Bundle
    */
    public function setAlbum($val)
    {
        $this->_propDict["album"] = $val;
         return $this;
    }
    /**
    * Gets the childCount
    * Number of children contained immediately within this container.
    *
    * @return int The childCount
    */
    public function getChildCount()
    {
        if (array_key_exists("childCount", $this->_propDict)) {
            return $this->_propDict["childCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the childCount
    * Number of children contained immediately within this container.
    *
    * @param int $val The value of the childCount
    *
    * @return Bundle
    */
    public function setChildCount($val)
    {
        $this->_propDict["childCount"] = $val;
        return $this;
    }
}
