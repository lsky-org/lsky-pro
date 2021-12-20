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
namespace Microsoft\Graph\Model;
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
}
