<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerClientState File
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
* ConfigurationManagerClientState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerClientState extends Enum
{
    /**
    * The Enum ConfigurationManagerClientState
    */
    const UNKNOWN = "unknown";
    const INSTALLED = "installed";
    const HEALTHY = "healthy";
    const INSTALL_FAILED = "installFailed";
    const UPDATE_FAILED = "updateFailed";
    const COMMUNICATION_ERROR = "communicationError";
}