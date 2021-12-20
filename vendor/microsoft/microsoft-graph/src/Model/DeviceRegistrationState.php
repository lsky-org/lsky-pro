<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceRegistrationState File
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
* DeviceRegistrationState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceRegistrationState extends Enum
{
    /**
    * The Enum DeviceRegistrationState
    */
    const NOT_REGISTERED = "notRegistered";
    const REGISTERED = "registered";
    const REVOKED = "revoked";
    const KEY_CONFLICT = "keyConflict";
    const APPROVAL_PENDING = "approvalPending";
    const CERTIFICATE_RESET = "certificateReset";
    const NOT_REGISTERED_PENDING_ENROLLMENT = "notRegisteredPendingEnrollment";
    const UNKNOWN = "unknown";
}