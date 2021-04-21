<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnectionHealthCheckErrorType File
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
* CloudPcOnPremisesConnectionHealthCheckErrorType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnectionHealthCheckErrorType extends Enum
{
    /**
    * The Enum CloudPcOnPremisesConnectionHealthCheckErrorType
    */
    const DNS_CHECK_FQDN_NOT_FOUND = "dnsCheckFqdnNotFound";
    const DNS_CHECK_UNKNOWN_ERROR = "dnsCheckUnknownError";
    const AD_JOIN_CHECK_FQDN_NOT_FOUND = "adJoinCheckFqdnNotFound";
    const AD_JOIN_CHECK_INCORRECT_CREDENTIALS = "adJoinCheckIncorrectCredentials";
    const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_NOT_FOUND = "adJoinCheckOrganizationalUnitNotFound";
    const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_INCORRECT_FORMAT = "adJoinCheckOrganizationalUnitIncorrectFormat";
    const AD_JOIN_CHECK_UNKNOWN_ERROR = "adJoinCheckUnknownError";
    const ENDPOINT_CONNECTIVITY_CHECK_URL_NOT_WHITELISTED = "endpointConnectivityCheckUrlNotWhitelisted";
    const ENDPOINT_CONNECTIVITY_CHECK_UNKNOWN_ERROR = "endpointConnectivityCheckUnknownError";
    const AAD_CONNECTIVITY_CHECK_UNKNOWN_ERROR = "aadConnectivityCheckUnknownError";
    const RESOURCE_AVAILABILITY_CHECK_NO_SUBNET_IP = "resourceAvailabilityCheckNoSubnetIP";
    const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_DISABLED = "resourceAvailabilityCheckSubscriptionDisabled";
    const RESOURCE_AVAILABILITY_CHECK_UNKNOWN_ERROR = "resourceAvailabilityCheckUnknownError";
    const PERMISSION_CHECK_NO_SUBSCRIPTION_READER_ROLE = "permissionCheckNoSubscriptionReaderRole";
    const PERMISSION_CHECK_NO_RESOURCE_GROUP_OWNER_ROLE = "permissionCheckNoResourceGroupOwnerRole";
    const PERMISSION_CHECK_NO_V_NET_CONTRIBUTOR_ROLE = "permissionCheckNoVNetContributorRole";
    const PERMISSION_CHECK_UNKNOWN_ERROR = "permissionCheckUnknownError";
    const INTERNAL_SERVER_UNKNOWN_ERROR = "internalServerUnknownError";
}