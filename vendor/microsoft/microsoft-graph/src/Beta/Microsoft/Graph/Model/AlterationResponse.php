<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlterationResponse File
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
* AlterationResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlterationResponse extends Entity
{
    /**
    * Gets the originalQueryString
    *
    * @return string The originalQueryString
    */
    public function getOriginalQueryString()
    {
        if (array_key_exists("originalQueryString", $this->_propDict)) {
            return $this->_propDict["originalQueryString"];
        } else {
            return null;
        }
    }

    /**
    * Sets the originalQueryString
    *
    * @param string $val The value of the originalQueryString
    *
    * @return AlterationResponse
    */
    public function setOriginalQueryString($val)
    {
        $this->_propDict["originalQueryString"] = $val;
        return $this;
    }

    /**
    * Gets the queryAlteration
    *
    * @return SearchAlteration The queryAlteration
    */
    public function getQueryAlteration()
    {
        if (array_key_exists("queryAlteration", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlteration"], "\Beta\Microsoft\Graph\Model\SearchAlteration")) {
                return $this->_propDict["queryAlteration"];
            } else {
                $this->_propDict["queryAlteration"] = new SearchAlteration($this->_propDict["queryAlteration"]);
                return $this->_propDict["queryAlteration"];
            }
        }
        return null;
    }

    /**
    * Sets the queryAlteration
    *
    * @param SearchAlteration $val The value to assign to the queryAlteration
    *
    * @return AlterationResponse The AlterationResponse
    */
    public function setQueryAlteration($val)
    {
        $this->_propDict["queryAlteration"] = $val;
         return $this;
    }

    /**
    * Gets the queryAlterationType
    *
    * @return SearchAlterationType The queryAlterationType
    */
    public function getQueryAlterationType()
    {
        if (array_key_exists("queryAlterationType", $this->_propDict)) {
            if (is_a($this->_propDict["queryAlterationType"], "\Beta\Microsoft\Graph\Model\SearchAlterationType")) {
                return $this->_propDict["queryAlterationType"];
            } else {
                $this->_propDict["queryAlterationType"] = new SearchAlterationType($this->_propDict["queryAlterationType"]);
                return $this->_propDict["queryAlterationType"];
            }
        }
        return null;
    }

    /**
    * Sets the queryAlterationType
    *
    * @param SearchAlterationType $val The value to assign to the queryAlterationType
    *
    * @return AlterationResponse The AlterationResponse
    */
    public function setQueryAlterationType($val)
    {
        $this->_propDict["queryAlterationType"] = $val;
         return $this;
    }
}
