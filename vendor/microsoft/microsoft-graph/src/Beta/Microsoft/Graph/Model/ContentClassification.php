<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentClassification File
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
* ContentClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentClassification extends Entity
{
    /**
    * Gets the confidence
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidence
    *
    * @param int $val The value of the confidence
    *
    * @return ContentClassification
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }

    /**
    * Gets the matches
    *
    * @return MatchLocation The matches
    */
    public function getMatches()
    {
        if (array_key_exists("matches", $this->_propDict)) {
            if (is_a($this->_propDict["matches"], "\Beta\Microsoft\Graph\Model\MatchLocation")) {
                return $this->_propDict["matches"];
            } else {
                $this->_propDict["matches"] = new MatchLocation($this->_propDict["matches"]);
                return $this->_propDict["matches"];
            }
        }
        return null;
    }

    /**
    * Sets the matches
    *
    * @param MatchLocation $val The value to assign to the matches
    *
    * @return ContentClassification The ContentClassification
    */
    public function setMatches($val)
    {
        $this->_propDict["matches"] = $val;
         return $this;
    }
    /**
    * Gets the sensitiveTypeId
    *
    * @return string The sensitiveTypeId
    */
    public function getSensitiveTypeId()
    {
        if (array_key_exists("sensitiveTypeId", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sensitiveTypeId
    *
    * @param string $val The value of the sensitiveTypeId
    *
    * @return ContentClassification
    */
    public function setSensitiveTypeId($val)
    {
        $this->_propDict["sensitiveTypeId"] = $val;
        return $this;
    }
    /**
    * Gets the uniqueCount
    *
    * @return int The uniqueCount
    */
    public function getUniqueCount()
    {
        if (array_key_exists("uniqueCount", $this->_propDict)) {
            return $this->_propDict["uniqueCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueCount
    *
    * @param int $val The value of the uniqueCount
    *
    * @return ContentClassification
    */
    public function setUniqueCount($val)
    {
        $this->_propDict["uniqueCount"] = $val;
        return $this;
    }
}
