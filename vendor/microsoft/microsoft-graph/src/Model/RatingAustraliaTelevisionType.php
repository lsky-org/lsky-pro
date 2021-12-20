<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingAustraliaTelevisionType File
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
* RatingAustraliaTelevisionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RatingAustraliaTelevisionType extends Enum
{
    /**
    * The Enum RatingAustraliaTelevisionType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const PRESCHOOLERS = "preschoolers";
    const CHILDREN = "children";
    const GENERAL = "general";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const MATURE = "mature";
    const AGES_ABOVE15 = "agesAbove15";
    const AGES_ABOVE15_ADULT_VIOLENCE = "agesAbove15AdultViolence";
}