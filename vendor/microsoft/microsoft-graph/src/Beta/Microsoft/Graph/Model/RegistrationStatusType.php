<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RegistrationStatusType File
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
* RegistrationStatusType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RegistrationStatusType extends Enum
{
    /**
    * The Enum RegistrationStatusType
    */
    const REGISTERED = "registered";
    const ENABLED = "enabled";
    const CAPABLE = "capable";
    const MFA_REGISTERED = "mfaRegistered";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}