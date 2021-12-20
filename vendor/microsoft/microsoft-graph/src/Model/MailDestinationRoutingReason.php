<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailDestinationRoutingReason File
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
* MailDestinationRoutingReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailDestinationRoutingReason extends Enum
{
    /**
    * The Enum MailDestinationRoutingReason
    */
    const NONE = "none";
    const MAIL_FLOW_RULE = "mailFlowRule";
    const SAFE_SENDER = "safeSender";
    const BLOCKED_SENDER = "blockedSender";
    const ADVANCED_SPAM_FILTERING = "advancedSpamFiltering";
    const DOMAIN_ALLOW_LIST = "domainAllowList";
    const DOMAIN_BLOCK_LIST = "domainBlockList";
    const NOT_IN_ADDRESS_BOOK = "notInAddressBook";
    const FIRST_TIME_SENDER = "firstTimeSender";
    const AUTO_PURGE_TO_INBOX = "autoPurgeToInbox";
    const AUTO_PURGE_TO_JUNK = "autoPurgeToJunk";
    const AUTO_PURGE_TO_DELETED = "autoPurgeToDeleted";
    const OUTBOUND = "outbound";
    const NOT_JUNK = "notJunk";
    const JUNK = "junk";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}