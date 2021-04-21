<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonNamePronounciation File
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
* PersonNamePronounciation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonNamePronounciation extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return PersonNamePronounciation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the first
    *
    * @return string The first
    */
    public function getFirst()
    {
        if (array_key_exists("first", $this->_propDict)) {
            return $this->_propDict["first"];
        } else {
            return null;
        }
    }

    /**
    * Sets the first
    *
    * @param string $val The value of the first
    *
    * @return PersonNamePronounciation
    */
    public function setFirst($val)
    {
        $this->_propDict["first"] = $val;
        return $this;
    }
    /**
    * Gets the last
    *
    * @return string The last
    */
    public function getLast()
    {
        if (array_key_exists("last", $this->_propDict)) {
            return $this->_propDict["last"];
        } else {
            return null;
        }
    }

    /**
    * Sets the last
    *
    * @param string $val The value of the last
    *
    * @return PersonNamePronounciation
    */
    public function setLast($val)
    {
        $this->_propDict["last"] = $val;
        return $this;
    }
    /**
    * Gets the maiden
    *
    * @return string The maiden
    */
    public function getMaiden()
    {
        if (array_key_exists("maiden", $this->_propDict)) {
            return $this->_propDict["maiden"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maiden
    *
    * @param string $val The value of the maiden
    *
    * @return PersonNamePronounciation
    */
    public function setMaiden($val)
    {
        $this->_propDict["maiden"] = $val;
        return $this;
    }
    /**
    * Gets the middle
    *
    * @return string The middle
    */
    public function getMiddle()
    {
        if (array_key_exists("middle", $this->_propDict)) {
            return $this->_propDict["middle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the middle
    *
    * @param string $val The value of the middle
    *
    * @return PersonNamePronounciation
    */
    public function setMiddle($val)
    {
        $this->_propDict["middle"] = $val;
        return $this;
    }
}
