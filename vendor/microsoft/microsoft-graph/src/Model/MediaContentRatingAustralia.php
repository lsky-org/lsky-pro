<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingAustralia File
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
* MediaContentRatingAustralia class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MediaContentRatingAustralia extends Entity
{

    /**
    * Gets the movieRating
    * Movies rating selected for Australia. Possible values are: allAllowed, allBlocked, general, parentalGuidance, mature, agesAbove15, agesAbove18.
    *
    * @return RatingAustraliaMoviesType The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "\Microsoft\Graph\Model\RatingAustraliaMoviesType")) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingAustraliaMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    * Movies rating selected for Australia. Possible values are: allAllowed, allBlocked, general, parentalGuidance, mature, agesAbove15, agesAbove18.
    *
    * @param RatingAustraliaMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingAustralia The MediaContentRatingAustralia
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    * TV rating selected for Australia. Possible values are: allAllowed, allBlocked, preschoolers, children, general, parentalGuidance, mature, agesAbove15, agesAbove15AdultViolence.
    *
    * @return RatingAustraliaTelevisionType The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "\Microsoft\Graph\Model\RatingAustraliaTelevisionType")) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingAustraliaTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    * TV rating selected for Australia. Possible values are: allAllowed, allBlocked, preschoolers, children, general, parentalGuidance, mature, agesAbove15, agesAbove15AdultViolence.
    *
    * @param RatingAustraliaTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingAustralia The MediaContentRatingAustralia
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}
