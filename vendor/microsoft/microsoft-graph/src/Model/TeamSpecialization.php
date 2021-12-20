<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamSpecialization File
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
* TeamSpecialization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamSpecialization extends Enum
{
    /**
    * The Enum TeamSpecialization
    */
    const NONE = "none";
    const EDUCATION_STANDARD = "educationStandard";
    const EDUCATION_CLASS = "educationClass";
    const EDUCATION_PROFESSIONAL_LEARNING_COMMUNITY = "educationProfessionalLearningCommunity";
    const EDUCATION_STAFF = "educationStaff";
    const HEALTHCARE_STANDARD = "healthcareStandard";
    const HEALTHCARE_CARE_COORDINATION = "healthcareCareCoordination";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}