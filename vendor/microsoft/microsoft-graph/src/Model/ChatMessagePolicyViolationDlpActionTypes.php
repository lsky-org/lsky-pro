<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolationDlpActionTypes File
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
* ChatMessagePolicyViolationDlpActionTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ChatMessagePolicyViolationDlpActionTypes extends Enum
{
    /**
    * The Enum ChatMessagePolicyViolationDlpActionTypes
    */
    const NONE = "none";
    const NOTIFY_SENDER = "notifySender";
    const BLOCK_ACCESS = "blockAccess";
    const BLOCK_ACCESS_EXTERNAL = "blockAccessExternal";
}