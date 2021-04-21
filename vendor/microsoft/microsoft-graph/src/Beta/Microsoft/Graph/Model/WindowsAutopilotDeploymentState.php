<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeploymentState File
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
* WindowsAutopilotDeploymentState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotDeploymentState extends Enum
{
    /**
    * The Enum WindowsAutopilotDeploymentState
    */
    const UNKNOWN = "unknown";
    const SUCCESS = "success";
    const IN_PROGRESS = "inProgress";
    const FAILURE = "failure";
    const SUCCESS_WITH_TIMEOUT = "successWithTimeout";
    const NOT_ATTEMPTED = "notAttempted";
    const DISABLED = "disabled";
}