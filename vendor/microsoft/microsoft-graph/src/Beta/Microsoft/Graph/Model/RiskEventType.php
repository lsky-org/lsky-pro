<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskEventType File
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
* RiskEventType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RiskEventType extends Enum
{
    /**
    * The Enum RiskEventType
    */
    const UNLIKELY_TRAVEL = "unlikelyTravel";
    const ANONYMIZED_IP_ADDRESS = "anonymizedIPAddress";
    const MALICIOUS_IP_ADDRESS = "maliciousIPAddress";
    const UNFAMILIAR_FEATURES = "unfamiliarFeatures";
    const MALWARE_INFECTED_IP_ADDRESS = "malwareInfectedIPAddress";
    const SUSPICIOUS_IP_ADDRESS = "suspiciousIPAddress";
    const LEAKED_CREDENTIALS = "leakedCredentials";
    const INVESTIGATIONS_THREAT_INTELLIGENCE = "investigationsThreatIntelligence";
    const GENERIC = "generic";
    const ADMIN_CONFIRMED_USER_COMPROMISED = "adminConfirmedUserCompromised";
    const MCAS_IMPOSSIBLE_TRAVEL = "mcasImpossibleTravel";
    const MCAS_SUSPICIOUS_INBOX_MANIPULATION_RULES = "mcasSuspiciousInboxManipulationRules";
    const INVESTIGATIONS_THREAT_INTELLIGENCE_SIGNIN_LINKED = "investigationsThreatIntelligenceSigninLinked";
    const MALICIOUS_IP_ADDRESS_VALID_CREDENTIALS_BLOCKED_IP = "maliciousIPAddressValidCredentialsBlockedIP";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}