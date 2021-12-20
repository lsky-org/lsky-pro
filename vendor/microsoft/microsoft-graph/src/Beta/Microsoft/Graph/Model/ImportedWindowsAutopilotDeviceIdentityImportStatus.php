<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImportedWindowsAutopilotDeviceIdentityImportStatus File
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
* ImportedWindowsAutopilotDeviceIdentityImportStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ImportedWindowsAutopilotDeviceIdentityImportStatus extends Enum
{
    /**
    * The Enum ImportedWindowsAutopilotDeviceIdentityImportStatus
    */
    const UNKNOWN = "unknown";
    const PENDING = "pending";
    const PARTIAL = "partial";
    const COMPLETE = "complete";
    const ERROR = "error";
}