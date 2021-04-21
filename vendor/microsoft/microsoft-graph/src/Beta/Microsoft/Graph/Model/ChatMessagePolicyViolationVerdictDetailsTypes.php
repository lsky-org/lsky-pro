<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolationVerdictDetailsTypes File
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
* ChatMessagePolicyViolationVerdictDetailsTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessagePolicyViolationVerdictDetailsTypes extends Enum
{
    /**
    * The Enum ChatMessagePolicyViolationVerdictDetailsTypes
    */
    const NONE = "none";
    const ALLOW_FALSE_POSITIVE_OVERRIDE = "allowFalsePositiveOverride";
    const ALLOW_OVERRIDE_WITHOUT_JUSTIFICATION = "allowOverrideWithoutJustification";
    const ALLOW_OVERRIDE_WITH_JUSTIFICATION = "allowOverrideWithJustification";
}