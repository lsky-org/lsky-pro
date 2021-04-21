<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegateMeetingMessageDeliveryOptions File
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
* DelegateMeetingMessageDeliveryOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegateMeetingMessageDeliveryOptions extends Enum
{
    /**
    * The Enum DelegateMeetingMessageDeliveryOptions
    */
    const SEND_TO_DELEGATE_AND_INFORMATION_TO_PRINCIPAL = "sendToDelegateAndInformationToPrincipal";
    const SEND_TO_DELEGATE_AND_PRINCIPAL = "sendToDelegateAndPrincipal";
    const SEND_TO_DELEGATE_ONLY = "sendToDelegateOnly";
}