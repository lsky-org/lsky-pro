<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyUploadedDefinitionFileStatus File
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
* GroupPolicyUploadedDefinitionFileStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyUploadedDefinitionFileStatus extends Enum
{
    /**
    * The Enum GroupPolicyUploadedDefinitionFileStatus
    */
    const NONE = "none";
    const UPLOAD_IN_PROGRESS = "uploadInProgress";
    const AVAILABLE = "available";
    const ASSIGNED = "assigned";
    const REMOVAL_IN_PROGRESS = "removalInProgress";
    const UPLOAD_FAILED = "uploadFailed";
    const REMOVAL_FAILED = "removalFailed";
}