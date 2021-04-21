<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchQuery File
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
* SearchQuery class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchQuery extends Entity
{
    /**
    * Gets the queryString
    * The search query containing the search terms. Required.
    *
    * @return string The queryString
    */
    public function getQueryString()
    {
        if (array_key_exists("queryString", $this->_propDict)) {
            return $this->_propDict["queryString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryString
    * The search query containing the search terms. Required.
    *
    * @param string $val The value of the queryString
    *
    * @return SearchQuery
    */
    public function setQueryString($val)
    {
        $this->_propDict["queryString"] = $val;
        return $this;
    }

    /**
    * Gets the query_string
    *
    * @return SearchQueryString The query_string
    */
    public function getQuery_string()
    {
        if (array_key_exists("queryString", $this->_propDict)) {
            if (is_a($this->_propDict["queryString"], "\Beta\Microsoft\Graph\Model\SearchQueryString")) {
                return $this->_propDict["queryString"];
            } else {
                $this->_propDict["queryString"] = new SearchQueryString($this->_propDict["queryString"]);
                return $this->_propDict["queryString"];
            }
        }
        return null;
    }

    /**
    * Sets the query_string
    *
    * @param SearchQueryString $val The value to assign to the query_string
    *
    * @return SearchQuery The SearchQuery
    */
    public function setQuery_string($val)
    {
        $this->_propDict["query_string"] = $val;
         return $this;
    }
}
