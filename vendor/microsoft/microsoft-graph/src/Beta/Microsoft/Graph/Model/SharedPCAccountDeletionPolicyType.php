<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedPCAccountDeletionPolicyType File
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
* SharedPCAccountDeletionPolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedPCAccountDeletionPolicyType extends Enum
{
    /**
    * The Enum SharedPCAccountDeletionPolicyType
    */
    const IMMEDIATE = "immediate";
    const DISK_SPACE_THRESHOLD = "diskSpaceThreshold";
    const DISK_SPACE_THRESHOLD_OR_INACTIVE_THRESHOLD = "diskSpaceThresholdOrInactiveThreshold";
}