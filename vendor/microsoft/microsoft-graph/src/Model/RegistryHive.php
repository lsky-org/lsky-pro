<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistryHive File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* RegistryHive class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistryHive extends Enum
{
    /**
    * The Enum RegistryHive
    */
    const UNKNOWN = "unknown";
    const CURRENT_CONFIG = "currentConfig";
    const CURRENT_USER = "currentUser";
    const LOCAL_MACHINE_SAM = "localMachineSam";
    const LOCAL_MACHINE_SECURITY = "localMachineSecurity";
    const LOCAL_MACHINE_SOFTWARE = "localMachineSoftware";
    const LOCAL_MACHINE_SYSTEM = "localMachineSystem";
    const USERS_DEFAULT = "usersDefault";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}