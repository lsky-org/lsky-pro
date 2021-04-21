<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DiscoveredSensitiveType File
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
* DiscoveredSensitiveType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DiscoveredSensitiveType extends Entity
{

    /**
    * Gets the classificationAttributes
    *
    * @return ClassificationAttribute The classificationAttributes
    */
    public function getClassificationAttributes()
    {
        if (array_key_exists("classificationAttributes", $this->_propDict)) {
            if (is_a($this->_propDict["classificationAttributes"], "\Beta\Microsoft\Graph\Model\ClassificationAttribute")) {
                return $this->_propDict["classificationAttributes"];
            } else {
                $this->_propDict["classificationAttributes"] = new ClassificationAttribute($this->_propDict["classificationAttributes"]);
                return $this->_propDict["classificationAttributes"];
            }
        }
        return null;
    }

    /**
    * Sets the classificationAttributes
    *
    * @param ClassificationAttribute $val The value to assign to the classificationAttributes
    *
    * @return DiscoveredSensitiveType The DiscoveredSensitiveType
    */
    public function setClassificationAttributes($val)
    {
        $this->_propDict["classificationAttributes"] = $val;
         return $this;
    }
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
    * @return DiscoveredSensitiveType
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }
    /**
    * Gets the count
    *
    * @return int The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    *
    * @param int $val The value of the count
    *
    * @return DiscoveredSensitiveType
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
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
    * @return DiscoveredSensitiveType
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
