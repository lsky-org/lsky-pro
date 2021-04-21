<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResponse File
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
* SearchResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchResponse extends Entity
{

    /**
    * Gets the queryAlterationResponse
    *
    * @return AlterationResponse The queryAlterationResponse
    */
    public function getQueryAlterationResponse()
    {
        if (array_key_exists("queryAlterationResponse", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlterationResponse"], "\Beta\Microsoft\Graph\Model\AlterationResponse")) {
                return $this->_propDict["queryAlterationResponse"];
            } else {
                $this->_propDict["queryAlterationResponse"] = new AlterationResponse($this->_propDict["queryAlterationResponse"]);
                return $this->_propDict["queryAlterationResponse"];
            }
        }
        return null;
    }

    /**
    * Sets the queryAlterationResponse
    *
    * @param AlterationResponse $val The value to assign to the queryAlterationResponse
    *
    * @return SearchResponse The SearchResponse
    */
    public function setQueryAlterationResponse($val)
    {
        $this->_propDict["queryAlterationResponse"] = $val;
         return $this;
    }

    /**
    * Gets the value
    *
    * @return SearchResultSet The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\Model\SearchResultSet")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new SearchResultSet($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param SearchResultSet $val The value to assign to the value
    *
    * @return SearchResponse The SearchResponse
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
