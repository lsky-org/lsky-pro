<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchBucket File
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
* SearchBucket class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchBucket extends Entity
{
    /**
    * Gets the aggregationFilterToken
    * A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example.
    *
    * @return string The aggregationFilterToken
    */
    public function getAggregationFilterToken()
    {
        if (array_key_exists("aggregationFilterToken", $this->_propDict)) {
            return $this->_propDict["aggregationFilterToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aggregationFilterToken
    * A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example.
    *
    * @param string $val The value of the aggregationFilterToken
    *
    * @return SearchBucket
    */
    public function setAggregationFilterToken($val)
    {
        $this->_propDict["aggregationFilterToken"] = $val;
        return $this;
    }
    /**
    * Gets the count
    * The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
    *
    * @return int The count
    */
    public function getCount()
    {
        if (array_key_exists("count", $this->_propDict)) {
            return $this->_propDict["count"];
        } else {
            return null;
        }
    }

    /**
    * Sets the count
    * The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
    *
    * @param int $val The value of the count
    *
    * @return SearchBucket
    */
    public function setCount($val)
    {
        $this->_propDict["count"] = $val;
        return $this;
    }
    /**
    * Gets the key
    * The discrete value of the field that an aggregation was computed on.
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    * The discrete value of the field that an aggregation was computed on.
    *
    * @param string $val The value of the key
    *
    * @return SearchBucket
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
}
