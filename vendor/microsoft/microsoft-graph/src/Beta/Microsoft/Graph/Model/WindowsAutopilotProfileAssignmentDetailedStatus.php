<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotProfileAssignmentDetailedStatus File
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
* WindowsAutopilotProfileAssignmentDetailedStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotProfileAssignmentDetailedStatus extends Enum
{
    /**
    * The Enum WindowsAutopilotProfileAssignmentDetailedStatus
    */
    const NONE = "none";
    const HARDWARE_REQUIREMENTS_NOT_MET = "hardwareRequirementsNotMet";
    const SURFACE_HUB_PROFILE_NOT_SUPPORTED = "surfaceHubProfileNotSupported";
    const HOLO_LENS_PROFILE_NOT_SUPPORTED = "holoLensProfileNotSupported";
    const WINDOWS_PC_PROFILE_NOT_SUPPORTED = "windowsPcProfileNotSupported";
}