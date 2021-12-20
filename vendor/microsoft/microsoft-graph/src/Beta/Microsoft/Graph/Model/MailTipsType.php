<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailTipsType File
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
* MailTipsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailTipsType extends Enum
{
    /**
    * The Enum MailTipsType
    */
    const AUTOMATIC_REPLIES = "automaticReplies";
    const MAILBOX_FULL_STATUS = "mailboxFullStatus";
    const CUSTOM_MAIL_TIP = "customMailTip";
    const EXTERNAL_MEMBER_COUNT = "externalMemberCount";
    const TOTAL_MEMBER_COUNT = "totalMemberCount";
    const MAX_MESSAGE_SIZE = "maxMessageSize";
    const DELIVERY_RESTRICTION = "deliveryRestriction";
    const MODERATION_STATUS = "moderationStatus";
    const RECIPIENT_SCOPE = "recipientScope";
    const RECIPIENT_SUGGESTIONS = "recipientSuggestions";
}