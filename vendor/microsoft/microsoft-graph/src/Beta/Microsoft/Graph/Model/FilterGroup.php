<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterGroup File
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
* FilterGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FilterGroup extends Entity
{

    /**
    * Gets the clauses
    * Filter clauses (conditions) of this group. All clauses in a group must be satisfied in order for the filter group to evaluate to true.
    *
    * @return FilterClause The clauses
    */
    public function getClauses()
    {
        if (array_key_exists("clauses", $this->_propDict)) {
            if (is_a($this->_propDict["clauses"], "\Beta\Microsoft\Graph\Model\FilterClause")) {
                return $this->_propDict["clauses"];
            } else {
                $this->_propDict["clauses"] = new FilterClause($this->_propDict["clauses"]);
                return $this->_propDict["clauses"];
            }
        }
        return null;
    }

    /**
    * Sets the clauses
    * Filter clauses (conditions) of this group. All clauses in a group must be satisfied in order for the filter group to evaluate to true.
    *
    * @param FilterClause $val The value to assign to the clauses
    *
    * @return FilterGroup The FilterGroup
    */
    public function setClauses($val)
    {
        $this->_propDict["clauses"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Human-readable name of the filter group.
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
    * Human-readable name of the filter group.
    *
    * @param string $val The value of the name
    *
    * @return FilterGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
