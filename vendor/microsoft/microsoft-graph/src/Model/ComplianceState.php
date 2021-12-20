<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceState File
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
* ComplianceState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceState extends Enum
{
    /**
    * The Enum ComplianceState
    */
    const UNKNOWN = "unknown";
    const COMPLIANT = "compliant";
    const NONCOMPLIANT = "noncompliant";
    const CONFLICT = "conflict";
    const ERROR = "error";
    const IN_GRACE_PERIOD = "inGracePeriod";
    const CONFIG_MANAGER = "configManager";
}