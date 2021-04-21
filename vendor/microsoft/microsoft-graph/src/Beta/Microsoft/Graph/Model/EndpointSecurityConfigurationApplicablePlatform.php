<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndpointSecurityConfigurationApplicablePlatform File
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
* EndpointSecurityConfigurationApplicablePlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndpointSecurityConfigurationApplicablePlatform extends Enum
{
    /**
    * The Enum EndpointSecurityConfigurationApplicablePlatform
    */
    const UNKNOWN = "unknown";
    const MAC_OS = "macOS";
    const WINDOWS10_AND_LATER = "windows10AndLater";
    const WINDOWS10_AND_WINDOWS_SERVER = "windows10AndWindowsServer";
}