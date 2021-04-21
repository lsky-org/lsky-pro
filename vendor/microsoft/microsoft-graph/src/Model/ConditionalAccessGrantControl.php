<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGrantControl File
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
* ConditionalAccessGrantControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessGrantControl extends Enum
{
    /**
    * The Enum ConditionalAccessGrantControl
    */
    const BLOCK = "block";
    const MFA = "mfa";
    const COMPLIANT_DEVICE = "compliantDevice";
    const DOMAIN_JOINED_DEVICE = "domainJoinedDevice";
    const APPROVED_APPLICATION = "approvedApplication";
    const COMPLIANT_APPLICATION = "compliantApplication";
    const PASSWORD_CHANGE = "passwordChange";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}