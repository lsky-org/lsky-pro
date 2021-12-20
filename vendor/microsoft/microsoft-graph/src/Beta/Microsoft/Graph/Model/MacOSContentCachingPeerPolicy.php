<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSContentCachingPeerPolicy File
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
* MacOSContentCachingPeerPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSContentCachingPeerPolicy extends Enum
{
    /**
    * The Enum MacOSContentCachingPeerPolicy
    */
    const NOT_CONFIGURED = "notConfigured";
    const PEERS_IN_LOCAL_NETWORK = "peersInLocalNetwork";
    const PEERS_WITH_SAME_PUBLIC_IP_ADDRESS = "peersWithSamePublicIpAddress";
    const PEERS_IN_CUSTOM_LOCAL_NETWORKS = "peersInCustomLocalNetworks";
}