<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkEnrollmentTarget File
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
* AndroidForWorkEnrollmentTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkEnrollmentTarget extends Enum
{
    /**
    * The Enum AndroidForWorkEnrollmentTarget
    */
    const NONE = "none";
    const ALL = "all";
    const TARGETED = "targeted";
    const TARGETED_AS_ENROLLMENT_RESTRICTIONS = "targetedAsEnrollmentRestrictions";
}