<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RequirementProvider File
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
* RequirementProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RequirementProvider extends Enum
{
    /**
    * The Enum RequirementProvider
    */
    const USER = "user";
    const REQUEST = "request";
    const SERVICE_PRINCIPAL = "servicePrincipal";
    const V1_CONDITIONAL_ACCESS = "v1ConditionalAccess";
    const MULTI_CONDITIONAL_ACCESS = "multiConditionalAccess";
    const TENANT_SESSION_RISK_POLICY = "tenantSessionRiskPolicy";
    const ACCOUNT_COMPROMISE_POLICIES = "accountCompromisePolicies";
    const V1_CONDITIONAL_ACCESS_DEPENDENCY = "v1ConditionalAccessDependency";
    const V1_CONDITIONAL_ACCESS_POLICY_ID_REQUESTED = "v1ConditionalAccessPolicyIdRequested";
    const MFA_REGISTRATION_REQUIRED_BY_IDENTITY_PROTECTION_POLICY = "mfaRegistrationRequiredByIdentityProtectionPolicy";
    const BASELINE_PROTECTION = "baselineProtection";
    const MFA_REGISTRATION_REQUIRED_BY_BASELINE_PROTECTION = "mfaRegistrationRequiredByBaselineProtection";
    const MFA_REGISTRATION_REQUIRED_BY_MULTI_CONDITIONAL_ACCESS = "mfaRegistrationRequiredByMultiConditionalAccess";
    const ENFORCED_FOR_CSP_ADMINS = "enforcedForCspAdmins";
    const SECURITY_DEFAULTS = "securityDefaults";
    const MFA_REGISTRATION_REQUIRED_BY_SECURITY_DEFAULTS = "mfaRegistrationRequiredBySecurityDefaults";
    const PROOF_UP_CODE_REQUEST = "proofUpCodeRequest";
    const CROSS_TENANT_OUTBOUND_RULE = "crossTenantOutboundRule";
    const GPS_LOCATION_CONDITION = "gpsLocationCondition";
    const RISK_BASED_POLICY = "riskBasedPolicy";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}