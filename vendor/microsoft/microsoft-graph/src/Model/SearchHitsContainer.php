<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchHitsContainer File
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
* SearchHitsContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchHitsContainer extends Entity
{

    /**
    * Gets the hits
    * A collection of the search results.
    *
    * @return SearchHit The hits
    */
    public function getHits()
    {
        if (array_key_exists("hits", $this->_propDict)) {
            if (is_a($this->_propDict["hits"], "\Microsoft\Graph\Model\SearchHit")) {
                return $this->_propDict["hits"];
            } else {
                $this->_propDict["hits"] = new SearchHit($this->_propDict["hits"]);
                return $this->_propDict["hits"];
            }
        }
        return null;
    }

    /**
    * Sets the hits
    * A collection of the search results.
    *
    * @param SearchHit $val The value to assign to the hits
    *
    * @return SearchHitsContainer The SearchHitsContainer
    */
    public function setHits($val)
    {
        $this->_propDict["hits"] = $val;
         return $this;
    }
    /**
    * Gets the moreResultsAvailable
    * Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
    *
    * @return bool The moreResultsAvailable
    */
    public function getMoreResultsAvailable()
    {
        if (array_key_exists("moreResultsAvailable", $this->_propDict)) {
            return $this->_propDict["moreResultsAvailable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the moreResultsAvailable
    * Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
    *
    * @param bool $val The value of the moreResultsAvailable
    *
    * @return SearchHitsContainer
    */
    public function setMoreResultsAvailable($val)
    {
        $this->_propDict["moreResultsAvailable"] = $val;
        return $this;
    }
    /**
    * Gets the total
    * The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query.
    *
    * @return int The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    * The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query.
    *
    * @param int $val The value of the total
    *
    * @return SearchHitsContainer
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = $val;
        return $this;
    }
}
