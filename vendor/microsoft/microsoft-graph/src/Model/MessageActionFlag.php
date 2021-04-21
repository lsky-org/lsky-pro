<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageActionFlag File
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
* MessageActionFlag class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageActionFlag extends Enum
{
    /**
    * The Enum MessageActionFlag
    */
    const ANY = "any";
    const CALL = "call";
    const DO_NOT_FORWARD = "doNotForward";
    const FOLLOW_UP = "followUp";
    const FYI = "fyi";
    const FORWARD = "forward";
    const NO_RESPONSE_NECESSARY = "noResponseNecessary";
    const READ = "read";
    const REPLY = "reply";
    const REPLY_TO_ALL = "replyToAll";
    const REVIEW = "review";
}