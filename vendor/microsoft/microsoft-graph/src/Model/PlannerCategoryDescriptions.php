<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerCategoryDescriptions File
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
* PlannerCategoryDescriptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerCategoryDescriptions extends Entity
{
    /**
    * Gets the category1
    * The label associated with Category 1
    *
    * @return string The category1
    */
    public function getCategory1()
    {
        if (array_key_exists("category1", $this->_propDict)) {
            return $this->_propDict["category1"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category1
    * The label associated with Category 1
    *
    * @param string $val The value of the category1
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory1($val)
    {
        $this->_propDict["category1"] = $val;
        return $this;
    }
    /**
    * Gets the category2
    * The label associated with Category 2
    *
    * @return string The category2
    */
    public function getCategory2()
    {
        if (array_key_exists("category2", $this->_propDict)) {
            return $this->_propDict["category2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category2
    * The label associated with Category 2
    *
    * @param string $val The value of the category2
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory2($val)
    {
        $this->_propDict["category2"] = $val;
        return $this;
    }
    /**
    * Gets the category3
    * The label associated with Category 3
    *
    * @return string The category3
    */
    public function getCategory3()
    {
        if (array_key_exists("category3", $this->_propDict)) {
            return $this->_propDict["category3"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category3
    * The label associated with Category 3
    *
    * @param string $val The value of the category3
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory3($val)
    {
        $this->_propDict["category3"] = $val;
        return $this;
    }
    /**
    * Gets the category4
    * The label associated with Category 4
    *
    * @return string The category4
    */
    public function getCategory4()
    {
        if (array_key_exists("category4", $this->_propDict)) {
            return $this->_propDict["category4"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category4
    * The label associated with Category 4
    *
    * @param string $val The value of the category4
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory4($val)
    {
        $this->_propDict["category4"] = $val;
        return $this;
    }
    /**
    * Gets the category5
    * The label associated with Category 5
    *
    * @return string The category5
    */
    public function getCategory5()
    {
        if (array_key_exists("category5", $this->_propDict)) {
            return $this->_propDict["category5"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category5
    * The label associated with Category 5
    *
    * @param string $val The value of the category5
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory5($val)
    {
        $this->_propDict["category5"] = $val;
        return $this;
    }
    /**
    * Gets the category6
    * The label associated with Category 6
    *
    * @return string The category6
    */
    public function getCategory6()
    {
        if (array_key_exists("category6", $this->_propDict)) {
            return $this->_propDict["category6"];
        } else {
            return null;
        }
    }

    /**
    * Sets the category6
    * The label associated with Category 6
    *
    * @param string $val The value of the category6
    *
    * @return PlannerCategoryDescriptions
    */
    public function setCategory6($val)
    {
        $this->_propDict["category6"] = $val;
        return $this;
    }
}
