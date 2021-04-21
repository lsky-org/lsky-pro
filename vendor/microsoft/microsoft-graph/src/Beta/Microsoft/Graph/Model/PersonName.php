<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonName File
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
* PersonName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonName extends ItemFacet
{
    /**
    * Gets the displayName
    * Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
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
    * Provides an ordered rendering of firstName and lastName depending on the locale of the user or their device.
    *
    * @param string $val The displayName
    *
    * @return PersonName
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the first
    * First name of the user.
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
    * First name of the user.
    *
    * @param string $val The first
    *
    * @return PersonName
    */
    public function setFirst($val)
    {
        $this->_propDict["first"] = $val;
        return $this;
    }
    
    /**
    * Gets the initials
    * Initials of the user.
    *
    * @return string The initials
    */
    public function getInitials()
    {
        if (array_key_exists("initials", $this->_propDict)) {
            return $this->_propDict["initials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initials
    * Initials of the user.
    *
    * @param string $val The initials
    *
    * @return PersonName
    */
    public function setInitials($val)
    {
        $this->_propDict["initials"] = $val;
        return $this;
    }
    
    /**
    * Gets the languageTag
    * Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
    *
    * @return string The languageTag
    */
    public function getLanguageTag()
    {
        if (array_key_exists("languageTag", $this->_propDict)) {
            return $this->_propDict["languageTag"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the languageTag
    * Contains the name for the language (en-US, no-NB, en-AU) following IETF BCP47 format.
    *
    * @param string $val The languageTag
    *
    * @return PersonName
    */
    public function setLanguageTag($val)
    {
        $this->_propDict["languageTag"] = $val;
        return $this;
    }
    
    /**
    * Gets the last
    * Last name of the user.
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
    * Last name of the user.
    *
    * @param string $val The last
    *
    * @return PersonName
    */
    public function setLast($val)
    {
        $this->_propDict["last"] = $val;
        return $this;
    }
    
    /**
    * Gets the maiden
    * Maiden name of the user.
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
    * Maiden name of the user.
    *
    * @param string $val The maiden
    *
    * @return PersonName
    */
    public function setMaiden($val)
    {
        $this->_propDict["maiden"] = $val;
        return $this;
    }
    
    /**
    * Gets the middle
    * Middle name of the user.
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
    * Middle name of the user.
    *
    * @param string $val The middle
    *
    * @return PersonName
    */
    public function setMiddle($val)
    {
        $this->_propDict["middle"] = $val;
        return $this;
    }
    
    /**
    * Gets the nickname
    * Nickname of the user.
    *
    * @return string The nickname
    */
    public function getNickname()
    {
        if (array_key_exists("nickname", $this->_propDict)) {
            return $this->_propDict["nickname"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nickname
    * Nickname of the user.
    *
    * @param string $val The nickname
    *
    * @return PersonName
    */
    public function setNickname($val)
    {
        $this->_propDict["nickname"] = $val;
        return $this;
    }
    
    /**
    * Gets the pronunciation
    * Guidance on how to pronounce the users name.
    *
    * @return PersonNamePronounciation The pronunciation
    */
    public function getPronunciation()
    {
        if (array_key_exists("pronunciation", $this->_propDict)) {
            if (is_a($this->_propDict["pronunciation"], "\Beta\Microsoft\Graph\Model\PersonNamePronounciation")) {
                return $this->_propDict["pronunciation"];
            } else {
                $this->_propDict["pronunciation"] = new PersonNamePronounciation($this->_propDict["pronunciation"]);
                return $this->_propDict["pronunciation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the pronunciation
    * Guidance on how to pronounce the users name.
    *
    * @param PersonNamePronounciation $val The pronunciation
    *
    * @return PersonName
    */
    public function setPronunciation($val)
    {
        $this->_propDict["pronunciation"] = $val;
        return $this;
    }
    
    /**
    * Gets the suffix
    * Designators used after the users name (eg: PhD.)
    *
    * @return string The suffix
    */
    public function getSuffix()
    {
        if (array_key_exists("suffix", $this->_propDict)) {
            return $this->_propDict["suffix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the suffix
    * Designators used after the users name (eg: PhD.)
    *
    * @param string $val The suffix
    *
    * @return PersonName
    */
    public function setSuffix($val)
    {
        $this->_propDict["suffix"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
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
    * Honorifics used to prefix a users name (eg: Dr, Sir, Madam, Mrs.)
    *
    * @param string $val The title
    *
    * @return PersonName
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
}
