<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsStandardUserElevationPromptBehaviorType File
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
* LocalSecurityOptionsStandardUserElevationPromptBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalSecurityOptionsStandardUserElevationPromptBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsStandardUserElevationPromptBehaviorType
    */
    const NOT_CONFIGURED = "notConfigured";
    const AUTOMATICALLY_DENY_ELEVATION_REQUESTS = "automaticallyDenyElevationRequests";
    const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
}