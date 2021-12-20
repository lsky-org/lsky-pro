<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerActionType File
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
* ConfigurationManagerActionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerActionType extends Enum
{
    /**
    * The Enum ConfigurationManagerActionType
    */
    const REFRESH_MACHINE_POLICY = "refreshMachinePolicy";
    const REFRESH_USER_POLICY = "refreshUserPolicy";
    const WAKE_UP_CLIENT = "wakeUpClient";
    const APP_EVALUATION = "appEvaluation";
}