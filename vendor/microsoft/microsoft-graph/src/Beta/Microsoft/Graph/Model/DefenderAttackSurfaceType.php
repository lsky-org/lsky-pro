<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderAttackSurfaceType File
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
* DefenderAttackSurfaceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderAttackSurfaceType extends Enum
{
    /**
    * The Enum DefenderAttackSurfaceType
    */
    const USER_DEFINED = "userDefined";
    const BLOCK = "block";
    const AUDIT_MODE = "auditMode";
    const WARN = "warn";
    const DISABLE = "disable";
}