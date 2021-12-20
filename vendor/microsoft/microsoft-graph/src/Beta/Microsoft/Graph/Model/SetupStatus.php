<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SetupStatus File
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
* SetupStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SetupStatus extends Enum
{
    /**
    * The Enum SetupStatus
    */
    const UNKNOWN = "unknown";
    const NOT_REGISTERED_YET = "notRegisteredYet";
    const REGISTERED_SETUP_NOT_STARTED = "registeredSetupNotStarted";
    const REGISTERED_SETUP_IN_PROGRESS = "registeredSetupInProgress";
    const REGISTRATION_AND_SETUP_COMPLETED = "registrationAndSetupCompleted";
    const REGISTRATION_FAILED = "registrationFailed";
    const REGISTRATION_TIMED_OUT = "registrationTimedOut";
    const DISABLED = "disabled";
}