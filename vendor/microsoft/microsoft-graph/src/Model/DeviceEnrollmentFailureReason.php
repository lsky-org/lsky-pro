<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentFailureReason File
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
* DeviceEnrollmentFailureReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentFailureReason extends Enum
{
    /**
    * The Enum DeviceEnrollmentFailureReason
    */
    const UNKNOWN = "unknown";
    const AUTHENTICATION = "authentication";
    const AUTHORIZATION = "authorization";
    const ACCOUNT_VALIDATION = "accountValidation";
    const USER_VALIDATION = "userValidation";
    const DEVICE_NOT_SUPPORTED = "deviceNotSupported";
    const IN_MAINTENANCE = "inMaintenance";
    const BAD_REQUEST = "badRequest";
    const FEATURE_NOT_SUPPORTED = "featureNotSupported";
    const ENROLLMENT_RESTRICTIONS_ENFORCED = "enrollmentRestrictionsEnforced";
    const CLIENT_DISCONNECTED = "clientDisconnected";
    const USER_ABANDONMENT = "userAbandonment";
}