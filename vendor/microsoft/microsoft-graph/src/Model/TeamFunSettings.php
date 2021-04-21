<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamFunSettings File
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
* TeamFunSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamFunSettings extends Entity
{
    /**
    * Gets the allowCustomMemes
    * If set to true, enables users to include custom memes.
    *
    * @return bool The allowCustomMemes
    */
    public function getAllowCustomMemes()
    {
        if (array_key_exists("allowCustomMemes", $this->_propDict)) {
            return $this->_propDict["allowCustomMemes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCustomMemes
    * If set to true, enables users to include custom memes.
    *
    * @param bool $val The value of the allowCustomMemes
    *
    * @return TeamFunSettings
    */
    public function setAllowCustomMemes($val)
    {
        $this->_propDict["allowCustomMemes"] = $val;
        return $this;
    }
    /**
    * Gets the allowGiphy
    * If set to true, enables Giphy use.
    *
    * @return bool The allowGiphy
    */
    public function getAllowGiphy()
    {
        if (array_key_exists("allowGiphy", $this->_propDict)) {
            return $this->_propDict["allowGiphy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowGiphy
    * If set to true, enables Giphy use.
    *
    * @param bool $val The value of the allowGiphy
    *
    * @return TeamFunSettings
    */
    public function setAllowGiphy($val)
    {
        $this->_propDict["allowGiphy"] = $val;
        return $this;
    }
    /**
    * Gets the allowStickersAndMemes
    * If set to true, enables users to include stickers and memes.
    *
    * @return bool The allowStickersAndMemes
    */
    public function getAllowStickersAndMemes()
    {
        if (array_key_exists("allowStickersAndMemes", $this->_propDict)) {
            return $this->_propDict["allowStickersAndMemes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowStickersAndMemes
    * If set to true, enables users to include stickers and memes.
    *
    * @param bool $val The value of the allowStickersAndMemes
    *
    * @return TeamFunSettings
    */
    public function setAllowStickersAndMemes($val)
    {
        $this->_propDict["allowStickersAndMemes"] = $val;
        return $this;
    }

    /**
    * Gets the giphyContentRating
    * Giphy content rating. Possible values are: moderate, strict.
    *
    * @return GiphyRatingType The giphyContentRating
    */
    public function getGiphyContentRating()
    {
        if (array_key_exists("giphyContentRating", $this->_propDict)) {
            if (is_a($this->_propDict["giphyContentRating"], "\Microsoft\Graph\Model\GiphyRatingType")) {
                return $this->_propDict["giphyContentRating"];
            } else {
                $this->_propDict["giphyContentRating"] = new GiphyRatingType($this->_propDict["giphyContentRating"]);
                return $this->_propDict["giphyContentRating"];
            }
        }
        return null;
    }

    /**
    * Sets the giphyContentRating
    * Giphy content rating. Possible values are: moderate, strict.
    *
    * @param GiphyRatingType $val The value to assign to the giphyContentRating
    *
    * @return TeamFunSettings The TeamFunSettings
    */
    public function setGiphyContentRating($val)
    {
        $this->_propDict["giphyContentRating"] = $val;
         return $this;
    }
}
