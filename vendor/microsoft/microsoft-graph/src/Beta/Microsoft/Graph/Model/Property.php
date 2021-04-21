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
namespace Beta\Microsoft\Graph\Model;
/**
* Property class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Property extends Entity
{
    /**
    * Gets the aliases
    * A set of aliases or a friendly names for the property. Maximum 32 characters. Each string must not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &amp;, ?, @, #, /, ~, ', ', &amp;lt;, &amp;gt;, `
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
    * A set of aliases or a friendly names for the property. Maximum 32 characters. Each string must not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &amp;, ?, @, #, /, ~, ', ', &amp;lt;, &amp;gt;, `
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
    * Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional.
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
    * Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional.
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
    * Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional.
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
    * Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional.
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
    * Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional.
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
    * Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional.
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
    * Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Non-searchable properties are not added to the search index. Optional.
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
    * Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Non-searchable properties are not added to the search index. Optional.
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
    * Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (e.g. better relevance). Supported labels: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName and fileExtension. Optional.
    *
    * @return Label The labels
    */
    public function getLabels()
    {
        if (array_key_exists("labels", $this->_propDict)) {
            if (is_a($this->_propDict["labels"], "\Beta\Microsoft\Graph\Model\Label")) {
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
    * Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (e.g. better relevance). Supported labels: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName and fileExtension. Optional.
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
    * The name of the property. Maximum 32 characters. Must not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &amp;, ?, @, #, /, ~, ', ', &amp;lt;, &amp;gt;, `
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
    * The name of the property. Maximum 32 characters. Must not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &amp;, ?, @, #, /, ~, ', ', &amp;lt;, &amp;gt;, `
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
    * The data type of the property. Possible values are: String, Int64, Double, DateTime, Boolean, StringCollection, Int64Collection, DoubleCollection, DateTimeCollection. Required.
    *
    * @return PropertyType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\PropertyType")) {
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
    * The data type of the property. Possible values are: String, Int64, Double, DateTime, Boolean, StringCollection, Int64Collection, DoubleCollection, DateTimeCollection. Required.
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
