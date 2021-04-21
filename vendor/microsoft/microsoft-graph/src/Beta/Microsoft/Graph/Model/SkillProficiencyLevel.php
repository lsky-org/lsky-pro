<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkillProficiencyLevel File
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
* SkillProficiencyLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkillProficiencyLevel extends Enum
{
    /**
    * The Enum SkillProficiencyLevel
    */
    const ELEMENTARY = "elementary";
    const LIMITED_WORKING = "limitedWorking";
    const GENERAL_PROFESSIONAL = "generalProfessional";
    const ADVANCED_PROFESSIONAL = "advancedProfessional";
    const EXPERT = "expert";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}