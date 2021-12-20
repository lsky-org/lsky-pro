<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Operator File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* Operator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Operator extends Enum
{
    /**
    * The Enum Operator
    */
    const NONE = "none";
    const GRAPHAND = "and";
    const GRAPHOR = "or";
    const IS_EQUALS = "isEquals";
    const NOT_EQUALS = "notEquals";
    const GREATER_THAN = "greaterThan";
    const LESS_THAN = "lessThan";
    const BETWEEN = "between";
    const NOT_BETWEEN = "notBetween";
    const GREATER_EQUALS = "greaterEquals";
    const LESS_EQUALS = "lessEquals";
    const DAY_TIME_BETWEEN = "dayTimeBetween";
    const BEGINS_WITH = "beginsWith";
    const NOT_BEGINS_WITH = "notBeginsWith";
    const ENDS_WITH = "endsWith";
    const NOT_ENDS_WITH = "notEndsWith";
    const CONTAINS = "contains";
    const NOT_CONTAINS = "notContains";
    const ALL_OF = "allOf";
    const ONE_OF = "oneOf";
    const NONE_OF = "noneOf";
    const SET_EQUALS = "setEquals";
    const ORDERED_SET_EQUALS = "orderedSetEquals";
    const SUBSET_OF = "subsetOf";
    const EXCLUDES_ALL = "excludesAll";
}