<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationProfileState File
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
* EducationSynchronizationProfileState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationProfileState extends Enum
{
    /**
    * The Enum EducationSynchronizationProfileState
    */
    const DELETING = "deleting";
    const DELETION_FAILED = "deletionFailed";
    const PROVISIONING_FAILED = "provisioningFailed";
    const PROVISIONED = "provisioned";
    const PROVISIONING = "provisioning";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}