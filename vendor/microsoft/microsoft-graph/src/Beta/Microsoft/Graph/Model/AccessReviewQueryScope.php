<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewQueryScope File
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
* AccessReviewQueryScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewQueryScope extends AccessReviewScope
{
    /**
    * Gets the query
    * The query representing what will be reviewed in an access review. Examples of this include /groups/{id}/members?$filter=…
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
    * The query representing what will be reviewed in an access review. Examples of this include /groups/{id}/members?$filter=…
    *
    * @param string $val The value of the query
    *
    * @return AccessReviewQueryScope
    */
    public function setQuery($val)
    {
        $this->_propDict["query"] = $val;
        return $this;
    }
    /**
    * Gets the queryRoot
    * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager.
    *
    * @return string The queryRoot
    */
    public function getQueryRoot()
    {
        if (array_key_exists("queryRoot", $this->_propDict)) {
            return $this->_propDict["queryRoot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryRoot
    * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager.
    *
    * @param string $val The value of the queryRoot
    *
    * @return AccessReviewQueryScope
    */
    public function setQueryRoot($val)
    {
        $this->_propDict["queryRoot"] = $val;
        return $this;
    }
    /**
    * Gets the queryType
    * Indicates the type of query. Types include MicrosoftGraph and ARM.
    *
    * @return string The queryType
    */
    public function getQueryType()
    {
        if (array_key_exists("queryType", $this->_propDict)) {
            return $this->_propDict["queryType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryType
    * Indicates the type of query. Types include MicrosoftGraph and ARM.
    *
    * @param string $val The value of the queryType
    *
    * @return AccessReviewQueryScope
    */
    public function setQueryType($val)
    {
        $this->_propDict["queryType"] = $val;
        return $this;
    }
}
