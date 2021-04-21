<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingUnitedStatesTelevisionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* RatingUnitedStatesTelevisionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RatingUnitedStatesTelevisionType extends Enum
{
    /**
    * The Enum RatingUnitedStatesTelevisionType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const CHILDREN_ALL = "childrenAll";
    const CHILDREN_ABOVE7 = "childrenAbove7";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const CHILDREN_ABOVE14 = "childrenAbove14";
    const ADULTS = "adults";
}