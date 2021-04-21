<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderSubmitSamplesConsentType File
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
* DefenderSubmitSamplesConsentType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderSubmitSamplesConsentType extends Enum
{
    /**
    * The Enum DefenderSubmitSamplesConsentType
    */
    const SEND_SAFE_SAMPLES_AUTOMATICALLY = "sendSafeSamplesAutomatically";
    const ALWAYS_PROMPT = "alwaysPrompt";
    const NEVER_SEND = "neverSend";
    const SEND_ALL_SAMPLES_AUTOMATICALLY = "sendAllSamplesAutomatically";
}