<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderPromptForSampleSubmission File
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
* DefenderPromptForSampleSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderPromptForSampleSubmission extends Enum
{
    /**
    * The Enum DefenderPromptForSampleSubmission
    */
    const USER_DEFINED = "userDefined";
    const ALWAYS_PROMPT = "alwaysPrompt";
    const PROMPT_BEFORE_SENDING_PERSONAL_DATA = "promptBeforeSendingPersonalData";
    const NEVER_SEND_DATA = "neverSendData";
    const SEND_ALL_DATA_WITHOUT_PROMPTING = "sendAllDataWithoutPrompting";
}