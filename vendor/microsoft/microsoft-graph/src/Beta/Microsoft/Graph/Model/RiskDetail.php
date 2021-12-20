<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskDetail File
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
* RiskDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskDetail extends Enum
{
    /**
    * The Enum RiskDetail
    */
    const NONE = "none";
    const ADMIN_GENERATED_TEMPORARY_PASSWORD = "adminGeneratedTemporaryPassword";
    const USER_PERFORMED_SECURED_PASSWORD_CHANGE = "userPerformedSecuredPasswordChange";
    const USER_PERFORMED_SECURED_PASSWORD_RESET = "userPerformedSecuredPasswordReset";
    const ADMIN_CONFIRMED_SIGNIN_SAFE = "adminConfirmedSigninSafe";
    const AI_CONFIRMED_SIGNIN_SAFE = "aiConfirmedSigninSafe";
    const USER_PASSED_MFA_DRIVEN_BY_RISK_BASED_POLICY = "userPassedMFADrivenByRiskBasedPolicy";
    const ADMIN_DISMISSED_ALL_RISK_FOR_USER = "adminDismissedAllRiskForUser";
    const ADMIN_CONFIRMED_SIGNIN_COMPROMISED = "adminConfirmedSigninCompromised";
    const HIDDEN = "hidden";
    const ADMIN_CONFIRMED_USER_COMPROMISED = "adminConfirmedUserCompromised";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}