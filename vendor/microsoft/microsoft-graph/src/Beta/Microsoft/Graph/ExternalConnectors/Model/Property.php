<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Property File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;
/**
* Property class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Property extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the aliases
    *
    * @return string The aliases
    */
    public function getAliases()
    {
        if (array_key_exists("aliases", $this->_propDict)) {
            return $this->_propDict["aliases"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aliases
    *
    * @param string $val The value of the aliases
    *
    * @return Property
    */
    public function setAliases($val)
    {
        $this->_propDict["aliases"] = $val;
        return $this;
    }
    /**
    * Gets the isQueryable
    *
    * @return bool The isQueryable
    */
    public function getIsQueryable()
    {
        if (array_key_exists("isQueryable", $this->_propDict)) {
            return $this->_propDict["isQueryable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isQueryable
    *
    * @param bool $val The value of the isQueryable
    *
    * @return Property
    */
    public function setIsQueryable($val)
    {
        $this->_propDict["isQueryable"] = $val;
        return $this;
    }
    /**
    * Gets the isRefinable
    *
    * @return bool The isRefinable
    */
    public function getIsRefinable()
    {
        if (array_key_exists("isRefinable", $this->_propDict)) {
            return $this->_propDict["isRefinable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRefinable
    *
    * @param bool $val The value of the isRefinable
    *
    * @return Property
    */
    public function setIsRefinable($val)
    {
        $this->_propDict["isRefinable"] = $val;
        return $this;
    }
    /**
    * Gets the isRetrievable
    *
    * @return bool The isRetrievable
    */
    public function getIsRetrievable()
    {
        if (array_key_exists("isRetrievable", $this->_propDict)) {
            return $this->_propDict["isRetrievable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRetrievable
    *
    * @param bool $val The value of the isRetrievable
    *
    * @return Property
    */
    public function setIsRetrievable($val)
    {
        $this->_propDict["isRetrievable"] = $val;
        return $this;
    }
    /**
    * Gets the isSearchable
    *
    * @return bool The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSearchable
    *
    * @param bool $val The value of the isSearchable
    *
    * @return Property
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = $val;
        return $this;
    }

    /**
    * Gets the labels
    *
    * @return Label The labels
    */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
            if (is_a($this->_propDict["labels"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Label")) {
                return $this->_propDict["labels"];
            } else {
                $this->_propDict["labels"] = new Label($this->_propDict["labels"]);
                return $this->_propDict["labels"];
            }
        }
        return null;
    }

    /**
    * Sets the labels
    *
    * @param Label $val The value to assign to the labels
    *
    * @return Property The Property
    */
    public function setLabels($val)
    {
        $this->_propDict["labels"] = $val;
         return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return Property
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return PropertyType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\PropertyType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new PropertyType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param PropertyType $val The value to assign to the type
    *
    * @return Property The Property
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
