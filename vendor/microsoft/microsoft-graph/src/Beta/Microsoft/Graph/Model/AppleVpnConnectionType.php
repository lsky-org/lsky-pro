<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVpnConnectionType File
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
* AppleVpnConnectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleVpnConnectionType extends Enum
{
    /**
    * The Enum AppleVpnConnectionType
    */
    const CISCO_ANY_CONNECT = "ciscoAnyConnect";
    const PULSE_SECURE = "pulseSecure";
    const F5_EDGE_CLIENT = "f5EdgeClient";
    const DELL_SONIC_WALL_MOBILE_CONNECT = "dellSonicWallMobileConnect";
    const CHECK_POINT_CAPSULE_VPN = "checkPointCapsuleVpn";
    const CUSTOM_VPN = "customVpn";
    const CISCO_IP_SEC = "ciscoIPSec";
    const CITRIX = "citrix";
    const CISCO_ANY_CONNECT_V2 = "ciscoAnyConnectV2";
    const PALO_ALTO_GLOBAL_PROTECT = "paloAltoGlobalProtect";
    const ZSCALER_PRIVATE_ACCESS = "zscalerPrivateAccess";
    const F5_ACCESS2018 = "f5Access2018";
    const CITRIX_SSO = "citrixSso";
    const PALO_ALTO_GLOBAL_PROTECT_V2 = "paloAltoGlobalProtectV2";
    const IK_EV2 = "ikEv2";
    const ALWAYS_ON = "alwaysOn";
    const MICROSOFT_TUNNEL = "microsoftTunnel";
    const NET_MOTION_MOBILITY = "netMotionMobility";
    const MICROSOFT_PROTECT = "microsoftProtect";
}