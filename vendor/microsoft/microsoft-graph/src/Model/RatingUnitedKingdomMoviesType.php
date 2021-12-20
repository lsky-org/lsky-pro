<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RatingUnitedKingdomMoviesType File
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
* RatingUnitedKingdomMoviesType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RatingUnitedKingdomMoviesType extends Enum
{
    /**
    * The Enum RatingUnitedKingdomMoviesType
    */
    const ALL_ALLOWED = "allAllowed";
    const ALL_BLOCKED = "allBlocked";
    const GENERAL = "general";
    const UNIVERSAL_CHILDREN = "universalChildren";
    const PARENTAL_GUIDANCE = "parentalGuidance";
    const AGES_ABOVE12_VIDEO = "agesAbove12Video";
    const AGES_ABOVE12_CINEMA = "agesAbove12Cinema";
    const AGES_ABOVE15 = "agesAbove15";
    const ADULTS = "adults";
}