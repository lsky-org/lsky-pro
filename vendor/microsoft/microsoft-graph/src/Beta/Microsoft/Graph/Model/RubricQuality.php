<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RubricQuality File
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
* RubricQuality class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RubricQuality extends Entity
{

    /**
    * Gets the criteria
    * The collection of criteria for this rubric quality.
    *
    * @return RubricCriterion The criteria
    */
    public function getCriteria()
    {
        if (array_key_exists("criteria", $this->_propDict)) {
            if (is_a($this->_propDict["criteria"], "\Beta\Microsoft\Graph\Model\RubricCriterion")) {
                return $this->_propDict["criteria"];
            } else {
                $this->_propDict["criteria"] = new RubricCriterion($this->_propDict["criteria"]);
                return $this->_propDict["criteria"];
            }
        }
        return null;
    }

    /**
    * Sets the criteria
    * The collection of criteria for this rubric quality.
    *
    * @param RubricCriterion $val The value to assign to the criteria
    *
    * @return RubricQuality The RubricQuality
    */
    public function setCriteria($val)
    {
        $this->_propDict["criteria"] = $val;
         return $this;
    }

    /**
    * Gets the description
    * The description of this rubric quality.
    *
    * @return EducationItemBody The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "\Beta\Microsoft\Graph\Model\EducationItemBody")) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new EducationItemBody($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }

    /**
    * Sets the description
    * The description of this rubric quality.
    *
    * @param EducationItemBody $val The value to assign to the description
    *
    * @return RubricQuality The RubricQuality
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The name of this rubric quality.
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
    * The name of this rubric quality.
    *
    * @param string $val The value of the displayName
    *
    * @return RubricQuality
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the qualityId
    * The ID of this resource.
    *
    * @return string The qualityId
    */
    public function getQualityId()
    {
        if (array_key_exists("qualityId", $this->_propDict)) {
            return $this->_propDict["qualityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qualityId
    * The ID of this resource.
    *
    * @param string $val The value of the qualityId
    *
    * @return RubricQuality
    */
    public function setQualityId($val)
    {
        $this->_propDict["qualityId"] = $val;
        return $this;
    }

    /**
    * Gets the weight
    * If present, a numerical weight for this quality.  Weights must add up to 100.
    *
    * @return Single The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            if (is_a($this->_propDict["weight"], "\Beta\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["weight"];
            } else {
                $this->_propDict["weight"] = new Single($this->_propDict["weight"]);
                return $this->_propDict["weight"];
            }
        }
        return null;
    }

    /**
    * Sets the weight
    * If present, a numerical weight for this quality.  Weights must add up to 100.
    *
    * @param Single $val The value to assign to the weight
    *
    * @return RubricQuality The RubricQuality
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = $val;
         return $this;
    }
}
