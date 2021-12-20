<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceStatus File
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
* ComplianceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceStatus extends Enum
{
    /**
    * The Enum ComplianceStatus
    */
    const UNKNOWN = "unknown";
    const NOT_APPLICABLE = "notApplicable";
    const COMPLIANT = "compliant";
    const REMEDIATED = "remediated";
    const NON_COMPLIANT = "nonCompliant";
    const ERROR = "error";
    const CONFLICT = "conflict";
    const NOT_ASSIGNED = "notAssigned";
}