<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationIdentityType File
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
* ApplicationIdentityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationIdentityType extends Enum
{
    /**
    * The Enum ApplicationIdentityType
    */
    const AAD_APPLICATION = "aadApplication";
    const BOT = "bot";
    const TENANT_BOT = "tenantBot";
    const OFFICE365_CONNECTOR = "office365Connector";
    const OUTGOING_WEBHOOK = "outgoingWebhook";
}