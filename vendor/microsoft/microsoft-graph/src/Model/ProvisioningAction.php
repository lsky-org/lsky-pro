<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningAction File
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
* ProvisioningAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningAction extends Enum
{
    /**
    * The Enum ProvisioningAction
    */
    const OTHER = "other";
    const CREATE = "create";
    const DELETE = "delete";
    const DISABLE = "disable";
    const UPDATE = "update";
    const STAGED_DELETE = "stagedDelete";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}