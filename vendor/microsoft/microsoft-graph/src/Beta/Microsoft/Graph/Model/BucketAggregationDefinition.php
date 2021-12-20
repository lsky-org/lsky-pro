<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BucketAggregationDefinition File
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
* BucketAggregationDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BucketAggregationDefinition extends Entity
{
    /**
    * Gets the isDescending
    * True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
    *
    * @return bool The isDescending
    */
    public function getIsDescending()
    {
        if (array_key_exists("isDescending", $this->_propDict)) {
            return $this->_propDict["isDescending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDescending
    * True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
    *
    * @param bool $val The value of the isDescending
    *
    * @return BucketAggregationDefinition
    */
    public function setIsDescending($val)
    {
        $this->_propDict["isDescending"] = $val;
        return $this;
    }
    /**
    * Gets the minimumCount
    * The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
    *
    * @return int The minimumCount
    */
    public function getMinimumCount()
    {
        if (array_key_exists("minimumCount", $this->_propDict)) {
            return $this->_propDict["minimumCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumCount
    * The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
    *
    * @param int $val The value of the minimumCount
    *
    * @return BucketAggregationDefinition
    */
    public function setMinimumCount($val)
    {
        $this->_propDict["minimumCount"] = $val;
        return $this;
    }
    /**
    * Gets the prefixFilter
    * A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
    *
    * @return string The prefixFilter
    */
    public function getPrefixFilter()
    {
        if (array_key_exists("prefixFilter", $this->_propDict)) {
            return $this->_propDict["prefixFilter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prefixFilter
    * A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
    *
    * @param string $val The value of the prefixFilter
    *
    * @return BucketAggregationDefinition
    */
    public function setPrefixFilter($val)
    {
        $this->_propDict["prefixFilter"] = $val;
        return $this;
    }

    /**
    * Gets the ranges
    * Specifies the manual ranges to compute the aggregations. This is only valid for non-string refiners of date or numeric type. Optional.
    *
    * @return BucketAggregationRange The ranges
    */
    public function getRanges()
    {
        if (array_key_exists("ranges", $this->_propDict)) {
            if (is_a($this->_propDict["ranges"], "\Beta\Microsoft\Graph\Model\BucketAggregationRange")) {
                return $this->_propDict["ranges"];
            } else {
                $this->_propDict["ranges"] = new BucketAggregationRange($this->_propDict["ranges"]);
                return $this->_propDict["ranges"];
            }
        }
        return null;
    }

    /**
    * Sets the ranges
    * Specifies the manual ranges to compute the aggregations. This is only valid for non-string refiners of date or numeric type. Optional.
    *
    * @param BucketAggregationRange $val The value to assign to the ranges
    *
    * @return BucketAggregationDefinition The BucketAggregationDefinition
    */
    public function setRanges($val)
    {
        $this->_propDict["ranges"] = $val;
         return $this;
    }

    /**
    * Gets the sortBy
    * The possible values are count to sort by the number of matches in the aggregation, keyAsStringto sort alphabeticaly based on the key in the aggregation, keyAsNumber for numerical sorting based on the key in the aggregation. Required.
    *
    * @return BucketAggregationSortProperty The sortBy
    */
    public function getSortBy()
    {
        if (array_key_exists("sortBy", $this->_propDict)) {
            if (is_a($this->_propDict["sortBy"], "\Beta\Microsoft\Graph\Model\BucketAggregationSortProperty")) {
                return $this->_propDict["sortBy"];
            } else {
                $this->_propDict["sortBy"] = new BucketAggregationSortProperty($this->_propDict["sortBy"]);
                return $this->_propDict["sortBy"];
            }
        }
        return null;
    }

    /**
    * Sets the sortBy
    * The possible values are count to sort by the number of matches in the aggregation, keyAsStringto sort alphabeticaly based on the key in the aggregation, keyAsNumber for numerical sorting based on the key in the aggregation. Required.
    *
    * @param BucketAggregationSortProperty $val The value to assign to the sortBy
    *
    * @return BucketAggregationDefinition The BucketAggregationDefinition
    */
    public function setSortBy($val)
    {
        $this->_propDict["sortBy"] = $val;
         return $this;
    }
}
