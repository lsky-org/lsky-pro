<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookIcon File
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
* WorkbookIcon class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookIcon extends Entity
{
    /**
    * Gets the index
    * Represents the index of the icon in the given set.
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }

    /**
    * Sets the index
    * Represents the index of the icon in the given set.
    *
    * @param int $val The value of the index
    *
    * @return WorkbookIcon
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = $val;
        return $this;
    }
    /**
    * Gets the set
    * Represents the set that the icon is part of. Possible values are: Invalid, ThreeArrows, ThreeArrowsGray, ThreeFlags, ThreeTrafficLights1, ThreeTrafficLights2, ThreeSigns, ThreeSymbols, ThreeSymbols2, FourArrows, FourArrowsGray, FourRedToBlack, FourRating, FourTrafficLights, FiveArrows, FiveArrowsGray, FiveRating, FiveQuarters, ThreeStars, ThreeTriangles, FiveBoxes.
    *
    * @return string The set
    */
    public function getSet()
    {
        if (array_key_exists("set", $this->_propDict)) {
            return $this->_propDict["set"];
        } else {
            return null;
        }
    }

    /**
    * Sets the set
    * Represents the set that the icon is part of. Possible values are: Invalid, ThreeArrows, ThreeArrowsGray, ThreeFlags, ThreeTrafficLights1, ThreeTrafficLights2, ThreeSigns, ThreeSymbols, ThreeSymbols2, FourArrows, FourArrowsGray, FourRedToBlack, FourRating, FourTrafficLights, FiveArrows, FiveArrowsGray, FiveRating, FiveQuarters, ThreeStars, ThreeTriangles, FiveBoxes.
    *
    * @param string $val The value of the set
    *
    * @return WorkbookIcon
    */
    public function setSet($val)
    {
        $this->_propDict["set"] = $val;
        return $this;
    }
}
