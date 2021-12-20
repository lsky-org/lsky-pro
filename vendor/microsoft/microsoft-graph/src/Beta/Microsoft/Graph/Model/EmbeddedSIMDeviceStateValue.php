<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMDeviceStateValue File
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
* EmbeddedSIMDeviceStateValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmbeddedSIMDeviceStateValue extends Enum
{
    /**
    * The Enum EmbeddedSIMDeviceStateValue
    */
    const NOT_EVALUATED = "notEvaluated";
    const FAILED = "failed";
    const INSTALLING = "installing";
    const INSTALLED = "installed";
    const DELETING = "deleting";
    const ERROR = "error";
    const DELETED = "deleted";
    const REMOVED_BY_USER = "removedByUser";
}