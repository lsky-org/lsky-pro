<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSystemExtensionType File
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
* MacOSSystemExtensionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSystemExtensionType extends Enum
{
    /**
    * The Enum MacOSSystemExtensionType
    */
    const DRIVER_EXTENSIONS_ALLOWED = "driverExtensionsAllowed";
    const NETWORK_EXTENSIONS_ALLOWED = "networkExtensionsAllowed";
    const ENDPOINT_SECURITY_EXTENSIONS_ALLOWED = "endpointSecurityExtensionsAllowed";
}