<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContentBase File
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
* DetectedSensitiveContentBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedSensitiveContentBase extends Entity
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
    * @return DetectedSensitiveContentBase
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }
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
    * @return DetectedSensitiveContentBase
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return DetectedSensitiveContentBase
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the recommendedConfidence
    *
    * @return int The recommendedConfidence
    */
    public function getRecommendedConfidence()
    {
        if (array_key_exists("recommendedConfidence", $this->_propDict)) {
            return $this->_propDict["recommendedConfidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendedConfidence
    *
    * @param int $val The value of the recommendedConfidence
    *
    * @return DetectedSensitiveContentBase
    */
    public function setRecommendedConfidence($val)
    {
        $this->_propDict["recommendedConfidence"] = $val;
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
    * @return DetectedSensitiveContentBase
    */
    public function setUniqueCount($val)
    {
        $this->_propDict["uniqueCount"] = $val;
        return $this;
    }
}
