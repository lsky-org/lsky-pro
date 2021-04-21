<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderRealtimeScanDirection File
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
* DefenderRealtimeScanDirection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderRealtimeScanDirection extends Enum
{
    /**
    * The Enum DefenderRealtimeScanDirection
    */
    const MONITOR_ALL_FILES = "monitorAllFiles";
    const MONITOR_INCOMING_FILES_ONLY = "monitorIncomingFilesOnly";
    const MONITOR_OUTGOING_FILES_ONLY = "monitorOutgoingFilesOnly";
}