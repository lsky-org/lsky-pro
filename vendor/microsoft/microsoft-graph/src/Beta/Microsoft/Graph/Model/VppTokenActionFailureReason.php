<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenActionFailureReason File
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
* VppTokenActionFailureReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VppTokenActionFailureReason extends Enum
{
    /**
    * The Enum VppTokenActionFailureReason
    */
    const NONE = "none";
    const APPLE_FAILURE = "appleFailure";
    const INTERNAL_ERROR = "internalError";
    const EXPIRED_VPP_TOKEN = "expiredVppToken";
    const EXPIRED_APPLE_PUSH_NOTIFICATION_CERTIFICATE = "expiredApplePushNotificationCertificate";
}