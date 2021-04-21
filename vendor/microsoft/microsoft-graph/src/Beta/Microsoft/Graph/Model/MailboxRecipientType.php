<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxRecipientType File
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
* MailboxRecipientType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxRecipientType extends Enum
{
    /**
    * The Enum MailboxRecipientType
    */
    const UNKNOWN = "unknown";
    const USER = "user";
    const LINKED = "linked";
    const SHARED = "shared";
    const ROOM = "room";
    const EQUIPMENT = "equipment";
    const OTHERS = "others";
}