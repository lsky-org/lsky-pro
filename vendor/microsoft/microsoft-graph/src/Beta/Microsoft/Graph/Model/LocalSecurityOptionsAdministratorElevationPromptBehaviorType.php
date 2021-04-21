<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsAdministratorElevationPromptBehaviorType File
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
* LocalSecurityOptionsAdministratorElevationPromptBehaviorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalSecurityOptionsAdministratorElevationPromptBehaviorType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsAdministratorElevationPromptBehaviorType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ELEVATE_WITHOUT_PROMPTING = "elevateWithoutPrompting";
    const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    const PROMPT_FOR_CONSENT_ON_THE_SECURE_DESKTOP = "promptForConsentOnTheSecureDesktop";
    const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
    const PROMPT_FOR_CONSENT = "promptForConsent";
    const PROMPT_FOR_CONSENT_FOR_NON_WINDOWS_BINARIES = "promptForConsentForNonWindowsBinaries";
}