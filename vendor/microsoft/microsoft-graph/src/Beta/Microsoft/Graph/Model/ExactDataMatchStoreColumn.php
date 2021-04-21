<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactDataMatchStoreColumn File
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
* ExactDataMatchStoreColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactDataMatchStoreColumn extends Entity
{
    /**
    * Gets the ignoredDelimiters
    *
    * @return string The ignoredDelimiters
    */
    public function getIgnoredDelimiters()
    {
        if (array_key_exists("ignoredDelimiters", $this->_propDict)) {
            return $this->_propDict["ignoredDelimiters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ignoredDelimiters
    *
    * @param string $val The value of the ignoredDelimiters
    *
    * @return ExactDataMatchStoreColumn
    */
    public function setIgnoredDelimiters($val)
    {
        $this->_propDict["ignoredDelimiters"] = $val;
        return $this;
    }
    /**
    * Gets the isCaseInsensitive
    *
    * @return bool The isCaseInsensitive
    */
    public function getIsCaseInsensitive()
    {
        if (array_key_exists("isCaseInsensitive", $this->_propDict)) {
            return $this->_propDict["isCaseInsensitive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCaseInsensitive
    *
    * @param bool $val The value of the isCaseInsensitive
    *
    * @return ExactDataMatchStoreColumn
    */
    public function setIsCaseInsensitive($val)
    {
        $this->_propDict["isCaseInsensitive"] = $val;
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
    * @return ExactDataMatchStoreColumn
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = $val;
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
    * @return ExactDataMatchStoreColumn
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
