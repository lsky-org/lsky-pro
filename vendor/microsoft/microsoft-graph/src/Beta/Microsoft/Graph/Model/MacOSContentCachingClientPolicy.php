<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSContentCachingClientPolicy File
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
* MacOSContentCachingClientPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSContentCachingClientPolicy extends Enum
{
    /**
    * The Enum MacOSContentCachingClientPolicy
    */
    const NOT_CONFIGURED = "notConfigured";
    const CLIENTS_IN_LOCAL_NETWORK = "clientsInLocalNetwork";
    const CLIENTS_WITH_SAME_PUBLIC_IP_ADDRESS = "clientsWithSamePublicIpAddress";
    const CLIENTS_IN_CUSTOM_LOCAL_NETWORKS = "clientsInCustomLocalNetworks";
    const CLIENTS_IN_CUSTOM_LOCAL_NETWORKS_WITH_FALLBACK = "clientsInCustomLocalNetworksWithFallback";
}