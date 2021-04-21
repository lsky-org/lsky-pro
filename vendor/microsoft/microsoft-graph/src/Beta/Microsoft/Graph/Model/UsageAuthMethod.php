<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UsageAuthMethod File
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
* UsageAuthMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UsageAuthMethod extends Enum
{
    /**
    * The Enum UsageAuthMethod
    */
    const EMAIL = "email";
    const MOBILE_SMS = "mobileSMS";
    const MOBILE_CALL = "mobileCall";
    const OFFICE_PHONE = "officePhone";
    const SECURITY_QUESTION = "securityQuestion";
    const APP_NOTIFICATION = "appNotification";
    const APP_CODE = "appCode";
    const ALTERNATE_MOBILE_CALL = "alternateMobileCall";
    const FIDO = "fido";
    const APP_PASSWORD = "appPassword";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}