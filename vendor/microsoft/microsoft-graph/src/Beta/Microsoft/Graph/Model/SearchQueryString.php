<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchQueryString File
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
* SearchQueryString class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchQueryString extends Entity
{
    /**
    * Gets the query
    * Contains the actual search terms of the request.
    *
    * @return string The query
    */
    public function getQuery()
    {
        if (array_key_exists("query", $this->_propDict)) {
            return $this->_propDict["query"];
        } else {
            return null;
        }
    }

    /**
    * Sets the query
    * Contains the actual search terms of the request.
    *
    * @param string $val The value of the query
    *
    * @return SearchQueryString
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }
}
