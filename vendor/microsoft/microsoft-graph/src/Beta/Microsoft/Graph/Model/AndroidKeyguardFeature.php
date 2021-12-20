<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidKeyguardFeature File
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
* AndroidKeyguardFeature class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidKeyguardFeature extends Enum
{
    /**
    * The Enum AndroidKeyguardFeature
    */
    const NOT_CONFIGURED = "notConfigured";
    const CAMERA = "camera";
    const NOTIFICATIONS = "notifications";
    const UNREDACTED_NOTIFICATIONS = "unredactedNotifications";
    const TRUST_AGENTS = "trustAgents";
    const FINGERPRINT = "fingerprint";
    const REMOTE_INPUT = "remoteInput";
    const ALL_FEATURES = "allFeatures";
}