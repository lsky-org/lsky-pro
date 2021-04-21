<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotEnrollmentType File
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
* WindowsAutopilotEnrollmentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAutopilotEnrollmentType extends Enum
{
    /**
    * The Enum WindowsAutopilotEnrollmentType
    */
    const UNKNOWN = "unknown";
    const AZURE_AD_JOINED_WITH_AUTOPILOT_PROFILE = "azureADJoinedWithAutopilotProfile";
    const OFFLINE_DOMAIN_JOINED = "offlineDomainJoined";
    const AZURE_AD_JOINED_USING_DEVICE_AUTH_WITH_AUTOPILOT_PROFILE = "azureADJoinedUsingDeviceAuthWithAutopilotProfile";
    const AZURE_AD_JOINED_USING_DEVICE_AUTH_WITHOUT_AUTOPILOT_PROFILE = "azureADJoinedUsingDeviceAuthWithoutAutopilotProfile";
    const AZURE_AD_JOINED_WITH_OFFLINE_AUTOPILOT_PROFILE = "azureADJoinedWithOfflineAutopilotProfile";
    const AZURE_AD_JOINED_WITH_WHITE_GLOVE = "azureADJoinedWithWhiteGlove";
    const OFFLINE_DOMAIN_JOINED_WITH_WHITE_GLOVE = "offlineDomainJoinedWithWhiteGlove";
    const OFFLINE_DOMAIN_JOINED_WITH_OFFLINE_AUTOPILOT_PROFILE = "offlineDomainJoinedWithOfflineAutopilotProfile";
}