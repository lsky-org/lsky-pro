<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineComplianceState File
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
* SecurityBaselineComplianceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineComplianceState extends Enum
{
    /**
    * The Enum SecurityBaselineComplianceState
    */
    const UNKNOWN = "unknown";
    const SECURE = "secure";
    const NOT_APPLICABLE = "notApplicable";
    const NOT_SECURE = "notSecure";
    const ERROR = "error";
    const CONFLICT = "conflict";
}