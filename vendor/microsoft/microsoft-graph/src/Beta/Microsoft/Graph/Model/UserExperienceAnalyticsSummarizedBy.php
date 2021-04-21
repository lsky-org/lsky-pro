<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsSummarizedBy File
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
* UserExperienceAnalyticsSummarizedBy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsSummarizedBy extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsSummarizedBy
    */
    const NONE = "none";
    const MODEL = "model";
    const ALL_REGRESSIONS = "allRegressions";
    const MODEL_REGRESSION = "modelRegression";
    const MANUFACTURER_REGRESSION = "manufacturerRegression";
    const OPERATING_SYSTEM_VERSION_REGRESSION = "operatingSystemVersionRegression";
}