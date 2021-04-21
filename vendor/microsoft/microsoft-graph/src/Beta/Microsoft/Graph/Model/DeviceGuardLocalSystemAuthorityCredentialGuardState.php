<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardLocalSystemAuthorityCredentialGuardState File
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
* DeviceGuardLocalSystemAuthorityCredentialGuardState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceGuardLocalSystemAuthorityCredentialGuardState extends Enum
{
    /**
    * The Enum DeviceGuardLocalSystemAuthorityCredentialGuardState
    */
    const RUNNING = "running";
    const REBOOT_REQUIRED = "rebootRequired";
    const NOT_LICENSED = "notLicensed";
    const NOT_CONFIGURED = "notConfigured";
    const VIRTUALIZATION_BASED_SECURITY_NOT_RUNNING = "virtualizationBasedSecurityNotRunning";
}