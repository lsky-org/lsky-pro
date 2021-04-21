<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderApplicationControlSupplementalPolicyStatuses File
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
* WindowsDefenderApplicationControlSupplementalPolicyStatuses class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderApplicationControlSupplementalPolicyStatuses extends Enum
{
    /**
    * The Enum WindowsDefenderApplicationControlSupplementalPolicyStatuses
    */
    const UNKNOWN = "unknown";
    const SUCCESS = "success";
    const TOKEN_ERROR = "tokenError";
    const NOT_AUTHORIZED_BY_TOKEN = "notAuthorizedByToken";
    const POLICY_NOT_FOUND = "policyNotFound";
}