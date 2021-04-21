<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthMethodsType File
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
* AuthMethodsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthMethodsType extends Enum
{
    /**
    * The Enum AuthMethodsType
    */
    const EMAIL = "email";
    const MOBILE_SMS = "mobileSMS";
    const MOBILE_PHONE = "mobilePhone";
    const OFFICE_PHONE = "officePhone";
    const SECURITY_QUESTION = "securityQuestion";
    const APP_NOTIFICATION = "appNotification";
    const APP_NOTIFICATION_CODE = "appNotificationCode";
    const APP_NOTIFICATION_AND_CODE = "appNotificationAndCode";
    const APP_PASSWORD = "appPassword";
    const FIDO = "fido";
    const ALTERNATE_MOBILE_PHONE = "alternateMobilePhone";
    const MOBILE_PHONE_AND_SMS = "mobilePhoneAndSMS";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}