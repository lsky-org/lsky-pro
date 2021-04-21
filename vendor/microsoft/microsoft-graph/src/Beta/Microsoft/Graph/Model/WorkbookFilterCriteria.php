<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFilterCriteria File
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
* WorkbookFilterCriteria class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookFilterCriteria extends Entity
{
    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }

    /**
    * Sets the color
    *
    * @param string $val The value of the color
    *
    * @return WorkbookFilterCriteria
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    /**
    * Gets the criterion1
    *
    * @return string The criterion1
    */
    public function getCriterion1()
    {
        if (array_key_exists("criterion1", $this->_propDict)) {
            return $this->_propDict["criterion1"];
        } else {
            return null;
        }
    }

    /**
    * Sets the criterion1
    *
    * @param string $val The value of the criterion1
    *
    * @return WorkbookFilterCriteria
    */
    public function setCriterion1($val)
    {
        $this->_propDict["criterion1"] = $val;
        return $this;
    }
    /**
    * Gets the criterion2
    *
    * @return string The criterion2
    */
    public function getCriterion2()
    {
        if (array_key_exists("criterion2", $this->_propDict)) {
            return $this->_propDict["criterion2"];
        } else {
            return null;
        }
    }

    /**
    * Sets the criterion2
    *
    * @param string $val The value of the criterion2
    *
    * @return WorkbookFilterCriteria
    */
    public function setCriterion2($val)
    {
        $this->_propDict["criterion2"] = $val;
        return $this;
    }
    /**
    * Gets the dynamicCriteria
    *
    * @return string The dynamicCriteria
    */
    public function getDynamicCriteria()
    {
        if (array_key_exists("dynamicCriteria", $this->_propDict)) {
            return $this->_propDict["dynamicCriteria"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dynamicCriteria
    *
    * @param string $val The value of the dynamicCriteria
    *
    * @return WorkbookFilterCriteria
    */
    public function setDynamicCriteria($val)
    {
        $this->_propDict["dynamicCriteria"] = $val;
        return $this;
    }
    /**
    * Gets the filterOn
    *
    * @return string The filterOn
    */
    public function getFilterOn()
    {
        if (array_key_exists("filterOn", $this->_propDict)) {
            return $this->_propDict["filterOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filterOn
    *
    * @param string $val The value of the filterOn
    *
    * @return WorkbookFilterCriteria
    */
    public function setFilterOn($val)
    {
        $this->_propDict["filterOn"] = $val;
        return $this;
    }

    /**
    * Gets the icon
    *
    * @return WorkbookIcon The icon
    */
    public function getIcon()
    {
        if (array_key_exists("icon", $this->_propDict)) {
            if (is_a($this->_propDict["icon"], "\Beta\Microsoft\Graph\Model\WorkbookIcon")) {
                return $this->_propDict["icon"];
            } else {
                $this->_propDict["icon"] = new WorkbookIcon($this->_propDict["icon"]);
                return $this->_propDict["icon"];
            }
        }
        return null;
    }

    /**
    * Sets the icon
    *
    * @param WorkbookIcon $val The value to assign to the icon
    *
    * @return WorkbookFilterCriteria The WorkbookFilterCriteria
    */
    public function setIcon($val)
    {
        $this->_propDict["icon"] = $val;
         return $this;
    }
    /**
    * Gets the operator
    *
    * @return string The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            return $this->_propDict["operator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operator
    *
    * @param string $val The value of the operator
    *
    * @return WorkbookFilterCriteria
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
        return $this;
    }
    /**
    * Gets the values
    *
    * @return string The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }

    /**
    * Sets the values
    *
    * @param string $val The value of the values
    *
    * @return WorkbookFilterCriteria
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
}
