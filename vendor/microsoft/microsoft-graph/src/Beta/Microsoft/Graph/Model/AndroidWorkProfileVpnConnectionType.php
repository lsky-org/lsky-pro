<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileVpnConnectionType File
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
* AndroidWorkProfileVpnConnectionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileVpnConnectionType extends Enum
{
    /**
    * The Enum AndroidWorkProfileVpnConnectionType
    */
    const CISCO_ANY_CONNECT = "ciscoAnyConnect";
    const PULSE_SECURE = "pulseSecure";
    const F5_EDGE_CLIENT = "f5EdgeClient";
    const DELL_SONIC_WALL_MOBILE_CONNECT = "dellSonicWallMobileConnect";
    const CHECK_POINT_CAPSULE_VPN = "checkPointCapsuleVpn";
    const CITRIX = "citrix";
    const PALO_ALTO_GLOBAL_PROTECT = "paloAltoGlobalProtect";
    const MICROSOFT_TUNNEL = "microsoftTunnel";
    const NET_MOTION_MOBILITY = "netMotionMobility";
    const MICROSOFT_PROTECT = "microsoftProtect";
}